<?php
include 'includes/db_connect.php';

// Handle different parameter combinations
$id = null;
$category = null;
$university = null;
$subject = null;
$program = null;

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
} elseif (isset($_GET['program'])) {
    $program = $_GET['program'];
} elseif (isset($_GET['category'])) {
    $category = $_GET['category'];
    $university = $_GET['university'] ?? null;
    $subject = $_GET['subject'] ?? null;
} else {
    die("Invalid parameters. Please provide either course ID, program name, or category information.");
}

// Build query based on parameters
if ($id) {
    $sql = "SELECT p.id, p.class, c.category, p.price, p.discount_price, p.image, p.description
            FROM programs p
            LEFT JOIN categories c ON p.category_id = c.id
            WHERE p.id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
} elseif ($program) {
    $sql = "SELECT p.id, p.class, c.category, p.price, p.discount_price, p.image, p.description
            FROM programs p
            LEFT JOIN categories c ON p.category_id = c.id
            WHERE p.class = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $program);
} else {
    // Handle category-based queries
    $where_conditions = [];
    $params = [];
    $types = "";

    if ($category) {
        if ($category === 'technology' && $university) {
            // Map university codes to category names
            $university_map = [
                'buet' => 'Engineering',
                'cuet' => 'Engineering',
                'kuet' => 'Engineering',
                'sust' => 'Engineering',
                'hstu' => 'Engineering',
                'mbstu' => 'Engineering'
            ];

            if (isset($university_map[$university])) {
                $where_conditions[] = "c.category = ?";
                $params[] = $university_map[$university];
                $types .= "s";
            }
        } elseif ($category === 'medical' && $university) {
            $university_map = [
                'dhaka_medical' => 'Medical',
                'dental_college' => 'Medical',
                'pharmacy_college' => 'Medical'
            ];

            if (isset($university_map[$university])) {
                $where_conditions[] = "c.category = ?";
                $params[] = $university_map[$university];
                $types .= "s";
            }
        } elseif ($category === 'science' && $subject) {
            $subject_map = [
                'physics' => 'Science',
                'chemistry' => 'Science',
                'biology' => 'Science'
            ];

            if (isset($subject_map[$subject])) {
                $where_conditions[] = "c.category = ?";
                $params[] = $subject_map[$subject];
                $types .= "s";
            }
        } elseif ($category === 'business' && $subject) {
            $subject_map = [
                'accounting' => 'Business',
                'marketing' => 'Business',
                'finance' => 'Business'
            ];

            if (isset($subject_map[$subject])) {
                $where_conditions[] = "c.category = ?";
                $params[] = $subject_map[$subject];
                $types .= "s";
            }
        } elseif ($category === 'humanities' && $subject) {
            $subject_map = [
                'bengali' => 'Humanities',
                'english' => 'Humanities',
                'history' => 'Humanities'
            ];

            if (isset($subject_map[$subject])) {
                $where_conditions[] = "c.category = ?";
                $params[] = $subject_map[$subject];
                $types .= "s";
            }
        }
    }

    if (empty($where_conditions)) {
        die("No matching courses found for the selected criteria.");
    }

    $sql = "SELECT p.id, p.class, c.category, p.price, p.discount_price, p.image, p.description
            FROM programs p
            LEFT JOIN categories c ON p.category_id = c.id
            WHERE " . implode(" AND ", $where_conditions) . "
            ORDER BY p.id LIMIT 1";

    $stmt = $conn->prepare($sql);
    if (!empty($params)) {
        $stmt->bind_param($types, ...$params);
    }
}

$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    die("Course not found for the selected criteria.");
}

$row = $result->fetch_assoc();
$id = $row['id']; // Ensure we have the ID for enrollment

if (session_status() == PHP_SESSION_NONE) session_start();

// Handle Enrollment (only for non-admins)
$enroll_message = '';
if (isset($_POST['enroll'])) {
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php?redirect=course_details.php?id=" . $id);
        exit();
    }

    // Query the role from db
    $role_sql = "SELECT role FROM users WHERE id = ?";
    $role_stmt = $conn->prepare($role_sql);
    $role_stmt->bind_param("i", $_SESSION['user_id']);
    $role_stmt->execute();
    $role_result = $role_stmt->get_result();
    $role_row = $role_result->fetch_assoc();
    $role = $role_row['role'];
    $role_stmt->close();

    // Check if user is admin
    if ($role === 'admin') {
        $enroll_message = "Admins cannot enroll in courses.";
    } else {
        $user_id = $_SESSION['user_id'];
        $program_id = $id;

        // Check if already enrolled
        $check_sql = "SELECT * FROM enrollments WHERE user_id = ? AND program_id = ?";
        $check_stmt = $conn->prepare($check_sql);
        $check_stmt->bind_param("ii", $user_id, $program_id);
        $check_stmt->execute();
        $check_result = $check_stmt->get_result();

        if ($check_result->num_rows == 0) {
            // Redirect to payment page with program ID
            header("Location: payment.php?program_id=" . $id);
            exit();
        } else {
            $enroll_message = "You are already enrolled in this course.";
        }
        $check_stmt->close();
    }
}

include 'includes/header.php';
?>

    <section class="py-10 px-4 max-w-2xl mx-auto">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="relative h-64">
                <img src="<?php echo htmlspecialchars($row["image"] ? $row["image"] : 'uploads/class_6.jpeg'); ?>" alt="<?php echo htmlspecialchars($row["class"]); ?>" class="w-full h-full object-cover">
            </div>
            <div class="p-6">
                <h2 class="text-2xl font-bold text-purple-700 mb-4"><?php echo htmlspecialchars($row["class"]); ?></h2>
                <p class="text-gray-700 mb-4"><strong>Category:</strong> <?php echo htmlspecialchars($row["category"]); ?></p>
                <p class="text-gray-700 mb-4"><strong>Original Price:</strong> ৳<?php echo htmlspecialchars($row["price"]); ?> টাকা</p>
                <?php if ($row["discount_price"] !== null): ?>
                    <p class="text-green-600 mb-4"><strong>Discount Price:</strong> ৳<?php echo htmlspecialchars($row["discount_price"]); ?> টাকা</p>
                <?php endif; ?>
                <p class="text-gray-700 mb-4"><strong>Description:</strong> <?php echo htmlspecialchars($row["description"] ? $row["description"] : 'No description available.'); ?></p>
                <?php if (isset($enroll_message)): ?>
                    <p class="text-center mb-4 <?php echo strpos($enroll_message, 'Success') !== false ? 'text-green-500' : 'text-red-500'; ?>"><?php echo htmlspecialchars($enroll_message); ?></p>
                <?php endif; ?>
                <?php
                if (isset($_SESSION['user_id'])) {
                    $role_sql = "SELECT role FROM users WHERE id = ?";
                    $role_stmt = $conn->prepare($role_sql);
                    $role_stmt->bind_param("i", $_SESSION['user_id']);
                    $role_stmt->execute();
                    $role_result = $role_stmt->get_result();
                    $role_row = $role_result->fetch_assoc();
                    $role = $role_row['role'];
                    $role_stmt->close();

                    if ($role === 'admin') {
                        echo '<p class="text-center text-red-500 mb-4">Admins cannot enroll in courses.</p>';
                    } else {
                        echo '<form method="POST" action="">
                            <button type="submit" name="enroll" class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-800">Enroll Now</button>
                        </form>';
                    }
                } else {
                    echo '<form method="POST" action="">
                        <button type="submit" name="enroll" class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-800">Enroll Now</button>
                    </form>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="py-10 px-4 max-w-2xl mx-auto">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-2xl font-bold text-purple-700 mb-4">Reviews</h2>
            <?php
            $review_sql = "SELECT r.rating, r.review_text, r.created_at, u.name FROM reviews r JOIN users u ON r.user_id = u.id WHERE r.program_id = ? ORDER BY r.created_at DESC";
            $review_stmt = $conn->prepare($review_sql);
            $review_stmt->bind_param("i", $id);
            $review_stmt->execute();
            $review_result = $review_stmt->get_result();
            if ($review_result->num_rows > 0) {
                while($review = $review_result->fetch_assoc()) {
                    echo '<div class="bg-gray-100 p-4 rounded-lg mb-4">';
                    echo '<p class="font-semibold">' . htmlspecialchars($review['name']) . '</p>';
                    echo '<p class="text-yellow-500">Rating: ' . str_repeat('★', $review['rating']) . '</p>';
                    echo '<p>' . htmlspecialchars($review['review_text']) . '</p>';
                    echo '<p class="text-gray-500 text-sm">' . htmlspecialchars($review['created_at']) . '</p>';
                    echo '</div>';
                }
            } else {
                echo '<p>No reviews yet.</p>';
            }
            $review_stmt->close();
            ?>
        </div>
    </section>

<?php
$stmt->close();
$conn->close();
include 'includes/footer.php';
?>

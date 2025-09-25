<?php
session_start();
include 'includes/db_connect.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php?redirect=add_review.php");
    exit();
}

$user_id = $_SESSION['user_id'];

if (!isset($_GET['program_id']) || !is_numeric($_GET['program_id'])) {
    header("Location: dashboard.php");
    exit();
}

$program_id = intval($_GET['program_id']);

// Check if user has finished the course
$check_finished_sql = "SELECT * FROM enrollments WHERE user_id = ? AND program_id = ? AND status = 'finished'";
$check_finished_stmt = $conn->prepare($check_finished_sql);
$check_finished_stmt->bind_param("ii", $user_id, $program_id);
$check_finished_stmt->execute();
$check_finished_result = $check_finished_stmt->get_result();

if ($check_finished_result->num_rows == 0) {
    header("Location: dashboard.php");
    exit();
}

$check_finished_stmt->close();

// Check if already reviewed
$check_review_sql = "SELECT * FROM reviews WHERE user_id = ? AND program_id = ?";
$check_review_stmt = $conn->prepare($check_review_sql);
$check_review_stmt->bind_param("ii", $user_id, $program_id);
$check_review_stmt->execute();
$check_review_result = $check_review_stmt->get_result();

if ($check_review_result->num_rows > 0) {
    header("Location: dashboard.php");
    exit();
}

$check_review_stmt->close();

// Handle Add Review
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_review'])) {
    $rating = $_POST['rating'];
    $review_text = $_POST['review_text'];
    $insert_review_sql = "INSERT INTO reviews (user_id, program_id, rating, review_text) VALUES (?, ?, ?, ?)";
    $insert_review_stmt = $conn->prepare($insert_review_sql);
    $insert_review_stmt->bind_param("iiis", $user_id, $program_id, $rating, $review_text);
    if ($insert_review_stmt->execute()) {
        header("Location: dashboard.php?review_added=1");
        exit();
    } else {
        $review_message = "Error adding review.";
    }
    $insert_review_stmt->close();
}

include 'includes/header.php';

// Fetch program details
$program_sql = "SELECT class, category FROM programs WHERE id = ?";
$program_stmt = $conn->prepare($program_sql);
$program_stmt->bind_param("i", $program_id);
$program_stmt->execute();
$program_result = $program_stmt->get_result();
$program = $program_result->fetch_assoc();
$program_stmt->close();
?>

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <section class="text-center mb-16">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">Add Review</h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Share your experience with the course: <?php echo htmlspecialchars($program['class']); ?> - <?php echo htmlspecialchars($program['category']); ?>
        </p>
    </section>

    <section class="bg-white rounded-lg shadow-lg p-8 max-w-2xl mx-auto">
        <?php if (isset($review_message)): ?>
            <p class="text-center mb-4 <?php echo strpos($review_message, 'Success') !== false ? 'text-green-500' : 'text-red-500'; ?>"><?php echo htmlspecialchars($review_message); ?></p>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="mb-4">
                <label for="rating" class="block text-gray-700 mb-2">Rating</label>
                <select id="rating" name="rating" class="w-full p-3 border rounded-lg" required>
                    <option value="1">1 Star</option>
                    <option value="2">2 Stars</option>
                    <option value="3">3 Stars</option>
                    <option value="4">4 Stars</option>
                    <option value="5">5 Stars</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="review_text" class="block text-gray-700 mb-2">Review</label>
                <textarea id="review_text" name="review_text" class="w-full p-3 border rounded-lg" rows="5" required></textarea>
            </div>
            <div class="text-center">
                <button type="submit" name="add_review" class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-800">Submit Review</button>
                <a href="dashboard.php" class="ml-4 bg-gray-600 text-white px-6 py-3 rounded-lg hover:bg-gray-800">Cancel</a>
            </div>
        </form>
    </section>
</main>

<?php
$conn->close();
include 'includes/footer.php';
?>

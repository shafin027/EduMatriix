<!-- Finished Courses -->
    <section class="mb-16">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">সম্পন্ন কোর্স</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            if ($finished_result->num_rows > 0) {
                while($row = $finished_result->fetch_assoc()) {
                    $imagePath = $row["image"] ? $row["image"] : 'uploads/class_6.jpeg';
                    echo '<div class="bg-white rounded-lg shadow-lg overflow-hidden">
                            <div class="relative h-64">
                                <img src="' . htmlspecialchars($imagePath) . '" alt="' . htmlspecialchars($row["class"]) . '" class="w-full h-full object-cover">
                            </div>
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">' . htmlspecialchars($row["class"]) . '</h3>
                                <p class="text-gray-600 mb-4">' . htmlspecialchars($row["category"]) . '</p>';
                    
                    // Check if already reviewed
                    $check_review_sql = "SELECT * FROM reviews WHERE user_id = ? AND program_id = ?";
                    $check_review_stmt = $conn->prepare($check_review_sql);
                    $check_review_stmt->bind_param("ii", $user_id, $row["program_id"]);
                    $check_review_stmt->execute();
                    $check_review_result = $check_review_stmt->get_result();
                    
                    if ($check_review_result->num_rows > 0) {
                        echo '<p class="text-gray-600">Already Reviewed</p>';
                    } else {
                        echo '<a href="add_review.php?program_id=' . $row["program_id"] . '" class="inline-block bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Add Review</a>';
                    }
                    
                    $check_review_stmt->close();
                    
                    echo '</div>';
                }
            } else {
                echo "<p class='text-center text-gray-600'>আপনি এখনও কোন কোর্স সম্পন্ন করেননি।</p>";
            }
            ?>
        </div>
    </section>

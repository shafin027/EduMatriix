<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header("Cache-Control: no-cache, must-revalidate");
include 'includes/header.php';
include 'includes/db_connect.php';

// Check database connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Fetch categories and images from the categories table
$categories = [];
$categories_sql = "SELECT category, image FROM categories"; // Removed GROUP BY
$categories_result = $conn->query($categories_sql);

if ($categories_result === false) {
    echo "Categories Query Error: " . $conn->error . "<br>";
} elseif ($categories_result->num_rows > 0) {
    while ($row = $categories_result->fetch_assoc()) {
        // Ensure image path uses 'uploads/' (lowercase)
        $image = $row['image'] ? str_replace('Uploads/', 'uploads/', $row['image']) : null;
        // Debug: Log the image path being used
        error_log("Image path for category '" . $row['category'] . "': " . $image);
        $categories[$row['category']] = $image;
    }
} else {
    echo "Warning: No categories found in the 'categories' table.<br>";
}
?>


    <!-- Video Banner Section - Keeping as is -->
    <section class="relative h-96">
        <video autoplay muted loop class="absolute top-0 left-0 w-full h-full object-cover" style="pointer-events: none;">
            <source src="/EduMatrix/videos/intro.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="absolute inset-0 bg-black bg-opacity-20 flex flex-col items-center justify-center z-10">
            <h1 class="text-4xl font-bold text-white mb-4">Welcome to Edu Matrix</h1>
            <p class="text-lg text-white mb-6">Empowering Your Academic Journey</p>
            <a href="/EduMatrix/programs.php" class="bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-purple-800">Explore Programs</a>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-4 gap-8 text-center">
                <div class="transform transition duration-300 hover:scale-105">
                    <h3 class="text-4xl font-bold text-purple-600 mb-2">৩০ লক্ষ+</h3>
                    <p class="text-gray-600">শিক্ষার্থী</p>
                </div>
                <div class="transform transition duration-300 hover:scale-105">
                    <h3 class="text-4xl font-bold text-purple-600 mb-2">২০ লক্ষ+</h3>
                    <p class="text-gray-600">অ্যাপ ডাউনলোড</p>
                </div>
                <div class="transform transition duration-300 hover:scale-105">
                    <h3 class="text-4xl font-bold text-purple-600 mb-2">২০ লক্ষ+</h3>
                    <p class="text-gray-600">অ্যাক্টিভ ইউজার</p>
                </div>
                <div class="transform transition duration-300 hover:scale-105">
                    <h3 class="text-4xl font-bold text-purple-600 mb-2">১.৮ লক্ষ+</h3>
                    <p class="text-gray-600">ক্লাস টিউটোরিয়াল</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
<section class="relative w-full h-[700px]">
    <div class="absolute inset-0">
        <img
            src="https://res.cloudinary.com/cross-border-education-technologies-pte-ltd/image/upload/q_auto:eco/f_auto/c_scale,w_auto/v1721890721/Shikho%20Website%20V3/Shikho%20New%20Hero%20Image%20-%20July%202024/desktop_version_sn7dpn"
            alt="EduMatrix Banner"
            class="w-full h-full object-cover object-center"
        >
    </div>
    <div class="absolute inset-0 bg-black bg-opacity-20 z-0"></div>
    <div class="absolute inset-0 flex flex-col justify-center items-center text-center p-4 z-10">
        <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">একাডেমিক যাত্রা</h1>
        <p class="text-lg md:text-xl text-white mb-6">প্রস্তুতি নাও দেশ সেরা শিক্ষকদের সাথে</p>
        <div class="flex flex-col sm:flex-row gap-4">
            <a href="/EduMatrix/programs.php" class="bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-purple-700 transition duration-300 inline-block text-center">
                অ্যাকাডেমিক প্রোগ্রাম দেখো
            </a>
            <a href="/EduMatrix/signup.php" class="bg-white text-purple-600 px-6 py-3 rounded-lg hover:bg-gray-100 transition duration-300 inline-block text-center">
                বিনামূল্যে চেষ্টা করো
            </a>
        </div>
    </div>
</section>
    <!-- Academic Programs Section -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">মাধ্যমিক ও উচ্চমাধ্যমিকের পড়ালেখা এবং পরীক্ষা প্রস্তুতির পূর্ণাঙ্গ প্রোগ্রাম</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                    <img src="/EduMatrix/images/icons/academic.svg" alt="Academic" class="w-16 h-16 mx-auto mb-4">
                    <h3 class="text-xl font-semibold text-center mb-2">একাডেমিক প্রোগ্রাম</h3>
                    <p class="text-gray-600 text-center">ক্লাস ৬-১২, এইচএসসি ২০২৪-২৫ ও ভর্তি পরীক্ষা</p>
                </div>
                
                <!-- Card 2 -->
                <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                    <img src="/EduMatrix/images/icons/skills.svg" alt="Skills" class="w-16 h-16 mx-auto mb-4">
                    <h3 class="text-xl font-semibold text-center mb-2">স্কিল ডেভেলপমেন্ট</h3>
                    <p class="text-gray-600 text-center">স্পোকেন ইংলিশ, মাইক্রোসফট অফিস, ওয়েব ডেভেলপমেন্ট</p>
                </div>
                
                <!-- Card 3 -->
                <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                    <img src="/EduMatrix/images/icons/job.svg" alt="Job" class="w-16 h-16 mx-auto mb-4">
                    <h3 class="text-xl font-semibold text-center mb-2">জব প্রিপারেশন</h3>
                    <p class="text-gray-600 text-center">বিসিএস, ব্যাংক জবস, প্রাইমারি-নন ক্যাডার</p>
                </div>
                
                <!-- Card 4 -->
                <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                    <img src="/EduMatrix/images/icons/admission.svg" alt="Admission" class="w-16 h-16 mx-auto mb-4">
                    <h3 class="text-xl font-semibold text-center mb-2">ভর্তি পরীক্ষা</h3>
                    <p class="text-gray-600 text-center">মেডিকেল, ইঞ্জিনিয়ারিং, বিশ্ববিদ্যালয়</p>
                </div>
            </div>
        </div>
    </section>

<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <!-- Investors Section -->
        <h2 class="text-3xl font-bold text-center mb-10">আমাদের ইনভেস্টর</h2>
        <div class="overflow-hidden">
            <style>
                @keyframes scroll {
                    0% { transform: translateX(0%); }
                    100% { transform: translateX(-50%); }
                }
                .scroll-container {
                    display: flex;
                    animation: scroll 30s linear infinite;
                    white-space: nowrap;
                }
                .scroll-container:hover {
                    animation-play-state: paused;
                }
            </style>
            <div class="scroll-container space-x-8">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/IBM_logo.svg" alt="IBM" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/96/Microsoft_logo_%282012%29.svg" alt="Microsoft" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" alt="Apple" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg" alt="Amazon" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Netflix_2015_logo.svg" alt="Netflix" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/24/Samsung_Logo.svg" alt="Samsung" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/AMD_Logo.svg" alt="AMD" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/39/PayPal_logo.svg" alt="PayPal" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b1/Salesforce_logo.svg" alt="Salesforce" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/59/Oracle_Cloud_logo.svg" alt="Oracle" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/BMW.svg" alt="BMW" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/31/Tesla_Motors_logo.svg" alt="Tesla" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/IBM_logo.svg" alt="IBM" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/96/Microsoft_logo_%282012%29.svg" alt="Microsoft" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" alt="Apple" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg" alt="Amazon" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Netflix_2015_logo.svg" alt="Netflix" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/e/e5/Meta_Platforms_Inc._logo.svg" alt="Meta" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/4a/Intel_logo_2020.svg" alt="Intel" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/24/Samsung_Logo.svg" alt="Samsung" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/AMD_Logo.svg" alt="AMD" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/39/PayPal_logo.svg" alt="PayPal" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b1/Salesforce_logo.svg" alt="Salesforce" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/59/Oracle_Cloud_logo.svg" alt="Oracle" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/BMW.svg" alt="BMW" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/31/Tesla_Motors_logo.svg" alt="Tesla" class="h-16 inline-block">
            </div>
        </div>

        <!-- Partners Section -->
        <h2 class="text-3xl font-bold text-center mt-16 mb-10">আমাদের পার্টনার</h2>
        <div class="overflow-hidden">
            <style>
                @keyframes scroll {
                    0% { transform: translateX(0%); }
                    100% { transform: translateX(-50%); }
                }
                .scroll-container {
                    display: flex;
                    animation: scroll 30s linear infinite;
                    white-space: nowrap;
                }
                .scroll-container:hover {
                    animation-play-state: paused;
                }
            </style>
            <div class="scroll-container space-x-8">
                <img src="images/partners/bkash.png" alt="bKash" class="h-16">
                <img src="images/partners/grameenphone.png" alt="Grameenphone" class="h-16">
                <img src="images/partners/prothomalo.svg" alt="Prothom Alo" class="h-16">
                <img src="images/partners/lightcastle.png" alt="Light Castle" class="h-16">
                <img src="images/partners/walton.jpeg" alt="Walton" class="h-16">

                <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/IBM_logo.svg" alt="IBM" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/96/Microsoft_logo_%282012%29.svg" alt="Microsoft" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" alt="Apple" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg" alt="Amazon" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Netflix_2015_logo.svg" alt="Netflix" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/e/e5/Meta_Platforms_Inc._logo.svg" alt="Meta" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/4a/Intel_logo_2020.svg" alt="Intel" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/24/Samsung_Logo.svg" alt="Samsung" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/AMD_Logo.svg" alt="AMD" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/39/PayPal_logo.svg" alt="PayPal" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b1/Salesforce_logo.svg" alt="Salesforce" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/59/Oracle_Cloud_logo.svg" alt="Oracle" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/BMW.svg" alt="BMW" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/31/Tesla_Motors_logo.svg" alt="Tesla" class="h-16 inline-block">
                <img src="images/partners/bkash.png" alt="bKash" class="h-16">
                <img src="images/partners/grameenphone.png" alt="Grameenphone" class="h-16">
                <img src="images/partners/prothomalo.svg" alt="Prothom Alo" class="h-16">
                <img src="images/partners/lightcastle.png" alt="Light Castle" class="h-16">
                <img src="images/partners/walton.jpeg" alt="Walton" class="h-16">

                <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/IBM_logo.svg" alt="IBM" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/96/Microsoft_logo_%282012%29.svg" alt="Microsoft" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" alt="Apple" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg" alt="Amazon" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Netflix_2015_logo.svg" alt="Netflix" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/e/e5/Meta_Platforms_Inc._logo.svg" alt="Meta" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/4a/Intel_logo_2020.svg" alt="Intel" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/24/Samsung_Logo.svg" alt="Samsung" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/AMD_Logo.svg" alt="AMD" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/39/PayPal_logo.svg" alt="PayPal" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b1/Salesforce_logo.svg" alt="Salesforce" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/59/Oracle_Cloud_logo.svg" alt="Oracle" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/BMW.svg" alt="BMW" class="h-16 inline-block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/31/Tesla_Motors_logo.svg" alt="Tesla" class="h-16 inline-block">
            </div>
        </div>
    </div>
</section>


<?php 
$conn->close();
include 'includes/footer.php';
?>
<?php
include 'includes/header.php';
include 'includes/db_connect.php';
?>

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Hero Section -->
    <section class="text-center mb-16">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">আমাদের সম্পর্কে</h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            এডুম্যাট্রিক্স বাংলাদেশের অন্যতম শীর্ষস্থানীয় অনলাইন শিক্ষা প্ল্যাটফর্ম, যা ২০২৫ সাল থেকে শিক্ষার্থীদের সেবা দিয়ে আসছে।
        </p>
    </section>

    <!-- Stats Section -->
    <section class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-16">
        <div class="text-center p-6 bg-white rounded-lg shadow-sm">
            <h3 class="text-3xl font-bold text-purple-600 mb-2">৩০ লক্ষ+</h3>
            <p class="text-gray-600">শিক্ষার্থী</p>
        </div>
        <div class="text-center p-6 bg-white rounded-lg shadow-sm">
            <h3 class="text-3xl font-bold text-purple-600 mb-2">২০ লক্ষ+</h3>
            <p class="text-gray-600">অ্যাপ ডাউনলোড</p>
        </div>
        <div class="text-center p-6 bg-white rounded-lg shadow-sm">
            <h3 class="text-3xl font-bold text-purple-600 mb-2">২০ লক্ষ+</h3>
            <p class="text-gray-600">অ্যাক্টিভ ইউজার</p>
        </div>
        <div class="text-center p-6 bg-white rounded-lg shadow-sm">
            <h3 class="text-3xl font-bold text-purple-600 mb-2">১.৮ লক্ষ+</h3>
            <p class="text-gray-600">ক্লাস টিউটোরিয়াল</p>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-16">
        <div>
            <h2 class="text-2xl font-bold text-gray-900 mb-4">আমাদের লক্ষ্য</h2>
            <p class="text-gray-600">
                আমাদের লক্ষ্য হলো বাংলাদেশের প্রতিটি শিক্ষার্থীর কাছে মানসম্মত শিক্ষা পৌঁছে দেওয়া। আমরা বিশ্বাস করি, প্রযুক্তির সহায়তায় শিক্ষা সহজলভ্য করা সম্ভব।
            </p>
        </div>
        <div>
            <h2 class="text-2xl font-bold text-gray-900 mb-4">আমাদের দর্শন</h2>
            <p class="text-gray-600">
                প্রতিটি শিক্ষার্থীকে তার সর্বোচ্চ সম্ভাবনা অর্জনে সহায়তা করা। আমরা চাই, প্রতিটি শিক্ষার্থী যেন তার স্বপ্ন পূরণের পথে এগিয়ে যেতে পারে।
            </p>
        </div>
    </section>

    <!-- Team Section -->
    <section class="mb-16">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">আমাদের টিম</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="w-32 h-32 mx-auto mb-4 bg-gray-200 rounded-full overflow-hidden">
                    <img src="/EduMatrix/images/team/ceo.png" alt="CEO" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-semibold text-gray-900">সাফিন মাহমুদ</h3>
                <p class="text-gray-600">প্রতিষ্ঠাতা এবং সিইও</p>
            </div>
            <!-- Add more team members as needed -->
        </div>
    </section>

    <!-- Contact Section -->
    <section class="bg-gray-50 p-8 rounded-lg">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">যোগাযোগ করুন</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
            <div class="text-center">
                <div class="mb-2">📞</div>
                <p class="font-semibold">ফোন</p>
                <p class="text-gray-600">16780</p>
            </div>
            <div class="text-center">
                <div class="mb-2">✉️</div>
                <p class="font-semibold">ইমেইল</p>
                <p class="text-gray-600">info@edumatrix.com</p>
            </div>
            <div class="text-center">
                <div class="mb-2">📍</div>
                <p class="font-semibold">ঠিকানা</p>
                <p class="text-gray-600">Rangs Paramount, Level 11 Block-K, Plot-11 Rd No 17, Dhaka 1213</p>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
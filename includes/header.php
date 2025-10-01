<?php
if (session_status() == PHP_SESSION_NONE) session_start();
?>
<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduMatrix</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/EduMatrix/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/EduMatrix/favicon.ico">
</head>
<body>
    <header class="bg-white shadow-sm fixed top-0 left-0 right-0 z-60">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="/EduMatrix/index.php">
                        <img src="/EduMatrix/images/logo.png" alt="EduMatrix" class="h-12">
                    </a>
                </div>


                <!-- Navigation Links -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/EduMatrix/index.php" class="text-gray-700 hover:text-purple-600">হোম</a>
                    <a href="/EduMatrix/programs.php" class="text-gray-700 hover:text-purple-600">সকল কোর্স</a>
                    <a href="/EduMatrix/programs.php?filter=gpa5" class="flex items-center text-gray-700 hover:text-purple-600">
                        লক্ষ্য GPA 5
                        <span class="bg-pink-500 text-white text-xs px-2 py-1 rounded-full ml-2">SSC'26</span>
                    </a>
                    <a href="/EduMatrix/admission_path.php" class="text-gray-700 hover:text-purple-600">এডমিশন প্রোগ্রাম</a>
                    <a href="/EduMatrix/study_path.php" class="text-gray-700 hover:text-purple-600">শিক্ষা পথ</a>
                    <a href="/EduMatrix/about.php" class="text-gray-700 hover:text-purple-600">আমাদের সম্পর্কে</a>
                </div>

                <!-- Login/Signup Button -->
                <div class="flex items-center">
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <div class="relative group">
                            <span class="inline-flex items-center justify-center px-6 py-2 border border-purple-600 text-purple-600 rounded-lg hover:bg-purple-600 hover:text-white transition-colors duration-300">প্রোফাইল</span>
                            <div class="absolute right-0 w-48 mt-2 py-2 bg-white rounded-lg shadow-xl hidden group-hover:block z-9999">
                                <a href="/EduMatrix/dashboard.php" class="block px-4 py-2 text-gray-700 hover:bg-purple-50">ড্যাশবোর্ড</a>
                                <?php if ($_SESSION['role'] == 'admin'): ?>
                                    <a href="/EduMatrix/admin/index.php" class="block px-4 py-2 text-gray-700 hover:bg-purple-50">অ্যাডমিন প্যানেল</a>
                                <?php endif; ?>
                                <a href="/EduMatrix/logout.php" class="block px-4 py-2 text-gray-700 hover:bg-purple-50">লগ আউট</a>
                            </div>
                        </div>
                    <?php else: ?>
                        <a href="/EduMatrix/login.php" 
                           class="inline-flex items-center justify-center px-6 py-2 border border-purple-600 text-purple-600 rounded-lg hover:bg-purple-600 hover:text-white transition-colors duration-300">
                            লগ ইন / সাইন আপ
                        </a>
                    <?php endif; ?>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button type="button" class="text-gray-700 hover:text-purple-600" id="mobile-menu-button">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div class="hidden md:hidden" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="/EduMatrix/index.php" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-purple-50">হোম</a>
                    <a href="/EduMatrix/programs.php" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-purple-50">সকল কোর্স</a>
                    <a href="/EduMatrix/programs.php" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-purple-50">লক্ষ্য GPA 5</a>
                    <a href="/EduMatrix/admission_path.php" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-purple-50">এডমিশন প্রোগ্রাম</a>
                    <a href="/EduMatrix/study_path.php" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-purple-50">শিক্ষা পথ</a>
                    <a href="/EduMatrix/about.php" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-purple-50">আমাদের সম্পর্কে</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Add spacing below header -->
    <div class="h-16"></div>

    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>

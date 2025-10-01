<?php
include 'includes/header.php';
include 'includes/db_connect.php';
?>

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Hero Section -->
    <section class="text-center mb-16">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">এডমিশন প্রোগ্রাম</h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            বাংলাদেশের সকল পাবলিক ও প্রাইভেট বিশ্ববিদ্যালয়ের ভর্তি পরীক্ষার প্রস্তুতি। আপনার স্বপ্নের বিশ্ববিদ্যালয়ে ভর্তি হোন।
        </p>
    </section>

    <!-- University Categories -->
    <section class="mb-16">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">বিশ্ববিদ্যালয় ক্যাটাগরি</h2>

        <!-- Public Universities -->
        <div class="mb-12">
            <h3 class="text-2xl font-bold text-blue-600 mb-8 text-center">পাবলিক বিশ্ববিদ্যালয়</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <a href="course_details.php?program=DU Admission" class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 block transform hover:scale-105">
                    <div class="text-center mb-4">
                        <img src="images/du_logo.png" alt="DU Logo" class="w-16 h-16 mx-auto mb-4 object-contain rounded-full" onerror="this.src='https://via.placeholder.com/64x64/2563EB/FFFFFF?text=DU'">
                        <h4 class="text-xl font-semibold text-blue-600">ঢাকা বিশ্ববিদ্যালয়</h4>
                        <p class="text-sm text-gray-500 mt-1">(DU)</p>
                    </div>
                    <p class="text-gray-600 mb-4 text-center text-sm">
                        বাংলাদেশের প্রাচীনতম ও সর্ববৃহৎ বিশ্ববিদ্যালয়
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• সকল অনুষদ</li>
                        <li>• গবেষণা সুবিধা</li>
                        <li>• আন্তর্জাতিক স্বীকৃতি</li>
                        <li>• ক্যাম্পাস সুবিধা</li>
                    </ul>
                </a>

                <a href="course_details.php?program=BUET Admission" class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 block transform hover:scale-105">
                    <div class="text-center mb-4">
                        <img src="https://en.wikipedia.org/wiki/File:BUET_LOGO.svg" alt="BUET Logo" class="w-16 h-16 mx-auto mb-4 object-contain rounded-full" onerror="this.src='https://en.wikipedia.org/wiki/File:BUET_LOGO.svg'">
                        <h4 class="text-xl font-semibold text-blue-600">বাংলাদেশ প্রকৌশল বিশ্ববিদ্যালয়</h4>
                        <p class="text-sm text-gray-500 mt-1">(BUET)</p>
                    </div>
                    <p class="text-gray-600 mb-4 text-center text-sm">
                        প্রকৌশল শিক্ষার সর্বোচ্চ প্রতিষ্ঠান
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• প্রকৌশল অনুষদ</li>
                        <li>• গবেষণা ল্যাব</li>
                        <li>• শিল্প সংযোগ</li>
                        <li>• আন্তর্জাতিক সহযোগিতা</li>
                    </ul>
                </a>

                <a href="course_details.php?program=SUST Engineering" class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 block transform hover:scale-105">
                    <div class="text-center mb-4">
                        <img src="images/sust_logo.png" alt="SUST Logo" class="w-16 h-16 mx-auto mb-4 object-contain rounded-full" onerror="this.src='https://via.placeholder.com/64x64/2563EB/FFFFFF?text=SUST'">
                        <h4 class="text-xl font-semibold text-blue-600">শাহজালাল বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়</h4>
                        <p class="text-sm text-gray-500 mt-1">(SUST)</p>
                    </div>
                    <p class="text-gray-600 mb-4 text-center text-sm">
                        বিজ্ঞান ও প্রযুক্তি শিক্ষার অগ্রণী প্রতিষ্ঠান
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• বিজ্ঞান অনুষদ</li>
                        <li>• প্রযুক্তি গবেষণা</li>
                        <li>• উদ্ভাবন কেন্দ্র</li>
                        <li>• শিল্প অংশীদারিত্ব</li>
                    </ul>
                </a>

                <a href="course_details.php?program=CUET Admission" class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 block transform hover:scale-105">
                    <div class="text-center mb-4">
                        <img src="images/cuet_logo.png" alt="CUET Logo" class="w-16 h-16 mx-auto mb-4 object-contain rounded-full" onerror="this.src='https://via.placeholder.com/64x64/2563EB/FFFFFF?text=CUET'">
                        <h4 class="text-xl font-semibold text-blue-600">চট্টগ্রাম প্রকৌশল বিশ্ববিদ্যালয়</h4>
                        <p class="text-sm text-gray-500 mt-1">(CUET)</p>
                    </div>
                    <p class="text-gray-600 mb-4 text-center text-sm">
                        প্রকৌশল শিক্ষার অগ্রণী প্রতিষ্ঠান
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• প্রকৌশল অনুষদ</li>
                        <li>• গবেষণা কেন্দ্র</li>
                        <li>• শিল্প সংযোগ</li>
                        <li>• আঞ্চলিক উন্নয়ন</li>
                    </ul>
                </a>
            </div>
        </div>

        <!-- Private Universities -->
        <div class="mb-12">
            <h3 class="text-2xl font-bold text-green-600 mb-8 text-center">প্রাইভেট বিশ্ববিদ্যালয়</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <a href="course_details.php?program=BRACU Admission" class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 block transform hover:scale-105">
                    <div class="text-center mb-4">
                        <img src="images/bracu_logo.png" alt="BRACU Logo" class="w-16 h-16 mx-auto mb-4 object-contain rounded-full" onerror="this.src='https://via.placeholder.com/64x64/059669/FFFFFF?text=BRACU'">
                        <h4 class="text-xl font-semibold text-green-600">ব্র্যাক বিশ্ববিদ্যালয়</h4>
                        <p class="text-sm text-gray-500 mt-1">(BRACU)</p>
                    </div>
                    <p class="text-gray-600 mb-4 text-center text-sm">
                        সামাজিক উন্নয়ন ও শিক্ষার সমন্বয়
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• উন্নয়ন অধ্যয়ন</li>
                        <li>• সামাজিক বিজ্ঞান</li>
                        <li>• ব্যবসায় শিক্ষা</li>
                        <li>• প্রযুক্তি শিক্ষা</li>
                    </ul>
                </a>

                <a href="course_details.php?program=NSU Admission" class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 block transform hover:scale-105">
                    <div class="text-center mb-4">
                        <img src="images/nsu_logo.png" alt="NSU Logo" class="w-16 h-16 mx-auto mb-4 object-contain rounded-full" onerror="this.src='https://via.placeholder.com/64x64/059669/FFFFFF?text=NSU'">
                        <h4 class="text-xl font-semibold text-green-600">নর্থ সাউথ বিশ্ববিদ্যালয়</h4>
                        <p class="text-sm text-gray-500 mt-1">(NSU)</p>
                    </div>
                    <p class="text-gray-600 mb-4 text-center text-sm">
                        বাংলাদেশের শীর্ষ প্রাইভেট বিশ্ববিদ্যালয়
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• ব্যবসায় শিক্ষা</li>
                        <li>• প্রকৌশল শিক্ষা</li>
                        <li>• স্বাস্থ্য বিজ্ঞান</li>
                        <li>• মানবিক শিক্ষা</li>
                    </ul>
                </a>

                <a href="course_details.php?program=EWU Admission" class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 block transform hover:scale-105">
                    <div class="text-center mb-4">
                        <img src="images/ewu_logo.png" alt="EWU Logo" class="w-16 h-16 mx-auto mb-4 object-contain rounded-full" onerror="this.src='https://via.placeholder.com/64x64/059669/FFFFFF?text=EWU'">
                        <h4 class="text-xl font-semibold text-green-600">ইস্ট ওয়েস্ট বিশ্ববিদ্যালয়</h4>
                        <p class="text-sm text-gray-500 mt-1">(EWU)</p>
                    </div>
                    <p class="text-gray-600 mb-4 text-center text-sm">
                        আধুনিক শিক্ষা ব্যবস্থার অগ্রদূত
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• আধুনিক কারিকুলাম</li>
                        <li>• আন্তর্জাতিক স্বীকৃতি</li>
                        <li>• গবেষণা সুবিধা</li>
                        <li>• কর্মসংস্থান সহায়তা</li>
                    </ul>
                </a>

                <a href="course_details.php?program=IUB Admission" class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 block transform hover:scale-105">
                    <div class="text-center mb-4">
                        <img src="images/iub_logo.png" alt="IUB Logo" class="w-16 h-16 mx-auto mb-4 object-contain rounded-full" onerror="this.src='https://via.placeholder.com/64x64/059669/FFFFFF?text=IUB'">
                        <h4 class="text-xl font-semibold text-green-600">ইন্ডিপেন্ডেন্ট বিশ্ববিদ্যালয়</h4>
                        <p class="text-sm text-gray-500 mt-1">(IUB)</p>
                    </div>
                    <p class="text-gray-600 mb-4 text-center text-sm">
                        আন্তর্জাতিক মানের শিক্ষা প্রদান
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• আন্তর্জাতিক মান</li>
                        <li>• বিদেশী অংশীদার</li>
                        <li>• গবেষণা সহযোগিতা</li>
                        <li>• বৈশ্বিক নেটওয়ার্ক</li>
                    </ul>
                </a>
            </div>
        </div>
    </section>

    <!-- Admission Programs by Category -->
    <section class="mb-16">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">ভর্তি প্রোগ্রাম ক্যাটাগরি</h2>

        <!-- Professional Programs (Engineering + Medical) -->
        <div class="mb-12">
            <div class="text-center mb-8">
                <h3 class="text-3xl font-bold text-indigo-600 mb-4">প্রফেশনাল প্রোগ্রাম</h3>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">ইঞ্জিনিয়ারিং এবং মেডিকেল ভর্তি প্রস্তুতির জন্য বিশেষায়িত প্রোগ্রাম</p>
                <div class="flex justify-center space-x-4 mt-6">
                    <a href="#engineering" class="bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-purple-700 transition-colors duration-300 shadow-lg">ইঞ্জিনিয়ারিং দেখুন</a>
                    <a href="#medical" class="bg-red-600 text-white px-6 py-3 rounded-lg hover:bg-red-700 transition-colors duration-300 shadow-lg">মেডিকেল দেখুন</a>
                </div>
            </div>

            <!-- Engineering -->
            <div id="engineering" class="mb-12">
                <h3 class="text-2xl font-bold text-purple-600 mb-8 text-center">ইঞ্জিনিয়ারিং ভর্তি প্রস্তুতি</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <a href="course_details.php?program=BUET Admission" class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 block transform hover:scale-105">
                    <div class="text-center mb-4">
                        <img src="https://www.buet.ac.bd/web/images/logo.png" alt="BUET Logo" class="w-16 h-16 mx-auto mb-4 object-contain rounded-full" onerror="this.src='https://via.placeholder.com/64x64/8B5CF6/FFFFFF?text=BUET'">
                        <h4 class="text-xl font-semibold text-purple-600">BUET প্রস্তুতি</h4>
                    </div>
                    <p class="text-gray-600 mb-4">
                        বাংলাদেশ প্রকৌশল বিশ্ববিদ্যালয়ের ভর্তি পরীক্ষার সম্পূর্ণ প্রস্তুতি
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• গণিত, পদার্থ, রসায়ন</li>
                        <li>• মডেল টেস্ট সিরিজ</li>
                        <li>• প্রাকটিক্যাল প্রস্তুতি</li>
                        <li>• মেন্টরিং সাপোর্ট</li>
                    </ul>
                </a>

                <a href="course_details.php?program=CUET Admission" class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 block transform hover:scale-105">
                    <div class="text-center mb-4">
                        <img src="https://www.cuet.ac.bd/frontend/images/logo.png" alt="CUET Logo" class="w-16 h-16 mx-auto mb-4 object-contain rounded-full" onerror="this.src='https://via.placeholder.com/64x64/8B5CF6/FFFFFF?text=CUET'">
                        <h4 class="text-xl font-semibold text-purple-600">CUET প্রস্তুতি</h4>
                    </div>
                    <p class="text-gray-600 mb-4">
                        চট্টগ্রাম প্রকৌশল বিশ্ববিদ্যালয়ের ভর্তি পরীক্ষা প্রস্তুতি
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• বিষয়ভিত্তিক গভীর প্রস্তুতি</li>
                        <li>• প্রশ্ন ব্যাংক</li>
                        <li>• টাইম ম্যানেজমেন্ট</li>
                        <li>• মক পরীক্ষা</li>
                    </ul>
                </a>

                <a href="course_details.php?program=KUET Engineering" class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 block transform hover:scale-105">
                    <div class="text-center mb-4">
                        <img src="https://kuet.ac.bd/images/logo.png" alt="KUET Logo" class="w-16 h-16 mx-auto mb-4 object-contain rounded-full" onerror="this.src='https://via.placeholder.com/64x64/8B5CF6/FFFFFF?text=KUET'">
                        <h4 class="text-xl font-semibold text-purple-600">KUET প্রস্তুতি</h4>
                    </div>
                    <p class="text-gray-600 mb-4">
                        খুলনা প্রকৌশল বিশ্ববিদ্যালয়ের ভর্তি পরীক্ষা প্রস্তুতি
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• সিলেবাস কভারেজ</li>
                        <li>• প্র্যাকটিস সেশন</li>
                        <li>• ডাউট ক্লিয়ারিং</li>
                        <li>• স্টাডি ম্যাটেরিয়াল</li>
                    </ul>
                </a>
            </div>
        </div>

            <!-- Medical -->
            <div id="medical" class="mb-12">
                <h3 class="text-2xl font-bold text-red-600 mb-8 text-center">মেডিকেল ভর্তি প্রস্তুতি</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <a href="course_details.php?program=MBBS Admission" class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 block transform hover:scale-105">
                    <div class="text-center mb-4">
                        <img src="https://www.dmc.edu.bd/images/logo.png" alt="Dhaka Medical College Logo" class="w-16 h-16 mx-auto mb-4 object-contain rounded-full" onerror="this.src='https://via.placeholder.com/64x64/DC2626/FFFFFF?text=MBBS'">
                        <h4 class="text-xl font-semibold text-red-600">MBBS ভর্তি</h4>
                    </div>
                    <p class="text-gray-600 mb-4">
                        মেডিকেল কলেজ ভর্তি পরীক্ষার সম্পূর্ণ প্রস্তুতি
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• বায়োলজি, কেমিস্ট্রি, ফিজিক্স</li>
                        <li>• মেডিকেল টার্মস</li>
                        <li>• প্র্যাকটিক্যাল নলেজ</li>
                        <li>• কাউন্সেলিং</li>
                    </ul>
                </a>

                <a href="course_details.php?program=BDS Admission" class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 block transform hover:scale-105">
                    <div class="text-center mb-4">
                        <img src="https://www.bsmmu.edu.bd/images/logo.png" alt="Dental College Logo" class="w-16 h-16 mx-auto mb-4 object-contain rounded-full" onerror="this.src='https://via.placeholder.com/64x64/DC2626/FFFFFF?text=BDS'">
                        <h4 class="text-xl font-semibold text-red-600">BDS ভর্তি</h4>
                    </div>
                    <p class="text-gray-600 mb-4">
                        ডেন্টাল কলেজ ভর্তি পরীক্ষা প্রস্তুতি
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• ডেন্টাল সায়েন্স</li>
                        <li>• বায়োলজিক্যাল সায়েন্স</li>
                        <li>• ক্লিনিক্যাল প্র্যাকটিস</li>
                        <li>• প্রফেশনাল গাইডেন্স</li>
                    </ul>
                </a>

                <a href="course_details.php?program=Pharmacy Admission" class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 block transform hover:scale-105">
                    <div class="text-center mb-4">
                        <img src="https://www.du.ac.bd/webportal/images/logo.png" alt="Pharmacy College Logo" class="w-16 h-16 mx-auto mb-4 object-contain rounded-full" onerror="this.src='https://via.placeholder.com/64x64/DC2626/FFFFFF?text=PHARMACY'">
                        <h4 class="text-xl font-semibold text-red-600">ফার্মেসি ভর্তি</h4>
                    </div>
                    <p class="text-gray-600 mb-4">
                        ফার্মেসি কলেজ ভর্তি পরীক্ষা প্রস্তুতি
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• ফার্মাকোলজি</li>
                        <li>• কেমিক্যাল সায়েন্স</li>
                        <li>• ল্যাব প্র্যাকটিস</li>
                        <li>• ইন্ডাস্ট্রি গাইডেন্স</li>
                    </ul>
                </a>
            </div>
        </div>

        <!-- Technology University -->
        <div class="mb-12">
            <h3 class="text-2xl font-bold text-blue-600 mb-8 text-center">টেকনোলজি বিশ্ববিদ্যালয় ভর্তি</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <a href="course_details.php?program=SUST Engineering" class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 block transform hover:scale-105">
                    <div class="text-center mb-4">
                        <img src="https://www.sust.edu/images/logo.png" alt="SUST Logo" class="w-16 h-16 mx-auto mb-4 object-contain rounded-full" onerror="this.src='https://via.placeholder.com/64x64/2563EB/FFFFFF?text=SUST'">
                        <h4 class="text-xl font-semibold text-blue-600">SUST ভর্তি</h4>
                    </div>
                    <p class="text-gray-600 mb-4">
                        শাহজালাল বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• কম্পিউটার সায়েন্স</li>
                        <li>• ইলেকট্রিক্যাল ইঞ্জিনিয়ারিং</li>
                        <li>• টেকনিক্যাল স্কিলস</li>
                        <li>• রিসার্চ মেথড</li>
                    </ul>
                </a>

                <a href="course_details.php?program=HSTU Engineering" class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 block transform hover:scale-105">
                    <div class="text-center mb-4">
                        <img src="https://hstu.ac.bd/images/logo.png" alt="HSTU Logo" class="w-16 h-16 mx-auto mb-4 object-contain rounded-full" onerror="this.src='https://via.placeholder.com/64x64/2563EB/FFFFFF?text=HSTU'">
                        <h4 class="text-xl font-semibold text-blue-600">HSTU ভর্তি</h4>
                    </div>
                    <p class="text-gray-600 mb-4">
                        হাজী দানেশ বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• এগ্রিকালচার টেকনোলজি</li>
                        <li>• ফিশারিজ টেকনোলজি</li>
                        <li>• ভেটেরিনারি সায়েন্স</li>
                        <li>• ফুড প্রসেসিং</li>
                    </ul>
                </a>

                <a href="course_details.php?program=MBSTU Engineering" class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 block transform hover:scale-105">
                    <div class="text-center mb-4">
                        <img src="https://mbstu.ac.bd/images/logo.png" alt="MBSTU Logo" class="w-16 h-16 mx-auto mb-4 object-contain rounded-full" onerror="this.src='https://via.placeholder.com/64x64/2563EB/FFFFFF?text=MBSTU'">
                        <h4 class="text-xl font-semibold text-blue-600">MBSTU ভর্তি</h4>
                    </div>
                    <p class="text-gray-600 mb-4">
                        মাওলানা ভাসানী বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• আইসিটি</li>
                        <li>• টেক্সটাইল ইঞ্জিনিয়ারিং</li>
                        <li>• ইনফরমেশন সিস্টেম</li>
                        <li>• ডেটা সায়েন্স</li>
                    </ul>
                </a>
            </div>
        </div>
    </section>

    <!-- Academic Programs -->
    <section class="mb-16">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">একাডেমিক প্রোগ্রাম</h2>

        <!-- Science -->
        <div class="mb-12">
            <h3 class="text-2xl font-bold text-green-600 mb-8 text-center">বিজ্ঞান অনুষদ</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <a href="course_details.php?category=science&subject=physics" class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow block">
                    <div class="text-center mb-4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5a/Shahjalal_University_of_Science_and_Technology_logo.svg/200px-Shahjalal_University_of_Science_and_Technology_logo.svg.png" alt="Physics Department" class="w-16 h-16 mx-auto mb-4 object-contain rounded-full">
                        <h4 class="text-xl font-semibold text-green-600">পদার্থবিদ্যা</h4>
                    </div>
                    <p class="text-gray-600 mb-4">
                        ক্লাসিক্যাল ও কোয়ান্টাম পদার্থবিদ্যার গভীর জ্ঞান
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• থিওরেটিক্যাল ফিজিক্স</li>
                        <li>• এক্সপেরিমেন্টাল ফিজিক্স</li>
                        <li>• ম্যাথমেটিক্যাল ফিজিক্স</li>
                        <li>• রিসার্চ মেথডোলজি</li>
                    </ul>
                </a>

                <a href="course_details.php?category=science&subject=chemistry" class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow block">
                    <div class="text-center mb-4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/University_of_Dhaka_logo.svg/200px-University_of_Dhaka_logo.svg.png" alt="Chemistry Department" class="w-16 h-16 mx-auto mb-4 object-contain rounded-full">
                        <h4 class="text-xl font-semibold text-green-600">রসায়ন</h4>
                    </div>
                    <p class="text-gray-600 mb-4">
                        অর্গানিক, ইনর্গানিক ও ফিজিক্যাল রসায়ন
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• ল্যাবরেটরি টেকনিক</li>
                        <li>• কেমিক্যাল রিয়েকশন</li>
                        <li>• অ্যানালিটিক্যাল কেমিস্ট্রি</li>
                        <li>• ইন্ডাস্ট্রিয়াল অ্যাপ্লিকেশন</li>
                    </ul>
                </a>

                <a href="course_details.php?category=science&subject=biology" class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow block">
                    <div class="text-center mb-4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Bangladesh_University_of_Engineering_and_Technology_logo.svg/200px-Bangladesh_University_of_Engineering_and_Technology_logo.svg.png" alt="Biology Department" class="w-16 h-16 mx-auto mb-4 object-contain rounded-full">
                        <h4 class="text-xl font-semibold text-green-600">জীববিদ্যা</h4>
                    </div>
                    <p class="text-gray-600 mb-4">
                        মাইক্রোবায়োলজি থেকে ইকোলজি পর্যন্ত
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• মলিকিউলার বায়োলজি</li>
                        <li>• জেনেটিক্স</li>
                        <li>• ইকোলজি</li>
                        <li>• বায়োটেকনোলজি</li>
                    </ul>
                </a>
            </div>
        </div>

        <!-- Business Studies -->
        <div class="mb-12">
            <h3 class="text-2xl font-bold text-orange-600 mb-8 text-center">ব্যবসায় শিক্ষা</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <a href="course_details.php?category=business&subject=accounting" class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow block">
                    <div class="text-center mb-4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/University_of_Dhaka_logo.svg/200px-University_of_Dhaka_logo.svg.png" alt="Accounting Department" class="w-16 h-16 mx-auto mb-4 object-contain rounded-full">
                        <h4 class="text-xl font-semibold text-orange-600">অ্যাকাউন্টিং</h4>
                    </div>
                    <p class="text-gray-600 mb-4">
                        ফাইন্যান্সিয়াল অ্যাকাউন্টিং ও ম্যানেজমেন্ট
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• ফাইন্যান্সিয়াল রিপোর্টিং</li>
                        <li>• অডিটিং</li>
                        <li>• ট্যাক্সেশন</li>
                        <li>• কস্ট অ্যাকাউন্টিং</li>
                    </ul>
                </a>

                <a href="course_details.php?category=business&subject=marketing" class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow block">
                    <div class="text-center mb-4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/University_of_Chittagong_logo.svg/200px-University_of_Chittagong_logo.svg.png" alt="Marketing Department" class="w-16 h-16 mx-auto mb-4 object-contain rounded-full">
                        <h4 class="text-xl font-semibold text-orange-600">মার্কেটিং</h4>
                    </div>
                    <p class="text-gray-600 mb-4">
                        মডার্ন মার্কেটিং স্ট্র্যাটেজি ও প্র্যাকটিস
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• ডিজিটাল মার্কেটিং</li>
                        <li>• ব্র্যান্ড ম্যানেজমেন্ট</li>
                        <li>• কনজিউমার বিহেভিয়র</li>
                        <li>• মার্কেট রিসার্চ</li>
                    </ul>
                </a>

                <a href="course_details.php?category=business&subject=finance" class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow block">
                    <div class="text-center mb-4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Bangladesh_University_of_Engineering_and_Technology_logo.svg/200px-Bangladesh_University_of_Engineering_and_Technology_logo.svg.png" alt="Finance Department" class="w-16 h-16 mx-auto mb-4 object-contain rounded-full">
                        <h4 class="text-xl font-semibold text-orange-600">ফাইন্যান্স</h4>
                    </div>
                    <p class="text-gray-600 mb-4">
                        কর্পোরেট ফাইন্যান্স ও ইনভেস্টমেন্ট
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• ইনভেস্টমেন্ট ব্যাংকিং</li>
                        <li>• রিস্ক ম্যানেজমেন্ট</li>
                        <li>• ফাইন্যান্সিয়াল মডেলিং</li>
                        <li>• ক্যাপিটাল মার্কেট</li>
                    </ul>
                </a>
            </div>
        </div>

        <!-- Humanities & Arts -->
        <div class="mb-12">
            <h3 class="text-2xl font-bold text-purple-600 mb-8 text-center">মানবিক ও কলা অনুষদ</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <a href="course_details.php?category=humanities&subject=bengali" class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow block">
                    <div class="text-center mb-4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/University_of_Dhaka_logo.svg/200px-University_of_Dhaka_logo.svg.png" alt="Bengali Literature Department" class="w-16 h-16 mx-auto mb-4 object-contain rounded-full">
                        <h4 class="text-xl font-semibold text-purple-600">বাংলা সাহিত্য</h4>
                    </div>
                    <p class="text-gray-600 mb-4">
                        প্রাচীন থেকে আধুনিক বাংলা সাহিত্য
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• কাব্য ও গদ্য</li>
                        <li>• সাহিত্য সমালোচনা</li>
                        <li>• ভাষা বিজ্ঞান</li>
                        <li>• লোকসাহিত্য</li>
                    </ul>
                </a>

                <a href="course_details.php?category=humanities&subject=english" class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow block">
                    <div class="text-center mb-4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/University_of_Chittagong_logo.svg/200px-University_of_Chittagong_logo.svg.png" alt="English Literature Department" class="w-16 h-16 mx-auto mb-4 object-contain rounded-full">
                        <h4 class="text-xl font-semibold text-purple-600">ইংরেজি সাহিত্য</h4>
                    </div>
                    <p class="text-gray-600 mb-4">
                        ব্রিটিশ ও আমেরিকান লিটারেচার
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• লিটারারারি থিওরি</li>
                        <li>• ক্রিয়েটিভ রাইটিং</li>
                        <li>• লিঙ্গুইস্টিক্স</li>
                        <li>• কালচারাল স্টাডিজ</li>
                    </ul>
                </a>

                <a href="course_details.php?category=humanities&subject=history" class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow block">
                    <div class="text-center mb-4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5a/Shahjalal_University_of_Science_and_Technology_logo.svg/200px-Shahjalal_University_of_Science_and_Technology_logo.svg.png" alt="History Department" class="w-16 h-16 mx-auto mb-4 object-contain rounded-full">
                        <h4 class="text-xl font-semibold text-purple-600">ইতিহাস</h4>
                    </div>
                    <p class="text-gray-600 mb-4">
                        বাংলাদেশ ও বিশ্ব ইতিহাস
                    </p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• প্রাচীন ইতিহাস</li>
                        <li>• মধ্যযুগীয় ইতিহাস</li>
                        <li>• আধুনিক ইতিহাস</li>
                        <li>• ইতিহাস গবেষণা</li>
                    </ul>
                </a>
            </div>
        </div>
    </section>

    <!-- Success Stories -->
    <section class="bg-gray-50 p-8 rounded-lg">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">ভর্তি সাফল্যের গল্প</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="text-center mb-4">
                    <div class="w-16 h-16 mx-auto mb-4 bg-blue-100 rounded-full flex items-center justify-center">
                        <span class="text-2xl">🎓</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">আব্দুল্লাহ আল রাজী</h3>
                    <p class="text-gray-600 text-sm">BUET, CSE</p>
                </div>
                <p class="text-gray-600 text-center text-sm">
                    "EduMatrix এর BUET প্রস্তুতি কোর্সে প্রথম স্থান অর্জন করে BUET এ ভর্তি হয়েছি।"
                </p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="text-center mb-4">
                    <div class="w-16 h-16 mx-auto mb-4 bg-red-100 rounded-full flex items-center justify-center">
                        <span class="text-2xl">🏥</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">নাজনীন আক্তার</h3>
                    <p class="text-gray-600 text-sm">Dhaka Medical College, MBBS</p>
                </div>
                <p class="text-gray-600 text-center text-sm">
                    "মেডিকেল ভর্তি প্রস্তুতিতে EduMatrix এর গাইডেন্স আমার স্বপ্ন পূরণে সহায়ক হয়েছে।"
                </p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="text-center mb-4">
                    <div class="w-16 h-16 mx-auto mb-4 bg-green-100 rounded-full flex items-center justify-center">
                        <span class="text-2xl">📚</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">করিম উদ্দিন</h3>
                    <p class="text-gray-600 text-sm">Dhaka University, English</p>
                </div>
                <p class="text-gray-600 text-center text-sm">
                    "DU ভর্তি পরীক্ষায় EduMatrix এর প্রস্তুতি আমাকে প্রথম বিভাগে উত্তীর্ণ করেছে।"
                </p>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

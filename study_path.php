<?php
include 'includes/header.php';
include 'includes/db_connect.php';
?>

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Hero Section -->
    <section class="text-center mb-16">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">শিক্ষা পথ</h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            ক্লাস ৬ থেকে BCS পর্যন্ত সম্পূর্ণ শিক্ষা যাত্রা। আপনার ক্যারিয়ার গঠনে আমাদের সাথে যোগ দিন।
        </p>
    </section>

    <!-- Career Path Timeline -->
    <section class="mb-16">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">ক্যারিয়ার পথ</h2>
        <div class="space-y-16">

            <!-- Class 6-10 Section -->
            <div class="mb-16">
                <div class="flex items-center justify-center mb-8">
                    <div class="bg-purple-600 text-white px-6 py-3 rounded-full font-bold text-lg">
                        ক্লাস ৬-১০
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-bold text-purple-600 mb-4">মাধ্যমিক শিক্ষা (SSC)</h3>
                        <p class="text-gray-600 mb-4">
                            ক্লাস ৬ থেকে ১০ পর্যন্ত সম্পূর্ণ প্রস্তুতি। বিজ্ঞান, মানবিক ও ব্যবসায় শিক্ষা।
                        </p>
                        <ul class="text-gray-600 space-y-2">
                            <li>• বিষয়ভিত্তিক গভীর জ্ঞান</li>
                            <li>• মডেল টেস্ট ও মক পরীক্ষা</li>
                            <li>• অভিজ্ঞ শিক্ষকদের গাইডেন্স</li>
                            <li>• ইন্টারেকটিভ লার্নিং মেটেরিয়াল</li>
                        </ul>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-bold text-purple-600 mb-4">উচ্চমাধ্যমিক প্রস্তুতি</h3>
                        <p class="text-gray-600 mb-4">
                            SSC পরীক্ষার পর ক্লাস ১১-১২ এর জন্য প্রাথমিক প্রস্তুতি।
                        </p>
                        <ul class="text-gray-600 space-y-2">
                            <li>• HSC সিলেবাস ওভারভিউ</li>
                            <li>• বিষয় নির্বাচন গাইডেন্স</li>
                            <li>• ক্যারিয়ার কাউন্সেলিং</li>
                            <li>• স্টাডি প্ল্যানিং</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Class 11-12 Section -->
            <div class="mb-16">
                <div class="flex items-center justify-center mb-8">
                    <div class="bg-blue-600 text-white px-6 py-3 rounded-full font-bold text-lg">
                        ক্লাস ১১-১২
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-bold text-blue-600 mb-4">বিজ্ঞান</h3>
                        <p class="text-gray-600 mb-4">
                            পদার্থবিদ্যা, রসায়ন, জীববিদ্যা, গণিত, আইসিটি
                        </p>
                        <ul class="text-gray-600 space-y-2">
                            <li>• মেডিকেল কলেজ ভর্তি প্রস্তুতি</li>
                            <li>• ইঞ্জিনিয়ারিং ভর্তি প্রস্তুতি</li>
                            <li>• বিশ্ববিদ্যালয় ভর্তি</li>
                        </ul>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-bold text-blue-600 mb-4">মানবিক</h3>
                        <p class="text-gray-600 mb-4">
                            বাংলা, ইংরেজি, ইতিহাস, ভূগোল, ধর্ম
                        </p>
                        <ul class="text-gray-600 space-y-2">
                            <li>• সাধারণ জ্ঞান বিকাশ</li>
                            <li>• ভাষা দক্ষতা উন্নয়ন</li>
                            <li>• সামাজিক বিজ্ঞান গবেষণা</li>
                        </ul>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-bold text-blue-600 mb-4">ব্যবসায় শিক্ষা</h3>
                        <p class="text-gray-600 mb-4">
                            হিসাববিজ্ঞান, ব্যবস্থাপনা, অর্থনীতি
                        </p>
                        <ul class="text-gray-600 space-y-2">
                            <li>• ব্যবসায় প্রশাসন প্রস্তুতি</li>
                            <li>• আর্থিক সাক্ষরতা</li>
                            <li>• উদ্যোক্তা দক্ষতা</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- BCS Section -->
            <div class="mb-16">
                <div class="flex items-center justify-center mb-8">
                    <div class="bg-green-600 text-white px-6 py-3 rounded-full font-bold text-lg">
                        BCS প্রস্তুতি
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-bold text-green-600 mb-4">প্রিলিমিনারি</h3>
                        <p class="text-gray-600 mb-4">
                            BCS প্রিলিমিনারি পরীক্ষার সম্পূর্ণ প্রস্তুতি
                        </p>
                        <ul class="text-gray-600 space-y-2">
                            <li>• বাংলা ভাষা ও সাহিত্য</li>
                            <li>• ইংরেজি ভাষা</li>
                            <li>• সাধারণ জ্ঞান</li>
                            <li>• গণিত ও যুক্তি</li>
                        </ul>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-bold text-green-600 mb-4">লিখিত পরীক্ষা</h3>
                        <p class="text-gray-600 mb-4">
                            BCS লিখিত পরীক্ষার বিস্তারিত প্রস্তুতি
                        </p>
                        <ul class="text-gray-600 space-y-2">
                            <li>• বাংলা প্রবন্ধ</li>
                            <li>• ইংরেজি প্রবন্ধ</li>
                            <li>• সাধারণ বিজ্ঞান</li>
                            <li>• আন্তর্জাতিক বিষয়</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Teachers Section -->
    <section class="mb-16">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">আমাদের শিক্ষকবৃন্দ</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- SSC Teachers -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="text-center mb-4">
                    <div class="w-24 h-24 mx-auto mb-4 bg-gray-200 rounded-full overflow-hidden">
                        <img src="/EduMatrix/images/team/teacher1.png" alt="SSC Teacher" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">ড. মোহাম্মদ আলী</h3>
                    <p class="text-purple-600 font-medium">SSC বিজ্ঞান শিক্ষক</p>
                    <p class="text-gray-600 text-sm">১৫ বছরের অভিজ্ঞতা</p>
                </div>
                <p class="text-gray-600 text-center">
                    ক্লাস ৬-১০ এর বিজ্ঞান বিষয়ে বিশেষজ্ঞ। ঢাকা বিশ্ববিদ্যালয় থেকে MSc।
                </p>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="text-center mb-4">
                    <div class="w-24 h-24 mx-auto mb-4 bg-gray-200 rounded-full overflow-hidden">
                        <img src="/EduMatrix/images/team/teacher2.png" alt="HSC Teacher" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">ফারহানা আক্তার</h3>
                    <p class="text-blue-600 font-medium">HSC মানবিক শিক্ষক</p>
                    <p class="text-gray-600 text-sm">১২ বছরের অভিজ্ঞতা</p>
                </div>
                <p class="text-gray-600 text-center">
                    মানবিক বিষয়ে বিশেষজ্ঞ। জাহাঙ্গীরনগর বিশ্ববিদ্যালয় থেকে MA।
                </p>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="text-center mb-4">
                    <div class="w-24 h-24 mx-auto mb-4 bg-gray-200 rounded-full overflow-hidden">
                        <img src="/EduMatrix/images/team/teacher3.png" alt="BCS Teacher" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">রেজাউল করিম</h3>
                    <p class="text-green-600 font-medium">BCS প্রস্তুতি শিক্ষক</p>
                    <p class="text-gray-600 text-sm">২০ বছরের অভিজ্ঞতা</p>
                </div>
                <p class="text-gray-600 text-center">
                    সাবেক BCS ক্যাডার। প্রিলিমিনারি ও লিখিত পরীক্ষার বিশেষজ্ঞ।
                </p>
            </div>

            <!-- More Teachers -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="text-center mb-4">
                    <div class="w-24 h-24 mx-auto mb-4 bg-gray-200 rounded-full overflow-hidden">
                        <img src="/EduMatrix/images/team/teacher4.png" alt="Math Teacher" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">আব্দুল্লাহ আল মামুন</h3>
                    <p class="text-purple-600 font-medium">গণিত শিক্ষক</p>
                    <p class="text-gray-600 text-sm">১৮ বছরের অভিজ্ঞতা</p>
                </div>
                <p class="text-gray-600 text-center">
                    SSC ও HSC গণিতে বিশেষজ্ঞ। BUET থেকে BSc in Mathematics।
                </p>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="text-center mb-4">
                    <div class="w-24 h-24 mx-auto mb-4 bg-gray-200 rounded-full overflow-hidden">
                        <img src="/EduMatrix/images/team/teacher5.png" alt="English Teacher" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">নাজনীন আক্তার</h3>
                    <p class="text-blue-600 font-medium">ইংরেজি শিক্ষক</p>
                    <p class="text-gray-600 text-sm">১৪ বছরের অভিজ্ঞতা</p>
                </div>
                <p class="text-gray-600 text-center">
                    ভাষা দক্ষতা উন্নয়নে বিশেষজ্ঞ। IELTS ও TOEFL প্রশিক্ষক।
                </p>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="text-center mb-4">
                    <div class="w-24 h-24 mx-auto mb-4 bg-gray-200 rounded-full overflow-hidden">
                        <img src="/EduMatrix/images/team/teacher6.png" alt="Admission Coach" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">ড. সাইফুল ইসলাম</h3>
                    <p class="text-green-600 font-medium">ভর্তি কোচ</p>
                    <p class="text-gray-600 text-sm">২৫ বছরের অভিজ্ঞতা</p>
                </div>
                <p class="text-gray-600 text-center">
                    মেডিকেল ও ইঞ্জিনিয়ারিং ভর্তি পরীক্ষার বিশেষজ্ঞ। DU Medical Faculty।
                </p>
            </div>
        </div>
    </section>

    <!-- Career Guidance Section -->
    <section class="mb-16">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">ক্যারিয়ার গাইডেন্স</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-6 rounded-lg">
                <h3 class="text-xl font-bold text-purple-600 mb-4">মেডিকেল</h3>
                <p class="text-gray-600 mb-4">
                    MBBS, BDS, Nursing, Pharmacy প্রভৃতি ক্ষেত্রে ক্যারিয়ার গঠন।
                </p>
                <ul class="text-gray-600 text-sm space-y-1">
                    <li>• মেডিকেল ভর্তি পরীক্ষা</li>
                    <li>• প্রয়োজনীয় বিষয়সমূহ</li>
                    <li>• ক্যারিয়ার সম্ভাবনা</li>
                </ul>
            </div>

            <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-lg">
                <h3 class="text-xl font-bold text-blue-600 mb-4">ইঞ্জিনিয়ারিং</h3>
                <p class="text-gray-600 mb-4">
                    CSE, EEE, Civil, Mechanical প্রভৃতি ইঞ্জিনিয়ারিং ক্ষেত্র।
                </p>
                <ul class="text-gray-600 text-sm space-y-1">
                    <li>• ইঞ্জিনিয়ারিং ভর্তি</li>
                    <li>• প্রযুক্তি দক্ষতা</li>
                    <li>• ভবিষ্যত সম্ভাবনা</li>
                </ul>
            </div>

            <div class="bg-gradient-to-br from-green-50 to-green-100 p-6 rounded-lg">
                <h3 class="text-xl font-bold text-green-600 mb-4">সরকারি চাকরি</h3>
                <p class="text-gray-600 mb-4">
                    BCS, Bank Job, Primary Teacher প্রভৃতি সরকারি চাকরি।
                </p>
                <ul class="text-gray-600 text-sm space-y-1">
                    <li>• প্রতিযোগিতামূলক পরীক্ষা</li>
                    <li>• প্রস্তুতি কৌশল</li>
                    <li>• সাক্ষাতকার প্রস্তুতি</li>
                </ul>
            </div>

            <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-lg">
                <h3 class="text-xl font-bold text-orange-600 mb-4">ব্যবসায়</h3>
                <p class="text-gray-600 mb-4">
                    BBA, MBA, Accounting, Finance প্রভৃতি ব্যবসায় ক্ষেত্র।
                </p>
                <ul class="text-gray-600 text-sm space-y-1">
                    <li>• ব্যবসায় প্রশাসন</li>
                    <li>• আর্থিক ব্যবস্থাপনা</li>
                    <li>• উদ্যোক্তা দক্ষতা</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Success Stories Section -->
    <section class="bg-gray-50 p-8 rounded-lg">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">সাফল্যের গল্প</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="text-center mb-4">
                    <div class="w-16 h-16 mx-auto mb-4 bg-green-100 rounded-full flex items-center justify-center">
                        <span class="text-2xl">🎓</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">আহমেদ রহমান</h3>
                    <p class="text-gray-600 text-sm">MBBS, Dhaka Medical College</p>
                </div>
                <p class="text-gray-600 text-center text-sm">
                    "EduMatrix এর গাইডেন্সে মেডিকেল ভর্তি পরীক্ষায় প্রথম স্থান অর্জন করেছি।"
                </p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="text-center mb-4">
                    <div class="w-16 h-16 mx-auto mb-4 bg-blue-100 rounded-full flex items-center justify-center">
                        <span class="text-2xl">⚡</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">ফাতেমা খান</h3>
                    <p class="text-gray-600 text-sm">CSE, BUET</p>
                </div>
                <p class="text-gray-600 text-center text-sm">
                    "ইঞ্জিনিয়ারিং ভর্তি প্রস্তুতিতে EduMatrix এর ভূমিকা অপরিসীম।"
                </p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="text-center mb-4">
                    <div class="w-16 h-16 mx-auto mb-4 bg-purple-100 rounded-full flex items-center justify-center">
                        <span class="text-2xl">🏛️</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">করিম উদ্দিন</h3>
                    <p class="text-gray-600 text-sm">BCS Admin Cadre</p>
                </div>
                <p class="text-gray-600 text-center text-sm">
                    "BCS প্রস্তুতিতে EduMatrix এর কোর্স আমার সাফল্যের মূল চাবিকাঠি।"
                </p>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

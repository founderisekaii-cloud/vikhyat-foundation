<?php
define('PAGE_TITLE', 'What We Do');
include 'header.php';
?>

<!-- Hero Section -->
<section class="relative min-h-[600px] flex items-center justify-center text-white overflow-hidden py-32">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="images/background.jpg" alt="Vikhyat Foundation Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/60"></div> <!-- Overlay -->
    </div>

    <div class="relative z-10 max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
        <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-4 tracking-tight">
            Vikhyat Foundation
        </h1>
        <p class="text-xl md:text-3xl font-light mb-8 text-brand-100">
            Humanity at Heart, Progress in Action
        </p>

        <!-- Registration Numbers -->
        <div
            class="flex flex-wrap justify-center gap-4 text-xs md:text-sm text-gray-300 mb-10 max-w-5xl mx-auto whitespace-nowrap">
            <span>MU/0001548/2024</span>

            <span>F-0085513(GBR)</span>

            <span>CSR00099005</span>

            <span>80G/12A : AAETV6698MF20251</span>

            <span>MH/2025/0850417</span>
        </div>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="what-we-do.php#content"
                class="bg-brand-600 hover:bg-brand-700 text-white px-8 py-4 rounded-full font-bold text-lg transition-all transform hover:scale-105 shadow-lg shadow-brand-500/30">
                What We Do
            </a>
            <a href="our-activity.php#activities"
                class="bg-white hover:bg-gray-100 text-brand-900 px-8 py-4 rounded-full font-bold text-lg transition-all transform hover:scale-105 shadow-lg">
                Our Activity
            </a>
        </div>
    </div>
</section>

<!-- Main Content -->
<div id="content" class="bg-gray-50 py-20 space-y-20">

    <!-- Education & Skill Development -->
    <section class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 inline-block relative">
                Education & Skill Development
                <div
                    class="absolute bottom-0 left-0 w-full h-1 bg-brand-500 rounded-full transform scale-x-0 transition-transform duration-500 hover:scale-x-100 origin-left">
                </div>
            </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Approach Card -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border-t-4 border-brand-500"
                data-aos="fade-right">
                <div class="flex items-center mb-6">
                    <div class="p-3 bg-brand-100 rounded-full text-brand-600 mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">Our Approach</h3>
                </div>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Fostering intellectual growth and practical skills through comprehensive educational programs, from
                    scholarships to vocational training, ensuring everyone has the opportunity to learn and grow. We are
                    committed to fostering sustainable and impactful change by addressing the root causes of societal
                    challenges. Our approach is holistic and community-centric, ensuring that our interventions are not
                    just effective but also culturally sensitive and long-lasting. We believe in empowering individuals
                    and communities with the knowledge, skills, and resources they need to build a self-reliant and
                    prosperous future. Through strategic partnerships and data-driven strategies, we meticulously plan
                    and execute each project to maximize its positive impact. We engage directly with local stakeholders
                    to co-create solutions that are relevant, scalable, and owned by the community itself, ensuring that
                    our work leaves a legacy of resilience and progress for generations to come.
                </p>
            </div>

            <!-- Activities Card -->
            <div class="bg-gradient-to-br from-brand-50 to-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border-t-4 border-accent-500"
                data-aos="fade-left">
                <div class="flex items-center mb-6">
                    <div class="p-3 bg-accent-100 rounded-full text-accent-600 mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">Key Activities</h3>
                </div>
                <ul class="space-y-4">
                    <li class="flex items-start group">
                        <span
                            class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 text-green-500 flex items-center justify-center mr-3 mt-1 group-hover:bg-green-500 group-hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </span>
                        <span class="text-gray-700 text-lg group-hover:text-gray-900 transition-colors">Awarding
                            scholarships and financial aid to deserving students from marginalized backgrounds.</span>
                    </li>
                    <li class="flex items-start group">
                        <span
                            class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 text-green-500 flex items-center justify-center mr-3 mt-1 group-hover:bg-green-500 group-hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </span>
                        <span class="text-gray-700 text-lg group-hover:text-gray-900 transition-colors">Conducting
                            digital literacy programs for all age groups to bridge the technology gap.</span>
                    </li>
                    <li class="flex items-start group">
                        <span
                            class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 text-green-500 flex items-center justify-center mr-3 mt-1 group-hover:bg-green-500 group-hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </span>
                        <span class="text-gray-700 text-lg group-hover:text-gray-900 transition-colors">Establishing
                            vocational training centers to equip youth with job-oriented skills.</span>
                    </li>
                    <li class="flex items-start group">
                        <span
                            class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 text-green-500 flex items-center justify-center mr-3 mt-1 group-hover:bg-green-500 group-hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </span>
                        <span class="text-gray-700 text-lg group-hover:text-gray-900 transition-colors">Providing
                            essential resources and infrastructure support to under-equipped schools.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Health & Wellness -->
    <section class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 inline-block relative">
                Health & Wellness
                <div
                    class="absolute bottom-0 left-0 w-full h-1 bg-brand-500 rounded-full transform scale-x-0 transition-transform duration-500 hover:scale-x-100 origin-left">
                </div>
            </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Approach Card -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border-t-4 border-brand-500"
                data-aos="fade-right">
                <div class="flex items-center mb-6">
                    <div class="p-3 bg-brand-100 rounded-full text-brand-600 mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">Our Approach</h3>
                </div>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Promoting community health through proactive and accessible healthcare solutions, including medical
                    camps, awareness programs, and vital support for maternal and child wellness. We are committed to
                    fostering sustainable and impactful change by addressing the root causes of societal challenges. Our
                    approach is holistic and community-centric, ensuring that our interventions are not just effective
                    but also culturally sensitive and long-lasting. We believe in empowering individuals and communities
                    with the knowledge, skills, and resources they need to build a self-reliant and prosperous future.
                    Through strategic partnerships and data-driven strategies, we meticulously plan and execute each
                    project to maximize its positive impact. We engage directly with local stakeholders to co-create
                    solutions that are relevant, scalable, and owned by the community itself, ensuring that our work
                    leaves a legacy of resilience and progress for generations to come.
                </p>
            </div>

            <!-- Activities Card -->
            <div class="bg-gradient-to-br from-brand-50 to-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border-t-4 border-accent-500"
                data-aos="fade-left">
                <div class="flex items-center mb-6">
                    <div class="p-3 bg-accent-100 rounded-full text-accent-600 mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">Key Activities</h3>
                </div>
                <ul class="space-y-4">
                    <li class="flex items-start group">
                        <span
                            class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 text-green-500 flex items-center justify-center mr-3 mt-1 group-hover:bg-green-500 group-hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </span>
                        <span class="text-gray-700 text-lg group-hover:text-gray-900 transition-colors">Organizing free
                            medical camps and health check-ups in remote and underserved areas.</span>
                    </li>
                    <li class="flex items-start group">
                        <span
                            class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 text-green-500 flex items-center justify-center mr-3 mt-1 group-hover:bg-green-500 group-hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </span>
                        <span class="text-gray-700 text-lg group-hover:text-gray-900 transition-colors">Running
                            awareness campaigns on preventive healthcare, hygiene, and nutrition.</span>
                    </li>
                    <li class="flex items-start group">
                        <span
                            class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 text-green-500 flex items-center justify-center mr-3 mt-1 group-hover:bg-green-500 group-hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </span>
                        <span class="text-gray-700 text-lg group-hover:text-gray-900 transition-colors">Supporting
                            maternal and child health through pre-natal and post-natal care services.</span>
                    </li>
                    <li class="flex items-start group">
                        <span
                            class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 text-green-500 flex items-center justify-center mr-3 mt-1 group-hover:bg-green-500 group-hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </span>
                        <span class="text-gray-700 text-lg group-hover:text-gray-900 transition-colors">Promoting blood
                            and organ donation awareness to save lives.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Women Empowerment -->
    <section class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 inline-block relative">
                Women Empowerment
                <div
                    class="absolute bottom-0 left-0 w-full h-1 bg-brand-500 rounded-full transform scale-x-0 transition-transform duration-500 hover:scale-x-100 origin-left">
                </div>
            </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Approach Card -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border-t-4 border-brand-500"
                data-aos="fade-right">
                <div class="flex items-center mb-6">
                    <div class="p-3 bg-brand-100 rounded-full text-brand-600 mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">Our Approach</h3>
                </div>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Championing the rights and advancement of women by fostering economic independence, health
                    awareness, and leadership skills to create a more equitable society. We are committed to fostering
                    sustainable and impactful change by addressing the root causes of societal challenges. Our approach
                    is holistic and community-centric, ensuring that our interventions are not just effective but also
                    culturally sensitive and long-lasting. We believe in empowering individuals and communities with the
                    knowledge, skills, and resources they need to build a self-reliant and prosperous future. Through
                    strategic partnerships and data-driven strategies, we meticulously plan and execute each project to
                    maximize its positive impact. We engage directly with local stakeholders to co-create solutions that
                    are relevant, scalable, and owned by the community itself, ensuring that our work leaves a legacy of
                    resilience and progress for generations to come.
                </p>
            </div>

            <!-- Activities Card -->
            <div class="bg-gradient-to-br from-brand-50 to-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border-t-4 border-accent-500"
                data-aos="fade-left">
                <div class="flex items-center mb-6">
                    <div class="p-3 bg-accent-100 rounded-full text-accent-600 mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">Key Activities</h3>
                </div>
                <ul class="space-y-4">
                    <li class="flex items-start group">
                        <span
                            class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 text-green-500 flex items-center justify-center mr-3 mt-1 group-hover:bg-green-500 group-hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </span>
                        <span class="text-gray-700 text-lg group-hover:text-gray-900 transition-colors">Facilitating the
                            formation of Self-Help Groups (SHGs) for financial independence.</span>
                    </li>
                    <li class="flex items-start group">
                        <span
                            class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 text-green-500 flex items-center justify-center mr-3 mt-1 group-hover:bg-green-500 group-hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </span>
                        <span class="text-gray-700 text-lg group-hover:text-gray-900 transition-colors">Providing
                            support and mentorship for women-led small businesses and entrepreneurship.</span>
                    </li>
                    <li class="flex items-start group">
                        <span
                            class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 text-green-500 flex items-center justify-center mr-3 mt-1 group-hover:bg-green-500 group-hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </span>
                        <span class="text-gray-700 text-lg group-hover:text-gray-900 transition-colors">Conducting
                            workshops on menstrual hygiene and distributing sanitary products.</span>
                    </li>
                    <li class="flex items-start group">
                        <span
                            class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 text-green-500 flex items-center justify-center mr-3 mt-1 group-hover:bg-green-500 group-hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </span>
                        <span class="text-gray-700 text-lg group-hover:text-gray-900 transition-colors">Advocating for
                            gender equality and working to eliminate gender-based discrimination.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Environment & Sustainability -->
    <section class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 inline-block relative">
                Environment & Sustainability
                <div
                    class="absolute bottom-0 left-0 w-full h-1 bg-brand-500 rounded-full transform scale-x-0 transition-transform duration-500 hover:scale-x-100 origin-left">
                </div>
            </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Approach Card -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border-t-4 border-brand-500"
                data-aos="fade-right">
                <div class="flex items-center mb-6">
                    <div class="p-3 bg-brand-100 rounded-full text-brand-600 mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">Our Approach</h3>
                </div>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Committing to the preservation of our planet through proactive environmental initiatives, including
                    reforestation, waste reduction, and promoting sustainable practices for a greener future. We are
                    committed to fostering sustainable and impactful change by addressing the root causes of societal
                    challenges. Our approach is holistic and community-centric, ensuring that our interventions are not
                    just effective but also culturally sensitive and long-lasting. We believe in empowering individuals
                    and communities with the knowledge, skills, and resources they need to build a self-reliant and
                    prosperous future. Through strategic partnerships and data-driven strategies, we meticulously plan
                    and execute each project to maximize its positive impact. We engage directly with local stakeholders
                    to co-create solutions that are relevant, scalable, and owned by the community itself, ensuring that
                    our work leaves a legacy of resilience and progress for generations to come.
                </p>
            </div>

            <!-- Activities Card -->
            <div class="bg-gradient-to-br from-brand-50 to-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border-t-4 border-accent-500"
                data-aos="fade-left">
                <div class="flex items-center mb-6">
                    <div class="p-3 bg-accent-100 rounded-full text-accent-600 mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">Key Activities</h3>
                </div>
                <ul class="space-y-4">
                    <li class="flex items-start group">
                        <span
                            class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 text-green-500 flex items-center justify-center mr-3 mt-1 group-hover:bg-green-500 group-hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </span>
                        <span class="text-gray-700 text-lg group-hover:text-gray-900 transition-colors">Organizing mass
                            tree plantation drives to combat deforestation and improve air quality.</span>
                    </li>
                    <li class="flex items-start group">
                        <span
                            class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 text-green-500 flex items-center justify-center mr-3 mt-1 group-hover:bg-green-500 group-hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </span>
                        <span class="text-gray-700 text-lg group-hover:text-gray-900 transition-colors">Implementing
                            community-based waste management and recycling programs.</span>
                    </li>
                    <li class="flex items-start group">
                        <span
                            class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 text-green-500 flex items-center justify-center mr-3 mt-1 group-hover:bg-green-500 group-hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </span>
                        <span class="text-gray-700 text-lg group-hover:text-gray-900 transition-colors">Promoting water
                            conservation and sanitation projects in water-scarce regions.</span>
                    </li>
                    <li class="flex items-start group">
                        <span
                            class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 text-green-500 flex items-center justify-center mr-3 mt-1 group-hover:bg-green-500 group-hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </span>
                        <span class="text-gray-700 text-lg group-hover:text-gray-900 transition-colors">Conducting
                            workshops on climate change adaptation and sustainable living practices.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Rural Development -->
    <section class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 inline-block relative">
                Rural Development
                <div
                    class="absolute bottom-0 left-0 w-full h-1 bg-brand-500 rounded-full transform scale-x-0 transition-transform duration-500 hover:scale-x-100 origin-left">
                </div>
            </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Approach Card -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border-t-4 border-brand-500"
                data-aos="fade-right">
                <div class="flex items-center mb-6">
                    <div class="p-3 bg-brand-100 rounded-full text-brand-600 mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">Our Approach</h3>
                </div>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Uplifting rural communities by enhancing livelihoods, ensuring access to basic amenities like clean
                    water, and fostering local entrepreneurship to create self-sufficient and thriving villages. We are
                    committed to fostering sustainable and impactful change by addressing the root causes of societal
                    challenges. Our approach is holistic and community-centric, ensuring that our interventions are not
                    just effective but also culturally sensitive and long-lasting. We believe in empowering individuals
                    and communities with the knowledge, skills, and resources they need to build a self-reliant and
                    prosperous future. Through strategic partnerships and data-driven strategies, we meticulously plan
                    and execute each project to maximize its positive impact. We engage directly with local stakeholders
                    to co-create solutions that are relevant, scalable, and owned by the community itself, ensuring that
                    our work leaves a legacy of resilience and progress for generations to come.
                </p>
            </div>

            <!-- Activities Card -->
            <div class="bg-gradient-to-br from-brand-50 to-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border-t-4 border-accent-500"
                data-aos="fade-left">
                <div class="flex items-center mb-6">
                    <div class="p-3 bg-accent-100 rounded-full text-accent-600 mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">Key Activities</h3>
                </div>
                <ul class="space-y-4">
                    <li class="flex items-start group">
                        <span
                            class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 text-green-500 flex items-center justify-center mr-3 mt-1 group-hover:bg-green-500 group-hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </span>
                        <span class="text-gray-700 text-lg group-hover:text-gray-900 transition-colors">Implementing
                            programs for sustainable agriculture and livelihood enhancement.</span>
                    </li>
                    <li class="flex items-start group">
                        <span
                            class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 text-green-500 flex items-center justify-center mr-3 mt-1 group-hover:bg-green-500 group-hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </span>
                        <span class="text-gray-700 text-lg group-hover:text-gray-900 transition-colors">Ensuring access
                            to clean and safe drinking water through borewells and filtration systems.</span>
                    </li>
                    <li class="flex items-start group">
                        <span
                            class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 text-green-500 flex items-center justify-center mr-3 mt-1 group-hover:bg-green-500 group-hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </span>
                        <span class="text-gray-700 text-lg group-hover:text-gray-900 transition-colors">Promoting rural
                            entrepreneurship with a focus on local crafts and produce.</span>
                    </li>
                    <li class="flex items-start group">
                        <span
                            class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 text-green-500 flex items-center justify-center mr-3 mt-1 group-hover:bg-green-500 group-hover:text-white transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </span>
                        <span class="text-gray-700 text-lg group-hover:text-gray-900 transition-colors">Improving rural
                            infrastructure, including roads, community halls, and sanitation facilities.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

</div>

<?php include 'footer.php'; ?>
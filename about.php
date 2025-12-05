<?php
define('PAGE_TITLE', 'About Us');
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

<!-- Our Story & Chairperson -->
<section class="py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Story & Chairperson</h2>
                <h3 class="text-xl font-semibold text-brand-600 mb-4">Shakuntala Raghunath Lokhande (Chairperson)</h3>
                <p class="text-gray-600 leading-relaxed mb-6 text-lg">
                    This renowned foundation was born from a simple yet powerful idea. But since then, real, lasting
                    change has been possible, made possible by a community deeply rooted in commitment. We saw untapped
                    potential, unheard voices, and unmet needs in the population, and we were motivated to take action.
                    Our journey began not with a grand act, but with a focused local initiative. This process of deep
                    listening became the cornerstone of our philosophy. Rather than imposing solutions, we worked to
                    empower residents, providing them with the tools, resources, and platform to take responsibility for
                    their own development.
                </p>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Today, the renowned foundation has grown from that single seed of an idea to a powerful force for
                    good, supporting causes such as education, healthcare, environmental sustainability, and policy
                    advocacy. Yet, our core philosophy remains unchanged. Listen with compassion, empower with dignity,
                    and act with determination. Our journey is living proof of the extraordinary power that emerges when
                    people come together with a shared purpose and an unwavering belief in a better tomorrow.
                </p>
            </div>
            <div class="relative" data-aos="fade-left">
                <div class="absolute inset-0 bg-brand-600 rounded-2xl transform rotate-3 opacity-20"></div>
                <!-- Assuming we should use the chairperson image here if available, or keep the activity image -->
                <img src="images/chairperson_suman_morye.jpg" alt="Shakuntala Raghunath Lokhande"
                    class="relative rounded-2xl shadow-xl w-full object-cover h-[500px]">
            </div>
        </div>
    </div>
</section>

<!-- Our Values & Principles -->
<section class="py-20 bg-brand-50">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Values & Principles</h2>
            <p class="text-xl text-gray-600 max-w-4xl mx-auto">
                Our values are the bedrock of our identity and the compass that guides every decision, project, and
                partnership we undertake. They are not merely words on a page, but deeply ingrained principles that we
                live by every day. They compel us to act with unwavering integrity, to place the needs of the community
                at the heart of our work, and to champion equity in all its forms. We believe that true progress is only
                possible through collaboration, and we are committed to fostering innovative, resilient solutions that
                create a just, fair, and sustainable world for all.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Value 1 -->
            <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-lg transition-all" data-aos="fade-up">
                <h3 class="text-xl font-bold text-brand-600 mb-3">Integrity</h3>
                <p class="text-gray-600">We operate with unwavering honesty, transparency, and accountability in all
                    that we do.</p>
            </div>
            <!-- Value 2 -->
            <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-lg transition-all" data-aos="fade-up"
                data-aos-delay="100">
                <h3 class="text-xl font-bold text-brand-600 mb-3">Community-Centric</h3>
                <p class="text-gray-600">We listen to and are led by the communities we serve, ensuring solutions are
                    relevant and sustainable.</p>
            </div>
            <!-- Value 3 -->
            <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-lg transition-all" data-aos="fade-up"
                data-aos-delay="200">
                <h3 class="text-xl font-bold text-brand-600 mb-3">Collaboration</h3>
                <p class="text-gray-600">We believe in the power of partnership and work with others to amplify our
                    collective impact.</p>
            </div>
            <!-- Value 4 -->
            <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-lg transition-all" data-aos="fade-up">
                <h3 class="text-xl font-bold text-brand-600 mb-3">Equity</h3>
                <p class="text-gray-600">We are committed to dismantling systemic barriers and creating a just and fair
                    society for all.</p>
            </div>
            <!-- Value 5 -->
            <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-lg transition-all" data-aos="fade-up"
                data-aos-delay="100">
                <h3 class="text-xl font-bold text-brand-600 mb-3">Innovation</h3>
                <p class="text-gray-600">We embrace creative solutions and data-driven approaches to solve complex
                    social problems.</p>
            </div>
            <!-- Value 6 -->
            <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-lg transition-all" data-aos="fade-up"
                data-aos-delay="200">
                <h3 class="text-xl font-bold text-brand-600 mb-3">Resilience</h3>
                <p class="text-gray-600">We are persistent and determined in our pursuit of long-term, meaningful
                    change.</p>
            </div>
        </div>
    </div>
</section>

<!-- From Our Best Wishers -->
<section id="supporters" class="py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">From Our Best Wishers</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Words of encouragement and support from leaders and partners who believe in our vision.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Wisher 1 -->
            <div class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-lg transition-all" data-aos="fade-up">
                <div class="w-32 h-32 mx-auto mb-6 rounded-full overflow-hidden border-4 border-white shadow-md">
                    <!-- Placeholder or keep existing images if they match names, otherwise use generic or placeholder -->
                    <img src="images/well_wisher1.jpg" alt="Mr. Sachin Sukhadev Khandekar"
                        class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Mr. Sachin Sukhadev Khandekar</h3>
                <p class="text-brand-600 font-medium mb-4">Politician</p>
                <p class="text-gray-500 text-sm italic">"The Vikhyat Foundation is a social organization that is
                    currently working towards the comprehensive development and rehabilitation of people in remote and
                    ultra-remote areas. My warmest wishes for this work of the renowned foundation and its future
                    endeavors."</p>
            </div>

            <!-- Wisher 2 -->
            <div class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-lg transition-all" data-aos="fade-up"
                data-aos-delay="100">
                <div class="w-32 h-32 mx-auto mb-6 rounded-full overflow-hidden border-4 border-white shadow-md">
                    <img src="images/well_wisher2.jpg" alt="Mr. Lokesh Ulhas Patil" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Mr. Lokesh Ulhas Patil</h3>
                <p class="text-brand-600 font-medium mb-4">Businessman</p>
                <p class="text-gray-500 text-sm italic">"The need of the hour today is IT Skills along with education. I
                    wish the “Vikhayt Foundation” to all the best for this initiative of going to the localities and
                    educating the college students there about the importance of IT Skills and also providing them with
                    training."</p>
            </div>

            <!-- Wisher 3 -->
            <div class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-lg transition-all" data-aos="fade-up"
                data-aos-delay="200">
                <div class="w-32 h-32 mx-auto mb-6 rounded-full overflow-hidden border-4 border-white shadow-md">
                    <img src="images/well_wisher3.jpg" alt="Dr. Pradnya G. Bengale" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Dr. Pradnya G. Bengale</h3>
                <p class="text-brand-600 font-medium mb-4">Doctor</p>
                <p class="text-gray-500 text-sm italic">"The Vikhyat Foundation is doing work that befits the phrase
                    "Human service is true wealth". Today, it is very important to create public awareness among the
                    people about health problems and their solutions. Thank you, Vikhyat Foundation"</p>
            </div>

            <!-- Wisher 4 -->
            <div class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-lg transition-all" data-aos="fade-up">
                <div class="w-32 h-32 mx-auto mb-6 rounded-full overflow-hidden border-4 border-white shadow-md">
                    <img src="images/well_wisher4.jpg" alt="Sangeeta Sawant" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Sangeeta Sawant</h3>
                <p class="text-brand-600 font-medium mb-4">Lawyer</p>
                <p class="text-gray-500 text-sm italic">"The government has created many schemes for the benefit of the
                    people. I appreciate the fact that some of these schemes are being brought to the people through the
                    “Vikhyat Foundation”. Best wishes for the future."</p>
            </div>

            <!-- Wisher 5 -->
            <div class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-lg transition-all" data-aos="fade-up"
                data-aos-delay="100">
                <div class="w-32 h-32 mx-auto mb-6 rounded-full overflow-hidden border-4 border-white shadow-md">
                    <img src="images/well_wisher5.jpg" alt="Anushka G. Ghag" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Anushka G. Ghag</h3>
                <p class="text-brand-600 font-medium mb-4">Business Woman</p>
                <p class="text-gray-500 text-sm italic">"The “Vikhyat Foundation” is undertaking many initiatives under
                    the concept of "Skill Development", which is benefiting the younger generation. The aim of creating
                    a skilled new generation is truly commendable."</p>
            </div>

            <!-- Wisher 6 -->
            <div class="bg-gray-50 rounded-xl p-6 text-center hover:shadow-lg transition-all" data-aos="fade-up"
                data-aos-delay="200">
                <div class="w-32 h-32 mx-auto mb-6 rounded-full overflow-hidden border-4 border-white shadow-md">
                    <img src="images/well_wisher6.jpg" alt="Shivani Thorat" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Shivani Thorat</h3>
                <p class="text-brand-600 font-medium mb-4">Actress</p>
                <p class="text-gray-500 text-sm italic">"I thank the "Vikhyat Foundation" for its important work of
                    preserving cultural heritage along with social service and organizing to various programs to promote
                    talent."</p>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
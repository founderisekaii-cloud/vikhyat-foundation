<?php
define('PAGE_TITLE', 'Home');
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

<!-- Mission, Vision, Purpose Section -->
<section class="py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
            <!-- Purpose -->
            <div class="p-8 rounded-2xl bg-brand-50 border border-brand-100 hover:shadow-xl transition-all"
                data-aos="fade-up">
                <div
                    class="w-16 h-16 bg-brand-100 text-brand-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Our Purpose</h2>
                <p class="text-gray-600 leading-relaxed">
                    The purpose of Vikhyat Foundation is educational, social, cultural, religious, health and sports
                    development.
                </p>
            </div>

            <!-- Mission -->
            <div class="p-8 rounded-2xl bg-white border border-gray-200 shadow-lg transform md:-translate-y-4 hover:shadow-2xl transition-all"
                data-aos="fade-up" data-aos-delay="100">
                <div
                    class="w-16 h-16 bg-brand-600 text-white rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                        </path>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Our Mission</h2>
                <p class="text-gray-600 leading-relaxed">
                    To promote and carry on health care, relief of poverty, medical aid, skill-base education and
                    training, helping the victims of natural calamities and environmental preservation.
                </p>
            </div>

            <!-- Vision -->
            <div class="p-8 rounded-2xl bg-brand-50 border border-brand-100 hover:shadow-xl transition-all"
                data-aos="fade-up" data-aos-delay="200">
                <div
                    class="w-16 h-16 bg-brand-100 text-brand-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                        </path>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Our Vision</h2>
                <p class="text-gray-600 leading-relaxed">
                    To establish and maintain welfare hostels, ashrams, dharmshalas, educational and skill training
                    centers.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Supporters Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6" data-aos="fade-up">Endorsed by Leaders, Powered by
            Community</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-10" data-aos="fade-up" data-aos-delay="100">
            Our vision is shared and supported by respected politians, business leaders, and community advocates. Read
            their words of encouragement and discover why they stand with us.
        </p>
        <a href="about.php#supporters"
            class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-full text-brand-700 bg-brand-100 hover:bg-brand-200 transition-colors"
            data-aos="fade-up" data-aos-delay="200">
            See Our Supporters
        </a>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-brand-900 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <svg class="h-full w-full" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0 100 C 20 0 50 0 100 100 Z" fill="white" />
        </svg>
    </div>
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h2 class="text-3xl md:text-5xl font-bold text-white mb-6" data-aos="fade-up">Join Our Movement Today</h2>
        <p class="text-xl text-brand-100 max-w-2xl mx-auto mb-10" data-aos="fade-up" data-aos-delay="100">
            Become a part of a community dedicated to making a real, tangible difference. Your support, time, and voice
            are invaluable.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="200">
            <a href="get-involved.php"
                class="bg-white text-brand-900 px-8 py-4 rounded-full font-bold text-lg hover:bg-gray-100 transition-all shadow-lg">
                Volunteer With Us
            </a>
            <a href="get-involved.php#donate"
                class="bg-brand-600 text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-brand-500 transition-all shadow-lg shadow-brand-900/50">
                Donate Now
            </a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
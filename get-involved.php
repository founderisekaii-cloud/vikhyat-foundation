<?php
define('PAGE_TITLE', 'Get Involved');
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

<!-- Ways to Get Involved Grid -->
<section class="py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-20">
            <!-- Volunteer -->
            <div id="volunteer"
                class="bg-brand-50 rounded-2xl p-8 border border-brand-100 hover:shadow-xl transition-all"
                data-aos="fade-right">
                <div class="w-16 h-16 bg-brand-100 text-brand-600 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Volunteer With Us</h2>
                <p class="text-gray-600 mb-6">
                    Join our team of dedicated volunteers and contribute your time and skills to our various
                    initiatives. Whether it's teaching, organizing events, or field work, your help matters.
                </p>
                <a href="#inquiry-form"
                    class="text-brand-600 font-semibold hover:text-brand-700 inline-flex items-center">
                    Join the Team <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>

            <!-- Spread the Word -->
            <div class="bg-white rounded-2xl p-8 border border-gray-200 shadow-lg hover:shadow-xl transition-all"
                data-aos="fade-left">
                <div class="w-16 h-16 bg-pink-100 text-pink-600 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                        </path>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Spread the Word</h2>
                <p class="text-gray-600 mb-6">
                    Help us reach more people by sharing our mission on social media. Your voice can inspire others to
                    join the cause and make a difference.
                </p>
                <div class="flex space-x-4">
                    <a href="https://www.facebook.com/people/Vikhyat-Foundation/61583891132823/" target="_blank"
                        rel="noopener noreferrer" class="text-gray-400 hover:text-blue-600 transition-colors"><span
                            class="sr-only">Facebook</span><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg></a>
                    <a href="https://www.instagram.com/vikhyat_foundation/" target="_blank" rel="noopener noreferrer"
                        class="text-gray-400 hover:text-pink-600 transition-colors"><span
                            class="sr-only">Instagram</span><svg class="h-6 w-6" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg></a>
                    <a href="https://youtube.com/@vikhyatfoundation?si=Zi2wVSugmQaEK5OB" target="_blank"
                        rel="noopener noreferrer" class="text-gray-400 hover:text-red-600 transition-colors"><span
                            class="sr-only">YouTube</span><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                        </svg></a>
                    <a href="https://wa.me/919619578549" target="_blank" rel="noopener noreferrer"
                        class="text-gray-400 hover:text-green-500 transition-colors"><span
                            class="sr-only">WhatsApp</span><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.017-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                        </svg></a>
                </div>
            </div>
        </div>

        <!-- Partnerships -->
        <div class="bg-gray-900 rounded-3xl p-8 md:p-12 text-center text-white mb-20" data-aos="fade-up">
            <h2 class="text-3xl font-bold mb-6">Partner With Us</h2>
            <p class="text-gray-300 max-w-2xl mx-auto mb-8 text-lg">
                We collaborate with corporations, non-profits, and community groups to amplify our impact. Let's work
                together to create sustainable solutions.
            </p>
            <a href="#inquiry-form"
                class="bg-white text-gray-900 px-8 py-3 rounded-full font-bold hover:bg-gray-100 transition-colors inline-block">
                Become a Partner
            </a>
        </div>
    </div>
</section>

<!-- Donation Section -->
<section id="donate" class="py-20 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Make a Donation</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Your contribution can change lives. Choose a cause to support or make a general donation.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            <!-- Plan 1 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition-all duration-300"
                data-aos="fade-up" data-aos-delay="0">
                <div class="h-48 relative overflow-hidden group">
                    <img src="images/educate_child.png" alt="Educate a Child"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/10"></div>
                </div>
                <div class="p-8 text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Educate a Child</h3>
                    <div class="text-4xl font-bold text-brand-600 mb-4">₹1,000<span
                            class="text-base font-normal text-gray-500">/mo</span></div>
                    <p class="text-gray-600 mb-6">Provide books, uniform, and tuition for one underprivileged child.</p>
                    <div class="flex gap-3">
                        <button onclick="openRazorpay(1000, 'Educate a Child')"
                            class="flex-1 bg-brand-600 text-white font-bold py-3 rounded-lg hover:bg-brand-700 transition-colors shadow-md">Donate
                            Now</button>
                        <button onclick="shareProject('Educate a Child', 'Help us educate a child! Donate here: https://vikhyatfoundation.com/get-involved.php')"
                            class="bg-gray-100 text-brand-600 p-3 rounded-lg hover:bg-brand-50 hover:text-brand-700 transition-colors border border-gray-200 shadow-sm"
                            title="Share this Cause">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Plan 2 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition-all duration-300 border-2 border-brand-500 relative"
                data-aos="fade-up" data-aos-delay="100">
                <div class="absolute top-0 right-0 bg-brand-500 text-white text-xs font-bold px-3 py-1 rounded-bl-lg">
                    POPULAR</div>
                <div class="h-48 relative overflow-hidden group">
                    <img src="images/sponsor_class.png" alt="Sponsor a Class"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/10"></div>
                </div>
                <div class="p-8 text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Sponsor a Class</h3>
                    <div class="text-4xl font-bold text-brand-600 mb-4">₹5,000<span
                            class="text-base font-normal text-gray-500">/mo</span></div>
                    <p class="text-gray-600 mb-6">Support the educational needs of an entire classroom for a month.</p>
                    <div class="flex gap-3">
                        <button onclick="openRazorpay(5000, 'Sponsor a Class')"
                            class="flex-1 bg-brand-600 text-white font-bold py-3 rounded-lg hover:bg-brand-700 transition-colors shadow-md">Donate
                            Now</button>
                        <button onclick="shareProject('Sponsor a Class', 'Support a classroom! Donate here: https://vikhyatfoundation.com/get-involved.php')"
                            class="bg-gray-100 text-brand-600 p-3 rounded-lg hover:bg-brand-50 hover:text-brand-700 transition-colors border border-gray-200 shadow-sm"
                            title="Share this Cause">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Plan 3 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition-all duration-300"
                data-aos="fade-up" data-aos-delay="200">
                <div class="h-48 relative overflow-hidden group">
                    <img src="images/health_camp.png" alt="Health Camp"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/10"></div>
                </div>
                <div class="p-8 text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Health Camp</h3>
                    <div class="text-4xl font-bold text-brand-600 mb-4">₹10,000<span
                            class="text-base font-normal text-gray-500">/camp</span></div>
                    <p class="text-gray-600 mb-6">Fund a medical camp to provide free checkups and medicine.</p>
                    <div class="flex gap-3">
                        <button onclick="openRazorpay(10000, 'Health Camp')"
                            class="flex-1 bg-brand-600 text-white font-bold py-3 rounded-lg hover:bg-brand-700 transition-colors shadow-md">Donate
                            Now</button>
                        <button onclick="shareProject('Health Camp', 'Fund a medical camp! Donate here: https://vikhyatfoundation.com/get-involved.php')"
                            class="bg-gray-100 text-brand-600 p-3 rounded-lg hover:bg-brand-50 hover:text-brand-700 transition-colors border border-gray-200 shadow-sm"
                            title="Share this Cause">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Custom Donation -->
        <div class="max-w-2xl mx-auto bg-white rounded-2xl shadow-lg p-8" data-aos="fade-up">
            <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Custom Donation</h3>
            <form id="custom-donation-form" class="space-y-4" onsubmit="handleCustomDonation(event)">
                <div>
                    <label for="custom-amount" class="block text-sm font-medium text-gray-700 mb-1">Amount (₹)</label>
                    <input type="number" id="custom-amount" name="amount" min="500" required
                        placeholder="Enter amount (min ₹500)"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-transparent outline-none transition-all">
                </div>
                <div>
                    <label for="donor-name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                    <input type="text" id="donor-name" name="name" required placeholder="Your Name"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-transparent outline-none transition-all">
                </div>
                <div>
                    <label for="donor-email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <input type="email" id="donor-email" name="email" required placeholder="Your Email"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-transparent outline-none transition-all">
                </div>
                <div class="flex gap-3">
                    <button type="submit"
                        class="flex-1 bg-gray-900 text-white font-bold py-3 rounded-lg hover:bg-gray-800 transition-colors shadow-md">
                        Proceed to Pay
                    </button>
                    <button type="button" onclick="shareProject('Donate to Vikhyat Foundation', 'Support our mission! Donate here: https://vikhyatfoundation.com/get-involved.php')"
                        class="bg-gray-100 text-gray-900 p-3 rounded-lg hover:bg-gray-200 transition-colors border border-gray-200 shadow-sm"
                        title="Share this Cause">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                            </path>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Unified Inquiry Form -->
<section id="inquiry-form" class="py-20 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Get in Touch</h2>
            <p class="text-gray-600">
                Interested in volunteering or partnering with us? Fill out the form below.
            </p>
        </div>
        <form id="inquiry-form-el" onsubmit="handleInquirySubmit(event)"
            class="space-y-6 bg-gray-50 p-8 rounded-2xl shadow-inner" data-aos="fade-up">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="inquiry-name" class="block text-sm font-medium text-gray-700 mb-1">Full Name / Org
                        Name</label>
                    <input type="text" id="inquiry-name" name="name" required
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-transparent outline-none transition-all">
                </div>
                <div>
                    <label for="inquiry-email" class="block text-sm font-medium text-gray-700 mb-1">Email
                        Address</label>
                    <input type="email" id="inquiry-email" name="email" required
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-transparent outline-none transition-all">
                </div>
            </div>
            <div>
                <label for="inquiry-type" class="block text-sm font-medium text-gray-700 mb-1">I am interested
                    in</label>
                <select id="inquiry-type" name="type" onchange="toggleFields()"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-transparent outline-none transition-all">
                    <option value="volunteer">Volunteering</option>
                    <option value="partnership">Partnership Proposal</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <!-- Conditional Field: Skill (for Volunteer) -->
            <div id="skill-field" class="hidden">
                <label for="inquiry-skill" class="block text-sm font-medium text-gray-700 mb-1">Your Skill /
                    Expertise</label>
                <input type="text" id="inquiry-skill" name="skill"
                    placeholder="e.g., Teaching, Medical, Event Management"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-transparent outline-none transition-all">
            </div>

            <!-- Conditional Field: Specify (for Other) -->
            <div id="other-field" class="hidden">
                <label for="inquiry-other" class="block text-sm font-medium text-gray-700 mb-1">Please Specify</label>
                <input type="text" id="inquiry-other" name="other_specify" placeholder="Please specify your interest"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-transparent outline-none transition-all">
            </div>

            <div>
                <label for="inquiry-message" class="block text-sm font-medium text-gray-700 mb-1">Message /
                    Proposal</label>
                <textarea id="inquiry-message" name="message" rows="4" required
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-transparent outline-none transition-all"></textarea>
            </div>
            <button type="submit"
                class="w-full bg-brand-600 text-white font-bold py-3 rounded-lg hover:bg-brand-700 transition-colors shadow-lg">
                Submit Inquiry
            </button>
        </form>
    </div>
</section>

<!-- Razorpay Script -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    function toggleFields() {
        const type = document.getElementById('inquiry-type').value;
        const skillField = document.getElementById('skill-field');
        const otherField = document.getElementById('other-field');

        // Reset visibility
        if (skillField) skillField.classList.add('hidden');
        if (otherField) otherField.classList.add('hidden');

        // Show based on selection
        if (type === 'volunteer' && skillField) {
            skillField.classList.remove('hidden');
        } else if (type === 'other' && otherField) {
            otherField.classList.remove('hidden');
        }
    }

    // Initialize on load
    document.addEventListener('DOMContentLoaded', toggleFields);

    function handleInquirySubmit(e) {
        e.preventDefault();
        const form = e.target;
        const formData = new FormData(form);

        fetch('api/inquiry.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showToast(data.message || 'Inquiry sent successfully!');
                    form.reset();
                    toggleFields(); // Reset fields visibility
                } else {
                    showToast(data.message || 'Failed to send inquiry.', 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showToast('An error occurred. Please try again.', 'error');
            });
    }

    function openRazorpay(amount, description, prefillName = '', prefillEmail = '') {
        var options = {
            "key": "<?php echo RAZORPAY_KEY_ID; ?>",
            "amount": amount * 100,
            "currency": "INR",
            "name": "Vikhyat Foundation",
            "description": description,
            "image": "images/logo.png",
            "handler": function (response) {
                // Send verification request to server
                const formData = new FormData();
                formData.append('razorpay_payment_id', response.razorpay_payment_id);
                formData.append('amount', amount);
                formData.append('name', prefillName || 'Donor');
                formData.append('email', prefillEmail);

                fetch('api/verify-payment.php', {
                    method: 'POST',
                    body: formData
                })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {
                            showToast("Payment Successful! Receipt sent to your email.");
                        } else {
                            showToast("Payment Successful, but receipt failed: " + (data.message || 'Unknown error'), 'error');
                        }
                    })
                    .catch(err => {
                        console.error('Error:', err);
                        showToast("Payment Successful! (Verification failed)", 'error');
                    });
            },
            "prefill": {
                "name": prefillName,
                "email": prefillEmail,
                "contact": ""
            },
            "theme": {
                "color": "#0ea5e9"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.on('payment.failed', function (response) {
            showToast("Payment Failed: " + response.error.description, 'error');
        });
        rzp1.open();
    }

    function handleCustomDonation(event) {
        event.preventDefault();
        const amount = document.getElementById('custom-amount').value;
        const name = document.getElementById('donor-name').value;
        const email = document.getElementById('donor-email').value;

        if (amount < 500) {
            showToast("Minimum donation amount is ₹500", 'error');
            return;
        }

        openRazorpay(amount, 'Custom Donation', name, email);
    }

    // Share Functionality
    async function shareProject(title, text) {
        const url = 'https://vikhyatfoundation.com/get-involved.php'; 
        
        if (navigator.share) {
            try {
                await navigator.share({
                    title: title,
                    text: text,
                    url: url
                });
                showToast('Sharing opened!');
            } catch (err) {
                console.log('Error sharing:', err);
                if (err.name !== 'AbortError') showToast('Could not share.', 'error');
            }
        } else {
            // Fallback: Copy to clipboard
            try {
                const shareText = text; // Just copy the text which contains the link
                await navigator.clipboard.writeText(shareText);
                showToast('Link copied to clipboard!');
            } catch (err) {
                console.error('Clipboard error:', err);
                showToast('Share manually: ' + url);
            }
        }
    }
</script>

<?php include 'footer.php'; ?>
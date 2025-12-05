<?php
define('PAGE_TITLE', 'Contact Us');
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

<!-- Contact Content -->
<section class="py-20 bg-white">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 mb-20">

            <!-- Contact Form -->
            <div class="bg-gray-50 p-8 rounded-2xl shadow-lg order-2 lg:order-1" data-aos="fade-right">
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Send Us a Message</h2>
                <p class="text-gray-600 mb-8">Fill out the form below and we'll get back to you as soon as possible.</p>

                <form onsubmit="handleContactSubmit(event)" class="space-y-6">
                    <input type="hidden" name="type" value="Contact">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                        <input type="text" id="name" name="name" required placeholder="Enter your full name"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-transparent outline-none transition-all">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <input type="email" id="email" name="email" required placeholder="Enter your email address"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-transparent outline-none transition-all">
                    </div>
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                        <input type="text" id="subject" name="subject" required
                            placeholder="Enter the subject of your message"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-transparent outline-none transition-all">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                        <textarea id="message" name="message" rows="4" required placeholder="Enter your message"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-transparent outline-none transition-all"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full bg-brand-600 text-white font-bold py-3 rounded-lg hover:bg-brand-700 transition-colors shadow-lg shadow-brand-600/30">
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="order-1 lg:order-2" data-aos="fade-left">
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Contact Information</h2>
                <p class="text-gray-600 mb-8">Reach out to us through any of the following methods.</p>

                <div class="space-y-8 mb-12">
                    <!-- Office -->
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 bg-brand-100 rounded-full flex items-center justify-center text-brand-600 flex-shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Our Office</h3>
                            <p class="text-gray-600">
                                Govind building, station road,<br>
                                thane west 400601
                            </p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 bg-brand-100 rounded-full flex items-center justify-center text-brand-600 flex-shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Email Us</h3>
                            <a href="mailto:vikhyatfoundation@gmail.com"
                                class="text-brand-600 hover:text-brand-700 transition-colors">vikhyatfoundation@gmail.com</a>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 bg-brand-100 rounded-full flex items-center justify-center text-brand-600 flex-shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Call Us</h3>
                            <a href="tel:+919619578549"
                                class="text-brand-600 hover:text-brand-700 transition-colors">+91 96195 78549</a>
                        </div>
                    </div>
                </div>

                <!-- Social Links -->
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Follow Us</h3>
                    <p class="text-gray-600 mb-6">Stay connected and up-to-date with our work.</p>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/people/Vikhyat-Foundation/61583891132823/" target="_blank"
                            rel="noopener noreferrer"
                            class="w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center hover:bg-blue-700 transition-colors shadow-md">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/vikhyat_foundation/" target="_blank"
                            rel="noopener noreferrer"
                            class="w-10 h-10 bg-pink-600 text-white rounded-full flex items-center justify-center hover:bg-pink-700 transition-colors shadow-md">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                        <a href="https://youtube.com/@vikhyatfoundation?si=Zi2wVSugmQaEK5OB" target="_blank"
                            rel="noopener noreferrer"
                            class="w-10 h-10 bg-red-600 text-white rounded-full flex items-center justify-center hover:bg-red-700 transition-colors shadow-md">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                            </svg>
                        </a>
                        <a href="https://wa.me/919619578549" target="_blank" rel="noopener noreferrer"
                            class="w-10 h-10 bg-green-500 text-white rounded-full flex items-center justify-center hover:bg-green-600 transition-colors shadow-md">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.017-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Google Map -->
        <div class="rounded-2xl overflow-hidden shadow-lg h-[400px] w-full" data-aos="fade-up">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.272827725887!2d72.9757513!3d19.1832966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b920b6e34f3f%3A0x6239636608886226!2sGovind%20Building%2C%20Station%20Rd%2C%20Thane%20West%2C%20Thane%2C%20Maharashtra%20400601!5e0!3m2!1sen!2sin!4v1709658000000!5m2!1sen!2sin"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

</section>

<!-- Contact Form Script -->
<script>
    function handleContactSubmit(e) {
        e.preventDefault();
        const form = e.target;
        const formData = new FormData(form);

        // Disable button
        const btn = form.querySelector('button[type="submit"]');
        const originalText = btn.innerText;
        btn.disabled = true;
        btn.innerText = 'Sending...';

        fetch('api/inquiry.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success' || data.success) {
                    showToast(data.message || 'Message sent successfully!');
                    form.reset();
                } else {
                    showToast(data.message || 'Failed to send message.', 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showToast('An error occurred. Please try again.', 'error');
            })
            .finally(() => {
                btn.disabled = false;
                btn.innerText = originalText;
            });
    }
</script>

<?php include 'footer.php'; ?>
<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo defined('PAGE_TITLE') ? PAGE_TITLE . ' - ' . SITE_NAME : SITE_NAME; ?></title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Tailwind CSS (CDN for development/no-build) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9', // Primary Blue
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        },
                        accent: {
                            500: '#06b6d4', // Cyan/Teal accent from logo
                        }
                    }
                }
            }
        }
    </script>

    <style>
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #0ea5e9;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #0284c7;
        }

        /* Mobile Menu Transition */
        #mobile-menu {
            transition: transform 0.3s ease-in-out;
        }
    </style>
</head>

<body class="font-sans text-gray-800 antialiased bg-gray-50 flex flex-col min-h-screen">

    <!-- Navigation -->
    <nav class="bg-white shadow-md fixed w-full z-50 transition-all duration-300" id="navbar">
        <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="index.php" class="flex items-center gap-3">
                        <img class="h-12 w-auto" src="images/logo.png" alt="Vikhyat Foundation">
                        <div class="hidden sm:block">
                            <span class="block font-bold text-xl text-brand-900 tracking-tight leading-none">Vikhyat
                                Foundation</span>
                            <span class="block text-xs text-brand-600 font-medium tracking-wide">Humanity at Heart,
                                Progress in Action</span>
                        </div>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex md:items-center md:space-x-8">
                    <a href="index.php"
                        class="text-gray-600 hover:text-brand-600 font-medium transition-colors">Home</a>
                    <a href="about.php" class="text-gray-600 hover:text-brand-600 font-medium transition-colors">About
                        Us</a>
                    <a href="what-we-do.php"
                        class="text-gray-600 hover:text-brand-600 font-medium transition-colors">What We Do</a>
                    <a href="our-activity.php"
                        class="text-gray-600 hover:text-brand-600 font-medium transition-colors">Our Activity</a>
                    <a href="get-involved.php"
                        class="text-gray-600 hover:text-brand-600 font-medium transition-colors">Get Involved</a>
                    <a href="contact.php"
                        class="text-gray-600 hover:text-brand-600 font-medium transition-colors">Contact</a>
                </div>

                <!-- Get Involved Button -->
                <div class="hidden md:flex items-center">
                    <a href="get-involved.php"
                        class="bg-brand-600 text-white px-5 py-2.5 rounded-full font-semibold hover:bg-brand-700 transition-all shadow-lg hover:shadow-brand-500/30">
                        Get Involved
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="flex items-center md:hidden">
                    <button type="button" onclick="toggleMobileMenu()"
                        class="text-gray-600 hover:text-brand-600 focus:outline-none p-2">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Overlay -->
        <div id="mobile-menu"
            class="fixed inset-0 z-40 bg-white transform translate-x-full md:hidden flex flex-col pt-24 px-6 space-y-6 h-screen w-screen">
            <button onclick="toggleMobileMenu()" class="absolute top-6 right-6 text-gray-600 p-2">
                <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <a href="index.php" class="text-2xl font-semibold text-gray-800 hover:text-brand-600">Home</a>
            <a href="about.php" class="text-2xl font-semibold text-gray-800 hover:text-brand-600">About Us</a>
            <a href="what-we-do.php" class="text-2xl font-semibold text-gray-800 hover:text-brand-600">What We Do</a>
            <a href="our-activity.php" class="text-2xl font-semibold text-gray-800 hover:text-brand-600">Our
                Activity</a>
            <a href="contact.php" class="text-2xl font-semibold text-gray-800 hover:text-brand-600">Contact</a>
            <a href="get-involved.php"
                class="bg-brand-600 text-white text-center py-3 rounded-xl font-bold text-xl shadow-lg">Get Involved</a>
        </div>
    </nav>

    <!-- Spacer for fixed navbar -->
    <div class="h-20"></div>

    <main class="flex-grow">
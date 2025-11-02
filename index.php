<!doctype html>
<html lang="en" dir="ltr" data-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEV Company – Cement & Blocks</title>
    <meta name="description" content="KEV Company • Industrial cement and concrete blocks • Premium quality for professional builders">
    <meta name="theme-color" content="#1c1c1c">

    <!-- Favicon (from original) -->
    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'%3E%3Crect width='64' height='64' rx='10' fill='%231c1c1c'/%3E%3Cpath d='M12 44 L24 20 L30 32 L38 20 L52 44' stroke='%23bcc3c6' stroke-width='6' fill='none' stroke-linecap='round'/%3E%3C/svg%3E">

    <!-- Fonts (from original) -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Noto+Sans+Arabic:wght@300;400;600;800&display=swap" rel="stylesheet">

    <!-- Swiper CSS (from original) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!--
    Tailwind Configuration
    We bridge Tailwind with the original CSS variables for seamless theme switching.
  -->
    <script>
        tailwind.config = {
            darkMode: ['selector', '[data-theme="dark"]'],
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'system-ui', '-apple-system', 'sans-serif'],
                        arabic: ['"Noto Sans Arabic"', 'sans-serif']
                    },
                    // We tell Tailwind to use the CSS variables defined in the <style> block.
                    // This makes Tailwind automatically theme-aware.
                    colors: {
                        bg: 'var(--bg)',
                        surface: 'var(--surface)',
                        'surface-2': 'var(--surface-2)',
                        text: 'var(--text)',
                        muted: 'var(--muted)',
                        line: 'var(--line)',
                        brand: 'var(--brand)',
                        accent: 'var(--accent)',
                        white: 'var(--white)',
                        black: 'var(--black)',
                    },
                    borderRadius: {
                        '2xl': '26px',
                        'xl': '22px',
                        'lg': '16px',
                        'md': '12px',
                    },
                    boxShadow: {
                        xs: 'var(--shadow-xs)',
                        sm: 'var(--shadow-sm)',
                        md: 'var(--shadow-md)',
                        lg: 'var(--shadow-lg)',
                    },
                    spacing: {
                        'container-px': '1rem',
                    },
                    // Match the original clamp() for hero title
                    fontSize: {
                        'hero-title': 'clamp(32px, 5.5vw, 64px)',
                        'hero-sub': 'clamp(16px, 2vw, 20px)',
                        'section-title': 'clamp(28px, 4vw, 42px)',
                        'section-sub': 'clamp(16px, 1.8vw, 18px)',
                        'stat-strong': 'clamp(32px, 4vw, 42px)',
                    }
                }
            }
        }
    </script>

    <!--
    Custom CSS
    Contains the original theme variables, scrollbar, timeline,
    animations, and Swiper styles.
  -->
    <style>
        /* CSS Variables (from original) */
        :root {
            --white: #fff;
            --black: #000;
            --dark-slate: #3f5350;
            --cement: #1c1c1c;
            --grey: #404040;
            --light-grey: #595959;
            --bg: var(--cement);
            --surface: #141414;
            --surface-2: #1c1c1c;
            --text: #e9e9e9;
            --muted: #bdbdbd;
            --line: #2b2b2b;
            --brand: var(--dark-slate);
            --accent: var(--dark-slate);
            --shadow-xs: 0 2px 8px rgba(0, 0, 0, .25);
            --shadow-sm: 0 6px 16px rgba(0, 0, 0, .22);
            --shadow-md: 0 14px 34px rgba(0, 0, 0, .28);
            --shadow-lg: 0 34px 68px rgba(0, 0, 0, .35);
            --radius-2xl: 26px;
            --radius-xl: 22px;
            --radius-lg: 16px;
            --radius-md: 12px;
        }

        [data-theme=light] {
            --bg: #f5f5f5;
            --surface: #ffffff;
            --surface-2: #fbfbfb;
            --text: #171717;
            --muted: #5c5c5c;
            --line: #e6e6e6;
            --shadow-xs: 0 2px 8px rgba(0, 0, 0, .06);
            --shadow-sm: 0 6px 16px rgba(0, 0, 0, .08);
            --shadow-md: 0 14px 34px rgba(0, 0, 0, .12);
            --shadow-lg: 0 34px 68px rgba(0, 0, 0, .16);
        }

        /* --- Custom CSS Improvements --- */
        html {
            scroll-behavior: smooth;
        }

        /* Custom Text Selection */
        ::selection {
            background-color: var(--brand);
            color: var(--white);
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
            background-color: var(--surface);
        }

        ::-webkit-scrollbar-thumb {
            background-color: var(--brand);
            border-radius: 10px;
            border: 2px solid var(--surface);
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #4a6360;
            /* Lighter brand color */
        }

        /* --- End of Custom CSS Improvements --- */


        /* Base Body (from original) */
        body {
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        /* Dotted Noise Pattern (from original) */
        body::before {
            content: "";
            position: fixed;
            inset: 0;
            pointer-events: none;
            opacity: .16;
            mix-blend-mode: overlay;
            background-image: radial-gradient(rgba(255, 255, 255, .05) 1px, transparent 1px);
            background-size: 3px 3px;
            z-index: 0;
        }

        /* Scroll Progress Bar (from original) */
        .progressbar {
            position: fixed;
            top: 0;
            left: 0;
            height: 3px;
            width: 0;
            background: linear-gradient(90deg, var(--accent), #666);
            z-index: 101;
            transition: width 0.2s ease;
        }

        /* Hero Video Filter (from original) */
        .hero-video {
            filter: contrast(1.08) saturate(.9) brightness(.64);
        }

        [data-theme=light] .hero-video {
            filter: contrast(1) saturate(.9) brightness(.9);
        }

        /* Timeline Pseudo-Elements (from original) */
        .timeline {
            position: relative;
            padding-left: 60px;
        }

        .timeline::before {
            content: "";
            position: absolute;
            left: 20px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: var(--line);
        }

        .milestone {
            position: relative;
            padding: 20px 0;
        }

        .milestone::before {
            content: "";
            position: absolute;
            left: -45px;
            top: 28px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: var(--brand);
            box-shadow: 0 0 0 4px rgba(63, 83, 80, 0.2);
        }

        /* RTL Timeline (from original) */
        html[dir=rtl] .timeline {
            padding-left: 0;
            padding-right: 60px;
        }

        html[dir=rtl] .timeline::before {
            left: auto;
            right: 20px;
        }

        html[dir=rtl] .milestone::before {
            left: auto;
            right: -45px;
        }

        /* Swiper Custom Styles (from original, using CSS vars) */
        .swiper-button-next,
        .swiper-button-prev {
            color: var(--text);
            background: var(--surface-2);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 1px solid var(--line);
            box-shadow: var(--shadow-md);
            transition: all .3s ease;
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background: var(--brand);
            transform: scale(1.1);
        }

        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: 22px;
            font-weight: bold;
        }

        .swiper-pagination-bullet {
            background: var(--text);
            opacity: 0.4;
            width: 10px;
            height: 10px;
            transition: all .3s ease;
        }

        .swiper-pagination-bullet-active {
            background: var(--brand);
            opacity: 1;
            width: 30px;
            border-radius: 5px;
        }

        @media (max-width: 480px) {

            .swiper-button-next,
            .swiper-button-prev {
                width: 40px;
                height: 40px;
            }
        }

        /* --- UPDATED: Animation Classes --- */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity .6s ease-out, transform .6s ease-out;
        }

        .reveal.show {
            opacity: 1;
            transform: none;
        }

        /* Staggered animation delays */
        .delay-100 {
            transition-delay: 100ms;
        }

        .delay-200 {
            transition-delay: 200ms;
        }

        .delay-300 {
            transition-delay: 300ms;
        }

        .delay-400 {
            transition-delay: 400ms;
        }

        .delay-500 {
            transition-delay: 500ms;
        }


        /* --- NEW: Keyframe Animations --- */
        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(63, 83, 80, 0.7);
            }

            50% {
                transform: scale(1.02);
                box-shadow: 0 0 0 10px rgba(63, 83, 80, 0);
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-4px);
            }
        }

        @keyframes shine {
            0% {
                transform: translateX(-100%) skewX(-20deg);
            }

            100% {
                transform: translateX(200%) skewX(-20deg);
            }
        }

        /* --- NEW: Animation Utility Classes --- */
        .animate-pulse-slow {
            /* Apply animation to the primary CTA button */
            animation: pulse 2.5s infinite;
        }

        .animate-float-slow {
            /* Apply animation to the floating CTA buttons */
            animation: float 3s ease-in-out infinite;
        }

        /* New Shine Effect for Service Cards */
        .service-card-shine {
            position: relative;
            overflow: hidden;
        }

        .service-card-shine::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 50%;
            height: 100%;
            background: linear-gradient(90deg,
                    rgba(255, 255, 255, 0) 0%,
                    rgba(255, 255, 255, 0.08) 50%,
                    rgba(255, 255, 255, 0) 100%);
            transform: translateX(-150%) skewX(-20deg);
            transition: transform 0.7s ease;
        }

        [data-theme=light] .service-card-shine::after {
            background: linear-gradient(90deg,
                    rgba(0, 0, 0, 0) 0%,
                    rgba(0, 0, 0, 0.03) 50%,
                    rgba(0, 0, 0, 0) 100%);
        }

        .service-card-shine:hover::after {
            transform: translateX(250%) skewX(-20deg);
        }

        /* --- End of Keyframe Animations --- */

        /* Base container class */
        .container {
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            padding-left: 1rem;
            padding-right: 1rem;
        }

        @media (min-width: 640px) {
            .container {
                max-width: 640px;
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }
        }

        @media (min-width: 768px) {
            .container {
                max-width: 768px;
            }
        }

        @media (min-width: 1024px) {
            .container {
                max-width: 1024px;
            }
        }

        @media (min-width: 1280px) {
            .container {
                max-width: 1280px;
                padding-left: 2rem;
                padding-right: 2rem;
            }
        }

        /* Fallback for clamp() in hero-sub */
        .text-hero-sub {
            font-size: 16px;
        }

        @media (min-width: 768px) {
            .text-hero-sub {
                font-size: 18px;
            }
        }

        @media (min-width: 1280px) {
            .text-hero-sub {
                font-size: 20px;
            }
        }
    </style>
</head>

<body class="bg-bg text-text font-sans antialiased overflow-x-hidden">

    <!-- Scroll Progress Bar -->
    <div class="progressbar" id="progressbar"></div>

    <!-- 
    Mobile Navigation Menu 
    This is the new slide-out menu.
  -->
    <div id="mobileMenu" class="fixed inset-0 z-[60] flex h-screen w-full flex-col items-center justify-center gap-6 bg-surface p-8 transition-transform duration-300 ease-in-out lg:hidden -translate-x-full">
        <button id="mobileMenuCloseBtn" class="absolute top-6 right-6 p-2" aria-label="Close menu">
            <!-- Close (X) icon -->
            <svg class="h-8 w-8 text-text" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <a href="#home" class="text-2xl font-medium" data-i18n="nav_home">Home</a>
        <a href="#about" class="text-2xl font-medium" data-i18n="nav_about">About</a>
        <a href="#story" class="text-2xl font-medium" data-i18n="nav_story">Story</a>
        <a href="#services" class="text-2xl font-medium" data-i18n="nav_services">Services</a>
        <a href="#clients" class="text-2xl font-medium" data-i18n="nav_clients">Clients</a>
        <a href="#projects" class="text-2xl font-medium" data-i18n="nav_projects">Projects</a>
        <a href="#contact" class="text-2xl font-medium" data-i18n="nav_contact">Contact</a>
    </div>

    <!-- Header -->
    <header class="sticky top-0 z-50 border-b border-line bg-surface/90 backdrop-blur-lg transition-shadow duration-300" id="header">
        <div class="container">
            <nav class="flex items-center justify-between gap-5 py-4">
                <!-- Brand -->
                <div class="flex flex-shrink-0 items-center gap-3">
                    <!-- UPDATED LOGO: Replaced simple "K" with the SVG from the favicon for consistency -->
                    <img class="h-10 w-10" src="./logo.png" alt="KEV Logo">
                    <span class="hidden text-lg font-extrabold tracking-wide sm:block" data-i18n="brand">KEV Company</span>
                </div>

                <!-- Desktop Navigation Links -->
                <div class="hidden items-center justify-center gap-1 lg:flex">
                    <a href="#home" class="rounded-md border border-transparent px-3 py-2 text-sm font-medium transition-colors hover:border-line hover:bg-surface-2" data-i18n="nav_home">Home</a>
                    <a href="#about" class="rounded-md border border-transparent px-3 py-2 text-sm font-medium transition-colors hover:border-line hover:bg-surface-2" data-i18n="nav_about">About</a>
                    <a href="#story" class="rounded-md border border-transparent px-3 py-2 text-sm font-medium transition-colors hover:border-line hover:bg-surface-2" data-i18n="nav_story">Story</a>
                    <a href="#services" class="rounded-md border border-transparent px-3 py-2 text-sm font-medium transition-colors hover:border-line hover:bg-surface-2" data-i18n="nav_services">Services</a>
                    <a href="#clients" class="rounded-md border border-transparent px-3 py-2 text-sm font-medium transition-colors hover:border-line hover:bg-surface-2" data-i18n="nav_clients">Clients</a>
                    <a href="#projects" class="rounded-md border border-transparent px-3 py-2 text-sm font-medium transition-colors hover:border-line hover:bg-surface-2" data-i18n="nav_projects">Projects</a>
                    <a href="#contact" class="rounded-md border border-transparent px-3 py-2 text-sm font-medium transition-colors hover:border-line hover:bg-surface-2" data-i18n="nav_contact">Contact</a>
                </div>

                <!-- Actions -->
                <div class="flex flex-shrink-0 items-center gap-2">
                    <button id="themeToggle" class="flex h-10 w-10 cursor-pointer items-center justify-center rounded-md border border-line bg-surface text-lg transition-colors hover:bg-surface-2" aria-label="Toggle theme">🌓</button>

                    <div class="hidden rounded-md bg-surface p-1 sm:flex">
                        <button class="rounded px-2 py-1 text-xs font-medium hover:bg-line" data-lang-btn="en">EN</button>
                        <button class="rounded px-2 py-1 text-xs font-medium hover:bg-line" data-lang-btn="ar">AR</button>
                        <button class="rounded px-2 py-1 text-xs font-medium hover:bg-line" data-lang-btn="ku">KU</button>
                    </div>

                    <!-- Mobile Menu Button -->
                    <button id="mobileMenuBtn" class="flex h-10 w-10 cursor-pointer items-center justify-center rounded-md border border-line bg-surface transition-colors hover:bg-surface-2 lg:hidden" aria-label="Open menu">
                        <!-- Hamburger icon -->
                        <svg class="h-6 w-6 text-text" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <main id="home" class="relative border-b border-line">
        <video class="hero-video absolute inset-0 h-full w-full object-cover" autoplay muted loop playsinline preload="metadata">
            <!-- You need to provide a valid video source here -->
            <source src="./hero.mp4" type="video/mp4">
        </video>
        <!-- Fallback background -->
        <div class="absolute inset-0 bg-black/50"></div>

        <div class="container relative z-10 flex min-h-[85vh] items-center justify-center py-32 text-center md:min-h-[70vh]">
            <div>
                <h1 class="reveal text-hero-title font-extrabold leading-tight tracking-tight text-white" data-i18n="hero_title">
                    Industrial Cement & Precision Blocks for Professional Projects
                </h1>
                <p class="reveal mx-auto mt-6 max-w-3xl text-hero-sub leading-relaxed text-white/90 delay-100" data-i18n="hero_sub">
                    Engineered durability, tight tolerances, and consistent supply for contractors, developers, and infrastructure builds.
                </p>
                <div class="reveal mt-8 flex flex-col flex-wrap items-center justify-center gap-4 sm:flex-row delay-200">
                    <a href="#services" class="inline-flex w-full items-center justify-center rounded-md bg-brand px-8 py-3 text-base font-medium text-white shadow-sm transition-transform hover:-translate-y-0.5 hover:shadow-md sm:w-auto animate-pulse-slow" data-i18n="cta_services">
                        View Services
                    </a>
                    <a href="#contact" class="inline-flex w-full items-center justify-center rounded-md border border-line bg-surface-2/80 px-8 py-3 text-base font-medium text-text shadow-sm backdrop-blur-sm transition-transform hover:-translate-y-0.5 hover:shadow-md sm:w-auto" data-i18n="cta_quote">
                        Get a Quote
                    </a>
                </div>
            </div>
        </div>
    </main>

    <!-- About Section -->
    <section id="about" class="border-b border-line py-16 md:py-24">
        <div class="container">
            <span class="badge reveal mb-4 inline-block rounded-md bg-brand px-4 py-2 text-sm font-semibold text-white" data-i18n="about_badge">
                Since 2010
            </span>
            <h2 class="section-title reveal font-extrabold tracking-tight" data-i18n="about_title">
                Industrial-grade cement & block solutions
            </h2>
            <p class="section-sub reveal mt-4 max-w-3xl text-muted delay-100" data-i18n="about_text">
                ISO-aligned processes, premium aggregates, and continuous compression testing ensure consistency and durability in every unit.
            </p>

            <div class="mt-12 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <div class="reveal rounded-lg border border-line bg-surface-2 p-6 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-md delay-100">
                    <strong class="counter text-stat-strong block font-extrabold text-brand" data-target="40000">0</strong>
                    <span class="mt-2 block text-sm text-muted" data-i18n="cap_blocks">blocks/day</span>
                </div>
                <div class="reveal rounded-lg border border-line bg-surface-2 p-6 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-md delay-200">
                    <strong class="counter text-stat-strong block font-extrabold text-brand" data-target="98">0</strong>
                    <span class="mt-2 block text-sm text-muted" data-i18n="cap_ontime">on-time delivery (%)</span>
                </div>
                <div class="reveal rounded-lg border border-line bg-surface-2 p-6 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-md delay-300">
                    <strong class="counter text-stat-strong block font-extrabold text-brand" data-target="250">0</strong>
                    <span class="mt-2 block text-sm text-muted" data-i18n="cap_projects">projects served</span>
                </div>
                <div class="reveal rounded-lg border border-line bg-surface-2 p-6 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-md delay-400">
                    <strong class="counter text-stat-strong block font-extrabold text-brand" data-target="22">0</strong>
                    <span class="mt-2 block text-sm text-muted" data-i18n="cap_strength">MPa max strength</span>
                </div>
            </div>
        </div>
    </section>

    <!-- NEW: Quality Assurance Section -->
    <section id="quality" class="border-b border-line bg-surface py-16 md:py-24">
        <div class="container">
            <h2 class="section-title reveal text-center font-extrabold tracking-tight">Commitment to Quality</h2>
            <p class="section-sub reveal mx-auto mt-4 max-w-3xl text-center text-muted delay-100">
                Our production adheres to rigorous standards to ensure every product meets your specifications.
            </p>

            <div class="mt-12 grid grid-cols-1 gap-6 md:grid-cols-3">
                <!-- Quality Card 1 -->
                <div class="reveal rounded-lg border border-line bg-surface-2 p-6 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-md delay-100">
                    <svg class="mx-auto h-12 w-12 text-brand" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h3 class="mt-4 text-xl font-semibold">ISO Certified</h3>
                    <p class="mt-2 text-sm text-muted">Managed processes that align with international quality standards.</p>
                </div>
                <!-- Quality Card 2 -->
                <div class="reveal rounded-lg border border-line bg-surface-2 p-6 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-md delay-200">
                    <svg class="mx-auto h-12 w-12 text-brand" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                    </svg>
                    <h3 class="mt-4 text-xl font-semibold">Premium Aggregates</h3>
                    <p class="mt-2 text-sm text-muted">Only high-grade, washed, and tested raw materials are used.</p>
                </div>
                <!-- Quality Card 3 -->
                <div class="reveal rounded-lg border border-line bg-surface-2 p-6 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-md delay-300">
                    <svg class="mx-auto h-12 w-12 text-brand" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.83-5.83M11.42 15.17l-4.24-4.24a5.25 5.25 0 00-7.42 0c0 0 0 0 0 0a5.25 5.25 0 000 7.42l4.24 4.24" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L15.17 11.42" />
                    </svg>
                    <h3 class="mt-4 text-xl font-semibold">Batch Testing</h3>
                    <p class="mt-2 text-sm text-muted">Continuous compressive strength and tolerance testing for every batch.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of New Section -->

    <!-- Story Section -->
    <section id="story" class="border-b border-line py-16 md:py-24">
        <div class="container">
            <h2 class="section-title reveal font-extrabold tracking-tight" data-i18n="story_title">Our Story</h2>
            <p class="section-sub reveal mt-4 max-w-3xl text-muted delay-100" data-i18n="story_sub">
                From a small workshop to a modern production line with rigorous quality control.
            </p>

            <div class="timeline mt-12">
                <div class="milestone reveal delay-100">
                    <div class="rounded-lg border border-line bg-surface-2 p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                        <strong class="text-lg font-semibold" data-i18n="story_1_title">2010 – Founded</strong>
                        <p class="mt-2 text-muted" data-i18n="story_1_text">Started operations with a focus on reliable masonry units for local builders.</p>
                    </div>
                </div>
                <div class="milestone reveal delay-200">
                    <div class="rounded-lg border border-line bg-surface-2 p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                        <strong class="text-lg font-semibold" data-i18n="story_2_title">2016 – Automation</strong>
                        <p class="mt-2 text-muted" data-i18n="story_2_text">Introduced automated mixing and curing for stronger, uniform blocks.</p>
                    </div>
                </div>
                <div class="milestone reveal delay-300">
                    <div class="rounded-lg border border-line bg-surface-2 p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                        <strong class="text-lg font-semibold" data-i18n="story_3_title">2021 – Capacity Upgrade</strong>
                        <p class="mt-2 text-muted" data-i18n="story_3_text">Expanded output and logistics, serving large-scale construction projects.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="border-b border-line py-16 md:py-24">
        <div class="container">
            <h2 class="section-title reveal font-extrabold tracking-tight" data-i18n="services_title">Services & Products</h2>
            <p class="section-sub reveal mt-4 max-w-3xl text-muted delay-100" data-i18n="services_sub">
                From standard blocks to custom mixes – engineered for your specs.
            </p>

            <div class="mt-12 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                <!-- Service Card (with new shine effect) -->
                <div class="service-card-shine reveal rounded-lg border border-line bg-surface-2 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg delay-100">
                    <img class="h-56 w-full object-cover" src="https://images.pexels.com/photos/569149/pexels-photo-569149.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Concrete blocks">
                    <div class="p-5">
                        <h3 class="text-xl font-semibold" data-i18n="svc_1_title">Concrete Masonry Blocks</h3>
                        <p class="mt-2 text-muted" data-i18n="svc_1_text">High-density hollow & solid blocks with precise dimensions.</p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="rounded-full border border-line px-3 py-1 text-xs text-muted">100×200×400</span>
                            <span class="rounded-full border border-line px-3 py-1 text-xs text-muted">150×200×400</span>
                            <span class="rounded-full border border-line px-3 py-1 text-xs text-muted">200×200×400</span>
                        </div>
                    </div>
                </div>
                <!-- Service Card -->
                <div class="service-card-shine reveal rounded-lg border border-line bg-surface-2 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg delay-200">
                    <img class="h-56 w-full object-cover" src="https://images.pexels.com/photos/461414/pexels-photo-461414.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Cement supply">
                    <div class="p-5">
                        <h3 class="text-xl font-semibold" data-i18n="svc_2_title">Bulk Cement Supply</h3>
                        <p class="mt-2 text-muted" data-i18n="svc_2_text">Reliable delivery for contractors & ready-mix plants.</p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="rounded-full border border-line px-3 py-1 text-xs text-muted">Clinker</span>
                            <span class="rounded-full border border-line px-3 py-1 text-xs text-muted">Portland</span>
                            <span class="rounded-full border border-line px-3 py-1 text-xs text-muted">Bulk tankers</span>
                        </div>
                    </div>
                </div>
                <!-- Service Card -->
                <div class="service-card-shine reveal rounded-lg border border-line bg-surface-2 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg delay-300">
                    <img class="h-56 w-full object-cover" src="https://images.pexels.com/photos/2219024/pexels-photo-2219024.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Interlock pavers">
                    <div class="p-5">
                        <h3 class="text-xl font-semibold">Interlock & Kerbstone</h3>
                        <p class="mt-2 text-muted">Vibration-pressed pavers and kerbs with tight tolerances.</p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="rounded-full border border-line px-3 py-1 text-xs text-muted">60mm</span>
                            <span class="rounded-full border border-line px-3 py-1 text-xs text-muted">80mm</span>
                            <span class="rounded-full border border-line px-3 py-1 text-xs text-muted">100mm</span>
                        </div>
                    </div>
                </div>
                <!-- Service Card -->
                <div class="service-card-shine reveal rounded-lg border border-line bg-surface-2 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg delay-100">
                    <img class="h-56 w-full object-cover" src="https://images.pexels.com/photos/415983/pexels-photo-415983.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Aggregates">
                    <div class="p-5">
                        <h3 class="text-xl font-semibold">Aggregates Supply</h3>
                        <p class="mt-2 text-muted">Gravel, crushed stone, and sand for structural concrete.</p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="rounded-full border border-line px-3 py-1 text-xs text-muted">3/8"</span>
                            <span class="rounded-full border border-line px-3 py-1 text-xs text-muted">3/4"</span>
                            <span class="rounded-full border border-line px-3 py-1 text-xs text-muted">Washed sand</span>
                        </div>
                    </div>
                </div>
                <!-- Service Card -->
                <div class="service-card-shine reveal rounded-lg border border-line bg-surface-2 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg delay-200">
                    <img class="h-56 w-full object-cover" src="https://images.pexels.com/photos/3735761/pexels-photo-3735761.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Lab testing">
                    <div class="p-5">
                        <h3 class="text-xl font-semibold">Technical & Lab Testing</h3>
                        <p class="mt-2 text-muted">Compressive tests and submittals to support your tenders.</p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="rounded-full border border-line px-3 py-1 text-xs text-muted">12–22 MPa</span>
                            <span class="rounded-full border border-line px-3 py-1 text-xs text-muted">ISO certified</span>
                        </div>
                    </div>
                </div>
                <!-- Service Card -->
                <div class="service-card-shine reveal rounded-lg border border-line bg-surface-2 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg delay-300">
                    <img class="h-56 w-full object-cover" src="https://images.pexels.com/photos/3681782/pexels-photo-3681782.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Logistics">
                    <div class="p-5">
                        <h3 class="text-xl font-semibold">Logistics & On-site Offloading</h3>
                        <p class="mt-2 text-muted">Fleet and cranes for fast, safe site deliveries.</p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="rounded-full border border-line px-3 py-1 text-xs text-muted">Flatbeds</span>
                            <span class="rounded-full border border-line px-3 py-1 text-xs text-muted">Cranes</span>
                            <span class="rounded-full border border-line px-3 py-1 text-xs text-muted">Schedule-first</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Specifications Section -->
    <section id="specs" class="border-b border-line py-16 md:py-24">
        <div class="container">
            <h2 class="section-title reveal font-extrabold tracking-tight">Specifications</h2>
            <p class="section-sub reveal mt-4 max-w-3xl text-muted delay-100">
                Standard block sizes, compressive strength classes, and pallet counts.
            </p>

            <div class="reveal mt-12 overflow-hidden rounded-lg border border-line bg-surface-2 shadow-sm delay-200">
                <div class="overflow-x-auto">
                    <table class="min-w-full w-full border-collapse">
                        <thead class="bg-surface">
                            <tr>
                                <th class="border-b border-line p-4 text-left text-sm font-semibold">Product</th>
                                <th class="border-b border-line p-4 text-left text-sm font-semibold">Size (mm)</th>
                                <th class="border-b border-line p-4 text-left text-sm font-semibold">Type</th>
                                <th class="border-b border-line p-4 text-left text-sm font-semibold">Strength (MPa)</th>
                                <th class="border-b border-line p-4 text-left text-sm font-semibold">Pallet Qty</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border-b border-line p-4 text-sm">Hollow Block</td>
                                <td class="border-b border-line p-4 text-sm">100×200×400</td>
                                <td class="border-b border-line p-4 text-sm">3-Cell</td>
                                <td class="border-b border-line p-4 text-sm">12</td>
                                <td class="border-b border-line p-4 text-sm">240</td>
                            </tr>
                            <tr>
                                <td class="border-b border-line p-4 text-sm">Hollow Block</td>
                                <td class="border-b border-line p-4 text-sm">150×200×400</td>
                                <td class="border-b border-line p-4 text-sm">3-Cell</td>
                                <td class="border-b border-line p-4 text-sm">15</td>
                                <td class="border-b border-line p-4 text-sm">180</td>
                            </tr>
                            <tr>
                                <td class="border-b border-line p-4 text-sm">Solid Block</td>
                                <td class="border-b border-line p-4 text-sm">200×200×400</td>
                                <td class="border-b border-line p-4 text-sm">Solid</td>
                                <td class="border-b border-line p-4 text-sm">18</td>
                                <td class="border-b border-line p-4 text-sm">140</td>
                            </tr>
                            <tr>
                                <td class="border-b border-line p-4 text-sm">Interlock Paver</td>
                                <td class="border-b border-line p-4 text-sm">200×100×60</td>
                                <td class="border-b border-line p-4 text-sm">Chamfer</td>
                                <td class="border-b border-line p-4 text-sm">22</td>
                                <td class="border-b border-line p-4 text-sm">12 m²</td>
                            </tr>
                            <tr>
                                <td class="p-4 text-sm">Portland Cement</td>
                                <td class="p-4 text-sm">—</td>
                                <td class="p-4 text-sm">Bulk/Bag</td>
                                <td class="p-4 text-sm">—</td>
                                <td class="p-4 text-sm">—</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Section -->
    <section id="clients" class="border-b border-line bg-surface py-16 md:py-24">
        <div class="container">
            <h2 class="section-title reveal text-center font-extrabold tracking-tight">Trusted By</h2>
            <p class="section-sub reveal mx-auto mt-4 max-w-3xl text-center text-muted delay-100">
                We proudly supply contractors, developers and infrastructure projects across the region.
            </p>

            <!-- Swiper -->
            <div class="swiper clients-swiper reveal mt-12 overflow-hidden delay-200">
                <div class="swiper-wrapper items-center">
                    <div class="swiper-slide flex justify-center">
                        <img src="https://dummyimage.com/200x80/3f5350/ffffff&text=CONTRACTOR+A" alt="Client 1" class="max-w-[180px] h-auto grayscale opacity-60 transition-all duration-300 hover:opacity-100 hover:grayscale-0">
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <img src="https://dummyimage.com/200x80/3f5350/ffffff&text=DEVELOPER+B" alt="Client 2" class="max-w-[180px] h-auto grayscale opacity-60 transition-all duration-300 hover:opacity-100 hover:grayscale-0">
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <img src="https://dummyimage.com/200x80/3f5350/ffffff&text=BUILDER+C" alt="Client 3" class="max-w-[180px] h-auto grayscale opacity-60 transition-all duration-300 hover:opacity-100 hover:grayscale-0">
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <img src="https://dummyimage.com/200x80/3f5350/ffffff&text=ENGINEER+D" alt="Client 4" class="max-w-[180px] h-auto grayscale opacity-60 transition-all duration-300 hover:opacity-100 hover:grayscale-0">
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <img src="https://dummyimage.com/200x80/3f5350/ffffff&text=INFRACO+E" alt="Client 5" class="max-w-[180px] h-auto grayscale opacity-60 transition-all duration-300 hover:opacity-100 hover:grayscale-0">
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <img src="https://dummyimage.com/200x80/3f5350/ffffff&text=PROJECT+F" alt="Client 6" class="max-w-[180px] h-auto grayscale opacity-60 transition-all duration-300 hover:opacity-100 hover:grayscale-0">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Facilities Slider Section -->
    <section id="gallery-slider" class="border-b border-line bg-surface py-16 md:py-24">
        <div class="container">
            <h2 class="section-title reveal font-extrabold tracking-tight">Our Facilities & Operations</h2>
            <p class="section-sub reveal mt-4 max-w-3xl text-muted delay-100">
                Take a look at our state-of-the-art production facilities, quality control labs, and delivery fleet.
            </p>

            <!-- Swiper -->
            <div class="swiper company-swiper reveal mt-12 overflow-hidden rounded-lg pb-12 delay-200">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img class="slider-image h-[300px] w-full rounded-lg border border-line object-cover shadow-md md:h-[500px]" src="https://images.pexels.com/photos/236705/pexels-photo-236705.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Factory Production Line"></div>
                    <div class="swiper-slide"><img class="slider-image h-[300px] w-full rounded-lg border border-line object-cover shadow-md md:h-[500px]" src="https://images.pexels.com/photos/159306/construction-site-build-construction-work-159306.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Construction Site"></div>
                    <div class="swiper-slide"><img class="slider-image h-[300px] w-full rounded-lg border border-line object-cover shadow-md md:h-[500px]" src="https://images.pexels.com/photos/3735761/pexels-photo-3735761.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Quality Control Lab"></div>
                    <div class="swiper-slide"><img class="slider-image h-[300px] w-full rounded-lg border border-line object-cover shadow-md md:h-[500px]" src="https://images.pexels.com/photos/1267338/pexels-photo-1267338.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Warehouse Storage"></div>
                    <div class="swiper-slide"><img class="slider-image h-[300px] w-full rounded-lg border border-line object-cover shadow-md md:h-[500px]" src="https://images.pexels.com/photos/1267684/pexels-photo-1267684.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Delivery Trucks"></div>
                    <div class="swiper-slide"><img class="slider-image h-[300px] w-full rounded-lg border border-line object-cover shadow-md md:h-[500px]" src="https://images.pexels.com/photos/585419/pexels-photo-585419.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Block Production"></div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Navigation -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>

    <!-- Projects Gallery Section -->
    <section id="projects" class="border-b border-line py-16 md:py-24">
        <div class="container">
            <h2 class="section-title reveal font-extrabold tracking-tight" data-i18n="projects_title">Projects</h2>
            <p class="section-sub reveal mt-4 max-w-3xl text-muted delay-100" data-i18n="projects_sub">
                A glimpse of sites supplied with KEV blocks and cement.
            </p>
            <div class="mt-12 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                <img class="reveal h-64 w-full rounded-lg border border-line object-cover shadow-sm transition-transform duration-300 hover:scale-105 delay-100" src="https://images.pexels.com/photos/448972/pexels-photo-448972.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Construction site">
                <img class="reveal h-64 w-full rounded-lg border border-line object-cover shadow-sm transition-transform duration-300 hover:scale-105 delay-200" src="https://images.pexels.com/photos/2219024/pexels-photo-2219024.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Concrete work">
                <img class="reveal h-64 w-full rounded-lg border border-line object-cover shadow-sm transition-transform duration-300 hover:scale-105 delay-300" src="https://images.pexels.com/photos/3699921/pexels-photo-3699921.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Blocks">
                <img class="reveal h-64 w-full rounded-lg border border-line object-cover shadow-sm transition-transform duration-300 hover:scale-105 delay-100" src="https://images.pexels.com/photos/159306/construction-site-build-construction-work-159306.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Building site">
                <img class="reveal h-64 w-full rounded-lg border border-line object-cover shadow-sm transition-transform duration-300 hover:scale-105 delay-200" src="https://images.pexels.com/photos/415983/pexels-photo-415983.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Aggregates">
                <img class="reveal h-64 w-full rounded-lg border border-line object-cover shadow-sm transition-transform duration-300 hover:scale-105 delay-300" src="https://images.pexels.com/photos/585418/pexels-photo-585418.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Plant">
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 md:py-24">
        <div class="container">
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-5">
                <div class="lg:col-span-3">
                    <h2 class="section-title reveal font-extrabold tracking-tight" data-i18n="contact_title">Get a Quote</h2>
                    <p class="section-sub reveal mt-4 text-muted delay-100" data-i18n="contact_sub">
                        Tell us your quantity, sizes, and delivery date. We'll reply fast.
                    </p>
                    <form id="contactForm" class="mt-8 grid grid-cols-1 gap-4">
                        <input type="text" name="name" placeholder="Name" data-ph="name" required class="reveal w-full rounded-md border border-line bg-surface p-3 text-sm text-text placeholder-muted outline-none transition-all focus:border-brand focus:ring-2 focus:ring-brand/50 delay-200">
                        <input type="email" name="email" placeholder="Email" data-ph="email" required class="reveal w-full rounded-md border border-line bg-surface p-3 text-sm text-text placeholder-muted outline-none transition-all focus:border-brand focus:ring-2 focus:ring-brand/50 delay-300">
                        <textarea name="message" placeholder="Your requirements" data-ph="message" required rows="5" class="reveal w-full rounded-md border border-line bg-surface p-3 text-sm text-text placeholder-muted outline-none transition-all focus:border-brand focus:ring-2 focus:ring-brand/50 delay-400"></textarea>
                        <div class="reveal flex flex-col gap-3 sm:flex-row delay-500">
                            <button type="submit" class="inline-flex items-center justify-center rounded-md bg-brand px-6 py-3 text-sm font-medium text-white shadow-sm transition-transform hover:-translate-y-0.5 hover:shadow-md" data-i18n="contact_send">
                                Send
                            </button>
                            <a href="#home" class="inline-flex items-center justify-center rounded-md border border-line bg-surface-2 px-6 py-3 text-sm font-medium text-text shadow-sm transition-transform hover:-translate-y-0.5 hover:shadow-md" data-i18n="contact_back">
                                Back to top
                            </a>
                        </div>
                        <p id="form-message" class="mt-4 text-sm"></p>
                    </form>
                </div>
                <div class="lg:col-span-2">
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-1">
                        <div class="reveal rounded-lg border border-line bg-surface-2 p-5 delay-100">
                            <strong class="block text-base font-semibold" data-i18n="contact_phone">Phone</strong>
                            <div class="mt-2 text-muted">+964 7x xxx xxxx</div>
                        </div>
                        <div class="reveal rounded-lg border border-line bg-surface-2 p-5 delay-200">
                            <strong class="block text-base font-semibold" data-i18n="contact_address">Address</strong>
                            <div class="mt-2 text-muted">Erbil, Iraq</div>
                        </div>
                        <div class="reveal rounded-lg border border-line bg-surface-2 p-5 delay-300">
                            <strong class="block text-base font-semibold">Email</strong>
                            <div class="mt-2 text-muted">info@kevcompany.com</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Floating CTA -->
    <div class="fixed bottom-4 right-4 z-40 flex flex-col gap-3 animate-float-slow">
        <a href="https://wa.me/9647000000000" target="_blank" rel="noopener" class="flex items-center gap-2.5 rounded-md border border-line bg-surface-2 p-3 font-medium text-text shadow-md transition-all hover:-translate-y-0.5 hover:shadow-lg">
            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.06 21.94L7.3 20.58C8.75 21.37 10.35 21.82 12.04 21.82C17.5 21.82 21.95 17.37 21.95 11.91C21.95 6.45 17.5 2 12.04 2ZM12.04 20.13C10.59 20.13 9.18 19.74 7.97 19L7.54 18.78L4.22 19.65L5.11 16.41L4.87 15.96C4.04 14.63 3.6 13.13 3.6 11.91C3.6 7.33 7.41 3.5 12.04 3.5C16.67 3.5 20.48 7.33 20.48 11.91C20.48 16.5 16.67 20.13 12.04 20.13ZM17.48 14.5C17.21 14.38 15.91 13.78 15.68 13.7C15.46 13.62 15.3 13.58 15.15 13.81C15 14.04 14.56 14.59 14.44 14.71C14.33 14.83 14.21 14.87 13.94 14.75C13.67 14.63 12.72 14.31 11.59 13.3C10.72 12.54 10.12 11.61 9.97 11.38C9.81 11.15 9.93 11.05 10.03 10.95C10.13 10.85 10.27 10.67 10.4 10.54C10.52 10.4 10.57 10.28 10.65 10.13C10.73 9.97 10.69 9.81 10.61 9.69C10.53 9.57 10.03 8.34 9.83 7.84C9.64 7.34 9.44 7.4 9.3 7.4H9.04C8.78 7.4 8.5 7.48 8.27 7.71C8.04 7.94 7.5 8.42 7.5 9.44C7.5 10.46 8.3 11.44 8.42 11.56C8.54 11.68 10.03 14.01 12.28 14.9C14.07 15.6 14.53 15.44 14.87 15.4C15.25 15.34 16.27 14.79 16.48 14.2C16.7 13.61 16.7 13.11 16.62 13C16.54 12.89 16.3 12.81 16.06 12.73L15.82 12.65C15.58 12.57 15.34 12.65 15.15 12.89L15.11 12.93C15.07 12.97 15.03 13.01 14.99 13.05C15.1 12.93 15.21 12.81 15.36 12.65L17.52 14.62C17.6 14.56 17.56 14.56 17.48 14.5Z" />
            </svg>
            <span class="hidden text-sm sm:block">WhatsApp</span>
        </a>
        <a href="tel:+9647000000000" class="flex items-center gap-2.5 rounded-md border border-line bg-surface-2 p-3 font-medium text-text shadow-md transition-all hover:-translate-y-0.5 hover:shadow-lg">
            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.819V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
            </svg>
            <span class="hidden text-sm sm:block">Call Us</span>
        </a>
    </div>

    <!-- Footer -->
    <footer class="border-t border-line bg-surface pt-16 pb-8">
        <div class="container">
            <div class="grid grid-cols-1 gap-12 md:grid-cols-4 lg:grid-cols-12">
                <!-- Brand Info -->
                <div class="md:col-span-4 lg:col-span-5">
                    <div class="flex items-center gap-3">
                        <img class="h-10 w-10" src="./logo.png" alt="KEV Logo">
                        <span class="text-lg font-extrabold tracking-wide" data-i18n="brand">KEV Company</span>
                    </div>
                    <p class="mt-4 max-w-sm text-sm text-muted" data-i18n="hero_sub">
                        Engineered durability, tight tolerances, and consistent supply for contractors, developers, and infrastructure builds.
                    </p>
                </div>

                <!-- Quick Links -->
                <div class="md:col-span-2 lg:col-span-2">
                    <h4 class="text-sm font-semibold uppercase tracking-wider text-text" data-i18n="footer_links">Quick Links</h4>
                    <div class="mt-4 flex flex-col gap-3">
                        <a href="#about" class="text-sm text-muted transition-colors hover:text-text" data-i18n="nav_about">About</a>
                        <a href="#services" class="text-sm text-muted transition-colors hover:text-text" data-i18n="nav_services">Services</a>
                        <a href="#clients" class="text-sm text-muted transition-colors hover:text-text" data-i18n="nav_clients">Clients</a>
                        <a href="#projects" class="text-sm text-muted transition-colors hover:text-text" data-i18n="nav_projects">Projects</a>
                        <a href="#contact" class="text-sm text-muted transition-colors hover:text-text" data-i18n="nav_contact">Contact</a>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="md:col-span-2 lg:col-span-2">
                    <h4 class="text-sm font-semibold uppercase tracking-wider text-text" data-i18n="footer_contact">Contact Us</h4>
                    <div class="mt-4 flex flex-col gap-3">
                        <a href="tel:+9647000000000" class="text-sm text-muted transition-colors hover:text-text">+964 7x xxx xxxx</a>
                        <a href="mailto:info@kevcompany.com" class="text-sm text-muted transition-colors hover:text-text">info@kevcompany.com</a>
                        <p class="text-sm text-muted">Erbil, Iraq</p>
                    </div>
                </div>

                <!-- Follow Us -->
                <div class="md:col-span-4 lg:col-span-3">
                    <h4 class="text-sm font-semibold uppercase tracking-wider text-text" data-i18n="footer_follow">Follow Us</h4>
                    <p class="mt-4 text-sm text-muted">Stay updated with our latest projects and news.</p>
                    <div class="mt-4 flex items-center gap-4">
                        <!-- Social Icons (Placeholders) -->
                        <a href="#" aria-label="Facebook" class="text-muted transition-colors hover:text-text">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3l-.5 3h-2.5v6.8c4.56-.93 8-4.96 8-9.8z" />
                            </svg>
                        </a>
                        <a href="#" aria-label="LinkedIn" class="text-muted transition-colors hover:text-text">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 5.52 4.48 10 10 10s10-4.48 10-10zM8 17H5v-9h3v9zm-1.5-10.25c-.97 0-1.75-.78-1.75-1.75s.78-1.75 1.75-1.75 1.75.78 1.75 1.75S7.47 6.75 6.5 6.75zM19 17h-3v-4.34c0-1.05-.02-2.4-1.46-2.4-1.46 0-1.69 1.14-1.69 2.32V17h-3v-9h2.88v1.31h.04c.4-.76 1.38-1.56 2.84-1.56 3.03 0 3.59 1.99 3.59 4.58V17z" />
                            </svg>
                        </a>
                        <a href="#" aria-label="Instagram" class="text-muted transition-colors hover:text-text">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-13.5c-3.03 0-5.5 2.47-5.5 5.5s2.47 5.5 5.5 5.5 5.5-2.47 5.5-5.5-2.47-5.5-5.5-5.5zm0 9c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5zm6.5-6.75c-.69 0-1.25-.56-1.25-1.25s.56-1.25 1.25-1.25 1.25.56 1.25 1.25-.56 1.25-1.25 1.25z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Copyright line -->
            <div class="mt-12 border-t border-line pt-8 text-center text-sm text-muted">
                © <span id="year"></span>
                <span data-i18n="brand">KEV Company</span>.
                <span data-i18n="rights">All rights reserved.</span>
            </div>
        </div>
    </footer>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Main Application JS -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // --- Internationalization (i18n) ---
            const dict = {
                en: {
                    brand: "KEV Company",
                    nav_home: "Home",
                    nav_about: "About",
                    nav_story: "Story",
                    nav_services: "Services",
                    nav_clients: "Clients",
                    nav_projects: "Projects",
                    nav_contact: "Contact",
                    hero_title: "Industrial Cement & Precision Blocks for Professional Projects",
                    hero_sub: "Engineered durability, tight tolerances, and consistent supply for contractors, developers, and infrastructure builds.",
                    cta_services: "View Services",
                    cta_quote: "Get a Quote",
                    about_badge: "Since 2010",
                    about_title: "Industrial-grade cement & block solutions",
                    about_text: "ISO-aligned processes, premium aggregates, and continuous compression testing ensure consistency and durability in every unit.",
                    cap_blocks: "blocks/day",
                    cap_ontime: "on-time delivery (%)",
                    cap_projects: "projects served",
                    cap_strength: "MPa max strength",
                    story_title: "Our Story",
                    story_sub: "From a small workshop to a modern production line with rigorous quality control.",
                    story_1_title: "2010 – Founded",
                    story_1_text: "Started operations with a focus on reliable masonry units for local builders.",
                    story_2_title: "2016 – Automation",
                    story_2_text: "Introduced automated mixing and curing for stronger, uniform blocks.",
                    story_3_title: "2021 – Capacity Upgrade",
                    story_3_text: "Expanded output and logistics, serving large-scale construction projects.",
                    services_title: "Services & Products",
                    services_sub: "From standard blocks to custom mixes – engineered for your specs.",
                    svc_1_title: "Concrete Masonry Blocks",
                    svc_1_text: "High-density hollow & solid blocks with precise dimensions.",
                    svc_2_title: "Bulk Cement Supply",
                    svc_2_text: "Reliable delivery for contractors & ready-mix plants.",
                    projects_title: "Projects",
                    projects_sub: "A glimpse of sites supplied with KEV blocks and cement.",
                    contact_title: "Get a Quote",
                    contact_sub: "Tell us your quantity, sizes, and delivery date. We'll reply fast.",
                    contact_send: "Send",
                    contact_back: "Back to top",
                    contact_phone: "Phone",
                    contact_address: "Address",
                    rights: "All rights reserved.",
                    contact_thanks: "Thanks! We will get back to you soon.",
                    ph_name: "Name",
                    ph_email: "Email",
                    ph_message: "Your requirements",
                    footer_links: "Quick Links",
                    footer_contact: "Contact Us",
                    footer_follow: "Follow Us"
                },
                ar: {
                    brand: "شركة KEV",
                    nav_home: "الرئيسية",
                    nav_about: "من نحن",
                    nav_story: "قصتنا",
                    nav_services: "الخدمات",
                    nav_clients: "عملاؤنا",
                    nav_projects: "المشاريع",
                    nav_contact: "اتصل بنا",
                    hero_title: "إسمنت صناعي وبلوكات دقيقة للمشاريع الاحترافية",
                    hero_sub: "متانة هندسية وتوريد ثابت للمقاولين والمطورين ومشاريع البنية التحتية.",
                    cta_services: "عرض الخدمات",
                    cta_quote: "اطلب عرض سعر",
                    about_badge: "منذ 2010",
                    about_title: "حلول إسمنت وبلوك بمعايير صناعية",
                    about_text: "عمليات متوافقة مع المعايير واختبارات ضغط مستمرة لضمان الثبات والمتانة.",
                    cap_blocks: "بلوك/اليوم",
                    cap_ontime: "التزام بالمواعيد",
                    cap_projects: "مشروعًا",
                    cap_strength: "قوة انضغاط",
                    story_title: "قصتنا",
                    story_sub: "من ورشة صغيرة إلى خط إنتاج حديث مع رقابة جودة صارمة.",
                    story_1_title: "2010 – التأسيس",
                    story_1_text: "بدأنا العمليات مع التركيز على وحدات البناء الموثوقة للبناة المحليين.",
                    story_2_title: "2016 – الأتمتة",
                    story_2_text: "قدمنا الخلط الآلي والمعالجة لبلوكات أقوى وأكثر تجانسًا.",
                    story_3_title: "2021 – ترقية السعة",
                    story_3_text: "توسعنا في الإنتاج والخدمات اللوجستية لخدمة مشاريع البناء الكبيرة.",
                    services_title: "الخدمات والمنتجات",
                    services_sub: "من البلوك القياسي إلى الخلطات المخصصة – حسب مواصفاتكم.",
                    svc_1_title: "بلوكات البناء الخرسانية",
                    svc_1_text: "بلوكات مجوفة وصلبة عالية الكثافة بأبعاد دقيقة.",
                    svc_2_title: "توريد الإسمنت بالجملة",
                    svc_2_text: "توصيل موثوق للمقاولين ومصانع الخرسانة الجاهزة.",
                    projects_title: "المشاريع",
                    projects_sub: "لمحة عن المواقع التي تم تزويدها ببلوكات وإسمنت KEV.",
                    contact_title: "اطلب عرض سعر",
                    contact_sub: "أخبرنا بالكمية والأحجام وتاريخ التسليم. سنرد بسرعة.",
                    contact_send: "إرسال",
                    contact_back: "العودة للأعلى",
                    contact_phone: "الهاتف",
                    contact_address: "العنوان",
                    rights: "جميع الحقوق محفوظة.",
                    contact_thanks: "شكرا لك! سوف نرد عليك قريبا.",
                    ph_name: "الاسم",
                    ph_email: "البريد الإلكتروني",
                    ph_message: "متطلباتك",
                    footer_links: "روابط سريعة",
                    footer_contact: "اتصل بنا",
                    footer_follow: "تابعنا"
                },
                // You can add 'ku' (Kurdish) translations here
                ku: {
                    brand: "کۆمپانیای KEV",
                    nav_home: "سەرەکی",
                    nav_about: "دەربارەمان",
                    nav_story: "چیرۆکەکەمان",
                    nav_services: "خزمەتگوزاریەکان",
                    nav_clients: "کڕیارەکانمان",
                    nav_projects: "پڕۆژەکان",
                    nav_contact: "پەیوەندی بکە",
                    hero_title: "سیمەنتی پیشەیی و بڵۆکی ورد بۆ پڕۆژە شارەزاییەکان",
                    hero_sub: "دووامدارێتی ئەندازیاری و دابینکردنی بەهێز بۆ پێشەسازی و پڕۆژە بنچینەکان.",
                    cta_services: "بینینی خزمەتگوزاریەکان",
                    cta_quote: "داوای نرخی بکە",
                    about_badge: "لە 2010",
                    about_title: "چارەسەری سیمەنت و بڵۆک بە ستانداردی پیشەیی",
                    about_text: "جێبەجێکردنی ستانداردەکان و تاقیکردنەوەی فشار بۆ دڵنیابوون لە دووامداری.",
                    cap_blocks: "بڵۆک/ڕۆژ",
                    cap_ontime: "پابەندبوون بە کاتی ناردن",
                    cap_projects: "پڕۆژە",
                    cap_strength: "هێزی فشاردان",
                    story_title: "چیرۆکەکەمان",
                    story_sub: "لە کارگەیەکی بچووکەوە بۆ هێڵی بەرهەمھێنانی مۆدەرن بە كۆنترۆڵی کوالێتی توند.",
                    story_1_title: "2010 – دەستپێک",
                    story_1_text: "دەستمان بە کار کرد بە پێکەوەکاری لەگەڵ بنیاتنەرانی ناوخۆیی.",
                    story_2_title: "2016 – ئۆتۆماتیککردن",
                    story_2_text: "خۆلاندنی ئۆتۆماتیکی و چارەنووسی بەرهەم زیادکرا بۆ بڵۆکی بەهێزتر.",
                    story_3_title: "2021 – فراوانکردنی توانایی",
                    story_3_text: "توانای بەرهەمھێنان و خزمەتگوزاری گواستنەوەمان فراوان کرد بۆ پڕۆژە گەورەکان.",
                    services_title: "خزمەتگوزاری و بەرهەمەکان",
                    services_sub: "لە بڵۆکی ستانداردەوە تا تێکەڵەکاریی تایبەت – بەپێی داواکاریی ئێوە.",
                    svc_1_title: "بڵۆکی بنایەتی کۆنکرێت",
                    svc_1_text: "بڵۆکی دەستەوسەری قەڵەو و سنووردار بە قەبارهی ورد.",
                    svc_2_title: "دابینکردنی سیمەنت بە کۆمەڵ",
                    svc_2_text: "ناردنی متمانەپەرست بۆ پێشەسازان و کارگەکانی کۆنکرێتی ئامادە.",
                    projects_title: "پڕۆژەکان",
                    projects_sub: "بینینێکی گشتی لە پڕۆژەکانی کە بە بڵۆک و سیمەنتی KEV دابینکراون.",
                    contact_title: "داوای نرخی بکە",
                    contact_sub: "باسی بڕ و قەبارە و ڕێککەوتی ناردن بکە، زوو وەڵامتان ئەدەینەوە.",
                    contact_send: "ناردن",
                    contact_back: "گەڕانەوە بۆ سەرەوە",
                    contact_phone: "تەلەفون",
                    contact_address: "ناونیشان",
                    rights: "هەموو مافەکان پارێزراون.",
                    contact_thanks: "سوپاس! زوو پەیوەندیت پێوە دەکەین.",
                    ph_name: "ناو",
                    ph_email: "ئیمەیڵ",
                    ph_message: "داواکارییەکانت",
                    footer_links: "بەستەرە خێراکان",
                    footer_contact: "پەیوەندی",
                    footer_follow: "پێشبەینی بکە"
                }
            };

            const setLanguage = (lang) => {
                if (!dict[lang]) lang = 'en';
                document.documentElement.lang = lang;
                document.documentElement.dir = (lang === 'ar' || lang === 'ku') ? 'rtl' : 'ltr';
                document.body.classList.toggle('font-arabic', (lang === 'ar' || lang === 'ku'));

                document.querySelectorAll('[data-i18n]').forEach(el => {
                    const key = el.getAttribute('data-i18n');
                    if (dict[lang][key]) {
                        el.textContent = dict[lang][key];
                    } else if (dict['en'][key]) {
                        el.textContent = dict['en'][key]; // Fallback to English
                    }
                });

                document.querySelectorAll('[data-ph]').forEach(el => {
                    const key = el.getAttribute('data-ph');
                    if (dict[lang][key]) {
                        el.placeholder = dict[lang][key];
                    } else if (dict['en'][key]) {
                        el.placeholder = dict['en'][key]; // Fallback to English
                    }
                });
            };

            document.querySelectorAll('[data-lang-btn]').forEach(btn => {
                btn.addEventListener('click', () => {
                    setLanguage(btn.getAttribute('data-lang-btn'));
                });
            });

            // Set initial language (e.g., from browser or default)
            setLanguage('en');

            // --- Mobile Navigation ---
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            const mobileMenuCloseBtn = document.getElementById('mobileMenuCloseBtn');
            const mobileMenu = document.getElementById('mobileMenu');
            const mobileMenuLinks = mobileMenu.querySelectorAll('a');

            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.remove('-translate-x-full');
            });

            mobileMenuCloseBtn.addEventListener('click', () => {
                mobileMenu.classList.add('-translate-x-full');
            });

            mobileMenuLinks.forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('-translate-x-full');
                });
            });

            // --- UPDATED: Theme Toggle with LocalStorage ---
            const themeToggle = document.getElementById('themeToggle');
            const docElement = document.documentElement;
            const themeKey = 'kev-theme-preference';

            const setTheme = (theme) => {
                docElement.setAttribute('data-theme', theme);
                themeToggle.textContent = theme === 'dark' ? '🌓' : '☀️';
                localStorage.setItem(themeKey, theme);
            };

            const loadTheme = () => {
                const savedTheme = localStorage.getItem(themeKey) || 'dark'; // Default to dark
                setTheme(savedTheme);
            };

            themeToggle.addEventListener('click', () => {
                const currentTheme = docElement.getAttribute('data-theme');
                const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
                setTheme(newTheme);
            });

            // Load theme on initial page load
            loadTheme();
            // --- End of Theme Toggle Update ---


            // --- Scroll Progress Bar ---
            const progressbar = document.getElementById('progressbar');
            window.addEventListener('scroll', () => {
                const scrollTop = window.scrollY;
                const docHeight = document.documentElement.scrollHeight - window.innerHeight;
                const scrollPercent = (scrollTop / docHeight) * 100;
                progressbar.style.width = scrollPercent + '%';

                // Shrink header
                const header = document.getElementById('header');
                if (scrollTop > 50) {
                    header.classList.add('shadow-md');
                } else {
                    header.classList.remove('shadow-md');
                }
            });

            // --- Animated Counters ---
            const counters = document.querySelectorAll('.counter');
            const speed = 200; // Lower is faster

            const animateCounter = (counter) => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const inc = Math.max(1, Math.floor(target / speed));

                if (count < target) {
                    counter.innerText = Math.min(count + inc, target);
                    setTimeout(() => animateCounter(counter), 10);
                } else {
                    counter.innerText = target;
                }
            };

            // --- Scroll Reveal Animation ---
            const revealElements = document.querySelectorAll('.reveal');
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('show');

                        // If it's a counter, start it
                        if (entry.target.classList.contains('counter')) {
                            animateCounter(entry.target);
                        }
                        // Optional: unobserve to prevent re-animation
                        // revealObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });

            revealElements.forEach(el => {
                revealObserver.observe(el);
            });

            // --- Swiper Sliders ---
            const clientsSwiper = new Swiper('.clients-swiper', {
                loop: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                slidesPerView: 2,
                spaceBetween: 20,
                breakpoints: {
                    640: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                    768: {
                        slidesPerView: 4,
                        spaceBetween: 40,
                    },
                    1024: {
                        slidesPerView: 5,
                        spaceBetween: 50,
                    },
                },
            });

            const companySwiper = new Swiper('.company-swiper', {
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });

            // --- Contact Form ---
            const contactForm = document.getElementById('contactForm');
            const formMessage = document.getElementById('form-message');
            contactForm.addEventListener('submit', (e) => {
                e.preventDefault();
                // You would typically send this to a backend
                // For demo, we'll just show a success message
                const currentLang = document.documentElement.lang || 'en';
                formMessage.textContent = dict[currentLang]?.contact_thanks || dict['en'].contact_thanks;
                formMessage.classList.add('text-green-500');
                contactForm.reset();
                setTimeout(() => {
                    formMessage.textContent = '';
                    formMessage.classList.remove('text-green-500');
                }, 5000);
            });

            // --- Footer Year ---
            document.getElementById('year').textContent = new Date().getFullYear();

        });
    </script>

</body>

</html>
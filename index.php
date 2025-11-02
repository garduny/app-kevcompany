<!doctype html>
<html lang="en" dir="ltr" data-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEV Company – Premium Cement & Concrete Blocks</title>
    <meta name="description"
        content="KEV Company • Industrial cement and concrete blocks • Premium quality for professional builders">
    <meta name="theme-color" content="#1c1c1c">
    <link rel="icon"
        href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'%3E%3Crect width='64' height='64' rx='10' fill='%231c1c1c'/%3E%3Cpath d='M12 44 L24 20 L30 32 L38 20 L52 44' stroke='%23bcc3c6' stroke-width='6' fill='none' stroke-linecap='round'/%3E%3C/svg%3E">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Noto+Sans+Arabic:wght@300;400;600;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: ['selector', '[data-theme="dark"]'],
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'system-ui', '-apple-system', 'sans-serif'],
                        arabic: ['"Noto Sans Arabic"', 'sans-serif']
                    },
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
                    animation: {
                        'fade-in-up': 'fadeInUp 0.6s ease-out',
                        'fade-in-down': 'fadeInDown 0.6s ease-out',
                        'slide-in-left': 'slideInLeft 0.6s ease-out',
                        'slide-in-right': 'slideInRight 0.6s ease-out',
                        'scale-in': 'scaleIn 0.5s ease-out',
                        'pulse-glow': 'pulseGlow 2s ease-in-out infinite',
                        'float': 'float 6s ease-in-out infinite',
                        'slide-up': 'slideUp 20s linear infinite',
                    }
                }
            }
        }
    </script>
    <style>
        :root {
            --white: #fff;
            --black: #000;
            --dark-slate: #3f5350;
            --slate-light: #527772;
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
            --accent: var(--slate-light);
            --shadow-xs: 0 2px 8px rgba(0, 0, 0, .25);
            --shadow-sm: 0 6px 16px rgba(0, 0, 0, .22);
            --shadow-md: 0 14px 34px rgba(0, 0, 0, .28);
            --shadow-lg: 0 34px 68px rgba(0, 0, 0, .35);
            --glow: 0 0 20px rgba(63, 83, 80, 0.4);
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
            --glow: 0 0 20px rgba(63, 83, 80, 0.15);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        ::selection {
            background-color: var(--brand);
            color: var(--white);
        }

        ::-webkit-scrollbar {
            width: 10px;
            background-color: var(--surface);
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, var(--brand), var(--accent));
            border-radius: 10px;
            border: 2px solid var(--surface);
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, var(--accent), var(--brand));
        }

        body {
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
        }

        /* Animated background texture */
        body::before {
            content: "";
            position: fixed;
            inset: 0;
            pointer-events: none;
            opacity: .12;
            mix-blend-mode: overlay;
            background-image:
                radial-gradient(circle at 20% 50%, rgba(63, 83, 80, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(82, 119, 114, 0.15) 0%, transparent 50%),
                radial-gradient(rgba(255, 255, 255, .05) 1px, transparent 1px);
            background-size: 100% 100%, 100% 100%, 3px 3px;
            animation: float 20s ease-in-out infinite;
            z-index: 0;
        }

        .progressbar {
            position: fixed;
            top: 0;
            left: 0;
            height: 3px;
            width: 0;
            background: linear-gradient(90deg, var(--brand), var(--accent), var(--brand));
            background-size: 200% 100%;
            z-index: 101;
            transition: width 0.2s ease;
            animation: shimmer 2s linear infinite;
        }

        @keyframes shimmer {
            0% {
                background-position: -200% 0;
            }

            100% {
                background-position: 200% 0;
            }
        }

        /* Hero video effects */
        .hero-video {
            filter: contrast(1.1) saturate(.85) brightness(.6);
            transition: all 0.3s ease;
        }

        [data-theme=light] .hero-video {
            filter: contrast(1.05) saturate(.9) brightness(.85);
        }

        /* Enhanced reveal animations */
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity .8s cubic-bezier(0.4, 0, 0.2, 1),
                transform .8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .reveal.show {
            opacity: 1;
            transform: none;
        }

        .reveal-left {
            opacity: 0;
            transform: translateX(-40px);
            transition: opacity .8s cubic-bezier(0.4, 0, 0.2, 1),
                transform .8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .reveal-left.show {
            opacity: 1;
            transform: none;
        }

        .reveal-right {
            opacity: 0;
            transform: translateX(40px);
            transition: opacity .8s cubic-bezier(0.4, 0, 0.2, 1),
                transform .8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .reveal-right.show {
            opacity: 1;
            transform: none;
        }

        .reveal-scale {
            opacity: 0;
            transform: scale(0.9);
            transition: opacity .7s cubic-bezier(0.4, 0, 0.2, 1),
                transform .7s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .reveal-scale.show {
            opacity: 1;
            transform: scale(1);
        }

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

        .delay-600 {
            transition-delay: 600ms;
        }

        .delay-700 {
            transition-delay: 700ms;
        }

        .delay-800 {
            transition-delay: 800ms;
        }

        /* Keyframe animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scale(0.8);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes pulseGlow {

            0%,
            100% {
                box-shadow: 0 0 0 0 rgba(63, 83, 80, 0.7), var(--shadow-sm);
            }

            50% {
                box-shadow: 0 0 0 15px rgba(63, 83, 80, 0), var(--shadow-lg);
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0) rotate(0deg);
            }

            33% {
                transform: translateY(-10px) rotate(1deg);
            }

            66% {
                transform: translateY(10px) rotate(-1deg);
            }
        }

        @keyframes slideUp {
            from {
                transform: translateY(0);
            }

            to {
                transform: translateY(-50%);
            }
        }

        /* Enhanced card styles */
        .card-hover {
            position: relative;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card-hover::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: inherit;
            padding: 2px;
            background: linear-gradient(135deg, var(--brand), var(--accent), var(--brand));
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .card-hover:hover::before {
            opacity: 1;
        }

        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-lg), var(--glow);
        }

        /* Stat card glow effect */
        .stat-card {
            position: relative;
            overflow: hidden;
        }

        .stat-card::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(63, 83, 80, 0.2) 0%, transparent 70%);
            transform: translate(-50%, -50%) scale(0);
            transition: transform 0.6s ease;
            pointer-events: none;
        }

        .stat-card:hover::after {
            transform: translate(-50%, -50%) scale(2);
        }

        /* Service card shine effect */
        .service-card {
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg,
                    transparent 30%,
                    rgba(255, 255, 255, 0.1) 50%,
                    transparent 70%);
            transform: rotate(45deg);
            transition: all 0.6s ease;
        }

        .service-card:hover::before {
            left: 100%;
        }

        /* Timeline styles */
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
            width: 3px;
            background: linear-gradient(180deg, var(--brand), var(--accent));
            border-radius: 3px;
        }

        .milestone {
            position: relative;
            padding: 20px 0;
        }

        .milestone::before {
            content: "";
            position: absolute;
            left: -46px;
            top: 28px;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: var(--brand);
            box-shadow: 0 0 0 4px var(--surface-2), 0 0 0 6px var(--brand);
            transition: all 0.3s ease;
            animation: pulseGlow 2s ease-in-out infinite;
        }

        .milestone:hover::before {
            transform: scale(1.2);
        }

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
            right: -46px;
        }

        /* Enhanced Swiper styles */
        .swiper-button-next,
        .swiper-button-prev {
            color: var(--text);
            background: var(--surface-2);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 2px solid var(--line);
            box-shadow: var(--shadow-md);
            transition: all .4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background: var(--brand);
            transform: scale(1.15);
            box-shadow: var(--shadow-lg), var(--glow);
            border-color: var(--brand);
        }

        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: 20px;
            font-weight: bold;
        }

        .swiper-pagination-bullet {
            background: var(--muted);
            opacity: 0.5;
            width: 10px;
            height: 10px;
            transition: all .3s ease;
        }

        .swiper-pagination-bullet-active {
            background: var(--brand);
            opacity: 1;
            width: 32px;
            border-radius: 5px;
            box-shadow: var(--glow);
        }

        /* Gradient text */
        .gradient-text {
            background: linear-gradient(135deg, var(--text), var(--brand), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Badge pulse */
        .badge-pulse {
            animation: pulseGlow 2s ease-in-out infinite;
        }

        /* Image overlay effects */
        .img-overlay {
            position: relative;
            overflow: hidden;
        }

        .img-overlay::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(63, 83, 80, 0.3), rgba(82, 119, 114, 0.3));
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .img-overlay:hover::after {
            opacity: 1;
        }

        .img-overlay img {
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .img-overlay:hover img {
            transform: scale(1.1) rotate(1deg);
        }

        /* Button glow */
        .btn-glow {
            position: relative;
            overflow: hidden;
        }

        .btn-glow::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s ease, height 0.6s ease;
        }

        .btn-glow:hover::before {
            width: 300px;
            height: 300px;
        }

        .btn-glow span {
            position: relative;
            z-index: 1;
        }

        /* Container */
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

        /* Floating action buttons */
        .fab-container {
            animation: float 4s ease-in-out infinite;
        }

        .fab-item {
            backdrop-filter: blur(10px);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .fab-item:hover {
            transform: translateY(-4px) scale(1.05);
            box-shadow: var(--shadow-lg), var(--glow);
        }
    </style>
</head>

<body class="bg-bg text-text font-sans antialiased">
    <div class="progressbar" id="progressbar"></div>

    <!-- Mobile Menu -->
    <div id="mobileMenu"
        class="fixed inset-0 z-[60] flex h-screen w-full flex-col items-center justify-center gap-6 bg-surface/95 backdrop-blur-xl p-8 transition-transform duration-500 ease-in-out lg:hidden -translate-x-full">
        <button id="mobileMenuCloseBtn"
            class="absolute top-6 right-6 p-2 hover:rotate-90 transition-transform duration-300"
            aria-label="Close menu">
            <svg class="h-8 w-8 text-text" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <a href="#home" class="text-2xl font-semibold hover:text-brand transition-all duration-300 hover:scale-110"
            data-i18n="nav_home">Home</a>
        <a href="#about" class="text-2xl font-semibold hover:text-brand transition-all duration-300 hover:scale-110"
            data-i18n="nav_about">About</a>
        <a href="#story" class="text-2xl font-semibold hover:text-brand transition-all duration-300 hover:scale-110"
            data-i18n="nav_story">Story</a>
        <a href="#services" class="text-2xl font-semibold hover:text-brand transition-all duration-300 hover:scale-110"
            data-i18n="nav_services">Services</a>
        <a href="#clients" class="text-2xl font-semibold hover:text-brand transition-all duration-300 hover:scale-110"
            data-i18n="nav_clients">Clients</a>
        <a href="#projects" class="text-2xl font-semibold hover:text-brand transition-all duration-300 hover:scale-110"
            data-i18n="nav_projects">Projects</a>
        <a href="#contact" class="text-2xl font-semibold hover:text-brand transition-all duration-300 hover:scale-110"
            data-i18n="nav_contact">Contact</a>
    </div>

    <!-- Header -->
    <header class="sticky top-0 z-50 border-b border-line bg-surface/80 backdrop-blur-xl transition-all duration-300"
        id="header">
        <div class="container">
            <nav class="flex items-center justify-between gap-5 py-4">
                <div class="flex flex-shrink-0 items-center gap-3 group">
                    <div class="relative">
                        <div
                            class="absolute inset-0 bg-brand rounded-lg blur-md opacity-0 group-hover:opacity-50 transition-opacity duration-300">
                        </div>
                        <img class="h-10 w-10 relative transition-transform duration-300 group-hover:scale-110 group-hover:rotate-3"
                            src="./logo.png"
                            alt="KEV Logo">
                    </div>
                    <span class="hidden text-lg font-black tracking-tight sm:block gradient-text" data-i18n="brand">KEV
                        Company</span>
                </div>

                <div class="hidden items-center justify-center gap-1 lg:flex">
                    <a href="#home"
                        class="rounded-lg border border-transparent px-3 py-2 text-sm font-medium transition-all duration-300 hover:border-line hover:bg-surface-2 hover:scale-105"
                        data-i18n="nav_home">Home</a>
                    <a href="#about"
                        class="rounded-lg border border-transparent px-3 py-2 text-sm font-medium transition-all duration-300 hover:border-line hover:bg-surface-2 hover:scale-105"
                        data-i18n="nav_about">About</a>
                    <a href="#story"
                        class="rounded-lg border border-transparent px-3 py-2 text-sm font-medium transition-all duration-300 hover:border-line hover:bg-surface-2 hover:scale-105"
                        data-i18n="nav_story">Story</a>
                    <a href="#services"
                        class="rounded-lg border border-transparent px-3 py-2 text-sm font-medium transition-all duration-300 hover:border-line hover:bg-surface-2 hover:scale-105"
                        data-i18n="nav_services">Services</a>
                    <a href="#clients"
                        class="rounded-lg border border-transparent px-3 py-2 text-sm font-medium transition-all duration-300 hover:border-line hover:bg-surface-2 hover:scale-105"
                        data-i18n="nav_clients">Clients</a>
                    <a href="#projects"
                        class="rounded-lg border border-transparent px-3 py-2 text-sm font-medium transition-all duration-300 hover:border-line hover:bg-surface-2 hover:scale-105"
                        data-i18n="nav_projects">Projects</a>
                    <a href="#contact"
                        class="rounded-lg border border-transparent px-3 py-2 text-sm font-medium transition-all duration-300 hover:border-line hover:bg-surface-2 hover:scale-105"
                        data-i18n="nav_contact">Contact</a>
                </div>

                <div class="flex flex-shrink-0 items-center gap-2">
                    <button id="themeToggle"
                        class="flex h-10 w-10 cursor-pointer items-center justify-center rounded-lg border border-line bg-surface-2 text-lg transition-all duration-300 hover:bg-brand hover:border-brand hover:scale-110 hover:rotate-12"
                        aria-label="Toggle theme">🌓</button>
                    <div class="hidden rounded-lg bg-surface-2 p-1 sm:flex gap-1">
                        <button
                            class="rounded-md px-3 py-1.5 text-xs font-semibold transition-all duration-300 hover:bg-brand hover:text-white"
                            data-lang-btn="en">EN</button>
                        <button
                            class="rounded-md px-3 py-1.5 text-xs font-semibold transition-all duration-300 hover:bg-brand hover:text-white"
                            data-lang-btn="ar">AR</button>
                        <button
                            class="rounded-md px-3 py-1.5 text-xs font-semibold transition-all duration-300 hover:bg-brand hover:text-white"
                            data-lang-btn="ku">KU</button>
                    </div>
                    <button id="mobileMenuBtn"
                        class="flex h-10 w-10 cursor-pointer items-center justify-center rounded-lg border border-line bg-surface-2 transition-all duration-300 hover:bg-brand hover:border-brand hover:scale-110 lg:hidden"
                        aria-label="Open menu">
                        <svg class="h-6 w-6 text-text transition-transform duration-300 hover:rotate-90"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <main id="home" class="relative border-b border-line overflow-hidden">
        <video class="hero-video absolute inset-0 h-full w-full object-cover" autoplay muted loop playsinline
            preload="metadata">
            <source src="./hero.mp4"
                type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-gradient-to-br from-black/70 via-black/60 to-black/70"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>

        <div
            class="container relative z-10 flex min-h-[90vh] items-center justify-center py-32 text-center md:min-h-[75vh]">
            <div class="max-w-5xl">
                <div class="reveal-scale mb-6">
                    <span
                        class="inline-block rounded-full bg-brand/20 backdrop-blur-sm px-6 py-2 text-sm font-bold text-white border border-brand/50 badge-pulse"
                        data-i18n="about_badge">
                        Since 2010
                    </span>
                </div>

                <h1
                    class="reveal text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-black leading-tight tracking-tighter text-white mb-6 delay-100">
                    <span data-i18n="hero_title">Industrial Cement & Precision Blocks</span>
                </h1>

                <p class="reveal mx-auto mt-6 max-w-3xl text-lg sm:text-xl md:text-2xl leading-relaxed text-white/90 font-medium delay-200"
                    data-i18n="hero_sub">
                    Engineered durability, tight tolerances, and consistent supply for contractors, developers, and
                    infrastructure builds.
                </p>

                <div
                    class="reveal mt-10 flex flex-col flex-wrap items-center justify-center gap-4 sm:flex-row delay-300">
                    <a href="#services"
                        class="btn-glow group inline-flex w-full items-center justify-center gap-2 rounded-xl bg-brand px-8 py-4 text-base font-bold text-white shadow-lg transition-all duration-300 hover:shadow-2xl hover:scale-105 sm:w-auto">
                        <span data-i18n="cta_services">View Services</span>
                        <svg class="h-5 w-5 transition-transform duration-300 group-hover:translate-x-1" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                    <a href="#contact"
                        class="btn-glow inline-flex w-full items-center justify-center gap-2 rounded-xl border-2 border-white/30 bg-white/10 backdrop-blur-md px-8 py-4 text-base font-bold text-white shadow-lg transition-all duration-300 hover:bg-white/20 hover:border-white/50 hover:shadow-2xl hover:scale-105 sm:w-auto">
                        <span data-i18n="cta_quote">Get a Quote</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
            <svg class="h-6 w-6 text-white/70" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
        </div>
    </main>

    <!-- About Section -->
    <section id="about" class="border-b border-line py-20 md:py-32 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-brand/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-accent/5 rounded-full blur-3xl"></div>

        <div class="container relative">
            <div class="text-center max-w-4xl mx-auto mb-16">
                <h2 class="reveal text-4xl sm:text-5xl md:text-6xl font-black tracking-tight mb-6">
                    <span class="gradient-text" data-i18n="about_title">Industrial-grade cement & block solutions</span>
                </h2>
                <p class="reveal text-lg md:text-xl text-muted leading-relaxed delay-100" data-i18n="about_text">
                    ISO-aligned processes, premium aggregates, and continuous compression testing ensure consistency and
                    durability in every unit.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <div
                    class="reveal-scale stat-card card-hover rounded-2xl border border-line bg-surface-2 p-8 text-center shadow-sm delay-100">
                    <div class="mb-4 inline-flex h-16 w-16 items-center justify-center rounded-full bg-brand/10">
                        <svg class="h-8 w-8 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                    </div>
                    <strong class="counter block text-5xl font-black text-brand mb-2" data-target="40000">0</strong>
                    <span class="block text-sm font-medium text-muted uppercase tracking-wide"
                        data-i18n="cap_blocks">blocks/day</span>
                </div>

                <div
                    class="reveal-scale stat-card card-hover rounded-2xl border border-line bg-surface-2 p-8 text-center shadow-sm delay-200">
                    <div class="mb-4 inline-flex h-16 w-16 items-center justify-center rounded-full bg-brand/10">
                        <svg class="h-8 w-8 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <strong class="counter block text-5xl font-black text-brand mb-2" data-target="98">0</strong>
                    <span class="block text-sm font-medium text-muted uppercase tracking-wide"
                        data-i18n="cap_ontime">on-time delivery (%)</span>
                </div>

                <div
                    class="reveal-scale stat-card card-hover rounded-2xl border border-line bg-surface-2 p-8 text-center shadow-sm delay-300">
                    <div class="mb-4 inline-flex h-16 w-16 items-center justify-center rounded-full bg-brand/10">
                        <svg class="h-8 w-8 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <strong class="counter block text-5xl font-black text-brand mb-2" data-target="250">0</strong>
                    <span class="block text-sm font-medium text-muted uppercase tracking-wide"
                        data-i18n="cap_projects">projects served</span>
                </div>

                <div
                    class="reveal-scale stat-card card-hover rounded-2xl border border-line bg-surface-2 p-8 text-center shadow-sm delay-400">
                    <div class="mb-4 inline-flex h-16 w-16 items-center justify-center rounded-full bg-brand/10">
                        <svg class="h-8 w-8 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <strong class="counter block text-5xl font-black text-brand mb-2" data-target="22">0</strong>
                    <span class="block text-sm font-medium text-muted uppercase tracking-wide"
                        data-i18n="cap_strength">MPa max strength</span>
                </div>
            </div>
        </div>
    </section>



    <!-- Services Section -->
    <section id="services" class="border-b border-line py-20 md:py-32 bg-surface">
        <div class="container">
            <div class="text-center max-w-4xl mx-auto mb-16">
                <h2 class="reveal text-4xl sm:text-5xl md:text-6xl font-black tracking-tight mb-6">
                    <span class="gradient-text" data-i18n="services_title">Services & Products</span>
                </h2>
                <p class="reveal text-lg md:text-xl text-muted leading-relaxed delay-100" data-i18n="services_sub">
                    From standard blocks to custom mixes – engineered for your specs.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <div
                    class="reveal-scale service-card card-hover rounded-2xl border border-line bg-surface-2 shadow-sm overflow-hidden delay-100">
                    <div class="img-overlay">
                        <img class="h-64 w-full object-cover"
                            src="https://images.pexels.com/photos/585419/pexels-photo-585419.jpeg?auto=compress&cs=tinysrgb&w=800"
                            alt="Concrete blocks">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-3" data-i18n="svc_1_title">Concrete Masonry Blocks</h3>
                        <p class="text-muted mb-4 leading-relaxed" data-i18n="svc_1_text">High-density hollow & solid
                            blocks with precise dimensions.</p>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="rounded-full bg-brand/10 border border-brand/20 px-4 py-1.5 text-sm font-medium text-brand">100×200×400</span>
                            <span
                                class="rounded-full bg-brand/10 border border-brand/20 px-4 py-1.5 text-sm font-medium text-brand">150×200×400</span>
                            <span
                                class="rounded-full bg-brand/10 border border-brand/20 px-4 py-1.5 text-sm font-medium text-brand">200×200×400</span>
                        </div>
                    </div>
                </div>

                <div
                    class="reveal-scale service-card card-hover rounded-2xl border border-line bg-surface-2 shadow-sm overflow-hidden delay-200">
                    <div class="img-overlay">
                        <img class="h-64 w-full object-cover"
                            src="https://images.pexels.com/photos/3760809/pexels-photo-3760809.jpeg?auto=compress&cs=tinysrgb&w=800"
                            alt="Cement supply">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-3" data-i18n="svc_2_title">Bulk Cement Supply</h3>
                        <p class="text-muted mb-4 leading-relaxed" data-i18n="svc_2_text">Reliable delivery for
                            contractors & ready-mix plants.</p>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="rounded-full bg-brand/10 border border-brand/20 px-4 py-1.5 text-sm font-medium text-brand">Clinker</span>
                            <span
                                class="rounded-full bg-brand/10 border border-brand/20 px-4 py-1.5 text-sm font-medium text-brand">Portland</span>
                            <span
                                class="rounded-full bg-brand/10 border border-brand/20 px-4 py-1.5 text-sm font-medium text-brand">Bulk
                                tankers</span>
                        </div>
                    </div>
                </div>

                <div
                    class="reveal-scale service-card card-hover rounded-2xl border border-line bg-surface-2 shadow-sm overflow-hidden delay-300">
                    <div class="img-overlay">
                        <img class="h-64 w-full object-cover"
                            src="https://images.pexels.com/photos/2219024/pexels-photo-2219024.jpeg?auto=compress&cs=tinysrgb&w=800"
                            alt="Interlock pavers">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-3">Interlock & Kerbstone</h3>
                        <p class="text-muted mb-4 leading-relaxed">Vibration-pressed pavers and kerbs with tight
                            tolerances.</p>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="rounded-full bg-brand/10 border border-brand/20 px-4 py-1.5 text-sm font-medium text-brand">60mm</span>
                            <span
                                class="rounded-full bg-brand/10 border border-brand/20 px-4 py-1.5 text-sm font-medium text-brand">80mm</span>
                            <span
                                class="rounded-full bg-brand/10 border border-brand/20 px-4 py-1.5 text-sm font-medium text-brand">100mm</span>
                        </div>
                    </div>
                </div>

                <div
                    class="reveal-scale service-card card-hover rounded-2xl border border-line bg-surface-2 shadow-sm overflow-hidden delay-100">
                    <div class="img-overlay">
                        <img class="h-64 w-full object-cover"
                            src="https://images.pexels.com/photos/221032/pexels-photo-221032.jpeg?auto=compress&cs=tinysrgb&w=800"
                            alt="Aggregates">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-3">Aggregates Supply</h3>
                        <p class="text-muted mb-4 leading-relaxed">Gravel, crushed stone, and sand for structural
                            concrete.</p>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="rounded-full bg-brand/10 border border-brand/20 px-4 py-1.5 text-sm font-medium text-brand">3/8"</span>
                            <span
                                class="rounded-full bg-brand/10 border border-brand/20 px-4 py-1.5 text-sm font-medium text-brand">3/4"</span>
                            <span
                                class="rounded-full bg-brand/10 border border-brand/20 px-4 py-1.5 text-sm font-medium text-brand">Washed
                                sand</span>
                        </div>
                    </div>
                </div>

                <div
                    class="reveal-scale service-card card-hover rounded-2xl border border-line bg-surface-2 shadow-sm overflow-hidden delay-200">
                    <div class="img-overlay">
                        <img class="h-64 w-full object-cover"
                            src="https://images.pexels.com/photos/3735747/pexels-photo-3735747.jpeg?auto=compress&cs=tinysrgb&w=800"
                            alt="Lab testing">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-3">Technical & Lab Testing</h3>
                        <p class="text-muted mb-4 leading-relaxed">Compressive tests and submittals to support your
                            tenders.</p>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="rounded-full bg-brand/10 border border-brand/20 px-4 py-1.5 text-sm font-medium text-brand">12–22
                                MPa</span>
                            <span
                                class="rounded-full bg-brand/10 border border-brand/20 px-4 py-1.5 text-sm font-medium text-brand">ISO
                                certified</span>
                        </div>
                    </div>
                </div>

                <div
                    class="reveal-scale service-card card-hover rounded-2xl border border-line bg-surface-2 shadow-sm overflow-hidden delay-300">
                    <div class="img-overlay">
                        <img class="h-64 w-full object-cover"
                            src="https://images.pexels.com/photos/1267338/pexels-photo-1267338.jpeg?auto=compress&cs=tinysrgb&w=800"
                            alt="Logistics">
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-3">Logistics & On-site Offloading</h3>
                        <p class="text-muted mb-4 leading-relaxed">Fleet and cranes for fast, safe site deliveries.</p>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="rounded-full bg-brand/10 border border-brand/20 px-4 py-1.5 text-sm font-medium text-brand">Flatbeds</span>
                            <span
                                class="rounded-full bg-brand/10 border border-brand/20 px-4 py-1.5 text-sm font-medium text-brand">Cranes</span>
                            <span
                                class="rounded-full bg-brand/10 border border-brand/20 px-4 py-1.5 text-sm font-medium text-brand">Schedule-first</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Specifications Section -->
    <section id="specs" class="border-b border-line py-20 md:py-32 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-accent/5 rounded-full blur-3xl"></div>

        <div class="container relative">
            <div class="text-center max-w-4xl mx-auto mb-16">
                <h2 class="reveal text-4xl sm:text-5xl md:text-6xl font-black tracking-tight mb-6 gradient-text">
                    Specifications
                </h2>
                <p class="reveal text-lg md:text-xl text-muted leading-relaxed delay-100">
                    Standard block sizes, compressive strength classes, and pallet counts.
                </p>
            </div>

            <div
                class="reveal-scale max-w-5xl mx-auto overflow-hidden rounded-2xl border border-line bg-surface-2 shadow-lg delay-200">
                <div class="overflow-x-auto">
                    <table class="min-w-full w-full">
                        <thead class="bg-brand/10 border-b-2 border-brand/20">
                            <tr>
                                <th class="p-4 text-left text-sm font-bold uppercase tracking-wide">Product</th>
                                <th class="p-4 text-left text-sm font-bold uppercase tracking-wide">Size (mm)</th>
                                <th class="p-4 text-left text-sm font-bold uppercase tracking-wide">Type</th>
                                <th class="p-4 text-left text-sm font-bold uppercase tracking-wide">Strength (MPa)</th>
                                <th class="p-4 text-left text-sm font-bold uppercase tracking-wide">Pallet Qty</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-line">
                            <tr class="hover:bg-brand/5 transition-colors duration-200">
                                <td class="p-4 font-medium">Hollow Block</td>
                                <td class="p-4 text-muted">100×200×400</td>
                                <td class="p-4 text-muted">3-Cell</td>
                                <td class="p-4 font-semibold text-brand">12</td>
                                <td class="p-4 text-muted">240</td>
                            </tr>
                            <tr class="hover:bg-brand/5 transition-colors duration-200">
                                <td class="p-4 font-medium">Hollow Block</td>
                                <td class="p-4 text-muted">150×200×400</td>
                                <td class="p-4 text-muted">3-Cell</td>
                                <td class="p-4 font-semibold text-brand">15</td>
                                <td class="p-4 text-muted">180</td>
                            </tr>
                            <tr class="hover:bg-brand/5 transition-colors duration-200">
                                <td class="p-4 font-medium">Solid Block</td>
                                <td class="p-4 text-muted">200×200×400</td>
                                <td class="p-4 text-muted">Solid</td>
                                <td class="p-4 font-semibold text-brand">18</td>
                                <td class="p-4 text-muted">140</td>
                            </tr>
                            <tr class="hover:bg-brand/5 transition-colors duration-200">
                                <td class="p-4 font-medium">Interlock Paver</td>
                                <td class="p-4 text-muted">200×100×60</td>
                                <td class="p-4 text-muted">Chamfer</td>
                                <td class="p-4 font-semibold text-brand">22</td>
                                <td class="p-4 text-muted">12 m²</td>
                            </tr>
                            <tr class="hover:bg-brand/5 transition-colors duration-200">
                                <td class="p-4 font-medium">Portland Cement</td>
                                <td class="p-4 text-muted">—</td>
                                <td class="p-4 text-muted">Bulk/Bag</td>
                                <td class="p-4 font-semibold text-brand">—</td>
                                <td class="p-4 text-muted">—</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Section -->
    <section id="clients" class="border-b border-line bg-surface py-20 md:py-32">
        <div class="container">
            <div class="text-center max-w-4xl mx-auto mb-16">
                <h2 class="reveal text-4xl sm:text-5xl md:text-6xl font-black tracking-tight mb-6 gradient-text">
                    Trusted By
                </h2>
                <p class="reveal text-lg md:text-xl text-muted leading-relaxed delay-100">
                    We proudly supply contractors, developers and infrastructure projects across the region.
                </p>
            </div>

            <div class="swiper clients-swiper reveal overflow-hidden delay-200">
                <div class="swiper-wrapper items-center">
                    <div class="swiper-slide flex justify-center">
                        <div class="card-hover rounded-xl border border-line bg-surface-2 p-8 shadow-sm">
                            <img src="https://dummyimage.com/200x80/3f5350/ffffff&text=CONTRACTOR+A" alt="Client 1"
                                class="max-w-[180px] h-auto transition-all duration-300">
                        </div>
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <div class="card-hover rounded-xl border border-line bg-surface-2 p-8 shadow-sm">
                            <img src="https://dummyimage.com/200x80/3f5350/ffffff&text=DEVELOPER+B" alt="Client 2"
                                class="max-w-[180px] h-auto transition-all duration-300">
                        </div>
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <div class="card-hover rounded-xl border border-line bg-surface-2 p-8 shadow-sm">
                            <img src="https://dummyimage.com/200x80/3f5350/ffffff&text=BUILDER+C" alt="Client 3"
                                class="max-w-[180px] h-auto transition-all duration-300">
                        </div>
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <div class="card-hover rounded-xl border border-line bg-surface-2 p-8 shadow-sm">
                            <img src="https://dummyimage.com/200x80/3f5350/ffffff&text=ENGINEER+D" alt="Client 4"
                                class="max-w-[180px] h-auto transition-all duration-300">
                        </div>
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <div class="card-hover rounded-xl border border-line bg-surface-2 p-8 shadow-sm">
                            <img src="https://dummyimage.com/200x80/3f5350/ffffff&text=INFRACO+E" alt="Client 5"
                                class="max-w-[180px] h-auto transition-all duration-300">
                        </div>
                    </div>
                    <div class="swiper-slide flex justify-center">
                        <div class="card-hover rounded-xl border border-line bg-surface-2 p-8 shadow-sm">
                            <img src="https://dummyimage.com/200x80/3f5350/ffffff&text=PROJECT+F" alt="Client 6"
                                class="max-w-[180px] h-auto transition-all duration-300">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Slider Section -->
    <section id="gallery-slider" class="border-b border-line py-20 md:py-32 relative overflow-hidden">
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-brand/5 rounded-full blur-3xl"></div>

        <div class="container relative">
            <div class="text-center max-w-4xl mx-auto mb-16">
                <h2 class="reveal text-4xl sm:text-5xl md:text-6xl font-black tracking-tight mb-6 gradient-text">
                    Our Facilities & Operations
                </h2>
                <p class="reveal text-lg md:text-xl text-muted leading-relaxed delay-100">
                    Take a look at our state-of-the-art production facilities, quality control labs, and delivery fleet.
                </p>
            </div>

            <div class="swiper company-swiper reveal overflow-hidden rounded-2xl pb-12 delay-200">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="img-overlay rounded-2xl overflow-hidden border border-line shadow-xl">
                            <img class="h-[350px] md:h-[550px] w-full object-cover"
                                src="https://images.pexels.com/photos/585419/pexels-photo-585419.jpeg?auto=compress&cs=tinysrgb&w=1200"
                                alt="Block Production Line">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-overlay rounded-2xl overflow-hidden border border-line shadow-xl">
                            <img class="h-[350px] md:h-[550px] w-full object-cover"
                                src="https://images.pexels.com/photos/159306/construction-site-build-construction-work-159306.jpeg?auto=compress&cs=tinysrgb&w=1200"
                                alt="Construction Site">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-overlay rounded-2xl overflow-hidden border border-line shadow-xl">
                            <img class="h-[350px] md:h-[550px] w-full object-cover"
                                src="https://images.pexels.com/photos/3735747/pexels-photo-3735747.jpeg?auto=compress&cs=tinysrgb&w=1200"
                                alt="Quality Control Lab">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-overlay rounded-2xl overflow-hidden border border-line shadow-xl">
                            <img class="h-[350px] md:h-[550px] w-full object-cover"
                                src="https://images.pexels.com/photos/1267338/pexels-photo-1267338.jpeg?auto=compress&cs=tinysrgb&w=1200"
                                alt="Warehouse Storage">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-overlay rounded-2xl overflow-hidden border border-line shadow-xl">
                            <img class="h-[350px] md:h-[550px] w-full object-cover"
                                src="https://images.pexels.com/photos/1267684/pexels-photo-1267684.jpeg?auto=compress&cs=tinysrgb&w=1200"
                                alt="Delivery Trucks">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="img-overlay rounded-2xl overflow-hidden border border-line shadow-xl">
                            <img class="h-[350px] md:h-[550px] w-full object-cover"
                                src="https://images.pexels.com/photos/2219024/pexels-photo-2219024.jpeg?auto=compress&cs=tinysrgb&w=1200"
                                alt="Paver Production">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="border-b border-line bg-surface py-20 md:py-32">
        <div class="container">
            <div class="text-center max-w-4xl mx-auto mb-16">
                <h2 class="reveal text-4xl sm:text-5xl md:text-6xl font-black tracking-tight mb-6">
                    <span class="gradient-text" data-i18n="projects_title">Projects</span>
                </h2>
                <p class="reveal text-lg md:text-xl text-muted leading-relaxed delay-100" data-i18n="projects_sub">
                    A glimpse of sites supplied with KEV blocks and cement.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <div
                    class="reveal-scale img-overlay rounded-2xl overflow-hidden border border-line shadow-lg delay-100">
                    <img class="h-72 w-full object-cover"
                        src="https://images.pexels.com/photos/585419/pexels-photo-585419.jpeg?auto=compress&cs=tinysrgb&w=800"
                        alt="Residential project">
                </div>
                <div
                    class="reveal-scale img-overlay rounded-2xl overflow-hidden border border-line shadow-lg delay-200">
                    <img class="h-72 w-full object-cover"
                        src="https://images.pexels.com/photos/159306/construction-site-build-construction-work-159306.jpeg?auto=compress&cs=tinysrgb&w=800"
                        alt="Commercial building">
                </div>
                <div
                    class="reveal-scale img-overlay rounded-2xl overflow-hidden border border-line shadow-lg delay-300">
                    <img class="h-72 w-full object-cover"
                        src="https://images.pexels.com/photos/3760809/pexels-photo-3760809.jpeg?auto=compress&cs=tinysrgb&w=800"
                        alt="Infrastructure project">
                </div>
                <div
                    class="reveal-scale img-overlay rounded-2xl overflow-hidden border border-line shadow-lg delay-100">
                    <img class="h-72 w-full object-cover"
                        src="https://images.pexels.com/photos/221032/pexels-photo-221032.jpeg?auto=compress&cs=tinysrgb&w=800"
                        alt="Industrial facility">
                </div>
                <div
                    class="reveal-scale img-overlay rounded-2xl overflow-hidden border border-line shadow-lg delay-200">
                    <img class="h-72 w-full object-cover"
                        src="https://images.pexels.com/photos/2219024/pexels-photo-2219024.jpeg?auto=compress&cs=tinysrgb&w=800"
                        alt="Paving project">
                </div>
                <div
                    class="reveal-scale img-overlay rounded-2xl overflow-hidden border border-line shadow-lg delay-300">
                    <img class="h-72 w-full object-cover"
                        src="https://images.pexels.com/photos/3735747/pexels-photo-3735747.jpeg?auto=compress&cs=tinysrgb&w=800"
                        alt="Quality testing">
                </div>
            </div>
        </div>
    </section>

    <!-- Quality Section -->
    <section id="quality" class="border-b border-line bg-surface py-20 md:py-32">
        <div class="container">
            <div class="text-center max-w-4xl mx-auto mb-16">
                <h2 class="reveal text-4xl sm:text-5xl md:text-6xl font-black tracking-tight mb-6 gradient-text">
                    Commitment to Quality
                </h2>
                <p class="reveal text-lg md:text-xl text-muted leading-relaxed delay-100">
                    Our production adheres to rigorous standards to ensure every product meets your specifications.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <div
                    class="reveal-left card-hover rounded-2xl border border-line bg-surface-2 p-8 text-center shadow-sm delay-100">
                    <div class="mb-6 inline-flex h-20 w-20 items-center justify-center rounded-full bg-brand/10">
                        <svg class="h-10 w-10 text-brand" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">ISO Certified</h3>
                    <p class="text-muted leading-relaxed">Managed processes that align with international quality
                        standards.</p>
                </div>

                <div
                    class="reveal card-hover rounded-2xl border border-line bg-surface-2 p-8 text-center shadow-sm delay-200">
                    <div class="mb-6 inline-flex h-20 w-20 items-center justify-center rounded-full bg-brand/10">
                        <svg class="h-10 w-10 text-brand" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">Premium Aggregates</h3>
                    <p class="text-muted leading-relaxed">Only high-grade, washed, and tested raw materials are used.
                    </p>
                </div>

                <div
                    class="reveal-right card-hover rounded-2xl border border-line bg-surface-2 p-8 text-center shadow-sm delay-300">
                    <div class="mb-6 inline-flex h-20 w-20 items-center justify-center rounded-full bg-brand/10">
                        <svg class="h-10 w-10 text-brand" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">Batch Testing</h3>
                    <p class="text-muted leading-relaxed">Continuous compressive strength and tolerance testing for
                        every batch.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Story Section -->
    <section id="story" class="border-b border-line py-20 md:py-32 relative overflow-hidden">
        <div class="absolute top-1/2 left-0 w-96 h-96 bg-brand/5 rounded-full blur-3xl -translate-y-1/2"></div>

        <div class="container relative">
            <div class="max-w-4xl mx-auto mb-16">
                <h2 class="reveal text-4xl sm:text-5xl md:text-6xl font-black tracking-tight mb-6">
                    <span class="gradient-text" data-i18n="story_title">Our Story</span>
                </h2>
                <p class="reveal text-lg md:text-xl text-muted leading-relaxed delay-100" data-i18n="story_sub">
                    From a small workshop to a modern production line with rigorous quality control.
                </p>
            </div>

            <div class="timeline max-w-4xl mx-auto">
                <div class="milestone reveal delay-100">
                    <div class="card-hover rounded-2xl border border-line bg-surface-2 p-8 shadow-sm">
                        <div class="flex items-start gap-4">
                            <div
                                class="flex-shrink-0 inline-flex h-12 w-12 items-center justify-center rounded-full bg-brand/10">
                                <svg class="h-6 w-6 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                </svg>
                            </div>
                            <div>
                                <strong class="text-2xl font-bold mb-2 block" data-i18n="story_1_title">2010 –
                                    Founded</strong>
                                <p class="text-muted leading-relaxed" data-i18n="story_1_text">Started operations with a
                                    focus on reliable masonry units for local builders.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="milestone reveal delay-200">
                    <div class="card-hover rounded-2xl border border-line bg-surface-2 p-8 shadow-sm">
                        <div class="flex items-start gap-4">
                            <div
                                class="flex-shrink-0 inline-flex h-12 w-12 items-center justify-center rounded-full bg-brand/10">
                                <svg class="h-6 w-6 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <strong class="text-2xl font-bold mb-2 block" data-i18n="story_2_title">2016 –
                                    Automation</strong>
                                <p class="text-muted leading-relaxed" data-i18n="story_2_text">Introduced automated
                                    mixing and curing for stronger, uniform blocks.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="milestone reveal delay-300">
                    <div class="card-hover rounded-2xl border border-line bg-surface-2 p-8 shadow-sm">
                        <div class="flex items-start gap-4">
                            <div
                                class="flex-shrink-0 inline-flex h-12 w-12 items-center justify-center rounded-full bg-brand/10">
                                <svg class="h-6 w-6 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>
                            </div>
                            <div>
                                <strong class="text-2xl font-bold mb-2 block" data-i18n="story_3_title">2021 – Capacity
                                    Upgrade</strong>
                                <p class="text-muted leading-relaxed" data-i18n="story_3_text">Expanded output and
                                    logistics, serving large-scale construction projects.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact Section -->
    <section id="contact" class="py-20 md:py-32 relative overflow-hidden">
        <div class="absolute top-1/3 right-0 w-96 h-96 bg-brand/5 rounded-full blur-3xl"></div>

        <div class="container relative">
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-5">
                <div class="lg:col-span-3">
                    <h2 class="reveal text-4xl sm:text-5xl md:text-6xl font-black tracking-tight mb-6">
                        <span class="gradient-text" data-i18n="contact_title">Get a Quote</span>
                    </h2>
                    <p class="reveal text-lg md:text-xl text-muted leading-relaxed mb-8 delay-100"
                        data-i18n="contact_sub">
                        Tell us your quantity, sizes, and delivery date. We'll reply fast.
                    </p>

                    <form id="contactForm" class="grid grid-cols-1 gap-5">
                        <input type="text" name="name" placeholder="Name" data-ph="name" required
                            class="reveal w-full rounded-xl border-2 border-line bg-surface-2 p-4 text-base text-text placeholder-muted outline-none transition-all duration-300 focus:border-brand focus:ring-4 focus:ring-brand/20 delay-200">
                        <input type="email" name="email" placeholder="Email" data-ph="email" required
                            class="reveal w-full rounded-xl border-2 border-line bg-surface-2 p-4 text-base text-text placeholder-muted outline-none transition-all duration-300 focus:border-brand focus:ring-4 focus:ring-brand/20 delay-300">
                        <textarea name="message" placeholder="Your requirements" data-ph="message" required rows="6"
                            class="reveal w-full rounded-xl border-2 border-line bg-surface-2 p-4 text-base text-text placeholder-muted outline-none transition-all duration-300 focus:border-brand focus:ring-4 focus:ring-brand/20 delay-400"></textarea>

                        <div class="reveal flex flex-col gap-4 sm:flex-row delay-500">
                            <button type="submit"
                                class="btn-glow group inline-flex items-center justify-center gap-2 rounded-xl bg-brand px-8 py-4 text-base font-bold text-white shadow-lg transition-all duration-300 hover:shadow-2xl hover:scale-105"
                                data-i18n="contact_send">
                                <span>Send</span>
                                <svg class="h-5 w-5 transition-transform duration-300 group-hover:translate-x-1"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </button>
                            <a href="#home"
                                class="inline-flex items-center justify-center gap-2 rounded-xl border-2 border-line bg-surface-2 px-8 py-4 text-base font-bold transition-all duration-300 hover:bg-brand hover:text-white hover:border-brand hover:shadow-lg hover:scale-105"
                                data-i18n="contact_back">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 10l7-7m0 0l7 7m-7-7v18" />
                                </svg>
                                <span>Back to top</span>
                            </a>
                        </div>

                        <p id="form-message" class="text-base font-medium"></p>
                    </form>
                </div>

                <div class="lg:col-span-2">
                    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-1">
                        <div class="reveal card-hover rounded-2xl border border-line bg-surface-2 p-6 delay-100">
                            <div
                                class="mb-3 inline-flex h-12 w-12 items-center justify-center rounded-full bg-brand/10">
                                <svg class="h-6 w-6 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <strong class="block text-lg font-bold mb-2" data-i18n="contact_phone">Phone</strong>
                            <a href="tel:+9647000000000" class="text-muted hover:text-brand transition-colors">+964 7x
                                xxx xxxx</a>
                        </div>

                        <div class="reveal card-hover rounded-2xl border border-line bg-surface-2 p-6 delay-200">
                            <div
                                class="mb-3 inline-flex h-12 w-12 items-center justify-center rounded-full bg-brand/10">
                                <svg class="h-6 w-6 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <strong class="block text-lg font-bold mb-2" data-i18n="contact_address">Address</strong>
                            <div class="text-muted">Erbil, Iraq</div>
                        </div>

                        <div class="reveal card-hover rounded-2xl border border-line bg-surface-2 p-6 delay-300">
                            <div
                                class="mb-3 inline-flex h-12 w-12 items-center justify-center rounded-full bg-brand/10">
                                <svg class="h-6 w-6 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <strong class="block text-lg font-bold mb-2">Email</strong>
                            <a href="mailto:info@kevcompany.com"
                                class="text-muted hover:text-brand transition-colors">info@kevcompany.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Floating Action Buttons -->
    <div class="fab-container fixed bottom-6 right-6 z-40 flex flex-col gap-3">
        <a href="https://wa.me/9647000000000" target="_blank" rel="noopener"
            class="fab-item flex items-center gap-3 rounded-xl border border-line bg-surface-2/90 p-4 font-bold text-text shadow-lg group">
            <svg class="h-6 w-6 text-green-500 transition-transform duration-300 group-hover:scale-110"
                fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.06 21.94L7.3 20.58C8.75 21.37 10.35 21.82 12.04 21.82C17.5 21.82 21.95 17.37 21.95 11.91C21.95 6.45 17.5 2 12.04 2ZM12.04 20.13C10.59 20.13 9.18 19.74 7.97 19L7.54 18.78L4.22 19.65L5.11 16.41L4.87 15.96C4.04 14.63 3.6 13.13 3.6 11.91C3.6 7.33 7.41 3.5 12.04 3.5C16.67 3.5 20.48 7.33 20.48 11.91C20.48 16.5 16.67 20.13 12.04 20.13Z" />
            </svg>
            <span class="hidden sm:block text-sm transition-colors duration-300 group-hover:text-brand">WhatsApp</span>
        </a>

        <a href="tel:+9647000000000"
            class="fab-item flex items-center gap-3 rounded-xl border border-line bg-surface-2/90 p-4 font-bold text-text shadow-lg group">
            <svg class="h-6 w-6 text-brand transition-transform duration-300 group-hover:scale-110" fill="currentColor"
                viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.819V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                    clip-rule="evenodd" />
            </svg>
            <span class="hidden sm:block text-sm transition-colors duration-300 group-hover:text-brand">Call Us</span>
        </a>
    </div>

    <!-- Footer -->
    <footer class="border-t border-line bg-surface pt-20 pb-8">
        <div class="container">
            <div class="grid grid-cols-1 gap-12 md:grid-cols-4 lg:grid-cols-12">
                <div class="md:col-span-4 lg:col-span-5">
                    <div class="flex items-center gap-3 mb-6 group">
                        <div class="relative">
                            <div
                                class="absolute inset-0 bg-brand rounded-lg blur-md opacity-0 group-hover:opacity-50 transition-opacity duration-300">
                            </div>
                            <img class="h-12 w-12 relative transition-transform duration-300 group-hover:scale-110"
                                src="./logo.png"
                                alt="KEV Logo">
                        </div>
                        <span class="text-xl font-black tracking-tight gradient-text" data-i18n="brand">KEV
                            Company</span>
                    </div>
                    <p class="max-w-sm text-base text-muted leading-relaxed" data-i18n="hero_sub">
                        Engineered durability, tight tolerances, and consistent supply for contractors, developers, and
                        infrastructure builds.
                    </p>
                </div>

                <div class="md:col-span-2 lg:col-span-2">
                    <h4 class="text-sm font-bold uppercase tracking-wider text-text mb-4" data-i18n="footer_links">Quick
                        Links</h4>
                    <div class="flex flex-col gap-3">
                        <a href="#about"
                            class="text-base text-muted transition-all duration-300 hover:text-brand hover:translate-x-1"
                            data-i18n="nav_about">About</a>
                        <a href="#services"
                            class="text-base text-muted transition-all duration-300 hover:text-brand hover:translate-x-1"
                            data-i18n="nav_services">Services</a>
                        <a href="#clients"
                            class="text-base text-muted transition-all duration-300 hover:text-brand hover:translate-x-1"
                            data-i18n="nav_clients">Clients</a>
                        <a href="#projects"
                            class="text-base text-muted transition-all duration-300 hover:text-brand hover:translate-x-1"
                            data-i18n="nav_projects">Projects</a>
                        <a href="#contact"
                            class="text-base text-muted transition-all duration-300 hover:text-brand hover:translate-x-1"
                            data-i18n="nav_contact">Contact</a>
                    </div>
                </div>

                <div class="md:col-span-2 lg:col-span-2">
                    <h4 class="text-sm font-bold uppercase tracking-wider text-text mb-4" data-i18n="footer_contact">
                        Contact Us</h4>
                    <div class="flex flex-col gap-3">
                        <a href="tel:+9647000000000"
                            class="text-base text-muted transition-all duration-300 hover:text-brand">+964 7x xxx
                            xxxx</a>
                        <a href="mailto:info@kevcompany.com"
                            class="text-base text-muted transition-all duration-300 hover:text-brand">info@kevcompany.com</a>
                        <p class="text-base text-muted">Erbil, Iraq</p>
                    </div>
                </div>

                <div class="md:col-span-4 lg:col-span-3">
                    <h4 class="text-sm font-bold uppercase tracking-wider text-text mb-4" data-i18n="footer_follow">
                        Follow Us</h4>
                    <p class="text-base text-muted mb-4">Stay updated with our latest projects and news.</p>
                    <div class="flex items-center gap-3">
                        <a href="#" aria-label="Facebook"
                            class="flex h-12 w-12 items-center justify-center rounded-full border border-line bg-surface-2 text-muted transition-all duration-300 hover:bg-brand hover:text-white hover:border-brand hover:scale-110 hover:shadow-lg">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3l-.5 3h-2.5v6.8c4.56-.93 8-4.96 8-9.8z" />
                            </svg>
                        </a>
                        <a href="#" aria-label="LinkedIn"
                            class="flex h-12 w-12 items-center justify-center rounded-full border border-line bg-surface-2 text-muted transition-all duration-300 hover:bg-brand hover:text-white hover:border-brand hover:scale-110 hover:shadow-lg">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19 3a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h14m-.5 15.5v-5.3a3.26 3.26 0 00-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 011.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 001.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 00-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z" />
                            </svg>
                        </a>
                        <a href="#" aria-label="Instagram"
                            class="flex h-12 w-12 items-center justify-center rounded-full border border-line bg-surface-2 text-muted transition-all duration-300 hover:bg-brand hover:text-white hover:border-brand hover:scale-110 hover:shadow-lg">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 01-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 017.8 2m-.2 2A3.6 3.6 0 004 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 003.6-3.6V7.6C20 5.61 18.39 4 16.4 4H7.6m9.65 1.5a1.25 1.25 0 011.25 1.25A1.25 1.25 0 0117.25 8 1.25 1.25 0 0116 6.75a1.25 1.25 0 011.25-1.25M12 7a5 5 0 015 5 5 5 0 01-5 5 5 5 0 01-5-5 5 5 0 015-5m0 2a3 3 0 00-3 3 3 3 0 003 3 3 3 0 003-3 3 3 0 00-3-3z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-12 border-t border-line pt-8 text-center">
                <p class="text-sm text-muted">
                    © <span id="year"></span>
                    <span data-i18n="brand">KEV Company</span>.
                    <span data-i18n="rights">All rights reserved.</span>
                </p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Language Dictionary
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
                    hero_title: "Industrial Cement & Precision Blocks",
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
                    hero_title: "إسمنت صناعي وبلوكات دقيقة",
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
                ku: {
                    brand: "کۆمپانیای KEV",
                    nav_home: "سەرەکی",
                    nav_about: "دەربارەمان",
                    nav_story: "چیرۆکەکەمان",
                    nav_services: "خزمەتگوزاریەکان",
                    nav_clients: "کڕیارەکانمان",
                    nav_projects: "پڕۆژەکان",
                    nav_contact: "پەیوەندی",
                    hero_title: "سیمەنتی پیشەیی و بڵۆکی ورد",
                    hero_sub: "دووامدارێتی ئەندازیاری و دابینکردنی بەهێز بۆ پێشەسازی و پڕۆژە بنچینەکان.",
                    cta_services: "بینینی خزمەتگوزاریەکان",
                    cta_quote: "داوای نرخ",
                    about_badge: "لە 2010",
                    about_title: "چارەسەری سیمەنت و بڵۆک بە ستانداردی پیشەیی",
                    about_text: "جێبەجێکردنی ستانداردەکان و تاقیکردنەوەی فشار بۆ دڵنیابوون لە دووامداری.",
                    cap_blocks: "بڵۆک/ڕۆژ",
                    cap_ontime: "پابەندبوون بە کات",
                    cap_projects: "پڕۆژە",
                    cap_strength: "هێزی فشاردان",
                    story_title: "چیرۆکەکەمان",
                    story_sub: "لە کارگەیەکی بچووکەوە بۆ هێڵی بەرهەمهێنانی مۆدەرن.",
                    story_1_title: "2010 – دەستپێک",
                    story_1_text: "دەستمان بە کار کرد بە پێکەوەکاری لەگەڵ بنیاتنەران.",
                    story_2_title: "2016 – ئۆتۆماتیککردن",
                    story_2_text: "خۆلاندنی ئۆتۆماتیکی زیادکرا بۆ بڵۆکی بەهێزتر.",
                    story_3_title: "2021 – فراوانکردن",
                    story_3_text: "توانای بەرهەمهێنانمان فراوان کرد بۆ پڕۆژە گەورەکان.",
                    services_title: "خزمەتگوزاری و بەرهەم",
                    services_sub: "لە بڵۆکی ستاندارد تا تێکەڵەکاری تایبەت.",
                    svc_1_title: "بڵۆکی بنایەتی کۆنکرێت",
                    svc_1_text: "بڵۆکی قەڵەو بە قەبارەی ورد.",
                    svc_2_title: "دابینکردنی سیمەنت",
                    svc_2_text: "ناردنی متمانەپێکراو بۆ پێشەسازان.",
                    projects_title: "پڕۆژەکان",
                    projects_sub: "پڕۆژەکانی دابینکراو بە بڵۆک و سیمەنتی KEV.",
                    contact_title: "داوای نرخ",
                    contact_sub: "باسی بڕ و قەبارە بکە، زوو وەڵام دەدەینەوە.",
                    contact_send: "ناردن",
                    contact_back: "گەڕانەوە",
                    contact_phone: "تەلەفۆن",
                    contact_address: "ناونیشان",
                    rights: "مافەکان پارێزراون.",
                    contact_thanks: "سوپاس! زوو پەیوەندیت پێوە دەکەین.",
                    ph_name: "ناو",
                    ph_email: "ئیمەیڵ",
                    ph_message: "داواکارییەکانت",
                    footer_links: "بەستەر",
                    footer_contact: "پەیوەندی",
                    footer_follow: "شوێنمان بکەوە"
                }
            };

            // Language Switcher
            const setLanguage = (lang) => {
                if (!dict[lang]) lang = 'en';
                document.documentElement.lang = lang;
                document.documentElement.dir = (lang === 'ar' || lang === 'ku') ? 'rtl' : 'ltr';
                document.body.classList.toggle('font-arabic', (lang === 'ar' || lang === 'ku'));

                document.querySelectorAll('[data-i18n]').forEach(el => {
                    const key = el.getAttribute('data-i18n');
                    if (dict[lang][key]) el.textContent = dict[lang][key];
                    else if (dict['en'][key]) el.textContent = dict['en'][key];
                });

                document.querySelectorAll('[data-ph]').forEach(el => {
                    const key = el.getAttribute('data-ph');
                    if (dict[lang][key]) el.placeholder = dict[lang][key];
                    else if (dict['en'][key]) el.placeholder = dict['en'][key];
                });
            };

            document.querySelectorAll('[data-lang-btn]').forEach(btn => {
                btn.addEventListener('click', () => {
                    setLanguage(btn.getAttribute('data-lang-btn'));
                });
            });

            setLanguage('en');

            // Mobile Menu
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

            // Theme Toggle
            const themeToggle = document.getElementById('themeToggle');
            const docElement = document.documentElement;
            const themeKey = 'kev-theme-preference';

            const setTheme = (theme) => {
                docElement.setAttribute('data-theme', theme);
                themeToggle.textContent = theme === 'dark' ? '🌓' : '☀️';
                localStorage.setItem(themeKey, theme);
            };

            const loadTheme = () => {
                const savedTheme = localStorage.getItem(themeKey) || 'dark';
                setTheme(savedTheme);
            };

            themeToggle.addEventListener('click', () => {
                const currentTheme = docElement.getAttribute('data-theme');
                setTheme(currentTheme === 'dark' ? 'light' : 'dark');
            });

            loadTheme();

            // Progress Bar
            const progressbar = document.getElementById('progressbar');
            window.addEventListener('scroll', () => {
                const scrollTop = window.scrollY;
                const docHeight = document.documentElement.scrollHeight - window.innerHeight;
                const scrollPercent = (scrollTop / docHeight) * 100;
                progressbar.style.width = scrollPercent + '%';

                const header = document.getElementById('header');
                if (scrollTop > 50) {
                    header.classList.add('shadow-lg');
                } else {
                    header.classList.remove('shadow-lg');
                }
            });

            // Counter Animation
            const counters = document.querySelectorAll('.counter');
            const speed = 200;

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

            // Reveal Elements Observer
            const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale');
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('show');
                        if (entry.target.classList.contains('counter')) {
                            animateCounter(entry.target);
                        }
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            revealElements.forEach(el => {
                revealObserver.observe(el);
            });

            // Swiper - Clients
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

            // Swiper - Company Gallery
            const companySwiper = new Swiper('.company-swiper', {
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
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

            // Contact Form
            const contactForm = document.getElementById('contactForm');
            const formMessage = document.getElementById('form-message');

            contactForm.addEventListener('submit', (e) => {
                e.preventDefault();
                const currentLang = document.documentElement.lang || 'en';
                formMessage.textContent = dict[currentLang]?.contact_thanks || dict['en'].contact_thanks;
                formMessage.classList.add('text-green-500', 'font-bold');
                contactForm.reset();
                setTimeout(() => {
                    formMessage.textContent = '';
                    formMessage.classList.remove('text-green-500', 'font-bold');
                }, 5000);
            });

            // Current Year
            document.getElementById('year').textContent = new Date().getFullYear();
        });
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Elijah Malay Dovelee — Full Stack Web Developer')</title>

    {{-- SEO --}}
    <meta name="description" content="Elijah Malay Dovelee — Software Engineer & Full Stack Developer based in Campobasso, Italy. Building secure web applications with React, .NET, Laravel, Node.js and more.">
    <meta name="author" content="Elijah Malay Dovelee">
    <meta name="robots" content="index, follow">

    {{-- Open Graph --}}
    <meta property="og:type"        content="website">
    <meta property="og:title"       content="Elijah Malay Dovelee — Software Engineer & Full Stack Developer">
    <meta property="og:description" content="Software Engineer & Full Stack Developer based in Campobasso, Italy. Building secure web applications with React, .NET, Laravel, Node.js and more.">
    <meta property="og:image"       content="{{ asset('malay_img.png') }}">
    <meta property="og:url"         content="{{ url('/') }}">
    <meta property="og:locale"      content="{{ app()->getLocale() === 'it' ? 'it_IT' : 'en_US' }}">

    {{-- Twitter Card --}}
    <meta name="twitter:card"        content="summary_large_image">
    <meta name="twitter:title"       content="Elijah Malay Dovelee — Software Engineer & Full Stack Developer">
    <meta name="twitter:description" content="Software Engineer & Full Stack Developer based in Campobasso, Italy.">
    <meta name="twitter:image"       content="{{ asset('malay_img.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700&family=Inter:wght@400;500&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @if(env('GOOGLE_ANALYTICS_ID'))
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('GOOGLE_ANALYTICS_ID') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ env('GOOGLE_ANALYTICS_ID') }}');
    </script>
    @endif

    <style>
        .font-display { font-family: 'Space Grotesk', sans-serif; }
        .font-mono    { font-family: 'JetBrains Mono', monospace; }
        body          { font-family: 'Inter', sans-serif; }

        /* Move Porkbun chat widget to top right */
        #porkbun-chat-widget, [id*="porkbun"], [class*="porkbun-chat"] {
            position: fixed !important;
            top: 100px !important;
            right: 24px !important;
            bottom: auto !important;
            left: auto !important;
        }

        /* Flip card animation */
        .cert-flip {
            perspective: 1000px;
            border-radius: 0.75rem;
            transition: box-shadow 0.4s ease;
        }
        .cert-flip::before {
            content: '';
            position: absolute;
            inset: -2px;
            border-radius: 0.85rem;
            background: linear-gradient(135deg, #38BDF8, #818CF8, #38BDF8);
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: 0;
            filter: blur(8px);
        }
        .cert-flip:hover::before { opacity: 1; }
        .cert-flip:hover {
            box-shadow:
                0 0 18px rgba(56,189,248,0.5),
                0 0 40px rgba(56,189,248,0.25),
                0 0 80px rgba(56,189,248,0.12);
        }
        .cert-flip-inner {
            position: relative;
            width: 100%; height: 100%;
            transition: transform 0.65s cubic-bezier(0.4,0,0.2,1);
            transform-style: preserve-3d;
        }
        .cert-flip:hover .cert-flip-inner { transform: rotateY(180deg); }
        .cert-flip-front, .cert-flip-back {
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;
            border-radius: 0.75rem;
            overflow: hidden;
        }
        .cert-flip-back { transform: rotateY(180deg); }

        /* ── Project flip cards ──────────────────────────────────── */
        .proj-flip {
            perspective: 1200px;
            border-radius: 1rem;
            transition: box-shadow 0.4s ease;
        }
        .proj-flip-inner {
            position: relative;
            width: 100%; height: 100%;
            transition: transform 0.7s cubic-bezier(0.4,0,0.2,1);
            transform-style: preserve-3d;
        }
        .proj-flip:hover .proj-flip-inner { transform: rotateY(180deg); }
        .proj-flip-front, .proj-flip-back {
            position: absolute;
            inset: 0;
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;
            border-radius: 1rem;
            overflow: hidden;
        }
        .proj-flip-back { transform: rotateY(180deg); }
        /* Per-project glow colours */
        .proj-glow-blue:hover   { box-shadow: 0 0 22px rgba(56,189,248,0.65),  0 0 70px rgba(56,189,248,0.25); }
        .proj-glow-purple:hover { box-shadow: 0 0 22px rgba(129,140,248,0.65), 0 0 70px rgba(129,140,248,0.25); }
        .proj-glow-green:hover  { box-shadow: 0 0 22px rgba(52,211,153,0.65),  0 0 70px rgba(52,211,153,0.25); }
        .proj-glow-orange:hover { box-shadow: 0 0 22px rgba(251,146,60,0.65),  0 0 70px rgba(251,146,60,0.25); }
        .proj-glow-pink:hover   { box-shadow: 0 0 22px rgba(244,114,182,0.65), 0 0 70px rgba(244,114,182,0.25); }
        .proj-glow-teal:hover   { box-shadow: 0 0 22px rgba(45,212,191,0.65),  0 0 70px rgba(45,212,191,0.25); }
        .proj-glow-amber:hover  { box-shadow: 0 0 22px rgba(251,191,36,0.65),  0 0 70px rgba(251,191,36,0.25); }

        /* ── About image flip ────────────────────────────────────── */
        .about-flip {
            perspective: 1000px;
            border-radius: 1.25rem;
            transition: box-shadow 0.4s ease;
        }
        .about-flip:hover {
            box-shadow: 0 0 28px rgba(56,189,248,0.55), 0 0 80px rgba(56,189,248,0.2);
        }
        .about-flip-inner {
            position: relative;
            width: 100%; height: 100%;
            transition: transform 0.7s cubic-bezier(0.4,0,0.2,1);
            transform-style: preserve-3d;
        }
        .about-flip:hover .about-flip-inner { transform: rotateY(180deg); }
        .about-flip-front, .about-flip-back {
            position: absolute;
            inset: 0;
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;
            border-radius: 1.25rem;
            overflow: hidden;
        }
        .about-flip-back { transform: rotateY(180deg); }

        /* ── Scroll progress bar ──────────────────────────────────── */
        #scroll-progress {
            position: fixed; top: 0; left: 0; right: 0; height: 3px;
            background: linear-gradient(90deg, #38BDF8, #818CF8, #EC4899, #38BDF8);
            background-size: 200%;
            z-index: 10000; width: 0%;
            animation: progressShimmer 3s linear infinite;
        }
        @keyframes progressShimmer { 0%{background-position:0%} 100%{background-position:200%} }

        /* ── Cursor glow ───────────────────────────────────────────── */
        #cursor-glow {
            position: fixed; width: 500px; height: 500px; border-radius: 50%;
            background: radial-gradient(circle, rgba(56,189,248,0.07) 0%, transparent 70%);
            pointer-events: none; z-index: 1;
            transform: translate(-50%, -50%);
            transition: left 0.08s ease, top 0.08s ease;
        }

        /* ── Gradient name ─────────────────────────────────────────── */
        @keyframes gradientShift {
            0%,100% { background-position: 0% 50%; }
            50%      { background-position: 100% 50%; }
        }
        .gradient-name {
            background: linear-gradient(90deg, #ffffff, #38BDF8, #818CF8, #EC4899, #38BDF8, #ffffff);
            background-size: 300%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradientShift 6s ease infinite;
        }
        html[data-theme="light"] .gradient-name {
            background: linear-gradient(90deg, #0F172A, #0284C7, #4F46E5, #0F172A);
            background-size: 300%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* ── Aurora hero blobs ─────────────────────────────────────── */
        @keyframes aurora1 {
            0%,100% { transform: translate(0,0) scale(1); }
            50%      { transform: translate(60px,-50px) scale(1.3); }
        }
        @keyframes aurora2 {
            0%,100% { transform: translate(0,0) scale(1); }
            50%      { transform: translate(-70px,40px) scale(1.4); }
        }
        .aurora-1 { animation: aurora1 12s ease-in-out infinite; }
        .aurora-2 { animation: aurora2 16s ease-in-out infinite; }

        /* ── Shimmer sweep on hover ─────────────────────────────────── */
        @keyframes shimmerSweep {
            from { transform: skewX(-20deg) translateX(-200%); }
            to   { transform: skewX(-20deg) translateX(400%); }
        }
        .shimmer { overflow: hidden; }
        .shimmer::after {
            content: '';
            position: absolute; top: 0; left: 0;
            width: 40%; height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.08), transparent);
            transform: skewX(-20deg) translateX(-200%);
        }
        .shimmer:hover::after { animation: shimmerSweep 0.8s ease forwards; }

        /* ── Neon glow on skill bars ────────────────────────────────── */
        @keyframes neonPulse {
            0%,100% { box-shadow: 0 0 5px rgba(56,189,248,0.5), 0 0 10px rgba(56,189,248,0.3); }
            50%      { box-shadow: 0 0 12px rgba(56,189,248,1), 0 0 30px rgba(56,189,248,0.6), 0 0 60px rgba(56,189,248,0.2); }
        }
        .skill-bar-glow { animation: neonPulse 2.5s ease-in-out infinite; }

        /* ── Avatar glowing ring ────────────────────────────────────── */
        @keyframes avatarGlow {
            0%,100% { box-shadow: 0 0 0 3px #38BDF8, 0 0 30px rgba(56,189,248,0.6), 0 0 60px rgba(56,189,248,0.2); }
            33%      { box-shadow: 0 0 0 3px #818CF8, 0 0 30px rgba(129,140,248,0.6), 0 0 60px rgba(129,140,248,0.2); }
            66%      { box-shadow: 0 0 0 3px #EC4899, 0 0 30px rgba(236,72,153,0.6), 0 0 60px rgba(236,72,153,0.2); }
        }
        .avatar-glow { animation: avatarGlow 4s ease-in-out infinite; }

        /* ── Tilt card ─────────────────────────────────────────────── */
        .tilt-card { transform-style: preserve-3d; will-change: transform; }

        /* ── Magnetic button ───────────────────────────────────────── */
        .magnetic { will-change: transform; display: inline-block; }

        /* Float animation */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50%       { transform: translateY(-18px); }
        }
        .animate-float { animation: float 5s ease-in-out infinite; }

        /* Scroll reveal */
        .reveal {
            opacity: 0;
            transform: translateY(32px);
            transition: opacity 0.65s ease, transform 0.65s ease;
        }
        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Card hover lift + glow */
        .card-hover { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 24px 48px rgba(56,189,248,0.13), 0 6px 18px rgba(0,0,0,0.28);
        }

        /* Hero blob glow pulse */
        @keyframes glowPulse {
            0%, 100% { opacity: 0.15; transform: scale(1); }
            50%       { opacity: 0.30; transform: scale(1.14); }
        }
        .glow-pulse { animation: glowPulse 4s ease-in-out infinite; }

        /* Individual card / item stagger-reveal */
        .reveal-item {
            opacity: 0;
            transform: translateY(22px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }
        .reveal-item.visible { opacity: 1; transform: translateY(0); }

        /* Timeline slide-in from left */
        .timeline-reveal {
            opacity: 0;
            transform: translateX(-18px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }
        .timeline-reveal.visible { opacity: 1; transform: translateX(0); }

        /* Skill bar fill */
        .skill-bar-fill { width: 0; transition: width 1.1s cubic-bezier(0.4, 0, 0.2, 1); }

        /* ── Light mode ─────────────────────────────────────────────── */
        html[data-theme="light"] body    { background-color: #F8FAFC !important; color: #0F172A !important; }
        html[data-theme="light"] nav     { background-color: rgba(248,250,252,0.97) !important; }
        html[data-theme="light"] footer  { background-color: #F1F5F9 !important; border-color: rgba(0,0,0,0.08) !important; color: #64748B !important; }
        html[data-theme="light"] #mobile-menu { background-color: #F8FAFC !important; }

        /* Section backgrounds */
        html[data-theme="light"] #about,
        html[data-theme="light"] #certifications,
        html[data-theme="light"] #skills,
        html[data-theme="light"] #contact  { background-color: #F1F5F9 !important; }
        html[data-theme="light"] #home,
        html[data-theme="light"] #education,
        html[data-theme="light"] #projects { background-color: #F8FAFC !important; }

        /* All headings → dark */
        html[data-theme="light"] h1,
        html[data-theme="light"] h2,
        html[data-theme="light"] h3,
        html[data-theme="light"] h4        { color: #0F172A !important; }

        /* Body text → readable dark-grey */
        html[data-theme="light"] p         { color: #334155 !important; }
        html[data-theme="light"] label     { color: #475569 !important; }
        html[data-theme="light"] nav a     { color: #475569 !important; }

        /* Near-white & muted Tailwind text classes — scoped to main so chat widget stays dark */
        html[data-theme="light"] main .text-\[\#E7E9F0\] { color: #1E293B !important; }
        html[data-theme="light"] main .text-\[\#94A3B8\] { color: #475569 !important; }

        /* Accent blue — slightly darker for light background readability */
        html[data-theme="light"] main .text-\[\#38BDF8\] { color: #0284C7 !important; }

        /* Mono text (dates, badges) */
        html[data-theme="light"] .font-mono { color: #0369A1 !important; }

        /* Keep button text dark on accent bg */
        html[data-theme="light"] .bg-\[\#38BDF8\] { color: #0F172A !important; }

        /* Borders */
        html[data-theme="light"] .border-l  { border-color: rgba(0,0,0,0.1) !important; }
        html[data-theme="light"] .border-t  { border-color: rgba(0,0,0,0.08) !important; }
        html[data-theme="light"] .border-b  { border-color: rgba(0,0,0,0.08) !important; }

        /* Project cards */
        html[data-theme="light"] #projects .rounded-2xl { background-color: #FFFFFF !important; border-color: rgba(0,0,0,0.08) !important; }

        /* Certification cards */
        html[data-theme="light"] #certifications .rounded-xl { background-color: #FFFFFF !important; border-color: rgba(0,0,0,0.08) !important; }

        /* Timeline dots: bg-white/20 is invisible on light */
        html[data-theme="light"] .bg-white\/20 { background-color: rgba(15,23,42,0.15) !important; }

        /* Tag / skill pill spans */
        html[data-theme="light"] span.border { color: #334155 !important; border-color: rgba(0,0,0,0.12) !important; }

        /* Form inputs */
        html[data-theme="light"] input,
        html[data-theme="light"] textarea  { background-color: #FFFFFF !important; color: #0F172A !important; border-color: rgba(0,0,0,0.12) !important; }
        html[data-theme="light"] input::placeholder,
        html[data-theme="light"] textarea::placeholder { color: #94A3B8 !important; }

        /* Contact sidebar links */
        html[data-theme="light"] #contact a { color: #0F172A !important; }

        /* Skill progress bar track */
        html[data-theme="light"] .skill-bar-track { background: rgba(0,0,0,0.08) !important; }

        /* ── Print / CV ──────────────────────────────────────────────── */
        @media print {
            /* Hide everything non-essential */
            nav, footer, #back-to-top, #chat-widget,
            #home .animate-float, #home .blur-3xl { display: none !important; }

            /* Force all reveal sections visible */
            .reveal {
                opacity: 1 !important;
                transform: none !important;
                display: block !important;
            }

            /* Reset backgrounds & text to white/black */
            *, *::before, *::after {
                background: #fff !important;
                color: #111 !important;
                box-shadow: none !important;
                text-shadow: none !important;
                animation: none !important;
                transition: none !important;
            }

            body { font-size: 11pt; line-height: 1.5; }

            /* Section spacing */
            section { padding: 16pt 0 !important; border-top: 1pt solid #ddd !important; }
            section:first-child { border-top: none !important; }

            /* Headings */
            h1 { font-size: 24pt !important; margin-bottom: 4pt !important; }
            h2 { font-size: 16pt !important; margin-bottom: 8pt !important; }
            h3 { font-size: 13pt !important; margin-bottom: 6pt !important; }
            h4 { font-size: 11pt !important; margin-bottom: 2pt !important; }
            p  { font-size: 10pt !important; margin-bottom: 4pt !important; }

            /* Skill bars — print as grey track */
            .skill-bar-track { background: #e5e7eb !important; height: 4px !important; }
            .skill-bar-track > div { background: #374151 !important; }

            /* Tag pills */
            span.border { border: 1pt solid #aaa !important; padding: 1pt 4pt !important; font-size: 8pt !important; }

            /* Remove hover colours from links; show URL */
            a { color: #1d4ed8 !important; text-decoration: underline !important; }

            /* Cards flat */
            .rounded-2xl, .rounded-xl { border: 1pt solid #ddd !important; padding: 8pt !important; }

            /* Avoid page breaks inside a card or timeline entry */
            .rounded-2xl, .rounded-xl, .relative.space-y-8 > div { page-break-inside: avoid; }

            /* Timeline line */
            .border-l { border-left: 1pt solid #aaa !important; }

            /* Max width for print */
            .max-w-6xl, .max-w-4xl { max-width: 100% !important; padding: 0 16pt !important; }

            /* Grid → single column for print, except stats */
            .grid { display: block !important; }
            .grid > * { margin-bottom: 8pt !important; }

            /* Stats row stays horizontal */
            .grid.grid-cols-2 { display: flex !important; flex-wrap: wrap !important; gap: 12pt !important; }
            .grid.grid-cols-2 > * { flex: 1 1 20% !important; text-align: center !important; }

            /* Hide contact form — only contact details matter when printed */
            #contact form,
            #contact .md\:col-span-3 { display: none !important; }
            #contact .md\:col-span-2 { display: block !important; width: 100% !important; }
            #contact .md\:col-span-2 > div { margin-bottom: 14pt !important; padding-bottom: 10pt !important; border-bottom: 0.5pt solid #eee !important; }
        }

        /* ── Navbar animations ──────────────────────────────────────── */
        nav { transition: box-shadow 0.4s ease, border-color 0.4s ease; }
        nav.nav-scrolled {
            box-shadow: 0 2px 40px rgba(56,189,248,0.12), 0 0 0 1px rgba(56,189,248,0.18);
            border-bottom-color: rgba(56,189,248,0.28) !important;
        }
        .nav-link { position: relative; padding-bottom: 2px; }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 100%;
            height: 2px;
            background: #38BDF8;
            border-radius: 2px;
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.25s ease;
        }
        .nav-link:hover::after,
        .nav-link.active::after { transform: scaleX(1); }
        .nav-link.active { color: #38BDF8 !important; }
        html[data-theme="light"] nav.nav-scrolled {
            box-shadow: 0 2px 40px rgba(3,105,161,0.10), 0 0 0 1px rgba(3,105,161,0.20);
            border-bottom-color: rgba(3,105,161,0.28) !important;
        }
        html[data-theme="light"] .nav-link::after { background: #0369A1; }
        html[data-theme="light"] .nav-link.active { color: #0369A1 !important; }

        /* ── Moving clouds ──────────────────────────────────────────── */
        .cloud-layer {
            position: absolute;
            inset: 0;
            pointer-events: none;
            z-index: 0;
            overflow: hidden;
        }
        .cloud-item {
            position: absolute;
            animation: cloudDrift linear infinite;
            opacity: 0;
            filter: blur(0.5px);
        }
        @keyframes cloudDrift {
            0%   { transform: translateX(-450px); opacity: 0; }
            8%   { opacity: 1; }
            92%  { opacity: 1; }
            100% { transform: translateX(calc(100vw + 450px)); opacity: 0; }
        }
    </style>
</head>
<body class="bg-[#0F172A] text-[#E7E9F0] overflow-x-hidden">

    <div id="scroll-progress"></div>
    <div id="cursor-glow"></div>

    <nav class="sticky top-0 bg-[#0F172A]/90 backdrop-blur z-50 border-b border-white/10">
        <div class="flex justify-between items-center px-6 md:px-12 py-5">
            <a href="#home" class="font-display font-bold text-xl">Elijah <span class="text-[#38BDF8]">M.</span> Dovelee</a>

            {{-- Desktop links --}}
            <div class="hidden md:flex items-center gap-6 text-lg text-[#94A3B8]">
                <a href="#home"      data-section="home"      class="nav-link hover:text-[#38BDF8] transition">{{ __('site.nav_home') }}</a>
                <a href="#about"     data-section="about"     class="nav-link hover:text-[#38BDF8] transition">{{ __('site.nav_about') }}</a>
                <a href="#education" data-section="education" class="nav-link hover:text-[#38BDF8] transition">{{ __('site.nav_education') }}</a>
                <a href="#projects"  data-section="projects"  class="nav-link hover:text-[#38BDF8] transition">{{ __('site.nav_projects') }}</a>
                <a href="#skills"    data-section="skills"    class="nav-link hover:text-[#38BDF8] transition">{{ __('site.nav_skills') }}</a>
                <a href="#contact"   data-section="contact"   class="nav-link hover:text-[#38BDF8] transition">{{ __('site.nav_contact') }}</a>

                {{-- Language switcher --}}
                <div class="flex items-center gap-1 font-mono text-xs border border-white/15 rounded-full px-3 py-1">
                    <a href="/lang/en" class="{{ app()->getLocale() === 'en' ? 'text-[#38BDF8]' : 'hover:text-[#E7E9F0] transition' }}">EN</a>
                    <span class="text-white/20">|</span>
                    <a href="/lang/it" class="{{ app()->getLocale() === 'it' ? 'text-[#38BDF8]' : 'hover:text-[#E7E9F0] transition' }}">IT</a>
                </div>

                {{-- Dark/light toggle --}}
                <button id="theme-toggle" aria-label="Toggle theme" class="text-[#94A3B8] hover:text-[#38BDF8] transition">
                    <svg id="icon-moon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"/></svg>
                    <svg id="icon-sun" class="hidden" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>
                </button>
            </div>

            {{-- Hamburger button --}}
            <button id="menu-toggle" class="md:hidden text-[#94A3B8] hover:text-[#38BDF8] transition" aria-label="Toggle menu">
                <svg id="icon-open" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/>
                </svg>
                <svg id="icon-close" class="hidden" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
                </svg>
            </button>
        </div>

        {{-- Mobile menu --}}
        <div id="mobile-menu" class="hidden md:hidden border-t border-white/10">
            <div class="flex flex-col px-6 py-4 gap-4 text-lg text-[#94A3B8]">
                <a href="#home"      class="mobile-link hover:text-[#38BDF8] transition">{{ __('site.nav_home') }}</a>
                <a href="#about"     class="mobile-link hover:text-[#38BDF8] transition">{{ __('site.nav_about') }}</a>
                <a href="#education" class="mobile-link hover:text-[#38BDF8] transition">{{ __('site.nav_education') }}</a>
                <a href="#projects"  class="mobile-link hover:text-[#38BDF8] transition">{{ __('site.nav_projects') }}</a>
                <a href="#skills"    class="mobile-link hover:text-[#38BDF8] transition">{{ __('site.nav_skills') }}</a>
                <a href="#contact"   class="mobile-link hover:text-[#38BDF8] transition">{{ __('site.nav_contact') }}</a>
                <div class="flex items-center gap-3 pt-1">
                    <div class="flex items-center gap-2 font-mono text-xs">
                        <a href="/lang/en" class="{{ app()->getLocale() === 'en' ? 'text-[#38BDF8]' : 'text-[#94A3B8]' }}">EN</a>
                        <span class="text-white/20">|</span>
                        <a href="/lang/it" class="{{ app()->getLocale() === 'it' ? 'text-[#38BDF8]' : 'text-[#94A3B8]' }}">IT</a>
                    </div>
                    <button id="theme-toggle-mobile" aria-label="Toggle theme" class="text-[#94A3B8] hover:text-[#38BDF8] transition">
                        <svg id="icon-moon-m" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"/></svg>
                        <svg id="icon-sun-m" class="hidden" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <main class="pb-24 md:pb-0">
        @yield('content')
    </main>

    <footer class="text-center text-sm text-[#94A3B8] py-8 border-t border-white/10">
        &copy; {{ date('Y') }} Elijah Malay Dovelee. {{ __('site.footer_rights') }}
    </footer>

    {{-- Back to top button --}}
    <button id="back-to-top" aria-label="Back to top"
            class="fixed bottom-6 right-4 sm:bottom-8 sm:right-8 z-50 bg-[#38BDF8] text-[#0F172A] p-3 rounded-full shadow-lg opacity-0 pointer-events-none transition-all duration-300 hover:bg-[#5fcaf9] hover:scale-110">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"/></svg>
    </button>

    <script>
        // ── Mobile menu ──────────────────────────────────────────────
        const toggle = document.getElementById('menu-toggle');
        const menu   = document.getElementById('mobile-menu');
        const iconO  = document.getElementById('icon-open');
        const iconC  = document.getElementById('icon-close');
        toggle.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            iconO.classList.toggle('hidden');
            iconC.classList.toggle('hidden');
        });
        document.querySelectorAll('.mobile-link').forEach(l => l.addEventListener('click', () => {
            menu.classList.add('hidden');
            iconO.classList.remove('hidden');
            iconC.classList.add('hidden');
        }));

        // ── Dark / Light mode ────────────────────────────────────────
        function applyTheme(theme) {
            document.documentElement.setAttribute('data-theme', theme);
            localStorage.setItem('theme', theme);
            const isLight = theme === 'light';
            document.getElementById('icon-sun').classList.toggle('hidden', !isLight);
            document.getElementById('icon-moon').classList.toggle('hidden', isLight);
            document.getElementById('icon-sun-m').classList.toggle('hidden', !isLight);
            document.getElementById('icon-moon-m').classList.toggle('hidden', isLight);
        }
        const savedTheme = localStorage.getItem('theme') || 'dark';
        applyTheme(savedTheme);

        function toggleTheme() { applyTheme(document.documentElement.getAttribute('data-theme') === 'light' ? 'dark' : 'light'); }
        document.getElementById('theme-toggle').addEventListener('click', toggleTheme);
        document.getElementById('theme-toggle-mobile').addEventListener('click', toggleTheme);

        // ── Scroll reveal ────────────────────────────────────────────
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); revealObserver.unobserve(e.target); } });
        }, { threshold: 0.12 });
        document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

        // ── Active nav highlighting — handled by activeSectionObs below ──

        // ── Back to top ──────────────────────────────────────────────
        const btt = document.getElementById('back-to-top');
        window.addEventListener('scroll', () => {
            const show = window.scrollY > 400;
            btt.style.opacity      = show ? '1' : '0';
            btt.style.pointerEvents = show ? 'auto' : 'none';
        });
        btt.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

        // ── Skill bar fill ────────────────────────────────────────────
        const skillSec = document.querySelector('#skills');
        if (skillSec) {
            new IntersectionObserver(([e], obs) => {
                if (!e.isIntersecting) return;
                skillSec.querySelectorAll('.skill-bar-fill').forEach((b, i) => {
                    setTimeout(() => { b.style.width = b.dataset.w; }, i * 60);
                });
                obs.unobserve(skillSec);
            }, { threshold: 0.2 }).observe(skillSec);
        }

        // ── Stats counter ─────────────────────────────────────────────
        const statObs = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (!e.isIntersecting) return;
                const el = e.target, target = +el.dataset.target, suffix = el.dataset.suffix || '';
                const start = performance.now(), dur = 1200;
                (function tick(now) {
                    const t = Math.min((now - start) / dur, 1);
                    el.textContent = Math.round((1 - Math.pow(1 - t, 3)) * target) + suffix;
                    if (t < 1) requestAnimationFrame(tick);
                })(performance.now());
                statObs.unobserve(el);
            });
        }, { threshold: 0.5 });
        document.querySelectorAll('.stat-num').forEach(el => statObs.observe(el));

        // ── Stagger children (cards + timeline) ───────────────────────
        const staggerObs = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (!e.isIntersecting) return;
                e.target.querySelectorAll('.reveal-item, .timeline-reveal').forEach((c, i) => {
                    setTimeout(() => c.classList.add('visible'), i * 80);
                });
                staggerObs.unobserve(e.target);
            });
        }, { threshold: 0.06 });
        document.querySelectorAll('.stagger-container').forEach(el => staggerObs.observe(el));

        // ── Scroll progress bar + navbar glow ───────────────────────
        const progressBar = document.getElementById('scroll-progress');
        const navbar = document.querySelector('nav');
        window.addEventListener('scroll', () => {
            const total = document.documentElement.scrollHeight - window.innerHeight;
            if (total > 0) progressBar.style.width = (window.scrollY / total * 100) + '%';
            navbar.classList.toggle('nav-scrolled', window.scrollY > 80);
        }, { passive: true });

        // ── Active section nav indicator ─────────────────────────────
        const navLinks = document.querySelectorAll('.nav-link');
        const sectionIds = ['home','about','education','projects','skills','certifications','contact'];
        const activeSectionObs = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (!e.isIntersecting) return;
                navLinks.forEach(link => {
                    const isActive = link.dataset.section === e.target.id;
                    link.classList.toggle('active', isActive);
                });
            });
        }, { threshold: 0.25, rootMargin: '0px 0px -55% 0px' });
        sectionIds.forEach(id => {
            const el = document.getElementById(id);
            if (el) activeSectionObs.observe(el);
        });

        // ── Cursor glow ───────────────────────────────────────────────
        const cursorGlow = document.getElementById('cursor-glow');
        document.addEventListener('mousemove', (e) => {
            cursorGlow.style.left = e.clientX + 'px';
            cursorGlow.style.top  = e.clientY + 'px';
        }, { passive: true });

        // ── Neon glow on skill bars ───────────────────────────────────
        const skillSec2 = document.querySelector('#skills');
        if (skillSec2) {
            new IntersectionObserver(([e], obs) => {
                if (!e.isIntersecting) return;
                skillSec2.querySelectorAll('.skill-bar-fill').forEach(b => b.classList.add('skill-bar-glow'));
                obs.unobserve(skillSec2);
            }, { threshold: 0.3 }).observe(skillSec2);
        }

        // ── Tilt effect on project cards ──────────────────────────────
        document.querySelectorAll('.tilt-card').forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const rotX = ((e.clientY - rect.top  - rect.height / 2) / (rect.height / 2)) * -8;
                const rotY = ((e.clientX - rect.left - rect.width  / 2) / (rect.width  / 2)) *  8;
                card.style.transform  = `perspective(1000px) rotateX(${rotX}deg) rotateY(${rotY}deg) translateZ(10px)`;
                card.style.transition = 'transform 0.1s ease';
                card.style.boxShadow  = '0 28px 56px rgba(56,189,248,0.18), 0 8px 20px rgba(0,0,0,0.35)';
            }, { passive: true });
            card.addEventListener('mouseleave', () => {
                card.style.transform  = 'perspective(1000px) rotateX(0) rotateY(0) translateZ(0)';
                card.style.transition = 'transform 0.5s ease, box-shadow 0.5s ease';
                card.style.boxShadow  = '';
            });
        });

        // ── Magnetic buttons ──────────────────────────────────────────
        document.querySelectorAll('.magnetic').forEach(btn => {
            btn.addEventListener('mousemove', (e) => {
                const rect = btn.getBoundingClientRect();
                const x = (e.clientX - rect.left - rect.width  / 2) * 0.28;
                const y = (e.clientY - rect.top  - rect.height / 2) * 0.28;
                btn.style.transform  = `translate(${x}px, ${y}px)`;
                btn.style.transition = 'transform 0.1s ease';
            }, { passive: true });
            btn.addEventListener('mouseleave', () => {
                btn.style.transform  = 'translate(0, 0)';
                btn.style.transition = 'transform 0.5s ease';
            });
        });

        // ── Particle canvas ───────────────────────────────────────────
        const canvas = document.getElementById('hero-particles');
        if (canvas) {
            const ctx = canvas.getContext('2d');
            let mouse = { x: null, y: null };
            function resizeCanvas() { canvas.width = canvas.offsetWidth; canvas.height = canvas.offsetHeight; }
            resizeCanvas();
            window.addEventListener('resize', resizeCanvas, { passive: true });
            canvas.parentElement.addEventListener('mousemove', (e) => {
                const r = canvas.getBoundingClientRect();
                mouse.x = e.clientX - r.left; mouse.y = e.clientY - r.top;
            }, { passive: true });
            canvas.parentElement.addEventListener('mouseleave', () => { mouse.x = null; mouse.y = null; });

            class Particle {
                constructor() { this.reset(true); }
                reset(init) {
                    this.x  = init ? Math.random() * canvas.width  : (Math.random() < 0.5 ? 0 : canvas.width);
                    this.y  = init ? Math.random() * canvas.height : Math.random() * canvas.height;
                    this.sz = Math.random() * 1.8 + 0.4;
                    this.vx = (Math.random() - 0.5) * 0.4;
                    this.vy = (Math.random() - 0.5) * 0.4;
                    this.op = Math.random() * 0.5 + 0.2;
                }
                update() {
                    if (mouse.x !== null) {
                        const dx = mouse.x - this.x, dy = mouse.y - this.y;
                        const d  = Math.sqrt(dx*dx + dy*dy);
                        if (d < 130) { this.vx += dx/d*0.18; this.vy += dy/d*0.18; }
                    }
                    this.vx *= 0.96; this.vy *= 0.96;
                    this.x  += this.vx; this.y  += this.vy;
                    if (this.x<0||this.x>canvas.width||this.y<0||this.y>canvas.height) this.reset(false);
                }
                draw() {
                    ctx.beginPath(); ctx.arc(this.x, this.y, this.sz, 0, Math.PI*2);
                    ctx.fillStyle = `rgba(56,189,248,${this.op})`; ctx.fill();
                }
            }
            const particles = Array.from({length: 90}, () => new Particle());
            function animate() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                for (let i = 0; i < particles.length; i++) {
                    particles[i].update(); particles[i].draw();
                    for (let j = i+1; j < particles.length; j++) {
                        const dx = particles[i].x-particles[j].x, dy = particles[i].y-particles[j].y;
                        const d  = Math.sqrt(dx*dx+dy*dy);
                        if (d < 110) {
                            ctx.beginPath();
                            ctx.moveTo(particles[i].x, particles[i].y);
                            ctx.lineTo(particles[j].x, particles[j].y);
                            ctx.strokeStyle = `rgba(56,189,248,${0.12*(1-d/110)})`;
                            ctx.lineWidth = 0.5; ctx.stroke();
                        }
                    }
                }
                requestAnimationFrame(animate);
            }
            animate();
        }

        /* ── Moving clouds (all sections except hero) ─────────────── */
        (function() {
            const ns = 'http://www.w3.org/2000/svg';

            const CLOUD_PATHS = [
                'M30,72 Q5,72 5,55 Q5,40 22,38 Q16,10 46,10 Q60,-2 80,12 Q98,-5 120,12 Q144,4 158,22 Q180,18 186,38 Q200,38 200,56 Q200,72 174,72 Z',
                'M28,68 Q6,68 6,53 Q6,37 24,35 Q18,8 48,8 Q64,-4 85,10 Q104,-6 126,10 Q150,2 162,20 Q183,15 189,36 Q200,36 200,54 Q200,68 176,68 Z',
                'M35,75 Q8,75 8,58 Q8,42 26,40 Q18,12 50,12 Q65,0 86,14 Q106,-4 130,14 Q153,5 166,26 Q186,22 192,42 Q200,42 200,60 Q200,75 170,75 Z',
            ];

            const CLOUD_FILLS = [
                'rgba(148,216,255,0.13)',
                'rgba(199,210,254,0.11)',
                'rgba(255,255,255,0.09)',
                'rgba(148,216,255,0.10)',
                'rgba(165,180,252,0.12)',
            ];

            function makeCloud() {
                const wrapper = document.createElement('div');
                wrapper.className = 'cloud-item';

                const svg = document.createElementNS(ns, 'svg');
                const w = 140 + Math.random() * 220;
                svg.setAttribute('width', w);
                svg.setAttribute('height', w * 0.4);
                svg.setAttribute('viewBox', '0 0 200 75');
                svg.style.display = 'block';

                const path = document.createElementNS(ns, 'path');
                path.setAttribute('d', CLOUD_PATHS[Math.floor(Math.random() * CLOUD_PATHS.length)]);
                path.setAttribute('fill', CLOUD_FILLS[Math.floor(Math.random() * CLOUD_FILLS.length)]);
                svg.appendChild(path);
                wrapper.appendChild(svg);
                return wrapper;
            }

            const targets = [
                ...document.querySelectorAll('section:not(#home)'),
                document.querySelector('footer'),
            ].filter(Boolean);

            targets.forEach(section => {
                if (window.getComputedStyle(section).position === 'static') {
                    section.style.position = 'relative';
                }
                const layer = document.createElement('div');
                layer.className = 'cloud-layer';

                const count = 4 + Math.floor(Math.random() * 4);
                for (let i = 0; i < count; i++) {
                    const cloud = makeCloud();
                    cloud.style.top = (5 + Math.random() * 82) + '%';
                    const dur = 55 + Math.random() * 60;
                    cloud.style.animationDuration = dur + 's';
                    cloud.style.animationDelay    = (-Math.random() * dur) + 's';
                    layer.appendChild(cloud);
                }

                section.insertBefore(layer, section.firstChild);
            });
        })();
    </script>


    {{-- ── AI Chat Widget ───────────────────────────────────────── --}}
    <div id="chat-widget" class="fixed bottom-6 left-4 sm:bottom-8 sm:left-8 z-50 flex flex-col items-start">

        {{-- Chat panel --}}
        <div id="chat-panel" class="hidden mb-4 w-[calc(100vw-2rem)] sm:w-80 rounded-2xl shadow-2xl flex flex-col overflow-hidden border border-white/10"
             style="height:440px; background:#1E293B">

            {{-- Header --}}
            <div class="flex items-center justify-between px-4 py-3 border-b border-white/10 flex-shrink-0" style="background:#0F172A">
                <div class="flex items-center gap-2">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-green-400"></span>
                    </span>
                    <span class="font-display font-bold text-sm text-[#E7E9F0]">Malay AI</span>
                </div>
                <button id="chat-close" class="text-[#94A3B8] hover:text-white transition" aria-label="Close chat">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                </button>
            </div>

            {{-- Messages --}}
            <div id="chat-messages" class="flex-1 overflow-y-auto p-4 space-y-3 text-sm">
                <div class="flex gap-2 items-start">
                    <div class="w-6 h-6 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5 text-[#38BDF8]" style="background:rgba(56,189,248,0.15)">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    </div>
                    <div class="rounded-xl rounded-tl-none px-3 py-2 max-w-[85%] text-[#E7E9F0]" style="background:#0F172A">
                        Hi! Ask me anything about Elijah's skills, projects, experience, or availability.
                    </div>
                </div>
            </div>

            {{-- Input --}}
            <div class="border-t border-white/10 p-3 flex gap-2 flex-shrink-0">
                <input id="chat-input" type="text" placeholder="Ask something…"
                       class="flex-1 rounded-xl px-3 py-2 text-sm focus:outline-none transition"
                       style="background:#0F172A; color:#E7E9F0; border:1px solid rgba(255,255,255,0.12)"
                       autocomplete="off">
                <button id="chat-send" aria-label="Send"
                        class="bg-[#38BDF8] text-[#0F172A] p-2 rounded-xl hover:bg-[#5fcaf9] transition flex-shrink-0 disabled:opacity-40">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                </button>
            </div>
        </div>

        {{-- Toggle button --}}
        <button id="chat-toggle" aria-label="Open chat"
                class="bg-[#38BDF8] text-[#0F172A] w-14 h-14 rounded-full shadow-xl hover:bg-[#5fcaf9] hover:scale-110 transition-all duration-300 flex items-center justify-center">
            <svg id="chat-icon-open" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
            <svg id="chat-icon-close" class="hidden" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
        </button>
    </div>

    <script>
        // ── AI Chat ──────────────────────────────────────────────────
        const chatToggle    = document.getElementById('chat-toggle');
        const chatClose     = document.getElementById('chat-close');
        const chatPanel     = document.getElementById('chat-panel');
        const chatInput     = document.getElementById('chat-input');
        const chatSend      = document.getElementById('chat-send');
        const chatMessages  = document.getElementById('chat-messages');
        const chatIconOpen  = document.getElementById('chat-icon-open');
        const chatIconClose = document.getElementById('chat-icon-close');

        let chatHistory = [];

        function toggleChat() {
            const opening = chatPanel.classList.contains('hidden');
            chatPanel.classList.toggle('hidden');
            chatIconOpen.classList.toggle('hidden', opening);
            chatIconClose.classList.toggle('hidden', !opening);
            if (opening) setTimeout(() => chatInput.focus(), 50);
        }

        chatToggle.addEventListener('click', toggleChat);
        chatClose.addEventListener('click', toggleChat);

        function esc(str) {
            return str.replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;');
        }

        function appendMessage(role, text) {
            const isUser = role === 'user';
            const div = document.createElement('div');
            div.className = `flex gap-2 items-start${isUser ? ' flex-row-reverse' : ''}`;
            if (isUser) {
                div.innerHTML = `<div class="rounded-xl rounded-tr-none px-3 py-2 max-w-[85%] text-[#0F172A] text-sm" style="background:#38BDF8">${esc(text)}</div>`;
            } else {
                div.innerHTML = `
                    <div class="w-6 h-6 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5 text-[#38BDF8]" style="background:rgba(56,189,248,0.15)">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    </div>
                    <div class="rounded-xl rounded-tl-none px-3 py-2 max-w-[85%] text-[#E7E9F0] text-sm" style="background:#0F172A">${esc(text)}</div>`;
            }
            chatMessages.appendChild(div);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        function showTyping() {
            const div = document.createElement('div');
            div.id = 'chat-typing';
            div.className = 'flex gap-2 items-start';
            div.innerHTML = `
                <div class="w-6 h-6 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5 text-[#38BDF8]" style="background:rgba(56,189,248,0.15)">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <div class="rounded-xl rounded-tl-none px-3 py-2 text-[#94A3B8] text-sm" style="background:#0F172A">Thinking…</div>`;
            chatMessages.appendChild(div);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        function hideTyping() {
            const t = document.getElementById('chat-typing');
            if (t) t.remove();
        }

        async function sendMessage() {
            const text = chatInput.value.trim();
            if (!text) return;

            chatInput.value = '';
            chatInput.disabled = true;
            chatSend.disabled  = true;

            appendMessage('user', text);
            chatHistory.push({ role: 'user', content: text });
            showTyping();

            try {
                const res = await fetch('/chat', {
                    method:  'POST',
                    headers: {
                        'Content-Type':  'application/json',
                        'X-CSRF-TOKEN':  document.querySelector('meta[name="csrf-token"]').content,
                    },
                    body: JSON.stringify({ messages: chatHistory }),
                });
                const data  = await res.json();
                const reply = data.reply || 'Sorry, something went wrong.';
                hideTyping();
                appendMessage('assistant', reply);
                chatHistory.push({ role: 'assistant', content: reply });
            } catch {
                hideTyping();
                appendMessage('assistant', 'Connection error. Please try again.');
            }

            chatInput.disabled = false;
            chatSend.disabled  = false;
            chatInput.focus();
        }

        chatSend.addEventListener('click', sendMessage);
        chatInput.addEventListener('keydown', e => {
            if (e.key === 'Enter' && !e.shiftKey) { e.preventDefault(); sendMessage(); }
        });
    </script>

</body>
</html>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Elijah Malay Dovelee — Full Stack Web Developer')</title>

    {{-- SEO --}}
    <meta name="description" content="Elijah Malay Dovelee — Full Stack Web Developer based in Campobasso, Italy. Building secure web applications with React, .NET, Laravel, Node.js and more.">
    <meta name="author" content="Elijah Malay Dovelee">
    <meta name="robots" content="index, follow">

    {{-- Open Graph --}}
    <meta property="og:type"        content="website">
    <meta property="og:title"       content="Elijah Malay Dovelee — Full Stack Web Developer">
    <meta property="og:description" content="Full Stack Web Developer based in Campobasso, Italy. Building secure web applications with React, .NET, Laravel, Node.js and more.">
    <meta property="og:image"       content="{{ asset('malay_img.png') }}">
    <meta property="og:url"         content="{{ url('/') }}">
    <meta property="og:locale"      content="{{ app()->getLocale() === 'it' ? 'it_IT' : 'en_US' }}">

    {{-- Twitter Card --}}
    <meta name="twitter:card"        content="summary_large_image">
    <meta name="twitter:title"       content="Elijah Malay Dovelee — Full Stack Web Developer">
    <meta name="twitter:description" content="Full Stack Web Developer based in Campobasso, Italy.">
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

        /* Hide Porkbun live chat widget */
        #porkbun-chat-widget, [id*="porkbun"], [class*="porkbun-chat"] { display: none !important; }

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
    </style>
</head>
<body class="bg-[#0F172A] text-[#E7E9F0] overflow-x-hidden">

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

        // ── Active nav highlighting ──────────────────────────────────
        const navLinks = document.querySelectorAll('.nav-link');
        const sections = document.querySelectorAll('section[id]');
        const navObserver = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    navLinks.forEach(l => l.classList.remove('text-[#38BDF8]'));
                    const active = document.querySelector(`.nav-link[data-section="${e.target.id}"]`);
                    if (active) active.classList.add('text-[#38BDF8]');
                }
            });
        }, { rootMargin: '-40% 0px -55% 0px' });
        sections.forEach(s => navObserver.observe(s));

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

@extends('layouts.app')

@section('title', 'Elijah Malay Dovelee')

@section('content')

{{-- ============ HERO / HOME ============ --}}
<section id="home" class="max-w-6xl mx-auto px-6 md:px-12 py-10 md:py-32 grid md:grid-cols-2 gap-8 md:gap-16 items-center scroll-mt-20 reveal">

    <div>
        <span class="font-mono text-base text-[#38BDF8] border border-[#38BDF8]/30 rounded-full px-4 py-1.5 inline-block mb-6">{{ __('site.hero_badge') }}</span>

        <h1 class="font-display font-bold text-3xl sm:text-4xl md:text-5xl leading-tight mb-4">
            Elijah Malay<br>Dovelee
        </h1>

        <h3 class="text-base md:text-lg text-[#94A3B8] mb-4">{{ __('site.hero_subtitle') }}</h3>

        <div class="flex items-center gap-2 mb-5">
            <span class="relative flex h-2.5 w-2.5">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-green-400"></span>
            </span>
            <span class="text-sm font-medium text-green-400">{{ __('site.open_to_work') }}</span>
        </div>

        <p class="font-mono text-[#38BDF8] text-base md:text-xl mb-6 h-8">
            <span id="typed-text"></span><span class="animate-pulse">|</span>
        </p>

        <p class="text-[#94A3B8] text-base md:text-lg leading-relaxed mb-8 max-w-md">
            {{ __('site.hero_bio') }}
        </p>

        <div class="flex flex-wrap gap-4 mb-8">
            <a href="#projects" class="bg-[#38BDF8] text-[#0F172A] font-medium px-6 py-3 rounded-lg hover:bg-[#5fcaf9] transition">{{ __('site.hero_view_projects') }}</a>
            <a href="{{ asset('cv.' . app()->getLocale() . '.pdf') }}" download target="_blank" class="border border-white/20 px-6 py-3 rounded-lg hover:border-[#38BDF8] hover:text-[#38BDF8] transition">{{ __('site.hero_download_cv') }}</a>
        </div>

        <div class="flex gap-5">
            <a href="https://github.com/elijah-malay-94" target="_blank" class="text-[#94A3B8] hover:text-[#38BDF8] transition" aria-label="GitHub">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.477 2 2 6.477 2 12c0 4.418 2.865 8.166 6.839 9.489.5.092.682-.217.682-.482 0-.237-.009-.868-.013-1.703-2.782.604-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.463-1.11-1.463-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.578 9.578 0 0112 6.836a9.59 9.59 0 012.504.337c1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.741 0 .267.18.578.688.48C19.138 20.163 22 16.418 22 12c0-5.523-4.477-10-10-10z"/></svg>
            </a>
            <a href="https://www.linkedin.com/in/elijah-malay-dovelee-465ab9260/" target="_blank" class="text-[#94A3B8] hover:text-[#38BDF8] transition" aria-label="LinkedIn">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M20.5 2h-17A1.5 1.5 0 002 3.5v17A1.5 1.5 0 003.5 22h17a1.5 1.5 0 001.5-1.5v-17A1.5 1.5 0 0020.5 2zM8 19H5v-9h3zM6.5 8.25A1.75 1.75 0 118.3 6.5a1.78 1.78 0 01-1.8 1.75zM19 19h-3v-4.74c0-1.42-.6-1.93-1.38-1.93A1.74 1.74 0 0013 14.19a.66.66 0 000 .14V19h-3v-9h2.9v1.3a3.11 3.11 0 012.7-1.4c1.55 0 3.36.86 3.36 3.66z"/></svg>
            </a>
            <a href="https://www.facebook.com/elijah.d.malay?locale=it_IT" target="_blank" class="text-[#94A3B8] hover:text-[#38BDF8] transition" aria-label="Facebook">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
            </a>
            <a href="mailto:malaydovelee94@gmail.com" class="text-[#94A3B8] hover:text-[#38BDF8] transition" aria-label="Email">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 6l-10 7L2 6"/><path d="M2 6h20v12H2z"/></svg>
            </a>
        </div>
    </div>

    <div class="relative flex justify-center order-first md:order-last">
        <div class="absolute w-48 h-48 md:w-72 md:h-72 bg-[#38BDF8]/15 rounded-full blur-3xl glow-pulse"></div>
        <img src="{{ asset('malay_img.png') }}" alt="Elijah Malay Dovelee"
             class="relative w-48 sm:w-64 md:w-96 h-auto rounded-[50%] animate-float">
    </div>

</section>

{{-- ============ STATS ============ --}}
<section class="border-t border-white/10">
    <div class="max-w-4xl mx-auto px-6 md:px-12 py-12 reveal">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div>
                <p class="font-display font-bold text-3xl md:text-4xl text-[#38BDF8] stat-num" data-target="5" data-suffix="+">5+</p>
                <p class="text-[#94A3B8] text-base mt-1">{{ app()->getLocale() === 'it' ? 'Anni di Esperienza' : 'Years Experience' }}</p>
            </div>
            <div>
                <p class="font-display font-bold text-3xl md:text-4xl text-[#38BDF8] stat-num" data-target="15" data-suffix="+">15+</p>
                <p class="text-[#94A3B8] text-base mt-1">{{ app()->getLocale() === 'it' ? 'Progetti GitHub' : 'GitHub Projects' }}</p>
            </div>
            <div>
                <p class="font-display font-bold text-3xl md:text-4xl text-[#38BDF8] stat-num" data-target="6" data-suffix="+">6+</p>
                <p class="text-[#94A3B8] text-base mt-1">{{ app()->getLocale() === 'it' ? 'Framework' : 'Frameworks' }}</p>
            </div>
            <div>
                <p class="font-display font-bold text-3xl md:text-4xl text-[#38BDF8] stat-num" data-target="5" data-suffix="">5</p>
                <p class="text-[#94A3B8] text-base mt-1">{{ app()->getLocale() === 'it' ? 'Linguaggi' : 'Languages' }}</p>
            </div>
        </div>
    </div>
</section>

{{-- ============ ABOUT ============ --}}
<section id="about" class="bg-[#1E293B] border-t border-white/10 scroll-mt-20">
    <div class="max-w-6xl mx-auto px-6 md:px-12 py-20 md:py-28 reveal">

        <div class="grid md:grid-cols-3 gap-10 md:gap-16 items-start mb-14">

            <div class="md:col-span-1 flex justify-center md:justify-start order-last md:order-first">
                <img src="{{ asset('elia-img.PNG') }}" alt="Elijah Malay Dovelee"
                     class="w-full max-w-[280px] md:max-w-xs h-auto rounded-[20px]" loading="lazy">
            </div>

            <div class="md:col-span-2 order-first md:order-last">
                <span class="font-mono text-base text-[#38BDF8] border border-[#38BDF8]/30 rounded-full px-4 py-1.5 inline-block mb-6">{{ __('site.about_badge') }}</span>

                <h2 class="font-display font-bold text-2xl md:text-4xl mb-6">{{ __('site.about_title') }}</h2>

                <p class="text-[#E7E9F0] leading-relaxed text-sm md:text-base mb-4">{{ __('site.about_p1') }}</p>
                <p class="text-[#94A3B8] leading-relaxed text-sm md:text-base mb-4">{{ __('site.about_p2') }}</p>
                <p class="text-[#94A3B8] leading-relaxed text-sm md:text-base">{{ __('site.about_p3') }}</p>
            </div>

        </div>

        <h3 class="font-display font-bold text-xl md:text-2xl mb-6">{{ __('site.experience') }}</h3>

        <div class="space-y-8 border-l border-white/10 pl-8 stagger-container">

            <div class="relative timeline-reveal">
                <span class="absolute -left-[35px] top-1.5 w-3 h-3 rounded-full bg-[#38BDF8]"></span>
                <p class="font-mono text-base text-[#38BDF8] mb-1">Sep 2025 – Aug 2026</p>
                <h4 class="font-semibold text-base flex items-center gap-2">
                    <svg class="text-[#38BDF8] flex-shrink-0" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="4 17 10 11 4 5"/><line x1="12" y1="19" x2="20" y2="19"/></svg>
                    Programmer Technician
                </h4>
                <p class="text-[#94A3B8] text-base mb-2">M.A.E. SRL, Frosolone, Italy</p>
                <p class="text-[#94A3B8]">{{ __('site.job1_desc') }}</p>
            </div>

            <div class="relative timeline-reveal">
                <span class="absolute -left-[35px] top-1.5 w-3 h-3 rounded-full bg-white/20"></span>
                <p class="font-mono text-base text-[#94A3B8] mb-1">Jan 2024 – Jan 2025</p>
                <h4 class="font-semibold text-base flex items-center gap-2">
                    <svg class="text-[#38BDF8] flex-shrink-0" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/><line x1="2" y1="20" x2="22" y2="20"/></svg>
                    Software Analyst
                </h4>
                <p class="text-[#94A3B8] text-base mb-2">Accenture Technology Solutions S.R.L., Rome, Italy</p>
                <p class="text-[#94A3B8]">{{ __('site.job2_desc') }}</p>
            </div>

            <div class="relative timeline-reveal">
                <span class="absolute -left-[35px] top-1.5 w-3 h-3 rounded-full bg-white/20"></span>
                <p class="font-mono text-base text-[#94A3B8] mb-1">Dec 2022 – Jan 2024</p>
                <h4 class="font-semibold text-base flex items-center gap-2">
                    <svg class="text-[#38BDF8] flex-shrink-0" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"/></svg>
                    Geotechnical & Soil Investigations Technician
                </h4>
                <p class="text-[#94A3B8] text-base mb-2">GEOTEC S.R.L, Campobasso, Italy</p>
                <p class="text-[#94A3B8]">{{ __('site.job3_desc') }}</p>
            </div>

            <div class="relative timeline-reveal">
                <span class="absolute -left-[35px] top-1.5 w-3 h-3 rounded-full bg-white/20"></span>
                <p class="font-mono text-base text-[#94A3B8] mb-1">2020 – 2022</p>
                <h4 class="font-semibold text-base flex items-center gap-2">
                    <svg class="text-[#38BDF8] flex-shrink-0" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg>
                    Management Assistant
                </h4>
                <p class="text-[#94A3B8] text-base mb-2">AT Mattia Fiore General Service S.R.L, Teramo, Italy</p>
                <p class="text-[#94A3B8]">{{ __('site.job4_desc') }}</p>
            </div>

            <div class="relative timeline-reveal">
                <span class="absolute -left-[35px] top-1.5 w-3 h-3 rounded-full bg-white/20"></span>
                <p class="font-mono text-base text-[#94A3B8] mb-1">2013 – 2017</p>
                <h4 class="font-semibold text-base flex items-center gap-2">
                    <svg class="text-[#38BDF8] flex-shrink-0" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                    Sales Supervisor
                </h4>
                <p class="text-[#94A3B8] text-base mb-2">Lonestar Cell MTN GSM Communication Company, Monrovia, Liberia</p>
                <p class="text-[#94A3B8]">{{ __('site.job5_desc') }}</p>
            </div>

        </div>
    </div>
</section>

{{-- ============ EDUCATION ============ --}}
<section id="education" class="border-t border-white/10 scroll-mt-20">
    <div class="max-w-4xl mx-auto px-6 md:px-12 py-20 md:py-28 reveal">

        <span class="font-mono text-base text-[#38BDF8] border border-[#38BDF8]/30 rounded-full px-4 py-1.5 inline-block mb-6">{{ __('site.education_badge') }}</span>

        <h2 class="font-display font-bold text-3xl md:text-5xl mb-14">{{ __('site.education_title') }}</h2>

        <div class="space-y-8 border-l border-white/10 pl-8 stagger-container">

            <div class="relative timeline-reveal">
                <span class="absolute -left-[35px] top-1.5 w-3 h-3 rounded-full bg-[#38BDF8]"></span>
                <p class="font-mono text-base text-[#38BDF8] mb-1">Apr 2026 – Apr 2028 · {{ __('site.in_progress') }}</p>
                <h4 class="font-semibold text-base flex items-center gap-2">
                    <svg class="text-[#38BDF8] flex-shrink-0" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/></svg>
                    MSc Artificial Intelligence
                </h4>
                <p class="text-[#94A3B8]">{{ __('site.edu1_desc') }}</p>
            </div>

            <div class="relative timeline-reveal">
                <span class="absolute -left-[35px] top-1.5 w-3 h-3 rounded-full bg-[#38BDF8]"></span>
                <p class="font-mono text-base text-[#38BDF8] mb-1">Apr 2026 – Dec 2026 · {{ __('site.in_progress') }}</p>
                <h4 class="font-semibold text-base flex items-center gap-2">
                    <svg class="text-[#38BDF8] flex-shrink-0" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                    Post Graduate Program in AI & Machine Learning: Business Applications
                </h4>
                <p class="text-[#94A3B8]">{{ __('site.edu2_desc') }}</p>
            </div>

            <div class="relative timeline-reveal">
                <span class="absolute -left-[35px] top-1.5 w-3 h-3 rounded-full bg-white/20"></span>
                <p class="font-mono text-base text-[#94A3B8] mb-1">2024 – Sep 2026 · {{ __('site.final_exam') }}</p>
                <h4 class="font-semibold text-base flex items-center gap-2">
                    <svg class="text-[#38BDF8] flex-shrink-0" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                    Computer Science and Full Stack Developer
                </h4>
                <p class="text-[#94A3B8]">{{ __('site.edu3_desc') }}</p>
            </div>

            <div class="relative timeline-reveal">
                <span class="absolute -left-[35px] top-1.5 w-3 h-3 rounded-full bg-white/20"></span>
                <p class="font-mono text-base text-[#94A3B8] mb-1">2022 – 2023</p>
                <h4 class="font-semibold text-base flex items-center gap-2">
                    <svg class="text-[#38BDF8] flex-shrink-0" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    Master's in Cyber Security: Operations
                </h4>
                <p class="text-[#94A3B8]">{{ __('site.edu4_desc') }}</p>
            </div>

            <div class="relative timeline-reveal">
                <span class="absolute -left-[35px] top-1.5 w-3 h-3 rounded-full bg-white/20"></span>
                <p class="font-mono text-base text-[#94A3B8] mb-1">2010 – 2015</p>
                <h4 class="font-semibold text-base flex items-center gap-2">
                    <svg class="text-[#38BDF8] flex-shrink-0" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/></svg>
                    BS in Mining Engineering
                </h4>
                <p class="text-[#94A3B8]">{{ __('site.edu5_desc') }}</p>
            </div>

        </div>
    </div>
</section>

{{-- ============ CERTIFICATIONS ============ --}}
<section id="certifications" class="bg-[#1E293B] border-t border-white/10 scroll-mt-20">
    <div class="max-w-4xl mx-auto px-6 md:px-12 py-20 md:py-28 reveal">

        <span class="font-mono text-base text-[#38BDF8] border border-[#38BDF8]/30 rounded-full px-4 py-1.5 inline-block mb-6">{{ __('site.cert_badge') }}</span>

        <h2 class="font-display font-bold text-3xl md:text-5xl mb-14">{{ __('site.cert_title') }}</h2>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 stagger-container">
            @php
            $certs = [
                [
                    'title'  => 'Introduction to Web Development with HTML, CSS, JavaScript',
                    'issuer' => 'IBM — Coursera',
                    'year'   => 'Aug 2023',
                    'verify' => 'https://www.coursera.org/account/accomplishments/verify/G5J9GRPRFJM6',
                    'icon'   => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>',
                ],
                [
                    'title'  => 'Getting Started with Git and GitHub',
                    'issuer' => 'IBM — Coursera',
                    'year'   => 'Aug 2023',
                    'verify' => 'https://www.coursera.org/account/accomplishments/verify/NDMNQAZW5WQ2',
                    'icon'   => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="6" y1="3" x2="6" y2="15"/><circle cx="18" cy="6" r="3"/><circle cx="6" cy="18" r="3"/><path d="M18 9a9 9 0 01-9 9"/></svg>',
                ],
                [
                    'title'  => 'Developing Front-End Apps with React',
                    'issuer' => 'IBM — Coursera',
                    'year'   => 'Sep 2023',
                    'verify' => 'https://www.coursera.org/account/accomplishments/verify/QRH2M8SGHY4B',
                    'icon'   => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>',
                ],
                [
                    'title'  => 'Designing User Interfaces and Experiences (UI/UX)',
                    'issuer' => 'IBM — Coursera',
                    'year'   => 'Sep 2023',
                    'verify' => 'https://www.coursera.org/account/accomplishments/verify/9Z5Y6C9VKEQP',
                    'icon'   => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>',
                ],
                [
                    'title'  => 'Intermediate Web and Front-End Development',
                    'issuer' => 'IBM — Coursera',
                    'year'   => 'Sep 2023',
                    'verify' => 'https://www.coursera.org/account/accomplishments/verify/BGPS55G5MQLQ',
                    'icon'   => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>',
                ],
                [
                    'title'  => 'Developing Cloud Native Applications',
                    'issuer' => 'IBM — Coursera',
                    'year'   => '2023',
                    'verify' => 'https://www.coursera.org/account/accomplishments/verify/V46NMVM7H3VG',
                    'icon'   => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"/></svg>',
                ],
                [
                    'title'  => 'Responsive Web Design Certification',
                    'issuer' => 'freeCodeCamp',
                    'year'   => '2023',
                    'verify' => 'https://www.freecodecamp.org/certification/elijah-malay/responsive-web-design',
                    'icon'   => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>',
                ],
                [
                    'title'  => 'JavaScript Algorithms & Data Structures',
                    'issuer' => 'freeCodeCamp',
                    'year'   => '2023',
                    'verify' => 'https://www.freecodecamp.org/certification/elijah-malay/javascript-algorithms-and-data-structures',
                    'icon'   => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="4 17 10 11 4 5"/><line x1="12" y1="19" x2="20" y2="19"/></svg>',
                ],
            ];
            @endphp

            @foreach ($certs as $cert)
            @php
                $logo = str_contains($cert['issuer'], 'freeCodeCamp') ? 'freecodecamp.png' : 'ibm.png';
            @endphp
            <div class="reveal-item cert-flip" style="height:200px">
                <div class="cert-flip-inner">
                    {{-- Front --}}
                    <div class="cert-flip-front bg-[#0F172A] border border-white/10 p-5 flex flex-col hover:border-[#38BDF8]/40">
                        <div class="text-[#38BDF8] mb-3">{!! $cert['icon'] !!}</div>
                        <h4 class="font-semibold text-sm leading-snug mb-2 flex-1">{{ $cert['title'] }}</h4>
                        <p class="font-mono text-xs text-[#38BDF8] mb-2">{{ $cert['issuer'] }}</p>
                        <div class="flex items-center gap-3">
                            <span class="text-[#94A3B8] text-xs">{{ $cert['year'] }}</span>
                            <a href="{{ $cert['verify'] }}" target="_blank" class="text-xs text-[#38BDF8]/60 hover:text-[#38BDF8] transition font-mono">Verify ↗</a>
                        </div>
                    </div>
                    {{-- Back --}}
                    <div class="cert-flip-back bg-[#0F172A] border border-[#38BDF8]/30 p-5 flex flex-col items-center justify-center gap-3">
                        <img src="{{ asset($logo) }}" alt="{{ $cert['issuer'] }}" class="w-20 h-20 object-contain">
                        <h4 class="font-semibold text-xs leading-snug text-center text-[#E7E9F0]">{{ $cert['title'] }}</h4>
                        <p class="font-mono text-xs text-[#38BDF8]">{{ $cert['year'] }}</p>
                        <a href="{{ $cert['verify'] }}" target="_blank" class="text-xs text-[#38BDF8] border border-[#38BDF8]/30 rounded-lg px-3 py-1 font-mono hover:bg-[#38BDF8]/10 transition">Verify ↗</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============ SKILLS ============ --}}
<section id="skills" class="bg-[#1E293B] border-t border-white/10 scroll-mt-20">
    <div class="max-w-4xl mx-auto px-6 md:px-12 py-20 md:py-28 reveal">

        <span class="font-mono text-base text-[#38BDF8] border border-[#38BDF8]/30 rounded-full px-4 py-1.5 inline-block mb-6">{{ __('site.skills_badge') }}</span>

        <h2 class="font-display font-bold text-3xl md:text-5xl mb-14">{{ __('site.skills_title') }}</h2>

        <div class="grid sm:grid-cols-2 gap-10">

            <div>
                <h4 class="font-mono text-base text-[#38BDF8] mb-4 uppercase tracking-wide flex items-center gap-2">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                    {{ __('site.skills_languages') }}
                </h4>
                <div class="space-y-4">
                    @foreach ([['HTML',95],['CSS',90],['JavaScript',85],['PHP',85],['Python',70],['Java',65],['C#',65]] as [$skill,$pct])
                    <div>
                        <div class="flex justify-between mb-1.5">
                            <span class="text-sm text-[#E7E9F0]">{{ $skill }}</span>
                            <span class="font-mono text-xs text-[#38BDF8]">{{ $pct }}%</span>
                        </div>
                        <div class="skill-bar-track h-1.5 rounded-full overflow-hidden" style="background:rgba(255,255,255,0.08)">
                            <div class="h-full rounded-full bg-gradient-to-r from-[#38BDF8] to-[#0EA5E9] skill-bar-fill" data-w="{{ $pct }}%"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div>
                <h4 class="font-mono text-base text-[#38BDF8] mb-4 uppercase tracking-wide flex items-center gap-2">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>
                    {{ __('site.skills_frameworks') }}
                </h4>
                <div class="space-y-4">
                    @foreach ([['React',80],['Node.js / Express',80],['Angular',75],['Vue.js',70],['.NET',70],['Django / Flask',65]] as [$skill,$pct])
                    <div>
                        <div class="flex justify-between mb-1.5">
                            <span class="text-sm text-[#E7E9F0]">{{ $skill }}</span>
                            <span class="font-mono text-xs text-[#38BDF8]">{{ $pct }}%</span>
                        </div>
                        <div class="skill-bar-track h-1.5 rounded-full overflow-hidden" style="background:rgba(255,255,255,0.08)">
                            <div class="h-full rounded-full bg-gradient-to-r from-[#38BDF8] to-[#0EA5E9] skill-bar-fill" data-w="{{ $pct }}%"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div>
                <h4 class="font-mono text-base text-[#38BDF8] mb-3 uppercase tracking-wide flex items-center gap-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/></svg>
                    {{ __('site.skills_databases') }}
                </h4>
                <div class="flex flex-wrap gap-2">
                    @foreach (['MySQL','PostgreSQL','MongoDB','SQL','Git / GitHub','Docker','Postman','Linux / Bash'] as $skill)
                        <span class="border border-white/15 rounded-full px-3 py-1 text-sm text-[#E7E9F0]">{{ $skill }}</span>
                    @endforeach
                </div>
            </div>

            <div>
                <h4 class="font-mono text-base text-[#38BDF8] mb-3 uppercase tracking-wide flex items-center gap-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    {{ __('site.skills_other') }}
                </h4>
                <div class="flex flex-wrap gap-2">
                    @foreach (['Secure coding practices','Auth & risk mitigation','IT systems design & docs'] as $skill)
                        <span class="border border-white/15 rounded-full px-3 py-1 text-sm text-[#E7E9F0]">{{ $skill }}</span>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============ PROJECTS ============ --}}
<section id="projects" class="border-t border-white/10 scroll-mt-20">
    <div class="max-w-6xl mx-auto px-6 md:px-12 py-20 md:py-28 reveal">

        <span class="font-mono text-base text-[#38BDF8] border border-[#38BDF8]/30 rounded-full px-4 py-1.5 inline-block mb-6">{{ __('site.projects_badge') }}</span>

        <h2 class="font-display font-bold text-3xl md:text-5xl mb-14">{{ __('site.projects_title') }}</h2>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 stagger-container">

            @php
            $ghIcon = '<svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.477 2 2 6.477 2 12c0 4.418 2.865 8.166 6.839 9.489.5.092.682-.217.682-.482 0-.237-.009-.868-.013-1.703-2.782.604-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.463-1.11-1.463-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.578 9.578 0 0112 6.836a9.59 9.59 0 012.504.337c1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.741 0 .267.18.578.688.48C19.138 20.163 22 16.418 22 12c0-5.523-4.477-10-10-10z"/></svg>';
            $projects = [
                ['img' => 'mqtt-maeservace.png',  'title' => 'MAEservice App',             'url' => 'https://github.com/elijah-malay-94/MAEservice-App',              'demo' => 'https://maeservice-app.netlify.app/',                              'desc' => __('site.proj1_desc'), 'tags' => ['React','.NET','SQL Server','Docker','MQTT','JWT']],
                ['img' => 'live-dashboard.png',   'title' => 'MAE Live Dashboard',         'url' => 'https://github.com/elijah-malay-94/MAE-Live-Dashboard-v3-main',  'demo' => 'https://www.maeservice.it/alfa/index.html?page=works',            'desc' => __('site.proj2_desc'), 'tags' => ['JavaScript','Node.js','Real-time']],
                ['img' => 'eevt002_img.png',      'title' => 'EEVT002 Instrument Control', 'url' => 'https://github.com/elijah-malay-94/EEVT002-INSTRUMENT-CONTROL',  'demo' => null,                                                              'desc' => __('site.proj3_desc'), 'tags' => ['JavaScript','Node.js','Hardware','Firmware']],
                ['img' => 'betting.png',          'title' => 'Betting Management System',  'url' => 'https://github.com/elijah-malay-94/betting-managment-system-app','demo' => 'https://betting-managment-system.netlify.app/',                   'desc' => __('site.proj4_desc'), 'tags' => ['Angular','TypeScript','Unit Testing']],
                ['img' => 'hotel.png',            'title' => 'Hotel Management App',       'url' => 'https://github.com/elijah-malay-94/edmalay-hotel-project',       'demo' => 'https://edmalay-hotel-management-app.netlify.app/',               'desc' => __('site.proj5_desc'), 'tags' => ['React','Vite','JavaScript']],
                ['img' => 'clinic-management.png','title' => 'Clinic Management App',      'url' => 'https://github.com/elijah-malay-94/edmalay-clinic-app',          'demo' => 'https://malay-medical-website.netlify.app/',                      'desc' => __('site.proj6_desc'), 'tags' => ['React','Vite','JavaScript']],
                ['img' => 'family-nest.png',     'title' => 'FamilyNest',                 'url' => null,                                                             'demo' => null,                                                              'desc' => __('site.proj7_desc'), 'tags' => ['React Native','Mobile','AI','Real-time','Firebase'], 'badge' => 'Coming soon on App Store &amp; Google Play'],
            ];
            @endphp

            @foreach ($projects as $project)
            <div class="bg-[#1E293B] border border-white/10 rounded-2xl overflow-hidden flex flex-col hover:border-[#38BDF8]/40 card-hover reveal-item">
                <div class="h-44 overflow-hidden">
                    @if ($project['img'])
                        <img src="{{ asset($project['img']) }}" alt="{{ $project['title'] }}" class="w-full h-full object-cover" loading="lazy">
                    @else
                        <div class="w-full h-full flex items-center justify-center" style="background:linear-gradient(135deg,#0f2744 0%,#0e3a5c 40%,#0a2a45 100%)">
                            <svg width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="#38BDF8" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" opacity="0.6"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                        </div>
                    @endif
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="flex items-start justify-between mb-3">
                        <h3 class="font-display font-bold text-xl">{{ $project['title'] }}</h3>
                        @if ($project['url'])
                            <a href="{{ $project['url'] }}" target="_blank" class="text-[#94A3B8] hover:text-[#38BDF8] transition flex-shrink-0 ml-3" aria-label="GitHub">{!! $ghIcon !!}</a>
                        @else
                            <span class="font-mono text-xs border border-[#38BDF8]/30 text-[#38BDF8] rounded-full px-2 py-0.5 flex-shrink-0 ml-3">Owner</span>
                        @endif
                    </div>
                    <p class="text-[#94A3B8] text-base leading-relaxed flex-1 mb-5">{{ $project['desc'] }}</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach ($project['tags'] as $tag)
                            <span class="font-mono text-sm border border-white/30 rounded-full px-3 py-1 text-[#94A3B8]">{{ $tag }}</span>
                        @endforeach
                    </div>
                    @if (!empty($project['demo']))
                        <a href="{{ $project['demo'] }}" target="_blank"
                           class="inline-flex items-center gap-1.5 text-sm font-medium text-[#38BDF8] hover:text-white border border-[#38BDF8]/30 hover:border-[#38BDF8] rounded-lg px-3 py-1.5 transition w-fit">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                            Live Demo
                        </a>
                    @endif
                    @if (!empty($project['badge']))
                        <p class="inline-flex items-center gap-1.5 text-xs font-mono text-amber-400 border border-amber-400/30 rounded-lg px-3 py-1.5 w-fit">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                            {!! $project['badge'] !!}
                        </p>
                    @endif
                </div>
            </div>
            @endforeach

        </div>

        <div class="mt-10 text-center">
            <a href="https://github.com/elijah-malay-94" target="_blank" class="inline-flex items-center gap-2 border border-white/20 px-6 py-3 rounded-lg hover:border-[#38BDF8] hover:text-[#38BDF8] transition text-base">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.477 2 2 6.477 2 12c0 4.418 2.865 8.166 6.839 9.489.5.092.682-.217.682-.482 0-.237-.009-.868-.013-1.703-2.782.604-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.463-1.11-1.463-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.578 9.578 0 0112 6.836a9.59 9.59 0 012.504.337c1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.741 0 .267.18.578.688.48C19.138 20.163 22 16.418 22 12c0-5.523-4.477-10-10-10z"/></svg>
                {{ __('site.projects_view_all') }}
            </a>
        </div>

    </div>
</section>

{{-- ============ CONTACT ============ --}}
<section id="contact" class="bg-[#1E293B] border-t border-white/10 scroll-mt-20">
    <div class="max-w-4xl mx-auto px-6 md:px-12 py-20 md:py-28 reveal">

        <div class="text-center mb-12">
            <span class="font-mono text-base text-[#38BDF8] border border-[#38BDF8]/30 rounded-full px-4 py-1.5 inline-block mb-6">{{ __('site.contact_badge') }}</span>
            <h2 class="font-display font-bold text-3xl md:text-5xl mb-4">{{ __('site.contact_title') }}</h2>
            <p class="text-[#94A3B8] text-base md:text-xl">{{ __('site.contact_tagline') }}</p>
        </div>

        <div class="grid md:grid-cols-5 gap-12">

            {{-- Form --}}
            <div class="md:col-span-3">

                <form action="/contact" method="POST" class="space-y-5">
                    @csrf

                    <div class="grid sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-base text-[#94A3B8] mb-2" for="name">{{ __('site.contact_name') }}</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                   class="w-full bg-[#0F172A] border border-white/15 rounded-xl px-4 py-3 text-[#E7E9F0] placeholder-[#94A3B8]/40 focus:outline-none focus:border-[#38BDF8]/50 transition"
                                   placeholder="{{ __('site.contact_name_ph') }}">
                            @error('name') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label class="block text-base text-[#94A3B8] mb-2" for="email">{{ __('site.contact_email') }}</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}"
                                   class="w-full bg-[#0F172A] border border-white/15 rounded-xl px-4 py-3 text-[#E7E9F0] placeholder-[#94A3B8]/40 focus:outline-none focus:border-[#38BDF8]/50 transition"
                                   placeholder="{{ __('site.contact_email_ph') }}">
                            @error('email') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div>
                        <label class="block text-base text-[#94A3B8] mb-2" for="message">{{ __('site.contact_message') }}</label>
                        <textarea id="message" name="message" rows="6"
                                  class="w-full bg-[#0F172A] border border-white/15 rounded-xl px-4 py-3 text-[#E7E9F0] placeholder-[#94A3B8]/40 focus:outline-none focus:border-[#38BDF8]/50 transition resize-none"
                                  placeholder="{{ __('site.contact_message_ph') }}">{{ old('message') }}</textarea>
                        @error('message') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <button type="submit"
                            class="bg-[#38BDF8] text-[#0F172A] font-medium px-8 py-3 rounded-lg hover:bg-[#5fcaf9] transition w-full sm:w-auto">
                        {{ __('site.contact_send') }}
                    </button>

                    @if (session('success'))
                        <div id="form-feedback" class="flex items-center gap-3 bg-green-500/10 border border-green-500/30 text-green-400 px-5 py-4 rounded-xl text-sm">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('mail_error'))
                        <div id="form-feedback" class="flex items-center gap-3 bg-red-500/10 border border-red-500/30 text-red-400 px-5 py-4 rounded-xl text-sm">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
                            {{ session('mail_error') }}
                        </div>
                    @endif

                </form>
            </div>

            {{-- Contact info --}}
            <div class="md:col-span-2 flex flex-col gap-6 md:pt-2">

                <div>
                    <p class="font-mono text-sm text-[#38BDF8] uppercase tracking-wide mb-3">Email</p>
                    <a href="mailto:malaydovelee94@gmail.com" class="text-[#E7E9F0] hover:text-[#38BDF8] transition break-all">malaydovelee94@gmail.com</a>
                </div>

                <div>
                    <p class="font-mono text-sm text-[#38BDF8] uppercase tracking-wide mb-3">Phone</p>
                    <a href="tel:+393510255575" class="text-[#E7E9F0] hover:text-[#38BDF8] transition">+39 351 025 5575</a>
                </div>

                <div>
                    <p class="font-mono text-sm text-[#38BDF8] uppercase tracking-wide mb-3">LinkedIn</p>
                    <a href="https://www.linkedin.com/in/elijah-malay-dovelee-465ab9260/" target="_blank" class="text-[#E7E9F0] hover:text-[#38BDF8] transition">elijah-malay-dovelee</a>
                </div>

                <div>
                    <p class="font-mono text-sm text-[#38BDF8] uppercase tracking-wide mb-3">Website</p>
                    <a href="https://eliamalay.com" target="_blank" class="text-[#E7E9F0] hover:text-[#38BDF8] transition">eliamalay.com</a>
                </div>

                <div>
                    <p class="font-mono text-sm text-[#38BDF8] uppercase tracking-wide mb-3">{{ __('site.contact_loc_label') }}</p>
                    <p class="text-[#94A3B8]">{{ __('site.contact_loc_value') }}</p>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    // Scroll to feedback message after form submit
    const feedback = document.getElementById('form-feedback');
    if (feedback) feedback.scrollIntoView({ behavior: 'smooth', block: 'center' });

    const phrases = @json(__('site.hero_typing'));
    let phraseIndex = 0, charIndex = 0, deleting = false;
    const el = document.getElementById('typed-text');

    function type() {
        const current = phrases[phraseIndex];
        el.textContent = deleting ? current.substring(0, charIndex--) : current.substring(0, charIndex++);

        let speed = deleting ? 40 : 80;

        if (!deleting && charIndex === current.length + 1) {
            speed = 1500;
            deleting = true;
        } else if (deleting && charIndex === 0) {
            deleting = false;
            phraseIndex = (phraseIndex + 1) % phrases.length;
            speed = 400;
        }
        setTimeout(type, speed);
    }
    type();
</script>
@endsection

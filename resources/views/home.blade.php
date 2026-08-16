@extends('layouts.app')

@section('title', 'Elijah Malay Dovelee')

@section('content')

{{-- ============ HERO / HOME ============ --}}
<section id="home" class="relative overflow-hidden max-w-6xl mx-auto px-6 md:px-12 py-10 md:py-32 grid md:grid-cols-2 gap-8 md:gap-16 items-center scroll-mt-20 reveal">

    {{-- Particle canvas --}}
    <canvas id="hero-particles" class="absolute inset-0 w-full h-full" style="pointer-events:none;z-index:0;opacity:0.7"></canvas>

    {{-- Aurora blobs --}}
    <div class="absolute top-0 left-1/3 w-[500px] h-[500px] rounded-full aurora-1" style="background:radial-gradient(circle,rgba(56,189,248,0.12) 0%,transparent 70%);pointer-events:none;z-index:0"></div>
    <div class="absolute bottom-0 right-1/4 w-[400px] h-[400px] rounded-full aurora-2" style="background:radial-gradient(circle,rgba(129,140,248,0.1) 0%,transparent 70%);pointer-events:none;z-index:0"></div>

    <div class="relative" style="z-index:1">
        <span class="font-mono text-base text-[#38BDF8] border border-[#38BDF8]/30 rounded-full px-4 py-1.5 inline-block mb-6">{{ __('site.hero_badge') }}</span>

        <h1 class="font-display font-bold text-3xl sm:text-4xl md:text-5xl leading-tight mb-4 gradient-name">
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
            <a href="#projects" class="magnetic bg-[#38BDF8] text-[#0F172A] font-medium px-6 py-3 rounded-lg hover:bg-[#5fcaf9] transition">{{ __('site.hero_view_projects') }}</a>
            <a href="{{ asset('cv.' . app()->getLocale() . '.pdf') }}" download target="_blank" class="magnetic border border-white/20 px-6 py-3 rounded-lg hover:border-[#38BDF8] hover:text-[#38BDF8] transition">{{ __('site.hero_download_cv') }}</a>
        </div>

        <div class="flex flex-wrap items-center gap-3">
            <a href="https://github.com/elijah-malay-94" target="_blank" rel="noopener"
               class="flex items-center gap-2 border border-white/20 hover:border-[#38BDF8] hover:text-[#38BDF8] text-[#94A3B8] transition-all px-4 py-2 rounded-lg text-sm font-mono">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.477 2 2 6.477 2 12c0 4.418 2.865 8.166 6.839 9.489.5.092.682-.217.682-.482 0-.237-.009-.868-.013-1.703-2.782.604-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.463-1.11-1.463-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.578 9.578 0 0112 6.836a9.59 9.59 0 012.504.337c1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.741 0 .267.18.578.688.48C19.138 20.163 22 16.418 22 12c0-5.523-4.477-10-10-10z"/></svg>
                GitHub
            </a>
            <a href="https://www.linkedin.com/in/elijah-malay-dovelee-465ab9260/" target="_blank" rel="noopener"
               class="flex items-center gap-2 border border-white/20 hover:border-[#0A66C2] hover:text-[#0A66C2] text-[#94A3B8] transition-all px-4 py-2 rounded-lg text-sm font-mono">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M20.5 2h-17A1.5 1.5 0 002 3.5v17A1.5 1.5 0 003.5 22h17a1.5 1.5 0 001.5-1.5v-17A1.5 1.5 0 0020.5 2zM8 19H5v-9h3zM6.5 8.25A1.75 1.75 0 118.3 6.5a1.78 1.78 0 01-1.8 1.75zM19 19h-3v-4.74c0-1.42-.6-1.93-1.38-1.93A1.74 1.74 0 0013 14.19a.66.66 0 000 .14V19h-3v-9h2.9v1.3a3.11 3.11 0 012.7-1.4c1.55 0 3.36.86 3.36 3.66z"/></svg>
                LinkedIn
            </a>
            <a href="https://www.facebook.com/elijah.d.malay?locale=it_IT" target="_blank" rel="noopener"
               class="text-[#94A3B8] hover:text-[#38BDF8] transition" aria-label="Facebook">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
            </a>
            <a href="mailto:malaydovelee94@gmail.com"
               class="text-[#94A3B8] hover:text-[#38BDF8] transition" aria-label="Email">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 6l-10 7L2 6"/><path d="M2 6h20v12H2z"/></svg>
            </a>
        </div>
    </div>

    <div class="relative flex justify-center order-first md:order-last" style="z-index:1">
        <div class="absolute w-48 h-48 md:w-72 md:h-72 bg-[#38BDF8]/15 rounded-full blur-3xl glow-pulse"></div>
        <img src="{{ asset('malay_img.png') }}" alt="Elijah Malay Dovelee"
             class="relative w-48 sm:w-64 md:w-96 h-auto rounded-[50%] animate-float avatar-glow">
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
    <div class="max-w-6xl mx-auto px-6 md:px-12 py-10 md:py-20 reveal">

        <div class="grid md:grid-cols-3 gap-6 md:gap-12 mb-8 md:mb-12" style="align-items:stretch">

            <div class="about-img-col md:col-span-1 order-last md:order-first" style="align-self:stretch;display:flex;flex-direction:column;align-items:center">
                <div class="about-flip w-full" style="flex:1;min-height:300px">
                    <div class="about-flip-inner">
                        {{-- Front: photo --}}
                        <div class="about-flip-front">
                            <img src="{{ asset('elijah.png') }}" alt="Elijah Malay Dovelee"
                                 class="w-full h-full object-cover object-top" loading="lazy">
                        </div>
                        {{-- Back: second photo --}}
                        <div class="about-flip-back">
                            <img src="{{ asset('elia-img.PNG') }}" alt="Elijah Malay Dovelee"
                                 class="w-full h-full object-cover object-top" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>

            <div class="md:col-span-2 order-first md:order-last">
                <span class="font-mono text-base text-[#38BDF8] border border-[#38BDF8]/30 rounded-full px-4 py-1.5 inline-block mb-6">{{ __('site.about_badge') }}</span>

                <h2 class="font-display font-bold text-2xl md:text-4xl mb-6">{{ __('site.about_title') }}</h2>

                <div class="relative">
                    {{-- Default text (shown when not hovering image) --}}
                    <div id="about-text-a" style="transition:opacity 0.5s ease">
                        <p class="text-[#E7E9F0] leading-relaxed text-sm md:text-base mb-4">{{ __('site.about_p1') }}</p>
                        <p class="text-[#94A3B8] leading-relaxed text-sm md:text-base mb-4">{{ __('site.about_p2') }}</p>
                        <p class="text-[#94A3B8] leading-relaxed text-sm md:text-base">{{ __('site.about_p3') }}</p>
                    </div>
                    {{-- Alternate text (shown when hovering the image) --}}
                    <div id="about-text-b" style="position:absolute;top:0;left:0;width:100%;opacity:0;transition:opacity 0.5s ease;pointer-events:none">
                        <p class="text-[#E7E9F0] leading-relaxed text-sm md:text-base mb-4">{{ __('site.about_alt_p1') }}</p>
                        <p class="text-[#94A3B8] leading-relaxed text-sm md:text-base mb-4">{{ __('site.about_alt_p2') }}</p>
                        <p class="text-[#94A3B8] leading-relaxed text-sm md:text-base">{{ __('site.about_alt_p3') }}</p>
                    </div>
                </div>
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
    <div class="max-w-4xl mx-auto px-6 md:px-12 py-10 md:py-20 reveal">

        <span class="font-mono text-base text-[#38BDF8] border border-[#38BDF8]/30 rounded-full px-4 py-1.5 inline-block mb-6">{{ __('site.education_badge') }}</span>

        <h2 class="font-display font-bold text-3xl md:text-5xl mb-8 md:mb-12">{{ __('site.education_title') }}</h2>

        <div class="space-y-8 border-l border-white/10 pl-8 stagger-container">

            <div class="relative timeline-reveal">
                <span class="absolute -left-[35px] top-1.5 w-3 h-3 rounded-full bg-[#38BDF8]"></span>
                <div class="flex items-start justify-between gap-4">
                    <div class="flex-1">
                        <p class="font-mono text-base text-[#38BDF8] mb-1">Apr 2026 – Apr 2028 · {{ __('site.in_progress') }}</p>
                        <h4 class="font-semibold text-base flex items-center gap-2">
                            <svg class="text-[#38BDF8] flex-shrink-0" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/></svg>
                            MSc Artificial Intelligence
                        </h4>
                        <p class="text-[#94A3B8]">{{ __('site.edu1_desc') }}</p>
                    </div>
                    <div class="flex flex-col gap-1 flex-shrink-0 mt-1">
                        <img src="{{ asset('mbs.png') }}" alt="MBS School of Business" class="w-14 h-14 object-contain rounded-lg bg-white/5 p-1">
                        <img src="{{ asset('great-learing.png') }}" alt="Great Learning" class="w-14 h-14 object-contain rounded-lg bg-white/5 p-1">
                    </div>
                </div>
            </div>

            <div class="relative timeline-reveal">
                <span class="absolute -left-[35px] top-1.5 w-3 h-3 rounded-full bg-[#38BDF8]"></span>
                <div class="flex items-start justify-between gap-4">
                    <div class="flex-1">
                        <p class="font-mono text-base text-[#38BDF8] mb-1">Apr 2026 – Dec 2026 · {{ __('site.in_progress') }}</p>
                        <h4 class="font-semibold text-base flex items-center gap-2">
                            <svg class="text-[#38BDF8] flex-shrink-0" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                            Post Graduate Program in AI & Machine Learning: Business Applications
                        </h4>
                        <p class="text-[#94A3B8]">{{ __('site.edu2_desc') }}</p>
                    </div>
                    <div class="flex flex-col gap-1 flex-shrink-0 mt-1">
                        <img src="{{ asset('texas-austin.png') }}" alt="UT Austin" class="w-14 h-14 object-contain rounded-lg bg-white/5 p-1">
                        <img src="{{ asset('great-learing.png') }}" alt="Great Learning" class="w-14 h-14 object-contain rounded-lg bg-white/5 p-1">
                    </div>
                </div>
            </div>

            <div class="relative timeline-reveal">
                <span class="absolute -left-[35px] top-1.5 w-3 h-3 rounded-full bg-white/20"></span>
                <div class="flex items-start justify-between gap-4">
                    <div class="flex-1">
                        <p class="font-mono text-base text-[#94A3B8] mb-1">2024 – Sep 2026 · {{ __('site.final_exam') }}</p>
                        <h4 class="font-semibold text-base flex items-center gap-2">
                            <svg class="text-[#38BDF8] flex-shrink-0" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                            Computer Science and Full Stack Developer
                        </h4>
                        <p class="text-[#94A3B8]">{{ __('site.edu3_desc') }}</p>
                    </div>
                    <img src="{{ asset('demos.png') }}" alt="ITS DEMOS Academy" class="w-14 h-14 object-contain rounded-lg flex-shrink-0 mt-1 bg-white/5 p-1" onerror="this.style.display='none'">
                </div>
            </div>

            <div class="relative timeline-reveal">
                <span class="absolute -left-[35px] top-1.5 w-3 h-3 rounded-full bg-white/20"></span>
                <div class="flex items-start justify-between gap-4">
                    <div class="flex-1">
                        <p class="font-mono text-base text-[#94A3B8] mb-1">2022 – 2023</p>
                        <h4 class="font-semibold text-base flex items-center gap-2">
                            <svg class="text-[#38BDF8] flex-shrink-0" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                            Master's in Cyber Security: Operations
                        </h4>
                        <p class="text-[#94A3B8]">{{ __('site.edu4_desc') }}</p>
                    </div>
                    <img src="{{ asset('repido.png') }}" alt="Academy Rapido" class="w-14 h-14 object-contain rounded-lg flex-shrink-0 mt-1 bg-white/5 p-1" onerror="this.style.display='none'">
                </div>
            </div>

            <div class="relative timeline-reveal">
                <span class="absolute -left-[35px] top-1.5 w-3 h-3 rounded-full bg-white/20"></span>
                <div class="flex items-start justify-between gap-4">
                    <div class="flex-1">
                        <p class="font-mono text-base text-[#94A3B8] mb-1">2010 – 2015</p>
                        <h4 class="font-semibold text-base flex items-center gap-2">
                            <svg class="text-[#38BDF8] flex-shrink-0" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/></svg>
                            BS in Mining Engineering
                        </h4>
                        <p class="text-[#94A3B8]">{{ __('site.edu5_desc') }}</p>
                    </div>
                    <img src="{{ asset('ul-liberia.png') }}" alt="University of Liberia" class="w-14 h-14 object-contain rounded-lg flex-shrink-0 mt-1 bg-white/5 p-1">
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============ CERTIFICATIONS ============ --}}
<section id="certifications" class="bg-[#1E293B] border-t border-white/10 scroll-mt-20">
    <div class="max-w-4xl mx-auto px-6 md:px-12 py-10 md:py-20 reveal">

        <span class="font-mono text-base text-[#38BDF8] border border-[#38BDF8]/30 rounded-full px-4 py-1.5 inline-block mb-6">{{ __('site.cert_badge') }}</span>

        <h2 class="font-display font-bold text-3xl md:text-5xl mb-8 md:mb-12">{{ __('site.cert_title') }}</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 stagger-container">
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
            <div class="reveal-item cert-flip relative" style="height:240px">
                <div class="cert-flip-inner">
                    {{-- FRONT: logo centred + title at bottom --}}
                    <div class="cert-flip-front bg-[#0F172A] border border-white/10">
                        <div class="absolute inset-0 flex items-center justify-center" style="padding-bottom:4rem">
                            <img src="{{ asset($logo) }}" alt="{{ $cert['issuer'] }}" class="w-20 h-20 object-contain">
                        </div>
                        <div class="absolute inset-0 flex flex-col justify-end p-4" style="background:linear-gradient(to top,rgba(8,14,26,0.97) 0%,rgba(8,14,26,0.55) 50%,transparent 100%)">
                            <h4 class="font-semibold text-xs leading-snug text-white mb-1" style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden">{{ $cert['title'] }}</h4>
                            <p class="flip-hint font-mono text-xs text-[#38BDF8]/70">hover for details ↺</p>
                        </div>
                    </div>
                    {{-- BACK: logo centred + issuer/year/verify at bottom --}}
                    <div class="cert-flip-back bg-[#0F172A] border border-[#38BDF8]/30">
                        <div class="absolute inset-0 flex items-center justify-center" style="padding-bottom:4.5rem">
                            <img src="{{ asset($logo) }}" alt="{{ $cert['issuer'] }}" class="w-20 h-20 object-contain opacity-50">
                        </div>
                        <div class="absolute inset-0 flex flex-col justify-end p-4" style="background:linear-gradient(to top,rgba(8,14,26,0.97) 0%,rgba(8,14,26,0.55) 50%,transparent 100%)">
                            <p class="font-mono text-xs text-[#38BDF8] mb-0.5">{{ $cert['issuer'] }}</p>
                            <p class="text-[#94A3B8] text-xs mb-2">{{ $cert['year'] }}</p>
                            <a href="{{ $cert['verify'] }}" target="_blank"
                               class="self-start text-xs text-[#38BDF8] border border-[#38BDF8]/30 rounded-lg px-3 py-1 font-mono hover:bg-[#38BDF8]/10 transition">Verify ↗</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============ SKILLS ============ --}}
<section id="skills" class="bg-[#1E293B] border-t border-white/10 scroll-mt-20">
    <div class="max-w-4xl mx-auto px-6 md:px-12 py-10 md:py-20 reveal">

        <span class="font-mono text-base text-[#38BDF8] border border-[#38BDF8]/30 rounded-full px-4 py-1.5 inline-block mb-6">{{ __('site.skills_badge') }}</span>

        <h2 class="font-display font-bold text-3xl md:text-5xl mb-8 md:mb-12">{{ __('site.skills_title') }}</h2>

        <div class="grid sm:grid-cols-2 gap-6 md:gap-10">

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
    <div class="max-w-6xl mx-auto px-6 md:px-12 py-10 md:py-20 reveal">

        <span class="font-mono text-base text-[#38BDF8] border border-[#38BDF8]/30 rounded-full px-4 py-1.5 inline-block mb-6">{{ __('site.projects_badge') }}</span>

        <h2 class="font-display font-bold text-3xl md:text-5xl mb-8 md:mb-12">{{ __('site.projects_title') }}</h2>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 stagger-container">

            @php
            $ghIcon = '<svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.477 2 2 6.477 2 12c0 4.418 2.865 8.166 6.839 9.489.5.092.682-.217.682-.482 0-.237-.009-.868-.013-1.703-2.782.604-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.463-1.11-1.463-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.578 9.578 0 0112 6.836a9.59 9.59 0 012.504.337c1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.741 0 .267.18.578.688.48C19.138 20.163 22 16.418 22 12c0-5.523-4.477-10-10-10z"/></svg>';
            $projects = [
                ['glow'=>'blue',   'glowRgb'=>'56,189,248',  'img'=>'mqtt-maeservace.png',   'title'=>'MAEservice App',             'url'=>'https://github.com/elijah-malay-94/MAEservice-App',               'demo'=>'https://maeservice-app.netlify.app/',                           'desc'=>__('site.proj1_desc'), 'tags'=>['React','.NET','SQL Server','Docker','MQTT','JWT']],
                ['glow'=>'purple', 'glowRgb'=>'129,140,248', 'img'=>'live-dashboard.png',    'title'=>'MAE Live Dashboard',         'url'=>'https://github.com/elijah-malay-94/MAE-Live-Dashboard-v3-main',  'demo'=>'https://www.maeservice.it/alfa/index.html?page=works',          'desc'=>__('site.proj2_desc'), 'tags'=>['JavaScript','Node.js','Real-time']],
                ['glow'=>'green',  'glowRgb'=>'52,211,153',  'img'=>'eevt002_img.png',       'title'=>'EEVT002 Instrument Control', 'url'=>'https://github.com/elijah-malay-94/EEVT002-INSTRUMENT-CONTROL',  'demo'=>null,                                                            'desc'=>__('site.proj3_desc'), 'tags'=>['JavaScript','Node.js','Hardware','Firmware']],
                ['glow'=>'orange', 'glowRgb'=>'251,146,60',  'img'=>'betting.png',           'title'=>'Betting Management System',  'url'=>'https://github.com/elijah-malay-94/betting-managment-system-app','demo'=>'https://betting-managment-system.netlify.app/',                 'desc'=>__('site.proj4_desc'), 'tags'=>['Angular','TypeScript','Unit Testing']],
                ['glow'=>'pink',   'glowRgb'=>'244,114,182', 'img'=>'hotel.png',             'title'=>'Hotel Management App',       'url'=>'https://github.com/elijah-malay-94/edmalay-hotel-project',        'demo'=>'https://edmalay-hotel-management-app.netlify.app/',             'desc'=>__('site.proj5_desc'), 'tags'=>['React','Vite','JavaScript']],
                ['glow'=>'teal',   'glowRgb'=>'45,212,191',  'img'=>'clinic-management.png', 'title'=>'Clinic Management App',      'url'=>'https://github.com/elijah-malay-94/edmalay-clinic-app',           'demo'=>'https://malay-medical-website.netlify.app/',                    'desc'=>__('site.proj6_desc'), 'tags'=>['React','Vite','JavaScript']],
                ['glow'=>'amber',  'glowRgb'=>'251,191,36',  'img'=>'familynext2.png',       'title'=>'FamilyNest',                 'url'=>null,                                                              'demo'=>null,                                                            'desc'=>__('site.proj7_desc'), 'tags'=>['React Native','Mobile','AI','Real-time','Firebase'], 'badge'=>'Coming soon on App Store &amp; Google Play'],
            ];
            @endphp

            @foreach ($projects as $project)
            <div class="reveal-item proj-flip proj-glow-{{ $project['glow'] }} relative" style="height:360px">
                <div class="proj-flip-inner">

                    {{-- FRONT: image + title & tech stack only --}}
                    <div class="proj-flip-front relative">
                        <img src="{{ asset($project['img']) }}" alt="{{ $project['title'] }}" class="w-full h-full object-cover" loading="lazy">
                        <div class="absolute inset-0 flex flex-col justify-end p-5" style="background:linear-gradient(to top,rgba(8,14,26,0.97) 0%,rgba(8,14,26,0.5) 55%,transparent 100%)">
                            <h3 class="font-display font-bold text-xl text-white leading-snug mb-3">{{ $project['title'] }}</h3>
                            <div class="flex flex-wrap gap-1.5 mb-3">
                                @foreach ($project['tags'] as $tag)
                                    <span class="font-mono text-xs rounded-full px-2.5 py-0.5 text-white/80 border border-white/25">{{ $tag }}</span>
                                @endforeach
                            </div>
                            <p class="flip-hint font-mono text-xs" style="color:rgba({{ $project['glowRgb'] }},0.8)">hover for details ↺</p>
                        </div>
                    </div>

                    {{-- BACK: same image + description & links at bottom --}}
                    <div class="proj-flip-back relative">
                        <img src="{{ asset($project['img']) }}" alt="{{ $project['title'] }}" class="w-full h-full object-cover" loading="lazy">
                        <div class="absolute inset-0 flex flex-col justify-end p-5" style="background:linear-gradient(to top,rgba(8,14,26,0.97) 0%,rgba(8,14,26,0.6) 60%,transparent 100%)">
                            <p class="text-white/85 text-sm leading-relaxed mb-3 overflow-y-auto" style="max-height:140px">{{ $project['desc'] }}</p>
                            <div class="flex flex-wrap items-center gap-3">
                                @if ($project['url'])
                                    <a href="{{ $project['url'] }}" target="_blank" class="text-white/60 hover:text-white transition" aria-label="GitHub">{!! $ghIcon !!}</a>
                                @else
                                    <span class="font-mono text-xs border border-[#38BDF8]/50 text-[#38BDF8] rounded-full px-2 py-0.5">Owner</span>
                                @endif
                                @if (!empty($project['demo']))
                                    <a href="{{ $project['demo'] }}" target="_blank"
                                       class="inline-flex items-center gap-1.5 text-sm font-medium rounded-lg px-3 py-1.5"
                                       style="color:rgb({{ $project['glowRgb'] }});border:1px solid rgba({{ $project['glowRgb'] }},0.6);background:rgba({{ $project['glowRgb'] }},0.18)">
                                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                                        Live Demo
                                    </a>
                                @endif
                                @if (!empty($project['badge']))
                                    <p class="inline-flex items-center gap-1.5 text-xs font-mono text-amber-400 border border-amber-400/30 rounded-lg px-3 py-1.5">
                                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                                        {!! $project['badge'] !!}
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>

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

{{-- ============ TESTIMONIALS ============ --}}
<section id="testimonials" class="bg-[#1E293B] border-t border-white/10 scroll-mt-20">
    <div class="max-w-4xl mx-auto px-6 md:px-12 py-10 md:py-20 reveal">

        <span class="font-mono text-base text-[#38BDF8] border border-[#38BDF8]/30 rounded-full px-4 py-1.5 inline-block mb-6">{{ __('site.testimonials_badge') }}</span>

        <h2 class="font-display font-bold text-3xl md:text-5xl mb-4">{{ __('site.testimonials_title') }}</h2>
        <p class="text-[#94A3B8] text-base mb-10">{{ __('site.testimonials_subtitle') }}</p>

        @php
        $testimonials = [
            [
                'quote'   => __('site.testi1_quote'),
                'name'    => 'Ing. Fabrizio Mainella',
                'role'    => 'CEO, MAE Advanced Geophysics Instruments',
                'initial' => 'FM',
                'color'   => '#38BDF8',
                'glow'    => 'testi-glow-blue',
            ],
            [
                'quote'   => __('site.testi2_quote'),
                'name'    => 'Claudio',
                'role'    => 'Colleague, MAE Advanced Geophysics Instruments',
                'initial' => 'C',
                'color'   => '#818CF8',
                'glow'    => 'testi-glow-purple',
            ],
            [
                'quote'   => __('site.testi3_quote'),
                'name'    => 'Marco',
                'role'    => 'Colleague, MAE Advanced Geophysics Instruments',
                'initial' => 'M',
                'color'   => '#34D399',
                'glow'    => 'testi-glow-green',
            ],
            [
                'quote'   => __('site.testi4_quote'),
                'name'    => 'Giulia Romano',
                'role'    => 'Senior Consultant, Accenture Technology Solutions',
                'initial' => 'GR',
                'color'   => '#F59E0B',
                'glow'    => 'testi-glow-amber',
            ],
        ];
        @endphp

        <div class="grid sm:grid-cols-2 gap-6 stagger-container">
            @foreach ($testimonials as $t)
            <div class="testi-card {{ $t['glow'] }} reveal-item border border-white/10 rounded-2xl p-6 flex flex-col gap-4"
                 style="--card-color: {{ $t['color'] }}">
                <svg class="text-[#38BDF8]/40 flex-shrink-0" width="28" height="28" viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                <p class="text-[#E7E9F0] text-sm leading-relaxed flex-1">{{ $t['quote'] }}</p>
                <div class="flex items-center gap-3 pt-2 border-t border-white/10">
                    <div class="w-9 h-9 rounded-full flex items-center justify-center text-xs font-bold text-[#0F172A] flex-shrink-0"
                         style="background:{{ $t['color'] }}">{{ $t['initial'] }}</div>
                    <div>
                        <p class="text-sm font-semibold text-[#E7E9F0]">{{ $t['name'] }}</p>
                        <p class="text-xs text-[#94A3B8]">{{ $t['role'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-10 text-center">
            <p class="text-[#94A3B8] text-sm mb-4">{{ __('site.testimonials_invite') }}</p>
            <a href="https://www.linkedin.com/in/elijah-malay-dovelee-465ab9260/" target="_blank" rel="noopener"
               class="inline-flex items-center gap-2 border border-[#0A66C2]/40 text-[#94A3B8] hover:border-[#0A66C2] hover:text-[#0A66C2] transition px-5 py-2.5 rounded-lg text-sm font-mono">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M20.5 2h-17A1.5 1.5 0 002 3.5v17A1.5 1.5 0 003.5 22h17a1.5 1.5 0 001.5-1.5v-17A1.5 1.5 0 0020.5 2zM8 19H5v-9h3zM6.5 8.25A1.75 1.75 0 118.3 6.5a1.78 1.78 0 01-1.8 1.75zM19 19h-3v-4.74c0-1.42-.6-1.93-1.38-1.93A1.74 1.74 0 0013 14.19a.66.66 0 000 .14V19h-3v-9h2.9v1.3a3.11 3.11 0 012.7-1.4c1.55 0 3.36.86 3.36 3.66z"/></svg>
                {{ __('site.testimonials_linkedin_cta') }}
            </a>
        </div>
    </div>
</section>

{{-- ============ WRITING / BLOG ============ --}}
<section id="writing" class="border-t border-white/10 scroll-mt-20">
    <div class="max-w-4xl mx-auto px-6 md:px-12 py-10 md:py-20 reveal">

        <span class="font-mono text-base text-[#38BDF8] border border-[#38BDF8]/30 rounded-full px-4 py-1.5 inline-block mb-6">{{ __('site.blog_badge') }}</span>

        <h2 class="font-display font-bold text-3xl md:text-5xl mb-4">{{ __('site.blog_title') }}</h2>
        <p class="text-[#94A3B8] text-base md:text-lg mb-10 max-w-2xl">{{ __('site.blog_desc') }}</p>

        <div class="grid sm:grid-cols-3 gap-6 mb-10">
            @php
            $blogTopics = [
                ['icon' => '🔐', 'title' => __('site.blog_topic1'), 'desc' => __('site.blog_topic1_desc'), 'glow' => 'blog-glow-blue',   'glow_color' => '#38BDF8'],
                ['icon' => '⚡', 'title' => __('site.blog_topic2'), 'desc' => __('site.blog_topic2_desc'), 'glow' => 'blog-glow-violet', 'glow_color' => '#818CF8'],
                ['icon' => '🤖', 'title' => __('site.blog_topic3'), 'desc' => __('site.blog_topic3_desc'), 'glow' => 'blog-glow-pink',   'glow_color' => '#EC4899'],
            ];
            @endphp
            @foreach ($blogTopics as $topic)
            <div class="blog-card {{ $topic['glow'] }} bg-[#1E293B] border border-white/10 rounded-2xl p-6">
                <span class="blog-icon text-2xl mb-3 block">{{ $topic['icon'] }}</span>
                <h4 class="font-semibold text-[#E7E9F0] mb-2 text-sm">{{ $topic['title'] }}</h4>
                <p class="text-[#94A3B8] text-xs leading-relaxed">{{ $topic['desc'] }}</p>
                <span class="inline-block mt-3 font-mono text-xs text-[#38BDF8]/60">Coming soon</span>
            </div>
            @endforeach
        </div>

        <div class="flex flex-wrap gap-4">
            <a href="https://www.linkedin.com/in/elijah-malay-dovelee-465ab9260/" target="_blank" rel="noopener"
               class="inline-flex items-center gap-2 bg-[#38BDF8] text-[#0F172A] font-medium px-5 py-2.5 rounded-lg text-sm hover:bg-[#5fcaf9] transition">
                {{ __('site.blog_follow_linkedin') }}
            </a>
            <a href="https://github.com/elijah-malay-94" target="_blank" rel="noopener"
               class="inline-flex items-center gap-2 border border-white/20 text-[#94A3B8] hover:border-[#38BDF8] hover:text-[#38BDF8] transition px-5 py-2.5 rounded-lg text-sm font-mono">
                {{ __('site.blog_follow_github') }}
            </a>
        </div>
    </div>
</section>

{{-- ============ CONTACT ============ --}}
<section id="contact" class="bg-[#1E293B] border-t border-white/10 scroll-mt-20">
    <div class="max-w-4xl mx-auto px-6 md:px-12 py-10 md:py-20 reveal">

        <div class="text-center mb-12">
            <span class="font-mono text-base text-[#38BDF8] border border-[#38BDF8]/30 rounded-full px-4 py-1.5 inline-block mb-6">{{ __('site.contact_badge') }}</span>
            <h2 class="font-display font-bold text-3xl md:text-5xl mb-4">{{ __('site.contact_title') }}</h2>
            <p class="text-[#94A3B8] text-base md:text-xl">{{ __('site.contact_tagline') }}</p>
        </div>

        <div class="grid md:grid-cols-5 gap-8">

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
                            class="magnetic bg-[#38BDF8] text-[#0F172A] font-medium px-8 py-3 rounded-lg hover:bg-[#5fcaf9] transition w-full sm:w-auto">
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

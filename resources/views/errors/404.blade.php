@extends('layouts.app')

@section('title', '404 — Page Not Found')

@section('content')
<section class="min-h-[72vh] flex flex-col items-center justify-center px-6 text-center">
    <span class="font-mono text-base text-[#38BDF8] border border-[#38BDF8]/30 rounded-full px-4 py-1.5 inline-block mb-8">$ error 404</span>
    <h1 class="font-display font-bold text-8xl md:text-9xl text-[#38BDF8] mb-4">404</h1>
    <h2 class="font-display font-bold text-2xl md:text-3xl mb-6">Page Not Found</h2>
    <p class="text-[#94A3B8] text-lg mb-10 max-w-md leading-relaxed">This path doesn't exist. It may have been moved, deleted, or you followed a broken link.</p>
    <a href="/" class="bg-[#38BDF8] text-[#0F172A] font-medium px-8 py-3 rounded-lg hover:bg-[#5fcaf9] transition">
        ← Back to Home
    </a>
</section>
@endsection

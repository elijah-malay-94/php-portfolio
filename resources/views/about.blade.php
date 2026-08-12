@extends('layouts.app')

@section('title', 'About')

@section('content')
<section class="max-w-6xl mx-auto px-6 md:px-12 py-20 md:py-28 grid md:grid-cols-3 gap-16 items-start">

    <div class="md:col-span-1 flex justify-center md:justify-start">
        <div class="relative">
            <div class="absolute w-56 h-56 bg-[#38BDF8]/15 rounded-full blur-3xl"></div>
            <img src="{{ asset('malay_img.png') }}" alt="Elijah Malay Dovelee"
                 class="relative w-56 md:w-64 h-auto rounded-[50%]">
        </div>
    </div>

    <div class="md:col-span-2">
        <span class="font-mono text-sm text-[#38BDF8] border border-[#38BDF8]/30 rounded-full px-4 py-1.5 inline-block mb-6">$ cat about.md</span>

        <h1 class="font-display font-bold text-3xl md:text-4xl mb-8">About Me</h1>

        <p class="text-[#E7E9F0] leading-relaxed text-lg mb-6">
            I build things on the web — front-end, back-end, whatever the project actually needs. Security isn't something I bolt on at the end; it's part of how I think while I'm writing the code in the first place.
        </p>

        <p class="text-[#8A93A8] leading-relaxed text-lg mb-6">
            What I like most is seeing a project through, start to finish: the interface, the logic behind it, the database, getting it live. Lately I've been splitting my time between that and studying AI and machine learning, mostly because I don't want to be building web apps the same way five years from now.
        </p>

        <p class="text-[#8A93A8] leading-relaxed text-lg">
            My path here hasn't been a straight line — I started in mining engineering, worked across sales, logistics, and geotechnical survey work before moving fully into software. That range shapes how I approach problems: less about the "correct" textbook answer, more about what actually works for the people using it.
        </p>
    </div>

</section>
@endsection
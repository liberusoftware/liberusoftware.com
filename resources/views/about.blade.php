@extends('layouts.guest')

@section('page_title', 'About Us')
@section('meta_description', 'Learn about Liberu Software — a UK-based team building enterprise-grade, open-source Laravel applications for businesses worldwide.')
@section('meta_keywords', 'About Liberu Software, UK software company, Laravel developers, open source software')
@section('og_title', 'About Liberu Software')
@section('og_description', 'Learn about Liberu Software — a UK-based team building enterprise-grade, open-source Laravel applications for businesses worldwide.')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24">

    {{-- Page heading --}}
    <div class="mb-12">
        <p class="text-[#f5c518] text-sm font-semibold uppercase tracking-widest mb-3">About Us</p>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-white mb-5 leading-tight">
            Building Software That Works<br class="hidden sm:block"> For Your Business
        </h1>
        <p class="text-neutral-400 text-lg leading-relaxed max-w-2xl">
            Liberu Software is a UK-based company dedicated to creating enterprise-grade, open-source Laravel applications
            that help organisations of all sizes operate more efficiently and grow with confidence.
        </p>
    </div>

    {{-- Divider --}}
    <hr class="border-neutral-800 mb-12" />

    {{-- Mission --}}
    <div class="mb-14">
        <h2 class="text-xl font-bold text-white mb-4">Our Mission</h2>
        <p class="text-neutral-400 leading-relaxed mb-4">
            We believe great software should be accessible to every business, not just those with enterprise budgets.
            That is why every platform we build is released as open source — giving teams the freedom to self-host,
            customise and contribute — while also offering professional support, hosting and managed services through
            the Liberu Group.
        </p>
        <p class="text-neutral-400 leading-relaxed">
            From accounting and CRM to genealogy and e-commerce, our growing portfolio of Laravel applications
            provides a unified, modern ecosystem that scales alongside your organisation.
        </p>
    </div>

    {{-- Values --}}
    <div class="mb-14">
        <h2 class="text-xl font-bold text-white mb-6">What We Stand For</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            @foreach ([
                ['🔓', 'Open Source First', 'All our projects are freely available on GitHub. No vendor lock-in, no hidden costs.'],
                ['🏗️', 'Enterprise Quality', 'Built on Laravel with Filament, Livewire and Tailwind CSS — production-ready from day one.'],
                ['🇬🇧', 'UK-Based Team', 'Our engineers and support staff are based in the United Kingdom, delivering localised expertise.'],
                ['🤝', 'Community Driven', 'We welcome contributions, bug reports and feature requests from the global developer community.'],
            ] as [$icon, $title, $desc])
            <div class="bg-neutral-800/60 border border-neutral-700/60 rounded-xl p-5">
                <div class="text-2xl mb-3">{{ $icon }}</div>
                <h3 class="text-white font-semibold mb-1">{{ $title }}</h3>
                <p class="text-neutral-400 text-sm leading-relaxed">{{ $desc }}</p>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Liberu Group --}}
    <div class="mb-14">
        <h2 class="text-xl font-bold text-white mb-4">The Liberu Group</h2>
        <p class="text-neutral-400 leading-relaxed mb-6">
            Liberu Software is part of the wider Liberu Group — a family of companies providing complementary
            technology services to businesses across the UK and internationally.
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            @foreach ([
                ['Liberu Group', 'https://www.liberugroup.com', 'Group holding company and strategic direction.'],
                ['Liberu Software', 'https://www.liberusoftware.com', 'Open-source Laravel application development.'],
                ['Liberu Services', 'https://www.liberuservices.com', 'Managed IT services and technical consultancy.'],
                ['Liberu Hosting', 'https://www.liberuhosting.com', 'Reliable hosting tailored for Laravel applications.'],
            ] as [$name, $url, $desc])
            <a href="{{ $url }}" target="_blank" rel="noopener noreferrer"
               class="group bg-neutral-800/40 hover:bg-neutral-800 border border-neutral-700/50 hover:border-[#f5c518]/40 rounded-xl p-5 transition-all duration-200 block">
                <div class="flex items-center justify-between mb-2">
                    <h3 class="text-white font-semibold text-sm">{{ $name }}</h3>
                    <svg class="w-4 h-4 text-neutral-600 group-hover:text-[#f5c518] transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                </div>
                <p class="text-neutral-400 text-xs leading-relaxed">{{ $desc }}</p>
            </a>
            @endforeach
        </div>
    </div>

    {{-- CTA --}}
    <div class="bg-neutral-800/60 border border-neutral-700/60 rounded-xl p-8 text-center">
        <h2 class="text-xl font-bold text-white mb-3">Want to Work With Us?</h2>
        <p class="text-neutral-400 text-sm mb-6">Get in touch to discuss how Liberu Software can support your business.</p>
        <a href="{{ url('/contact') }}"
           class="inline-flex items-center gap-2 bg-[#f5c518] hover:bg-yellow-400 text-neutral-900 font-bold px-7 py-3 rounded-lg transition-colors">
            Contact Us
        </a>
    </div>

</div>
@endsection

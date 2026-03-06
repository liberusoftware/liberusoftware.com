<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">

    {{-- Page title --}}
    <title>@yield('page_title', config('app.name', 'Liberu Software')) | {{ config('app.name', 'Liberu Software') }}</title>

    {{-- Primary meta description --}}
    <meta name="description" content="@yield('meta_description', 'Liberu Software delivers enterprise-grade, open-source Laravel applications — from CRM and accounting to e-commerce and genealogy — built for modern businesses.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Liberu Software, Laravel applications, open source, CRM, accounting, e-commerce, genealogy, enterprise software, UK software company')">
    <meta name="author" content="Liberu Software Ltd">

    {{-- Canonical URL --}}
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <meta name="theme-color" content="#f5c518">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Liberu Software">
    <meta property="og:title" content="@yield('og_title', 'Liberu Software — Open-Source Laravel Platforms')">
    <meta property="og:description" content="@yield('og_description', 'Enterprise-grade, open-source Laravel applications for CRM, accounting, e-commerce, genealogy and more. Built in the UK, deployed worldwide.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('logo.svg') }}">
    <meta property="og:locale" content="en_GB">

    {{-- Twitter / X Card --}}
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@liberusoftware">
    <meta name="twitter:title" content="@yield('og_title', 'Liberu Software — Open-Source Laravel Platforms')">
    <meta name="twitter:description" content="@yield('og_description', 'Enterprise-grade, open-source Laravel applications for CRM, accounting, e-commerce, genealogy and more.')">
    <meta name="twitter:image" content="{{ asset('logo.svg') }}">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')

    {{-- Additional head content --}}
    @yield('head')
</head>
<body class="antialiased bg-neutral-900 text-white">

    {{-- Site Navigation --}}
    <header class="sticky top-0 z-50 bg-neutral-900/95 backdrop-blur border-b border-neutral-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">

                {{-- Brand --}}
                <a href="{{ url('/') }}" class="flex items-center gap-2.5 shrink-0" aria-label="Liberu Software home">
                    <img src="{{ asset('logo.svg') }}" alt="Liberu Software" class="h-9 w-auto">
                </a>

                {{-- Primary navigation --}}
                <nav class="hidden md:flex items-center gap-1" aria-label="Primary navigation">
                    <a href="{{ url('/') }}"
                       class="px-3 py-2 text-sm font-medium rounded-md transition-colors {{ request()->is('/') ? 'text-[#f5c518]' : 'text-neutral-300 hover:text-white hover:bg-neutral-800' }}">
                        Home
                    </a>
                    <a href="{{ url('/about') }}"
                       class="px-3 py-2 text-sm font-medium rounded-md transition-colors {{ request()->is('about') ? 'text-[#f5c518]' : 'text-neutral-300 hover:text-white hover:bg-neutral-800' }}">
                        About
                    </a>
                    <a href="{{ url('/contact') }}"
                       class="px-3 py-2 text-sm font-medium rounded-md transition-colors {{ request()->is('contact') ? 'text-[#f5c518]' : 'text-neutral-300 hover:text-white hover:bg-neutral-800' }}">
                        Contact
                    </a>
                </nav>

                {{-- Right side actions --}}
                <div class="flex items-center gap-3">
                    <a href="{{ url('/contact') }}"
                       class="hidden sm:inline-flex items-center gap-1.5 bg-[#f5c518] hover:bg-yellow-400 text-neutral-900 font-semibold text-sm px-4 py-2 rounded-lg transition-colors">
                        Get in Touch
                    </a>


                    {{-- Mobile menu button --}}
                    <button type="button" id="mobile-menu-btn"
                            class="md:hidden inline-flex items-center justify-center rounded-md p-2 text-neutral-400 hover:text-white hover:bg-neutral-800 transition-colors"
                            aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
            </div>

            {{-- Mobile menu --}}
            <div id="mobile-menu" class="hidden md:hidden border-t border-neutral-800 py-3">
                <nav class="flex flex-col gap-1" aria-label="Mobile navigation">
                    <a href="{{ url('/') }}"
                       class="px-3 py-2 text-sm font-medium rounded-md {{ request()->is('/') ? 'text-[#f5c518]' : 'text-neutral-300 hover:text-white hover:bg-neutral-800' }}">
                        Home
                    </a>
                    <a href="{{ url('/about') }}"
                       class="px-3 py-2 text-sm font-medium rounded-md {{ request()->is('about') ? 'text-[#f5c518]' : 'text-neutral-300 hover:text-white hover:bg-neutral-800' }}">
                        About
                    </a>
                    <a href="{{ url('/contact') }}"
                       class="px-3 py-2 text-sm font-medium rounded-md {{ request()->is('contact') ? 'text-[#f5c518]' : 'text-neutral-300 hover:text-white hover:bg-neutral-800' }}">
                        Contact
                    </a>
                </nav>
            </div>
        </div>
    </header>

    <main class="w-full flex-1 min-h-screen">
        @yield('content')
    </main>

    @include('components.footer')

    {{-- Mobile menu toggle --}}
    <script>
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        btn?.addEventListener('click', () => {
            const isOpen = menu.classList.toggle('hidden') === false;
            btn.setAttribute('aria-expanded', isOpen);
        });
    </script>
</body>
</html>

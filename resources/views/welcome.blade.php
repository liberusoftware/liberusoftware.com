@extends('layouts.guest')

@section('page_title', 'Open-Source Laravel Platforms for Modern Business')
@section('meta_description', 'Liberu Software builds enterprise-grade, open-source Laravel platforms — CRM, accounting, e-commerce, genealogy, real estate and more — ready to deploy for your business.')
@section('meta_keywords', 'Liberu Software, Laravel, open source, CRM software, accounting software, e-commerce platform, genealogy software, real estate software, UK software')
@section('og_title', 'Liberu Software — Open-Source Laravel Platforms')
@section('og_description', 'Enterprise-grade Laravel applications built in the UK. Open source and production-ready. Covering CRM, accounting, e-commerce, genealogy, real estate and more.')

@section('content')
<div class="w-full">

    {{-- Hero Section --}}
    <section class="relative overflow-hidden py-24 sm:py-32 px-4 sm:px-6 lg:px-8">
        {{-- Background gradient --}}
        <div class="absolute inset-0 bg-gradient-to-br from-neutral-900 via-neutral-800 to-neutral-900 pointer-events-none"></div>
        {{-- Subtle decorative ring --}}
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none" aria-hidden="true">
            <div class="w-[600px] h-[600px] rounded-full border border-neutral-700/30 opacity-40"></div>
            <div class="absolute w-[900px] h-[900px] rounded-full border border-neutral-700/20 opacity-20"></div>
        </div>

        <div class="relative max-w-4xl mx-auto text-center">
            {{-- Badge --}}
            <div class="inline-flex items-center gap-2 bg-[#f5c518]/10 border border-[#f5c518]/30 text-[#f5c518] text-xs font-semibold uppercase tracking-widest px-4 py-1.5 rounded-full mb-8">
                <span class="w-1.5 h-1.5 rounded-full bg-[#f5c518] animate-pulse"></span>
                Open Source &amp; Enterprise Ready
            </div>

            <h1 class="text-4xl sm:text-6xl md:text-7xl font-extrabold tracking-tight mb-6 leading-tight">
                <span class="text-[#f5c518]">Liberu</span>
                <span class="text-white"> Software</span>
            </h1>

            <p class="text-xl sm:text-2xl text-neutral-300 font-light mb-4 leading-snug">
                Enterprise Laravel Platforms, Open Source &amp; Production-Ready
            </p>
            <p class="text-neutral-400 max-w-2xl mx-auto mb-10 text-base sm:text-lg leading-relaxed">
                We design and build modern, scalable Laravel-based business applications — covering accounting, CRM,
                e-commerce, genealogy, real estate and more — all freely available as open-source projects and
                professionally supported by our UK-based team.
            </p>

            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ url('/contact') }}"
                   class="inline-flex items-center gap-2 bg-[#f5c518] hover:bg-yellow-400 text-neutral-900 font-bold px-7 py-3 rounded-lg transition-colors shadow-lg shadow-[#f5c518]/20 text-sm sm:text-base">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Get in Touch
                </a>
                <a href="https://github.com/liberusoftware" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 border border-neutral-600 hover:border-neutral-400 text-neutral-300 hover:text-white font-semibold px-7 py-3 rounded-lg transition-colors text-sm sm:text-base">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/>
                    </svg>
                    View on GitHub
                </a>
                <a href="https://www.liberuservices.com" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 border border-neutral-700 hover:border-neutral-500 text-neutral-400 hover:text-white font-medium px-7 py-3 rounded-lg transition-colors text-sm sm:text-base">
                    Services
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </a>
                <a href="https://www.liberuhosting.com" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 border border-neutral-700 hover:border-neutral-500 text-neutral-400 hover:text-white font-medium px-7 py-3 rounded-lg transition-colors text-sm sm:text-base">
                    Hosting
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </a>
            </div>

            {{-- Trust signals --}}
            <div class="mt-12 flex flex-wrap justify-center gap-6 text-xs text-neutral-500">
                <span class="flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-[#f5c518]" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    100% Open Source
                </span>
                <span class="flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-[#f5c518]" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    Built with Laravel
                </span>
                <span class="flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-[#f5c518]" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    UK-Based Support
                </span>
                <span class="flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-[#f5c518]" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    Production Ready
                </span>
            </div>
        </div>
    </section>

    {{-- Projects Grid --}}
    <section class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <div class="text-center mb-14">
            <h2 class="text-2xl sm:text-3xl font-bold text-white mb-3">Our Open-Source Platforms</h2>
            <p class="text-neutral-400 max-w-xl mx-auto">Battle-tested Laravel applications covering every facet of modern business operations.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            {{-- Accounting --}}
            <div class="group bg-neutral-800/60 hover:bg-neutral-800 border border-neutral-700/60 hover:border-[#f5c518]/40 rounded-xl p-6 flex flex-col transition-all duration-200 hover:shadow-xl hover:shadow-black/30">
                <div class="flex items-center gap-3 mb-3">
                    <span class="flex items-center justify-center w-9 h-9 rounded-lg bg-neutral-700 text-lg" aria-hidden="true">📊</span>
                    <h3 class="text-base font-bold text-white">Accounting</h3>
                </div>
                <p class="text-neutral-400 text-sm mb-4 leading-relaxed">Full-featured financial management with invoicing, expenses, multi-currency and tax handling.</p>
                <ul class="text-neutral-300 text-sm space-y-1.5 mb-6 flex-1">
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>Invoicing, expenses &amp; payment tracking</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>Chart of accounts management</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>Multi-currency &amp; tax management</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>Financial reports &amp; dashboards</li>
                </ul>
                <a href="https://github.com/liberu-accounting/accounting-laravel" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 text-xs text-neutral-500 hover:text-[#f5c518] transition-colors font-medium">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                    View on GitHub
                </a>
            </div>

            {{-- Automation --}}
            <div class="group bg-neutral-800/60 hover:bg-neutral-800 border border-neutral-700/60 hover:border-[#f5c518]/40 rounded-xl p-6 flex flex-col transition-all duration-200 hover:shadow-xl hover:shadow-black/30">
                <div class="flex items-center gap-3 mb-3">
                    <span class="flex items-center justify-center w-9 h-9 rounded-lg bg-neutral-700 text-lg" aria-hidden="true">⚙️</span>
                    <h3 class="text-base font-bold text-white">Automation</h3>
                </div>
                <p class="text-neutral-400 text-sm mb-4 leading-relaxed">Streamline business processes with visual workflow automation and event-driven triggers.</p>
                <ul class="text-neutral-300 text-sm space-y-1.5 mb-6 flex-1">
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>Visual workflow &amp; process builder</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>Event-driven triggers &amp; actions</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>Task scheduling &amp; automation</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>API integrations &amp; webhooks</li>
                </ul>
                <a href="https://github.com/liberu-automation/automation-laravel" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 text-xs text-neutral-500 hover:text-[#f5c518] transition-colors font-medium">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                    View on GitHub
                </a>
            </div>

            {{-- Billing --}}
            <div class="group bg-neutral-800/60 hover:bg-neutral-800 border border-neutral-700/60 hover:border-[#f5c518]/40 rounded-xl p-6 flex flex-col transition-all duration-200 hover:shadow-xl hover:shadow-black/30">
                <div class="flex items-center gap-3 mb-3">
                    <span class="flex items-center justify-center w-9 h-9 rounded-lg bg-neutral-700 text-lg" aria-hidden="true">💳</span>
                    <h3 class="text-base font-bold text-white">Billing</h3>
                </div>
                <p class="text-neutral-400 text-sm mb-4 leading-relaxed">Subscription and recurring billing management with multiple gateway support.</p>
                <ul class="text-neutral-300 text-sm space-y-1.5 mb-6 flex-1">
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>Subscription &amp; recurring billing</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>Multiple payment gateway support</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>Automated invoice generation</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>Dunning &amp; failed payment handling</li>
                </ul>
                <a href="https://github.com/liberu-billing/billing-laravel" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 text-xs text-neutral-500 hover:text-[#f5c518] transition-colors font-medium">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                    View on GitHub
                </a>
            </div>

            {{-- CRM --}}
            <div class="group bg-neutral-800/60 hover:bg-neutral-800 border border-neutral-700/60 hover:border-[#f5c518]/40 rounded-xl p-6 flex flex-col transition-all duration-200 hover:shadow-xl hover:shadow-black/30">
                <div class="flex items-center gap-3 mb-3">
                    <span class="flex items-center justify-center w-9 h-9 rounded-lg bg-neutral-700 text-lg" aria-hidden="true">🤝</span>
                    <h3 class="text-base font-bold text-white">CRM</h3>
                </div>
                <p class="text-neutral-400 text-sm mb-4 leading-relaxed">Customer relationship management with pipeline tracking, activity logging and analytics.</p>
                <ul class="text-neutral-300 text-sm space-y-1.5 mb-6 flex-1">
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>Contact &amp; lead management</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>Visual sales pipeline tracking</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>Email &amp; activity logging</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>Reports &amp; performance analytics</li>
                </ul>
                <a href="https://github.com/liberu-crm/crm-laravel" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 text-xs text-neutral-500 hover:text-[#f5c518] transition-colors font-medium">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                    View on GitHub
                </a>
            </div>

            {{-- E-commerce --}}
            <div class="group bg-neutral-800/60 hover:bg-neutral-800 border border-neutral-700/60 hover:border-[#f5c518]/40 rounded-xl p-6 flex flex-col transition-all duration-200 hover:shadow-xl hover:shadow-black/30">
                <div class="flex items-center gap-3 mb-3">
                    <span class="flex items-center justify-center w-9 h-9 rounded-lg bg-neutral-700 text-lg" aria-hidden="true">🛒</span>
                    <h3 class="text-base font-bold text-white">E-Commerce</h3>
                </div>
                <p class="text-neutral-400 text-sm mb-4 leading-relaxed">Full-featured online store platform with inventory, payments, orders and marketing tools.</p>
                <ul class="text-neutral-300 text-sm space-y-1.5 mb-6 flex-1">
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>Product catalogue &amp; inventory</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>Multiple payment gateway support</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>Order &amp; shipping management</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>Discount &amp; coupon system</li>
                </ul>
                <a href="https://github.com/liberu-ecommerce/ecommerce-laravel" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 text-xs text-neutral-500 hover:text-[#f5c518] transition-colors font-medium">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                    View on GitHub
                </a>
            </div>

            {{-- Genealogy --}}
            <div class="group bg-neutral-800/60 hover:bg-neutral-800 border border-neutral-700/60 hover:border-[#f5c518]/40 rounded-xl p-6 flex flex-col transition-all duration-200 hover:shadow-xl hover:shadow-black/30">
                <div class="flex items-center gap-3 mb-3">
                    <span class="flex items-center justify-center w-9 h-9 rounded-lg bg-neutral-700 text-lg" aria-hidden="true">🌳</span>
                    <h3 class="text-base font-bold text-white">Genealogy</h3>
                </div>
                <p class="text-neutral-400 text-sm mb-4 leading-relaxed">Family tree and genealogy research platform with GEDCOM, DNA data and document archives.</p>
                <ul class="text-neutral-300 text-sm space-y-1.5 mb-6 flex-1">
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>Interactive family tree builder</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>DNA data integration</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>Photo &amp; document archives</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>GEDCOM import &amp; export</li>
                </ul>
                <a href="https://github.com/liberu-genealogy/genealogy-laravel" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 text-xs text-neutral-500 hover:text-[#f5c518] transition-colors font-medium">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                    View on GitHub
                </a>
            </div>

            {{-- Real Estate --}}
            <div class="group bg-neutral-800/60 hover:bg-neutral-800 border border-neutral-700/60 hover:border-[#f5c518]/40 rounded-xl p-6 flex flex-col transition-all duration-200 hover:shadow-xl hover:shadow-black/30">
                <div class="flex items-center gap-3 mb-3">
                    <span class="flex items-center justify-center w-9 h-9 rounded-lg bg-neutral-700 text-lg" aria-hidden="true">🏠</span>
                    <h3 class="text-base font-bold text-white">Real Estate</h3>
                </div>
                <p class="text-neutral-400 text-sm mb-4 leading-relaxed">Complete real estate management with property listings, lead tracking and market analytics.</p>
                <ul class="text-neutral-300 text-sm space-y-1.5 mb-6 flex-1">
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>Property listing &amp; management</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>Lead &amp; client tracking</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>Appointment &amp; viewing scheduling</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>Market analytics &amp; reporting</li>
                </ul>
                <a href="https://github.com/liberu-real-estate/real-estate-laravel" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 text-xs text-neutral-500 hover:text-[#f5c518] transition-colors font-medium">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                    View on GitHub
                </a>
            </div>

            {{-- CMS --}}
            <div class="group bg-neutral-800/60 hover:bg-neutral-800 border border-neutral-700/60 hover:border-[#f5c518]/40 rounded-xl p-6 flex flex-col transition-all duration-200 hover:shadow-xl hover:shadow-black/30">
                <div class="flex items-center gap-3 mb-3">
                    <span class="flex items-center justify-center w-9 h-9 rounded-lg bg-neutral-700 text-lg" aria-hidden="true">📝</span>
                    <h3 class="text-base font-bold text-white">CMS</h3>
                </div>
                <p class="text-neutral-400 text-sm mb-4 leading-relaxed">Flexible content management system for any website, with SEO tools and multi-language support.</p>
                <ul class="text-neutral-300 text-sm space-y-1.5 mb-6 flex-1">
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>Custom content types &amp; fields</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>Media library &amp; asset management</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>SEO tools &amp; optimisation</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>Multi-language content support</li>
                </ul>
                <a href="https://github.com/liberu-cms/cms-laravel" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 text-xs text-neutral-500 hover:text-[#f5c518] transition-colors font-medium">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                    View on GitHub
                </a>
            </div>

            {{-- Social Network --}}
            <div class="group bg-neutral-800/60 hover:bg-neutral-800 border border-neutral-700/60 hover:border-[#f5c518]/40 rounded-xl p-6 flex flex-col transition-all duration-200 hover:shadow-xl hover:shadow-black/30">
                <div class="flex items-center gap-3 mb-3">
                    <span class="flex items-center justify-center w-9 h-9 rounded-lg bg-neutral-700 text-lg" aria-hidden="true">🌐</span>
                    <h3 class="text-base font-bold text-white">Social Network</h3>
                </div>
                <p class="text-neutral-400 text-sm mb-4 leading-relaxed">Build your own social networking platform with profiles, feeds, groups and real-time messaging.</p>
                <ul class="text-neutral-300 text-sm space-y-1.5 mb-6 flex-1">
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>User profiles &amp; connections</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>News feed &amp; social posts</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>Groups &amp; community features</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5 shrink-0">✦</span>Real-time messaging &amp; notifications</li>
                </ul>
                <a href="https://github.com/liberu-social-network/social-network-laravel" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 text-xs text-neutral-500 hover:text-[#f5c518] transition-colors font-medium">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                    View on GitHub
                </a>
            </div>

        </div>
    </section>

    {{-- CTA Banner --}}
    <section class="py-16 px-4 sm:px-6 lg:px-8 border-t border-neutral-800">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-2xl sm:text-3xl font-bold text-white mb-4">Ready to Get Started?</h2>
            <p class="text-neutral-400 mb-8 text-base sm:text-lg leading-relaxed">
                Whether you need professional support, custom development or want to contribute to our
                open-source community, we'd love to hear from you.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ url('/contact') }}"
                   class="inline-flex items-center gap-2 bg-[#f5c518] hover:bg-yellow-400 text-neutral-900 font-bold px-7 py-3 rounded-lg transition-colors shadow-lg shadow-[#f5c518]/20">
                    Contact Us
                </a>
                <a href="https://github.com/liberusoftware" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 border border-neutral-600 hover:border-neutral-400 text-neutral-300 hover:text-white font-medium px-7 py-3 rounded-lg transition-colors">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/>
                    </svg>
                    GitHub Repositories
                </a>
            </div>
        </div>
    </section>

</div>
@endsection

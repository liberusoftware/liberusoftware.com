@extends('layouts.guest')

@section('page_title', 'Privacy Policy')
@section('meta_description', 'Read the Liberu Software Privacy Policy — how we collect, use and protect your personal data in compliance with UK GDPR.')
@section('og_title', 'Privacy Policy — Liberu Software')
@section('og_description', 'Read the Liberu Software Privacy Policy — how we collect, use and protect your personal data.')

@section('content')
<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24">

    <div class="mb-10">
        <p class="text-[#f5c518] text-sm font-semibold uppercase tracking-widest mb-3">Legal</p>
        <h1 class="text-3xl sm:text-4xl font-extrabold text-white mb-4">Privacy Policy</h1>
        <p class="text-neutral-500 text-sm">Last updated: {{ date('d F Y') }}</p>
    </div>

    <div class="prose prose-sm prose-invert max-w-none space-y-8 text-neutral-400 leading-relaxed">

        <section>
            <h2 class="text-lg font-bold text-white mb-3">1. Who We Are</h2>
            <p>
                Liberu Software Ltd ("<strong class="text-neutral-200">Liberu Software</strong>", "<strong class="text-neutral-200">we</strong>", "<strong class="text-neutral-200">us</strong>" or "<strong class="text-neutral-200">our</strong>") is a company registered in England and Wales, and is part of the Liberu Group.
                We operate the website <a href="https://www.liberusoftware.com" class="text-[#f5c518] hover:underline">www.liberusoftware.com</a> and related services.
                Registered office: <strong class="text-neutral-200">Liberu Group Ltd, 15 Commercial Road, Swindon, Wiltshire, United Kingdom SN1 5NF</strong>.
            </p>
            <p class="mt-2">
                For any data protection enquiries, please contact us at:
                <a href="mailto:support@liberu.co.uk" class="text-[#f5c518] hover:underline">support@liberu.co.uk</a> or
                by telephone on <a href="tel:+441793200950" class="text-[#f5c518] hover:underline">+44 1793 200 950</a>.
            </p>
        </section>

        <hr class="border-neutral-800">

        <section>
            <h2 class="text-lg font-bold text-white mb-3">2. What Data We Collect</h2>
            <p>We may collect and process the following personal data:</p>
            <ul class="mt-3 space-y-2 list-disc list-inside">
                <li><strong class="text-neutral-200">Contact information</strong> — name, email address and telephone number submitted via our contact form.</li>
                <li><strong class="text-neutral-200">Usage data</strong> — IP address, browser type, pages visited and time spent on our website.</li>
                <li><strong class="text-neutral-200">Communications</strong> — records of correspondence when you contact us by email or telephone.</li>
            </ul>
        </section>

        <hr class="border-neutral-800">

        <section>
            <h2 class="text-lg font-bold text-white mb-3">3. How We Use Your Data</h2>
            <p>We use your personal data to:</p>
            <ul class="mt-3 space-y-2 list-disc list-inside">
                <li>Respond to enquiries and provide customer support.</li>
                <li>Process sales and service requests.</li>
                <li>Improve our website and services through analytics.</li>
                <li>Comply with legal obligations.</li>
            </ul>
            <p class="mt-3">
                Our lawful basis for processing is <strong class="text-neutral-200">legitimate interests</strong> (responding to your enquiry)
                and, where applicable, <strong class="text-neutral-200">compliance with a legal obligation</strong>.
            </p>
        </section>

        <hr class="border-neutral-800">

        <section>
            <h2 class="text-lg font-bold text-white mb-3">4. Data Retention</h2>
            <p>
                We retain personal data only for as long as necessary to fulfil the purposes described above,
                or as required by law. Contact form submissions are retained for up to 2 years unless you request earlier deletion.
            </p>
        </section>

        <hr class="border-neutral-800">

        <section>
            <h2 class="text-lg font-bold text-white mb-3">5. Sharing Your Data</h2>
            <p>
                We do not sell, rent or trade your personal data. We may share data with trusted third-party
                service providers (such as email or hosting providers) solely to operate our services, under
                strict contractual obligations consistent with UK GDPR.
            </p>
        </section>

        <hr class="border-neutral-800">

        <section>
            <h2 class="text-lg font-bold text-white mb-3">6. Your Rights</h2>
            <p>Under UK GDPR you have the right to:</p>
            <ul class="mt-3 space-y-2 list-disc list-inside">
                <li>Access the personal data we hold about you.</li>
                <li>Request correction of inaccurate data.</li>
                <li>Request erasure of your data.</li>
                <li>Object to or restrict processing.</li>
                <li>Lodge a complaint with the Information Commissioner's Office (ICO) at <a href="https://ico.org.uk" target="_blank" rel="noopener noreferrer" class="text-[#f5c518] hover:underline">ico.org.uk</a>.</li>
            </ul>
            <p class="mt-3">
                To exercise any of these rights, contact us at
                <a href="mailto:support@liberu.co.uk" class="text-[#f5c518] hover:underline">support@liberu.co.uk</a>.
            </p>
        </section>

        <hr class="border-neutral-800">

        <section>
            <h2 class="text-lg font-bold text-white mb-3">7. Cookies</h2>
            <p>
                Our website uses essential session cookies required for the site to function correctly.
                We do not use tracking or advertising cookies without your consent.
            </p>
        </section>

        <hr class="border-neutral-800">

        <section>
            <h2 class="text-lg font-bold text-white mb-3">8. Changes to This Policy</h2>
            <p>
                We may update this Privacy Policy from time to time. Any changes will be published on this page
                with an updated revision date. We encourage you to review this page periodically.
            </p>
        </section>

        <hr class="border-neutral-800">

        <section>
            <h2 class="text-lg font-bold text-white mb-3">9. Contact</h2>
            <p>
                If you have any questions about this Privacy Policy, please contact us:
            </p>
            <ul class="mt-3 space-y-1">
                <li>Email: <a href="mailto:support@liberu.co.uk" class="text-[#f5c518] hover:underline">support@liberu.co.uk</a></li>
                <li>Phone: <a href="tel:+441793200950" class="text-[#f5c518] hover:underline">+44 1793 200 950</a></li>
            </ul>
        </section>

    </div>
</div>
@endsection

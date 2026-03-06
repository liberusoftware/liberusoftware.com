@extends('layouts.guest')

@section('page_title', 'Terms & Conditions')
@section('meta_description', 'Read the Liberu Software Terms and Conditions governing use of our website and services.')
@section('og_title', 'Terms & Conditions — Liberu Software')
@section('og_description', 'Read the Liberu Software Terms and Conditions governing use of our website and services.')

@section('content')
<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24">

    <div class="mb-10">
        <p class="text-[#f5c518] text-sm font-semibold uppercase tracking-widest mb-3">Legal</p>
        <h1 class="text-3xl sm:text-4xl font-extrabold text-white mb-4">Terms &amp; Conditions</h1>
        <p class="text-neutral-500 text-sm">Last updated: {{ date('d F Y') }}</p>
    </div>

    <div class="space-y-8 text-neutral-400 leading-relaxed">

        <section>
            <h2 class="text-lg font-bold text-white mb-3">1. Agreement to Terms</h2>
            <p>
                By accessing or using the website at <a href="https://www.liberusoftware.com" class="text-[#f5c518] hover:underline">www.liberusoftware.com</a>
                (the "<strong class="text-neutral-200">Site</strong>"), you agree to be bound by these Terms &amp; Conditions.
                If you do not agree, please do not use the Site.
            </p>
        </section>

        <hr class="border-neutral-800">

        <section>
            <h2 class="text-lg font-bold text-white mb-3">2. About Us</h2>
            <p>
                The Site is operated by <strong class="text-neutral-200">Liberu Software Ltd</strong>, a company registered in England and Wales.
                You can contact us at <a href="mailto:support@liberu.co.uk" class="text-[#f5c518] hover:underline">support@liberu.co.uk</a>
                or <a href="tel:+441793200950" class="text-[#f5c518] hover:underline">+44 1793 200 950</a>.
            </p>
        </section>

        <hr class="border-neutral-800">

        <section>
            <h2 class="text-lg font-bold text-white mb-3">3. Use of the Site</h2>
            <p>You agree to use the Site only for lawful purposes and in a way that does not:</p>
            <ul class="mt-3 space-y-2 list-disc list-inside">
                <li>Infringe the rights of any third party.</li>
                <li>Transmit any unsolicited or unauthorised advertising material.</li>
                <li>Attempt to gain unauthorised access to any part of the Site or its related systems.</li>
                <li>Introduce viruses or other malicious or harmful code.</li>
            </ul>
        </section>

        <hr class="border-neutral-800">

        <section>
            <h2 class="text-lg font-bold text-white mb-3">4. Intellectual Property</h2>
            <p>
                All content on this Site, including text, graphics, logos and software code, is the property of
                Liberu Software Ltd or its licensors and is protected by UK and international intellectual property laws.
                You may not reproduce, distribute or create derivative works without our prior written consent.
            </p>
            <p class="mt-3">
                Our open-source software projects are separately licensed under the terms published in their
                respective GitHub repositories (typically the MIT Licence).
            </p>
        </section>

        <hr class="border-neutral-800">

        <section>
            <h2 class="text-lg font-bold text-white mb-3">5. Disclaimer of Warranties</h2>
            <p>
                The Site and its content are provided on an "<strong class="text-neutral-200">as is</strong>" basis without warranties of any kind,
                express or implied. We do not warrant that the Site will be error-free, uninterrupted or free of viruses.
            </p>
        </section>

        <hr class="border-neutral-800">

        <section>
            <h2 class="text-lg font-bold text-white mb-3">6. Limitation of Liability</h2>
            <p>
                To the fullest extent permitted by law, Liberu Software Ltd shall not be liable for any indirect,
                incidental or consequential loss arising from your use of the Site or reliance on any information
                published on it. Our total liability to you shall not exceed £100.
            </p>
        </section>

        <hr class="border-neutral-800">

        <section>
            <h2 class="text-lg font-bold text-white mb-3">7. Third-Party Links</h2>
            <p>
                The Site may contain links to third-party websites. These links are provided for convenience only.
                We have no control over the content of those sites and accept no responsibility for them.
            </p>
        </section>

        <hr class="border-neutral-800">

        <section>
            <h2 class="text-lg font-bold text-white mb-3">8. Governing Law</h2>
            <p>
                These Terms &amp; Conditions are governed by and construed in accordance with the laws of
                <strong class="text-neutral-200">England and Wales</strong>. Any disputes shall be subject to the exclusive jurisdiction
                of the courts of England and Wales.
            </p>
        </section>

        <hr class="border-neutral-800">

        <section>
            <h2 class="text-lg font-bold text-white mb-3">9. Changes to These Terms</h2>
            <p>
                We reserve the right to update these Terms &amp; Conditions at any time. Changes will be posted
                on this page with a revised date. Continued use of the Site after changes constitutes acceptance.
            </p>
        </section>

        <hr class="border-neutral-800">

        <section>
            <h2 class="text-lg font-bold text-white mb-3">10. Contact</h2>
            <p>For questions about these Terms, contact us at:</p>
            <ul class="mt-3 space-y-1">
                <li>Email: <a href="mailto:support@liberu.co.uk" class="text-[#f5c518] hover:underline">support@liberu.co.uk</a></li>
                <li>Phone: <a href="tel:+441793200950" class="text-[#f5c518] hover:underline">+44 1793 200 950</a></li>
            </ul>
        </section>

    </div>
</div>
@endsection

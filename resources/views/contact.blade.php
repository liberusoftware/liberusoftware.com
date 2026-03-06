@extends('layouts.guest')

@section('page_title', 'Contact Us')
@section('meta_description', 'Contact Liberu Software — reach our UK-based team for support, sales enquiries or general questions. Phone: +44 1793 200 950.')
@section('meta_keywords', 'Contact Liberu Software, UK software support, sales enquiry, get in touch')
@section('og_title', 'Contact Liberu Software')
@section('og_description', 'Get in touch with the Liberu Software team for support, sales or general enquiries.')

@section('content')
<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24">

    <div class="grid grid-cols-1 lg:grid-cols-5 gap-12">

        {{-- Left: contact info --}}
        <div class="lg:col-span-2">
            <p class="text-[#f5c518] text-sm font-semibold uppercase tracking-widest mb-3">Get in Touch</p>
            <h1 class="text-3xl sm:text-4xl font-extrabold text-white mb-4 leading-tight">We'd Love to Hear From You</h1>
            <p class="text-neutral-400 leading-relaxed mb-8">
                Whether you have a question about our products, need technical support, or want to discuss a bespoke development project, our UK-based team is ready to help.
            </p>

            <ul class="space-y-5">
                <li class="flex items-start gap-4">
                    <span class="flex items-center justify-center w-9 h-9 rounded-lg bg-neutral-800 shrink-0">
                        <svg class="w-4 h-4 text-[#f5c518]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" /></svg>
                    </span>
                    <div>
                        <p class="text-xs text-neutral-500 uppercase tracking-widest mb-1">Phone</p>
                        <a href="tel:+441793200950" class="text-white font-medium hover:text-[#f5c518] transition-colors">+44 1793 200 950</a>
                    </div>
                </li>
                <li class="flex items-start gap-4">
                    <span class="flex items-center justify-center w-9 h-9 rounded-lg bg-neutral-800 shrink-0">
                        <svg class="w-4 h-4 text-[#f5c518]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg>
                    </span>
                    <div>
                        <p class="text-xs text-neutral-500 uppercase tracking-widest mb-1">Support</p>
                        <a href="mailto:support@liberu.co.uk" class="text-white font-medium hover:text-[#f5c518] transition-colors">support@liberu.co.uk</a>
                    </div>
                </li>
                <li class="flex items-start gap-4">
                    <span class="flex items-center justify-center w-9 h-9 rounded-lg bg-neutral-800 shrink-0">
                        <svg class="w-4 h-4 text-[#f5c518]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg>
                    </span>
                    <div>
                        <p class="text-xs text-neutral-500 uppercase tracking-widest mb-1">Sales</p>
                        <a href="mailto:sales@liberu.co.uk" class="text-white font-medium hover:text-[#f5c518] transition-colors">sales@liberu.co.uk</a>
                    </div>
                </li>
            </ul>
        </div>

        {{-- Right: contact form --}}
        <div class="lg:col-span-3">
            <div class="bg-neutral-800/60 border border-neutral-700/60 rounded-xl p-7 sm:p-8">

                {{-- Error flash (mail failure) --}}
                @if(session('error'))
                <div class="mb-6 flex items-start gap-3 bg-red-900/40 border border-red-700/50 text-red-300 rounded-lg px-4 py-3 text-sm">
                    <svg class="w-5 h-5 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/></svg>
                    {{ session('error') }}
                </div>
                @endif

                {{-- Success message --}}
                @if(session('success'))
                <div class="mb-6 flex items-start gap-3 bg-green-900/40 border border-green-700/50 text-green-300 rounded-lg px-4 py-3 text-sm">
                    <svg class="w-5 h-5 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    {{ session('success') }}
                </div>
                @endif

                {{-- Error messages --}}
                @if($errors->any())
                <div class="mb-6 bg-red-900/40 border border-red-700/50 text-red-300 rounded-lg px-4 py-3 text-sm">
                    <ul class="space-y-1">
                        @foreach($errors->all() as $error)
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/></svg>
                            {{ $error }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form method="POST" action="{{ route('contact.submit') }}">
                    @csrf

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">
                        <div>
                            <label for="name" class="block text-xs font-semibold text-neutral-400 uppercase tracking-widest mb-2">
                                Full Name <span class="text-red-400">*</span>
                            </label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                   placeholder="Jane Smith"
                                   class="w-full bg-neutral-900 border {{ $errors->has('name') ? 'border-red-600' : 'border-neutral-700' }} rounded-lg px-4 py-2.5 text-sm text-white placeholder-neutral-600 focus:outline-none focus:border-[#f5c518] transition-colors">
                        </div>
                        <div>
                            <label for="email" class="block text-xs font-semibold text-neutral-400 uppercase tracking-widest mb-2">
                                Email Address <span class="text-red-400">*</span>
                            </label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                   placeholder="jane@example.com"
                                   class="w-full bg-neutral-900 border {{ $errors->has('email') ? 'border-red-600' : 'border-neutral-700' }} rounded-lg px-4 py-2.5 text-sm text-white placeholder-neutral-600 focus:outline-none focus:border-[#f5c518] transition-colors">
                        </div>
                    </div>

                    <div class="mb-5">
                        <label for="subject" class="block text-xs font-semibold text-neutral-400 uppercase tracking-widest mb-2">
                            Subject <span class="text-red-400">*</span>
                        </label>
                        <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required
                               placeholder="How can we help?"
                               class="w-full bg-neutral-900 border {{ $errors->has('subject') ? 'border-red-600' : 'border-neutral-700' }} rounded-lg px-4 py-2.5 text-sm text-white placeholder-neutral-600 focus:outline-none focus:border-[#f5c518] transition-colors">
                    </div>

                    <div class="mb-5">
                        <label for="enquiry_type" class="block text-xs font-semibold text-neutral-400 uppercase tracking-widest mb-2">
                            Enquiry Type
                        </label>
                        <select id="enquiry_type" name="enquiry_type"
                                class="w-full bg-neutral-900 border border-neutral-700 rounded-lg px-4 py-2.5 text-sm text-white focus:outline-none focus:border-[#f5c518] transition-colors">
                            <option value="" disabled {{ old('enquiry_type') ? '' : 'selected' }}>Select an option</option>
                            <option value="support" {{ old('enquiry_type') === 'support' ? 'selected' : '' }}>Technical Support</option>
                            <option value="sales" {{ old('enquiry_type') === 'sales' ? 'selected' : '' }}>Sales Enquiry</option>
                            <option value="general" {{ old('enquiry_type') === 'general' ? 'selected' : '' }}>General Question</option>
                            <option value="partnership" {{ old('enquiry_type') === 'partnership' ? 'selected' : '' }}>Partnership</option>
                            <option value="other" {{ old('enquiry_type') === 'other' ? 'selected' : '' }}>Other</option>
                        </select>
                    </div>

                    <div class="mb-6">
                        <label for="message" class="block text-xs font-semibold text-neutral-400 uppercase tracking-widest mb-2">
                            Message <span class="text-red-400">*</span>
                        </label>
                        <textarea id="message" name="message" rows="5" required
                                  placeholder="Tell us more about your enquiry…"
                                  class="w-full bg-neutral-900 border {{ $errors->has('message') ? 'border-red-600' : 'border-neutral-700' }} rounded-lg px-4 py-2.5 text-sm text-white placeholder-neutral-600 focus:outline-none focus:border-[#f5c518] transition-colors resize-y">{{ old('message') }}</textarea>
                    </div>

                    <button type="submit"
                            class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-[#f5c518] hover:bg-yellow-400 text-neutral-900 font-bold px-8 py-3 rounded-lg transition-colors shadow-lg shadow-[#f5c518]/20 text-sm">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5"/></svg>
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

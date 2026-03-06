@php $siteSettings = app(\App\Settings\SiteSettings::class); @endphp
<footer class="bg-neutral-900 border-t border-neutral-800 w-full">
    <div class="mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-4">

            {{-- Brand column --}}
            <div class="lg:col-span-1">
                <a href="{{ url('/') }}" class="flex items-center gap-2.5 mb-4" aria-label="Liberu Software home">
                    <img src="{{ asset('logo.svg') }}" alt="Liberu Software" class="h-10 w-auto" />
                </a>
                <p class="text-sm text-neutral-400 leading-relaxed mb-5">
                    Enterprise-grade, open-source Laravel applications built by a UK-based team — ready to deploy for modern businesses worldwide.
                </p>
                {{-- Social media icons --}}
                <div class="flex items-center gap-4 flex-wrap">
                    @if($siteSettings->whatsapp_url)
                    <a href="{{ $siteSettings->whatsapp_url }}" target="_blank" rel="noopener noreferrer"
                        class="text-neutral-500 hover:text-green-400 transition-colors" title="WhatsApp">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                        </svg>
                        <span class="sr-only">WhatsApp</span>
                    </a>
                    @endif
                    @if($siteSettings->youtube_url)
                    <a href="{{ $siteSettings->youtube_url }}" target="_blank" rel="noopener noreferrer"
                        class="text-neutral-500 hover:text-red-500 transition-colors" title="YouTube">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">YouTube</span>
                    </a>
                    @endif
                    @if($siteSettings->facebook_url)
                    <a href="{{ $siteSettings->facebook_url }}" target="_blank" rel="noopener noreferrer"
                        class="text-neutral-500 hover:text-blue-500 transition-colors" title="Facebook">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook</span>
                    </a>
                    @endif
                    @if($siteSettings->instagram_url)
                    <a href="{{ $siteSettings->instagram_url }}" target="_blank" rel="noopener noreferrer"
                        class="text-neutral-500 hover:text-pink-500 transition-colors" title="Instagram">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                        </svg>
                        <span class="sr-only">Instagram</span>
                    </a>
                    @endif
                    @if($siteSettings->twitter_url)
                    <a href="{{ $siteSettings->twitter_url }}" target="_blank" rel="noopener noreferrer"
                        class="text-neutral-500 hover:text-sky-400 transition-colors" title="X (Twitter)">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                        </svg>
                        <span class="sr-only">X (Twitter)</span>
                    </a>
                    @endif
                    @if($siteSettings->linkedin_url)
                    <a href="{{ $siteSettings->linkedin_url }}" target="_blank" rel="noopener noreferrer"
                        class="text-neutral-500 hover:text-blue-400 transition-colors" title="LinkedIn">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                        </svg>
                        <span class="sr-only">LinkedIn</span>
                    </a>
                    @endif
                    @if($siteSettings->github_url)
                    <a href="{{ $siteSettings->github_url }}" target="_blank" rel="noopener noreferrer"
                        class="text-neutral-500 hover:text-white transition-colors" title="GitHub">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub</span>
                    </a>
                    @endif
                </div>
            </div>

            {{-- Liberu Group column --}}
            <div>
                <h2 class="mb-5 text-xs font-semibold tracking-widest text-neutral-500 uppercase">Liberu Group</h2>
                <ul class="space-y-3 text-sm text-neutral-400">
                    <li>
                        <a href="https://www.liberugroup.com" target="_blank" rel="noopener noreferrer"
                           class="hover:text-[#f5c518] transition-colors inline-flex items-center gap-1.5">
                            <svg class="w-3 h-3 text-neutral-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                            Liberu Group
                        </a>
                    </li>
                    <li>
                        <a href="https://www.liberusoftware.com" target="_blank" rel="noopener noreferrer"
                           class="hover:text-[#f5c518] transition-colors inline-flex items-center gap-1.5">
                            <svg class="w-3 h-3 text-neutral-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                            Liberu Software
                        </a>
                    </li>
                    <li>
                        <a href="https://www.liberuservices.com" target="_blank" rel="noopener noreferrer"
                           class="hover:text-[#f5c518] transition-colors inline-flex items-center gap-1.5">
                            <svg class="w-3 h-3 text-neutral-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                            Liberu Services
                        </a>
                    </li>
                    <li>
                        <a href="https://www.liberuhosting.com" target="_blank" rel="noopener noreferrer"
                           class="hover:text-[#f5c518] transition-colors inline-flex items-center gap-1.5">
                            <svg class="w-3 h-3 text-neutral-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                            Liberu Hosting
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Quick Links column --}}
            <div>
                <h2 class="mb-5 text-xs font-semibold tracking-widest text-neutral-500 uppercase">Quick Links</h2>
                <ul class="space-y-3 text-sm text-neutral-400">
                    <li><a href="{{ url('/') }}" class="hover:text-[#f5c518] transition-colors">Home</a></li>
                    <li><a href="{{ url('/about') }}" class="hover:text-[#f5c518] transition-colors">About Us</a></li>
                    <li><a href="{{ url('/contact') }}" class="hover:text-[#f5c518] transition-colors">Contact</a></li>
                    <li><a href="{{ url('/privacy-policy') }}" class="hover:text-[#f5c518] transition-colors">Privacy Policy</a></li>
                    <li><a href="{{ url('/terms') }}" class="hover:text-[#f5c518] transition-colors">Terms &amp; Conditions</a></li>
                    <li>
                        <a href="https://github.com/liberusoftware" target="_blank" rel="noopener noreferrer"
                           class="hover:text-[#f5c518] transition-colors inline-flex items-center gap-1.5">
                            <svg class="w-3 h-3 text-neutral-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                            GitHub
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Contact column --}}
            <div>
                <h2 class="mb-5 text-xs font-semibold tracking-widest text-neutral-500 uppercase">Contact Us</h2>
                <ul class="space-y-3 text-sm text-neutral-400">
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-neutral-600 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" /></svg>
                        <a href="tel:+441793200950" class="hover:text-[#f5c518] transition-colors">+44 1793 200 950</a>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-neutral-600 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg>
                        <a href="mailto:support@liberu.co.uk" class="hover:text-[#f5c518] transition-colors">support@liberu.co.uk</a>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-neutral-600 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg>
                        <a href="mailto:sales@liberu.co.uk" class="hover:text-[#f5c518] transition-colors">sales@liberu.co.uk</a>
                    </li>
                    @if($siteSettings->site_address ?? '')
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-neutral-600 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg>
                        <span>{{ $siteSettings->site_address }}</span>
                    </li>
                    @endif
                </ul>
            </div>

        </div>

        <hr class="my-8 border-neutral-800" />

        <div class="flex flex-col items-center gap-3 sm:flex-row sm:justify-between text-xs text-neutral-500">
            <span>
                {{ $siteSettings->footer_copyright ?? ('© ' . now()->year . ' Liberu Group Ltd. All Rights Reserved.') }}
            </span>
            <div class="flex items-center gap-4">
                <a href="{{ url('/privacy-policy') }}" class="hover:text-neutral-300 transition-colors">Privacy Policy</a>
                <span aria-hidden="true">·</span>
                <a href="{{ url('/terms') }}" class="hover:text-neutral-300 transition-colors">Terms &amp; Conditions</a>
                <span aria-hidden="true">·</span>
                <a href="{{ url('/contact') }}" class="hover:text-neutral-300 transition-colors">Contact</a>
            </div>
        </div>

    </div>
</footer>

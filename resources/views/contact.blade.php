@extends('layouts.app')

@section('title', 'Contact | John Possik Kapsalon Doetinchem — Bel, app of mail')
@section('meta_description', 'Neem contact op met John Possik Kapsalon in Doetinchem: bel 06 84 81 67 37, stuur een WhatsApp of gebruik het contactformulier. Dr. Huber Noodtstraat 24, Doetinchem.')
@section('meta_keywords', 'contact kapsalon doetinchem, afspraak kapper doetinchem, openingstijden kapsalon doetinchem, john possik contact')

@section('content')
        {{-- Pagina hero --}}
        <div class="relative">
            <div class="w-full h-fit p-3 relative z-2">
                <div class="w-full h-[65vh] md:h-[60vh] min-h-[480px] relative overflow-hidden rounded">
                    <video autoplay playsinline webkit-playsinline muted loop preload="auto" class="absolute inset-0 w-full h-full object-cover"><source src="/assets/intro.mp4" type="video/mp4"></video>
                    <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/70 to-black/40"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    <div class="absolute inset-0 flex items-end justify-center pb-10">
                        <div class="max-w-7xl w-full text-left px-4">
                            <p class="text-primary uppercase tracking-widest text-sm mb-4 md:mb-6 font-sans font-medium">Contact</p>
                            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-wide">We staan<br><span class="text-primary">voor je klaar.</span></h1>
                            <p class="text-white/70 font-sans text-sm md:text-base max-w-xl mt-4 md:mt-6 leading-relaxed">Vragen over een behandeling, een afspraak verzetten of gewoon even overleggen over je haar? Bel, app of stuur een bericht — we reageren zo snel mogelijk.</p>
                            <div class="flex flex-col sm:flex-row gap-3 md:gap-4 mt-6 md:mt-8">
                                <a href="https://possik.salonized.com/widget_bookings/new" target="_blank" rel="noopener" class="rounded bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 md:px-8 py-4 hover:bg-[#d4c4ad] transition text-center">Maak een Afspraak</a>
                                <a href="tel:+31684816737" class="rounded border border-white/40 text-white font-sans font-semibold text-xs uppercase tracking-widest px-6 md:px-8 py-4 hover:bg-white/10 transition text-center">Bel Ons</a>
                            </div>
                            <div class="hidden md:flex items-center gap-3 mt-10">
                                <span class="border border-white/20 bg-black/40 backdrop-blur-sm rounded-full px-4 py-2 text-white/70 font-sans text-[11px] uppercase tracking-widest">06 84 81 67 37</span>
                                <span class="border border-white/20 bg-black/40 backdrop-blur-sm rounded-full px-4 py-2 text-white/70 font-sans text-[11px] uppercase tracking-widest">Dr. Huber Noodtstraat 24</span>
                                <span class="border border-white/20 bg-black/40 backdrop-blur-sm rounded-full px-4 py-2 text-white/70 font-sans text-[11px] uppercase tracking-widest">Ma t/m za geopend</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4"><div class="h-px bg-gradient-to-r from-transparent via-primary/25 to-transparent"></div></div>

        {{-- Contact kanalen --}}
        <section class="py-12 md:py-24 relative overflow-hidden">
            <div class="pointer-events-none absolute -top-24 left-1/2 -translate-x-1/2 w-[900px] h-[450px] bg-[radial-gradient(ellipse_at_center,_rgba(187,169,143,0.07)_0%,_transparent_70%)]"></div>
            <div class="max-w-7xl mx-auto px-4 relative z-10">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="text-center border border-white/10 rounded bg-gradient-to-b from-white/[0.04] to-transparent p-8 hover:border-primary/30 transition">
                        <div class="w-12 h-12 mx-auto mb-4 flex items-center justify-center border border-primary/60 bg-primary/10 rounded-full shadow-[0_0_25px_rgba(187,169,143,0.15)]">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/></svg>
                        </div>
                        <h3 class="text-white font-sans font-semibold text-sm uppercase tracking-widest mb-2">Bellen</h3>
                        <p class="text-white/60 font-sans text-sm leading-relaxed mb-6">Het snelst voor een afspraak of een korte vraag. Ma t/m za bereikbaar tijdens openingstijden.</p>
                        <a href="tel:+31684816737" class="inline-block rounded bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 hover:bg-[#d4c4ad] transition">06 84 81 67 37</a>
                    </div>
                    <div class="text-center border border-white/10 rounded bg-gradient-to-b from-white/[0.04] to-transparent p-8 hover:border-primary/30 transition">
                        <div class="w-12 h-12 mx-auto mb-4 flex items-center justify-center border border-primary/60 bg-primary/10 rounded-full shadow-[0_0_25px_rgba(187,169,143,0.15)]">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z"/></svg>
                        </div>
                        <h3 class="text-white font-sans font-semibold text-sm uppercase tracking-widest mb-2">WhatsApp</h3>
                        <p class="text-white/60 font-sans text-sm leading-relaxed mb-6">Stuur een appje wanneer het jou uitkomt, bijvoorbeeld met een foto van het kapsel dat je wilt.</p>
                        <a href="https://wa.me/31684816737" target="_blank" class="inline-block rounded border border-white/20 text-white font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 hover:border-primary hover:text-primary transition">Start een chat</a>
                    </div>
                    <div class="text-center border border-white/10 rounded bg-gradient-to-b from-white/[0.04] to-transparent p-8 hover:border-primary/30 transition">
                        <div class="w-12 h-12 mx-auto mb-4 flex items-center justify-center border border-primary/60 bg-primary/10 rounded-full shadow-[0_0_25px_rgba(187,169,143,0.15)]">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
                        </div>
                        <h3 class="text-white font-sans font-semibold text-sm uppercase tracking-widest mb-2">E-mail</h3>
                        <p class="text-white/60 font-sans text-sm leading-relaxed mb-6">Voor uitgebreidere vragen of zakelijke verzoeken. We reageren binnen één werkdag.</p>
                        <a href="mailto:info@jpkapsalon.nl" class="inline-block rounded border border-white/20 text-white font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 hover:border-primary hover:text-primary transition">Mail ons</a>
                    </div>
                </div>
            </div>
        </section>

        {{-- Formulier + bezoekinfo --}}
        <section id="bericht" class="py-16 md:py-28 bg-gradient-to-b from-[#0d0a07] via-[#070604] to-black border-y border-white/5 relative overflow-hidden">
            <div class="pointer-events-none absolute top-0 left-1/4 w-[600px] h-[600px] bg-[radial-gradient(circle,_rgba(187,169,143,0.08)_0%,_transparent_70%)]"></div>
            <div class="max-w-7xl mx-auto px-4 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">
                    {{-- Formulier --}}
                    <div>
                        <p class="text-primary uppercase tracking-widest text-sm mb-4 font-sans font-medium">Stuur een bericht</p>
                        <h2 class="font-display text-3xl md:text-4xl font-bold text-white tracking-wide mb-6">Laat iets van je horen</h2>

                        @if (session('success'))
                            <div class="flex items-start gap-3 border border-primary/40 bg-primary/10 rounded p-4 mb-6">
                                <svg class="w-5 h-5 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                <p class="text-white/80 font-sans text-sm leading-relaxed">{{ session('success') }}</p>
                            </div>
                        @endif

                        <form method="POST" action="/contact" class="space-y-4">
                            @csrf
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label for="naam" class="block text-white/70 font-sans text-xs uppercase tracking-widest mb-2">Naam *</label>
                                    <input type="text" id="naam" name="naam" value="{{ old('naam') }}" required class="w-full bg-white/[0.04] border border-white/10 rounded px-4 py-3 text-white font-sans text-sm placeholder-white/30 focus:border-primary focus:outline-none transition" placeholder="Je naam">
                                    @error('naam')<p class="text-primary font-sans text-xs mt-2">{{ $message }}</p>@enderror
                                </div>
                                <div>
                                    <label for="email" class="block text-white/70 font-sans text-xs uppercase tracking-widest mb-2">E-mail *</label>
                                    <input type="email" id="email" name="email" value="{{ old('email') }}" required class="w-full bg-white/[0.04] border border-white/10 rounded px-4 py-3 text-white font-sans text-sm placeholder-white/30 focus:border-primary focus:outline-none transition" placeholder="jij@voorbeeld.nl">
                                    @error('email')<p class="text-primary font-sans text-xs mt-2">{{ $message }}</p>@enderror
                                </div>
                            </div>
                            <div>
                                <label for="telefoon" class="block text-white/70 font-sans text-xs uppercase tracking-widest mb-2">Telefoon <span class="text-white/30 normal-case">(optioneel)</span></label>
                                <input type="tel" id="telefoon" name="telefoon" value="{{ old('telefoon') }}" class="w-full bg-white/[0.04] border border-white/10 rounded px-4 py-3 text-white font-sans text-sm placeholder-white/30 focus:border-primary focus:outline-none transition" placeholder="06 12 34 56 78">
                                @error('telefoon')<p class="text-primary font-sans text-xs mt-2">{{ $message }}</p>@enderror
                            </div>
                            <div>
                                <label for="bericht" class="block text-white/70 font-sans text-xs uppercase tracking-widest mb-2">Bericht *</label>
                                <textarea id="bericht" name="bericht" rows="5" required class="w-full bg-white/[0.04] border border-white/10 rounded px-4 py-3 text-white font-sans text-sm placeholder-white/30 focus:border-primary focus:outline-none transition resize-none" placeholder="Waar kunnen we je mee helpen?">{{ old('bericht') }}</textarea>
                                @error('bericht')<p class="text-primary font-sans text-xs mt-2">{{ $message }}</p>@enderror
                            </div>
                            <div class="flex flex-col sm:flex-row gap-3 md:gap-4 pt-2">
                                <button type="submit" class="rounded bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 md:px-8 py-4 hover:bg-[#d4c4ad] transition text-center">Verstuur bericht</button>
                                <a href="tel:+31684816737" class="rounded border border-white/20 text-white font-sans font-semibold text-xs uppercase tracking-widest px-6 md:px-8 py-4 hover:border-primary hover:text-primary transition text-center">Liever bellen?</a>
                            </div>
                        </form>
                    </div>

                    {{-- Bezoekinfo --}}
                    <div>
                        <p class="text-primary uppercase tracking-widest text-sm mb-4 font-sans font-medium">Bezoek de salon</p>
                        <h2 class="font-display text-3xl md:text-4xl font-bold text-white tracking-wide mb-6">Openingstijden & locatie</h2>
                        <ul class="space-y-3 font-sans text-sm border border-white/10 rounded bg-gradient-to-b from-white/[0.04] to-transparent p-6 mb-6">
                            <li class="flex justify-between"><span class="text-white/50">Maandag</span><span class="text-white/70">09:00 – 18:00</span></li>
                            <li class="flex justify-between"><span class="text-white/50">Dinsdag</span><span class="text-white/70">09:00 – 18:00</span></li>
                            <li class="flex justify-between"><span class="text-white/50">Woensdag</span><span class="text-white/70">09:00 – 18:00</span></li>
                            <li class="flex justify-between"><span class="text-white/50">Donderdag</span><span class="text-white/70">09:00 – 18:00</span></li>
                            <li class="flex justify-between"><span class="text-white/50">Vrijdag</span><span class="text-white/70">09:00 – 18:00</span></li>
                            <li class="flex justify-between"><span class="text-white/50">Zaterdag</span><span class="text-white/70">09:00 – 17:00</span></li>
                            <li class="flex justify-between"><span class="text-white/50">Zondag</span><span class="text-white/40">Gesloten</span></li>
                        </ul>
                        <div class="relative mb-6">
                            <iframe data-map-src="https://www.google.com/maps?q=Dr.+Huber+Noodtstraat+24,+7001+DW+Doetinchem&output=embed" class="w-full h-56 md:h-64 rounded border-0 grayscale invert-[0.92] contrast-[0.9] bg-[#0a0908]" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Locatie John Possik Kapsalon"></iframe>
                            <div class="map-consent absolute inset-0 rounded bg-[#0a0908] flex flex-col items-center justify-center gap-4 px-6 text-center">
                                <p class="text-white/50 font-sans text-sm leading-relaxed">De routekaart wordt geladen via Google Maps.<br>Daarvoor is jouw toestemming nodig.</p>
                                <button type="button" class="map-load-btn rounded bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 hover:bg-[#d4c4ad] transition">Kaart laden</button>
                            </div>
                            <div class="pointer-events-none absolute inset-0 rounded ring-1 ring-inset ring-white/10"></div>
                        </div>
                        <p class="text-white/60 font-sans text-sm leading-relaxed mb-6 flex items-start gap-3">
                            <svg class="w-4 h-4 text-primary mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 0115 0z"/></svg>
                            <span>Dr. Huber Noodtstraat 24, 7001 DW Doetinchem<br>Op loopafstand van het centrum, parkeren om de hoek.</span>
                        </p>
                        <div class="flex flex-col sm:flex-row gap-3 md:gap-4">
                            <a href="https://maps.google.com/?q=Dr.+Huber+Noodtstraat+24,+7001+DW+Doetinchem" target="_blank" class="rounded bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 md:px-8 py-4 hover:bg-[#d4c4ad] transition text-center">Route plannen</a>
                            <a href="https://possik.salonized.com/widget_bookings/new" target="_blank" rel="noopener" class="rounded border border-white/20 text-white font-sans font-semibold text-xs uppercase tracking-widest px-6 md:px-8 py-4 hover:border-primary hover:text-primary transition text-center">Maak een Afspraak</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- FAQ verwijzing --}}
        <section class="py-16 md:py-24 relative overflow-hidden">
            <div class="pointer-events-none absolute -top-32 left-1/2 -translate-x-1/2 w-[800px] h-[400px] bg-[radial-gradient(ellipse_at_center,_rgba(187,169,143,0.06)_0%,_transparent_70%)]"></div>
            <div class="max-w-7xl mx-auto px-4 relative z-10">
                <div class="w-full bg-primary rounded flex flex-col md:flex-row items-center justify-between px-6 md:px-8 py-6 md:py-8 gap-4 text-center md:text-left">
                    <div>
                        <h2 class="font-display text-2xl md:text-3xl font-bold text-black">Misschien staat je antwoord er al tussen</h2>
                        <p class="text-black/70 font-sans text-sm mt-1">Bekijk de veelgestelde vragen over afspraken, behandelingen en meer.</p>
                    </div>
                    <div class="flex items-center gap-3 md:gap-4 w-full md:w-auto flex-shrink-0">
                        <a href="/#faq" class="flex-1 md:flex-none text-center bg-black text-primary font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 rounded hover:bg-black/80 transition">Bekijk de FAQ</a>
                        <a href="tel:+31684816737" class="flex-1 md:flex-none text-center border border-black text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 rounded hover:bg-black/10 transition">Bel Ons</a>
                    </div>
                </div>
            </div>
        </section>
@endsection

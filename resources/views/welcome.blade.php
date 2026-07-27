@extends('layouts.app')

@section('title', 'Kapsalon Doetinchem — John Possik | Knippen, Kleuren & Treatments')
@section('meta_description', 'Dé kapsalon in Doetinchem voor dames, heren en kinderen. Sinds 2020 hét adres voor knippen, kleuren, styling en luxe treatments zoals Botox Caviar en Plasma. Boek online je afspraak.')
@section('meta_keywords', 'kapsalon doetinchem, kapper doetinchem, herenkapper doetinchem, dameskapper doetinchem, kinderkapper doetinchem, john possik kapsalon')

@section('content')
        <div class="relative">
            <div class="w-full h-fit p-3 relative z-2">
                <div class="w-full h-[90vh] md:h-[80vh] z-2 relative overflow-visible">
                    <div class="w-full h-full absolute z-3 rounded bg-gradient-to-r from-black/90 via-black/70 to-black/40"></div>
                    <video autoplay playsinline webkit-playsinline muted loop preload="auto" class="absolute z-2 w-full h-full object-cover rounded"><source src="/assets/intro.mp4" type="video/mp4"></video>
                    <div class="absolute z-5 inset-0 flex items-center justify-center">
                        <div class="max-w-7xl w-full text-left px-4">
                            <p class="text-primary uppercase tracking-widest text-sm mb-6 font-sans font-medium">Kapsalon in Doetinchem</p>
                            <h1 class="font-display text-3xl md:text-5xl lg:text-6xl font-bold text-white tracking-wide">Dé Kapsalon voor<br><span class="text-primary">mannen en vrouwen</span><br>met stijl.</h1>
                            <p class="text-white/70 font-sans text-sm md:text-base max-w-xl mt-4 md:mt-6 leading-relaxed">Al sinds 2020 dé plek in Doetinchem waar vakmanschap, persoonlijk advies en oog voor detail samenkomen. Voor een knipbeurt, styling of kleurbehandeling. Bij John Possik ben je in goede handen.</p>
                            <div class="flex flex-col sm:flex-row gap-3 md:gap-4 mt-6 md:mt-8">
                                <a href="https://possik.salonized.com/widget_bookings/new" target="_blank" rel="noopener" class="rounded bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 md:px-8 py-4 hover:bg-[#d4c4ad] transition text-center">Maak een Afspraak</a>
                                <a href="/diensten" class="rounded border border-white text-white font-sans font-semibold text-xs uppercase tracking-widest px-6 md:px-8 py-4 hover:bg-white/10 transition text-center">Onze Diensten</a>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-7xl w-full absolute z-4 left-0 right-0 mx-auto bottom-0 translate-y-1/2 px-4">
                        <div class="w-full bg-primary rounded flex flex-col md:flex-row items-center justify-between px-6 md:px-8 py-4 md:py-5 gap-4">
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                <span class="text-black font-sans font-semibold text-sm uppercase tracking-widest">Snel een afspraak maken?</span>
                            </div>
                            <div class="flex items-center gap-3 md:gap-4 w-full md:w-auto">
                                <a href="tel:+31684816737" class="flex-1 md:flex-none text-center bg-black text-primary font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 hover:bg-black/80 transition">Bel Ons</a>
                                <a href="https://possik.salonized.com/widget_bookings/new" target="_blank" rel="noopener" class="flex-1 md:flex-none text-center border border-black text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 hover:bg-black/10 transition">Reserveren</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="relative overflow-hidden">
            <div class="pointer-events-none absolute -top-24 left-1/2 -translate-x-1/2 w-[900px] h-[450px] bg-[radial-gradient(ellipse_at_center,_rgba(187,169,143,0.08)_0%,_transparent_70%)]"></div>
            <div class="max-w-7xl mx-auto px-4 pt-10 pb-16 md:pb-32 relative z-10">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 border border-white/10 rounded bg-gradient-to-b from-white/[0.05] to-white/[0.01] backdrop-blur-sm shadow-[0_30px_60px_-30px_rgba(0,0,0,0.9)] p-6 md:p-8">
                    <div class="text-center">
                        <div class="w-12 h-12 mx-auto mb-4 flex items-center justify-center border border-primary/60 bg-primary/10 rounded-full shadow-[0_0_25px_rgba(187,169,143,0.15)]">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <h3 class="text-white font-sans font-semibold text-sm uppercase tracking-widest mb-2">Vakmanschap</h3>
                        <p class="text-white/60 font-sans text-sm leading-relaxed">Jarenlange ervaring in knippen, stylen en kleuren voor een resultaat dat bij jou past.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 mx-auto mb-4 flex items-center justify-center border border-primary/60 bg-primary/10 rounded-full shadow-[0_0_25px_rgba(187,169,143,0.15)]">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <h3 class="text-white font-sans font-semibold text-sm uppercase tracking-widest mb-2">Zonder Wachten</h3>
                        <p class="text-white/60 font-sans text-sm leading-relaxed">Plan eenvoudig online of bel direct. Wij werken op afspraak zodat jij nooit hoeft te wachten.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 mx-auto mb-4 flex items-center justify-center border border-primary/60 bg-primary/10 rounded-full shadow-[0_0_25px_rgba(187,169,143,0.15)]">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                        </div>
                        <h3 class="text-white font-sans font-semibold text-sm uppercase tracking-widest mb-2">Persoonlijk Advies</h3>
                        <p class="text-white/60 font-sans text-sm leading-relaxed">Elke klant is uniek. Wij luisteren naar jouw wensen en geven eerlijk advies over jouw haar.</p>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-3 md:gap-4 mt-8 md:mt-10">
                    <a href="https://possik.salonized.com/widget_bookings/new" target="_blank" rel="noopener" class="rounded bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 hover:bg-[#d4c4ad] transition text-center">Maak een Afspraak</a>
                    <a href="tel:+31684816737" class="rounded border border-white/20 text-white font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 hover:border-primary hover:text-primary transition text-center">Bel Ons</a>
                </div>
            </div>
        </section>

        <div class="max-w-7xl mx-auto px-4"><div class="h-px bg-gradient-to-r from-transparent via-primary/25 to-transparent"></div></div>

        {{-- Diensten --}}
        <section id="diensten" class="py-16 md:py-32 relative overflow-hidden">
            <div class="pointer-events-none absolute top-0 -right-64 w-[700px] h-[700px] bg-[radial-gradient(circle,_rgba(187,169,143,0.05)_0%,_transparent_70%)]"></div>
            <div class="pointer-events-none absolute bottom-0 -left-64 w-[600px] h-[600px] bg-[radial-gradient(circle,_rgba(187,169,143,0.04)_0%,_transparent_70%)]"></div>
            <div class="max-w-7xl mx-auto px-4 relative z-10">
                <p class="text-primary uppercase tracking-widest text-sm mb-4 font-sans font-medium">Wat wij doen</p>
                <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-16 gap-6">
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-white tracking-wide">Onze Diensten & Producten</h2>
                    <div class="flex gap-3 flex-shrink-0">
                        <a href="https://possik.salonized.com/widget_bookings/new" target="_blank" rel="noopener" class="bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 rounded hover:bg-[#d4c4ad] transition">Afspraak maken</a>
                        <a href="tel:+31684816737" class="border border-white/20 text-white font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 rounded hover:border-primary hover:text-primary transition">Bel nu</a>
                    </div>
                </div>

                {{-- Diensten grid --}}
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 auto-rows-[280px]">
                    {{-- Knippen - groot blok --}}
                    <a href="/diensten" class="md:col-span-2 md:row-span-2 relative rounded overflow-hidden group border-2 border-transparent hover:border-primary transition">
                        <img src="/images/salon1.jpeg" alt="Knippen & Stylen" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
                        <div class="relative z-10 h-full flex flex-col justify-end p-8">
                            <h3 class="font-display text-2xl font-bold text-white mb-2">Knippen & Stylen</h3>
                            <p class="text-white/70 font-sans text-sm leading-relaxed">Voor dames, heren en kinderen. Van een klassieke coupe tot een moderne look. Wij luisteren naar jouw wensen en creëren een stijl die bij jou past.</p>
                            <div class="flex gap-3 mt-4">
                                <span class="text-xs text-primary font-sans uppercase tracking-widest border border-primary/30 px-3 py-1 rounded-full">Dames</span>
                                <span class="text-xs text-primary font-sans uppercase tracking-widest border border-primary/30 px-3 py-1 rounded-full">Heren</span>
                                <span class="text-xs text-primary font-sans uppercase tracking-widest border border-primary/30 px-3 py-1 rounded-full">Kinderen</span>
                            </div>
                        </div>
                    </a>

                    {{-- Kleuren & Verven --}}
                    <a href="/diensten" class="md:col-span-2 relative rounded overflow-hidden group border-2 border-transparent hover:border-primary transition">
                        <img src="/images/salon2.jpeg" alt="Kleuren & Verven" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
                        <div class="relative z-10 h-full flex flex-col justify-end p-8">
                            <h3 class="font-display text-2xl font-bold text-white mb-2">Kleuren & Verven</h3>
                            <p class="text-white/70 font-sans text-sm leading-relaxed">Highlights, lowlights, balayage of volledige kleuring. Wij werken met hoogwaardige producten voor een prachtig en langdurig resultaat.</p>
                        </div>
                    </a>

                    {{-- Behandelingen --}}
                    <a href="/diensten" class="md:col-span-2 relative rounded overflow-hidden group border-2 border-transparent hover:border-primary transition">
                        <img src="/images/salon3.jpeg" alt="Behandelingen" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
                        <div class="relative z-10 h-full flex flex-col justify-end p-8">
                            <h3 class="font-display text-xl font-bold text-white mb-2">Behandelingen</h3>
                            <p class="text-white/70 font-sans text-sm leading-relaxed">Plasma, botox caviar en deep conditioning voor gezond en stralend haar.</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        {{-- Over John --}}
        <section id="over-ons" class="py-16 md:py-32 bg-gradient-to-b from-[#0d0a07] via-[#070604] to-black border-y border-white/5 relative overflow-hidden">
            <div class="pointer-events-none absolute top-0 left-1/4 w-[600px] h-[600px] bg-[radial-gradient(circle,_rgba(187,169,143,0.09)_0%,_transparent_70%)]"></div>
            <div class="pointer-events-none absolute bottom-0 right-0 w-[400px] h-[400px] bg-[radial-gradient(circle,_rgba(187,169,143,0.06)_0%,_transparent_70%)]"></div>
            <div class="max-w-7xl mx-auto px-4 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div class="relative">
                        <img src="/images/salon-main.jpeg" alt="John Possik Kapsalon Doetinchem" class="w-full rounded">
                        <div class="absolute -bottom-6 -left-6 w-52 h-52 rounded overflow-hidden border-4 border-black hidden lg:block">
                            <img src="/assets/john.webp" alt="John Possik" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div>
                        <p class="text-primary uppercase tracking-widest text-sm mb-4 font-sans font-medium">Over de eigenaar</p>
                        <h2 class="font-display text-4xl font-bold text-white tracking-wide mb-8">John Possik</h2>
                        <p class="text-white/70 font-sans text-base leading-relaxed mb-6">In 2020 opende John Possik de deuren van zijn eigen kapsalon aan de Dr. Huber Noodtstraat 24 in Doetinchem. Gedreven door een passie voor het vak en een oog voor detail, bouwde hij een salon waar kwaliteit en persoonlijke aandacht centraal staan.</p>
                        <p class="text-white/70 font-sans text-base leading-relaxed mb-8">Of je nu komt voor een knipbeurt, kleuring of styling. John neemt de tijd om te luisteren naar jouw wensen en geeft eerlijk advies. Dat persoonlijke is wat klanten steeds weer terugbrengt.</p>
                        <div class="flex flex-wrap gap-6 md:gap-8 mb-8">
                            <div>
                                <span class="font-display text-2xl font-bold text-primary">2020</span>
                                <span class="block text-white/50 font-sans text-xs uppercase tracking-widest mt-1">Opgericht</span>
                            </div>
                            <div>
                                <span class="font-display text-2xl font-bold text-primary">1000+</span>
                                <span class="block text-white/50 font-sans text-xs uppercase tracking-widest mt-1">Tevreden klanten</span>
                            </div>
                            <div>
                                <span class="font-display text-2xl font-bold text-primary">4.9</span>
                                <span class="block text-white/50 font-sans text-xs uppercase tracking-widest mt-1">Google score</span>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-3 md:gap-4">
                            <a href="https://possik.salonized.com/widget_bookings/new" target="_blank" rel="noopener" class="rounded bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 md:px-8 py-4 hover:bg-[#d4c4ad] transition text-center">Maak een Afspraak</a>
                            <a href="/over-ons" class="rounded border border-white/30 text-white font-sans font-semibold text-xs uppercase tracking-widest px-6 md:px-8 py-4 hover:bg-white/10 transition text-center">Meer over ons</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Producten --}}
        <section id="producten" class="py-16 md:py-32 relative overflow-hidden">
            <div class="pointer-events-none absolute -top-32 right-1/4 w-[600px] h-[600px] bg-[radial-gradient(circle,_rgba(187,169,143,0.05)_0%,_transparent_70%)]"></div>
            <div class="max-w-7xl mx-auto px-4 relative z-10">
                <div class="flex items-end justify-between mb-8 md:mb-16">
                    <div>
                        <div class="flex flex-wrap items-center gap-3 mb-4">
                            <p class="text-primary uppercase tracking-widest text-sm font-sans font-medium">Webshop</p>
                            <span class="inline-flex items-center gap-1.5 border border-primary/30 bg-primary/10 rounded-full px-3 py-1">
                                <span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
                                <span class="text-primary font-sans text-[10px] uppercase tracking-widest">Binnenkort beschikbaar</span>
                            </span>
                        </div>
                        <h2 class="font-display text-3xl md:text-4xl font-bold text-white tracking-wide">Onze Producten</h2>
                        <p class="text-white/50 font-sans text-sm mt-3 max-w-md leading-relaxed">Onze webshop is in aanbouw. Binnenkort bestel je hier onze premium producten — tot die tijd zijn ze gewoon verkrijgbaar in de salon.</p>
                    </div>
                    <div class="hidden md:flex gap-2">
                        <button onclick="document.getElementById('carousel').scrollBy({left: -300, behavior: 'smooth'})" class="w-12 h-12 rounded-full border border-white/20 flex items-center justify-center text-white hover:border-primary hover:text-primary transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M15 19l-7-7 7-7"/></svg>
                        </button>
                        <button onclick="document.getElementById('carousel').scrollBy({left: 300, behavior: 'smooth'})" class="w-12 h-12 rounded-full border border-white/20 flex items-center justify-center text-white hover:border-primary hover:text-primary transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"/></svg>
                        </button>
                    </div>
                </div>

                <div id="carousel" class="flex gap-4 overflow-x-auto scroll-smooth snap-x snap-mandatory scrollbar-hide pb-4" style="-ms-overflow-style:none;scrollbar-width:none;">
                    @for ($i = 0; $i < 8; $i++)
                    <div class="w-[70vw] sm:w-[calc(50%-8px)] lg:w-[calc(25%-12px)] flex-shrink-0 snap-start rounded overflow-hidden border border-white/10 hover:border-primary transition group bg-[#0a0a09]">
                        <div class="aspect-square overflow-hidden relative bg-[#111]">
                            <img src="/assets/john-bril.webp" alt="JP Smooth Vision - Black Silver" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        </div>
                        <div class="p-4">
                            <span class="text-primary font-sans text-[10px] uppercase tracking-widest">JP Eyewear</span>
                            <h3 class="text-white font-sans font-semibold text-sm mt-1">Smooth Vision - Black Silver</h3>
                            <p class="text-white/40 font-sans text-xs mt-0.5">Unisex</p>
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-white font-display text-lg font-bold">€49,95</span>
                            </div>
                            <button disabled class="w-full mt-3 border border-white/15 text-white/40 font-sans font-semibold text-xs uppercase tracking-widest py-3 rounded cursor-not-allowed flex items-center justify-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                Binnenkort verkrijgbaar
                            </button>
                        </div>
                    </div>
                    @endfor
                </div>
                <div class="w-full h-[300px] md:h-[250px] relative overflow-hidden rounded mt-6">
                    <div class="w-full h-full absolute z-2 bg-black/50"></div>
                    <video autoplay playsinline webkit-playsinline muted loop preload="auto" class="w-full h-full object-cover absolute z-1"><source src="/assets/intro2.mp4" type="video/mp4"></video>
                    <div class="absolute inset-0 z-3 flex flex-col md:flex-row items-center justify-center md:justify-between px-6 md:px-12 gap-4 text-center md:text-left">
                        <div>
                            <h3 class="text-white font-display text-xl md:text-3xl font-bold">Onze webshop opent binnenkort</h3>
                            <p class="text-white/60 font-sans text-xs md:text-sm mt-2">Premium producten voor de moderne man & vrouw — tot die tijd verkrijgbaar in de salon</p>
                        </div>
                        <div class="flex flex-col items-center md:items-end gap-3 flex-shrink-0">
                            <span class="inline-flex items-center gap-2 border border-primary/50 bg-black/40 text-primary font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 rounded">
                                <span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
                                Binnenkort online
                            </span>
                            <div class="flex items-center gap-3">
                                <a href="https://possik.salonized.com/widget_bookings/new" target="_blank" rel="noopener" class="rounded bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 hover:bg-[#d4c4ad] transition">Maak een Afspraak</a>
                                <a href="tel:+31684816737" class="rounded border border-white/30 text-white font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 hover:bg-white/10 transition">Bel Ons</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- FAQ Sectie --}}
        <section id="faq" class="py-16 md:py-32 relative overflow-hidden">
            <div class="pointer-events-none absolute top-1/4 -left-64 w-[600px] h-[600px] bg-[radial-gradient(circle,_rgba(187,169,143,0.04)_0%,_transparent_70%)]"></div>
            <div class="max-w-7xl mx-auto px-4 relative z-10">
                <div class="flex flex-col lg:flex-row gap-16">
                    <div class="lg:w-1/3">
                        <span class="text-primary font-sans text-[11px] uppercase tracking-widest">Veelgestelde vragen</span>
                        <h2 class="text-white font-display text-4xl md:text-5xl font-bold mt-4">Alles wat je wilt weten</h2>
                        <p class="text-white/50 font-sans text-sm mt-4 leading-relaxed">Heb je een vraag die hier niet bij staat? Neem gerust contact met ons op.</p>
                        <div class="flex flex-col sm:flex-row gap-3 mt-6">
                            <a href="/contact" class="bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 rounded hover:bg-[#d4c4ad] transition text-center">Contact opnemen</a>
                            <a href="tel:+31684816737" class="border border-white/20 text-white font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 rounded hover:border-primary hover:text-primary transition text-center">Bel nu</a>
                        </div>
                    </div>
                    <div class="lg:w-2/3 space-y-0">
                        @php
                            $faqs = [
                                ['q' => 'Moet ik een afspraak maken?', 'a' => 'Je bent altijd welkom om langs te lopen, maar om wachttijden te voorkomen raden wij aan om vooraf een afspraak te maken via onze website of telefonisch.'],
                                ['q' => 'Wat zijn jullie openingstijden?', 'a' => 'Wij zijn geopend van dinsdag tot en met zaterdag. Dinsdag t/m donderdag en zaterdag van 09:00 tot 18:00, op vrijdag van 09:00 tot 21:00. Op maandag en zondag zijn wij gesloten.'],
                                ['q' => 'Kan ik producten ook online bestellen?', 'a' => 'Onze webshop is momenteel in ontwikkeling en opent binnenkort. Tot die tijd zijn al onze producten gewoon verkrijgbaar in de salon.'],
                                ['q' => 'Zijn jullie gespecialiseerd in bepaalde haartypes?', 'a' => 'Bij John Possik zijn we gespecialiseerd in alle haartypes, zowel voor mannen als vrouwen. Of het nu gaat om krullend, steil, dik of dun haar — wij hebben de expertise.'],
                                ['q' => 'Bieden jullie ook kleuren en behandelingen aan?', 'a' => 'Absoluut! Naast knippen bieden wij een breed scala aan behandelingen waaronder kleuren, highlights, keratine treatments en meer. Bekijk onze diensten pagina voor het volledige aanbod.'],
                            ];
                        @endphp
                        @foreach ($faqs as $index => $faq)
                        <div class="border-b border-white/10" x-data="{ open: false }">
                            <button onclick="this.parentElement.classList.toggle('faq-open'); this.querySelector('.faq-icon').classList.toggle('rotate-45')" class="w-full flex items-center justify-between py-6 text-left group">
                                <span class="text-white font-sans font-semibold text-sm md:text-base group-hover:text-primary transition pr-8">{{ $faq['q'] }}</span>
                                <span class="faq-icon text-primary text-2xl transition-transform duration-300 flex-shrink-0">+</span>
                            </button>
                            <div class="faq-answer pr-12">
                                <p class="text-white/50 font-sans text-sm leading-relaxed">{{ $faq['a'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- Reviews Sectie --}}
        <section id="reviews" class="py-16 md:py-32 bg-gradient-to-b from-[#0d0a07] via-[#070604] to-black border-y border-white/5 relative overflow-hidden">
            <div class="pointer-events-none absolute top-0 left-1/4 w-[500px] h-[500px] bg-[radial-gradient(circle,_rgba(187,169,143,0.07)_0%,_transparent_70%)]"></div>
            <div class="pointer-events-none absolute bottom-0 right-1/4 w-[500px] h-[500px] bg-[radial-gradient(circle,_rgba(187,169,143,0.06)_0%,_transparent_70%)]"></div>
            <div class="max-w-7xl mx-auto px-4 relative z-10">
                <div class="text-center mb-16">
                    <span class="text-primary font-sans text-[11px] uppercase tracking-widest">Klantbeoordelingen</span>
                    <h2 class="text-white font-display text-4xl md:text-5xl font-bold mt-4">Wat onze klanten zeggen</h2>
                    <div class="flex items-center justify-center gap-2 mt-4">
                        <div class="flex gap-0.5">
                            @for ($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            @endfor
                        </div>
                        <span class="text-white/50 font-sans text-sm ml-1">5 / 5 — Google Reviews</span>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @php
                        $reviews = [
                            ['name' => 'E. Verboom', 'rating' => 5, 'text' => 'John is een kapper in hart en nieren: klantvriendelijk, sociaal, meedenkend en een goeie leermeester voor zijn stagiaires.', 'date' => 'via Social Deal'],
                            ['name' => 'S. Weltje', 'rating' => 5, 'text' => 'Super kapper! Hij geeft je heel goed advies, hij werkt perfect en is heel gezellig!', 'date' => 'via Social Deal'],
                            ['name' => 'R. Aversteeg', 'rating' => 5, 'text' => 'Gezellige professionele kapsalon, waar goed naar je wensen wordt geluisterd.', 'date' => 'via Social Deal'],
                            ['name' => 'T. Dam', 'rating' => 5, 'text' => 'Het was gezellig, ben hartstikke blij met m\'n kapsel, goed en kundig!!', 'date' => 'via Social Deal'],
                            ['name' => 'J. Van Weperen', 'rating' => 5, 'text' => 'Zeer vriendelijk personeel. Doen hun uiterste best om een zo goed mogelijk resultaat te behalen.', 'date' => 'via Social Deal'],
                            ['name' => 'S. Turiac', 'rating' => 5, 'text' => 'Fijne kapper, hij nam ruim de tijd voor mijn 86 jarige moeder. Heel erg tevreden met het resultaat!', 'date' => 'via Social Deal'],
                        ];
                    @endphp
                    @foreach ($reviews as $review)
                    <div class="flex flex-col border border-white/10 rounded bg-gradient-to-b from-white/[0.04] to-transparent p-6 hover:border-primary/30 transition">
                        <div class="flex gap-0.5 mb-4">
                            @for ($i = 0; $i < $review['rating']; $i++)
                            <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            @endfor
                        </div>
                        <p class="text-white/70 font-sans text-sm leading-relaxed mb-6">{{ $review['text'] }}</p>
                        <div class="flex items-center justify-between mt-auto">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-full bg-primary/20 flex items-center justify-center">
                                    <span class="text-primary font-sans font-bold text-xs">{{ substr($review['name'], 0, 1) }}</span>
                                </div>
                                <span class="text-white font-sans font-semibold text-sm">{{ $review['name'] }}</span>
                            </div>
                            <span class="text-white/30 font-sans text-xs">{{ $review['date'] }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-3 md:gap-4 mt-12">
                    <a href="https://possik.salonized.com/widget_bookings/new" target="_blank" rel="noopener" class="rounded bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest px-8 py-4 hover:bg-[#d4c4ad] transition text-center">Maak een Afspraak</a>
                    <a href="https://www.google.com/maps/search/?api=1&amp;query=John+Possik+Kapsalon+Dr.+Huber+Noodtstraat+24+Doetinchem" target="_blank" rel="noopener" class="inline-flex items-center justify-center gap-2 border border-white/20 text-white font-sans text-xs uppercase tracking-widest px-8 py-4 rounded hover:border-primary hover:text-primary transition">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                        Bekijk alle reviews
                    </a>
                </div>
            </div>
        </section>
@endsection

@extends('layouts.app')

@section('title', 'Diensten & Prijzen | Kapper Doetinchem — John Possik Kapsalon')
@section('meta_description', 'Bekijk alle diensten en prijzen van John Possik Kapsalon in Doetinchem: knippen vanaf € 17,50, verven, highlights, model föhnen en treatments zoals Botox Caviar en Plasma.')
@section('meta_keywords', 'kapper prijzen doetinchem, knippen doetinchem, haar verven doetinchem, highlights doetinchem, botox caviar haar, plasma behandeling haar, prijslijst kapsalon')

@section('content')
        {{-- Pagina hero --}}
        <div class="relative">
            <div class="w-full h-fit p-3 relative z-2">
                <div class="w-full h-[65vh] md:h-[60vh] min-h-[480px] relative overflow-hidden rounded">
                    <video autoplay playsinline webkit-playsinline muted loop preload="auto" class="absolute inset-0 w-full h-full object-cover"><source src="/assets/intro2.mp4" type="video/mp4"></video>
                    <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/70 to-black/40"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    <div class="absolute inset-0 flex items-end justify-center pb-10">
                        <div class="max-w-7xl w-full text-left px-4">
                            <p class="text-primary uppercase tracking-widest text-sm mb-4 md:mb-6 font-sans font-medium">Diensten & Prijzen</p>
                            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-wide">Vakwerk voor<br><span class="text-primary">elk kapsel.</span></h1>
                            <p class="text-white/70 font-sans text-sm md:text-base max-w-xl mt-4 md:mt-6 leading-relaxed">Van een scherpe knipbeurt tot kleurbehandelingen en verzorgende treatments: bij John Possik krijgt elke klant de beste service en verzorging.</p>
                            <div class="flex flex-col sm:flex-row gap-3 md:gap-4 mt-6 md:mt-8">
                                <a href="https://possik.salonized.com/widget_bookings/new" target="_blank" rel="noopener" class="rounded bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 md:px-8 py-4 hover:bg-[#d4c4ad] transition text-center">Maak een Afspraak</a>
                                <a href="#prijzen" class="rounded border border-white/40 text-white font-sans font-semibold text-xs uppercase tracking-widest px-6 md:px-8 py-4 hover:bg-white/10 transition text-center">Bekijk Prijzen</a>
                            </div>
                            <div class="hidden md:flex items-center gap-3 mt-10">
                                <a href="#knippen" class="border border-white/20 bg-black/40 backdrop-blur-sm rounded-full px-4 py-2 text-white/70 hover:text-primary hover:border-primary/50 transition font-sans text-[11px] uppercase tracking-widest">01 — Knippen</a>
                                <a href="#verven" class="border border-white/20 bg-black/40 backdrop-blur-sm rounded-full px-4 py-2 text-white/70 hover:text-primary hover:border-primary/50 transition font-sans text-[11px] uppercase tracking-widest">02 — Verven & Treatment</a>
                                <a href="#behandelingen" class="border border-white/20 bg-black/40 backdrop-blur-sm rounded-full px-4 py-2 text-white/70 hover:text-primary hover:border-primary/50 transition font-sans text-[11px] uppercase tracking-widest">03 — Botox & Plasma</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4"><div class="h-px bg-gradient-to-r from-transparent via-primary/25 to-transparent"></div></div>

        {{-- Diensten uitgelicht --}}
        <section class="py-12 md:py-24 relative overflow-hidden">
            <div class="pointer-events-none absolute top-1/4 -right-64 w-[700px] h-[700px] bg-[radial-gradient(circle,_rgba(187,169,143,0.05)_0%,_transparent_70%)]"></div>
            <div class="pointer-events-none absolute bottom-0 -left-64 w-[600px] h-[600px] bg-[radial-gradient(circle,_rgba(187,169,143,0.04)_0%,_transparent_70%)]"></div>
            <div class="max-w-7xl mx-auto px-4 relative z-10 flex flex-col gap-16 md:gap-28">

                {{-- Knippen --}}
                <div id="knippen" class="scroll-mt-28 grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center">
                    <div class="relative">
                        <img src="/images/salon1.jpeg" alt="Knippen bij John Possik" class="w-full rounded aspect-[4/3] object-cover">
                        <div class="pointer-events-none absolute inset-0 rounded ring-1 ring-inset ring-white/10"></div>
                    </div>
                    <div>
                        <p class="text-primary uppercase tracking-widest text-sm mb-4 font-sans font-medium">01 — Knippen</p>
                        <h2 class="font-display text-3xl md:text-4xl font-bold text-white tracking-wide mb-6">Knippen & Stylen</h2>
                        <p class="text-white/70 font-sans text-base leading-relaxed mb-6">We bieden elke klant de beste service en verzorging. Of u nu op zoek bent naar een trendy new look of liever de standaard coupe wilt behouden, wij zorgen ervoor dat u met een tevreden gevoel de deur uit stapt. Ga voor een knipbehandeling die u laat stralen!</p>
                        <div class="flex flex-wrap gap-3 mb-8">
                            <span class="text-xs text-primary font-sans uppercase tracking-widest border border-primary/30 px-3 py-1 rounded-full">Dames</span>
                            <span class="text-xs text-primary font-sans uppercase tracking-widest border border-primary/30 px-3 py-1 rounded-full">Heren</span>
                            <span class="text-xs text-primary font-sans uppercase tracking-widest border border-primary/30 px-3 py-1 rounded-full">Kinderen</span>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-center gap-4 sm:gap-6">
                            <a href="https://possik.salonized.com/widget_bookings/new" target="_blank" rel="noopener" class="rounded bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 hover:bg-[#d4c4ad] transition text-center">Maak een Afspraak</a>
                            <a href="#prijzen" class="inline-flex items-center justify-center gap-2 text-primary font-sans font-semibold text-xs uppercase tracking-widest hover:text-white transition">
                                Bekijk de prijzen
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Verven en treatment --}}
                <div id="verven" class="scroll-mt-28 grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center">
                    <div class="relative lg:order-2">
                        <img src="/images/salon2.jpeg" alt="Verven en treatment bij John Possik" class="w-full rounded aspect-[4/3] object-cover">
                        <div class="pointer-events-none absolute inset-0 rounded ring-1 ring-inset ring-white/10"></div>
                    </div>
                    <div class="lg:order-1">
                        <p class="text-primary uppercase tracking-widest text-sm mb-4 font-sans font-medium">02 — Verven & Treatment</p>
                        <h2 class="font-display text-3xl md:text-4xl font-bold text-white tracking-wide mb-6">Verven en Treatment</h2>
                        <p class="text-white/70 font-sans text-base leading-relaxed mb-6">Bij het verven en behandelen van je haar is het belangrijk om rekening te houden met de kleur, de conditie van het haar en de gewenste look die je wilt bereiken. Het kiezen van de juiste kleur en het type behandeling kan een groot verschil maken in hoe je haar eruit zal zien en aanvoelen. Wij creëren de look die het beste past bij uw persoonlijke stijl en passie.</p>
                        <div class="flex flex-wrap gap-3 mb-8">
                            <span class="text-xs text-primary font-sans uppercase tracking-widest border border-primary/30 px-3 py-1 rounded-full">Highlights</span>
                            <span class="text-xs text-primary font-sans uppercase tracking-widest border border-primary/30 px-3 py-1 rounded-full">Uitgroei</span>
                            <span class="text-xs text-primary font-sans uppercase tracking-widest border border-primary/30 px-3 py-1 rounded-full">Volledige kleuring</span>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-center gap-4 sm:gap-6">
                            <a href="https://possik.salonized.com/widget_bookings/new" target="_blank" rel="noopener" class="rounded bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 hover:bg-[#d4c4ad] transition text-center">Maak een Afspraak</a>
                            <a href="#prijzen" class="inline-flex items-center justify-center gap-2 text-primary font-sans font-semibold text-xs uppercase tracking-widest hover:text-white transition">
                                Bekijk de prijzen
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Botox & Plasma --}}
                <div id="behandelingen" class="scroll-mt-28 grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center">
                    <div class="relative">
                        <img src="/images/salon3.jpeg" alt="Botox en plasma behandelingen bij John Possik" class="w-full rounded aspect-[4/3] object-cover">
                        <div class="pointer-events-none absolute inset-0 rounded ring-1 ring-inset ring-white/10"></div>
                    </div>
                    <div>
                        <p class="text-primary uppercase tracking-widest text-sm mb-4 font-sans font-medium">03 — Behandelingen</p>
                        <h2 class="font-display text-3xl md:text-4xl font-bold text-white tracking-wide mb-6">Botox & Plasma</h2>
                        <p class="text-white/70 font-sans text-base leading-relaxed mb-6">Verbeter de conditie van haar dat is beschadigd door chemicaliën, kunstmatige warmte of natuurinvloeden. We gebruiken een unieke behandeling met hoge concentraties proteïnen en collagenen die uw haar sterker, soepeler en glanzender maakt. Onze behandelingen verjongen uw haar, zodat u er op uw best uitziet.</p>
                        <div class="flex flex-wrap gap-3 mb-8">
                            <span class="text-xs text-primary font-sans uppercase tracking-widest border border-primary/30 px-3 py-1 rounded-full">Botox Caviar</span>
                            <span class="text-xs text-primary font-sans uppercase tracking-widest border border-primary/30 px-3 py-1 rounded-full">Plasma</span>
                            <span class="text-xs text-primary font-sans uppercase tracking-widest border border-primary/30 px-3 py-1 rounded-full">Deep conditioning</span>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-center gap-4 sm:gap-6">
                            <a href="https://possik.salonized.com/widget_bookings/new" target="_blank" rel="noopener" class="rounded bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 hover:bg-[#d4c4ad] transition text-center">Maak een Afspraak</a>
                            <a href="#prijzen" class="inline-flex items-center justify-center gap-2 text-primary font-sans font-semibold text-xs uppercase tracking-widest hover:text-white transition">
                                Bekijk de prijzen
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        {{-- Prijslijst --}}
        <section id="prijzen" class="py-16 md:py-32 bg-gradient-to-b from-[#0d0a07] via-[#070604] to-black border-y border-white/5 relative overflow-hidden">
            <div class="pointer-events-none absolute top-0 left-1/4 w-[600px] h-[600px] bg-[radial-gradient(circle,_rgba(187,169,143,0.08)_0%,_transparent_70%)]"></div>
            <div class="pointer-events-none absolute bottom-0 right-0 w-[400px] h-[400px] bg-[radial-gradient(circle,_rgba(187,169,143,0.06)_0%,_transparent_70%)]"></div>
            <div class="max-w-7xl mx-auto px-4 relative z-10">
                <div class="text-center mb-12 md:mb-16">
                    <p class="text-primary uppercase tracking-widest text-sm mb-4 font-sans font-medium">Prijslijst</p>
                    <h2 class="font-display text-3xl md:text-5xl font-bold text-white tracking-wide">Onze Prijzen</h2>
                    <p class="text-white/50 font-sans text-sm mt-4 max-w-xl mx-auto leading-relaxed">Transparante prijzen, zonder verrassingen. Bij behandelingen met "vanaf" hangt de exacte prijs af van de lengte en dikte van je haar.</p>
                </div>

                @php
                    $prijslijst = [
                        [
                            'categorie' => 'Knippen',
                            'items' => [
                                ['Heren knippen', '€ 29,50'],
                                ['Dames knippen', '€ 29,50'],
                                ['Kinderen tot 10 jaar', '€ 17,50'],
                            ],
                        ],
                        [
                            'categorie' => 'Aanvullende services',
                            'items' => [
                                ['Baard trimmen', '€ 10,00'],
                                ['Pony knippen', '€ 13,50'],
                                ['Heren knippen + baard', '€ 34,50'],
                            ],
                        ],
                        [
                            'categorie' => 'Model föhnen & stylen',
                            'items' => [
                                ['Kort haar', '€ 23,50'],
                                ['Mid lang haar', '€ 29,50'],
                                ['Lang haar', '€ 38,50'],
                            ],
                        ],
                        [
                            'categorie' => 'Treatments en verven',
                            'items' => [
                                ['Highlights kort haar', 'vanaf € 50,00'],
                                ['Highlights halflang haar', 'vanaf € 80,00'],
                                ['Highlights lang haar', 'vanaf € 110,00'],
                                ['Botox Caviar', 'vanaf € 79,50'],
                                ['Plasma', 'vanaf € 59,50'],
                                ['Uitgroei verven', 'vanaf € 34,50'],
                            ],
                        ],
                    ];
                @endphp

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach ($prijslijst as $groep)
                    <div class="border border-white/10 rounded bg-gradient-to-b from-white/[0.04] to-transparent p-6 md:p-8 hover:border-primary/30 transition">
                        <h3 class="font-display text-xl md:text-2xl font-bold text-white mb-1">{{ $groep['categorie'] }}</h3>
                        <div class="h-px w-12 bg-primary/60 mb-6"></div>
                        <ul class="space-y-4">
                            @foreach ($groep['items'] as [$naam, $prijs])
                            <li class="flex items-baseline gap-3">
                                <span class="text-white/70 font-sans text-sm">{{ $naam }}</span>
                                <span class="flex-1 border-b border-dotted border-white/15 translate-y-[-3px]"></span>
                                <span class="text-primary font-sans font-semibold text-sm whitespace-nowrap">{{ $prijs }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                </div>

                <p class="text-white/40 font-sans text-xs text-center mt-8">Alle prijzen zijn inclusief btw. Vragen over een behandeling die er niet tussen staat? Neem gerust contact met ons op.</p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-3 md:gap-4 mt-8">
                    <a href="https://possik.salonized.com/widget_bookings/new" target="_blank" rel="noopener" class="rounded bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 md:px-8 py-4 hover:bg-[#d4c4ad] transition text-center">Maak een Afspraak</a>
                    <a href="tel:+31684816737" class="rounded border border-white/20 text-white font-sans font-semibold text-xs uppercase tracking-widest px-6 md:px-8 py-4 hover:border-primary hover:text-primary transition text-center">Bel Ons</a>
                </div>
            </div>
        </section>

        {{-- CTA --}}
        <section class="py-16 md:py-24 relative overflow-hidden">
            <div class="pointer-events-none absolute -top-32 left-1/2 -translate-x-1/2 w-[800px] h-[400px] bg-[radial-gradient(ellipse_at_center,_rgba(187,169,143,0.06)_0%,_transparent_70%)]"></div>
            <div class="max-w-7xl mx-auto px-4 relative z-10">
                <div class="w-full bg-primary rounded flex flex-col md:flex-row items-center justify-between px-6 md:px-8 py-6 md:py-8 gap-4 text-center md:text-left">
                    <div>
                        <h2 class="font-display text-2xl md:text-3xl font-bold text-black">Klaar voor een nieuwe look?</h2>
                        <p class="text-black/70 font-sans text-sm mt-1">Plan eenvoudig online of bel ons direct. Wij werken op afspraak, zodat jij nooit hoeft te wachten.</p>
                    </div>
                    <div class="flex items-center gap-3 md:gap-4 w-full md:w-auto flex-shrink-0">
                        <a href="https://possik.salonized.com/widget_bookings/new" target="_blank" rel="noopener" class="flex-1 md:flex-none text-center bg-black text-primary font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 rounded hover:bg-black/80 transition">Maak een Afspraak</a>
                        <a href="tel:+31684816737" class="flex-1 md:flex-none text-center border border-black text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 rounded hover:bg-black/10 transition">Bel Ons</a>
                    </div>
                </div>
            </div>
        </section>
@endsection

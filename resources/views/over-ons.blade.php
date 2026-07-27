@extends('layouts.app')

@section('title', 'Over Ons | Het verhaal van John Possik Kapsalon Doetinchem')
@section('meta_description', 'Maak kennis met John Possik, oprichter van John Possik Kapsalon in Doetinchem. Sinds 2020 dé salon waar kwaliteit, vertrouwen en tevredenheid centraal staan. Beoordeeld met een 9,5.')
@section('meta_keywords', 'john possik, over ons, kapsalon doetinchem, kapper doetinchem, leermeester kappersvak, dr huber noodtstraat')

@section('content')
        {{-- Pagina hero --}}
        <div class="relative">
            <div class="w-full h-fit p-3 relative z-2">
                <div class="w-full h-[65vh] md:h-[60vh] min-h-[480px] relative overflow-hidden rounded">
                    <img src="/images/salon-main.jpeg" alt="De gevel van John Possik Kapsalon aan de Dr. Huber Noodtstraat in Doetinchem" class="absolute inset-0 w-full h-full object-cover object-[center_30%]">
                    <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/70 to-black/30"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    <div class="absolute inset-0 flex items-end justify-center pb-10">
                        <div class="max-w-7xl w-full text-left px-4">
                            <p class="text-primary uppercase tracking-widest text-sm mb-4 md:mb-6 font-sans font-medium">Over ons</p>
                            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-wide">Passie voor het vak,<br><span class="text-primary">oog voor de klant.</span></h1>
                            <p class="text-white/70 font-sans text-sm md:text-base max-w-xl mt-4 md:mt-6 leading-relaxed">John Possik Kapsalon is sinds 2020 een begrip in Doetinchem. Een salon waar vakmanschap, persoonlijke aandacht en een gezellige sfeer samenkomen.</p>
                            <div class="flex flex-col sm:flex-row gap-3 md:gap-4 mt-6 md:mt-8">
                                <a href="https://possik.salonized.com/widget_bookings/new" target="_blank" rel="noopener" class="rounded bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 md:px-8 py-4 hover:bg-[#d4c4ad] transition text-center">Maak een Afspraak</a>
                                <a href="/diensten" class="rounded border border-white/40 text-white font-sans font-semibold text-xs uppercase tracking-widest px-6 md:px-8 py-4 hover:bg-white/10 transition text-center">Onze Diensten</a>
                            </div>
                            <div class="hidden md:flex items-center gap-3 mt-10">
                                <span class="border border-white/20 bg-black/40 backdrop-blur-sm rounded-full px-4 py-2 text-white/70 font-sans text-[11px] uppercase tracking-widest">Sinds 2020</span>
                                <span class="border border-white/20 bg-black/40 backdrop-blur-sm rounded-full px-4 py-2 text-white/70 font-sans text-[11px] uppercase tracking-widest">Dr. Huber Noodtstraat 24</span>
                                <span class="border border-white/20 bg-black/40 backdrop-blur-sm rounded-full px-4 py-2 text-white/70 font-sans text-[11px] uppercase tracking-widest"><span class="text-primary">★</span> 5.0 op Google</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4"><div class="h-px bg-gradient-to-r from-transparent via-primary/25 to-transparent"></div></div>

        {{-- Het verhaal --}}
        <section class="py-16 md:py-28 relative overflow-hidden">
            <div class="pointer-events-none absolute top-0 -right-64 w-[700px] h-[700px] bg-[radial-gradient(circle,_rgba(187,169,143,0.05)_0%,_transparent_70%)]"></div>
            <div class="max-w-7xl mx-auto px-4 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                    <div class="relative order-2 lg:order-1 max-w-sm mx-auto lg:mx-0 w-full">
                        <img src="/assets/john.webp" alt="John Possik aan het werk in de salon" class="w-full rounded aspect-[2/3] object-cover">
                        <div class="pointer-events-none absolute inset-0 rounded ring-1 ring-inset ring-white/10"></div>
                        <div class="absolute bottom-4 left-4 right-4 bg-black/70 backdrop-blur-sm rounded px-5 py-4">
                            <span class="block text-white font-display text-lg font-bold">John Possik</span>
                            <span class="block text-primary font-sans text-[11px] uppercase tracking-widest mt-0.5">Oprichter & Kapper</span>
                        </div>
                    </div>
                    <div class="order-1 lg:order-2">
                        <p class="text-primary uppercase tracking-widest text-sm mb-4 font-sans font-medium">Het verhaal</p>
                        <h2 class="font-display text-3xl md:text-4xl font-bold text-white tracking-wide mb-6">Van droom naar dé kapsalon van Doetinchem</h2>
                        <p class="text-white/70 font-sans text-base leading-relaxed mb-6">In 2020 opende John Possik als jonge ondernemer de deuren van zijn eigen kapsalon aan de Dr. Huber Noodtstraat 24 in Doetinchem. Met Syrische roots en een grote passie voor het kappersvak bouwde hij vanaf de eerste dag aan één doel: dé toonaangevende kapsalon van Doetinchem worden.</p>
                        <p class="text-white/70 font-sans text-base leading-relaxed mb-6">Zijn recept is even simpel als zeldzaam: de klant staat altijd op één. John neemt de tijd, luistert écht naar je wensen en geeft eerlijk advies — ook als dat betekent dat hij een behandeling afraadt. Die aanpak, gecombineerd met vakmanschap en oog voor detail, zorgt ervoor dat klanten steeds weer terugkomen.</p>
                        <p class="text-white/70 font-sans text-base leading-relaxed">Inmiddels is de salon uitgegroeid tot een nette en sfeervolle plek waar mannen én vrouwen terechtkunnen voor knippen, kleuren en luxe treatments zoals Botox Caviar en Plasma. Maar hoe druk het ook wordt: de persoonlijke aandacht blijft.</p>
                        <div class="flex flex-col sm:flex-row gap-3 md:gap-4 mt-8">
                            <a href="https://possik.salonized.com/widget_bookings/new" target="_blank" rel="noopener" class="rounded bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 hover:bg-[#d4c4ad] transition text-center">Maak een Afspraak</a>
                            <a href="/diensten" class="rounded border border-white/20 text-white font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 hover:border-primary hover:text-primary transition text-center">Bekijk onze diensten</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Missie & waarden --}}
        <section class="py-16 md:py-28 bg-gradient-to-b from-[#0d0a07] via-[#070604] to-black border-y border-white/5 relative overflow-hidden">
            <div class="pointer-events-none absolute top-0 left-1/4 w-[600px] h-[600px] bg-[radial-gradient(circle,_rgba(187,169,143,0.08)_0%,_transparent_70%)]"></div>
            <div class="max-w-7xl mx-auto px-4 relative z-10">
                <div class="text-center mb-12 md:mb-16">
                    <p class="text-primary uppercase tracking-widest text-sm mb-4 font-sans font-medium">Onze missie</p>
                    <h2 class="font-display text-3xl md:text-5xl font-bold text-white tracking-wide">Kwaliteit, vertrouwen en tevredenheid</h2>
                    <p class="text-white/50 font-sans text-sm mt-4 max-w-xl mx-auto leading-relaxed">Drie woorden die alles samenvatten waar de salon voor staat. Geen loze beloftes, maar de meetlat waar we elke knipbeurt en behandeling langs leggen.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="text-center border border-white/10 rounded bg-gradient-to-b from-white/[0.04] to-transparent p-8">
                        <div class="w-12 h-12 mx-auto mb-4 flex items-center justify-center border border-primary/60 bg-primary/10 rounded-full shadow-[0_0_25px_rgba(187,169,143,0.15)]">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.196-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.783-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>
                        </div>
                        <h3 class="text-white font-sans font-semibold text-sm uppercase tracking-widest mb-2">Kwaliteit</h3>
                        <p class="text-white/60 font-sans text-sm leading-relaxed">Vakwerk met hoogwaardige producten en technieken. Van een klassieke coupe tot een intensieve treatment: half werk bestaat hier niet.</p>
                    </div>
                    <div class="text-center border border-white/10 rounded bg-gradient-to-b from-white/[0.04] to-transparent p-8">
                        <div class="w-12 h-12 mx-auto mb-4 flex items-center justify-center border border-primary/60 bg-primary/10 rounded-full shadow-[0_0_25px_rgba(187,169,143,0.15)]">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"/></svg>
                        </div>
                        <h3 class="text-white font-sans font-semibold text-sm uppercase tracking-widest mb-2">Vertrouwen</h3>
                        <p class="text-white/60 font-sans text-sm leading-relaxed">Eerlijk advies, ook als dat "niet doen" is. Je haar is in goede handen bij iemand die zegt wat hij doet en doet wat hij zegt.</p>
                    </div>
                    <div class="text-center border border-white/10 rounded bg-gradient-to-b from-white/[0.04] to-transparent p-8">
                        <div class="w-12 h-12 mx-auto mb-4 flex items-center justify-center border border-primary/60 bg-primary/10 rounded-full shadow-[0_0_25px_rgba(187,169,143,0.15)]">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z"/></svg>
                        </div>
                        <h3 class="text-white font-sans font-semibold text-sm uppercase tracking-widest mb-2">Tevredenheid</h3>
                        <p class="text-white/60 font-sans text-sm leading-relaxed">Je stapt pas de deur uit als jij tevreden bent. Niet voor niets beoordelen klanten de salon met een 9,5 op Social Deal.</p>
                    </div>
                </div>

                {{-- Cijfers --}}
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-12 md:mt-16">
                    <div class="text-center">
                        <span class="font-display text-3xl md:text-4xl font-bold text-primary">2020</span>
                        <span class="block text-white/50 font-sans text-xs uppercase tracking-widest mt-2">Opgericht</span>
                    </div>
                    <div class="text-center">
                        <span class="font-display text-3xl md:text-4xl font-bold text-primary">1000+</span>
                        <span class="block text-white/50 font-sans text-xs uppercase tracking-widest mt-2">Tevreden klanten</span>
                    </div>
                    <div class="text-center">
                        <span class="font-display text-3xl md:text-4xl font-bold text-primary">5.0</span>
                        <span class="block text-white/50 font-sans text-xs uppercase tracking-widest mt-2">Google score</span>
                    </div>
                    <div class="text-center">
                        <span class="font-display text-3xl md:text-4xl font-bold text-primary">9,5</span>
                        <span class="block text-white/50 font-sans text-xs uppercase tracking-widest mt-2">Social Deal score</span>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-3 md:gap-4 mt-12">
                    <a href="https://possik.salonized.com/widget_bookings/new" target="_blank" rel="noopener" class="rounded bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 md:px-8 py-4 hover:bg-[#d4c4ad] transition text-center">Maak een Afspraak</a>
                    <a href="/diensten" class="rounded border border-white/20 text-white font-sans font-semibold text-xs uppercase tracking-widest px-6 md:px-8 py-4 hover:border-primary hover:text-primary transition text-center">Bekijk onze diensten</a>
                </div>
            </div>
        </section>

        {{-- Leermeester --}}
        <section class="py-16 md:py-28 relative overflow-hidden">
            <div class="pointer-events-none absolute bottom-0 -left-64 w-[600px] h-[600px] bg-[radial-gradient(circle,_rgba(187,169,143,0.04)_0%,_transparent_70%)]"></div>
            <div class="max-w-7xl mx-auto px-4 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                    <div>
                        <p class="text-primary uppercase tracking-widest text-sm mb-4 font-sans font-medium">Leermeester</p>
                        <h2 class="font-display text-3xl md:text-4xl font-bold text-white tracking-wide mb-6">Het vak doorgeven aan de nieuwe generatie</h2>
                        <p class="text-white/70 font-sans text-base leading-relaxed mb-6">Vakmanschap houd je niet voor jezelf. Naast zijn werk in de salon begeleidt John stagiaires die het kappersvak willen leren. Zij krijgen bij John Possik Kapsalon de ruimte om te groeien, mét een leermeester die naast ze staat in plaats van boven ze.</p>
                        <p class="text-white/70 font-sans text-base leading-relaxed">Zo blijft de salon niet alleen de plek waar Doetinchem geknipt wordt, maar ook de plek waar de kappers van morgen worden opgeleid.</p>
                        <div class="flex flex-col sm:flex-row gap-3 md:gap-4 mt-8">
                            <a href="mailto:info@jpkapsalon.nl" class="rounded bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 hover:bg-[#d4c4ad] transition text-center">Mail voor stage-info</a>
                            <a href="tel:+31684816737" class="rounded border border-white/20 text-white font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 hover:border-primary hover:text-primary transition text-center">Bel Ons</a>
                        </div>
                    </div>
                    <div class="border border-white/10 rounded bg-gradient-to-b from-white/[0.04] to-transparent p-8 md:p-10">
                        <div class="flex gap-0.5 mb-5">
                            @for ($i = 0; $i < 5; $i++)
                            <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            @endfor
                        </div>
                        <blockquote class="text-white font-display text-xl md:text-2xl leading-relaxed">"John is een kapper in hart en nieren: klantvriendelijk, sociaal, meedenkend en een goeie leermeester voor zijn stagiaires."</blockquote>
                        <div class="flex items-center gap-3 mt-6">
                            <div class="w-9 h-9 rounded-full bg-primary/20 flex items-center justify-center">
                                <span class="text-primary font-sans font-bold text-xs">E</span>
                            </div>
                            <div>
                                <span class="block text-white font-sans font-semibold text-sm">E. Verboom</span>
                                <span class="block text-white/30 font-sans text-xs">via Social Deal</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Foto strip --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-12 md:mt-20">
                    <div class="relative rounded overflow-hidden">
                        <img src="/images/salon1.jpeg" alt="Sfeerimpressie John Possik Kapsalon" class="w-full h-56 md:h-64 object-cover">
                        <div class="pointer-events-none absolute inset-0 rounded ring-1 ring-inset ring-white/10"></div>
                    </div>
                    <div class="relative rounded overflow-hidden">
                        <img src="/images/salon2.jpeg" alt="Sfeerimpressie John Possik Kapsalon" class="w-full h-56 md:h-64 object-cover">
                        <div class="pointer-events-none absolute inset-0 rounded ring-1 ring-inset ring-white/10"></div>
                    </div>
                    <div class="relative rounded overflow-hidden">
                        <img src="/images/salon3.jpeg" alt="Sfeerimpressie John Possik Kapsalon" class="w-full h-56 md:h-64 object-cover">
                        <div class="pointer-events-none absolute inset-0 rounded ring-1 ring-inset ring-white/10"></div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Bezoek ons --}}
        <section class="py-16 md:py-28 bg-gradient-to-b from-[#0d0a07] via-[#070604] to-black border-y border-white/5 relative overflow-hidden">
            <div class="pointer-events-none absolute top-0 right-1/4 w-[500px] h-[500px] bg-[radial-gradient(circle,_rgba(187,169,143,0.07)_0%,_transparent_70%)]"></div>
            <div class="max-w-7xl mx-auto px-4 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                    <div>
                        <p class="text-primary uppercase tracking-widest text-sm mb-4 font-sans font-medium">Kom langs</p>
                        <h2 class="font-display text-3xl md:text-4xl font-bold text-white tracking-wide mb-6">Midden in het centrum van Doetinchem</h2>
                        <p class="text-white/70 font-sans text-base leading-relaxed mb-8">Je vindt de salon aan de Dr. Huber Noodtstraat, op loopafstand van het centrum. Parkeren kan om de hoek, en met een afspraak hoef je nooit te wachten.</p>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start gap-3">
                                <svg class="w-4 h-4 text-primary mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 0115 0z"/></svg>
                                <span class="text-white/70 font-sans text-sm">Dr. Huber Noodtstraat 24<br>7001 DW Doetinchem</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-4 h-4 text-primary flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/></svg>
                                <a href="tel:+31684816737" class="text-white/70 font-sans text-sm hover:text-primary transition">06 84 81 67 37</a>
                            </li>
                        </ul>
                        <div class="flex flex-col sm:flex-row gap-3 md:gap-4">
                            <a href="https://possik.salonized.com/widget_bookings/new" target="_blank" rel="noopener" class="rounded bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 md:px-8 py-4 hover:bg-[#d4c4ad] transition text-center">Maak een Afspraak</a>
                            <a href="https://maps.google.com/?q=Dr.+Huber+Noodtstraat+24,+7001+DW+Doetinchem" target="_blank" class="rounded border border-white/30 text-white font-sans font-semibold text-xs uppercase tracking-widest px-6 md:px-8 py-4 hover:bg-white/10 transition text-center">Route plannen</a>
                        </div>
                    </div>
                    <div class="relative">
                        <iframe data-map-src="https://www.google.com/maps?q=Dr.+Huber+Noodtstraat+24,+7001+DW+Doetinchem&output=embed" class="w-full h-72 md:h-96 rounded border-0 grayscale invert-[0.92] contrast-[0.9] bg-[#0a0908]" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Locatie John Possik Kapsalon"></iframe>
                        <div class="map-consent absolute inset-0 rounded bg-[#0a0908] flex flex-col items-center justify-center gap-4 px-6 text-center">
                            <p class="text-white/50 font-sans text-sm leading-relaxed">De routekaart wordt geladen via Google Maps.<br>Daarvoor is jouw toestemming nodig.</p>
                            <button type="button" class="map-load-btn rounded bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 hover:bg-[#d4c4ad] transition">Kaart laden</button>
                        </div>
                        <div class="pointer-events-none absolute inset-0 rounded ring-1 ring-inset ring-white/10"></div>
                    </div>
                </div>
            </div>
        </section>
@endsection

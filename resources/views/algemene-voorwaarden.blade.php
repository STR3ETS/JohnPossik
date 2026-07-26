@extends('layouts.app')

@section('title', 'Algemene Voorwaarden — John Possik Kapsalon Doetinchem')
@section('meta_description', 'De algemene voorwaarden van John Possik Kapsalon in Doetinchem: afspraken en annuleren, betaling, prijzen, aansprakelijkheid en klachten.')

@section('content')
        {{-- Pagina kop --}}
        <section class="relative pt-36 md:pt-44 pb-10 md:pb-14 overflow-hidden">
            <div class="pointer-events-none absolute -top-32 left-1/3 w-[800px] h-[500px] bg-[radial-gradient(ellipse_at_center,_rgba(187,169,143,0.07)_0%,_transparent_70%)]"></div>
            <div class="max-w-3xl mx-auto px-4 relative z-10">
                <p class="text-primary uppercase tracking-widest text-sm mb-4 font-sans font-medium">Juridisch</p>
                <h1 class="font-display text-4xl md:text-5xl font-bold text-white tracking-wide">Algemene Voorwaarden</h1>
                <p class="text-white/40 font-sans text-sm mt-4">Laatst bijgewerkt: 26 juli 2026</p>
            </div>
        </section>

        <div class="max-w-3xl mx-auto px-4"><div class="h-px bg-gradient-to-r from-transparent via-primary/25 to-transparent"></div></div>

        <section class="pt-10 md:pt-14 pb-16 md:pb-28">
            <div class="max-w-3xl mx-auto px-4 space-y-10">
                <div>
                    <h2 class="font-display text-2xl font-bold text-white mb-4">1. Algemeen</h2>
                    <p class="text-white/70 font-sans text-base leading-relaxed">Deze voorwaarden gelden voor alle behandelingen, diensten en producten van John Possik Kapsalon, gevestigd aan de Dr. Huber Noodtstraat 24, 7001 DW Doetinchem. Door een afspraak te maken ga je akkoord met deze voorwaarden.</p>
                </div>

                <div>
                    <h2 class="font-display text-2xl font-bold text-white mb-4">2. Afspraken & annuleren</h2>
                    <ul class="space-y-3 text-white/70 font-sans text-base leading-relaxed list-disc pl-5">
                        <li>Afspraken kunnen online worden gemaakt via ons boekingssysteem, telefonisch of in de salon.</li>
                        <li>Kun je niet komen? Annuleer of verzet je afspraak minimaal 24 uur van tevoren, kosteloos.</li>
                        <li>Bij niet verschijnen zonder afmelding (no-show) of te late annulering kunnen wij (een deel van) de geplande behandeling in rekening brengen.</li>
                        <li>Ben je meer dan 15 minuten te laat, dan kan het zijn dat de behandeling ingekort of verzet moet worden.</li>
                    </ul>
                </div>

                <div>
                    <h2 class="font-display text-2xl font-bold text-white mb-4">3. Prijzen & betaling</h2>
                    <ul class="space-y-3 text-white/70 font-sans text-base leading-relaxed list-disc pl-5">
                        <li>Alle prijzen op de website en in de salon zijn inclusief btw.</li>
                        <li>Bij behandelingen met een "vanaf"-prijs hangt de uiteindelijke prijs af van haarlengte, haardikte en het gebruikte materiaal. We bespreken dit vooraf met je.</li>
                        <li>Betalen kan in de salon per pin of contant.</li>
                        <li>Prijswijzigingen voorbehouden; de prijs die vooraf met je is besproken geldt.</li>
                    </ul>
                </div>

                <div>
                    <h2 class="font-display text-2xl font-bold text-white mb-4">4. Behandelingen & advies</h2>
                    <p class="text-white/70 font-sans text-base leading-relaxed">Wij informeren je vooraf over de behandeling en het verwachte resultaat. Vertel ons vóór de behandeling over allergieën, huidaandoeningen of eerdere chemische behandelingen — dat is belangrijk voor een veilig en goed resultaat.</p>
                </div>

                <div>
                    <h2 class="font-display text-2xl font-bold text-white mb-4">5. Aansprakelijkheid</h2>
                    <p class="text-white/70 font-sans text-base leading-relaxed">Wij voeren elke behandeling met de grootst mogelijke zorg uit. John Possik Kapsalon is niet aansprakelijk voor schade die het gevolg is van onjuiste of onvolledige informatie van de klant (bijvoorbeeld over allergieën of eerdere behandelingen). Eventuele aansprakelijkheid is beperkt tot het bedrag van de betreffende behandeling.</p>
                </div>

                <div>
                    <h2 class="font-display text-2xl font-bold text-white mb-4">6. Klachten</h2>
                    <p class="text-white/70 font-sans text-base leading-relaxed">Ben je niet tevreden? Laat het ons binnen 7 dagen na de behandeling weten via <a href="mailto:info@jpkapsalon.nl" class="text-primary hover:text-white transition underline underline-offset-4">info@jpkapsalon.nl</a> of <a href="tel:+31684816737" class="text-primary hover:text-white transition underline underline-offset-4">06 84 81 67 37</a>. We nemen elke klacht serieus en zoeken samen naar een passende oplossing, bijvoorbeeld een herstelbehandeling.</p>
                </div>

                <div>
                    <h2 class="font-display text-2xl font-bold text-white mb-4">7. Toepasselijk recht</h2>
                    <p class="text-white/70 font-sans text-base leading-relaxed">Op deze voorwaarden is Nederlands recht van toepassing.</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-3 md:gap-4 pt-4">
                    <a href="https://possik.salonized.com/widget_bookings/new" target="_blank" rel="noopener" class="rounded bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 hover:bg-[#d4c4ad] transition text-center">Maak een Afspraak</a>
                    <a href="/contact" class="rounded border border-white/20 text-white font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 hover:border-primary hover:text-primary transition text-center">Neem contact op</a>
                </div>
            </div>
        </section>
@endsection

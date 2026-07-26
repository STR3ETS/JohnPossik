@extends('layouts.app')

@section('title', 'Privacybeleid — John Possik Kapsalon Doetinchem')
@section('meta_description', 'Lees hoe John Possik Kapsalon in Doetinchem omgaat met je persoonsgegevens: welke gegevens we verwerken, waarom, hoe lang we ze bewaren en wat je rechten zijn.')

@section('content')
        {{-- Pagina kop --}}
        <section class="relative pt-36 md:pt-44 pb-10 md:pb-14 overflow-hidden">
            <div class="pointer-events-none absolute -top-32 left-1/3 w-[800px] h-[500px] bg-[radial-gradient(ellipse_at_center,_rgba(187,169,143,0.07)_0%,_transparent_70%)]"></div>
            <div class="max-w-3xl mx-auto px-4 relative z-10">
                <p class="text-primary uppercase tracking-widest text-sm mb-4 font-sans font-medium">Juridisch</p>
                <h1 class="font-display text-4xl md:text-5xl font-bold text-white tracking-wide">Privacybeleid</h1>
                <p class="text-white/40 font-sans text-sm mt-4">Laatst bijgewerkt: 26 juli 2026</p>
            </div>
        </section>

        <div class="max-w-3xl mx-auto px-4"><div class="h-px bg-gradient-to-r from-transparent via-primary/25 to-transparent"></div></div>

        <section class="pt-10 md:pt-14 pb-16 md:pb-28">
            <div class="max-w-3xl mx-auto px-4 space-y-10">
                <div>
                    <p class="text-white/70 font-sans text-base leading-relaxed">John Possik Kapsalon, gevestigd aan de Dr. Huber Noodtstraat 24, 7001 DW Doetinchem, is verantwoordelijk voor de verwerking van persoonsgegevens zoals beschreven in dit privacybeleid. Wij gaan zorgvuldig met je gegevens om en verwerken niet meer dan nodig is om onze diensten te leveren.</p>
                </div>

                <div>
                    <h2 class="font-display text-2xl font-bold text-white mb-4">Welke gegevens verwerken wij?</h2>
                    <ul class="space-y-3 text-white/70 font-sans text-base leading-relaxed list-disc pl-5">
                        <li><strong class="text-white">Contactformulier:</strong> je naam, e-mailadres, telefoonnummer (optioneel) en de inhoud van je bericht. Deze gebruiken we uitsluitend om je vraag te beantwoorden.</li>
                        <li><strong class="text-white">Online afspraken:</strong> afspraken worden gemaakt via ons boekingssysteem Salonized. Daarbij verwerkt Salonized je naam, contactgegevens en de gekozen behandeling. Zie ook het <a href="https://www.salonized.com/nl/privacy" target="_blank" rel="noopener" class="text-primary hover:text-white transition underline underline-offset-4">privacybeleid van Salonized</a>.</li>
                        <li><strong class="text-white">Technische gegevens:</strong> onze hostingprovider verwerkt beperkte loggegevens (zoals IP-adres) voor de veiligheid en het functioneren van de website.</li>
                    </ul>
                </div>

                <div>
                    <h2 class="font-display text-2xl font-bold text-white mb-4">Waarom verwerken wij deze gegevens?</h2>
                    <p class="text-white/70 font-sans text-base leading-relaxed">Wij verwerken je gegevens om afspraken in te plannen en uit te voeren, om contact met je op te nemen wanneer je daarom vraagt, en om te voldoen aan wettelijke verplichtingen (zoals onze administratieplicht). De grondslag hiervoor is de uitvoering van de overeenkomst, jouw toestemming of een gerechtvaardigd belang.</p>
                </div>

                <div>
                    <h2 class="font-display text-2xl font-bold text-white mb-4">Hoe lang bewaren wij gegevens?</h2>
                    <p class="text-white/70 font-sans text-base leading-relaxed">Wij bewaren je gegevens niet langer dan nodig. Berichten via het contactformulier verwijderen we zodra je vraag is afgehandeld, tenzij een langere bewaartermijn wettelijk verplicht is. Voor financiële administratie geldt de wettelijke bewaartermijn van 7 jaar.</p>
                </div>

                <div>
                    <h2 class="font-display text-2xl font-bold text-white mb-4">Delen wij gegevens met derden?</h2>
                    <p class="text-white/70 font-sans text-base leading-relaxed">Wij verkopen je gegevens nooit. We delen gegevens alleen met partijen die nodig zijn voor onze dienstverlening, zoals Salonized (online afspraken) en onze hostingprovider. Met deze partijen zijn passende afspraken gemaakt over de beveiliging van je gegevens.</p>
                </div>

                <div>
                    <h2 class="font-display text-2xl font-bold text-white mb-4">Cookies</h2>
                    <p class="text-white/70 font-sans text-base leading-relaxed mb-4">Deze website gebruikt uitsluitend functionele cookies die nodig zijn om de site goed te laten werken (zoals een beveiligingscookie voor formulieren). Daarnaast gebruiken we een kaart van Google Maps; die wordt pas geladen nadat je daarvoor toestemming hebt gegeven via de cookiemelding. Google kan daarbij cookies plaatsen — zie het <a href="https://policies.google.com/privacy?hl=nl" target="_blank" rel="noopener" class="text-primary hover:text-white transition underline underline-offset-4">privacybeleid van Google</a>.</p>
                    <p class="text-white/70 font-sans text-base leading-relaxed">Je kunt je cookievoorkeur op elk moment wijzigen door de cookies van deze website in je browser te verwijderen; bij je volgende bezoek verschijnt de cookiemelding opnieuw.</p>
                </div>

                <div>
                    <h2 class="font-display text-2xl font-bold text-white mb-4">Jouw rechten</h2>
                    <p class="text-white/70 font-sans text-base leading-relaxed">Je hebt het recht om je persoonsgegevens in te zien, te laten corrigeren of te laten verwijderen. Ook kun je bezwaar maken tegen de verwerking of vragen om overdracht van je gegevens. Stuur daarvoor een verzoek naar <a href="mailto:info@jpkapsalon.nl" class="text-primary hover:text-white transition underline underline-offset-4">info@jpkapsalon.nl</a>. Ben je niet tevreden over hoe wij met je gegevens omgaan? Dan kun je een klacht indienen bij de <a href="https://www.autoriteitpersoonsgegevens.nl" target="_blank" rel="noopener" class="text-primary hover:text-white transition underline underline-offset-4">Autoriteit Persoonsgegevens</a>.</p>
                </div>

                <div>
                    <h2 class="font-display text-2xl font-bold text-white mb-4">Contact</h2>
                    <p class="text-white/70 font-sans text-base leading-relaxed">Vragen over dit privacybeleid? Neem contact op via <a href="mailto:info@jpkapsalon.nl" class="text-primary hover:text-white transition underline underline-offset-4">info@jpkapsalon.nl</a> of bel <a href="tel:+31684816737" class="text-primary hover:text-white transition underline underline-offset-4">06 84 81 67 37</a>.</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-3 md:gap-4 pt-4">
                    <a href="/contact" class="rounded bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 hover:bg-[#d4c4ad] transition text-center">Neem contact op</a>
                    <a href="/" class="rounded border border-white/20 text-white font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 hover:border-primary hover:text-primary transition text-center">Terug naar home</a>
                </div>
            </div>
        </section>
@endsection

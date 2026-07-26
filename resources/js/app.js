import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { ScrollSmoother } from 'gsap/ScrollSmoother';

gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

document.addEventListener('DOMContentLoaded', () => {
    // Geen smooth scroll voor gebruikers die reduced motion aan hebben staan
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

    const smoother = ScrollSmoother.create({
        wrapper: '#smooth-wrapper',
        content: '#smooth-content',
        smooth: 1.2,
        effects: true,
        smoothTouch: false,
    });

    // Offset zodat een anker niet achter de zwevende header verdwijnt
    const SCROLL_OFFSET = 'top 100px';

    // Ankerlinks op dezelfde pagina smooth laten scrollen
    document.querySelectorAll('a[href*="#"]').forEach((link) => {
        const url = new URL(link.getAttribute('href'), window.location.href);
        if (url.pathname !== window.location.pathname || !url.hash) return;

        link.addEventListener('click', (e) => {
            const target = document.querySelector(url.hash);
            if (!target) return;
            e.preventDefault();
            smoother.scrollTo(target, true, SCROLL_OFFSET);
        });
    });

    // Bij binnenkomen met een #anker (bijv. /#faq vanaf een andere pagina) direct goed positioneren
    if (window.location.hash) {
        const target = document.querySelector(window.location.hash);
        if (target) {
            requestAnimationFrame(() => smoother.scrollTo(target, false, SCROLL_OFFSET));
        }
    }
});

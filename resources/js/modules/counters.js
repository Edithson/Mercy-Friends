import { getLocale } from '../data/i18n.js';

export function initCountersAndScrollSpy() {
    const counters = document.querySelectorAll('.stat-counter');
    let animated = false;

    if (counters.length > 0) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !animated) {
                    animated = true;
                    counters.forEach(counter => {
                        const target = parseFloat(counter.dataset.target);
                        const decimals = parseInt(counter.dataset.decimals || '0', 10);
                        const duration = 1300;
                        const startTime = performance.now();
                        const loc = getLocale();

                        function step(now) {
                            const progress = Math.min((now - startTime) / duration, 1);
                            const eased = 1 - Math.pow(1 - progress, 3);
                            const current = (target * eased).toFixed(decimals);
                            counter.textContent = decimals > 0
                                ? (loc === 'en' ? current : current.replace('.', ','))
                                : current;
                            if (progress < 1) requestAnimationFrame(step);
                        }
                        requestAnimationFrame(step);
                    });
                }
            });
        }, { threshold: 0.25 });

        const band = document.getElementById('impact-band');
        if (band) observer.observe(band);
    }

    // Mise à jour de l'onglet actif au défilement
    const sections = ['accueil', 'a-propos', 'themes', 'pays', 'projets', 'contact'];
    window.addEventListener('scroll', () => {
        const scrollPos = window.scrollY + 140;
        let currentSec = 'accueil';
        sections.forEach(id => {
            const el = document.getElementById(id);
            if (el && el.offsetTop <= scrollPos) {
                currentSec = id;
            }
        });
        document.querySelectorAll('.nav-item').forEach(link => {
            if (link.dataset.nav === currentSec) {
                link.classList.add('nav-link-active');
            } else {
                link.classList.remove('nav-link-active');
            }
        });
    }, { passive: true });
}

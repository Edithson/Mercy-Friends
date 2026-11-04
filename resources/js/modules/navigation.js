import { COUNTRIES_DATA } from '../data/countries.js';
import { PROJECTS_DATA } from '../data/projects.js';
import { THEMES_DATA } from '../data/themes.js';

export function toggleMobileMenu(forceClose = false) {
    const menu = document.getElementById('mobile-menu');
    const icon = document.getElementById('mobile-menu-icon');
    if (!menu || !icon) return;

    if (forceClose) {
        menu.classList.add('hidden');
        icon.className = 'fa-solid fa-bars text-sm';
        return;
    }

    const isHidden = menu.classList.contains('hidden');
    menu.classList.toggle('hidden');
    icon.className = isHidden ? 'fa-solid fa-xmark text-sm' : 'fa-solid fa-bars text-sm';
}

export function toggleSearchBar() {
    const drawer = document.getElementById('search-drawer');
    if (!drawer) return;

    drawer.classList.toggle('hidden');
    if (!drawer.classList.contains('hidden')) {
        const input = document.getElementById('global-search-input');
        if (input) {
            input.focus();
            handleGlobalSearch(input.value);
        }
    }
}

export function handleGlobalSearch(query) {
    const resultsBox = document.getElementById('global-search-results');
    if (!resultsBox) return;

    const q = (query || '').trim().toLowerCase();

    // Suggestions par défaut si champ vide
    if (!q) {
        resultsBox.innerHTML = `
            <button type="button" onclick="selectCountry('cm'); toggleSearchBar(); toggleMobileMenu(true); document.getElementById('pays').scrollIntoView({behavior:'smooth'});" class="p-2.5 sm:p-3 rounded-xl bg-white/5 hover:bg-white/10 text-left text-xs flex items-center justify-between">
                <span><strong class="text-mercy-accent">Pays :</strong> Cameroun (19 projets)</span>
                <i class="fa-solid fa-arrow-right text-gray-400 text-xs"></i>
            </button>
            <button type="button" onclick="openProjectModal(101); toggleSearchBar(); toggleMobileMenu(true);" class="p-2.5 sm:p-3 rounded-xl bg-white/5 hover:bg-white/10 text-left text-xs flex items-center justify-between">
                <span><strong class="text-mercy-accent">Projet :</strong> 120 Forages Solaires &amp; Eau</span>
                <i class="fa-solid fa-arrow-right text-gray-400 text-xs"></i>
            </button>
        `;
        return;
    }

    const matches = [];
    COUNTRIES_DATA.forEach(c => {
        if (c.name.toLowerCase().includes(q) || c.focus.toLowerCase().includes(q)) {
            matches.push({
                badge: 'Pays',
                label: `${c.name} — ${c.projects} projets`,
                action: () => {
                    if (window.filterCountries) window.filterCountries('all');
                    if (window.selectCountry) window.selectCountry(c.id);
                    toggleSearchBar();
                    toggleMobileMenu(true);
                    const el = document.getElementById('pays');
                    if (el) el.scrollIntoView({ behavior: 'smooth' });
                }
            });
        }
    });

    PROJECTS_DATA.forEach(p => {
        if (p.title.toLowerCase().includes(q) || p.theme.toLowerCase().includes(q) || p.country.toLowerCase().includes(q)) {
            matches.push({
                badge: 'Projet',
                label: `${p.title} (${p.country})`,
                action: () => {
                    toggleSearchBar();
                    toggleMobileMenu(true);
                    if (window.openProjectModal) window.openProjectModal(p.id);
                }
            });
        }
    });

    THEMES_DATA.forEach((t, idx) => {
        if (t.title.toLowerCase().includes(q) || t.shortDesc.toLowerCase().includes(q)) {
            matches.push({
                badge: 'Thème',
                label: t.title,
                action: () => {
                    toggleSearchBar();
                    toggleMobileMenu(true);
                    if (window.openThemeModal) window.openThemeModal(idx);
                }
            });
        }
    });

    if (matches.length === 0) {
        resultsBox.innerHTML = `<p class="text-xs text-gray-400 col-span-2 py-2">Aucun résultat trouvé pour « ${query} ». Essayez « Eau », « Cameroun », « Haïti ».</p>`;
        return;
    }

    resultsBox.innerHTML = '';
    matches.slice(0, 6).forEach(item => {
        const btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'p-2.5 sm:p-3 rounded-xl bg-white/5 hover:bg-mercy-green/25 border border-white/10 text-left text-xs flex items-center justify-between gap-2 transition';
        btn.innerHTML = `
            <span class="truncate"><strong class="text-mercy-accent uppercase mr-1">[${item.badge}]</strong> ${item.label}</span>
            <i class="fa-solid fa-arrow-right text-mercy-accent shrink-0 text-xs"></i>
        `;
        btn.onclick = item.action;
        resultsBox.appendChild(btn);
    });
}

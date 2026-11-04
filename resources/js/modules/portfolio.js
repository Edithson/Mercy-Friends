import { COUNTRIES_DATA } from '../data/countries.js';
import { jumpToDonation } from './donation.js';
import { showToast } from './toast.js';

let currentRegionFilter = 'all';
let selectedCountryId = 'cm';

export function filterCountries(region) {
    currentRegionFilter = region;

    document.querySelectorAll('.region-tab-btn').forEach(btn => {
        if (btn.dataset.region === region) {
            btn.className = 'region-tab-btn px-4 py-2.5 rounded-xl text-xs sm:text-sm font-bold bg-mercy-green text-white transition';
        } else {
            btn.className = 'region-tab-btn px-4 py-2.5 rounded-xl text-xs sm:text-sm font-bold bg-white/10 text-gray-300 hover:bg-white/20 transition';
        }
    });

    const filtered = region === 'all' ? COUNTRIES_DATA : COUNTRIES_DATA.filter(c => c.region === region);
    if (!filtered.some(c => c.id === selectedCountryId) && filtered.length > 0) {
        selectedCountryId = filtered[0].id;
    }
    renderCountriesPortfolio();
}

export function selectCountry(countryId) {
    selectedCountryId = countryId;
    renderCountriesPortfolio();
}

export function renderCountriesPortfolio() {
    const filtered = currentRegionFilter === 'all'
        ? COUNTRIES_DATA
        : COUNTRIES_DATA.filter(c => c.region === currentRegionFilter);

    const countBadge = document.getElementById('country-count-badge');
    if (countBadge) {
        countBadge.textContent = `${filtered.length} pays affichés`;
    }

    // 1. Marqueurs SVG
    const svgGroup = document.getElementById('svg-country-markers');
    if (svgGroup) {
        svgGroup.innerHTML = filtered.map(c => {
            const isSelected = c.id === selectedCountryId;
            return `
                <g onclick="selectCountry('${c.id}')" class="cursor-pointer">
                    ${isSelected ? `<circle cx="${c.coords.x}" cy="${c.coords.y}" r="16" fill="#22C55E" opacity="0.3" class="map-dot-pulse"/>` : ''}
                    <circle cx="${c.coords.x}" cy="${c.coords.y}" r="${isSelected ? 7.5 : 5.5}" fill="${isSelected ? '#22C55E' : '#16A34A'}" stroke="#ffffff" stroke-width="${isSelected ? 2.5 : 1.5}"/>
                    ${isSelected ? `<text x="${c.coords.x}" y="${c.coords.y - 13}" text-anchor="middle" fill="#ffffff" font-size="12" font-weight="800">${c.name}</text>` : ''}
                </g>
            `;
        }).join('');
    }

    // 2. Grille de boutons Pays
    const pillsGrid = document.getElementById('countries-pills-grid');
    if (pillsGrid) {
        pillsGrid.innerHTML = filtered.map(c => {
            const isSelected = c.id === selectedCountryId;
            return `
                <button type="button" onclick="selectCountry('${c.id}')" class="p-3.5 rounded-2xl border text-left transition-all flex items-center justify-between ${isSelected ? 'bg-mercy-green border-mercy-accent text-white shadow-glow' : 'bg-mercy-charcoal border-white/10 text-gray-200 hover:border-mercy-accent/50'}">
                    <div class="truncate pr-2">
                        <span class="block text-sm font-extrabold truncate">${c.name}</span>
                        <span class="block text-[11px] ${isSelected ? 'text-white/90' : 'text-gray-400'}">${c.projects} projets</span>
                    </div>
                    <i class="fa-solid fa-chevron-right text-xs ${isSelected ? 'text-white' : 'text-mercy-accent'}"></i>
                </button>
            `;
        }).join('');
    }

    // 3. Fiche détaillée du pays sélectionné
    const active = COUNTRIES_DATA.find(c => c.id === selectedCountryId) || COUNTRIES_DATA[0];
    const detailCard = document.getElementById('country-detail-card');
    if (detailCard && active) {
        detailCard.innerHTML = `
            <div class="flex items-center justify-between gap-2 pb-4 border-b border-white/10">
                <div>
                    <span class="text-xs font-extrabold uppercase tracking-wider text-mercy-accent">${active.regionLabel}</span>
                    <h3 class="text-2xl sm:text-3xl font-black text-white mt-0.5">${active.name}</h3>
                </div>
                <span class="w-11 h-11 rounded-2xl bg-mercy-green/20 border border-mercy-accent/40 text-mercy-accent flex items-center justify-center font-black text-sm uppercase">
                    ${active.id}
                </span>
            </div>

            <p class="text-sm text-gray-300 leading-relaxed mt-5">
                ${active.context}
            </p>

            <div class="grid grid-cols-3 gap-3 my-6">
                <div class="p-3.5 rounded-2xl bg-mercy-black border border-white/10 text-center">
                    <span class="block text-xl sm:text-2xl font-black text-mercy-accent">${active.projects}</span>
                    <span class="block text-[11px] text-gray-400 font-semibold mt-0.5">Projets actifs</span>
                </div>
                <div class="p-3.5 rounded-2xl bg-mercy-black border border-white/10 text-center">
                    <span class="block text-lg sm:text-xl font-black text-white">${active.budget}</span>
                    <span class="block text-[11px] text-gray-400 font-semibold mt-0.5">Budget 2026</span>
                </div>
                <div class="p-3.5 rounded-2xl bg-mercy-black border border-white/10 text-center">
                    <span class="block text-lg sm:text-xl font-black text-mercy-accent">${active.people}</span>
                    <span class="block text-[11px] text-gray-400 font-semibold mt-0.5">Soutenus</span>
                </div>
            </div>

            <div class="p-4 rounded-2xl bg-white/5 border border-white/10 text-xs text-gray-200 mb-6">
                <span class="font-extrabold text-mercy-accent uppercase block mb-1">Priorités opérationnelles :</span>
                ${active.focus}
            </div>

            <button type="button" onclick="supportCountry('${active.name}')" class="w-full py-3.5 px-5 rounded-xl bg-mercy-green hover:bg-mercy-darkGreen text-white font-extrabold text-sm transition flex items-center justify-center gap-2 shadow-glow">
                <i class="fa-solid fa-hand-holding-heart"></i>
                <span>Soutenir nos projets — ${active.name}</span>
            </button>
        `;
    }
}

export function supportCountry(countryName) {
    jumpToDonation('once', 50);
    showToast(`Votre don contribuera à nos programmes prioritaires (${countryName} & urgences terrain).`, 'info');
}

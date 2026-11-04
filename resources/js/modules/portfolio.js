import { COUNTRIES_DATA } from '../data/countries.js';
import { jumpToDonation } from './donation.js';
import { showToast } from './toast.js';

const WORLD_VIEWBOX = { x: 30.767, y: 241.591, w: 784.077, h: 458.627 };
const REGION_VIEWBOXES = {
    all: { x: 30.767, y: 241.591, w: 784.077, h: 458.627 },
    afrique: { x: 330, y: 440, w: 230, h: 180 },
    asie: { x: 460, y: 400, w: 210, h: 130 },
    amerique: { x: 180, y: 450, w: 140, h: 160 }
};

let currentRegionFilter = 'all';
let selectedCountryId = 'cm';
let currentViewBox = { ...WORLD_VIEWBOX };
let animationId = null;
let isPanning = false;
let startPointer = { x: 0, y: 0 };
let startVB = { ...WORLD_VIEWBOX };
let hasMoved = false;

function applyViewBox(vb) {
    const svg = document.getElementById('interactive-world-map');
    if (svg) {
        svg.setAttribute('viewBox', `${vb.x.toFixed(3)} ${vb.y.toFixed(3)} ${vb.w.toFixed(3)} ${vb.h.toFixed(3)}`);
    }
}

export function animateViewBoxTo(target, duration = 400) {
    if (animationId) cancelAnimationFrame(animationId);
    const start = { ...currentViewBox };
    const startTime = performance.now();

    function step(now) {
        const elapsed = now - startTime;
        const progress = Math.min(elapsed / duration, 1);
        const ease = 1 - Math.pow(1 - progress, 3); // easeOutCubic

        currentViewBox = {
            x: start.x + (target.x - start.x) * ease,
            y: start.y + (target.y - start.y) * ease,
            w: start.w + (target.w - start.w) * ease,
            h: start.h + (target.h - start.h) * ease
        };
        applyViewBox(currentViewBox);

        if (progress < 1) {
            animationId = requestAnimationFrame(step);
        } else {
            animationId = null;
        }
    }
    animationId = requestAnimationFrame(step);
}

export function zoomMapIn() {
    const zoomFactor = 0.72;
    if (currentViewBox.w * zoomFactor < 70) return;
    const newW = currentViewBox.w * zoomFactor;
    const newH = currentViewBox.h * zoomFactor;
    const newX = currentViewBox.x + (currentViewBox.w - newW) / 2;
    const newY = currentViewBox.y + (currentViewBox.h - newH) / 2;
    animateViewBoxTo({ x: newX, y: newY, w: newW, h: newH }, 240);
}

export function zoomMapOut() {
    const zoomFactor = 1.38;
    let newW = Math.min(currentViewBox.w * zoomFactor, WORLD_VIEWBOX.w);
    let newH = Math.min(currentViewBox.h * zoomFactor, WORLD_VIEWBOX.h);
    let newX = currentViewBox.x + (currentViewBox.w - newW) / 2;
    let newY = currentViewBox.y + (currentViewBox.h - newH) / 2;

    if (newX < WORLD_VIEWBOX.x) newX = WORLD_VIEWBOX.x;
    if (newY < WORLD_VIEWBOX.y) newY = WORLD_VIEWBOX.y;
    if (newX + newW > WORLD_VIEWBOX.x + WORLD_VIEWBOX.w) newX = WORLD_VIEWBOX.x + WORLD_VIEWBOX.w - newW;
    if (newY + newH > WORLD_VIEWBOX.y + WORLD_VIEWBOX.h) newY = WORLD_VIEWBOX.y + WORLD_VIEWBOX.h - newH;

    animateViewBoxTo({ x: newX, y: newY, w: newW, h: newH }, 240);
}

export function resetMapZoom() {
    const target = REGION_VIEWBOXES[currentRegionFilter] || WORLD_VIEWBOX;
    animateViewBoxTo(target, 350);
}

export function filterCountries(region) {
    currentRegionFilter = region;

    document.querySelectorAll('.region-tab-btn').forEach(btn => {
        const isActive = btn.dataset.region === region;
        btn.className = isActive
            ? 'region-tab-btn px-4 py-2.5 rounded-xl text-xs sm:text-sm font-bold bg-mercy-green text-white transition flex items-center gap-2 shadow-glow'
            : 'region-tab-btn px-4 py-2.5 rounded-xl text-xs sm:text-sm font-bold bg-white/10 text-gray-300 hover:bg-white/20 transition flex items-center gap-2';
    });

    const targetVB = REGION_VIEWBOXES[region] || WORLD_VIEWBOX;
    animateViewBoxTo(targetVB, 420);

    const filtered = region === 'all'
        ? COUNTRIES_DATA
        : COUNTRIES_DATA.filter(c => c.region === region);

    document.querySelectorAll('#map-countries-layer .mercy-country').forEach(el => {
        const countryId = el.dataset.country;
        const matches = region === 'all' || filtered.some(c => c.id === countryId);
        el.classList.toggle('is-dimmed', !matches);
    });

    document.querySelectorAll('#map-pins-layer .map-pin').forEach(pin => {
        const countryId = pin.dataset.country;
        const matches = region === 'all' || filtered.some(c => c.id === countryId);
        pin.style.display = matches ? '' : 'none';
    });

    if (!filtered.some(c => c.id === selectedCountryId) && filtered.length > 0) {
        selectedCountryId = filtered[0].id;
    }

    renderCountriesPortfolio();
}

export function selectCountry(countryId) {
    selectedCountryId = countryId;
    renderCountriesPortfolio();

    const pill = document.getElementById(`pill-${countryId}`);
    if (pill) {
        pill.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }
}

function updateTooltip(e, countryId) {
    const tooltip = document.getElementById('map-country-tooltip');
    const container = document.getElementById('map-viewport-container');
    const country = COUNTRIES_DATA.find(c => c.id === countryId);
    if (!tooltip || !container || !country) return;

    const flagEl = document.getElementById('tooltip-flag');
    const nameEl = document.getElementById('tooltip-name');
    const regionEl = document.getElementById('tooltip-region');
    const projectsEl = document.getElementById('tooltip-projects');

    if (flagEl) flagEl.textContent = country.flag || '🌍';
    if (nameEl) nameEl.textContent = country.name;
    if (regionEl) regionEl.textContent = country.regionLabel;
    if (projectsEl) projectsEl.textContent = `${country.projects} projets actifs`;

    const rect = container.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;
    const clampedX = Math.max(90, Math.min(x, rect.width - 90));
    const clampedY = Math.max(70, Math.min(y, rect.height - 20));

    tooltip.style.left = `${clampedX}px`;
    tooltip.style.top = `${clampedY - 14}px`;
    tooltip.classList.remove('hidden');
}

function hideTooltip() {
    const tooltip = document.getElementById('map-country-tooltip');
    if (tooltip) tooltip.classList.add('hidden');
}

export function initWorldMapEvents() {
    const container = document.getElementById('map-viewport-container');
    if (!container) return;

    // Événements sur les formes vectorielles et les balises
    const interactiveElements = document.querySelectorAll('#map-countries-layer .mercy-country, #map-pins-layer .map-pin');
    interactiveElements.forEach(el => {
        const countryId = el.dataset.country;
        el.addEventListener('mouseenter', (e) => updateTooltip(e, countryId));
        el.addEventListener('mousemove', (e) => updateTooltip(e, countryId));
        el.addEventListener('mouseleave', hideTooltip);
        el.addEventListener('click', (e) => {
            if (hasMoved) return;
            e.stopPropagation();
            hideTooltip();
            selectCountry(countryId);
        });
        el.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                selectCountry(countryId);
            }
        });
    });

    // Panning interactif à la souris
    container.addEventListener('mousedown', (e) => {
        if (e.button !== 0 || e.target.closest('button')) return;
        isPanning = true;
        hasMoved = false;
        startPointer = { x: e.clientX, y: e.clientY };
        startVB = { ...currentViewBox };
        container.style.cursor = 'grabbing';
    });

    window.addEventListener('mousemove', (e) => {
        if (!isPanning) return;
        const dx = e.clientX - startPointer.x;
        const dy = e.clientY - startPointer.y;
        if (Math.abs(dx) > 3 || Math.abs(dy) > 3) hasMoved = true;

        const rect = container.getBoundingClientRect();
        const scaleX = currentViewBox.w / rect.width;
        const scaleY = currentViewBox.h / rect.height;

        currentViewBox.x = startVB.x - dx * scaleX;
        currentViewBox.y = startVB.y - dy * scaleY;
        applyViewBox(currentViewBox);
    });

    window.addEventListener('mouseup', () => {
        if (isPanning) {
            isPanning = false;
            container.style.cursor = '';
        }
    });

    container.addEventListener('wheel', (e) => {
        e.preventDefault();
        if (e.deltaY < 0) {
            zoomMapIn();
        } else {
            zoomMapOut();
        }
    }, { passive: false });
}

export function renderCountriesPortfolio() {
    const filtered = currentRegionFilter === 'all'
        ? COUNTRIES_DATA
        : COUNTRIES_DATA.filter(c => c.region === currentRegionFilter);

    const countBadge = document.getElementById('country-count-badge');
    if (countBadge) {
        countBadge.textContent = `${filtered.length} pays d'intervention affichés`;
    }

    const active = COUNTRIES_DATA.find(c => c.id === selectedCountryId) || filtered[0] || COUNTRIES_DATA[0];

    document.querySelectorAll('#map-countries-layer .mercy-country').forEach(el => {
        el.classList.toggle('is-active', el.dataset.country === active.id);
    });
    document.querySelectorAll('#map-pins-layer .map-pin').forEach(pin => {
        pin.classList.toggle('is-active', pin.dataset.country === active.id);
    });

    const targetGroup = document.getElementById('map-active-target');
    if (targetGroup && active.center) {
        targetGroup.setAttribute('transform', `translate(${active.center.x}, ${active.center.y})`);
        targetGroup.classList.remove('opacity-0');
        targetGroup.classList.add('opacity-100');
    }

    const pillsGrid = document.getElementById('countries-pills-grid');
    if (pillsGrid) {
        pillsGrid.innerHTML = filtered.map(c => {
            const isSelected = c.id === active.id;
            return `
                <button type="button"
                        id="pill-${c.id}"
                        onclick="selectCountry('${c.id}')"
                        class="p-3 rounded-2xl border text-left transition-all flex items-center justify-between ${
                            isSelected
                                ? 'bg-mercy-green border-mercy-accent text-white shadow-glow ring-2 ring-mercy-accent/40'
                                : 'bg-mercy-black/70 border-white/10 text-gray-200 hover:border-mercy-accent/50 hover:bg-white/5'
                        }">
                    <div class="truncate pr-2">
                        <div class="flex items-center gap-1.5">
                            <span class="text-sm">${c.flag || '🌍'}</span>
                            <span class="text-xs sm:text-sm font-extrabold truncate">${c.name}</span>
                        </div>
                        <span class="block text-[11px] ${isSelected ? 'text-white/90' : 'text-gray-400'} mt-0.5">${c.projects} projets actifs</span>
                    </div>
                    <i class="fa-solid fa-chevron-right text-xs ${isSelected ? 'text-white' : 'text-mercy-accent'}"></i>
                </button>
            `;
        }).join('');
    }

    const detailCard = document.getElementById('country-detail-card');
    if (detailCard && active) {
        detailCard.innerHTML = `
            <div class="flex items-center justify-between gap-2 pb-4 border-b border-white/10">
                <div class="flex items-center gap-3">
                    <span class="text-3xl sm:text-4xl shadow-sm">${active.flag || '🌍'}</span>
                    <div>
                        <span class="text-xs font-extrabold uppercase tracking-wider text-mercy-accent">${active.regionLabel}</span>
                        <h3 class="text-2xl sm:text-3xl font-black text-white mt-0.5 leading-tight">${active.name}</h3>
                    </div>
                </div>
                <span class="w-12 h-12 rounded-2xl bg-mercy-green/20 border border-mercy-accent/40 text-mercy-accent flex items-center justify-center font-black text-sm uppercase">
                    ${active.id}
                </span>
            </div>

            <p class="text-sm text-gray-300 leading-relaxed mt-5">
                ${active.context}
            </p>

            <div class="grid grid-cols-3 gap-2.5 my-6">
                <div class="p-3.5 rounded-2xl bg-mercy-black border border-white/10 text-center">
                    <span class="block text-xl sm:text-2xl font-black text-mercy-accent">${active.projects}</span>
                    <span class="block text-[11px] text-gray-400 font-semibold mt-0.5">Projets actifs</span>
                </div>
                <div class="p-3.5 rounded-2xl bg-mercy-black border border-white/10 text-center">
                    <span class="block text-base sm:text-lg font-black text-white">${active.budget}</span>
                    <span class="block text-[11px] text-gray-400 font-semibold mt-0.5">Budget 2026</span>
                </div>
                <div class="p-3.5 rounded-2xl bg-mercy-black border border-white/10 text-center">
                    <span class="block text-base sm:text-lg font-black text-mercy-accent">${active.people}</span>
                    <span class="block text-[11px] text-gray-400 font-semibold mt-0.5">Soutenus</span>
                </div>
            </div>

            <div class="p-4 rounded-2xl bg-white/5 border border-white/10 text-xs text-gray-200 mb-6">
                <span class="font-extrabold text-mercy-accent uppercase block mb-1">Priorités opérationnelles :</span>
                ${active.focus}
            </div>

            <button type="button" onclick="supportCountry('${active.name}')" class="w-full py-3.5 px-5 rounded-xl bg-mercy-green hover:bg-mercy-darkGreen text-white font-extrabold text-sm transition flex items-center justify-center gap-2 shadow-glow group">
                <i class="fa-solid fa-hand-holding-heart group-hover:scale-110 transition-transform"></i>
                <span>Soutenir nos programmes — ${active.name}</span>
            </button>
        `;
    }
}

export function supportCountry(countryName) {
    jumpToDonation('once', 50);
    showToast(`Votre don contribuera à nos programmes prioritaires (${countryName} & urgences terrain).`, 'info');
}

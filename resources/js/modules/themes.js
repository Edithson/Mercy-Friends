import { THEMES_DATA } from '../data/themes.js';
import { openUniversalModal, closeUniversalModal } from './modals.js';
import { jumpToDonation } from './donation.js';
import { t } from '../data/i18n.js';

export function renderThemes() {
    const grid = document.getElementById('themes-grid');
    if (!grid) return;

    grid.innerHTML = THEMES_DATA.map((theme, index) => `
        <article onclick="openThemeModal(${index})" class="cursor-pointer group bg-white rounded-2xl sm:rounded-3xl p-4 sm:p-6 border border-gray-200 hover:border-mercy-green shadow-sm hover:shadow-soft transition-all duration-300 flex flex-col justify-between">
            <div>
                <div class="flex items-center justify-between mb-3.5 sm:mb-5">
                    <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl sm:rounded-2xl bg-mercy-black group-hover:bg-mercy-green text-mercy-accent group-hover:text-white flex items-center justify-center text-lg sm:text-xl transition-colors">
                        <i class="fa-solid ${theme.icon}"></i>
                    </div>
                    <span class="text-[10px] sm:text-[11px] font-extrabold text-mercy-darkGreen bg-mercy-soft px-2.5 py-0.5 sm:px-3 sm:py-1 rounded-full">
                        ${theme.metric}
                    </span>
                </div>
                <h3 class="text-base sm:text-xl font-black text-mercy-black group-hover:text-mercy-green transition-colors mb-1.5 sm:mb-2 leading-snug">
                    ${theme.title}
                </h3>
                <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                    ${theme.shortDesc}
                </p>
            </div>
            <div class="mt-4 sm:mt-6 pt-3 sm:pt-4 border-t border-gray-100 flex items-center justify-between text-xs font-bold text-mercy-black group-hover:text-mercy-green">
                <span>${t('explore_approach')}</span>
                <i class="fa-solid fa-plus-circle text-sm sm:text-base text-mercy-green group-hover:rotate-90 transition-transform"></i>
            </div>
        </article>
    `).join('');
}

export function openThemeModal(index) {
    const theme = THEMES_DATA[index];
    if (!theme) return;

    openUniversalModal(
        t('theme_badge'),
        theme.title,
        `
            <div class="p-4 rounded-2xl bg-mercy-soft border border-mercy-green/30 flex items-center gap-3 mb-4">
                <div class="w-10 h-10 rounded-xl bg-mercy-green text-white flex items-center justify-center text-lg shrink-0">
                    <i class="fa-solid ${theme.icon}"></i>
                </div>
                <div>
                    <span class="text-xs uppercase font-extrabold text-mercy-darkGreen">${t('key_metric_2026')}</span>
                    <p class="font-black text-mercy-black text-sm">${theme.metric}</p>
                </div>
            </div>
            ${theme.details}
            <div class="mt-6 pt-4 border-t border-gray-200 flex flex-wrap gap-3">
                <button type="button" onclick="closeUniversalModal(); jumpToDonation('once', 50);" class="px-5 py-2.5 rounded-xl bg-mercy-green hover:bg-mercy-darkGreen text-white font-bold text-xs transition">
                    ${t('support_theme_btn')}
                </button>
                <button type="button" onclick="closeUniversalModal(); document.getElementById('projets').scrollIntoView({behavior:'smooth'});" class="px-5 py-2.5 rounded-xl bg-gray-100 hover:bg-gray-200 text-mercy-black font-bold text-xs transition">
                    ${t('view_projects_field')}
                </button>
            </div>
        `
    );
}

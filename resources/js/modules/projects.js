import { PROJECTS_DATA } from '../data/projects.js';
import { t } from '../data/i18n.js';
import { openUniversalModal, closeUniversalModal } from './modals.js';
import { jumpToDonation } from './donation.js';

export function renderProjects() {
    const themeSelect = document.getElementById('project-theme-filter');
    const statusSelect = document.getElementById('project-status-filter');
    const grid = document.getElementById('projects-grid');
    if (!grid) return;

    const themeVal = themeSelect ? themeSelect.value : 'all';
    const statusVal = statusSelect ? statusSelect.value : 'all';

    const filtered = PROJECTS_DATA.filter(p => {
        const matchTheme = themeVal === 'all' || p.themeCategory === themeVal;
        const matchStatus = statusVal === 'all' || p.statusCategory === statusVal;
        return matchTheme && matchStatus;
    });

    if (filtered.length === 0) {
        grid.innerHTML = `
            <div class="col-span-full bg-mercy-surface border border-gray-200 rounded-3xl p-10 text-center">
                <p class="font-bold text-mercy-black text-base">${t('filter_no_projects')}</p>
                <button type="button" onclick="resetProjectFilters()" class="mt-4 px-5 py-2.5 rounded-xl bg-mercy-green text-white text-xs font-extrabold">
                    ${t('reset_filters')}
                </button>
            </div>
        `;
        return;
    }

    grid.innerHTML = filtered.map(p => {
        const statusBadgeColor = p.statusCategory === 'urgent'
            ? 'bg-red-600 text-white'
            : (p.statusCategory === 'sustained' ? 'bg-mercy-black text-mercy-accent' : 'bg-mercy-green text-white');

        return `
            <article class="bg-mercy-surface border border-gray-200 hover:border-mercy-green rounded-2xl sm:rounded-3xl overflow-hidden shadow-sm hover:shadow-soft transition-all duration-300 flex flex-col">
                <div class="relative h-40 sm:h-52 overflow-hidden">
                    <img src="${p.image}"
                        onerror="this.onerror=null;this.src='/images/placeholder-project.svg';"
                        alt="${p.title}"
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-2.5 left-2.5 flex flex-wrap gap-1.5">
                        <span class="px-2.5 py-0.5 rounded-lg bg-mercy-black/90 text-white text-[10px] sm:text-xs font-bold">${p.country}</span>
                        <span class="px-2.5 py-0.5 rounded-lg ${statusBadgeColor} text-[10px] sm:text-xs font-bold">${p.status}</span>
                    </div>
                </div>

                <div class="p-4 sm:p-6 flex-1 flex flex-col justify-between">
                    <div>
                        <span class="text-[10px] sm:text-xs font-extrabold uppercase tracking-wider text-mercy-darkGreen">${p.theme}</span>
                        <h3 class="text-sm sm:text-base lg:text-lg font-bold text-mercy-black mt-0.5 mb-1.5 leading-snug">
                            ${p.title}
                        </h3>
                        <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                            ${p.summary}
                        </p>
                    </div>

                    <div class="mt-4 sm:mt-6 pt-3 sm:pt-4 border-t border-gray-200">
                        <div class="flex justify-between text-[11px] sm:text-xs font-bold mb-1.5">
                            <span class="text-gray-600"><i class="fa-solid fa-users text-mercy-green mr-1"></i> ${p.beneficiaries}</span>
                            <span class="text-mercy-darkGreen">${p.progress} % (${p.goal})</span>
                        </div>
                        <div class="w-full h-1.5 sm:h-2 rounded-full bg-gray-200 overflow-hidden mb-3 sm:mb-4">
                            <div class="h-full bg-mercy-green rounded-full" style="width: ${p.progress}%"></div>
                        </div>
                        <button type="button" onclick="openProjectModal(${p.id})" class="w-full py-2.5 sm:py-3 px-4 rounded-xl bg-mercy-black hover:bg-mercy-green text-white text-xs font-bold transition flex items-center justify-center gap-2">
                            <span>${t('see_full_project')}</span>
                            <i class="fa-solid fa-arrow-right text-[11px]"></i>
                        </button>
                    </div>
                </div>
            </article>
        `;
    }).join('');
}

export function resetProjectFilters() {
    const themeSelect = document.getElementById('project-theme-filter');
    const statusSelect = document.getElementById('project-status-filter');
    if (themeSelect) themeSelect.value = 'all';
    if (statusSelect) statusSelect.value = 'all';
    renderProjects();
}

export function openProjectModal(projectId) {
    const p = PROJECTS_DATA.find(item => item.id === projectId);
    if (!p) return;

    openUniversalModal(
        `${p.country} • ${p.theme}`,
        p.title,
        `
            <img src="${p.image}" onerror="this.onerror=null;this.src='/images/placeholder-project.svg';" alt="${p.title}" class="w-full h-56 object-cover rounded-2xl mb-4">
            <div class="grid grid-cols-3 gap-3 mb-4 text-center">
                <div class="p-3 rounded-xl bg-mercy-surface border border-gray-200">
                    <span class="block text-xs text-gray-500">${t('modal_status')}</span>
                    <strong class="text-xs sm:text-sm text-mercy-black">${p.status}</strong>
                </div>
                <div class="p-3 rounded-xl bg-mercy-surface border border-gray-200">
                    <span class="block text-xs text-gray-500">${t('modal_beneficiaries')}</span>
                    <strong class="text-xs sm:text-sm text-mercy-green">${p.beneficiaries}</strong>
                </div>
                <div class="p-3 rounded-xl bg-mercy-surface border border-gray-200">
                    <span class="block text-xs text-gray-500">${t('modal_progress')}</span>
                    <strong class="text-xs sm:text-sm text-mercy-black">${p.progress} % (${p.goal})</strong>
                </div>
            </div>
            ${p.story}
            <div class="mt-6 pt-4 border-t border-gray-200 flex flex-wrap items-center justify-between gap-3">
                <span class="text-xs text-gray-500">${t('modal_audit_note')}</span>
                <button type="button" onclick="closeUniversalModal(); jumpToDonation('once', 50);" class="px-5 py-3 rounded-xl bg-mercy-green hover:bg-mercy-darkGreen text-white font-extrabold text-xs transition">
                    ${t('contribute_project_btn')}
                </button>
            </div>
        `
    );
}

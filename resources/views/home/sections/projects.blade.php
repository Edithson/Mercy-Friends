<!-- 8. SECTION PROJETS SUR LE TERRAIN (OPTIMISÉE MOBILE) -->
<section id="projets" class="py-12 sm:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-4 sm:gap-6 mb-6 sm:mb-10">
            <div class="max-w-2xl">
                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-mercy-soft text-mercy-darkGreen text-[11px] sm:text-xs font-extrabold uppercase tracking-wider">
                    <i class="fa-solid fa-compass"></i> {{ __('site.projects.tag') }}
                </span>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-mercy-black mt-1.5">
                    {{ __('site.projects.title') }}
                </h2>
                <p class="text-gray-600 mt-1.5 text-xs sm:text-sm lg:text-base">
                    {{ __('site.projects.subtitle') }}
                </p>
            </div>

            <!-- Filtres Thème + Statut -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 sm:gap-3 w-full lg:w-auto">
                <select id="project-theme-filter" onchange="renderProjects()" aria-label="Theme" class="px-3 py-2 sm:px-4 sm:py-2.5 rounded-xl border border-gray-300 bg-mercy-surface text-xs sm:text-sm font-semibold text-mercy-black focus:outline-none focus:border-mercy-green">
                    <option value="all">{{ __('site.projects.filter_all') }}</option>
                    <option value="eau">{{ __('site.projects.filter_water') }}</option>
                    <option value="nutrition">{{ __('site.projects.filter_nutrition') }}</option>
                    <option value="agro">{{ __('site.projects.filter_agroforestry') }}</option>
                    <option value="sante">{{ __('site.projects.filter_health') }}</option>
                    <option value="education">{{ __('site.projects.filter_education') }}</option>
                </select>

                <select id="project-status-filter" onchange="renderProjects()" aria-label="Status" class="px-3 py-2 sm:px-4 sm:py-2.5 rounded-xl border border-gray-300 bg-mercy-surface text-xs sm:text-sm font-semibold text-mercy-black focus:outline-none focus:border-mercy-green">
                    <option value="all">{{ __('site.projects.status_all') }}</option>
                    <option value="urgent">{{ __('site.projects.status_urgent') }}</option>
                    <option value="ongoing">{{ __('site.projects.status_ongoing') }}</option>
                    <option value="sustained">{{ __('site.projects.status_sustained') }}</option>
                </select>
            </div>
        </div>

        <!-- Grille des cartes de projets injectée dynamiquement par projects.js -->
        <div id="projects-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6"></div>
    </div>
</section>

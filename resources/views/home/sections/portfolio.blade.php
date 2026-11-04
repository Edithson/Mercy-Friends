<!-- 7. PORTEFEUILLE MONDIAL : PAYS D'INTERVENTION (OPTIMISÉE MOBILE) -->
<section id="pays" class="py-12 sm:py-20 bg-mercy-black text-white relative overflow-hidden">
    <!-- Éléments d'arrière-plan d'ambiance -->
    <div class="absolute -top-32 -left-32 w-96 h-96 rounded-full bg-mercy-green/10 blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-32 -right-32 w-96 h-96 rounded-full bg-mercy-accent/10 blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- En-tête Portefeuille Mondial -->
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-4 sm:gap-6 mb-6 sm:mb-10">
            <div class="max-w-2xl">
                <div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-mercy-green/20 border border-mercy-accent/30 text-mercy-accent text-[11px] sm:text-xs font-extrabold uppercase tracking-wider mb-2 sm:mb-3">
                    <i class="fa-solid fa-earth-americas"></i> {{ __('site.portfolio.tag') }}
                </div>
                <h2 class="text-2xl sm:text-4xl lg:text-5xl font-black tracking-tight text-white">
                    {{ __('site.portfolio.title') }}
                </h2>
                <p class="text-gray-300 mt-2 text-xs sm:text-sm lg:text-base leading-relaxed">
                    {{ __('site.portfolio.subtitle') }}
                </p>
            </div>

            <!-- Onglets de filtre régional avec défilement fluide sur mobile -->
            <div class="flex items-center gap-1.5 sm:gap-2 overflow-x-auto no-scrollbar pb-1 shrink-0" role="tablist" aria-label="Regions">
                <button type="button" onclick="filterCountries('all')" data-region="all" class="region-tab-btn px-3 py-1.5 sm:px-4 sm:py-2.5 rounded-lg sm:rounded-xl text-xs font-bold bg-mercy-green text-white transition flex items-center gap-1.5 shadow-glow whitespace-nowrap">
                    <i class="fa-solid fa-globe text-[11px]"></i>
                    <span>{{ __('site.portfolio.filter_all') }}</span>
                </button>
                <button type="button" onclick="filterCountries('afrique')" data-region="afrique" class="region-tab-btn px-3 py-1.5 sm:px-4 sm:py-2.5 rounded-lg sm:rounded-xl text-xs font-bold bg-white/10 text-gray-300 hover:bg-white/20 transition flex items-center gap-1.5 whitespace-nowrap">
                    <span>{{ __('site.portfolio.filter_africa') }}</span>
                </button>
                <button type="button" onclick="filterCountries('asie')" data-region="asie" class="region-tab-btn px-3 py-1.5 sm:px-4 sm:py-2.5 rounded-lg sm:rounded-xl text-xs font-bold bg-white/10 text-gray-300 hover:bg-white/20 transition flex items-center gap-1.5 whitespace-nowrap">
                    <span>{{ __('site.portfolio.filter_asia_mideast') }}</span>
                </button>
                <button type="button" onclick="filterCountries('amerique')" data-region="amerique" class="region-tab-btn px-3 py-1.5 sm:px-4 sm:py-2.5 rounded-lg sm:rounded-xl text-xs font-bold bg-white/10 text-gray-300 hover:bg-white/20 transition flex items-center gap-1.5 whitespace-nowrap">
                    <span>{{ __('site.portfolio.filter_americas') }}</span>
                </button>
            </div>
        </div>

        <!-- Interface Interactive : Carte Vectorielle Réelle (Gauche) + Fiche Pays Détaillée (Droite) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 sm:gap-8 items-start">

            <!-- Colonne Gauche : Carte du Monde Vectorielle Interactive SVG -->
            <div class="lg:col-span-7 space-y-4 sm:space-y-6">

                <!-- Cadre de la carte -->
                <div class="bg-mercy-charcoal border border-white/15 rounded-2xl sm:rounded-3xl p-3 sm:p-5 relative overflow-hidden shadow-2xl">

                    <!-- Barre supérieure de statut de la carte -->
                    <div class="flex items-center justify-between gap-2 mb-3 flex-wrap">
                        <div class="flex items-center gap-1.5 text-[11px] sm:text-xs text-gray-300 font-medium">
                            <span class="inline-block w-2 h-2 rounded-full bg-mercy-green animate-pulse"></span>
                            <span>{{ __('site.portfolio.dossier_select_hint') }}</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span id="country-count-badge" class="text-[10px] sm:text-xs font-black text-mercy-accent bg-mercy-green/20 px-2.5 py-0.5 rounded-full border border-mercy-accent/30">
                                24
                            </span>
                        </div>
                    </div>

                    <!-- Conteneur SVG avec ratio cinématographique -->
                    <div id="map-viewport-container" class="relative w-full aspect-[16/10] sm:aspect-[16/9.5] bg-[#070C09] rounded-xl sm:rounded-2xl border border-white/10 overflow-hidden group">

                        <!-- La véritable carte SVG vectorielle mondiale -->
                        @include('home.partials.world-map-svg')

                        <!-- Boutons flottants de zoom & recentrage (Compacts) -->
                        <div class="absolute bottom-2.5 right-2.5 sm:bottom-3.5 sm:right-3.5 z-20 flex flex-col gap-1 bg-mercy-black/85 backdrop-blur-md p-1 rounded-lg sm:rounded-xl border border-white/15 shadow-xl">
                            <button type="button" onclick="zoomMapIn()" aria-label="{{ __('site.portfolio.zoom_in') }}" title="{{ __('site.portfolio.zoom_in') }}" class="w-7 h-7 sm:w-8 sm:h-8 rounded-md sm:rounded-lg bg-white/10 hover:bg-mercy-green text-white flex items-center justify-center text-xs sm:text-sm font-bold transition">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                            <button type="button" onclick="zoomMapOut()" aria-label="{{ __('site.portfolio.zoom_out') }}" title="{{ __('site.portfolio.zoom_out') }}" class="w-7 h-7 sm:w-8 sm:h-8 rounded-md sm:rounded-lg bg-white/10 hover:bg-mercy-green text-white flex items-center justify-center text-xs sm:text-sm font-bold transition">
                                <i class="fa-solid fa-minus"></i>
                            </button>
                            <button type="button" onclick="resetMapZoom()" aria-label="{{ __('site.portfolio.zoom_reset') }}" title="{{ __('site.portfolio.zoom_reset') }}" class="w-7 h-7 sm:w-8 sm:h-8 rounded-md sm:rounded-lg bg-white/10 hover:bg-mercy-green text-white flex items-center justify-center text-[10px] sm:text-xs font-bold transition">
                                <i class="fa-solid fa-arrows-rotate"></i>
                            </button>
                        </div>

                        <!-- Info-bulle / Tooltip flottante interactive -->
                        <div id="map-country-tooltip" class="pointer-events-none hidden absolute z-30 bg-mercy-black/95 text-white border border-mercy-accent/50 rounded-xl px-3 py-2 shadow-2xl backdrop-blur-md text-xs -translate-x-1/2 -translate-y-full transition-opacity duration-150">
                            <div class="flex items-center gap-1.5">
                                <span id="tooltip-flag" class="text-sm"></span>
                                <strong id="tooltip-name" class="text-xs sm:text-sm font-black text-white"></strong>
                            </div>
                            <p id="tooltip-region" class="text-[9px] text-gray-400 font-medium"></p>
                            <div class="mt-1 pt-1 border-t border-white/15 flex items-center justify-between gap-2 text-[10px]">
                                <span id="tooltip-projects" class="font-bold text-mercy-accent"></span>
                                <span class="text-gray-300">→</span>
                            </div>
                        </div>

                        <!-- Légende discrète sur la carte -->
                        <div class="absolute bottom-2.5 left-2.5 sm:bottom-3.5 sm:left-3.5 z-20 hidden sm:flex items-center gap-2.5 bg-mercy-black/80 backdrop-blur-md px-2.5 py-1 rounded-lg border border-white/10 text-[10px] text-gray-300">
                            <span class="flex items-center gap-1"><span class="w-2.5 h-2.5 rounded bg-mercy-green inline-block border border-mercy-accent"></span> {{ __('site.portfolio.legend_intervention') }} (24)</span>
                        </div>
                    </div>

                    <!-- Grille des pilules de pays (Sélection rapide) -->
                    <div class="mt-4 sm:mt-5">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-[10px] sm:text-xs font-extrabold uppercase tracking-wider text-gray-400">
                                {{ __('site.portfolio.pills_heading') }}
                            </span>
                            <span class="text-[10px] sm:text-xs text-gray-500">{{ __('site.portfolio.pills_hint') }}</span>
                        </div>
                        <div id="countries-pills-grid" class="grid grid-cols-2 sm:grid-cols-3 gap-2 max-h-48 sm:max-h-60 overflow-y-auto custom-scroll pr-1"></div>
                    </div>

                </div>

            </div>

            <!-- Colonne Droite : Fiche d'inspection détaillée du pays actif (Sticky) -->
            <div class="lg:col-span-5 bg-mercy-charcoal border border-mercy-green/30 rounded-2xl sm:rounded-3xl p-4 sm:p-7 shadow-2xl sticky top-20 sm:top-24">
                <div id="country-detail-card">
                    <!-- Rempli dynamiquement en temps réel par portfolio.js -->
                </div>
            </div>

        </div>

    </div>
</section>

<!-- 7. PORTEFEUILLE MONDIAL : PAYS D'INTERVENTION (CARTE VECTORIELLE VÉRITABLE) -->
<section id="pays" class="py-20 bg-mercy-black text-white relative overflow-hidden">
    <!-- Éléments d'arrière-plan d'ambiance -->
    <div class="absolute -top-32 -left-32 w-96 h-96 rounded-full bg-mercy-green/10 blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-32 -right-32 w-96 h-96 rounded-full bg-mercy-accent/10 blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- En-tête Portefeuille Mondial -->
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-10">
            <div class="max-w-2xl">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-lg bg-mercy-green/20 border border-mercy-accent/30 text-mercy-accent text-xs font-extrabold uppercase tracking-widest mb-3">
                    <i class="fa-solid fa-earth-americas"></i> Présence Terrain Internationale
                </div>
                <h2 class="text-3xl sm:text-5xl font-black tracking-tight text-white">
                    Portefeuille Mondial : <span class="text-mercy-accent">24 Pays</span>
                </h2>
                <p class="text-gray-300 mt-3 text-sm sm:text-base leading-relaxed">
                    Explorez la véritable carte vectorielle de nos interventions humanitaires. Cliquez directement sur un pays coloré sur la carte ou utilisez les filtres régionaux pour consulter les indicateurs de terrain, le contexte et les budgets engagés.
                </p>
            </div>

            <!-- Onglets de filtre régional -->
            <div class="flex flex-wrap gap-2 shrink-0" role="tablist" aria-label="Filtrer par région">
                <button type="button" onclick="filterCountries('all')" data-region="all" class="region-tab-btn px-4 py-2.5 rounded-xl text-xs sm:text-sm font-bold bg-mercy-green text-white transition flex items-center gap-2 shadow-glow">
                    <i class="fa-solid fa-globe"></i>
                    <span>Tous (24 pays)</span>
                </button>
                <button type="button" onclick="filterCountries('afrique')" data-region="afrique" class="region-tab-btn px-4 py-2.5 rounded-xl text-xs sm:text-sm font-bold bg-white/10 text-gray-300 hover:bg-white/20 transition flex items-center gap-2">
                    <span>Afrique (14)</span>
                </button>
                <button type="button" onclick="filterCountries('asie')" data-region="asie" class="region-tab-btn px-4 py-2.5 rounded-xl text-xs sm:text-sm font-bold bg-white/10 text-gray-300 hover:bg-white/20 transition flex items-center gap-2">
                    <span>Moyen-Orient & Asie (6)</span>
                </button>
                <button type="button" onclick="filterCountries('amerique')" data-region="amerique" class="region-tab-btn px-4 py-2.5 rounded-xl text-xs sm:text-sm font-bold bg-white/10 text-gray-300 hover:bg-white/20 transition flex items-center gap-2">
                    <span>Caraïbes & Amérique latine (4)</span>
                </button>
            </div>
        </div>

        <!-- Interface Interactive : Carte Vectorielle Réelle (Gauche) + Fiche Pays Détaillée (Droite) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

            <!-- Colonne Gauche : Carte du Monde Vectorielle Interactive SVG -->
            <div class="lg:col-span-7 space-y-6">

                <!-- Cadre de la carte avec contrôles de zoom/pan & légende -->
                <div class="bg-mercy-charcoal border border-white/15 rounded-3xl p-4 sm:p-6 relative overflow-hidden shadow-2xl">

                    <!-- Barre supérieure de statut de la carte -->
                    <div class="flex items-center justify-between gap-3 mb-4 flex-wrap">
                        <div class="flex items-center gap-2 text-xs text-gray-300 font-semibold">
                            <span class="inline-block w-2.5 h-2.5 rounded-full bg-mercy-green animate-pulse"></span>
                            <span>Cliquez directement sur un pays coloré en vert</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span id="country-count-badge" class="text-xs font-black text-mercy-accent bg-mercy-green/20 px-3 py-1 rounded-full border border-mercy-accent/30">
                                24 pays d'intervention
                            </span>
                        </div>
                    </div>

                    <!-- Conteneur SVG avec ratio d'aspect cinématographique -->
                    <div id="map-viewport-container" class="relative w-full aspect-[16/9.5] bg-[#070C09] rounded-2xl border border-white/10 overflow-hidden group">

                        <!-- La véritable carte SVG vectorielle mondiale -->
                        @include('home.partials.world-map-svg')

                        <!-- Boutons flottants de zoom & recentrage -->
                        <div class="absolute bottom-4 right-4 z-20 flex flex-col gap-1.5 bg-mercy-black/85 backdrop-blur-md p-1.5 rounded-xl border border-white/15 shadow-xl">
                            <button type="button" onclick="zoomMapIn()" aria-label="Agrandir la carte" title="Zoom avant" class="w-8 h-8 rounded-lg bg-white/10 hover:bg-mercy-green text-white flex items-center justify-center text-sm font-bold transition">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                            <button type="button" onclick="zoomMapOut()" aria-label="Dézoomer la carte" title="Zoom arrière" class="w-8 h-8 rounded-lg bg-white/10 hover:bg-mercy-green text-white flex items-center justify-center text-sm font-bold transition">
                                <i class="fa-solid fa-minus"></i>
                            </button>
                            <button type="button" onclick="resetMapZoom()" aria-label="Recentrer la carte" title="Vue globale" class="w-8 h-8 rounded-lg bg-white/10 hover:bg-mercy-green text-white flex items-center justify-center text-xs font-bold transition">
                                <i class="fa-solid fa-arrows-rotate"></i>
                            </button>
                        </div>

                        <!-- Info-bulle / Tooltip flottante interactive -->
                        <div id="map-country-tooltip" class="pointer-events-none hidden absolute z-30 bg-mercy-black/95 text-white border border-mercy-accent/50 rounded-xl px-3.5 py-2.5 shadow-2xl backdrop-blur-md text-xs -translate-x-1/2 -translate-y-full transition-opacity duration-150">
                            <div class="flex items-center gap-2">
                                <span id="tooltip-flag" class="text-base"></span>
                                <strong id="tooltip-name" class="text-sm font-black text-white"></strong>
                            </div>
                            <p id="tooltip-region" class="text-[10px] text-gray-400 font-semibold"></p>
                            <div class="mt-1 pt-1 border-t border-white/15 flex items-center justify-between gap-3 text-[11px]">
                                <span id="tooltip-projects" class="font-extrabold text-mercy-accent"></span>
                                <span class="text-gray-300">Cliquer pour inspecter →</span>
                            </div>
                        </div>

                        <!-- Légende discrète sur la carte -->
                        <div class="absolute bottom-4 left-4 z-20 hidden sm:flex items-center gap-3 bg-mercy-black/80 backdrop-blur-md px-3 py-1.5 rounded-xl border border-white/10 text-[11px] text-gray-300">
                            <span class="flex items-center gap-1.5"><span class="w-3 h-3 rounded bg-mercy-green inline-block border border-mercy-accent"></span> Pays Mercy Friends (24)</span>
                            <span class="flex items-center gap-1.5"><span class="w-3 h-3 rounded bg-[#16201A] inline-block border border-[#223328]"></span> Autres pays</span>
                        </div>
                    </div>

                    <!-- Grille des pilules de pays (défilement et sélection rapide) -->
                    <div class="mt-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-xs font-extrabold uppercase tracking-wider text-gray-400">
                                Liste des pays de la zone sélectionnée
                            </span>
                            <span class="text-xs text-gray-500">Cliquez pour afficher sur la carte</span>
                        </div>
                        <div id="countries-pills-grid" class="grid grid-cols-2 sm:grid-cols-3 gap-2.5 max-h-64 overflow-y-auto custom-scroll pr-1"></div>
                    </div>

                </div>

            </div>

            <!-- Colonne Droite : Fiche d'inspection détaillée du pays actif (Sticky) -->
            <div class="lg:col-span-5 bg-mercy-charcoal border border-mercy-green/40 rounded-3xl p-6 sm:p-8 shadow-2xl sticky top-24">
                <div id="country-detail-card">
                    <!-- Rempli dynamiquement en temps réel par portfolio.js -->
                </div>
            </div>

        </div>

    </div>
</section>

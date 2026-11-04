<!-- 7. PORTEFEUILLE MONDIAL : PAYS -->
<section id="pays" class="py-20 bg-mercy-black text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- En-tête Portefeuille Mondial -->
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-10">
            <div class="max-w-2xl">
                <span class="text-mercy-accent font-bold text-xs uppercase tracking-widest">Portefeuille Mondial 2026</span>
                <h2 class="text-3xl sm:text-4xl font-black mt-1">
                    Pays d'Intervention
                </h2>
                <p class="text-gray-300 mt-3 text-sm sm:text-base">
                    Mercy Friends soutient les populations vulnérables dans <strong class="text-white">24 pays</strong>. Filtrez par grande région et sélectionnez un pays pour consulter le contexte humanitaire, les projets actifs et le budget engagé.
                </p>
            </div>

            <!-- Onglets de filtre régional -->
            <div class="flex flex-wrap gap-2" role="tablist" aria-label="Filtrer par région">
                <button type="button" onclick="filterCountries('all')" data-region="all" class="region-tab-btn px-4 py-2.5 rounded-xl text-xs sm:text-sm font-bold bg-mercy-green text-white transition">
                    Tous (12 phares)
                </button>
                <button type="button" onclick="filterCountries('afrique')" data-region="afrique" class="region-tab-btn px-4 py-2.5 rounded-xl text-xs sm:text-sm font-bold bg-white/10 text-gray-300 hover:bg-white/20 transition">
                    Afrique
                </button>
                <button type="button" onclick="filterCountries('asie')" data-region="asie" class="region-tab-btn px-4 py-2.5 rounded-xl text-xs sm:text-sm font-bold bg-white/10 text-gray-300 hover:bg-white/20 transition">
                    Moyen-Orient & Asie
                </button>
                <button type="button" onclick="filterCountries('amerique')" data-region="amerique" class="region-tab-btn px-4 py-2.5 rounded-xl text-xs sm:text-sm font-bold bg-white/10 text-gray-300 hover:bg-white/20 transition">
                    Caraïbes & Amérique latine
                </button>
            </div>
        </div>

        <!-- Interface Interactive : Carte stylisée & Grille Pays (Gauche) + Fiche Pays Détaillée (Droite) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

            <!-- Gauche : Carte du Monde SVG Interactive + Sélecteur de Pays -->
            <div class="lg:col-span-7 space-y-6">
                <!-- Carte vectorielle stylisée avec points interactifs -->
                <div class="bg-mercy-charcoal border border-white/10 rounded-3xl p-4 sm:p-6 relative overflow-hidden">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-xs font-semibold text-gray-400 flex items-center gap-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-mercy-accent inline-block"></span>
                            Cliquez sur un marqueur ou un pays ci-dessous
                        </span>
                        <span id="country-count-badge" class="text-xs font-bold text-mercy-accent bg-mercy-green/15 px-3 py-1 rounded-full">
                            12 missions principales
                        </span>
                    </div>

                    <!-- Carte du monde schématique avec marqueurs proportionnels -->
                    <div class="relative w-full aspect-[16/8] bg-mercy-black/70 rounded-2xl border border-white/5 overflow-hidden">
                        <svg viewBox="0 0 1000 500" class="w-full h-full" aria-label="Carte mondiale des pays d'intervention Mercy Friends">
                            <!-- Grille latitude/longitude subtile -->
                            <g stroke="rgba(255,255,255,0.04)" stroke-width="1">
                                <line x1="0" y1="125" x2="1000" y2="125"/>
                                <line x1="0" y1="250" x2="1000" y2="250"/>
                                <line x1="0" y1="375" x2="1000" y2="375"/>
                                <line x1="250" y1="0" x2="250" y2="500"/>
                                <line x1="500" y1="0" x2="500" y2="500"/>
                                <line x1="750" y1="0" x2="750" y2="500"/>
                            </g>
                            <!-- Silhouettes continentales stylisées minimalistes -->
                            <!-- Amériques -->
                            <path d="M120,80 L260,75 L310,160 L255,235 L290,275 L355,320 L325,445 L280,460 L255,360 L225,270 L165,195 Z" fill="#1A241E" stroke="#27362D" stroke-width="2"/>
                            <!-- Europe -->
                            <path d="M445,75 L575,65 L605,145 L535,175 L455,165 Z" fill="#1A241E" stroke="#27362D" stroke-width="2"/>
                            <!-- Afrique -->
                            <path d="M440,185 L560,185 L615,245 L595,365 L545,435 L495,415 L480,315 L425,265 Z" fill="#203026" stroke="#2E4738" stroke-width="2"/>
                            <!-- Madagascar -->
                            <path d="M615,360 L632,355 L628,405 L610,402 Z" fill="#203026" stroke="#2E4738" stroke-width="1.5"/>
                            <!-- Moyen-Orient & Asie -->
                            <path d="M585,145 L865,95 L910,215 L830,315 L735,310 L685,265 L600,230 Z" fill="#1A241E" stroke="#27362D" stroke-width="2"/>
                            <!-- Océanie -->
                            <path d="M795,355 L895,355 L905,430 L805,435 Z" fill="#161E19" stroke="#232F28" stroke-width="1.5"/>

                            <!-- Groupe dynamique des marqueurs pays -->
                            <g id="svg-country-markers"></g>
                        </svg>
                    </div>
                </div>

                <!-- Liste de boutons Pays filtrables -->
                <div id="countries-pills-grid" class="grid grid-cols-2 sm:grid-cols-3 gap-3"></div>
            </div>

            <!-- Droite : Panneau d'inspection Fiche Pays -->
            <div class="lg:col-span-5 bg-mercy-charcoal border border-mercy-green/40 rounded-3xl p-6 sm:p-8 shadow-2xl sticky top-24">
                <div id="country-detail-card">
                    <!-- Rempli dynamiquement par portfolio.js au chargement (Cameroun par défaut) -->
                </div>
            </div>

        </div>
    </div>
</section>

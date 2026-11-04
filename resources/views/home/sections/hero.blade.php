<!-- 3. HERO SECTION + 3 CARTES D'URGENCE (OPTIMISÉE MOBILE) -->
<section id="accueil" class="relative bg-mercy-black text-white overflow-hidden">
    <!-- Image d'arrière-plan avec fallback -->
    <div class="absolute inset-0">
        <img src="{{ asset('images/hero-banner.jpg') }}"
            onerror="this.onerror=null;this.src='{{ asset('images/placeholder-hero.svg') }}';"
            alt="Action humanitaire et solidarité auprès des enfants et communautés"
            class="w-full h-full object-cover object-center opacity-55">
        <div class="absolute inset-0 hero-gradient"></div>
    </div>

    <!-- Contenu Hero Principal -->
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-10 pb-14 sm:pt-16 sm:pb-20 lg:pt-24 lg:pb-28">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-mercy-green/20 border border-mercy-accent/40 text-mercy-accent text-[11px] sm:text-xs font-bold uppercase tracking-wider mb-4 sm:mb-6">
                <span class="w-1.5 h-1.5 rounded-full bg-mercy-accent animate-ping"></span>
                <span>Indice &amp; Appel Mondial 2026 • #ZéroFaim</span>
            </div>

            <h1 class="text-2xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-tight sm:leading-[1.15] mb-4 sm:mb-6">
                Aucune dignité sans solidarité : <span class="text-mercy-accent">Ensemble contre la faim</span> et la précarité.
            </h1>

            <p class="text-xs sm:text-base lg:text-lg text-gray-200 leading-relaxed mb-6 sm:mb-8 max-w-2xl">
                Vivre à l'abri de la faim est un droit fondamental. Aux côtés des communautés locales dans 24 pays, <strong class="text-white">Mercy Friends</strong> bâtit l'accès à l'eau potable, l'autonomie agricole et l'aide vitale d'urgence.
            </p>

            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                <button type="button" onclick="jumpToDonation('once', 50)" class="inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl bg-mercy-green hover:bg-mercy-darkGreen text-white font-bold text-xs sm:text-sm shadow-glow transition-all transform hover:-translate-y-0.5">
                    <i class="fa-solid fa-heart text-xs"></i>
                    <span>Faire un don maintenant</span>
                </button>
                <a href="#projets" class="inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl bg-white/10 hover:bg-white/20 backdrop-blur-sm border border-white/20 text-white font-semibold text-xs sm:text-sm transition-all">
                    <span>Découvrir nos projets</span>
                    <i class="fa-solid fa-arrow-right text-mercy-accent text-xs"></i>
                </a>
            </div>
        </div>

        <!-- 3 Cartes d'Urgences en Vedette (Format Compact & Responsive) -->
        <div class="mt-10 sm:mt-14 lg:mt-20">
            <div class="flex items-center justify-between mb-3.5">
                <span class="text-[11px] sm:text-xs font-bold uppercase tracking-wider text-mercy-accent flex items-center gap-1.5">
                    <i class="fa-solid fa-triangle-exclamation"></i> Appels prioritaires terrain
                </span>
                <a href="#projets" class="text-[11px] sm:text-xs font-medium text-gray-300 hover:text-white underline">Voir tout</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-3.5 sm:gap-5">
                <!-- Carte Urgence 1 -->
                <article onclick="openEmergencyModal(0)" class="cursor-pointer group bg-mercy-charcoal/95 hover:bg-mercy-slate border border-white/10 hover:border-mercy-accent/50 rounded-2xl overflow-hidden shadow-lg transition-all duration-300 flex flex-col">
                    <div class="relative h-36 sm:h-44 overflow-hidden">
                        <img src="{{ asset('images/project-water.jpg') }}"
                            onerror="this.onerror=null;this.src='{{ asset('images/placeholder-project.svg') }}';"
                            alt="Accès à l'eau potable au Sahel"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2.5 left-2.5 px-2.5 py-0.5 rounded-md bg-mercy-black/85 text-mercy-accent text-[10px] font-bold border border-mercy-accent/30">
                            Urgence Climat &amp; Eau
                        </span>
                    </div>
                    <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <p class="text-[11px] text-gray-400 font-medium mb-1">Sauver des vies menacées</p>
                            <h2 class="text-sm sm:text-base font-bold text-white group-hover:text-mercy-accent transition-colors leading-snug">
                                Urgence Eau &amp; Sécheresse au Sahel
                            </h2>
                        </div>
                        <div class="mt-3 pt-2.5 border-t border-white/10 flex items-center justify-between text-[11px] font-bold text-mercy-accent">
                            <span>Lire l'appel &amp; soutenir</span>
                            <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </article>

                <!-- Carte Urgence 2 -->
                <article onclick="openEmergencyModal(1)" class="cursor-pointer group bg-mercy-charcoal/95 hover:bg-mercy-slate border border-white/10 hover:border-mercy-accent/50 rounded-2xl overflow-hidden shadow-lg transition-all duration-300 flex flex-col">
                    <div class="relative h-36 sm:h-44 overflow-hidden">
                        <img src="{{ asset('images/project-nutrition.jpg') }}"
                            onerror="this.onerror=null;this.src='{{ asset('images/placeholder-project.svg') }}';"
                            alt="Soutien nutritionnel aux enfants déplacés"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2.5 left-2.5 px-2.5 py-0.5 rounded-md bg-red-600/90 text-white text-[10px] font-bold">
                            Alerte Humanitaire Aiguë
                        </span>
                    </div>
                    <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <p class="text-[11px] text-gray-400 font-medium mb-1">2,4M enfants nécessitent une aide</p>
                            <h2 class="text-sm sm:text-base font-bold text-white group-hover:text-mercy-accent transition-colors leading-snug">
                                Soutien nutritionnel aux enfants déplacés
                            </h2>
                        </div>
                        <div class="mt-3 pt-2.5 border-t border-white/10 flex items-center justify-between text-[11px] font-bold text-mercy-accent">
                            <span>Lire l'appel &amp; soutenir</span>
                            <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </article>

                <!-- Carte Urgence 3 -->
                <article onclick="openEmergencyModal(2)" class="cursor-pointer group bg-mercy-charcoal/95 hover:bg-mercy-slate border border-white/10 hover:border-mercy-accent/50 rounded-2xl overflow-hidden shadow-lg transition-all duration-300 flex flex-col">
                    <div class="relative h-36 sm:h-44 overflow-hidden">
                        <img src="{{ asset('images/project-agroforestry.jpg') }}"
                            onerror="this.onerror=null;this.src='{{ asset('images/placeholder-project.svg') }}';"
                            alt="Agroécologie villageoise au Cameroun et en RDC"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-2.5 left-2.5 px-2.5 py-0.5 rounded-md bg-mercy-green text-white text-[10px] font-bold">
                            Résilience &amp; Autonomie
                        </span>
                    </div>
                    <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <p class="text-[11px] text-gray-400 font-medium mb-1">Semences et coopératives féminines</p>
                            <h2 class="text-sm sm:text-base font-bold text-white group-hover:text-mercy-accent transition-colors leading-snug">
                                Agroécologie villageoise au Cameroun et en RDC
                            </h2>
                        </div>
                        <div class="mt-3 pt-2.5 border-t border-white/10 flex items-center justify-between text-[11px] font-bold text-mercy-accent">
                            <span>Lire l'appel &amp; soutenir</span>
                            <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </article>
            </div>
        </div>

    </div>
</section>

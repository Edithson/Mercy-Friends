<!-- 9. ACTUALITÉS, ÉVÉNEMENTS & PUBLICATIONS (OPTIMISÉE MOBILE) -->
<section id="actualites" class="py-12 sm:py-20 bg-mercy-surface border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Grille 2 colonnes : Actualités (Gauche) & Événements (Droite) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 mb-10 sm:mb-16">

            <!-- Colonne Actualités & Communiqués -->
            <div class="lg:col-span-7">
                <div class="flex items-center justify-between mb-4 sm:mb-6 pb-2.5 border-b-2 border-mercy-black">
                    <h2 class="text-xl sm:text-2xl font-black text-mercy-black">Actualités du terrain</h2>
                    <button type="button" onclick="openInfoModal('medias')" class="text-[11px] sm:text-xs font-bold uppercase tracking-wider text-mercy-green hover:text-mercy-darkGreen">
                        Espace Presse →
                    </button>
                </div>

                <div class="space-y-3.5 sm:space-y-5">
                    <!-- Article 1 -->
                    <article onclick="openNewsModal(0)" class="cursor-pointer bg-white p-4 sm:p-6 rounded-2xl border border-gray-200 hover:border-mercy-green shadow-sm transition group">
                        <div class="flex items-center gap-2 text-[10px] sm:text-xs font-bold text-gray-500 mb-1.5">
                            <span class="text-mercy-green uppercase">28.10.2026 | Communiqué</span>
                            <span>•</span>
                            <span>Rapport Mondial</span>
                        </div>
                        <h3 class="text-sm sm:text-lg lg:text-xl font-bold text-mercy-black group-hover:text-mercy-green transition-colors leading-snug">
                            Mercy Friends publie son Baromètre 2026 de la Résilience Alimentaire en Afrique Centrale et au Sahel
                        </h3>
                        <p class="text-xs sm:text-sm text-gray-600 mt-1.5 line-clamp-2">
                            Face au dérèglement des saisons, l'agroforesterie et l'eau solaire réduisent de 42 % la faim saisonnière.
                        </p>
                        <span class="inline-flex items-center gap-1.5 text-xs font-bold text-mercy-green mt-2.5">
                            Lire l'article <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
                        </span>
                    </article>

                    <!-- Article 2 -->
                    <article onclick="openNewsModal(1)" class="cursor-pointer bg-white p-4 sm:p-6 rounded-2xl border border-gray-200 hover:border-mercy-green shadow-sm transition group">
                        <div class="flex items-center gap-2 text-[10px] sm:text-xs font-bold text-gray-500 mb-1.5">
                            <span class="text-mercy-green uppercase">15.10.2026 | Terrain</span>
                            <span>•</span>
                            <span>Cameroun &amp; RDC</span>
                        </div>
                        <h3 class="text-sm sm:text-lg lg:text-xl font-bold text-mercy-black group-hover:text-mercy-green transition-colors leading-snug">
                            Comment 18 coopératives féminines transforment le manioc et le cacao pour financer l'école rurale
                        </h3>
                        <p class="text-xs sm:text-sm text-gray-600 mt-1.5 line-clamp-2">
                            Autonomie économique des agricultrices et cantines scolaires 100 % approvisionnées localement.
                        </p>
                        <span class="inline-flex items-center gap-1.5 text-xs font-bold text-mercy-green mt-2.5">
                            Lire l'article <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
                        </span>
                    </article>
                </div>
            </div>

            <!-- Colonne Événements Solidaires -->
            <div class="lg:col-span-5">
                <div class="flex items-center justify-between mb-4 sm:mb-6 pb-2.5 border-b-2 border-mercy-black">
                    <h2 class="text-xl sm:text-2xl font-black text-mercy-black">Événements</h2>
                    <span class="text-[11px] sm:text-xs font-medium text-gray-500">Ouverts au public</span>
                </div>

                <div class="space-y-3 sm:space-y-4">
                    <!-- Événement 1 -->
                    <div onclick="openEventModal(0)" class="cursor-pointer bg-white p-3.5 sm:p-5 rounded-2xl border border-gray-200 hover:border-mercy-green shadow-sm transition flex gap-3 sm:gap-4 items-start group">
                        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-mercy-black text-white flex flex-col items-center justify-center shrink-0 group-hover:bg-mercy-green transition-colors">
                            <span class="text-base sm:text-lg font-black leading-none">19</span>
                            <span class="text-[9px] sm:text-[10px] font-bold uppercase text-mercy-accent group-hover:text-white mt-0.5">Nov</span>
                        </div>
                        <div>
                            <span class="text-[10px] sm:text-[11px] font-bold uppercase tracking-wider text-mercy-green">Webinaire • En ligne</span>
                            <h3 class="text-xs sm:text-sm font-bold text-mercy-black group-hover:text-mercy-green transition-colors mt-0.5 leading-snug">
                                Forum Eau &amp; Climat : Sécuriser les forages solaires d'ici 2030
                            </h3>
                            <p class="text-[11px] sm:text-xs text-gray-600 mt-1">Échanges en direct avec nos coordinateurs hydrauliciens.</p>
                        </div>
                    </div>

                    <!-- Événement 2 -->
                    <div onclick="openEventModal(1)" class="cursor-pointer bg-white p-3.5 sm:p-5 rounded-2xl border border-gray-200 hover:border-mercy-green shadow-sm transition flex gap-3 sm:gap-4 items-start group">
                        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-mercy-black text-white flex flex-col items-center justify-center shrink-0 group-hover:bg-mercy-green transition-colors">
                            <span class="text-base sm:text-lg font-black leading-none">05</span>
                            <span class="text-[9px] sm:text-[10px] font-bold uppercase text-mercy-accent group-hover:text-white mt-0.5">Déc</span>
                        </div>
                        <div>
                            <span class="text-[10px] sm:text-[11px] font-bold uppercase tracking-wider text-mercy-green">Bénévolat • Antennes</span>
                            <h3 class="text-xs sm:text-sm font-bold text-mercy-black group-hover:text-mercy-green transition-colors mt-0.5 leading-snug">
                                Portes Ouvertes : Rejoindre les ambassadeurs Mercy Friends
                            </h3>
                            <p class="text-[11px] sm:text-xs text-gray-600 mt-1">Rencontre à Paris, Lyon, Bruxelles, Yaoundé et Dakar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bloc Publications & Rapports -->
        <div id="publications" class="bg-white rounded-2xl sm:rounded-3xl p-4 sm:p-8 border border-gray-200 shadow-sm">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-5 sm:mb-6">
                <div>
                    <span class="text-[10px] sm:text-xs font-bold uppercase tracking-wider text-mercy-green">Redevabilité &amp; Transparence</span>
                    <h3 class="text-xl sm:text-2xl font-black text-mercy-black">Publications &amp; Rapports</h3>
                </div>
                <button type="button" onclick="openInfoModal('rapport-financier')" class="text-xs font-bold px-3.5 py-2 rounded-xl bg-mercy-black text-white hover:bg-mercy-green transition self-start">
                    Archives annuelles
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-3.5 sm:gap-5">
                <div onclick="openPublicationModal(0)" class="cursor-pointer p-4 sm:p-5 rounded-xl sm:rounded-2xl bg-mercy-surface border border-gray-200 hover:border-mercy-green transition flex flex-col justify-between group">
                    <div>
                        <span class="inline-flex items-center gap-1.5 text-[10px] sm:text-[11px] font-bold text-mercy-darkGreen bg-mercy-soft px-2 py-0.5 rounded mb-2">
                            <i class="fa-solid fa-file-pdf"></i> Rapport Annuel (4,2 Mo)
                        </span>
                        <h4 class="font-bold text-xs sm:text-sm text-mercy-black group-hover:text-mercy-green transition leading-snug">
                            Rapport d'Impact &amp; Comptes Certifiés 2025-2026
                        </h4>
                        <p class="text-[11px] sm:text-xs text-gray-600 mt-1.5">Bilan des 142 projets, audit financier et indicateurs d'impact.</p>
                    </div>
                    <span class="mt-3 text-xs font-bold text-mercy-green flex items-center gap-1.5">
                        Consulter <i class="fa-solid fa-download text-[10px]"></i>
                    </span>
                </div>

                <div onclick="openPublicationModal(1)" class="cursor-pointer p-4 sm:p-5 rounded-xl sm:rounded-2xl bg-mercy-surface border border-gray-200 hover:border-mercy-green transition flex flex-col justify-between group">
                    <div>
                        <span class="inline-flex items-center gap-1.5 text-[10px] sm:text-[11px] font-bold text-mercy-darkGreen bg-mercy-soft px-2 py-0.5 rounded mb-2">
                            <i class="fa-solid fa-file-pdf"></i> Note Technique (1,8 Mo)
                        </span>
                        <h4 class="font-bold text-xs sm:text-sm text-mercy-black group-hover:text-mercy-green transition leading-snug">
                            Souveraineté Semencière &amp; Adaptation Climatique
                        </h4>
                        <p class="text-[11px] sm:text-xs text-gray-600 mt-1.5">Guide issu de nos programmes au Cameroun, Burkina et Madagascar.</p>
                    </div>
                    <span class="mt-3 text-xs font-bold text-mercy-green flex items-center gap-1.5">
                        Consulter <i class="fa-solid fa-download text-[10px]"></i>
                    </span>
                </div>

                <div onclick="openPublicationModal(2)" class="cursor-pointer p-4 sm:p-5 rounded-xl sm:rounded-2xl bg-mercy-surface border border-gray-200 hover:border-mercy-green transition flex flex-col justify-between group">
                    <div>
                        <span class="inline-flex items-center gap-1.5 text-[10px] sm:text-[11px] font-bold text-mercy-darkGreen bg-mercy-soft px-2 py-0.5 rounded mb-2">
                            <i class="fa-solid fa-file-pdf"></i> Charte &amp; Éthique (1,1 Mo)
                        </span>
                        <h4 class="font-bold text-xs sm:text-sm text-mercy-black group-hover:text-mercy-green transition leading-snug">
                            Code de Conduite Humanitaire &amp; Protection
                        </h4>
                        <p class="text-[11px] sm:text-xs text-gray-600 mt-1.5">Standards anti-corruption et charte de sauvegarde sur le terrain.</p>
                    </div>
                    <span class="mt-3 text-xs font-bold text-mercy-green flex items-center gap-1.5">
                        Consulter <i class="fa-solid fa-download text-[10px]"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

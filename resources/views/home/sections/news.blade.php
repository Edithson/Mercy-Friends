<!-- 9. ACTUALITÉS, ÉVÉNEMENTS & PUBLICATIONS -->
<section id="actualites" class="py-20 bg-mercy-surface border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Grille 2 colonnes : Actualités (Gauche) & Événements (Droite) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 mb-16">

            <!-- Colonne Actualités & Communiqués -->
            <div class="lg:col-span-7">
                <div class="flex items-center justify-between mb-6 pb-3 border-b-2 border-mercy-black">
                    <h2 class="text-2xl font-black text-mercy-black">Actualités & Récits du terrain</h2>
                    <button type="button" onclick="openInfoModal('medias')" class="text-xs font-extrabold uppercase tracking-wider text-mercy-green hover:text-mercy-darkGreen">
                        Espace Presse →
                    </button>
                </div>

                <div class="space-y-5">
                    <!-- Article 1 -->
                    <article onclick="openNewsModal(0)" class="cursor-pointer bg-white p-6 rounded-2xl border border-gray-200 hover:border-mercy-green shadow-sm transition group">
                        <div class="flex items-center gap-3 text-xs font-bold text-gray-500 mb-2">
                            <span class="text-mercy-green uppercase">28.10.2026 | Communiqué de presse</span>
                            <span>•</span>
                            <span>Rapport Mondial</span>
                        </div>
                        <h3 class="text-lg sm:text-xl font-extrabold text-mercy-black group-hover:text-mercy-green transition-colors">
                            Mercy Friends publie son Baromètre 2026 de la Résilience Alimentaire en Afrique Centrale et au Sahel
                        </h3>
                        <p class="text-sm text-gray-600 mt-2 line-clamp-2">
                            Face au dérèglement des saisons des pluies, l'agroforesterie villageoise et la gestion communautaire de l'eau permettent de réduire de 42 % la malnutrition saisonnière.
                        </p>
                        <span class="inline-flex items-center gap-1.5 text-xs font-extrabold text-mercy-green mt-3">
                            Lire l'article <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                        </span>
                    </article>

                    <!-- Article 2 -->
                    <article onclick="openNewsModal(1)" class="cursor-pointer bg-white p-6 rounded-2xl border border-gray-200 hover:border-mercy-green shadow-sm transition group">
                        <div class="flex items-center gap-3 text-xs font-bold text-gray-500 mb-2">
                            <span class="text-mercy-green uppercase">15.10.2026 | Carnet de terrain</span>
                            <span>•</span>
                            <span>Cameroun & RDC</span>
                        </div>
                        <h3 class="text-lg sm:text-xl font-extrabold text-mercy-black group-hover:text-mercy-green transition-colors">
                            Comment 18 coopératives féminines transforment le manioc et le cacao équitable pour financer l'école rurale
                        </h3>
                        <p class="text-sm text-gray-600 mt-2 line-clamp-2">
                            Reportage auprès des groupements agricoles accompagnés par nos agronomes locaux : autonomie économique et cantines scolaires approvisionnées à 100 % localement.
                        </p>
                        <span class="inline-flex items-center gap-1.5 text-xs font-extrabold text-mercy-green mt-3">
                            Lire l'article <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                        </span>
                    </article>
                </div>
            </div>

            <!-- Colonne Événements Solidaires -->
            <div class="lg:col-span-5">
                <div class="flex items-center justify-between mb-6 pb-3 border-b-2 border-mercy-black">
                    <h2 class="text-2xl font-black text-mercy-black">Événements</h2>
                    <span class="text-xs font-bold text-gray-500">Ouverts au public</span>
                </div>

                <div class="space-y-4">
                    <!-- Événement 1 -->
                    <div onclick="openEventModal(0)" class="cursor-pointer bg-white p-5 rounded-2xl border border-gray-200 hover:border-mercy-green shadow-sm transition flex gap-4 items-start group">
                        <div class="w-16 h-16 rounded-2xl bg-mercy-black text-white flex flex-col items-center justify-center shrink-0 group-hover:bg-mercy-green transition-colors">
                            <span class="text-xl font-black leading-none">19</span>
                            <span class="text-[11px] font-bold uppercase text-mercy-accent group-hover:text-white mt-0.5">Nov</span>
                        </div>
                        <div>
                            <span class="text-[11px] font-bold uppercase tracking-wider text-mercy-green">Conférence & Webinaire • Paris / En ligne</span>
                            <h3 class="text-base font-extrabold text-mercy-black group-hover:text-mercy-green transition-colors mt-0.5">
                                Forum Eau & Climat : Sécuriser les points d'eau villageois d'ici 2030
                            </h3>
                            <p class="text-xs text-gray-600 mt-1">Échanges avec nos chefs de mission au Sahel et démonstration des pompes solaires.</p>
                        </div>
                    </div>

                    <!-- Événement 2 -->
                    <div onclick="openEventModal(1)" class="cursor-pointer bg-white p-5 rounded-2xl border border-gray-200 hover:border-mercy-green shadow-sm transition flex gap-4 items-start group">
                        <div class="w-16 h-16 rounded-2xl bg-mercy-black text-white flex flex-col items-center justify-center shrink-0 group-hover:bg-mercy-green transition-colors">
                            <span class="text-xl font-black leading-none">05</span>
                            <span class="text-[11px] font-bold uppercase text-mercy-accent group-hover:text-white mt-0.5">Déc</span>
                        </div>
                        <div>
                            <span class="text-[11px] font-bold uppercase tracking-wider text-mercy-green">Journée Mondiale du Bénévolat • Antennes</span>
                            <h3 class="text-base font-extrabold text-mercy-black group-hover:text-mercy-green transition-colors mt-0.5">
                                Portes Ouvertes Mercy Friends : Rejoindre nos bénévoles et ambassadeurs
                            </h3>
                            <p class="text-xs text-gray-600 mt-1">Rencontre à Paris, Lyon, Bruxelles, Yaoundé et Dakar avec les équipes projets.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bloc Publications & Rapports -->
        <div id="publications" class="bg-white rounded-3xl p-6 sm:p-9 border border-gray-200 shadow-sm">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
                <div>
                    <span class="text-xs font-extrabold uppercase tracking-wider text-mercy-green">Documentation & Redevabilité</span>
                    <h3 class="text-2xl font-black text-mercy-black">Publications & Notes d'Analyse</h3>
                </div>
                <button type="button" onclick="openInfoModal('rapport-financier')" class="text-xs font-bold px-4 py-2.5 rounded-xl bg-mercy-black text-white hover:bg-mercy-green transition self-start">
                    Archives des rapports annuels
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div onclick="openPublicationModal(0)" class="cursor-pointer p-5 rounded-2xl bg-mercy-surface border border-gray-200 hover:border-mercy-green transition flex flex-col justify-between group">
                    <div>
                        <span class="inline-flex items-center gap-1.5 text-[11px] font-bold text-mercy-darkGreen bg-mercy-soft px-2.5 py-1 rounded-md mb-3">
                            <i class="fa-solid fa-file-pdf"></i> Rapport Annuel (PDF • 4,2 Mo)
                        </span>
                        <h4 class="font-extrabold text-mercy-black group-hover:text-mercy-green transition">
                            Rapport d'Impact & Comptes Certifiés Mercy Friends 2025-2026
                        </h4>
                        <p class="text-xs text-gray-600 mt-2">Bilan complet des 142 projets, audit financier indépendant et indicateurs d'impact.</p>
                    </div>
                    <span class="mt-4 text-xs font-extrabold text-mercy-green flex items-center gap-1.5">
                        Consulter la synthèse <i class="fa-solid fa-download"></i>
                    </span>
                </div>

                <div onclick="openPublicationModal(1)" class="cursor-pointer p-5 rounded-2xl bg-mercy-surface border border-gray-200 hover:border-mercy-green transition flex flex-col justify-between group">
                    <div>
                        <span class="inline-flex items-center gap-1.5 text-[11px] font-bold text-mercy-darkGreen bg-mercy-soft px-2.5 py-1 rounded-md mb-3">
                            <i class="fa-solid fa-file-pdf"></i> Note Stratégique (PDF • 1,8 Mo)
                        </span>
                        <h4 class="font-extrabold text-mercy-black group-hover:text-mercy-green transition">
                            Souveraineté Semencière & Adaptation Climatique des Petits Producteurs
                        </h4>
                        <p class="text-xs text-gray-600 mt-2">Guide méthodologique issu de nos programmes au Cameroun, au Burkina Faso et à Madagascar.</p>
                    </div>
                    <span class="mt-4 text-xs font-extrabold text-mercy-green flex items-center gap-1.5">
                        Consulter la synthèse <i class="fa-solid fa-download"></i>
                    </span>
                </div>

                <div onclick="openPublicationModal(2)" class="cursor-pointer p-5 rounded-2xl bg-mercy-surface border border-gray-200 hover:border-mercy-green transition flex flex-col justify-between group">
                    <div>
                        <span class="inline-flex items-center gap-1.5 text-[11px] font-bold text-mercy-darkGreen bg-mercy-soft px-2.5 py-1 rounded-md mb-3">
                            <i class="fa-solid fa-file-pdf"></i> Charte & Qualité (PDF • 1,1 Mo)
                        </span>
                        <h4 class="font-extrabold text-mercy-black group-hover:text-mercy-green transition">
                            Code de Conduite Humanitaire & Protection des Populations Aidées
                        </h4>
                        <p class="text-xs text-gray-600 mt-2">Nos standards stricts anti-corruption, dignité humaine et redevabilité sur le terrain.</p>
                    </div>
                    <span class="mt-4 text-xs font-extrabold text-mercy-green flex items-center gap-1.5">
                        Consulter la synthèse <i class="fa-solid fa-download"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

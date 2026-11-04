<!-- 8. SECTION PROJETS SUR LE TERRAIN -->
<section id="projets" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-10">
            <div class="max-w-2xl">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-lg bg-mercy-soft text-mercy-darkGreen text-xs font-extrabold uppercase tracking-wider">
                    <i class="fa-solid fa-compass"></i> Sur le terrain
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-mercy-black mt-2">
                    Nos Projets en Action
                </h2>
                <p class="text-gray-600 mt-2 text-base">
                    Explorez nos programmes concrets menés main dans la main avec les communautés villageoises, coopératives et centres de santé.
                </p>
            </div>

            <!-- Filtres Thème + Statut -->
            <div class="flex flex-col sm:flex-row gap-3">
                <select id="project-theme-filter" onchange="renderProjects()" aria-label="Filtrer par thème" class="px-4 py-2.5 rounded-xl border border-gray-300 bg-mercy-surface text-sm font-semibold text-mercy-black focus:outline-none focus:border-mercy-green">
                    <option value="all">Tous les thèmes</option>
                    <option value="Eau & WASH">Eau, Assainissement & Hygiène</option>
                    <option value="Nutrition">Sécurité alimentaire & Nutrition</option>
                    <option value="Agriculture">Agriculture durable</option>
                    <option value="Urgence">Aide d'urgence</option>
                    <option value="Éducation">Éducation & Société civile</option>
                </select>

                <select id="project-status-filter" onchange="renderProjects()" aria-label="Filtrer par statut" class="px-4 py-2.5 rounded-xl border border-gray-300 bg-mercy-surface text-sm font-semibold text-mercy-black focus:outline-none focus:border-mercy-green">
                    <option value="all">Tous les statuts</option>
                    <option value="Urgence active">Urgence active</option>
                    <option value="En cours">En cours de déploiement</option>
                    <option value="Pérennisé">Autonomie pérennisée</option>
                </select>
            </div>
        </div>

        <!-- Grille des cartes de projets injectée dynamiquement par projects.js -->
        <div id="projects-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7"></div>
    </div>
</section>

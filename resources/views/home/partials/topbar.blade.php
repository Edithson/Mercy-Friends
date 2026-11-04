<!-- Barre Supérieure Secondaire (Noire) -->
<div class="bg-mercy-black text-gray-300 text-xs border-b border-white/10 relative z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-10 flex items-center justify-between">
        <!-- Slogan institutionnel gauche -->
        <div class="hidden md:flex items-center gap-2 text-gray-400">
            <span class="inline-block w-2 h-2 rounded-full bg-mercy-accent animate-pulse"></span>
            <span>ONG humanitaire indépendante • <strong class="text-white font-medium">90 % des fonds</strong> directement sur le terrain</span>
        </div>

        <!-- Liens secondaires -->
        <div class="flex items-center justify-between w-full md:w-auto gap-4 sm:gap-5">
            <div class="flex items-center gap-3 sm:gap-5 overflow-x-auto no-scrollbar py-1">
                <a href="#publications" class="hover:text-mercy-accent transition-colors whitespace-nowrap">Publications & Rapports</a>
                <button type="button" onclick="openInfoModal('medias')" class="hover:text-mercy-accent transition-colors whitespace-nowrap">Médias</button>
                <button type="button" onclick="openInfoModal('carrieres')" class="hover:text-mercy-accent transition-colors whitespace-nowrap">Bénévolat & Carrières</button>
                <button type="button" onclick="openInfoModal('appels-offres')" class="hidden sm:inline-block hover:text-mercy-accent transition-colors whitespace-nowrap">Appels d'offres</button>
            </div>

            <div class="flex items-center gap-3 shrink-0">
                <!-- Bouton Recherche ouvrable -->
                <button type="button" id="toggle-search-btn" onclick="toggleSearchBar()" aria-label="Rechercher sur le site" class="flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-white/5 hover:bg-mercy-green hover:text-white transition-colors text-gray-200">
                    <i class="fa-solid fa-magnifying-glass text-[11px]"></i>
                    <span class="hidden sm:inline">Rechercher</span>
                </button>

                <!-- Sélecteur de langue FR -->
                <div class="relative group">
                    <button type="button" onclick="showToast('Vous consultez l\'édition francophone officielle de Mercy Friends.', 'info')" class="flex items-center gap-1 px-2 py-1 rounded-lg bg-white/5 hover:bg-white/10 text-white font-semibold transition">
                        <i class="fa-solid fa-globe text-mercy-accent text-[11px]"></i>
                        <span>FR</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Barre de recherche déroulante interactive -->
    <div id="search-drawer" class="hidden bg-mercy-charcoal border-t border-white/10 py-4 px-4 sm:px-6 lg:px-8 shadow-2xl">
        <div class="max-w-4xl mx-auto">
            <div class="relative flex items-center">
                <i class="fa-solid fa-magnifying-glass absolute left-4 text-mercy-accent text-base"></i>
                <input type="text" id="global-search-input" oninput="handleGlobalSearch(this.value)" placeholder="Rechercher un pays (ex: Cameroun, Haïti), un projet, un thème (Eau, Nutrition)..." class="w-full pl-11 pr-24 py-3 rounded-xl bg-mercy-black border border-white/15 text-white placeholder-gray-400 text-sm focus:outline-none focus:border-mercy-accent">
                <button type="button" onclick="toggleSearchBar()" class="absolute right-2 px-3 py-1.5 rounded-lg bg-white/10 hover:bg-white/20 text-xs text-gray-200 transition">
                    Fermer
                </button>
            </div>
            <div id="global-search-results" class="mt-3 grid grid-cols-1 sm:grid-cols-2 gap-2 max-h-64 overflow-y-auto custom-scroll"></div>
        </div>
    </div>
</div>

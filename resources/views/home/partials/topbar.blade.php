<!-- Barre Supérieure Secondaire Épurée (Desktop uniquement) -->
<div id="top-bar" class="hidden md:block bg-mercy-black/95 text-gray-300 text-[11px] border-b border-white/5 relative z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-8 flex items-center justify-between">
        <!-- Slogan institutionnel gauche -->
        <div class="flex items-center gap-2 text-gray-400">
            <span class="inline-block w-1.5 h-1.5 rounded-full bg-mercy-accent animate-pulse"></span>
            <span>ONG humanitaire indépendante • <strong class="text-white font-medium">90 % des fonds</strong> sur le terrain</span>
        </div>

        <!-- Liens secondaires & outils -->
        <div class="flex items-center gap-5">
            <nav class="flex items-center gap-4 text-gray-400" aria-label="Liens institutionnels">
                <a href="#publications" class="hover:text-mercy-accent transition-colors">Publications &amp; Rapports</a>
                <button type="button" onclick="openInfoModal('medias')" class="hover:text-mercy-accent transition-colors">Espace Presse</button>
                <button type="button" onclick="openInfoModal('carrieres')" class="hover:text-mercy-accent transition-colors">Bénévolat &amp; Carrières</button>
            </nav>

            <div class="h-3 w-px bg-white/10"></div>

            <div class="flex items-center gap-3">
                <!-- Bouton Recherche -->
                <button type="button" id="toggle-search-btn" onclick="toggleSearchBar()" aria-label="Rechercher sur le site" class="flex items-center gap-1.5 text-gray-300 hover:text-white transition-colors">
                    <i class="fa-solid fa-magnifying-glass text-[10px] text-mercy-accent"></i>
                    <span>Rechercher</span>
                </button>

                <!-- Sélecteur de langue -->
                <button type="button" onclick="showToast('Vous consultez l\'édition francophone officielle de Mercy Friends.', 'info')" class="flex items-center gap-1 px-1.5 py-0.5 rounded text-gray-300 hover:text-white transition" title="Langue : Français">
                    <i class="fa-solid fa-globe text-mercy-accent text-[10px]"></i>
                    <span class="font-bold">FR</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Barre de recherche déroulante interactive -->
    <div id="search-drawer" class="hidden bg-mercy-charcoal border-t border-white/10 py-3.5 px-4 sm:px-6 lg:px-8 shadow-2xl">
        <div class="max-w-4xl mx-auto">
            <div class="relative flex items-center">
                <i class="fa-solid fa-magnifying-glass absolute left-4 text-mercy-accent text-sm"></i>
                <input type="text" id="global-search-input" oninput="handleGlobalSearch(this.value)" placeholder="Rechercher un pays (ex: Cameroun, Haïti), un projet, un thème..." class="w-full pl-10 pr-20 py-2.5 rounded-xl bg-mercy-black border border-white/15 text-white placeholder-gray-400 text-xs sm:text-sm focus:outline-none focus:border-mercy-accent">
                <button type="button" onclick="toggleSearchBar()" class="absolute right-2 px-2.5 py-1 rounded-lg bg-white/10 hover:bg-white/20 text-xs text-gray-300 transition">
                    Fermer
                </button>
            </div>
            <div id="global-search-results" class="mt-2.5 grid grid-cols-1 sm:grid-cols-2 gap-2 max-h-60 overflow-y-auto custom-scroll"></div>
        </div>
    </div>
</div>

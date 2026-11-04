<!-- Barre de Navigation Principale Épurée & Sticky -->
<header id="main-nav" class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-gray-100 shadow-[0_2px_12px_rgba(0,0,0,0.03)] transition-all">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-14 sm:h-16 lg:h-18">
            <!-- Logo SVG Mercy Friends Épuré -->
            <a href="#accueil" class="flex items-center gap-2.5 sm:gap-3 group focus:outline-none">
                <div class="w-8 h-8 sm:w-9 sm:h-9 lg:w-10 lg:h-10 rounded-xl bg-mercy-black flex items-center justify-center shadow-sm group-hover:bg-mercy-green transition-colors duration-300 relative overflow-hidden shrink-0">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-mercy-accent group-hover:text-white transition-colors duration-300" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <circle cx="32" cy="24" r="13" stroke="currentColor" stroke-width="3" stroke-dasharray="4 2" opacity="0.45"/>
                        <path d="M32 11C25 18 24 27 32 34C40 27 39 18 32 11Z" fill="currentColor"/>
                        <path d="M32 17V33" stroke="#0B0F0C" stroke-width="2" stroke-linecap="round"/>
                        <path d="M13 36C13 45.5 21.5 52 32 52C42.5 52 51 45.5 51 36" stroke="currentColor" stroke-width="4" stroke-linecap="round"/>
                        <path d="M18 44C22 48.5 26.8 51 32 51C37.2 51 42 48.5 46 44" stroke="#ffffff" stroke-width="2" stroke-linecap="round" opacity="0.85"/>
                    </svg>
                </div>
                <div class="leading-none">
                    <div class="flex items-center gap-1">
                        <span class="text-base sm:text-lg lg:text-xl font-black tracking-tight text-mercy-black">MERCY</span>
                        <span class="text-base sm:text-lg lg:text-xl font-black tracking-tight text-mercy-green">FRIENDS</span>
                    </div>
                    <span class="hidden xs:block text-[9px] sm:text-[10px] font-semibold uppercase tracking-wider text-gray-400 mt-0.5">ONG Humanitaire • Zéro Faim</span>
                </div>
            </a>

            <!-- Onglets de navigation Desktop (Discrets & Épurés) -->
            <nav aria-label="Navigation principale" class="hidden lg:flex items-center gap-5 xl:gap-7 text-[13px] font-medium text-gray-600">
                <a href="#accueil" data-nav="accueil" class="nav-item nav-link-active hover:text-mercy-green transition-colors py-1">Accueil</a>
                <a href="#a-propos" data-nav="a-propos" class="nav-item hover:text-mercy-green transition-colors py-1">À propos</a>
                <a href="#themes" data-nav="themes" class="nav-item hover:text-mercy-green transition-colors py-1">Thèmes</a>
                <a href="#pays" data-nav="pays" class="nav-item hover:text-mercy-green transition-colors py-1">Pays d'intervention</a>
                <a href="#projets" data-nav="projets" class="nav-item hover:text-mercy-green transition-colors py-1">Projets</a>
                <a href="#contact" data-nav="contact" class="nav-item hover:text-mercy-green transition-colors py-1">Contact</a>
            </nav>

            <!-- Boutons d'action Droite -->
            <div class="flex items-center gap-2 sm:gap-2.5">
                <!-- Don régulier desktop -->
                <button type="button" onclick="jumpToDonation('monthly', 30)" class="hidden xl:inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full border border-gray-200 text-gray-700 hover:border-mercy-black hover:text-mercy-black text-xs font-semibold transition-all">
                    <i class="fa-solid fa-rotate text-mercy-green text-[11px]"></i>
                    <span>Don régulier</span>
                </button>

                <!-- Bouton "Faire un don" (Pill élégant) -->
                <a href="#faire-un-don" onclick="jumpToDonation('once', 50)" class="inline-flex items-center gap-1.5 px-3.5 sm:px-4 py-1.5 sm:py-2 rounded-full bg-mercy-green hover:bg-mercy-darkGreen text-white font-bold text-xs sm:text-xs shadow-sm transition-all transform hover:-translate-y-0.5">
                    <i class="fa-solid fa-hand-holding-heart text-[11px]"></i>
                    <span>Faire un don</span>
                </a>

                <!-- Bouton Hamburger Mobile Minimaliste -->
                <button type="button" id="mobile-menu-btn" onclick="toggleMobileMenu()" aria-label="Ouvrir le menu" class="lg:hidden w-8 h-8 sm:w-9 sm:h-9 rounded-xl border border-gray-200 text-gray-700 hover:bg-gray-100 transition-colors flex items-center justify-center">
                    <i id="mobile-menu-icon" class="fa-solid fa-bars text-sm"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Menu Mobile Déroulant Moderne & Épuré -->
    <div id="mobile-menu" class="hidden lg:hidden bg-mercy-black/98 backdrop-blur-2xl text-white border-t border-white/10 px-4 pt-3 pb-5 space-y-2.5 shadow-2xl">
        <!-- Recherche rapide mobile -->
        <div class="relative pt-1">
            <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-mercy-accent text-xs"></i>
            <input type="text" oninput="handleGlobalSearch(this.value)" placeholder="Rechercher un pays, un projet..." class="w-full pl-8 pr-3 py-2 rounded-lg bg-white/10 border border-white/10 text-white placeholder-gray-400 text-xs focus:outline-none focus:border-mercy-accent">
        </div>

        <!-- Navigation mobile compacte -->
        <div class="grid grid-cols-1 divide-y divide-white/5 text-xs font-medium pt-1">
            <a href="#accueil" onclick="toggleMobileMenu()" class="py-2.5 px-2 hover:bg-white/5 rounded-lg flex items-center justify-between text-gray-200 hover:text-white">
                <span class="flex items-center gap-2.5"><i class="fa-solid fa-house text-mercy-accent w-4"></i> Accueil</span>
                <i class="fa-solid fa-chevron-right text-[10px] text-gray-500"></i>
            </a>
            <a href="#a-propos" onclick="toggleMobileMenu()" class="py-2.5 px-2 hover:bg-white/5 rounded-lg flex items-center justify-between text-gray-200 hover:text-white">
                <span class="flex items-center gap-2.5"><i class="fa-solid fa-shield-heart text-mercy-accent w-4"></i> À propos &amp; Transparence</span>
                <i class="fa-solid fa-chevron-right text-[10px] text-gray-500"></i>
            </a>
            <a href="#themes" onclick="toggleMobileMenu()" class="py-2.5 px-2 hover:bg-white/5 rounded-lg flex items-center justify-between text-gray-200 hover:text-white">
                <span class="flex items-center gap-2.5"><i class="fa-solid fa-shapes text-mercy-accent w-4"></i> Thèmes d'intervention</span>
                <i class="fa-solid fa-chevron-right text-[10px] text-gray-500"></i>
            </a>
            <a href="#pays" onclick="toggleMobileMenu()" class="py-2.5 px-2 hover:bg-white/5 rounded-lg flex items-center justify-between text-gray-200 hover:text-white">
                <span class="flex items-center gap-2.5"><i class="fa-solid fa-earth-africa text-mercy-accent w-4"></i> Portefeuille Mondial (24 pays)</span>
                <i class="fa-solid fa-chevron-right text-[10px] text-gray-500"></i>
            </a>
            <a href="#projets" onclick="toggleMobileMenu()" class="py-2.5 px-2 hover:bg-white/5 rounded-lg flex items-center justify-between text-gray-200 hover:text-white">
                <span class="flex items-center gap-2.5"><i class="fa-solid fa-hand-holding-droplet text-mercy-accent w-4"></i> Projets terrain</span>
                <i class="fa-solid fa-chevron-right text-[10px] text-gray-500"></i>
            </a>
            <a href="#actualites" onclick="toggleMobileMenu()" class="py-2.5 px-2 hover:bg-white/5 rounded-lg flex items-center justify-between text-gray-200 hover:text-white">
                <span class="flex items-center gap-2.5"><i class="fa-solid fa-newspaper text-mercy-accent w-4"></i> Actualités &amp; Publications</span>
                <i class="fa-solid fa-chevron-right text-[10px] text-gray-500"></i>
            </a>
            <a href="#contact" onclick="toggleMobileMenu()" class="py-2.5 px-2 hover:bg-white/5 rounded-lg flex items-center justify-between text-gray-200 hover:text-white">
                <span class="flex items-center gap-2.5"><i class="fa-solid fa-envelope text-mercy-accent w-4"></i> Contact &amp; Antennes</span>
                <i class="fa-solid fa-chevron-right text-[10px] text-gray-500"></i>
            </a>
        </div>

        <!-- Boutons d'action compacts mobile -->
        <div class="pt-2 border-t border-white/10 grid grid-cols-2 gap-2">
            <button type="button" onclick="toggleMobileMenu(); jumpToDonation('monthly', 30)" class="py-2.5 px-3 rounded-xl bg-white/10 hover:bg-white/20 text-white font-bold text-xs text-center transition">
                Don mensuel
            </button>
            <button type="button" onclick="toggleMobileMenu(); jumpToDonation('once', 50)" class="py-2.5 px-3 rounded-xl bg-mercy-green hover:bg-mercy-darkGreen text-white font-bold text-xs text-center transition shadow-sm">
                Faire un don
            </button>
        </div>
    </div>
</header>

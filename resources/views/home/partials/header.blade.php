<!-- Barre de Navigation Principale Sticky -->
<header id="main-nav" class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-gray-200 shadow-sm transition-all">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Logo SVG Mercy Friends -->
            <a href="#accueil" class="flex items-center gap-3 group focus:outline-none">
                <div class="w-12 h-12 rounded-2xl bg-mercy-black flex items-center justify-center shadow-md group-hover:bg-mercy-green transition-colors duration-300 relative overflow-hidden">
                    <svg class="w-8 h-8 text-mercy-accent group-hover:text-white transition-colors duration-300" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <circle cx="32" cy="24" r="13" stroke="currentColor" stroke-width="3" stroke-dasharray="4 2" opacity="0.45"/>
                        <path d="M32 11C25 18 24 27 32 34C40 27 39 18 32 11Z" fill="currentColor"/>
                        <path d="M32 17V33" stroke="#0B0F0C" stroke-width="2" stroke-linecap="round"/>
                        <path d="M13 36C13 45.5 21.5 52 32 52C42.5 52 51 45.5 51 36" stroke="currentColor" stroke-width="4" stroke-linecap="round"/>
                        <path d="M18 44C22 48.5 26.8 51 32 51C37.2 51 42 48.5 46 44" stroke="#ffffff" stroke-width="2" stroke-linecap="round" opacity="0.85"/>
                    </svg>
                </div>
                <div>
                    <div class="flex items-center gap-1.5">
                        <span class="text-xl sm:text-2xl font-black tracking-tight text-mercy-black">MERCY</span>
                        <span class="text-xl sm:text-2xl font-black tracking-tight text-mercy-green">FRIENDS</span>
                    </div>
                    <span class="block text-[11px] font-semibold uppercase tracking-wider text-gray-500 -mt-1">Association à but non lucratif</span>
                </div>
            </a>

            <!-- Onglets de navigation Desktop -->
            <nav aria-label="Navigation principale" class="hidden lg:flex items-center gap-6 xl:gap-8 text-sm font-semibold text-mercy-charcoal">
                <a href="#accueil" data-nav="accueil" class="nav-item nav-link-active hover:text-mercy-green transition-colors py-1">Accueil</a>
                <a href="#a-propos" data-nav="a-propos" class="nav-item hover:text-mercy-green transition-colors py-1">À propos</a>
                <a href="#themes" data-nav="themes" class="nav-item hover:text-mercy-green transition-colors py-1">Thèmes</a>
                <a href="#pays" data-nav="pays" class="nav-item hover:text-mercy-green transition-colors py-1">Pays d'intervention</a>
                <a href="#projets" data-nav="projets" class="nav-item hover:text-mercy-green transition-colors py-1">Projets</a>
                <a href="#contact" data-nav="contact" class="nav-item hover:text-mercy-green transition-colors py-1">Contact</a>
            </nav>

            <!-- Boutons d'action Droite (Don régulier + Faire un don + Menu Mobile) -->
            <div class="flex items-center gap-2.5 sm:gap-3">
                <button type="button" onclick="jumpToDonation('monthly', 50)" class="hidden xl:inline-flex items-center gap-2 px-4 py-2.5 rounded-xl border-2 border-mercy-black text-mercy-black hover:bg-mercy-black hover:text-white text-xs font-bold uppercase tracking-wide transition-all">
                    <i class="fa-solid fa-rotate text-mercy-green"></i>
                    <span>Don mensuel</span>
                </button>

                <a href="#faire-un-don" onclick="jumpToDonation('once', 50)" class="inline-flex items-center gap-2 px-4 sm:px-5 py-2.5 sm:py-3 rounded-xl bg-mercy-green hover:bg-mercy-darkGreen text-white font-bold text-xs sm:text-sm shadow-glow transition-all transform hover:-translate-y-0.5">
                    <i class="fa-solid fa-hand-holding-heart"></i>
                    <span>Faire un don</span>
                </a>

                <!-- Bouton Hamburger Mobile -->
                <button type="button" id="mobile-menu-btn" onclick="toggleMobileMenu()" aria-label="Ouvrir le menu" class="lg:hidden p-2.5 rounded-xl bg-mercy-black text-white hover:bg-mercy-green transition-colors">
                    <i id="mobile-menu-icon" class="fa-solid fa-bars text-lg"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Menu Mobile Déroulant Responsive -->
    <div id="mobile-menu" class="hidden lg:hidden bg-mercy-black text-white border-t border-white/10 px-4 pt-4 pb-6 space-y-3 shadow-2xl">
        <div class="grid grid-cols-1 gap-1 text-base font-semibold">
            <a href="#accueil" onclick="toggleMobileMenu()" class="px-4 py-3 rounded-xl hover:bg-white/10 flex items-center justify-between">
                <span>Accueil</span><i class="fa-solid fa-chevron-right text-xs text-mercy-accent"></i>
            </a>
            <a href="#a-propos" onclick="toggleMobileMenu()" class="px-4 py-3 rounded-xl hover:bg-white/10 flex items-center justify-between">
                <span>À propos & Transparence</span><i class="fa-solid fa-chevron-right text-xs text-mercy-accent"></i>
            </a>
            <a href="#themes" onclick="toggleMobileMenu()" class="px-4 py-3 rounded-xl hover:bg-white/10 flex items-center justify-between">
                <span>Thèmes d'intervention</span><i class="fa-solid fa-chevron-right text-xs text-mercy-accent"></i>
            </a>
            <a href="#pays" onclick="toggleMobileMenu()" class="px-4 py-3 rounded-xl hover:bg-white/10 flex items-center justify-between">
                <span>Pays d'intervention (24)</span><i class="fa-solid fa-chevron-right text-xs text-mercy-accent"></i>
            </a>
            <a href="#projets" onclick="toggleMobileMenu()" class="px-4 py-3 rounded-xl hover:bg-white/10 flex items-center justify-between">
                <span>Projets sur le terrain</span><i class="fa-solid fa-chevron-right text-xs text-mercy-accent"></i>
            </a>
            <a href="#actualites" onclick="toggleMobileMenu()" class="px-4 py-3 rounded-xl hover:bg-white/10 flex items-center justify-between">
                <span>Actualités & Publications</span><i class="fa-solid fa-chevron-right text-xs text-mercy-accent"></i>
            </a>
            <a href="#contact" onclick="toggleMobileMenu()" class="px-4 py-3 rounded-xl hover:bg-white/10 flex items-center justify-between">
                <span>Contact & Antennes</span><i class="fa-solid fa-chevron-right text-xs text-mercy-accent"></i>
            </a>
        </div>
        <div class="pt-3 border-t border-white/15 grid grid-cols-2 gap-3">
            <button type="button" onclick="toggleMobileMenu(); jumpToDonation('monthly', 30)" class="py-3 px-4 rounded-xl bg-white/10 hover:bg-white/20 text-white font-bold text-sm text-center">
                Don régulier
            </button>
            <button type="button" onclick="toggleMobileMenu(); jumpToDonation('once', 50)" class="py-3 px-4 rounded-xl bg-mercy-green hover:bg-mercy-darkGreen text-white font-bold text-sm text-center">
                Donner maintenant
            </button>
        </div>
    </div>
</header>

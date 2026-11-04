<!-- Barre Supérieure Secondaire Épurée (Desktop uniquement) -->
<div id="top-bar" class="hidden md:block bg-mercy-black/95 text-gray-300 text-[11px] border-b border-white/5 relative z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-8 flex items-center justify-between">
        <!-- Slogan institutionnel gauche -->
        <div class="flex items-center gap-2 text-gray-400">
            <span class="inline-block w-1.5 h-1.5 rounded-full bg-mercy-accent animate-pulse"></span>
            <span>{{ __('site.topbar.slogan') }}</span>
        </div>

        <!-- Liens secondaires & outils -->
        <div class="flex items-center gap-5">
            <nav class="flex items-center gap-4 text-gray-400" aria-label="Liens institutionnels">
                <a href="#publications" class="hover:text-mercy-accent transition-colors">{{ __('site.topbar.publications') }}</a>
                <button type="button" onclick="openInfoModal('medias')" class="hover:text-mercy-accent transition-colors">{{ __('site.topbar.press') }}</button>
                <button type="button" onclick="openInfoModal('carrieres')" class="hover:text-mercy-accent transition-colors">{{ __('site.topbar.careers') }}</button>
            </nav>

            <div class="h-3 w-px bg-white/10"></div>

            <div class="flex items-center gap-3">
                <!-- Bouton Recherche -->
                <button type="button" id="toggle-search-btn" onclick="toggleSearchBar()" aria-label="{{ __('site.topbar.search') }}" class="flex items-center gap-1.5 text-gray-300 hover:text-white transition-colors">
                    <i class="fa-solid fa-magnifying-glass text-[10px] text-mercy-accent"></i>
                    <span>{{ __('site.topbar.search') }}</span>
                </button>

                <!-- Sélecteur de langue Dropdown Épuré & Stable (Hover continu + Clic) -->
                <div class="relative group/lang py-1" id="topbar-lang-container">
                    <button type="button"
                            id="topbar-lang-btn"
                            onclick="toggleLanguageDropdown(event, 'topbar-lang-dropdown')"
                            aria-haspopup="true"
                            aria-expanded="false"
                            aria-label="{{ __('site.nav.language') }}"
                            class="flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-white/5 hover:bg-white/10 border border-white/10 text-gray-200 hover:text-white transition-all cursor-pointer">
                        <i class="fa-solid fa-globe text-mercy-accent text-[11px]"></i>
                        <span class="font-bold text-[11px] uppercase tracking-wider">{{ app()->getLocale() }}</span>
                        <i id="topbar-lang-chevron" class="fa-solid fa-chevron-down text-[8px] text-gray-400 transition-transform duration-200 group-hover/lang:rotate-180"></i>
                    </button>

                    <!-- Menu déroulant avec pont de survol invisible (zéro décrochage) -->
                    <div id="topbar-lang-dropdown"
                         class="lang-dropdown-menu absolute right-0 top-full pt-1.5 w-44 z-50 hidden group-hover/lang:block focus-within:block transition-all before:absolute before:-top-3 before:inset-x-0 before:h-3 before:content-['']">
                        <div class="bg-[#121A15] border border-white/15 rounded-2xl shadow-2xl p-1.5 backdrop-blur-xl space-y-0.5">
                            <div class="px-2.5 py-1 text-[9px] font-bold uppercase tracking-wider text-gray-400 border-b border-white/10 mb-1 flex items-center justify-between">
                                <span>{{ __('site.nav.language') }}</span>
                                <span class="text-mercy-accent font-mono">{{ strtoupper(app()->getLocale()) }}</span>
                            </div>
                            <a href="{{ route('locale.switch', 'en') }}"
                               class="flex items-center justify-between px-3 py-2 rounded-xl text-xs transition-all {{ app()->getLocale() === 'en' ? 'bg-mercy-green text-white font-bold shadow-sm' : 'text-gray-300 hover:text-white hover:bg-white/10' }}">
                                <span class="flex items-center gap-2">
                                    <span class="text-sm">🇬🇧</span>
                                    <span>English</span>
                                </span>
                                <span class="text-[10px] font-mono {{ app()->getLocale() === 'en' ? 'text-white/90' : 'text-gray-400' }}">EN</span>
                            </a>
                            <a href="{{ route('locale.switch', 'fr') }}"
                               class="flex items-center justify-between px-3 py-2 rounded-xl text-xs transition-all {{ app()->getLocale() === 'fr' ? 'bg-mercy-green text-white font-bold shadow-sm' : 'text-gray-300 hover:text-white hover:bg-white/10' }}">
                                <span class="flex items-center gap-2">
                                    <span class="text-sm">🇫🇷</span>
                                    <span>Français</span>
                                </span>
                                <span class="text-[10px] font-mono {{ app()->getLocale() === 'fr' ? 'text-white/90' : 'text-gray-400' }}">FR</span>
                            </a>
                            <a href="{{ route('locale.switch', 'de') }}"
                               class="flex items-center justify-between px-3 py-2 rounded-xl text-xs transition-all {{ app()->getLocale() === 'de' ? 'bg-mercy-green text-white font-bold shadow-sm' : 'text-gray-300 hover:text-white hover:bg-white/10' }}">
                                <span class="flex items-center gap-2">
                                    <span class="text-sm">🇩🇪</span>
                                    <span>Deutsch</span>
                                </span>
                                <span class="text-[10px] font-mono {{ app()->getLocale() === 'de' ? 'text-white/90' : 'text-gray-400' }}">DE</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Barre de recherche déroulante interactive -->
    <div id="search-drawer" class="hidden bg-mercy-charcoal border-t border-white/10 py-3.5 px-4 sm:px-6 lg:px-8 shadow-2xl">
        <div class="max-w-4xl mx-auto">
            <div class="relative flex items-center">
                <i class="fa-solid fa-magnifying-glass absolute left-4 text-mercy-accent text-sm"></i>
                <input type="text" id="global-search-input" oninput="handleGlobalSearch(this.value)" placeholder="{{ __('site.topbar.search_placeholder') }}" class="w-full pl-10 pr-20 py-2.5 rounded-xl bg-mercy-black border border-white/15 text-white placeholder-gray-400 text-xs sm:text-sm focus:outline-none focus:border-mercy-accent">
                <button type="button" onclick="toggleSearchBar()" class="absolute right-2 px-2.5 py-1 rounded-lg bg-white/10 hover:bg-white/20 text-xs text-gray-300 transition">
                    {{ __('site.topbar.search_close') }}
                </button>
            </div>
            <div id="global-search-results" class="mt-2.5 grid grid-cols-1 sm:grid-cols-2 gap-2 max-h-60 overflow-y-auto custom-scroll"></div>
        </div>
    </div>
</div>

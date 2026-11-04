<!-- 6. SECTION "NOS THÈMES D'INTERVENTION" (OPTIMISÉE MOBILE) -->
<section id="themes" class="py-12 sm:py-20 bg-mercy-surface border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-8 sm:mb-14">
            <span class="inline-block px-3 py-1 rounded-full bg-mercy-black text-mercy-accent text-[11px] sm:text-xs font-bold uppercase tracking-wider mb-2.5">
                {{ __('site.themes.tag') }}
            </span>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-mercy-black">
                {{ __('site.themes.title') }}
            </h2>
            <p class="text-gray-600 mt-2 sm:mt-3 text-xs sm:text-sm lg:text-base">
                {{ __('site.themes.subtitle') }}
            </p>
        </div>

        <!-- Grille des 6 thèmes injectée dynamiquement par themes.js -->
        <div id="themes-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6"></div>
    </div>
</section>

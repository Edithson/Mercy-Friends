<!-- 4. SECTION "NOTRE IMPACT" (CHIFFRES CLÉS - OPTIMISÉE MOBILE) -->
<section id="impact-band" class="bg-mercy-charcoal border-t border-b border-mercy-green/20 text-white py-10 sm:py-14 relative overflow-hidden">
    <div class="absolute -right-20 -bottom-20 w-80 h-80 rounded-full bg-mercy-green/10 blur-3xl pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-7 sm:mb-10 gap-3">
            <div>
                <span class="text-mercy-accent font-bold text-[11px] sm:text-xs uppercase tracking-wider">{{ __('site.impact.tag') }}</span>
                <h2 class="text-xl sm:text-3xl font-black mt-0.5">{{ __('site.impact.title') }}</h2>
            </div>
            <p class="text-xs sm:text-sm text-gray-300 max-w-md">
                {{ __('site.impact.subtitle') }}
            </p>
        </div>

        <!-- Grille 2 colonnes sur mobile pour éviter les défilements infinis -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-5">
            <!-- Stat 1 -->
            <div class="bg-mercy-black/80 border border-white/10 rounded-2xl p-3.5 sm:p-5 hover:border-mercy-accent/40 transition-all">
                <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-xl bg-mercy-green/20 text-mercy-accent flex items-center justify-center mb-2.5 text-sm sm:text-base">
                    <i class="fa-solid fa-seedling"></i>
                </div>
                <div class="text-2xl sm:text-4xl font-black text-white tracking-tight">
                    <span class="stat-counter" data-target="148">{{ __('site.impact.stat_1_val') }}</span>
                </div>
                <p class="text-xs sm:text-sm font-semibold text-mercy-accent mt-1.5 leading-snug">{{ __('site.impact.stat_1_label') }}</p>
                <p class="text-[10px] sm:text-xs text-gray-400 mt-0.5">{{ __('site.impact.stat_1_sub') }}</p>
            </div>

            <!-- Stat 2 -->
            <div class="bg-mercy-black/80 border border-white/10 rounded-2xl p-3.5 sm:p-5 hover:border-mercy-accent/40 transition-all">
                <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-xl bg-mercy-green/20 text-mercy-accent flex items-center justify-center mb-2.5 text-sm sm:text-base">
                    <i class="fa-solid fa-users"></i>
                </div>
                <div class="text-2xl sm:text-4xl font-black text-white tracking-tight">
                    <span class="stat-counter" data-target="1.8" data-decimals="1">{{ __('site.impact.stat_2_val') }}</span><span class="text-mercy-accent"> {{ __('site.impact.stat_2_unit') }}</span>
                </div>
                <p class="text-xs sm:text-sm font-semibold text-mercy-accent mt-1.5 leading-snug">{{ __('site.impact.stat_2_label') }}</p>
                <p class="text-[10px] sm:text-xs text-gray-400 mt-0.5">{{ __('site.impact.stat_2_sub') }}</p>
            </div>

            <!-- Stat 3 -->
            <div class="bg-mercy-black/80 border border-white/10 rounded-2xl p-3.5 sm:p-5 hover:border-mercy-accent/40 transition-all">
                <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-xl bg-mercy-green/20 text-mercy-accent flex items-center justify-center mb-2.5 text-sm sm:text-base">
                    <i class="fa-solid fa-chart-pie"></i>
                </div>
                <div class="text-2xl sm:text-4xl font-black text-white tracking-tight">
                    <span class="stat-counter" data-target="90.4" data-decimals="1">{{ __('site.impact.stat_3_val') }}</span><span class="text-mercy-accent"> {{ __('site.impact.stat_3_unit') }}</span>
                </div>
                <p class="text-xs sm:text-sm font-semibold text-mercy-accent mt-1.5 leading-snug">{{ __('site.impact.stat_3_label') }}</p>
                <p class="text-[10px] sm:text-xs text-gray-400 mt-0.5">{{ __('site.impact.stat_3_sub') }}</p>
            </div>

            <!-- Stat 4 -->
            <div class="bg-mercy-black/80 border border-white/10 rounded-2xl p-3.5 sm:p-5 hover:border-mercy-accent/40 transition-all">
                <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-xl bg-mercy-green/20 text-mercy-accent flex items-center justify-center mb-2.5 text-sm sm:text-base">
                    <i class="fa-solid fa-earth-africa"></i>
                </div>
                <div class="text-2xl sm:text-4xl font-black text-white tracking-tight">
                    <span class="stat-counter" data-target="24">{{ __('site.impact.stat_4_val') }}</span>
                </div>
                <p class="text-xs sm:text-sm font-semibold text-mercy-accent mt-1.5 leading-snug">{{ __('site.impact.stat_4_label') }}</p>
                <p class="text-[10px] sm:text-xs text-gray-400 mt-0.5">{{ __('site.impact.stat_4_sub') }}</p>
            </div>
        </div>
    </div>
</section>

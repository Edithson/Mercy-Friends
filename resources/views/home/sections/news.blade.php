<!-- 9. ACTUALITÉS, ÉVÉNEMENTS & PUBLICATIONS (OPTIMISÉE MOBILE) -->
<section id="actualites" class="py-12 sm:py-20 bg-mercy-surface border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Grille 2 colonnes : Actualités (Gauche) & Événements (Droite) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 mb-10 sm:mb-16">

            <!-- Colonne Actualités & Communiqués -->
            <div class="lg:col-span-7">
                <div class="flex items-center justify-between mb-4 sm:mb-6 pb-2.5 border-b-2 border-mercy-black">
                    <h2 class="text-xl sm:text-2xl font-black text-mercy-black">{{ __('site.news.col_articles') }}</h2>
                    <button type="button" onclick="openInfoModal('medias')" class="text-[11px] sm:text-xs font-bold uppercase tracking-wider text-mercy-green hover:text-mercy-darkGreen">
                        {{ __('site.news.press_office') }} →
                    </button>
                </div>

                <div class="space-y-3.5 sm:space-y-5">
                    <!-- Article 1 -->
                    <article onclick="openNewsModal(0)" class="cursor-pointer bg-white p-4 sm:p-6 rounded-2xl border border-gray-200 hover:border-mercy-green shadow-sm transition group">
                        <div class="flex items-center gap-2 text-[10px] sm:text-xs font-bold text-gray-500 mb-1.5">
                            <span class="text-mercy-green uppercase">{{ __('site.news.art1_meta') }}</span>
                        </div>
                        <h3 class="text-sm sm:text-lg lg:text-xl font-bold text-mercy-black group-hover:text-mercy-green transition-colors leading-snug">
                            {{ __('site.news.art1_title') }}
                        </h3>
                        <p class="text-xs sm:text-sm text-gray-600 mt-1.5 line-clamp-2">
                            {{ __('site.news.art1_desc') }}
                        </p>
                        <span class="inline-flex items-center gap-1.5 text-xs font-bold text-mercy-green mt-2.5">
                            {{ __('site.news.read_article') }} <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
                        </span>
                    </article>

                    <!-- Article 2 -->
                    <article onclick="openNewsModal(1)" class="cursor-pointer bg-white p-4 sm:p-6 rounded-2xl border border-gray-200 hover:border-mercy-green shadow-sm transition group">
                        <div class="flex items-center gap-2 text-[10px] sm:text-xs font-bold text-gray-500 mb-1.5">
                            <span class="text-mercy-green uppercase">{{ __('site.news.art2_meta') }}</span>
                        </div>
                        <h3 class="text-sm sm:text-lg lg:text-xl font-bold text-mercy-black group-hover:text-mercy-green transition-colors leading-snug">
                            {{ __('site.news.art2_title') }}
                        </h3>
                        <p class="text-xs sm:text-sm text-gray-600 mt-1.5 line-clamp-2">
                            {{ __('site.news.art2_desc') }}
                        </p>
                        <span class="inline-flex items-center gap-1.5 text-xs font-bold text-mercy-green mt-2.5">
                            {{ __('site.news.read_article') }} <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
                        </span>
                    </article>
                </div>
            </div>

            <!-- Colonne Événements Solidaires -->
            <div class="lg:col-span-5">
                <div class="flex items-center justify-between mb-4 sm:mb-6 pb-2.5 border-b-2 border-mercy-black">
                    <h2 class="text-xl sm:text-2xl font-black text-mercy-black">{{ __('site.news.col_events') }}</h2>
                    <span class="text-[11px] sm:text-xs font-medium text-gray-500">{{ __('site.news.events_public') }}</span>
                </div>

                <div class="space-y-3 sm:space-y-4">
                    <!-- Événement 1 -->
                    <div onclick="openEventModal(0)" class="cursor-pointer bg-white p-3.5 sm:p-5 rounded-2xl border border-gray-200 hover:border-mercy-green shadow-sm transition flex gap-3 sm:gap-4 items-start group">
                        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-mercy-black text-white flex flex-col items-center justify-center shrink-0 group-hover:bg-mercy-green transition-colors">
                            <span class="text-base sm:text-lg font-black leading-none">{{ __('site.news.ev1_date_day') }}</span>
                            <span class="text-[9px] sm:text-[10px] font-bold uppercase text-mercy-accent group-hover:text-white mt-0.5">{{ __('site.news.ev1_date_month') }}</span>
                        </div>
                        <div>
                            <span class="text-[10px] sm:text-[11px] font-bold uppercase tracking-wider text-mercy-green">{{ __('site.news.ev1_tag') }}</span>
                            <h3 class="text-xs sm:text-sm font-bold text-mercy-black group-hover:text-mercy-green transition-colors mt-0.5 leading-snug">
                                {{ __('site.news.ev1_title') }}
                            </h3>
                            <p class="text-[11px] sm:text-xs text-gray-600 mt-1">{{ __('site.news.ev1_desc') }}</p>
                        </div>
                    </div>

                    <!-- Événement 2 -->
                    <div onclick="openEventModal(1)" class="cursor-pointer bg-white p-3.5 sm:p-5 rounded-2xl border border-gray-200 hover:border-mercy-green shadow-sm transition flex gap-3 sm:gap-4 items-start group">
                        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-mercy-black text-white flex flex-col items-center justify-center shrink-0 group-hover:bg-mercy-green transition-colors">
                            <span class="text-base sm:text-lg font-black leading-none">{{ __('site.news.ev2_date_day') }}</span>
                            <span class="text-[9px] sm:text-[10px] font-bold uppercase text-mercy-accent group-hover:text-white mt-0.5">{{ __('site.news.ev2_date_month') }}</span>
                        </div>
                        <div>
                            <span class="text-[10px] sm:text-[11px] font-bold uppercase tracking-wider text-mercy-green">{{ __('site.news.ev2_tag') }}</span>
                            <h3 class="text-xs sm:text-sm font-bold text-mercy-black group-hover:text-mercy-green transition-colors mt-0.5 leading-snug">
                                {{ __('site.news.ev2_title') }}
                            </h3>
                            <p class="text-[11px] sm:text-xs text-gray-600 mt-1">{{ __('site.news.ev2_desc') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bloc Publications & Rapports -->
        <div id="publications" class="bg-white rounded-2xl sm:rounded-3xl p-4 sm:p-8 border border-gray-200 shadow-sm">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-5 sm:mb-6">
                <div>
                    <span class="text-[10px] sm:text-xs font-bold uppercase tracking-wider text-mercy-green">{{ __('site.about.finance_tag') }}</span>
                    <h3 class="text-xl sm:text-2xl font-black text-mercy-black">{{ __('site.news.col_reports') }}</h3>
                </div>
                <button type="button" onclick="openInfoModal('rapport-financier')" class="text-xs font-bold px-3.5 py-2 rounded-xl bg-mercy-black text-white hover:bg-mercy-green transition self-start">
                    {{ __('site.news.annual_archives') }}
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-3.5 sm:gap-5">
                <div onclick="openPublicationModal(0)" class="cursor-pointer p-4 sm:p-5 rounded-xl sm:rounded-2xl bg-mercy-surface border border-gray-200 hover:border-mercy-green transition flex flex-col justify-between group">
                    <div>
                        <span class="inline-flex items-center gap-1.5 text-[10px] sm:text-[11px] font-bold text-mercy-darkGreen bg-mercy-soft px-2 py-0.5 rounded mb-2">
                            <i class="fa-solid fa-file-pdf"></i> {{ __('site.news.pub1_badge') }}
                        </span>
                        <h4 class="font-bold text-xs sm:text-sm text-mercy-black group-hover:text-mercy-green transition leading-snug">
                            {{ __('site.news.pub1_title') }}
                        </h4>
                        <p class="text-[11px] sm:text-xs text-gray-600 mt-1.5">{{ __('site.news.pub1_desc') }}</p>
                    </div>
                    <span class="mt-3 text-xs font-bold text-mercy-green flex items-center gap-1.5">
                        {{ __('site.news.consult') }} <i class="fa-solid fa-download text-[10px]"></i>
                    </span>
                </div>

                <div onclick="openPublicationModal(1)" class="cursor-pointer p-4 sm:p-5 rounded-xl sm:rounded-2xl bg-mercy-surface border border-gray-200 hover:border-mercy-green transition flex flex-col justify-between group">
                    <div>
                        <span class="inline-flex items-center gap-1.5 text-[10px] sm:text-[11px] font-bold text-mercy-darkGreen bg-mercy-soft px-2 py-0.5 rounded mb-2">
                            <i class="fa-solid fa-file-pdf"></i> {{ __('site.news.pub2_badge') }}
                        </span>
                        <h4 class="font-bold text-xs sm:text-sm text-mercy-black group-hover:text-mercy-green transition leading-snug">
                            {{ __('site.news.pub2_title') }}
                        </h4>
                        <p class="text-[11px] sm:text-xs text-gray-600 mt-1.5">{{ __('site.news.pub2_desc') }}</p>
                    </div>
                    <span class="mt-3 text-xs font-bold text-mercy-green flex items-center gap-1.5">
                        {{ __('site.news.consult') }} <i class="fa-solid fa-download text-[10px]"></i>
                    </span>
                </div>

                <div onclick="openPublicationModal(2)" class="cursor-pointer p-4 sm:p-5 rounded-xl sm:rounded-2xl bg-mercy-surface border border-gray-200 hover:border-mercy-green transition flex flex-col justify-between group">
                    <div>
                        <span class="inline-flex items-center gap-1.5 text-[10px] sm:text-[11px] font-bold text-mercy-darkGreen bg-mercy-soft px-2 py-0.5 rounded mb-2">
                            <i class="fa-solid fa-file-pdf"></i> {{ __('site.news.pub3_badge') }}
                        </span>
                        <h4 class="font-bold text-xs sm:text-sm text-mercy-black group-hover:text-mercy-green transition leading-snug">
                            {{ __('site.news.pub3_title') }}
                        </h4>
                        <p class="text-[11px] sm:text-xs text-gray-600 mt-1.5">{{ __('site.news.pub3_desc') }}</p>
                    </div>
                    <span class="mt-3 text-xs font-bold text-mercy-green flex items-center gap-1.5">
                        {{ __('site.news.consult') }} <i class="fa-solid fa-download text-[10px]"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

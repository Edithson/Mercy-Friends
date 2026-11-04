<!-- 11. SECTION "CONTACT" (OPTIMISÉE MOBILE) -->
<section id="contact" class="py-12 sm:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">

            <!-- Informations Siège, Antennes & Permanence -->
            <div class="lg:col-span-5 space-y-4 sm:space-y-6">
                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-mercy-soft text-mercy-darkGreen text-[11px] sm:text-xs font-extrabold uppercase tracking-wider">
                    <i class="fa-solid fa-comments"></i> {{ __('site.contact.tag') }}
                </span>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-mercy-black">
                    {{ __('site.contact.title') }}
                </h2>
                <p class="text-gray-600 text-xs sm:text-sm lg:text-base leading-relaxed">
                    {{ __('site.contact.subtitle') }}
                </p>

                <div class="space-y-3 sm:space-y-4 pt-1 sm:pt-2">
                    <div class="p-3.5 sm:p-5 rounded-xl sm:rounded-2xl bg-mercy-surface border border-gray-200 flex items-start gap-3 sm:gap-4">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-lg sm:rounded-xl bg-mercy-black text-mercy-accent flex items-center justify-center shrink-0 text-xs sm:text-sm">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-mercy-black text-xs sm:text-sm">{{ __('site.contact.hq_title') }}</h3>
                            <p class="text-[11px] sm:text-xs text-gray-600 mt-0.5">{{ __('site.contact.hq_address') }}</p>
                            <p class="text-[10px] sm:text-xs text-gray-400 mt-0.5">{{ __('site.contact.hq_hours') }}</p>
                        </div>
                    </div>

                    <div class="p-3.5 sm:p-5 rounded-xl sm:rounded-2xl bg-mercy-surface border border-gray-200 flex items-start gap-3 sm:gap-4">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-lg sm:rounded-xl bg-mercy-black text-mercy-accent flex items-center justify-center shrink-0 text-xs sm:text-sm">
                            <i class="fa-solid fa-earth-africa"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-mercy-black text-xs sm:text-sm">{{ __('site.contact.field_offices_title') }}</h3>
                            <p class="text-[11px] sm:text-xs text-gray-600 mt-0.5">{{ __('site.contact.field_offices_africa') }}</p>
                            <p class="text-[10px] sm:text-xs text-gray-400 mt-0.5">{{ __('site.contact.field_offices_caribbean') }}</p>
                        </div>
                    </div>

                    <div class="p-3.5 sm:p-5 rounded-xl sm:rounded-2xl bg-mercy-surface border border-gray-200 flex items-start gap-3 sm:gap-4">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-lg sm:rounded-xl bg-mercy-black text-mercy-accent flex items-center justify-center shrink-0 text-xs sm:text-sm">
                            <i class="fa-solid fa-user-shield"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-mercy-black text-xs sm:text-sm">{{ __('site.contact.ethics_title') }}</h3>
                            <p class="text-[11px] sm:text-xs text-gray-600 mt-0.5">{{ __('site.contact.ethics_desc') }}</p>
                            <button type="button" onclick="openLegalModal('ethique')" class="text-[11px] sm:text-xs font-bold text-mercy-green hover:underline mt-0.5 inline-block">
                                {{ __('site.contact.ethics_link') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Formulaire de Contact Réactif -->
            <div class="lg:col-span-7 bg-mercy-surface border border-gray-200 rounded-2xl sm:rounded-3xl p-4 sm:p-8 shadow-sm">
                <h3 class="text-base sm:text-xl font-black text-mercy-black mb-4 sm:mb-6">{{ __('site.contact.form_title') }}</h3>

                <form id="contact-form" onsubmit="handleContactSubmit(event)" class="space-y-3.5 sm:space-y-4" novalidate>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4">
                        <div>
                            <label for="contact-name" class="block text-[11px] sm:text-xs font-bold text-gray-700 mb-1">{{ __('site.contact.field_name') }}</label>
                            <input type="text" id="contact-name" required placeholder="Marie Tchouassi" class="w-full px-3 py-2.5 sm:px-4 sm:py-3 rounded-xl border border-gray-300 bg-white text-xs sm:text-sm focus:outline-none focus:border-mercy-green">
                        </div>
                        <div>
                            <label for="contact-email" class="block text-[11px] sm:text-xs font-bold text-gray-700 mb-1">{{ __('site.contact.field_email') }}</label>
                            <input type="email" id="contact-email" required placeholder="contact@example.org" class="w-full px-3 py-2.5 sm:px-4 sm:py-3 rounded-xl border border-gray-300 bg-white text-xs sm:text-sm focus:outline-none focus:border-mercy-green">
                        </div>
                    </div>

                    <div>
                        <label for="contact-subject" class="block text-[11px] sm:text-xs font-bold text-gray-700 mb-1">{{ __('site.contact.field_subject') }}</label>
                        <select id="contact-subject" class="w-full px-3 py-2.5 sm:px-4 sm:py-3 rounded-xl border border-gray-300 bg-white text-xs sm:text-sm font-semibold text-mercy-black focus:outline-none focus:border-mercy-green">
                            <option value="Question générale">{{ __('site.contact.field_subject_general') }}</option>
                            <option value="Donateur & Reçu fiscal">{{ __('site.contact.field_subject_donation') }}</option>
                            <option value="Partenariat Entreprise / Fondation">{{ __('site.contact.field_subject_partnership') }}</option>
                            <option value="Presse & Médias">{{ __('site.contact.field_subject_press') }}</option>
                            <option value="Bénévolat & Candidature">{{ __('site.contact.field_subject_careers') }}</option>
                        </select>
                    </div>

                    <div>
                        <label for="contact-message" class="block text-[11px] sm:text-xs font-bold text-gray-700 mb-1">{{ __('site.contact.field_message') }}</label>
                        <textarea id="contact-message" rows="3" required placeholder="{{ __('site.contact.field_message_placeholder') }}" class="w-full px-3 py-2.5 sm:px-4 sm:py-3 rounded-xl border border-gray-300 bg-white text-xs sm:text-sm focus:outline-none focus:border-mercy-green"></textarea>
                    </div>

                    <label class="flex items-start gap-2 text-[11px] sm:text-xs text-gray-600 cursor-pointer">
                        <input type="checkbox" id="contact-consent" required class="mt-0.5 accent-mercy-green w-3.5 h-3.5 rounded">
                        <span>{{ __('site.contact.consent_text') }} (<button type="button" onclick="openLegalModal('confidentialite')" class="text-mercy-green font-bold underline">{{ __('site.contact.consent_link') }}</button>).</span>
                    </label>

                    <p id="contact-error" class="hidden text-xs font-bold text-red-600"></p>

                    <button type="submit" class="px-5 py-2.5 sm:px-6 sm:py-3 rounded-xl bg-mercy-black hover:bg-mercy-green text-white font-bold text-xs sm:text-sm transition-colors inline-flex items-center gap-2 shadow-sm">
                        <i class="fa-solid fa-paper-plane text-xs"></i>
                        <span>{{ __('site.contact.btn_submit') }}</span>
                    </button>
                </form>

                <!-- Confirmation d'envoi inline -->
                <div id="contact-success-box" class="hidden mt-4 p-4 rounded-xl bg-mercy-soft border border-mercy-green/40 text-mercy-darkGreen text-xs">
                    <div class="flex items-start gap-2.5">
                        <i class="fa-solid fa-circle-check text-base text-mercy-green mt-0.5"></i>
                        <div>
                            <h4 class="font-bold">OK</h4>
                            <p id="contact-success-detail" class="mt-0.5"></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

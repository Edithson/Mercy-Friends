<!-- 11. SECTION "CONTACT" (OPTIMISÉE MOBILE) -->
<section id="contact" class="py-12 sm:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">

            <!-- Informations Siège, Antennes & Permanence -->
            <div class="lg:col-span-5 space-y-4 sm:space-y-6">
                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-mercy-soft text-mercy-darkGreen text-[11px] sm:text-xs font-extrabold uppercase tracking-wider">
                    <i class="fa-solid fa-comments"></i> Contactez-nous
                </span>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-mercy-black">
                    Restons en lien
                </h2>
                <p class="text-gray-600 text-xs sm:text-sm lg:text-base leading-relaxed">
                    Une question sur nos missions, un projet de mécénat ou l'envie de rejoindre nos bénévoles ? Nos équipes vous répondent avec attention.
                </p>

                <div class="space-y-3 sm:space-y-4 pt-1 sm:pt-2">
                    <div class="p-3.5 sm:p-5 rounded-xl sm:rounded-2xl bg-mercy-surface border border-gray-200 flex items-start gap-3 sm:gap-4">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-lg sm:rounded-xl bg-mercy-black text-mercy-accent flex items-center justify-center shrink-0 text-xs sm:text-sm">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-mercy-black text-xs sm:text-sm">Siège &amp; Coordination</h3>
                            <p class="text-[11px] sm:text-xs text-gray-600 mt-0.5">24 Rue de la Solidarité, 75011 Paris, France</p>
                            <p class="text-[10px] sm:text-xs text-gray-400 mt-0.5">Lun – Ven : 09h00 – 18h00</p>
                        </div>
                    </div>

                    <div class="p-3.5 sm:p-5 rounded-xl sm:rounded-2xl bg-mercy-surface border border-gray-200 flex items-start gap-3 sm:gap-4">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-lg sm:rounded-xl bg-mercy-black text-mercy-accent flex items-center justify-center shrink-0 text-xs sm:text-sm">
                            <i class="fa-solid fa-earth-africa"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-mercy-black text-xs sm:text-sm">Bureaux de Coordination Terrain</h3>
                            <p class="text-[11px] sm:text-xs text-gray-600 mt-0.5"><strong>Afrique :</strong> Yaoundé (Cameroun), Kinshasa (RDC), Ouagadougou</p>
                            <p class="text-[10px] sm:text-xs text-gray-400 mt-0.5"><strong>Caraïbes :</strong> Port-au-Prince (Haïti)</p>
                        </div>
                    </div>

                    <div class="p-3.5 sm:p-5 rounded-xl sm:rounded-2xl bg-mercy-surface border border-gray-200 flex items-start gap-3 sm:gap-4">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-lg sm:rounded-xl bg-mercy-black text-mercy-accent flex items-center justify-center shrink-0 text-xs sm:text-sm">
                            <i class="fa-solid fa-user-shield"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-mercy-black text-xs sm:text-sm">Intégrité &amp; Alerte éthique</h3>
                            <p class="text-[11px] sm:text-xs text-gray-600 mt-0.5">Canal confidentiel ouvert 24h/24 pour tout manquement éthique.</p>
                            <button type="button" onclick="openLegalModal('ethique')" class="text-[11px] sm:text-xs font-bold text-mercy-green hover:underline mt-0.5 inline-block">
                                Ouvrir le canal d'alerte →
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Formulaire de Contact Réactif -->
            <div class="lg:col-span-7 bg-mercy-surface border border-gray-200 rounded-2xl sm:rounded-3xl p-4 sm:p-8 shadow-sm">
                <h3 class="text-base sm:text-xl font-black text-mercy-black mb-4 sm:mb-6">Envoyer un message</h3>

                <form id="contact-form" onsubmit="handleContactSubmit(event)" class="space-y-3.5 sm:space-y-4" novalidate>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4">
                        <div>
                            <label for="contact-name" class="block text-[11px] sm:text-xs font-bold text-gray-700 mb-1">Nom complet *</label>
                            <input type="text" id="contact-name" required placeholder="Ex: Marie Tchouassi" class="w-full px-3 py-2.5 sm:px-4 sm:py-3 rounded-xl border border-gray-300 bg-white text-xs sm:text-sm focus:outline-none focus:border-mercy-green">
                        </div>
                        <div>
                            <label for="contact-email" class="block text-[11px] sm:text-xs font-bold text-gray-700 mb-1">Adresse e-mail *</label>
                            <input type="email" id="contact-email" required placeholder="exemple@domaine.org" class="w-full px-3 py-2.5 sm:px-4 sm:py-3 rounded-xl border border-gray-300 bg-white text-xs sm:text-sm focus:outline-none focus:border-mercy-green">
                        </div>
                    </div>

                    <div>
                        <label for="contact-subject" class="block text-[11px] sm:text-xs font-bold text-gray-700 mb-1">Sujet *</label>
                        <select id="contact-subject" class="w-full px-3 py-2.5 sm:px-4 sm:py-3 rounded-xl border border-gray-300 bg-white text-xs sm:text-sm font-semibold text-mercy-black focus:outline-none focus:border-mercy-green">
                            <option value="Question générale">Question générale</option>
                            <option value="Donateur & Reçu fiscal">Espace Donateur / Reçu fiscal</option>
                            <option value="Partenariat Entreprise / Fondation">Partenariat Entreprise ou Fondation</option>
                            <option value="Presse & Médias">Demande Presse &amp; Médias</option>
                            <option value="Bénévolat & Candidature">Bénévolat &amp; Candidature terrain</option>
                        </select>
                    </div>

                    <div>
                        <label for="contact-message" class="block text-[11px] sm:text-xs font-bold text-gray-700 mb-1">Votre message *</label>
                        <textarea id="contact-message" rows="3" required placeholder="Précisez votre demande..." class="w-full px-3 py-2.5 sm:px-4 sm:py-3 rounded-xl border border-gray-300 bg-white text-xs sm:text-sm focus:outline-none focus:border-mercy-green"></textarea>
                    </div>

                    <label class="flex items-start gap-2 text-[11px] sm:text-xs text-gray-600 cursor-pointer">
                        <input type="checkbox" id="contact-consent" required class="mt-0.5 accent-mercy-green w-3.5 h-3.5 rounded">
                        <span>J'accepte le traitement de mes données pour répondre à ma demande (<button type="button" onclick="openLegalModal('confidentialite')" class="text-mercy-green font-bold underline">Politique RGPD</button>).</span>
                    </label>

                    <p id="contact-error" class="hidden text-xs font-bold text-red-600"></p>

                    <button type="submit" class="px-5 py-2.5 sm:px-6 sm:py-3 rounded-xl bg-mercy-black hover:bg-mercy-green text-white font-bold text-xs sm:text-sm transition-colors inline-flex items-center gap-2 shadow-sm">
                        <i class="fa-solid fa-paper-plane text-xs"></i>
                        <span>Envoyer mon message</span>
                    </button>
                </form>

                <!-- Confirmation d'envoi inline -->
                <div id="contact-success-box" class="hidden mt-4 p-4 rounded-xl bg-mercy-soft border border-mercy-green/40 text-mercy-darkGreen text-xs">
                    <div class="flex items-start gap-2.5">
                        <i class="fa-solid fa-circle-check text-base text-mercy-green mt-0.5"></i>
                        <div>
                            <h4 class="font-bold">Message transmis avec succès !</h4>
                            <p id="contact-success-detail" class="mt-0.5"></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

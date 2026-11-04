<!-- 11. SECTION "CONTACT" -->
<section id="contact" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

            <!-- Informations Siège, Antennes & Permanence -->
            <div class="lg:col-span-5 space-y-6">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-lg bg-mercy-soft text-mercy-darkGreen text-xs font-extrabold uppercase tracking-wider">
                    <i class="fa-solid fa-comments"></i> Contactez-nous
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-mercy-black">
                    Restons en lien
                </h2>
                <p class="text-gray-600 text-base leading-relaxed">
                    Une question sur nos missions humanitaires, une proposition de partenariat, une demande presse ou l'envie de rejoindre nos bénévoles ? Écrivez-nous.
                </p>

                <div class="space-y-4 pt-2">
                    <div class="p-5 rounded-2xl bg-mercy-surface border border-gray-200 flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-mercy-black text-mercy-accent flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <h3 class="font-extrabold text-mercy-black text-sm">Siège International & Coordination</h3>
                            <p class="text-xs text-gray-600 mt-1">24 Rue de la Solidarité, 75011 Paris, France</p>
                            <p class="text-xs text-gray-500 mt-0.5">Lun – Ven : 09h00 – 18h00 (CET)</p>
                        </div>
                    </div>

                    <div class="p-5 rounded-2xl bg-mercy-surface border border-gray-200 flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-mercy-black text-mercy-accent flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-earth-africa"></i>
                        </div>
                        <div>
                            <h3 class="font-extrabold text-mercy-black text-sm">Bureaux Régionaux de Coordination Terrain</h3>
                            <p class="text-xs text-gray-600 mt-1"><strong>Afrique Centrale :</strong> Quartier Bastos, Yaoundé (Cameroun) & Gombe, Kinshasa (RDC)</p>
                            <p class="text-xs text-gray-600 mt-0.5"><strong>Afrique de l'Ouest :</strong> Ouagadougou & Dakar • <strong>Caraïbes :</strong> Port-au-Prince</p>
                        </div>
                    </div>

                    <div class="p-5 rounded-2xl bg-mercy-surface border border-gray-200 flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-mercy-black text-mercy-accent flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-user-shield"></i>
                        </div>
                        <div>
                            <h3 class="font-extrabold text-mercy-black text-sm">Intégrité & Signalement éthique</h3>
                            <p class="text-xs text-gray-600 mt-1">Un canal confidentiel est ouvert 24h/24 pour signaler tout manquement éthique.</p>
                            <button type="button" onclick="openLegalModal('ethique')" class="text-xs font-extrabold text-mercy-green hover:underline mt-1">
                                Ouvrir le canal d'alerte éthique →
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Formulaire de Contact Complet avec Validation -->
            <div class="lg:col-span-7 bg-mercy-surface border border-gray-200 rounded-3xl p-6 sm:p-10 shadow-sm">
                <h3 class="text-xl font-black text-mercy-black mb-6">Envoyer un message à nos équipes</h3>

                <form id="contact-form" onsubmit="handleContactSubmit(event)" class="space-y-5" novalidate>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="contact-name" class="block text-xs font-bold text-gray-700 mb-1.5">Nom complet *</label>
                            <input type="text" id="contact-name" required placeholder="Ex: Marie Tchouassi" class="w-full px-4 py-3 rounded-xl border border-gray-300 bg-white text-sm focus:outline-none focus:border-mercy-green">
                        </div>
                        <div>
                            <label for="contact-email" class="block text-xs font-bold text-gray-700 mb-1.5">Adresse e-mail *</label>
                            <input type="email" id="contact-email" required placeholder="exemple@domaine.org" class="w-full px-4 py-3 rounded-xl border border-gray-300 bg-white text-sm focus:outline-none focus:border-mercy-green">
                        </div>
                    </div>

                    <div>
                        <label for="contact-subject" class="block text-xs font-bold text-gray-700 mb-1.5">Sujet de votre demande *</label>
                        <select id="contact-subject" class="w-full px-4 py-3 rounded-xl border border-gray-300 bg-white text-sm font-semibold text-mercy-black focus:outline-none focus:border-mercy-green">
                            <option value="Question générale">Question générale sur Mercy Friends</option>
                            <option value="Donateur & Reçu fiscal">Espace Donateur / Reçu fiscal / Don régulier</option>
                            <option value="Partenariat Entreprise / Fondation">Partenariat Entreprise, Fondation ou Institution</option>
                            <option value="Presse & Médias">Demande Presse & Interviews</option>
                            <option value="Bénévolat & Candidature">Bénévolat, Stage ou Candidature terrain</option>
                        </select>
                    </div>

                    <div>
                        <label for="contact-message" class="block text-xs font-bold text-gray-700 mb-1.5">Votre message *</label>
                        <textarea id="contact-message" rows="4" required placeholder="Précisez votre demande afin que nous l'orientions vers le bon interlocuteur..." class="w-full px-4 py-3 rounded-xl border border-gray-300 bg-white text-sm focus:outline-none focus:border-mercy-green"></textarea>
                    </div>

                    <label class="flex items-start gap-2.5 text-xs text-gray-600 cursor-pointer">
                        <input type="checkbox" id="contact-consent" required class="mt-0.5 accent-mercy-green w-4 h-4 rounded">
                        <span>J'accepte que mes informations soient traitées par Mercy Friends uniquement pour répondre à ma demande, conformément à la <button type="button" onclick="openLegalModal('confidentialite')" class="text-mercy-green font-bold underline">Politique de protection des données</button>.</span>
                    </label>

                    <p id="contact-error" class="hidden text-xs font-bold text-red-600"></p>

                    <button type="submit" class="px-7 py-3.5 rounded-xl bg-mercy-black hover:bg-mercy-green text-white font-extrabold text-sm transition-colors inline-flex items-center gap-2">
                        <i class="fa-solid fa-paper-plane"></i>
                        <span>Envoyer mon message</span>
                    </button>
                </form>

                <!-- Confirmation d'envoi inline -->
                <div id="contact-success-box" class="hidden mt-6 p-5 rounded-2xl bg-mercy-soft border border-mercy-green/40 text-mercy-darkGreen">
                    <div class="flex items-start gap-3">
                        <i class="fa-solid fa-circle-check text-xl text-mercy-green mt-0.5"></i>
                        <div>
                            <h4 class="font-extrabold text-sm">Message transmis avec succès !</h4>
                            <p id="contact-success-detail" class="text-xs mt-1"></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

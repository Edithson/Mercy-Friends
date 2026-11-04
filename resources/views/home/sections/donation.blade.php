<!-- 10. MODULE INTERACTIF "FAIRE UN DON" -->
<section id="faire-un-don" class="py-20 bg-mercy-black text-white relative overflow-hidden">
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-mercy-green/15 rounded-full blur-3xl pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-mercy-green/20 border border-mercy-accent/40 text-mercy-accent text-xs font-bold uppercase tracking-widest mb-3">
                <i class="fa-solid fa-hand-holding-heart"></i> Votre don agit immédiatement
            </span>
            <h2 class="text-3xl sm:text-5xl font-black tracking-tight">
                Votre générosité change des vies !
            </h2>
            <p class="text-gray-300 mt-3 text-base">
                Choisissez le montant et la fréquence de votre soutien. <strong class="text-white">66 % de votre don est déductible de vos impôts</strong> (dans la limite légale en vigueur).
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

            <!-- Formulaire Interactif de Don (8 colonnes) -->
            <div class="lg:col-span-8 bg-white text-mercy-black rounded-3xl p-6 sm:p-10 shadow-2xl">
                <form id="donation-form" onsubmit="handleDonationSubmit(event)" novalidate>

                    <!-- Étape 1 : Fréquence (Une seule fois vs Mensuel) -->
                    <div class="mb-7">
                        <label class="block text-xs font-extrabold uppercase tracking-wider text-gray-500 mb-2.5">
                            1. Choisissez la fréquence de votre soutien
                        </label>
                        <div class="grid grid-cols-2 gap-3 p-1.5 bg-mercy-surface rounded-2xl border border-gray-200">
                            <button type="button" id="freq-once" onclick="setDonationFrequency('once')" class="py-3.5 px-4 rounded-xl font-extrabold text-sm transition-all bg-mercy-black text-white shadow">
                                Une seule fois
                            </button>
                            <button type="button" id="freq-monthly" onclick="setDonationFrequency('monthly')" class="py-3.5 px-4 rounded-xl font-extrabold text-sm transition-all text-gray-700 hover:text-mercy-black flex items-center justify-center gap-2">
                                <span>Mensuel (Don régulier)</span>
                                <span class="hidden sm:inline-block px-2 py-0.5 text-[10px] rounded-full bg-mercy-soft text-mercy-darkGreen font-black">+ Durable</span>
                            </button>
                        </div>
                    </div>

                    <!-- Étape 2 : Montant prédéfini ou libre -->
                    <div class="mb-7">
                        <label class="block text-xs font-extrabold uppercase tracking-wider text-gray-500 mb-2.5">
                            2. Sélectionnez un montant (minimum 5 €)
                        </label>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 mb-4">
                            <button type="button" onclick="selectPresetAmount(20)" data-amount="20" class="amount-btn py-4 rounded-2xl border-2 border-gray-200 font-black text-xl hover:border-mercy-green transition">
                                20 €
                            </button>
                            <button type="button" onclick="selectPresetAmount(50)" data-amount="50" class="amount-btn py-4 rounded-2xl border-2 border-mercy-green bg-mercy-soft text-mercy-darkGreen font-black text-xl transition">
                                50 €
                            </button>
                            <button type="button" onclick="selectPresetAmount(100)" data-amount="100" class="amount-btn py-4 rounded-2xl border-2 border-gray-200 font-black text-xl hover:border-mercy-green transition">
                                100 €
                            </button>
                            <button type="button" onclick="selectPresetAmount(250)" data-amount="250" class="amount-btn py-4 rounded-2xl border-2 border-gray-200 font-black text-xl hover:border-mercy-green transition">
                                250 €
                            </button>
                        </div>

                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-xs font-extrabold uppercase tracking-wider text-gray-500">Montant libre :</span>
                            <input type="number" id="custom-amount-input" min="5" step="1" value="50" oninput="handleCustomAmount(this.value)" aria-label="Montant libre en euros" class="w-full pl-36 pr-12 py-3.5 rounded-xl border-2 border-gray-200 focus:border-mercy-green focus:outline-none font-black text-lg text-mercy-black">
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 font-black text-gray-500 text-lg">€</span>
                        </div>
                        <p id="donation-amount-error" class="hidden text-xs font-bold text-red-600 mt-2">
                            <i class="fa-solid fa-circle-exclamation"></i> Veuillez saisir un montant entier d'au moins 5 € pour couvrir les frais de traitement.
                        </p>

                        <!-- Encadré dynamique d'impact concret + Déduction fiscale -->
                        <div class="mt-4 p-4 sm:p-5 rounded-2xl bg-mercy-soft border border-mercy-green/30 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                            <div class="flex items-start gap-3">
                                <div class="w-10 h-10 rounded-xl bg-mercy-green text-white flex items-center justify-center shrink-0 mt-0.5">
                                    <i id="impact-icon" class="fa-solid fa-wheat-awn"></i>
                                </div>
                                <div>
                                    <p id="dynamic-impact-text" class="text-sm font-bold text-mercy-black">
                                        Avec 50 €, vous financez un kit agricole et nutritionnel complet pour une famille pendant 3 mois.
                                    </p>
                                    <p id="tax-deduction-text" class="text-xs text-mercy-darkGreen font-semibold mt-1">
                                        Après réduction fiscale de 66 %, ce don ne vous revient réellement qu'à <strong>17,00 €</strong>.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Étape 3 : Affectation du don -->
                    <div class="mb-7">
                        <label for="donation-cause" class="block text-xs font-extrabold uppercase tracking-wider text-gray-500 mb-2">
                            3. Affectation de votre don
                        </label>
                        <select id="donation-cause" class="w-full px-4 py-3.5 rounded-xl border-2 border-gray-200 bg-white font-semibold text-sm text-mercy-black focus:outline-none focus:border-mercy-green">
                            <option value="Où le besoin est le plus grand">Où le besoin est le plus grand (Priorité terrain)</option>
                            <option value="Urgences humanitaires mondiales">Urgences humanitaires mondiales (Sahel, Soudan, Gaza)</option>
                            <option value="Eau potable & Forages (WASH)">Eau potable, Forages solaires & Assainissement (WASH)</option>
                            <option value="Enfance & Nutrition">Enfance, Santé maternelle & Nutrition thérapeutique</option>
                            <option value="Agroécologie Cameroun & RDC">Agroécologie villageoise & Forêts nourricières (Cameroun & RDC)</option>
                        </select>
                    </div>

                    <!-- Étape 4 : Coordonnées pour le reçu fiscal & Mode de règlement -->
                    <div class="mb-7 space-y-4">
                        <label class="block text-xs font-extrabold uppercase tracking-wider text-gray-500">
                            4. Vos coordonnées (pour l'envoi automatique de votre reçu fiscal)
                        </label>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <input type="text" id="donor-name" required placeholder="Prénom et Nom *" class="w-full px-4 py-3 rounded-xl border border-gray-300 text-sm focus:outline-none focus:border-mercy-green">
                            <input type="email" id="donor-email" required placeholder="Adresse e-mail *" class="w-full px-4 py-3 rounded-xl border border-gray-300 text-sm focus:outline-none focus:border-mercy-green">
                        </div>

                        <div class="grid grid-cols-3 gap-2.5 pt-1">
                            <label class="cursor-pointer">
                                <input type="radio" name="payment-method" value="Carte Bancaire" checked class="peer sr-only">
                                <div class="p-3 rounded-xl border-2 border-gray-200 peer-checked:border-mercy-green peer-checked:bg-mercy-soft text-center text-xs font-bold transition">
                                    <i class="fa-regular fa-credit-card block text-base mb-1 text-mercy-green"></i> Carte Bancaire
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="payment-method" value="Prélèvement SEPA" class="peer sr-only">
                                <div class="p-3 rounded-xl border-2 border-gray-200 peer-checked:border-mercy-green peer-checked:bg-mercy-soft text-center text-xs font-bold transition">
                                    <i class="fa-solid fa-building-columns block text-base mb-1 text-mercy-green"></i> Virement / SEPA
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="payment-method" value="PayPal / Mobile" class="peer sr-only">
                                <div class="p-3 rounded-xl border-2 border-gray-200 peer-checked:border-mercy-green peer-checked:bg-mercy-soft text-center text-xs font-bold transition">
                                    <i class="fa-solid fa-mobile-screen-button block text-base mb-1 text-mercy-green"></i> Mobile / PayPal
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Bouton Validation du Don -->
                    <button type="submit" class="w-full py-4 px-6 rounded-2xl bg-mercy-green hover:bg-mercy-darkGreen text-white font-black text-base sm:text-lg shadow-glow transition-all flex items-center justify-center gap-3">
                        <i class="fa-solid fa-lock text-sm"></i>
                        <span id="donate-submit-label">Valider mon don de 50 €</span>
                    </button>

                    <p class="text-[11px] text-gray-500 text-center mt-3 flex items-center justify-center gap-2">
                        <i class="fa-solid fa-shield-halved text-mercy-green"></i> Transaction chiffrée SSL 256 bits • Reçu fiscal immédiat • Sans engagement, modifiable à tout moment.
                    </p>
                </form>
            </div>

            <!-- Colonne Droite : Compte de don par virement & Garanties -->
            <div class="lg:col-span-4 space-y-6">
                <!-- Bloc IBAN / Compte de don -->
                <div class="bg-mercy-charcoal border border-white/15 rounded-3xl p-6 sm:p-7">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-xl bg-mercy-green/20 text-mercy-accent flex items-center justify-center">
                            <i class="fa-solid fa-landmark"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-black text-white">Compte de don par virement</h3>
                            <p class="text-xs text-gray-400">Soutien direct sans frais intermédiaires</p>
                        </div>
                    </div>

                    <div class="space-y-2.5 text-sm bg-mercy-black/80 p-4 rounded-2xl border border-white/10">
                        <p class="text-gray-400 text-xs">Titulaire du compte :</p>
                        <p class="font-bold text-white">Association Mercy Friends</p>
                        <p class="text-gray-400 text-xs pt-1">Établissement bancaire :</p>
                        <p class="font-semibold text-gray-200">Crédit Coopératif</p>
                        <p class="text-gray-400 text-xs pt-1">IBAN :</p>
                        <p id="iban-text" class="font-mono text-xs sm:text-sm font-bold text-mercy-accent break-all">FR76 4255 9100 0008 0149 2731 548</p>
                        <p class="text-gray-400 text-xs pt-1">BIC / SWIFT :</p>
                        <p class="font-mono text-xs font-bold text-white">CCOPFRPPXXX</p>
                    </div>

                    <button type="button" onclick="copyIBAN()" class="mt-4 w-full py-2.5 px-4 rounded-xl bg-white/10 hover:bg-mercy-green text-white text-xs font-bold transition flex items-center justify-center gap-2">
                        <i class="fa-regular fa-copy"></i>
                        <span>Copier l'IBAN dans le presse-papiers</span>
                    </button>

                    <p class="text-xs text-gray-400 mt-4 leading-relaxed">
                        Mercy Friends est reconnue organisme d'intérêt général à but non lucratif (Loi 1901). N° RNA : <span class="text-gray-200 font-mono">W751268940</span>.
                    </p>
                </div>

                <!-- Permanence Grands Donateurs -->
                <div class="bg-mercy-charcoal border border-white/15 rounded-3xl p-6">
                    <h4 class="font-extrabold text-white text-base mb-2">Service Relations Donateurs</h4>
                    <p class="text-xs text-gray-300 leading-relaxed mb-4">
                        Pour un don supérieur à 1 000 €, un projet de mécénat dédié ou une question sur votre reçu fiscal, notre équipe vous répond personnellement :
                    </p>
                    <div class="space-y-2 text-xs font-semibold text-mercy-accent">
                        <p class="flex items-center gap-2"><i class="fa-solid fa-phone"></i> +33 (0)1 84 60 42 10</p>
                        <p class="flex items-center gap-2"><i class="fa-solid fa-envelope"></i> donateurs@mercyfriends.org</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

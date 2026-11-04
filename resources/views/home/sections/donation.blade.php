<!-- 10. MODULE INTERACTIF "FAIRE UN DON" (OPTIMISÉ MOBILE) -->
<section id="faire-un-don" class="py-12 sm:py-20 bg-mercy-black text-white relative overflow-hidden">
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-mercy-green/15 rounded-full blur-3xl pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <div class="text-center max-w-3xl mx-auto mb-8 sm:mb-12">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-mercy-green/20 border border-mercy-accent/40 text-mercy-accent text-[11px] sm:text-xs font-bold uppercase tracking-wider mb-2.5">
                <i class="fa-solid fa-hand-holding-heart"></i> Votre don agit immédiatement
            </span>
            <h2 class="text-2xl sm:text-4xl lg:text-5xl font-black tracking-tight">
                Votre générosité change des vies !
            </h2>
            <p class="text-gray-300 mt-2 text-xs sm:text-sm lg:text-base">
                Choisissez le montant et la fréquence. <strong class="text-white">66 % de votre don est déductible de vos impôts</strong> (selon la législation).
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 sm:gap-8 items-start">

            <!-- Formulaire Interactif de Don (8 colonnes) -->
            <div class="lg:col-span-8 bg-white text-mercy-black rounded-2xl sm:rounded-3xl p-4 sm:p-8 shadow-2xl">
                <form id="donation-form" onsubmit="handleDonationSubmit(event)" novalidate>

                    <!-- Étape 1 : Fréquence (Une seule fois vs Mensuel) -->
                    <div class="mb-5 sm:mb-7">
                        <label class="block text-[11px] sm:text-xs font-extrabold uppercase tracking-wider text-gray-500 mb-2">
                            1. Fréquence de votre soutien
                        </label>
                        <div class="grid grid-cols-2 gap-2 p-1 bg-mercy-surface rounded-xl sm:rounded-2xl border border-gray-200">
                            <button type="button" id="freq-once" onclick="setDonationFrequency('once')" class="py-2.5 sm:py-3 px-3 rounded-lg sm:rounded-xl font-bold text-xs sm:text-sm transition-all bg-mercy-black text-white shadow">
                                Une seule fois
                            </button>
                            <button type="button" id="freq-monthly" onclick="setDonationFrequency('monthly')" class="py-2.5 sm:py-3 px-3 rounded-lg sm:rounded-xl font-bold text-xs sm:text-sm transition-all text-gray-700 hover:text-mercy-black flex items-center justify-center gap-1.5">
                                <span>Mensuel</span>
                                <span class="hidden sm:inline-block px-1.5 py-0.5 text-[9px] rounded-full bg-mercy-soft text-mercy-darkGreen font-bold">+ Durable</span>
                            </button>
                        </div>
                    </div>

                    <!-- Étape 2 : Montant prédéfini ou libre -->
                    <div class="mb-5 sm:mb-7">
                        <label class="block text-[11px] sm:text-xs font-extrabold uppercase tracking-wider text-gray-500 mb-2">
                            2. Sélectionnez un montant
                        </label>
                        <div class="grid grid-cols-4 gap-2 sm:gap-3 mb-3">
                            <button type="button" onclick="selectPresetAmount(20)" data-amount="20" class="amount-btn py-2.5 sm:py-3.5 rounded-xl border-2 border-gray-200 font-black text-base sm:text-xl hover:border-mercy-green transition">
                                20 €
                            </button>
                            <button type="button" onclick="selectPresetAmount(50)" data-amount="50" class="amount-btn py-2.5 sm:py-3.5 rounded-xl border-2 border-mercy-green bg-mercy-soft text-mercy-darkGreen font-black text-base sm:text-xl transition">
                                50 €
                            </button>
                            <button type="button" onclick="selectPresetAmount(100)" data-amount="100" class="amount-btn py-2.5 sm:py-3.5 rounded-xl border-2 border-gray-200 font-black text-base sm:text-xl hover:border-mercy-green transition">
                                100 €
                            </button>
                            <button type="button" onclick="selectPresetAmount(250)" data-amount="250" class="amount-btn py-2.5 sm:py-3.5 rounded-xl border-2 border-gray-200 font-black text-base sm:text-xl hover:border-mercy-green transition">
                                250 €
                            </button>
                        </div>

                        <div class="relative">
                            <span class="absolute left-3.5 top-1/2 -translate-y-1/2 text-[11px] sm:text-xs font-bold uppercase tracking-wider text-gray-400">Libre :</span>
                            <input type="number" id="custom-amount-input" min="5" step="1" value="50" oninput="handleCustomAmount(this.value)" aria-label="Montant libre en euros" class="w-full pl-20 sm:pl-28 pr-8 sm:pr-10 py-2.5 sm:py-3 rounded-xl border-2 border-gray-200 focus:border-mercy-green focus:outline-none font-bold text-sm sm:text-base text-mercy-black">
                            <span class="absolute right-3.5 top-1/2 -translate-y-1/2 font-bold text-gray-400 text-sm">€</span>
                        </div>
                        <p id="donation-amount-error" class="hidden text-[11px] font-bold text-red-600 mt-1.5">
                            <i class="fa-solid fa-circle-exclamation"></i> Montant minimum de 5 € requis.
                        </p>

                        <!-- Encadré dynamique d'impact concret + Déduction fiscale -->
                        <div class="mt-3.5 p-3.5 sm:p-4 rounded-xl sm:rounded-2xl bg-mercy-soft border border-mercy-green/30 flex items-start gap-3">
                            <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-lg bg-mercy-green text-white flex items-center justify-center shrink-0 mt-0.5 text-xs sm:text-sm">
                                <i id="impact-icon" class="fa-solid fa-wheat-awn"></i>
                            </div>
                            <div>
                                <p id="dynamic-impact-text" class="text-xs sm:text-sm font-bold text-mercy-black leading-snug">
                                    Avec 50 €, vous financez un kit agricole et nutritionnel complet pour une famille pendant 3 mois.
                                </p>
                                <p id="tax-deduction-text" class="text-[11px] text-mercy-darkGreen font-semibold mt-0.5">
                                    Après réduction fiscale de 66 %, ce don vous revient réellement à <strong>17,00 €</strong>.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Étape 3 : Affectation du don -->
                    <div class="mb-5 sm:mb-7">
                        <label for="donation-cause" class="block text-[11px] sm:text-xs font-extrabold uppercase tracking-wider text-gray-500 mb-1.5">
                            3. Affectation de votre don
                        </label>
                        <select id="donation-cause" class="w-full px-3 py-2.5 sm:px-4 sm:py-3 rounded-xl border-2 border-gray-200 bg-white font-semibold text-xs sm:text-sm text-mercy-black focus:outline-none focus:border-mercy-green">
                            <option value="Où le besoin est le plus grand">Où le besoin est le plus grand (Priorité terrain)</option>
                            <option value="Urgences humanitaires mondiales">Urgences humanitaires mondiales (Sahel, Soudan, Gaza)</option>
                            <option value="Eau potable & Forages (WASH)">Eau potable, Forages solaires &amp; Assainissement</option>
                            <option value="Enfance & Nutrition">Enfance, Santé maternelle &amp; Nutrition</option>
                            <option value="Agroécologie Cameroun & RDC">Agroécologie &amp; Forêts nourricières</option>
                        </select>
                    </div>

                    <!-- Étape 4 : Coordonnées & Paiement -->
                    <div class="mb-5 sm:mb-7 space-y-3 sm:space-y-4">
                        <label class="block text-[11px] sm:text-xs font-extrabold uppercase tracking-wider text-gray-500">
                            4. Coordonnées pour votre reçu fiscal
                        </label>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 sm:gap-3">
                            <input type="text" id="donor-name" required placeholder="Prénom et Nom *" class="w-full px-3 py-2.5 sm:px-4 sm:py-3 rounded-xl border border-gray-300 text-xs sm:text-sm focus:outline-none focus:border-mercy-green">
                            <input type="email" id="donor-email" required placeholder="Adresse e-mail *" class="w-full px-3 py-2.5 sm:px-4 sm:py-3 rounded-xl border border-gray-300 text-xs sm:text-sm focus:outline-none focus:border-mercy-green">
                        </div>

                        <div class="grid grid-cols-3 gap-2 pt-0.5">
                            <label class="cursor-pointer">
                                <input type="radio" name="payment-method" value="Carte Bancaire" checked class="peer sr-only">
                                <div class="p-2 sm:p-2.5 rounded-xl border-2 border-gray-200 peer-checked:border-mercy-green peer-checked:bg-mercy-soft text-center text-[10px] sm:text-xs font-bold transition">
                                    <i class="fa-regular fa-credit-card block text-sm sm:text-base mb-0.5 text-mercy-green"></i> CB
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="payment-method" value="Prélèvement SEPA" class="peer sr-only">
                                <div class="p-2 sm:p-2.5 rounded-xl border-2 border-gray-200 peer-checked:border-mercy-green peer-checked:bg-mercy-soft text-center text-[10px] sm:text-xs font-bold transition">
                                    <i class="fa-solid fa-building-columns block text-sm sm:text-base mb-0.5 text-mercy-green"></i> SEPA
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="payment-method" value="PayPal / Mobile" class="peer sr-only">
                                <div class="p-2 sm:p-2.5 rounded-xl border-2 border-gray-200 peer-checked:border-mercy-green peer-checked:bg-mercy-soft text-center text-[10px] sm:text-xs font-bold transition">
                                    <i class="fa-solid fa-mobile-screen-button block text-sm sm:text-base mb-0.5 text-mercy-green"></i> Mobile
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Bouton Validation du Don -->
                    <button type="submit" class="w-full py-3 sm:py-3.5 px-4 rounded-xl sm:rounded-2xl bg-mercy-green hover:bg-mercy-darkGreen text-white font-black text-sm sm:text-base shadow-glow transition-all flex items-center justify-center gap-2">
                        <i class="fa-solid fa-lock text-xs"></i>
                        <span id="donate-submit-label">Valider mon don de 50 €</span>
                    </button>

                    <p class="text-[10px] text-gray-500 text-center mt-2.5 flex items-center justify-center gap-1.5">
                        <i class="fa-solid fa-shield-halved text-mercy-green"></i> Transaction sécurisée SSL 256 bits • Reçu fiscal déductible à 66 %
                    </p>
                </form>
            </div>

            <!-- Colonne Droite : Compte de don par virement & Support -->
            <div class="lg:col-span-4 space-y-4 sm:space-y-6">
                <!-- Bloc IBAN -->
                <div class="bg-mercy-charcoal border border-white/15 rounded-2xl sm:rounded-3xl p-4 sm:p-6">
                    <div class="flex items-center gap-2.5 mb-3">
                        <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-lg bg-mercy-green/20 text-mercy-accent flex items-center justify-center text-sm">
                            <i class="fa-solid fa-landmark"></i>
                        </div>
                        <div>
                            <h3 class="text-sm sm:text-base font-bold text-white">Virement direct</h3>
                            <p class="text-[10px] sm:text-xs text-gray-400">Sans frais d'intermédiaire</p>
                        </div>
                    </div>

                    <div class="space-y-1.5 text-xs bg-mercy-black/80 p-3 sm:p-3.5 rounded-xl border border-white/10">
                        <p class="text-gray-400 text-[10px]">Titulaire : <strong class="text-white">Mercy Friends</strong></p>
                        <p class="text-gray-400 text-[10px]">Banque : <span class="text-gray-200">Crédit Coopératif</span></p>
                        <p class="text-gray-400 text-[10px] pt-1">IBAN :</p>
                        <p id="iban-text" class="font-mono text-[11px] sm:text-xs font-bold text-mercy-accent break-all">FR76 4255 9100 0008 0149 2731 548</p>
                    </div>

                    <button type="button" onclick="copyIBAN()" class="mt-3 w-full py-2 px-3 rounded-lg bg-white/10 hover:bg-mercy-green text-white text-[11px] font-bold transition flex items-center justify-center gap-1.5">
                        <i class="fa-regular fa-copy"></i>
                        <span>Copier l'IBAN</span>
                    </button>
                </div>

                <!-- Support Donateurs -->
                <div class="bg-mercy-charcoal border border-white/15 rounded-2xl sm:rounded-3xl p-4 sm:p-5">
                    <h4 class="font-bold text-white text-xs sm:text-sm mb-1.5">Relations Donateurs</h4>
                    <p class="text-[11px] sm:text-xs text-gray-300 leading-relaxed mb-3">
                        Pour tout don supérieur à 1 000 € ou question fiscale, contactez notre équipe :
                    </p>
                    <div class="space-y-1.5 text-xs font-semibold text-mercy-accent">
                        <p class="flex items-center gap-2"><i class="fa-solid fa-phone text-[10px]"></i> +33 (0)1 84 60 42 10</p>
                        <p class="flex items-center gap-2"><i class="fa-solid fa-envelope text-[10px]"></i> donateurs@mercyfriends.org</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

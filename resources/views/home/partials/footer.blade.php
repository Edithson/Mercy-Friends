<!-- Pied de Page (Footer Noir & Vert + Onglets Modales Légales) -->
<footer id="main-footer" class="bg-mercy-black text-gray-300 border-t-4 border-mercy-green">
    <!-- Bandeau Newsletter Solidaire -->
    <div class="border-b border-white/10 bg-mercy-charcoal">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6">
            <div class="max-w-xl">
                <span class="text-xs font-extrabold uppercase tracking-widest text-mercy-accent">Lettre d'information mensuelle</span>
                <h3 class="text-xl sm:text-2xl font-black text-white mt-1">Suivez l'impact concret de nos missions sur le terrain</h3>
                <p class="text-xs sm:text-sm text-gray-400 mt-1">1 envoi par mois : récits des équipes, avancées des projets et appels d'urgence. Désinscription en 1 clic.</p>
            </div>
            <form onsubmit="handleNewsletterSubmit(event)" class="w-full lg:w-auto flex flex-col sm:flex-row gap-3">
                <input type="email" id="newsletter-email" required placeholder="Votre adresse e-mail..." aria-label="Adresse e-mail pour la newsletter" class="w-full sm:w-72 px-4 py-3 rounded-xl bg-mercy-black border border-white/15 text-white text-sm focus:outline-none focus:border-mercy-accent">
                <button type="submit" class="px-6 py-3 rounded-xl bg-mercy-green hover:bg-mercy-darkGreen text-white font-bold text-sm transition whitespace-nowrap">
                    S'inscrire
                </button>
            </form>
        </div>
    </div>

    <!-- Colonnes principales du Footer -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10">

            <!-- Colonne 1 : Identité & Réseaux sociaux -->
            <div class="lg:col-span-4 space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-mercy-green flex items-center justify-center text-white font-black text-lg">
                        <i class="fa-solid fa-seedling"></i>
                    </div>
                    <div>
                        <span class="text-xl font-black text-white tracking-tight">MERCY <span class="text-mercy-accent">FRIENDS</span></span>
                        <span class="block text-[10px] uppercase tracking-widest text-gray-400">Association à but non lucratif</span>
                    </div>
                </div>
                <p class="text-xs text-gray-400 leading-relaxed">
                    Association humanitaire loi 1901 reconnue d'intérêt général. Exonérée d'impôts sur les dons et legs affectés à ses œuvres d'assistance et de développement durable.
                </p>
                <div class="pt-1">
                    <p class="text-xs font-bold text-white uppercase tracking-wider mb-2.5">Suivez-nous</p>
                    <div class="flex items-center gap-2.5">
                        <button type="button" onclick="showToast('Redirection vers la page LinkedIn officielle de Mercy Friends.', 'info')" aria-label="LinkedIn" class="w-9 h-9 rounded-xl bg-white/10 hover:bg-mercy-green text-white transition flex items-center justify-center">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </button>
                        <button type="button" onclick="showToast('Redirection vers la page Facebook officielle de Mercy Friends.', 'info')" aria-label="Facebook" class="w-9 h-9 rounded-xl bg-white/10 hover:bg-mercy-green text-white transition flex items-center justify-center">
                            <i class="fa-brands fa-facebook-f"></i>
                        </button>
                        <button type="button" onclick="showToast('Redirection vers la chaîne YouTube de reportages terrain Mercy Friends.', 'info')" aria-label="YouTube" class="w-9 h-9 rounded-xl bg-white/10 hover:bg-mercy-green text-white transition flex items-center justify-center">
                            <i class="fa-brands fa-youtube"></i>
                        </button>
                        <button type="button" onclick="showToast('Redirection vers le compte Instagram Mercy Friends.', 'info')" aria-label="Instagram" class="w-9 h-9 rounded-xl bg-white/10 hover:bg-mercy-green text-white transition flex items-center justify-center">
                            <i class="fa-brands fa-instagram"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Colonne 2 : Notre travail -->
            <div class="lg:col-span-2 space-y-2.5">
                <h4 class="text-sm font-extrabold text-white uppercase tracking-wider mb-3">Notre travail</h4>
                <ul class="space-y-2 text-xs text-gray-400">
                    <li><a href="#impact-band" class="hover:text-mercy-accent transition">Faits & Chiffres clés</a></li>
                    <li><a href="#themes" class="hover:text-mercy-accent transition">Thèmes d'intervention</a></li>
                    <li><a href="#pays" class="hover:text-mercy-accent transition">Pays d'intervention (24)</a></li>
                    <li><a href="#projets" class="hover:text-mercy-accent transition">Projets & Programmes</a></li>
                    <li><button type="button" onclick="openInfoModal('rapport-financier')" class="hover:text-mercy-accent transition text-left">Transparence & Impact</button></li>
                </ul>
            </div>

            <!-- Colonne 3 : S'engager -->
            <div class="lg:col-span-3 space-y-2.5">
                <h4 class="text-sm font-extrabold text-white uppercase tracking-wider mb-3">S'engager</h4>
                <ul class="space-y-2 text-xs text-gray-400">
                    <li><button type="button" onclick="jumpToDonation('once', 50)" class="hover:text-mercy-accent transition text-left">Faire un don ponctuel</button></li>
                    <li><button type="button" onclick="jumpToDonation('monthly', 30)" class="hover:text-mercy-accent transition text-left">Devenir donateur mensuel</button></li>
                    <li><button type="button" onclick="prefillContact('Partenariat Entreprise / Fondation')" class="hover:text-mercy-accent transition text-left">Partenariats Entreprises & Fondations</button></li>
                    <li><button type="button" onclick="openInfoModal('legs')" class="hover:text-mercy-accent transition text-left">Transmettre un legs ou une donation</button></li>
                    <li><button type="button" onclick="openInfoModal('carrieres')" class="hover:text-mercy-accent transition text-left">Bénévolat & Carrières humanitaires</button></li>
                </ul>
            </div>

            <!-- Colonne 4 : Rappel Compte de Don -->
            <div class="lg:col-span-3 space-y-2.5">
                <h4 class="text-sm font-extrabold text-white uppercase tracking-wider mb-3">Compte de don</h4>
                <div class="p-4 rounded-2xl bg-white/5 border border-white/10 text-xs space-y-1">
                    <p class="font-bold text-white">Association Mercy Friends</p>
                    <p class="text-gray-400">Crédit Coopératif</p>
                    <p class="font-mono text-[11px] text-mercy-accent pt-1">IBAN : FR76 4255 9100 0008 0149 2731 548</p>
                    <p class="font-mono text-[11px] text-gray-300">BIC : CCOPFRPPXXX</p>
                </div>
                <p class="text-[11px] text-gray-500">
                    Identifiant SIRET : 849 302 617 00018
                </p>
            </div>

        </div>
    </div>

    <!-- Barre Inférieure avec Onglets Ouvrables en Modales -->
    <div class="bg-[#070A08] border-t border-white/10 py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between gap-4">
            <nav aria-label="Informations légales et éthiques" class="flex flex-wrap items-center justify-center lg:justify-start gap-x-5 gap-y-2.5 text-xs font-semibold">
                <button type="button" onclick="openLegalModal('mentions')" class="text-gray-300 hover:text-mercy-accent transition underline-offset-4 hover:underline flex items-center gap-1.5">
                    <i class="fa-solid fa-gavel text-[10px] text-mercy-green"></i> Mentions légales
                </button>
                <button type="button" onclick="openLegalModal('confidentialite')" class="text-gray-300 hover:text-mercy-accent transition underline-offset-4 hover:underline flex items-center gap-1.5">
                    <i class="fa-solid fa-user-lock text-[10px] text-mercy-green"></i> Protection des données (RGPD)
                </button>
                <button type="button" onclick="openLegalModal('cookies')" class="text-gray-300 hover:text-mercy-accent transition underline-offset-4 hover:underline flex items-center gap-1.5">
                    <i class="fa-solid fa-sliders text-[10px] text-mercy-green"></i> Paramètres des cookies
                </button>
                <button type="button" onclick="openLegalModal('ethique')" class="text-gray-300 hover:text-mercy-accent transition underline-offset-4 hover:underline flex items-center gap-1.5">
                    <i class="fa-solid fa-triangle-exclamation text-[10px] text-mercy-green"></i> Signaler un problème / Éthique
                </button>
                <button type="button" onclick="openLegalModal('faq')" class="text-gray-300 hover:text-mercy-accent transition underline-offset-4 hover:underline flex items-center gap-1.5">
                    <i class="fa-solid fa-circle-question text-[10px] text-mercy-green"></i> FAQ
                </button>
                <button type="button" onclick="openLegalModal('statuts')" class="text-gray-300 hover:text-mercy-accent transition underline-offset-4 hover:underline flex items-center gap-1.5">
                    <i class="fa-solid fa-file-shield text-[10px] text-mercy-green"></i> Statuts & Transparence
                </button>
            </nav>

            <p class="text-xs text-gray-500 shrink-0">
                © 2026 Mercy Friends • Association à but non lucratif.
            </p>
        </div>
    </div>
</footer>

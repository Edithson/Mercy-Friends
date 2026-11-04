<!-- Pied de Page (Footer Noir & Vert - OPTIMISÉ MOBILE) -->
<footer id="main-footer" class="bg-mercy-black text-gray-300 border-t-2 sm:border-t-4 border-mercy-green">
    <!-- Bandeau Newsletter Solidaire -->
    <div class="border-b border-white/10 bg-mercy-charcoal">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-10 flex flex-col lg:flex-row items-start lg:items-center justify-between gap-4 sm:gap-6">
            <div class="max-w-xl">
                <span class="text-[10px] sm:text-xs font-bold uppercase tracking-wider text-mercy-accent">Lettre d'information mensuelle</span>
                <h3 class="text-base sm:text-xl lg:text-2xl font-black text-white mt-0.5">Suivez l'impact de nos missions terrain</h3>
                <p class="text-xs sm:text-sm text-gray-400 mt-1">1 envoi par mois : récits, avancées des forages et urgences. Désinscription en 1 clic.</p>
            </div>
            <form onsubmit="handleNewsletterSubmit(event)" class="w-full lg:w-auto flex flex-col sm:flex-row gap-2.5">
                <input type="email" id="newsletter-email" required placeholder="Votre adresse e-mail..." aria-label="Adresse e-mail pour la newsletter" class="w-full sm:w-64 px-3.5 py-2.5 rounded-xl bg-mercy-black border border-white/15 text-white text-xs sm:text-sm focus:outline-none focus:border-mercy-accent">
                <button type="submit" class="px-5 py-2.5 rounded-xl bg-mercy-green hover:bg-mercy-darkGreen text-white font-bold text-xs sm:text-sm transition whitespace-nowrap shadow-sm">
                    S'inscrire
                </button>
            </form>
        </div>
    </div>

    <!-- Colonnes principales du Footer (2 colonnes sur mobile pour compacité) -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-14">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8 lg:gap-10">

            <!-- Colonne 1 : Identité & Réseaux sociaux -->
            <div class="lg:col-span-4 space-y-3 sm:space-y-4">
                <div class="flex items-center gap-2.5">
                    <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-xl bg-mercy-green flex items-center justify-center text-white font-black text-sm sm:text-base">
                        <i class="fa-solid fa-seedling"></i>
                    </div>
                    <div>
                        <span class="text-lg font-black text-white tracking-tight">MERCY <span class="text-mercy-accent">FRIENDS</span></span>
                        <span class="block text-[9px] uppercase tracking-wider text-gray-400">ONG à but non lucratif</span>
                    </div>
                </div>
                <p class="text-xs text-gray-400 leading-relaxed max-w-sm">
                    Association humanitaire loi 1901 reconnue d'intérêt général. Exonérée d'impôts sur les dons affectés à ses œuvres d'autonomie.
                </p>
                <div class="pt-0.5">
                    <p class="text-[11px] font-bold text-white uppercase tracking-wider mb-2">Rejoignez-nous</p>
                    <div class="flex items-center gap-2">
                        <button type="button" onclick="showToast('Redirection vers la page LinkedIn officielle de Mercy Friends.', 'info')" aria-label="LinkedIn" class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-white/10 hover:bg-mercy-green text-white transition flex items-center justify-center text-xs">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </button>
                        <button type="button" onclick="showToast('Redirection vers la page Facebook officielle de Mercy Friends.', 'info')" aria-label="Facebook" class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-white/10 hover:bg-mercy-green text-white transition flex items-center justify-center text-xs">
                            <i class="fa-brands fa-facebook-f"></i>
                        </button>
                        <button type="button" onclick="showToast('Redirection vers la chaîne YouTube Mercy Friends.', 'info')" aria-label="YouTube" class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-white/10 hover:bg-mercy-green text-white transition flex items-center justify-center text-xs">
                            <i class="fa-brands fa-youtube"></i>
                        </button>
                        <button type="button" onclick="showToast('Redirection vers le compte Instagram Mercy Friends.', 'info')" aria-label="Instagram" class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-white/10 hover:bg-mercy-green text-white transition flex items-center justify-center text-xs">
                            <i class="fa-brands fa-instagram"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Colonne 2 : Notre travail -->
            <div class="lg:col-span-2 space-y-2">
                <h4 class="text-xs sm:text-sm font-bold text-white uppercase tracking-wider mb-2">Notre travail</h4>
                <ul class="space-y-1.5 text-xs text-gray-400">
                    <li><a href="#impact-band" class="hover:text-mercy-accent transition">Faits &amp; Chiffres</a></li>
                    <li><a href="#themes" class="hover:text-mercy-accent transition">Thèmes d'action</a></li>
                    <li><a href="#pays" class="hover:text-mercy-accent transition">Pays (24)</a></li>
                    <li><a href="#projets" class="hover:text-mercy-accent transition">Projets terrain</a></li>
                    <li><button type="button" onclick="openInfoModal('rapport-financier')" class="hover:text-mercy-accent transition text-left">Comptes &amp; Audit</button></li>
                </ul>
            </div>

            <!-- Colonne 3 : S'engager -->
            <div class="lg:col-span-3 space-y-2">
                <h4 class="text-xs sm:text-sm font-bold text-white uppercase tracking-wider mb-2">S'engager</h4>
                <ul class="space-y-1.5 text-xs text-gray-400">
                    <li><button type="button" onclick="jumpToDonation('once', 50)" class="hover:text-mercy-accent transition text-left">Faire un don</button></li>
                    <li><button type="button" onclick="jumpToDonation('monthly', 30)" class="hover:text-mercy-accent transition text-left">Don régulier</button></li>
                    <li><button type="button" onclick="prefillContact('Partenariat Entreprise / Fondation')" class="hover:text-mercy-accent transition text-left">Mécénat Entreprises</button></li>
                    <li><button type="button" onclick="openInfoModal('legs')" class="hover:text-mercy-accent transition text-left">Legs &amp; Assurance-vie</button></li>
                    <li><button type="button" onclick="openInfoModal('carrieres')" class="hover:text-mercy-accent transition text-left">Bénévolat &amp; Carrières</button></li>
                </ul>
            </div>

            <!-- Colonne 4 : Compte de Don Rapide -->
            <div class="lg:col-span-3 space-y-2">
                <h4 class="text-xs sm:text-sm font-bold text-white uppercase tracking-wider mb-2">Compte de don</h4>
                <div class="p-3 sm:p-3.5 rounded-xl bg-white/5 border border-white/10 text-xs space-y-0.5">
                    <p class="font-bold text-white">Mercy Friends</p>
                    <p class="text-gray-400 text-[11px]">Crédit Coopératif</p>
                    <p class="font-mono text-[10px] text-mercy-accent pt-0.5 break-all">FR76 4255 9100 0008 0149 2731 548</p>
                </div>
                <p class="text-[10px] text-gray-500">
                    SIRET : 849 302 617 00018 • RNA : W751268940
                </p>
            </div>

        </div>
    </div>

    <!-- Barre Inférieure avec Onglets Modales Légales -->
    <div class="bg-[#070A08] border-t border-white/10 py-4 sm:py-5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between gap-3">
            <nav aria-label="Informations légales et éthiques" class="flex flex-wrap items-center justify-center lg:justify-start gap-x-3.5 sm:gap-x-5 gap-y-1.5 text-[11px] sm:text-xs font-medium">
                <button type="button" onclick="openLegalModal('mentions')" class="text-gray-400 hover:text-white transition">
                    Mentions légales
                </button>
                <button type="button" onclick="openLegalModal('confidentialite')" class="text-gray-400 hover:text-white transition">
                    Protection des données
                </button>
                <button type="button" onclick="openLegalModal('cookies')" class="text-gray-400 hover:text-white transition">
                    Cookies
                </button>
                <button type="button" onclick="openLegalModal('ethique')" class="text-gray-400 hover:text-white transition">
                    Signalement éthique
                </button>
                <button type="button" onclick="openLegalModal('faq')" class="text-gray-400 hover:text-white transition">
                    FAQ
                </button>
                <button type="button" onclick="openLegalModal('statuts')" class="text-gray-400 hover:text-white transition">
                    Statuts
                </button>
            </nav>

            <p class="text-[11px] text-gray-500 shrink-0">
                © 2026 Mercy Friends • Association d'intérêt général.
            </p>
        </div>
    </div>
</footer>

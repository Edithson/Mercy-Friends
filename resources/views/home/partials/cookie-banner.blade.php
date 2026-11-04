<!-- Bandeau Discret de Gestion des Cookies -->
<div id="cookie-banner" class="hidden fixed bottom-4 left-4 right-4 md:left-6 md:right-6 lg:left-auto lg:right-6 lg:max-w-xl z-[75] bg-mercy-charcoal text-white border border-mercy-green/50 rounded-3xl p-5 sm:p-6 shadow-2xl">
    <div class="flex items-start gap-3.5">
        <div class="w-10 h-10 rounded-xl bg-mercy-green/20 text-mercy-accent flex items-center justify-center shrink-0 mt-0.5">
            <i class="fa-solid fa-cookie-bite text-lg"></i>
        </div>
        <div class="text-xs leading-relaxed text-gray-300">
            <h3 class="text-sm font-extrabold text-white mb-1">Paramètres de confidentialité</h3>
            <p>
                La protection de vos données nous tient à cœur ! Pour assurer le bon fonctionnement du site et évaluer anonymement nos campagnes solidaires afin d'utiliser notre budget numérique avec la plus grande rigueur, nous utilisons des cookies. Vous pouvez refuser les cookies optionnels et modifier vos choix à tout moment.
            </p>
            <div class="flex flex-wrap gap-3 mt-2 text-[11px] font-bold text-mercy-accent">
                <button type="button" onclick="openLegalModal('confidentialite')" class="hover:underline">Protection des données</button>
                <span>•</span>
                <button type="button" onclick="openLegalModal('mentions')" class="hover:underline">Mentions légales</button>
            </div>
        </div>
    </div>
    <div class="mt-4 pt-3 border-t border-white/10 flex flex-wrap items-center justify-end gap-2.5">
        <button type="button" onclick="openLegalModal('cookies')" class="px-3.5 py-2 rounded-xl bg-white/10 hover:bg-white/20 text-xs font-bold text-gray-200 transition">
            Paramètres
        </button>
        <button type="button" onclick="saveCookieChoice('essential')" class="px-3.5 py-2 rounded-xl border border-white/25 hover:bg-white/10 text-xs font-bold text-white transition">
            Refuser
        </button>
        <button type="button" onclick="saveCookieChoice('all')" class="px-4 py-2 rounded-xl bg-mercy-green hover:bg-mercy-darkGreen text-xs font-extrabold text-white transition">
            Tout accepter
        </button>
    </div>
</div>

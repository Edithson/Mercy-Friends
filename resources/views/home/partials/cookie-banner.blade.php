<!-- Bandeau Discret de Gestion des Cookies (Optimisé Mobile) -->
<div id="cookie-banner" class="hidden fixed bottom-3 left-3 right-3 sm:bottom-4 sm:left-auto sm:right-6 sm:max-w-md z-[75] bg-mercy-charcoal text-white border border-mercy-green/40 rounded-2xl sm:rounded-3xl p-3.5 sm:p-5 shadow-2xl">
    <div class="flex items-start gap-3">
        <div class="w-8 h-8 rounded-lg bg-mercy-green/20 text-mercy-accent flex items-center justify-center shrink-0 mt-0.5 text-sm">
            <i class="fa-solid fa-cookie-bite"></i>
        </div>
        <div class="text-[11px] sm:text-xs leading-relaxed text-gray-300">
            <h3 class="text-xs sm:text-sm font-bold text-white mb-0.5">Confidentialité &amp; Cookies</h3>
            <p>
                Nous utilisons des cookies essentiels et des mesures anonymes pour évaluer nos campagnes. Sans traçage publicitaire intrusif.
            </p>
        </div>
    </div>
    <div class="mt-3 pt-2.5 border-t border-white/10 flex items-center justify-end gap-2">
        <button type="button" onclick="openLegalModal('cookies')" class="px-2.5 py-1.5 rounded-lg bg-white/10 hover:bg-white/20 text-[11px] font-semibold text-gray-300 transition">
            Paramètres
        </button>
        <button type="button" onclick="saveCookieChoice('essential')" class="px-2.5 py-1.5 rounded-lg border border-white/20 hover:bg-white/10 text-[11px] font-semibold text-white transition">
            Refuser
        </button>
        <button type="button" onclick="saveCookieChoice('all')" class="px-3 py-1.5 rounded-lg bg-mercy-green hover:bg-mercy-darkGreen text-[11px] font-bold text-white transition shadow-sm">
            Accepter
        </button>
    </div>
</div>

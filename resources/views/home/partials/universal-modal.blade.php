<!-- Fenêtre Modale Universelle Dynamique (Optimisée Mobile) -->
<div id="universal-modal" role="dialog" aria-modal="true" aria-labelledby="modal-title" class="hidden fixed inset-0 z-[85] flex items-center justify-center p-3 sm:p-6 bg-black/75 backdrop-blur-sm">
    <div class="bg-white text-mercy-black rounded-2xl sm:rounded-3xl shadow-2xl w-full max-w-3xl max-h-[92vh] flex flex-col overflow-hidden border border-gray-200">
        <!-- En-tête Modale Noir & Vert -->
        <div class="bg-mercy-black text-white px-4 py-3.5 sm:px-6 sm:py-5 flex items-center justify-between border-b border-mercy-green/40 shrink-0">
            <div class="flex items-center gap-2 sm:gap-3 pr-2 sm:pr-4">
                <span id="modal-badge" class="px-2 py-0.5 rounded-md bg-mercy-green/20 border border-mercy-accent/40 text-mercy-accent text-[10px] sm:text-[11px] font-bold uppercase tracking-wider shrink-0">
                    Mercy Friends
                </span>
                <h3 id="modal-title" class="text-sm sm:text-lg font-bold leading-snug truncate">Titre</h3>
            </div>
            <button type="button" onclick="closeUniversalModal()" aria-label="Fermer la fenêtre" class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-white/10 hover:bg-mercy-green text-white flex items-center justify-center transition shrink-0">
                <i class="fa-solid fa-xmark text-sm sm:text-base"></i>
            </button>
        </div>

        <!-- Corps défilant de la modale -->
        <div id="modal-body" class="p-4 sm:p-7 overflow-y-auto custom-scroll text-xs sm:text-sm text-gray-700 leading-relaxed space-y-3 sm:space-y-4">
        </div>

        <!-- Pied de la modale -->
        <div id="modal-footer" class="px-4 py-3 sm:px-6 sm:py-4 bg-mercy-surface border-t border-gray-200 flex items-center justify-between gap-2 shrink-0">
            <span class="text-[11px] text-gray-500 hidden sm:inline">Mercy Friends : Action humanitaire</span>
            <button type="button" onclick="closeUniversalModal()" class="px-4 py-2 sm:px-5 sm:py-2.5 rounded-xl bg-mercy-black hover:bg-mercy-green text-white text-xs font-bold transition ml-auto">
                Fermer
            </button>
        </div>
    </div>
</div>

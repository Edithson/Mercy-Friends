<!-- Fenêtre Modale Universelle Dynamique -->
<div id="universal-modal" role="dialog" aria-modal="true" aria-labelledby="modal-title" class="hidden fixed inset-0 z-[85] flex items-center justify-center p-4 sm:p-6 bg-black/75 backdrop-blur-sm">
    <div class="bg-white text-mercy-black rounded-3xl shadow-2xl w-full max-w-3xl max-h-[90vh] flex flex-col overflow-hidden border border-gray-200">
        <!-- En-tête Modale Noir & Vert -->
        <div class="bg-mercy-black text-white px-6 py-5 flex items-center justify-between border-b border-mercy-green/40 shrink-0">
            <div class="flex items-center gap-3 pr-4">
                <span id="modal-badge" class="px-2.5 py-1 rounded-lg bg-mercy-green/20 border border-mercy-accent/40 text-mercy-accent text-[11px] font-extrabold uppercase tracking-wider">
                    Mercy Friends
                </span>
                <h3 id="modal-title" class="text-lg sm:text-xl font-black leading-snug">Titre</h3>
            </div>
            <button type="button" onclick="closeUniversalModal()" aria-label="Fermer la fenêtre" class="w-9 h-9 rounded-xl bg-white/10 hover:bg-mercy-green text-white flex items-center justify-center transition shrink-0">
                <i class="fa-solid fa-xmark text-lg"></i>
            </button>
        </div>

        <!-- Corps défilant de la modale -->
        <div id="modal-body" class="p-6 sm:p-8 overflow-y-auto custom-scroll text-sm text-gray-700 leading-relaxed space-y-4">
        </div>

        <!-- Pied de la modale -->
        <div id="modal-footer" class="px-6 py-4 bg-mercy-surface border-t border-gray-200 flex flex-wrap items-center justify-between gap-3 shrink-0">
            <span class="text-xs text-gray-500">Mercy Friends — Association à but non lucratif</span>
            <button type="button" onclick="closeUniversalModal()" class="px-5 py-2.5 rounded-xl bg-mercy-black hover:bg-mercy-green text-white text-xs font-extrabold transition">
                Fermer
            </button>
        </div>
    </div>
</div>

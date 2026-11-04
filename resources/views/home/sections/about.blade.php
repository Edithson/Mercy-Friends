<!-- 5. SECTION À PROPOS & TRANSPARENCE (OPTIMISÉE MOBILE) -->
<section id="a-propos" class="py-12 sm:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">

            <!-- Colonne Gauche : Identité, Mission, Gouvernance & Partenariats -->
            <div class="lg:col-span-6 space-y-4 sm:space-y-6">
                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-mercy-soft text-mercy-darkGreen text-[11px] sm:text-xs font-extrabold uppercase tracking-wider">
                    <i class="fa-solid fa-shield-heart"></i> À propos de Mercy Friends
                </span>

                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black text-mercy-black leading-tight">
                    Aider à s'aider soi-même : une solidarité de terrain, transparente et durable.
                </h2>

                <p class="text-gray-600 leading-relaxed text-xs sm:text-sm lg:text-base">
                    Fondée par des acteurs humanitaires, médecins et agronomes engagés, <strong>Mercy Friends</strong> est une association à but non lucratif indépendante. Notre principe fondateur : <em>renforcer l'autonomie des populations locales</em> dès la fin de l'urgence.
                </p>

                <!-- Sous-onglets interactifs À propos -->
                <div class="bg-mercy-surface border border-gray-200 rounded-2xl p-4 sm:p-5">
                    <div class="flex flex-wrap gap-1.5 sm:gap-2 border-b border-gray-200 pb-2.5 mb-3 sm:mb-4">
                        <button type="button" onclick="switchAboutTab('mission')" id="about-btn-mission" class="about-tab-btn px-3 py-1.5 rounded-lg text-xs font-bold bg-mercy-black text-white transition">
                            Mission &amp; Vision
                        </button>
                        <button type="button" onclick="switchAboutTab('gouvernance')" id="about-btn-gouvernance" class="about-tab-btn px-3 py-1.5 rounded-lg text-xs font-bold bg-white text-gray-700 hover:bg-gray-100 transition">
                            Gouvernance
                        </button>
                        <button type="button" onclick="switchAboutTab('partenaires')" id="about-btn-partenaires" class="about-tab-btn px-3 py-1.5 rounded-lg text-xs font-bold bg-white text-gray-700 hover:bg-gray-100 transition">
                            Partenaires
                        </button>
                    </div>

                    <div id="about-panel-mission" class="about-panel text-xs sm:text-sm text-gray-700 space-y-2">
                        <p><strong>Notre Vision 2030 :</strong> Un monde où chaque enfant et famille dispose d'une alimentation saine, d'eau potable et des moyens de vivre dignement de son travail.</p>
                        <ul class="space-y-1 pt-1 text-[11px] sm:text-xs">
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-mercy-green"></i> 94 % des équipes sont issues des pays d'intervention.</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-mercy-green"></i> Achats locaux privilégiés pour soutenir les marchés paysans.</li>
                        </ul>
                    </div>

                    <div id="about-panel-gouvernance" class="about-panel hidden text-xs sm:text-sm text-gray-700 space-y-2">
                        <p><strong>Gouvernance bénévole :</strong> Dirigée par un Conseil d'Administration bénévole de 9 membres élus, appuyé par un Comité d'Éthique indépendant.</p>
                        <p class="text-[11px] text-gray-500">Présidente : Dr. Amina Ndongo • Secrétaire Général : Marc-Antoine Lefèvre • Trésorière : Claire Vasseur.</p>
                    </div>

                    <div id="about-panel-partenaires" class="about-panel hidden text-xs sm:text-sm text-gray-700 space-y-2">
                        <p><strong>Réseau d'alliances :</strong> Plus de 85 ONG locales, coopératives agricoles et fondations qui multiplient l'impact de chaque don par 3,8.</p>
                    </div>
                </div>

                <!-- Bloc "Devenir partenaire" -->
                <div>
                    <h3 class="text-[11px] sm:text-xs font-extrabold uppercase tracking-wider text-gray-500 mb-2.5">S'engager à nos côtés</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 sm:gap-2.5">
                        <button type="button" onclick="prefillContact('Partenariat Entreprise / Fondation')" class="flex items-center justify-between p-3 rounded-xl border border-gray-200 hover:border-mercy-green hover:bg-mercy-soft/50 text-left text-xs sm:text-sm font-bold text-mercy-black transition group">
                            <span>Mécénat Entreprises</span>
                            <i class="fa-solid fa-arrow-right text-mercy-green group-hover:translate-x-1 transition-transform text-xs"></i>
                        </button>
                        <button type="button" onclick="openInfoModal('legs')" class="flex items-center justify-between p-3 rounded-xl border border-gray-200 hover:border-mercy-green hover:bg-mercy-soft/50 text-left text-xs sm:text-sm font-bold text-mercy-black transition group">
                            <span>Legs &amp; Donations</span>
                            <i class="fa-solid fa-arrow-right text-mercy-green group-hover:translate-x-1 transition-transform text-xs"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Colonne Droite : "Notre travail est efficace et redevable" -->
            <div class="lg:col-span-6 bg-mercy-black text-white rounded-2xl sm:rounded-3xl p-5 sm:p-8 shadow-xl border border-mercy-green/20">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2.5 pb-4 sm:pb-5 border-b border-white/10">
                    <div>
                        <span class="text-[10px] sm:text-xs font-bold uppercase tracking-wider text-mercy-accent">Transparence Financière</span>
                        <h3 class="text-xl sm:text-2xl font-black mt-0.5">Efficace et redevable</h3>
                    </div>
                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-mercy-green/20 border border-mercy-accent/30 text-mercy-accent text-[11px] font-bold self-start">
                        <i class="fa-solid fa-award"></i> Comptes Certifiés
                    </span>
                </div>

                <p class="text-xs sm:text-sm text-gray-300 mt-4 mb-5">
                    Sur 100 € donnés, <strong class="text-mercy-accent">93,20 €</strong> financent directement nos projets et leur accompagnement technique :
                </p>

                <!-- Barre globale empilée -->
                <div class="w-full h-3 sm:h-3.5 rounded-full overflow-hidden flex bg-white/10 mb-5 sm:mb-6 p-0.5 gap-0.5" title="Répartition de l'utilisation des fonds">
                    <div class="bg-mercy-green h-full rounded-l-full" style="width: 90%"></div>
                    <div class="bg-mercy-accent h-full" style="width: 3.2%"></div>
                    <div class="bg-emerald-300 h-full" style="width: 1.5%"></div>
                    <div class="bg-gray-400 h-full" style="width: 3.1%"></div>
                    <div class="bg-gray-600 h-full rounded-r-full" style="width: 2.2%"></div>
                </div>

                <!-- Détail des 5 postes (Format Compact) -->
                <div class="space-y-3 sm:space-y-3.5 text-xs">
                    <div>
                        <div class="flex justify-between font-bold mb-1">
                            <span class="text-white flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-mercy-green"></span> Projets terrain</span>
                            <span class="text-mercy-accent text-sm font-black">90,0 %</span>
                        </div>
                        <div class="w-full bg-white/10 h-2 rounded-full overflow-hidden">
                            <div class="bg-mercy-green h-full rounded-full" style="width: 90%"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between text-gray-300 font-medium mb-1 text-[11px] sm:text-xs">
                            <span class="flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-mercy-accent"></span> Suivi technique local</span>
                            <span class="text-white font-bold">3,2 %</span>
                        </div>
                        <div class="w-full bg-white/10 h-1.5 rounded-full overflow-hidden">
                            <div class="bg-mercy-accent h-full rounded-full" style="width: 16%"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between text-gray-300 font-medium mb-1 text-[11px] sm:text-xs">
                            <span class="flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-emerald-300"></span> Sensibilisation &amp; Plaidoyer</span>
                            <span class="text-white font-bold">1,5 %</span>
                        </div>
                        <div class="w-full bg-white/10 h-1.5 rounded-full overflow-hidden">
                            <div class="bg-emerald-300 h-full rounded-full" style="width: 9%"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between text-gray-300 font-medium mb-1 text-[11px] sm:text-xs">
                            <span class="flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-gray-400"></span> Collecte de dons</span>
                            <span class="text-white font-bold">3,1 %</span>
                        </div>
                        <div class="w-full bg-white/10 h-1.5 rounded-full overflow-hidden">
                            <div class="bg-gray-400 h-full rounded-full" style="width: 15%"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between text-gray-300 font-medium mb-1 text-[11px] sm:text-xs">
                            <span class="flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-gray-500"></span> Administration</span>
                            <span class="text-white font-bold">2,2 %</span>
                        </div>
                        <div class="w-full bg-white/10 h-1.5 rounded-full overflow-hidden">
                            <div class="bg-gray-500 h-full rounded-full" style="width: 11%"></div>
                        </div>
                    </div>
                </div>

                <div class="mt-6 pt-5 border-t border-white/10 flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-2.5">
                    <button type="button" onclick="openInfoModal('rapport-financier')" class="inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-xl bg-mercy-green hover:bg-mercy-darkGreen text-white font-bold text-xs sm:text-sm transition">
                        <i class="fa-solid fa-file-invoice-dollar text-xs"></i>
                        <span>Rapport financier complet</span>
                    </button>
                    <button type="button" onclick="openLegalModal('statuts')" class="inline-flex items-center justify-center gap-1.5 px-3 py-2 rounded-xl bg-white/10 hover:bg-white/20 text-[11px] font-semibold text-gray-300 transition">
                        <i class="fa-solid fa-scale-balanced text-mercy-accent text-xs"></i>
                        <span>Charte éthique</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>

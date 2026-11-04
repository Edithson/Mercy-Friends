<!-- 5. SECTION À PROPOS & TRANSPARENCE -->
<section id="a-propos" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

            <!-- Colonne Gauche : Identité, Mission, Gouvernance & Partenariats -->
            <div class="lg:col-span-6 space-y-6">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-lg bg-mercy-soft text-mercy-darkGreen text-xs font-extrabold uppercase tracking-wider">
                    <i class="fa-solid fa-shield-heart"></i> À propos de Mercy Friends
                </span>

                <h2 class="text-3xl sm:text-4xl font-black text-mercy-black leading-tight">
                    Aider à s'aider soi-même : une solidarité de terrain, transparente et durable.
                </h2>

                <p class="text-gray-600 leading-relaxed text-base">
                    Fondée par des acteurs humanitaires, médecins et agronomes engagés, <strong>Mercy Friends</strong> est une association à but non lucratif confessionnellement et politiquement indépendante. Nous agissons selon un principe fondateur fort : <em>renforcer l'autonomie des populations locales</em> dès la fin de l'urgence.
                </p>

                <!-- Sous-onglets interactifs À propos -->
                <div class="bg-mercy-surface border border-gray-200 rounded-2xl p-5">
                    <div class="flex flex-wrap gap-2 border-b border-gray-200 pb-3 mb-4">
                        <button type="button" onclick="switchAboutTab('mission')" id="about-btn-mission" class="about-tab-btn px-3.5 py-2 rounded-xl text-xs font-bold bg-mercy-black text-white transition">
                            Mission & Vision
                        </button>
                        <button type="button" onclick="switchAboutTab('gouvernance')" id="about-btn-gouvernance" class="about-tab-btn px-3.5 py-2 rounded-xl text-xs font-bold bg-white text-gray-700 hover:bg-gray-100 transition">
                            Gouvernance
                        </button>
                        <button type="button" onclick="switchAboutTab('partenaires')" id="about-btn-partenaires" class="about-tab-btn px-3.5 py-2 rounded-xl text-xs font-bold bg-white text-gray-700 hover:bg-gray-100 transition">
                            Nos Partenaires
                        </button>
                    </div>

                    <div id="about-panel-mission" class="about-panel text-sm text-gray-700 space-y-2.5">
                        <p><strong>Notre Vision 2030 :</strong> Un monde où chaque enfant et chaque famille dispose d'une alimentation saine, d'eau potable et des moyens de vivre dignement de son travail malgré les chocs climatiques.</p>
                        <ul class="space-y-1.5 pt-1">
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-mercy-green"></i> 94 % de nos équipes terrain sont issues des pays d'intervention.</li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-mercy-green"></i> Achats locaux privilégiés pour soutenir les marchés paysans.</li>
                        </ul>
                    </div>

                    <div id="about-panel-gouvernance" class="about-panel hidden text-sm text-gray-700 space-y-2.5">
                        <p><strong>Gouvernance démocratique & bénévole :</strong> Mercy Friends est dirigée par un Conseil d'Administration entièrement bénévole de 9 membres élus par l'Assemblée Générale, appuyé par un Comité d'Éthique et d'Audit indépendant.</p>
                        <p class="text-xs text-gray-500">Présidente : Dr. Amina Ndongo • Secrétaire Général : Marc-Antoine Lefèvre • Trésorière : Claire Vasseur, Expert-Comptable.</p>
                    </div>

                    <div id="about-panel-partenaires" class="about-panel hidden text-sm text-gray-700 space-y-2.5">
                        <p><strong>Un réseau d'alliances solides :</strong> Nous coopérons avec plus de 85 ONG locales, coopératives agricoles, fondations philanthropiques, collectivités territoriales et bailleurs publics internationaux qui multiplient l'impact de vos dons privés par 3,8.</p>
                    </div>
                </div>

                <!-- Bloc "Devenir partenaire" -->
                <div>
                    <h3 class="text-xs font-extrabold uppercase tracking-wider text-gray-500 mb-3">S'engager à nos côtés</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
                        <button type="button" onclick="prefillContact('Partenariat Entreprise / Fondation')" class="flex items-center justify-between p-3.5 rounded-xl border border-gray-200 hover:border-mercy-green hover:bg-mercy-soft/50 text-left text-sm font-bold text-mercy-black transition group">
                            <span>Mécénat Entreprises & Fondations</span>
                            <i class="fa-solid fa-arrow-right text-mercy-green group-hover:translate-x-1 transition-transform"></i>
                        </button>
                        <button type="button" onclick="openInfoModal('legs')" class="flex items-center justify-between p-3.5 rounded-xl border border-gray-200 hover:border-mercy-green hover:bg-mercy-soft/50 text-left text-sm font-bold text-mercy-black transition group">
                            <span>Legs, Donations & Assurance-vie</span>
                            <i class="fa-solid fa-arrow-right text-mercy-green group-hover:translate-x-1 transition-transform"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Colonne Droite : "Notre travail est efficace et redevable" -->
            <div class="lg:col-span-6 bg-mercy-black text-white rounded-3xl p-6 sm:p-9 shadow-xl border border-mercy-green/30">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 pb-6 border-b border-white/10">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-widest text-mercy-accent">Transparence Financière</span>
                        <h3 class="text-2xl font-black mt-1">Notre travail est efficace et redevable</h3>
                    </div>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-mercy-green/20 border border-mercy-accent/40 text-mercy-accent text-xs font-bold shrink-0 self-start">
                        <i class="fa-solid fa-award"></i> Comptes Certifiés
                    </span>
                </div>

                <p class="text-sm text-gray-300 mt-5 mb-6">
                    Sur chaque don de 100 €, <strong class="text-mercy-accent">93,20 €</strong> financent directement nos projets humanitaires et leur accompagnement technique local sur le terrain :
                </p>

                <!-- Barre globale empilée -->
                <div class="w-full h-4 rounded-full overflow-hidden flex bg-white/10 mb-7 p-0.5 gap-0.5" title="Répartition de l'utilisation des fonds">
                    <div class="bg-mercy-green h-full rounded-l-full" style="width: 90%"></div>
                    <div class="bg-mercy-accent h-full" style="width: 3.2%"></div>
                    <div class="bg-emerald-300 h-full" style="width: 1.5%"></div>
                    <div class="bg-gray-400 h-full" style="width: 3.1%"></div>
                    <div class="bg-gray-600 h-full rounded-r-full" style="width: 2.2%"></div>
                </div>

                <!-- Détail des 5 postes -->
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between text-sm font-bold mb-1">
                            <span class="text-white flex items-center gap-2"><span class="w-2.5 h-2.5 rounded-full bg-mercy-green"></span> Directement dans les projets sur le terrain</span>
                            <span class="text-mercy-accent text-base font-black">90,0 %</span>
                        </div>
                        <div class="w-full bg-white/10 h-2.5 rounded-full overflow-hidden">
                            <div class="bg-mercy-green h-full rounded-full" style="width: 90%"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between text-xs sm:text-sm font-semibold mb-1">
                            <span class="text-gray-200 flex items-center gap-2"><span class="w-2.5 h-2.5 rounded-full bg-mercy-accent"></span> Accompagnement technique & suivi local</span>
                            <span class="text-white font-bold">3,2 %</span>
                        </div>
                        <div class="w-full bg-white/10 h-2 rounded-full overflow-hidden">
                            <div class="bg-mercy-accent h-full rounded-full" style="width: 16%"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between text-xs sm:text-sm font-semibold mb-1">
                            <span class="text-gray-300 flex items-center gap-2"><span class="w-2.5 h-2.5 rounded-full bg-emerald-300"></span> Sensibilisation, éducation & plaidoyer</span>
                            <span class="text-white font-bold">1,5 %</span>
                        </div>
                        <div class="w-full bg-white/10 h-2 rounded-full overflow-hidden">
                            <div class="bg-emerald-300 h-full rounded-full" style="width: 9%"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between text-xs sm:text-sm font-semibold mb-1">
                            <span class="text-gray-300 flex items-center gap-2"><span class="w-2.5 h-2.5 rounded-full bg-gray-400"></span> Communication & collecte de fonds</span>
                            <span class="text-white font-bold">3,1 %</span>
                        </div>
                        <div class="w-full bg-white/10 h-2 rounded-full overflow-hidden">
                            <div class="bg-gray-400 h-full rounded-full" style="width: 15%"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between text-xs sm:text-sm font-semibold mb-1">
                            <span class="text-gray-300 flex items-center gap-2"><span class="w-2.5 h-2.5 rounded-full bg-gray-500"></span> Frais administratifs & gouvernance</span>
                            <span class="text-white font-bold">2,2 %</span>
                        </div>
                        <div class="w-full bg-white/10 h-2 rounded-full overflow-hidden">
                            <div class="bg-gray-500 h-full rounded-full" style="width: 11%"></div>
                        </div>
                    </div>
                </div>

                <div class="mt-8 pt-6 border-t border-white/10 flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-4">
                    <button type="button" onclick="openInfoModal('rapport-financier')" class="inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl bg-mercy-green hover:bg-mercy-darkGreen text-white font-bold text-sm transition">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                        <span>Consulter le rapport financier</span>
                    </button>
                    <button type="button" onclick="openLegalModal('statuts')" class="inline-flex items-center justify-center gap-2 px-4 py-3 rounded-xl bg-white/10 hover:bg-white/20 text-xs font-semibold text-gray-200 transition">
                        <i class="fa-solid fa-scale-balanced text-mercy-accent"></i>
                        <span>Charte éthique & Statuts</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>

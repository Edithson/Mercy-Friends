<!-- 3. HERO SECTION + 3 CARTES D'URGENCE -->
<section id="accueil" class="relative bg-mercy-black text-white overflow-hidden">
    <!-- Image d'arrière-plan avec fallback -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?auto=format&fit=crop&w=1920&q=80"
            onerror="this.onerror=null;this.src='https://placehold.co/1920x1080/0B0F0C/22C55E?text=Mercy+Friends+Solidarite';"
            alt="Action humanitaire et solidarité auprès des enfants et communautés"
            class="w-full h-full object-cover object-center opacity-55">
        <div class="absolute inset-0 hero-gradient"></div>
    </div>

    <!-- Contenu Hero Principal -->
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-20 lg:pt-24 lg:pb-28">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-mercy-green/20 border border-mercy-accent/40 text-mercy-accent text-xs sm:text-sm font-bold uppercase tracking-wider mb-6">
                <span class="w-2 h-2 rounded-full bg-mercy-accent animate-ping"></span>
                <span>Indice & Appel Mondial 2026 • #ZéroFaim</span>
            </div>

            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black tracking-tight leading-[1.1] mb-6">
                Aucune dignité sans solidarité : <span class="text-mercy-accent">Ensemble contre la faim</span> et la précarité.
            </h1>

            <p class="text-base sm:text-lg lg:text-xl text-gray-200 leading-relaxed mb-8 max-w-2xl">
                Vivre à l'abri de la faim est un droit humain fondamental. Aux côtés des communautés locales dans 24 pays, <strong class="text-white">Mercy Friends</strong> bâtit l'accès à l'eau potable, l'autonomie alimentaire et l'aide d'urgence.
            </p>

            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
                <button type="button" onclick="jumpToDonation('once', 50)" class="inline-flex items-center justify-center gap-3 px-7 py-4 rounded-xl bg-mercy-green hover:bg-mercy-darkGreen text-white font-extrabold text-base shadow-glow transition-all transform hover:-translate-y-0.5">
                    <i class="fa-solid fa-heart"></i>
                    <span>Faire un don maintenant</span>
                </button>
                <a href="#projets" class="inline-flex items-center justify-center gap-3 px-7 py-4 rounded-xl bg-white/10 hover:bg-white/20 backdrop-blur-sm border border-white/25 text-white font-bold text-base transition-all">
                    <span>Découvrir nos projets</span>
                    <i class="fa-solid fa-arrow-right text-mercy-accent"></i>
                </a>
            </div>
        </div>

        <!-- 3 Cartes d'Urgences en Vedette -->
        <div class="mt-14 lg:mt-20">
            <div class="flex items-center justify-between mb-4">
                <span class="text-xs font-bold uppercase tracking-widest text-mercy-accent flex items-center gap-2">
                    <i class="fa-solid fa-triangle-exclamation"></i> Appels d'urgence prioritaires sur le terrain
                </span>
                <a href="#projets" class="text-xs font-semibold text-gray-300 hover:text-white underline">Voir toutes les urgences</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <!-- Carte Urgence 1 -->
                <article onclick="openEmergencyModal(0)" class="cursor-pointer group bg-mercy-charcoal/95 hover:bg-mercy-slate border border-white/10 hover:border-mercy-accent/60 rounded-2xl overflow-hidden shadow-xl transition-all duration-300 flex flex-col">
                    <div class="relative h-44 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1541544741938-0af808871cc0?auto=format&fit=crop&w=800&q=80"
                            onerror="this.onerror=null;this.src='https://placehold.co/800x450/111814/22C55E?text=Urgence+Eau+Sahel';"
                            alt="Accès à l'eau potable au Sahel"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-3 left-3 px-3 py-1 rounded-lg bg-mercy-black/85 text-mercy-accent text-xs font-bold border border-mercy-accent/30">
                            Urgence Climat & Eau
                        </span>
                    </div>
                    <div class="p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <p class="text-xs text-gray-400 font-medium mb-1">Sauver des vies menacées — Agir avec Mercy Friends</p>
                            <h2 class="text-lg font-bold text-white group-hover:text-mercy-accent transition-colors">
                                Urgence Eau & Sécheresse au Sahel
                            </h2>
                        </div>
                        <div class="mt-4 pt-3 border-t border-white/10 flex items-center justify-between text-xs font-bold text-mercy-accent">
                            <span>Lire l'appel & soutenir</span>
                            <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </article>

                <!-- Carte Urgence 2 -->
                <article onclick="openEmergencyModal(1)" class="cursor-pointer group bg-mercy-charcoal/95 hover:bg-mercy-slate border border-white/10 hover:border-mercy-accent/60 rounded-2xl overflow-hidden shadow-xl transition-all duration-300 flex flex-col">
                    <div class="relative h-44 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1509099836639-18ba1795216d?auto=format&fit=crop&w=800&q=80"
                            onerror="this.onerror=null;this.src='https://placehold.co/800x450/111814/22C55E?text=Nutrition+Enfants';"
                            alt="Soutien nutritionnel aux enfants déplacés"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-3 left-3 px-3 py-1 rounded-lg bg-red-600/90 text-white text-xs font-bold">
                            Alerte Humanitaire Aiguë
                        </span>
                    </div>
                    <div class="p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <p class="text-xs text-gray-400 font-medium mb-1">2,4 millions d'enfants nécessitent une aide vitale</p>
                            <h2 class="text-lg font-bold text-white group-hover:text-mercy-accent transition-colors">
                                Soutien nutritionnel aux enfants déplacés
                            </h2>
                        </div>
                        <div class="mt-4 pt-3 border-t border-white/10 flex items-center justify-between text-xs font-bold text-mercy-accent">
                            <span>Lire l'appel & soutenir</span>
                            <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </article>

                <!-- Carte Urgence 3 -->
                <article onclick="openEmergencyModal(2)" class="cursor-pointer group bg-mercy-charcoal/95 hover:bg-mercy-slate border border-white/10 hover:border-mercy-accent/60 rounded-2xl overflow-hidden shadow-xl transition-all duration-300 flex flex-col">
                    <div class="relative h-44 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1592982537447-7440770cbfc9?auto=format&fit=crop&w=800&q=80"
                            onerror="this.onerror=null;this.src='https://placehold.co/800x450/111814/22C55E?text=Agroecologie+Cameroun+RDC';"
                            alt="Agroécologie villageoise au Cameroun et en RDC"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-3 left-3 px-3 py-1 rounded-lg bg-mercy-green text-white text-xs font-bold">
                            Résilience & Autonomie
                        </span>
                    </div>
                    <div class="p-5 flex-1 flex flex-col justify-between">
                        <div>
                            <p class="text-xs text-gray-400 font-medium mb-1">Semences paysannes et coopératives féminines</p>
                            <h2 class="text-lg font-bold text-white group-hover:text-mercy-accent transition-colors">
                                Agroécologie villageoise au Cameroun et en RDC
                            </h2>
                        </div>
                        <div class="mt-4 pt-3 border-t border-white/10 flex items-center justify-between text-xs font-bold text-mercy-accent">
                            <span>Lire l'appel & soutenir</span>
                            <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

import { EMERGENCIES_DATA } from '../data/emergencies.js';
import { NEWS_ARTICLES } from '../data/news.js';
import { EVENTS_DATA } from '../data/events.js';
import { PUBLICATIONS_DATA } from '../data/publications.js';
import { jumpToDonation } from './donation.js';
import { prefillContact } from './contact.js';
import { showToast } from './toast.js';

export function openUniversalModal(badge, title, bodyHtml) {
    const badgeEl = document.getElementById('modal-badge');
    const titleEl = document.getElementById('modal-title');
    const bodyEl = document.getElementById('modal-body');
    const modal = document.getElementById('universal-modal');

    if (badgeEl) badgeEl.textContent = badge;
    if (titleEl) titleEl.textContent = title;
    if (bodyEl) bodyEl.innerHTML = bodyHtml;

    if (modal) {
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }
}

export function closeUniversalModal() {
    const modal = document.getElementById('universal-modal');
    if (modal) {
        modal.classList.add('hidden');
        document.body.style.overflow = '';
    }
}

export function openEmergencyModal(idx) {
    const item = EMERGENCIES_DATA[idx];
    if (!item) return;

    openUniversalModal(
        'Appel d\'Urgence',
        item.title,
        `
            ${item.content}
            <div class="mt-6 pt-4 border-t border-gray-200 flex justify-end">
                <button type="button" onclick="closeUniversalModal(); jumpToDonation('once', ${item.suggestedAmount}, '${item.cause}');" class="px-6 py-3 rounded-xl bg-mercy-green hover:bg-mercy-darkGreen text-white font-extrabold text-xs sm:text-sm transition">
                    Répondre à cet appel (${item.suggestedAmount} € suggérés)
                </button>
            </div>
        `
    );
}

export function openNewsModal(idx) {
    const art = NEWS_ARTICLES[idx];
    if (!art) return;

    openUniversalModal(
        'Actualités & Presse',
        art.title,
        `<p class="text-xs font-extrabold uppercase text-mercy-green mb-2">${art.date}</p>${art.body}`
    );
}

export function openEventModal(idx) {
    const ev = EVENTS_DATA[idx];
    if (!ev) return;

    openUniversalModal(
        'Événement Solidaire',
        ev.title,
        `<p class="text-xs font-extrabold uppercase text-mercy-green mb-2">${ev.date}</p>${ev.body}`
    );
}

export function openPublicationModal(idx) {
    const pub = PUBLICATIONS_DATA[idx];
    if (!pub) return;

    openUniversalModal(
        'Publication Officielle',
        pub.title,
        `
            <p class="text-xs font-bold text-gray-500 mb-3">${pub.meta}</p>
            ${pub.summary}
            <div class="mt-5 p-4 rounded-2xl bg-mercy-surface border border-gray-200 flex items-center justify-between gap-3">
                <span class="text-xs font-semibold text-mercy-black"><i class="fa-solid fa-file-pdf text-mercy-green mr-1.5"></i> Version numérique complète vérifiée</span>
                <button type="button" onclick="showToast('Téléchargement de la synthèse PDF lancé.', 'success')" class="px-4 py-2 rounded-xl bg-mercy-black hover:bg-mercy-green text-white text-xs font-bold transition">
                    Télécharger le PDF
                </button>
            </div>
        `
    );
}

export function openInfoModal(type) {
    const map = {
        'medias': {
            badge: 'Espace Médias',
            title: 'Relations Presse & Kit Média Mercy Friends',
            html: `
                <p>Journalistes et rédactions : nos porte-parole à Paris et nos chefs de mission sur le terrain (Yaoundé, Kinshasa, Ouagadougou, Port-au-Prince) sont disponibles pour des éclairages humanitaires et interviews.</p>
                <div class="p-4 rounded-2xl bg-mercy-surface border border-gray-200 space-y-1 text-xs mt-3">
                    <p><strong>Contact Presse 24/7 :</strong> presse@mercyfriends.org • +33 (0)1 84 60 42 19</p>
                    <p>Banque de photographies HD libres de droits pour l'illustration d'articles consacrés à nos programmes.</p>
                </div>
            `
        },
        'carrieres': {
            badge: 'Bénévolat & Carrières',
            title: 'Rejoindre les équipes Mercy Friends',
            html: `
                <p>Mercy Friends mobilise plus de 420 professionnels humanitaires (94 % recrutés localement dans nos pays d'intervention) et 1 100 bénévoles actifs.</p>
                <h4 class="font-extrabold text-mercy-black mt-3">Postes & Missions actuellement ouverts :</h4>
                <ul class="list-disc pl-5 space-y-1.5 text-xs sm:text-sm mt-2">
                    <li><strong>Coordinateur·rice Hydraulique & Énergie Solaire (WASH)</strong> — Maroua, Cameroun (CDD 18 mois)</li>
                    <li><strong>Responsable Suivi Nutritionnel & Partenariats Locaux</strong> — Bukavu, RD Congo (CDD 12 mois)</li>
                    <li><strong>Bénévoles Ambassadeurs & Sensibilisation Scolaire</strong> — France, Belgique, Suisse, Cameroun</li>
                </ul>
                <button type="button" onclick="closeUniversalModal(); prefillContact('Bénévolat & Candidature');" class="mt-4 px-5 py-2.5 rounded-xl bg-mercy-green text-white text-xs font-extrabold">
                    Postuler ou proposer mon bénévolat
                </button>
            `
        },
        'appels-offres': {
            badge: 'Marchés & Achats Éthiques',
            title: 'Appels d\'offres transparents en cours',
            html: `
                <p>Conformément aux standards internationaux de transparence humanitaire, tous nos achats d'équipements supérieurs à 15 000 € font l'objet d'appels d'offres publics ouverts en priorité aux fournisseurs régionaux :</p>
                <ul class="list-disc pl-5 space-y-2 text-xs sm:text-sm mt-3">
                    <li><strong>AO-2026-CM-08 :</strong> Fourniture et installation de 25 générateurs et pompes immergées solaires (Région Extrême-Nord, Cameroun).</li>
                    <li><strong>AO-2026-BF-14 :</strong> Acquisition locale de 180 tonnes de semences certifiées de mil et niébé à cycle court (Burkina Faso).</li>
                </ul>
            `
        },
        'legs': {
            badge: 'Legs & Mécénat Durable',
            title: 'Transmettre l\'espoir au-delà d\'une vie',
            html: `
                <p>En désignant l'association à but non lucratif <strong>Mercy Friends</strong> dans votre testament ou comme bénéficiaire d'un contrat d'assurance-vie, votre patrimoine est <strong>totalement exonéré de droits de succession</strong> : 100 % est consacré à l'autonomie des générations futures (puits villageois, écoles rurales, forêts nourricières).</p>
                <p class="text-xs text-gray-600 mt-2">Entretien confidentiel et sans engagement avec notre responsable Libéralités : legs@mercyfriends.org.</p>
            `
        },
        'rapport-financier': {
            badge: 'Transparence Financière',
            title: 'Synthèse des Comptes Certifiés 2025-2026',
            html: `
                <p>Nos comptes annuels sont contrôlés et certifiés sans réserve par un cabinet de Commissariat aux Comptes indépendant.</p>
                <div class="overflow-x-auto mt-3">
                    <table class="w-full text-left border-collapse text-xs sm:text-sm">
                        <thead>
                            <tr class="bg-mercy-black text-white">
                                <th class="p-3 rounded-tl-xl">Poste d'emploi des ressources</th>
                                <th class="p-3">Montant (M €)</th>
                                <th class="p-3 rounded-tr-xl">Part (%)</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-mercy-surface">
                            <tr><td class="p-3 font-bold">Missions sociales directes sur le terrain</td><td class="p-3">37,08 M €</td><td class="p-3 font-black text-mercy-green">90,0 %</td></tr>
                            <tr><td class="p-3">Accompagnement technique & suivi local</td><td class="p-3">1,32 M €</td><td class="p-3 font-bold">3,2 %</td></tr>
                            <tr><td class="p-3">Sensibilisation, éducation & plaidoyer</td><td class="p-3">0,62 M €</td><td class="p-3 font-bold">1,5 %</td></tr>
                            <tr><td class="p-3">Frais d'appel à la générosité & communication</td><td class="p-3">1,28 M €</td><td class="p-3 font-bold">3,1 %</td></tr>
                            <tr><td class="p-3">Frais de fonctionnement administratif</td><td class="p-3">0,90 M €</td><td class="p-3 font-bold">2,2 %</td></tr>
                        </tbody>
                    </table>
                </div>
            `
        }
    };
    const item = map[type];
    if (item) openUniversalModal(item.badge, item.title, item.html);
}

export function openLegalModal(tab) {
    if (tab === 'mentions') {
        openUniversalModal(
            'Cadre Juridique',
            'Mentions Légales',
            `
                <div class="space-y-4">
                    <div>
                        <h4 class="font-extrabold text-mercy-black text-base">1. Éditeur du site</h4>
                        <p>Le présent site internet est édité par <strong>Mercy Friends</strong>, association humanitaire à but non lucratif régie par la loi du 1er juillet 1901 et le décret du 16 août 1901.</p>
                        <ul class="mt-2 space-y-1 text-xs bg-mercy-surface p-4 rounded-xl border border-gray-200">
                            <li><strong>Raison sociale :</strong> Association Mercy Friends</li>
                            <li><strong>Répertoire National des Associations (RNA) :</strong> W751268940</li>
                            <li><strong>Numéro SIRET :</strong> 849 302 617 00018</li>
                            <li><strong>Siège social :</strong> 24 Rue de la Solidarité, 75011 Paris, France</li>
                            <li><strong>Téléphone :</strong> +33 (0)1 84 60 42 10 • <strong>E-mail :</strong> contact@mercyfriends.org</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-extrabold text-mercy-black text-base">2. Direction de la publication</h4>
                        <p>Directrice de la publication : <strong>Dr. Amina Ndongo</strong>, en qualité de Présidente bénévole du Conseil d'Administration. Responsable éditorial : Marc-Antoine Lefèvre.</p>
                    </div>
                    <div>
                        <h4 class="font-extrabold text-mercy-black text-base">3. Hébergement éco-responsable</h4>
                        <p>Hébergement assuré sur serveurs alimentés à 100 % en énergie renouvelable au sein de l'Union Européenne (Scaleway SAS — 8 rue de la Ville l'Évêque, 75008 Paris, France).</p>
                    </div>
                    <div>
                        <h4 class="font-extrabold text-mercy-black text-base">4. Propriété intellectuelle</h4>
                        <p>L'ensemble des textes, infographies, logos Mercy Friends et témoignages sont protégés par le droit d'auteur. Toute reproduction à but non commercial et pédagogique est encouragée sous réserve de mentionner explicitement la source « Mercy Friends ».</p>
                    </div>
                </div>
            `
        );
    } else if (tab === 'confidentialite') {
        openUniversalModal(
            'RGPD & Vie Privée',
            'Politique de Protection des Données Personnelles',
            `
                <div class="space-y-4">
                    <p>L'association <strong>Mercy Friends</strong> attache une importance absolue à la confidentialité des données de ses donateurs, bénévoles, partenaires et visiteurs, dans le strict respect du Règlement Général sur la Protection des Données (RGPD — UE 2016/679).</p>
                    <div>
                        <h4 class="font-extrabold text-mercy-black">1. Données collectées et finalités</h4>
                        <p>Nous ne collectons que les données strictement nécessaires à : l'émission de vos reçus fiscaux réglementaires, la gestion sécurisée de vos dons ponctuels ou mensuels, la réponse à vos messages de contact et, uniquement avec votre accord explicite, l'envoi de notre lettre d'information mensuelle.</p>
                    </div>
                    <div>
                        <h4 class="font-extrabold text-mercy-black">2. Engagement de non-cession absolue</h4>
                        <p class="font-semibold text-mercy-darkGreen">Mercy Friends ne vend, ne loue et n'échange jamais son fichier donateurs avec aucune entreprise commerciale ni organisme tiers.</p>
                    </div>
                    <div>
                        <h4 class="font-extrabold text-mercy-black">3. Durée de conservation</h4>
                        <p>Les pièces justificatives liées aux dons et reçus fiscaux sont conservées pendant la durée légale comptable (6 ans), puis anonymisées. Les abonnés newsletter peuvent se désinscrire instantanément.</p>
                    </div>
                    <div>
                        <h4 class="font-extrabold text-mercy-black">4. Exercer vos droits (Accès, Rectification, Effacement)</h4>
                        <p>Vous pouvez à tout moment contacter notre Délégué à la Protection des Données (DPO) à l'adresse <strong>dpo@mercyfriends.org</strong> ou par courrier postal au siège de l'association.</p>
                    </div>
                </div>
            `
        );
    } else if (tab === 'cookies') {
        const cookiePreferences = window.cookiePreferences || { analytics: false, campaigns: false };
        openUniversalModal(
            'Gestion des traceurs',
            'Paramètres des Cookies',
            `
                <p class="mb-4">Personnalisez ci-dessous l'utilisation des cookies sur le site de Mercy Friends. Aucun traceur publicitaire intrusif n'est utilisé.</p>
                <div class="space-y-3">
                    <div class="p-4 rounded-2xl bg-mercy-surface border border-gray-200 flex items-center justify-between gap-4">
                        <div>
                            <h4 class="font-extrabold text-mercy-black text-sm">Cookies strictement nécessaires (Toujours actifs)</h4>
                            <p class="text-xs text-gray-600 mt-0.5">Sécurité du formulaire de don, mémorisation de vos préférences de confidentialité et accessibilité.</p>
                        </div>
                        <span class="px-3 py-1 rounded-full bg-mercy-green/20 text-mercy-darkGreen text-xs font-extrabold shrink-0">Actif</span>
                    </div>

                    <label class="p-4 rounded-2xl bg-mercy-surface border border-gray-200 flex items-center justify-between gap-4 cursor-pointer">
                        <div>
                            <h4 class="font-extrabold text-mercy-black text-sm">Mesure d'audience éthique et anonyme</h4>
                            <p class="text-xs text-gray-600 mt-0.5">Nous aide à comprendre quelles pages projets sont les plus consultées afin d'améliorer l'information des donateurs.</p>
                        </div>
                        <input type="checkbox" id="chk-cookie-analytics" ${cookiePreferences.analytics ? 'checked' : ''} class="w-5 h-5 accent-mercy-green shrink-0">
                    </label>

                    <label class="p-4 rounded-2xl bg-mercy-surface border border-gray-200 flex items-center justify-between gap-4 cursor-pointer">
                        <div>
                            <h4 class="font-extrabold text-mercy-black text-sm">Campagnes de solidarité & Multimédia</h4>
                            <p class="text-xs text-gray-600 mt-0.5">Optimise la diffusion de nos appels d'urgence humanitaires pour économiser notre budget communication.</p>
                        </div>
                        <input type="checkbox" id="chk-cookie-campaigns" ${cookiePreferences.campaigns ? 'checked' : ''} class="w-5 h-5 accent-mercy-green shrink-0">
                    </label>
                </div>
                <div class="mt-6 flex flex-wrap justify-end gap-3">
                    <button type="button" onclick="saveModalCookieSettings(false)" class="px-5 py-2.5 rounded-xl bg-gray-200 hover:bg-gray-300 text-mercy-black text-xs font-extrabold transition">
                        Enregistrer ma sélection
                    </button>
                    <button type="button" onclick="saveModalCookieSettings(true)" class="px-5 py-2.5 rounded-xl bg-mercy-green hover:bg-mercy-darkGreen text-white text-xs font-extrabold transition">
                        Tout autoriser
                    </button>
                </div>
            `
        );
    } else if (tab === 'ethique') {
        openUniversalModal(
            'Intégrité & Redevabilité',
            'Signaler un Problème / Canal d\'Alerte Éthique',
            `
                <p>À l'image des meilleurs standards internationaux, <strong>Mercy Friends applique une politique de tolérance zéro</strong> envers la corruption, le détournement d'aide, le harcèlement ou toute atteinte à la dignité des bénéficiaires.</p>
                <form onsubmit="submitEthicsReport(event)" class="mt-4 p-5 rounded-2xl bg-mercy-surface border border-gray-200 space-y-3">
                    <h4 class="font-extrabold text-mercy-black text-sm">Transmettre un signalement confidentiel au Comité d'Éthique indépendant</h4>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <select id="ethics-category" class="px-3.5 py-2.5 rounded-xl border border-gray-300 bg-white text-xs font-semibold">
                            <option value="Utilisation des fonds / Fraude">Utilisation des fonds / Suspicion de fraude</option>
                            <option value="Comportement sur le terrain / Sauvegarde">Protection des bénéficiaires / Comportement inapproprié</option>
                            <option value="Réclamation Donateur / Qualité">Réclamation sur la qualité de nos services</option>
                        </select>
                        <input type="text" id="ethics-contact" placeholder="E-mail de suivi (facultatif — anonyme possible)" class="px-3.5 py-2.5 rounded-xl border border-gray-300 bg-white text-xs">
                    </div>
                    <textarea id="ethics-desc" rows="3" required placeholder="Décrivez les faits constatés (lieu, date approximative, projet concerné)..." class="w-full px-3.5 py-2.5 rounded-xl border border-gray-300 bg-white text-xs"></textarea>
                    <button type="submit" class="px-5 py-2.5 rounded-xl bg-mercy-black hover:bg-mercy-green text-white text-xs font-extrabold transition">
                        Envoyer le signalement chiffré
                    </button>
                </form>
            `
        );
    } else if (tab === 'faq') {
        openUniversalModal(
            'Aide & Réponses',
            'Foire Aux Questions (FAQ)',
            `
                <div class="space-y-3">
                    <details class="group p-4 rounded-2xl bg-mercy-surface border border-gray-200" open>
                        <summary class="font-extrabold text-mercy-black cursor-pointer list-none flex items-center justify-between">
                            <span>1. Mon don à Mercy Friends ouvre-t-il droit à une réduction d'impôt ?</span>
                            <i class="fa-solid fa-chevron-down text-mercy-green text-xs group-open:rotate-180 transition-transform"></i>
                        </summary>
                        <p class="text-xs text-gray-600 mt-2">Oui. En tant qu'association à but non lucratif d'intérêt général, votre don ouvre droit à une réduction d'impôt sur le revenu égale à 66 % du montant versé (dans la limite de 20 % du revenu imposable), ou 60 % pour les entreprises assujetties à l'IS.</p>
                    </details>

                    <details class="group p-4 rounded-2xl bg-mercy-surface border border-gray-200">
                        <summary class="font-extrabold text-mercy-black cursor-pointer list-none flex items-center justify-between">
                            <span>2. Puis-je modifier ou suspendre mon don mensuel à tout moment ?</span>
                            <i class="fa-solid fa-chevron-down text-mercy-green text-xs group-open:rotate-180 transition-transform"></i>
                        </summary>
                        <p class="text-xs text-gray-600 mt-2">Absolument, sans aucun frais ni justificatif, sur simple e-mail à donateurs@mercyfriends.org ou par téléphone au +33 (0)1 84 60 42 10.</p>
                    </details>

                    <details class="group p-4 rounded-2xl bg-mercy-surface border border-gray-200">
                        <summary class="font-extrabold text-mercy-black cursor-pointer list-none flex items-center justify-between">
                            <span>3. Comment contrôlez-vous que l'argent arrive réellement aux populations ?</span>
                            <i class="fa-solid fa-chevron-down text-mercy-green text-xs group-open:rotate-180 transition-transform"></i>
                        </summary>
                        <p class="text-xs text-gray-600 mt-2">Chaque projet fait l'objet d'une convention budgétaire stricte, de décaissements par tranches sur justificatifs terrain, de visites de nos coordinateurs régionaux et d'un audit externe annuel indépendant.</p>
                    </details>

                    <details class="group p-4 rounded-2xl bg-mercy-surface border border-gray-200">
                        <summary class="font-extrabold text-mercy-black cursor-pointer list-none flex items-center justify-between">
                            <span>4. Puis-je proposer du bénévolat de compétences ou rejoindre une mission ?</span>
                            <i class="fa-solid fa-chevron-down text-mercy-green text-xs group-open:rotate-180 transition-transform"></i>
                        </summary>
                        <p class="text-xs text-gray-600 mt-2">Oui ! Nous accueillons des bénévoles pour nos événements, la traduction, la sensibilisation scolaire, tandis que sur le terrain nous privilégions le recrutement de spécialistes locaux afin de renforcer les compétences nationales.</p>
                    </details>
                </div>
            `
        );
    } else if (tab === 'statuts') {
        openUniversalModal(
            'Gouvernance Officielle',
            'Statuts de l\'Association & Engagements de Transparence',
            `
                <div class="space-y-4">
                    <p>Constituée en association à but non lucratif (Loi 1901), <strong>Mercy Friends</strong> est strictement apolitique et non confessionnelle. Ses dirigeants statutaires exercent leur mandat à titre intégralement bénévole.</p>
                    <div class="p-4 rounded-2xl bg-mercy-soft border border-mercy-green/30">
                        <h4 class="font-extrabold text-mercy-black text-sm mb-2">Nos 5 Piliers Statutaires Inaliénables :</h4>
                        <ol class="list-decimal pl-5 space-y-1 text-xs text-mercy-darkGreen font-semibold">
                            <li>Impartialité de l'aide fondée uniquement sur l'urgence des besoins humains.</li>
                            <li>Plafond statutaire strict des frais administratifs sous la barre des 5 % (2,2 % réalisés en 2026).</li>
                            <li>Co-construction obligatoire de chaque projet avec les représentants villageois et féminins locaux.</li>
                            <li>Publication intégrale annuelle du bilan financier certifié en accès libre.</li>
                            <li>Respect écologique et refus des intrants dégradant durablement les sols paysans.</li>
                        </ol>
                    </div>
                </div>
            `
        );
    }
}

export function submitEthicsReport(event) {
    event.preventDefault();
    const descEl = document.getElementById('ethics-desc');
    const desc = descEl ? descEl.value.trim() : '';

    if (desc.length < 10) {
        showToast('Veuillez préciser votre signalement (minimum 10 caractères).', 'error');
        return;
    }
    const code = 'ETH-' + Math.floor(10000 + Math.random() * 90000);
    closeUniversalModal();
    showToast(`Signalement confidentiel transmis au Comité d'Éthique (Dossier ${code}).`, 'success');
}

export function initModalListeners() {
    const modal = document.getElementById('universal-modal');
    if (modal) {
        modal.addEventListener('click', function (e) {
            if (e.target === this) closeUniversalModal();
        });
    }

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') closeUniversalModal();
    });
}

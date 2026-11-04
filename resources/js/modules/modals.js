import { EMERGENCIES_DATA } from '../data/emergencies.js';
import { NEWS_ARTICLES } from '../data/news.js';
import { EVENTS_DATA } from '../data/events.js';
import { PUBLICATIONS_DATA } from '../data/publications.js';
import { jumpToDonation } from './donation.js';
import { prefillContact } from './contact.js';
import { showToast } from './toast.js';
import { t, getLocale } from '../data/i18n.js';

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
        t('emergency_badge'),
        item.title,
        `
            ${item.content}
            <div class="mt-6 pt-4 border-t border-gray-200 flex justify-end">
                <button type="button" onclick="closeUniversalModal(); jumpToDonation('once', ${item.suggestedAmount}, '${item.cause}');" class="px-6 py-3 rounded-xl bg-mercy-green hover:bg-mercy-darkGreen text-white font-extrabold text-xs sm:text-sm transition">
                    ${t('respond_emergency_btn', { amt: item.suggestedAmount })}
                </button>
            </div>
        `
    );
}

export function openNewsModal(idx) {
    const art = NEWS_ARTICLES[idx];
    if (!art) return;

    openUniversalModal(
        t('news_badge'),
        art.title,
        `<p class="text-xs font-extrabold uppercase text-mercy-green mb-2">${art.date}</p>${art.body}`
    );
}

export function openEventModal(idx) {
    const ev = EVENTS_DATA[idx];
    if (!ev) return;

    openUniversalModal(
        t('events_badge'),
        ev.title,
        `<p class="text-xs font-extrabold uppercase text-mercy-green mb-2">${ev.date}</p>${ev.body}`
    );
}

export function openPublicationModal(idx) {
    const pub = PUBLICATIONS_DATA[idx];
    if (!pub) return;

    openUniversalModal(
        t('pub_badge'),
        pub.title,
        `
            <p class="text-xs font-bold text-gray-500 mb-3">${pub.meta}</p>
            ${pub.summary}
            <div class="mt-5 p-4 rounded-2xl bg-mercy-surface border border-gray-200 flex items-center justify-between gap-3">
                <span class="text-xs font-semibold text-mercy-black"><i class="fa-solid fa-file-pdf text-mercy-green mr-1.5"></i> ${pub.title}</span>
                <button type="button" onclick="showToast('${t('pdf_started')}', 'success')" class="px-4 py-2 rounded-xl bg-mercy-black hover:bg-mercy-green text-white text-xs font-bold transition">
                    ${t('download_pdf')}
                </button>
            </div>
        `
    );
}

const INFO_MODALS = {
    en: {
        'medias': {
            badge: 'Media Center',
            title: 'Press Relations & Mercy Friends Media Kit',
            html: `
                <p>Journalists and editorial teams : our spokespersons in Paris, Yaounde, Kinshasa, Ouagadougou, and Port-au-Prince are available for humanitarian briefings, interviews, and verified field photography.</p>
                <div class="p-4 rounded-2xl bg-mercy-surface border border-gray-200 space-y-1 text-xs mt-3">
                    <p><strong>Press Contact (24/7) :</strong> presse@mercyfriends.org • +33 (0)1 84 60 42 19</p>
                    <p>Royalty-free high-definition photo archive available for coverage of our humanitarian missions.</p>
                </div>
            `
        },
        'carrieres': {
            badge: 'Volunteering & Careers',
            title: 'Join the Mercy Friends Teams',
            html: `
                <p>Mercy Friends brings together over 420 humanitarian professionals (94 % recruited locally in our operating countries) and 1,100 active community volunteers.</p>
                <h4 class="font-extrabold text-mercy-black mt-3">Currently Open Positions & Missions :</h4>
                <ul class="list-disc pl-5 space-y-1.5 text-xs sm:text-sm mt-2">
                    <li><strong>Hydraulic & Solar Energy Coordinator (WASH) :</strong> Maroua, Cameroon (18-month contract)</li>
                    <li><strong>Nutritional Monitoring & Local Partnerships Officer :</strong> Bukavu, DR Congo (12-month contract)</li>
                    <li><strong>Volunteer Ambassadors & School Awareness Officers :</strong> UK, France, Germany, Switzerland, Cameroon</li>
                </ul>
                <button type="button" onclick="closeUniversalModal(); prefillContact('Bénévolat & Candidature');" class="mt-4 px-5 py-2.5 rounded-xl bg-mercy-green text-white text-xs font-extrabold">
                    Apply or Volunteer Now
                </button>
            `
        },
        'appels-offres': {
            badge: 'Procurement & Ethical Purchasing',
            title: 'Current Transparent Tender Calls',
            html: `
                <p>In accordance with international humanitarian standards of integrity and transparency, all equipment purchases exceeding 15,000 EUR are subject to public tender calls prioritizing local regional suppliers :</p>
                <ul class="list-disc pl-5 space-y-2 text-xs sm:text-sm mt-3">
                    <li><strong>AO-2026-CM-08 :</strong> Supply and installation of 25 solar submersible pumps (Far North Region, Cameroon).</li>
                    <li><strong>AO-2026-BF-14 :</strong> Local procurement of 180 metric tons of certified drought-tolerant millet and cowpea seeds (Burkina Faso).</li>
                </ul>
            `
        },
        'legs': {
            badge: 'Legacies & Long-Term Giving',
            title: 'Passing Hope Forward Beyond a Lifetime',
            html: `
                <p>By including the non-profit organization <strong>Mercy Friends</strong> in your will or life insurance, your bequest is <strong>fully exempt from inheritance duties</strong> : 100 % directly serves community self-reliance (village boreholes, community schools, resilient agriculture).</p>
                <p class="text-xs text-gray-600 mt-2">Confidential and commitment-free discussion with our Planned Giving Lead : legs@mercyfriends.org.</p>
            `
        },
        'rapport-financier': {
            badge: 'Financial Transparency',
            title: 'Summary of 2025-2026 Certified Accounts',
            html: `
                <p>Our annual financial statements are audited and certified without qualification by an independent statutory auditing firm.</p>
                <div class="overflow-x-auto mt-3">
                    <table class="w-full text-left border-collapse text-xs sm:text-sm">
                        <thead>
                            <tr class="bg-mercy-black text-white">
                                <th class="p-3 rounded-tl-xl">Resource Allocation Category</th>
                                <th class="p-3">Amount (M EUR)</th>
                                <th class="p-3 rounded-tr-xl">Share (%)</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-mercy-surface">
                            <tr><td class="p-3 font-bold">Direct social field programs</td><td class="p-3">37.08 M EUR</td><td class="p-3 font-black text-mercy-green">90.0 %</td></tr>
                            <tr><td class="p-3">Technical accompaniment & local monitoring</td><td class="p-3">1.32 M EUR</td><td class="p-3 font-bold">3.2 %</td></tr>
                            <tr><td class="p-3">Advocacy, community education & prevention</td><td class="p-3">0.62 M EUR</td><td class="p-3 font-bold">1.5 %</td></tr>
                            <tr><td class="p-3">Fundraising & donor communications</td><td class="p-3">1.28 M EUR</td><td class="p-3 font-bold">3.1 %</td></tr>
                            <tr><td class="p-3">Administrative governance & operating costs</td><td class="p-3">0.90 M EUR</td><td class="p-3 font-bold">2.2 %</td></tr>
                        </tbody>
                    </table>
                </div>
            `
        }
    },
    fr: {
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
                    <li><strong>Coordinateur Hydraulique & Énergie Solaire (WASH) :</strong> Maroua, Cameroun (CDD 18 mois)</li>
                    <li><strong>Responsable Suivi Nutritionnel & Partenariats Locaux :</strong> Bukavu, RD Congo (CDD 12 mois)</li>
                    <li><strong>Bénévoles Ambassadeurs & Sensibilisation Scolaire :</strong> France, Belgique, Suisse, Cameroun</li>
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
    },
    de: {
        'medias': {
            badge: 'Medienbereich',
            title: 'Pressekontakt & Mercy Friends Mediapaket',
            html: `
                <p>Journalisten und Redaktionen : Unsere Ansprechpartner in Paris sowie unsere Einsatzleiter vor Ort (Jaunde, Kinshasa, Ouagadougou, Port-au-Prince) stehen für Hintergrundberichte, Interviews und Bildmaterial zur Verfügung.</p>
                <div class="p-4 rounded-2xl bg-mercy-surface border border-gray-200 space-y-1 text-xs mt-3">
                    <p><strong>Pressekontakt (24/7) :</strong> presse@mercyfriends.org • +33 (0)1 84 60 42 19</p>
                    <p>Lizenzfreies HD-Fotomaterial zur Berichterstattung über unsere Hilfsprojekte abrufbar.</p>
                </div>
            `
        },
        'carrieres': {
            badge: 'Ehrenamt & Karriere',
            title: 'Teil der Mercy Friends Teams werden',
            html: `
                <p>Mercy Friends vereint über 420 hauptamtliche Hilfskräfte (94 % vor Ort in den jeweiligen Einsatzländern rekrutiert) und 1.100 engagierte Ehrenamtliche.</p>
                <h4 class="font-extrabold text-mercy-black mt-3">Derzeit offene Positionen & Einsätze :</h4>
                <ul class="list-disc pl-5 space-y-1.5 text-xs sm:text-sm mt-2">
                    <li><strong>Koordination Wasserwirtschaft & Solarenergie (WASH) :</strong> Maroua, Kamerun (18 Monate)</li>
                    <li><strong>Leitung Ernährungsmonitoring & Lokale Partnerschaften :</strong> Bukavu, DR Kongo (12 Monate)</li>
                    <li><strong>Botschafter für Schul- und Bildungsarbeit :</strong> Deutschland, Schweiz, Frankreich, Kamerun</li>
                </ul>
                <button type="button" onclick="closeUniversalModal(); prefillContact('Bénévolat & Candidature');" class="mt-4 px-5 py-2.5 rounded-xl bg-mercy-green text-white text-xs font-extrabold">
                    Jetzt bewerben oder mitwirken
                </button>
            `
        },
        'appels-offres': {
            badge: 'Beschaffung & Ethischer Einkauf',
            title: 'Laufende transparente Ausschreibungen',
            html: `
                <p>Gemäß internationalen Transparenzstandards werden alle Sachbeschaffungen ab 15.000 EUR öffentlich ausgeschrieben, wobei regionale Lieferanten vorrangig berücksichtigt werden :</p>
                <ul class="list-disc pl-5 space-y-2 text-xs sm:text-sm mt-3">
                    <li><strong>AO-2026-CM-08 :</strong> Lieferung und Montage von 25 solaren Tauchpumpen (Extremer Norden, Kamerun).</li>
                    <li><strong>AO-2026-BF-14 :</strong> Lokale Beschaffung von 180 Tonnen zertifiziertem trockenheitsresistentem Saatgut (Burkina Faso).</li>
                </ul>
            `
        },
        'legs': {
            badge: 'Nachlässe & Nachhaltiges Engagement',
            title: 'Hoffnung über das eigene Leben hinaus schenken',
            html: `
                <p>Indem Sie die gemeinnützige Organisation <strong>Mercy Friends</strong> in Ihrem Testament oder einer Lebensversicherung bedenken, bleibt diese Zuwendung <strong>vollständig erbschaftssteuerfrei</strong> : 100 % fließen in die Zukunft und Eigenständigkeit von Menschen in Not.</p>
                <p class="text-xs text-gray-600 mt-2">Vertrauliches, unverbindliches Gespräch mit unserer Nachlasskoordination : legs@mercyfriends.org.</p>
            `
        },
        'rapport-financier': {
            badge: 'Finanzielle Transparenz',
            title: 'Zusammenfassung des geprüften Jahresabschlusses 2025-2026',
            html: `
                <p>Unsere Jahresabschlüsse werden jährlich von einer unabhängigen Wirtschaftsprüfungsgesellschaft uneingeschränkt testiert.</p>
                <div class="overflow-x-auto mt-3">
                    <table class="w-full text-left border-collapse text-xs sm:text-sm">
                        <thead>
                            <tr class="bg-mercy-black text-white">
                                <th class="p-3 rounded-tl-xl">Mittelverwendung</th>
                                <th class="p-3">Betrag (M EUR)</th>
                                <th class="p-3 rounded-tr-xl">Anteil (%)</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-mercy-surface">
                            <tr><td class="p-3 font-bold">Unmittelbare soziale Projekte vor Ort</td><td class="p-3">37,08 M EUR</td><td class="p-3 font-black text-mercy-green">90,0 %</td></tr>
                            <tr><td class="p-3">Fachliche Begleitung & lokales Monitoring</td><td class="p-3">1,32 M EUR</td><td class="p-3 font-bold">3,2 %</td></tr>
                            <tr><td class="p-3">Aufklärung, Bildung & Fürsprache</td><td class="p-3">0,62 M EUR</td><td class="p-3 font-bold">1,5 %</td></tr>
                            <tr><td class="p-3">Spenderkommunikation & Öffentlichkeitsarbeit</td><td class="p-3">1,28 M EUR</td><td class="p-3 font-bold">3,1 %</td></tr>
                            <tr><td class="p-3">Verwaltung & satzungsgemäße Leitung</td><td class="p-3">0,90 M EUR</td><td class="p-3 font-bold">2,2 %</td></tr>
                        </tbody>
                    </table>
                </div>
            `
        }
    }
};

export function openInfoModal(type) {
    const loc = getLocale();
    const dict = INFO_MODALS[loc] || INFO_MODALS.en;
    const item = dict[type] || INFO_MODALS.en[type];
    if (item) openUniversalModal(item.badge, item.title, item.html);
}

export function openLegalModal(tab) {
    const loc = getLocale();

    if (tab === 'mentions') {
        const title = loc === 'en' ? 'Legal Notice' : (loc === 'de' ? 'Impressum' : 'Mentions Légales');
        const badge = loc === 'en' ? 'Legal Framework' : (loc === 'de' ? 'Rechtlicher Rahmen' : 'Cadre Juridique');
        openUniversalModal(
            badge,
            title,
            `
                <div class="space-y-4">
                    <div>
                        <h4 class="font-extrabold text-mercy-black text-base">1. ${loc === 'en' ? 'Site Publisher' : (loc === 'de' ? 'Herausgeber' : 'Éditeur du site')}</h4>
                        <p>${loc === 'en'
                            ? 'This website is published by <strong>Mercy Friends</strong>, a humanitarian non-profit association governed by the French non-profit laws of 1901.'
                            : (loc === 'de'
                                ? 'Diese Website wird herausgegeben von <strong>Mercy Friends</strong>, einer gemeinnützigen humanitären Vereinigung nach französischem Vereinsrecht von 1901.'
                                : 'Le présent site internet est édité par <strong>Mercy Friends</strong>, association humanitaire à but non lucratif régie par la loi du 1er juillet 1901 et le décret du 16 août 1901.')}</p>
                        <ul class="mt-2 space-y-1 text-xs bg-mercy-surface p-4 rounded-xl border border-gray-200">
                            <li><strong>${loc === 'en' ? 'Organization :' : (loc === 'de' ? 'Name :' : 'Raison sociale :')}</strong> Association Mercy Friends</li>
                            <li><strong>RNA :</strong> W751268940 • <strong>SIRET :</strong> 849 302 617 00018</li>
                            <li><strong>${loc === 'en' ? 'Headquarters :' : (loc === 'de' ? 'Sitz :' : 'Siège social :')}</strong> 24 Rue de la Solidarité, 75011 Paris, France</li>
                            <li><strong>${loc === 'en' ? 'Phone :' : (loc === 'de' ? 'Telefon :' : 'Téléphone :')}</strong> +33 (0)1 84 60 42 10 • <strong>E-mail :</strong> contact@mercyfriends.org</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-extrabold text-mercy-black text-base">2. ${loc === 'en' ? 'Editorial Leadership' : (loc === 'de' ? 'Verantwortliche Leitung' : 'Direction de la publication')}</h4>
                        <p>${loc === 'en'
                            ? 'Publication Director : <strong>Dr. Amina Ndongo</strong>, Board President. Editorial Manager : Marc-Antoine Lefèvre.'
                            : (loc === 'de'
                                ? 'Verantwortlich für den Inhalt : <strong>Dr. Amina Ndongo</strong>, Vorstandsvorsitzende. Redaktionelle Leitung : Marc-Antoine Lefèvre.'
                                : 'Directrice de la publication : <strong>Dr. Amina Ndongo</strong>, Présidente bénévole du Conseil d\'Administration. Responsable éditorial : Marc-Antoine Lefèvre.')}</p>
                    </div>
                    <div>
                        <h4 class="font-extrabold text-mercy-black text-base">3. ${loc === 'en' ? 'Eco-Responsible Hosting' : (loc === 'de' ? 'Ökologisches Hosting' : 'Hébergement éco-responsable')}</h4>
                        <p>${loc === 'en'
                            ? 'Hosted on servers powered 100 % by renewable energy in the European Union (Scaleway SAS, 8 rue de la Ville l\'Évêque, 75008 Paris, France).'
                            : (loc === 'de'
                                ? 'Betrieben auf Servern mit 100 % erneuerbarer Energie in der Europäischen Union (Scaleway SAS, 8 rue de la Ville l\'Évêque, 75008 Paris, Frankreich).'
                                : 'Hébergement assuré sur serveurs alimentés à 100 % en énergie renouvelable au sein de l\'Union Européenne (Scaleway SAS, 8 rue de la Ville l\'Évêque, 75008 Paris, France).')}</p>
                    </div>
                </div>
            `
        );
    } else if (tab === 'confidentialite') {
        const title = loc === 'en' ? 'Privacy & Data Protection Policy' : (loc === 'de' ? 'Datenschutzerklärung' : 'Politique de Protection des Données Personnelles');
        const badge = loc === 'en' ? 'GDPR & Privacy' : (loc === 'de' ? 'DSGVO & Datenschutz' : 'RGPD & Vie Privée');
        openUniversalModal(
            badge,
            title,
            `
                <div class="space-y-4">
                    <p>${loc === 'en'
                        ? '<strong>Mercy Friends</strong> is strictly committed to protecting donor and visitor privacy under the European General Data Protection Regulation (GDPR / EU 2016/679).'
                        : (loc === 'de'
                            ? '<strong>Mercy Friends</strong> misst dem Schutz persönlicher Daten von Spendern, Partnern und Besuchern höchste Bedeutung bei, im vollen Einklang mit der Europäischen Datenschutz-Grundverordnung (DSGVO / EU 2016/679).'
                            : 'L\'association <strong>Mercy Friends</strong> attache une importance absolue à la confidentialité des données de ses donateurs, bénévoles, partenaires et visiteurs, dans le strict respect du Règlement Général sur la Protection des Données (RGPD / UE 2016/679).')}</p>
                    <div>
                        <h4 class="font-extrabold text-mercy-black">1. ${loc === 'en' ? 'Data Collected and Purpose' : (loc === 'de' ? 'Erhebung und Zweck' : 'Données collectées et finalités')}</h4>
                        <p>${loc === 'en'
                            ? 'We only collect data strictly necessary for : official tax receipt delivery, secure processing of gifts, responding to inquiries, and sending monthly newsletters only with your explicit consent.'
                            : (loc === 'de'
                                ? 'Wir verarbeiten ausschließlich Daten, die für Spendenquittungen, Zahlungsabwicklung, Anfragen oder den gewählten Newsletter-Empfang zwingend erforderlich sind.'
                                : 'Nous ne collectons que les données strictement nécessaires à l\'émission de vos reçus fiscaux, la gestion sécurisée de vos dons, et nos réponses à vos prises de contact.')}</p>
                    </div>
                    <div>
                        <h4 class="font-extrabold text-mercy-black">2. ${loc === 'en' ? 'Zero Commercial Resale Commitment' : (loc === 'de' ? 'Keine Weitergabe an Dritte' : 'Engagement de non-cession absolue')}</h4>
                        <p class="font-semibold text-mercy-darkGreen">${loc === 'en'
                            ? 'Mercy Friends never sells, rents, or exchanges donor databases with any commercial entity or third party.'
                            : (loc === 'de'
                                ? 'Mercy Friends verkauft, vermietet oder tauscht Spenderdaten unter keinen Umständen mit Unternehmen oder Dritten.'
                                : 'Mercy Friends ne vend, ne loue et n\'échange jamais son fichier donateurs avec aucune entreprise commerciale ni organisme tiers.')}</p>
                    </div>
                    <div>
                        <h4 class="font-extrabold text-mercy-black">3. ${loc === 'en' ? 'Data Protection Officer Contact' : (loc === 'de' ? 'Datenschutzbeauftragter' : 'Exercer vos droits')}</h4>
                        <p>${loc === 'en'
                            ? 'Contact our Data Protection Officer at <strong>dpo@mercyfriends.org</strong> to access, amend, or erase your records at any time.'
                            : (loc === 'de'
                                ? 'Kontaktieren Sie unsere Datenschutzbeauftragten unter <strong>dpo@mercyfriends.org</strong> für Auskunft, Berichtigung oder Löschung Ihrer Daten.'
                                : 'Vous pouvez à tout moment contacter notre Délégué à la Protection des Données à l\'adresse <strong>dpo@mercyfriends.org</strong>.')}</p>
                    </div>
                </div>
            `
        );
    } else if (tab === 'cookies') {
        const cookiePreferences = window.cookiePreferences || { analytics: false, campaigns: false };
        const title = loc === 'en' ? 'Cookie Preferences' : (loc === 'de' ? 'Cookie-Einstellungen' : 'Paramètres des Cookies');
        const badge = loc === 'en' ? 'Tracker Management' : (loc === 'de' ? 'Cookie-Verwaltung' : 'Gestion des traceurs');
        openUniversalModal(
            badge,
            title,
            `
                <p class="mb-4">${loc === 'en'
                    ? 'Manage your cookie settings below. Mercy Friends uses zero intrusive commercial advertising trackers.'
                    : (loc === 'de'
                        ? 'Verwalten Sie hier Ihre Cookie-Einstellungen. Mercy Friends nutzt keine aufdringlichen Werbetracker.'
                        : 'Personnalisez ci-dessous l\'utilisation des cookies sur le site de Mercy Friends. Aucun traceur publicitaire intrusif n\'est utilisé.')}</p>
                <div class="space-y-3">
                    <div class="p-4 rounded-2xl bg-mercy-surface border border-gray-200 flex items-center justify-between gap-4">
                        <div>
                            <h4 class="font-extrabold text-mercy-black text-sm">${loc === 'en' ? 'Strictly Necessary Cookies (Always Active)' : (loc === 'de' ? 'Notwendige Cookies (Immer aktiv)' : 'Cookies strictement nécessaires (Toujours actifs)')}</h4>
                            <p class="text-xs text-gray-600 mt-0.5">${loc === 'en' ? 'Donation form security, privacy preferences storage and accessibility.' : (loc === 'de' ? 'Sicherheit des Spendenformulars und Speicherung Ihrer Einstellungen.' : 'Sécurité du formulaire de don et mémorisation de vos préférences.')}</p>
                        </div>
                        <span class="px-3 py-1 rounded-full bg-mercy-green/20 text-mercy-darkGreen text-xs font-extrabold shrink-0">${loc === 'en' ? 'Active' : (loc === 'de' ? 'Aktiv' : 'Actif')}</span>
                    </div>

                    <label class="p-4 rounded-2xl bg-mercy-surface border border-gray-200 flex items-center justify-between gap-4 cursor-pointer">
                        <div>
                            <h4 class="font-extrabold text-mercy-black text-sm">${loc === 'en' ? 'Ethical & Anonymous Audience Metrics' : (loc === 'de' ? 'Anonyme Reichweitenmessung' : 'Mesure d\'audience éthique et anonyme')}</h4>
                            <p class="text-xs text-gray-600 mt-0.5">${loc === 'en' ? 'Helps us understand which field project pages are most consulted.' : (loc === 'de' ? 'Hilft uns zu verstehen, welche Hilfsprojekte am meisten aufgerufen werden.' : 'Nous aide à comprendre quelles pages projets sont les plus consultées.')}</p>
                        </div>
                        <input type="checkbox" id="chk-cookie-analytics" ${cookiePreferences.analytics ? 'checked' : ''} class="w-5 h-5 accent-mercy-green shrink-0">
                    </label>

                    <label class="p-4 rounded-2xl bg-mercy-surface border border-gray-200 flex items-center justify-between gap-4 cursor-pointer">
                        <div>
                            <h4 class="font-extrabold text-mercy-black text-sm">${loc === 'en' ? 'Solidarity Campaigns & Multimedia' : (loc === 'de' ? 'Solidaritätskampagnen & Medien' : 'Campagnes de solidarité & Multimédia')}</h4>
                            <p class="text-xs text-gray-600 mt-0.5">${loc === 'en' ? 'Optimizes the reach of emergency humanitarian appeals.' : (loc === 'de' ? 'Optimiert die Ausspielung unserer Dringlichkeitsaufrufe.' : 'Optimise la diffusion de nos appels d\'urgence humanitaires.')}</p>
                        </div>
                        <input type="checkbox" id="chk-cookie-campaigns" ${cookiePreferences.campaigns ? 'checked' : ''} class="w-5 h-5 accent-mercy-green shrink-0">
                    </label>
                </div>
                <div class="mt-6 flex flex-wrap justify-end gap-3">
                    <button type="button" onclick="saveModalCookieSettings(false)" class="px-5 py-2.5 rounded-xl bg-gray-200 hover:bg-gray-300 text-mercy-black text-xs font-extrabold transition">
                        ${loc === 'en' ? 'Save selection' : (loc === 'de' ? 'Auswahl speichern' : 'Enregistrer ma sélection')}
                    </button>
                    <button type="button" onclick="saveModalCookieSettings(true)" class="px-5 py-2.5 rounded-xl bg-mercy-green hover:bg-mercy-darkGreen text-white text-xs font-extrabold transition">
                        ${loc === 'en' ? 'Allow all' : (loc === 'de' ? 'Alle zulassen' : 'Tout autoriser')}
                    </button>
                </div>
            `
        );
    } else if (tab === 'ethique') {
        const title = loc === 'en' ? 'Report a Concern / Ethics Whistleblower Channel' : (loc === 'de' ? 'Hinweisgebersystem / Ethikkanal' : 'Signaler un Problème / Canal d\'Alerte Éthique');
        const badge = loc === 'en' ? 'Integrity & Accountability' : (loc === 'de' ? 'Integrität & Verantwortung' : 'Intégrité & Redevabilité');
        openUniversalModal(
            badge,
            title,
            `
                <p>${loc === 'en'
                    ? 'In line with international standards, <strong>Mercy Friends enforces a strict zero-tolerance policy</strong> against fraud, misappropriation, harassment, or harm to beneficiary dignity.'
                    : (loc === 'de'
                        ? '<strong>Mercy Friends verfolgt eine strikte Null-Toleranz-Politik</strong> gegenüber Korruption, Veruntreuung, Belästigung oder Benachteiligung von Schutzbedürftigen.'
                        : 'À l\'image des meilleurs standards internationaux, <strong>Mercy Friends applique une politique de tolérance zéro</strong> envers la corruption, le détournement d\'aide, le harcèlement ou toute atteinte à la dignité des bénéficiaires.')}</p>
                <form onsubmit="submitEthicsReport(event)" class="mt-4 p-5 rounded-2xl bg-mercy-surface border border-gray-200 space-y-3">
                    <h4 class="font-extrabold text-mercy-black text-sm">${loc === 'en' ? 'Submit a confidential report to our Independent Ethics Committee' : (loc === 'de' ? 'Vertrauliche Meldung an das unabhängige Ethikkomitee' : 'Transmettre un signalement confidentiel au Comité d\'Éthique indépendant')}</h4>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <select id="ethics-category" class="px-3.5 py-2.5 rounded-xl border border-gray-300 bg-white text-xs font-semibold">
                            <option value="Utilisation des fonds / Fraude">${loc === 'en' ? 'Use of funds / Fraud suspicion' : (loc === 'de' ? 'Mittelverwendung / Betrugsverdacht' : 'Utilisation des fonds / Fraude')}</option>
                            <option value="Comportement sur le terrain / Sauvegarde">${loc === 'en' ? 'Field conduct / Beneficiary protection' : (loc === 'de' ? 'Verhalten vor Ort / Schutzbedürftige' : 'Protection des bénéficiaires / Comportement')}</option>
                            <option value="Réclamation Donateur / Qualité">${loc === 'en' ? 'Donor grievance / Service quality' : (loc === 'de' ? 'Spenderbeschwerde / Servicequalität' : 'Réclamation donateur / Qualité')}</option>
                        </select>
                        <input type="text" id="ethics-contact" placeholder="${loc === 'en' ? 'Follow-up email (optional / anonymity guaranteed)' : (loc === 'de' ? 'E-Mail für Rückfragen (optional / anonym möglich)' : 'E-mail de suivi (facultatif / anonymat garanti)')}" class="px-3.5 py-2.5 rounded-xl border border-gray-300 bg-white text-xs">
                    </div>
                    <textarea id="ethics-desc" rows="3" required placeholder="${loc === 'en' ? 'Describe observed facts (location, date, project concerned)...' : (loc === 'de' ? 'Beschreiben Sie den Vorfall (Ort, Datum, betroffenes Projekt)...' : 'Décrivez les faits constatés (lieu, date approximative, projet concerné)...')}" class="w-full px-3.5 py-2.5 rounded-xl border border-gray-300 bg-white text-xs"></textarea>
                    <button type="submit" class="px-5 py-2.5 rounded-xl bg-mercy-black hover:bg-mercy-green text-white text-xs font-extrabold transition">
                        ${loc === 'en' ? 'Submit Encrypted Report' : (loc === 'de' ? 'Verschlüsselte Meldung absenden' : 'Envoyer le signalement chiffré')}
                    </button>
                </form>
            `
        );
    } else if (tab === 'faq') {
        const title = loc === 'en' ? 'Frequently Asked Questions (FAQ)' : (loc === 'de' ? 'Häufig gestellte Fragen (FAQ)' : 'Foire Aux Questions (FAQ)');
        const badge = loc === 'en' ? 'Help & Answers' : (loc === 'de' ? 'Hilfe & Antworten' : 'Aide & Réponses');
        openUniversalModal(
            badge,
            title,
            `
                <div class="space-y-3">
                    <details class="group p-4 rounded-2xl bg-mercy-surface border border-gray-200" open>
                        <summary class="font-extrabold text-mercy-black cursor-pointer list-none flex items-center justify-between">
                            <span>1. ${loc === 'en' ? 'Does my donation qualify for tax relief ?' : (loc === 'de' ? 'Ist meine Spende steuerlich absetzbar ?' : 'Mon don ouvre-t-il droit à une réduction d\'impôt ?')}</span>
                            <i class="fa-solid fa-chevron-down text-mercy-green text-xs group-open:rotate-180 transition-transform"></i>
                        </summary>
                        <p class="text-xs text-gray-600 mt-2">${loc === 'en'
                            ? 'Yes. As a registered public-benefit humanitarian NGO, donations entitle donors to 66 % personal tax relief (up to 20 % of taxable income in France) and equivalent deductions across partner European jurisdictions.'
                            : (loc === 'de'
                                ? 'Ja. Als anerkannte gemeinnützige humanitäre Organisation berechtigt jede Spende zu den gesetzlichen Steuerabzügen für Spender in Europa (66 % in Frankreich und entsprechende steuerliche Anerkennung in Partnerländern).'
                                : 'Oui. En tant qu\'association reconnue d\'intérêt général, votre don ouvre droit à une réduction d\'impôt égale à 66 % du montant versé dans la limite de 20 % de votre revenu imposable.')}</p>
                    </details>

                    <details class="group p-4 rounded-2xl bg-mercy-surface border border-gray-200">
                        <summary class="font-extrabold text-mercy-black cursor-pointer list-none flex items-center justify-between">
                            <span>2. ${loc === 'en' ? 'Can I modify or pause my monthly donation at any time ?' : (loc === 'de' ? 'Kann ich meine monatliche Dauerspende jederzeit ändern ?' : 'Puis-je modifier ou suspendre mon don mensuel ?')}</span>
                            <i class="fa-solid fa-chevron-down text-mercy-green text-xs group-open:rotate-180 transition-transform"></i>
                        </summary>
                        <p class="text-xs text-gray-600 mt-2">${loc === 'en'
                            ? 'Absolutely, without any fees or notice, with a simple email to donateurs@mercyfriends.org or by phone at +33 (0)1 84 60 42 10.'
                            : (loc === 'de'
                                ? 'Selbstverständlich, jederzeit gebührenfrei und formlos per E-Mail an donateurs@mercyfriends.org oder telefonisch unter +33 (0)1 84 60 42 10.'
                                : 'Absolument, sans aucun frais ni justificatif, sur simple e-mail à donateurs@mercyfriends.org ou par téléphone au +33 (0)1 84 60 42 10.')}</p>
                    </details>

                    <details class="group p-4 rounded-2xl bg-mercy-surface border border-gray-200">
                        <summary class="font-extrabold text-mercy-black cursor-pointer list-none flex items-center justify-between">
                            <span>3. ${loc === 'en' ? 'How do you ensure funds directly reach local populations ?' : (loc === 'de' ? 'Wie wird sichergestellt, dass die Hilfe vor Ort ankommt ?' : 'Comment contrôlez-vous que l\'argent arrive sur le terrain ?')}</span>
                            <i class="fa-solid fa-chevron-down text-mercy-green text-xs group-open:rotate-180 transition-transform"></i>
                        </summary>
                        <p class="text-xs text-gray-600 mt-2">${loc === 'en'
                            ? 'Every project follows strict milestone disbursement agreements based on verified on-ground receipts, regional field coordinator inspections, and annual independent audits.'
                            : (loc === 'de'
                                ? 'Jedes Projekt unterliegt strengen Etappenzahlungen gegen reale Nachweise, Kontrollen unserer Regionalleiter und einer jährlichen externen Rechnungsprüfung.'
                                : 'Chaque projet fait l\'objet d\'une convention budgétaire stricte, de décaissements par tranches sur justificatifs terrain, et d\'un audit externe annuel indépendant.')}</p>
                    </details>
                </div>
            `
        );
    } else if (tab === 'statuts') {
        const title = loc === 'en' ? 'Association Statutes & Transparency Commitments' : (loc === 'de' ? 'Satzung & Transparenzverpflichtung' : 'Statuts de l\'Association & Engagements');
        const badge = loc === 'en' ? 'Official Governance' : (loc === 'de' ? 'Offizielle Satzung' : 'Gouvernance Officielle');
        openUniversalModal(
            badge,
            title,
            `
                <div class="space-y-4">
                    <p>${loc === 'en'
                        ? 'Formed as an independent non-profit association, <strong>Mercy Friends</strong> is strictly secular and non-partisan. Its statutory board members serve entirely pro bono.'
                        : (loc === 'de'
                            ? 'Als unabhängiger gemeinnütziger Verein ist <strong>Mercy Friends</strong> überparteilich und konfessionsunabhängig. Vorstandsmitglieder arbeiten vollständig ehrenamtlich.'
                            : 'Constituée en association à but non lucratif, <strong>Mercy Friends</strong> est strictement apolitique et non confessionnelle. Ses dirigeants statutaires exercent leur mandat à titre bénévole.')}</p>
                    <div class="p-4 rounded-2xl bg-mercy-soft border border-mercy-green/30">
                        <h4 class="font-extrabold text-mercy-black text-sm mb-2">${loc === 'en' ? 'Our Core Statutory Commitments :' : (loc === 'de' ? 'Unsere satzungsgemäßen Grundsätze :' : 'Nos Piliers Statutaires :')}</h4>
                        <ol class="list-decimal pl-5 space-y-1 text-xs text-mercy-darkGreen font-semibold">
                            <li>${loc === 'en' ? 'Strict impartiality based purely on human humanitarian needs.' : (loc === 'de' ? 'Strikte Unparteilichkeit ausschließlich nach humanitärer Bedürftigkeit.' : 'Impartialité de l\'aide fondée uniquement sur l\'urgence des besoins humains.')}</li>
                            <li>${loc === 'en' ? 'Administrative costs capped below 5 % (2.2 % achieved in 2026).' : (loc === 'de' ? 'Verwaltungskostenquote verbindlich unter 5 % (2,2 % im Jahr 2026).' : 'Frais administratifs statutairement plafonnés sous 5 % (2,2 % réalisés).')}</li>
                            <li>${loc === 'en' ? 'Mandatory co-design with local village committees and women leaders.' : (loc === 'de' ? 'Verbindliche Mitgestaltung mit Dorfgemeinschaften und Frauenkomitees.' : 'Co-construction obligatoire avec les représentants villageois locaux.')}</li>
                            <li>${loc === 'en' ? 'Open annual publication of certified accounts.' : (loc === 'de' ? 'Vollständige Veröffentlichung der geprüften Jahresabschlüsse.' : 'Publication intégrale annuelle du bilan certifié en libre accès.')}</li>
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
        showToast(t('ethics_len_err'), 'error');
        return;
    }
    const code = 'ETH-' + Math.floor(10000 + Math.random() * 90000);
    closeUniversalModal();
    showToast(t('ethics_success_toast', { code }), 'success');
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

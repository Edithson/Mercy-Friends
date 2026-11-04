import { getLocale } from './i18n.js';

const RAW_PROJECTS = [
    {
        id: 101,
        themeCategory: 'eau',
        statusCategory: 'ongoing',
        progress: 82,
        goal: '240,000 €',
        image: '/images/project-water.jpg',
        countries: { en: 'Cameroon', fr: 'Cameroun', de: 'Kamerun' },
        themes: { en: 'Water & WASH', fr: 'Eau & WASH', de: 'Wasser & WASH' },
        statuses: { en: 'In deployment', fr: 'En cours', de: 'Im Aufbau' },
        beneficiaries: { en: '48,000 villagers', fr: '48 000 villageois', de: '48.000 Dorfbewohner' },
        titles: {
            en: '120 Solar Boreholes & Women Water Committees in the Far North',
            fr: '120 Forages Solaires & Comités Féminins de l\'Eau dans l\'Extrême-Nord',
            de: '120 Solarbrunnen & Frauen-Wasserkomitees im Extremen Norden'
        },
        summaries: {
            en: 'Installation of autonomous solar-powered water towers across 32 rural villages, saving women and young girls up to 4 hours of water fetching daily.',
            fr: 'Installation de châteaux d\'eau solaires autonomes dans 32 villages ruraux, réduisant de 4 heures par jour la corvée d\'eau des femmes et des jeunes filles.',
            de: 'Installation autarker solarer Wassertürme in 32 Dörfern, wodurch Frauen und Mädchen täglich 4 Stunden Fußweg zum Wasserholen erspart werden.'
        },
        stories: {
            en: `
                <p>In Cameroon's Far North region, prolonged dry seasons leave traditional wells barren for more than 7 months, forcing families to walk miles for untreated water.</p>
                <h4 class="font-extrabold text-mercy-black mt-4 mb-1">Concrete actions undertaken :</h4>
                <ul class="list-disc pl-5 space-y-1">
                    <li>Drilling deeper than 80 meters into secure aquifers with battery-free solar pumps.</li>
                    <li>Constructing separated livestock troughs and half-hectare drip vegetable gardens at every borehole.</li>
                    <li>Technical training for 64 local women artisans and technicians for preventive maintenance.</li>
                </ul>
                <div class="p-4 rounded-xl bg-mercy-soft border border-mercy-green/30 mt-4 text-xs text-mercy-darkGreen">
                    <strong>Field testimony :</strong> "Since the clean water tap began flowing in our village, our children no longer suffer from dysentery and arrive at school on time each morning." (Fadimatou, President of the Village Water Management Committee)
                </div>
            `,
            fr: `
                <p>Dans la région de l'Extrême-Nord du Cameroun, la saison sèche assèche les puits traditionnels pendant plus de sept mois, obligeant les femmes et les enfants à parcourir plusieurs kilomètres pour puiser une eau impropre à la consommation.</p>
                <h4 class="font-extrabold text-mercy-black mt-4 mb-1">Ce que réalise concrètement le projet :</h4>
                <ul class="list-disc pl-5 space-y-1">
                    <li>Forage à plus de 80 mètres de profondeur dans la nappe protégée et installation de pompes photovoltaïques sans batterie.</li>
                    <li>Création d'abreuvoirs séparés pour le bétail et d'un demi-hectare de jardin maraîcher goutte-à-goutte autour de chaque point d'eau.</li>
                    <li>Formation technique de 64 artisanes et techniciens locaux pour la maintenance préventive.</li>
                </ul>
                <div class="p-4 rounded-xl bg-mercy-soft border border-mercy-green/30 mt-4 text-xs text-mercy-darkGreen">
                    <strong>Témoignage terrain :</strong> « Depuis que la borne-fontaine fonctionne au village, nos enfants ne souffrent plus de dysenterie et arrivent à l'heure à l'école chaque matin. » (Fadimatou, présidente du comité de gestion de l'eau)
                </div>
            `,
            de: `
                <p>Im extremen Norden Kameruns trocknen Brunnen während der Trockenzeit über sieben Monate lang aus, sodass Familien weite Wege zu verschmutzten Wasserstellen zurücklegen müssen.</p>
                <h4 class="font-extrabold text-mercy-black mt-4 mb-1">Was das Projekt konkret leistet :</h4>
                <ul class="list-disc pl-5 space-y-1">
                    <li>Bohrungen bis in über 80 Meter Tiefe zu geschützten Grundwasserschichten mit batterielosen Photovoltaikpumpen.</li>
                    <li>Anlage getrennter Viehtränken und eines halben Hektars Gemüsegarten mit Tröpfchenbewässerung an jeder Wasserstelle.</li>
                    <li>Praxisnahe Ausbildung von 64 Mechanikerinnen und Handwerkern für vorbeugende Wartung.</li>
                </ul>
                <div class="p-4 rounded-xl bg-mercy-soft border border-mercy-green/30 mt-4 text-xs text-mercy-darkGreen">
                    <strong>Stimme aus dem Einsatzgebiet :</strong> "Seit der saubere Brunnen im Dorf fließt, leiden unsere Kinder nicht mehr an Magenkrankheiten und sind morgens pünktlich in der Schule." (Fadimatou, Vorsitzende des Dorfkomitees)
                </div>
            `
        }
    },
    {
        id: 102,
        themeCategory: 'nutrition',
        statusCategory: 'urgent',
        progress: 68,
        goal: '310,000 €',
        image: '/images/project-nutrition.jpg',
        countries: { en: 'DR Congo', fr: 'RD Congo', de: 'DR Kongo' },
        themes: { en: 'Nutrition', fr: 'Nutrition', de: 'Ernährung' },
        statuses: { en: 'Active emergency', fr: 'Urgence active', de: 'Aktive Nothilfe' },
        beneficiaries: { en: '34,500 children & mothers', fr: '34 500 enfants & mères', de: '34.500 Mütter & Kinder' },
        titles: {
            en: 'Mobile Nutrition Clinics & Local Enriched Porridge in Kasai',
            fr: 'Unités Nutritionnelles Mobiles & Bouillies Enrichies Locales au Kasaï',
            de: 'Mobile Ernährungsstationen & Heimische Aufbaunahrung in Kasai'
        },
        summaries: {
            en: 'Early detection of severe acute child malnutrition and support for 14 cooperative workshops producing wholesome infant flours using regional maize, soy, and moringa.',
            fr: 'Dépistage précoce de la malnutrition infantile aiguë et appui à 14 ateliers coopératifs produisant des farines infantiles nutritives à base de maïs, soja et moringa locaux.',
            de: 'Früherkennung akuter Mangelernährung und Stärkung von 14 Genossenschaften zur Herstellung nährstoffreicher Babynahrung aus heimischem Mais, Soja und Moringa.'
        },
        stories: {
            en: `
                <p>To break the recurring cycle of childhood malnutrition in DR Congo, Mercy Friends pairs immediate free clinical care with local community food processing led by mothers.</p>
                <ul class="list-disc pl-5 space-y-1 mt-3">
                    <li>Weekly mobile clinic visits across 28 isolated rural healthcare catchment areas.</li>
                    <li>100% free therapeutic feeding and pediatric medical stabilization.</li>
                    <li>Vegetable gardening start-up kits provided to mothers upon successful child recovery.</li>
                </ul>
            `,
            fr: `
                <p>Pour briser durablement le cycle de la malnutrition infantile en RD Congo, Mercy Friends associe le soin médical gratuit immédiat à la fabrication locale d'aliments nutritifs par les mères elles-mêmes.</p>
                <ul class="list-disc pl-5 space-y-1 mt-3">
                    <li>Consultations hebdomadaires dans 28 aires de santé rurales enclavées.</li>
                    <li>Prise en charge gratuite à 100 % des enfants en malnutrition aiguë sévère.</li>
                    <li>Distribution de kits maraîchers riches en fer et vitamines aux familles suivies dès la guérison de l'enfant.</li>
                </ul>
            `,
            de: `
                <p>Um Mangelernährung in der DR Kongo wirksam zu überwinden, verbindet Mercy Friends kostenlose medizinische Behandlung mit lokaler Nahrungsproduktion durch Frauen.</p>
                <ul class="list-disc pl-5 space-y-1 mt-3">
                    <li>Wöchentliche Notfallvisiten in 28 abgelegenen ländlichen Gesundheitsbezirken.</li>
                    <li>Vollständig kostenlose therapeutische Begleitung bei schwerer Mangelernährung.</li>
                    <li>Vergabe von Gemüsesaatgut an Familien nach überstandener Behandlung zur Vorbeugung.</li>
                </ul>
            `
        }
    },
    {
        id: 103,
        themeCategory: 'agro',
        statusCategory: 'ongoing',
        progress: 91,
        goal: '185,000 €',
        image: '/images/project-agroforestry.jpg',
        countries: { en: 'Burkina Faso', fr: 'Burkina Faso', de: 'Burkina Faso' },
        themes: { en: 'Agroecology', fr: 'Agriculture', de: 'Landwirtschaft' },
        statuses: { en: 'In deployment', fr: 'En cours', de: 'Im Aufbau' },
        beneficiaries: { en: '27,000 farmers', fr: '27 000 producteurs', de: '27.000 Kleinbauern' },
        titles: {
            en: 'Agroecological Half-Moons & Farmer Seed Banks in the Sahel',
            fr: 'Demi-lunes Agroécologiques & Banques de Semences Paysannes au Sahel',
            de: 'Agroökologische Halbmoderungen & Saatgutbanken im Sahel'
        },
        summaries: {
            en: 'Restoring 3,400 hectares of hardened drylands through traditional rainwater harvesting structures and multiplication of local drought-resilient sorghum and millet seeds.',
            fr: 'Régénération de 3 400 hectares de terres encroûtées grâce aux techniques traditionnelles de retenue d\'eau de pluie et multiplication de semences paysannes de mil et sorgho.',
            de: 'Wiederbelebung von 3.400 Hektar ausgetrockneten Bodens durch traditionelle Wasserrückhaltetechniken und Vermehrung robuster Hirse- und Sorghumsorten.'
        },
        stories: {
            en: `
                <p>On crusted soils baked hard like concrete, building compost-enriched earth half-moons catches every drop of seasonal rains and doubles grain yields in the very first harvest.</p>
                <ul class="list-disc pl-5 space-y-1 mt-3">
                    <li>Community Cash-for-Work initiatives supporting families through seasonal lean periods.</li>
                    <li>Planting 45,000 soil-enriching trees (Acacia albida, shea, nere) in agricultural plots.</li>
                    <li>Creation of 12 community seed banks managed by local peasant collectives.</li>
                </ul>
            `,
            fr: `
                <p>Sur des sols devenus stériles et durs comme la pierre, creuser des demi-lunes enrichies en compost permet de capter les premières pluies et de doubler les rendements céréaliers dès la première récolte.</p>
                <ul class="list-disc pl-5 space-y-1 mt-3">
                    <li>Chantiers communautaires rémunérés (« Cash for Work ») pendant la période de soudure.</li>
                    <li>Plantation de 45 000 arbres fertilitaires (Acacia albida, karité, néré) dans les champs.</li>
                    <li>Création de 12 banques villageoises de semences gérées par les groupements paysans.</li>
                </ul>
            `,
            de: `
                <p>Auf steinharten Böden fangen kompostierte Erdwälle wertvolles Regenwasser auf und verdoppeln die Erträge bereits bei der ersten Ernte.</p>
                <ul class="list-disc pl-5 space-y-1 mt-3">
                    <li>Entlohnte Gemeinschaftsarbeit (Cash for Work) zur Überbrückung von Trockenzeiten.</li>
                    <li>Pflanzung von 45.000 fruchtbarkeitsfördernden Bäumen (Acacia albida, Shea, Nere).</li>
                    <li>Aufbau von 12 Saatgutlagern in Dorfgemeinschaftshand.</li>
                </ul>
            `
        }
    },
    {
        id: 104,
        themeCategory: 'urgence',
        statusCategory: 'urgent',
        progress: 54,
        goal: '450,000 €',
        image: '/images/project-education.jpg',
        countries: { en: 'Sudan & East Chad', fr: 'Soudan & Tchad Est', de: 'Sudan & Osttschad' },
        themes: { en: 'Emergency', fr: 'Urgence', de: 'Nothilfe' },
        statuses: { en: 'Active emergency', fr: 'Urgence active', de: 'Aktive Nothilfe' },
        beneficiaries: { en: '85,000 refugees', fr: '85 000 réfugiés', de: '85.000 Geflüchtete' },
        titles: {
            en: 'Emergency Water & Airbridge Lifelines for Displaced Families',
            fr: 'Pont Aérien & Hydraulique d\'Urgence pour les Familles Déplacées',
            de: 'Trinkwassernothilfe & Luftbrücke für geflüchtete Familien'
        },
        summaries: {
            en: 'Mobile water purification stations, dignity hygiene kits, and emergency survival food baskets for families forced to flee their homes.',
            fr: 'Stations de potabilisation d\'eau d\'urgence, kits d\'hygiène dignité et rations alimentaires de survie pour les familles ayant tout perdu.',
            de: 'Mobile Trinkwasseraufbereitung, Hygienesets und Notnahrungspakete für vertriebene Familien an der Grenze.'
        },
        stories: {
            en: `
                <p>Across overwhelmed refugee reception areas on the Chad-Sudan border, guaranteeing 15 liters of safe drinking water per person per day is an immediate matter of survival to prevent cholera.</p>
                <ul class="list-disc pl-5 space-y-1 mt-3">
                    <li>Deployment of mobile filtration and chlorination water purification units.</li>
                    <li>60-day food rations containing regional grains, pulses, fortified vegetable oil, and iodized salt.</li>
                    <li>Protected safe spaces providing nutritional stabilization for pregnant and nursing mothers.</li>
                </ul>
            `,
            fr: `
                <p>Dans les zones d'accueil saturées à la frontière tchado-soudanaise, l'accès à 15 litres d'eau potable par personne et par jour est une question de survie immédiate pour éviter le choléra.</p>
                <ul class="list-disc pl-5 space-y-1 mt-3">
                    <li>Déploiement de stations mobiles de filtration et chloration contrôlée.</li>
                    <li>Distribution de rations céréalières, légumineuses, huile enrichie et sel iodé pour 60 jours.</li>
                    <li>Espaces sécurisés d'écoute et de soutien nutritionnel pour les femmes enceintes et allaitantes.</li>
                </ul>
            `,
            de: `
                <p>In den Auffanglagern an der Grenze sichert Mercy Friends täglich 15 Liter sauberes Trinkwasser pro Kopf, um Choleraausbrüche wirksam zu verhindern.</p>
                <ul class="list-disc pl-5 space-y-1 mt-3">
                    <li>Einsatz mobiler Filter- und Chlorierungsstationen für Trinkwasser.</li>
                    <li>Verteilung von Grundnahrungsmitteln, Hülsenfrüchten und Speiseöl für jeweils 60 Tage.</li>
                    <li>Schutzräume zur Mütterberatung und Betreuung von Kleinkindern.</li>
                </ul>
            `
        }
    },
    {
        id: 105,
        themeCategory: 'education',
        statusCategory: 'ongoing',
        progress: 77,
        goal: '160,000 €',
        image: '/images/project-health.jpg',
        countries: { en: 'Madagascar', fr: 'Madagascar', de: 'Madagaskar' },
        themes: { en: 'Education', fr: 'Éducation', de: 'Bildung' },
        statuses: { en: 'In deployment', fr: 'En cours', de: 'Im Aufbau' },
        beneficiaries: { en: '14,200 students', fr: '14 200 élèves', de: '14.200 Schülerinnen & Schüler' },
        titles: {
            en: '100% Local School Canteens & Green Schools in the Deep South',
            fr: 'Cantines Scolaires 100 % Locales & Écoles Vertes dans le Grand Sud',
            de: '100 % Regionale Schulkantinen & Grüne Schulen im Süden'
        },
        summaries: {
            en: 'A balanced hot lunch every day in 38 rural primary schools, sourced directly from surrounding family smallholders.',
            fr: 'Un repas chaud équilibré chaque midi dans 38 écoles primaires rurales, approvisionné directement auprès des petits agriculteurs voisins.',
            de: 'Täglich ein warmes, nahrhaftes Mittagessen in 38 Grundschulen, geliefert von Kleinbauern aus den Nachbardörfern.'
        },
        stories: {
            en: `
                <p>During dry seasons in southern Madagascar, a hot school lunch is frequently a child's only wholesome meal of the day, averting school dropouts while providing steady revenues for local farmers.</p>
                <ul class="list-disc pl-5 space-y-1 mt-3">
                    <li>School attendance rates increased from 58% to 94% across supported educational centers.</li>
                    <li>Wood-saving stoves installed and classroom rainwater roof catchments connected to drinking tanks.</li>
                </ul>
            `,
            fr: `
                <p>Lors des périodes de sécheresse à Madagascar, la cantine scolaire représente souvent le seul repas complet de la journée pour les enfants, évitant le décrochage scolaire et offrant un débouché stable aux paysans.</p>
                <ul class="list-disc pl-5 space-y-1 mt-3">
                    <li>Taux d'assiduité scolaire passé de 58 % à 94 % dans les écoles soutenues.</li>
                    <li>Installation de cuisines économes en bois et de citernes de récupération d'eau de pluie sur les toits.</li>
                </ul>
            `,
            de: `
                <p>In Dürrezeiten ist das Schulessen oft die einzige warme Mahlzeit für Kinder. Es verhindert Schulabbrüche und sichert den Bauern verlässliche Einnahmen.</p>
                <ul class="list-disc pl-5 space-y-1 mt-3">
                    <li>Steigerung der regelmäßigen Schulanwesenheit von 58 % auf 94 %.</li>
                    <li>Holzsparende Küchen und Regenwassersammelsysteme an Schulgebäuden.</li>
                </ul>
            `
        }
    },
    {
        id: 106,
        themeCategory: 'agro',
        statusCategory: 'sustained',
        progress: 100,
        goal: '195,000 €',
        image: '/images/project-empowerment.jpg',
        countries: { en: 'Haiti', fr: 'Haïti', de: 'Haiti' },
        themes: { en: 'Agroecology', fr: 'Agriculture', de: 'Landwirtschaft' },
        statuses: { en: 'Sustained autonomy', fr: 'Pérennisé', de: 'Nachhaltig gesichert' },
        beneficiaries: { en: '19,800 inhabitants', fr: '19 800 habitants', de: '19.800 Bewohner' },
        titles: {
            en: 'Storm-Resilient Food Gardens & Family Cisterns in the Mountains',
            fr: 'Jardins Vivriers Anticycloniques & Citernes Familiales dans les Mornes',
            de: 'Sturmfeste Nutzgärten & Familien-Zisternen in den Berghängen'
        },
        summaries: {
            en: 'Program now fully self-managed by 9 Haitian peasant federations : erosion-control hillside terracing, root crop storage, and family water cisterns.',
            fr: 'Programme désormais autogéré par 9 organisations paysannes haïtiennes : terrasses anti-érosion, stockage de racines nutritives et citernes d\'eau.',
            de: 'Heute vollständig selbstverwaltet von 9 Kleinbauernvereinigungen: Terrassen gegen Bodenerosion, Wurzelgemüsespeicher und Zisternen.'
        },
        stories: {
            en: `
                <p>After 36 months of agricultural coaching and infrastructure handover, the 9 partner cooperatives operate in complete autonomy and mentor neighboring mountain communities.</p>
                <ul class="list-disc pl-5 space-y-1 mt-3">
                    <li>Watershed slope stabilization preventing dangerous mudslides during tropical hurricanes.</li>
                    <li>Revolving community seed and tool funds managed independently by local leaders.</li>
                </ul>
            `,
            fr: `
                <p>Après 36 mois d'accompagnement agronomique et matériel, les 9 coopératives partenaires fonctionnent aujourd'hui en totale autonomie financière et forment à leur tour les villages voisins.</p>
                <ul class="list-disc pl-5 space-y-1 mt-3">
                    <li>Protection des bassins versants contre les coulées de boue lors des tempêtes tropicales.</li>
                    <li>Fonds rotatif de semences et d'outils agricoles intégralement géré par la communauté.</li>
                </ul>
            `,
            de: `
                <p>Nach dreijähriger Begleitung wirtschaften die 9 bäuerlichen Genossenschaften eigenständig und geben ihr Wissen an Nachbardörfer weiter.</p>
                <ul class="list-disc pl-5 space-y-1 mt-3">
                    <li>Hangstabilisierung zum Schutz vor Schlammlawinen bei tropischen Stürmen.</li>
                    <li>Revolvierender Saatgut- und Werkzeugfonds in dörflicher Selbstverwaltung.</li>
                </ul>
            `
        }
    }
];

export function getLocalizedProjects(locale = getLocale()) {
    const loc = ['en', 'fr', 'de'].includes(locale) ? locale : 'en';
    return RAW_PROJECTS.map(p => ({
        id: p.id,
        themeCategory: p.themeCategory,
        statusCategory: p.statusCategory,
        progress: p.progress,
        goal: p.goal,
        image: p.image,
        country: p.countries[loc] || p.countries.en,
        theme: p.themes[loc] || p.themes.en,
        status: p.statuses[loc] || p.statuses.en,
        beneficiaries: p.beneficiaries[loc] || p.beneficiaries.en,
        title: p.titles[loc] || p.titles.en,
        summary: p.summaries[loc] || p.summaries.en,
        story: p.stories[loc] || p.stories.en,
    }));
}

export const PROJECTS_DATA = new Proxy([], {
    get(target, prop) {
        const data = getLocalizedProjects(getLocale());
        if (prop === 'length') return data.length;
        if (typeof prop === 'symbol' || !isNaN(prop)) return data[prop];
        if (typeof data[prop] === 'function') return data[prop].bind(data);
        return data[prop];
    }
});

import { getLocale } from './i18n.js';

const RAW_THEMES = [
    {
        id: 'nutrition',
        icon: 'fa-wheat-awn',
        titles: {
            en: 'Food Sovereignty & Child Nutrition',
            fr: 'Sécurité alimentaire & Nutrition',
            de: 'Ernährungssouveränität & Kindernahrung'
        },
        metrics: {
            en: '640,000 people assisted',
            fr: '640 000 personnes accompagnées',
            de: '640.000 Menschen unterstützt'
        },
        shortDescs: {
            en: 'Screening for acute child malnutrition, school feeding programs, and diversification of micronutrient-dense local crops.',
            fr: 'Dépistage de la malnutrition infantile, cantines scolaires locales et diversification des cultures vivrières riches en micronutriments.',
            de: 'Früherkennung von Mangelernährung bei Kleinkindern, Schulspeisung und Förderung nährstoffreicher heimischer Feldfrüchte.'
        },
        details: {
            en: `
                <p>Hidden hunger (deficiencies in iron, zinc, and vitamin A) irreversibly hinders young child development. Mercy Friends addresses both acute nutritional emergencies and sustainable local agriculture.</p>
                <ul class="list-disc pl-5 space-y-1.5 mt-3">
                    <li>Mobile screening units and therapeutic nutrition managed alongside district health centers.</li>
                    <li>School educational vegetable gardens and mother workshops on nutritious porridge using regional staples (moringa, cowpea, millet).</li>
                    <li>Hermetic village granaries reducing post-harvest grain losses by 60%.</li>
                </ul>
            `,
            fr: `
                <p>La faim silencieuse (carences en fer, vitamine A, zinc) menace durablement le développement des jeunes enfants. Mercy Friends agit à la fois sur l'urgence nutritionnelle et sur les systèmes vivriers locaux.</p>
                <ul class="list-disc pl-5 space-y-1.5 mt-3">
                    <li>Unités mobiles de dépistage et prise en charge nutritionnelle communautaire avec les centres de santé.</li>
                    <li>Jardins potagers scolaires et formation des mères à la préparation de bouillies enrichies à base de produits locaux (moringa, niébé, mil).</li>
                    <li>Stockage villageois sécurisé réduisant de 60 % les pertes post-récoltes.</li>
                </ul>
            `,
            de: `
                <p>Versteckter Mangel an lebenswichtigen Mikronährstoffen bedroht die gesunde Entwicklung von Kleinkindern. Mercy Friends verbindet akute Ernährungshilfe mit dem Ausbau lokaler Ernährungssysteme.</p>
                <ul class="list-disc pl-5 space-y-1.5 mt-3">
                    <li>Mobile Untersuchungsstationen und therapeutische Zusatzernährung in enger Kooperation mit Gesundheitszentren.</li>
                    <li>Schulgärten und Schulungen für Mütter zur Zubereitung nahrhafter Mahlzeiten aus heimischem Anbau (Moringa, Hirse, Bohnen).</li>
                    <li>Sichere Vorratsspeicher, die Nachernteverluste um bis zu 60 % verringern.</li>
                </ul>
            `
        }
    },
    {
        id: 'wash',
        icon: 'fa-hand-holding-droplet',
        titles: {
            en: 'Clean Water, Sanitation & Hygiene (WASH)',
            fr: 'Eau, Assainissement & Hygiène (WASH)',
            de: 'Trinkwasser, Sanitär & Hygiene (WASH)'
        },
        metrics: {
            en: '318 active solar boreholes & wells',
            fr: '318 puits & forages solaires actifs',
            de: '318 aktive Solarbrunnen & Wassernetze'
        },
        shortDescs: {
            en: 'Deep boreholes powered by solar energy, natural spring protection, ecological school latrines, and community water committees.',
            fr: 'Forages équipés de pompes solaires, protection des sources, latrines écologiques dans les écoles et comités de gestion de l\'eau.',
            de: 'Solarbetriebene Tiefbrunnen, Quellschutz, getrennte Schulsanitäranlagen und selbstverwaltete Wasserkomitees.'
        },
        details: {
            en: `
                <p>Without reliable clean water, food security cannot last : waterborne diseases represent one of the leading drivers of severe childhood malnutrition.</p>
                <ul class="list-disc pl-5 space-y-1.5 mt-3">
                    <li>Construction of deep solar-powered boreholes, eliminating fuel costs for rural villages.</li>
                    <li>Training local repair technicians and gender-balanced water management committees ensuring infrastructure longevity over 15 years.</li>
                    <li>Building separated hygiene blocks for boys and girls to boost teenage school attendance.</li>
                </ul>
            `,
            fr: `
                <p>Sans eau potable, aucune sécurité alimentaire n'est durable : les maladies hydriques sont une cause majeure de malnutrition aiguë.</p>
                <ul class="list-disc pl-5 space-y-1.5 mt-3">
                    <li>Réalisation de forages profonds fonctionnant à l'énergie solaire, sans coût de carburant pour les villages.</li>
                    <li>Formation d'artisans réparateurs locaux et de comités paritaires femmes-hommes garantissant la pérennité sur plus de 15 ans.</li>
                    <li>Construction de blocs sanitaires séparés filles/garçons favorisant le maintien des adolescentes à l'école.</li>
                </ul>
            `,
            de: `
                <p>Ohne sauberes Trinkwasser ist Ernährungssicherheit undenkbar: Durch Wasser übertragbare Krankheiten sind eine Hauptursache für akuten Hunger.</p>
                <ul class="list-disc pl-5 space-y-1.5 mt-3">
                    <li>Bau tiefer Solarbrunnen ganz ohne teuren Dieselkraftstoff für abgelegene Dörfer.</li>
                    <li>Schulung lokaler Mechaniker und paritätischer Komitees für die dauerhafte Instandhaltung.</li>
                    <li>Bau getrennter Sanitäranlagen an Schulen zur Förderung des Schulbesuchs von Mädchen.</li>
                </ul>
            `
        }
    },
    {
        id: 'urgence',
        icon: 'fa-kit-medical',
        titles: {
            en: 'Emergency Humanitarian Relief',
            fr: 'Aide humanitaire d\'urgence',
            de: 'Humanitäre Soforthilfe'
        },
        metrics: {
            en: 'Deployment within 72 hours',
            fr: 'Intervention en moins de 72 heures',
            de: 'Einsatzbereit in unter 72 Stunden'
        },
        shortDescs: {
            en: 'Immediate survival aid during droughts, floods, or conflict : emergency food rations, clean water trucking, and unconditional cash transfers.',
            fr: 'Secours vital immédiat lors de sécheresses, inondations ou déplacements forcés : vivres d\'urgence, eau potable et transferts monétaires.',
            de: 'Unmittelbare Überlebenshilfe bei Dürren, Überschwemmungen oder Vertreibung : Nahrungsmittel, Trinkwasser und Bargeldhilfen.'
        },
        details: {
            en: `
                <p>When natural disasters strike or violent conflicts displace communities, our prepositioned field teams and local partner NGOs intervene within 72 hours.</p>
                <ul class="list-disc pl-5 space-y-1.5 mt-3">
                    <li>High-energy food rations and certified clean drinking water delivery.</li>
                    <li>Direct digital cash transfers allowing families to buy essentials with dignity on local markets.</li>
                    <li>Rapid transition to agricultural recovery as soon as security conditions stabilize.</li>
                </ul>
            `,
            fr: `
                <p>Lorsqu'une catastrophe naturelle ou un conflit éclate, nos équipes de terrain et nos ONG partenaires nationales interviennent dans les premières 72 heures.</p>
                <ul class="list-disc pl-5 space-y-1.5 mt-3">
                    <li>Distributions alimentaires d'urgence et camions-citernes d'eau potable certifiée.</li>
                    <li>Transferts monétaires directs permettant aux familles déplacées d'acheter dignement sur les marchés locaux.</li>
                    <li>Transition rapide vers la relance agricole dès la stabilisation de la situation.</li>
                </ul>
            `,
            de: `
                <p>Bei Naturkatastrophen oder kriegerischen Konflikten reagieren unsere Einsatzteams und nationalen Partner vor Ort innerhalb von 72 Stunden.</p>
                <ul class="list-disc pl-5 space-y-1.5 mt-3">
                    <li>Verteilung therapeutischer Notrationen und Trinkwassertransporte per Tankwagen.</li>
                    <li>Direkte Bargeldhilfen, damit vertriebene Familien auf lokalen Märkten in Würde einkaufen können.</li>
                    <li>Nahtloser Übergang zum Wiederaufbau von Feldern, sobald sich die Lage beruhigt.</li>
                </ul>
            `
        }
    },
    {
        id: 'climat',
        icon: 'fa-cloud-sun-rain',
        titles: {
            en: 'Climate Justice & Resilience',
            fr: 'Justice climatique & Résilience',
            de: 'Klimagerechtigkeit & Resilienz'
        },
        metrics: {
            en: '42,000 hectares restored',
            fr: '42 000 hectares restaurés',
            de: '42.000 Hektar Land regeneriert'
        },
        shortDescs: {
            en: 'Early drought warning systems, community reforestation, anti-erosion stone bunds, and wood-saving improved cookstoves.',
            fr: 'Systèmes d\'alerte précoce sécheresse, reboisement communautaire, cordons pierreux anti-érosion et foyers améliorés.',
            de: 'Dürrefrühwarnsysteme, Aufforstung durch Dorfgemeinschaften, Steinwälle gegen Bodenerosion und sparsame Kochstellen.'
        },
        details: {
            en: `
                <p>Communities contributing least to global emissions bear the harshest consequences. Mercy Friends places climate adaptation at the core of all long-term programs.</p>
                <ul class="list-disc pl-5 space-y-1.5 mt-3">
                    <li>Improved ancestral techniques (Zai pits, half-moon catchments) that regreen degraded drylands in the Sahel.</li>
                    <li>Agrometeorological forecasts broadcast through community rural radios and mobile alerts to smallholders.</li>
                    <li>Clean cookstoves reducing household firewood consumption by 55% while eliminating toxic smoke.</li>
                </ul>
            `,
            fr: `
                <p>Les populations qui contribuent le moins au dérèglement climatique en subissent les impacts les plus sévères. Mercy Friends place l'adaptation climatique au cœur de chaque projet.</p>
                <ul class="list-disc pl-5 space-y-1.5 mt-3">
                    <li>Techniques traditionnelles améliorées (zaï, demi-lunes) reverdissant les sols encroûtés du Sahel.</li>
                    <li>Diffusion de bulletins agrométéorologiques par radio rurale et SMS aux paysans.</li>
                    <li>Foyers écologiques réduisant de 55 % la coupe de bois et les fumées nocives.</li>
                </ul>
            `,
            de: `
                <p>Die am wenigsten für Treibhausgase verantwortlichen Menschen leiden am stärksten unter den Dürren. Mercy Friends verankert Klimaanpassung in jedem Vorhaben.</p>
                <ul class="list-disc pl-5 space-y-1.5 mt-3">
                    <li>Traditionelle Methoden (Zai-Gruben, Halbmoderungen), um verkrustete Böden in der Sahelzone fruchtbar zu machen.</li>
                    <li>Agrometeorologische Wetterwarnungen über Dorfradio und SMS direkt an Landwirte.</li>
                    <li>Effiziente Holzsparöfen, die den Brennholzbedarf um 55 % senken und giftigen Rauch vermeiden.</li>
                </ul>
            `
        }
    },
    {
        id: 'agriculture',
        icon: 'fa-tractor',
        titles: {
            en: 'Sustainable Farming & Agroforestry',
            fr: 'Agriculture durable & Agroforesterie',
            de: 'Nachhaltige Landwirtschaft & Agroforst'
        },
        metrics: {
            en: '95 farmer cooperatives supported',
            fr: '95 coopératives paysannes soutenues',
            de: '95 bäuerliche Genossenschaften gestärkt'
        },
        shortDescs: {
            en: 'Native drought-resistant seed banks, organic composting, multi-strata cocoa agroforestry, and vegetable garden market linkages.',
            fr: 'Banques de semences paysannes résistantes, compostage organique, agroforesterie cacaoyère et maraîchage local.',
            de: 'Widerstandsfähiges Saatgut, Biokompostierung, nachhaltiger Agroforst und Anbindung an regionale Märkte.'
        },
        details: {
            en: `
                <p>We accompany family smallholders toward productive, climate-adapted agroecology that safeguards biodiversity while increasing household income.</p>
                <ul class="list-disc pl-5 space-y-1.5 mt-3">
                    <li>Establishment of open-pollinated, reproducible community seed banks adapted to low rainfall.</li>
                    <li>Integration of nitrogen-fixing and fruit trees within crop parcels (Cameroon, DR Congo, Madagascar, Haiti).</li>
                    <li>Support for local processing equipment (solar dryers, grain mills) to capture higher value for rural families.</li>
                </ul>
            `,
            fr: `
                <p>Nous accompagnons les petits exploitants familiaux vers une agroécologie productive, rentable et respectueuse de la biodiversité.</p>
                <ul class="list-disc pl-5 space-y-1.5 mt-3">
                    <li>Création de banques villageoises de semences libres et reproductibles adaptées au manque d'eau.</li>
                    <li>Association d'arbres fertilitaires et fruitiers dans les parcelles vivrières (Cameroun, RDC, Madagascar, Haïti).</li>
                    <li>Appui à la transformation artisanale (séchage solaire, moulins communautaires) augmentant les revenus des familles.</li>
                </ul>
            `,
            de: `
                <p>Wir begleiten bäuerliche Familienbetriebe auf dem Weg zu einer ertragreichen, artenreichen und klimaresistenten Landwirtschaft.</p>
                <ul class="list-disc pl-5 space-y-1.5 mt-3">
                    <li>Aufbau dorfeigener Saatgutbanken mit samenfesten Sorten, die mit wenig Regen auskommen.</li>
                    <li>Anpflanzung stickstoffbindender Schatten- und Obstbäume auf den Anbauflächen (Kamerun, DR Kongo, Madagaskar, Haiti).</li>
                    <li>Förderung lokaler Weiterverarbeitung (solare Trocknungsanlagen, Mühlen) für verlässliche Zusatzeinkommen.</li>
                </ul>
            `
        }
    },
    {
        id: 'education',
        icon: 'fa-graduation-cap',
        titles: {
            en: 'Education & Community Empowerment',
            fr: 'Éducation & Société civile',
            de: 'Bildung & Frauenförderung'
        },
        metrics: {
            en: '62% women among local community leaders',
            fr: '62 % de femmes parmi nos leaders locaux',
            de: '62 % Frauenanteil in Leitungsgremien'
        },
        shortDescs: {
            en: 'Functional literacy, vocational training for rural youth, women economic empowerment circles, and institutional coaching for local NGOs.',
            fr: 'Alphabétisation fonctionnelle, formation des jeunes ruraux, autonomisation des femmes et appui aux associations locales.',
            de: 'Grundbildung, landwirtschaftliche Jugendausbildung, Frauen-Sparvereine und Stärkung lokaler Hilfswerke.'
        },
        details: {
            en: `
                <p>Lasting transformation originates from within communities. Mercy Friends reinforces grassroots organizations so they can champion their rights and lead sustainable development.</p>
                <ul class="list-disc pl-5 space-y-1.5 mt-3">
                    <li>Village Savings and Loan Associations (VSLA) managed directly by rural women.</li>
                    <li>Vocational training centers in green agro-pastoral trades for out-of-school youth.</li>
                    <li>Governance, financial accounting, and project tracking training for national partner NGOs.</li>
                </ul>
            `,
            fr: `
                <p>Le changement durable s'enracine au cœur des communautés. Mercy Friends renforce les organisations locales afin qu'elles défendent leurs droits en toute autonomie.</p>
                <ul class="list-disc pl-5 space-y-1.5 mt-3">
                    <li>Associations Villageoises d'Épargne et de Crédit (AVEC) dirigées par les femmes rurales.</li>
                    <li>Centres d'apprentissage aux métiers agro-écologiques pour les jeunes déscolarisés.</li>
                    <li>Renforcement organisationnel et comptable des associations locales partenaires.</li>
                </ul>
            `,
            de: `
                <p>Nachhaltige Veränderung wächst aus den Dorfgemeinschaften selbst. Mercy Friends stärkt lokale Selbsthilfeorganisationen in ihrer Eigenständigkeit.</p>
                <ul class="list-disc pl-5 space-y-1.5 mt-3">
                    <li>Dörfliche Spar- und Kreditgruppen (VSLA), die eigenverantwortlich von Frauen geführt werden.</li>
                    <li>Ausbildungszentren für ökologische Landwirtschaft für Jugendliche ohne Schulabschluss.</li>
                    <li>Schulungen in Organisationsentwicklung und Finanzbuchhaltung für Partnerorganisationen vor Ort.</li>
                </ul>
            `
        }
    }
];

export function getLocalizedThemes(locale = getLocale()) {
    const loc = ['en', 'fr', 'de'].includes(locale) ? locale : 'en';
    return RAW_THEMES.map(th => ({
        id: th.id,
        icon: th.icon,
        title: th.titles[loc] || th.titles.en,
        metric: th.metrics[loc] || th.metrics.en,
        shortDesc: th.shortDescs[loc] || th.shortDescs.en,
        details: th.details[loc] || th.details.en,
    }));
}

export const THEMES_DATA = new Proxy([], {
    get(target, prop) {
        const data = getLocalizedThemes(getLocale());
        if (prop === 'length') return data.length;
        if (typeof prop === 'symbol' || !isNaN(prop)) return data[prop];
        if (typeof data[prop] === 'function') return data[prop].bind(data);
        return data[prop];
    }
});

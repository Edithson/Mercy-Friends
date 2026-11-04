import { getLocale } from './i18n.js';

const RAW_EMERGENCIES = [
    {
        cause: 'water',
        suggestedAmount: 50,
        titles: {
            en: 'Water & Drought Emergency across the Sahel',
            fr: 'Urgence Eau & Sécheresse au Sahel',
            de: 'Wasser- & Dürrenothilfe in der Sahelzone'
        },
        contents: {
            en: `
                <p>Across the Sahelian belt (Burkina Faso, Mali, Niger, northern Cameroon, and Chad), critical rainfall unpredictability leaves seasonal pools and shallow wells dry, immediately endangering harvest survival and local herds.</p>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 my-4">
                    <div class="p-3.5 rounded-xl bg-mercy-surface border border-gray-200"><strong class="block text-lg text-mercy-green">35 €</strong>Provides safe drinking water to 10 people for 6 months.</div>
                    <div class="p-3.5 rounded-xl bg-mercy-surface border border-gray-200"><strong class="block text-lg text-mercy-green">75 €</strong>Funds an efficient drip irrigation kit and climate-hardy seeds.</div>
                    <div class="p-3.5 rounded-xl bg-mercy-surface border border-gray-200"><strong class="block text-lg text-mercy-green">150 €</strong>Equips a durable village solar borehole.</div>
                </div>
                <p>Our water engineers and grassroots partners rehabilitate broken wellheads urgently and train local committees to maintain free or solidarity water access for the most vulnerable.</p>
            `,
            fr: `
                <p>Dans la bande sahélienne (Burkina Faso, Mali, Niger, Extrême-Nord Cameroun et Tchad), l'irrégularité critique des pluies assèche les mares et les puits de surface, menaçant directement les récoltes et la survie des troupeaux.</p>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 my-4">
                    <div class="p-3.5 rounded-xl bg-mercy-surface border border-gray-200"><strong class="block text-lg text-mercy-green">35 €</strong>Fournit de l'eau potable salubre à 10 personnes pendant 6 mois.</div>
                    <div class="p-3.5 rounded-xl bg-mercy-surface border border-gray-200"><strong class="block text-lg text-mercy-green">75 €</strong>Finance un kit d'irrigation économe et de semences résistantes.</div>
                    <div class="p-3.5 rounded-xl bg-mercy-surface border border-gray-200"><strong class="block text-lg text-mercy-green">150 €</strong>Participe à l'équipement solaire d'un forage villageois pérenne.</div>
                </div>
                <p>Nos ingénieurs hydrauliciens et partenaires locaux réhabilitent en urgence les points d'eau en panne et forment des comités villageois pour garantir un accès gratuit ou solidaire aux plus vulnérables.</p>
            `,
            de: `
                <p>In der gesamten Sahelzone (Burkina Faso, Mali, Niger, Nordkamerun und Tschad) trocknen unzuverlässige Niederschläge Flachbrunnen aus und bedrohen Ernten sowie Viehbestände.</p>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 my-4">
                    <div class="p-3.5 rounded-xl bg-mercy-surface border border-gray-200"><strong class="block text-lg text-mercy-green">35 €</strong>Sichert sauberes Trinkwasser für 10 Menschen über 6 Monate.</div>
                    <div class="p-3.5 rounded-xl bg-mercy-surface border border-gray-200"><strong class="block text-lg text-mercy-green">75 €</strong>Finanziert Tröpfchenbewässerung und hitzebeständiges Saatgut.</div>
                    <div class="p-3.5 rounded-xl bg-mercy-surface border border-gray-200"><strong class="block text-lg text-mercy-green">150 €</strong>Hilft bei der Solarausrüstung eines dauerhaften Dorfbrunnens.</div>
                </div>
                <p>Unsere Wasseringenieure und Partner vor Ort setzen Brunnen instand und schulen Dorfausschüsse für eine verlässliche Trinkwasserversorgung.</p>
            `
        }
    },
    {
        cause: 'nutrition',
        suggestedAmount: 50,
        titles: {
            en: 'Emergency Nutrition Support for Displaced Children',
            fr: 'Soutien nutritionnel aux enfants déplacés',
            de: 'Therapeutische Nahrung für geflüchtete Kinder'
        },
        contents: {
            en: `
                <p>Forced displacement in Sudan, eastern DR Congo, and the central Sahel cuts off hundreds of thousands of farming families from their fields. Children under five suffer first from severe acute malnutrition.</p>
                <p class="mt-2"><strong>With 50 EUR</strong>, Mercy Friends provides the complete therapeutic nutritional treatment of a child for 6 weeks until full clinical recovery, including medical follow-up.</p>
            `,
            fr: `
                <p>Les déplacements forcés au Soudan, dans l'Est de la RD Congo et au Sahel coupent des centaines de milliers de familles de leurs champs et de tout revenu. Les enfants de moins de 5 ans sont les premiers frappés par la malnutrition aiguë.</p>
                <p class="mt-2"><strong>Avec 50 €</strong>, Mercy Friends assure le traitement nutritionnel thérapeutique complet d'un enfant pendant 6 semaines jusqu'à son rétablissement complet, incluant le suivi médical.</p>
            `,
            de: `
                <p>Vertreibungen im Sudan, im Osten der DR Kongo und im Sahel trennen Familien von ihren Feldern. Kleinkinder unter fünf Jahren sind am stärksten von akuter Mangelernährung bedroht.</p>
                <p class="mt-2"><strong>Mit 50 EUR</strong> sichert Mercy Friends die sechswöchige therapeutische Nahrungsmittelbehandlung eines Kindes bis zur vollständigen Genesung inklusive ärztlicher Begleitung.</p>
            `
        }
    },
    {
        cause: 'agro',
        suggestedAmount: 100,
        titles: {
            en: 'Village Agroecology in Cameroon and DR Congo',
            fr: 'Agroécologie villageoise au Cameroun et en RDC',
            de: 'Bäuerliche Agroforstwirtschaft in Kamerun und DR Kongo'
        },
        contents: {
            en: `
                <p>To overcome hunger durably while preserving the Congo Basin forests, Mercy Friends assists 42 peasant and women cooperatives in Cameroon and DR Congo in food-producing agroforestry.</p>
                <p class="mt-2">Families combine cassava, plantain, peanuts, fruit trees, and shade-grown cocoa, securing both daily household food and dependable income for children's schooling.</p>
            `,
            fr: `
                <p>Pour vaincre durablement la faim sans détruire le bassin forestier du Congo, Mercy Friends accompagne 42 coopératives paysannes et féminines au Cameroun et en RDC dans l'agroforesterie vivrière.</p>
                <p class="mt-2">Les familles associent manioc, plantain, arachide, arbres fruitiers et cacaoyers d'ombrage, garantissant à la fois la nourriture quotidienne du foyer et un revenu digne pour scolariser les enfants.</p>
            `,
            de: `
                <p>Um Hunger dauerhaft zu besiegen und gleichzeitig die Wälder des Kongobeckens zu schützen, unterstützt Mercy Friends 42 Kleinbauern- und Frauenkooperativen in Kamerun und der DR Kongo.</p>
                <p class="mt-2">Familien pflanzen Maniok, Kochbananen, Erdnüsse, Obstbäume und Schattenkakao. Dies sichert die tägliche Mahlzeit und verlässliche Einnahmen für Schulgebühren.</p>
            `
        }
    }
];

export function getLocalizedEmergencies(locale = getLocale()) {
    const loc = ['en', 'fr', 'de'].includes(locale) ? locale : 'en';
    return RAW_EMERGENCIES.map(e => ({
        cause: e.cause,
        suggestedAmount: e.suggestedAmount,
        title: e.titles[loc] || e.titles.en,
        content: e.contents[loc] || e.contents.en,
    }));
}

export const EMERGENCIES_DATA = new Proxy([], {
    get(target, prop) {
        const data = getLocalizedEmergencies(getLocale());
        if (prop === 'length') return data.length;
        if (typeof prop === 'symbol' || !isNaN(prop)) return data[prop];
        if (typeof data[prop] === 'function') return data[prop].bind(data);
        return data[prop];
    }
});

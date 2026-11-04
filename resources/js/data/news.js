import { getLocale } from './i18n.js';

const RAW_NEWS = [
    {
        dates: {
            en: 'October 28, 2026 . Official Press Release',
            fr: '28 Octobre 2026 . Communiqué Officiel',
            de: '28. Oktober 2026 . Offizielle Pressemitteilung'
        },
        titles: {
            en: '2026 Food Resilience Index : Local Agroecology Proves Resilience Against Climate Shocks',
            fr: 'Baromètre 2026 de la Résilience Alimentaire : L\'agroécologie locale prouve son efficacité face aux chocs climatiques',
            de: 'Ernährungsbarometer 2026 : Lokale Agroökologie beweist Wirksamkeit gegen Klimafolgen'
        },
        bodies: {
            en: `
                <p>Released this month by the agronomic research teams of <strong>Mercy Friends</strong>, the 2026 Food Resilience Index compiles field data across 48,000 rural households in 14 countries.</p>
                <p class="mt-3">The finding is decisive : when humanitarian financing directly supports community seed banks, solar irrigation, and traditional soil conservation, <strong>the length of the hunger season decreases by 62% within three years</strong>.</p>
                <blockquote class="border-l-4 border-mercy-green pl-4 py-1 my-4 italic text-gray-800 bg-mercy-surface rounded-r-xl">
                    "There is no lasting peace without food sovereignty. Investing one euro in smallholder autonomy today prevents seven euros of costly emergency aid tomorrow." (Dr. Amina Ndongo, President of Mercy Friends)
                </blockquote>
            `,
            fr: `
                <p>Présenté ce mois-ci par les équipes agronomiques de <strong>Mercy Friends</strong>, le Baromètre 2026 compile les données récoltées auprès de 48 000 ménages ruraux suivis dans 14 pays d'Afrique et des Caraïbes.</p>
                <p class="mt-3">Le constat est sans appel : lorsque les financements humanitaires soutiennent directement les banques de semences locales, les forages solaires et la conservation des sols, <strong>la durée de la période de soudure alimentaire diminue de 62 % en trois ans</strong>.</p>
                <blockquote class="border-l-4 border-mercy-green pl-4 py-1 my-4 italic text-gray-800 bg-mercy-surface rounded-r-xl">
                    « Il n'y a pas de sécurité durable sans sécurité alimentaire. Investir un euro dans l'autonomie paysanne aujourd'hui permet d'économiser sept euros d'aide d'urgence demain. » (Dr. Amina Ndongo, Présidente de Mercy Friends)
                </blockquote>
            `,
            de: `
                <p>Das von den Agrarteams von <strong>Mercy Friends</strong> veröffentlichte Ernährungsbarometer 2026 stützt sich auf Erhebungen bei 48.000 bäuerlichen Haushalten in 14 Einsatzländern.</p>
                <p class="mt-3">Das Ergebnis ist eindeutig : Wenn Hilfsgelder direkt in Saatgutbanken, Solarbrunnen und Bodenschutz fließen, <strong>verkürzt sich die Hungerzeit innerhalb von drei Jahren um 62 %</strong>.</p>
                <blockquote class="border-l-4 border-mercy-green pl-4 py-1 my-4 italic text-gray-800 bg-mercy-surface rounded-r-xl">
                    "Es gibt keinen dauerhaften Frieden ohne Ernährungssicherheit. Ein Euro, der heute in bäuerliche Selbstständigkeit investiert wird, erspart morgen sieben Euro an teurer Nothilfe." (Dr. Amina Ndongo, Präsidentin von Mercy Friends)
                </blockquote>
            `
        }
    },
    {
        dates: {
            en: 'October 15, 2026 . Field Report',
            fr: '15 Octobre 2026 . Reportage Terrain',
            de: '15. Oktober 2026 . Einsatzbericht'
        },
        titles: {
            en: 'Cameroon & DR Congo : 18 Women Cooperatives Transform Village Agriculture',
            fr: 'Cameroun & RDC : 18 coopératives féminines transforment l\'agriculture villageoise',
            de: 'Kamerun & DR Kongo : 18 Frauenkooperativen stärken die dörfliche Landwirtschaft'
        },
        bodies: {
            en: `
                <p>In Cameroon's Central region and South Kivu in DR Congo, women cultivate almost 75% of domestic food crops, but historically lacked modern processing tools and dry storage.</p>
                <p class="mt-3">With solar grain mills, hygienic dryers, and revolving credit facilities established through Mercy Friends, 1,450 women farmers now market fortified flour directly to rural school canteens and district health centers.</p>
            `,
            fr: `
                <p>Dans la région du Centre au Cameroun comme au Sud-Kivu en RDC, les femmes produisent près de 75 % des cultures vivrières familiales, mais manquaient jusqu'ici d'équipements de transformation et de stockage.</p>
                <p class="mt-3">Grâce aux moulins solaires, séchoirs hygiéniques et fonds de roulement mis en place avec Mercy Friends, 1 450 agricultrices commercialisent désormais des farines enrichies directement auprès des cantines scolaires et des centres de santé voisins.</p>
            `,
            de: `
                <p>In Zentral-Kamerun und in Süd-Kivu erwirtschaften Frauen rund 75 % der familiären Nahrung, verfügten jedoch bislang kaum über Verarbeitungsgeräte.</p>
                <p class="mt-3">Dank solarer Mühlen, Trocknungsanlagen und revolvierender Fonds vermarkten 1.450 Bäuerinnen angereichertes Getreidemehl heute direkt an Schulkantinen und Spitäler.</p>
            `
        }
    }
];

export function getLocalizedNews(locale = getLocale()) {
    const loc = ['en', 'fr', 'de'].includes(locale) ? locale : 'en';
    return RAW_NEWS.map(n => ({
        date: n.dates[loc] || n.dates.en,
        title: n.titles[loc] || n.titles.en,
        body: n.bodies[loc] || n.bodies.en,
    }));
}

export const NEWS_ARTICLES = new Proxy([], {
    get(target, prop) {
        const data = getLocalizedNews(getLocale());
        if (prop === 'length') return data.length;
        if (typeof prop === 'symbol' || !isNaN(prop)) return data[prop];
        if (typeof data[prop] === 'function') return data[prop].bind(data);
        return data[prop];
    }
});

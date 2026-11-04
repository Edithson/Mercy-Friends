import { getLocale } from './i18n.js';

const RAW_EVENTS = [
    {
        dates: {
            en: 'November 19, 2026 . 6:30 PM - 8:30 PM (CET)',
            fr: '19 Novembre 2026 . 18h30 - 20h30 (CET)',
            de: '19. November 2026 . 18:30 - 20:30 Uhr (MEZ)'
        },
        titles: {
            en: 'Water & Climate Forum : Securing Village Solar Water Systems by 2030',
            fr: 'Forum Eau & Climat : Sécuriser les points d\'eau villageois d\'ici 2030',
            de: 'Wasser- & Klimaforum : Solare Dorfbrunnen bis 2030 sichern'
        },
        bodies: {
            en: `
                <p><strong>Location :</strong> Maison des Solidarites (Paris 11th) and interactive live broadcast.</p>
                <p class="mt-2">Our water engineers live from Yaounde, Ouagadougou, and Toliara will present empirical outcomes from solar pumping networks managed directly by rural communities, followed by an open Q&A session.</p>
                <p class="mt-3 text-xs font-bold text-mercy-darkGreen">Free registration ! Use the contact form to receive your secure live link.</p>
            `,
            fr: `
                <p><strong>Lieu :</strong> Maison des Solidarités (Paris 11e) et retransmission en direct interactive.</p>
                <p class="mt-2">Nos coordinateurs hydrauliciens en direct de Yaoundé, Ouagadougou et Tuléar présenteront les résultats des stations de pompage solaire gérées par les communautés rurales, suivis d'une séance de questions-réponses avec nos donateurs et partenaires.</p>
                <p class="mt-3 text-xs font-bold text-mercy-darkGreen">Entrée libre ! Utilisez le formulaire de contact pour recevoir votre lien de connexion.</p>
            `,
            de: `
                <p><strong>Ort :</strong> Maison des Solidarites (Paris) und interaktiver Livestream.</p>
                <p class="mt-2">Unsere leitenden Wasseringenieure aus Jaunde, Ouagadougou und Toliara präsentieren Ergebnisse solarer Wassernetze in Gemeinschaftshand, gefolgt von einer Fragerunde.</p>
                <p class="mt-3 text-xs font-bold text-mercy-darkGreen">Freier Zugang ! Nutzen Sie unser Kontaktformular, um den Livestream-Link zu erhalten.</p>
            `
        }
    },
    {
        dates: {
            en: 'December 05, 2026 . 10:00 AM - 5:00 PM',
            fr: '05 Décembre 2026 . 10h00 - 17h00',
            de: '05. Dezember 2026 . 10:00 - 17:00 Uhr'
        },
        titles: {
            en: 'Mercy Friends Open House : Becoming a Volunteer or Solidarity Ambassador',
            fr: 'Journée Portes Ouvertes Mercy Friends : Devenir bénévole ou ambassadeur',
            de: 'Tag der offenen Tür : Mercy Friends Botschafter werden'
        },
        bodies: {
            en: `
                <p>On International Volunteer Day, come meet our operational teams, discover our audited project control systems, and join a regional Mercy Friends support circle (educational outreach, translation, solidarity campaigns).</p>
            `,
            fr: `
                <p>À l'occasion de la Journée mondiale du bénévolat, venez rencontrer nos équipes, découvrir comment sont contrôlés nos projets et rejoindre un groupe local Mercy Friends (sensibilisation dans les écoles, événements solidaires, traduction).</p>
            `,
            de: `
                <p>Lernen Sie zum Internationalen Tag des Ehrenamts unsere Teams kennen, erfahren Sie mehr über die Qualitätskontrolle unserer Projekte und engagieren Sie sich in Ihrer Region.</p>
            `
        }
    }
];

export function getLocalizedEvents(locale = getLocale()) {
    const loc = ['en', 'fr', 'de'].includes(locale) ? locale : 'en';
    return RAW_EVENTS.map(ev => ({
        date: ev.dates[loc] || ev.dates.en,
        title: ev.titles[loc] || ev.titles.en,
        body: ev.bodies[loc] || ev.bodies.en,
    }));
}

export const EVENTS_DATA = new Proxy([], {
    get(target, prop) {
        const data = getLocalizedEvents(getLocale());
        if (prop === 'length') return data.length;
        if (typeof prop === 'symbol' || !isNaN(prop)) return data[prop];
        if (typeof data[prop] === 'function') return data[prop].bind(data);
        return data[prop];
    }
});

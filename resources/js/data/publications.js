import { getLocale } from './i18n.js';

const RAW_PUBLICATIONS = [
    {
        titles: {
            en: 'Mercy Friends 2025-2026 Impact Report & Certified Financial Statements',
            fr: 'Rapport d\'Impact & Comptes Certifiés Mercy Friends 2025-2026',
            de: 'Mercy Friends Wirkungsbericht & Geprüfter Jahresabschluss 2025-2026'
        },
        metas: {
            en: 'Official Annual Report . 68 pages . Certified by Independent Auditors',
            fr: 'Publication annuelle officielle . 68 pages . Certifié sans réserve',
            de: 'Offizieller Jahresbericht . 68 Seiten . Ohne Vorbehalt bestätigt'
        },
        summaries: {
            en: `
                <p>This benchmark document details the origin and deployment of all financial resources entrusted to Mercy Friends :</p>
                <ul class="list-disc pl-5 space-y-1.5 mt-3">
                    <li><strong>Total committed budget :</strong> 41.2 million EUR (individual donors, foundations, and public co-financing).</li>
                    <li><strong>Field efficiency ratio :</strong> 90.0% directly assigned to field operations + 3.2% technical field supervision.</li>
                    <li><strong>148 audited missions</strong> across 24 countries reaching 1.84 million beneficiaries.</li>
                </ul>
            `,
            fr: `
                <p>Ce document de référence détaille l'origine et l'emploi de l'ensemble des ressources de l'association Mercy Friends :</p>
                <ul class="list-disc pl-5 space-y-1.5 mt-3">
                    <li><strong>Budget global engagé :</strong> 41,2 millions d'euros (dons privés, fondations et cofinancements publics).</li>
                    <li><strong>Ratio d'efficience :</strong> 90,0 % affectés directement aux projets terrain + 3,2 % d'accompagnement technique local.</li>
                    <li><strong>148 projets audités</strong> dans 24 pays pour 1,8 million de bénéficiaires directs.</li>
                </ul>
            `,
            de: `
                <p>Dieser Rechenschaftsbericht dokumentiert detailliert Herkunft und Einsatz aller Mittel von Mercy Friends :</p>
                <ul class="list-disc pl-5 space-y-1.5 mt-3">
                    <li><strong>Eingesetztes Gesamtbudget :</strong> 41,2 Millionen EUR (Spenden, Stiftungen und öffentliche Zuschüsse).</li>
                    <li><strong>Effizienzquote :</strong> 90,0 % fließen direkt in Hilfsprojekte + 3,2 % in technische Begleitung vor Ort.</li>
                    <li><strong>148 geprüfte Hilfsprojekte</strong> in 24 Ländern mit 1,84 Millionen Begünstigten.</li>
                </ul>
            `
        }
    },
    {
        titles: {
            en: 'Strategic Policy Brief : Seed Sovereignty & Climate Adaptation',
            fr: 'Note Stratégique : Souveraineté Semencière & Adaptation Climatique',
            de: 'Strategiepapier : Saatgutsouveränität & Anpassung an den Klimawandel'
        },
        metas: {
            en: 'Agronomic Research Paper #4 . October 2026',
            fr: 'Cahier agronomique #4 . Octobre 2026',
            de: 'Agrarwissenschaftliche Reihe #4 . Oktober 2026'
        },
        summaries: {
            en: `
                <p>Empirical synthesis drafted by our field agronomists demonstrating the superiority of diversified traditional peasant crop varieties under severe drought episodes, accompanied by policy recommendations for international donors.</p>
            `,
            fr: `
                <p>Synthèse technique rédigée par nos agronomes de terrain démontrant la supériorité des variétés paysannes diversifiées face aux épisodes de sécheresse soudaine, accompagnée de recommandations pour les bailleurs internationaux.</p>
            `,
            de: `
                <p>Praxisleitfaden unserer Agraringenieure zum Nachweis der überlegenen Widerstandskraft heimischer Saatgutsorten bei Dürreperioden mit Handlungsempfehlungen für internationale Geber.</p>
            `
        }
    },
    {
        titles: {
            en: 'Humanitarian Code of Conduct & Safeguarding Framework',
            fr: 'Code de Conduite Humanitaire & Politique de Sauvegarde',
            de: 'Humanitärer Verhaltenskodex & Kinderschutzrichtlinie'
        },
        metas: {
            en: 'Mandatory Ethics Framework . 2026 Edition',
            fr: 'Référentiel éthique obligatoire . Édition 2026',
            de: 'Verbindlicher Ethik-Standard . Ausgabe 2026'
        },
        summaries: {
            en: `
                <p>Signed by 100% of staff, field volunteers, local vendors, and partner organizations, this mandatory charter enforces strict zero tolerance toward fraud, discrimination, sexual exploitation, and abuse of power.</p>
            `,
            fr: `
                <p>Signé par 100 % des salariés, bénévoles, fournisseurs et ONG partenaires de Mercy Friends, ce code garantit une tolérance zéro envers toute forme de fraude, de discrimination, d'exploitation ou d'abus de pouvoir.</p>
            `,
            de: `
                <p>Von ausnahmslos allen Mitarbeitern, Ehrenamtlichen und Partnern unterzeichnete Richtlinie mit verbindlicher Null-Toleranz-Garantie gegen Betrug, Diskriminierung und Machtmissbrauch.</p>
            `
        }
    }
];

export function getLocalizedPublications(locale = getLocale()) {
    const loc = ['en', 'fr', 'de'].includes(locale) ? locale : 'en';
    return RAW_PUBLICATIONS.map(pub => ({
        title: pub.titles[loc] || pub.titles.en,
        meta: pub.metas[loc] || pub.metas.en,
        summary: pub.summaries[loc] || pub.summaries.en,
    }));
}

export const PUBLICATIONS_DATA = new Proxy([], {
    get(target, prop) {
        const data = getLocalizedPublications(getLocale());
        if (prop === 'length') return data.length;
        if (typeof prop === 'symbol' || !isNaN(prop)) return data[prop];
        if (typeof data[prop] === 'function') return data[prop].bind(data);
        return data[prop];
    }
});

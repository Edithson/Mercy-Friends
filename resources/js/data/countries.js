import { getLocale } from './i18n.js';

const RAW_COUNTRIES = [
    // --- AFRICA (14 Countries) ---
    {
        id: 'cm',
        region: 'afrique',
        center: { x: 437.6, y: 512.8 },
        projects: 19,
        budget: '4.8 M €',
        people: '245,000',
        flag: '🇨🇲',
        names: { en: 'Cameroon', fr: 'Cameroun', de: 'Kamerun' },
        regionLabels: { en: 'Central Africa', fr: 'Afrique Centrale', de: 'Zentralafrika' },
        focus: {
            en: 'Solar boreholes, village agroforestry (Far North & East), women cooperatives',
            fr: 'Agroforesterie villageoise, forages solaires (Extrême-Nord & Est), coopératives féminines',
            de: 'Solarbrunnen, dörfliche Agroforstwirtschaft (Extremer Norden & Osten), Frauenkooperativen'
        },
        context: {
            en: 'In Cameroon, Mercy Friends supports communities facing severe climate pressure around Lake Chad and agricultural basins in the East with solar water towers, school canteens, and child nutrition clinics.',
            fr: 'Au Cameroun, Mercy Friends accompagne les communautés de l\'Extrême-Nord confrontées à l\'aridité du lac Tchad ainsi que les bassins agricoles de l\'Est avec des châteaux d\'eau photovoltaïques, des cantines scolaires et des unités de nutrition infantile.',
            de: 'In Kamerun unterstützt Mercy Friends Gemeinden im extremen Norden am Tschadsee sowie landwirtschaftliche Regionen im Osten mit solarbetriebenen Wassertürmen, Schulkantinen und Ernährungszentren für Kinder.'
        }
    },
    {
        id: 'cd',
        region: 'afrique',
        center: { x: 460.8, y: 542.2 },
        projects: 22,
        budget: '8.4 M €',
        people: '390,000',
        flag: '🇨🇩',
        names: { en: 'DR Congo', fr: 'RD Congo', de: 'DR Kongo' },
        regionLabels: { en: 'Central Africa', fr: 'Afrique Centrale', de: 'Zentralafrika' },
        focus: {
            en: 'Nutritional emergency, clean water/WASH, agricultural recovery in Kivu and Kasai',
            fr: 'Urgence nutritionnelle, Eau/WASH, relance agricole au Kivu et Kasaï',
            de: 'Ernährungsnothilfe, sauberes Trinkwasser (WASH), Wiederaufbau der Landwirtschaft in Kivu und Kasai'
        },
        context: {
            en: 'Despite immense agricultural potential, insecurity and displacement thrust hundreds of thousands into acute hunger. Our teams deliver life-saving therapeutic nutrition and restore sustainable food crops.',
            fr: 'Malgré un potentiel agricole immense, l\'insécurité et les déplacements de population plongent des centaines de milliers de familles dans la faim aiguë. Nos équipes assurent des soins thérapeutiques gratuits et la relance de cultures vivrières pérennes.',
            de: 'Trotz riesigen landwirtschaftlichen Potenzials stürzen Unsicherheit und Vertreibung Hunderttausende Familien in akuten Hunger. Unsere Teams leisten kostenlose therapeutische Hilfe und beleben die nachhaltige Nahrungsmittelproduktion.'
        }
    },
    {
        id: 'cf',
        region: 'afrique',
        center: { x: 458.6, y: 513.8 },
        projects: 11,
        budget: '3.2 M €',
        people: '115,000',
        flag: '🇨🇫',
        names: { en: 'Central African Republic', fr: 'République Centrafricaine', de: 'Zentralafrikanische Republik' },
        regionLabels: { en: 'Central Africa', fr: 'Afrique Centrale', de: 'Zentralafrika' },
        focus: {
            en: 'Water point rehabilitation, emergency child nutrition, community seed banks',
            fr: 'Réhabilitation de points d\'eau, nutrition infantile d\'urgence, banques de semences vivrières',
            de: 'Instandsetzung von Brunnen, Noternährung für Kinder, dörfliche Saatgutbanken'
        },
        context: {
            en: 'In CAR, our teams rehabilitate village wells and assist returning smallholder farmers in Ouham and Kemo to reestablish cassava, maize, and peanut harvests.',
            fr: 'En Centrafrique, nos équipes réhabilitent les puits villageois et appuient les petits producteurs retournés dans l\'Ouham et la Kémo afin de reconstituer les récoltes de manioc, maïs et arachide.',
            de: 'In Zentralafrika setzt Mercy Friends Dorfbrunnen instand und unterstützt rückkehrende Kleinbauern in Ouham und Kemo bei der Wiederaufnahme des Anbaus von Maniok, Mais und Erdnüssen.'
        }
    },
    {
        id: 'bf',
        region: 'afrique',
        center: { x: 403.5, y: 499.7 },
        projects: 15,
        budget: '5.6 M €',
        people: '185,000',
        flag: '🇧🇫',
        names: { en: 'Burkina Faso', fr: 'Burkina Faso', de: 'Burkina Faso' },
        regionLabels: { en: 'West Africa', fr: 'Afrique de l\'Ouest', de: 'Westafrika' },
        focus: {
            en: 'Rural hydraulics, soil restoration (Zai pits), aid for internally displaced families',
            fr: 'Hydraulique villageoise, régénération des sols encroûtés (Zaï), soutien aux déplacés',
            de: 'Ländliche Wasserversorgung, Bodenregeneration (Zai-Technik), Nothilfe für Binnenvertriebene'
        },
        context: {
            en: 'Facing internal displacements and Sahelian droughts, Mercy Friends secures clean drinking water and trains farmers in ancestral soil and water conservation techniques.',
            fr: 'Face aux déplacements internes et aux sécheresses du Sahel, Mercy Friends sécurise l\'approvisionnement en eau potable et forme les agriculteurs aux techniques traditionnelles de conservation des eaux et des sols.',
            de: 'Angesichts von Vertreibung und Dürren in der Sahelzone sichert Mercy Friends die Trinkwasserversorgung und schult Bauern in traditionellen Wasserspartechniken.'
        }
    },
    {
        id: 'ml',
        region: 'afrique',
        center: { x: 397.3, y: 486.9 },
        projects: 14,
        budget: '4.9 M €',
        people: '160,000',
        flag: '🇲🇱',
        names: { en: 'Mali', fr: 'Mali', de: 'Mali' },
        regionLabels: { en: 'West Africa', fr: 'Afrique de l\'Ouest', de: 'Westafrika' },
        focus: {
            en: 'Solar irrigation in Mopti and Segou, drought-tolerant grain production, school feeding',
            fr: 'Irrigation solaire à Mopti et Ségou, filières céréalières résilientes, cantines scolaires',
            de: 'Solare Bewässerung in Mopti und Segou, klimafeste Getreidesorten, Schulspeisung'
        },
        context: {
            en: 'In central and southern Mali, our programs empower rural women groups through drip irrigation perimeters and safeguard child nutrition through dry seasons.',
            fr: 'Dans le centre et le sud du Mali, nos programmes renforcent les groupements féminins grâce à des périmètres maraîchers goutte-à-goutte et sécurisent la scolarisation par la nutrition.',
            de: 'In Zentral- und Südmali stärkt Mercy Friends Frauengruppen mit Tröpfchenbewässerung und schützt Schulkinder während der Dürrezeiten vor Mangelernährung.'
        }
    },
    {
        id: 'ne',
        region: 'afrique',
        center: { x: 428.4, y: 484.8 },
        projects: 12,
        budget: '4.2 M €',
        people: '140,000',
        flag: '🇳🇪',
        names: { en: 'Niger', fr: 'Niger', de: 'Niger' },
        regionLabels: { en: 'West Africa', fr: 'Afrique de l\'Ouest', de: 'Westafrika' },
        focus: {
            en: 'Anti-desertification dune fixation, community grain banks, therapeutic nutrition',
            fr: 'Fixation des dunes anti-désertification, banques céréalières villageoises, nutrition thérapeutique',
            de: 'Dünenbefestigung gegen Wüstenbildung, Getreidespeicher, therapeutische Ernährung'
        },
        context: {
            en: 'In Tillaberi, Tahoua, and Maradi, we establish communal grain banks to buffer against seasonal market price spikes and deploy mobile health teams for child screening.',
            fr: 'Dans les régions de Tillabéri, Tahoua et Maradi, nous installons des banques céréalières tampon contre la spéculation et des cliniques mobiles de dépistage de la malnutrition.',
            de: 'In Tillaberi, Tahoua und Maradi baut Mercy Friends kommunale Getreidespeicher gegen Preisspekulation auf und betreibt mobile Gesundheitsstationen.'
        }
    },
    {
        id: 'sn',
        region: 'afrique',
        center: { x: 374.8, y: 494.6 },
        projects: 10,
        budget: '3.1 M €',
        people: '120,000',
        flag: '🇸🇳',
        names: { en: 'Senegal', fr: 'Sénégal', de: 'Senegal' },
        regionLabels: { en: 'West Africa', fr: 'Afrique de l\'Ouest', de: 'Westafrika' },
        focus: {
            en: 'Regenerative agroecology, Great Green Wall tree planting, women solar bakeries',
            fr: 'Agroécologie paysanne, reforestation Grande Muraille Verte, boulangeries solaires féminines',
            de: 'Bäuerliche Agroökologie, Wiederaufforstung Grüner Mauer, solare Dorfbäckereien'
        },
        context: {
            en: 'In northern Senegal and Casamance, Mercy Friends promotes organic micro-gardening and reforestation with acacia senegal, generating lasting economic independence for women.',
            fr: 'Au nord du Sénégal et en Casamance, Mercy Friends soutient le maraîchage biologique et la reforestation d\'acacias nourriciers gérés par des collectifs féminins autonomes.',
            de: 'Im Norden Senegals und in der Casamance fördert Mercy Friends biologischen Gemüseanbau und Aufforstungen, die von Frauenkooperativen selbst verwaltet werden.'
        }
    },
    {
        id: 'td',
        region: 'afrique',
        center: { x: 449.2, y: 491.5 },
        projects: 13,
        budget: '4.5 M €',
        people: '155,000',
        flag: '🇹🇩',
        names: { en: 'Chad', fr: 'Tchad', de: 'Tschad' },
        regionLabels: { en: 'Central Africa', fr: 'Afrique Centrale', de: 'Zentralafrika' },
        focus: {
            en: 'Lake Chad oasis preservation, deep solar boreholes, refugee water relief',
            fr: 'Préservation des oasis du lac Tchad, forages solaires profonds, accueil des réfugiés',
            de: 'Oasenschutz am Tschadsee, Tiefbrunnen mit Solarpumpen, Hilfe für Geflüchtete'
        },
        context: {
            en: 'Welcoming refugees from Sudan and facing desertification, our teams drill deep solar boreholes up to 120 meters and restore degraded wadi oasis basins.',
            fr: 'Accueillant des réfugiés soudanais et confronté à l\'ensablement, le Tchad bénéficie de nos forages profonds jusqu\'à 120 mètres et de la réhabilitation des ouadis maraîchers.',
            de: 'Mercy Friends bohrt im Tschad bis zu 120 Meter tiefe Solarbrunnen und regeneriert Oasentäler, um Geflüchteten und Einheimischen verlässliche Lebensgrundlagen zu geben.'
        }
    },
    {
        id: 'sd',
        region: 'afrique',
        center: { x: 479.5, y: 491.5 },
        projects: 16,
        budget: '6.8 M €',
        people: '280,000',
        flag: '🇸🇩',
        names: { en: 'Sudan', fr: 'Soudan', de: 'Sudan' },
        regionLabels: { en: 'East Africa', fr: 'Afrique de l\'Est', de: 'Ostafrika' },
        focus: {
            en: 'Acute conflict famine relief, emergency water trucking, mobile health clinics',
            fr: 'Urgence famine liée au conflit, distribution d\'eau d\'urgence, cliniques mobiles',
            de: 'Konfliktbedingte Hungernothilfe, Trinkwassertransporte, mobile Gesundheitszelte'
        },
        context: {
            en: 'In Darfur and eastern Sudan, we deliver life-saving therapeutic rations and clean water to displaced families trapped in catastrophic food insecurity.',
            fr: 'Au Darfour et dans l\'Est soudanais, nous acheminons rations thérapeutiques d\'urgence et eau potable aux familles déplacées confrontées au risque critique de famine.',
            de: 'In Darfur und Ostsudan versorgt Mercy Friends Vertriebene unter schwierigsten Bedingungen mit therapeutischer Spezialnahrung und sauberem Trinkwasser.'
        }
    },
    {
        id: 'ss',
        region: 'afrique',
        center: { x: 478.4, y: 521.2 },
        projects: 11,
        budget: '4.1 M €',
        people: '135,000',
        flag: '🇸🇸',
        names: { en: 'South Sudan', fr: 'Soudan du Sud', de: 'Südsudan' },
        regionLabels: { en: 'East Africa', fr: 'Afrique de l\'Est', de: 'Ostafrika' },
        focus: {
            en: 'Flood resilience, elevated community gardens, maternal nutrition clinics',
            fr: 'Résilience aux crues, potagers surélevés insubmersibles, santé maternelle',
            de: 'Hochwasserschutz, hochwasserfeste Nutzgärten, Mütter- und Säuglingsgesundheit'
        },
        context: {
            en: 'Beset by consecutive historic floods in Unity and Jonglei states, our programs construct dike-protected food gardens and distribute clean water purification tablets.',
            fr: 'Face aux inondations massives dans les États d\'Unité et Jonglei, nous construisons des digues communautaires et des jardins potagers protégés des crues.',
            de: 'Angesichts schwerer Überschwemmungen baut Mercy Friends deichgeschützte Gärten und sichert die Trinkwasseraufbereitung für abgeschnittene Gemeinschaften.'
        }
    },
    {
        id: 'et',
        region: 'afrique',
        center: { x: 497.5, y: 508.9 },
        projects: 15,
        budget: '5.9 M €',
        people: '230,000',
        flag: '🇪🇹',
        names: { en: 'Ethiopia', fr: 'Éthiopie', de: 'Äthiopien' },
        regionLabels: { en: 'Horn of Africa', fr: 'Corne de l\'Afrique', de: 'Horn von Afrika' },
        focus: {
            en: 'Somali region drought relief, pastoralist water ponds, highland terrace farming',
            fr: 'Urgence sécheresse en région Somali, abreuvoirs pastoraux, terrasses vivrières',
            de: 'Dürrehilfe in Somali-Region, Tränken für Weidetiere, Terrassenfeldbau'
        },
        context: {
            en: 'In the Horn of Africa, Mercy Friends combines immediate nutrition support for pastoralist children with high-altitude soil and water catchment conservation.',
            fr: 'Dans la Corne de l\'Afrique, nos équipes luttent contre les sécheresses à répétition en installant des impluviums pastoraux et en soutenant les cultures en terrasses.',
            de: 'Am Horn von Afrika schützt Mercy Friends Kinder von Halbnomaden vor akuter Mangelernährung und errichtet Regenwasserspeicherbecken.'
        }
    },
    {
        id: 'so',
        region: 'afrique',
        center: { x: 519.8, y: 519.2 },
        projects: 12,
        budget: '5.1 M €',
        people: '170,000',
        flag: '🇸🇴',
        names: { en: 'Somalia', fr: 'Somalie', de: 'Somalia' },
        regionLabels: { en: 'Horn of Africa', fr: 'Corne de l\'Afrique', de: 'Horn von Afrika' },
        focus: {
            en: 'Famine prevention, desalinization units, mobile malnutrition clinics',
            fr: 'Prévention de la famine, unités de dessalement d\'eau, cliniques nutritionnelles mobiles',
            de: 'Hungersnot-Prävention, solare Entsalzungsanlagen, mobile Ernährungsstationen'
        },
        context: {
            en: 'In southern Somalia and Puntland, we operate mobile outpatient clinics and small-scale solar water desalinization units to stem severe malnutrition outbreaks.',
            fr: 'Dans le sud somalien et au Puntland, Mercy Friends déploie des cliniques mobiles de renutrition et installe des stations solaires d\'adduction d\'eau potable.',
            de: 'In Südsomalia und Puntland betreibt Mercy Friends mobile Notfallstationen und solarbetriebene Wasserfilter gegen lebensgefährliche Dehydrierung.'
        }
    },
    {
        id: 'ke',
        region: 'afrique',
        center: { x: 495.4, y: 531.5 },
        projects: 14,
        budget: '4.7 M €',
        people: '190,000',
        flag: '🇰🇪',
        names: { en: 'Kenya', fr: 'Kenya', de: 'Kenia' },
        regionLabels: { en: 'East Africa', fr: 'Afrique de l\'Est', de: 'Ostafrika' },
        focus: {
            en: 'Arid Turkana solar water systems, school drip farming, indigenous tree planting',
            fr: 'Forages solaires au Turkana aride, fermes pédagogiques scolaires, agroforesterie',
            de: 'Solarwasser in arider Turkana-Region, Schulgärten mit Tröpfchenbewässerung'
        },
        context: {
            en: 'In northern Kenya (Turkana and Garissa), we turn barren terrain green around schools with solar pumps and drought-resilient moringa and acacia groves.',
            fr: 'Dans le nord aride du Kenya (Turkana et Garissa), nous transformons les abords des écoles en oasis nourricières grâce au pompage solaire et au moringa.',
            de: 'Im trockenen Norden Kenias verwandelt Mercy Friends das Umfeld von Dorfschulen in grüne Oasen mit Solarpumpen und nahrhaftem Moringaanbau.'
        }
    },
    {
        id: 'mg',
        region: 'afrique',
        center: { x: 518.7, y: 588.9 },
        projects: 10,
        budget: '3.4 M €',
        people: '125,000',
        flag: '🇲🇬',
        names: { en: 'Madagascar', fr: 'Madagascar', de: 'Madagaskar' },
        regionLabels: { en: 'Indian Ocean', fr: 'Océan Indien', de: 'Indischer Ozean' },
        focus: {
            en: 'Deep South drought (Kere) relief, sweet potato multiplication, coastal mangrove recovery',
            fr: 'Lutte contre le Kere (Grand Sud), multiplication de patates douces, mangroves',
            de: 'Bekämpfung der Dürre (Kere) im Süden, Süßkartoffelanbau, Mangrovenschutz'
        },
        context: {
            en: 'In the arid south (Androy and Anosy), our interventions provide drought-resistant orange-fleshed sweet potato cuttings and village water cisterns to break recurring seasonal hunger.',
            fr: 'Dans le Grand Sud malgache frappé par le Kere, nous distribuons des boutures de patate douce fortifiée et construisons des citernes d\'eau de pluie communautaires.',
            de: 'Im von Dürren heimgesuchten Süden Madagaskars verteilt Mercy Friends ertragreiches Saatgut und baut Regenwasserzisternen gegen den saisonalen Hunger.'
        }
    },

    // --- ASIA & MIDDLE EAST (7 Countries) ---
    {
        id: 'bd',
        region: 'asie',
        center: { x: 673.8, y: 469.3 },
        projects: 13,
        budget: '4.6 M €',
        people: '210,000',
        flag: '🇧🇩',
        names: { en: 'Bangladesh', fr: 'Bangladesh', de: 'Bangladesch' },
        regionLabels: { en: 'South Asia', fr: 'Asie du Sud', de: 'Südasien' },
        focus: {
            en: 'Cox\'s Bazar refugee WASH, floating hydroponic gardens in delta flood zones',
            fr: 'WASH pour réfugiés à Cox\'s Bazar, jardins potagers flottants en zone inondable',
            de: 'Wasserversorgung in Cox\'s Bazar, schwimmende Gärten im Flussdelta'
        },
        context: {
            en: 'In coastal deltas and refugee settlements, our teams install flood-proof elevated latrines and teach traditional baira floating garden techniques to landless families.',
            fr: 'Dans les deltas inondables et les camps de réfugiés, nous installons des blocs sanitaires surélevés et formons les familles aux potagers flottants traditionnels.',
            de: 'Im Flussdelta von Bangladesch baut Mercy Friends hochwassersichere Brunnen und unterstützt Familien mit schwimmenden Gemüsegärten.'
        }
    },
    {
        id: 'np',
        region: 'asie',
        center: { x: 663.5, y: 457.0 },
        projects: 9,
        budget: '2.8 M €',
        people: '95,000',
        flag: '🇳🇵',
        names: { en: 'Nepal', fr: 'Népal', de: 'Nepal' },
        regionLabels: { en: 'South Asia', fr: 'Asie du Sud', de: 'Südasien' },
        focus: {
            en: 'Himalayan terrace irrigation, solar greenhouses, nutritional child care in Karnali',
            fr: 'Irrigation gravitaire himalayenne, serres solaires, nutrition infantile au Karnali',
            de: 'Gebirgsbewässerung im Himalaya, solare Gewächshäuser in Höhenlagen'
        },
        context: {
            en: 'In isolated mountain valleys of Karnali, high-altitude solar greenhouses extend crop seasons from 4 to 10 months, eradicating winter child malnutrition.',
            fr: 'Dans les vallées enclavées du Karnali, nos serres solaires d\'altitude allongent la période maraîchère de 4 à 10 mois, prévenant la faim hivernale chez les enfants.',
            de: 'In abgelegenen Tälern des Himalaya ermöglichen solare Gewächshäuser von Mercy Friends frisches Gemüse fast das ganze Jahr über.'
        }
    },
    {
        id: 'lb',
        region: 'asie',
        center: { x: 531.8, y: 444.7 },
        projects: 10,
        budget: '3.6 M €',
        people: '130,000',
        flag: '🇱🇧',
        names: { en: 'Lebanon', fr: 'Liban', de: 'Libanon' },
        regionLabels: { en: 'Middle East', fr: 'Moyen-Orient', de: 'Naher Osten' },
        focus: {
            en: 'Bekaa valley refugee communal kitchens, local farm purchasing, emergency water',
            fr: 'Cuisines solidaires dans la Bekaa, approvisionnement paysan local, eau potable',
            de: 'Gemeinschaftsküchen in der Bekaa-Ebene, lokale Beschaffung, sauberes Trinkwasser'
        },
        context: {
            en: 'Facing intense economic distress and refugee crises, we support communal solidarity kitchens directly connected to local Lebanese agroecological cooperatives.',
            fr: 'Dans un contexte d\'effondrement économique, Mercy Friends alimente des cantines solidaires approvisionnées en circuit court auprès des maraîchers libanais.',
            de: 'Trotz schwerer Wirtschaftskrise versorgt Mercy Friends Bedürftige und Geflüchtete über solidarische Küchen mit Lebensmitteln von lokalen Bauern.'
        }
    },
    {
        id: 'sy',
        region: 'asie',
        center: { x: 538.0, y: 436.5 },
        projects: 11,
        budget: '4.8 M €',
        people: '175,000',
        flag: '🇸🇾',
        names: { en: 'Syria', fr: 'Syrie', de: 'Syrien' },
        regionLabels: { en: 'Middle East', fr: 'Moyen-Orient', de: 'Naher Osten' },
        focus: {
            en: 'Bakery solar flour mills, water network repairs, child nutritional screening',
            fr: 'Moulins solaires de farine, réparation des réseaux d\'eau, dépistage infantile',
            de: 'Solare Getreidemühlen, Reparatur von Wasserleitungen, Notversorgung von Kindern'
        },
        context: {
            en: 'In northwest Syria, we power municipal community bakeries with solar panels to secure affordable bread and reconstruct shattered drinking water networks.',
            fr: 'Dans le nord-ouest syrien, nous équipons des boulangeries communales en énergie solaire pour garantir un pain accessible et réhabilitons les réseaux d\'eau détruits.',
            de: 'In Nordwestsyrien stattet Mercy Friends Bäckereien mit Solarenergie aus und stellt beschädigte Trinkwassernetze wieder her.'
        }
    },
    {
        id: 'ye',
        region: 'asie',
        center: { x: 538.0, y: 486.9 },
        projects: 14,
        budget: '6.2 M €',
        people: '240,000',
        flag: '🇾🇪',
        names: { en: 'Yemen', fr: 'Yémen', de: 'Jemen' },
        regionLabels: { en: 'Middle East', fr: 'Moyen-Orient', de: 'Naher Osten' },
        focus: {
            en: 'Severe acute malnutrition therapy, solar hospital water, artisanal fishing revival',
            fr: 'Prise en charge de la malnutrition sévère, eau solaire hospitalière, pêche artisanale',
            de: 'Behandlung akuter Mangelernährung, Solarstrom für Spitalbrunnen, Fischerhilfe'
        },
        context: {
            en: 'In Hodeida and Taiz, Mercy Friends supports stabilization centers for acutely malnourished infants and outfits coastal communities with solar-powered desalination stations.',
            fr: 'À Hodeïda et Taëz, nos équipes soutiennent des unités pédiatriques de renutrition intensive et déploient des forages solaires pour les civils assiégés.',
            de: 'In Hodeida und Taiz betreibt Mercy Friends Ernährungsstationen für Kleinkinder und sichert die Trinkwasserversorgung mit Solarenergie.'
        }
    },
    {
        id: 'af',
        region: 'asie',
        center: { x: 614.2, y: 438.5 },
        projects: 12,
        budget: '4.9 M €',
        people: '180,000',
        flag: '🇦🇫',
        names: { en: 'Afghanistan', fr: 'Afghanistan', de: 'Afghanistan' },
        regionLabels: { en: 'Central Asia', fr: 'Asie Centrale', de: 'Zentralasien' },
        focus: {
            en: 'Winterization food kits, women kitchen gardens, earthquake resilient water points',
            fr: 'Colis alimentaires hivernaux, potagers familiaux pour mères, forages antisismiques',
            de: 'Winterhilfe mit Nahrungspaketen, Familiengärten für Frauen, erdbebensichere Brunnen'
        },
        context: {
            en: 'In remote rural districts of Herat and Badakhshan, we provide winter emergency food rations and assist vulnerable female-headed households with home micro-gardens.',
            fr: 'Dans les districts isolés de Hérat et du Badakhchan, nous distribuons des vivres d\'hiver et équipons les foyers dirigés par des femmes en semences nutritives.',
            de: 'In abgelegenen Bergdörfern verteilt Mercy Friends überlebenswichtige Winterrationen und unterstützt alleinerziehende Mütter mit Gemüsesaatgut.'
        }
    },

    // --- AMERICAS (4 Countries) ---
    {
        id: 'ht',
        region: 'amerique',
        center: { x: 265.4, y: 467.2 },
        projects: 12,
        budget: '4.5 M €',
        people: '165,000',
        flag: '🇭🇹',
        names: { en: 'Haiti', fr: 'Haïti', de: 'Haiti' },
        regionLabels: { en: 'Caribbean', fr: 'Caraïbes', de: 'Karibik' },
        focus: {
            en: 'Cholera prevention through clean water, urban canteen solidarity, rural seed banks',
            fr: 'Prévention anticholéra par l\'eau potable, cantines solidaires urbaines, semences rurales',
            de: 'Cholerabekämpfung durch sauberes Wasser, Schulkantinen, ländliche Saatgutbanken'
        },
        context: {
            en: 'Operating in Port-au-Prince and Grand\'Anse, our teams distribute clean water chlorination kits to contain cholera and supply school canteens with local sweet potato and beans.',
            fr: 'À Port-au-Prince et dans la Grand\'Anse, nos équipes fournissent de l\'eau chlorée sécurisée contre le choléra et soutiennent les coopératives paysannes de haricot et manioc.',
            de: 'In Port-au-Prince und im ländlichen Grand\'Anse sichert Mercy Friends chloriertes Trinkwasser gegen Cholera und fördert bäuerliche Erzeugergemeinschaften.'
        }
    },
    {
        id: 'co',
        region: 'amerique',
        center: { x: 269.5, y: 531.5 },
        projects: 9,
        budget: '2.9 M €',
        people: '90,000',
        flag: '🇨🇴',
        names: { en: 'Colombia', fr: 'Colombie', de: 'Kolumbien' },
        regionLabels: { en: 'South America', fr: 'Amérique du Sud', de: 'Südamerika' },
        focus: {
            en: 'Indigenous Wayuu desert water points, agroforestry in Choco, migrant food support',
            fr: 'Forages chez les Wayuu en Guajira, agroforesterie au Chocó, aide aux migrants',
            de: 'Trinkwasser für indigene Wayuu in La Guajira, Agroforst im Chocó'
        },
        context: {
            en: 'In the arid La Guajira desert, we build wind and solar water pumps for indigenous Wayuu families suffering chronic drought and child undernutrition.',
            fr: 'Dans le désert de La Guajira, nos forages solaires fournissent de l\'eau potable aux clans Wayuu confrontés à des années sans précipitations.',
            de: 'In der Halbwüste La Guajira errichtet Mercy Friends solarbetriebene Pumpen für die indigenen Gemeinschaften der Wayuu.'
        }
    },
    {
        id: 'pe',
        region: 'amerique',
        center: { x: 260.3, y: 566.4 },
        projects: 8,
        budget: '2.6 M €',
        people: '80,000',
        flag: '🇵🇪',
        names: { en: 'Peru', fr: 'Pérou', de: 'Peru' },
        regionLabels: { en: 'South America', fr: 'Amérique du Sud', de: 'Südamerika' },
        focus: {
            en: 'High-Andean frost resistant greenhouses, quinoa and native potato preservation',
            fr: 'Serres bioclimatiques contre le gel andin, valorisation quinoa et pommes de terre',
            de: 'Bioklimatische Gewächshäuser in den Anden gegen Frost, Erhalt alter Quinoa-Sorten'
        },
        context: {
            en: 'At over 3,800 meters in Puno and Cusco, bioclimatic greenhouses protect crops against catastrophic frost events, safeguarding Quechua child nutrition.',
            fr: 'À plus de 3 800 mètres d\'altitude dans les Andes, nos serres bioclimatiques protègent les récoltes du gel extrême et diversifient l\'alimentation des enfants quechuas.',
            de: 'Auf über 3.800 Metern Höhe schützen bioklimatische Gewächshäuser von Mercy Friends die Ernten vor Frost und sichern die Ernährung von Quechua-Kindern.'
        }
    },
    {
        id: 'bo',
        region: 'amerique',
        center: { x: 282.8, y: 588.9 },
        projects: 7,
        budget: '2.3 M €',
        people: '70,000',
        flag: '🇧🇴',
        names: { en: 'Bolivia', fr: 'Bolivie', de: 'Bolivien' },
        regionLabels: { en: 'South America', fr: 'Amérique du Sud', de: 'Südamerika' },
        focus: {
            en: 'Altiplano solar rainwater harvesting, native grain value chains, women leadership',
            fr: 'Récolte d\'eau pluviale sur l\'Altiplano, filières céréalières autochtones, leadership féminin',
            de: 'Regenwassernutzung auf dem Altiplano, alte Getreidesorten, Frauenförderung'
        },
        context: {
            en: 'On the arid Altiplano, Mercy Friends builds covered water reservoirs and accompanies Aymara women in processing nutritious native grains like canahua and tarwi.',
            fr: 'Sur l\'Altiplano frappé par l\'assèchement des lagunes, nos réservoirs d\'eau de pluie et l\'appui aux productrices aymaras restaurent la sécurité vivrière.',
            de: 'Auf dem trockenen Hochland von Bolivien baut Mercy Friends Regenwasserspeicher und stärkt Aymara-Bäuerinnen beim Anbau nährstoffreicher traditioneller Körner.'
        }
    }
];

export function getLocalizedCountries(locale = getLocale()) {
    const loc = ['en', 'fr', 'de'].includes(locale) ? locale : 'en';
    return RAW_COUNTRIES.map(c => ({
        id: c.id,
        region: c.region,
        center: c.center,
        projects: c.projects,
        budget: c.budget,
        people: c.people,
        flag: c.flag,
        name: c.names[loc] || c.names.en,
        regionLabel: c.regionLabels[loc] || c.regionLabels.en,
        focus: c.focus[loc] || c.focus.en,
        context: c.context[loc] || c.context.en,
    }));
}

export const COUNTRIES_DATA = new Proxy([], {
    get(target, prop) {
        const data = getLocalizedCountries(getLocale());
        if (prop === 'length') return data.length;
        if (typeof prop === 'symbol' || !isNaN(prop)) return data[prop];
        if (typeof data[prop] === 'function') return data[prop].bind(data);
        return data[prop];
    }
});

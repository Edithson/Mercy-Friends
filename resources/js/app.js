// Datasets
import { THEMES_DATA } from './data/themes.js';
import { COUNTRIES_DATA } from './data/countries.js';
import { PROJECTS_DATA } from './data/projects.js';
import { EMERGENCIES_DATA } from './data/emergencies.js';
import { NEWS_ARTICLES } from './data/news.js';
import { EVENTS_DATA } from './data/events.js';
import { PUBLICATIONS_DATA } from './data/publications.js';

// Modules
import { showToast } from './modules/toast.js';
import { toggleMobileMenu, toggleSearchBar, handleGlobalSearch } from './modules/navigation.js';
import { switchAboutTab } from './modules/about.js';
import { renderThemes, openThemeModal } from './modules/themes.js';
import { filterCountries, selectCountry, renderCountriesPortfolio, supportCountry } from './modules/portfolio.js';
import { renderProjects, resetProjectFilters, openProjectModal } from './modules/projects.js';
import {
    donationState,
    setDonationFrequency,
    selectPresetAmount,
    handleCustomAmount,
    updateDonationImpactUI,
    jumpToDonation,
    handleDonationSubmit,
    copyIBAN
} from './modules/donation.js';
import { prefillContact, handleContactSubmit, handleNewsletterSubmit } from './modules/contact.js';
import {
    openUniversalModal,
    closeUniversalModal,
    openEmergencyModal,
    openNewsModal,
    openEventModal,
    openPublicationModal,
    openInfoModal,
    openLegalModal,
    submitEthicsReport,
    initModalListeners
} from './modules/modals.js';
import {
    cookiePreferences,
    initCookieBanner,
    saveCookieChoice,
    saveModalCookieSettings
} from './modules/cookies.js';
import { initCountersAndScrollSpy } from './modules/counters.js';

// Exportation globale pour les attributs HTML inline (onclick, onsubmit, oninput)
Object.assign(window, {
    // Données
    THEMES_DATA,
    COUNTRIES_DATA,
    PROJECTS_DATA,
    EMERGENCIES_DATA,
    NEWS_ARTICLES,
    EVENTS_DATA,
    PUBLICATIONS_DATA,

    // Toast
    showToast,

    // Navigation & Recherche
    toggleMobileMenu,
    toggleSearchBar,
    handleGlobalSearch,

    // À propos
    switchAboutTab,

    // Thèmes
    renderThemes,
    openThemeModal,

    // Portefeuille mondial
    filterCountries,
    selectCountry,
    renderCountriesPortfolio,
    supportCountry,

    // Projets
    renderProjects,
    resetProjectFilters,
    openProjectModal,

    // Dons
    donationState,
    setDonationFrequency,
    selectPresetAmount,
    handleCustomAmount,
    updateDonationImpactUI,
    jumpToDonation,
    handleDonationSubmit,
    copyIBAN,

    // Contact & Newsletter
    prefillContact,
    handleContactSubmit,
    handleNewsletterSubmit,

    // Modales
    openUniversalModal,
    closeUniversalModal,
    openEmergencyModal,
    openNewsModal,
    openEventModal,
    openPublicationModal,
    openInfoModal,
    openLegalModal,
    submitEthicsReport,

    // Cookies
    cookiePreferences,
    initCookieBanner,
    saveCookieChoice,
    saveModalCookieSettings
});

// Initialisation au chargement du DOM
document.addEventListener('DOMContentLoaded', () => {
    renderThemes();
    renderCountriesPortfolio();
    renderProjects();
    updateDonationImpactUI();
    initCookieBanner();
    initCountersAndScrollSpy();
    initModalListeners();
});

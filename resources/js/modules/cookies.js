import { closeUniversalModal } from './modals.js';
import { showToast } from './toast.js';

export let cookiePreferences = {
    essential: true,
    analytics: false,
    campaigns: false
};

export function initCookieBanner() {
    try {
        const saved = localStorage.getItem('mercyfriends_cookies_v1');
        const banner = document.getElementById('cookie-banner');
        if (!saved) {
            if (banner) banner.classList.remove('hidden');
        } else {
            cookiePreferences = JSON.parse(saved);
            window.cookiePreferences = cookiePreferences;
        }
    } catch (e) {
        const banner = document.getElementById('cookie-banner');
        if (banner) banner.classList.remove('hidden');
    }
}

export function saveCookieChoice(mode) {
    cookiePreferences = {
        essential: true,
        analytics: mode === 'all',
        campaigns: mode === 'all'
    };
    window.cookiePreferences = cookiePreferences;

    try {
        localStorage.setItem('mercyfriends_cookies_v1', JSON.stringify(cookiePreferences));
    } catch (e) {}

    const banner = document.getElementById('cookie-banner');
    if (banner) banner.classList.add('hidden');

    showToast(mode === 'all' ? 'Préférences enregistrées : tous les cookies ont été acceptés.' : 'Seuls les cookies strictement essentiels sont activés.', 'info');
}

export function saveModalCookieSettings(acceptAll) {
    if (acceptAll) {
        cookiePreferences = { essential: true, analytics: true, campaigns: true };
    } else {
        const ana = document.getElementById('chk-cookie-analytics');
        const cam = document.getElementById('chk-cookie-campaigns');
        cookiePreferences = {
            essential: true,
            analytics: ana ? ana.checked : false,
            campaigns: cam ? cam.checked : false
        };
    }
    window.cookiePreferences = cookiePreferences;

    try {
        localStorage.setItem('mercyfriends_cookies_v1', JSON.stringify(cookiePreferences));
    } catch (e) {}

    const banner = document.getElementById('cookie-banner');
    if (banner) banner.classList.add('hidden');

    closeUniversalModal();
    showToast('Vos paramètres de cookies ont bien été mis à jour.', 'success');
}

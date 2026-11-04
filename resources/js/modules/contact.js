import { showToast } from './toast.js';
import { t } from '../data/i18n.js';

export function prefillContact(subjectValue) {
    const select = document.getElementById('contact-subject');
    if (select) {
        for (let i = 0; i < select.options.length; i++) {
            if (select.options[i].value === subjectValue) {
                select.selectedIndex = i;
                break;
            }
        }
    }
    const contactSection = document.getElementById('contact');
    if (contactSection) {
        contactSection.scrollIntoView({ behavior: 'smooth' });
    }
    setTimeout(() => {
        const nameInput = document.getElementById('contact-name');
        if (nameInput) nameInput.focus();
    }, 500);
}

export function handleContactSubmit(event) {
    event.preventDefault();
    const nameEl = document.getElementById('contact-name');
    const emailEl = document.getElementById('contact-email');
    const subjectEl = document.getElementById('contact-subject');
    const messageEl = document.getElementById('contact-message');
    const consentEl = document.getElementById('contact-consent');
    const errorEl = document.getElementById('contact-error');

    const name = nameEl ? nameEl.value.trim() : '';
    const email = emailEl ? emailEl.value.trim() : '';
    const subject = subjectEl ? subjectEl.value : '';
    const message = messageEl ? messageEl.value.trim() : '';
    const consent = consentEl ? consentEl.checked : false;

    if (!name || !email || !email.includes('@') || message.length < 10 || !consent) {
        if (errorEl) {
            errorEl.textContent = t('contact_err');
            errorEl.classList.remove('hidden');
        }
        return;
    }

    if (errorEl) errorEl.classList.add('hidden');

    const successBox = document.getElementById('contact-success-box');
    const successDetail = document.getElementById('contact-success-detail');
    if (successDetail) {
        successDetail.textContent = t('contact_success_detail', { name, subject, email });
    }
    if (successBox) successBox.classList.remove('hidden');

    const form = document.getElementById('contact-form');
    if (form) form.reset();

    showToast(t('contact_toast_sent'), 'success');
}

export function handleNewsletterSubmit(event) {
    event.preventDefault();
    const input = document.getElementById('newsletter-email');
    if (!input || !input.value || !input.value.includes('@')) {
        showToast(t('newsletter_invalid_err'), 'error');
        return;
    }
    showToast(t('newsletter_success_msg', { email: input.value }), 'success');
    input.value = '';
}

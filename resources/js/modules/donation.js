import { openUniversalModal } from './modals.js';
import { showToast } from './toast.js';
import { t, getLocale } from '../data/i18n.js';

export const donationState = {
    frequency: 'once',
    amount: 50
};

export function setDonationFrequency(freq) {
    donationState.frequency = freq;
    const btnOnce = document.getElementById('freq-once');
    const btnMonthly = document.getElementById('freq-monthly');

    if (btnOnce && btnMonthly) {
        if (freq === 'once') {
            btnOnce.className = 'py-3.5 px-4 rounded-xl font-extrabold text-sm transition-all bg-mercy-black text-white shadow';
            btnMonthly.className = 'py-3.5 px-4 rounded-xl font-extrabold text-sm transition-all text-gray-700 hover:text-mercy-black flex items-center justify-center gap-2';
        } else {
            btnMonthly.className = 'py-3.5 px-4 rounded-xl font-extrabold text-sm transition-all bg-mercy-green text-white shadow flex items-center justify-center gap-2';
            btnOnce.className = 'py-3.5 px-4 rounded-xl font-extrabold text-sm transition-all text-gray-700 hover:text-mercy-black';
        }
    }
    updateDonationImpactUI();
}

export function selectPresetAmount(amount) {
    donationState.amount = amount;
    const customInput = document.getElementById('custom-amount-input');
    const errorEl = document.getElementById('donation-amount-error');

    if (customInput) customInput.value = amount;
    if (errorEl) errorEl.classList.add('hidden');

    highlightPresetButtons(amount);
    updateDonationImpactUI();
}

export function handleCustomAmount(rawVal) {
    const val = parseInt(rawVal, 10);
    const errEl = document.getElementById('donation-amount-error');

    if (isNaN(val) || val < 5) {
        if (errEl) errEl.classList.remove('hidden');
        donationState.amount = 0;
        highlightPresetButtons(-1);
        return;
    }
    if (errEl) errEl.classList.add('hidden');
    donationState.amount = val;
    highlightPresetButtons(val);
    updateDonationImpactUI();
}

export function highlightPresetButtons(amount) {
    document.querySelectorAll('.amount-btn').forEach(btn => {
        const btnAmt = parseInt(btn.dataset.amount, 10);
        if (btnAmt === amount) {
            btn.className = 'amount-btn py-4 rounded-2xl border-2 border-mercy-green bg-mercy-soft text-mercy-darkGreen font-black text-xl transition';
        } else {
            btn.className = 'amount-btn py-4 rounded-2xl border-2 border-gray-200 font-black text-xl hover:border-mercy-green transition';
        }
    });
}

export function updateDonationImpactUI() {
    const amt = donationState.amount || 5;
    const isMonthly = donationState.frequency === 'monthly';
    const impactText = document.getElementById('dynamic-impact-text');
    const taxText = document.getElementById('tax-deduction-text');
    const iconEl = document.getElementById('impact-icon');
    const submitLabel = document.getElementById('donate-submit-label');
    const loc = getLocale();

    const rawNet = (amt * 0.34).toFixed(2);
    const netCost = loc === 'en' ? rawNet : rawNet.replace('.', ',');

    if (taxText) {
        const freqWord = isMonthly
            ? (loc === 'de' ? 'monatliche ' : (loc === 'fr' ? 'mensuel ' : 'monthly '))
            : '';
        const suffixWord = isMonthly
            ? (loc === 'en' ? ' / month' : (loc === 'de' ? ' / Monat' : ' / mois'))
            : '';
        taxText.innerHTML = t('donation_tax_hint', { freq: freqWord, net: `<strong>${netCost}</strong>`, suffix: suffixWord });
    }

    if (submitLabel) {
        submitLabel.textContent = isMonthly
            ? t('donation_monthly_btn', { amt })
            : t('donation_once_btn', { amt });
    }

    const monthSuffix = isMonthly
        ? (loc === 'en' ? '/month' : (loc === 'de' ? '/Monat' : '/mois'))
        : '';

    if (iconEl && impactText) {
        if (amt < 35) {
            iconEl.className = 'fa-solid fa-droplet';
            impactText.textContent = t('impact_water', { amt, suffix: monthSuffix });
        } else if (amt < 85) {
            iconEl.className = 'fa-solid fa-wheat-awn';
            impactText.textContent = t('impact_farming', { amt, suffix: monthSuffix });
        } else if (amt < 180) {
            iconEl.className = 'fa-solid fa-kit-medical';
            impactText.textContent = t('impact_medical', { amt, suffix: monthSuffix });
        } else {
            iconEl.className = 'fa-solid fa-solar-panel';
            impactText.textContent = t('impact_solar', { amt, suffix: monthSuffix });
        }
    }
}

export function jumpToDonation(freq, amount, causeOptional) {
    setDonationFrequency(freq);
    selectPresetAmount(amount);
    if (causeOptional) {
        const select = document.getElementById('donation-cause');
        if (select) {
            for (let i = 0; i < select.options.length; i++) {
                if (select.options[i].value === causeOptional) {
                    select.selectedIndex = i;
                    break;
                }
            }
        }
    }
    const target = document.getElementById('faire-un-don');
    if (target) {
        target.scrollIntoView({ behavior: 'smooth' });
    }
}

export function handleDonationSubmit(event) {
    event.preventDefault();
    const customInput = document.getElementById('custom-amount-input');
    const amt = parseInt(customInput ? customInput.value : '0', 10);
    const nameEl = document.getElementById('donor-name');
    const emailEl = document.getElementById('donor-email');
    const causeEl = document.getElementById('donation-cause');
    const paymentMethodEl = document.querySelector('input[name="payment-method"]:checked');

    const name = nameEl ? nameEl.value.trim() : '';
    const email = emailEl ? emailEl.value.trim() : '';
    const cause = causeEl ? causeEl.value : 'Priorité terrain';
    const paymentMethod = paymentMethodEl ? paymentMethodEl.value : 'Carte Bancaire';

    if (isNaN(amt) || amt < 5) {
        const err = document.getElementById('donation-amount-error');
        if (err) err.classList.remove('hidden');
        showToast(t('donation_min_err'), 'error');
        return;
    }
    if (!name || !email || !email.includes('@')) {
        showToast(t('donation_fields_err'), 'error');
        return;
    }

    const refNumber = 'MF-2026-' + Math.floor(100000 + Math.random() * 900000);
    const loc = getLocale();
    const rawNet = (amt * 0.34).toFixed(2);
    const netCost = loc === 'en' ? rawNet : rawNet.replace('.', ',');
    const freqLabel = donationState.frequency === 'monthly'
        ? t('donation_monthly_label')
        : t('donation_once_label');

    openUniversalModal(
        t('donation_receipt_badge'),
        t('donation_thank_you', { name }),
        `
            <div class="p-5 rounded-2xl bg-mercy-soft border border-mercy-green/40 text-mercy-darkGreen mb-4">
                <div class="flex items-center gap-3">
                    <div class="w-11 h-11 rounded-full bg-mercy-green text-white flex items-center justify-center text-lg shrink-0">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <div>
                        <h4 class="font-black text-base text-mercy-black">${t('donation_recorded')}</h4>
                        <p class="text-xs">${t('donation_summary_sent', { email: `<strong>${email}</strong>` })}</p>
                    </div>
                </div>
            </div>

            <div class="bg-mercy-surface border border-gray-200 rounded-2xl p-5 space-y-2.5 text-xs sm:text-sm">
                <div class="flex justify-between border-b border-gray-200 pb-2">
                    <span class="text-gray-500">${t('donation_receipt_ref')}</span>
                    <strong class="font-mono text-mercy-black">${refNumber}</strong>
                </div>
                <div class="flex justify-between border-b border-gray-200 pb-2">
                    <span class="text-gray-500">${t('donation_amount_freq')}</span>
                    <strong class="text-mercy-green">${amt},00 € (${freqLabel})</strong>
                </div>
                <div class="flex justify-between border-b border-gray-200 pb-2">
                    <span class="text-gray-500">${t('donation_net_cost_label')}</span>
                    <strong class="text-mercy-black">${netCost} €</strong>
                </div>
                <div class="flex justify-between border-b border-gray-200 pb-2">
                    <span class="text-gray-500">${t('donation_allocated_to')}</span>
                    <strong class="text-mercy-black text-right">${cause}</strong>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-500">${t('donation_method')}</span>
                    <strong class="text-mercy-black">${paymentMethod}</strong>
                </div>
            </div>

            <p class="text-xs text-gray-500 mt-4">
                ${t('donation_efficiency_note')}
            </p>
        `
    );

    const form = document.getElementById('donation-form');
    if (form) form.reset();
    selectPresetAmount(50);
}

export function copyIBAN() {
    const iban = 'FR76 4255 9100 0008 0149 2731 548';
    if (navigator.clipboard && navigator.clipboard.writeText) {
        navigator.clipboard.writeText(iban).then(() => {
            showToast(t('iban_copied'), 'success');
        }).catch(() => {
            fallbackCopy(iban);
        });
    } else {
        fallbackCopy(iban);
    }
}

function fallbackCopy(text) {
    const tempInput = document.createElement('textarea');
    tempInput.value = text;
    tempInput.setAttribute('readonly', '');
    tempInput.style.position = 'absolute';
    tempInput.style.left = '-9999px';
    document.body.appendChild(tempInput);
    tempInput.select();
    try {
        document.execCommand('copy');
        showToast(t('iban_copied'), 'success');
    } catch (err) {
        showToast('IBAN : ' + text, 'info');
    }
    document.body.removeChild(tempInput);
}

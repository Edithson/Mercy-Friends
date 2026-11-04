import { openUniversalModal } from './modals.js';
import { showToast } from './toast.js';

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

    const netCost = (amt * 0.34).toFixed(2).replace('.', ',');

    if (taxText) {
        taxText.innerHTML = `Après réduction fiscale de 66 %, ce don ${isMonthly ? 'mensuel ' : ''}ne vous revient réellement qu'à <strong>${netCost} €</strong>${isMonthly ? ' / mois' : ''}.`;
    }
    if (submitLabel) {
        submitLabel.textContent = `Valider mon don ${isMonthly ? 'mensuel ' : ''}de ${amt} €`;
    }

    if (iconEl && impactText) {
        if (amt < 35) {
            iconEl.className = 'fa-solid fa-droplet';
            impactText.textContent = `Avec ${amt} €${isMonthly ? '/mois' : ''}, vous assurez l'approvisionnement en eau potable et kits d'hygiène pour une famille vulnérable.`;
        } else if (amt < 85) {
            iconEl.className = 'fa-solid fa-wheat-awn';
            impactText.textContent = `Avec ${amt} €${isMonthly ? '/mois' : ''}, vous financez un kit agricole et nutritionnel complet pour une famille pendant 3 mois.`;
        } else if (amt < 180) {
            iconEl.className = 'fa-solid fa-kit-medical';
            impactText.textContent = `Avec ${amt} €${isMonthly ? '/mois' : ''}, vous prenez en charge le traitement nutritionnel vital de deux enfants malnutris et des semences maraîchères.`;
        } else {
            iconEl.className = 'fa-solid fa-solar-panel';
            impactText.textContent = `Avec ${amt} €${isMonthly ? '/mois' : ''}, vous contribuez directement à l'équipement d'un forage villageois solaire ou d'une coopérative agricole.`;
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
        showToast('Veuillez indiquer un montant minimum de 5 €.', 'error');
        return;
    }
    if (!name || !email || !email.includes('@')) {
        showToast('Veuillez renseigner votre nom complet et une adresse e-mail valide pour votre reçu fiscal.', 'error');
        return;
    }

    const refNumber = 'MF-2026-' + Math.floor(100000 + Math.random() * 900000);
    const netCost = (amt * 0.34).toFixed(2).replace('.', ',');
    const freqLabel = donationState.frequency === 'monthly' ? 'Mensuel (Don régulier)' : 'Ponctuel (Une seule fois)';

    openUniversalModal(
        'Confirmation & Reçu Fiscal',
        `Merci infiniment pour votre solidarité, ${name} !`,
        `
            <div class="p-5 rounded-2xl bg-mercy-soft border border-mercy-green/40 text-mercy-darkGreen mb-4">
                <div class="flex items-center gap-3">
                    <div class="w-11 h-11 rounded-full bg-mercy-green text-white flex items-center justify-center text-lg shrink-0">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <div>
                        <h4 class="font-black text-base text-mercy-black">Don enregistré avec succès</h4>
                        <p class="text-xs">Un récapitulatif et votre reçu fiscal officiel ont été générés pour <strong>${email}</strong>.</p>
                    </div>
                </div>
            </div>

            <div class="bg-mercy-surface border border-gray-200 rounded-2xl p-5 space-y-2.5 text-xs sm:text-sm">
                <div class="flex justify-between border-b border-gray-200 pb-2">
                    <span class="text-gray-500">Référence du reçu indicatif :</span>
                    <strong class="font-mono text-mercy-black">${refNumber}</strong>
                </div>
                <div class="flex justify-between border-b border-gray-200 pb-2">
                    <span class="text-gray-500">Montant & Fréquence :</span>
                    <strong class="text-mercy-green">${amt},00 € — ${freqLabel}</strong>
                </div>
                <div class="flex justify-between border-b border-gray-200 pb-2">
                    <span class="text-gray-500">Coût réel après déduction fiscale (66 %) :</span>
                    <strong class="text-mercy-black">${netCost} €</strong>
                </div>
                <div class="flex justify-between border-b border-gray-200 pb-2">
                    <span class="text-gray-500">Affectation choisie :</span>
                    <strong class="text-mercy-black text-right">${cause}</strong>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-500">Mode de règlement :</span>
                    <strong class="text-mercy-black">${paymentMethod}</strong>
                </div>
            </div>

            <p class="text-xs text-gray-500 mt-4">
                90 % de votre contribution est immédiatement orientée vers nos missions sur le terrain. Toute l'équipe de Mercy Friends et nos partenaires locaux vous remercient chaleureusement.
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
            showToast('IBAN copié dans le presse-papiers : ' + iban, 'success');
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
        showToast('IBAN copié dans le presse-papiers : ' + text, 'success');
    } catch (err) {
        showToast('IBAN : ' + text, 'info');
    }
    document.body.removeChild(tempInput);
}

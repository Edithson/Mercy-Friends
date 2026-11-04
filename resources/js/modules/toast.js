export function showToast(message, type = 'success') {
    const container = document.getElementById('toast-container');
    if (!container) return;

    const toast = document.createElement('div');
    const iconClass = type === 'success' 
        ? 'fa-circle-check text-mercy-accent' 
        : (type === 'error' ? 'fa-circle-exclamation text-red-400' : 'fa-circle-info text-mercy-accent');

    toast.className = 'pointer-events-auto bg-mercy-black text-white border border-mercy-green/60 rounded-2xl p-4 shadow-2xl flex items-start gap-3 transition-all duration-300';
    toast.innerHTML = `
        <i class="fa-solid ${iconClass} text-lg mt-0.5 shrink-0"></i>
        <div class="text-xs font-semibold leading-relaxed flex-1">${message}</div>
    `;

    container.appendChild(toast);

    setTimeout(() => {
        toast.style.opacity = '0';
        toast.style.transform = 'translateY(-8px)';
        setTimeout(() => toast.remove(), 300);
    }, 4200);
}

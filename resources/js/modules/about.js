export function switchAboutTab(tabKey) {
    document.querySelectorAll('.about-panel').forEach(el => el.classList.add('hidden'));
    const targetPanel = document.getElementById(`about-panel-${tabKey}`);
    if (targetPanel) targetPanel.classList.remove('hidden');

    document.querySelectorAll('.about-tab-btn').forEach(btn => {
        btn.className = 'about-tab-btn px-3.5 py-2 rounded-xl text-xs font-bold bg-white text-gray-700 hover:bg-gray-100 transition';
    });
    const activeBtn = document.getElementById(`about-btn-${tabKey}`);
    if (activeBtn) {
        activeBtn.className = 'about-tab-btn px-3.5 py-2 rounded-xl text-xs font-bold bg-mercy-black text-white transition';
    }
}

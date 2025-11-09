document.addEventListener('DOMContentLoaded', function () {
    const scrollContainer = document.getElementById('wisataScroll');
    const leftBtn = document.getElementById('scrollLeft');
    const rightBtn = document.getElementById('scrollRight');

    if (!scrollContainer || !leftBtn || !rightBtn) return;

    // Munculkan tombol panah hanya di layar kecil
    if (window.innerWidth < 768) {
        leftBtn.classList.remove('hidden');
        rightBtn.classList.remove('hidden');
    }

    leftBtn.addEventListener('click', () => {
        scrollContainer.scrollBy({ left: -300, behavior: 'smooth' });
    });

    rightBtn.addEventListener('click', () => {
        scrollContainer.scrollBy({ left: 300, behavior: 'smooth' });
    });
});

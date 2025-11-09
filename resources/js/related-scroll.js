document.addEventListener('DOMContentLoaded', function () {
    const scrollContainer = document.getElementById('relatedScroll');
    const leftBtn = document.getElementById('relatedScrollLeft');
    const rightBtn = document.getElementById('relatedScrollRight');

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

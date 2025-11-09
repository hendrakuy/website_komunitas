document.addEventListener('DOMContentLoaded', () => {
    const scrollSections = document.querySelectorAll('[data-scroll]');

    scrollSections.forEach(section => {
        const container = section.querySelector('[data-scroll-container]');
        const leftBtn = section.querySelector('[data-scroll-left]');
        const rightBtn = section.querySelector('[data-scroll-right]');

        // Scroll functions
        const scrollLeft = () => container.scrollBy({ left: -container.clientWidth * 0.9, behavior: 'smooth' });
        const scrollRight = () => container.scrollBy({ left: container.clientWidth * 0.9, behavior: 'smooth' });

        // Update button visibility
        function updateArrows() {
            const isMobile = window.innerWidth < 768;
            const maxScrollLeft = container.scrollWidth - container.clientWidth;

            if (!isMobile) {
                leftBtn.classList.add('hidden');
                rightBtn.classList.add('hidden');
                return;
            }

            leftBtn.classList.remove('hidden');
            rightBtn.classList.remove('hidden');

            leftBtn.classList.toggle('opacity-0', container.scrollLeft <= 0);
            rightBtn.classList.toggle('opacity-0', container.scrollLeft >= maxScrollLeft - 5);
        }

        // Event listeners
        leftBtn.addEventListener('click', scrollLeft);
        rightBtn.addEventListener('click', scrollRight);
        container.addEventListener('scroll', updateArrows);
        window.addEventListener('resize', updateArrows);

        // Initialize
        updateArrows();
    });
});

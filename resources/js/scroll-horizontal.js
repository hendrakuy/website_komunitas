/**
 * Horizontal Scroll Navigation System
 * Reusable script untuk membuat scroll navigation dengan tombol kiri-kanan
 * 
 * Setup HTML:
 * 1. Container dengan attribute: data-scroll-container dan id unik
 * 2. Button prev dengan: data-scroll-nav="prev" dan data-scroll-target="[container-id]"
 * 3. Button next dengan: data-scroll-nav="next" dan data-scroll-target="[container-id]"
 * 4. Optional: scroll indicator dengan class "scroll-indicator" dan "scroll-indicator-progress"
 * 
 * Usage: Cukup include script ini, akan auto-detect semua scroll containers
 */

class HorizontalScrollNav {
    constructor(containerId) {
        this.container = document.getElementById(containerId);
        if (!this.container) return;

        this.prevBtn = document.querySelector(`[data-scroll-nav="prev"][data-scroll-target="${containerId}"]`);
        this.nextBtn = document.querySelector(`[data-scroll-nav="next"][data-scroll-target="${containerId}"]`);
        this.indicator = this.container.closest('[data-scroll-container]')?.parentElement?.querySelector('.scroll-indicator-progress');
        
        this.scrollAmount = 300; // Default scroll amount in pixels
        this.init();
    }

    init() {
        if (!this.container) return;

        // Setup event listeners
        if (this.prevBtn) {
            this.prevBtn.addEventListener('click', () => this.scroll('prev'));
        }
        if (this.nextBtn) {
            this.nextBtn.addEventListener('click', () => this.scroll('next'));
        }

        // Update buttons and indicator on scroll
        this.container.addEventListener('scroll', () => {
            this.updateButtons();
            this.updateIndicator();
        });

        // Update on window resize
        window.addEventListener('resize', () => {
            this.updateButtons();
            this.updateIndicator();
        });

        // Initial update
        this.updateButtons();
        this.updateIndicator();

        // Support touch swipe
        this.initTouchSwipe();
    }

    scroll(direction) {
        const scrollAmount = this.getOptimalScrollAmount();
        const currentScroll = this.container.scrollLeft;
        const targetScroll = direction === 'next' 
            ? currentScroll + scrollAmount 
            : currentScroll - scrollAmount;

        this.container.scrollTo({
            left: targetScroll,
            behavior: 'smooth'
        });
    }

    getOptimalScrollAmount() {
        // Scroll by container width or default amount
        const containerWidth = this.container.offsetWidth;
        return containerWidth > 0 ? containerWidth * 0.8 : this.scrollAmount;
    }

    updateButtons() {
        if (!this.prevBtn || !this.nextBtn) return;

        const scrollLeft = this.container.scrollLeft;
        const maxScroll = this.container.scrollWidth - this.container.clientWidth;

        // Update prev button
        if (scrollLeft <= 1) {
            this.prevBtn.disabled = true;
            this.prevBtn.classList.add('opacity-0', 'pointer-events-none');
        } else {
            this.prevBtn.disabled = false;
            this.prevBtn.classList.remove('opacity-0', 'pointer-events-none');
        }

        // Update next button
        if (scrollLeft >= maxScroll - 1) {
            this.nextBtn.disabled = true;
            this.nextBtn.classList.add('opacity-0', 'pointer-events-none');
        } else {
            this.nextBtn.disabled = false;
            this.nextBtn.classList.remove('opacity-0', 'pointer-events-none');
        }
    }

    updateIndicator() {
        if (!this.indicator) return;

        const scrollLeft = this.container.scrollLeft;
        const maxScroll = this.container.scrollWidth - this.container.clientWidth;
        const percentage = maxScroll > 0 ? (scrollLeft / maxScroll) * 100 : 0;

        this.indicator.style.width = `${percentage}%`;
    }

    initTouchSwipe() {
        let touchStartX = 0;
        let touchEndX = 0;

        this.container.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        this.container.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            this.handleSwipe(touchStartX, touchEndX);
        }, { passive: true });
    }

    handleSwipe(startX, endX) {
        const swipeThreshold = 50;
        const diff = startX - endX;

        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
                // Swipe left - scroll right
                this.scroll('next');
            } else {
                // Swipe right - scroll left
                this.scroll('prev');
            }
        }
    }
}

// Auto-initialize all scroll containers on page load
document.addEventListener('DOMContentLoaded', function() {
    // Find all containers with data-scroll-container
    const containers = document.querySelectorAll('[data-scroll-container]');
    
    containers.forEach(container => {
        const containerId = container.id;
        if (containerId) {
            new HorizontalScrollNav(containerId);
        }
    });
});

// Expose class globally for manual initialization if needed
window.HorizontalScrollNav = HorizontalScrollNav;
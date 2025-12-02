/**
 * Events Page Filter & Load More System
 * Reusable script untuk filtering events dan load more functionality
 *
 * File: public/js/events-filter.js
 * Usage: Include di layout atau page yang membutuhkan
 */

class EventsFilter {
    constructor() {
        this.filterButtons = document.querySelectorAll(".filter-button");
        this.loadMoreBtn = document.getElementById("load-more-btn");
        this.loadingSpinner = document.getElementById("loading-spinner");
        this.eventsContainer = document.getElementById("events-container");

        this.currentFilter = "all";
        this.isLoading = false;

        this.init();
    }

    init() {
        this.setupFilterButtons();
        this.setupLoadMore();
        this.initCardAnimations();
    }

    setupFilterButtons() {
        this.filterButtons.forEach((button) => {
            button.addEventListener("click", () =>
                this.handleFilterClick(button)
            );
        });
    }

    handleFilterClick(button) {
        const filter = button.dataset.filter;

        // Jika filter sama dengan curretn filter, dan bukan pertama kali klik, abaikan
        if (this.currentFilter === filter && !this.isLoading) return;

        this.currentFilter = filter;

        // Update button states
        this.updateButtonStates(button);

        // Filter cards with animation
        this.loadFilteredEvents(filter);
    }

    updateButtonStates(activeButton) {
        this.filterButtons.forEach((btn) => {
            // Remove active classes
            btn.classList.remove(
                "active",
                "bg-gradient-to-r",
                "from-blue-600",
                "to-purple-600",
                "text-white",
                "shadow-lg"
            );

            // Add inactive classes
            btn.classList.add(
                "bg-white",
                "border",
                "border-gray-200",
                "text-gray-700",
                "shadow-sm"
            );
        });

        // Set active button
        activeButton.classList.add(
            "active",
            "bg-gradient-to-r",
            "from-blue-600",
            "to-purple-600",
            "text-white",
            "shadow-lg"
        );
        activeButton.classList.remove(
            "bg-white",
            "border",
            "border-gray-200",
            "text-gray-700",
            "shadow-sm"
        );
    }

    async loadFilteredEvents(filter) {
        this.isLoading = true;
        this.eventsContainer.innerHTML = `
            <div class="flex items-center justify-center w-full h-64 text-gray-500 animate-pulse text-center">
                Memuat ${filter === 'all' ? 'semua event' : filter}...
            </div>
        `;

        this.loadMoreBtn.disabled = false;
        this.loadMoreBtn.innerHTML = 'Muat Lebih Banyak';
        this.loadMoreBtn.classList.remove("opacity-50", "cursor-not-allowed");
        this.loadMoreBtn.classList.add("hover:-translate-y-1", "hover:shadow-xl", "hover:bg-blue-500", "hover:text-white");

        this.loadingSpinner.classList.remove("hidden");

        try {
            const response = await this.fetchMoreEvents(1);
            if (response.success && response.html.trim() !== "") {
                this.eventsContainer.innerHTML = response.html;
                this.initCardAnimations();

                // Update tombol load more
                this.loadMoreBtn.dataset.nextPage = 2;
                if (response.hasMore) {
                    this.loadMoreBtn.disabled = false;
                    this.loadMoreBtn.classList.remove(
                        "hidden",
                        "opacity-50",
                        "cursor-not-allowed"
                    );
                } else {
                    this.disableLoadMore();
                }
            } else {
                this.eventsContainer.innerHTML = `
                    <div class="w-full text-center py-8 text-gray-500">
                        Tidak ada event ${filter}.
                    </div>
                `;
                this.disableLoadMore();
            }
        } catch (error) {
            console.error("Error loading filtered events:", error);
            this.showMessage("error", "Gagal memuat event. Silakan coba lagi.");
        } finally {
            this.isLoading = false;
            this.loadingSpinner.classList.add("hidden");
        }
    }

    filterCards(filter) {
        const eventCards = this.eventsContainer.querySelectorAll(".event-card");

        eventCards.forEach((card, index) => {
            const shouldShow =
                filter === "all" || card.dataset.category === filter;

            if (shouldShow) {
                // Show card with animation
                card.style.display = "block";
                setTimeout(() => {
                    card.style.opacity = "1";
                    card.style.transform = "translateY(0)";
                }, index * 50);
            } else {
                // Hide card with animation
                card.style.opacity = "0";
                card.style.transform = "translateY(20px)";
                setTimeout(() => {
                    card.style.display = "none";
                }, 300);
            }
        });
    }

    setupLoadMore() {
        if (!this.loadMoreBtn) return;

        this.loadMoreBtn.addEventListener("click", () => this.handleLoadMore());
    }

    async handleLoadMore() {
        if (this.isLoading) return;

        this.isLoading = true;
        this.loadMoreBtn.classList.add("hidden");
        this.loadingSpinner.classList.remove("hidden");

        try {
            const nextPage = this.loadMoreBtn.dataset.nextPage;
            const response = await this.fetchMoreEvents(nextPage);

            if (response.success && response.html.trim() !== "") {
                this.appendEvents(response.html);

                // Update next page number
                this.loadMoreBtn.dataset.nextPage = parseInt(nextPage) + 1;

                // Show success message
                this.showMessage("success", "Event berhasil dimuat!");

                // Check if there are more events
                if (!response.hasMore) {
                    this.disableLoadMore();
                }
            } else {
                this.disableLoadMore();
            }
        } catch (error) {
            console.error("Error loading more events:", error);
            this.showMessage("error", "Gagal memuat event. Silakan coba lagi.");
        } finally {
            this.isLoading = false;
            this.loadingSpinner.classList.add("hidden");

            // Only show button again if not disabled
            if (!this.loadMoreBtn.disabled) {
                this.loadMoreBtn.classList.remove("hidden");
            }
        }
    }

    async fetchMoreEvents(page) {
        const response = await fetch(
            `/api/events?page=${page}&filter=${this.currentFilter}`,
            {
                method: "GET",
                headers: {
                    Accept: "application/json",
                    "X-Requested-With": "XMLHttpRequest",
                },
            }
        );

        if (!response.ok) {
            throw new Error("Failed to load events");
        }

        return await response.json();
    }

    appendEvents(eventsHtml) {
        // Create temporary container
        const temp = document.createElement("div");
        temp.innerHTML = eventsHtml;

        // Get all new cards
        const newCards = temp.querySelectorAll(".event-card");

        // Append each card with animation
        newCards.forEach((card, index) => {
            card.style.opacity = "0";
            card.style.transform = "translateY(20px)";
            card.style.transition = "opacity 0.5s ease, transform 0.5s ease";

            this.eventsContainer.appendChild(card);

            // Trigger animation
            setTimeout(() => {
                card.style.opacity = "1";
                card.style.transform = "translateY(0)";
            }, index * 100);
        });
    }

    disableLoadMore() {
        this.loadMoreBtn.innerHTML = `
            <svg class="w-4 h-4 sm:w-5 sm:h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
            </svg>
            Semua Event Telah Dimuat
        `;
        this.loadMoreBtn.disabled = true;
        this.loadMoreBtn.classList.remove(
            "hover:-translate-y-1",
            "hover:shadow-xl",
            "hover:bg-blue-500",
            "hover:text-white"
        );
        this.loadMoreBtn.classList.add("opacity-50", "cursor-not-allowed");
    }

    showMessage(type, message) {
        const messageDiv = document.createElement("div");
        messageDiv.className = `mt-4 mb-4 text-center font-medium ${
            type === "success" ? "text-green-600" : "text-red-600"
        }`;

        const icon =
            type === "success"
                ? '<svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>'
                : '<svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>';

        messageDiv.innerHTML = icon + message;

        const loadMoreSection = document.getElementById("load-more-section");
        loadMoreSection.parentNode.insertBefore(messageDiv, loadMoreSection);

        setTimeout(() => messageDiv.remove(), 3000);
    }

    initCardAnimations() {
        // Initial animation for cards
        const eventCards = this.eventsContainer.querySelectorAll(".event-card");

        eventCards.forEach((card, index) => {
            card.style.opacity = "0";
            card.style.transform = "translateY(20px)";
            card.style.transition = "opacity 0.5s ease, transform 0.5s ease";

            setTimeout(() => {
                card.style.opacity = "1";
                card.style.transform = "translateY(0)";
            }, index * 100);
        });
    }
}

// Initialize when DOM is ready
document.addEventListener("DOMContentLoaded", function () {
    new EventsFilter();
});

// Expose class globally for manual initialization if needed
window.EventsFilter = EventsFilter;

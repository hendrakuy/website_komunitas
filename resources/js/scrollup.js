// resources/js/scrollup.js
document.addEventListener("DOMContentLoaded", () => {
    const scrollBtn = document.getElementById("scrollUpBtn");

    if (!scrollBtn) return;

    window.addEventListener("scroll", () => {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            scrollBtn.classList.remove("hidden");
        } else {
            scrollBtn.classList.add("hidden");
        }
    });

    scrollBtn.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
});

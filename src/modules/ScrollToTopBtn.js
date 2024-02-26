class ScrollToTopBtn {
    constructor() {
        this.scroll = document.querySelector(".scroll");
        this.events()
    }

    events() {
        window.addEventListener("scroll", () => {
            this.scroll.classList.toggle("active", window.scrollY > 200);
        });

        this.scroll.addEventListener("click", () => {
            this.scrollToTop();
        }); 
    }

    scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    }
}

export default ScrollToTopBtn;
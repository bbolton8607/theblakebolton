class MobileMenu {
    constructor() {
        this.menuIcon = document.querySelector(".site-header__menu-icon")
        this.menuContent = document.querySelector(".nav-bar__main-menu")
        this.siteHeader = document.querySelector(".site-header")
        this.events()
    }

    events() {
        this.menuIcon.addEventListener("click", () => this.toggleTheMenu())
    }

    toggleTheMenu() {
        this.menuContent.classList.toggle("nav-bar__main-menu--is-visible")
        this.siteHeader.classList.toggle("nav-bar--is-expanded")
        this.menuIcon.classList.toggle("site-header__menu-icon--close-x")
    }
}

export default MobileMenu;
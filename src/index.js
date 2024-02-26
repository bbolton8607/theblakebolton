import "../css/style.scss";

// Animation on Scroll
import AOS from "aos";
import "aos/dist/aos.css";

AOS.init();

// Our Modules / Classes
import ProgressBar from "./modules/ProgressBar";
import FontAwesome from "./modules/FontAwesome";
import MobileMenu from "./modules/MobileMenu";
import Splide from "./modules/Splide.min";
import StickyHeader from "./modules/StickyHeader";
import ScrollToTopBtn from "./modules/ScrollToTopBtn";
import SplideController from "./modules/SplideController";
import Cursor from "./modules/Cursor";
import parallax from "./modules/parallax.min";

// Instantiate a new object using our modules/classes

const stickyHeader = new StickyHeader();
const mobileMenu = new MobileMenu();
const scrollToTopBtn = new ScrollToTopBtn();
const progressBarInstance = new ProgressBar();

if (module.hot) {
  module.hot.accept();
}

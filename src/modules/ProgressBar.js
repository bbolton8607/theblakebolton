class ProgressBar {
  constructor() {
    this.progressBar = document.getElementById("myBar");
    this.progressSection = document.querySelector(".progressSection");
    this.progressBarContainers = document.querySelectorAll(
      ".progress-container"
    );
    this.updateProgressBars();
    window.addEventListener("scroll", this.updateProgressBars.bind(this));
  }

  isInViewport(element) {
    const rect = element.getBoundingClientRect();
    // console.log(rect);
    return (
      rect.top <= 750
      //   rect.bottom <=
      //     (window.innerHeight || document.documentElement.clientHeight)
    );
  }

  updateProgressBars() {
    this.progressBarContainers.forEach((container) => {
      const progressBar = container.querySelector(".progress-bar");
      if (this.isInViewport(container)) {
        progressBar.style.width = "100%";
      } else {
        progressBar.style.width = "0";
      }
    });
  }
}

// Create an instance of ProgressBar
export default ProgressBar;

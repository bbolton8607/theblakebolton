const cursorDot = document.querySelector(".cursor .dot");
const cursorCircle = document.querySelector(".cursor .circle");
const cursorText = document.querySelector(".cursor .dot span");
var touchDevice = false;
var hoverLink = false;

let currentX = 0,
  currentY = 0;
let aimX = 0,
  aimY = 0;
let speed = 0.15;

// document.body.classList.add("noCursor");
// cursorCircle.classList.remove("hide");
// cursorDot.classList.remove("hide");

const animate = () => {
  currentX += (aimX - currentX) * speed;
  currentY += (aimY - currentY) * speed;

  cursorCircle.style.left = currentX + "px";
  cursorCircle.style.top = currentY + "px";
  requestAnimationFrame(animate);
};

animate();

document.addEventListener("mousemove", (e) => {
  if (!touchDevice) {
    cursorDot.style.left = e.clientX + "px";
    cursorDot.style.top = e.clientY + "px";
  }
  if (!hoverLink) {
    aimX = e.clientX;
    aimY = e.clientY;
  }
});

document.addEventListener("touchend", (e) => {
  touchDevice = true;
  cursorCircle.remove();
  cursorDot.remove();
  document.body.classList.remove("noCursor");
});

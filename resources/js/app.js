import './bootstrap';

// Intro
setTimeout(() => {
  document.getElementById("intro").remove();
}, 4200);

// Parallax Effect
window.addEventListener("scroll", () => {
  const scrollY = window.scrollY;

  document.querySelectorAll(".layer").forEach(layer => {
    const speed = parseFloat(layer.dataset.speed);
    layer.style.transform = `translateY(${scrollY * speed}px)`;

    const banner = document.querySelector("section.bg-sky");
    const arrows = document.querySelector(".arrows-container");

    if (banner && arrows) {
      const bannerHeight = banner.offsetHeight;

      if (scrollY > bannerHeight * 0.4) {
        arrows.style.opacity = "0";
        arrows.style.pointerEvents = "none";
      } else {
        arrows.style.opacity = "1";
        arrows.style.pointerEvents = "auto";
      }
    }
  });
});

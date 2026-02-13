import './bootstrap';

// Intro
setTimeout(() => {
  document.getElementById("intro").remove();
}, 4000);

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


// Linguagem
const langButtons = document.querySelectorAll(".lang-btn");

langButtons.forEach(btn => {
  btn.addEventListener("click", async () => {
    langButtons.forEach(b => b.classList.remove("active"));
    btn.classList.add("active");

    const selectedLang = btn.dataset.lang;
    localStorage.setItem("lang", selectedLang);

    await fetch("/set-language", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
      },
      body: JSON.stringify({ lang: selectedLang })
    });

    location.reload();
  });
});

// quando carregar a página, manter idioma salvo
const savedLang = localStorage.getItem("lang") || "pt";

langButtons.forEach(btn => {
  if (btn.dataset.lang === savedLang) {
    btn.classList.add("active");
  } else {
    btn.classList.remove("active");
  }
});
import "./bootstrap";

// alpine js
import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// feather icons
import feather from "feather-icons";

document.addEventListener("DOMContentLoaded", () => {
    feather.replace();
});

// swiper js
import Swiper from "swiper/bundle";
import "swiper/css/bundle";

// navbar
const menuBtn = document.getElementById("menuBtn");
const closeBtn = document.getElementById("closeBtn");
const menuOverlay = document.getElementById("menuOverlay");

menuBtn.onclick = () => {
    menuOverlay.classList.remove("translate-y-[100vh]");
};

closeBtn.onclick = () => {
    menuOverlay.classList.add("translate-y-[100vh]");
};

window.addEventListener("scroll", () => {
    const navbar = document.getElementById("navbar");

    if (window.scrollY > 10) {
        navbar.classList.add("bg-[#C8A27A]", "shadow-md");
    } else {
        navbar.classList.remove("bg-[#C8A27A]", "shadow-md");
    }
});

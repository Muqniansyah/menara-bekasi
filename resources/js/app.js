import "./bootstrap";

// AOS
import AOS from "aos";
import "aos/dist/aos.css";

// GSAP
import { gsap } from "gsap";

// Inisialisasi AOS
AOS.init();

// bootstrap icons
import "bootstrap-icons/font/bootstrap-icons.css";

// kontak - modal promo alert (popup muncul hanya 1 kali per 24 jam)
window.whatsappPromo = function () {
    return {
        show: false,
        delay: 3000, // muncul setelah 3 detik

        init() {
            const lastShown = localStorage.getItem("promoLastShown");
            const now = Date.now();
            const oneDay = 24 * 60 * 60 * 1000;

            // Jika belum pernah muncul atau sudah lewat 24 jam
            if (!lastShown || now - lastShown > oneDay) {
                setTimeout(() => {
                    this.show = true;
                    localStorage.setItem("promoLastShown", now);
                }, this.delay);
            }
        },

        closePopup() {
            this.show = false;
        },
    };
};

// produk
window.productDetail = function () {
    return {
        active: null,
        activeId: null,

        showDetail(data) {
            this.active = data;
            this.activeId = data.id;

            // scroll ke grid produk, bukan ke bawah halaman
            setTimeout(() => {
                const target = document.querySelector("#produk-container");
                if (target) {
                    target.scrollIntoView({
                        behavior: "smooth",
                        block: "start",
                    });
                }
            }, 50);
        },

        shareWA() {
            window.open(
                `https://wa.me/?text=${encodeURIComponent(
                    this.active.title + " - " + window.location.href
                )}`
            );
        },

        shareFB() {
            window.open(
                `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(
                    window.location.href
                )}`
            );
        },

        copyLink() {
            navigator.clipboard.writeText(window.location.href);
            alert("Link berhasil disalin!");
        },
    };
};

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

const swiper = new Swiper(".recentSwiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,

    breakpoints: {
        640: { slidesPerView: 2 },
        1024: { slidesPerView: 3 },
        1280: { slidesPerView: 4 },
    },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

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

// kontak (GetButton.io)
(function () {
    var options = {
        whatsapp: "+6285817298071",
        call_to_action: "Hai, Ada yang bisa saya bantu?",
        position: "right",
    };
    var proto = document.location.protocol,
        host = "getbutton.io",
        url = proto + "//static." + host;
    var s = document.createElement("script");
    s.type = "text/javascript";
    s.async = true;
    s.src = url + "/widget-send-button/js/init.js";
    s.onload = function () {
        WhWidgetSendButton.init(host, proto, options);
    };
    var x = document.getElementsByTagName("script")[0];
    x.parentNode.insertBefore(s, x);
})();

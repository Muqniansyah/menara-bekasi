// ============================================================
// SEMUA IMPORT DI PALING ATAS
// ============================================================
import "./bootstrap";
import emailjs from "@emailjs/browser";
import anime from "animejs/lib/anime.es.js";
import AOS from "aos";
import "aos/dist/aos.css";
import { gsap } from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";
import SplitType from "split-type";
import Alpine from "alpinejs";
import Collapse from "@alpinejs/collapse";
import feather from "feather-icons";
import Swiper from "swiper/bundle";
import "swiper/css/bundle";
import "bootstrap-icons/font/bootstrap-icons.css";

// ============================================================
// INISIALISASI AWAL
// ============================================================
emailjs.init("7ZOAwNXpHr-6V93-q");
gsap.registerPlugin(ScrollTrigger);

// ============================================================
// EMAILJS — FORM KONTAK
// ============================================================
const form = document.getElementById("kontakForm");
const notif = document.getElementById("notif");

if (form) {
    form.addEventListener("submit", function (e) {
        e.preventDefault();

        notif.innerHTML = `
            <div class="mb-4 p-3 bg-blue-100 text-blue-700 rounded-xl">
                Mengirim pesan...
            </div>
        `;

        emailjs
            .sendForm("service_lemycsp", "template_sc6g5yo", form)
            .then(() => {
                notif.innerHTML = `
                    <div class="mb-4 p-3 bg-green-100 text-green-700 rounded-xl">
                        Pesan berhasil dikirim!
                    </div>
                `;
                form.reset();
            })
            .catch(() => {
                notif.innerHTML = `
                    <div class="mb-4 p-3 bg-red-100 text-red-700 rounded-xl">
                        Terjadi kesalahan, coba lagi nanti.
                    </div>
                `;
            });
    });
}

// ============================================================
// AOS
// ============================================================
AOS.init({
    duration: 700,
    once: true,
    startEvent: "load",
});

window.addEventListener("load", () => {
    AOS.refresh();
    AOS.refreshHard();
});

// ============================================================
// ALPINE — WHATSAPP PROMO POPUP
// ============================================================
window.whatsappPromo = function () {
    return {
        show: false,
        delay: 3000,

        init() {
            const lastShown = localStorage.getItem("promoLastShown");
            const now = Date.now();
            const oneDay = 24 * 60 * 60 * 1000;

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

// ============================================================
// ALPINE — PRODUCT DETAIL + SWIPER
// ============================================================
window.productDetail = function () {
    return {
        activeId: null,
        produkList: window.dataProduk || [],

        active: {
            id: null,
            title: "",
            desc: "",
            images: [],
        },
        swiper: null,

        showDetail(data) {
            this.active = data;
            this.activeId = data.id;

            this.$nextTick(() => {
                this.initSwiper();
            });

            setTimeout(() => {
                document
                    .querySelector(".product-swiper")
                    ?.scrollIntoView({ behavior: "smooth", block: "center" });
            }, 100);
        },

        initSwiper() {
            if (this.swiper) {
                this.swiper.destroy(true, true);
                this.swiper = null;
            }

            this.$nextTick(() => {
                setTimeout(() => {
                    const wrapper =
                        this.$refs.mySwiper.querySelector(".swiper-wrapper");
                    wrapper.innerHTML = "";

                    this.active.images.forEach((src) => {
                        const slide = document.createElement("div");
                        slide.className = "swiper-slide";
                        slide.innerHTML = `<img src="${src}" class="w-full h-full object-cover rounded-2xl shadow-lg border border-gray-200">`;
                        wrapper.appendChild(slide);
                    });

                    this.swiper = new Swiper(this.$refs.mySwiper, {
                        slidesPerView: 1,
                        loop: this.active.images.length > 1,
                        navigation: {
                            nextEl: this.$refs.nextBtn,
                            prevEl: this.$refs.prevBtn,
                        },
                        on: {
                            slideChange: () => {
                                this.swiper = this.swiper;
                            },
                        },
                    });
                }, 50);
            });
        },

        goTo(i) {
            if (!this.swiper) return;
            this.swiper.slideToLoop(i);
        },

        shareWA() {
            window.open(
                `https://wa.me/?text=${encodeURIComponent(
                    this.active.title + " - " + window.location.href,
                )}`,
            );
        },

        shareFB() {
            window.open(
                `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(
                    window.location.href,
                )}`,
            );
        },

        copyLink() {
            navigator.clipboard.writeText(window.location.href);
            alert("Link berhasil disalin!");
        },
    };
};

// ============================================================
// ALPINE START
// ============================================================
window.Alpine = Alpine;
Alpine.plugin(Collapse);
Alpine.start();

// ============================================================
// SWIPER — RECENT / TREN TERKINI
// ============================================================
document.addEventListener("DOMContentLoaded", () => {
    const swiperEl = document.querySelector(".recentSwiper");
    if (swiperEl) {
        new Swiper(swiperEl, {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,

            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },

            breakpoints: {
                640: { slidesPerView: 2 },
                1024: { slidesPerView: 3 },
                1280: { slidesPerView: 4 },
            },

            navigation: {
                nextEl: ".swiper-btn-next",
                prevEl: ".swiper-btn-prev",
            },

            on: {
                init: function () {
                    gsap.fromTo(
                        this.slides[this.activeIndex],
                        { scale: 0.9, opacity: 0 },
                        {
                            scale: 1,
                            opacity: 1,
                            duration: 0.8,
                            ease: "power2.out",
                        },
                    );
                },

                slideChange: function () {
                    this.slides.forEach((slide) => {
                        gsap.to(slide, {
                            scale: 1,
                            opacity: 0.7,
                            duration: 0.6,
                            ease: "power1.out",
                        });
                    });

                    gsap.fromTo(
                        this.slides[this.activeIndex],
                        { scale: 0.9, opacity: 0 },
                        {
                            scale: 1,
                            opacity: 1,
                            duration: 0.8,
                            ease: "power2.out",
                        },
                    );
                },
            },
        });
    }
});

// ============================================================
// NAVBAR
// ============================================================
const menuBtn = document.getElementById("menuBtn");
const closeBtn = document.getElementById("closeBtn");
const menuOverlay = document.getElementById("menuOverlay");

if (menuBtn && closeBtn && menuOverlay) {
    menuBtn.onclick = () => {
        menuOverlay.classList.remove("translate-y-[100vh]");
    };

    closeBtn.onclick = () => {
        menuOverlay.classList.add("translate-y-[100vh]");
    };
}

window.addEventListener("scroll", () => {
    const navbar = document.getElementById("navbar");
    if (!navbar) return;

    if (window.scrollY > 10) {
        navbar.classList.add("bg-[#C8A27A]", "shadow-md");
    } else {
        navbar.classList.remove("bg-[#C8A27A]", "shadow-md");
    }
});

// ============================================================
// ANIMEJS — ANIMASI TEKS HEADER
// ============================================================
document.addEventListener("DOMContentLoaded", () => {
    const text = document.querySelector(".text-title");
    if (!text) return;

    text.innerHTML = text.textContent.replace(
        /\S/g,
        "<span class='letter'>$&</span>",
    );

    anime.timeline().add({
        targets: ".letter",
        opacity: [0, 1],
        translateY: [40, 0],
        delay: anime.stagger(50),
    });
});

// ============================================================
// FEATHER ICONS
// ============================================================
document.addEventListener("DOMContentLoaded", () => {
    feather.replace();
});

// ============================================================
// GSAP ANIMASI
// ============================================================
document.addEventListener("DOMContentLoaded", () => {
    if (document.querySelector(".kontak-img")) {
        gsap.to(".kontak-img", {
            y: -20,
            duration: 3,
            ease: "power1.inOut",
            repeat: -1,
            yoyo: true,
        });
    }

    if (document.querySelector("#tentang")) {
        gsap.to(".tentang .bg-black\\/40, .tentang .bg-\\[\\#C8A27A\\]\\/20", {
            scrollTrigger: {
                trigger: "#tentang",
                start: "top 85%",
            },
            opacity: 0.6,
            duration: 1.5,
            ease: "power2.out",
        });

        gsap.from("#tentang p", {
            scrollTrigger: {
                trigger: "#tentang",
                start: "top 80%",
            },
            opacity: 0,
            y: 50,
            duration: 1.2,
            ease: "power3.out",
        });
    }

    if (document.querySelector("#judul")) {
        const text = new SplitType("#judul", { types: "chars" });
        gsap.set("#judul", { visibility: "visible" });
        gsap.from(text.chars, {
            opacity: 0,
            y: 20,
            stagger: 0.15,
            duration: 0.8,
            ease: "power2.out",
        });
    }
});

// ============================================================
// GALERI — SCROLL ANIMATION + LIGHTBOX
// ============================================================
document.addEventListener("DOMContentLoaded", () => {
    const items = document.querySelectorAll(".gallery-item");

    if (items.length > 0) {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.style.animation =
                            "fadeUp 0.8s ease-out forwards";
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.2 },
        );

        items.forEach((item) => observer.observe(item));
    }

    const images = document.querySelectorAll(".gallery-img");
    const lightbox = document.getElementById("lightbox");
    const lightboxImg = document.getElementById("lightbox-img");

    if (lightbox && lightboxImg && images.length > 0) {
        images.forEach((img) => {
            img.addEventListener("click", () => {
                lightboxImg.src = img.src;
                lightbox.classList.remove("hidden");
                lightbox.classList.add("flex");
            });
        });

        lightbox.addEventListener("click", (e) => {
            if (e.target !== lightboxImg) {
                lightbox.classList.add("hidden");
                lightbox.classList.remove("flex");
            }
        });
    }
});

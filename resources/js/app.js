import "./bootstrap";

// dari EmailJS dashboard
import emailjs from "@emailjs/browser";
emailjs.init("7ZOAwNXpHr-6V93-q");

const form = document.getElementById("kontakForm");
const notif = document.getElementById("notif");

// pastikan hanya jalan jika form kontak ada
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

// import anime js versi 4
import anime from "animejs/lib/anime.es.js";

// AOS
import AOS from "aos";
import "aos/dist/aos.css";

// GSAP
import { gsap } from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";
import SplitType from "split-type";

// Daftarkan plugin
gsap.registerPlugin(ScrollTrigger);

// Inisialisasi AOS
AOS.init({
    duration: 700,
});

window.addEventListener("load", () => {
    AOS.refresh();
});

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
        // --- UNTUK MENANDAI CARD AKTIF ---
        activeId: null, // <--- DITAMBAHKAN

        // DATA UTAMA
        active: {
            id: null,
            title: "",
            desc: "",
            images: [],
        },
        swiper: null,

        // --- SHOW DETAIL ---
        showDetail(data) {
            this.active = data;
            this.activeId = data.id; // <--- DITAMBAHKAN

            this.$nextTick(() => {
                this.initSwiper();
            });

            setTimeout(() => {
                document
                    .querySelector(".product-swiper")
                    ?.scrollIntoView({ behavior: "smooth", block: "center" });
            }, 100);
        },

        // --- SWIPER ---
        initSwiper() {
            if (this.swiper) {
                this.swiper.destroy(true, true);
                this.swiper = null;
            }

            this.$nextTick(() => {
                setTimeout(() => {
                    this.swiper = new Swiper(this.$refs.mySwiper, {
                        modules: [Navigation],
                        slidesPerView: 1,
                        loop: true,
                        navigation: {
                            nextEl: this.$refs.nextBtn,
                            prevEl: this.$refs.prevBtn,
                        },
                    });

                    this.swiper.update();
                }, 50);
            });
        },

        goTo(i) {
            if (!this.swiper) return;
            this.swiper.slideToLoop(i);
        },

        // --- SHARE BUTTONS ---
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

// animejs jalan setelah Alpine untuk animasi teks header
document.addEventListener("DOMContentLoaded", () => {
    const text = document.querySelector(".text-title");
    if (!text) return;

    text.innerHTML = text.textContent.replace(
        /\S/g,
        "<span class='letter'>$&</span>"
    );

    anime.timeline().add({
        targets: ".letter",
        opacity: [0, 1],
        translateY: [40, 0],
        delay: anime.stagger(50),
    });
});

// feather icons
import feather from "feather-icons";

document.addEventListener("DOMContentLoaded", () => {
    feather.replace();
});

// swiper js
import Swiper from "swiper/bundle";
import "swiper/css/bundle";
import { Navigation } from "swiper/modules";
const recentSwiper = new Swiper(".recentSwiper", {
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
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    on: {
        init: function () {
            gsap.fromTo(
                this.slides[this.activeIndex],
                { scale: 0.9, opacity: 0 },
                { scale: 1, opacity: 1, duration: 0.8, ease: "power2.out" }
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
                { scale: 1, opacity: 1, duration: 0.8, ease: "power2.out" }
            );
        },
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
// (function () {
//     var options = {
//         whatsapp: "+6285817298071",
//         call_to_action: "Hai, Ada yang bisa saya bantu?",
//         position: "right",
//     };
//     var proto = document.location.protocol,
//         host = "getbutton.io",
//         url = proto + "//static." + host;
//     var s = document.createElement("script");
//     s.type = "text/javascript";
//     s.async = true;
//     s.src = url + "/widget-send-button/js/init.js";
//     s.onload = function () {
//         WhWidgetSendButton.init(host, proto, options);
//     };
//     var x = document.getElementsByTagName("script")[0];
//     x.parentNode.insertBefore(s, x);
// })();

// animasi gsap
document.addEventListener("DOMContentLoaded", () => {
    // kontak gsap
    gsap.to(".kontak-img", {
        y: -20, // gerak naik 20px
        duration: 3, // lamanya satu cycle
        ease: "power1.inOut",
        repeat: -1, // infinite
        yoyo: true, // naik-turun
    });

    // Animasi untuk overlay (gelap & gold) - tentang gsap
    gsap.to(".tentang .bg-black\\/40, .tentang .bg-\\[\\#C8A27A\\]\\/20", {
        scrollTrigger: {
            trigger: "#tentang",
            start: "top 85%",
        },
        opacity: 0.6,
        duration: 1.5,
        ease: "power2.out",
    });

    // Animasi untuk paragraf <p> - tentang gsap
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

    // animasi header pada pages
    const text = new SplitType("#judul", { types: "chars" });
    gsap.set("#judul", { visibility: "visible" });
    gsap.from(text.chars, {
        opacity: 0,
        y: 20,
        stagger: 0.15, // jeda antar huruf → efek ketik
        duration: 0.8, // animasi per karakter lebih lama
        ease: "power2.out",
    });
});

// (Scroll Animation + Lightbox) tentang galeri
document.addEventListener("DOMContentLoaded", () => {
    /* --- ANIMASI SAAT SCROLL (INTERSECTION OBSERVER) --- */
    const items = document.querySelectorAll(".gallery-item");

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
        { threshold: 0.2 }
    );

    items.forEach((item) => observer.observe(item));

    /* --- LIGHTBOX FULLSCREEN --- */
    const images = document.querySelectorAll(".gallery-img");
    const lightbox = document.getElementById("lightbox");
    const lightboxImg = document.getElementById("lightbox-img");

    images.forEach((img) => {
        img.addEventListener("click", () => {
            lightboxImg.src = img.src;
            lightbox.classList.remove("hidden");
            lightbox.classList.add("flex");
        });
    });

    // Tutup bila klik area luar
    lightbox.addEventListener("click", (e) => {
        if (e.target !== lightboxImg) {
            lightbox.classList.add("hidden");
            lightbox.classList.remove("flex");
        }
    });
});

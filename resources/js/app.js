import "./bootstrap";
import "flowbite";

import Swiper from "swiper";
import { Navigation, Pagination, Autoplay } from "swiper/modules";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

window.showContent = function (element) {
    const id = element.id.match(/\d+/)[0];
    const baseCard = document.getElementById(`baseCard${id}`);
    const detailedContent = document.getElementById(`detailedContent${id}`);

    if (element.id.includes("baseCard")) {
        baseCard.classList.add("hidden");
        detailedContent.classList.remove("hidden");
    } else {
        baseCard.classList.remove("hidden");
        detailedContent.classList.add("hidden");
    }
};

window.toggleMenu = function () {
    const navbarMenu = document.getElementById("navbar-sticky");
    navbarMenu.classList.toggle("hidden");
};

document.addEventListener("DOMContentLoaded", function () {
    const swiper = new Swiper(".layananSwiper", {
        modules: [Navigation, Pagination, Autoplay],
        slidesPerView: "auto",
        spaceBetween: 30,
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            type: "bullets",
            dynamicBullets: true,
            dynamicMainBullets: 1,
            renderBullet: function (index, className) {
                return '<span class="' + className + '"></span>';
            },
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 2,
            },
            1440: {
                slidesPerView: 3,
            },
        },
    });
});

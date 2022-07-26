'use strict'

var swiper = new Swiper(".talk-about-slider", {
    slidesPerView: 3,
    spaceBetween: 20,
    navigation: {
        nextEl: ".button-right",
        prevEl: ".button-left",
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
        },
        640: {
            slidesPerView: 2,
        },
        1250: {
            slidesPerView: 3,
        },
    },
});

const hamburger = document.querySelector(".hamburger");

function onDropClick(e) {
    const dropdown = e.currentTarget.nextElementSibling;
    const burgerBars = [].slice.call(e.currentTarget.children);

    if (!dropdown.classList.contains("dropdown-active")) {
        //If dropdown isn't active give it and the bars their active classes
        dropdown.classList.add("dropdown-active");
        burgerBars[0].classList.add("one-active");
        burgerBars[1].classList.add("two-active");
        burgerBars[2].classList.add("three-active");
    } else if (dropdown.classList.contains("dropdown-active")) {
        //else remove them
        dropdown.classList.remove("dropdown-active");
        burgerBars[0].classList.remove("one-active");
        burgerBars[1].classList.remove("two-active");
        burgerBars[2].classList.remove("three-active");
    }
}

hamburger.addEventListener("click", onDropClick);
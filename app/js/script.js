console.log("Hello");
console.log("hi");

const btnHamburger = document.querySelector("#btnHamburger");
const body = document.querySelector('body');
const header = document.querySelector('.header');
const overlay = document.querySelector('.overlay');
const mobileMenu = document.querySelector('.mobileMenu');
const nav__list = document.querySelector('.nav__list');
const menu = document.querySelector(".menu");
const nav__items = document.querySelectorAll(".nav__item");

const faders = document.querySelectorAll('.col-fade-in');
const sliders = document.querySelectorAll('.slide-in');
// const fadeElems = document.querySelectorAll('.has_fade');

btnHamburger.addEventListener('click', function() {
    console.log('click hamburger');

    if(header.classList.contains('open')){ // Close hamburger menu
        body.classList.remove('noscroll');
        header.classList.remove('open');
        // fadeElems.forEach(function(element) {
        //     element.classList.remove('fade-in');
        //     element.classList.add('fade-out');
        // });
        overlay.classList.remove('fade-in');
        overlay.classList.add('fade-out');
        nav__list.classList.remove('fade-in');
        mobileMenu.classList.remove('nav-open');
        mobileMenu.classList.add('hide-for-mobile');
        header__nav.classList.remove('nav__item--open');
    } 
    else { // Open hamburger menu
        body.classList.add('noscroll');
        header.classList.add('open');
        // fadeElems.forEach(function(element) {
        //     element.classList.add('fade-in');
        //     element.classList.remove('fade-out');
        // });
        overlay.classList.add('fade-in');
        overlay.classList.remove('fade-out');
        nav__list.classList.add('fade-in');
        mobileMenu.classList.add('nav-open');
        mobileMenu.classList.remove('hide-for-mobile');
        nav__item.classList.add('header--open');
    }
});

// Submenu
function toggleItem() {
    if (this.classList.contains("submenu-active")) {
      this.classList.remove("submenu-active");
    } else if (menu.querySelector(".submenu-active")) {
      menu.querySelector(".submenu-active").classList.remove("submenu-active");
      this.classList.add("submenu-active");
    } else {
      this.classList.add("submenu-active");
    }
  }
  
  for (let nav__item of nav__items) {
    if (nav__item.querySelector(".submenu")) {
      nav__item.addEventListener("click", toggleItem, false);
      nav__item.addEventListener("keypress", toggleItem, false);
    }
  }
  
  // Close submenu from anywhere on page
  function closeSubmenu(e) {
    let isClickInside = menu.contains(e.target);
  
    if (!isClickInside && menu.querySelector(".submenu-active")) {
      menu.querySelector(".submenu-active").classList.remove("submenu-active");
    }
  }
  
  document.addEventListener("click", closeSubmenu, false);
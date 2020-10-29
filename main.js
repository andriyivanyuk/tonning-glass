$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    items: 4,
    loop: true,
    nav: false,
    responsive: {
      0: {
        items: 1,
      },
      767: {
          items: 2
      },
      1024: {
          items: 5
      },
      1441: {
          items: 5
      }
    },
  });
});

var backdrop = document.querySelector(".backdrop");
var toggleButton = document.querySelector(".toggle-button");
var mobileNav = document.querySelector(".header__shell__mobile-navigation");
var desktopNav = document.querySelector(
  ".header-shell__upper-content__navigation-wrapper__main-navigation"
);
var sticky = desktopNav.offsetTop;

toggleButton.addEventListener("click", function () {
  mobileNav.style.display = "block";
  backdrop.style.display = "block";
});

backdrop.addEventListener("click", function () {
  mobileNav.style.display = "none";
  backdrop.style.display = "none";
});

window.onscroll = function () {
  addStickyNav();
};

function addStickyNav() {
  if (window.pageYOffset >= sticky) {
    desktopNav.classList.add("sticky");
  } else {
    desktopNav.classList.remove("sticky");
  }
}

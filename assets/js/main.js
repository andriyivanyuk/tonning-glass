const hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');
const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');
const menu_item = document.querySelectorAll('.header .nav-bar .nav-list ul li a');
const header = document.querySelector('.header.shell');

var advantageLink = document.querySelector(".advantage_link");
var worksLink = document.querySelector(".works_link");
var toggleBar = document.querySelector('.toggle-button');

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
        items: 2,
      },
      1024: {
        items: 5,
      },
      1441: {
        items: 5,
      },
    },
  });
});


hamburger.addEventListener('click', () => {
	hamburger.classList.toggle('active');
	mobile_menu.classList.toggle('active');
});

document.addEventListener('scroll', () => {
	var scroll_position = window.scrollY;
	if (scroll_position > 250) {
		header.style.backgroundColor = '#02133c';
	} else {
		header.style.backgroundColor = 'transparent';
	}
});

menu_item.forEach((item) => {
	item.addEventListener('click', () => {
		hamburger.classList.toggle('active');
		mobile_menu.classList.toggle('active');
	});
});



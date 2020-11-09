var backdrop = document.querySelector(".backdrop");
var toggleButton = document.querySelector(".toggle-button");
var mobileNav = document.querySelector(".header__shell__mobile-navigation");
var desktopNav = document.querySelector(
  ".header-shell__upper-content__navigation-wrapper__main-navigation"
);
var sticky = desktopNav.offsetTop;
var advantageLink = document.querySelector(".advantage_link");
var worksLink = document.querySelector(".works_link");
//Form elements
var appoinmentForm = document.querySelector(".appointment__shell__main-form");

var forms = document.forms['create-appointment'];

console.log(forms)

appoinmentForm.addEventListener('submit', (e) => {
   e.preventDefault();
  
});


function checkInputs() {
  const clientValue = name.value.trim();
  const emailValue = email.value.trim();
  const phoneValue = phone.value.trim();
  const serviceValue = service.value.trim();
  const descriptionValue = description.value.trim();

  if(clientValue === '') {
     setErrorFor(name, 'Client cannot be blank!');
  } else {
     setSuccessFor(name, )
  }
}

function setErrorFor(input, message) {
   const formControl = input.parentElement;
   const small = formControl.querySelector('small');

   small.innerText = message;
   formControl.className = 'form-control error'
}

function setSuccessFor() {

}



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

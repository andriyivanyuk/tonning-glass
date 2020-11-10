var appointmentForm = document.forms["create-appointment"];
const name = appointmentForm["name"];
const email = appointmentForm["email"];
const phone = appointmentForm["phone"];
const service = appointmentForm["service"];
const description = appointmentForm["description"];
const appointBtn = document.querySelector(".appointment__btn");

function checkName(event) {
  const formControl = document.getElementsByClassName("form-control")[0];
  const small = formControl.querySelector("small");
  if (event.value) {
    formControl.className = "form-control success";
  } else {
    formControl.className = "form-control error";
    small.innerText = "Пожалуйста введите имя";
  }
  checkBtnStatus();
}

function checkEmail(event) {
  const formControl = document.getElementsByClassName("form-control")[1];
  const small = formControl.querySelector("small");
  if (event.value) {
    formControl.className = "form-control success";
  } else {
    formControl.className = "form-control error";
    small.innerText = "Пожалуйста введите email";
  }
  checkBtnStatus();
}

function checkPhone(event) {
  const formControl = document.getElementsByClassName("form-control")[2];
  const small = formControl.querySelector("small");
  if (event.value) {
    formControl.className = "form-control success";
  } else {
    formControl.className = "form-control error";
    small.innerText = "Пожалуйста введите номер телефона";
  }
  checkBtnStatus();
}

function checkService(node) {
  const formControl = document.getElementsByClassName("form-control")[3];
  const small = formControl.querySelector("small");
  const sel = formControl.querySelector("select");
  const icon = formControl.querySelectorAll("i");

  if (node.value) {
    sel.classList.add("needed");
    sel.classList.remove("error-needed");
    formControl.classList.remove('error');
  } else {
    sel.classList.add("error-needed");
    small.innerText = "Пожалуйста укажите необходимую услугу";
    formControl.className = "form-control error";
    icon[0].classList.add("error-icon");
    icon[1].classList.add("error-icon");
    small.classList.add("hide-desc");
  }
  checkBtnStatus();
}

function checkBtnStatus() {
  if (name.value && email.value && phone.value && service.value) {
    appointBtn.disabled = false;
    console.log("value yes");
  } else {
    appointBtn.disabled = true;
    console.log("value no");
  }
}


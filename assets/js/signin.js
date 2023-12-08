let email = document.getElementById("emailL");
let password = document.getElementById("passwordD");
let form = document.getElementById("formL");
let emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;


email.addEventListener("keyup", function () {
  if (email.value === "" || !email.value.match(emailRegex)) {
        email.nextElementSibling.style.display = "block";
      } else {
        email.nextElementSibling.style.display = "none";
      }
});

password.addEventListener("keyup", function () {
  if (password.value === "" || password.value.length <= 8) {
    password.nextElementSibling.style.display = "block";
  } else {
    password.nextElementSibling.style.display = "none";
  }
});


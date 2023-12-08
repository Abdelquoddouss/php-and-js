let email_input = document.getElementById("email");
let input_phone = document.getElementById("phone");
let input_nom = document.getElementById("nom");
let input_prenom = document.getElementById("prenom");
let input_password = document.getElementById("password");
let form = document.getElementById("formlog");
let emailRegex =/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

input_nom.addEventListener("keyup", function () {
  
  if (input_nom.value === "") {
    input_nom.nextElementSibling.style.display = "block";
  } else {
    input_nom.nextElementSibling.style.display = "none";
  }

});


input_prenom.addEventListener("keyup", function () {

  if (input_prenom.value === "") {
    input_prenom.nextElementSibling.style.display = "block";
  } else {
    input_prenom.nextElementSibling.style.display = "none";
  }

});

input_phone.addEventListener("keyup", function () {

  if (input_phone.value === "" || input_phone.value.length !== 10) {
    input_phone.nextElementSibling.style.display = "block";
  } else {
    input_phone.nextElementSibling.style.display = "none";
  }
});

email_input.addEventListener("keyup", function () {

  if (email_input.value === "" || !email_input.value.match(emailRegex)) {
    email_input.nextElementSibling.style.display = "block";
  } else {
    email_input.nextElementSibling.style.display = "none";
  }
});

input_password.addEventListener("keyup", function () {
  
  if (input_password.value === "" || input_password.value.length <= 8 ) {
    input_password.nextElementSibling.style.display = "block";
  } else {
    input_password.nextElementSibling.style.display = "none";
  }
});








// console.log(input_nom);

// input_nom.addEventListener("change", () => {
//   console.log(input_nom.value);
// });

// email_input.addEventListener("invalid", ()=>{ input_error();});

// email_input.addEventListener("input", ()=>{  input_error();});

// function input_error(){
//     if(email_input.validity.valueMissing){
//         email_input.setCustomValidity("Vous n'avez pas saisi de données dans ce champ");
//     }else if(email_input.validity.typeMismatch){
//         email_input.setCustomValidity("anccorrect");
//     }else{
//         email_input.setCustomValidity("");
//         return true;
//     }
//  document.getElementById("error_message").innerText = email_input.validationMessage;

// }

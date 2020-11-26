const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");
const file = document.querySelector('#file');
sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
  $("#loginActive").val("0");
  // alert($("#loginActive").val());
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
  $("#loginActive").val("1");
  // alert($("#loginActive").val());
});

$('#id').addEventListener('click', function () {
  $('#yourinputname').trigger('click');
});

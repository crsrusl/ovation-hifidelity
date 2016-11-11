var hamburger = document.querySelector(".hamburger");
var burgerMenu = document.getElementById('burger-menu');

hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("is-active");
    burgerMenu.classList.toggle("is-active");
});
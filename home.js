// nav scroll bg effect
var nav = document.querySelector("nav");
var navLink = document.getElementsByClassName("nav-link");
var headerLogo = document.getElementById("logo-header");
var navToggler = document.getElementById("toggler")

window.addEventListener("scroll", function () {
  if (window.pageYOffset > 100) {
    nav.classList.add("bg-white", "shadow-sm");
    headerLogo.classList.add("text-dark");
    navToggler.classList.add("dark-toggler");
    for (var i = 0; i < navLink.length; i++) {
      navLink[i].classList.remove("text-white");
      navLink[i].classList.add("text-dark");
    }
  } else {
    nav.classList.remove("bg-white", "shadow-sm");
    headerLogo.classList.remove("text-dark");
    navToggler.classList.remove("dark-toggler");
    for (var i = 0; i < navLink.length; i++) {
      navLink[i].classList.remove("text-dark");
      navLink[i].classList.add("text-white");
    }
  }
});

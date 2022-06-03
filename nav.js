var nav = document.querySelector("nav");

window.addEventListener('scroll', () => {
  if (window.pageYOffset > 100) {
    nav.classList.add("shadow-sm");
  } else {
    nav.classList.remove("shadow-sm");
  }
})
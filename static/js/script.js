const openBtn = document.querySelector(".toggle__open");
const closeBtn = document.querySelector(".toggle__close");
const nav = document.querySelector("nav");

openBtn.addEventListener("click", () => {
  nav.style.right = 0;
});

closeBtn.addEventListener("click", () => {
  nav.style.right = -100 + "%";
});

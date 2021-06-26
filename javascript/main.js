const mainNavButton = document.querySelector("#mainNavButton");
const navbarMain = document.querySelector("#navbarMain");


mainNavButton.addEventListener("click", () => {
  navbarMain.classList.toggle("is-active");
});

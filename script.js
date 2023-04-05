//toggle class active
const navbarNav = document.querySelector(".navbar-nav");
//ketika gallery menu di klik
document.querySelector("#produk-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

// klik di luar slidebar untuk menghilangkan nav
const produk = document.querySelector("#produk-menu");

document.addEventListener("click", function (e) {
  if (!produk.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});

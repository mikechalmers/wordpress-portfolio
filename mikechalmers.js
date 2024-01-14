const nav = document.getElementById("burger-menu");
const menu = document.getElementById("menu-links");

nav.addEventListener("click", function (e) {
	menu.classList.add("open-menu");
});

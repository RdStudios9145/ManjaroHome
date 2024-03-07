const menu = document.getElementById("menu");

const render = () => {
	
};

render();

document.getElementById("container").addEventListener("contextmenu", (e) => {
    menu.style.display = "flex";
});

addEventListener("click", () => {
    menu.style.display = "none";
})
const menu = document.getElementById("menu");
const container = document.getElementById("container")
var elements = 0;

const render = async () => {
	const heiarchy = JSON.parse(await window.electronAPI.getHierarchy());
	console.log(heiarchy)
	elements = heiarchy.elements;
	container.innerHTML = "";
	renderElem(container, heiarchy);
};

const renderElem = (parent, elem) => {
	console.log(elem.children, elem, elem["children"])
	for (const element of elem.children) {
		const div = document.createElement("div");
		div.classList.add("element");
		div.innerText = element.name;

		div.oncontextmenu = (e) => {
			window.electronAPI.newobj(element.id, "New Obj", elements);
		};

		parent.append(div);
		if (element.children.length !== 0)
			renderElem(div, element);
	}
};

render();

document.getElementById("container").addEventListener("contextmenu", (e) => {
	console.log("hi");
	menu.style.transform = "translate(" + e.pageX + "px, " + e.pageY + "px)";
	menu.style.display = "flex";
});

addEventListener("click", () => {
	menu.style.display = "none";
})

document.getElementById("newobj").addEventListener("click", (e) => {
	window.electronAPI.newobj(-1, "New Obj");
	render();
})
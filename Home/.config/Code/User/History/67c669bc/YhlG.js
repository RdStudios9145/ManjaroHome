const menu = document.getElementById("menu");
var elements = 0;

const render = async () => {
	const heiarchy = await window.electronAPI.getHierarchy();
    console.log(heiarchy)
    elements = heiarchy.elements;
    renderElem((heiarchy));
};

const renderElem = (elem) => {
    console.log(elem.children, elem)
    for (const element of elem.children) {
        const div = document.createElement("div");
        div.classList.add("element");
        div.innerText = element.name;

        div.oncontextmenu = (e) => {
            window.electronAPI.newobj(element.id, "New Obj", elements);
        };

        document.append(div);
        if (element.children.length !== 0)
            renderElem(element);
    }
};

render();

document.getElementById("container").addEventListener("contextmenu", (e) => {
    menu.style.display = "flex";
});

addEventListener("click", () => {
    menu.style.display = "none";
})

document.getElementById("newobj").addEventListener("click", (e) => {
    window.electronAPI.newobj(-1, "New Obj");
    render();
})
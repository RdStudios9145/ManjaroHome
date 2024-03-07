const menu = document.getElementById("menu");

const render = async () => {
	const heiarchy = await window.electronAPI.getHierarchy();
    renderElem(JSON.parse(heiarchy));
};

const renderElem = (elem) => {
    for (const element of elem.children) {
        const div = document.createElement("div");
        div.classList.add("element");
        div.innerText = element.name;
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
    window.electronAPI.newobj("New Obj");
})
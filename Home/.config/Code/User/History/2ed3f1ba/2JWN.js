/**
 * @typedef {Object} Components
 * @property {String[]} builtIn
 * @property {String[]} files
 * @property {String[]} builtInSliced
 * @property {String[]} filesSliced
 */

/** @type {Obj} */
var current = {};

/** @type {HTMLInputElement} */
const objname = document.getElementById("objname");
const componentContainer = document.getElementById("components");
const menu = document.getElementById("menu");

const render = () => {
	console.log("render", current.Components);
	objname.value = "";
	componentContainer.innerHTML = "";

	if (current.name)
		objname.value = current.name;

	if (!current.Components) return;

	for (var i = 0; i < current.Components.length; i++) {
		const comp = current.Components[i];
		const container = document.createElement("div");
		const name = document.createElement("h2");
		name.innerText = current.ComponentNames[i];
		container.append(name);

		for (const key of Object.keys(comp)) {
			if (key === "name") continue;

			container.append(renderChildren(comp, key));
		}

		componentContainer.append(container);
	}
}

const renderChildren = (comp, key) => {
	const div = document.createElement("div");
	const keyname = document.createElement("label");
	keyname.innerText = key;
	keyname.htmlFor = key + "name";
	div.append(keyname);

	let input;

	switch (typeof comp[key]) {
		case "boolean":
			input = document.createElement("input");
			input.type = "checkbox";
			break;
		case "string":
			input = document.createElement("input");
			input.type = "text";
			break;
		case "number":
			input = document.createElement("input");
			input.type = "number";
			break;
		case "object":
			for (const compkey of Object.keys(comp[key])) {
				div.append(renderChildren(comp[key], compkey));
			}
	}

	if (!input) {
		return div;
	}

	input.id = key + "name";
	input.value = comp[key];

	div.append(input);
	return div;
}

const setup = async () => {
	const strVal = await window.electronAPI.getAllComponentNames();
	/** @type {Components} */
	const val = JSON.parse(strVal);
	const components = val.builtInSliced.concat(val.filesSliced);

	for (var i = 0; i < components.length; i++) {
		const comp = components[i];
		const button = document.createElement("button");
		button.innerText = comp;
		button.id = i;

		button.addEventListener("click", async () => {
			closeMenu();
			await window.electronAPI.addComponent(parseInt(button.id));
			render();
		});

		menu.append(button);
	}
};

const closeMenu = () => {
	menu.style.display = "none";
}

const openComponentMenu = () => {
	menu.style.display = "block";
}

objname.onchange = (ev) => {
	if (!current) return ev.preventDefault();

	window.electronAPI.renameobj(current.id, objname.value);
};

window.electronAPI.handleObjSelect((e, obj) => {
	current = obj;
	render();
});

setup();
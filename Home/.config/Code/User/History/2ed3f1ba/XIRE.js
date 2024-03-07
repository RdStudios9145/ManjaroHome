/** @type {Obj} */
var current = {};

/** @type {HTMLInputElement} */
const objname = document.getElementById("objname");
const componentContainer = document.getElementById("components");

const render = () => {
	objname.value = "";
	if (current.name)
		objname.value = current.name;

	console.log(current);

	if (!current.Components) return;

	for (const comp of current.Components) {
		console.log(comp);
		const container = document.createElement("div");
		const name = document.createElement("h2");
		name.innerText = comp.name;
		container.append(name);

		for (const key of Object.keys(comp)) {
			if (key === "name") continue;

			console.log(key, comp[key]);
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

objname.onchange = (ev) => {
	if (!current) return ev.preventDefault();

	window.electronAPI.renameobj(current.id, objname.value);
};

window.electronAPI.handleObjSelect((e, obj) => {
	current = obj;
	render();
});
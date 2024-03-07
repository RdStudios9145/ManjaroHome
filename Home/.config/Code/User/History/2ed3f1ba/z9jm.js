/** @type {Obj} */
var current = {};

/** @type {HTMLInputElement} */
const objname = document.getElementById("objname");

const render = () => {
	objname.value = "";
	if (current.name)
		objname.value = current.name;

	if (!current.Components) return;

	for (const comp of current.Components) {
		const container = document.createElement("div");
		const name = document.createElement("h2");
		name.innerText = comp.name;
	}
}

objname.onchange = (ev) => {
	if (!current) return ev.preventDefault();

	window.electronAPI.renameobj(current.id, objname.value);
};

window.electronAPI.handleObjSelect((e, obj) => {
	current = obj;
	render();
});
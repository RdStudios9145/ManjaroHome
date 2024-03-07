var current = {};

/** @type {HTMLInputElement} */
const objname = document.getElementById("objname");

const render = () => {
	objname.value = "";
	if (current.name)
		objname.value = current.name;
}

objname.onchange = (ev) => {
	console.log("hi");
	if (!current) return ev.preventDefault();
	console.log("again");

	window.electronAPI.renameobj(current.id, objname.value);
};

window.electronAPI.handleObjSelect((e, obj) => {
	current = obj;
	render();
});
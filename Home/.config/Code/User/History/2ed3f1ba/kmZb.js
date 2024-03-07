const current = {};

/** @type {HTMLInputElement} */
const objname = document.getElementById("objname");

const render = () => {
	objname.value = "";
	if (current.name)
		objname.value = current.name;
}

objname.onchange = (ev) => {
	if (!current) return ev.preventDefault();

	window.electronAPI.renameobj(current.id, objname.value);
};

window.electronAPI.handleObjSelect((e, obj) => {
	current = obj;
	render();
});
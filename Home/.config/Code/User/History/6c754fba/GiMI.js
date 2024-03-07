var cwd = "";
const container = document.getElementById("container");
const contextMenu = document.getElementById("contextmenu");

const render = async () => {
	container.innerHTML = "";
	const assets = await window.electronAPI.readProjDirSync("Assets" + cwd);

	if (cwd !== "") {
		const casset = document.createElement("div");
		casset.style.display = 'flex';
		casset.style.flexDirection = "column";
		const img = document.createElement("img");
		img.src = "../imgs/folder-up.svg";
		img.style.width = '50px';
		img.style.height = '50px';
		casset.append(img);
		container.append(casset);

		casset.addEventListener("dblclick", (e) => {
			const lcwd = cwd.split("/");
			lcwd.pop();
			cwd = lcwd.join("/");
			render();
		});
	}

	for (const asset of assets) {
		const casset = document.createElement("div");
		casset.style.display = 'flex';
		casset.style.flexDirection = "column";
		const img = document.createElement("img");
		img.src = "../imgs/folder.svg";
		img.style.width = '50px';
		img.style.height = '50px';
		casset.append(img, asset);
		container.append(casset);

		casset.addEventListener("dblclick", (e) => {
			const target = e.currentTarget;
			cwd += "/" + target.childNodes[1].data;
			render();
		});
	}
}

render();
// window.electronAPI.fswatch("Assets");
// window.electronAPI.onfswatch((event) => render);

addEventListener("contextmenu", (e) => {
	contextMenu.style.transform = "translate(" + e.pageX + "px, " + e.pageY + "px)";
	contextMenu.style.display = 'block';
});

addEventListener("click", (e) => {
	contextMenu.style.display = 'none';
});

document.getElementById("newfolder").addEventListener("click", (e) => {
	window.electronAPI.mkdir("Assets" + cwd + "/New Folder");
	render();
});

document.getElementById("newcomponent").addEventListener("click", () => {
	windown.electronAPI.writeFile("Assets" + cwd + "/Component.comp", `Component CompName {

	}`);
	render();
})
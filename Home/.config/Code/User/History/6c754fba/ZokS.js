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
		
		if (asset[0].endsWith(".comp"))
			img.src = "../imgs/component.svg";
		else if (asset[0].endsWith(".js"))
			img.src = "../imgs/system.svg";
		else if (asset[0].endsWith(".res"))
			img.src = "../imgs/res.svg"
		else
			img.src = "../imgs/folder.svg";

		img.style.width = '50px';
		img.style.height = '50px';
		casset.append(img, asset[0]);
		casset.dataset.filetype = asset[1];
		container.append(casset);

		casset.addEventListener("dblclick", (e) => {
			const target = e.currentTarget;
			const name = target.childNodes[1].data;

			if (target.dataset.filetype !== "") {
				window.electronAPI.openFile("Assets" + cwd + "/" + name);
				return;
			}

			cwd += "/" + name;
			render();
		});
	}
}

render();
// window.electronAPI.fswatch("Assets");
// window.electronAPI.onfswatch((event) => render);

addEventListener("contextmenu", (e) => {
	contextMenu.style.transform = "translate(" + e.pageX + "px, " + e.pageY + "px)";
	contextMenu.style.display = 'flex';
});

addEventListener("click", (e) => {
	contextMenu.style.display = 'none';
});

document.getElementById("newfolder").addEventListener("click", (e) => {
	window.electronAPI.mkdir("Assets" + cwd + "/New Folder");
	render();
});

document.getElementById("newcomponent").addEventListener("click", () => {
	window.electronAPI.writeFile("Assets" + cwd + "/CompName.comp", `Struct CompName {\n\t\n}`);
	render();
})

document.getElementById("newcontroller").addEventListener("click", (e) => {
	window.electronAPI.writeFile("Assets" + cwd + "/ContName.js", "function ContName {\n\t\n}");
	render();
});

document.getElementById("newresource"),addEventListener("click", (e) => {
	window.electronAPI.writeFile("Assets" + cwd + "/ResName.res", "Struct ResName {\n\t\n}");
})
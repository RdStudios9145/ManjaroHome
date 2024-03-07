const electron = require("electron");
const fs = require("fs");
const path = require("path");

const windows = {};
const renderers = {};

const createWindow = (event, window) => {
	const wind = new electron.BrowserWindow({
		parent: electron.BrowserWindow.getAllWindows()[0],
		width: window.size[0],
		height: window.size[1],
		x: window.position[0],
		y: window.position[1]
	});
	wind.loadFile("pages/window.html");
	wind.webContents.send("window-info", renderers[window.name + ".js"].render());
	return wind;
}

const setup = () => {
	// console.log(__dirname);
	const dirpath = path.join(__dirname, "/renderers");
	const files = fs.readdirSync(dirpath).filter(file => file.endsWith(".js"));

	for (const file of files) {
		const filepath = path.join(dirpath, file);
		const renderer = require(filepath);
		console.log(file);

		if ("render" in renderer && "update" in renderer) {
			renderers[file] = renderer;
		}
	}

	const pages = fs.readdirSync(__dirname).filter(file => file.endsWith(".html"));

	for (const page of pages) {
		const filepath = path.join(__dirname, page);
		windows[page] = filepath;
	}
}

module.exports = {
	createWindow: createWindow,
	setup: setup,
}
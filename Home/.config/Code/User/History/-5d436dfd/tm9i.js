const electron = require("electron");
const fs = require("fs");
const path = require("path");
const exec = require("child_process").exec;
const manager = require("../windows/manager");
const ts = require("typescript");

/**
 * @typedef {Object} Obj
 * @property {Number[]} children
 * @property {Object[]} Components
 * @property {Object[]} ComponentNames
 * @property {Object[]} ComponentMetaData
 * @property {Number} id
 * @property {String} name
 */

/**
 * @typedef {Object} Hierarchy
 * @property {Obj[]} children
 * @property {-1} id
 */

/** 
 * @typedef {Object} CWP
 * @property {String} name
 * @property {String} path
 * @property {Hierarchy} hierarchy
 */
/** @type {CWP} */
let cwp = {};
/** @type {Obj} */
let cso = {};

const getProjects = () => {
	const dataPath = electron.app.getPath("userData");
	if (!fs.existsSync(path.join(dataPath, "projects.json"))) {
		fs.writeFileSync(path.join(dataPath, "projects.json"), JSON.stringify({ projects: [] }));
		return { projects: [] };
	}

	return JSON.parse(fs.readFileSync(path.join(dataPath, "projects.json")));
}

const newProject = (event, name, projPath) => {
	const dataPath = electron.app.getPath("userData");

	if (!fs.existsSync(path.join(dataPath, "projects.json"))) {
		fs.writeFileSync(path.join(dataPath, "projects.json"), JSON.stringify({ projects: [] }));
	}

	const current = JSON.parse(fs.readFileSync(path.join(dataPath, "projects.json")));
	current.projects.push({
		name: name,
		path: projPath
	});
	fs.writeFileSync(path.join(dataPath, "projects.json"), JSON.stringify(current));

	/** @type {Hierarchy} */
	const hierarchy = {
		id: -1,
		children: [],
	};

	const proj = (str) => path.join(projPath, "/" + name, str);
	console.log(proj(""), proj("Assets"), proj("ProjectSettings/.json"));
	fs.mkdirSync(proj(""));
	fs.writeFileSync(proj("Proj.kbld"), JSON.stringify({
		name: name,
		settings: {
			windows: [
				{
					name: "assets",
					position: [0, 0],
					size: [700, 300]
				},
				{
					name: "hierarchy",
					position: [500, 100],
					size: [300, 700]
				},
				{
					name: "inspector",
					position: [700, 100],
					size: [300, 700]
				}
			]
		},
		hierarchy: hierarchy
	}));
	fs.mkdirSync(proj("Assets"));
	fs.mkdirSync(proj("Plugins"));

	open(event, { name: name, path: projPath });
}

const open = (event, project) => {
	electron.BrowserWindow.getAllWindows()[0].loadFile("pages/workspace.html");
	const hierarchy = JSON.parse(fs.readFileSync(path.join(
		project.path,
		project.name,
		"/Proj.kbld"
	))).hierarchy;
	cwp = { name: project.name, path: project.path, hierarchy: hierarchy };
	// console.log(cwp);
	Constants = {};
	const consts = getAllObjectsOfType(".const.ts");
	Log(consts);
	for (var Const of consts) {
		console.log(Const, consts);
		Constants[Const.name] = Const;
	}
}

const loadingProject = () => {
	const settings = fs.readFileSync(path.join(cwp.path, cwp.name, "Proj.kbld"));
	return {
		project: cwp,
		settings: JSON.parse(settings).settings,
	};
}

const getPath = () => {
	const dialog = electron.dialog.showOpenDialogSync(electron.BrowserWindow.getAllWindows()[0], {
		properties: ["openDirectory"]
	});

	const { canceled } = dialog;

	if (canceled) return;
	return dialog[0];
}

const readProjDirSync = (event, dir, config) => {
	const cdir = path.join(cwp.path, cwp.name, dir);
	const files = fs.readdirSync(cdir, config);
	const retVal = [];

	for (const file of files) {
		const type = path.extname(path.join(cdir, file));
		retVal.push([file, type]);
	}

	return retVal;
}

const mkdir = (event, dir, config) => {
	return fs.mkdirSync(path.join(cwp.path, cwp.name, dir), config);
}

const writeFile = (event, dir, contents) => {
	return fs.writeFileSync(path.join(cwp.path, cwp.name, dir), contents);
}

const getCommandLine = () => {
	switch (process.platform) {
		case 'darwin': return "open";
		case 'win32':
		case "win64": return "start";
		default: return "xdg-open";
	}
}

const openFile = (event, dir) => {
	exec(getCommandLine() + " " + path.join(cwp.path, cwp.name, dir));
}

const getHierarchy = (event) => {
	return JSON.stringify(cwp.hierarchy);
}

const newobj = (event, parent, name, id) => {
	/** @type {import("typescript").ClassElement[]} */
	const components = getAllObjectsOfType(".comp.ts");
	// console.log(components);
	// components.forEach((val) => { console.log(val.name); console.log(val); console.log(val.constructor); console.log(val.constructor.name); });
	/** @type {Obj} */
	const obj = {
		children: [],
		Components: [
			new (components.find((val) => val.name === "Transform"))(),
		],
		ComponentNames: [
			"Transform",
		],
		ComponentMetaData: [
			{
				"Translation": {
					"x": "number",
					"y": "number",
				},
				"Scale": {
					"x": "number",
					"y": "number"
				},
			}
		],
		id: id,
		name: name,
	};

	cwp.hierarchy.children.push(obj);

	if (parent === -1) return;
	console.log(parent, name, id);

	cwp.hierarchy.children[parent].children.push(id);
}

/**
 * @param {Obj} current 
 * @param {Number} parent 
 * @param {Obj} obj 
 */
const traverseHierarchy = (current, parent, obj) => {
	if (current.children.length === 0) {
		if (current.id === parent)
			current.children.push(obj);

		return;
	}

	for (var child of current.children) {
		traverseHierarchy(child, parent, obj);
	}
}

const renameObj = (e, id, newName) => {
	if (id === undefined) return;
	cwp.hierarchy.children[id].name = newName;
	manager.sendMessiage("hierarchy", "render");
}

const selectObj = (e, id) => {
	const obj = id === -1 ? {} : cwp.hierarchy.children[id];
	manager.sendMessiage("inspector", "selectobj", obj);
	cso = obj;
}

/** @returns {String[]} :) StackOverflow moment */
const fsReadDirRecursive = dir =>
	fs.readdirSync(dir).reduce((files, file) => {
		const name = path.join(dir, file);
		const isDirectory = fs.statSync(name).isDirectory();
		return isDirectory ? [...files, ...fsReadDirRecursive(name)] : [...files, name];
	}, []);

/** @param {String} filePath */
const compile = (filePath) => {
	var file;
	var contents;
	var name;
	var ast;

	try { file = fs.readFileSync(filePath).toString(); } catch (e) { Log(e); return; }
	try { contents = ts.transpileModule(file, { compilerOptions: { module: ts.ModuleKind.None } }); }
		catch (e) { Log(e); return; }
	try { name = getNameFromPath(filePath) } catch (e) { Log(e); return; }
	try { eval(`function Build() {${contents.outputText}
	console.log(Constants); return Constants.${name};}`); } catch (e) { Log(e); return; }
	console.log(contents.outputText);

	var program = ts.createProgram([filePath], {});
	var sourceFile = program.getSourceFile(filePath);
	ts.forEachChild(sourceFile, node => {
		console.log(node, getNameFromPath(filePath));
		try { node.members.forEach((val) => console.log(val.name)) } catch {}
	});

	try { return Build(); } catch (e) { Log(e); return; }
}

const Info = (...data) => console.info(...data);
const Log = (...data) => console.log(...data);
const Warn = (...data) => console.warn(...data);
const Error = (...data) => console.error(...data);

const getAllObjectsOfType = (fileEnding) => {
	const components = [];
	const { builtIn, files } = JSON.parse(getAllNames(fileEnding));

	for (var i = 0; i < builtIn.length; i++) {
		components.push(compile(builtIn[i]));
	}

	for (var i = 0; i < files.length; i++) {
		components.push(compile(files[i]));
	}

	return components;
}

const getAllNames = (fileEnding) => {
	const names = getAllFileNames();

	const builtIn = names.builtIn
		.filter((val) => val.endsWith(fileEnding));

	const files = names.files
		.filter((val) => val.endsWith(fileEnding));

	const builtInSliced = [];
	builtIn.forEach((val) => builtInSliced.push(getNameFromPath(val, fileEnding)));

	const filesSliced = [];
	files.forEach((val) => filesSliced.push(getNameFromPath(val, fileEnding)));

	return JSON.stringify({ builtIn, files, builtInSliced, filesSliced });
}

const getAllFileNames = () => {
	const builtIn = fsReadDirRecursive(path.join(__dirname, "includes/"));
	const files = fsReadDirRecursive(path.join(cwp.path, cwp.name, "Assets/"));

	return { builtIn, files };
}

/** 
 * @param {String} path
 * @param {String} ending
 */
const getNameFromPath = (path) => {
	return path.split("/").at(-1).split(".").slice(0, -2).join(".");
}

const addComponent = (e, id) => {
	const comp = getAllObjectsOfType(".comp.ts")[id];
	cso.Components.push(new comp());
	cso.ComponentNames.push(comp.name);
	return 1;
}

const getSelection = () => {
	return cso;
}

module.exports = {
	getProjects: getProjects,
	newProject: newProject,
	open: open,
	getPath: getPath,
	loadingProject: loadingProject,
	readProjDirSync: readProjDirSync,
	mkdir: mkdir,
	writeFile: writeFile,
	getCommandLine: getCommandLine,
	openFile: openFile,
	newobj: newobj,
	getHierarchy: getHierarchy,
	traverseHierarchy: traverseHierarchy,
	renameObj: renameObj,
	selectObj: selectObj,
	getAllObjectsOfType,
	addComponent,
	fsReadDirRecursive,
	getAllNames,
	getAllFileNames,
	compile,
	getNameFromPath,
	getSelection
};
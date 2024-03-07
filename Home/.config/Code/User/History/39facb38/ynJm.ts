declare const Kobold: { requireComponent: Function, getComponent: Function };

class Vec2 {
	x: number;
	y: number;

	constructor(x?: number, y?: number) {
		if (!x) {
			this.x = 0;
			this.y = 0;
			return;
		}

		if (!y && x) {
			this.x = x;
			this.y = x;
			return;
		}

		if (!y || !x) return;
		this.x = x;
		this.y = y;
	}
}

class Transform {
	name: "Transform";
	translation: Vec2;
	scale: Vec2;

	constructor() {
		this.name = "Transform";
		this.translation = new Vec2();
		this.scale = new Vec2();
	}

	from_translation(x, y) {
		const t = new Transform();
		if (typeof x === typeof Vec2) {
			t.translation = x;
			return t;
		}
		
		if (typeof x === "number" && y) {
			t.translation = new Vec2(x, y);
			return t;
		}
	}
}

enum MeshType {
	Custom = "Custom",
	Square = "Square",
	Circle = "Circle",
	Rect = "Rectangle",
	Triangle = "Tri",
}

class Mesh {
	meshType: MeshType;
	triangles: Uint32Array;
	verts: Vec2[];
}

class MeshRenderer {
	mesh: Mesh;

	Startup() {
		Kobold.
		Kobold.get
	}
}

const builtInComponents = [Transform, Mesh];

module.exports = {
	Transform,
	Vec2,
	MeshType,
	Mesh,
	MeshRenderer,
}
declare const Kobold: { requireComponent: Function,
	getComponent: Function,
	getRenderContext: Function };
declare type KoboldRenderContext = CanvasRenderingContext2D;

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
	transform: Transform;
	context: KoboldRenderContext;

	Startup() {
		Kobold.requireComponent(Mesh);
		this.mesh = Kobold.getComponent(Mesh);
		this.transform = Kobold.getComponent(Transform);
		this.context = Kobold.getRenderContext();
	}

	Render() {
		const translation = this.transform.translation;
		const scale = this.transform.scale;
		if (this.mesh.meshType === MeshType.Circle) {
			this.context.beginPath();
			this.context.arc(translation.x, translation.y, scale.x, 0, Math.PI * 2);
			this.context.fill();
			return;
		}
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
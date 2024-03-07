class Vec2 {
	x: number;
	y: number;

	constructor(x?: number, y?: number) {
		if (!y && !x) {
			this.x = 0;
			this.y = 0;
			return;
		}

		if (!y && x) {
			this.x = x;
			this.y = x;
			return;
		}

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

const builtInComponents = [Transform];

module.exports = {
	Transform,
	Vec2,
}
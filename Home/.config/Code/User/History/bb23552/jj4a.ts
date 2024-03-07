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
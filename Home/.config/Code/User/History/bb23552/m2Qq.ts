namespace Constants {
export class Transform {
	Translation: Constants.Vec2;
	Scale: Constants.Vec2;
	// function Transform() {
		// this.name = "Transform";
		// this.translation = new Vec2();
		// this.scale = new Vec2();
	// }

	constructor() {
		this.Translation = new Constants.Vec2();
		this.Scale = new Constants.Vec2();
	}

	from_translation(x, y) {
		var t = new Constants.Transform();
		if (typeof x === typeof Vec2) {
			t.Translation = x;
			return t;
		}
		if (typeof x === "number" && y) {
			t.Translation = new Vec2(x, y);
			return t;
		}
	};
}
}
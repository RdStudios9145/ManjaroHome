class Transform {
	constructor() {
		this.translation = new Translation();
	}

	from_translation(x, y) {
		const t = new Transform();
		if (typeof x === typeof Translation) {
			t.translation = x;
			return t;
		}

		if (typeof x === "number" && y) {
			t.translation = new Translation(x, y);
			return t;
		}
	}
}

class Translation {
	constructor(x, y) {
		if (!y && !x) {
			this.x = 0;
			this.y = 0;
			return;
		}

		if (!y) {
			this.x = x;
			this.y = x;
			return;
		}

		this.x = x;
		this.y = y;
	}
}
// function Build() {
	/*return*/class MeshRenderer {
		mesh: Mesh;
		transform: Constants.Transform;
		context: CanvasRenderingContext2D;

		Startup() {
			Kobold.requireComponent(Mesh);
			this.mesh = Kobold.getComponent(Mesh);
			this.transform = Kobold.getComponent(Constants.Transform);
			this.context = Kobold.getRenderContext();
		};

		Render() {
			var translation = this.transform.Translation;
			var scale = this.transform.Scale;
			if (this.mesh.meshType === MeshType.Circle) {
				this.context.beginPath();
				this.context.arc(translation.x, translation.y, scale.x, 0, Math.PI * 2);
				this.context.fill();
				return;
			}
			if (this.mesh.meshType === MeshType.Rect) {
				this.context.fillRect(translation.x, translation.y, scale.x, scale.x);
				return;
			}
			for (var i = 0; i < this.mesh.triangles.length / 3; i++) {
				this.context.save();
				this.context.translate(translation.x, translation.y);
				this.context.beginPath();
				this.context.moveTo(this.mesh.verts[3 * i].x, this.mesh.verts[3 * i].y);
				this.context.lineTo(this.mesh.verts[3 * i + 1].x, this.mesh.verts[3 * i + 1].y);
				this.context.lineTo(this.mesh.verts[3 * i + 2].x, this.mesh.verts[3 * i + 2].y);
				this.context.fill();
				this.context.reset();
			}
		};
	}
// }
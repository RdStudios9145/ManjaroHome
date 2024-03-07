enum MeshType {
	Custom = "Custom",
	Square = "Square",
	Circle = "Circle",
	Rect = "Rectangle",
}

class Mesh {
	meshType: MeshType;
	verts: Int32Array;
	triangles: Vec2[];
}
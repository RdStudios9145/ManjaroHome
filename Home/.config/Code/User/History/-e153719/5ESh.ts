enum MeshType {
	Custom = "Custom",
	Square = "Square",
	Circle = "Circle",
	Rect = "Rectangle",
}

class Mesh {
	meshType: MeshType;
	triangles: Uint32Array;
	verts: Vec2[];
}
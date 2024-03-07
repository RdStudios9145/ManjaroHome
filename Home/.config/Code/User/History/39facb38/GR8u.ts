declare const Kobold: { requireComponent: Function,
	getComponent: Function,
	getRenderContext: Function };
declare type KoboldRenderContext = CanvasRenderingContext2D;
declare namespace Constants {
	export class Mesh {}
	export class MeshRenderer {}

	export enum MeshType {
		Custom, Circle, Rect
	}

	export class Transform {
		translation: Vec2
		scale: Vec2
		from_translation(x, y?)
	}

	export class Vec2 {
		x: number
		y: number
	}
}
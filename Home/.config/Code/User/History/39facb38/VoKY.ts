declare const Kobold: { requireComponent: Function,
	getComponent: Function,
	getRenderContext: Function };
declare type KoboldRenderContext = CanvasRenderingContext2D;
declare namespace Constants {
	export class Transform {
		translation: Vec2
		scale: Vec2
		from_translation(x, y?)
	}
}
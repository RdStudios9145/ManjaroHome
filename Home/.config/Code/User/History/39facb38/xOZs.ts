import { Transform } from "./Transform.comp";

declare const Kobold: { requireComponent: Function,
	getComponent: Function,
	getRenderContext: Function };
declare type KoboldRenderContext = CanvasRenderingContext2D;
declare interface Constants {
	Transform
}
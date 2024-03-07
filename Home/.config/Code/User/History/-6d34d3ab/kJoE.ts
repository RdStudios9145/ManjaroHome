export class Transform {
    translation: Vec2;
    scale: Vec2;
    Transform();
    from_translation(x: Vec2 | Number, y?);
}
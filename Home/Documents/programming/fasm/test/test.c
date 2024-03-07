#include "raylib/raylib.h"

int main() {
	InitWindow(800, 600, "Test");

	Image img = LoadImage("./test.png");
	Texture2D tex = LoadTextureFromImage(img);
	Color color = { .r=0xff,.g=0xff,.b=0xff,.a=0xff };
	int size = 0;

	while(1) {
		BeginDrawing();
		DrawTexture(tex, 0, 0, color);
		if (IsKeyPressed(87))
			size++;
		printf("%i", size);
		EndDrawing();
	}
}

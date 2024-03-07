format ELF64

section '.text' executable
public _start
extrn printf
extrn _exit
extrn InitWindow
extrn WindowShouldClose
extrn CloseWindow
extrn BeginDrawing
extrn EndDrawing
extrn ClearBackground
extrn LoadImage
extrn LoadTextureFromImage
extrn DrawRectangle
extrn IsKeyDown

_start:
	mov rdi, 800
	mov rsi, 600
	mov rdx, title
	call InitWindow

.again:
	call WindowShouldClose
	test rax, rax
	jnz .over
	call BeginDrawing

	mov rdi, 0xFF181818
	call ClearBackground

	mov rdi, 0
	mov rsi, 0
	mov rdx, [size]
	mov rcx, [size]
	mov r8, 0xFF0000FF
	call DrawRectangle

	mov rdi, 87
	call IsKeyDown
	test rax, 0x1
	je .biginate
	add dword [size], 0x1

.biginate:
	call EndDrawing
	jmp .again

.over:
	call CloseWindow
	mov rdi, 0
	call _exit

section '.data' writeable
title: db "Title", 0
size: dd 0x1
printfstr: db "%i\n", 0

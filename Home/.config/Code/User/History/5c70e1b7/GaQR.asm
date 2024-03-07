format ELF64

section '.text' executable
public _start
extrn _exit
extrn printf

extrn InitWindow
extrn WindowShouldClose
extrn CloseWindow
extrn BeginDrawing
extrn EndDrawing

_start:
    mov rdi, msg
    call printf
    mov rdi, 800
    mov rsi, 600
    mov rdx, title
    call InitWindow

.loop:
    call WindowShouldClose
    test rax, rax
    jnz .close

    call BeginDrawing
    call EndDrawing

    jmp .loop

.close:
    call CloseWindow
    mov rdi, 0
    call _exit

include "data.asm"
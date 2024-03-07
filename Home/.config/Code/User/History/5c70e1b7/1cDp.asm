format ELF64

section '.text' executable
public _start
extrn _exit
extrn printf

_start:
    mov rdi, msg
    call printf
    mov rdi, 0
    call _exit

include "data.asm"
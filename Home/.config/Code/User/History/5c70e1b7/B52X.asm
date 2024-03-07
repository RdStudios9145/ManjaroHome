format ELF64

section '.text' executable
public _start
extrn _exit
extrn printf

_start:

include "data.asm"
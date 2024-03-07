main: main.o
	ld -o main main.o -dynamic-linker /lib64/ld-linux-x86-64.so.2 -L./raylib/ -lc -lraylib -lm

main.o: main.asm
	fasm main.asm

test: test.c
	cc -O0 -o test test.c -L./raylib/ -lraylib -lm
	objdump -M intel --disassemble=main test

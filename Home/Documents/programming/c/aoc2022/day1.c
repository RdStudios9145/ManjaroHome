#include <stdio.h>
#include <stdlib.h>

#define ARR_LEN(a) sizeof((a)) / sizeof((a)[0])

int main(void) {
	FILE* file = fopen("day1.txt", "r");
	fseek(file, 0L, SEEK_END);
	int size = ftell(file);
	rewind(file);

	char contents[size];
	fgets(contents, size, file);
	
	// int offset = 0;
	char* newline = "\n";
	char* tmp = contents;
	
	while (*tmp) {
		char line[256];
		int i = 0;

		while (*newline != *tmp) {
			line[i] = *tmp;
			tmp++;
			i++;
		}

		tmp++;
		line[i] = *"\0";

		printf("line: %s\n", line);
	}

	printf("size: %i\n", size);
	printf("contents: %s\n", contents);

	fclose(file);
	return 0;
}

#include<stdio.h>
#include<conio.h>
void main()
{
	FILE *fptr;
	fptr=fopen("DEMO.txt","w");
	fprintf(fptr,"kamani science collage");
	fclose(fptr);
	getch();

}
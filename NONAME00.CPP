#include<stdio.h>
#include<conio.h>
void main()
{
	FILE *fp;
	clrscr();
	fp=open("SEEK.txt","r");
	//moving pointer to end
	fseek(fp,0,SEEK_END);
	//prints position of pointer
	printf("%d",ftell(fp));
	getch();

}
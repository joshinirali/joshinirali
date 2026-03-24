#include<stdio.h>
#include<conio.h>
void main()
{
	FILE *fp;
	int i;
	clrscr();
	fp=fopen("getput.txt","w");
	for(i=1;i<=10;i++)
	{
		putw(i,fp);
	}
	fclose(fp);
	fp=fopen("getput.txt","r");

	for(i=1;i<=10;i++)
	{
		i=getw(fp);
		printf("\n%d",i);
		printf(" ");

	}
	fclose(fp);
	getch();
}
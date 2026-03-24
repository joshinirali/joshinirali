#include<stdio.h>
void main(int argc, char *argv[])
{
	int i;
	clrscr();
	printf("\n name of my program %s \t",argv[0]);
	printf("\n no of argument %d",argc);

	if(argc==2)
	{
		printf("\n value given by user is : %s \t",argv[1]);
	}
	else if(argv>2)
	{
		printf("\n many value given by user \n");
	}
	else
	{
		printf("\n many value given by user \n");
	}
	for(i==0;i<argc;i++)
	{
		printf("\n argument : %s",argv[i]);
	}

	getch();

}




















































































































































































































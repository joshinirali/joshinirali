#include<stdio.h>
void main()
{
	int ret;
	char oldname[]="RENAME.txt";
	char newname[]="renamee.txt";
	ret=rename(oldname,newname);
	if(ret==0)
	{
		printf("file renamed successfully...");
	}
	else
	{
		printf("error : enable to rename file");
	}
	getch();

}
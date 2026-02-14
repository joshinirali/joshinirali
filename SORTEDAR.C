
#include<stdio.h>
#include<conio.h>
void main()
{
	int a[50],b,c,d,e;
	clrscr();
	printf("entre number of element");
	scanf("%d",&b);
	printf(" enter element values");
	for(c=0;c<b;c++)
	{
		scanf("%d\n",&a[c]);
	}
	for(c=0;c<b-1;c++)
	{
		for(d=0;d<b;d++)
		{
			if(a[c]>a[d])
			{
				c=a[c];
				a[c]=a[d];
				a[d]=e;
			}
		}
	}
	printf("sorted array : \n");
	for(c=0;c<b;c++)
	{
		printf("%d \n",a[c]);
	}
	getch();



}
#include<stdio.h>
#include<conio.h>
void main()
{
	int a[3],n,i,largest;
	clrscr();
	printf("enter element :");
	scanf("%d",&n);
	printf("enter %d elements :",n);
	for(i=0;i<n;i++)
	{
		scanf("%d",&a[i]);
	}
	largest=a[i];
	for(i=1;i<n;i++)
	{
		if(a[i]>largest)
		{
			largest=a[i];
		}
	}
	printf("largest element %d ",largest);
	getch();



}
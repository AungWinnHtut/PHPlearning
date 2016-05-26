#include<stdio.h>
int main(int argc,char* argv[])
//dir *.*     argv[0]="dir" argv[1]="*.*"
{
	printf("command line arg = %d\n",argc);

	int i=0;
	for(i=0;i<argc;i++)
	{
		printf("%d %s\n",i,argv[i]);
	}
	
	return 0;
}
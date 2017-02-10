#include<iostream>
#include<conio.h>

using namespace std;

void NRZ(int arr[], int bits)
{
	cout << "\nNRZ L\n";
	if (arr[1] == 0)
	{
		cout << "^";
	}
	else
	{
		cout << "_";
	}
	for (int i = 2;i <= bits;i++)
	{
		
		if (arr[i] == 0 && arr[i - 1] == 0)
		{
			cout << "^";
		}
		else if (arr[i] == 1 && arr[i - 1] == 1)
		{
			cout << "_";
		}
		else if (arr[i] == 0 && arr[i - 1] == 1)
		{
			cout << "|^";
		}
		else if (arr[i] == 1 && arr[i - 1] == 0)
		{
			cout << "|_";
		}

	}
}
	
void INRZ(int arr[], int bits)
{
	int flag = 0;

	cout << "\n\n\nNRZ I\n";
	if (arr[1] == 0)
	{
		cout << "_";
		flag = 0;
	}
	else
	{
		cout << "^";
		flag = 1;
	}
	for (int i = 2;i <= bits;i++)
	{

		if (arr[i] == 0)
		{
			if (flag == 0)
				cout << "_";
			else
				cout << "^";
		}
		else
		{
			if (flag == 0)
				flag = 1;
			else
				flag = 0;

			if (flag == 0)
				cout << "|_";
			else
				cout << "|^";
		}
	}
}

void AMI(int arr[], int bits)
{
	int flag = 0;
	cout << "\n\n\nBipolar AMI\n";
	if (arr[1] == 0)
	{
		cout << "-";
	}
	else
	{
		cout << "^";
		flag = 1;
	}
	for (int i = 2;i <= bits;i++)
	{

		if (arr[i] == 0)
		{
			cout << "-";
		}
		else if (arr[i] == 1 && flag == 1)
		{
			flag = 0;
			cout << "_";
		}
		else if (arr[i] == 1 && flag ==0 )
		{
			flag = 1;
			cout << "^";
		}
	}
}

void pseudo(int arr[], int bits)
{
	int flag = 0;
	cout << "\n\n\nPseudoternary\n";
	if (arr[1] == 1)
	{
		cout << "-";
	}
	else
	{
		cout << "^";
		flag = 1;
	}
	for (int i = 2;i <= bits;i++)
	{

		if (arr[i] == 1)
		{
			cout << "-";
		}
		else if (arr[i] == 0 && flag == 1)
		{
			flag = 0;
			cout << "_";
		}
		else if (arr[i] == 0 && flag == 0)
		{
			flag = 1;
			cout << "^";
		}
	}
}


void manchester(int arr[], int bits)
{
	cout << "\n\n\nManchester\n";
	if (arr[1] == 0)
	{
		cout << "^|_";
	}
	else
	{
		cout << "_|^";
	}
	for (int i = 2;i <= bits;i++)
	{

		if (arr[i] == 1 && arr[i - 1] == 1)
		{
			cout << "|_|^";
		}
		else if (arr[i] == 0 && arr[i - 1] == 1)
		{
			cout << "^|_";
		}
		else if (arr[i] == 1 && arr[i - 1] == 0)
		{
			cout << "_|^";
		}
		else if (arr[i] == 0 && arr[i-1] == 0)
		{
			cout << "|^|_";
		}
	}
}

void diffman(int arr[], int bits)
{
	int flag = 0;
	cout << "\n\n\nDifferential Manchester\n";
	if (arr[1] == 0)
	{
		cout << "|_|^";
		flag = 0;
	}
	else
	{
		cout << "^|_";
		flag = 1;
	}
	for (int i = 2;i <= bits;i++)
	{

		if (arr[i] == 0)
		{
			if (flag == 0)
				cout << "|_|^";
			else
				cout << "|^|_";
		}
		else
		{
			if (flag == 0)
				flag = 1;
			else
				flag = 0;

			if (flag == 0)
				cout << "_|^";
			else
				cout << "^|_";
		}

	}
}

void B8ZS(int arr[], int bits)
{
	int flag = 0;
	cout << "\n\n\nB8ZS Scrambler\n";
	if (arr[1] == 0)
	{
		cout << "-";
		flag = 0;
	}
	else
	{
		cout << "^";
		flag = 1;
	}
	for (int i = 2;i <= bits;i++)
	{
		if (arr[i] == 0 && arr[i + 1] == 0 && arr[i + 2] == 0 && arr[i + 3] == 0 && arr[i + 4] == 0 && arr[i + 5] == 0 && arr[i + 6] == 0 && arr[1 + 7] == 0)
		{
			cout << "---";
			if (flag == 1)
			{
				cout << "^_-_^";
			}
			else
				cout << "_^-^_";

			i = i + 7;
		}
		else if (arr[i] == 0)
		{
			cout << "-";
		}
		else if (arr[i] == 1 && flag == 1)
		{
			flag = 0;
			cout << "_";
		}
		else if (arr[i] == 1 && flag == 0)
		{
			flag = 1;
			cout << "^";
		}
	}
}

void HDB3(int arr[], int bits)
{
	int flag = 0, count = 1;
	cout << "\n\n\nHDB3\n";

	for (int i = 1;i <= bits;i++)
	{
		if (arr[i] == 0 && arr[i + 1] == 0 && arr[i + 2] == 0 && arr[i + 3] == 0)
		{
			if (flag == 0 && count % 2 != 0)
			{
				cout << "---_";
				count = 0;
			}
			else if (flag == 0 && count % 2 == 0)
			{
				cout << "^--^";
				count = 0;
				flag = 1;
			}
			else if (flag == 1 && count % 2 != 0)
			{
				cout << "---^";
				count = 0;
			}
			else if (flag == 1 && count % 2 == 0)
			{
				cout << "_--_";
				count = 0;
				flag = 0;
			}
			i = i + 3;

		}
		else if (arr[i] == 0)
		{
			cout << "-";
		}
		else if (arr[i] == 1 && flag == 1)
		{
			flag = 0;
			cout << "_";
			count++;
		}
		else if (arr[i] == 1 && flag == 0)
		{
			flag = 1;
			cout << "^";
			count++;
		}
	}
}

void main()
	{
		int bits, arr[70];
		char ch,h;
		cout << "enter the number of bits in the code\n";
		cin >> bits;
		x:
		cout << "enter binary code\n";
		for (int i = 1;i <= bits;i++)
		{
			cin >> arr[i];
		}
		cout<<"\n\n is the entered binary bits correct?(y/n)\n";
		cin>>ch;
		if(ch=='y' || ch=='Y')
		{
			NRZ(arr, bits);
			INRZ(arr,bits);
			AMI(arr,bits);
			pseudo(arr,bits);
			manchester(arr,bits);
			diffman(arr,bits);

			cout<<"\n\n\nrun scramblers also?(y/n)";
			cin>>h;
			if(h=='y' || h=='Y')
			{
				B8ZS(arr,bits);
				HDB3(arr,bits);
			}
			else
			{
				cout<<"*-------*-------*-------*-------*";
			}
		}
		else
		goto x;

		getch();
	}

#include <iostream>
using namespace std;

int Loop(int row) {
	for (int a=1;a<=row;a++){
		for (int b=1;b<=a;b++){
		cout << b << "," << " ";
		}
		cout << endl;
	}
	return row;
}
int main() {
	int row,loop;
	cout << "Masukan Jumlah Panjang Baris : ";
	cin >> row;
	if (row >= 10) {
		cout << "Panjang deret tidak boleh lebih dari sama dengan 10";
	}
	else {
	loop = Loop(row);
	}
}

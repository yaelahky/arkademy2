#include <iostream>
using namespace std;
void Cari() {
	string data;
    char huruf;
	int tembak = 0;
	cout << "Masukan Kalimat (ex : arkademy): ";
	cin >> data;
	cout << "HURUF yang akan dicari (ex : a) : ";
	cin >> huruf;
	for (int i = 0; i<data.length();i++) {
		if(data[i] == huruf) tembak++;
	}
	cout << "Jumlah " << huruf << " Sebanyak "<< tembak;	
}

int main() {
Cari();
}

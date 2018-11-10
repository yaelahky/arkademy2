#include <iostream>
using namespace std;
void Salam() {
	int nilai, hasil;
		cout<<"Masukkan Jumlah Orang :";cin>>nilai;
 	for(int a = 0; a < nilai; a++) {
  	hasil = hasil+a;
 	}
		cout<<"Jumlah jabat tangan: "<<hasil<<endl;
	}

int main() {
Salam();
}

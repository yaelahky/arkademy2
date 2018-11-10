#include <iostream>
using namespace std;
char CekUser(char user[]){
	bool valid;
	//mengecek 5 huruf pertama
	for (int a=0;a<=4;a++) {
		if (user[a] >= 'a' && user[a] <= 'z') valid = true;
		else valid = 0;
	//mengecek harus menggunakan _ .
		for (int b=5;b<=5;b++) {
			if (user[b] == '_' && user[b] == '.') valid = true;
			else valid = 0;
			}
			//mengecek harus kapital	
				for (int c=6;c<=7;c++) {
				if (user[c] >= 'A' && user[c] <= 'Z') valid = true;
				else valid = 0;
				}
	}
	if (valid == true){
	cout << user << " valid bisa di pakai";
	}
	else{
	cout << " Username Tidak Valid, Baca Ketentuan";
	}
	return valid;
}
int main() {
	char user[7];
	bool valid;
	cout << "1. Masukkan 5 karakter huruf \n2. Masukkan SATU Simbol 'underscore' atau 'titik' \n3. Masukkan 2 huruf KAPITAL";
	cout << "Contoh valid username : qwert_QQ / lkjhg.AA \n";
	cout << "masukan nama user : ";
	cin >> user;
	valid = CekUser(user);
}

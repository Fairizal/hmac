NAMA			: FAIRIZAL AARON WAHYU T.S.W <br/>
NIM				: 1814321034 <br/>
MATA KULIAH		: SISTEM KEAMANAN JARINGAN <br/>
 <br/>
Cara kerja program: <br/>
Pastikan sudah menginstall php dan folder phpnya sudah dimasukkan ke dalam path environment. <br/>
 <br/>
create.php => digunakan untuk membuat hmac <br/>
1. Run program dengan cara ketik php create.php pada terminal atau cmd. <br/>
2. Masukkan nama file yang akan dienkripsi. File yang akan dienkripsi harus berada dalam folder yang sama. Disini saya menggunakan file validate.php. <br/>
3. Kemudian masukkan password yang diinginkan. <br/>
4. Jika file yang dimasukkan tidak ada dalam folder, maka akan mengeluarkan pesan “File Tidak Valid”. <br/>
5. JIka file yang dimasukkan ada dalam folder, maka akan mengeluarkan hasil hmacnya. <br/>
 <br/>
 <br/>
validate.php => digunakan untuk memvalidasi mac yang sudah dibuat. <br/>
1. Run program dengan cara ketik php validate.php pada terminal atau cmd. <br/>
2. Caranya hampir sama dengan saat create hmac. Masukkan nama file yang akan dienkripsi. <br/>
3. Kemudian masukkan password. <br/>
4. Lalu masukkan MAC yang ingin dicek. <br/>
5. Jika file yang dimasukkan tidak ada dalam folder, maka mengeluarkan pesan “File Tidak Valid”. Jika ada maka akan melakukan proses selanjutnya. <br/>
6. Kemudian, jika MAC yang dimasukkan tidak cocok maka akan muncul pesan “File Tidak Terotentikasi”. <br/>
7. Jika MAC cocok makan akan muncul pesan “File Terotentikasi”. <br/>

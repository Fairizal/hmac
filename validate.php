<?php
echo "Masukkan Nama File : ";
$fileName = trim(fgets(STDIN));

echo "Masukkan Password : ";
$password = trim(fgets(STDIN));

echo "Masukkan MAC : ";
$macExpect = trim(fgets(STDIN));

if (file_exists($fileName)) {
	$mac = hash_hmac_file("sha1", $fileName, '12345');

	$validate = hash_equals($mac,$macExpect);

	if ($validate) {
		echo "File Terotentikasi";
	} else {
		echo "File Tidak Terotentikasi";
	}
} else {
	echo "File Tidak Valid";
}

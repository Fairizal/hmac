<?php
echo "Masukkan Nama File : ";
$fileName = trim(fgets(STDIN));

echo "Masukkan Password : ";
$password = trim(fgets(STDIN));

// $mac = hash_hmac("sha1", $fileName, $password);

if (file_exists($fileName)) {
	$mac = hash_hmac_file("sha1", $fileName, '12345');
	echo "MAC = $mac\n";
} else {
	echo "File Tidak Valid\n";
}

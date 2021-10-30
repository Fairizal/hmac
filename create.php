<?php
echo "Masukkan Nama File : ";
$fileName = trim(fgets(STDIN));

echo "Masukkan Password : ";
$password = trim(fgets(STDIN));


if (file_exists($fileName)) {
	$mac = hash_hmac_file("sha1", $fileName, $password);
	echo "MAC = $mac\n";
} else {
	echo "File Tidak Valid\n";
}

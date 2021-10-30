<?php

$key = '12345';
$message = 'index.php';
$blockSize = 64;
$outputSize = 20;

if (strlen($key) > $blockSize) {
  $key = hash('sha1', $key);
} else {
  $key = str_pad($key, 0);
}

$okeypad = $key ^ 92;
$ikeypad = $key ^ 54;

$hash = hash('sha1', $okeypad.hash('sha1', $ikeypad.$message));
echo $hash;
echo "\n";
echo strlen($hash);
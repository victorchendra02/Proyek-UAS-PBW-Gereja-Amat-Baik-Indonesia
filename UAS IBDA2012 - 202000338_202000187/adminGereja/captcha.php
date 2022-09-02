<?php
session_start();
 
$angka = rand(100000, 999999); 	// jumlah karakter captcha 6

$_SESSION["captcha"] = $angka;
 
$gbr = imagecreatetruecolor(170, 35); // membuat ukuran image
$bground = imagecolorallocate($gbr, 69, 179, 157);
$fground = imagecolorallocate($gbr, 253, 252, 252); // pengaturan font captcha
$ukuran_font = 20;
$posisi = 32;

// membuat angka random
imagefill($gbr,0,0,$bground);
imagestring($gbr,$ukuran_font,10,10,$angka,$fground);

header("Cache-control:no-cache, must-revalidate");
header("Content-type: image/png");
imagepng($gbr); 
imagedestroy($gbr);
?>

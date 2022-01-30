<meta charset="utf-8">
<?php

//MYSQL BAGLANTİSİ
$sunucu = "localhost";
$kAdi = "root";
$sifre = "";
$vt = "vt_deneme";

//VERİTABANI BAĞLANTI KODU
$baglan = @mysqli_connect($sunucu, $kAdi, $sifre, $vt);
//Baglantı testi
if (!$baglan) {
	

	die("Bağlantı Sağlanamadı...".mysqli_connect_error());
}

?>
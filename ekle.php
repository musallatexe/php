<meta charset="utf-8">
<form action="ekle.php" method="POST">
<table>
	<tr><td align="center" colspan="3"><b>ÜYE KAYIT SAYFASI</b></td></tr>
	<tr><td>Ad :</td><td><input type="text" name="ad" maxlength="35"></td></tr><br>
	<tr><td>E-mail : </td><td><input type="mail" name="mail" maxlength="35"></td></tr><br>
	<tr><td>Şifre : </td><td><input type="password" name="sifre" maxlength="35"></td></tr><br>
	<tr><td>Kullanıcı Adı :</td><td> <input type="text" name="kAdi" maxlength="35"></td></tr><br>
	<tr><td>Cinsiyet :</td><td><input type="text" name="cinsiyet" maxlength="35"></td></tr>
<br><tr><td><input type="submit" name=""></td></tr>

</table></form>
<?php
include("baglanti.php");

if (isset($_POST['ad'],$_POST['mail'],$_POST['sifre'],$_POST['kAdi'],$_POST['cinsiyet'])) {
	$ad = $_POST['ad'];
	$mail= $_POST['mail'];
	$sifre= $_POST['sifre'];
	$kAdi= $_POST['kAdi'];
	$cinsiyet= $_POST['cinsiyet'];
	$ekle= "INSERT INTO uyeler(uyeAd,uyeMail,uyeSifre,uyeKAdi,uyeCinsiyet) VALUES ('".$ad."','".$mail."','".$sifre."','".$kAdi."','".$cinsiyet."')";
	if ($baglan->query($ekle)===TRUE) {
		echo "<script>alert('üye başarıyla eklendi..')</script>";
 	}
 	else {
 		echo "<script>alert('Üye Eklenemedi...')</script>";
 	}
}


?>
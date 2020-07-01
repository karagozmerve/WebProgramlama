<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kayıt Ekleniyor...</title>
</head>

<body>
	<?php
	include("baglan.php");
	$ad=$_POST['ad'];
	$dogumtarihi=$_POST['dogumtarihi'];
	$telnum=$_POST['telnum'];
	$mail=$_POST['mail'];
	$cinsiyet=$_POST['cinsiyet'];
	$sifre=$_POST['sifre'];
	$unvan=$_POST['unvan'];
$sorgu = mysqli_query($baglan,"SELECT mail FROM kullanici WHERE mail = '$mail' ");
$mailvarmi = mysqli_num_rows($sorgu);

if ($mailvarmi == 0){
	$sqlekle="INSERT INTO kullanici(ad,dogumtarihi,telnum,mail,cinsiyet,sifre,unvan) VALUES ('$ad','$dogumtarihi','$telnum','$mail','$cinsiyet','$sifre','$unvan')";
	$sonuc=mysqli_query($baglan,$sqlekle);
	
	if ($sonuc==0){
		echo '<script>alert("Bir Hata Oluştu.");</script><script>window.location.href="kayitol.php";</script>';}
	else{
		echo '<script>window.location.href="giris.php";</script>';}
	
	}
 else {
echo '<script>alert("Bu Mail Adresi İle Daha Önce Kayıt Yapılmış. Başka Mail Adresi Seçmelisiniz.");</script><script>window.location.href="kayitol.php";</script>';}

	?>
</body>
</html>
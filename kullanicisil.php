<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
<?php 
	$silinecekID= $_GET['id'];
	include("baglan.php");
	mysqli_set_charset($baglan, "utf8");
	
	$sonuc=mysqli_query($baglan,"DELETE from kullanici where id=".$silinecekID);
	
	if($sonuc>0){
echo '<script>window.location.href="uyeizni.php";</script>';	
	}
	else
echo '<script>alert("Bir hata oluştu.");</script><script>window.location.href="uyeizni.php";</script>';	?>
?>
</body>
</html>

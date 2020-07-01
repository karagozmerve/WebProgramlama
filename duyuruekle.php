<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Duyuru Ekleniyor...</title>
</head>

<body>
<?php
	include("baglan.php");
	$duyuru=$_POST['duyuru'];
	
	$sqlekle="INSERT INTO duyuru(duyuru) VALUES ('$duyuru')";
	$sonuc=mysqli_query($baglan,$sqlekle);
	
	if ($sonuc==0)
		echo '<script>alert("Bir Hata Oluştu.");</script><script>window.location.href="index.php";</script>';
	else
echo '<script>alert("Duyuru Eklendi.");</script><script>window.location.href="index.php";</script>';	?>
</body>
</html>
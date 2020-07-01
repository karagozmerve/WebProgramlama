<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Düzenleniyor...</title>
</head>

<body>
<?php
	include("baglan.php");
	 
    $hisim = $_POST['hisim']; 
    $hegitim1 = $_POST['hegitim1']; 
    $hegitim2 = $_POST['hegitim2']; 
    $hegitim3 = $_POST['hegitim3']; 
    $hegitim4 = $_POST['hegitim4']; 
    $hegitim5 = $_POST['hegitim5']; 
    $hegitim6 = $_POST['hegitim6']; 
    $staj1 = $_POST['staj1']; 
    $staj2 = $_POST['staj2']; 
    $hdil = $_POST['hdil']; 
    $hyetenek = $_POST['hyetenek']; 
    $hilgi1 = $_POST['hilgi1']; 
    $hilgi2 = $_POST['hilgi2']; 
    $hmedenidurum = $_POST['hmedenidurum']; 
    $hkariyer = $_POST['hkariyer']; 
    $htelnum = $_POST['htelnum']; 
    $hmail = $_POST['hmail']; 
    $htarih = $_POST['htarih']; 
    $hbolum = $_POST['hbolum']; 
        
        if ($baglan->query("UPDATE hakkimda SET hisim = '$hisim', hegitim1 = '$hegitim1', hegitim2 = '$hegitim2', hegitim3 = '$hegitim3', hegitim4 = '$hegitim4', hegitim5 = '$hegitim5', hegitim6 = '$hegitim6', staj1 = '$staj1', staj2 = '$staj2', hdil= '$hdil', hyetenek = '$hyetenek', hilgi1 = '$hilgi1', hilgi2= '$hilgi2', hmedenidurum = '$hmedenidurum', hkariyer = '$hkariyer', htelnum = '$htelnum', hmail = '$hmail', htarih = '$htarih', hbolum = '$hbolum'  WHERE id = 1")) 
        {
echo '<script>window.location.href="hakkinda.php";</script>';        }
        else
        {
echo '<script>alert("Bir Hata Oluştu.");</script><script>window.location.href="hakkinda.php";</script>';        }
    
?>
</body>
</html>
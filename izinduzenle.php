<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kullanıcı İzni Düzenle</title>
<style>
.kutu{
	position:absolute;
	left:50%;
	top:50%;
	transform: translate(-50%,-50%);
    background-color:#7E4041;
	border-radius:5px;
	padding:70px 100px;
	border-style: solid;
	border-width: 1px;
    border-color: #683536;
	text-align: center;
	color: antiquewhite;
}	
.btn{
	color:#fff;
	background-color:#683536;
	outline:#FFF6F6;
    border: 1px solid;
    color: #fff;
	padding:10px 20px;
	text-transform:uppercase;
	border-radius:3px;
	cursor:pointer;
	position:relative;
}
</style>
</head>

<body>
<?php
	$duzenlenecekID= $_GET['id'];
include("baglan.php");
	mysqli_set_charset($baglan, "utf8");
    $sorgu=mysqli_query($baglan,"select * from kullanici where id=".$duzenlenecekID);	
	$sonuc = $sorgu->fetch_assoc(); 
?>
	<div class="kutu">
		<h2>Kullanıcı İzni Düzenle</h2>
		<hr />
		<form method="POST" action=" "  >
            <h3>Ad-Soyad</h3>
            <input type="text" name="name" disabled=true value="<?php echo $sonuc['ad']; ?>"> 
            <h3>Mail</h3>
            <input type="text" name="mail" disabled=true value="<?php echo $sonuc['mail']; ?>"> 
            <h3>İzin Durumu</h3>
			<select name="unvan" id="unvan">
				<option value="<?php echo $sonuc['unvan'];?>" selected disabled><?php echo $sonuc['unvan'];?></option>
				<option value="misafir">Misafir</option>
				<option value="uye">Üye</option>
				<option value="kullanici">Kullanıcı</option>
				<option value="admin">Admin</option>
		    </select>
			<br>
			<br>
			<br>

		<input type="submit" class="btn" value="Formu Düzenle" >
	

	</form>
		</div>
<?php
if ($_POST) { 

	 $unvan = $_POST['unvan']; 
    if ($unvan<>" " ) { 
        
        if ($baglan->query("UPDATE kullanici SET unvan = '$unvan' WHERE id =".$_GET['id'])) 
        {
echo '<script>alert("Düzenleme işlemi başarılı.");</script><script>window.location.href="uyeizni.php";</script>';	
        }
        else
        {
           echo '<script>alert("Bir hata oluştu.");</script><script>window.location.href="uyeizni.php";</script>';	


        }
    }
}
	?>
</body>
</html>
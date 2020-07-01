<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Şifremi Unuttum..</title>
<link rel="icon" type="image/x-icon" href= "baslikicon.png" />
<style>
	body{
		background-color: #683536;
	}
.kutu{
	width: 27%;
	height: 55%;
	position:absolute;
	left:50%;
	top:50%;
	transform: translate(-50%,-50%);
	border:1px solid;
  	border-color:#3A1D1D;
	padding:70px 100px;
	opacity: 0.85;
	background-color: antiquewhite;

}
	.kutu:hover{
		  box-shadow: 1px 2px #3A1D1D;
	}
.input-container{
	position:relative;
	margin-bottom:25px;
}
.input-container label{
	position:absolute;
	top:0px;
	left:0px;
	font-size:18px;
	color:#683536;	
    pointer-event:none;
	transition: all 0.5s ease-in-out;
}
.input-container input{ 
  border:0;
  border-bottom:1px solid #555;  
  background:transparent;
  width:100%;
  padding:8px 0 5px 0;
  font-size:16px;
  color:#683536;
}
.input-container input:focus{ 
 border:none;	
 outline:none;
 border-bottom:1px solid #e74c3c;	
}
.btn{
	color:#fff;
	background-color:#683536;
	outline:#FFF6F6;
    border: 1px solid;
    color: #fff;
	padding:10px 20px;
	text-transform:uppercase;
	margin-top:50px;
	border-radius:3px;
	cursor:pointer;
	position:relative;
}

.input-container input:focus ~ label,
.input-container input:valid ~ label{
	top:-12px;
	font-size:12px;
	
}
.text-center{
	color:#683536;	
	text-transform:uppercase;
    font-size: 18px;
    margin: -50px 0 80px 0;
    display: block;
    text-align: center;
}
</style>
</head>


<body>
<?php

include("baglan.php");

/*use PHPMailer\src\Exception;
use PHPMailer\src\PHPMailer;

require 'vendor\autoload.php';
$mail = new PHPMailer(true);
	//server ayarları
	$mail->SMTPDebug = 2;
	$mail->isSMTP();
	$mail->Host = "ssl://smtp.gmail.com";
	$mail->SMTPAuth = true;
	$mail->UserName = "karagoz.merve15@gmail.com";
*/
	
if(isset($_POST) & !empty($_POST)){
	$karakterler = "0123456789!@#$%^&*()_+".
		"abcdefghijklmnopqrstuvwxyz".
		"ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$sfr = "";
	while(strlen($sfr) < 9)
{
$sfr .= substr($karakterler, (rand()% strlen($karakterler)), 1);
}

	$ad = mysqli_real_escape_string($baglan, $_POST['ad']);
	$mail = mysqli_real_escape_string($baglan, $_POST['mail']);
	$sql = "SELECT * FROM kullanici WHERE ad = '$ad' and mail='$mail' ";
	$res = mysqli_query($baglan, $sql);
	$count = mysqli_num_rows($res);
	if($count == 1){
		$r = mysqli_fetch_assoc($res);
		$mail = $r['mail'];
      $usql = "UPDATE kullanici SET sifre='$sfr' WHERE mail='$mail'";
      $result = mysqli_query($baglan, $usql);
		
 
	}else{
		echo "User name does not exist in database";
	}
}

 
?>
<div class="kutu">
	<form action="" method="post">
		<div>
		<span class="text-center">~ Sillage Blog ~</span>
		<span class="text-center">şifremi unuttum</span>
		</div>
		<div class="input-container">
		<input type="text" name="ad" required=""/>
		<label>Ad</label>		
	</div>
	<div class="input-container">
		<input type="text" name="mail" required=""/>
		<label>EMail</label>		
	</div>
	
		<br />
		<input type="submit" class="btn" align="center" value="Mail Gönder">
		<br />
		<br />

		<a class="kaydol" href="giris.php" style="align:right;text-decoration: none;font-style: italic; color:#683536;">Giriş Ekranına Dön...</a>
</form>	
</div>
</body>
</html>
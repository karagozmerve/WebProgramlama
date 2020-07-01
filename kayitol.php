<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kayıt Ol..</title>
<link rel="icon" type="image/x-icon" href= "baslikicon.png" />
<style>

@import url('https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&subset=greek-ext');

	body{
		background-color: #683536;
	}
.text-center{
	color:#683536;	
	text-transform:uppercase;
    font-size: 23px;
    margin: -50px 0 80px 0;
    display: block;
    text-align: center;
}
.kutu{
	width: 29%;
	height: 100%;
	position:absolute;
	left:50%;
	top:50%;
	transform: translate(-50%,-50%);
    background-image: url("rainbow-bright-candy-background_56745-74.jpg");
	border-radius:15px;
border:1px solid;
  border-color: #3A1D1D;
	padding:70px 100px;
	opacity: 0.85;
	background-repeat: no-repeat;
  background-size:100%;
	margin-top: 7%;

}
	.kutu:hover{
		  box-shadow: 2px 3px #3A1D1D;
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

	.check{
	font-size:18px;
	color:#683536;	
	}
</style>
</head>

<body>

	<?php include("baglan.php"); ?> 

	<div class="kutu">
	<form  method="POST" action="vtkullaniciekle.php"  >
		<span class="text-center">~ Sillage Blog ~</span>
		<span class="text-center">kayıt ol</span>
		<div class="input-container">
		<input type="text" name="ad" required=""/>
		<label>Ad-Soyad</label>		
	</div>
	
	<div class="input-container">
		<input type="date" name="dogumtarihi" required=""/>
		<label>Doğum Tarihi</label>		
	</div>
	
	<div class="input-container">
		<input type="text" name="telnum" required=""/>
		<label>Telefon Numarası</label>		
	</div>
	<div class="input-container">
		<input type="email" name="mail" required=""/>
		<label>EMail</label>		
	</div>
		<div class="input-container">
		<input type="text" name="cinsiyet" required=""/>
		<label>Cinsiyet</label>		
	</div>
	<div class="input-container">		
		<input type="password" name="sifre" required=""/>
		<label>Şifre</label>
	</div>
		<h4 style="font-style: italic; color:#683536;">Hangi unvan ile kaydolmak istersiniz ? </h4>
		<div class="check">
		<input type="checkbox" name="unvan" value="kullanici" />Kullanıcı
		<input type="checkbox" name="unvan" value="misafir" />Misafir
		<input type="checkbox" name="unvan" value="uye" />Üye
		</div>
		<input type="submit" value="Kayıt Ol" class="btn" >
		<br />
		<br />

		<a class="kaydol" href="giris.php" style="align:right;text-decoration: none;font-style: italic; color:#683536;">Giriş Ekranına Dön...</a>
</form>	
<br/>
</div>

</body>
</html>
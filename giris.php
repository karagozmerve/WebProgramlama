<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HOŞGELDİNİZ..:)</title>
<link rel="icon" type="image/x-icon" href= "baslikicon.png" />

<style>
.hero {
 
    width: 100%;
    height: 100vh;
    

    display: flex;
    justify-content: center;
    align-items: center;
    
    text-align: center;
    color: white; 
    

    background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url("tumekran.jpg");
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
	backface-visibility: hidden;
	animation: heroslide 15s linear infinite 0s;
	animation-timing-function: ease-in-out;
}
	@keyframes heroslide{
		0%{
			background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url("tumekran.jpg")
		}
		25%{
			background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url( "kahve.png")
		}
		50%{
			background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url( "coffee-funny-quotes-coffee-funny-quotes-tumblr-funny-coffee-quotes-for-thursday.jpg")
		}
		75%{
			background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url( "8_1-Coffee-for-dreamers.jpg")
		}
		100%{
			background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url( "Im-a-coffeebender-1500x1000.jpg")
		}
	}
.hero h1 {
   
    font-size: 5em;
    margin-top: 0px;
    margin-bottom: 0.5em;
	font-family: "miss-fajardose";
}
	.hero h2 {
	font-family: "miss-fajardose";
	}	
@import url('https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&subset=greek-ext');


.text-center{
	color:#fff;	
	text-transform:uppercase;
    font-size: 23px;
    margin: -50px 0 80px 0;
    display: block;
    text-align: center;
}
.kutu{
	position:absolute;
	left:50%;
	top:50%;
	transform: translate(-50%,-50%);
    background-color:#683536;
	border-radius:15px;
	padding:70px 100px;
	opacity: 0.85;

}
.input-container{
	position:relative;
	margin-bottom:25px;
}
.input-container label{
	position:absolute;
	top:0px;
	left:0px;
	font-size:16px;
	color:#fff;	
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
  color:#fff;
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
	.sifreunuttum{
		text-decoration: none;
		color: whitesmoke;
	}
</style>
</head>

<body>
		<?php include("baglan.php"); ?> 

	<!--https://codetheweb.blog/2017/12/07/fullscreen-image-hero/ adresinden alındı-->
	 <section class="hero">
        <div class="hero-inner">
	<!--https://freefrontend.com/css-input-text/ adresinden yardım alındı-->
 <div class="kutu">
	<form method="POST" action="giriskontrol.php">
		<span class="text-center">Sillage Blog</span>
		<span class="text-center">giriş</span>
		
	<div class="input-container">
		<input type="text" name="mail" value="<?php if(isset($_COOKIE["mail"])) echo $_COOKIE["mail"]; ?>" required />
		<label>EMail</label>		
	</div>
	<div class="input-container">		
		<input type="password" name="sifre" value="<?php if(isset($_COOKIE["sifre"])) echo $_COOKIE["sifre"]; ?>"required />
		<label>Şifre</label>
	</div>
		<input type="checkbox" name="hatirla" value="1"/>Beni Hatırla
		<br />
		<input type="submit" class="btn" value="Giriş">
		<br />
		<br />

		<a class="sifreunuttum" href="sifremiunuttum.php">Şifremi Unuttum</a>
		<br />
		<br />
		<br />
		<br />
		<a class="kaydol" href="kayitol.php" style="align:right;text-decoration: none;font-style: italic; color:whitesmoke;">Kayıt Ol..</a>
</form>	
</div>
			
        </div>
    </section>
</body>
</html>
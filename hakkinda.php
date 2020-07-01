<?php
session_start();
if(isset($_SESSION['giriskullanici'])){
$giriskullanici=$_SESSION['giriskullanici'];
}
else{
echo '<script>alert("Lütfen Giriş Yapınız.");</script><script>window.location.href="giris.php";</script>';}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hakkında</title>
<link rel="icon" type="image/x-icon" href= "baslikicon.png" />

<style>
body {
  background: white;
  font-size: 22px;
  line-height: 20px;
  margin: 0;
  padding: 0;
  word-wrap: break-word !important;
  font-family: 'roboto', sans-serif;
}


#container {
  margin: 0 auto;
  max-width: 890px;
}


p { text-align: center; }
 .toggle, [id^=drop] {
 display: none;
}

nav {
  margin: 0;
  padding: 0;
  background-color: #D3AC8B;
  font-family: "alex-brush";
  position: fixed;  
  width:100%;
}

nav:after {
  content: "";
  display: table;
  clear: both;
}

nav ul {
  float: right;
  padding: 0;
  margin: 0;
  list-style: none;
  position: relative;
  padding-top: 10px;
}

nav ul li {
  margin: 0px;
  display: inline-block;
  float: left;
  background-color: #D3AC8B;
}

nav a {
  display: block;
  padding: 0 20px;
  color: #FFF;
  font-size: 20px;
  line-height: 30px;
  text-decoration: none;
}

nav ul li ul li:hover { background: #CDA17C; }

nav a:hover { background-color: #CDA17C; }

nav ul ul {
  display: none;
  position: absolute;
  top: 29px;
}

nav ul li:hover > ul { display: inherit; }

nav ul ul li {
  width: 170px;
  float: none;
  display: list-item;
  position: relative;
}

nav ul ul ul li {
  position: relative;
  top: -60px;
  left: 170px;
}



@media all and (max-width : 768px) {


nav { margin: 0; }

.toggle + a,
 .menu { display: none; }

	
[id^=drop]:checked + ul { display: block; }

nav ul li {
  display: block;
  width: 100%;
}

 nav ul ul a { padding: 0 40px; }

nav ul ul ul a { padding: 0 80px; }

nav a:hover,
 nav ul ul ul a { background-color: #000000; }

nav ul li ul li .toggle,
 nav ul ul a { background-color: #212121; }

nav ul ul {
  float: none;
  position: static;
  color: #ffffff;
}

nav ul ul li:hover > ul,
nav ul li:hover > ul { display: none; }

nav ul ul li {
  display: block;
  width: 100%;
}

nav ul ul ul li { position: static;

}
}

@media all and (max-width : 330px) {

nav ul li {
  display: block;
  width: 94%;
}

}
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
	.footerkısmı{
   margin-bottom: -50px;
   width:100%;
   background-color: #D3AC8B;
   font-family: "alex-brush";
   font-size: 20px;
	}
	a.linkler{
		color: white;
		text-decoration: none;
		font-family: "adamina";
	}
	.buton{
		background-image: url("icons8-edit-file-100.png");
		background-color: white;
		border: none;
		width: 90px;
		height: 90px;
	}
	.kaydetbuton{
		background-image: url( "icons8-add-file-100.png");
		background-color: white;
		border: none;
		width: 90px;
		height: 90px;
	}
	.pdfindir{
		background-image: url( "downloadfile.png");
		background-color: white;
		border: none;
		width: 90px;
		height: 90px;
	}
	.butonhizala{
		margin-bottom: 1350px;
		float: right;
	}
	.renk td{
		color: antiquewhite;	
	}
	.renk td input{
		color: antiquewhite;	
	}
</style>
	 <script src="https://docraptor.com/docraptor-1.0.0.js"></script>
    <script>
      var downloadPDF = function() {
        DocRaptor.createAndDownloadDoc("YOUR_API_KEY_HERE", {
          test: true, 
          type: "pdf",
          document_content: document.querySelector('#textkismi').innerHTML,
        })
      }
    </script>
    <style>
      @media print {
        #pdf-button {
          display: none;
        }
      }
    </style>

</head>

<body>

<!--https://codepen.io/ladyareum/pen/eJVoPP adresinden Dropdown Menu oluşturma hakında yardım alınmıştır-->
		<nav>
<img src="sillagelogo.png" align="left" width="12%" height="55px"/>
  <input type="checkbox" id="drop">
  <ul class="menu">
    <li><a href="index.php">Ana sayfa</a></li>
    <li> 
      <label for="drop-1" class="toggle">Kahve </label>
      <a href="#">Kahve + </a>
      <input type="checkbox" id="drop-1">
      <ul>
        <li><a href="fotogaleri.php" target="_blank">Foto Galeri</a><hr /></li>
        <li><a href="kahvevideoları.php" target="_blank">Kahve Videoları</a><hr /></li>
        <li><a href="karakteranalizi.php" target="_blank">Kahve Seçimine Göre Karakter Analizi</a><hr /></li>
		 <li><a href="kahvetarihi.php" target="_blank">Kahvenin Tarihi</a><hr /></li>
      </ul>
    </li>
    <li>       
      <label for="drop-2" class="toggle">Tatlı +</label>
      <a href="#">Tatlı +</a>
      <input type="checkbox" id="drop-2">
      <ul>
        <li><a href="kurabiyeler.php" target="_blank">Kurabiyeler</a><hr /></li>
        <li><a href="çikolatalıtatlılar.php" target="_blank">Çikolatalı Tatlılar</a><hr /></li>
      </ul>
    </li>
	 <li><a href="kitap.php">Kitap</a></li>
    <li><a href="iletisim.php" target="_blank">İletişim</a></li>
    <li><a href="hakkinda.php" target="_blank">Hakkında</a></li>
	 <?php     
	  
	  if ($giriskullanici['unvan']=='admin'){
		 
	 echo' <li><a href="uyeizni.php" target="_blank">Kullanıcılar</a></li>';}
?>
	<li><a href="profilim.php" target="_blank">Profilim</a></li>
	<li><a href="cikisyap.php" target="_blank">Çıkış</a></li>

  </ul>
</nav>
</nav>
        <br />
		<br />
		<br />
		<br />
	<?php
include("baglan.php");
	mysqli_set_charset($baglan, "utf8");
	
	$sorgu=mysqli_query($baglan,"select * from hakkimda where id=1");
	$sonuc = $sorgu->fetch_assoc(); 
	
	?>
	<h1 align="center" style="color: #780002;">~ÖZGEÇMİŞ~</h1>

<div align="center" id="textkismi" style="margin-left: 20px; margin-bottom: 970px; font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'; font-size: 20px;" rows="25" cols="90"  disabled="disabled">
<form method="POST" action="hakkindaduzenle.php" >
<table class="renk" style="border-collapse: collapse;">
    <tr>
	<td  style="background-color: #6F0001;"><img align="left" src=  "WhatsApp Image 2019-12-19 at 19.03.41.jpeg" height="230" width="200"  /></td>
	<td colspan=3 style="background-color:antiquewhite;"><h1 style="color: black;"><?php echo $sonuc['hisim']; ?></h1></td>
	<td style="background-color:antiquewhite;"><h3 style="color: black; visibility: hidden;">Bölüm Adı</h3></td>
	<?php if($giriskullanici['unvan']=='admin'){?>
	<td><input type="submit" class="buton" ></td> 
	<?php } ?>
	<td> <input id="pdf-button" type="button" class="pdfindir" onclick="downloadPDF()" /> </td>	
	</tr>
	<tr >
	<td style="background-color: #6F0001;"><input type="text" name='hisim' style="background-color: #6F0001; border: none;"value="<?php echo $sonuc['hisim']; ?>"></td>
		<td style="background-color:antiquewhite;"><h3 style="color: black;">Bölüm Adı</h3></td>
	<td style="background-color:antiquewhite;"><h3 style="color: black;">:</h3></td>
    <td style="background-color:antiquewhite;"><input type="text" name='hbolum' style="background-color: antiquewhite; color:black;border: none;width:auto;" value="<?php echo $sonuc['hbolum']; ?>"></td>
	<td style="background-color:antiquewhite;"><h3 style="color: black; visibility: hidden;">Bölüm Adı</h3></td>

	</tr>	
		
	<tr>
	<td style="background-color: #6F0001;"><h1>İletişim </h1></td>
	<td style="background-color:antiquewhite;"><h3 style="color: black;">Eğitim</h3></td>
	<td style="background-color:antiquewhite;"><h3 style="color: black;visibility: hidden;">:</h3></td>
    <td style="background-color:antiquewhite;"><input type="text" name='hegitim' style="color: black; visibility: hidden;"></td>
	<td style="background-color:antiquewhite;"><h3 style="color: black; visibility: hidden;">Bölüm Adı</h3></td>

	</tr>	
	<tr >
    <td style="background-color: #6F0001;"><hr/></td>
    <td style="background-color:antiquewhite;"><input type="text" name='hegitim1' style="background-color: antiquewhite; color:black;border: none;"value="<?php echo $sonuc['hegitim1']; ?>"></td>
	<td style="background-color:antiquewhite;"><h3 style="color: black;">-</h3></td>
    <td style="background-color:antiquewhite;"><input type="text" name='hegitim2' style="background-color: antiquewhite; color:black;border: none;" value="<?php echo $sonuc['hegitim2']; ?>"></td>
	<td style="background-color:antiquewhite;"><h3 style="color: black; visibility: hidden;">Bölüm Adı</h3></td>
	</tr>	
	</tr>	
	<tr >
	<td style="background-color: #6F0001;"><h3>Telefon</h3></td> 
	 <td style="background-color:antiquewhite;"><input type="text" name='hegitim3' style="background-color: antiquewhite; color:black;border: none;" value="<?php echo $sonuc['hegitim3']; ?>"></td>
	<td style="background-color:antiquewhite;"><h3 style="color: black;">-</h3></td>
    <td style="background-color:antiquewhite;"><input type="text" name='hegitim4' style="background-color: antiquewhite; color:black;border: none;" value="<?php echo $sonuc['hegitim4']; ?>"></td>
	<td style="background-color:antiquewhite;"><h3 style="color: black; visibility: hidden;">Bölüm Adı</h3></td>
	</tr>
	<tr>
	<td  style="background-color: #6F0001;"><input type="tel" name='htelnum' style="background-color: #6F0001; border: none;"value="<?php echo $sonuc['htelnum']; ?>"></td>
	 <td style="background-color:antiquewhite;"><input type="text" name='hegitim5' style="background-color: antiquewhite; color:black;border: none;" value="<?php echo $sonuc['hegitim5']; ?>"></td>
	<td style="background-color:antiquewhite;"><h3 style="color: black;">-</h3></td>
    <td style="background-color:antiquewhite;"><input type="text" name='hegitim6' style="background-color: antiquewhite; color:black;border: none;" value="<?php echo $sonuc['hegitim6']; ?>"></td>
	<td style="background-color:antiquewhite;"><h3 style="color: black; visibility: hidden;">Bölüm Adı</h3></td>
	</tr>
	<tr >
	<td style="background-color: #6F0001;"><h3>E-Mail</h3></td> 
	<td colspan=4 style="background-color:antiquewhite;"><h3 style="color: black; ">Staj Deneyimleri</h3></td>
	</tr>
	<tr>
	<td style="background-color: #6F0001;"><input type="text" name='hmail' style="background-color: #6F0001; border: none;" value="<?php echo $sonuc['hmail']; ?>"></td>
	<td style="background-color:antiquewhite;"><input type="text" name='staj1' style="background-color: antiquewhite; color:black;border: none;" value="<?php echo $sonuc['staj1']; ?>"></td>
	<td style="background-color:antiquewhite;"><h3 style="color: black;">-</h3></td>
    <td style="background-color:antiquewhite;"><input type="text" name='staj2' style="background-color: antiquewhite; color:black;border: none;" value="<?php echo $sonuc['staj2']; ?>"></td>
	<td style="background-color:antiquewhite;"><h3 style="color: black;visibility: hidden;">:</h3></td>
	</tr>
	<tr>
	<td style="background-color: #6F0001;"><h1>Kişisel </h1></td>
	<td style="background-color:antiquewhite;"><h3 style="color: black; ">Yabancı Dil</h3></td>
	<td style="background-color:antiquewhite;"><h3 style="color: black;">:</h3></td>
    <td style="background-color:antiquewhite;"><input type="text" name='hdil' style="background-color: antiquewhite; color:black;border: none;" value="<?php echo $sonuc['hdil']; ?>"></td>
	<td style="background-color:antiquewhite;"><h3 style="color: black; visibility: hidden;">Bölüm Adı</h3></td>
	</tr>
	<tr>
    <td style="background-color: #6F0001;"><hr/></td>
	<td style="background-color:antiquewhite;"><h3 style="color: black; ">Yetenekler</h3></td>
	<td style="background-color:antiquewhite;"><h3 style="color: black;">:</h3></td>
    <td style="background-color:antiquewhite;"><input type="text" name='hyetenek' style="background-color: antiquewhite; color:black;border: none;" value="<?php echo $sonuc['hyetenek']; ?>"></td>
	<td style="background-color:antiquewhite;"><h3 style="color: black; visibility: hidden;">Bölüm Adı</h3></td>
	</tr>
	<tr>
	<td style="background-color: #6F0001;"><h3>Doğum Tarihi</h3></td>
	<td style="background-color:antiquewhite;"><h3 style="color: black; ">İlgi Alanları</h3></td>
	<td style="background-color:antiquewhite;"><h3 style="color: black;visibility: hidden;">:</h3></td>
    <td style="background-color:antiquewhite;"><input type="text" style="background-color: antiquewhite; color:black;border: none;visibility: hidden;"></td>
	<td style="background-color:antiquewhite;"><h3 style="color: black; visibility: hidden;">Bölüm Adı</h3></td>
	</tr>
	<tr>
	<td style="background-color: #6F0001;"><input type="text" name='htarih' style="background-color: #6F0001; border: none;" value="<?php echo $sonuc['htarih']; ?>"></td>
	<td style="background-color:antiquewhite;"><input type="text" name='hilgi1' style="background-color: antiquewhite; color:black;border: none;" value="<?php echo $sonuc['hilgi1']; ?>"></td>
	<td style="background-color:antiquewhite;"><h3 style="color: black;visibility: hidden;">-</h3></td>
    <td style="background-color:antiquewhite;"><input type="text" name='hilgi2' style="background-color: antiquewhite; color:black;border: none;" value="<?php echo $sonuc['hilgi2']; ?>"></td>
	<td style="background-color:antiquewhite;"><h3 style="color: black;visibility: hidden;">:</h3></td>
	</tr>
	<tr>
	<td style="background-color: #6F0001;"><h3>Medeni Durum</h3></td>
	<td colspan=4 style="background-color:antiquewhite;"><input type="text" style="background-color: antiquewhite; color:black;border: none;"></td>

	</tr>
	<tr>
	<td style="background-color: #6F0001;"><input type="text" name='hmedenidurum' style="background-color: #6F0001; border: none;" value="<?php echo $sonuc['hmedenidurum']; ?>">
	</td>
		<td colspan=4 style="background-color:antiquewhite;"><input type="text" style="background-color: antiquewhite; color:black;border: none;"></td>

	</tr>
	<tr>
	<td style="background-color: #6F0001;"><h3>Kariyer Seviyesi</h3></td>
		<td colspan=4 style="background-color:antiquewhite;"><input type="text" style="background-color: antiquewhite; color:black;border: none;"></td>

	</tr>
	<tr>
	<td style="background-color: #6F0001;"><input type="text" name='hkariyer' style="background-color: #6F0001; border: none;" value="<?php echo $sonuc['hkariyer']; ?>"></td>
    	<td colspan=4 style="background-color:antiquewhite;"><input type="text" style="background-color: antiquewhite; color:black;border: none;"></td>

	</tr>	
</table>
 </form>
</div>


<script>
	function duzenle() {
    document.getElementById("textkismi").disabled = false;
    }

	window.onscroll = function() {myFunction()};


</script>

	<footer class="footerkısmı">
	<table>
	<tr>
	<td><img src="girl.png"/></td>
	<td>Blog Sahibi: Merve Karagöz</td>
	</tr>
	<tr>
	<td style="visibility: hidden;">boşluk</td>
	<td style="visibility: hidden;">boşluk</td>
	</tr>
	<tr>
	<td></td>
	<td><u><b>Benimle İletişime Geçebilirsiniz :)</b></u></td>
	</tr>
	<tr>
	<td><img src="icons8-gmail-50.png" /></td>
	<td>karagoz.merve15@gmail.com</td>
	</tr>
	<tr>
	<td><img src="icons8-phone-50.png" /></td>	
	<td>+90 539 247 08 36</td>
	</tr>
	<tr>
	<td><img src="icons8-home-page-50 (1).png" /></td>
	<td> Atatürk Caddesi Kumru Sokak No:1 Daire:6 Güngören/İstanbul||<b>Diğer Adresim:</b>Samiha Ayverdi Yurdu K Blok Umuttepe/Kocaeli</td>
	</tr>
	</table>
	<p>&copy; 2019 Tüm Hakları Saklıdır|Sillage Blog Tasarımcısı</p>
	</footer>
	<!-- https://vedatoksz.blogspot.com/2013/10/html-sayfa-bas-yukar-ck-kodu.html adresinden yardım alınarak yapılmıştır.-->
<a style="bottom:20px; right:5px; display:scroll;position:fixed; visibility:hidden;" href="#top" title="Sayfa Başına Git" id="yukaricik"><img src= "upload.png" /></a>
	<script>window.onscroll = function() {myFunction()};

function myFunction() {
  if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
    document.getElementById("yukaricik").style.visibility = "visible";
  }
 else{
    document.getElementById("yukaricik").style.visibility = "hidden";

 }
}</script>

</body>
</html>

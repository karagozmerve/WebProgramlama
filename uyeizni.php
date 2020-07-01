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
<title>Kullanıcı Görüntüleme</title>
<link rel="icon" type="image/x-icon" href= "baslikicon.png" />

<style>
.tablo{
  border-collapse: collapse;
  width: 100%;
}

.tablo td, .tablo th {
  border: 1px solid #ddd;
  padding: 8px;
}

.tablo tr:nth-child(even){background-color:#f2f2f2}

.tablo tr:hover {background-color: #ddd;}

.tablo th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #683536;
  color: white;
text-align: center;
}
body {
  background: white;
  font-size: 15px;
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
<!--echo '<td> <input type="text" name="unvan" value='.$satir['unvan'].'></td>';-->
	<a href="maillerim.php" class="button"><img src="message.png" align="right"/></a>
	
<table class="tablo">
  <tr>
	<th style="visibility: hidden;">İd</th>
    <th>Ad-Soyad</th>
    <th>Mail Adresi</th>
    <th>İzin Durumu(kullanici,uye,misafir,admin olacak şekilde yazınız)</th>
	<th colspan="3">İşlemler</th>

  </tr>
  <?php

include("baglan.php");
$sonuc=mysqli_query($baglan,"select * from kullanici"); 
mysqli_set_charset($baglan, "utf8");
 
while($satir=mysqli_fetch_array($sonuc))
{
echo '<tr>';
echo '<td style="visibility:hidden;">'.$satir['id'].'</td>';
echo '<td>'.$satir['ad'].'</td>';
echo '<td>'.$satir['mail'].'</td>';
echo '<td>'.$satir['unvan'].'</td>';
echo '<td> <a href="izinduzenle.php?id='.$satir['id'].'" class="button"><img src="pencil.png" width="25" height="25"/></a> </td>';
echo '<td> <a href="kullanicisil.php?id='.$satir['id'].'" class="button"><img src="delete.png" width="27" height="25"/></a> </td>';
echo '<td> <a href="iletisimgor.php?id='.$satir['id'].'" class="button"><img src="show.png" width="30" height="25"/></a> </td>';

echo '</tr>';
}
?>
  
</table>

	

<script>

	window.onscroll = function() {myFunction()};


</script>
<br>
<br>
<br>
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








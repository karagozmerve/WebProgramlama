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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<title>Kurabiyeler</title>
<style>
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
.container{
		width: 82%;
		border: 1px solid;
		box-shadow: 1px 1px;
		text-align: center;
		font-size: 15px;
		margin-left: 100px;
	}
	.container:hover{
	box-shadow: 2px 3px grey;
	}
body {
  background: white;
  font-size: 22px;
  line-height: 20px;
  margin: 0;
  padding: 0;
  word-wrap: break-word !important;
  font-family: 'roboto', sans-serif;
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

		<b style="visibility: hidden;">boşluk</b><br />
	<b style="visibility: hidden;">boşluk</b><br />
	<b style="visibility: hidden;">boşluk</b><br />
	<b style="visibility: hidden;">boşluk</b><br />
	<b style="visibility: hidden;">boşluk</b><br />
	<div class="container">
	<img src="yummy.png" align="right" width="110" height="110" />
	<h1>~ Kurabiyeler ~</h1>
	<h3><i>(Kahve yanında güzel gidecek tatlı mı tatlı kurabiye fotoğrafları...)</i></h3>
	<hr />
	<table>
	<tr>
	<td><img src= "ıslakbrownikurabiye.jpg" style="width: 500px; height:400px; box-shadow: 1px 1px;"/><i style="visibility: hidden;">sfsfdsfsssfdsf</i></td>
	<td><img src= "atomkurab.png" style="width: 500px; height:400px; box-shadow: 1px 1px;" /></td>
	</tr>
	<tr>
	<td style="visibility: hidden;">aaa</td>
	<td style="visibility: hidden;">aaa</td>
	</tr>
	<tr>
	<td style="visibility: hidden;">aaa</td>
	<td style="visibility: hidden;">aaa</td>
	</tr>
	<tr>
	<td style="visibility: hidden;">aaa</td>
	<td style="visibility: hidden;">aaa</td>
	</tr>
	<tr>
	<td><img src= "elmalıkurabiye.png" style="width: 500px; height:400px; box-shadow: 1px 1px;"/><i style="visibility: hidden;">sfsfdsfsssfdsf</i></td>
	<td><img src= "DUBLEÇİKO.png" style="width: 500px; height:400px; box-shadow: 1px 1px;" /></td>
	</tr>
	<tr>
	<td style="visibility: hidden;">aaa</td>
	<td style="visibility: hidden;">aaa</td>
	</tr>
	<tr>
	<td style="visibility: hidden;">aaa</td>
	<td style="visibility: hidden;">aaa</td>
	</tr>
	<tr>
	<td style="visibility: hidden;">aaa</td>
	<td style="visibility: hidden;">aaa</td>
	</tr>
	<tr>
	<td><img src=  "unkurabi.png" style="width: 500px; height:400px; box-shadow: 1px 1px;"/><i style="visibility: hidden;">sfsfdsfsssfdsf</i></td>
	<td><img src= "marmelatlıkurabi.png" style="width: 500px; height:400px; box-shadow: 1px 1px;" /></td>
	</tr>
	<tr>
	<td style="visibility: hidden;">aaa</td>
	<td style="visibility: hidden;">aaa</td>
	</tr>
	<tr>
	<td style="visibility: hidden;">aaa</td>
	<td style="visibility: hidden;">aaa</td>
	</tr>
	<tr>
	<td style="visibility: hidden;">aaa</td>
	<td style="visibility: hidden;">aaa</td>
	</tr>
	<tr>
	<td><img src= "kirazlıkurabi.png" style="width: 500px; height:400px; box-shadow: 1px 1px;"/><i style="visibility: hidden;">sfsfdsfsssfdsf</i></td>
	<td><img src= "KALPKURABIYE.jpg" style="width: 500px; height:400px; box-shadow: 1px 1px;" /></td>
	</tr>
	<tr>
	<td style="visibility: hidden;">aaa</td>
	<td style="visibility: hidden;">aaa</td>
	</tr>
	<tr>
	<td style="visibility: hidden;">aaa</td>
	<td style="visibility: hidden;">aaa</td>
	</tr>
	</table>
	</div>
	<br />
	<br />
	<br />
	<br />
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
	<p align="center">&copy; 2019 Tüm Hakları Saklıdır|Sillage Blog Tasarımcısı</p>
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

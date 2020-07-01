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
<title>Karakter Analizi</title>
<link rel="icon" type="image/x-icon" href= "baslikicon.png" />

<style>
.container{
		width: 90%;
		border: 1px solid;
		box-shadow: 1px 1px;
		text-align: center;
		font-size: 15px;
		margin-left: 60px;
	}
	.container:hover{
	box-shadow: 2px 3px grey;
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
<h1 style="color: #800002;">~ Kahve Seçimlerinize Göre Karakter Analizi ~</h1>
<h2 style="color: #4A2223;">Bu Sayfa Eğlence Amaçlı Hazırlanmıştır. Unutmayın, Kimsenin Karakteri Bir Fincana Sığdırılacak Kadar Basit Değildir. Keyifli Okumalar..:))</h2>
<h3><i>(Bu sayfa http://www.milliyet.com.tr/kahve-secimine-gore-karakter-tahlili-molatik-4180/?Sayfa=2 adresindeki bilgilerden alınarak hazırlanmıştır.)</i></h3>
<hr />
<table>
<tr>
<td><img src="barista-espresso-kasigi-4-adet.jpg" style="width: 60%; height:50%;"/></td>
	<td><h2 style="color: #800002;"><u>Espresso</u></h2><h3>Dost canlısı ve uyumlu. Kahvenin tadını gerçekten seviyorsunuz.Nadir ve güzel bir özellik.</h3></td>
</tr>
<tr>
<td><h2 style="color: #800002;"><u>Double Espresso</u></h2><h3>Pratik ve çalışkansınız. Tek shot Espresso artık işe yaramıyor, biliyorsunuz.</h3></td>
<td><img src="double-espresso.jpg" style="width: 55%; height:55%;" /></td>
</tr>
<tr>
<td><img src= "latte.png" style="width: 60%; height:65%;"/></td>
	<td><h2 style="color: #800002;"><u>Latte</u></h2><h3>Düşünceli fakat çoğunlukla kararsızsınız. Latte, bilinmezlikler arasında, güvenli bir tercih.</h3></td>
</tr>
<tr>
<td><h2 style="color: #800002;"><u>Mocha</u></h2><h3>Eğlenceyi seviyorsunuz ve üretkensiniz. Kahve tadından hoşlanmıyorsunuz, ama gözlerinizi açacak bir şey arıyor, doğaçlama yaparak bunu buluyorsunuz.</h3></td>
<td><img src= "Dark-Chocolate-Mocha-Square.jpg" style="width: 55%; height:28%;" /></td>
</tr>
<tr>
<td><img src= "cappicuno.png" style="width: 50%; height:30%;"/></td>
	<td><h2 style="color: #800002;"><u>Cappuccino</u></h2><h3>Yufka yüreklisiniz ama zaman zaman unutkan oluyorsunuz. Dudağınızdaki köpüğü silmek için arkadaşlarınızın uyarısını bekliyorsunuz.</h3></td>
</tr>
<tr>
<td><h2 style="color: #800002;"><u>Americano</u></h2><h3>Sakin ve çalışkansınız. Basit şeylerden mutlu oluyorsunuz. Parklarda bir piknik, cıvıldayan kuşlar ve sulandırılmış bir kahve.</h3></td>
<td><img src= "americano.png" style="width: 58%; height:45%;" /></td>
</tr>
<tr>
<td><img src= "ice.png" style="width: 42%; height:28%;"/></td>
	<td><h2 style="color: #800002;"><u>Buzlu Kahve</u></h2><h3>İddalı ve dobrasınız. Mevsimlere göre yaşayacak değilsiniz. Ayrıca pipetle içmek de hoşunuza gidiyor.</h3></td>
</tr>
<tr>
<td><h2 style="color: #800002;"><u>Frappuccino</u></h2><h3>Mutlu ve enerjiksiniz. Kahveyi sevdiğinizi savunuyorsunuz, ama aslında dondurmayı seviyorsunuz.</h3></td>
<td><img src= "frappucino.png" style="width: 50%; height:45%;" /></td>
</tr>
</table>
</div>
	<br />
	<br />
	<br/>
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

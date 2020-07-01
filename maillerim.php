<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Maillerim</title>
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
</style>
</head>

<body>
<h1 align="center" style="color: #683536;">~Mailler~</h1>
<table class="tablo">
  <tr>
	<th style="visibility: hidden;">İd</th>
    <th>Gönderici</th>
    <th>Konu</th>
    <th>Mail</th>

  </tr>
  <?php

include("baglan.php");
$sonuc=mysqli_query($baglan,"select * from mail"); 
mysqli_set_charset($baglan, "utf8");
 
while($satir=mysqli_fetch_array($sonuc))
{
echo '<tr>';
echo '<td style="visibility:hidden;">'.$satir['id'].'</td>';
echo '<td>'.$satir['gonderen'].'</td>';
echo '<td>'.$satir['konu'].'</td>';
echo '<td>'.$satir['mail'].'</td>';
echo '</tr>';
}
?>
	</table>
</body>
</html>
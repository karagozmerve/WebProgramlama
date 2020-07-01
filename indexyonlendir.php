<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Oturum Açıldıysa Sayfaya Yönlendir..</title>
</head>

<body>
<?php
session_start();
include('baglan.php');

$user_check=$_SESSION['mail'];

$sql = mysqli_query($baglan,"SELECT * FROM kullanici WHERE mail='$user_check'");

$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);

$login_user=$row['mail'];

if(!isset($user_check))
{
header("Location: giris.php");
}
?>
</body>
</html>
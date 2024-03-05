<?php
session_start();
if($_SESSION["tur"]=='Admin')
{
echo "

<html>
<head>
<title>Giriş</title>
	<link rel='stylesheet' type='text/css' href='hesap.css'>
    <meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
</head>
<body>

<ul>
	<li><a href='kullanicilistele.php'>Kullanıcı Listele</a></li>
	<li><a href='galeriekleme.php'>Galeri</a></li>
	<li><a href='cikis.php'>Çıkış</a></li>
</ul>
</body>
</html>";
}else
{
	header('location: giris.php');
}

?>
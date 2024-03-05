
<?php
session_start();
if($_SESSION["tur"]=='Sirket')
{
echo "

<html>
<head>
<title>Şirket</title>
	<link rel='stylesheet type='text/css' href='hesap.css'>
    <meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
</head>
<body bgcolor='#FEF4F3'>

<ul>
	<li><a href='mekanekleme.php'>Mekan Ekle</a></li>
	<li><a href='mekanlistele.php'>Mekan Listele</a></li>
	<li><a href='mesajlarim.php'>Mesajlarım</a></li>
	<li><a href='cikis.php'>Çıkış</a></li>
</ul>
</body>
</html>";
}
else
{
	header('location: giris.php');
}

?>
<html>
<head>
<style>
.guncellesill
{
    font-size: 13px;
    line-height: 0;
	border-radius:10px;
    transition-property: background-color,border-color,color,box-shadow,filter;
    transition-duration: .3s;
    border: 1px solid transparent;
    letter-spacing: 2px;
    text-transform: uppercase;
    white-space: normal;
    font-weight: 700;
    text-align: center;
    padding: 10px 10px 10px;
    color: #952323;
    box-shadow: inset 0 0 0 2px #952323;
    background-color: white;
	height:25px;
}
.guncellesill:hover
{
    color: #fff;
    background-color: red;
}
div.geri{
	margin:30px;
	padding:10px;
	width:75px;
	background:#fff;
	box-sizing: border-box;
	border:2px solid black;
	border-radius: 20px;
	font-size:20px;
}
a{
	color:#A42323;
}
a:hover{
	color:red;
}

</style>

</head>
</html>
<?php
echo"<body bgcolor='#FEF4F3'>";
echo"<div class='geri'><a href='admin.php'> GERİ</a></div>";

session_start();
if($_SESSION["tur"]=='Admin')
{
	$db = new PDO("mysql:host=localhost;dbname=organizasyon", 'root','');
	$listele= $db-> query("SELECT * FROM kullanici");
	echo "<center><table width='1300' >";
	echo "<tr style='color:white;' bgcolor='598DAF'><td>Ad Soyad</td><td>Kullanıcı Adı</td><td>E Posta</td><td>Şifre</td><td>Kullanıcı Türü</td><td>Kayıt Tarihi</td><td>Ban</td>";
	while ($row = $listele->fetch()) 
	{
		echo "<tr bgcolor='#A73121'>";
		echo"<td><font color='white'>".$row['adsoy']."</td>";
		echo"<td><font color='white'>".$row['k_ad']."</td>";
		echo"<td><font color='white'>".$row['k_eposta']."</td>";
	    echo"<td><font color='white'>".$row['sifre']."</td>";
		echo"<td><font color='white'>".$row['k_tur']."</td>";
		echo"<td><font color='white'>".$row['k_kayittarih']."</td>";
		echo"<td><font color='white'>".$row['k_yasak']."</td>";
		echo"</tr>";	
	}
	echo "<form method='post' action=''>";
	echo"<tr>";	
	echo"<td>Kullanıcı Adı Giriniz</td>";
	echo"<td align='center'><input type='text' name='k_ad'></td>";
	echo"<td align='center'><input type='submit' name='sil' value='Hesabı Sil' class='guncellesill'></td>";
	echo"<td align='center'><input type='submit' name='engel' value='engelle' class='guncellesill'></td>";
	echo"<td align='center'><input type='submit' name='engelkaldir' value='engel kaldır' class='guncellesill'></td>";
	echo"<td align='center'><input type='submit' name='yetki' value='Yetki Ver' class='guncellesill'></td>";
	echo"<td align='center'><input type='submit' name='yeto' value='Yetki Kaldır' class='guncellesill'></td>";

	echo"</tr>";	
	echo"</form>";	
	echo "</table></center>";
	//Kullanıcıyı Silme//
	if (isset($_POST['sil']))
			{
				$k_ad=$_POST["k_ad"];
				$sil = $db->exec("DELETE FROM kullanici WHERE k_ad='$k_ad'");
				if($sil)
				{
					echo "<b>Kayıt Silindi.</b>";
					header("Refresh: 0");
				}
				else
				{
				    echo "<center><b>LÜtfen Bilgileri Kontrol Ediniz</b>";
				}
			}
	//Kullanıcıyı Engelleme//
			if (isset($_POST['engel']))
			{
				$k_ad=$_POST["k_ad"];
				$engelle = $db->exec("UPDATE kullanici set k_yasak = 'yasakli' WHERE k_ad = '$k_ad'");
				if($engelle)
				{
					echo "<b>Kullanıcı Engellendi</b>";
					header("Refresh: 0");
				}
				else
				{
					echo "<center><b>LÜtfen Bilgileri Kontrol Ediniz</b>";
				}
			}	
	//Kullanıcının Engelini Kaldırma//
			if (isset($_POST['engelkaldir']))
			{
				$k_ad=$_POST["k_ad"];
				$engelkaldir = $db->exec("UPDATE kullanici set k_yasak = 'yasaksiz' WHERE k_ad = '$k_ad'");
				if($engelkaldir)
				{
					echo "<b>Engel Kalktı</b>";
					header("Refresh: 0");
				}
				else
				{
					echo "<center><b>LÜtfen Bilgileri Kontrol Ediniz</b>";
				}
			}	
	//Kullanıcıya Yetki Verme//
			if (isset($_POST['yetki']))
			{
				$k_ad=$_POST["k_ad"];
				$yetki = $db->exec("UPDATE kullanici set k_tur = 'Admin' WHERE k_ad = '$k_ad'");
				if($yetki)
				{
					echo "<b>Admin Yetkisi Verildi</b>";
					header("Refresh: 0");
				}
				else
				{
					echo "<center><b>LÜtfen Bilgileri Kontrol Ediniz</b>";
				}
			}
	//Kullanıcıdan Yetki Kaldırma//			
			if (isset($_POST['yeto']))
			{
				$k_ad=$_POST["k_ad"];
				$yeto = $db->exec("UPDATE kullanici set k_tur = 'Kullanici' WHERE k_ad = '$k_ad'");
				if($yeto)
				{
					echo "<b>Admin Yetkisi Kaldırıldı</b>";
					header("Refresh: 0");
				}
				else
				{
					echo "<center><b>LÜtfen Bilgileri Kontrol Ediniz</b>";
				}
			}	
}
	else
		{
	     header('location: giris.php');
		}
		?>
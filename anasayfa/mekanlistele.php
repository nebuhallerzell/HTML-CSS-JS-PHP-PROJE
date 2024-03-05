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
echo"<div class='geri'><a href='sirket.php'> GERİ</a></div>";

session_start();
if($_SESSION["tur"]=='Sirket')
{
	$db = new PDO("mysql:host=localhost;dbname=organizasyon", 'root','');
	$listele= $db-> query("SELECT * FROM mekanlar");
	echo "<center><table width='1000' >";
    echo "<tr align='center' style='color:white;' bgcolor='598DAF'><td>Ad</td><td>İl</td><td>Fiyat</td><td>Kişi Sayısı</td><td>Tip</td><td>Havuz</td><td>Alkol</td><td>Tür</td><td>Görsel</td><td></td></tr>";
	while ($row = $listele->fetch()) 
	{
		$m_id=$row['m_id'];
        if ($_SESSION["k_id"] == $row["m_organizasyon"]) {
		echo "<tr bgcolor='#A73121' align='center'>    ";
		echo"<td><font color='white'>".$row['m_ad']."</td>";
		echo"<td><font color='white'>".$row['m_il']."</td>";
	    echo"<td><font color='white'>".$row['m_fiyat']."</td>";
		echo"<td><font color='white'>".$row['m_kisisayisi']."</td>";
		echo"<td><font color='white'>".$row['m_tip']."</td>";
		echo"<td><font color='white'>".$row['m_havuz']."</td>";
        echo"<td><font color='white'>".$row['m_alkol']."</td>";
        echo"<td><font color='white'>".$row['m_tur']."</td>";
        echo"<td><img src='image/".$row['m_fotograf']."' height='90'></td>";
        echo "<form method='post' action=''>";
		echo"<td align='center'><input type='hidden' name='m_id' value='$m_id'>
		<input type='submit' name='sil' value='Mekanı Sil' class='guncellesill'><br><br>";
		echo"</form><a href='mekanguncelleme.php?m_id=$m_id' style='color:white'> Güncelle</a></td>";
		echo"</tr>";	
        }
	}
echo "</table></center>";	
		if (isset($_POST['sil']))
			{
				$m_id=$_POST["m_id"];
				$sil = $db->exec("DELETE FROM mekanlar WHERE m_id='$m_id'");
				if($sil)
				{
					echo "<b>Kayıt Silindi.</b>";
					header("Refresh: 0");
				}
				else
				{
				    echo "<center><b>Silme işlemi Başarısız Olmuştur.</b>";
				}
			}
		if (isset($_POST['guncelle']))
			{
				$m_id=$_POST["m_id"];
				$guncelle = $db->query("SELECT `m_ad`, `m_il`, `m_fiyat`, `m_kisisayisi`, `m_tip`, `m_havuz`, `m_alkol`, `m_fotograf`, `m_tur`, `m_organizasyon` FROM `mekanlar` WHERE `m_id`=$m_id");
				if($guncelle)
				{
	                header('location: mekanguncelleme.php');
				}
				else
				{
				    echo "<center><b>Mekan Güncellenemedi</b>";
				}
			}
}
else
		{
	     header('location: giris.php');
		}

		?>
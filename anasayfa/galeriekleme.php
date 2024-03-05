<html lang="en">
<head>
    <title>Profilim</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="profil.css">
	<style>
div.ekle{
	margin-top:100px;
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
<div class='geri'><a href='admin.php'> GERİ</a></div>

<body bgcolor="#FEF4F3">

<div class="ekle">
<center><table width="250px" height="250px" bgcolor="white" style="border-radius:50px; border-style:dashed; text-align:center;">
	<th colspan="2"><h1>GALERİ</h1></th>
	<form method="post" action="" enctype="multipart/form-data">
			<tr height="50px">
			<td><h3>Fotoğraf</h3></td>
			<td><input type="file" name="dosya"></td>
			</tr>
			
			<tr height="50px">
			<td><h3>TÜR</h3></td>
			<td><select name="tur">
    <option value="0">------</option>
    <option value="Düğün">Düğün</option>
    <option value="Doğum Günü">Doğum Günü</option>
    <option value="Kına">Kına</option>
    <option value="Bekarlığa Veda">Bekarlığa Veda</option>
    <option value="Baby Shower">Baby Shower</option>
    <option value="After Party">After Party</option>
    <option value="Mezuniyet">Mezuniyet</option>
    <option value="Nişan">Nişan</option>
    <option value="Sünnet">Sünnet</option></select>
			</td>
			</tr>
			
			<tr height="50px">
			<td colspan="2" align="center"><input type="submit" name="ekle" value="Ekle" class="guncellesil">
			<?php
			session_start();
			if($_SESSION["tur"]=='Admin')
			{
				if (isset($_POST['ekle'])) 
				{
					$gal_tur = $_POST['tur'];
				    $gal_img = $_FILES['dosya']['name'];
	                $g_gecfotograf = $_FILES['dosya']['tmp_name'];
					$folder="galeri/".$gal_img;

					$x = new PDO("mysql:host=localhost;dbname=organizasyon", 'root', '');
					$mkayit = $x->exec("INSERT INTO galeri (gal_tur,gal_img) VALUES ('$gal_tur','$gal_img')");
					if(move_uploaded_file($g_gecfotograf,$folder))
						echo "<center>EKLEME BAŞARILI</center>";
					else
						echo "<center>EKLEME BAŞARISIZ</center>";
				}
			}
				else
				{
					header('location: giris.php');
				}
			?>
			</td>
			</tr>
			</form>
	</table>
</div> 
</body>
</html>

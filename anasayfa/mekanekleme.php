<?php
session_start();
if($_SESSION["tur"] != "Sirket")
{
	header('location:giris.php');
}
?>
<html lang="en">
<head>
    <title>Profilim</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="profil.css">
		<style>

div.geri{
	margin:30px;
	padding:10px;
	width:100px;
	background:#fff;
	box-sizing: border-box;
	border:2px solid black;
	border-radius: 20px;
	font-size:30px;
}
a{
	color:#A42323;
}
a:hover{
	color:red;
}


	</style>
</head>

<body bgcolor="#FEF4F3">
<div class="geri"><a href="sirket.php"> GERİ</a></div>
<div>
<center><table width="500px" height="350px" bgcolor="white" style="border-radius:50px; border-style:dashed; text-align:center;">
	<th colspan="2"><h1>Mekan Ekle</h1></th>
	<form method="post" action="" enctype="multipart/form-data">
		
		 	<tr height="50px">
			<td><h3>Mekan Adı</h3></td>
		    <td><input type="text" name="mekanad"></td>
			</tr>
			
			<tr height="50px">
			<td><h3>Bulunduğu İl</h3></h3></td>
			<td><select name="sehir">
    <option value="0">------</option>
    <option value="Adana">Adana</option>
    <option value="Adıyaman">Adıyaman</option>
    <option value="Afyonkarahisar">Afyonkarahisar</option>
    <option value="Ağrı">Ağrı</option>
    <option value="Amasya">Amasya</option>
    <option value="Ankara">Ankara</option>
    <option value="Antalya">Antalya</option>
    <option value="Artvin">Artvin</option>
    <option value="Aydın">Aydın</option>
    <option value="Balıkesir">Balıkesir</option>
    <option value="Bilecik">Bilecik</option>
    <option value="Bingöl">Bingöl</option>
    <option value="Bitlis">Bitlis</option>
    <option value="Bolu">Bolu</option>
    <option value="Burdur">Burdur</option>
    <option value="Bursa">Bursa</option>
    <option value="Çanakkale">Çanakkale</option>
    <option value="Çankırı">Çankırı</option>
    <option value="Çorum">Çorum</option>
    <option value="Denizli">Denizli</option>
    <option value="Diyarbakır">Diyarbakır</option>
    <option value="Edirne">Edirne</option>
    <option value="Elazığ">Elazığ</option>
    <option value="Erzincan">Erzincan</option>
    <option value="Erzurum">Erzurum</option>
    <option value="Eskişehir">Eskişehir</option>
    <option value="Gaziantep">Gaziantep</option>
    <option value="Giresun">Giresun</option>
    <option value="Gümüşhane">Gümüşhane</option>
    <option value="Hakkâri">Hakkâri</option>
    <option value="Hatay">Hatay</option>
    <option value="Isparta">Isparta</option>
    <option value="Mersin">Mersin</option>
    <option value="İstanbul">İstanbul</option>
    <option value="İzmir">İzmir</option>
    <option value="Kars">Kars</option>
    <option value="Kastamonu">Kastamonu</option>
    <option value="Kayseri">Kayseri</option>
    <option value="Kırklareli">Kırklareli</option>
    <option value="Kırşehir">Kırşehir</option>
    <option value="Kocaeli">Kocaeli</option>
    <option value="Konya">Konya</option>
    <option value="Kütahya">Kütahya</option>
    <option value="Malatya">Malatya</option>
    <option value="Manisa">Manisa</option>
    <option value="Kahramanmaraş">Kahramanmaraş</option>
    <option value="Mardin">Mardin</option>
    <option value="Muğla">Muğla</option>
    <option value="Muş">Muş</option>
    <option value="Nevşehir">Nevşehir</option>
    <option value="Niğde">Niğde</option>
    <option value="Ordu">Ordu</option>
    <option value="Rize">Rize</option>
    <option value="Sakarya">Sakarya</option>
    <option value="Samsun">Samsun</option>
    <option value="Siirt">Siirt</option>
    <option value="Sinop">Sinop</option>
    <option value="Sivas">Sivas</option>
    <option value="Tekirdağ">Tekirdağ</option>
    <option value="Tokat">Tokat</option>
    <option value="Trabzon">Trabzon</option>
    <option value="Tunceli">Tunceli</option>
    <option value="Şanlıurfa">Şanlıurfa</option>
    <option value="Uşak">Uşak</option>
    <option value="Van">Van</option>
    <option value="yozgat">Yozgat</option>
    <option value="Zonguldak">Zonguldak</option>
    <option value="Aksaray">Aksaray</option>
    <option value="Bayburt">Bayburt</option>
    <option value="Karaman">Karaman</option>
    <option value="Kırıkkale">Kırıkkale</option>
    <option value="Batman">Batman</option>
    <option value="Şırnak">Şırnak</option>
    <option value="Bartın">Bartın</option>
    <option value="Ardahan">Ardahan</option>
    <option value="Iğdır">Iğdır</option>
    <option value="Yalova">Yalova</option>
    <option value="Karabük">Karabük</option>
    <option value="Kilis">Kilis</option>
    <option value="Osmaniye">Osmaniye</option>
    <option value="Düzce">Düzce</option></select>
			</td>
			</tr>
			
			 <tr height="50px">
                   <td><h3>Fiyat:</h3></td>
                   <td><select  name="fiyat" class="form__input">
                          <option value="0">------</option>
						  <option value="100">100</option>
                          <option value="200">200</option>
                          <option value="500">500</option>
                          <option value="1000TL Üstü">1000</option>
						  </select>
                   </tr>
				   
				    <tr height="50px">
					  <td><h3>Kişi Sayısı:</h3></td>
                      <td><select  name="kisis" class="form__input">
                          <option value="0">------</option>
						  <option value="100 ">100</option>
                          <option value="200">200</option>
                          <option value="500">500</option>
                          <option value="1000">1000</option>
						  </select>
                   </tr>
				   
				    <tr height="50px">
                   <td><h3>Tip</h3></td>
                      <td><select  name="tip" class="form__input">
                          <option value="0">------</option>
						  <option value="Kapalı">Kapalı</option>
                          <option value="Açık">Acık</option>
						  </select>
                   </tr>
				 
				   <tr>
                   <td><h3>Alkol</h3></td>
                       <td><select  name="alkol" class="form__input">
                          <option value="0">------</option>
						  <option value="Alkollü">Alkollü</option>
                          <option value="Alkolsüz">Alkolsüz</option>
						  </select>
                   </tr>
				   
				    <tr height="50px">
                   <td><h3>Havuz:</h3></td>
                       <td><select  name="havuz" class="form__input">
                          <option value="0">------</option>
						  <option value="Havuzlu">Havuzlu</option>
                          <option value="Havuzsuz">Havuzsuz</option>
						  </select>
                   </tr>
				   
			
			<tr height="50px">
			<td><h3>Fotoğraf</h3></td>
			<td><input type="file" name="dosya"></td>
			</tr>
			
			<tr height="50px">
			<td><h3>Tür</h3></td>
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
				if (isset($_POST['ekle'])) 
				{
					$x = new PDO("mysql:host=localhost;dbname=organizasyon", 'root', '');
					$m_ad = $_POST['mekanad'];
					$m_il = $_POST['sehir'];
					$m_kisisayisi = $_POST['kisis'];
					$m_fiyat = $_POST['fiyat'];
					$m_alkol = $_POST['alkol'];
					$m_havuz = $_POST['havuz'];
					$m_tip = $_POST['tip'];
					$m_tur = $_POST['tur'];
				    $m_fotograf = $_FILES['dosya']['name'];
	                $m_gecfotograf = $_FILES['dosya']['tmp_name'];
					$folder="image/".$m_fotograf;
					$k_id = $_SESSION["k_id"];
					$mkayit = $x->exec("INSERT INTO mekanlar (m_ad,m_il,m_kisisayisi,m_fiyat,m_alkol,m_havuz,m_tip,m_fotograf,m_tur,m_organizasyon) VALUES ('$m_ad','$m_il','$m_kisisayisi','$m_fiyat','$m_alkol','$m_havuz','$m_tip','$m_fotograf','$m_tur',$k_id)");
                    
					
					if(move_uploaded_file($m_gecfotograf,$folder))
						echo "<center>EKLEME BAŞARILI</center>";
					else
						echo "<center>EKLEME BAŞARISIZ</center>";
				}
			?>
			</td>
			</tr>
			</form>
	</table>
</div> 
</body>
</html>

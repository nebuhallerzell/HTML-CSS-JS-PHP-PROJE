<?php
session_start();
if($_SESSION["tur"] != "Sirket")
{
	header('location:giris.php');
}
?>
<html lang="tr">
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
	<th colspan="2"><h1>Mekan Güncelle</h1></th>
	<form method="post" action="" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $mevcut_mekan_id; ?>">
        
		
		 	<tr height="50px">
			<td><h3>Mekan Adı</h3></td>
		    <td><input type="text" name="mekanad"></td>
			</tr>
			
			<tr height="50px">
			<td><h3>Bulunduğu İl</h3></h3></td>
			<td><select name="sehir">
    <option value="0">------</option>
    <option value="adana">Adana</option>
    <option value="adıyaman">Adıyaman</option>
    <option value="afyonkarahisar">Afyonkarahisar</option>
    <option value="agri">Ağrı</option>
    <option value="amasya">Amasya</option>
    <option value="ankara">Ankara</option>
    <option value="antalya">Antalya</option>
    <option value="artvin">Artvin</option>
    <option value="aydin">Aydın</option>
    <option value="balikesir">Balıkesir</option>
    <option value="bilecik">Bilecik</option>
    <option value="bingol">Bingöl</option>
    <option value="bitlis">Bitlis</option>
    <option value="bolu">Bolu</option>
    <option value="burdur">Burdur</option>
    <option value="bursa">Bursa</option>
    <option value="canakkale">Çanakkale</option>
    <option value="cankiri">Çankırı</option>
    <option value="corum">Çorum</option>
    <option value="denizli">Denizli</option>
    <option value="diyarbakir">Diyarbakır</option>
    <option value="edirne">Edirne</option>
    <option value="elazig">Elazığ</option>
    <option value="erzincan">Erzincan</option>
    <option value="erzurum">Erzurum</option>
    <option value="eskisehir">Eskişehir</option>
    <option value="gaziantep">Gaziantep</option>
    <option value="giresun">Giresun</option>
    <option value="gumushane">Gümüşhane</option>
    <option value="hakkari">Hakkâri</option>
    <option value="hatay">Hatay</option>
    <option value="isparta">Isparta</option>
    <option value="mersin">Mersin</option>
    <option value="istanbul">İstanbul</option>
    <option value="izmir">İzmir</option>
    <option value="kars">Kars</option>
    <option value="kastamonu">Kastamonu</option>
    <option value="kayseri">Kayseri</option>
    <option value="kirklareli">Kırklareli</option>
    <option value="kirsehir">Kırşehir</option>
    <option value="kocaeli">Kocaeli</option>
    <option value="konya">Konya</option>
    <option value="kutahya">Kütahya</option>
    <option value="malatya">Malatya</option>
    <option value="manisa">Manisa</option>
    <option value="kahramanmaras">Kahramanmaraş</option>
    <option value="mardin">Mardin</option>
    <option value="mugla">Muğla</option>
    <option value="mus">Muş</option>
    <option value="nevsehir">Nevşehir</option>
    <option value="nigde">Niğde</option>
    <option value="ordu">Ordu</option>
    <option value="rize">Rize</option>
    <option value="sakarya">Sakarya</option>
    <option value="samsun">Samsun</option>
    <option value="siir">Siirt</option>
    <option value="sinop">Sinop</option>
    <option value="sivas">Sivas</option>
    <option value="tekirdag">Tekirdağ</option>
    <option value="tokat">Tokat</option>
    <option value="trabzon">Trabzon</option>
    <option value="tunceli">Tunceli</option>
    <option value="sanliurfa">Şanlıurfa</option>
    <option value="usak">Uşak</option>
    <option value="van">Van</option>
    <option value="yozgat">Yozgat</option>
    <option value="zonguldak">Zonguldak</option>
    <option value="aksaray">Aksaray</option>
    <option value="bayburt">Bayburt</option>
    <option value="karaman">Karaman</option>
    <option value="kirikkale">Kırıkkale</option>
    <option value="batman">Batman</option>
    <option value="sirnak">Şırnak</option>
    <option value="bartin">Bartın</option>
    <option value="ardahan">Ardahan</option>
    <option value="igdir">Iğdır</option>
    <option value="yalova">Yalova</option>
    <option value="karabuk">Karabük</option>
    <option value="kilis">Kilis</option>
    <option value="osmaniye">Osmaniye</option>
    <option value="duzce">Düzce</option></select>
			</td>
			</tr>
			
			 <tr height="50px">
                   <td><h3>Fiyat:</h3></td>
                   <td><select  name="fiyat" class="form__input">
                          <option value="0">------</option>
						  <option value="100TL Altı">100TL Altı</option>
                          <option value="200_400">200-400</option>
                          <option value="500_900">500-900</option>
                          <option value="1000TL Üstü">1000TL Üstü</option>
						  </select>
                   </tr>
				   
				    <tr height="50px">
					  <td><h3>Kişi Sayısı:</h3></td>
                      <td><select  name="kisis" class="form__input">
                          <option value="0">------</option>
						  <option value="100 Altı">100 Altı</option>
                          <option value="200_400">200-400</option>
                          <option value="500_900">500-900</option>
                          <option value="1000 Üstü">1000 Üstü</option>
						  </select>
                   </tr>
				   
				    <tr height="50px">
                   <td><h3>Tip</h3></td>
                      <td><select  name="tip" class="form__input">
                          <option value="0">------</option>
						  <option value="kapali">Kapalı</option>
                          <option value="acik">Acık</option>
						  </select>
                   </tr>
				 
				   <tr>
                   <td><h3>Alkol</h3></td>
                       <td><select  name="alkol" class="form__input">
                          <option value="0">------</option>
						  <option value="alkollu">Alkollü</option>
                          <option value="alkolsuz">Alkolsüz</option>
						  </select>
                   </tr>
				   
				    <tr height="50px">
                   <td><h3>Havuz:</h3></td>
                       <td><select  name="havuz" class="form__input">
                          <option value="0">------</option>
						  <option value="havuzlu">Havuzlu</option>
                          <option value="havuzsuz">Havuzsuz</option>
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
			<td colspan="2" align="center"><input type="submit" name="guncelle" value="Güncelle" class="guncellesil">
			<?php
			if (isset($_POST['guncelle'])) {
                    $m_id = $_GET['m_id'];
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
                
                    $folder = "image/" . $m_fotograf;
                        $db = new PDO("mysql:host=localhost;dbname=organizasyon", 'root', '');
                    
                       
                        $sorgu = $db->prepare("SELECT * FROM mekanlar WHERE m_id = ?");
                        $sorgu->execute([$m_id]);
                        $mevcutMekan = $sorgu->fetch(PDO::FETCH_ASSOC);
                    
                       
                        $guncelle = $db->prepare("UPDATE mekanlar SET 
                            m_ad = COALESCE(?, m_ad), 
                            m_il = COALESCE(?, m_il), 
                            m_fiyat = COALESCE(?, m_fiyat), 
                            m_kisisayisi = COALESCE(?, m_kisisayisi), 
                            m_tip = COALESCE(?, m_tip), 
                            m_havuz = COALESCE(?, m_havuz), 
                            m_alkol = COALESCE(?, m_alkol), 
                            m_fotograf = COALESCE(?, m_fotograf), 
                            m_tur = COALESCE(?, m_tur)
                            WHERE m_id = ?");
                    
                        
                        $guncelle->execute([
                            $m_ad ?: $mevcutMekan['m_ad'],
                            $m_il ?: $mevcutMekan['m_il'],
                            $m_fiyat ?: $mevcutMekan['m_fiyat'],
                            $m_kisisayisi ?: $mevcutMekan['m_kisisayisi'],
                            $m_tip ?: $mevcutMekan['m_tip'],
                            $m_havuz ?: $mevcutMekan['m_havuz'],
                            $m_alkol ?: $mevcutMekan['m_alkol'],
                            $m_fotograf ?: $mevcutMekan['m_fotograf'],
                            $m_tur ?: $mevcutMekan['m_tur'],
                            $m_id
                        ]);
                    
                        if ($guncelle) {
                            echo "<center>GÜNCELLEME BAŞARILI</center>";
                        } else {
                            echo "<center>GÜNCELLEME BAŞARISIZ</center>";
                        }
                    } 
			?>
			</td>
			</tr>
			</form>
	</table>
</div> 
</body>
</html>

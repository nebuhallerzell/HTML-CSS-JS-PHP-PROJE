<?php
session_start();

if($_SESSION["tur"] != "Kullanici")
{
	header('location:giris.php');
}
?>
<html>
<head>
	<title>Mekanlar</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="acilirmenu.css">
	<link rel="stylesheet" href="mekanlar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<style>
div.gallery {
  border: 1px solid black;
  width: 250px;
  height: 253px;
  margin:20px;	
  float:left;
  display: flex;
  flex-direction: column;
  background-color:#FDE5EC;
  
  }

div.gallery:hover {
  border: 2px solid #A42323;
}

div.gallery img {
  width: 247px;
  height: 150px;;
}

div.desc {
  padding: 5px;
  font-size:10px;
  color:#A42323;
  background-color:#FDE5EC;
}


section.mekanlar{
		flex-direction: column;
		float:left;
}
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
    background-color: #A42323;
	border-color: white;
}
</style>
</head>
<body bgcolor="#FEF4F3">
<header> 
        <a href="index.php" class="logo"><img src="fotograf/logo.jpeg"> </a>

        <ul class="navmenu">
            <li><a href="index.php">ANA SAYFA</a></li>
            <li><a href="galeri.php">GALERİ</a></li>
            <li><a href="mekanlar.php">MEKANLAR</a></li>
			<li><a href="iletisim.php">İLETİŞİM</a></li>
        </ul>
        
        <div class="nav-icon">
            <a href="profil.php"><i class='bx bx-user'></i></a>
            <a href="favorilerim.php"><i class='bx bx-heart'></i></a>
			<a href="mesajlarim.php"><i class='bx bx-message-rounded-dots'></i></a>

            <!-- açılır menü butonu -->
            <div class="menu-btn">
                <i class="bx bx-menu"></i>
              </div>
            <!--  -->
        </div>
           
           <!-- açılır menü kodları -->
              <div class="side-bar">
                <div class="close-btn">
                    <i class="fas fa-times"></i>
                </div>
                <div class="menu">
                  <div class="item"><a href="cikis.php"><i class="fas fa-desktop"></i>Çıkış</a></div>
                  <div class="item"><a href="iletisim.php"><i class="fas fa-th"></i>İletişim</a></div>
				  <div class="item"><a href="mesajlarim.php"><i class='fab fa-facebook-messenger'></i>Mesajlarım</a></div>
                </div>
              </div>
            <!--  -->   
        </div>
    </header>
	<form method="post" action="">
	  <section class="mekanlar">
            <div >
			<table bgcolor="white" width="300px" height="500px" >
               <tr>
                   <tr height="50px">
			<td><h3>Bulunduğu İl</h3></h3></td>
			<td><select name="il">
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
                      <td><select  name="kisi" class="form__input">
                          <option value="0">------</option>
						  <option value="100 ">100</option>
                          <option value="200">200</option>
                          <option value="500">500</option>
                          <option value="1000">1000</option>
						  </select>
                   </tr>
				   
				    <tr>
                   <td><h4>Tip</h4></td>
                      <td><select  name="tip" class="form__input">
                          <option value="0">------</option>
						  <option value="kapali">Kapalı</option>
                          <option value="acik">Acık</option>
						  </select>
                   </tr>
				 
				   <tr>
                   <td><h4>Alkol</h4></td>
                       <td><select  name="alkol" class="form__input">
                          <option value="0">------</option>
						  <option value="alkollu">Alkollü</option>
                          <option value="alkolsuz">Alkolsüz</option>
						  </select>
                   </tr>
				   
				    <tr>
                   <td><h4>Havuz:</h4></td>
                       <td><select  name="havuz" class="form__input">
                          <option value="0">------</option>
						  <option value="havuzlu">Havuzlu</option>
                          <option value="havuzsuz">Havuzsuz</option>
						  </select>
                   </tr>
				   
				    <tr>
                   <td><h4>Türü:</h4></td>
                   <td><select name="turr" class="form__input">
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
				   
				   <tr>
				   <td colspan="2">
                   <center><input type="submit" value="Filtrele" name="filtre" class="guncellesill">
				   </td>
				   </tr>
			   </table>
               </div>
			       </section>
		</form>
<?php
	$list = new PDO("mysql:host=localhost;dbname=organizasyon", 'root','');
    $listele=$list->query("SELECT * FROM mekanlar", PDO:: FETCH_ASSOC);
    $kullanici_ad=$_SESSION["k_ad"];
	echo "<center><div class='responsive'>";
	while ($row = $listele->fetch()) {
		$m_id=$row['m_id'];
		echo "<div class='gallery'>";
		$dosyayolu="image/".$row['m_fotograf'];
	    echo "<img src='$dosyayolu'>";
		echo "<div class='desc'>".$row['m_ad']."<br>".$row['m_il']."<br>".$row['m_fiyat']."<br>".$row['m_kisisayisi']."<br>".$row['m_tip']."<br>".$row['m_havuz']."<br>".$row['m_alkol']."</div>";		
		echo "<form action='' method='post'><input type='hidden' name='m_id' value='$m_id'>
    <a href='mesajgonder.php?gonderen=$kullanici_ad&mid=$m_id'>Mesaj Gönder</a>
		<input type='submit' name='favorile' value='Favorilerime ekle' class='guncellesill'></form></div>" ;	
	}
	echo "</div>";
	if(isset($_POST['favorile']))
	{
		$x=$_SESSION["k_id"];
		$y=$_POST['m_id'];
		$favoriekle=$list->exec("INSERT INTO `kullanici_mekan`(`k_id`, `m_id`) VALUES ('$x','$y')");
	}
?>
	
			 <!-- açılır menü js kodları -->
    <script type="text/javascript">
        $(document).ready(function(){
          $('.sub-btn').click(function(){
            $(this).next('.sub-menu').slideToggle();
            $(this).find('.dropdown').toggleClass('rotate');
          });
     
          $('.menu-btn').click(function(){
            $('.side-bar').addClass('active');
            $('.menu-btn').css("visibility", "hidden");
          });
     
          $('.close-btn').click(function(){
            $('.side-bar').removeClass('active');
            $('.menu-btn').css("visibility", "visible");
          });
        });
     </script>
</body>
</html>
<?php

 if(isset($_POST['filtre']))
	{
				$m_il = $_POST['il'];
				$m_kisisayisi = $_POST['kisi'];
				$m_fiyat = $_POST['fiyat'];
				$m_alkol = $_POST['alkol'];
				$m_havuz = $_POST['havuz'];
				$m_tip = $_POST['tip'];
				$m_tur = $_POST['turr'];
				$query = "";
			if($_POST['havuz']!=0){ $query .= " and (m_havuz = '$m_havuz')"; }
			if($_POST['kisi']!=0){ $query .= " and (m_kisisayisi = '$m_kisisayisi')"; }
			if($_POST['fiyat']!=0){ $query .= " and (m_fiyat = '$m_fiyat')"; }
			if($_POST['alkol']!=0){ $query .= " and (m_alkol = '$m_alkol')"; }
			if($_POST['tip']!=0){ $query .= " and (m_tip = '$m_tip')"; }
			if($_POST['turr']!=0){ $query .= " and (m_tur = '$m_tur')"; }
			
			$list = new PDO("mysql:host=localhost;dbname=organizasyon", 'root','');
			$f=$list-> query("SELECT * FROM mekanlar WHERE m_il='$m_il' $query ");
			echo "<center><table width='1000' border='1px' border-color='#A42323'>";
			echo "<th colspan='10'><h2>FİLTRELENEN MEKANLAR</h2></th>";
			echo "<tr  align='center'style='color:white;' bgcolor='#A42323'><td>Ad</td><td>İl</td><td>Fiyat</td><td>Kişi Sayısı</td><td>Tip</td><td>Havuz</td><td>Alkol</td><td>Tür</td><td>Görsel</td><td></td></tr>";
			while ($row = $f->fetch()) 
			{
				echo "<tr bgcolor='#FDE5EC'  align='center'>    ";
				echo"<td><font color='#A42323'>".$row['m_ad']."</td>";
				echo"<td><font color='#A42323'>".$row['m_il']."</td>";
				echo"<td><font color='#A42323'>".$row['m_fiyat']."</td>";
				echo"<td><font color='#A42323'>".$row['m_kisisayisi']."</td>";
				echo"<td><font color='#A42323'>".$row['m_tip']."</td>";
				echo"<td><font color='#A42323'>".$row['m_havuz']."</td>";
				echo"<td><font color='#A42323'>".$row['m_alkol']."</td>";
				echo"<td><font color='#A42323'>".$row['m_tur']."</td>";
				echo"<td><img src='image/".$row['m_fotograf']."' height='100' width='150'></td>";
				echo "<td><form action='' method='post'><input type='hidden' name='m_id' value='$m_id'>
				<input type='submit' name='favorile' value='Favorile' class='guncellesill'><br>
				<input type='submit' name='goruntule' value='Görüntüle' class='guncellesill'></form></td>";	
				
				echo"</tr>";	
			}	
		echo "</table></center>";
	}
?>
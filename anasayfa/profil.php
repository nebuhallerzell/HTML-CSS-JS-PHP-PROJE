<html lang="en">
<head>
    <title>Profilim</title>
 <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="acilirmenu.css">
	<link rel="stylesheet" type="text/css" href="profil.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
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
<div class="profil">
<center><table width="500px" height="350px">
	<th colspan="2"><h1>PROFİLİM</h1></th>
	<form method="post" action="">
		
		 	<tr><td rowspan="2" align="center"><img src="fotograf/pp.png" class="foto"></td>
		    <td>
			<label>Adınız-Soyadınız</label><br>
			<input type="text" name="ads" class="girdi"></td>
			
			<tr>
			<td>
			<label>Kullanıcı Adı</label><br>
			<input type="text" name="kad" class="girdi">
			</td>
			</tr>
			
			<tr>
			<td align="center">Kendi Kullanıcı Adınızı Yazarak Şifrenizi ve Ad-Soyadı Kısmını Güncelleyebilirsiniz</td>
			<td>
			<label>Yeni Şifre</label><br>
			<input type="password" name="sifre" class="girdi">
			</td>
			</tr>
			
			<tr>
			<td align="center"">
			<?php
			session_start();
			if($_SESSION["tur"]=='Kullanici' && $_SESSION["login"]==100){
			$db = new PDO("mysql:host=localhost;dbname=organizasyon", 'root',''); 
			if (isset($_POST['sil']))
			{
				$kuad=$_POST["kad"];
				$sil = $db->exec("DELETE FROM kullanici WHERE k_ad='$kuad'");
				if($sil)
				{
					echo "<b>Kayıt Silindi.</b>";
				header('location: cikis.php');
				}
				else
				{
				    echo "<b>Silme işlemi Başarısız Olmuştur.</b>";
				}
			}
			
			if (isset($_POST['guncelle']))
			{
				$kullanici=$_POST["kad"];
				$adsoyad=$_POST["ads"];
				$parola=$_POST["sifre"];
				$guncelle = $db->exec("UPDATE  kullanici SET adsoy='$adsoyad',sifre='$parola' WHERE k_ad='$kullanici'");
				if($guncelle)
				{
					echo '<b>Güncelleme başarılı.</b>';
				}
				else
				{
					echo '<b>Güncelleme Başarısız Olmuştur.</b>';
				}
			}
			}
			else
			{
				header('location: giris.php');
			}
			?>
			
			</td>
			<td align="right" colspan="2"><input type="submit" name="guncelle" value="Güncelle" class="guncellesil"><br></td>
			</tr>
			
			<tr>
			<td align="right" colspan="2"><input type="submit" name="sil" value="Hesabı Sil" class="guncellesil">
			</td>
			</tr>	
			
			</form>
	</table>
</div> 
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

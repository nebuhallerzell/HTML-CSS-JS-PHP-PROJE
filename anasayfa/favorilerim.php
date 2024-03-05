<html lang="tr">
<head>
	<title>Favorilerim</title>
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
  margin:10px;
  float:left;
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
<?php
session_start();
if($_SESSION["tur"]=='Kullanici' && $_SESSION["login"]==100)
{
		$x=$_SESSION["k_id"];
		$list = new PDO('mysql:host=localhost;dbname=organizasyon', 'root','');
		$favorimekanlar=$list->query("SELECT `m_id` FROM `kullanici_mekan` WHERE `k_id`='$x'");
		echo "<center><div class='responsive'>";
	    while ($row = $favorimekanlar->fetch()) {
		 $m_id=$row['m_id']; 
		 echo "<div class='gallery'>";
		 $favoriler=$list->query("SELECT * FROM `mekanlar` WHERE `m_id`='$m_id'");
		 while ($f = $favoriler->fetch()) {
			 $dosyayolu="image/".$f['m_fotograf'];
			echo "<img src='$dosyayolu'>";
		echo "<div class='desc'>".$f['m_ad']."<br>".$f['m_il']."<br>".$f['m_fiyat']."<br>".$f['m_tip']."<br>".$f['m_havuz']."<br>".$f['m_alkol']."</div></div>";			 
		 }
	   }
	echo "</div>";
	}	
else
{
	header('location: giris.php');
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

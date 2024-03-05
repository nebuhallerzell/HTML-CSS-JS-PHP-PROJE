<?php
session_start();
if($_SESSION["tur"]=='Kullanici' && $_SESSION["login"]==100) 
{}
else
{
	header('location: giris.php');
}
?>
<html>
<head>
	<title>Galeri</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="acilirmenu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
<style>
div.gallery {
  border: 2px solid black;
  width: 300px;
  height: 400px;
  float:left;
  margin:30px;
  }

div.gallery:hover {
  border: 3px solid #A42323;
}

div.gallery img {
  width: 100%;
  height: 85%;
}

div.desc {
  padding: 10px;
  text-align: center;
  font-size:30px;
  color:#A42323;
  background-color:white;
}

* {
  box-sizing: border-box;
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
	$x = new PDO("mysql:host=localhost;dbname=organizasyon", 'root', '');
    $listele=$x->query("SELECT * FROM galeri", PDO:: FETCH_ASSOC);
	echo "<center><div class='responsive'>";
	
	 if($listele->rowCount())
	{
		while ($row = $listele->fetch()) 
			{
			$dosyayolu="galeri/".$row['gal_img'];
			echo "<div class='gallery'>";
			echo "<img src='$dosyayolu'>";
			echo "<div class='desc'>".$row['gal_tur']."</div></div>";		
		}
	}
	echo "</div>";	
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
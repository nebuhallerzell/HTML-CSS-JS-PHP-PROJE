<?php
session_start();
if($_SESSION["tur"]=='Kullanici' && $_SESSION["login"]==100) 
{}
else
{
	header('location: anasayfa.html');
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Event</title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="acilirmenu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:ital,wght@1,100&family=Jost:wght@200&family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>
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
    <section class="main-home">
        <div class="main-text">
            <h5>Organizasyon</h5>
            <h1>Unutulmaz Anlar<br>Tasarlıyoruz</h1>
            <p>Mutluluğunuzu paylaşıyoruz...</p>

            <a href="mekanlar.php" class="main-btn">Şimdi Bak <i class='bx bx-right-arrow-alt'></a></i>

        </div>

        <div class="down-arrow">
            <a href="#trending" class="down"><i class='bx bx-down-arrow-alt'></i></a>
        </div>

    </section>

    <section class="trend-product" id="trend" >
        <center><div class="center-text">
            <h2 id=trending>EN ÇOK<span>  SEVİLENLER</span></h2>
        </div>

        <div class="Products">
            <div class="row">
                <img src="fotograf/org1.jpg" width="100%"  alt="">
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                <div class="ratting">
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <div class="price">
                    <h4>Doğum Günü</h4>
                    <p>$99 - $129</p>
                </div>
            </div>

            <div class="row">
                <img src="fotograf/org2.jpg" width="100%" alt="">
                <div class="product-text">
                    <h5>New</h5>
                </div>
                <div class="ratting">
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <div class="price">
                    <h4>Düğün</h4>
                    <p>$99 - $129</p>
                </div>
            </div>

            <div class="row">
                <img src="fotograf/org3.jpg" width="100%"  alt="">
                <div class="ratting">
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <div class="price">
                    <h4>After Party</h4>
                    <p>$99 - $129</p>
                </div>
            </div>

            <div class="row">
                <img src="fotograf/org4.jpg" width="100%" alt="">
                <div class="product-text">
                    <h5>Hot</h5>
                </div>
                <div class="ratting">
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <div class="price">
                    <h4>Nişan</h4>
                    <p>$99 - $129</p>
                </div>
            </div>

            <div class="row">
                <img src="fotograf/org5.jpg" width="100%" alt="">
                <div class="ratting">
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <div class="price">
                    <h4>Yılbaşı</h4>
                    <p>$99 - $129</p>
                </div>
            </div>

            <div class="row">
                <img src="fotograf/org6.jpg" width="100%" alt="">
                <div class="product-text">
                    <h5>Hot</h5>
                </div>
                <div class="ratting">
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <div class="price">
                    <h4>evlilik Teklifi</h4>
                    <p>$99 - $129</p>
                </div>
            </div>

            <div class="row">
                <img src="fotograf/org7.jpg" width="100%" alt="">
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                <div class="ratting">
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <div class="price">
                    <h4>Bekarlığa Veda</h4>
                    <p>$99 - $129</p>
                </div>
            </div>

            <div class="row">
                <img src="fotograf/org8.jpg" width="100%" alt="">
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                <div class="ratting">
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <div class="price">
                    <h4>Baby Shower</h4>
                    <p>$99 - $129</p>
                </div>
            </div>

            <div class="row">
                <img src="fotograf/org9.jpg" width="100%"  alt="">
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                <div class="ratting">
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <div class="price">
                    <h4>Mezuniyet</h4>
                    <p>$99 - $129</p>
                </div>
            </div>

            <div class="row">
                <img src="fotograf/org10.jpg" width="100%"  alt="">
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                <div class="ratting">
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <div class="price">
                    <h4>Davetiye</h4>
                    <p>$99 - $129</p>
                </div>
            </div>

        </div>
    </section>

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
     <!--  -->
    <script src="script.js"></script>

</body>
</html>
<?php

?>
<html>
<head>
	<title>İletişim</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="acilirmenu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>

<body background="fotograf/iletisimbg.png">
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
	<div class="box">
		<h2>İLETİŞİM</h2><br>
		<form method="post" action="">
		   <div class='container'>
			<div>
				<input onfocus="nameFocus()" type="text" name="ads" required="" >
				<label id="name">Adınız-Soyadınız</label>
			</div>
			<div>
				<input onfocus="emailFocus()" type="email" name="email" required="">
				<label id="email">E-posta</label>
			</div>
			<div>
				<textarea id="content" onfocus="subjectFocus()" name="msj" cols="60" rows="5" required=""></textarea>
				<label id="msj">Mesajınız</label>
			</div>
			
			<input type="submit" name="gonder" value="Gönder" class="btn">
		    <input type="reset" name="tmzl" value="Temizle" class="btn">
			<?php
			if(isset($_POST['gonder']))
			{
				$adsoy=$_POST['ads'];
				$eposta=$_POST['email'];
				$mesaj=$_POST['msj'];
				$x = new PDO("mysql:host=localhost;dbname=organizasyon", 'root','');
				$ileti=$x->exec("INSERT INTO iletisim (iletisim_ads,iletisim_eposta,iletisim_mesaj) VALUES ('$adsoy','$eposta','$mesaj')");
				
				if($ileti)
				{
					echo "<center>Mesajınız Gönderildi. <br> -Kısa süre içinde dönüş sağlanacaktır-</center>";
				}
				else
				{
					echo "<center>KAYIT BAŞARISIZ</center>";
				}
				}
				?>
		   </div>	
		</div>   
		</form>
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

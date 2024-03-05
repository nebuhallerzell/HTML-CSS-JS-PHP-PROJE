<html>
<head>
	<title>Giriş</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
	<!-- açılır menü -->
    <link rel="stylesheet" href="acilirmenu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
	<!-- Giriş -->
    <link rel="stylesheet" type="text/css" href="giris.css">

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
                  <div class="item"><a href="iletisim.php"><i class="fas fa-th"></i>İletişim</a></div>
				  <div class="item"><a href="mesajlarim.php"><i class='fab fa-facebook-messenger'></i>Mesajlarım</a></div>
                </div>
              </div>
            <!--  -->   
        </div>
    </header>
	<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="" method="post">
			<h1>KAYIT OL</h1>
			<input type="text" placeholder="İsim/Şirket Adı" name="adsoyad"/>
			<input type="text" placeholder="Kullanıcı Adı" name="kad"/>
			<input type="email" placeholder="E-Posta" name="eposta"/>
			<input type="password" placeholder="Şifre" name="sifre"/>
			Kullanıcı<input type="radio" name="k_tur" value="Kullanici">
			Organizatör<input type="radio" name="k_tur" value="Sirket">
			<button type="submit" name="kayit">Kayıt Ol</button>
			<?php
				if (isset($_POST['kayit'])) {
					$k_ad = $_POST['kad'];
					$adsoy = $_POST['adsoyad'];
					$k_eposta = $_POST['eposta'];
					$sifre = $_POST['sifre'];
					$k_tur = $_POST['k_tur'];
					$x = new PDO("mysql:host=localhost;dbname=organizasyon", 'root', '');
					$ileti = $x->exec("INSERT INTO kullanici (k_ad,adsoy,k_eposta,sifre,k_tur) VALUES ('$k_ad','$adsoy','$k_eposta','$sifre','$k_tur')");
					if($ileti)
						echo "<center>Kayıt Başarılı</center>";
					else
						echo "<center>Kayıt Başarısız</center>";
				}
			?>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="" method="post">
			<h1>GİRİŞ YAP</h1>
			<input placeholder="Kullanıcı Adı" name="kad" />
			<input type="password" placeholder="Şifre" name="sifre"/>
			<button type="submit" name="giris">Giriş</button>
			<?php
			if(isset($_POST['giris']))
			{
				session_start();
				$kullanici_ad=$_POST['kad'];
				$sifre=$_POST['sifre'];
				$list = new PDO("mysql:host=localhost;dbname=organizasyon", 'root','');
				$listele= $list-> query("SELECT * FROM kullanici");
				while ($row = $listele->fetch()) 
				{
					if ($kullanici_ad==$row['k_ad'] && $sifre==$row['sifre'] && $row['k_yasak']=="yasaksiz" )
					{   
			$_SESSION["k_ad"] = $row['k_ad'];
			$_SESSION["kullanicisifresi"] = $row['sifre'];
			$_SESSION["tur"]=$row['k_tur'];
			$_SESSION["k_id"]=$row['k_id'];
				if($row['k_tur']=='Admin')
				header('location: admin.php');
			    else if($row['k_tur']=='Sirket')
				header('location: sirket.php');
			$_SESSION["login"]=100;
			if($row['k_tur']=='Kullanici')
				header('location: profil.php');
			}
			else
			{
			echo "Kullanıcı adı veya şifre hatalı";
			}	
	}
}
			?>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>HOŞGELDİN</h1>
				<p>En Yeni Organizasyonları Görmek İçin Lütfen Giriş Yap</p>
				<button class="ghost" id="signIn">Giriş Yap</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>MERHABA!</h1>
				<p>Hesabın Yok Mu? Buradan Yeni Bir Tane Oluşturabilirsin</p>
				<button class="ghost" id="signUp">Kayıt Ol</button>
			</div>
		</div>
	</div>
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
	     <script src="deneme.js"></script>
</body>
</html>

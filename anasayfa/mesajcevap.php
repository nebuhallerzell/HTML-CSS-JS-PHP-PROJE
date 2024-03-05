<?php
session_start();
if($_SESSION["tur"] == "Kullanici" || $_SESSION["tur"] == "Sirket")
{
    $gonderenk=$_SESSION["k_ad"];
    $mesajsahibi=$_GET['mesajsahibi'];
    $mid=$_GET['mid'];
    echo "<center>MESAJINIZI İLETİN <br><form action='' method='post'>
    <textarea name='mesaj' cols='40' rows='4' placeholder='Buraya mesajınızı giriniz'></textarea><br>
    <input type='submit' name='gonder' value='Mesaj Gönder'>
    </form> </center>   ";
    if(isset($_POST['gonder']))
    {
        $m=$_POST['mesaj'];
        $x = new PDO("mysql:host=localhost;dbname=organizasyon", 'root', '');

       $mkayit = $x->exec("INSERT INTO `mesaj`(`Gonderen_Kullanici_adi`, `Açıklama`, `alan_kullanici_adi`, `mekan_id`) VALUES (' $gonderenk','$m','$mesajsahibi','$mid')");
        if($mkayit)
        echo "mesaj gönderildi";
    }


}
else
{
    header('location:giris.php'); 
}



?>
<?php
session_start();
if($_SESSION["tur"] == "Sirket" || $_SESSION["tur"] == "Kullanici")
{       $kullanici_ad=$_SESSION["k_ad"];
    echo $kullanici_ad;
        $k_id=$_SESSION["k_id"];
        $x = new PDO("mysql:host=localhost;dbname=organizasyon", 'root', '');
        $m=$x->query("SELECT * FROM `mesaj`");
        while ($row = $m->fetch()) 
        { 
            if($row['alan_kullanici_adi']==$kullanici_ad)
            {
                $m_id=$row['mekan_id'];
                $mesajsahibi= $row['Gonderen_Kullanici_adi'];
                echo $row['Gonderen_Kullanici_adi'] ." ". $row['Açıklama'] ."
                <a href='mesajcevap.php?mesajsahibi=$mesajsahibi&mid=$m_id'>Mesaj Gönder</a><br>" ;
            }
        }
}
else
{
    header('location:giris.php');
}
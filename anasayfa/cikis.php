<?php
session_start();
session_destroy();
echo "Başarıyla çıkış yapıldı, yönlendiriliyorsunuz..";
header("Refresh:2; url=giris.php");
?>
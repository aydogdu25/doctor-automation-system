<?php

$vt_sunucu = "localhost";
$vt_kullanici = "root";
$vt_sifre = "";
$vt_adi = "doktor_otomasyon";



try {
    $db = new PDO("mysql:host=$vt_sunucu;dbname=$vt_adi", $vt_kullanici, $vt_sifre);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Bağlantı hatası: " . $e->getMessage();
}

$baglan = mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

if (!$baglan) {
    die("Bağlantı başarısız: " . mysqli_connect_error());
}

?>

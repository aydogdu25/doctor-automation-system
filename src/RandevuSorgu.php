<head>
    <meta charset="UTF-8">
    <title>Randevu Sorgulama</title>
    <link rel="stylesheet" href="randevu_sorgu.css">
    <a href='Anasayfa.php' style='background-color: #4CAF50; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;'>Anasayfaya Dön</a></div>

</div>

</head>

<?php
$vt_sunucu = "localhost";
$vt_kullanici = "root";
$vt_sifre = "";
$vt_adi = "doktor_otomasyon";

$baglan = mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

if (!$baglan) {
    die("Bağlantı başarısız: " . mysqli_connect_error());
}
else {
     echo "<div style='position: fixed; bottom: 0; left: 0; background-color: green; color: white; padding: 10px;'>Bağlantı başarılı</div>";
	 
}


$sql = "SELECT hasta_ad,hasta_soyad,doktor_adi,doktor_soyadi,doktor_alani FROM randevu_al";
$result = mysqli_query($baglan, $sql);

if (mysqli_num_rows($result) > 0) {
echo "<table><tr><th>Hasta Adı</th><th>Hasta Soyadı</th><th>Doktor Adı</th><th>Doktor Soyadı</th><th>Doktor Alanı</th></tr>";
while($row = mysqli_fetch_assoc($result)) {
echo "<tr><td>".$row["hasta_ad"]."</td><td>".$row["hasta_soyad"]."</td><td>".$row["doktor_adi"]."</td><td>".$row["doktor_soyadi"]."</td><td>".$row["doktor_alani"]."</td></tr>";
}
echo "</table>";
} else {
echo "Henüz kayıt bulunmamaktadır.";
}

mysqli_close($baglan);
?>

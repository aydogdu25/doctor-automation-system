<!DOCTYPE html>
<html>
<head>
	<title>Randevularım</title>
	<link rel="stylesheet" type="text/css" href="panel.css">
	<a href='Anasayfa.php' style='background-color: #0F4C75; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;'>Anasayfaya Dön</a></div>
</head>
<body>
	
</body>
</html>



<?php

include 'baglanti.php';

session_start();
if(isset($_SESSION['hasta_tc'])) {

    $hasta_tc = $_SESSION['hasta_tc'];


    $sql = "SELECT * FROM randevu_al WHERE hasta_tc = '$hasta_tc'";
    $result = mysqli_query($baglan, $sql);
 
        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr><th>TC</th><th>Hasta Adı</th><th>Hasta Soyadı</th><th>Hasta Tel</th><th>Doktor Adı</th><th>Doktor Soyadı</th><th>Doktor Alanı</th><th>Randevu Tarih</th><th>Randevu Saat</th></tr>";
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>".$row["hasta_tc"]."</td><td>".$row["hasta_ad"]."</td><td>".$row["hasta_soyad"]."</td><td>".$row["hasta_telefon"]."</td><td>".$row["doktor_adi"]."</td><td>".$row["doktor_soyadi"]."</td><td>".$row["doktor_alani"]."</td><td>".$row["randevu_tarih"]."</td><td>".$row["randevu_saat"]."</td></tr>";
            }
            echo "</table>";
        }
		else {
				echo "<div style='color: #32cd32; font-weight: bold; text-align: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'>Randevu Bulunamadı..</div>";
			} 
} 

?>

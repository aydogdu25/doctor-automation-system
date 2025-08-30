<!DOCTYPE html>
<html>
<head>
	<title>Randevu Listem</title>
	<link rel="stylesheet" type="text/css" href="panel.css">
	<a href='DoktorPanel.php' style='background-color: #0F4C75; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;'>Panele Dön</a></div>
</head>
<body>
	
</body>
</html>


<?php

include 'baglanti.php';

session_start();
if(isset($_SESSION['doktor_id'])) {

    $doktor_id = $_SESSION['doktor_id'];


    $sql = "SELECT * FROM doktorlar WHERE doktor_id = '$doktor_id'";
    $result = mysqli_query($baglan, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $sql2 = "SELECT * FROM randevu_al WHERE doktor_adi = '{$row['doktor_ad']}'";

        $result2 = mysqli_query($baglan, $sql2);

        if (mysqli_num_rows($result2) > 0) {
            echo "<table>";
            echo "<tr><th>TC</th><th>Hasta Adı</th><th>Hasta Soyadı</th><th>Hasta Tel</th><th>Doktor Adı</th><th>Doktor Soyadı</th><th>Doktor Alanı</th></tr>";
            while($row2 = mysqli_fetch_assoc($result2)) {
                echo "<tr><td>".$row2["hasta_tc"]."</td><td>".$row2["hasta_ad"]."</td><td>".$row2["hasta_soyad"]."</td><td>".$row2["hasta_telefon"]."</td><td>".$row2["doktor_adi"]."</td><td>".$row2["doktor_soyadi"]."</td><td>".$row2["doktor_alani"]."</td></tr>";
            }
            echo "</table>";
        } else {
			echo "<div style='color: #FF9494; font-weight: bold; text-align: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'>Henüz Randevunuz Bulunmamaktadır..</div>";
        }
        
    } 

  
} else {

    header("Location: doktorgiris.php");
    exit();
}

?>

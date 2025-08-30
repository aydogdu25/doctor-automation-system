<!DOCTYPE html>
<html>
<head>
	<title>Mesaj Kutusu</title>
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
    $row = mysqli_fetch_assoc($result);
   

    if (mysqli_num_rows($result) == 1) {
        $sql3 = "SELECT * FROM mesaj WHERE mesaj_doktor = '{$row['doktor_ad']} {$row['doktor_soyad']}'";
        $result3 = mysqli_query($baglan, $sql3);
        
        if (mysqli_num_rows($result3) > 0) {
            echo "<table>";
            echo "<tr><th>İsim</th><th>Soyisim</th><th>Telefon Numarası</th><th>Email</th><th>Doktor Adı</th><th>Mesaj</th></tr>";
            while($row3 = mysqli_fetch_assoc($result3)) {
                echo "<tr><td>".$row3["mesaj_ad"]."</td><td>".$row3["mesaj_soyad"]."</td><td>".$row3["mesaj_tel"]."</td><td>".$row3["mesaj_email"]."</td><td>".$row3["mesaj_doktor"]."</td><td><div style='width:250px; height:150px;'><textarea style='width:100%; height:100%;' readonly>".$row3["mesaj_content"]."</textarea></div></td></tr>";
            }
            echo "</table>";
        } else {
            echo "<div style='color: #FF9494; font-weight: bold; text-align: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'>Mesajınız Bulunmamaktadır..</div>";
        }          
    } 
    
   
} else {
   
    header("Location: doktorgiris.php");
    exit();
}

?>

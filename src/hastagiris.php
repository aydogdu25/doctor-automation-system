<?php

include 'baglanti.php';


if(isset($_POST['hasta_tc'])) {
    $hasta_tc = $_POST['hasta_tc'];

    $query = $db->prepare("SELECT * FROM randevu_al WHERE hasta_tc = :hasta_tc");
    $query->bindParam(":hasta_tc", $hasta_tc);
    $query->execute();

    if($query->rowCount() > 0) {
        
        session_start();
        $_SESSION['hasta_tc'] = $hasta_tc;
        header("Location: HastaSorgu.php");
        exit();
    } else {
        
        echo "<div style='color: #32cd32; font-weight: bold; text-align: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'>Randevu Bulunamadı..</div>";


    }

}

?>


<!DOCTYPE html>
<html>
<head>
  <title>Hasta Randevu Giriş Ekranı</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Hasta Randevu Giriş Ekranı</h1>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="hasta_tc">TC No:</label>
    <input type="text" id="hasta_tc" name="hasta_tc"><br>

    <input type="submit" name="submit" value="Giriş">
	<div style="text-align:center;">
  <a href="Anasayfa.php" class="button">Anasayfaya Dön</a>
</div>

  </form>
</body>
</html>
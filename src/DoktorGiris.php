<?php

$host = "localhost"; 
$dbname = "doktor_otomasyon"; 
$username = "root"; 
$password = ""; 


try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Bağlantı hatası: " . $e->getMessage();
}


if(isset($_POST['doktor_id'], $_POST['doktor_sifre'])) {
    $doktor_id = $_POST['doktor_id'];
    $doktor_sifre = $_POST['doktor_sifre'];

    $query = $db->prepare("SELECT * FROM doktorlar WHERE doktor_id = :doktor_id AND doktor_sifre = :doktor_sifre");
    $query->bindParam(":doktor_id", $doktor_id);
    $query->bindParam(":doktor_sifre", $doktor_sifre);
    $query->execute();

    if($query->rowCount() > 0) {
        
        session_start();
        $_SESSION['doktor_id'] = $doktor_id;
        $_SESSION['doktor_sifre'] = $doktor_sifre;
        header("Location: DoktorPanel.php");
        exit();
    } else {
        
        echo "<div style='color: #32cd32; font-weight: bold; text-align: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);'>Hatalı kullanıcı adı veya şifre. Lütfen tekrar deneyin.</div>";


    }

}

?>


<!DOCTYPE html>
<html>
<head>
  <title>Doktor Giriş Ekranı</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Doktor Giriş Ekranı</h1>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="doktor_id">Doktor ID:</label>
    <input type="text" id="doktor_id" name="doktor_id"><br>

   <label for="doktor_sifre">Şifre:</label>
    <input type="password" id="doktor_sifre" name="doktor_sifre"><br>

    <input type="submit" name="submit" value="Giriş">
	<div style="text-align:center;">
  <a href="Anasayfa.php" class="button">Anasayfaya Dön</a>
</div>

  </form>
</body>
</html>
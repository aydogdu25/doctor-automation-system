<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Randevu Oluşturma</title>
    <link rel="stylesheet" href="style.css">
	<a href='Anasayfa.php' style='background-color: #0F4C75; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;'>Anasayfaya Dön</a></div>
</head>
<body>
    <h1>Randevu Oluşturma Ekranı</h1>
    <form action="RandevuAl.php" method="post">
        <label for="tc">T.C. Kimlik Numaranız:</label>
        <input type="text" id="tc" name="tc" required><br><br>
        <label for="name">Adınız:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="surname">Soyadınız:</label>
        <input type="text" id="surname" name="surname" required><br><br>
        <label for="phone">Telefon Numaranız:</label>
        <input type="tel" id="phone" name="phone" required><br><br>
		<label for="doktor_bilgileri">Bölüm:</label>
		<select id="doktor_bilgileri" name="doktor_bilgileri" class="selectbox">
        <?php
$sunucu = "localhost";
$kullanici = "root";
$sifre = "";
$veritabani = "doktor_otomasyon";

$baglanti = mysqli_connect($sunucu, $kullanici, $sifre, $veritabani);

if (!$baglanti) {
  die("Bağlantı başarısız: " . mysqli_connect_error());
}

$sorgu = "SELECT doktor_ad, doktor_soyad, doktor_bolum FROM doktorlar";
$sonuc = mysqli_query($baglanti, $sorgu);

while ($satir = mysqli_fetch_assoc($sonuc)) {
  echo '<option value="' . $satir["doktor_ad"] . '">' . $satir["doktor_ad"] . ' ' . $satir["doktor_soyad"] . ' - ' . $satir["doktor_bolum"] . '</option>';
}
mysqli_close($baglanti);
?>
  </select><br><br>
  
  <label for="randevu_tarih">Randevu Tarihi:</label>
  <input type="date" name="randevu_tarih">
  
  <p><label for="randevu_saati">Randevu Saati:</label></p>
  <select name="randevu_saati" class="selectbox">
  <option value="">Saat Seçin</option>
  <optgroup label="Saatler">
    <option value="08:00">08:00</option>
    <option value="08:30">08:30</option>
    <option value="09:00">09:00</option>
    <option value="09:30">09:30</option>
    <option value="10:00">10:00</option>
    <option value="10:30">10:30</option>
    <option value="11:00">11:00</option>
    <option value="11:30">11:30</option>
    <option value="12:00">12:00</option>
    <option value="12:30">12:30</option>
    <option value="13:00">13:00</option>
    <option value="13:30">13:30</option>
    <option value="14:00">14:00</option>
    <option value="14:30">14:30</option>
    <option value="15:00">15:00</option>
    <option value="15:30">15:30</option>
    <option value="16:00">16:00</option>
    <option value="16:30">16:30</option>
    <option value="17:00">17:00</option>
  </optgroup>
</select>

		<input type="submit" name="submit" value="Randevu Al">
</form>	
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])) {
    $vt_sunucu = "localhost";
    $vt_kullanici = "root";
    $vt_sifre = "";
    $vt_adi = "doktor_otomasyon";

    $baglan = mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

    if (!$baglan) {
        die("Bağlantı başarısız: " . mysqli_connect_error());
    } 

    $tc = $_POST['tc'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $phone = $_POST['phone'];
    $doktor_bilgileri = $_POST['doktor_bilgileri'];
    $randevu_tarihi = $_POST['randevu_tarih'];
    $randevu_saati = $_POST['randevu_saati'];

    $sorgu = "SELECT doktor_soyad, doktor_bolum FROM doktorlar WHERE doktor_ad = '$doktor_bilgileri'";
    $sonuc = mysqli_query($baglan, $sorgu);
    $satir = mysqli_fetch_assoc($sonuc);


    $sorgu2 = "SELECT * FROM randevu_al WHERE randevu_tarih = '$randevu_tarihi' AND randevu_saat = '$randevu_saati' AND doktor_adi = '$doktor_bilgileri'";
    $sonuc2 = mysqli_query($baglan, $sorgu2);

    if (mysqli_num_rows($sonuc2) > 0) {
       echo "<div style='color: #ff4500; font-weight: bold; text-align: center; position: absolute; bottom: 20px; left: 50%; transform: translateX(-50%);'>Seçtiğiniz saatte randevu müsait değil. Lütfen başka bir saat seçin.</div>";
    } else {

        $doktor_soyadi = $satir['doktor_soyad'];
        $doktor_alani = $satir['doktor_bolum'];
        $sql = "INSERT INTO randevu_al (hasta_tc, hasta_ad, hasta_soyad, hasta_telefon, doktor_adi, doktor_soyadi, doktor_alani, randevu_tarih, randevu_saat) 
                VALUES ('$tc', '$name', '$surname', '$phone', '$doktor_bilgileri', '$doktor_soyadi', '$doktor_alani', '$randevu_tarihi', '$randevu_saati')";
        
        if (mysqli_query($baglan, $sql)) {
			echo "<div style='color: #4CAF50; font-weight: bold; text-align: center; position: fixed; top: 0; left: 50%; transform: translate(-50%, 0);'>Randevu Oluşturma Başarılı!</div>";




		} else {
			echo "<p class='error'>Kayıt eklenirken bir hata oluştu: " . mysqli_error($baglan) . "</p>";
			}
} 


mysqli_close($baglan);
}
?>

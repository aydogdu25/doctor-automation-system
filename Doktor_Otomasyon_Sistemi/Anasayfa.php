<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OKS Hastanesi</title>

  <link rel="stylesheet" href="anasayfa.css">

  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'>
</head>

<body>
  <header class="header">
    <a href="#" class="logo">OKS Hastanesi</a>

    <div class="bx bx-menu" id="menu-icon"></div>

    <nav class="navbar">
      <a href="#home" class="active">Anasayfa</a>
      <a href="#aboutus">Hakkımızda</a>
      <a href="#services">Tıbbi Birimler</a>
      <a href="#contact">İletişim</a>

      <span class="active-nav"></span>
    </nav>
  </header>

  <section class="home" id="home">
    <div class="home-content">
      <h1><span>OKS Hastanesi</span></h1>
      <div class="text-animate">
        <h3>Dünya İçin Sağlık</h3>
      </div>
      <p>Sağlığınız ve mutluluğunuz, kaliteli bir yaşamın başlangıcı için.</p>
      <div class="btn-box">
        <span><a href="RandevuAl.php" class="btn">Randevu Al</a></span>
        <span><a href="hastagiris.php" class="btn">Randevu Sorgu</a></span>
        <span><a href="DoktorGiris.php" class="btn">Doktor Giriş</a></span>
		<span><a href="subelerimiz.php" class="btn">Şubelerimiz</a></span>
      </div>
    </div>


    <div class="home-imgHover"></div>
  </section>

  <section id="aboutus">
    <div class="row-about">
      <div class="image-section">
        <img src="national-cancer-institute-701-FJcjLAQ-unsplash (Küçük).jpg" alt="">
        <span class="circle-spin"></span>
      </div>
      <div class="content-aboutus">
        <h1>Hakkımızda</h1>
        <p>Hastanemiz, sağlık sektöründe uzun yıllardır hizmet veren köklü bir kuruluştur. Sağlık alanında son teknolojik gelişmeleri takip ederek, her zaman en iyi hizmeti sunmak için çalışıyoruz.

Hastanemiz bünyesinde geniş bir uzmanlık alanı bulunmaktadır. Dahiliye, kardiyoloji, göz hastalıkları, ortopedi, nöroloji, dermatoloji ve çocuk sağlığı gibi pek çok bölümde uzman hekimlerimiz ile hizmet veriyoruz. Ayrıca, modern ve donanımlı ameliyathanelerimizde birçok farklı operasyon gerçekleştiriyoruz.

Hasta memnuniyeti bizim için her zaman en önemli önceliktir. Bu nedenle, hastalarımızın her türlü ihtiyacını karşılamak adına 7 gün 24 saat hizmet veren deneyimli sağlık personellerimiz ile her zaman yanınızdayız.

Hastanemizde her türlü sağlık hizmetinin yanı sıra, modern konaklama olanakları da sunmaktayız. Konforlu ve hijyenik odalarımızda, hastalarımızın kendilerini evlerinde hissetmeleri için gereken tüm detayları düşündük.

Sizleri hastanemize bekliyor, sağlıklı günler diliyoruz.
        </p>
      </div>
    </div>
  </section>

  <section id="services">
    <div class="container-services">
      <h1>Servislerimiz</h1>
      <div class="row-services">
        <div class="service">
          <i class="fa-solid fa-eye"></i>
          <h2>Göz Hastalıkları</h2>
          <p>A BLOK
          </p>
        </div>
        <div class="service">
          <i class="fa-solid fa-heart-pulse"></i>
          <h2>Kalp Hastalıkları</h2>
          <p>B BLOK
          </p>
        </div>
        <div class="service">
          <i class="fa-solid fa-tooth"></i>
          <i class="fa-solid fa-nose"></i>
          <h2>Diş Hastalıkları</h2>
          <p>A BLOK
          </p>
        </div>
        <div class="service">
          <i class="fa-solid fa-brain"></i>
          <h2>Nöroloji</h2>
          <p>B BLOK
          </p>
        </div>
        <div class="service">
          <i class="fa-sharp fa-solid fa-scissors"></i>
          <h2>Genel Cerrahi</h2>
          <p>C BLOK
          </p>
        </div>
        <div class="service">
          <i class="fa-solid fa-truck-medical"></i>
          <h2>Acil Servis</h2>
          <p>C BLOK</p>
        </div>
        <div class="service">
          <i class="fa-solid fa-children"></i>
          <h2>Çocuk Hastalıkları</h2>
          <p>B BLOK</p>
        </div>
        <div class="service">
          <i class="fa-solid fa-lungs"></i>
          <h2>Göğüs Hastalıkları</h2>
          <p>A BLOK</p>
        </div>
        <div class="service">
          <i class="fa-solid fa-person-pregnant"></i>
          <h2>Kadın Doğum</h2>
          <p>A BLOK</p>
        </div>
      </div>
    </div>
  </section>



  <section class="contact" id="contact">
    <h2 class="heading">Şikayet ve Önerileriniz İçin</h2>

    <form action="Anasayfa.php" method="post">
      <div class="input-box">
        <div class="input-field">
          <input type="text" name="isim" placeholder="İsim" required>
          <span class="focus"></span>
        </div>
        <div class="input-field">
          <input type="text" name="soyisim" placeholder="Soyad" required>
          <span class="focus"></span>
        
        </div>
      </div>

      <div class="input-box">
        <div class="input-field">
          <input type="text" name="tel" placeholder="Telefon Numarası" required>
          <span class="focus"></span>
        </div>
        <div class="input-field">
          <input type="text" name="email" placeholder="Email" required>
          <span class="focus"></span>
        </div>
        <div class="input-field">
          <select name="doktorad" placeholder="Doktor" required>
            <?php include 'baglanti.php'; ?>
            <?php $sql = "SELECT doktor_ad,doktor_soyad FROM doktorlar";?> 
            <?php $result = mysqli_query($baglan, $sql);?>  
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
              <option value="<?php echo $row['doktor_ad'] ," ", $row['doktor_soyad']; ?>"><?php echo $row['doktor_ad'] ," " , $row['doktor_soyad']; ?></option>
            <?php } ?>
          </select>      
          <span class="focus"></span>
        </div>
      </div>

      <div class="textarea-field">
        <textarea name="mesaj" id="" cols="30" rows="10" placeholder="Mesaj" required></textarea>
        <span class="focus"></span>
      </div>

      <div class="btn-box btns">
        <!-- <button type="submit" class="btn">Gönder</button> -->
        <input type="submit" name="gonder" value="Gönder" class="btn" required>
      </div>
    </form>
  </section>

  <footer class="footer">
    <div class="footer-text">
      <p>© OKS Sağlık Grubu. Tüm Hakları Saklıdır.</p>
    </div>

    <div class="footer-iconTop">
      <a href="#"><i class='bx bx-up-arrow-alt'></i></a>
    </div>
  </footer>

  <scrip src="ScriptDeneme.js"></script>

</body>

</html>


<?php
  
  include("baglanti.php");

  if (isset($_POST["isim"],$_POST["soyisim"],$_POST["tel"],$_POST["email"],$_POST["doktorad"],$_POST["mesaj"])) {
    $isim=$_POST["isim"];
    $soyisim=$_POST["soyisim"];
    $tel=$_POST["tel"];
    $email=$_POST["email"];
    $doktorad=$_POST["doktorad"];
    $mesaj=$_POST["mesaj"];

    $ekle="INSERT INTO mesaj (mesaj_ad, mesaj_soyad, mesaj_tel, mesaj_email, mesaj_doktor, mesaj_content) VALUES ('".$isim."','".$soyisim."','".$tel."','".$email."','".$doktorad."','".$mesaj."')";

    if (mysqli_query($baglan, $ekle)) {
      echo "Mesajınız başarıyla gönderilmiştir.";
    } else {
      echo "Mesajınız Gönderilememiştir.";
    }

  }
  
?>
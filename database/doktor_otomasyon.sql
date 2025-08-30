-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 15 May 2023, 08:59:36
-- Sunucu sürümü: 8.0.31
-- PHP Sürümü: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `doktor_otomasyon`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `doktorlar`
--

DROP TABLE IF EXISTS `doktorlar`;
CREATE TABLE IF NOT EXISTS `doktorlar` (
  `doktor_id` int NOT NULL,
  `doktor_ad` varchar(20) COLLATE utf8mb3_turkish_ci NOT NULL,
  `doktor_soyad` varchar(20) COLLATE utf8mb3_turkish_ci NOT NULL,
  `doktor_telefon` varchar(20) COLLATE utf8mb3_turkish_ci NOT NULL,
  `doktor_bolum` varchar(20) COLLATE utf8mb3_turkish_ci NOT NULL,
  `doktor_sifre` varchar(20) COLLATE utf8mb3_turkish_ci NOT NULL,
  PRIMARY KEY (`doktor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `doktorlar`
--

INSERT INTO `doktorlar` (`doktor_id`, `doktor_ad`, `doktor_soyad`, `doktor_telefon`, `doktor_bolum`, `doktor_sifre`) VALUES
(12, 'Kadir', 'Eren', '5552223344', 'Üroloji', 'kadir123'),
(11, 'Merve', 'Çalışkan', '5551112233', 'Kadın Hastalıkları v', 'merve123'),
(10, 'Zeynep', 'Akyol', '5550001122', 'Genel Cerrahi', 'zeynep123'),
(9, 'Burak', 'Aydın', '5559990011', 'Psikiyatri', 'burak123'),
(8, 'Seda', 'Türk', '5558889900', 'Radyoloji', 'seda123'),
(7, 'Hakan', 'Çelik', '5557778899', 'Dermatoloji', 'hakan123'),
(6, 'Hasan', 'Arslan', '5556667788', 'KBB', 'hasan123'),
(5, 'Ali', 'Yıldırım', '5555556677', 'Nöroloji', 'ali123'),
(4, 'Fatma', 'Yıldız', '5554445566', 'Kardiyoloji', 'fatma123'),
(3, 'Ayşe', 'Demir', '5553334455', 'Göz Hastalıkları', 'ayse123'),
(2, 'Mehmet', 'Kaya', '5552223344', 'Ortopedi', 'mehmet123'),
(1, 'Ahmet', 'Yılmaz', '5551112233', 'Dahiliye', 'ahmet123'),
(13, 'Gamze', 'Karakaya', '5553334455', 'Çocuk Hastalıkları', 'gamze123'),
(14, 'Berk', 'Göçmen', '5554445566', 'Plastik ve Rekonstrü', 'berk123'),
(15, 'Deniz', 'Uğur', '5555556677', 'Enfeksiyon Hastalıkl', 'deniz123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hastaneler`
--

DROP TABLE IF EXISTS `hastaneler`;
CREATE TABLE IF NOT EXISTS `hastaneler` (
  `hastane_sayi` int NOT NULL,
  `sehir_ad` varchar(20) COLLATE utf8mb3_turkish_ci DEFAULT NULL,
  KEY `fk_sehir` (`sehir_ad`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `hastaneler`
--

INSERT INTO `hastaneler` (`hastane_sayi`, `sehir_ad`) VALUES
(10, 'Adana'),
(7, 'Ankara'),
(4, 'Antalya'),
(8, 'Bursa'),
(7, 'Denizli'),
(3, 'Diyarbakır'),
(10, 'Erzurum'),
(4, 'Eskişehir'),
(7, 'Gaziantep'),
(2, 'Istanbul'),
(1, 'Izmir'),
(5, 'Kahramanmaraş'),
(4, 'Konya'),
(5, 'Malatya'),
(3, 'Mersin'),
(10, 'Samsun'),
(1, 'Sivas'),
(2, 'Trabzon'),
(10, 'Van'),
(10, 'Zonguldak');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesaj`
--

DROP TABLE IF EXISTS `mesaj`;
CREATE TABLE IF NOT EXISTS `mesaj` (
  `mesaj_ad` varchar(20) COLLATE utf8mb3_turkish_ci NOT NULL,
  `mesaj_soyad` varchar(20) COLLATE utf8mb3_turkish_ci NOT NULL,
  `mesaj_tel` varchar(20) COLLATE utf8mb3_turkish_ci NOT NULL,
  `mesaj_email` varchar(20) COLLATE utf8mb3_turkish_ci NOT NULL,
  `mesaj_doktor` varchar(20) COLLATE utf8mb3_turkish_ci NOT NULL,
  `mesaj_content` varchar(250) COLLATE utf8mb3_turkish_ci NOT NULL
   KEY `fk_doktor` (`mesaj_doktor`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `mesaj`
--

INSERT INTO `mesaj` (`mesaj_ad`, `mesaj_soyad`, `mesaj_tel`, `mesaj_email`, `mesaj_doktor`, `mesaj_content`) VALUES
('sfdsf', 'sdfsf', '14', 'sadsda', 'Zeynep Öztürk', 'asdasdqwd'),
('kadir', 'aydoğdu', '05396549456', 'kadir@com', 'Mehmet Öz', 'hocam merhabalar');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevu_al`
--

DROP TABLE IF EXISTS `randevu_al`;
CREATE TABLE IF NOT EXISTS `randevu_al` (
  `hasta_tc` varchar(11) COLLATE utf8mb3_turkish_ci NOT NULL,
  `hasta_ad` varchar(20) COLLATE utf8mb3_turkish_ci NOT NULL,
  `hasta_soyad` varchar(20) COLLATE utf8mb3_turkish_ci NOT NULL,
  `hasta_telefon` varchar(9) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `doktor_adi` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `doktor_soyadi` varchar(20) COLLATE utf8mb3_turkish_ci NOT NULL,
  `doktor_alani` varchar(20) COLLATE utf8mb3_turkish_ci NOT NULL,
  `randevu_tarih` date NOT NULL,
  `randevu_saat` varchar(10) COLLATE utf8mb3_turkish_ci NOT NULL,
  UNIQUE KEY `randevu_tarih` (`randevu_tarih`,`randevu_saat`)
  KEY `fk_doktor1` (`doktor_ad`)
  KEY `fk_doktor2` (`doktor_soyad`)
  KEY `fk_doktor3` (`doktor_alani`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `randevu_al`
--

INSERT INTO `randevu_al` (`hasta_tc`, `hasta_ad`, `hasta_soyad`, `hasta_telefon`, `doktor_adi`, `doktor_soyadi`, `doktor_alani`, `randevu_tarih`, `randevu_saat`) VALUES
('12857153440', 'kadir', 'aydoğdu', '053802194', 'Zeynep', 'Öztürk', 'Göz Hastalıkları', '2023-05-14', '16:00'),
('13223140972', 'kadir', 'GÜL', '053965494', 'Zeynep', 'Öztürk', 'Göz Hastalıkları', '2023-05-14', '15:30'),
('12857153440', 'kadir', 'aydoğdu', '053965494', 'Zeynep', 'Öztürk', 'Göz Hastalıkları', '2023-05-15', '12:00'),
('11234', 'mehmet', 'dinç', '123345567', 'Zeynep', 'Öztürk', 'Göz Hastalıkları', '2023-05-16', '14:30');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sehirler`
--

DROP TABLE IF EXISTS `sehirler`;
CREATE TABLE IF NOT EXISTS `sehirler` (
  `sehir_kod` int NOT NULL,
  `sehir_ad` varchar(20) COLLATE utf8mb3_turkish_ci NOT NULL,
  PRIMARY KEY (`sehir_ad`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `sehirler`
--

INSERT INTO `sehirler` (`sehir_kod`, `sehir_ad`) VALUES
(1, 'Adana'),
(2, 'Ankara'),
(3, 'Antalya'),
(4, 'Bursa'),
(5, 'Denizli'),
(6, 'Diyarbakır'),
(7, 'Erzurum'),
(8, 'Eskişehir'),
(9, 'Gaziantep'),
(10, 'Istanbul'),
(11, 'Izmir'),
(12, 'Kahramanmaraş'),
(13, 'Konya'),
(14, 'Malatya'),
(15, 'Mersin'),
(16, 'Samsun'),
(17, 'Sivas'),
(18, 'Trabzon'),
(19, 'Van'),
(20, 'Zonguldak');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

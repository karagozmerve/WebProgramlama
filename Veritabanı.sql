-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: fdb20.biz.nf
-- Üretim Zamanı: 01 Tem 2020, 07:39:18
-- Sunucu sürümü: 5.7.20-log
-- PHP Sürümü: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `3488020_blog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `duyuru`
--

CREATE TABLE `duyuru` (
  `id` int(11) NOT NULL,
  `duyuru` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `olusturulmatarihi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `duyuru`
--

INSERT INTO `duyuru` (`id`, `duyuru`, `olusturulmatarihi`) VALUES
(1, 'Merhaba, Web Sitemiz Güncellenmiştir. Artık Profilim Kısmından İstediğiniz Gibi Profil Bilgilerinizi Değiştirebilirsiniz :) ', '2020-06-25 17:54:49'),
(2, 'İletişim Sayfasından Bana Mail Atabilir. Önerilerinizi belirtebilirsiniz :))', '2020-06-26 03:43:47'),
(3, 'bu bir duyuru', '2020-07-01 07:29:06'),
(4, 'merhaba', '2020-07-01 07:29:33');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimda`
--

CREATE TABLE `hakkimda` (
  `id` int(11) NOT NULL,
  `hisim` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hegitim1` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hegitim2` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hegitim3` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hegitim4` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hegitim5` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hegitim6` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `staj1` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `staj2` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hdil` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hyetenek` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hilgi1` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hilgi2` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hmedenidurum` varchar(35) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hkariyer` varchar(35) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `htelnum` varchar(35) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hmail` varchar(35) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `htarih` varchar(35) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hbolum` varchar(35) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `hakkimda`
--

INSERT INTO `hakkimda` (`id`, `hisim`, `hegitim1`, `hegitim2`, `hegitim3`, `hegitim4`, `hegitim5`, `hegitim6`, `staj1`, `staj2`, `hdil`, `hyetenek`, `hilgi1`, `hilgi2`, `hmedenidurum`, `hkariyer`, `htelnum`, `hmail`, `htarih`, `hbolum`) VALUES
(1, 'Merve Karagözzzz', 'Anadolu Üniversitesi', 'İşletme(1.sınıf)', 'Kocaeli Üniversitesi', 'Bilişim Sistemleri Müh.', 'Dede Korkut Anadolu Lisesi', 'Sayısal', 'Kle Bilgi Teknolojileri A.Ş', 'Stajyer', 'İngilizce (Orta Seviye)', 'C++,C#,Python,HTML', 'Keman ve ukulele çalmak', 'Kitap okumak', 'Bekar', 'Üniversite 3.sınıf', '53924700000', 'mervekaragoz124@gmail.com', '05.02.1999', 'Bilişim Sistemleri Müh.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `id` int(11) NOT NULL,
  `ad` varchar(70) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dogumtarihi` date NOT NULL,
  `telnum` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cinsiyet` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sifre` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `unvan` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `olusturulmatarihi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `ad`, `dogumtarihi`, `telnum`, `mail`, `cinsiyet`, `sifre`, `unvan`, `olusturulmatarihi`) VALUES
(1, 'Sunum', '1999-02-05', ' 05392470836', 'mervekaragoz@gmail.com', 'Kadın', 'Qq4bps7C!', 'admin', '0000-00-00 00:00:00'),
(2, 'Merve Karagöz', '1999-02-05', '    05392470836', 'mervekaragoz124@gmail.com', 'Kadın', '123', 'admin', '2020-06-25 17:45:10'),
(4, 'Gülhan ŞEN', '1998-12-16', '05433474696', 'gulhanseenn@gmail.com', 'Erkek', 'Tiger84437', 'uye', '2020-06-26 06:17:44'),
(5, 'Ayfer Karagöz', '1987-09-01', ' 5345689874', 'ayfer@gmail.com', 'Kadın', '147741', 'kullanici', '2020-06-26 12:32:13'),
(6, 'Didem Kaymaz', '1999-05-11', '5263548596', 'dk@gmail.com', 'Kadın', '123', 'kullanici', '2020-06-27 16:51:07'),
(10, 'Yeliz Zengin', '1998-01-01', '5353566556', 'yeliz@gmail.com', 'Kadın', '$bZ05&MmB', 'uye', '2020-07-01 07:24:42'),
(8, 'Ali Karagöz', '1967-01-01', '5345656556', 'ali@gmail.com', 'Erkek', 'ali123', 'uye', '2020-06-30 11:46:42');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mail`
--

CREATE TABLE `mail` (
  `id` int(11) NOT NULL,
  `gonderen` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `konu` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `mail`
--

INSERT INTO `mail` (`id`, `gonderen`, `konu`, `mail`) VALUES
(1, 'mervekaragoz@gmail.com', 'merhaba', ' merhaba:) harika bir site olmuş'),
(2, 'gulhanseenn@gmail.com', 'Site Hakkında', 'Siteniz çok güzel olmuş :))'),
(3, 'dk@gmail.com', 'Sillage Blog Hakkında', 'Siteye bayıldımm <3'),
(4, 'mervekaragoz@gmail.com', 'merhaba', ' mesaj');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `duyuru`
--
ALTER TABLE `duyuru`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hakkimda`
--
ALTER TABLE `hakkimda`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Tablo için indeksler `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `duyuru`
--
ALTER TABLE `duyuru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Tablo için AUTO_INCREMENT değeri `hakkimda`
--
ALTER TABLE `hakkimda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Tablo için AUTO_INCREMENT değeri `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

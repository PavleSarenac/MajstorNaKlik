-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 30, 2023 at 04:29 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `majstornaklik`
--
CREATE DATABASE IF NOT EXISTS `majstornaklik` DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci;
USE `majstornaklik`;

-- --------------------------------------------------------

--
-- Table structure for table `grad`
--

DROP TABLE IF EXISTS `grad`;
CREATE TABLE IF NOT EXISTS `grad` (
  `IdGra` int NOT NULL AUTO_INCREMENT,
  `Naziv` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`IdGra`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `grad`
--

INSERT INTO `grad` (`IdGra`, `Naziv`) VALUES
(9, 'Beograd'),
(10, 'Bor'),
(11, 'Valjevo'),
(12, 'Vranje'),
(13, 'Vršac'),
(14, 'Zaječar'),
(15, 'Zrenjanin'),
(16, 'Jagodina'),
(17, 'Kikinda'),
(18, 'Kragujevac'),
(19, 'Kraljevo'),
(20, 'Kruševac'),
(21, 'Leskovac'),
(22, 'Loznica'),
(23, 'Niš'),
(24, 'Novi Pazar'),
(25, 'Novi Sad'),
(26, 'Pančevo'),
(27, 'Pirot'),
(28, 'Požarevac'),
(29, 'Priština'),
(30, 'Prokuplje'),
(31, 'Smederevo'),
(32, 'Sombor'),
(33, 'Sremska Mitrovica'),
(34, 'Subotica'),
(35, 'Užice'),
(36, 'Čačak'),
(37, 'Šabac');

-- --------------------------------------------------------

--
-- Table structure for table `majstor`
--

DROP TABLE IF EXISTS `majstor`;
CREATE TABLE IF NOT EXISTS `majstor` (
  `IdMaj` int NOT NULL,
  `ProsecnaCena` decimal(10,2) DEFAULT NULL,
  `ProsecnaBrzina` decimal(10,2) DEFAULT NULL,
  `ProsecanKvalitet` decimal(10,2) DEFAULT NULL,
  `IdSpec` int NOT NULL,
  PRIMARY KEY (`IdMaj`),
  KEY `IdSpec` (`IdSpec`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `majstor`
--

INSERT INTO `majstor` (`IdMaj`, `ProsecnaCena`, `ProsecnaBrzina`, `ProsecanKvalitet`, `IdSpec`) VALUES
(26, NULL, NULL, NULL, 67),
(27, NULL, NULL, NULL, 90),
(28, NULL, NULL, NULL, 73),
(29, NULL, NULL, NULL, 30),
(30, NULL, NULL, NULL, 81),
(31, NULL, NULL, NULL, 70),
(32, NULL, NULL, NULL, 21),
(33, NULL, NULL, NULL, 57),
(34, NULL, NULL, NULL, 82),
(35, NULL, NULL, NULL, 33),
(36, NULL, NULL, NULL, 17),
(37, NULL, NULL, NULL, 58),
(38, NULL, NULL, NULL, 52),
(39, NULL, NULL, NULL, 29),
(40, NULL, NULL, NULL, 53),
(41, NULL, NULL, NULL, 81),
(42, NULL, NULL, NULL, 73);

-- --------------------------------------------------------

--
-- Table structure for table `poruka`
--

DROP TABLE IF EXISTS `poruka`;
CREATE TABLE IF NOT EXISTS `poruka` (
  `IdP` int NOT NULL,
  `Tekst` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `DatumVreme` datetime NOT NULL,
  `IdPos` int NOT NULL,
  `IdPri` int NOT NULL,
  PRIMARY KEY (`IdP`),
  KEY `IdMaj` (`IdPos`,`IdPri`),
  KEY `IdKli` (`IdPri`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prijava`
--

DROP TABLE IF EXISTS `prijava`;
CREATE TABLE IF NOT EXISTS `prijava` (
  `IdMaj` int NOT NULL,
  `IdKli` int NOT NULL,
  `IdPrijavljenog` int NOT NULL,
  `Tekst` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `DatumVreme` datetime NOT NULL,
  PRIMARY KEY (`IdMaj`,`IdKli`),
  KEY `IdKli` (`IdKli`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recenzija`
--

DROP TABLE IF EXISTS `recenzija`;
CREATE TABLE IF NOT EXISTS `recenzija` (
  `IdKli` int NOT NULL,
  `IdMaj` int NOT NULL,
  `Tekst` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `DatumVreme` datetime NOT NULL,
  PRIMARY KEY (`IdKli`,`IdMaj`),
  KEY `IdMaj` (`IdMaj`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrovani_korisnik`
--

DROP TABLE IF EXISTS `registrovani_korisnik`;
CREATE TABLE IF NOT EXISTS `registrovani_korisnik` (
  `IdKor` int NOT NULL AUTO_INCREMENT,
  `Ime` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `Prezime` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `MejlAdresa` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `KorisnickoIme` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `Lozinka` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `IdGra` int NOT NULL,
  `IdSli` int DEFAULT NULL,
  `TipKorisnika` char(1) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`IdKor`),
  UNIQUE KEY `MejlAdresa` (`MejlAdresa`),
  UNIQUE KEY `KorisnickoIme` (`KorisnickoIme`),
  KEY `IdGra` (`IdGra`),
  KEY `IdSli` (`IdSli`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `registrovani_korisnik`
--

INSERT INTO `registrovani_korisnik` (`IdKor`, `Ime`, `Prezime`, `MejlAdresa`, `KorisnickoIme`, `Lozinka`, `IdGra`, `IdSli`, `TipKorisnika`) VALUES
(16, 'Ljubica', 'Majstorović', 'ljubmajstorovic9@gmail.com', 'ljups', 'ljups123', 35, NULL, 'A'),
(17, 'Nikola', 'Nikolić', 'posta.nikolan@gmail.com', 'dzon', 'dzon123', 9, NULL, 'A'),
(18, 'Pavle', 'Šarenac', 'sarenac.pavle@gmail.com', 'pajo', 'pajo123', 9, NULL, 'A'),
(26, 'Boris', 'Tončić', 'boki@gmail.com', 'boki', 'boki123', 24, NULL, 'M'),
(27, 'Dušan', 'Cvetković', 'duki@gmail.com', 'duki', 'duki123', 28, NULL, 'M'),
(28, 'Vladimir', 'Aleksić', 'vlajko@gmail.com', 'vlajko', 'vlajko123', 9, NULL, 'M'),
(29, 'Dušan', 'Pešić', 'pesou@gmail.com', 'pesou', 'pesou123', 19, NULL, 'M'),
(30, 'Žarko', 'Bulić', 'zarou@gmail.com', 'zarou', 'zarou123', 18, NULL, 'M'),
(31, 'Mihajlo', 'Krunić', 'krunou@gmail.com', 'krunou', 'krunou123', 22, NULL, 'M'),
(32, 'Nikola', 'Janaćković', 'djono@gmail.com', 'djono', 'djono123', 17, NULL, 'M'),
(33, 'Luka', 'Golijanin', 'kalur@gmail.com', 'kalur', 'kalur123', 18, NULL, 'M'),
(34, 'Vojin', 'Radosavljević', 'voja@gmail.com', 'voja', 'voja123', 30, NULL, 'M'),
(35, 'Aleksa', 'Trifković', 'trifke@gmail.com', 'trifke', 'trifke123', 27, NULL, 'M'),
(36, 'Dušan', 'Sekulić', 'sekula@gmail.com', 'sekula', 'sekula123', 25, NULL, 'M'),
(37, 'Jovan', 'Šimpraga', 'simpri@gmail.com', 'simpri', 'simpri123', 18, NULL, 'M'),
(38, 'Vladimir', 'Beljić', 'dovla@gmail.com', 'dovla', 'dovla123', 36, NULL, 'M'),
(39, 'Vuk', 'Radović', 'cevu@gmail.com', 'cevu', 'cevu123', 30, NULL, 'M'),
(40, 'Aleksandar', 'Šarac', 'saki@gmail.com', 'saki', 'saki123', 20, NULL, 'M'),
(41, 'Vladimir', 'Stojanović', 'vlada@gmail.com', 'vlada', 'vlada123', 26, NULL, 'M'),
(42, 'Andrej', 'Savić', 'savke@gmail.com', 'savke', 'savke123', 19, NULL, 'M'),
(43, 'Filip', 'Gajić', 'fikus@gmail.com', 'fikus', 'fikus123', 23, NULL, 'K'),
(44, 'Irina', 'Majstorović', 'rinka@gmail.com', 'rinka', 'rinka123', 35, NULL, 'K'),
(45, 'Nataša', 'Majstorović', 'tasta@gmail.com', 'tasta', 'tasta123', 16, NULL, 'K'),
(46, 'Olivera', 'Antić', 'majka@gmail.com', 'majka', 'majka123', 9, NULL, 'K'),
(47, 'Igor', 'Šarenac', 'tata@gmail.com', 'tata', 'tata123', 25, NULL, 'K'),
(48, 'Branko', 'Majstorović', 'branko@gmail.com', 'tast', 'tast123', 25, NULL, 'K');

-- --------------------------------------------------------

--
-- Table structure for table `slika`
--

DROP TABLE IF EXISTS `slika`;
CREATE TABLE IF NOT EXISTS `slika` (
  `IdSli` int NOT NULL AUTO_INCREMENT,
  `ImgData` longblob NOT NULL,
  `TipSlike` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ImeSlike` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `Velicina` int NOT NULL DEFAULT '0',
  `DatumIzmene` datetime NOT NULL,
  PRIMARY KEY (`IdSli`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `specijalnosti`
--

DROP TABLE IF EXISTS `specijalnosti`;
CREATE TABLE IF NOT EXISTS `specijalnosti` (
  `IdSpec` int NOT NULL AUTO_INCREMENT,
  `Opis` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`IdSpec`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `specijalnosti`
--

INSERT INTO `specijalnosti` (`IdSpec`, `Opis`) VALUES
(8, 'Moler'),
(9, 'Gipsar'),
(10, 'Fasader'),
(11, 'Zidar'),
(12, 'Parketar'),
(13, 'Keramičar'),
(14, 'Građevinski limar'),
(15, 'Varilac'),
(16, 'Građevinski stolar'),
(17, 'Izolater'),
(18, 'Tesar'),
(19, 'Izrada bazena i fontana'),
(20, 'Pomoćni radnik'),
(21, 'Postavljanje podnih površina'),
(22, 'Sečenje i bušenje'),
(23, 'Armirač'),
(24, 'Bravar-monter'),
(25, 'Električar'),
(26, 'Vikler elektromotora'),
(27, 'Serviser liftova'),
(28, 'Monter klima uređaja'),
(29, 'Audio-video serviser'),
(30, 'Serviser mobilnih telefona'),
(31, 'Serviser računara'),
(32, 'Spremačica'),
(33, 'Čistač'),
(34, 'Perač podnih površina'),
(35, 'Odžačar'),
(36, 'Baštovan'),
(37, 'Drvoseča'),
(38, 'Visinski radnik'),
(39, 'Perač fasada'),
(40, 'Visinski radnik'),
(41, 'Domar'),
(42, 'Vodoinstalater'),
(43, 'Monter grejnih instalacija'),
(44, 'Ventilacioni sistemi'),
(45, 'Ključar'),
(46, 'Tapetar'),
(47, 'Metalostrugar'),
(48, 'Stolar'),
(49, 'Staklorezac'),
(50, 'Grnčar'),
(51, 'Kamenorezac'),
(52, 'Mašin-bravar'),
(53, 'Kovač'),
(54, 'Površinska obrada'),
(55, 'Livac'),
(56, 'Uramljivač'),
(57, 'Metaloglodač'),
(58, 'Metalooštrač'),
(59, 'Pečatorezac'),
(60, 'Krojač'),
(61, 'Obućar'),
(62, 'Tašner'),
(63, 'Sajdžija - Časovničar'),
(64, 'Juvelir - Zlatar'),
(65, 'Mašinski vez'),
(66, 'Ručni vez'),
(67, 'Krznar'),
(68, 'Šeširdžija'),
(69, 'Serviser šivećih mašina'),
(70, 'Auto električar'),
(71, 'Auto limar'),
(72, 'Auto bravar'),
(73, 'Auto mehaničar'),
(74, 'Serviser autogas sistema'),
(75, 'Auto grafičar'),
(76, 'Auto tapetar'),
(77, 'Auto perač'),
(78, 'Vulkanizer'),
(79, 'Šlep služba'),
(80, 'Serviser trapa'),
(81, 'Auto stakla'),
(82, 'Auto plastičar'),
(83, 'Serviser auspuha'),
(84, 'Serviser motocikala'),
(85, 'Vozač'),
(86, 'Transport selidbi'),
(87, 'Fizički radnik'),
(88, 'Grafičar'),
(89, 'Firmopisac'),
(90, 'Ikonopisac'),
(91, 'Serviser za bicikle'),
(92, 'Ski serviser'),
(93, 'Serviser medicinske opreme'),
(94, 'Roletne i venecijaneri');

-- --------------------------------------------------------

--
-- Table structure for table `telefon`
--

DROP TABLE IF EXISTS `telefon`;
CREATE TABLE IF NOT EXISTS `telefon` (
  `IdKor` int NOT NULL,
  `Telefon` varchar(15) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`IdKor`,`Telefon`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `telefon`
--

INSERT INTO `telefon` (`IdKor`, `Telefon`) VALUES
(26, '+381-62-468-313'),
(27, '+381-62-468-313'),
(28, '+381-62-468-313'),
(29, '+381-62-468-313'),
(30, '+381-62-468-313'),
(31, '+381-62-468-313'),
(32, '+381-62-468-313'),
(33, '+381-62-468-313'),
(34, '+381-62-468-313'),
(35, '+381-62-468-313'),
(36, '+381-62-468-313'),
(37, '+381-62-468-313'),
(38, '+381-62-468-313'),
(39, '+381-62-468-313'),
(40, '+381-62-468-313'),
(41, '+381-62-468-313'),
(42, '+381-62-468-313'),
(43, '+381-62-468-313'),
(44, '+381-62-468-313'),
(45, '+381-62-468-313'),
(46, '+381-62-468-313'),
(47, '+381-62-468-313'),
(48, '+381-62-468-313');

-- --------------------------------------------------------

--
-- Table structure for table `zabranjeni_mejlovi`
--

DROP TABLE IF EXISTS `zabranjeni_mejlovi`;
CREATE TABLE IF NOT EXISTS `zabranjeni_mejlovi` (
  `MejlAdresa` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `IdAdm` int NOT NULL,
  PRIMARY KEY (`MejlAdresa`),
  KEY `KorisnickoIme` (`IdAdm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `majstor`
--
ALTER TABLE `majstor`
  ADD CONSTRAINT `majstor_ibfk_1` FOREIGN KEY (`IdMaj`) REFERENCES `registrovani_korisnik` (`IdKor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `majstor_ibfk_2` FOREIGN KEY (`IdSpec`) REFERENCES `specijalnosti` (`IdSpec`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Constraints for table `poruka`
--
ALTER TABLE `poruka`
  ADD CONSTRAINT `poruka_ibfk_1` FOREIGN KEY (`IdPos`) REFERENCES `registrovani_korisnik` (`IdKor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `poruka_ibfk_2` FOREIGN KEY (`IdPri`) REFERENCES `registrovani_korisnik` (`IdKor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prijava`
--
ALTER TABLE `prijava`
  ADD CONSTRAINT `prijava_ibfk_1` FOREIGN KEY (`IdMaj`) REFERENCES `majstor` (`IdMaj`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prijava_ibfk_2` FOREIGN KEY (`IdKli`) REFERENCES `registrovani_korisnik` (`IdKor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recenzija`
--
ALTER TABLE `recenzija`
  ADD CONSTRAINT `recenzija_ibfk_2` FOREIGN KEY (`IdMaj`) REFERENCES `majstor` (`IdMaj`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recenzija_ibfk_3` FOREIGN KEY (`IdKli`) REFERENCES `registrovani_korisnik` (`IdKor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `registrovani_korisnik`
--
ALTER TABLE `registrovani_korisnik`
  ADD CONSTRAINT `registrovani_korisnik_ibfk_1` FOREIGN KEY (`IdGra`) REFERENCES `grad` (`IdGra`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `registrovani_korisnik_ibfk_2` FOREIGN KEY (`IdSli`) REFERENCES `slika` (`IdSli`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Constraints for table `telefon`
--
ALTER TABLE `telefon`
  ADD CONSTRAINT `telefon_ibfk_1` FOREIGN KEY (`IdKor`) REFERENCES `registrovani_korisnik` (`IdKor`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Constraints for table `zabranjeni_mejlovi`
--
ALTER TABLE `zabranjeni_mejlovi`
  ADD CONSTRAINT `zabranjeni_mejlovi_ibfk_1` FOREIGN KEY (`IdAdm`) REFERENCES `registrovani_korisnik` (`IdKor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

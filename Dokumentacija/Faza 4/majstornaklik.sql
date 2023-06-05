-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 05, 2023 at 01:17 AM
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
  `BrojRecenzija` int DEFAULT NULL,
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

INSERT INTO `majstor` (`IdMaj`, `BrojRecenzija`, `ProsecnaCena`, `ProsecnaBrzina`, `ProsecanKvalitet`, `IdSpec`) VALUES
(26, 4, '3.75', '3.75', '3.50', 67),
(27, 3, '3.33', '3.67', '3.33', 90),
(28, 5, '4.60', '3.80', '4.40', 73),
(29, 13, '4.70', '4.46', '4.62', 30),
(30, 4, '4.25', '3.50', '2.75', 81),
(31, 3, '2.33', '1.67', '1.67', 70),
(32, 4, '3.00', '3.75', '3.25', 21),
(33, 4, '3.25', '4.00', '3.25', 57),
(34, 4, '3.00', '4.00', '3.50', 82),
(35, 3, '5.00', '4.67', '5.00', 33),
(36, 4, '3.25', '3.25', '3.00', 17),
(37, 3, '3.33', '2.00', '3.00', 58),
(38, 3, '2.33', '2.33', '2.67', 52),
(39, 1, '3.00', '2.00', '2.00', 29),
(40, 1, '5.00', '5.00', '5.00', 53),
(41, NULL, NULL, NULL, NULL, 81),
(42, NULL, NULL, NULL, NULL, 73),
(49, NULL, NULL, NULL, NULL, 29);

-- --------------------------------------------------------

--
-- Table structure for table `poruka`
--

DROP TABLE IF EXISTS `poruka`;
CREATE TABLE IF NOT EXISTS `poruka` (
  `IdP` int NOT NULL AUTO_INCREMENT,
  `Tekst` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `DatumVreme` datetime NOT NULL,
  `IdPos` int NOT NULL,
  `IdPri` int NOT NULL,
  `Status` int NOT NULL,
  PRIMARY KEY (`IdP`),
  KEY `IdMaj` (`IdPos`,`IdPri`),
  KEY `IdKli` (`IdPri`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `poruka`
--

INSERT INTO `poruka` (`IdP`, `Tekst`, `DatumVreme`, `IdPos`, `IdPri`, `Status`) VALUES
(1, 'desi dulou', '2023-06-04 19:48:45', 32, 29, 2),
(2, 'e evo buraz', '2023-06-04 19:51:39', 29, 32, 2),
(3, 'desi boro', '2023-06-04 20:11:18', 57, 26, 0),
(4, 'sta ima, mozes li mi opraviti sporet?', '2023-06-05 00:47:11', 32, 29, 2),
(5, 'mogu samo mi reci kad ti odgovara?', '2023-06-05 00:57:20', 29, 32, 2),
(6, 'poruka', '2023-06-05 01:01:01', 47, 29, 2),
(7, 'poruka', '2023-06-05 01:01:03', 47, 29, 2),
(8, 'poruka', '2023-06-05 01:01:06', 47, 29, 2),
(9, 'poruka1', '2023-06-05 01:01:25', 43, 29, 2),
(10, 'poruka1', '2023-06-05 01:01:27', 43, 29, 2),
(11, 'poruka1', '2023-06-05 01:01:29', 43, 29, 2),
(12, 'poruka2', '2023-06-05 01:01:51', 46, 29, 1),
(13, 'poruka2', '2023-06-05 01:01:52', 46, 29, 1),
(14, 'poruka2', '2023-06-05 01:01:54', 46, 29, 1),
(15, 'poruka3', '2023-06-05 01:03:06', 45, 29, 2),
(16, 'poruka3', '2023-06-05 01:03:08', 45, 29, 2),
(17, 'poruka3', '2023-06-05 01:03:10', 45, 29, 2),
(18, 'desi fico', '2023-06-05 01:04:38', 29, 43, 0),
(19, 'proba', '2023-06-05 01:11:31', 29, 32, 0),
(20, 'proba', '2023-06-05 01:14:20', 29, 47, 0),
(21, 'proba', '2023-06-05 03:14:23', 29, 43, 0);

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
  `Tekst` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `DatumVreme` datetime NOT NULL,
  PRIMARY KEY (`IdKli`,`IdMaj`),
  KEY `IdMaj` (`IdMaj`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `recenzija`
--

INSERT INTO `recenzija` (`IdKli`, `IdMaj`, `Tekst`, `DatumVreme`) VALUES
(43, 26, '', '2023-06-01 21:29:59'),
(43, 28, 'Sve pohvale. Svaka cast. Bravo. Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.Bravo.', '2023-06-01 21:23:57'),
(43, 29, '', '2023-06-01 21:35:52'),
(43, 30, '', '2023-06-01 21:33:49'),
(43, 32, 'NE zna nista.\r\n', '2023-06-01 21:35:25'),
(43, 33, '', '2023-06-02 00:03:22'),
(43, 34, '', '2023-06-01 21:42:19'),
(43, 36, '', '2023-06-02 00:00:29'),
(43, 39, '', '2023-06-02 00:03:31'),
(43, 40, '', '2023-06-02 00:14:08'),
(44, 29, '', '2023-06-02 00:46:07'),
(45, 26, '', '2023-06-01 21:12:59'),
(45, 27, '', '2023-06-01 21:13:06'),
(45, 28, '', '2023-06-01 21:13:13'),
(45, 29, '', '2023-06-01 21:13:20'),
(45, 30, '', '2023-06-01 21:13:27'),
(45, 31, '', '2023-06-01 21:13:36'),
(45, 32, '', '2023-06-01 21:13:45'),
(45, 33, '', '2023-06-01 21:14:07'),
(45, 34, '', '2023-06-01 21:14:14'),
(45, 35, '', '2023-06-01 21:14:58'),
(45, 36, '', '2023-06-01 21:15:06'),
(45, 37, '', '2023-06-01 21:15:16'),
(45, 38, '', '2023-06-01 21:15:24'),
(46, 29, 'Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, bravo, svaka cast!Sjajno, brav', '2023-06-03 15:44:47'),
(47, 26, 'sve pohvale', '2023-06-01 21:00:09'),
(47, 27, '', '2023-06-01 21:04:24'),
(47, 28, 'Pravi automehanicar. Radi svoj posao s ljubavlju. Sve preporuke.', '2023-06-01 21:03:48'),
(47, 29, '', '2023-06-01 21:04:32'),
(47, 30, 'dobar zna matu\r\n', '2023-06-01 21:03:02'),
(47, 31, 'jeftin, ali nema pojma', '2023-06-01 21:02:12'),
(47, 32, '', '2023-06-01 21:04:43'),
(47, 33, '', '2023-06-01 21:05:04'),
(47, 34, '', '2023-06-01 21:04:53'),
(47, 35, '', '2023-06-01 21:05:20'),
(47, 36, '', '2023-06-01 21:05:36'),
(47, 37, '', '2023-06-01 21:05:46'),
(47, 38, '', '2023-06-01 21:05:28'),
(48, 26, '', '2023-06-01 20:47:48'),
(48, 27, '', '2023-06-01 21:06:23'),
(48, 28, '', '2023-06-01 21:06:31'),
(48, 29, '', '2023-06-01 21:06:45'),
(48, 30, '', '2023-06-01 21:06:54'),
(48, 31, '', '2023-06-01 21:07:02'),
(48, 32, '', '2023-06-01 21:07:10'),
(48, 33, '', '2023-06-01 21:07:17'),
(48, 34, '', '2023-06-01 21:07:25'),
(48, 35, '', '2023-06-01 21:07:50'),
(48, 36, '', '2023-06-01 21:07:59'),
(48, 37, '', '2023-06-01 21:08:07'),
(48, 38, '', '2023-06-01 21:08:15'),
(50, 29, 'Najbolji je.', '2023-06-03 16:49:19'),
(51, 29, 'bravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravo', '2023-06-03 16:50:13'),
(52, 29, 'bbravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravooobravoooravooo', '2023-06-03 16:51:07'),
(53, 29, '', '2023-06-03 16:51:48'),
(54, 29, '', '2023-06-03 16:52:22'),
(55, 29, '', '2023-06-03 19:00:30'),
(56, 29, 'bravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravobravo', '2023-06-03 19:01:32'),
(57, 28, 'Sve dodbro odradio.', '2023-06-04 20:13:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

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
(48, 'Branko', 'Majstorović', 'branko@gmail.com', 'tast', 'tast123', 25, NULL, 'K'),
(49, 'Miloš', 'Miladinović', 'losmi@gmail.com', 'losmi', 'losmi123', 24, NULL, 'M'),
(50, 'test1', 'test1', 'test1@gmail.com', 'test1', 'test123', 27, NULL, 'K'),
(51, 'test2', 'test2', 'test2@gmail.com', 'test2', 'test123', 27, NULL, 'K'),
(52, 'test3', 'test3', 'test3@gmail.com', 'test3', 'test123', 17, NULL, 'K'),
(53, 'test4', 'test4', 'test4@gmail.com', 'test4', 'test123', 18, NULL, 'K'),
(54, 'test5', 'test5', 'test5@gmail.com', 'test5', 'test123', 21, NULL, 'K'),
(55, 'test6', 'test6', 'test6@gmail.com', 'test6', 'test123', 23, NULL, 'K'),
(56, 'test7', 'test7', 'test7@gmail.com', 'test7', 'test123', 22, NULL, 'K'),
(57, 'Zoran', 'Riboskic', 'zoki@gmail.com', 'zoki', 'zoki123', 9, NULL, 'K');

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
(48, '+381-62-468-313'),
(49, '+381-62-468-313'),
(50, '+381-62-468-313'),
(51, '+381-62-468-313'),
(52, '+381-62-468-313'),
(53, '+381-62-468-313'),
(54, '+381-62-468-313'),
(55, '+381-62-468-313'),
(56, '+381-62-468-313'),
(57, '+381-65-956-292');

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

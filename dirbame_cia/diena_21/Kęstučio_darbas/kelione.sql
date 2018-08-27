-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 27, 2018 at 12:59 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelione`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontaktai`
--

CREATE TABLE `kontaktai` (
  `registracija` int(11) NOT NULL,
  `E-paštas` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Vardas` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Adresas` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Kalnų-kurorto-adresas` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Miestas` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Šalis` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Pašto-kodas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `kontaktai`
--

INSERT INTO `kontaktai` (`registracija`, `E-paštas`, `Vardas`, `Adresas`, `Kalnų-kurorto-adresas`, `Miestas`, `Šalis`, `Pašto-kodas`) VALUES
(1, 'djkestutis@yahoo.com', 'Kestutis', 'Kaunas', 'Kazkur alpese', 'alpiu Miestas', 'Svecarija', 45821),
(2, 'djkestutis@yahoo.com', 'Jonas', 'Vilnius', 'Aliaska', 'Keiptaunas', 'Nenustatyta', 458264);

-- --------------------------------------------------------

--
-- Table structure for table `meniu`
--

CREATE TABLE `meniu` (
  `meniu_ID` int(11) NOT NULL,
  `pavadinimas` varchar(50) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `meniu`
--

INSERT INTO `meniu` (`meniu_ID`, `pavadinimas`) VALUES
(1, 'Namai'),
(2, 'Kelionės'),
(3, 'Kontaktai');

-- --------------------------------------------------------

--
-- Table structure for table `pirkeju`
--

CREATE TABLE `pirkeju` (
  `vartotojo id` int(11) NOT NULL,
  `vartotojo_vardas` varchar(50) COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `vartotojo_pavardė` varchar(50) COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `tefefonas` varchar(20) COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `e_pastas` varchar(50) COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `komentaras` mediumtext COLLATE utf8mb4_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_lithuanian_ci;

--
-- Dumping data for table `pirkeju`
--

INSERT INTO `pirkeju` (`vartotojo id`, `vartotojo_vardas`, `vartotojo_pavardė`, `tefefonas`, `e_pastas`, `komentaras`) VALUES
(52, 'Žaneta', ' Pakalnutė', '0', '', ''),
(53, 'Donata', ' Testuotojas', '0', '', ''),
(54, 'Žaneta', 'Pakalnutė', '0', '', ''),
(55, 'Žaneta', 'Morkevičius', '0', '', 'Noriu pakeliauti'),
(57, 'Žaneta', 'Testuotojas', '', 'djkestutis@yahoo.com', 'Noriu pakeliauti'),
(58, 'Kęstutis', 'Morkevičius', '', 'djkestutis@yahoo.com', 'Noriu pakeliauti'),
(59, 'keliautojas', 'Testuotojas', '', 'djkestutis@yahoo.com', 'Noriu pakeliauti'),
(60, 'Žibutė', 'Pakalnutė', '', 'djkestutis@yahoo.com', 'Noriu pakeliauti'),
(61, 'Oliveris', 'Gustas', '', 'djkestutis@yahoo.com', 'Noriu pakeliauti'),
(62, 'Oliveris', 'Gustas', '', 'djkestutis@yahoo.com', 'Noriu pakeliauti'),
(63, 'Oliveris', 'Gustas', '', 'djkestutis@yahoo.com', 'Noriu pakeliauti'),
(64, 'Oliveris', 'Gustas', '', 'djkestutis@yahoo.com', 'Noriu pakeliauti'),
(65, 'Oliveris', 'Gustas', '', 'djkestutis@yahoo.com', 'Noriu pakeliauti'),
(66, 'Oliveris', 'Gustas', '', 'djkestutis@yahoo.com', 'Noriu pakeliauti'),
(67, 'Oliveris', 'Gustas', '', 'djkestutis@yahoo.com', 'Noriu pakeliauti'),
(68, 'Žaneta', 'Pakalnutė', '', 'djkestutis@yahoo.com', 'Noriu pakeliauti'),
(69, 'Žaneta', 'Pakalnutė', '', 'djkestutis@yahoo.com', 'Noriu pakeliauti'),
(70, 'Žaneta', 'Pakalnutė', '', 'djkestutis@yahoo.com', 'Noriu pakeliauti'),
(71, '', '', '', '', ''),
(72, '', '', '', '', ''),
(73, '', '', '', '', ''),
(74, '', '', '', '', ''),
(75, '', '', '', '', ''),
(76, 'Žaneta', 'Pakalnutė', '', 'djkestutis@yahoo.com', 'Noriu pakeliauti'),
(77, 'Žaneta', 'Pakalnutė', '', 'djkestutis@yahoo.com', 'Noriu pakeliauti'),
(78, '', '', '', '', ''),
(79, 'Žaneta', 'Pakalnutė', '', 'djkestutis@yahoo.com', 'Noriu pakeliauti'),
(80, 'Jonas', 'Vasiliauskas', '', 'djkestutis@yahoo.com', 'Noriu pakeliauti'),
(81, 'Kestutis', 'Morkevicius', '', 'djkestutis@yahoo.com', 'noriu pamatyti kalnus'),
(82, 'Kestutis', 'Morkevicius', '', 'djkestutis@yahoo.com', 'noriu pamatyti kalnus'),
(83, 'Kestutis', 'Morkevicius', '', 'djkestutis@yahoo.com', 'noriu pamatyti kalnus'),
(84, 'Kestutis', 'Morkevicius', '', 'djkestutis@yahoo.com', 'noriu pamatyti kalnus'),
(85, 'Kestutis', 'Morkevicius', '', 'djkestutis@yahoo.com', 'noriu pamatyti kalnus'),
(86, 'Kestutis', 'Morkevicius', '', 'djkestutis@yahoo.com', 'noriu pamatyti kalnus'),
(87, 'Jonas', 'Keliauninkas', '', 'jonas@yahoo.com', 'pabusiu kalnuose'),
(88, '', '', '', '', ''),
(89, 'Antanas', 'Keliautojas', '', 'antanas@keliautojas.yahoo.com', 'Turizmas'),
(90, 'Antanas', 'Keliautojas', '', 'antanas@keliautojas.yahoo.com', 'Turizmas'),
(91, 'Jurgita', 'Turiste', '', 'kazkoks@yahoo.com', 'Daug keliauju'),
(92, '', '', '', '', ''),
(93, '', '', '', '', ''),
(94, '', '', '', '', ''),
(95, 'Juozukas', 'Pakalnis', '', 'nesvarbu@yahoo.com', 'Pirma kelione'),
(96, 'Donatas', 'Pakalnis', '', 'nesvarbu@yahoo.com', 'Nemėgstu būti namuose.'),
(97, '', '', '', '', ''),
(98, 'Testuotojas', 'Testas', '', 'nezinomas@yahoo.com', 'keliones');

-- --------------------------------------------------------

--
-- Table structure for table `viežbučių`
--

CREATE TABLE `viežbučių` (
  `Viežbučio_id` int(11) NOT NULL,
  `Viežbučio_pavadinimas` varchar(50) COLLATE utf8_lithuanian_ci NOT NULL,
  `aprašymas` varchar(400) COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `viežbučių`
--

INSERT INTO `viežbučių` (`Viežbučio_id`, `Viežbučio_pavadinimas`, `aprašymas`) VALUES
(1, 'Karpatai', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.'),
(2, 'Kalifornijos kalnai', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.'),
(3, 'Islandijos kalnai', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.'),
(4, 'Alpės ', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontaktai`
--
ALTER TABLE `kontaktai`
  ADD PRIMARY KEY (`registracija`);

--
-- Indexes for table `meniu`
--
ALTER TABLE `meniu`
  ADD PRIMARY KEY (`meniu_ID`);

--
-- Indexes for table `pirkeju`
--
ALTER TABLE `pirkeju`
  ADD PRIMARY KEY (`vartotojo id`);

--
-- Indexes for table `viežbučių`
--
ALTER TABLE `viežbučių`
  ADD PRIMARY KEY (`Viežbučio_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontaktai`
--
ALTER TABLE `kontaktai`
  MODIFY `registracija` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `meniu`
--
ALTER TABLE `meniu`
  MODIFY `meniu_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pirkeju`
--
ALTER TABLE `pirkeju`
  MODIFY `vartotojo id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT for table `viežbučių`
--
ALTER TABLE `viežbučių`
  MODIFY `Viežbučio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

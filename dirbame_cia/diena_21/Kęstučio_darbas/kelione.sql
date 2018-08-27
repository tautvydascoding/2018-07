-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018 m. Rgp 26 d. 17:31
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Sukurta duomenų struktūra lentelei `meniu`
--

CREATE TABLE `meniu` (
  `meniu_ID` int(11) NOT NULL,
  `pavadinimas` varchar(50) COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Sukurta duomenų kopija lentelei `meniu`
--

INSERT INTO `meniu` (`meniu_ID`, `pavadinimas`) VALUES
(1, 'Namai'),
(2, 'Kelionės'),
(3, 'Kontaktai');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `pirkėjų`
--

CREATE TABLE `pirkėjų` (
  `vartotojo id` int(11) NOT NULL,
  `vartotojo_vardas` varchar(50) COLLATE utf8_lithuanian_ci NOT NULL,
  `vartotojo_pavardė` varchar(50) COLLATE utf8_lithuanian_ci NOT NULL,
  `tefefonas` varchar(20) COLLATE utf8_lithuanian_ci NOT NULL,
  `e_pastas` varchar(50) COLLATE utf8_lithuanian_ci NOT NULL,
  `komentaras` text COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Sukurta duomenų kopija lentelei `pirkėjų`
--

INSERT INTO `pirkėjų` (`vartotojo id`, `vartotojo_vardas`, `vartotojo_pavardė`, `tefefonas`, `e_pastas`, `komentaras`) VALUES
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
(79, 'Žaneta', 'Pakalnutė', '', 'djkestutis@yahoo.com', 'Noriu pakeliauti');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `viežbučių`
--

CREATE TABLE `viežbučių` (
  `Viežbučio_id` int(11) NOT NULL,
  `Viežbučio_pavadinimas` varchar(50) COLLATE utf8_lithuanian_ci NOT NULL,
  `aprašymas` varchar(400) COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Sukurta duomenų kopija lentelei `viežbučių`
--

INSERT INTO `viežbučių` (`Viežbučio_id`, `Viežbučio_pavadinimas`, `aprašymas`) VALUES
(1, 'Karpatai', 'Some quick example text to build on the card title and make up the bulk of the card''s content.'),
(2, 'Kalifornijos kalnai', 'Some quick example text to build on the card title and make up the bulk of the card''s content.'),
(3, 'Islandijos kalnai', 'Some quick example text to build on the card title and make up the bulk of the card''s content.'),
(4, 'Alpės ', 'Some quick example text to build on the card title and make up the bulk of the card''s content.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meniu`
--
ALTER TABLE `meniu`
  ADD PRIMARY KEY (`meniu_ID`);

--
-- Indexes for table `pirkėjų`
--
ALTER TABLE `pirkėjų`
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
-- AUTO_INCREMENT for table `meniu`
--
ALTER TABLE `meniu`
  MODIFY `meniu_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pirkėjų`
--
ALTER TABLE `pirkėjų`
  MODIFY `vartotojo id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `viežbučių`
--
ALTER TABLE `viežbučių`
  MODIFY `Viežbučio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

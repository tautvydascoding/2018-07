-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018 m. Rgp 23 d. 19:39
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelione`
--
CREATE DATABASE IF NOT EXISTS `kelione` DEFAULT CHARACTER SET utf8 COLLATE utf8_lithuanian_ci;
USE `kelione`;

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `pirkimų lentelė`
--

CREATE TABLE `pirkimų lentelė` (
  `pirkimo id` int(11) NOT NULL,
  `data` date NOT NULL,
  `kaina` int(11) NOT NULL,
  `vairtotojo id` int(11) NOT NULL,
  `viežbučio pavadinimas` varchar(50) COLLATE utf8_lithuanian_ci NOT NULL,
  `vartotojo vardas` varchar(50) COLLATE utf8_lithuanian_ci NOT NULL,
  `vartotojo pavardė` varchar(50) COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `pirkėjų lentelė`
--

CREATE TABLE `pirkėjų lentelė` (
  `vartotojo id` int(11) NOT NULL,
  `vartotojo vardas` varchar(50) COLLATE utf8_lithuanian_ci NOT NULL,
  `vartotojo pavardė` varchar(50) COLLATE utf8_lithuanian_ci NOT NULL,
  `pirkimo id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `viežbučių lentelė`
--

CREATE TABLE `viežbučių lentelė` (
  `Viežbučio id` int(11) NOT NULL,
  `Viežbučio pavadinimas` varchar(50) COLLATE utf8_lithuanian_ci NOT NULL,
  `kaina parai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pirkimų lentelė`
--
ALTER TABLE `pirkimų lentelė`
  ADD PRIMARY KEY (`pirkimo id`);

--
-- Indexes for table `pirkėjų lentelė`
--
ALTER TABLE `pirkėjų lentelė`
  ADD PRIMARY KEY (`vartotojo id`);

--
-- Indexes for table `viežbučių lentelė`
--
ALTER TABLE `viežbučių lentelė`
  ADD PRIMARY KEY (`Viežbučio id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pirkimų lentelė`
--
ALTER TABLE `pirkimų lentelė`
  MODIFY `pirkimo id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pirkėjų lentelė`
--
ALTER TABLE `pirkėjų lentelė`
  MODIFY `vartotojo id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `viežbučių lentelė`
--
ALTER TABLE `viežbučių lentelė`
  MODIFY `Viežbučio id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

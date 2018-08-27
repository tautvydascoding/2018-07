-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 26, 2018 at 07:32 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projektas`
--
CREATE DATABASE IF NOT EXISTS `projektas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projektas`;

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL,
  `pozicija` int(6) NOT NULL,
  `prekesid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`id`, `name`, `pozicija`, `prekesid`) VALUES
(1, 'preke1.jpg', 1, 1),
(2, 'preke2.jpg', 2, 2),
(3, 'preke3.jpg', 3, 3),
(4, 'preke4.jpg', 4, 4),
(5, 'preke5.jpg', 0, 5),
(6, 'preke-1.1.jpg', 0, 1),
(7, 'preke-1.2.jpg', 0, 1),
(10, 'preke-2.1.jpg', 0, 2),
(11, 'preke-2.2.jpg', 0, 2),
(12, 'preke-3.1.jpg', 0, 3),
(13, 'preke-3.2.jpg', 0, 3),
(14, 'preke-4.1.jpg', 0, 4),
(15, 'preke-4.2.jpg', 0, 4),
(16, 'preke-5.1.jpg', 0, 5),
(17, 'preke-5.2.jpg', 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', ''),
(2, 'admin', 'admin'),
(3, 'admin', ''),
(4, 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `pranesimai`
--

CREATE TABLE `pranesimai` (
  `id` int(10) UNSIGNED NOT NULL,
  `vardas` varchar(60) NOT NULL,
  `tema` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pranesimas` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uzsakymai`
--

CREATE TABLE `uzsakymai` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `email` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `postalcode` varchar(10) NOT NULL,
  `phone` int(11) NOT NULL,
  `comments` varchar(200) NOT NULL,
  `prekesid` int(11) NOT NULL,
  `patvirtinta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visosprekes`
--

CREATE TABLE `visosprekes` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(60) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` float DEFAULT NULL,
  `kiekis` int(11) DEFAULT NULL,
  `pozicija` int(11) DEFAULT NULL,
  `aprasymas` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visosprekes`
--

INSERT INTO `visosprekes` (`id`, `link`, `name`, `price`, `kiekis`, `pozicija`, `aprasymas`) VALUES
(1, '', 'Beelink GT1 Ultimate', 64.57, 5, 1, 'Testuojam ar viskas gerai veikia.'),
(2, 'preke-2.php', 'Alfawise H96 Pro+', 64.81, 2, 2, 'Preke 2 aparasymas, testuojam ar viskas gerai veikia. Jeigu kazkas blogai veiks mes sutvarkysime.'),
(3, 'preke-3.php', 'Samsung 850 PRO 256GB', 156.69, 5, 3, 'Preke 3 aparasymas, testuojam ar viskas gerai veikia. Jeigu kazkas blogai veiks mes sutvarkysime.'),
(4, 'preke-4.php', 'Alfawise X5 Mini PC', 78.34, 5, 4, 'Preke 4 aparasymas, testuojam ar viskas gerai veikia. Jeigu kazkas blogai veiks mes sutvarkysime.'),
(5, 'preke-top.php', 'Xiaomi Mi TV Box', 56.58, 5, 0, 'Preke 5 aparasymas, testuojam ar viskas gerai veikia. Jeigu kazkas blogai veiks mes sutvarkysime.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pranesimai`
--
ALTER TABLE `pranesimai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uzsakymai`
--
ALTER TABLE `uzsakymai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visosprekes`
--
ALTER TABLE `visosprekes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pranesimai`
--
ALTER TABLE `pranesimai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `uzsakymai`
--
ALTER TABLE `uzsakymai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `visosprekes`
--
ALTER TABLE `visosprekes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

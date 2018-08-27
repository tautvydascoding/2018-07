-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 27, 2018 at 12:35 PM
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
-- Table structure for table `parametrai`
--

CREATE TABLE `parametrai` (
  `id` int(10) UNSIGNED NOT NULL,
  `parametrai` varchar(60) NOT NULL,
  `Duomenys` varchar(100) NOT NULL,
  `prekesid` int(11) NOT NULL,
  `pozicija` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parametrai`
--

INSERT INTO `parametrai` (`id`, `parametrai`, `Duomenys`, `prekesid`, `pozicija`) VALUES
(1, 'RAM', '3GB', 1, 0),
(2, 'Procesorius', 'Amlogic S912 2.0GHz', 1, 0),
(3, 'Atmintis', '32G ROM', 1, 0),
(4, 'wifi', 'Integruotas', 1, 0),
(5, 'RAM', '2GB', 2, 0),
(6, 'Procesorius', 'Amlogic S912 2.0GHz, Octa Core', 2, 0),
(7, 'Atmintis', '16G ROM', 2, 0),
(8, 'wifi', 'Integruotas', 2, 0),
(10, 'Modelis', '850 PRO', 3, 0),
(11, 'External Interface', 'SATA 3', 3, 0),
(12, 'Supporting Max. Hard Drive Capacity', '256GB', 3, 0),
(13, 'Read Speed', '550MB/s', 3, 0),
(14, 'RAM', '2GB', 4, 0),
(15, 'Procesorius', 'Intel Atom X5-Z8350', 4, 0),
(16, 'Atmintis', '32G ROM', 4, 0),
(17, 'wifi', 'Integruotas', 4, 0),
(18, 'RAM', '2GB', 5, 0),
(19, 'Procesorius', 'Cortex A53 2.0GHz, Quad Core', 5, 0),
(20, 'Atmintis', '8G ROM', 5, 0),
(21, 'wifi', 'Integruotas', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pranesimai`
--

CREATE TABLE `pranesimai` (
  `id` int(10) UNSIGNED NOT NULL,
  `vardas` varchar(60) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tema` varchar(100) NOT NULL,
  `pranesimas` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pranesimai`
--

INSERT INTO `pranesimai` (`id`, `vardas`, `email`, `tema`, `pranesimas`) VALUES
(3, 'tetsas', 'tets@aaaa.lt', 'kamsfk', 'kjnaksmfkals ajsnfk ajksf\r\n');

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

--
-- Dumping data for table `uzsakymai`
--

INSERT INTO `uzsakymai` (`id`, `name`, `lname`, `email`, `address`, `postalcode`, `phone`, `comments`, `prekesid`, `patvirtinta`) VALUES
(1, 'gvidas', 'ulozevicius', 'gvidas.ulozevicius@gmail.com', 'Kazkokia g. 10, Kaunas', '2154', 2147483647, '', 2, 0),
(2, 'Testas', 'Testenis', 'bulvesdykai@gmail.com', 'Kazkokia g. 10, Kaunas', '21515', 2147483647, '', 1, 0),
(3, 'vardenis', 'pavardenis', 'bulvesdykai@gmail.com', 'Kazio g. 19', '21588', 2147483647, '', 2, 0);

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
(1, '', 'Beelink GT1 Ultimate', 64.57, 5, 1, 'The Beelink GT1 Ultimate featuring the latest processor. It is equipped with the Amlogic S912 CPU which enables you to have a smooth entertainment experience. It also has a 3D noise reduction filter.'),
(2, '', 'Alfawise H96 Pro+', 64.81, 2, 2, 'PriedÄ—lÄ¯ paprasta pajungti ir juo naudotis. Vartotojo sÄ…saja ir valdymas aiÅ¡kiai suprantamas. Tereikia Ä¯renginÄ¯ pajungti Ä¯ maitinimo lizdÄ…, pajungti prie televizoriaus HDMI laidu, bei prijungti interneto kabelÄ¯ arba WI-FI belaidÅ¾iu ryÅ¡iu.'),
(3, '', 'Samsung 850 PRO 256GB', 156.69, 5, 3, 'The Samsung 850 PRO SSD redefines storage with the worldâ€™s first drive based on 3D VNAND flash, offering exceptional read/write performance, reliability and power management efficiency. The 850 Pro delivers up to 2x the speed, density and endurance of conventional flash. The next leading SSD for performance, endurance and energy efficiency.'),
(4, '', 'Alfawise X5 Mini PC', 78.34, 5, 4, 'Alfawise X5 adopts latest Intel Atom x5-Z8350 ( 2M Cache, up to 1.92 GHz ) CPU, and Intel HD Graphics 400 processor, enable you to get your favorite shows and movies fast, with smooth and responsive navigation and Apps that launch quickly. Support Windows 10 and Android 5.1 dual OS, which can meet your needs perfectly, not only entertainment but also office work. The Alfawise X5 is your best partner!'),
(5, '', 'Xiaomi Mi TV Box', 56.58, 5, 0, 'Connect to a world of content and entertainment at home with Mi Box. It runs on the latest Android TV 6.0 which is easy to use, supports voice controls and Google CastTM. Catch your favorite TV shows, play games, watch the news or switch to radio. Mi Box also recommends videos based on your personal Youtube and Google Play preferences!d output using the embedded platform sXP (smart Extendable Platform.). Go from small screen to big with a single tap.');

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
-- Indexes for table `parametrai`
--
ALTER TABLE `parametrai`
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
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `parametrai`
--
ALTER TABLE `parametrai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `pranesimai`
--
ALTER TABLE `pranesimai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `uzsakymai`
--
ALTER TABLE `uzsakymai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `visosprekes`
--
ALTER TABLE `visosprekes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 2018 m. Rgp 27 d. 13:50
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projektas14`
--
CREATE DATABASE IF NOT EXISTS `projektas14` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projektas14`;

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `bets`
--

CREATE TABLE `bets` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bet_amount` float NOT NULL,
  `final_odd` float NOT NULL,
  `result` tinyint(1) DEFAULT NULL,
  `odd_1` float NOT NULL,
  `odd_2` float NOT NULL,
  `odd_3` float NOT NULL,
  `odd_4` float NOT NULL,
  `odd_5` float NOT NULL,
  `match_1_id` int(11) NOT NULL,
  `match_2_id` int(11) NOT NULL,
  `match_3_id` int(11) NOT NULL,
  `match_4_id` int(11) NOT NULL,
  `match_5_id` int(11) NOT NULL,
  `match_1_final` varchar(1) NOT NULL,
  `match_2_final` varchar(1) NOT NULL,
  `match_3_final` varchar(1) NOT NULL,
  `match_4_final` varchar(1) NOT NULL,
  `match_5_final` varchar(1) NOT NULL,
  `match_1_end` varchar(1) DEFAULT NULL,
  `match_2_end` varchar(1) DEFAULT NULL,
  `match_3_end` varchar(1) DEFAULT NULL,
  `match_4_end` varchar(1) DEFAULT NULL,
  `match_5_end` varchar(1) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `bets`
--

INSERT INTO `bets` (`id`, `user_id`, `bet_amount`, `final_odd`, `result`, `odd_1`, `odd_2`, `odd_3`, `odd_4`, `odd_5`, `match_1_id`, `match_2_id`, `match_3_id`, `match_4_id`, `match_5_id`, `match_1_final`, `match_2_final`, `match_3_final`, `match_4_final`, `match_5_final`, `match_1_end`, `match_2_end`, `match_3_end`, `match_4_end`, `match_5_end`, `date`) VALUES
(1, 1, 5, 12.57, 0, 2.05, 6.1, 0, 0, 0, 1, 4, 0, 0, 0, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(2, 4, 5, 4.19, 0, 3.3, 1.27, 0, 0, 0, 10, 1, 0, 0, 0, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(3, 4, 1, 125, 0, 12.5, 10, 0, 0, 0, 1, 21, 0, 0, 0, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(4, 4, 3, 12.38, 0, 3.75, 3.3, 0, 0, 0, 9, 10, 0, 0, 0, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(5, 4, 3, 2.3, 0, 1.67, 1.38, 0, 0, 0, 24, 21, 0, 0, 0, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(6, 4, 2, 12.38, 0, 3.3, 3.75, 0, 0, 0, 10, 9, 0, 0, 0, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(7, 4, 1, 8.28, 0, 1.38, 6, 0, 0, 0, 21, 24, 0, 0, 0, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(8, 4, 5, 41.25, 0, 12.5, 3.3, 0, 0, 0, 1, 10, 0, 0, 0, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(9, 4, 5, 4.19, 0, 1.27, 3.3, 0, 0, 0, 1, 10, 0, 0, 0, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(10, 4, 5, 41.25, 0, 12.5, 3.3, 0, 0, 0, 1, 10, 0, 0, 0, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(11, 4, 2, 17.25, 0, 12.5, 1.38, 0, 0, 0, 1, 21, 0, 0, 0, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(12, 4, 2, 41.25, 0, 12.5, 3.3, 0, 0, 0, 1, 10, 0, 0, 0, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(13, 4, 5, 4.76, 0, 1.27, 3.75, 0, 0, 0, 1, 9, 0, 0, 0, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(14, 4, 2, 41.25, 0, 12.5, 3.3, 0, 0, 0, 1, 10, 0, 0, 0, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(15, 4, 1.2, 2.48, 0, 2.48, 0, 0, 0, 0, 10, 0, 0, 0, 0, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(16, 4, 1.25, 6, 0, 6, 0, 0, 0, 0, 24, 0, 0, 0, 0, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(17, 4, 16, 2.3, 0, 1.67, 1.38, 0, 0, 0, 24, 21, 0, 0, 0, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(18, 4, 7, 9.46, 0, 1.71, 2.66, 2.08, 0, 0, 4, 2, 26, 0, 0, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(19, 4, 1, 2.6, 0, 2.6, 0, 0, 0, 0, 8, 0, 0, 0, 0, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '2018-08-26 13:42:32'),
(20, 4, 2, 4.55, NULL, 1.71, 2.66, 0, 0, 0, 4, 2, 0, 0, 0, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '2018-08-26 13:48:20'),
(21, 4, 1, 1.71, NULL, 1.71, 0, 0, 0, 0, 4, 0, 0, 0, 0, 'a', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '2018-08-26 14:23:15'),
(22, 4, 1, 2.08, NULL, 2.08, 0, 0, 0, 0, 26, 0, 0, 0, 0, 'h', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '2018-08-26 14:24:17'),
(23, 4, 1, 15.08, NULL, 2.6, 5.8, 0, 0, 0, 8, 4, 0, 0, 0, 'h', 'h', '', '', '', NULL, NULL, NULL, NULL, NULL, '2018-08-26 14:28:55'),
(24, 4, 1, 15.08, NULL, 2.6, 5.8, 0, 0, 0, 8, 4, 0, 0, 0, 'h', 'h', '', '', '', NULL, NULL, NULL, NULL, NULL, '2018-08-26 14:28:58'),
(25, 4, 1, 14.63, NULL, 2.66, 5.5, 0, 0, 0, 2, 11, 0, 0, 0, 'h', 'h', '', '', '', NULL, NULL, NULL, NULL, NULL, '2018-08-27 06:22:07'),
(26, 4, 1, 14.63, NULL, 2.66, 5.5, 0, 0, 0, 3, 11, 0, 0, 0, 'h', 'h', '', '', '', NULL, NULL, NULL, NULL, NULL, '2018-08-27 07:43:32'),
(27, 5, 5, 14.63, NULL, 2.66, 5.5, 0, 0, 0, 2, 11, 0, 0, 0, 'h', 'h', '', '', '', NULL, NULL, NULL, NULL, NULL, '2018-08-27 12:49:25'),
(28, 6, 49, 6.75, NULL, 1.71, 1.57, 2.52, 0, 0, 22, 44, 33, 0, 0, 'h', 'h', 'h', '', '', NULL, NULL, NULL, NULL, NULL, '2018-08-27 13:40:55'),
(29, 6, 1, 447.82, NULL, 2.56, 2.52, 7, 1.71, 5.8, 2, 33, 11, 22, 43, 'h', 'h', 'h', 'h', 'h', NULL, NULL, NULL, NULL, NULL, '2018-08-27 13:43:25');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `leagues`
--

CREATE TABLE `leagues` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `timezone` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `leagues`
--

INSERT INTO `leagues` (`id`, `name`, `country`, `timezone`) VALUES
(1, 'Division 1', 'England', 0),
(2, 'Division 1', 'Italy', 1);

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `matches`
--

CREATE TABLE `matches` (
  `id` int(11) NOT NULL,
  `odd_h` float NOT NULL,
  `odd_x` float NOT NULL,
  `odd_a` float NOT NULL,
  `team_h_id` int(11) NOT NULL,
  `team_a_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `score_h` int(2) DEFAULT NULL,
  `score_a` int(2) DEFAULT NULL,
  `final` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `matches`
--

INSERT INTO `matches` (`id`, `odd_h`, `odd_x`, `odd_a`, `team_h_id`, `team_a_id`, `date`, `time`, `score_h`, `score_a`, `final`) VALUES
(1, 12.5, 7.4, 1.27, 1, 2, '2018-08-25', '11:30:00', 1, 1, 'x'),
(2, 2.56, 3.4, 3.1, 3, 4, '2018-08-27', '19:00:00', NULL, NULL, ''),
(3, 1.38, 5.8, 9.6, 5, 6, '2018-08-25', '14:00:00', 3, 1, 'h'),
(4, 5.8, 4.1, 1.71, 9, 10, '2018-08-26', '15:00:00', 1, 2, 'a'),
(5, 1.19, 8.6, 20, 7, 8, '2018-08-25', '16:30:00', 1, 0, 'h'),
(6, 2.72, 3.55, 2.74, 11, 12, '2018-08-25', '14:00:00', 2, 2, 'x'),
(7, 2.06, 3.4, 4.2, 15, 16, '2018-08-25', '14:00:00', 4, 2, 'h'),
(8, 2.6, 3.3, 3.1, 13, 14, '2018-08-26', '12:30:00', 2, 1, 'h'),
(9, 2.38, 3.1, 3.75, 19, 18, '2018-08-25', '14:00:00', 0, 0, 'x'),
(10, 2.48, 3.3, 3.3, 20, 17, '2018-08-25', '14:00:00', 1, 2, 'a'),
(11, 7, 4.8, 1.51, 17, 7, '2018-09-01', '11:30:00', NULL, NULL, ''),
(12, 2.64, 3.45, 2.9, 6, 1, '2018-09-01', '14:00:00', NULL, NULL, ''),
(13, 5.8, 4, 1.62, 18, 5, '2018-09-02', '12:30:00', NULL, NULL, ''),
(14, 1.3, 6.4, 11.5, 10, 11, '2018-09-01', '14:00:00', NULL, NULL, ''),
(15, 1.13, 11.5, 28, 2, 9, '2018-09-01', '16:30:00', NULL, NULL, ''),
(16, 1.55, 4.2, 7.6, 12, 19, '2018-09-01', '14:00:00', NULL, NULL, ''),
(17, 6.4, 3.7, 1.65, 16, 3, '2018-09-02', '15:00:00', NULL, NULL, ''),
(18, 2.34, 3.35, 3.35, 8, 15, '2018-09-01', '14:00:00', NULL, NULL, ''),
(19, 5.3, 3.95, 1.67, 13, 4, '2018-09-02', '15:00:00', NULL, NULL, ''),
(20, 2.04, 3.45, 4.3, 14, 20, '2018-09-01', '14:00:00', NULL, NULL, ''),
(21, 1.38, 5.3, 10, 21, 22, '2018-08-25', '16:00:00', NULL, NULL, ''),
(22, 1.71, 4, 5.9, 23, 24, '2018-08-27', '18:30:00', NULL, NULL, ''),
(23, 5.5, 4.2, 1.65, 25, 26, '2018-09-02', '18:30:00', NULL, NULL, ''),
(24, 1.67, 3.95, 6, 26, 27, '2018-08-25', '18:30:00', NULL, NULL, ''),
(25, 3.25, 3.2, 2.38, 29, 28, '2018-08-26', '18:30:00', NULL, NULL, ''),
(26, 2.08, 3.35, 4, 30, 31, '2018-08-26', '16:00:00', NULL, NULL, ''),
(27, 1.53, 4.2, 5.8, 32, 33, '2018-08-26', '18:30:00', NULL, NULL, ''),
(28, 2, 3.25, 3.9, 34, 35, '2018-08-26', '18:30:00', NULL, NULL, ''),
(29, 2.3, 3.2, 3.35, 36, 35, '2018-09-02', '18:30:00', NULL, NULL, ''),
(30, 2.58, 3.3, 2.98, 37, 38, '2018-08-26', '18:30:00', NULL, NULL, ''),
(31, 2.24, 3.4, 2.82, 39, 25, '2018-08-26', '18:30:00', NULL, NULL, ''),
(32, 0, 0, 0, 5, 2, '2018-08-01', '15:00:00', 0, 2, 'a'),
(33, 2.52, 3.3, 3.15, 8, 20, '2018-08-28', '18:45:00', NULL, NULL, NULL),
(34, 1.11, 7.2, 24, 2, 15, '2018-09-15', '14:00:00', NULL, NULL, NULL),
(35, 2.74, 3.7, 2.44, 4, 7, '2018-09-15', '11:30:00', NULL, NULL, NULL),
(36, 2.28, 3.15, 2.86, 11, 17, '2018-09-15', '14:00:00', NULL, NULL, NULL),
(37, 1.1, 3.05, 1.27, 13, 3, '2018-09-15', '16:30:00', NULL, NULL, NULL),
(38, 1.61, 3.05, 1.08, 12, 6, '2018-09-16', '15:00:00', NULL, NULL, NULL),
(39, 1.24, 6.4, 14, 22, 29, '2018-09-02', '18:30:00', NULL, NULL, NULL),
(40, 2.04, 3.35, 3.85, 38, 34, '2018-09-02', '18:30:00', NULL, NULL, NULL),
(41, 18.5, 7.6, 1.19, 31, 21, '2018-09-01', '18:30:00', NULL, NULL, NULL),
(42, 1.68, 3.7, 5.4, 33, 30, '2018-09-02', '18:30:00', NULL, NULL, NULL),
(43, 5.8, 3.95, 1.59, 28, 32, '2018-09-01', '16:00:00', NULL, NULL, NULL),
(44, 1.57, 3.85, 5.5, 40, 39, '2018-09-02', '16:00:00', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `league_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `teams`
--

INSERT INTO `teams` (`id`, `name`, `league_id`) VALUES
(1, 'Wolves', 1),
(2, 'Man City', 1),
(3, 'Man Utd', 1),
(4, 'Tottenham', 1),
(5, 'Arsenal', 1),
(6, 'West Ham', 1),
(7, 'Liverpool', 1),
(8, 'Brighton', 1),
(9, 'Newcastle', 1),
(10, 'Chelsea', 1),
(11, 'Bournemouth', 1),
(12, 'Everton', 1),
(13, 'Watford', 1),
(14, 'C Palace', 1),
(15, 'Fulham', 1),
(16, 'Burnley', 1),
(17, 'Leicester', 1),
(18, 'Cardiff', 1),
(19, 'Huddersfield', 1),
(20, 'Southampton', 1),
(21, 'Juventus', 2),
(22, 'Lazio', 2),
(23, 'Roma', 2),
(24, 'Atalanta', 2),
(25, 'Sampdoria', 2),
(26, 'Napoli', 2),
(27, 'AC Milan', 2),
(28, 'Bologna', 2),
(29, 'Frosinone', 2),
(30, 'SPAL', 2),
(31, 'Parma', 2),
(32, 'Inter', 2),
(33, 'Torino', 2),
(34, 'Genoa', 2),
(35, 'Empoli', 2),
(36, 'Chievo', 2),
(37, 'Cagliari', 2),
(38, 'Sassuolo', 2),
(39, 'Udinese', 2),
(40, 'Fiorentina', 2);

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cash` float NOT NULL,
  `date_loggedin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_registered` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `cash`, `date_loggedin`, `date_registered`) VALUES
(2, 'aaaaa1', '$2y$10$GWcjnnVBfzy4L', 'aaaa@aaaa.aa', 50, '2018-08-22 20:55:03', '2018-08-22 20:55:03'),
(3, 'aabaab', '$2y$10$8TsesdOy22GA.', 'aab@aab.aab', 50, '2018-08-23 06:57:59', '2018-08-23 06:57:59'),
(4, 'aacaac', '$2y$10$0D4WuhUOMpXLmt327m/cqeN5iG.a9Eq7LOg2ekIvRrqNTaa9pReuS', 'aac@aac.aac', 0.47, '2018-08-27 06:23:02', '2018-08-23 08:17:24'),
(5, 'ccccc', '$2y$10$KmzFZ.P/h.Cq2tWviztRnOXRMT79KRUFPPX6.V30PMrQnvI67YnkO', 'ccccc@ccccc.cc', 45, '2018-08-27 12:49:25', '2018-08-27 12:48:48'),
(6, 'tautvydas111', '$2y$10$jrV5dQ6uaYn8XzTU9.4kXO70RP1LiM5M/AzJFsQ1G4bcjVXa12mvu', 'tautvydas@tautvydas.lt', 0, '2018-08-27 13:43:25', '2018-08-27 13:39:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bets`
--
ALTER TABLE `bets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leagues`
--
ALTER TABLE `leagues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bets`
--
ALTER TABLE `bets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `leagues`
--
ALTER TABLE `leagues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

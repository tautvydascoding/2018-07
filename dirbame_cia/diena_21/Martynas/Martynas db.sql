-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 27, 2018 at 01:46 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `projektasU`
--
CREATE DATABASE IF NOT EXISTS `projektasU` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `projektasU`;

-- --------------------------------------------------------

--
-- Table structure for table `aboutUsText`
--

CREATE TABLE `aboutUsText` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `article` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aboutUsText`
--

INSERT INTO `aboutUsText` (`id`, `name`, `article`) VALUES
(1, 'Our TEAM!!', 'Mūsų komanda yra nuostabi, šauni ir tiesiog nepakartojama! Mes nuolat visa darome kartu ir tai mus padarė vieninga it kumštis! Jei įsipjauni į vieną pirštą - skaudą visiem pirštam :) '),
(2, 'For best experiance!', 'Va šitoje vietoje turėtų būti kažkoks labai inspiring tekstas apie mūsų komanda.'),
(3, 'Never stop believing!', 'Mūsų komandoje yrta vien genijai! Ne nu rimtai.. ');

-- --------------------------------------------------------

--
-- Table structure for table `caruselIMG`
--

CREATE TABLE `caruselIMG` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `article` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `caruselIMG`
--

INSERT INTO `caruselIMG` (`id`, `name`, `article`) VALUES
(1, '1.jpeg', 'Amazonės upė. Vingiuojanti ir maistu aprūpinanti daug gančių. 2015 m. Kovo 12d. Pietu amerika.'),
(2, '2.jpeg', 'Kopimas į kalnus, 2016 m. Vasario 15d. Alpės, Šiaurės Karolina, JAV'),
(3, '3.jpeg', 'Draugystė Kvailystė :) Kauno Tauro kalnas, 2014 m. Birželio 11 d.'),
(4, '4.jpeg', 'Heloweeeenas prezidentūroje 2014 m. Birželio 11 d.'),
(5, '5.jpeg', ' Skrydis į BALIO sala, 2014 m. Birželio 11 d.'),
(6, '6.jpeg', 'Longboardinimas mūsų kraujyje'),
(7, '7.jpeg', ' Mūsų kolega Jonas(pirmas)'),
(8, '8.jpeg', ' Vėl Jonas, su kolega Tomu'),
(9, '9.jpeg', 'Ilgai užtarnautas poilsis, Kreta, 2018 m. Rugpjūčio 28 d.'),
(11, '10.jpeg', 'Kelione per upe');

-- --------------------------------------------------------

--
-- Table structure for table `duom_info`
--

CREATE TABLE `duom_info` (
  `id` int(11) NOT NULL,
  `vardas` varchar(40) NOT NULL,
  `pavarde` varchar(40) NOT NULL,
  `el_pastas` varchar(30) NOT NULL,
  `tel_nr` int(11) NOT NULL,
  `zinute` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `duom_info`
--

INSERT INTO `duom_info` (`id`, `vardas`, `pavarde`, `el_pastas`, `tel_nr`, `zinute`) VALUES
(34, 'bomzas', 'kibomzas', 'mob@tol.lt', 2223323, 'kaas cia zino'),
(36, 'linas', 'pakas', 'as@as.lt', 232323, 'ka tu cia nori'),
(37, 'linas', 'pakas', 'as@as.lt', 232323, 'ka tu cia nori'),
(38, 'linas', 'pakas', 'as@as.lt', 232323, 'ka tu cia nori'),
(39, 'Martynas', 'Urbonas', '', 2221, ''),
(42, 'Tomulis', 'pupulis', 'aaaa@a.lt', 323232, 'Bandau susisiekti!'),
(43, 'rugpjutis', 'rugpjutiene', 'marko@loko.lt', 3434344, 'Laba diena, testinu rugpjucio 27 diena.'),
(44, 'Martynas', 'Karala', 'mob@tol.lt', 23323, 'Laba diena'),
(45, 'asasas', 'asasas', 'gin@aa.lt', 222, 'laba diena'),
(46, 'asasas', 'asasas', 'gin@aa.lt', 222, 'laba diena'),
(47, 'asasas', 'asasas', 'gin@aa.lt', 222, 'laba diena'),
(48, 'Aurelija', 'Skurlionis', 'mob@tol.lt', 12312321, 'bandau'),
(49, 'Aurelija', 'Karala', 'gin@aa.lt', 23123, 'qwwqd '),
(50, 'Martynas', 'Karala', 'gin@aa.lt', 213123, 'asdsad '),
(51, 'asasa', 'Skurlionis', 'aa@aa.lt', 23123, 'labaaa'),
(52, 'likas', 'palikas', 'kukumaku@kuku.lt', 22222, 'Siunciu'),
(53, 'Martynas', 'Urbonas', 'gin@aa.lt', 2323123, 'Parasau is paskaitos');

-- --------------------------------------------------------

--
-- Table structure for table `galleryIMG`
--

CREATE TABLE `galleryIMG` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galleryIMG`
--

INSERT INTO `galleryIMG` (`id`, `name`) VALUES
(1, 'undoB.jpg'),
(2, 'ag4.jpeg'),
(3, 'ag5.jpeg'),
(4, 'ag6.jpg'),
(5, 'ag8.jpeg'),
(6, 'ag9.jpeg'),
(7, 'ag10.jpeg'),
(8, 'sen.jpeg'),
(9, 'undoBlue.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `HomeText`
--

CREATE TABLE `HomeText` (
  `id` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Subtitle` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `HomeText`
--

INSERT INTO `HomeText` (`id`, `Title`, `Subtitle`) VALUES
(1, 'WELCOME TO  UNDO STUDIJA!', 'A place where all the magic is happening!'),
(3, 'THE UNDO', 'THE STUDIJA');

-- --------------------------------------------------------

--
-- Table structure for table `HQ`
--

CREATE TABLE `HQ` (
  `id` int(11) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` char(200) NOT NULL,
  `phone_nr` int(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `HQ`
--

INSERT INTO `HQ` (`id`, `city`, `address`, `phone_nr`, `email`) VALUES
(1, 'Kaunas', '1430 Grozio gatve, apartamentai 200,LT-3344', 863311899, 'info@undostudija.lt'),
(2, 'Beijing', '112 hépínglù, Apartments 1122,', 1222145555, 'beijing@undostudija.ch'),
(3, 'London', '1430 Long street, apartments 12,11223', 40338633, 'talk@undo.co.uk'),
(4, 'Torronto', '1430 Short street, Hottel 11,11222233', 50338633, 'talkUSA@undo.com');

-- --------------------------------------------------------

--
-- Table structure for table `scIcons`
--

CREATE TABLE `scIcons` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `scIcons`
--

INSERT INTO `scIcons` (`id`, `name`, `title`) VALUES
(1, 'icon ion-logo-facebook', 'Facebook'),
(2, 'icon ion-logo-twitter', 'Twitter'),
(3, 'icon ion-logo-googleplus', 'Googleplus'),
(4, 'icon ion-logo-instagram', 'Instagram'),
(5, 'icon ion-logo-pinterest', 'Pinterest'),
(9, 'icon ion-ios-bicycle', 'dviratininkas'),
(11, 'icon ion-md-airplane', 'lektuvas'),
(17, 'icon ion-ios-umbrella', 'sketis');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `name`) VALUES
(1, 'gl1.jpeg'),
(2, 'gl2.jpeg'),
(3, 'gl3.jpeg'),
(4, 'gl4.jpeg'),
(5, 'gl5.jpeg'),
(6, 'gl6.jpeg'),
(7, 'gl7.jpeg'),
(8, 'gl8.jpeg'),
(9, 'gl9.jpeg'),
(10, 'gl10.jpeg'),
(11, 'gl11.jpeg'),
(12, 'gl12.jpeg'),
(13, 'gl13.jpeg'),
(14, 'gl14.jpeg'),
(15, 'gl15.jpeg'),
(16, 'gl16.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `user_first` varchar(222) NOT NULL,
  `user_last` varchar(222) NOT NULL,
  `user_email` varchar(222) NOT NULL,
  `user_uid` varchar(222) NOT NULL,
  `user_pwd` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`) VALUES
(3, 'Martynas', 'Urbonas', 'marcius117@gmail.com', 'Admin', '$2y$10$dMwyAfA82IXScB1YzL.heO7Mhxn/J4ZwjPAZIaIJOQHU6Z8D6VHQ.'),
(5, 'petras', 'petraitis', 'petro@pet.lt', 'petras', '$2y$10$RnatCPWZMNKUa.4xwNNbJ.hmHWwP32koXFxUGu8fbGcpKwUahwskC'),
(6, 'test', 'testas', 'test@test.lt', 'test', '$2y$10$U/SDF0wDAdoJViwZYWxDre4YQ.0NbYAG3zS13KsUpiS5qN1FzFNNO'),
(8, 'lialia', 'asdd', 'a@a.lt', 'test23', '$2y$10$TluJ3R.moKUeJW2xoou28e.riPWK9I.VJ879tEj8IgoDx0eo5PqmC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutUsText`
--
ALTER TABLE `aboutUsText`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caruselIMG`
--
ALTER TABLE `caruselIMG`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `duom_info`
--
ALTER TABLE `duom_info`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `galleryIMG`
--
ALTER TABLE `galleryIMG`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `HomeText`
--
ALTER TABLE `HomeText`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `HQ`
--
ALTER TABLE `HQ`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scIcons`
--
ALTER TABLE `scIcons`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutUsText`
--
ALTER TABLE `aboutUsText`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `caruselIMG`
--
ALTER TABLE `caruselIMG`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `duom_info`
--
ALTER TABLE `duom_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `galleryIMG`
--
ALTER TABLE `galleryIMG`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `HomeText`
--
ALTER TABLE `HomeText`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `HQ`
--
ALTER TABLE `HQ`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `scIcons`
--
ALTER TABLE `scIcons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

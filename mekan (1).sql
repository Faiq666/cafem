-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2019 at 10:48 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mekan`
--

-- --------------------------------------------------------

--
-- Table structure for table `cafe_join`
--

CREATE TABLE `cafe_join` (
  `id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `location` varchar(255) NOT NULL,
  `number` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cafe_type`
--

CREATE TABLE `cafe_type` (
  `id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_profile` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kabab`
--

CREATE TABLE `kabab` (
  `id` int(11) NOT NULL,
  `tike` int(11) NOT NULL,
  `lule` int(11) NOT NULL,
  `basdirma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL,
  `salat` int(11) NOT NULL,
  `kabab` int(11) NOT NULL,
  `shisha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `place_id`, `salat`, `kabab`, `shisha`) VALUES
(1, 2, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `click` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `cost` int(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id`, `name`, `click`, `type`, `location`, `cost`, `place`, `username`, `password`) VALUES
(1, 'tural', 0, 'diiger', 'atyali', 0, 'ureylerdedir', '', ''),
(2, 'tural', 0, 'diiger', 'atyali', 0, 'ureylerdedir', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `salat`
--

CREATE TABLE `salat` (
  `id` int(11) NOT NULL,
  `paytaxt` int(11) NOT NULL,
  `mimoza` int(11) NOT NULL,
  `sezar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salat`
--

INSERT INTO `salat` (`id`, `paytaxt`, `mimoza`, `sezar`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shisha`
--

CREATE TABLE `shisha` (
  `id` int(11) NOT NULL,
  `caska` int(11) NOT NULL,
  `alma` int(11) NOT NULL,
  `qreypfrut` int(11) NOT NULL,
  `qarpuz` int(11) NOT NULL,
  `ananas` int(11) NOT NULL,
  `yemis` int(11) NOT NULL,
  `piramida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cafe_join`
--
ALTER TABLE `cafe_join`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cafe_type`
--
ALTER TABLE `cafe_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kabab`
--
ALTER TABLE `kabab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salat`
--
ALTER TABLE `salat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cafe_join`
--
ALTER TABLE `cafe_join`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cafe_type`
--
ALTER TABLE `cafe_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kabab`
--
ALTER TABLE `kabab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `salat`
--
ALTER TABLE `salat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

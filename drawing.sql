-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2016 at 11:03 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drawing`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookmarks`
--

CREATE TABLE `bookmarks` (
  `id` int(11) NOT NULL,
  `group` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `sort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookmarks`
--

INSERT INTO `bookmarks` (`id`, `group`, `item_id`, `sort`) VALUES
(1, 3, 1, 1),
(2, 2, 2, 2),
(3, 1, 3, 1),
(4, 4, 4, 3),
(5, 3, 5, 4),
(6, 2, 6, 3),
(7, 1, 7, 4),
(8, 4, 8, 2),
(9, 2, 9, 1),
(10, 3, 10, 3),
(11, 4, 11, 1),
(12, 1, 12, 2),
(13, 4, 13, 4),
(14, 1, 14, 3),
(15, 2, 15, 4),
(16, 3, 16, 2);

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`group_id`, `group_name`) VALUES
(0, 'No Group'),
(1, 'Group A'),
(2, 'Group B'),
(3, 'Group C'),
(4, 'Group D');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `logo` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `pot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `logo`, `name`, `pot`) VALUES
(1, 'persik.gif', 'PERSIK', 3),
(2, 'persepam-mu.gif', 'PERSEPAM MU', 4),
(3, 'perssu-madura-united.gif', 'PERSSU', 3),
(4, 'persekap-kota-pasuruan.gif', 'PERSEKAP', 4),
(5, 'celebest-fc.gif', 'CELEBEST FC', 3),
(6, 'kalteng-putra-fc.gif', 'KALTENG PUTRA', 4),
(7, 'persiraja.gif', 'PERSIRAJA', 1),
(8, 'psps.gif', 'PSPS', 2),
(9, 'persita.gif', 'PERSITA', 1),
(10, 'perserang.gif', 'PERSERANG', 2),
(11, 'psgc.gif', 'PSGC', 1),
(12, 'pscs.gif', 'PSCS', 2),
(13, 'psis.gif', 'PSIS', 1),
(14, 'psim.gif', 'PSIM', 2),
(15, 'pss.gif', 'PSS', 3),
(16, 'martapura-fc.gif', 'MARTAPURA FC', 4);

-- --------------------------------------------------------

--
-- Table structure for table `sort`
--

CREATE TABLE `sort` (
  `sort_id` int(11) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sort`
--

INSERT INTO `sort` (`sort_id`, `value`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookmarks`
--
ALTER TABLE `bookmarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sort`
--
ALTER TABLE `sort`
  ADD PRIMARY KEY (`sort_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookmarks`
--
ALTER TABLE `bookmarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `sort`
--
ALTER TABLE `sort`
  MODIFY `sort_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2017 at 09:03 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `symfony_bussiness`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
`id` int(11) NOT NULL,
  `street1` varchar(255) NOT NULL,
  `street2` varchar(255) NOT NULL,
  `street3` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `postcode` int(11) NOT NULL,
  `timezone` varchar(255) NOT NULL,
  `bussiness_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `street1`, `street2`, `street3`, `city`, `region`, `postcode`, `timezone`, `bussiness_id`) VALUES
(8, 'sdsd', 'ee', 'ee', 'ee', 'ee', 44, '34', 51),
(9, 'sdsd', 'ee', 'ee', 'ee', 'ee', 44, '34', 52),
(10, 'sdsd', 'ee', 'ee', 'ee', 'ee', 44, '34', 53),
(11, 'sdsd', 'ee', 'ee', 'ee', 'ee', 44, '34', 54),
(12, 'sdsd', 'ee', 'ee', 'ee', 'ee', 44, '34', 55),
(13, 'sdsd', 'ee', 'ee', 'ee', 'ee', 44, '34', 56);

-- --------------------------------------------------------

--
-- Table structure for table `bussiness`
--

CREATE TABLE IF NOT EXISTS `bussiness` (
`id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `fein` int(11) NOT NULL,
  `legal_name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `industry` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bussiness`
--

INSERT INTO `bussiness` (`id`, `start_date`, `fein`, `legal_name`, `type`, `industry`) VALUES
(51, '2012-01-01', 12, 'sdsd', 'dsdssdsd', 'sd'),
(52, '2012-01-01', 12, 'sdsd', 'dsdssdsd', 'sd'),
(53, '2012-01-01', 12, 'sdsd', 'dsdssdsd', 'sd'),
(54, '2012-01-01', 12, 'sdsd', 'dsdssdsd', 'sd'),
(55, '2012-01-01', 12, 'sdsd', 'dsdssdsd', 'sd'),
(56, '2012-01-01', 12, 'sdsd', 'dsdssdsd', 'sd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bussiness`
--
ALTER TABLE `bussiness`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `bussiness`
--
ALTER TABLE `bussiness`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

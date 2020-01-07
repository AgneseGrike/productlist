-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 03, 2020 at 12:18 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product_list`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

DROP TABLE IF EXISTS `attributes`;
CREATE TABLE IF NOT EXISTS `attributes` (
  `ID_attribute` int(6) NOT NULL AUTO_INCREMENT,
  `type` varchar(11) NOT NULL,
  PRIMARY KEY (`ID_attribute`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`ID_attribute`, `type`) VALUES
(1, 'DVD'),
(2, 'Book'),
(3, 'Furniture');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `ID_SKU` int(6) NOT NULL AUTO_INCREMENT,
  `SKU` varchar(5) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `attrib` int(1) NOT NULL,
  `value` varchar(11) NOT NULL,
  PRIMARY KEY (`ID_SKU`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID_SKU`, `SKU`, `name`, `price`, `attrib`, `value`) VALUES
(1, 'BS-01', 'Six Of Crows', '20.00', 2, '0.8'),
(2, 'DP-02', 'Parasite', '8.00', 1, '0.2'),
(7, 'FN-03', 'NORDVIKEN', '49.99', 3, '157x117x51');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

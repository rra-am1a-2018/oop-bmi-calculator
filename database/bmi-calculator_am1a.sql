-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 19, 2019 at 07:13 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bmi_calculator_am1a`
--
CREATE DATABASE IF NOT EXISTS `bmi_calculator_am1a` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bmi_calculator_am1a`;

-- --------------------------------------------------------

--
-- Table structure for table `bmi_data`
--

DROP TABLE IF EXISTS `bmi_data`;
CREATE TABLE IF NOT EXISTS `bmi_data` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key for id',
  `firstname` varchar(200) NOT NULL,
  `infix` varchar(50) NOT NULL,
  `lastname` varchar(300) NOT NULL,
  `bodymass` decimal(4,1) NOT NULL,
  `bodylength` decimal(3,2) NOT NULL,
  `age` tinyint(3) UNSIGNED NOT NULL,
  `gender` enum('male','female','trans') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bmi_data`
--

INSERT INTO `bmi_data` (`id`, `firstname`, `infix`, `lastname`, `bodymass`, `bodylength`, `age`, `gender`) VALUES
(1, 'skjfs', '', 'sdkfl', '34.0', '2.30', 34, 'male'),
(2, 'Arjan', 'de', 'Ruijter', '200.0', '1.96', 43, 'male'),
(3, 'Arjan', 'de', 'Ruijter', '90.0', '1.80', 50, 'trans');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

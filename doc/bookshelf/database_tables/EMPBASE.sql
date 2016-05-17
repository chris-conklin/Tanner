-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 16, 2016 at 03:07 AM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Tanner`
--

-- --------------------------------------------------------

--
-- Table structure for table `EMPBASE`
--

CREATE TABLE IF NOT EXISTS `EMPBASE` (
  `empbase_sid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'System generated id',
  `empbase_dob` date NOT NULL COMMENT 'Employee dob',
  `empbase_ssn` varchar(11) NOT NULL,
  `empbase_id` varchar(9) NOT NULL COMMENT 'Employee company id number',
  `empbase_effective_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Date of record creation',
  `empbase_source` varchar(9) NOT NULL COMMENT 'ID of data entry source',
  PRIMARY KEY (`empbase_sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

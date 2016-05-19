-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 19, 2016 at 05:30 PM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.35-1+donate.sury.org~trusty+4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Tanner_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `EMPADDR`
--

CREATE TABLE IF NOT EXISTS `EMPADDR` (
  `empaddr_sid` varchar(6) NOT NULL COMMENT 'employee sid',
  `empaddr_type` varchar(1) NOT NULL COMMENT 'O office mail, R office physical, H home',
  `empaddr_status` varchar(1) NOT NULL COMMENT 'A active, I inactive',
  `empaddr_effective_date` date NOT NULL COMMENT 'Date begin using ',
  `empaddr_activity_date` date NOT NULL COMMENT 'Date of entry/modification',
  `empaddr_street1` varchar(64) NOT NULL COMMENT 'Street address line 1',
  `empaddr_street2` varchar(64) DEFAULT NULL COMMENT 'Street address line 2',
  `empaddr_boxno` varchar(10) DEFAULT NULL COMMENT 'PO Box number',
  `empaddr_aptno` varchar(8) DEFAULT NULL COMMENT 'Apartment number',
  `empaddr_city` varchar(64) NOT NULL COMMENT 'City',
  `empaddr_state` varchar(2) NOT NULL COMMENT 'State',
  `empaddr_county` varchar(24) DEFAULT NULL COMMENT 'County',
  `empaddr_zip` varchar(5) NOT NULL COMMENT '5 digit zip',
  `empaddr_ext_zip` varchar(4) DEFAULT NULL COMMENT '4 digit extended zip',
  `empaddr_action` varchar(128) NOT NULL COMMENT 'Action taken on record'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `EMPBASE`
--

CREATE TABLE IF NOT EXISTS `EMPBASE` (
  `empbase_sid` varchar(6) NOT NULL COMMENT 'System generated 6 char id',
  `empbase_dob` date NOT NULL COMMENT 'Employee dob',
  `empbase_ssn` varchar(11) NOT NULL,
  `empbase_id` varchar(9) NOT NULL COMMENT 'Employee company id number',
  `empbase_effective_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Date of record creation',
  `empbase_source` varchar(9) NOT NULL COMMENT 'ID of data entry source',
  PRIMARY KEY (`empbase_sid`),
  UNIQUE KEY `empbase_id` (`empbase_id`),
  KEY `empbase_sid` (`empbase_sid`,`empbase_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `EMPINFO`
--

CREATE TABLE IF NOT EXISTS `EMPINFO` (
  `empinfo_sid` varchar(6) NOT NULL COMMENT 'System identification number',
  `empinfo_first_name` varchar(24) NOT NULL COMMENT 'Employee first name',
  `empinfo_last_name` varchar(32) NOT NULL,
  `empinfo_mi` varchar(1) DEFAULT NULL,
  `empinfo_marital_status` varchar(1) NOT NULL COMMENT 'M, S, D, L legally sep',
  `empinfo_change_ind` tinyint(4) DEFAULT '0' COMMENT 'Change of 0 is active record 1 is old',
  `empinfo_effective_date` date NOT NULL COMMENT 'The creation date of this record',
  `empinfo_life_ind` varchar(1) NOT NULL COMMENT 'L or Deceased',
  `empinfo_privacy_ind` varchar(1) NOT NULL COMMENT 'Display info to public entities Y/N',
  `empinfo_status` varchar(1) NOT NULL COMMENT 'A,T,L,P',
  `empinfo_action` varchar(128) NOT NULL,
  PRIMARY KEY (`empinfo_sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `EMPTELE`
--

CREATE TABLE IF NOT EXISTS `EMPTELE` (
  `emptele_sid` varchar(6) NOT NULL,
  `emptele_type` varchar(1) NOT NULL,
  `emptele_status` varchar(1) NOT NULL,
  `emptele_effective_date` date NOT NULL,
  `emptele_activity_date` date NOT NULL,
  `emptele_ext` varchar(10) DEFAULT NULL,
  `emptele_number` varchar(10) NOT NULL,
  `emptele_primary_ind` varchar(1) NOT NULL,
  `emptele_private` varchar(1) NOT NULL,
  `emptele_action` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `EMPINFO`
--
ALTER TABLE `EMPINFO`
  ADD CONSTRAINT `EMPINFO_ibfk_1` FOREIGN KEY (`empinfo_sid`) REFERENCES `EMPBASE` (`empbase_sid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

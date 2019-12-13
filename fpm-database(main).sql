-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2019 at 07:03 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fpm`
--
CREATE DATABASE IF NOT EXISTS `fpm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fpm`;

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

DROP TABLE IF EXISTS `achievements`;
CREATE TABLE IF NOT EXISTS `achievements` (
  `gmail` varchar(50) NOT NULL,
  `year` year(4) NOT NULL,
  `date` date NOT NULL,
  `achievement_name` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `category` varchar(50) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  PRIMARY KEY (`gmail`,`achievement_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

DROP TABLE IF EXISTS `experience`;
CREATE TABLE IF NOT EXISTS `experience` (
  `gmail` varchar(50) NOT NULL,
  `previous_exp` int(11) DEFAULT '0',
  `teaching_exp` int(11) DEFAULT '0',
  `research_exp` int(11) DEFAULT '0',
  `industry_exp` int(11) DEFAULT '0',
  `other_exp` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`gmail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

DROP TABLE IF EXISTS `membership`;
CREATE TABLE IF NOT EXISTS `membership` (
  `gmail` varchar(50) NOT NULL,
  `field_of_membership` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`gmail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE IF NOT EXISTS `profile` (
  `gmail` varchar(50) NOT NULL,
  `sno` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `qualification` varchar(300) NOT NULL,
  `doj` date NOT NULL,
  `password` varchar(50) NOT NULL,
  `phno` varchar(15) NOT NULL,
  PRIMARY KEY (`gmail`),
  UNIQUE KEY `sno` (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`gmail`, `sno`, `name`, `designation`, `department`, `dob`, `qualification`, `doj`, `password`, `phno`) VALUES
('sivaranjani.cse@anits.edu.in', 1, 'DR. R.SIVARANJINI', 'HOD & PROFESSOR', 'CSE', '1979-02-11', 'M.TECH,Ph.D', '2016-06-11', 'admin', '9642022170');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `gmail` varchar(50) NOT NULL,
  `role_of_faculty` varchar(50) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  PRIMARY KEY (`gmail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `specialization`
--

DROP TABLE IF EXISTS `specialization`;
CREATE TABLE IF NOT EXISTS `specialization` (
  `gmail` varchar(50) NOT NULL,
  `area_of_specialization` varchar(300) DEFAULT NULL,
  `UG` varchar(300) DEFAULT NULL,
  `PG` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`gmail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `experience`
--
ALTER TABLE `experience`
  ADD CONSTRAINT `experience_ibfk_1` FOREIGN KEY (`gmail`) REFERENCES `profile` (`gmail`);

--
-- Constraints for table `membership`
--
ALTER TABLE `membership`
  ADD CONSTRAINT `membership_ibfk_1` FOREIGN KEY (`gmail`) REFERENCES `profile` (`gmail`);

--
-- Constraints for table `role`
--
ALTER TABLE `role`
  ADD CONSTRAINT `role_ibfk_1` FOREIGN KEY (`gmail`) REFERENCES `profile` (`gmail`);

--
-- Constraints for table `specialization`
--
ALTER TABLE `specialization`
  ADD CONSTRAINT `specialization_ibfk_1` FOREIGN KEY (`gmail`) REFERENCES `profile` (`gmail`);


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table achievements
--

--
-- Metadata for table experience
--

--
-- Metadata for table membership
--

--
-- Metadata for table profile
--

--
-- Metadata for table role
--

--
-- Metadata for table specialization
--

--
-- Metadata for database fpm
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

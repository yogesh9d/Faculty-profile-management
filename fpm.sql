-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 19, 2019 at 10:46 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

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

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `gmail` varchar(50) NOT NULL,
  `year` year(4) NOT NULL,
  `date` date NOT NULL,
  `achievement_name` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `category` varchar(50) NOT NULL,
  `staff_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `gmail` varchar(50) NOT NULL,
  `teaching_exp` int(11) DEFAULT 0,
  `research_exp` int(11) DEFAULT 0,
  `industry_exp` int(11) DEFAULT 0,
  `other_exp` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `journals`
--

CREATE TABLE `journals` (
  `gmail` varchar(255) NOT NULL,
  `internationaljour` int(11) NOT NULL,
  `nationaljour` int(11) NOT NULL,
  `internationalconf` int(11) NOT NULL,
  `nationalconf` int(11) NOT NULL,
  `undergraduatestu` int(11) NOT NULL,
  `postgraduatestu` int(11) NOT NULL,
  `phdstu` int(11) NOT NULL,
  `projects` int(11) NOT NULL,
  `patents` int(11) NOT NULL,
  `noofbooks` int(11) NOT NULL,
  `techtransfer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `gmail` varchar(50) NOT NULL,
  `field_of_membership` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `gmail` varchar(50) NOT NULL,
  `sno` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `qualification` varchar(300) NOT NULL,
  `doj` date NOT NULL,
  `password` varchar(50) NOT NULL,
  `phno` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`gmail`, `sno`, `name`, `designation`, `department`, `dob`, `qualification`, `doj`, `password`, `phno`) VALUES
('sivaranjani.cse@anits.edu.in', 1, 'DR. R.SIVARANJINI', 'HOD & PROFESSOR', 'CSE', '1979-02-11', 'M.TECH,Ph.D', '2016-06-11', 'admin', '9642022170');

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `gmail` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `conferencename` text NOT NULL,
  `category` varchar(20) NOT NULL,
  `academic` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `gmail` varchar(50) NOT NULL,
  `role_of_faculty` varchar(50) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `specialization`
--

CREATE TABLE `specialization` (
  `gmail` varchar(50) NOT NULL,
  `area_of_specialization` varchar(300) DEFAULT NULL,
  `ug` varchar(300) DEFAULT NULL,
  `pg` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`gmail`,`achievement_name`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`gmail`);

--
-- Indexes for table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`gmail`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`gmail`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`gmail`),
  ADD UNIQUE KEY `sno` (`sno`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`gmail`,`title`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`gmail`);

--
-- Indexes for table `specialization`
--
ALTER TABLE `specialization`
  ADD PRIMARY KEY (`gmail`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `experience`
--
ALTER TABLE `experience`
  ADD CONSTRAINT `experience_ibfk_1` FOREIGN KEY (`gmail`) REFERENCES `profile` (`gmail`);

--
-- Constraints for table `journals`
--
ALTER TABLE `journals`
  ADD CONSTRAINT `journals_ibfk_1` FOREIGN KEY (`gmail`) REFERENCES `profile` (`gmail`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `membership`
--
ALTER TABLE `membership`
  ADD CONSTRAINT `membership_ibfk_1` FOREIGN KEY (`gmail`) REFERENCES `profile` (`gmail`);

--
-- Constraints for table `publications`
--
ALTER TABLE `publications`
  ADD CONSTRAINT `publications_ibfk_1` FOREIGN KEY (`gmail`) REFERENCES `profile` (`gmail`) ON DELETE CASCADE ON UPDATE CASCADE;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

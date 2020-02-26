-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 26, 2020 at 05:55 PM
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
  `gmail` varchar(100) NOT NULL,
  `year_start` varchar(100) NOT NULL,
  `date_start` date NOT NULL,
  `achievement_name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `staff_name` varchar(100) NOT NULL
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

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`gmail`, `teaching_exp`, `research_exp`, `industry_exp`, `other_exp`) VALUES
('pranitha@gmail.com', 7, 0, 0, '0'),
('sp@gmail.com', 5, 6, 9, '0');

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

--
-- Dumping data for table `journals`
--

INSERT INTO `journals` (`gmail`, `internationaljour`, `nationaljour`, `internationalconf`, `nationalconf`, `undergraduatestu`, `postgraduatestu`, `phdstu`, `projects`, `patents`, `noofbooks`, `techtransfer`) VALUES
('pranitha@gmail.com', 2, 0, 1, 0, 6, 2, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userid` varchar(20) NOT NULL,
  `pwd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `pwd`) VALUES
('sp@gmail.com', 'surya');

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
  `name` varchar(100) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `qualification` varchar(300) DEFAULT NULL,
  `doj` date DEFAULT NULL,
  `phno` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`gmail`, `sno`, `name`, `designation`, `department`, `dob`, `qualification`, `doj`, `phno`) VALUES
('pranitha@gmail.com', 9, 'pranitha', 'asst.prof', 'cse', '1987-08-05', 'M.tech', '2012-06-06', '9177755811'),
('pratap@gmail', 7, 'pratap', 'aba', 'case', '2000-05-22', 'phd', '2009-03-24', '9908124098'),
('sivaranjani.cse@anits.edu.in', 1, 'DR. R.SIVARANJINI', 'HOD & PROFESSOR', 'CSE', '1979-02-11', 'M.TECH,Ph.D', '2016-06-11', '9642022170'),
('sp@gmail.com', 8, 'sp', 'hod', 'cse', '2000-02-22', 'phd', '2013-02-23', '9908124098'),
('srinu6@gmail.com', 6, 'CHALUMURI SURYAPRATAP', 'ahd', 'cse', '2000-03-12', 'asaa', '2010-02-20', '5696964563'),
('surya3@gmail.com', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('surya4@gmail.com', 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('surya5@gmail.com', 5, 'srinivas', 'hod', 'cse', '2000-02-12', 'fghjkl', NULL, ''),
('surya@gmail.com', 2, 'surya', 'hod', 'cse', '2000-12-02', 'phd', '2012-02-12', '9908124098');

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `gmail` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `conferencename` text NOT NULL,
  `category` varchar(20) NOT NULL,
  `academic` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`gmail`, `title`, `conferencename`, `category`, `academic`) VALUES
('pranitha@gmail.com', 'improving security', 'ijsr', 'national', '2016-2017');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `gmail` varchar(50) NOT NULL,
  `role_of_faculty` varchar(50) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`gmail`, `role_of_faculty`, `duration`) VALUES
('surya@gmail.com', 'csi', 10);

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
-- Dumping data for table `specialization`
--

INSERT INTO `specialization` (`gmail`, `area_of_specialization`, `ug`, `pg`) VALUES
('pranitha@gmail.com', 'information security', 'c,cd,wt,co', 'sp'),
('pratap@gmail', '', '', ''),
('sp@gmail.com', 'big data', 'cd,co,cf', 'cn');

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

CREATE TABLE `workshops` (
  `gmail` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `s/w/c` varchar(200) NOT NULL,
  `category` varchar(255) NOT NULL,
  `place` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `staff_name` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL
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
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userid`);

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
-- Indexes for table `workshops`
--
ALTER TABLE `workshops`
  ADD PRIMARY KEY (`gmail`,`title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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

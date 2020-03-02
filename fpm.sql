-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 02, 2020 at 05:51 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

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
-- Table structure for table `deleted_profiles`
--

CREATE TABLE `deleted_profiles` (
  `gmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deleted_profiles`
--

INSERT INTO `deleted_profiles` (`gmail`) VALUES
('surya3@gmail.com'),
('pratap@gmail'),
('surya@gmail.com'),
('sivaranjani.cse@anits.edu.in'),
(''),
(''),
(''),
(''),
('231321'),
(''),
('surya111@gmail.com'),
(''),
('231321'),
(''),
('231321'),
('surya2@gmail.com'),
('sp@gmail.com');

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
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userid` varchar(20) NOT NULL,
  `pwd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `gmail` varchar(50) NOT NULL,
  `field_of_membership` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`gmail`, `field_of_membership`) VALUES
('pranitha@gmail.com', 'csi'),
('pranitha@gmail.com', 'csi'),
('surya111@gmail.com', 'csi');

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

-- --------------------------------------------------------

--
-- Stand-in structure for view `publicationsv`
-- (See below for the actual view)
--
CREATE TABLE `publicationsv` (
`ttl` varchar(255)
,`conferencename` text
,`pcategory` varchar(20)
,`academic` varchar(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `gmail` varchar(50) NOT NULL,
  `role_of_faculty` varchar(50) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

CREATE TABLE `workshops` (
  `gmail` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `swc` varchar(200) NOT NULL,
  `category` varchar(255) NOT NULL,
  `place` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `staff_name` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure for view `publicationsv`
--
DROP TABLE IF EXISTS `publicationsv`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `publicationsv`  AS  select `publications`.`title` AS `ttl`,`publications`.`conferencename` AS `conferencename`,`publications`.`category` AS `pcategory`,`publications`.`academic` AS `academic` from `publications` ;

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
  ADD PRIMARY KEY (`gmail`,`role_of_faculty`);

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
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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

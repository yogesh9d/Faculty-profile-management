-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: localhost    Database: fpm
-- ------------------------------------------------------
-- Server version	8.0.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `achievements`
--

DROP TABLE IF EXISTS `achievements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `achievements` (
  `gmail` varchar(50) NOT NULL,
  `year` year(4) NOT NULL,
  `date` date NOT NULL,
  `achievement_name` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `category` varchar(50) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  PRIMARY KEY (`gmail`,`achievement_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `achievements`
--

LOCK TABLES `achievements` WRITE;
/*!40000 ALTER TABLE `achievements` DISABLE KEYS */;
/*!40000 ALTER TABLE `achievements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `experience`
--

DROP TABLE IF EXISTS `experience`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `experience` (
  `gmail` varchar(50) NOT NULL,
  `teaching_exp` int(11) DEFAULT '0',
  `research_exp` int(11) DEFAULT '0',
  `industry_exp` int(11) DEFAULT '0',
  `other_exp` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`gmail`),
  CONSTRAINT `experience_ibfk_1` FOREIGN KEY (`gmail`) REFERENCES `profile` (`gmail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `experience`
--

LOCK TABLES `experience` WRITE;
/*!40000 ALTER TABLE `experience` DISABLE KEYS */;
/*!40000 ALTER TABLE `experience` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `journals`
--

DROP TABLE IF EXISTS `journals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
  `techtransfer` int(11) NOT NULL,
  PRIMARY KEY (`gmail`),
  CONSTRAINT `journals_ibfk_1` FOREIGN KEY (`gmail`) REFERENCES `profile` (`gmail`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `journals`
--

LOCK TABLES `journals` WRITE;
/*!40000 ALTER TABLE `journals` DISABLE KEYS */;
/*!40000 ALTER TABLE `journals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `membership`
--

DROP TABLE IF EXISTS `membership`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `membership` (
  `gmail` varchar(50) NOT NULL,
  `field_of_membership` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`gmail`),
  CONSTRAINT `membership_ibfk_1` FOREIGN KEY (`gmail`) REFERENCES `profile` (`gmail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `membership`
--

LOCK TABLES `membership` WRITE;
/*!40000 ALTER TABLE `membership` DISABLE KEYS */;
/*!40000 ALTER TABLE `membership` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
  `phno` varchar(15) NOT NULL,
  PRIMARY KEY (`gmail`),
  UNIQUE KEY `sno` (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile`
--

LOCK TABLES `profile` WRITE;
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;
INSERT INTO `profile` VALUES ('	Sivajyothi.cse@anits.edu.in',6,'Mrs. B. Siva Jyothi','ASSISTANT PROFESSOR','CSE','1986-03-08','M.TECH','2016-12-10','admin','	9032992384'),('anitha.cse@anits.edu.in',4,'T.Anitha','ASSISTANT PROFESSOR','CSE','1991-05-05','	B.Tech(CSE), M.Tech (CSE)','2016-06-01','admin','7799123311'),('gayathri.ganivada@gmail.com',2,'G V Gayathri','ASSISTANT PROFESSOR','CSE','1987-05-20','B.Tech,M.Tech(Ph.D.)','2009-10-19','admin','9908216500'),('iacr.santoshi@gmail.com',3,'G.Santoshi','ASSISTANT PROFESSOR','CSE','1987-05-09','B.Tech,M.Tech(pursuing)','2011-05-10','admin','8500925079'),('joshua.cse@anits.edu.in',5,'S.Joshua Johnson','ASSISTANT PROFESSOR','CSE','1991-07-22','M.Tech(CSE)','2016-06-06','admin','9573382650'),('pranitha.cse@anits.edu.in',0,'Pranitha Gadde','ASSISTANT PROFESSOR','CSE','1987-08-05','M.Tech','2012-06-06','admin','9177755811'),('sivaranjani.cse@anits.edu.in',1,'DR. R.SIVARANJINI','HOD & PROFESSOR','CSE','1979-02-11','M.TECH,Ph.D','2016-06-11','admin','9642022170');
/*!40000 ALTER TABLE `profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publications`
--

DROP TABLE IF EXISTS `publications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `publications` (
  `gmail` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `conferencename` text NOT NULL,
  `category` varchar(20) NOT NULL,
  `academic` year(4) NOT NULL,
  PRIMARY KEY (`gmail`,`title`),
  CONSTRAINT `publications_ibfk_1` FOREIGN KEY (`gmail`) REFERENCES `profile` (`gmail`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publications`
--

LOCK TABLES `publications` WRITE;
/*!40000 ALTER TABLE `publications` DISABLE KEYS */;
/*!40000 ALTER TABLE `publications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role` (
  `gmail` varchar(50) NOT NULL,
  `role_of_faculty` varchar(50) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  PRIMARY KEY (`gmail`),
  CONSTRAINT `role_ibfk_1` FOREIGN KEY (`gmail`) REFERENCES `profile` (`gmail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `specialization`
--

DROP TABLE IF EXISTS `specialization`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `specialization` (
  `gmail` varchar(50) NOT NULL,
  `area_of_specialization` varchar(300) DEFAULT NULL,
  `ug` varchar(300) DEFAULT NULL,
  `pg` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`gmail`),
  CONSTRAINT `specialization_ibfk_1` FOREIGN KEY (`gmail`) REFERENCES `profile` (`gmail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `specialization`
--

LOCK TABLES `specialization` WRITE;
/*!40000 ALTER TABLE `specialization` DISABLE KEYS */;
/*!40000 ALTER TABLE `specialization` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-01-27 23:10:29

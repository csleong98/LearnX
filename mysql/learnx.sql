-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 21, 2018 at 03:34 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learnx`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `name`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `coursefeedback`
--

DROP TABLE IF EXISTS `coursefeedback`;
CREATE TABLE IF NOT EXISTS `coursefeedback` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `ui` varchar(100) NOT NULL,
  `resources` varchar(100) NOT NULL,
  `ux` varchar(100) NOT NULL,
  `feedback` longtext NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursefeedback`
--

INSERT INTO `coursefeedback` (`ID`, `username`, `ui`, `resources`, `ux`, `feedback`, `date`, `time`) VALUES
(22, 'csleong98', 'Very clean and easy to use', 'Very Informative', 'Very Satisfied', '123', '2018-04-21', '11:20:18');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `GeneralFeedbackID` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `feedback` longtext NOT NULL,
  `rating` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`GeneralFeedbackID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`GeneralFeedbackID`, `name`, `email`, `feedback`, `rating`, `date`, `time`) VALUES
(6, 'csleong98', 'cfleong8080@gmail.com', 'fafa', 'Dissatisfied', '2018-04-21', '02:39:31'),
(5, 'csleong98', 'ms.catwong@gmail.com', 'fa', 'OK', '2018-04-21', '02:32:36'),
(4, 'chee wenf', 'ms.catwong@gmail.com', '123', 'OK', '2018-04-21', '02:32:26'),
(7, 'test', 'test', 'test', 'OK', '2018-04-21', '09:49:18');

-- --------------------------------------------------------

--
-- Table structure for table `tutorial`
--

DROP TABLE IF EXISTS `tutorial`;
CREATE TABLE IF NOT EXISTS `tutorial` (
  `stepID` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `step1` varchar(100) NOT NULL DEFAULT '0',
  `step2` varchar(100) NOT NULL DEFAULT '0',
  `step3` varchar(100) NOT NULL DEFAULT '0',
  `step4` varchar(100) DEFAULT '0',
  PRIMARY KEY (`stepID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutorial`
--

INSERT INTO `tutorial` (`stepID`, `username`, `step1`, `step2`, `step3`, `step4`) VALUES
(13, 'csleong98', '1', '1', '1', '1'),
(12, 'cwleong99', '1', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `realname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `realname`, `email`, `password`, `confirm_password`) VALUES
(12, 'cwleong99', 'Chee Weng', 'ms.catwong@gmail.com', '123', '123'),
(13, 'csleong98', 'LEONG CHEE SENG', 'asda@ohsd.com', '123', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

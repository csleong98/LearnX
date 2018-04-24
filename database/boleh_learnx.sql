-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 24, 2018 at 11:04 AM
-- Server version: 5.5.58-cll
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boleh_learnx`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `name`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `coursefeedback`
--

CREATE TABLE `coursefeedback` (
  `ID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `ui` varchar(100) NOT NULL,
  `resources` varchar(100) NOT NULL,
  `ux` varchar(100) NOT NULL,
  `feedback` longtext NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursefeedback`
--

INSERT INTO `coursefeedback` (`ID`, `username`, `ui`, `resources`, `ux`, `feedback`, `date`, `time`) VALUES
(28, 'cwleong', 'Very clean and easy to use', 'It was OK', 'It was OK', 'Overall good', '2018-04-23', '03:49:07'),
(27, 'travis', 'Very clean and easy to use', 'Very Informative', 'Very Satisfied', 'GOOD!', '2018-04-23', '11:00:26'),
(26, '1234', 'Very clean and easy to use', 'Very Informative', 'Very Satisfied', '123', '2018-04-23', '10:18:42');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `GeneralFeedbackID` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `feedback` longtext NOT NULL,
  `rating` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`GeneralFeedbackID`, `name`, `email`, `feedback`, `rating`, `date`, `time`) VALUES
(10, 'xxx', 'xx@gmail.com', 'very good ', 'Very Satisfied', '2018-04-23', '11:05:01');

-- --------------------------------------------------------

--
-- Table structure for table `tutorial`
--

CREATE TABLE `tutorial` (
  `stepID` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `step1` varchar(100) NOT NULL DEFAULT '0',
  `step2` varchar(100) NOT NULL DEFAULT '0',
  `step3` varchar(100) NOT NULL DEFAULT '0',
  `step4` varchar(100) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutorial`
--

INSERT INTO `tutorial` (`stepID`, `username`, `step1`, `step2`, `step3`, `step4`) VALUES
(48, 'e13', '0', '0', '0', '0'),
(47, 'zzxc', '0', '0', '0', '0'),
(46, 'q', '0', '0', '0', '0'),
(45, 'zz', '0', '0', '0', '0'),
(44, 'aa', '0', '0', '0', '0'),
(43, '1234', '1', '1', '1', '1'),
(42, 'wong', '0', '0', '0', '0'),
(41, 'csleong98', '0', '0', '0', '0'),
(39, 'ww', '0', '0', '0', '0'),
(40, 'asd', '0', '0', '0', '0'),
(49, 'ccm', '0', '1', '0', '0'),
(50, 'travis', '1', '1', '1', '1'),
(51, 'cwleong', '1', '1', '1', '1'),
(52, '', '', '1', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `realname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `realname`, `email`, `password`) VALUES
(46, 'q', 'a', 'qweee@email.com', 'q'),
(47, 'zzxc', 'zaa', 'wqe@gmail.com', 'asdz'),
(45, 'zz', 'zzz', 'zzz@email.com', 'zzz'),
(44, 'aa', 'aaaa', 'aaa@gmail.com', 'aaaa'),
(43, '1234', '1234', '123@email.com', '1234'),
(42, 'wong', 'wong', 'wong@gmail.com', '1234'),
(41, 'csleong98', 'Chee Seng Leong', 'macintoshleong@gmail.com', '123'),
(48, 'e13', 'qwe', '123444@email.com', '33'),
(49, 'ccm', 'jacky chan', 'ccm@gmail.com', '123'),
(50, 'travis', 'chan kar seng', 'travis11@gmail.com', '1234'),
(51, 'cwleong', 'Chee Weng Leong', 'cwleong@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `coursefeedback`
--
ALTER TABLE `coursefeedback`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`GeneralFeedbackID`);

--
-- Indexes for table `tutorial`
--
ALTER TABLE `tutorial`
  ADD PRIMARY KEY (`stepID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coursefeedback`
--
ALTER TABLE `coursefeedback`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `GeneralFeedbackID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tutorial`
--
ALTER TABLE `tutorial`
  MODIFY `stepID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

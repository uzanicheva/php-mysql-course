-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 04, 2015 at 09:14 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fit_halls`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
`clientID` int(11) NOT NULL,
  `clientAge` int(11) NOT NULL,
  `fit_hall_list_ID` int(11) NOT NULL,
  `clientCardExpDate` date NOT NULL,
  `clientName` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fit_hall_list`
--

CREATE TABLE IF NOT EXISTS `fit_hall_list` (
`fit_hall_list_ID` int(11) NOT NULL,
  `fit_hall_list_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fit_hall_list_address` varchar(1234) COLLATE utf8_unicode_ci NOT NULL,
  `fit_hall_list_area` int(11) NOT NULL,
  `fit_hall_list_instructors` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fit_hall_listInstructors`
--

CREATE TABLE IF NOT EXISTS `fit_hall_listInstructors` (
  `fit_hall_list_ID` int(11) NOT NULL,
  `instructorID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE IF NOT EXISTS `instructors` (
`instructorID` int(11) NOT NULL,
  `instructorName` int(11) NOT NULL,
  `instructorSalary` int(11) NOT NULL,
  `instructorWorkPlace` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
 ADD PRIMARY KEY (`clientID`);

--
-- Indexes for table `fit_hall_list`
--
ALTER TABLE `fit_hall_list`
 ADD PRIMARY KEY (`fit_hall_list_ID`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
 ADD PRIMARY KEY (`instructorID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
MODIFY `clientID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fit_hall_list`
--
ALTER TABLE `fit_hall_list`
MODIFY `fit_hall_list_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
MODIFY `instructorID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

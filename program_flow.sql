-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2016 at 01:18 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iics2016_simbahayan`
--

-- --------------------------------------------------------

--
-- Table structure for table `program_flow`
--

CREATE TABLE IF NOT EXISTS `program_flow` (
  `program_id` int(11) NOT NULL,
  `proposal_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(250) NOT NULL,
  `time0` varchar(100) NOT NULL,
  `description0` varchar(100) NOT NULL,
  `person0` varchar(100) NOT NULL,
  `time1` varchar(100) NOT NULL,
  `description1` varchar(100) NOT NULL,
  `person1` varchar(100) NOT NULL,
  `time2` varchar(100) NOT NULL,
  `description2` varchar(100) NOT NULL,
  `person2` varchar(100) NOT NULL,
  `time3` varchar(100) NOT NULL,
  `description3` varchar(100) NOT NULL,
  `person3` varchar(100) NOT NULL,
  `time4` varchar(100) NOT NULL,
  `description4` varchar(100) NOT NULL,
  `person4` varchar(100) NOT NULL,
  `time5` varchar(100) NOT NULL,
  `description5` varchar(100) NOT NULL,
  `person5` varchar(100) NOT NULL,
  `time6` varchar(100) NOT NULL,
  `description6` varchar(100) NOT NULL,
  `person6` varchar(100) NOT NULL,
  `time7` varchar(100) NOT NULL,
  `description7` varchar(100) NOT NULL,
  `person7` varchar(100) NOT NULL,
  `time8` varchar(100) NOT NULL,
  `description8` varchar(100) NOT NULL,
  `person8` varchar(100) NOT NULL,
  `time9` varchar(100) NOT NULL,
  `description9` varchar(100) NOT NULL,
  `person9` varchar(100) NOT NULL,
  `time10` varchar(100) NOT NULL,
  `description10` varchar(100) NOT NULL,
  `person10` varchar(100) NOT NULL,
  `time11` varchar(100) NOT NULL,
  `description11` varchar(100) NOT NULL,
  `person11` varchar(100) NOT NULL,
  `time12` varchar(100) NOT NULL,
  `description12` varchar(100) NOT NULL,
  `person12` varchar(100) NOT NULL,
  `time13` varchar(100) NOT NULL,
  `description13` varchar(100) NOT NULL,
  `person13` varchar(100) NOT NULL,
  `time14` varchar(100) NOT NULL,
  `description14` varchar(100) NOT NULL,
  `person14` varchar(100) NOT NULL,
  `time15` varchar(100) NOT NULL,
  `description15` varchar(100) NOT NULL,
  `person15` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `program_flow`
--

INSERT INTO `program_flow` (`program_id`, `proposal_id`, `date`, `address`, `time0`, `description0`, `person0`, `time1`, `description1`, `person1`, `time2`, `description2`, `person2`, `time3`, `description3`, `person3`, `time4`, `description4`, `person4`, `time5`, `description5`, `person5`, `time6`, `description6`, `person6`, `time7`, `description7`, `person7`, `time8`, `description8`, `person8`, `time9`, `description9`, `person9`, `time10`, `description10`, `person10`, `time11`, `description11`, `person11`, `time12`, `description12`, `person12`, `time13`, `description13`, `person13`, `time14`, `description14`, `person14`, `time15`, `description15`, `person15`) VALUES
(1, 1, '2016-10-29', 'testing', '11:00 AM - 05:00 PM', 'testing', 'testing', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `program_flow`
--
ALTER TABLE `program_flow`
  ADD PRIMARY KEY (`program_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `program_flow`
--
ALTER TABLE `program_flow`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

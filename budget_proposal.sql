-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2016 at 06:05 PM
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
-- Table structure for table `budget_proposal`
--

CREATE TABLE IF NOT EXISTS `budget_proposal` (
  `budget_id` int(11) NOT NULL,
  `proposal_id` int(11) NOT NULL,
  `proj_evaluation` varchar(255) NOT NULL,
  `proj_evaluation1` varchar(255) NOT NULL,
  `pname0` varchar(100) NOT NULL,
  `pmail0` varchar(100) NOT NULL,
  `pfund0` int(25) NOT NULL,
  `porg0` int(25) NOT NULL,
  `pcom0` int(25) NOT NULL,
  `pname1` varchar(100) NOT NULL,
  `pmail1` varchar(100) NOT NULL,
  `pfund1` int(25) NOT NULL,
  `porg1` int(25) NOT NULL,
  `pcom1` int(25) NOT NULL,
  `pname2` varchar(100) NOT NULL,
  `pmail2` varchar(100) NOT NULL,
  `pfund2` int(25) NOT NULL,
  `porg2` int(25) NOT NULL,
  `pcom2` int(25) NOT NULL,
  `pname3` varchar(100) NOT NULL,
  `pmail3` varchar(100) NOT NULL,
  `pfund3` int(25) NOT NULL,
  `porg3` int(25) NOT NULL,
  `pcom3` int(25) NOT NULL,
  `pname4` varchar(100) NOT NULL,
  `pmail4` varchar(100) NOT NULL,
  `pfund4` int(25) NOT NULL,
  `porg4` int(25) NOT NULL,
  `pcom4` int(25) NOT NULL,
  `oname0` varchar(100) NOT NULL,
  `omail0` varchar(100) NOT NULL,
  `ofund0` int(25) NOT NULL,
  `oorg0` int(25) NOT NULL,
  `ocom0` int(25) NOT NULL,
  `oname1` varchar(100) NOT NULL,
  `omail1` varchar(100) NOT NULL,
  `ofund1` int(25) NOT NULL,
  `oorg1` int(25) NOT NULL,
  `ocom1` int(25) NOT NULL,
  `oname2` varchar(100) NOT NULL,
  `omail2` varchar(100) NOT NULL,
  `ofund2` int(25) NOT NULL,
  `oorg2` int(25) NOT NULL,
  `ocom2` int(25) NOT NULL,
  `oname3` varchar(100) NOT NULL,
  `omail3` varchar(100) NOT NULL,
  `oname7` varchar(100) NOT NULL,
  `omail7` varchar(100) NOT NULL,
  `oname8` varchar(100) NOT NULL,
  `omail8` varchar(100) NOT NULL,
  `oname9` varchar(100) NOT NULL,
  `omail9` varchar(100) NOT NULL,
  `oname4` varchar(100) NOT NULL,
  `omail4` varchar(100) NOT NULL,
  `ofund6` int(25) NOT NULL,
  `oorg6` int(25) NOT NULL,
  `ocom6` int(25) NOT NULL,
  `oname5` varchar(100) NOT NULL,
  `omail5` varchar(100) NOT NULL,
  `ofund7` int(25) NOT NULL,
  `oorg7` int(25) NOT NULL,
  `ocom7` int(25) NOT NULL,
  `oname6` varchar(100) NOT NULL,
  `omail6` varchar(100) NOT NULL,
  `ofund8` int(25) NOT NULL,
  `oorg8` int(25) NOT NULL,
  `ocom8` int(25) NOT NULL,
  `ofund9` int(25) NOT NULL,
  `oorg9` int(25) NOT NULL,
  `ocom9` int(25) NOT NULL,
  `mname0` varchar(100) NOT NULL,
  `mmail0` varchar(100) NOT NULL,
  `mfund0` int(25) NOT NULL,
  `morg0` int(25) NOT NULL,
  `mcom0` int(25) NOT NULL,
  `mname1` varchar(100) NOT NULL,
  `mmail1` varchar(100) NOT NULL,
  `mfund1` int(25) NOT NULL,
  `morg1` int(25) NOT NULL,
  `mcom1` int(25) NOT NULL,
  `mname2` varchar(100) NOT NULL,
  `mmail2` varchar(100) NOT NULL,
  `mfund2` int(25) NOT NULL,
  `morg2` int(25) NOT NULL,
  `mcom2` int(25) NOT NULL,
  `mname3` varchar(100) NOT NULL,
  `mmail3` varchar(100) NOT NULL,
  `mfund3` int(25) NOT NULL,
  `morg3` int(25) NOT NULL,
  `mcom3` int(25) NOT NULL,
  `mname4` varchar(100) NOT NULL,
  `mmail4` varchar(100) NOT NULL,
  `mfund4` int(25) NOT NULL,
  `morg4` int(25) NOT NULL,
  `mcom4` int(25) NOT NULL,
  `mfund5` int(25) NOT NULL,
  `morg5` int(25) NOT NULL,
  `mcom5` int(25) NOT NULL,
  `otname0` varchar(100) NOT NULL,
  `otmail0` varchar(100) NOT NULL,
  `otfund0` int(25) NOT NULL,
  `otorg0` int(25) NOT NULL,
  `otcom0` int(25) NOT NULL,
  `otname1` varchar(100) NOT NULL,
  `otmail1` varchar(100) NOT NULL,
  `otfund1` int(25) NOT NULL,
  `otorg1` int(25) NOT NULL,
  `otcom1` int(25) NOT NULL,
  `otname2` varchar(100) NOT NULL,
  `otmail2` varchar(100) NOT NULL,
  `otfund2` int(25) NOT NULL,
  `otorg2` int(25) NOT NULL,
  `otcom2` int(25) NOT NULL,
  `otname3` varchar(100) NOT NULL,
  `otmail3` varchar(100) NOT NULL,
  `otfund3` int(25) NOT NULL,
  `otorg3` int(25) NOT NULL,
  `otcom3` int(25) NOT NULL,
  `otname4` varchar(100) NOT NULL,
  `otmail4` varchar(100) NOT NULL,
  `otfund4` int(25) NOT NULL,
  `otorg4` int(25) NOT NULL,
  `otcom4` int(25) NOT NULL,
  `otfund5` int(25) NOT NULL,
  `otorg5` int(25) NOT NULL,
  `otcom5` int(25) NOT NULL,
  `otfund6` int(25) NOT NULL,
  `otorg6` int(25) NOT NULL,
  `otcom6` int(25) NOT NULL,
  `ptotalfund` int(11) NOT NULL,
  `ptotalorg` int(11) NOT NULL,
  `ptotalcom` int(11) NOT NULL,
  `ototalfund` int(11) NOT NULL,
  `ototalorg` int(11) NOT NULL,
  `ototalcom` int(11) NOT NULL,
  `mtotalfund` int(11) NOT NULL,
  `mtotalorg` int(11) NOT NULL,
  `mtotalcom` int(11) NOT NULL,
  `ottotalfund` int(11) NOT NULL,
  `ottotalorg` int(11) NOT NULL,
  `ottotalcom` int(11) NOT NULL,
  `totalfund` int(11) NOT NULL,
  `totalorg` int(11) NOT NULL,
  `totalcom` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `budget_proposal`
--

INSERT INTO `budget_proposal` (`budget_id`, `proposal_id`, `proj_evaluation`, `proj_evaluation1`, `pname0`, `pmail0`, `pfund0`, `porg0`, `pcom0`, `pname1`, `pmail1`, `pfund1`, `porg1`, `pcom1`, `pname2`, `pmail2`, `pfund2`, `porg2`, `pcom2`, `pname3`, `pmail3`, `pfund3`, `porg3`, `pcom3`, `pname4`, `pmail4`, `pfund4`, `porg4`, `pcom4`, `oname0`, `omail0`, `ofund0`, `oorg0`, `ocom0`, `oname1`, `omail1`, `ofund1`, `oorg1`, `ocom1`, `oname2`, `omail2`, `ofund2`, `oorg2`, `ocom2`, `oname3`, `omail3`, `oname7`, `omail7`, `oname8`, `omail8`, `oname9`, `omail9`, `oname4`, `omail4`, `ofund6`, `oorg6`, `ocom6`, `oname5`, `omail5`, `ofund7`, `oorg7`, `ocom7`, `oname6`, `omail6`, `ofund8`, `oorg8`, `ocom8`, `ofund9`, `oorg9`, `ocom9`, `mname0`, `mmail0`, `mfund0`, `morg0`, `mcom0`, `mname1`, `mmail1`, `mfund1`, `morg1`, `mcom1`, `mname2`, `mmail2`, `mfund2`, `morg2`, `mcom2`, `mname3`, `mmail3`, `mfund3`, `morg3`, `mcom3`, `mname4`, `mmail4`, `mfund4`, `morg4`, `mcom4`, `mfund5`, `morg5`, `mcom5`, `otname0`, `otmail0`, `otfund0`, `otorg0`, `otcom0`, `otname1`, `otmail1`, `otfund1`, `otorg1`, `otcom1`, `otname2`, `otmail2`, `otfund2`, `otorg2`, `otcom2`, `otname3`, `otmail3`, `otfund3`, `otorg3`, `otcom3`, `otname4`, `otmail4`, `otfund4`, `otorg4`, `otcom4`, `otfund5`, `otorg5`, `otcom5`, `otfund6`, `otorg6`, `otcom6`, `ptotalfund`, `ptotalorg`, `ptotalcom`, `ototalfund`, `ototalorg`, `ototalcom`, `mtotalfund`, `mtotalorg`, `mtotalcom`, `ottotalfund`, `ottotalorg`, `ottotalcom`, `totalfund`, `totalorg`, `totalcom`) VALUES
(1, 104, '', '', 'Student Volunteers', '1X300X1', 0, 300, 0, 'Faculty/Admin/Support Staff Volunteers', '1X1500X1', 0, 1500, 0, 'Volunteers from the Partner Community or Institution', '1X500X1', 0, 0, 500, 'Volunteer External Resource Person (not from UST)', '1X1500X1', 0, 1500, 0, 'Subtotal', '', 0, 3300, 1500, 'Lunch / Dinner', '1X90X1', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 103, '', '', 'Student Volunteers', '1X300X1', 0, 300, 0, 'Faculty/Admin/Support Staff Volunteers', '1X1500X1', 0, 1500, 0, 'Volunteers from the Partner Community or Institution', '1X500X1', 0, 0, 500, 'Volunteer External Resource Person (not from UST)', '1X1500X1', 0, 1500, 0, 'Subtotal', '', 0, 3300, 1500, 'Lunch / Dinner', '1X90X1', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 105, '', '', 'Student Volunteers', '1X300X1', 0, 300, 0, 'Faculty/Admin/Support Staff Volunteers', '1X1500X1', 0, 1500, 0, 'Volunteers from the Partner Community or Institution', '1X500X1', 0, 0, 500, 'Volunteer External Resource Person (not from UST)', '1X1500X1', 0, 1500, 0, 'Subtotal', '', 0, 3300, 1500, 'Lunch / Dinner', '1X90X1', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 106, '', '', 'Student Volunteers', '3X300X1', 0, 900, 0, 'Faculty/Admin/Support Staff Volunteers', '3X1500X1', 0, 4500, 0, 'Volunteers from the Partner Community or Institution', '3X500X1', 0, 0, 1500, 'Volunteer External Resource Person (not from UST)', '3X1500X1', 0, 4500, 0, 'Subtotal', '', 0, 9900, 4500, 'Lunch / Dinner', '3X90X1', 0, 22, 0, 'Snack', '3X50X3', 0, 0, 1, 'Venue and Facilities', '1X1111X1', 1, 0, 0, 'Transportation', '1X3333X1, 1X3333X1, 1X3333X11', '', '1,,', '', ',1,', '', ',,1', 'Accommodation', '1X1111X1', 1, 0, 0, '', '1X1111X1', 0, 1, 0, '', '1X1111X1', 0, 0, 1, 111, 1111, 111, 'paper', '11X12X1', 111, 0, 0, 'pens', '11X12X1', 0, 111, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 1111, 1111, 1111, 'pens', '111X12X1', 0, 22222, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 222, 0, 1111, 1111, 1114, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 107, '', '', 'Student Volunteers', '1X300X1', 0, 300, 0, 'Faculty/Admin/Support Staff Volunteers', '1X1500X1', 0, 1500, 0, 'Volunteers from the Partner Community or Institution', '1X500X1', 0, 0, 500, 'Volunteer External Resource Person (not from UST)', '1X1500X1', 0, 1500, 0, 'Subtotal', '', 0, 3300, 1500, 'Lunch / Dinner', '1X90X1', 0, 0, 0, 'Snack', '1X50X1', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 108, '', '', 'Student Volunteers', '1X300X1', 0, 300, 0, 'Faculty/Admin/Support Staff Volunteers', '1X1500X1', 0, 1500, 0, 'Volunteers from the Partner Community or Institution', '1X500X1', 0, 0, 500, 'Volunteer External Resource Person (not from UST)', '1X1500X1', 0, 1500, 0, 'Subtotal', '', 0, 3300, 1500, 'Lunch / Dinner', '1X90X1', 0, 0, 0, 'Snack', '1X50X1', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 109, '', '', 'Student Volunteers', '1X300X1', 0, 300, 0, 'Faculty/Admin/Support Staff Volunteers', '1X1500X1', 0, 1500, 0, 'Volunteers from the Partner Community or Institution', '1X500X1', 0, 0, 500, 'Volunteer External Resource Person (not from UST)', '1X1500X1', 0, 1500, 0, 'Subtotal', '', 0, 3300, 1500, 'Lunch / Dinner', '1X90X1', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 110, '', '', 'Student Volunteers', '1X300X1', 0, 300, 0, 'Faculty/Admin/Support Staff Volunteers', '1X1500X1', 0, 1500, 0, 'Volunteers from the Partner Community or Institution', '1X500X1', 0, 0, 500, 'Volunteer External Resource Person (not from UST)', '1X1500X1', 0, 1500, 0, 'Subtotal', '', 0, 3300, 1500, 'Lunch / Dinner', '1X90X1', 0, 0, 0, 'Snack', '1X50X1', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budget_proposal`
--
ALTER TABLE `budget_proposal`
  ADD PRIMARY KEY (`budget_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `budget_proposal`
--
ALTER TABLE `budget_proposal`
  MODIFY `budget_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

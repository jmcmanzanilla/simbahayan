-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2016 at 03:08 PM
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
-- Table structure for table `announcement`
--

CREATE TABLE IF NOT EXISTS `announcement` (
  `announcement_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `sender` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `announcement` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `approval_form`
--

CREATE TABLE IF NOT EXISTS `approval_form` (
  `approval_id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `proponent` varchar(100) NOT NULL,
  `affiliation` varchar(100) NOT NULL,
  `prog_area` varchar(100) NOT NULL,
  `community` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `budget` varchar(100) NOT NULL,
  `reports` varchar(3) NOT NULL,
  `attendance` varchar(3) NOT NULL,
  `presence_profile` varchar(3) NOT NULL,
  `presence_moa` varchar(3) NOT NULL,
  `comments1` varchar(200) NOT NULL,
  `reviewed` varchar(50) NOT NULL,
  `budget_code` varchar(10) NOT NULL,
  `comments2` varchar(200) NOT NULL,
  `recommend_progarea` varchar(50) NOT NULL,
  `budget_tobe` varchar(20) NOT NULL,
  `comments3` varchar(200) NOT NULL,
  `approve_director` varchar(50) NOT NULL,
  `finalbudget` varchar(20) NOT NULL,
  `finalbudget_code` varchar(20) NOT NULL,
  `cash_req` varchar(20) NOT NULL,
  `date_today` varchar(100) NOT NULL,
  `transpo_date` varchar(100) NOT NULL,
  `proposal_id` int(11) NOT NULL,
  `signature_coor` blob NOT NULL,
  `signature_director` blob NOT NULL,
  `cashreqnum` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `audit_trail`
--

CREATE TABLE IF NOT EXISTS `audit_trail` (
  `audit_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `action` varchar(250) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1179 DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

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
(8, 110, '', '', 'Student Volunteers', '1X300X1', 0, 300, 0, 'Faculty/Admin/Support Staff Volunteers', '1X1500X1', 0, 1500, 0, 'Volunteers from the Partner Community or Institution', '1X500X1', 0, 0, 500, 'Volunteer External Resource Person (not from UST)', '1X1500X1', 0, 1500, 0, 'Subtotal', '', 0, 3300, 1500, 'Lunch / Dinner', '1X90X1', 0, 0, 0, 'Snack', '1X50X1', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 111, '', '', 'Student Volunteers', '1X300X1', 0, 300, 0, 'Faculty/Admin/Support Staff Volunteers', '1X1500X1', 0, 1500, 0, 'Volunteers from the Partner Community or Institution', '1X500X1', 0, 0, 500, 'Volunteer External Resource Person (not from UST)', '1X1500X1', 0, 1500, 0, 'Subtotal', '', 0, 3300, 1500, 'Lunch / Dinner', '1X90X1', 0, 0, 0, 'Snack', '1X50X1', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 111, '', '', 'Student Volunteers', '1X300X1', 0, 300, 0, 'Faculty/Admin/Support Staff Volunteers', '1X1500X1', 0, 1500, 0, 'Volunteers from the Partner Community or Institution', '1X500X1', 0, 0, 500, 'Volunteer External Resource Person (not from UST)', '1X1500X1', 0, 1500, 0, 'Subtotal', '', 0, 3300, 1500, 'Lunch / Dinner', '1X90X1', 0, 0, 0, 'Snack', '1X50X1', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 111, '', '', 'Student Volunteers', '1X300X1', 0, 300, 0, 'Faculty/Admin/Support Staff Volunteers', '1X1500X1', 0, 1500, 0, 'Volunteers from the Partner Community or Institution', '1X500X1', 0, 0, 500, 'Volunteer External Resource Person (not from UST)', '1X1500X1', 0, 1500, 0, 'Subtotal', '', 0, 3300, 1500, 'Lunch / Dinner', '1X90X1', 0, 0, 0, 'Snack', '1X50X1', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 111, '', '', 'Student Volunteers', '1X300X1', 0, 300, 0, 'Faculty/Admin/Support Staff Volunteers', '1X1500X1', 0, 1500, 0, 'Volunteers from the Partner Community or Institution', '1X500X1', 0, 0, 500, 'Volunteer External Resource Person (not from UST)', '1X1500X1', 0, 1500, 0, 'Subtotal', '', 0, 3300, 1500, 'Lunch / Dinner', '1X90X1', 0, 0, 0, 'Snack', '1X50X1', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 111, '', '', 'Student Volunteers', '1X300X1', 0, 300, 0, 'Faculty/Admin/Support Staff Volunteers', '1X1500X1', 0, 1500, 0, 'Volunteers from the Partner Community or Institution', '1X500X1', 0, 0, 500, 'Volunteer External Resource Person (not from UST)', '1X1500X1', 0, 1500, 0, 'Subtotal', '', 0, 3300, 1500, 'Lunch / Dinner', '1X90X1', 0, 0, 0, 'Snack', '1X50X1', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 111, '', '', 'Student Volunteers', '1X300X1', 0, 300, 0, 'Faculty/Admin/Support Staff Volunteers', '1X1500X1', 0, 1500, 0, 'Volunteers from the Partner Community or Institution', '1X500X1', 0, 0, 500, 'Volunteer External Resource Person (not from UST)', '1X1500X1', 0, 1500, 0, 'Subtotal', '', 0, 3300, 1500, 'Lunch / Dinner', '1X90X1', 0, 0, 0, 'Snack', '1X50X1', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 112, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 0, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 0, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 0, '', '', 'Student Volunteers', '1X300X1', 0, 300, 0, 'Faculty/Admin/Support Staff Volunteers', '1X1500X1', 0, 1500, 0, 'Volunteers from the Partner Community or Institution', '1X500X1', 0, 0, 500, 'Volunteer External Resource Person (not from UST)', '1X1500X1', 0, 1500, 0, 'Subtotal', '', 0, 3300, 1500, 'Lunch / Dinner', '1X90X1', 0, 0, 0, 'Snack', '1X50X1', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 0, '', '', 'Student Volunteers', '1X300X1', 0, 300, 0, 'Faculty/Admin/Support Staff Volunteers', '1X1500X1', 0, 1500, 0, 'Volunteers from the Partner Community or Institution', '1X500X1', 0, 0, 500, 'Volunteer External Resource Person (not from UST)', '1X1500X1', 0, 1500, 0, 'Subtotal', '', 0, 3300, 1500, 'Lunch / Dinner', '1X90X1', 0, 0, 0, 'Snack', '1X50X1', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 113, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 114, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 115, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 116, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 118, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 119, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 101, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 121, '', '', 'Student Volunteers', '1X300X1', 0, 300, 0, 'Faculty/Admin/Support Staff Volunteers', '1X1500X1', 0, 1500, 0, 'Volunteers from the Partner Community or Institution', '1X500X1', 0, 0, 500, 'Volunteer External Resource Person (not from UST)', '1X1500X1', 0, 1500, 0, 'Subtotal', '', 0, 3300, 1500, 'Lunch / Dinner', '1X90X1', 0, 0, 0, 'Snack', '1X50X1', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 122, '', '', 'Student Volunteers', '1X300X1', 0, 300, 0, 'Faculty/Admin/Support Staff Volunteers', '1X1500X1', 0, 1500, 0, 'Volunteers from the Partner Community or Institution', '1X500X1', 0, 0, 500, 'Volunteer External Resource Person (not from UST)', '1X1500X1', 0, 1500, 0, 'Subtotal', '', 0, 3300, 1500, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 1, '', '', 'Student Volunteers', '1X300X1', 0, 300, 0, 'Faculty/Admin/Support Staff Volunteers', '1X1500X1', 0, 1500, 0, 'Volunteers from the Partner Community or Institution', '1X500X1', 0, 0, 500, 'Volunteer External Resource Person (not from UST)', '1X1500X1', 0, 1500, 0, 'Subtotal', '', 0, 3300, 1500, 'Lunch / Dinner', '1X90X1', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 2, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 8, '', '', 'Student Volunteers', '1X300X1', 0, 300, 0, 'Faculty/Admin/Support Staff Volunteers', '1X1500X1', 0, 1500, 0, 'Volunteers from the Partner Community or Institution', '1X500X1', 0, 0, 500, 'Volunteer External Resource Person (not from UST)', '1X1500X1', 0, 1500, 0, 'Subtotal', '', 0, 3300, 1500, 'Lunch / Dinner', '1X90X1', 0, 0, 0, 'Snack', '1X50X1', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 9, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 10, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 11, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 12, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 13, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 14, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, 15, '', '', 'Student Volunteers', '1X300X1', 0, 300, 0, 'Faculty/Admin/Support Staff Volunteers', '1X1500X1', 0, 1500, 0, 'Volunteers from the Partner Community or Institution', '1X500X1', 0, 0, 500, 'Volunteer External Resource Person (not from UST)', '1X1500X1', 0, 1500, 0, 'Subtotal', '', 0, 3300, 1500, 'Lunch / Dinner', '1X90X', 1, 1, 1, 'Snack', 'X50X', 1, 1, 1, 'Venue and Facilities', 'XX', 1, 1, 1, 'Transportation', 'XX, XX, XX', '', '1,1,1', '', '1,1,1', '', '1,1,1', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 6, 6, 6, '', 'XX', 1, 1, 1, '', 'XX', 1, 1, 1, '', 'XX', 1, 1, 1, '', 'XX', 1, 1, 1, '', 'XX', 0, 0, 0, 4, 4, 4, '', 'XX', 1, 1, 1, '', 'XX', 1, 1, 1, '', 'XX', 1, 1, 1, '', 'XX', 1, 1, 1, '', 'XX', 0, 0, 0, 4, 4, 4, 14, 3314, 514, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 16, '', '', 'Student Volunteers', '1X300X1', 0, 300, 0, 'Faculty/Admin/Support Staff Volunteers', '1X1500X1', 0, 1500, 0, 'Volunteers from the Partner Community or Institution', '1X500X1', 0, 0, 500, 'Volunteer External Resource Person (not from UST)', '1X1500X1', 0, 1500, 0, 'Subtotal', '', 0, 3300, 1500, 'Lunch / Dinner', '1X90X1', 1, 1, 1, 'Snack', '1X50X1', 1, 1, 1, 'Venue and Facilities', '1X1111X1', 1, 1, 1, 'Transportation', '1X1111X1, 1X1111X1, 1X1111X1', '', '1,1,1', '', '1,1,1', '', '1,1,1', 'Accommodation', '1X1111X1', 1, 1, 1, '', '1X1111X1', 1, 1, 1, '', '1X1111X1', 1, 1, 1, 9, 9, 9, 'TESTING 222', '1X1X1', 1, 1, 1, 'TESTING 222', '1X1X1', 1, 1, 1, 'TESTING 222', '1X1X1', 1, 1, 1, 'TESTING 222', '1X1X1', 1, 1, 1, 'TESTING 222', '1X1X1', 1, 1, 1, 5, 5, 5, 'TESTING 222', '1X1X1', 1, 1, 1, 'TESTING 222', '1X1X1', 1, 1, 1, 'TESTING 222', '1X1X1', 1, 1, 1, 'TESTING 222', '1X1X1', 1, 1, 1, 'TESTING 222', '1X1X1', 1, 1, 1, 5, 5, 5, 19, 3319, 519, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, 17, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 18, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 2, 0, 0, '', 'XX', 3, 0, 0, '', 'XX', 3, 0, 0, 8, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 19, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 20, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 21, '', '', 'Student Volunteers', '1X300X1', 0, 300, 0, 'Faculty/Admin/Support Staff Volunteers', '1X1500X1', 0, 1500, 0, 'Volunteers from the Partner Community or Institution', '1X500X1', 0, 0, 500, 'Volunteer External Resource Person (not from UST)', '1X1500X1', 0, 1500, 0, 'Subtotal', '', 0, 3300, 1500, 'Lunch / Dinner', '1X90X1', 2, 2, 2, 'Snack', 'X50X', 2, 2, 2, 'Venue and Facilities', 'XX', 2, 2, 2, 'Transportation', 'XX, XX, XX', '', '2,2,2', '', '2,2,2', '', '2,2,2', 'Accommodation', 'XX', 2, 2, 2, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 14, 14, 14, '', 'XX', 2, 2, 2, '', 'XX', 2, 2, 2, '', 'XX', 2, 2, 2, '', 'XX', 2, 0, 2, '', 'XX', 2, 0, 0, 10, 6, 8, '', 'XX', 2, 2, 2, '', 'XX', 2, 2, 2, '', 'XX', 2, 2, 2, '', 'XX', 0, 0, 2, '', 'XX', 0, 0, 0, 6, 6, 8, 30, 3326, 530, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(45, 22, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 23, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, 24, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(48, 25, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, 26, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 27, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, 28, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, 29, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, 30, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, 31, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, 32, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `college_list`
--

CREATE TABLE IF NOT EXISTS `college_list` (
  `college_id` int(11) NOT NULL,
  `college_name` varchar(255) NOT NULL,
  `college_code` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `college_list`
--

INSERT INTO `college_list` (`college_id`, `college_name`, `college_code`) VALUES
(1, 'Institute of Information and Computing Sciences', 'iics'),
(2, 'Faculty of Engineering', 'engg'),
(3, 'Faculty of Sacred Theology', 'sactheo'),
(4, 'Faculty of Philosophy', 'philo'),
(5, 'Faculty of Canon Law', 'canonlaw'),
(6, 'Graduate School', 'gradschool'),
(7, 'College of Commerce and Business Administration', 'commerce'),
(8, 'AMV College of Accountancy', 'amv'),
(9, 'Faculty of Arts and Letters', 'ab'),
(10, 'Faculty of Civil Law', 'civillaw'),
(11, 'College of Education', 'educ'),
(12, 'College of Fine Arts and Design', 'cfad'),
(13, 'Faculty of Medicine and Surgery', 'med'),
(14, 'Conservatory of Music', 'music'),
(15, 'College of Nursing', 'nursing'),
(16, 'Faculty of Pharmacy', 'pharma'),
(17, 'Institute of Physical Education and Athletics', 'ipea'),
(18, 'College of Rehabilitation Sciences', 'crs'),
(19, 'Institute of Religion', 'religion'),
(20, 'College of Science', 'science'),
(21, 'College of Tourism and Hospitality Management', 'cthm'),
(22, 'Simbahayan ', 'simbahayan'),
(23, 'NA - University Wide', 'univwide'),
(24, 'College of Architecture', 'archi'),
(25, 'National Service Training Program (NSTP)', 'nstp');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `sender_name` varchar(255) NOT NULL,
  `proposal_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cover_letter`
--

CREATE TABLE IF NOT EXISTS `cover_letter` (
  `cover_id` int(11) NOT NULL,
  `iso` varchar(100) NOT NULL,
  `year` varchar(50) NOT NULL,
  `date` varchar(100) NOT NULL,
  `address_name` varchar(100) NOT NULL,
  `address_position` varchar(100) NOT NULL,
  `address_company1` varchar(100) NOT NULL,
  `address_company2` varchar(100) NOT NULL,
  `salutation` varchar(100) NOT NULL,
  `body` varchar(5000) NOT NULL,
  `closing` varchar(100) NOT NULL,
  `proj_head1` varchar(100) NOT NULL,
  `position1` varchar(100) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `proposal_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE IF NOT EXISTS `login_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `account_type` varchar(255) NOT NULL,
  `college` varchar(100) NOT NULL,
  `profile` int(11) NOT NULL,
  `reference` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`user_id`, `username`, `password`, `name`, `email`, `account_type`, `college`, `profile`, `reference`) VALUES
(1, 'admin', '098f6bcd4621d373cade4e832627b4f6', 'System Administrator', 'jmcmanzanilla@gmail.com', 'Administrator', '', 1, 0),
(5, 'j_victoria', '49704d02ade8a8ff9e335618ea48d730', 'Jasmin Victoria', 'jmcmanzanilla@gmail.com', 'Signatory', 'simbahayan', 1, 1),
(6, 'm_abenir', '49704d02ade8a8ff9e335618ea48d730', 'Mark Anthony D. Abenir', 'jmcmanzanilla@gmail.com', 'Signatory', 'simbahayan', 1, 1),
(7, 'f_alipao', '49704d02ade8a8ff9e335618ea48d730', 'Froilan Alipao', 'jmcmanzanilla@gmail.com', 'Signatory', 'simbahayan', 1, 1),
(8, 'k_balmeo', '585c3c82d99a3eba07296eca302ebc38', 'Khrisnamonte Balmeo', 'jmcmanzanilla@gmail.com', 'Signatory', 'iics', 1, 1),
(10, 'ust_iss', '585c3c82d99a3eba07296eca302ebc38', 'Information Systems Society', 'jmcmanzanilla@gmail.com', 'Organization', 'iics', 1, 8),
(11, 'iss_pres', '585c3c82d99a3eba07296eca302ebc38', 'Krizsa Tanaleon', 'jmcmanzanilla@gmail.com', 'Signatory', 'iics', 1, 8),
(12, 'iss_adviser', '585c3c82d99a3eba07296eca302ebc38', 'Salve Diaz', 'jmcmanzanilla@gmail.com', 'Signatory', 'iics', 1, 8),
(14, 'a_santos', '585c3c82d99a3eba07296eca302ebc38', 'Alex Santos', 'jmcmanzanilla@gmail.com', 'Signatory', 'iics', 1, 8),
(15, 'h_pama', '585c3c82d99a3eba07296eca302ebc38', 'Father Hermel Pama', 'jmcmanzanilla@gmail.com', 'Signatory', 'iics', 1, 8),
(17, 'm_arepentido', '49704d02ade8a8ff9e335618ea48d730', 'Manuel Arepentido', 'jmcmanzanilla@gmail.com', 'Signatory', 'simbahayan', 1, 1),
(57, 'NSTP-Moderator', '00b1abfcf441b71b77b642c0b209ef0a', 'Jose Ricarte B. Origenes', 'jr@gmail.com', 'Signatory', 'nstp', 1, 1),
(65, 'earth_ust', '3a52573b62196e8b56a19f9d9e1ac1b3', 'EARTH - UST', 'eust@gmail.com', 'Organization', 'univwide', 1, 1),
(66, 'earth_pres', '3a52573b62196e8b56a19f9d9e1ac1b3', 'Adriel Benitez', 'ab@gmail.com', 'Signatory', 'univwide', 1, 1),
(67, 'earth_adviser', '3a52573b62196e8b56a19f9d9e1ac1b3', 'Luis Padilla', 'lp@gmail.com', 'Signatory', 'univwide', 1, 1),
(68, 'f1_nstp', '00b1abfcf441b71b77b642c0b209ef0a', 'Rhea Ylagan', 'ry@gmail.com', 'Organization', 'nstp', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `notification_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL,
  `read` int(11) NOT NULL,
  `proposal_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_signatory`
--

CREATE TABLE IF NOT EXISTS `order_signatory` (
  `signatory_id` int(11) NOT NULL,
  `org_num` int(11) NOT NULL,
  `order_number` int(11) NOT NULL,
  `signatory_num` int(11) NOT NULL,
  `signatory_name` varchar(100) NOT NULL,
  `reference` int(11) NOT NULL,
  `standard` int(11) NOT NULL,
  `simbahayan` int(11) NOT NULL,
  `univ_wide` int(11) NOT NULL,
  `nstp` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_signatory`
--

INSERT INTO `order_signatory` (`signatory_id`, `org_num`, `order_number`, `signatory_num`, `signatory_name`, `reference`, `standard`, `simbahayan`, `univ_wide`, `nstp`) VALUES
(7, 0, 1, 14, 'Alex Santos', 8, 1, 0, 0, 0),
(8, 0, 2, 15, 'Father Hermel Pama', 8, 1, 0, 0, 0),
(21, 10, 1, 11, 'Krizsa Tanaleon', 8, 0, 0, 0, 0),
(22, 10, 2, 12, 'Salve Diaz', 8, 0, 0, 0, 0),
(23, 10, 3, 8, 'Khrisnamonte Balmeo', 8, 0, 0, 0, 0),
(24, 16, 1, 11, 'Krizsa Tanaleon', 8, 0, 0, 0, 0),
(25, 16, 2, 12, 'Salve Diaz', 8, 0, 0, 0, 0),
(26, 16, 3, 8, 'Khrisnamonte Balmeo', 8, 0, 0, 0, 0),
(69, 0, 1, 7, 'Asst. Prof. Froilan Alipao, MA', 1, 1, 1, 0, 0),
(70, 0, 2, 6, 'Dr. Mark Anthony D. Abenir, DSD', 1, 1, 1, 0, 0),
(79, 0, 1, 57, 'Assoc. Prof. Jose Ricarte B. Origenes', 57, 1, 0, 0, 1),
(80, 0, 2, 6, 'Dr. Mark Anthony D. Abenir, DSD', 57, 1, 0, 0, 1),
(81, 65, 1, 66, 'Adriel Benitez', 1, 0, 0, 1, 0),
(82, 65, 2, 67, 'Luis Padilla', 1, 0, 0, 1, 0),
(83, 0, 1, 5, 'Jasmin Victoria', 1, 1, 1, 1, 0),
(84, 0, 2, 6, 'Dr. Mark Anthony D. Abenir, DSD', 1, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `position_id` int(11) NOT NULL,
  `position_name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`position_id`, `position_name`) VALUES
(1, 'Organization Community Development Representative'),
(2, 'Organization President'),
(3, 'Organization Adviser'),
(4, 'College Community Development Coordinator'),
(5, 'Department Chairman'),
(6, 'College Dean'),
(7, 'College Regent'),
(8, 'Simbahayan Program Area Coordinator'),
(9, 'Simbahayan Director'),
(10, 'Budget Officer'),
(11, 'NSTP Moderator');

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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `proj_proposal`
--

CREATE TABLE IF NOT EXISTS `proj_proposal` (
  `proposal_id` int(11) NOT NULL,
  `days` int(11) NOT NULL,
  `page` int(11) NOT NULL,
  `lead_org` varchar(100) NOT NULL,
  `affiliation` varchar(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  `lname1` varchar(100) NOT NULL,
  `fname1` varchar(100) NOT NULL,
  `mi1` varchar(100) NOT NULL,
  `cnum1` varchar(100) NOT NULL,
  `email1` varchar(100) NOT NULL,
  `lname2` varchar(100) NOT NULL,
  `fname2` varchar(100) NOT NULL,
  `mi2` varchar(100) NOT NULL,
  `cnum2` varchar(100) NOT NULL,
  `email2` varchar(100) NOT NULL,
  `collab` varchar(100) NOT NULL,
  `proj_title` varchar(100) NOT NULL,
  `prog_areadev` varchar(100) NOT NULL,
  `community` varchar(100) NOT NULL,
  `participants` int(250) NOT NULL,
  `comser_budget` int(11) NOT NULL,
  `org_budget` int(11) NOT NULL,
  `com_budget` int(11) NOT NULL,
  `proj_background` varchar(1600) NOT NULL,
  `proj_background1` varchar(1600) NOT NULL,
  `proj_background2` varchar(1600) NOT NULL,
  `proj_background3` varchar(1600) NOT NULL,
  `gen_objective` varchar(1600) NOT NULL,
  `spec_obj1` varchar(250) NOT NULL,
  `exp_result1` varchar(250) NOT NULL,
  `spec_obj2` varchar(250) NOT NULL,
  `exp_result2` varchar(250) NOT NULL,
  `spec_obj3` varchar(250) NOT NULL,
  `exp_result3` varchar(250) NOT NULL,
  `spec_obj4` varchar(250) NOT NULL,
  `exp_result4` varchar(250) NOT NULL,
  `spec_obj5` varchar(250) NOT NULL,
  `exp_result5` varchar(250) NOT NULL,
  `proj_evaluation` varchar(250) NOT NULL,
  `proj_evaluation1` varchar(250) NOT NULL,
  `status` varchar(100) NOT NULL,
  `signatory_position` varchar(100) NOT NULL,
  `pending` varchar(100) NOT NULL,
  `budget` int(11) NOT NULL,
  `approved` varchar(100) NOT NULL,
  `cover` int(11) NOT NULL,
  `vehicle` int(11) NOT NULL,
  `upload_date` date NOT NULL,
  `terminal` int(11) NOT NULL,
  `edit` int(11) NOT NULL,
  `program_flow` int(11) NOT NULL,
  `target_date` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `proposal_id` int(11) NOT NULL,
  `date_received` date NOT NULL,
  `lead_org` varchar(50) NOT NULL,
  `proj_title` varchar(250) NOT NULL,
  `proj_area` varchar(250) NOT NULL,
  `beneficiaries` int(11) NOT NULL,
  `date_target` varchar(50) NOT NULL,
  `budget_approved` varchar(50) NOT NULL,
  `budget_code` varchar(50) NOT NULL,
  `report_id` int(11) NOT NULL,
  `transaction_code` int(11) NOT NULL,
  `cr_code` int(11) NOT NULL,
  `student` int(11) NOT NULL,
  `faculty` int(11) NOT NULL,
  `admin` int(11) NOT NULL,
  `staff` int(11) NOT NULL,
  `alumni` int(11) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `saaf`
--

CREATE TABLE IF NOT EXISTS `saaf` (
  `saaf` int(11) NOT NULL,
  `lead_org` varchar(100) NOT NULL,
  `optradio` varchar(100) NOT NULL,
  `coordination` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `objective` varchar(100) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `participant_type` varchar(100) NOT NULL,
  `participants` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date0` varchar(100) NOT NULL,
  `start0` varchar(100) NOT NULL,
  `end0` varchar(100) NOT NULL,
  `nature` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `cover_letter` varchar(100) NOT NULL,
  `budget_proposal` varchar(100) NOT NULL,
  `clearance` varchar(100) NOT NULL,
  `background` varchar(100) NOT NULL,
  `project_proposal` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `mechanics` varchar(100) NOT NULL,
  `request_letter` varchar(100) NOT NULL,
  `script` varchar(100) NOT NULL,
  `judges` varchar(100) NOT NULL,
  `route` varchar(100) NOT NULL,
  `moa` varchar(100) NOT NULL,
  `other_remarks` varchar(100) NOT NULL,
  `itinerary` varchar(100) NOT NULL,
  `consent` varchar(100) NOT NULL,
  `package` varchar(100) NOT NULL,
  `medcert` varchar(100) NOT NULL,
  `participant_list` varchar(100) NOT NULL,
  `floor_plan` varchar(100) NOT NULL,
  `name_president` varchar(100) NOT NULL,
  `signature_president` blob NOT NULL,
  `name_faculty` varchar(100) NOT NULL,
  `signature_faculty` blob NOT NULL,
  `signature_campus` blob NOT NULL,
  `signature_comdev` blob NOT NULL,
  `name0` varchar(100) NOT NULL,
  `attach0` varchar(100) NOT NULL,
  `number0` varchar(100) NOT NULL,
  `name_swdb` varchar(100) NOT NULL,
  `signature_swdb` blob NOT NULL,
  `date_swdb` varchar(100) NOT NULL,
  `name_dean` varchar(100) NOT NULL,
  `signature_dean` blob NOT NULL,
  `date_dean` varchar(100) NOT NULL,
  `name_regent` varchar(100) NOT NULL,
  `signature_regent` blob NOT NULL,
  `date_regent` varchar(100) NOT NULL,
  `office` varchar(100) NOT NULL,
  `name_approver` varchar(100) NOT NULL,
  `signature_approver` blob NOT NULL,
  `date_venue` varchar(100) NOT NULL,
  `name_osa` varchar(100) NOT NULL,
  `signature_osa` blob NOT NULL,
  `date_osa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `signatory_profile`
--

CREATE TABLE IF NOT EXISTS `signatory_profile` (
  `signatory_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mi` varchar(11) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `position` varchar(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `security_question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `signature` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signatory_profile`
--

INSERT INTO `signatory_profile` (`signatory_id`, `user_id`, `fname`, `mi`, `lname`, `position`, `college`, `email`, `contact_number`, `address`, `security_question`, `answer`, `signature`) VALUES
(2, 8, 'Khrisnamonte', 'A.', 'Balmeo', 'College Community Development Coordinator', 'Institute of Information and Computing Sciences', 'jmcmanzanilla@gmail.com', '09177245421', 'Quezon', 'Yes?', 'Yes', 'uploads/qq.jpg'),
(4, 5, 'Jasmin', 'D.', 'Victoria', 'Simbahayan Program Area Coordinator', 'Simbahayan ', 'jmcmanzanilla@gmail.com', '6451225', 'Antipolo City', 'Name of dog', 'Duke', 'uploads/rovinesig.png'),
(5, 7, 'Froilan', 'D.', 'Alipao', 'Simbahayan Program Area Coordinator', 'Simbahayan ', 'jmcmanzanilla@gmail.com', '6451225', 'Antipolo City', 'Name of dog', 'Duke', 'uploads/qq.jpg'),
(6, 6, 'Mark', 'D.', 'Abenir', 'Simbahayan Director', 'Simbahayan ', 'jmcmanzanilla@gmail.com', '6451225', 'Antipolo City', 'Name of dog', 'Duke', 'uploads/earthadv.jpg'),
(8, 12, 'Salve', 'L', 'Diaz', 'Organization Adviser', 'Institute of Information and Computing Sciences', 'asc.anastacio@gmail.com', '09175253752', 'asdfgfh', 'What is the name of your fattest cat?', 'Kuting', 'uploads/nstpmode.jpg'),
(9, 11, 'Krizsa Marie', 'D', 'Tanaleon', 'Organization President', 'Institute of Information and Computing Sciences', 'jmcmanzanilla@gmail.com', '09159105104', 'QC', 'Yes?', 'NO', 'uploads/Krizsa.jpg'),
(10, 17, 'Manuel', 'D.', 'Arepentido', 'Budget Officer', 'Simbahayan', 'jmcmanzanilla@gmail.com', '6451225', 'Antipolo City', 'Dog''s Name', 'Duke', ''),
(11, 19, 'Krizsa Marie', 'Dela Pena', 'Tanaleon', 'College Community Development Coordinator', 'Faculty of Engineering', 'krizsamarietanaleon@gmail.com', '09173274123', 'esfrtgreh', 'Hello?', 'Hi', 'uploads/hahaha.jpg'),
(12, 20, 'Carissa', 'V', 'Gaviola', 'Organization Adviser', 'NA - University Wide', 'cavgangelica@gmail.com', '1234567', 'sdlkfrje', 'hi', 'hello', 'uploads/qq.jpg'),
(13, 22, 'Joan Marie', 'Calma', 'Manzanilla', 'College Community Development Coordinator', 'National Service Training Program (NSTP)', 'jmcmanzanilla@gmail.com', '6451225', 'Antipolo City', 'Nakamove on ka na?', 'Secret', 'uploads/fgfd.png'),
(19, 53, 'raymond', 's', 'chen', 'Organization President', 'Institute of Information and Computing Sciences', 'rr@gmail.com', '24413231', 'manila', 'good?', 'no', 'uploads/hahaha.jpg'),
(20, 14, 'Alex', 'A', 'Santos', 'IICS Director', 'Institute of Information and Computing Sciences', 'jmcmanzanilla@gmail.com', '09123456764', 'Metro Manila', 'good?', 'no', 'uploads/rovinesig.png'),
(21, 15, 'Hermel', 'S', 'Pama', 'College Regent', 'Institute of Information and Computing Sciences', 'jmcmanzanilla@gmail.com', '09123454332', 'Metro Manila', 'good?', 'no', 'uploads/s6.jpg'),
(22, 13, 'Mylene', 'A', 'Domingo', 'Department Chairman', 'Institute of Information and Computing Sciences', 'jmcmanzanilla@gmail.com', '2134242342', 'manila', 'good?', 'no', 'uploads/hahaha.jpg'),
(25, 57, 'Jose Ricarte', 'B.', 'Origenes', 'NSTP Moderator', 'National Service Training Program (NSTP)', 'jr@gmail.com', '09157772345', 'manila', 'good?', 'yes', 'uploads/qq.jpg'),
(33, 66, 'Adriel', 'L.', 'Benitez', 'Organization President', 'NA - University Wide', 'ab@gmail.com', '09787577455', 'manila', 'good?', 'yes', 'uploads/earthpress.jpg'),
(34, 67, 'Luis', 'A.', 'Padilla', 'Organization Adviser', 'NA - University Wide', 'lp@gmail.com', '09975647866', 'manila', 'pet name?', 'mocha', 'uploads/earthadv.jpg'),
(35, 69, 'Mark', 'D.', 'Abenir', 'Simbahayan Director', 'Simbahayan ', 'ma@gmail.com', '6464565465465', 'Metro Manila', 'color?', 'blue', 'uploads/earthpress.png');

-- --------------------------------------------------------

--
-- Table structure for table `simbahayan_order`
--

CREATE TABLE IF NOT EXISTS `simbahayan_order` (
  `signatory_id` int(11) NOT NULL,
  `order_number` int(11) NOT NULL,
  `signatory_num` int(11) NOT NULL,
  `signatory_name` varchar(255) NOT NULL,
  `reference` int(11) NOT NULL,
  `simbahayan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `status_update`
--

CREATE TABLE IF NOT EXISTS `status_update` (
  `update_id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `proposal_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `action` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student_profile`
--

CREATE TABLE IF NOT EXISTS `student_profile` (
  `org_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `org_name` varchar(100) NOT NULL,
  `affiliation` varchar(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mi` varchar(100) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `position` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `signature` varchar(100) NOT NULL,
  `security_question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_profile`
--

INSERT INTO `student_profile` (`org_id`, `user_id`, `org_name`, `affiliation`, `college`, `fname`, `mi`, `lname`, `position`, `email`, `contact_number`, `signature`, `security_question`, `answer`) VALUES
(3, 10, 'Information Systems Society', 'College-Based', 'Institute of Information and Computing Sciences', 'Nicolo Joseph', 'A.', 'Punzalan', 'Organization Community Development Representative', 'jmcmanzanilla@gmail.com', '09177245421', 'uploads/earthust.jpg', 'What is the name of your dog?', 'Sushi'),
(9, 16, 'Computer Sciences Society', 'College-Based', 'Institute of Information and Computing Sciences', 'Angelica', 'Santos', 'Gonzales', 'Project Head', 'jmcmanzanilla@gmail.com', '09157772345', 'uploads/hahaha.jpg', 'you good?', 'no'),
(10, 58, 'Rhea Ylagan', 'None - NSTP', 'National Service Training Program (NSTP)', 'Rhea', 'K.', 'Ylagan', 'NSTP Facilitator', 'ry@gmail.com', '09787577455', 'uploads/earthust.jpg', 'okay?', 'yes'),
(11, 65, 'EARTH - UST', 'University-Wide', 'NA - University Wide', 'Abigail', 'D.', 'Brioles', 'Organization Community Development Representative', 'eust@gmail.com', '09123456764', 'uploads/earthust.jpg', 'still good?', 'yes'),
(12, 68, 'F1-NSTP', 'None - NSTP', 'National Service Training Program (NSTP)', 'Rhea', 'B.', 'Ylagan', 'NSTP Facilitator', 'ry@gmail.com', '09123456764', 'uploads/earthust.jpg', 'favorite color?', 'pink');

-- --------------------------------------------------------

--
-- Table structure for table `terminal`
--

CREATE TABLE IF NOT EXISTS `terminal` (
  `terminal_id` int(11) NOT NULL,
  `proposal_id` int(11) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `file_path1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `vehiclerequest`
--

CREATE TABLE IF NOT EXISTS `vehiclerequest` (
  `vehicle_id` int(11) NOT NULL,
  `osg_num` varchar(100) NOT NULL,
  `borrower` varchar(50) NOT NULL,
  `contact_person` varchar(30) NOT NULL,
  `contact_num` varchar(30) NOT NULL,
  `title` varchar(200) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `datetrip` varchar(100) NOT NULL,
  `etd` varchar(10) NOT NULL,
  `place` varchar(100) NOT NULL,
  `passengersnum` int(11) NOT NULL,
  `vehicle` varchar(255) NOT NULL,
  `driver` varchar(30) NOT NULL,
  `rental` varchar(10) NOT NULL,
  `proposal_id` int(11) NOT NULL,
  `date_submitted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `approval_form`
--
ALTER TABLE `approval_form`
  ADD PRIMARY KEY (`approval_id`);

--
-- Indexes for table `audit_trail`
--
ALTER TABLE `audit_trail`
  ADD PRIMARY KEY (`audit_id`);

--
-- Indexes for table `budget_proposal`
--
ALTER TABLE `budget_proposal`
  ADD PRIMARY KEY (`budget_id`);

--
-- Indexes for table `college_list`
--
ALTER TABLE `college_list`
  ADD PRIMARY KEY (`college_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `cover_letter`
--
ALTER TABLE `cover_letter`
  ADD PRIMARY KEY (`cover_id`), ADD UNIQUE KEY `proposal_id` (`proposal_id`);

--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `username_2` (`username`);

--
-- Indexes for table `order_signatory`
--
ALTER TABLE `order_signatory`
  ADD PRIMARY KEY (`signatory_id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `program_flow`
--
ALTER TABLE `program_flow`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `proj_proposal`
--
ALTER TABLE `proj_proposal`
  ADD PRIMARY KEY (`proposal_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `signatory_profile`
--
ALTER TABLE `signatory_profile`
  ADD PRIMARY KEY (`signatory_id`);

--
-- Indexes for table `simbahayan_order`
--
ALTER TABLE `simbahayan_order`
  ADD PRIMARY KEY (`signatory_id`);

--
-- Indexes for table `status_update`
--
ALTER TABLE `status_update`
  ADD PRIMARY KEY (`update_id`);

--
-- Indexes for table `student_profile`
--
ALTER TABLE `student_profile`
  ADD PRIMARY KEY (`org_id`);

--
-- Indexes for table `terminal`
--
ALTER TABLE `terminal`
  ADD PRIMARY KEY (`terminal_id`);

--
-- Indexes for table `vehiclerequest`
--
ALTER TABLE `vehiclerequest`
  ADD PRIMARY KEY (`vehicle_id`), ADD UNIQUE KEY `proposal_id` (`proposal_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcement_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `approval_form`
--
ALTER TABLE `approval_form`
  MODIFY `approval_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `audit_trail`
--
ALTER TABLE `audit_trail`
  MODIFY `audit_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1179;
--
-- AUTO_INCREMENT for table `budget_proposal`
--
ALTER TABLE `budget_proposal`
  MODIFY `budget_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `college_list`
--
ALTER TABLE `college_list`
  MODIFY `college_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cover_letter`
--
ALTER TABLE `cover_letter`
  MODIFY `cover_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `login_user`
--
ALTER TABLE `login_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `order_signatory`
--
ALTER TABLE `order_signatory`
  MODIFY `signatory_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `position_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `program_flow`
--
ALTER TABLE `program_flow`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `proj_proposal`
--
ALTER TABLE `proj_proposal`
  MODIFY `proposal_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `signatory_profile`
--
ALTER TABLE `signatory_profile`
  MODIFY `signatory_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `simbahayan_order`
--
ALTER TABLE `simbahayan_order`
  MODIFY `signatory_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `status_update`
--
ALTER TABLE `status_update`
  MODIFY `update_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `student_profile`
--
ALTER TABLE `student_profile`
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `terminal`
--
ALTER TABLE `terminal`
  MODIFY `terminal_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vehiclerequest`
--
ALTER TABLE `vehiclerequest`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

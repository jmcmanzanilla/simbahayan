-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2017 at 06:12 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iics2016_simbahayan`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `announcement_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `sender` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `announcement` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `approval_form`
--

CREATE TABLE `approval_form` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `approval_form`
--

INSERT INTO `approval_form` (`approval_id`, `title`, `proponent`, `affiliation`, `prog_area`, `community`, `date`, `budget`, `reports`, `attendance`, `presence_profile`, `presence_moa`, `comments1`, `reviewed`, `budget_code`, `comments2`, `recommend_progarea`, `budget_tobe`, `comments3`, `approve_director`, `finalbudget`, `finalbudget_code`, `cash_req`, `date_today`, `transpo_date`, `proposal_id`, `signature_coor`, `signature_director`, `cashreqnum`) VALUES
(4, 'testing1', '25', 'University-Wide', 'Health and Wellness Development', 'tarlac', '2017-03-31,', '212', '', '', '', '', '', '', '', 'drgrgrg', 'Recommended', '11111', 'fgdfgdfg', 'Yes', '1122212', '1234', '', '', '', 9, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `audit_trail`
--

CREATE TABLE `audit_trail` (
  `audit_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `action` varchar(250) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `audit_trail`
--

INSERT INTO `audit_trail` (`audit_id`, `user_id`, `action`, `datetime`) VALUES
(1773, 1, 'admin LOGGED IN.', '2017-02-09 12:34:26'),
(1774, 1, 'admin LOGGED OUT.', '2017-02-09 12:45:10'),
(1775, 20, 'm_abenir LOGGED IN.', '2017-02-09 12:45:35'),
(1776, 20, 'm_abenir LOGGED OUT.', '2017-02-09 12:46:32'),
(1777, 22, 'f_alipao LOGGED IN.', '2017-02-09 12:46:38'),
(1778, 22, 'f_alipao LOGGED OUT.', '2017-02-09 12:47:45'),
(1779, 21, 'j_victoria LOGGED IN.', '2017-02-09 12:47:52'),
(1780, 21, 'j_victoria LOGGED OUT.', '2017-02-09 12:48:49'),
(1781, 25, 'earth_ust LOGGED IN.', '2017-02-09 12:49:05'),
(1782, 25, 'earth_ust LOGGED OUT.', '2017-02-09 12:50:58'),
(1783, 26, 'earth_pres LOGGED IN.', '2017-02-09 12:51:06'),
(1784, 26, 'earth_pres LOGGED OUT.', '2017-02-09 12:51:35'),
(1785, 27, 'earth_adviser LOGGED IN.', '2017-02-09 12:51:41'),
(1786, 27, 'earth_adviser LOGGED OUT.', '2017-02-09 13:03:51'),
(1787, 24, 'k_balmeo LOGGED IN.', '2017-02-09 13:03:58'),
(1788, 24, 'k_balmeo LOGGED OUT.', '2017-02-09 13:04:43'),
(1789, 23, 'simbahayancoor LOGGED IN.', '2017-02-09 13:05:23'),
(1790, 23, 'simbahayancoor LOGGED OUT.', '2017-02-09 13:06:06'),
(1791, 25, 'earth_ust LOGGED IN.', '2017-02-09 13:06:17'),
(1792, 25, 'earth_ust LOGGED OUT.', '2017-02-09 13:06:24'),
(1793, 1, 'admin LOGGED IN.', '2017-02-09 13:06:28'),
(1794, 1, 'admin LOGGED OUT.', '2017-02-09 13:07:53'),
(1795, 25, 'earth_ust LOGGED IN.', '2017-02-09 13:07:57'),
(1796, 25, 'earth_ust LOGGED OUT.', '2017-02-09 13:09:27'),
(1797, 26, 'earth_pres LOGGED IN.', '2017-02-09 13:09:34'),
(1798, 26, 'earth_pres LOGGED OUT.', '2017-02-09 13:09:54'),
(1799, 27, 'earth_adviser LOGGED IN.', '2017-02-09 13:09:59'),
(1800, 27, 'earth_adviser LOGGED OUT.', '2017-02-09 13:10:15'),
(1801, 23, 'simbahayancoor LOGGED IN.', '2017-02-09 13:11:10'),
(1802, 23, 'simbahayancoor LOGGED OUT.', '2017-02-09 13:11:32'),
(1803, 20, 'm_abenir LOGGED IN.', '2017-02-09 13:11:41');

-- --------------------------------------------------------

--
-- Table structure for table `budget_proposal`
--

CREATE TABLE `budget_proposal` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `budget_proposal`
--

INSERT INTO `budget_proposal` (`budget_id`, `proposal_id`, `proj_evaluation`, `proj_evaluation1`, `pname0`, `pmail0`, `pfund0`, `porg0`, `pcom0`, `pname1`, `pmail1`, `pfund1`, `porg1`, `pcom1`, `pname2`, `pmail2`, `pfund2`, `porg2`, `pcom2`, `pname3`, `pmail3`, `pfund3`, `porg3`, `pcom3`, `pname4`, `pmail4`, `pfund4`, `porg4`, `pcom4`, `oname0`, `omail0`, `ofund0`, `oorg0`, `ocom0`, `oname1`, `omail1`, `ofund1`, `oorg1`, `ocom1`, `oname2`, `omail2`, `ofund2`, `oorg2`, `ocom2`, `oname3`, `omail3`, `oname7`, `omail7`, `oname8`, `omail8`, `oname9`, `omail9`, `oname4`, `omail4`, `ofund6`, `oorg6`, `ocom6`, `oname5`, `omail5`, `ofund7`, `oorg7`, `ocom7`, `oname6`, `omail6`, `ofund8`, `oorg8`, `ocom8`, `ofund9`, `oorg9`, `ocom9`, `mname0`, `mmail0`, `mfund0`, `morg0`, `mcom0`, `mname1`, `mmail1`, `mfund1`, `morg1`, `mcom1`, `mname2`, `mmail2`, `mfund2`, `morg2`, `mcom2`, `mname3`, `mmail3`, `mfund3`, `morg3`, `mcom3`, `mname4`, `mmail4`, `mfund4`, `morg4`, `mcom4`, `mfund5`, `morg5`, `mcom5`, `otname0`, `otmail0`, `otfund0`, `otorg0`, `otcom0`, `otname1`, `otmail1`, `otfund1`, `otorg1`, `otcom1`, `otname2`, `otmail2`, `otfund2`, `otorg2`, `otcom2`, `otname3`, `otmail3`, `otfund3`, `otorg3`, `otcom3`, `otname4`, `otmail4`, `otfund4`, `otorg4`, `otcom4`, `otfund5`, `otorg5`, `otcom5`, `otfund6`, `otorg6`, `otcom6`, `ptotalfund`, `ptotalorg`, `ptotalcom`, `ototalfund`, `ototalorg`, `ototalcom`, `mtotalfund`, `mtotalorg`, `mtotalcom`, `ottotalfund`, `ottotalorg`, `ottotalcom`, `totalfund`, `totalorg`, `totalcom`) VALUES
(92, 9, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `college_list`
--

CREATE TABLE `college_list` (
  `college_id` int(11) NOT NULL,
  `college_name` varchar(255) NOT NULL,
  `college_code` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `comment` (
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

CREATE TABLE `cover_letter` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cover_letter`
--

INSERT INTO `cover_letter` (`cover_id`, `iso`, `year`, `date`, `address_name`, `address_position`, `address_company1`, `address_company2`, `salutation`, `body`, `closing`, `proj_head1`, `position1`, `title`, `proposal_id`) VALUES
(9, '', 'AY 2016-2017', 'feb 9, 2017', 'DR. MARK ANTHONY D. ABENIR, DSD', 'Director - simbahayan', 'University of Santo Tomas', 'Espana, Manila', 'Greetings!', 'sfsdfsdfsdfs', 'Respectfully yours,', 'Abigail D.. Brioles', 'Project Head', 'testing1', 9);

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `account_type` varchar(255) NOT NULL,
  `college` varchar(100) NOT NULL,
  `profile` int(11) NOT NULL,
  `reference` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`user_id`, `username`, `password`, `name`, `email`, `account_type`, `college`, `profile`, `reference`) VALUES
(1, 'admin', '098f6bcd4621d373cade4e832627b4f6', 'System Administrator', 'jmcmanzanilla@gmail.com', 'Administrator', '', 1, 0),
(20, 'm_abenir', '49704d02ade8a8ff9e335618ea48d730', 'Asst. Prof. Mark Anthony D. Abenir, DSD', 'mabenir@gmail.com', 'Signatory', 'simbahayan', 1, 1),
(21, 'j_victoria', '49704d02ade8a8ff9e335618ea48d730', 'Jasmin Victoria', 'j@gmail.com', 'Signatory', 'simbahayan', 1, 1),
(22, 'f_alipao', '49704d02ade8a8ff9e335618ea48d730', 'Froilan Alipao', 'kp@gmail.com', 'Signatory', 'simbahayan', 1, 1),
(23, 'simbahayancoor', '49704d02ade8a8ff9e335618ea48d730', 'Simbahayan Program Coordinator', 'scdo@gmail.com', 'Signatory', 'simbahayan', 1, 1),
(24, 'k_balmeo', '585c3c82d99a3eba07296eca302ebc38', 'Khrisnamonte balmeo', 'kb@gmail.com', 'Signatory', 'iics', 1, 1),
(25, 'earth_ust', '3a52573b62196e8b56a19f9d9e1ac1b3', 'EARTH_UST', 'eust@gmail.com', 'Organization', 'univwide', 1, 1),
(26, 'earth_pres', '3a52573b62196e8b56a19f9d9e1ac1b3', 'Adriel Benitez', 'ab@gmail.com', 'Signatory', 'univwide', 1, 1),
(27, 'earth_adviser', '3a52573b62196e8b56a19f9d9e1ac1b3', 'Luis Padilla', 'lp@gmail.com', 'Signatory', 'univwide', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
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

CREATE TABLE `order_signatory` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_signatory`
--

INSERT INTO `order_signatory` (`signatory_id`, `org_num`, `order_number`, `signatory_num`, `signatory_name`, `reference`, `standard`, `simbahayan`, `univ_wide`, `nstp`) VALUES
(16, 0, 1, 23, 'Simbahayan Program Coordinator', 1, 1, 1, 1, 0),
(17, 0, 2, 20, 'Asst. Prof. Mark Anthony D. Abenir, DSD', 1, 1, 1, 1, 0),
(18, 0, 1, 22, 'Froilan Alipao', 1, 1, 1, 0, 0),
(19, 0, 2, 20, 'Asst. Prof. Mark Anthony D. Abenir, DSD', 1, 1, 1, 0, 0),
(20, 25, 1, 26, 'Adriel Benitez', 1, 0, 0, 1, 0),
(21, 25, 2, 27, 'Luis Padilla', 1, 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `position_id` int(11) NOT NULL,
  `position_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `program_flow` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `program_flow`
--

INSERT INTO `program_flow` (`program_id`, `proposal_id`, `date`, `address`, `time0`, `description0`, `person0`, `time1`, `description1`, `person1`, `time2`, `description2`, `person2`, `time3`, `description3`, `person3`, `time4`, `description4`, `person4`, `time5`, `description5`, `person5`, `time6`, `description6`, `person6`, `time7`, `description7`, `person7`, `time8`, `description8`, `person8`, `time9`, `description9`, `person9`, `time10`, `description10`, `person10`, `time11`, `description11`, `person11`, `time12`, `description12`, `person12`, `time13`, `description13`, `person13`, `time14`, `description14`, `person14`, `time15`, `description15`, `person15`) VALUES
(9, 9, '2017-03-31', 'dsadasd', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `proj_proposal`
--

CREATE TABLE `proj_proposal` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proj_proposal`
--

INSERT INTO `proj_proposal` (`proposal_id`, `days`, `page`, `lead_org`, `affiliation`, `college`, `lname1`, `fname1`, `mi1`, `cnum1`, `email1`, `lname2`, `fname2`, `mi2`, `cnum2`, `email2`, `collab`, `proj_title`, `prog_areadev`, `community`, `participants`, `comser_budget`, `org_budget`, `com_budget`, `proj_background`, `proj_background1`, `proj_background2`, `proj_background3`, `gen_objective`, `spec_obj1`, `exp_result1`, `spec_obj2`, `exp_result2`, `spec_obj3`, `exp_result3`, `spec_obj4`, `exp_result4`, `spec_obj5`, `exp_result5`, `proj_evaluation`, `proj_evaluation1`, `status`, `signatory_position`, `pending`, `budget`, `approved`, `cover`, `vehicle`, `upload_date`, `terminal`, `edit`, `program_flow`, `target_date`) VALUES
(9, 1, 0, '25', 'University-Wide', 'NA - University Wide', 'Brioles', 'Abigail', 'D.', '09126574565', 'eust@gmail.com', 'fgdgdfg', 'dfgdfgdf', 'k', '09123343423', 'dfgs@gmail.com', 'na', 'testing1', 'Health and Wellness Development', 'tarlac', 12, 212, 212, 212, 'dsadasd', 'sadasd', 'dsadas', 'dsadad', 'asdad', 'dasd', 'asd', 'asdas', 'dasd', 'asda', 'sda', 'dasd', 'asdad', 'asda', 'dada', 'dasda', 'sasda', 'Approved', '', 'Complete', 1, '', 1, 0, '2017-02-09', 0, 0, 1, '2017-03-31,');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`proposal_id`, `date_received`, `lead_org`, `proj_title`, `proj_area`, `beneficiaries`, `date_target`, `budget_approved`, `budget_code`, `report_id`, `transaction_code`, `cr_code`, `student`, `faculty`, `admin`, `staff`, `alumni`, `remarks`) VALUES
(9, '2017-02-09', '', 'testing1', 'tarlac', 12, '2017-03-31,', '', '', 4, 0, 0, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `saaf`
--

CREATE TABLE `saaf` (
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

CREATE TABLE `signatory_profile` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signatory_profile`
--

INSERT INTO `signatory_profile` (`signatory_id`, `user_id`, `fname`, `mi`, `lname`, `position`, `college`, `email`, `contact_number`, `address`, `security_question`, `answer`, `signature`) VALUES
(16, 20, 'Mark', 'D.', 'Abenir', 'Simbahayan Director', 'Simbahayan ', 'mabenir@gmail.com', '09126574565', 'manila', 'color?', 'Blue', ''),
(17, 22, 'Froilan', 'H.', 'Alipao', 'Simbahayan Program Area Coordinator', 'Simbahayan ', 'kp@gmail.com', '09126574567', 'Manila', 'color?', 'Blue', ''),
(18, 21, 'Jasmin', 'J.', 'Victoria', 'Simbahayan Program Area Coordinator', 'Simbahayan ', 'j@gmail.com', '09163454345', 'manila', 'color?', 'pink', ''),
(19, 26, 'Adriel', 'J.', 'Benitez', 'Organization President', 'NA - University Wide', 'ab@gmail.com', '09126574565', 'manila', 'color?', 'Blue', ''),
(20, 27, 'Luis', 'V.', 'Padilla', 'Organization Adviser', 'NA - University Wide', 'lp@gmail.com', '09126574567', 'manila', 'color?', 'Blue', ''),
(21, 24, 'Khrisnamonte', 'D.', 'Balmeo', 'College Community Development Coordinator', 'Institute of Information and Computing Sciences', 'kb@gmail.com', '09126574567', 'manila', 'color?', 'Blue', ''),
(22, 23, 'Simbahayan ', 'Program', 'Coordinator', 'Simbahayan Program Area Coordinator', 'Simbahayan ', 'scdo@gmail.com', '09126574565', 'manila', 'color?', 'pink', '');

-- --------------------------------------------------------

--
-- Table structure for table `simbahayan_order`
--

CREATE TABLE `simbahayan_order` (
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

CREATE TABLE `status_update` (
  `update_id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `proposal_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `action` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status_update`
--

INSERT INTO `status_update` (`update_id`, `date`, `proposal_id`, `user_id`, `action`, `reason`) VALUES
(24, 0, 9, 26, 'Approved', ''),
(25, 0, 9, 27, 'Approved', ''),
(26, 0, 9, 23, 'Approved', ''),
(27, 0, 9, 20, 'Approved', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_profile`
--

CREATE TABLE `student_profile` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_profile`
--

INSERT INTO `student_profile` (`org_id`, `user_id`, `org_name`, `affiliation`, `college`, `fname`, `mi`, `lname`, `position`, `email`, `contact_number`, `signature`, `security_question`, `answer`) VALUES
(22, 25, 'EARTH_UST', 'University-Wide', 'NA - University Wide', 'Abigail', 'D.', 'Brioles', 'Organization Community Development Representative', 'eust@gmail.com', '09126574565', 'uploads/earthadv.jpg', 'color?', 'pink');

-- --------------------------------------------------------

--
-- Table structure for table `terminal`
--

CREATE TABLE `terminal` (
  `terminal_id` int(11) NOT NULL,
  `proposal_id` int(11) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `file_path1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `vehiclerequest`
--

CREATE TABLE `vehiclerequest` (
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
  ADD PRIMARY KEY (`cover_id`),
  ADD UNIQUE KEY `proposal_id` (`proposal_id`);

--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`);

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
  ADD PRIMARY KEY (`vehicle_id`),
  ADD UNIQUE KEY `proposal_id` (`proposal_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `approval_form`
--
ALTER TABLE `approval_form`
  MODIFY `approval_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `audit_trail`
--
ALTER TABLE `audit_trail`
  MODIFY `audit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1804;
--
-- AUTO_INCREMENT for table `budget_proposal`
--
ALTER TABLE `budget_proposal`
  MODIFY `budget_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `college_list`
--
ALTER TABLE `college_list`
  MODIFY `college_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cover_letter`
--
ALTER TABLE `cover_letter`
  MODIFY `cover_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `login_user`
--
ALTER TABLE `login_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `order_signatory`
--
ALTER TABLE `order_signatory`
  MODIFY `signatory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `position_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `program_flow`
--
ALTER TABLE `program_flow`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `proj_proposal`
--
ALTER TABLE `proj_proposal`
  MODIFY `proposal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `signatory_profile`
--
ALTER TABLE `signatory_profile`
  MODIFY `signatory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `simbahayan_order`
--
ALTER TABLE `simbahayan_order`
  MODIFY `signatory_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `status_update`
--
ALTER TABLE `status_update`
  MODIFY `update_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `student_profile`
--
ALTER TABLE `student_profile`
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `terminal`
--
ALTER TABLE `terminal`
  MODIFY `terminal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vehiclerequest`
--
ALTER TABLE `vehiclerequest`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

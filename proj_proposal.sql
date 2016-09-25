-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2016 at 06:09 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proj_proposal`
--

INSERT INTO `proj_proposal` (`proposal_id`, `days`, `page`, `lead_org`, `affiliation`, `college`, `lname1`, `fname1`, `mi1`, `cnum1`, `email1`, `lname2`, `fname2`, `mi2`, `cnum2`, `email2`, `collab`, `proj_title`, `prog_areadev`, `community`, `participants`, `comser_budget`, `org_budget`, `com_budget`, `proj_background`, `proj_background1`, `proj_background2`, `proj_background3`, `gen_objective`, `spec_obj1`, `exp_result1`, `spec_obj2`, `exp_result2`, `spec_obj3`, `exp_result3`, `spec_obj4`, `exp_result4`, `proj_evaluation`, `proj_evaluation1`, `status`, `signatory_position`, `pending`, `budget`, `approved`, `cover`, `vehicle`, `upload_date`, `terminal`, `edit`, `program_flow`, `target_date`) VALUES
(101, 0, 0, '65', 'University-Wide', 'NA - University Wide', 'Brioles', 'Abigail', 'D.', '09123456764', 'eust@gmail.com', 'cruz', 'froy', 'h.', '09121212122', 'friy@gmail.com', 'na', 'testing 1', 'Socio-pastoral Ministry and Evangelization', 'tarlac', 12, 212, 212, 212, 'testing 1', '', '', '', 'testing 1', 'testing 1', 'testing 1', 'testing 1', 'testing 1', 'testing 1', 'testing 1', '', '', 'fsfsfsdfsdfsdfs', '', 'Pending', '', 'User must complete other forms before approval begins', 0, '', 0, 0, '2016-09-20', 0, 0, 0, ''),
(102, 0, 0, '65', 'University-Wide', 'NA - University Wide', 'Brioles', 'Abigail', 'D.', '09123456764', 'eust@gmail.com', 'tan', 'uy', 'h', '09423423423', 'dsd@gmail.com', 'na', 'testing2', 'Leadership, Organizational Development and Good Governance', 'bulacan', 12, 212, 212, 212, 'qqqqq', '', '', '', 'qqqq', 'qqqq', 'qqq', 'qqq', 'qq', 'qqq', 'qqq', '', '', '', '', 'Pending', '', 'User must complete other forms before approval begins', 0, '', 0, 0, '2016-09-20', 0, 0, 0, ''),
(103, 1, 0, '65', 'University-Wide', 'NA - University Wide', 'Brioles', 'Abigail', 'D.', '09123456764', 'eust@gmail.com', 'sdad', 'dsdd', 'a', '4352552', 'zcz@gmail.com', 'na', 'testing3', 'Disaster Risk Reduction and Management', 'bulacanfffdf', 12, 212, 212, 212, 'ddddd', '', '', '', 'dddd', 'ddd', 'ddd', 'ddd', 'ddd', 'ddd', 'dddfddgdfgdfg', '', '', 'fsdfdfsdfsfthththhtrhgfdgdfgsdgsdgsgsgsgsgsgsgsgsdg', '', 'Pending', '', '66', 1, '', 1, 0, '2016-09-20', 1, 0, 1, '2016-10-20,'),
(104, 1, 0, '68', 'None - NSTP', 'National Service Training Program (NSTP)', 'Ylagan', 'Rhea', 'B.', '09123456764', 'ry@gmail.com', 'Reyes', 'Kim', 'H.', '09182324234', 'rk@gmail.com', 'NA', 'TESTING 1', 'Health and Wellness Development', 'tarlac', 12, 212, 212, 212, 'TESTING 1', '', '', '', 'TESTING 1', 'TESTING 1', 'TESTING 1', 'TESTING 1', 'TESTING 1', 'TESTING 1', 'TESTING 1', '', '', '', '', 'Pending', '', '', 1, '', 1, 0, '2016-09-21', 0, 0, 1, '2016-10-21,'),
(105, 1, 0, '68', 'None - NSTP', 'National Service Training Program (NSTP)', 'Ylagan', 'Rhea', 'B.', '09123456764', 'ry@gmail.com', 'Chua', 'Jack', 'L.', '09183232134', 'cj@gmail.com', 'NA', 'TESTING 2', 'Equitable and Inclusive Education', 'bulacan', 12, 212, 212, 212, 'TESTING 2', '', '', '', 'TESTING 2', 'TESTING 2', 'TESTING 2', 'TESTING 2', 'TESTING 2', 'TESTING 2', 'TESTING 2', '', '', '', '', 'Pending', '', '', 1, '', 1, 0, '2016-09-21', 0, 0, 1, '2016-10-21,'),
(106, 1, 0, '65', 'University-Wide', 'NA - University Wide', 'Brioles', 'Abigail', 'D.', '09123456764', 'eust@gmail.com', 'Espejo', 'Mianne', 'M.', '09142424423', 'mm@gmail.com', 'NA', 'TESTING 4', 'Socio-pastoral Ministry and Evangelization', 'Tarlac', 12, 122, 122, 12244444, 'TESTING 4', '', '', '', 'TESTING 4', 'TESTING 4', 'TESTING 4', 'TESTING 4', 'TESTING 4', 'TESTING 4', 'TESTING 4', '', '', 'ddddddddddddddddd', '', 'Pending', '', '66', 1, '', 1, 0, '2016-09-21', 0, 0, 1, '2016-10-20,'),
(107, 1, 0, '10', 'College-Based', 'Institute of Information and Computing Sciences', 'Punzalan', 'Nicolo Joseph', 'A.', '09177245421', 'jmcmanzanilla@gmail.com', 'Reyes', 'kim', 'l', '6464646', 'rk@gmail.com', 'NA', 'TESTING 1', 'Environmental Sustainability and Infrastructure Development', 'tarlac', 12, 3232, 2332, 323, 'TESTING1', '', '', '', 'TESTING1', 'TESTING1', 'TESTING1', 'TESTING1', 'TESTING1', 'TESTING1', 'TESTING1', '', '', '', '', 'Rejected', '12', '12', 1, '', 1, 0, '2016-09-21', 0, 0, 1, '2016-10-21,'),
(108, 1, 0, '10', 'College-Based', 'Institute of Information and Computing Sciences', 'Punzalan', 'Nicolo Joseph', 'A.', '09177245421', 'jmcmanzanilla@gmail.com', 'gfgf', 'gffg', 'l', '7657575', 'gfd@gmail.com', 'na', 'testing2', 'Disaster Risk Reduction and Management', 'tarlac', 12, 43434, 3434, 434, 'testing2', '', '', '', 'testing2', 'testing2', 'testing2', 'testing2', 'testing2', 'testing2', 'testing2', '', '', '', '', 'Pending', '', '11', 1, '', 1, 0, '2016-09-21', 0, 1, 1, '2016-10-28,'),
(109, 1, 0, '10', 'College-Based', 'Institute of Information and Computing Sciences', 'Punzalan', 'Nicolo Joseph', 'A.', '09177245421', 'jmcmanzanilla@gmail.com', 'gfgfg', 'gdfgd', 'g', '7575755', 'vhgf@gmail.com', 'na', 'testing3', 'Leadership, Organizational Development and Good Governance', 'tarlac', 12, 4234, 343, 434, 'dfdff', '', '', '', 'fdfsdf', 'fsdf', 'fdf', 'fdf', 'fdf', 'fdf', 'fdfd', '', '', 'tdrtdhd', '', 'Pending', '', 'Complete', 1, '', 1, 0, '2016-09-21', 0, 0, 1, '2016-10-21,'),
(110, 1, 0, '65', 'University-Wide', 'NA - University Wide', 'Brioles', 'Abigail', 'D.', '09123456764', 'eust@gmail.com', 'dada', 'dsda', 'f', '3255235', 'dg@gmail.com', 'na', 'testing 5', 'Leadership, Organizational Development and Good Governance', 'tarlac', 12, 212, 212, 212, 'weqeweqeqe', '', '', '', 'weqeweqeqe', 'weqeweqeqe', 'weqeweqeqe', 'weqeweqeqe', 'weqeweqeqe', 'weqeweqeqe', 'weqeweqeqe', '', '', '', '', 'Pending', '', '66', 1, '', 1, 0, '2016-09-22', 0, 0, 1, '2016-10-21,');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proj_proposal`
--
ALTER TABLE `proj_proposal`
  ADD PRIMARY KEY (`proposal_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proj_proposal`
--
ALTER TABLE `proj_proposal`
  MODIFY `proposal_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=111;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

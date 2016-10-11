-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2016 at 10:53 AM
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `approval_form`
--

INSERT INTO `approval_form` (`approval_id`, `title`, `proponent`, `affiliation`, `prog_area`, `community`, `date`, `budget`, `reports`, `attendance`, `presence_profile`, `presence_moa`, `comments1`, `reviewed`, `budget_code`, `comments2`, `recommend_progarea`, `budget_tobe`, `comments3`, `approve_director`, `finalbudget`, `finalbudget_code`, `cash_req`, `date_today`, `transpo_date`, `proposal_id`, `signature_coor`, `signature_director`, `cashreqnum`) VALUES
(1, 'TESTING 1', '65', 'University-Wide', 'Equitable and Inclusive Education', '111', '2016-10-20,', '111', '', '', '', '', '', '', '', '', 'Recommended', '1111', '', 'Yes', '1111', '1111', '', '', '', 45, '', '', 0),
(2, 'TESTING 2', '65', 'University-Wide', 'Employability and Social Enterprise Development', '111', '2016-10-27,', '111', '', '', '', '', '', '', '', '', 'Recommended', '222', '', 'Yes', '222', '222', '', '', '', 46, '', '', 0),
(3, 'TESTING 1', 'Computer Sciences Society', 'College-Based', 'Socio-pastoral Ministry and Evangelization', '111', '2016-10-28,', '1213', 'Yes', 'Yes', 'Yes', 'Yes', '', 'Yes', '1111', '', 'Recommended', '2121', '', 'Yes', '1232', '3123', '', '', '', 51, '', '', 0),
(4, 'testing3', 'Information Systems Society', 'College-Based', 'Leadership, Organizational Development and Good Governance', 'tarlac', '2016-10-21,', '4234', 'Yes', 'Yes', 'Yes', 'Yes', 'ftsetset', 'Yes', 'iics03', 'ggdgdgd', 'Recommended', '12222', 'resrserserse', 'Yes', '12222', 'iics03', '', '', '', 109, '', '', 0),
(5, 'TESTING 1', '65', 'University-Wide', 'Health and Wellness Development', 'tarlac', '2016-10-29,', '212', '', '', '', '', '', '', '', 'gggggg', 'Recommended', '11111', 'ggggg', 'Yes', '11111', 'weweq214', '', '', '', 1, '', '', 0),
(6, 'TESTING1', '65', 'University-Wide', 'Equitable and Inclusive Education', 'tarlac', '2016-11-25,', '212', '', '', '', '', '', '', '', '', 'Recommended', '2222', '', 'Yes', '2222', 'wwww', '', '', '', 8, '', '', 0),
(7, 'TESTING2', '65', 'University-Wide', 'Health and Wellness Development', 'fsdfs', '2016-11-19,', '212', '', '', '', '', '', '', '', '', 'Recommended', '1111', '', 'Yes', '1111', 'ffsdf', '', '', '', 9, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `audit_trail`
--

CREATE TABLE IF NOT EXISTS `audit_trail` (
  `audit_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `action` varchar(250) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=828 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `audit_trail`
--

INSERT INTO `audit_trail` (`audit_id`, `user_id`, `action`, `datetime`) VALUES
(519, 1, 'admin LOGGED IN.', '2016-09-18 13:41:59'),
(520, 1, 'admin LOGGED OUT.', '2016-09-18 13:47:18'),
(521, 1, 'admin LOGGED IN.', '2016-09-18 13:47:24'),
(522, 1, 'admin LOGGED OUT.', '2016-09-18 13:53:43'),
(523, 5, 'j_victoria LOGGED IN.', '2016-09-18 13:53:53'),
(524, 5, 'j_victoria LOGGED OUT.', '2016-09-18 14:08:22'),
(525, 1, 'admin LOGGED IN.', '2016-09-18 14:08:31'),
(526, 1, 'admin LOGGED OUT.', '2016-09-18 15:04:30'),
(527, 1, 'admin LOGGED IN.', '2016-09-18 15:04:38'),
(528, 1, 'admin LOGGED OUT.', '2016-09-18 15:06:51'),
(529, 1, 'admin LOGGED IN.', '2016-09-18 15:06:57'),
(530, 1, 'admin LOGGED OUT.', '2016-09-18 15:13:56'),
(531, 1, 'admin LOGGED IN.', '2016-09-18 15:15:31'),
(532, 1, 'admin LOGGED OUT.', '2016-09-18 15:16:51'),
(533, 65, 'earth_ust LOGGED IN.', '2016-09-18 15:17:07'),
(534, 65, 'earth_ust LOGGED OUT.', '2016-09-18 18:46:47'),
(535, 1, 'admin LOGGED IN.', '2016-09-18 18:46:55'),
(536, 1, 'admin LOGGED OUT.', '2016-09-18 19:25:47'),
(537, 65, 'earth_ust LOGGED IN.', '2016-09-18 19:29:09'),
(538, 65, 'earth_ust LOGGED IN.', '2016-09-19 08:07:50'),
(539, 65, 'earth_ust LOGGED OUT.', '2016-09-19 08:35:24'),
(540, 66, 'earth_pres LOGGED IN.', '2016-09-19 08:35:34'),
(541, 66, 'earth_pres LOGGED OUT.', '2016-09-19 14:54:14'),
(542, 67, 'earth_adviser LOGGED IN.', '2016-09-19 14:54:22'),
(543, 67, 'earth_adviser LOGGED OUT.', '2016-09-19 15:24:30'),
(544, 67, 'earth_adviser LOGGED IN.', '2016-09-19 15:24:57'),
(545, 67, 'earth_adviser LOGGED OUT.', '2016-09-19 15:25:38'),
(546, 5, 'j_victoria LOGGED IN.', '2016-09-19 15:26:00'),
(547, 5, 'j_victoria LOGGED OUT.', '2016-09-19 15:26:07'),
(548, 7, 'f_alipao LOGGED IN.', '2016-09-19 15:26:15'),
(549, 7, 'f_alipao LOGGED OUT.', '2016-09-19 15:26:38'),
(550, 1, 'admin LOGGED IN.', '2016-09-19 15:27:22'),
(551, 1, 'admin LOGGED OUT.', '2016-09-19 15:28:24'),
(552, 5, 'j_victoria LOGGED IN.', '2016-09-19 15:28:31'),
(553, 5, 'j_victoria LOGGED OUT.', '2016-09-19 15:28:54'),
(554, 6, 'm_abenir LOGGED IN.', '2016-09-19 15:29:03'),
(555, 6, 'm_abenir LOGGED OUT.', '2016-09-19 15:29:16'),
(556, 67, 'earth_adviser LOGGED IN.', '2016-09-19 15:31:02'),
(557, 67, 'earth_adviser LOGGED OUT.', '2016-09-19 15:31:41'),
(558, 65, 'earth_ust LOGGED IN.', '2016-09-19 15:31:47'),
(559, 65, 'earth_ust LOGGED OUT.', '2016-09-19 15:32:04'),
(560, 66, 'earth_pres LOGGED IN.', '2016-09-19 15:32:10'),
(561, 66, 'earth_pres LOGGED OUT.', '2016-09-19 15:32:30'),
(562, 67, 'earth_adviser LOGGED IN.', '2016-09-19 15:32:36'),
(563, 67, 'earth_adviser LOGGED OUT.', '2016-09-19 15:34:27'),
(564, 5, 'j_victoria LOGGED IN.', '2016-09-19 15:34:34'),
(565, 5, 'j_victoria LOGGED OUT.', '2016-09-19 15:35:43'),
(566, 6, 'm_abenir LOGGED IN.', '2016-09-19 15:35:54'),
(567, 6, 'm_abenir LOGGED OUT.', '2016-09-19 15:39:35'),
(568, 16, 'ust_css LOGGED IN.', '2016-09-19 15:39:58'),
(569, 16, 'ust_css LOGGED OUT.', '2016-09-19 15:48:05'),
(570, 10, 'ust_iss LOGGED IN.', '2016-09-19 15:50:57'),
(571, 10, 'ust_iss LOGGED OUT.', '2016-09-19 16:39:44'),
(572, 11, 'iss_pres LOGGED IN.', '2016-09-19 16:40:44'),
(573, 11, 'iss_pres LOGGED OUT.', '2016-09-19 16:44:23'),
(574, 12, 'iss_adviser LOGGED IN.', '2016-09-19 16:44:29'),
(575, 12, 'iss_adviser LOGGED OUT.', '2016-09-19 16:45:35'),
(576, 13, 'm_domingo LOGGED IN.', '2016-09-19 16:46:04'),
(577, 13, 'm_domingo LOGGED OUT.', '2016-09-19 16:46:15'),
(578, 1, 'admin LOGGED IN.', '2016-09-19 16:46:27'),
(579, 1, 'admin LOGGED OUT.', '2016-09-19 16:47:13'),
(580, 8, 'k_balmeo LOGGED IN.', '2016-09-19 16:47:19'),
(581, 8, 'k_balmeo LOGGED OUT.', '2016-09-19 16:48:22'),
(582, 6, 'm_abenir LOGGED IN.', '2016-09-19 16:49:04'),
(583, 6, 'm_abenir LOGGED OUT.', '2016-09-19 16:49:12'),
(584, 14, 'a_santos LOGGED IN.', '2016-09-19 16:49:17'),
(585, 14, 'a_santos LOGGED OUT.', '2016-09-19 16:49:57'),
(586, 15, 'h_pama LOGGED IN.', '2016-09-19 16:50:18'),
(587, 15, 'h_pama LOGGED OUT.', '2016-09-19 16:51:08'),
(588, 7, 'f_alipao LOGGED IN.', '2016-09-19 16:51:37'),
(589, 7, 'f_alipao LOGGED OUT.', '2016-09-19 16:52:14'),
(590, 6, 'm_abenir LOGGED IN.', '2016-09-19 16:52:29'),
(591, 65, 'earth_ust LOGGED IN.', '2016-09-20 08:17:03'),
(592, 65, 'earth_ust LOGGED IN.', '2016-09-20 08:48:55'),
(593, 65, 'earth_ust LOGGED OUT.', '2016-09-20 08:58:29'),
(594, 66, 'earth_pres LOGGED IN.', '2016-09-20 08:58:40'),
(595, 66, 'earth_pres LOGGED OUT.', '2016-09-20 08:59:17'),
(596, 65, 'earth_ust LOGGED IN.', '2016-09-20 09:15:25'),
(597, 65, 'earth_ust LOGGED OUT.', '2016-09-20 10:08:54'),
(598, 66, 'earth_pres LOGGED IN.', '2016-09-20 10:09:04'),
(599, 66, 'earth_pres LOGGED OUT.', '2016-09-20 10:11:31'),
(600, 65, 'earth_ust LOGGED IN.', '2016-09-20 10:11:47'),
(601, 65, 'earth_ust LOGGED OUT.', '2016-09-20 14:20:16'),
(602, 65, 'earth_ust LOGGED IN.', '2016-09-20 14:20:22'),
(603, 65, 'earth_ust LOGGED OUT.', '2016-09-20 16:36:41'),
(604, 65, 'earth_ust LOGGED IN.', '2016-09-20 16:36:48'),
(605, 65, 'earth_ust LOGGED IN.', '2016-09-20 19:49:27'),
(606, 1, 'admin LOGGED IN.', '2016-09-21 09:10:41'),
(607, 1, 'admin LOGGED OUT.', '2016-09-21 10:07:34'),
(608, 66, 'earth_pres LOGGED IN.', '2016-09-21 10:07:49'),
(609, 66, 'earth_pres LOGGED OUT.', '2016-09-21 10:08:53'),
(610, 10, 'ust_iss LOGGED IN.', '2016-09-21 10:09:01'),
(611, 10, 'ust_iss LOGGED OUT.', '2016-09-21 10:11:53'),
(612, 65, 'earth_ust LOGGED IN.', '2016-09-21 10:11:59'),
(613, 65, 'earth_ust LOGGED OUT.', '2016-09-21 10:17:41'),
(614, 66, 'earth_pres LOGGED IN.', '2016-09-21 10:17:48'),
(615, 66, 'earth_pres LOGGED OUT.', '2016-09-21 10:18:15'),
(616, 67, 'earth_adviser LOGGED IN.', '2016-09-21 10:19:17'),
(617, 67, 'earth_adviser LOGGED OUT.', '2016-09-21 10:22:10'),
(618, 1, 'admin LOGGED IN.', '2016-09-21 10:22:23'),
(619, 1, 'admin LOGGED OUT.', '2016-09-21 10:25:11'),
(620, 1, 'admin LOGGED IN.', '2016-09-21 10:25:42'),
(621, 1, 'admin LOGGED OUT.', '2016-09-21 10:35:48'),
(622, 68, 'f1_nstp LOGGED IN.', '2016-09-21 10:36:09'),
(623, 68, 'f1_nstp LOGGED OUT.', '2016-09-21 10:49:57'),
(624, 68, 'f1_nstp LOGGED IN.', '2016-09-21 10:50:05'),
(625, 68, 'f1_nstp LOGGED OUT.', '2016-09-21 10:50:09'),
(626, 1, 'admin LOGGED IN.', '2016-09-21 10:50:15'),
(627, 1, 'admin LOGGED OUT.', '2016-09-21 10:51:09'),
(628, 1, 'admin LOGGED IN.', '2016-09-21 10:51:19'),
(629, 1, 'admin LOGGED OUT.', '2016-09-21 10:52:14'),
(630, 1, 'admin LOGGED IN.', '2016-09-21 10:52:35'),
(631, 1, 'admin LOGGED OUT.', '2016-09-21 10:52:52'),
(632, 57, 'NSTP-Moderator LOGGED IN.', '2016-09-21 10:52:59'),
(633, 57, 'NSTP-Moderator LOGGED OUT.', '2016-09-21 10:53:59'),
(634, 68, 'f1_nstp LOGGED IN.', '2016-09-21 10:54:13'),
(635, 68, 'f1_nstp LOGGED OUT.', '2016-09-21 11:14:31'),
(636, 65, 'earth_ust LOGGED IN.', '2016-09-21 11:14:43'),
(637, 65, 'earth_ust LOGGED OUT.', '2016-09-21 11:26:23'),
(638, 68, 'f1_nstp LOGGED IN.', '2016-09-21 11:26:54'),
(639, 68, 'f1_nstp LOGGED OUT.', '2016-09-21 11:29:45'),
(640, 65, 'earth_ust LOGGED IN.', '2016-09-21 11:30:01'),
(641, 65, 'earth_ust LOGGED OUT.', '2016-09-21 11:37:31'),
(642, 68, 'f1_nstp LOGGED IN.', '2016-09-21 11:37:55'),
(643, 68, 'f1_nstp LOGGED OUT.', '2016-09-21 11:55:57'),
(644, 57, 'NSTP-Moderator LOGGED IN.', '2016-09-21 11:56:06'),
(645, 57, 'NSTP-Moderator LOGGED OUT.', '2016-09-21 12:00:23'),
(646, 65, 'earth_ust LOGGED IN.', '2016-09-21 13:01:42'),
(647, 65, 'earth_ust LOGGED OUT.', '2016-09-21 13:15:50'),
(648, 68, 'f1_nstp LOGGED IN.', '2016-09-21 13:16:01'),
(649, 68, 'f1_nstp LOGGED OUT.', '2016-09-21 13:17:14'),
(650, 68, 'f1_nstp LOGGED IN.', '2016-09-21 13:18:14'),
(651, 68, 'f1_nstp LOGGED OUT.', '2016-09-21 13:19:04'),
(652, 57, 'NSTP-Moderator LOGGED IN.', '2016-09-21 13:19:17'),
(653, 57, 'NSTP-Moderator LOGGED OUT.', '2016-09-21 13:29:30'),
(654, 65, 'earth_ust LOGGED IN.', '2016-09-21 13:29:41'),
(655, 65, 'earth_ust LOGGED OUT.', '2016-09-21 13:31:12'),
(656, 65, 'earth_ust LOGGED IN.', '2016-09-21 13:39:51'),
(657, 65, 'earth_ust LOGGED OUT.', '2016-09-21 14:09:31'),
(658, 1, 'admin LOGGED IN.', '2016-09-21 14:09:41'),
(659, 1, 'admin LOGGED OUT.', '2016-09-21 14:16:49'),
(660, 1, 'admin LOGGED IN.', '2016-09-21 14:17:15'),
(661, 1, 'admin LOGGED OUT.', '2016-09-21 14:24:35'),
(662, 69, 'marc_abenir LOGGED IN.', '2016-09-21 14:24:51'),
(663, 69, 'marc_abenir LOGGED OUT.', '2016-09-21 14:34:26'),
(664, 1, 'admin LOGGED IN.', '2016-09-21 14:34:37'),
(665, 1, 'admin LOGGED OUT.', '2016-09-21 14:34:50'),
(666, 69, 'marc_abenir LOGGED IN.', '2016-09-21 14:35:04'),
(667, 69, 'marc_abenir LOGGED OUT.', '2016-09-21 14:38:54'),
(668, 10, 'ust_iss LOGGED IN.', '2016-09-21 14:39:19'),
(669, 10, 'ust_iss LOGGED OUT.', '2016-09-21 14:43:21'),
(670, 11, 'iss_pres LOGGED IN.', '2016-09-21 14:43:57'),
(671, 11, 'iss_pres LOGGED OUT.', '2016-09-21 14:46:00'),
(672, 12, 'iss_adviser LOGGED IN.', '2016-09-21 14:46:10'),
(673, 12, 'iss_adviser LOGGED OUT.', '2016-09-21 14:46:55'),
(674, 10, 'ust_iss LOGGED IN.', '2016-09-21 14:47:14'),
(675, 10, 'ust_iss LOGGED OUT.', '2016-09-21 14:47:53'),
(676, 10, 'ust_iss LOGGED IN.', '2016-09-21 14:48:43'),
(677, 10, 'ust_iss LOGGED OUT.', '2016-09-21 14:51:39'),
(678, 11, 'iss_pres LOGGED IN.', '2016-09-21 14:51:48'),
(679, 11, 'iss_pres LOGGED OUT.', '2016-09-21 14:52:42'),
(680, 10, 'ust_iss LOGGED IN.', '2016-09-21 14:52:53'),
(681, 10, 'ust_iss LOGGED OUT.', '2016-09-21 14:59:53'),
(682, 12, 'iss_adviser LOGGED IN.', '2016-09-21 15:00:03'),
(683, 12, 'iss_adviser LOGGED OUT.', '2016-09-21 15:01:49'),
(684, 11, 'iss_pres LOGGED IN.', '2016-09-21 15:02:03'),
(685, 11, 'iss_pres LOGGED OUT.', '2016-09-21 15:02:45'),
(686, 12, 'iss_adviser LOGGED IN.', '2016-09-21 15:02:53'),
(687, 12, 'iss_adviser LOGGED OUT.', '2016-09-21 15:14:42'),
(688, 12, 'iss_adviser LOGGED IN.', '2016-09-21 15:14:57'),
(689, 12, 'iss_adviser LOGGED OUT.', '2016-09-21 15:16:16'),
(690, 10, 'ust_iss LOGGED IN.', '2016-09-21 15:16:23'),
(691, 10, 'ust_iss LOGGED OUT.', '2016-09-21 15:21:03'),
(692, 10, 'ust_iss LOGGED IN.', '2016-09-21 15:21:10'),
(693, 10, 'ust_iss LOGGED OUT.', '2016-09-21 15:21:28'),
(694, 11, 'iss_pres LOGGED IN.', '2016-09-21 15:21:35'),
(695, 11, 'iss_pres LOGGED OUT.', '2016-09-21 15:22:37'),
(696, 12, 'iss_adviser LOGGED IN.', '2016-09-21 15:22:46'),
(697, 12, 'iss_adviser LOGGED OUT.', '2016-09-21 15:23:10'),
(698, 8, 'k_balmeo LOGGED IN.', '2016-09-21 15:23:20'),
(699, 8, 'k_balmeo LOGGED OUT.', '2016-09-21 15:23:59'),
(700, 14, 'a_santos LOGGED IN.', '2016-09-21 15:24:32'),
(701, 14, 'a_santos LOGGED OUT.', '2016-09-21 15:24:54'),
(702, 8, 'k_balmeo LOGGED IN.', '2016-09-21 15:25:00'),
(703, 8, 'k_balmeo LOGGED OUT.', '2016-09-21 15:26:08'),
(704, 14, 'a_santos LOGGED IN.', '2016-09-21 15:26:24'),
(705, 14, 'a_santos LOGGED OUT.', '2016-09-21 15:26:41'),
(706, 15, 'h_pama LOGGED IN.', '2016-09-21 15:26:50'),
(707, 15, 'h_pama LOGGED OUT.', '2016-09-21 15:29:25'),
(708, 7, 'f_alipao LOGGED IN.', '2016-09-21 15:29:47'),
(709, 7, 'f_alipao LOGGED OUT.', '2016-09-21 15:31:16'),
(710, 6, 'm_abenir LOGGED IN.', '2016-09-21 15:31:45'),
(711, 6, 'm_abenir LOGGED OUT.', '2016-09-21 15:33:27'),
(712, 10, 'ust_iss LOGGED IN.', '2016-09-21 15:33:36'),
(713, 10, 'ust_iss LOGGED OUT.', '2016-09-21 15:38:29'),
(714, 69, 'marc_abenir LOGGED IN.', '2016-09-21 15:39:42'),
(715, 69, 'marc_abenir LOGGED OUT.', '2016-09-21 15:45:52'),
(716, 1, 'admin LOGGED IN.', '2016-09-21 15:45:58'),
(717, 1, 'admin LOGGED OUT.', '2016-09-21 15:46:18'),
(718, 65, 'earth_ust LOGGED IN.', '2016-09-21 15:46:44'),
(719, 65, 'earth_ust LOGGED OUT.', '2016-09-21 15:49:35'),
(720, 6, 'm_abenir LOGGED IN.', '2016-09-21 15:49:44'),
(721, 6, 'm_abenir LOGGED OUT.', '2016-09-21 16:23:04'),
(722, 65, 'earth_ust LOGGED IN.', '2016-09-22 09:12:57'),
(723, 65, 'earth_ust LOGGED IN.', '2016-09-22 10:24:17'),
(724, 65, 'earth_ust LOGGED IN.', '2016-09-23 08:52:02'),
(725, 65, 'earth_ust LOGGED IN.', '2016-09-26 10:09:44'),
(726, 65, 'earth_ust LOGGED OUT.', '2016-09-26 13:43:56'),
(727, 5, 'j_victoria LOGGED IN.', '2016-09-26 13:44:26'),
(728, 5, 'j_victoria LOGGED OUT.', '2016-09-26 13:44:43'),
(729, 65, 'earth_ust LOGGED IN.', '2016-09-26 13:45:15'),
(730, 65, 'earth_ust LOGGED OUT.', '2016-09-26 13:54:24'),
(731, 57, 'NSTP-Moderator LOGGED IN.', '2016-09-26 13:54:50'),
(732, 57, 'NSTP-Moderator LOGGED OUT.', '2016-09-26 14:51:27'),
(733, 65, 'earth_ust LOGGED IN.', '2016-09-26 14:51:37'),
(734, 65, 'earth_ust LOGGED IN.', '2016-09-27 09:42:07'),
(735, 65, 'earth_ust LOGGED IN.', '2016-09-29 08:51:07'),
(736, 65, 'earth_ust LOGGED OUT.', '2016-09-29 13:41:46'),
(737, 65, 'earth_ust LOGGED IN.', '2016-09-29 13:42:17'),
(738, 65, 'earth_ust LOGGED IN.', '2016-09-30 13:41:12'),
(739, 65, 'earth_ust LOGGED IN.', '2016-10-03 12:40:11'),
(740, 65, 'earth_ust LOGGED OUT.', '2016-10-03 12:40:49'),
(741, 66, 'earth_pres LOGGED IN.', '2016-10-03 12:40:57'),
(742, 66, 'earth_pres LOGGED OUT.', '2016-10-03 12:42:21'),
(743, 67, 'earth_adviser LOGGED IN.', '2016-10-03 12:42:37'),
(744, 67, 'earth_adviser LOGGED OUT.', '2016-10-03 12:43:25'),
(745, 5, 'j_victoria LOGGED IN.', '2016-10-03 12:43:37'),
(746, 5, 'j_victoria LOGGED OUT.', '2016-10-03 12:44:25'),
(747, 6, 'm_abenir LOGGED IN.', '2016-10-03 12:44:33'),
(748, 6, 'm_abenir LOGGED OUT.', '2016-10-03 12:56:25'),
(749, 65, 'earth_ust LOGGED IN.', '2016-10-03 13:00:44'),
(750, 65, 'earth_ust LOGGED OUT.', '2016-10-03 13:01:00'),
(751, 6, 'm_abenir LOGGED IN.', '2016-10-03 13:15:07'),
(752, 65, 'earth_ust LOGGED IN.', '2016-10-04 09:24:22'),
(753, 65, 'earth_ust LOGGED IN.', '2016-10-05 11:37:33'),
(754, 65, 'earth_ust LOGGED OUT.', '2016-10-05 15:44:24'),
(755, 6, 'm_abenir LOGGED IN.', '2016-10-05 15:44:35'),
(756, 6, 'm_abenir LOGGED OUT.', '2016-10-05 15:44:50'),
(757, 65, 'earth_ust LOGGED IN.', '2016-10-05 15:46:58'),
(758, 65, 'earth_ust LOGGED IN.', '2016-10-07 09:09:15'),
(759, 65, 'earth_ust LOGGED IN.', '2016-10-10 08:22:53'),
(760, 65, 'earth_ust LOGGED OUT.', '2016-10-10 08:23:40'),
(761, 65, 'earth_ust LOGGED IN.', '2016-10-10 08:23:47'),
(762, 65, 'earth_ust LOGGED OUT.', '2016-10-10 08:23:51'),
(763, 65, 'earth_ust LOGGED IN.', '2016-10-10 08:27:02'),
(764, 65, 'earth_ust LOGGED OUT.', '2016-10-10 08:28:30'),
(765, 65, 'earth_ust LOGGED IN.', '2016-10-10 08:28:51'),
(766, 65, 'earth_ust LOGGED OUT.', '2016-10-10 08:29:12'),
(767, 65, 'earth_ust LOGGED IN.', '2016-10-10 08:29:29'),
(768, 65, 'earth_ust LOGGED OUT.', '2016-10-10 08:29:32'),
(769, 6, 'm_abenir LOGGED IN.', '2016-10-10 08:29:43'),
(770, 6, 'm_abenir LOGGED OUT.', '2016-10-10 08:30:19'),
(771, 6, 'm_abenir LOGGED IN.', '2016-10-10 08:30:32'),
(772, 6, 'm_abenir LOGGED OUT.', '2016-10-10 08:30:36'),
(773, 6, 'm_abenir LOGGED IN.', '2016-10-10 08:30:49'),
(774, 6, 'm_abenir LOGGED OUT.', '2016-10-10 08:31:49'),
(775, 65, 'earth_ust LOGGED IN.', '2016-10-10 08:59:18'),
(776, 65, 'earth_ust LOGGED OUT.', '2016-10-10 08:59:42'),
(777, 65, 'earth_ust LOGGED IN.', '2016-10-10 09:00:33'),
(778, 65, 'earth_ust LOGGED OUT.', '2016-10-10 09:01:49'),
(779, 65, 'earth_ust LOGGED IN.', '2016-10-10 09:01:54'),
(780, 65, 'earth_ust LOGGED OUT.', '2016-10-10 09:01:57'),
(781, 65, 'earth_ust LOGGED IN.', '2016-10-10 09:02:42'),
(782, 65, 'earth_ust LOGGED OUT.', '2016-10-10 09:02:45'),
(783, 65, 'earth_ust LOGGED IN.', '2016-10-10 09:03:34'),
(784, 65, 'earth_ust LOGGED OUT.', '2016-10-10 09:05:51'),
(785, 65, 'earth_ust LOGGED IN.', '2016-10-10 09:05:57'),
(786, 65, 'earth_ust LOGGED OUT.', '2016-10-10 09:06:00'),
(787, 6, 'm_abenir LOGGED IN.', '2016-10-10 10:51:25'),
(788, 6, 'm_abenir LOGGED OUT.', '2016-10-10 10:51:44'),
(789, 5, 'j_victoria LOGGED IN.', '2016-10-10 10:51:51'),
(790, 5, 'j_victoria LOGGED OUT.', '2016-10-10 10:51:54'),
(791, 5, 'j_victoria LOGGED IN.', '2016-10-10 10:52:02'),
(792, 5, 'j_victoria LOGGED OUT.', '2016-10-10 10:52:37'),
(793, 6, 'm_abenir LOGGED IN.', '2016-10-10 10:52:47'),
(794, 6, 'm_abenir LOGGED OUT.', '2016-10-10 10:52:56'),
(795, 5, 'j_victoria LOGGED IN.', '2016-10-10 10:53:10'),
(796, 5, 'j_victoria LOGGED OUT.', '2016-10-10 10:53:12'),
(797, 6, 'm_abenir LOGGED IN.', '2016-10-10 10:53:37'),
(798, 5, 'j_victoria LOGGED IN.', '2016-10-10 10:59:03'),
(799, 5, 'j_victoria LOGGED OUT.', '2016-10-10 10:59:19'),
(800, 6, 'm_abenir LOGGED IN.', '2016-10-10 11:00:06'),
(801, 6, 'm_abenir LOGGED OUT.', '2016-10-10 11:01:10'),
(802, 65, 'earth_ust LOGGED IN.', '2016-10-10 13:14:13'),
(803, 65, 'earth_ust LOGGED OUT.', '2016-10-10 14:15:37'),
(804, 65, 'earth_ust LOGGED IN.', '2016-10-10 14:29:18'),
(805, 65, 'earth_ust LOGGED IN.', '2016-10-11 08:41:45'),
(806, 65, 'earth_ust LOGGED OUT.', '2016-10-11 13:04:55'),
(807, 66, 'earth_pres LOGGED IN.', '2016-10-11 13:05:05'),
(808, 66, 'earth_pres LOGGED OUT.', '2016-10-11 13:05:37'),
(809, 67, 'earth_adviser LOGGED IN.', '2016-10-11 13:05:46'),
(810, 67, 'earth_adviser LOGGED OUT.', '2016-10-11 13:06:08'),
(811, 5, 'j_victoria LOGGED IN.', '2016-10-11 13:06:20'),
(812, 5, 'j_victoria LOGGED OUT.', '2016-10-11 13:07:04'),
(813, 6, 'm_abenir LOGGED IN.', '2016-10-11 13:07:22'),
(814, 6, 'm_abenir LOGGED OUT.', '2016-10-11 13:37:17'),
(815, 65, 'earth_ust LOGGED IN.', '2016-10-11 13:37:23'),
(816, 65, 'earth_ust LOGGED OUT.', '2016-10-11 13:43:21'),
(817, 66, 'earth_pres LOGGED IN.', '2016-10-11 13:43:27'),
(818, 66, 'earth_pres LOGGED OUT.', '2016-10-11 13:43:52'),
(819, 67, 'earth_adviser LOGGED IN.', '2016-10-11 13:44:08'),
(820, 67, 'earth_adviser LOGGED OUT.', '2016-10-11 13:44:25'),
(821, 5, 'j_victoria LOGGED IN.', '2016-10-11 13:44:33'),
(822, 5, 'j_victoria LOGGED OUT.', '2016-10-11 13:45:12'),
(823, 6, 'm_abenir LOGGED IN.', '2016-10-11 13:45:21'),
(824, 6, 'm_abenir LOGGED OUT.', '2016-10-11 14:34:37'),
(825, 65, 'earth_ust LOGGED IN.', '2016-10-11 14:34:58'),
(826, 65, 'earth_ust LOGGED OUT.', '2016-10-11 14:36:52'),
(827, 66, 'earth_pres LOGGED IN.', '2016-10-11 14:37:04');

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
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

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
(33, 10, '', '', 'Student Volunteers', 'X300X', 0, 0, 0, 'Faculty/Admin/Support Staff Volunteers', 'X1500X', 0, 0, 0, 'Volunteers from the Partner Community or Institution', 'X500X', 0, 0, 0, 'Volunteer External Resource Person (not from UST)', 'X1500X', 0, 0, 0, 'Subtotal', '', 0, 0, 0, 'Lunch / Dinner', 'X90X', 0, 0, 0, 'Snack', 'X50X', 0, 0, 0, 'Venue and Facilities', 'XX', 0, 0, 0, 'Transportation', 'XX, XX, XX', '', ',,', '', ',,', '', ',,', 'Accommodation', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, '', 'XX', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cover_letter`
--

INSERT INTO `cover_letter` (`cover_id`, `iso`, `year`, `date`, `address_name`, `address_position`, `address_company1`, `address_company2`, `salutation`, `body`, `closing`, `proj_head1`, `position1`, `title`, `proposal_id`) VALUES
(4, '', 'AY 2015-2016', 'October 11, 2016', 'DR. MARK ANTHONY D. ABENIR, DSD', 'Director - UST Simbahayan', 'University of Santo Tomas', 'Espana, manila', 'Greetings!', 'TESTING1TESTING1TESTING1TESTING1', 'Respectfully yours,', 'Abigail D.. Brioles', 'Project Head', 'TESTING1', 8),
(5, '', 'AY 2015-2016', 'October 11, 2016', 'DR. MARK ANTHONY D. ABENIR, DSD', 'Director - UST Simbahayan', 'University of Santo Tomas', 'Espana, manila', 'Greetings!', 'fdsfsfdfsfdsf', 'Respectfully yours,', 'Abigail D.. Brioles', 'Project Head', 'TESTING2', 9),
(6, '', 'AY 2015-2016', 'October 11, 2016', 'DR. MARK ANTHONY D. ABENIR, DSD', 'Director - UST Simbahayan', 'University of Santo Tomas', 'Espana, manila', 'Greetings!', 'dfsdfdfsdfsdf', 'Respectfully yours,', 'Abigail D.. Brioles', 'Project Head', 'TESTING3', 10);

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
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`user_id`, `username`, `password`, `name`, `email`, `account_type`, `college`, `profile`, `reference`) VALUES
(1, 'admin', '098f6bcd4621d373cade4e832627b4f6', 'System Administrator', 'jmcmanzanilla@gmail.com', 'Administrator', '', 1, 0),
(5, 'j_victoria', '49704d02ade8a8ff9e335618ea48d730', 'Jasmin Victoria', 'jmcmanzanilla@gmail.com', 'Signatory', 'simbahayan', 1, 1),
(6, 'm_abenir', '49704d02ade8a8ff9e335618ea48d730', 'Mark Abenir', 'jmcmanzanilla@gmail.com', 'Signatory', 'simbahayan', 1, 1),
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
(68, 'f1_nstp', '00b1abfcf441b71b77b642c0b209ef0a', 'Rhea Ylagan', 'ry@gmail.com', 'Organization', 'nstp', 1, 1),
(69, 'marc_abenir', '49704d02ade8a8ff9e335618ea48d730', 'mark abenir', 'ma@gmail.com', 'Signatory', 'simbahayan', 1, 1);

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
(69, 0, 1, 7, 'Froilan Alipao', 1, 1, 1, 0, 0),
(70, 0, 2, 6, 'Mark Abenir', 1, 1, 1, 0, 0),
(79, 0, 1, 57, 'Jose Ricarte B. Origenes', 57, 1, 0, 0, 1),
(80, 0, 2, 6, 'Mark Abenir', 57, 1, 0, 0, 1),
(81, 65, 1, 66, 'Adriel Benitez', 1, 0, 0, 1, 0),
(82, 65, 2, 67, 'Luis Padilla', 1, 0, 0, 1, 0),
(83, 0, 1, 5, 'Jasmin Victoria', 1, 1, 1, 1, 0),
(84, 0, 2, 6, 'Mark Abenir', 1, 1, 1, 1, 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `program_flow`
--

INSERT INTO `program_flow` (`program_id`, `proposal_id`, `date`, `address`, `time0`, `description0`, `person0`, `time1`, `description1`, `person1`, `time2`, `description2`, `person2`, `time3`, `description3`, `person3`, `time4`, `description4`, `person4`, `time5`, `description5`, `person5`, `time6`, `description6`, `person6`, `time7`, `description7`, `person7`, `time8`, `description8`, `person8`, `time9`, `description9`, `person9`, `time10`, `description10`, `person10`, `time11`, `description11`, `person11`, `time12`, `description12`, `person12`, `time13`, `description13`, `person13`, `time14`, `description14`, `person14`, `time15`, `description15`, `person15`) VALUES
(1, 1, '2016-10-29', 'testing', '11:00 AM - 05:00 PM', 'testing', 'testing', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', ''),
(2, 2, '2016-11-25', 'dfgdgdg', '11:00 AM - 05:00 PM', 'fdsfsf', 'fdsf', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', ''),
(3, 8, '2016-11-25', 'TESTING1', '11:00 AM - 05:00 PM', 'TESTING1', 'TESTING1', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', ''),
(4, 9, '2016-11-19', 'esrerw', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', ''),
(5, 10, '2016-11-19', 'gdfgs', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '', ' - ', '', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proj_proposal`
--

INSERT INTO `proj_proposal` (`proposal_id`, `days`, `page`, `lead_org`, `affiliation`, `college`, `lname1`, `fname1`, `mi1`, `cnum1`, `email1`, `lname2`, `fname2`, `mi2`, `cnum2`, `email2`, `collab`, `proj_title`, `prog_areadev`, `community`, `participants`, `comser_budget`, `org_budget`, `com_budget`, `proj_background`, `proj_background1`, `proj_background2`, `proj_background3`, `gen_objective`, `spec_obj1`, `exp_result1`, `spec_obj2`, `exp_result2`, `spec_obj3`, `exp_result3`, `spec_obj4`, `exp_result4`, `spec_obj5`, `exp_result5`, `proj_evaluation`, `proj_evaluation1`, `status`, `signatory_position`, `pending`, `budget`, `approved`, `cover`, `vehicle`, `upload_date`, `terminal`, `edit`, `program_flow`, `target_date`) VALUES
(8, 1, 0, '65', 'University-Wide', 'NA - University Wide', 'Brioles', 'Abigail', 'D.', '09123456764', 'eust@gmail.com', 'dgfg', 'fgdg', 'j', '5345454', 'fcv@gmail.com', 'na', 'TESTING1', 'Equitable and Inclusive Education', 'tarlac', 12, 212, 212, 212, 'TESTING1', 'TESTING1', 'TESTING1', 'TESTING1', 'TESTING1', 'TESTING1', 'TESTING1', 'TESTING1', 'TESTING1', 'TESTING1', 'TESTING1', 'TESTING1', 'TESTING1', 'TESTING1', 'TESTING1', 'TESTING1', 'TESTING1', 'Pending', '', 'Complete', 1, '', 1, 0, '2016-10-11', 0, 0, 1, '2016-11-25,'),
(9, 1, 0, '65', 'University-Wide', 'NA - University Wide', 'Brioles', 'Abigail', 'D.', '09123456764', 'eust@gmail.com', 'sdfsd', 'fdf', 'd', '3423434', 'dfs@gmail.com', 'na', 'TESTING2', 'Health and Wellness Development', 'fsdfs', 12, 212, 12, 212, 'dasdwa', 'rewerwer', 'rer', 'erwr', 'rwerr', 'er', 'erewr', 'wr', 'erwr', 'rewr', 'er', 'ewre', 'rerw', 'rer', 'rerw', 'rerwr', 'rwrer', 'Pending', '', 'Complete', 1, '', 1, 0, '2016-10-11', 0, 0, 1, '2016-11-19,'),
(10, 1, 0, '65', 'University-Wide', 'NA - University Wide', 'Brioles', 'Abigail', 'D.', '09123456764', 'eust@gmail.com', 'dsgsfg', 'fdsfdsf', 'd', '4324342', 'fdfs@gmail.com', 'na', 'TESTING3', 'Health and Wellness Development', 'fsfsf', 12, 1212, 121, 212, 'fsfsaf', 'fasf', 'asf', 'sfaf', 'sfaf', 'fsf', 'fs', 'afs', 'fsfs', 'fsf', 'sfas', 'fasf', 'fsf', 'sfsf', 'safs', 'fafsaf', 'faf', 'Pending', '', '66', 1, '', 1, 0, '2016-10-11', 0, 0, 1, '2016-11-19,');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`proposal_id`, `date_received`, `lead_org`, `proj_title`, `proj_area`, `beneficiaries`, `date_target`, `budget_approved`, `budget_code`, `report_id`, `transaction_code`, `cr_code`, `student`, `faculty`, `admin`, `staff`, `alumni`, `remarks`) VALUES
(45, '0000-00-00', '', '', '', 0, '', '', '', 1, 0, 0, 0, 0, 0, 0, 0, ''),
(46, '0000-00-00', '', '', '', 0, '', '', '', 2, 0, 0, 0, 0, 0, 0, 0, ''),
(51, '0000-00-00', '', '', '', 0, '', '', '', 3, 0, 0, 0, 0, 0, 0, 0, ''),
(109, '0000-00-00', '', '', '', 0, '', '', '', 4, 0, 0, 0, 0, 0, 0, 0, ''),
(1, '0000-00-00', 'System Administrator', '', '', 0, '', '', '', 5, 0, 0, 0, 0, 0, 0, 0, ''),
(8, '0000-00-00', 'Khrisnamonte Balmeo', '', '', 0, '', '', '', 6, 0, 0, 0, 0, 0, 0, 0, ''),
(9, '0000-00-00', '', '', '', 0, '', '', '', 7, 0, 0, 0, 0, 0, 0, 0, '');

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
(8, 12, 'Salve', 'L', 'Diaz', 'Organization Adviser', 'Institute of Information and Computing Sciences', 'asc.anastacio@gmail.com', '09175253752', 'asdfgfh', 'What is the name of your fattest cat?', 'Kuting', 'uploads/nstpfaci.jpg'),
(9, 11, 'Krizsa Marie', 'D', 'Tanaleon', 'Organization President', 'Institute of Information and Computing Sciences', 'jmcmanzanilla@gmail.com', '09159105104', 'QC', 'Yes?', 'NO', 'uploads/Krizsa.jpg'),
(10, 17, 'Manuel', 'D.', 'Arepentido', 'Budget Officer', 'Simbahayan', 'jmcmanzanilla@gmail.com', '6451225', 'Antipolo City', 'Dog''s Name', 'Duke', ''),
(11, 19, 'Krizsa Marie', 'Dela Pena', 'Tanaleon', 'College Community Development Coordinator', 'Faculty of Engineering', 'krizsamarietanaleon@gmail.com', '09173274123', 'esfrtgreh', 'Hello?', 'Hi', 'uploads/hahaha.jpg'),
(12, 20, 'Carissa', 'V', 'Gaviola', 'Organization Adviser', 'NA - University Wide', 'cavgangelica@gmail.com', '1234567', 'sdlkfrje', 'hi', 'hello', 'uploads/qq.jpg'),
(13, 22, 'Joan Marie', 'Calma', 'Manzanilla', 'College Community Development Coordinator', 'National Service Training Program (NSTP)', 'jmcmanzanilla@gmail.com', '6451225', 'Antipolo City', 'Nakamove on ka na?', 'Secret', 'uploads/fgfd.png'),
(19, 53, 'raymond', 's', 'chen', 'Organization President', 'Institute of Information and Computing Sciences', 'rr@gmail.com', '24413231', 'manila', 'good?', 'no', 'uploads/hahaha.jpg'),
(20, 14, 'Alex', 'A', 'Santos', 'Director', 'Institute of Information and Computing Sciences', 'jmcmanzanilla@gmail.com', '09123456764', 'Metro Manila', 'good?', 'no', 'uploads/rovinesig.png'),
(21, 15, 'Hermel', 'S', 'Pama', 'College Regent', 'Institute of Information and Computing Sciences', 'jmcmanzanilla@gmail.com', '09123454332', 'Metro Manila', 'good?', 'no', 'uploads/hahaha.jpg'),
(22, 13, 'Mylene', 'A', 'Domingo', 'Department Chairman', 'Institute of Information and Computing Sciences', 'jmcmanzanilla@gmail.com', '2134242342', 'manila', 'good?', 'no', 'uploads/hahaha.jpg'),
(25, 57, 'Jose Ricarte', 'B.', 'Origenes', 'NSTP Moderator', 'National Service Training Program (NSTP)', 'jr@gmail.com', '09157772345', 'manila', 'good?', 'yes', 'uploads/nstpmode.jpg'),
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status_update`
--

INSERT INTO `status_update` (`update_id`, `date`, `proposal_id`, `user_id`, `action`, `reason`) VALUES
(1, 0, 1, 66, 'Approved', ''),
(2, 0, 1, 67, 'Approved', ''),
(3, 0, 1, 5, 'Approved', ''),
(4, 0, 1, 6, 'Approved', ''),
(5, 0, 8, 66, 'Approved', ''),
(6, 0, 8, 67, 'Approved', ''),
(7, 0, 8, 5, 'Approved', ''),
(8, 0, 8, 6, 'Approved', ''),
(9, 0, 9, 66, 'Approved', ''),
(10, 0, 9, 67, 'Approved', ''),
(11, 0, 9, 5, 'Approved', ''),
(12, 0, 9, 6, 'Approved', '');

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
(10, 58, 'Rhea Ylagan', 'None - NSTP', 'National Service Training Program (NSTP)', 'Rhea', 'K.', 'Ylagan', 'NSTP Facilitator', 'ry@gmail.com', '09787577455', 'uploads/nstpfaci.jpg', 'okay?', 'yes'),
(11, 65, 'EARTH - UST', 'University-Wide', 'NA - University Wide', 'Abigail', 'D.', 'Brioles', 'Organization Community Development Representative', 'eust@gmail.com', '09123456764', 'uploads/earthust.jpg', 'still good?', 'yes'),
(12, 68, 'F1-NSTP', 'None - NSTP', 'National Service Training Program (NSTP)', 'Rhea', 'B.', 'Ylagan', 'NSTP Facilitator', 'ry@gmail.com', '09123456764', 'uploads/nstpfaci.jpg', 'favorite color?', 'pink');

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
  MODIFY `announcement_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `approval_form`
--
ALTER TABLE `approval_form`
  MODIFY `approval_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `audit_trail`
--
ALTER TABLE `audit_trail`
  MODIFY `audit_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=828;
--
-- AUTO_INCREMENT for table `budget_proposal`
--
ALTER TABLE `budget_proposal`
  MODIFY `budget_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
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
  MODIFY `cover_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `login_user`
--
ALTER TABLE `login_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=70;
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
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `proj_proposal`
--
ALTER TABLE `proj_proposal`
  MODIFY `proposal_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
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
  MODIFY `update_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
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

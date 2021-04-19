-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 08:15 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `android_application_database_internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `pis_debarmentinfo`
--

CREATE TABLE `pis_debarmentinfo` (
  `BatchID` int(11) NOT NULL,
  `OfficerID` int(11) NOT NULL,
  `TypeOfDebarment` tinyint(4) NOT NULL,
  `DebarmentBeginsOn` datetime DEFAULT NULL,
  `DebarmentEndsOn` datetime DEFAULT NULL,
  `CurrentRecord` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pis_debarmentinfo`
--

INSERT INTO `pis_debarmentinfo` (`BatchID`, `OfficerID`, `TypeOfDebarment`, `DebarmentBeginsOn`, `DebarmentEndsOn`) VALUES
(21, 324, 2, NULL, NULL),
(27, 2349, 1, NULL, NULL),
(31, 2379, 2, NULL, NULL),
(31, 2381, 2, NULL, NULL),
(39, 2457, 1, NULL, NULL),
(25, 2660, 2, NULL, NULL),
(32, 2747, 1, NULL, NULL),
(49, 3456, 1, NULL, NULL),
(12, 4652, 2, NULL, NULL),
(32, 4928, 1, NULL, NULL),
(30, 5470, 1, NULL, NULL),
(32, 5493, 1, NULL, NULL),
(33, 5504, 2, NULL, NULL),
(34, 5508, 1, NULL, NULL),
(35, 5514, 1, NULL, NULL),
(24, 6614, 1, NULL, NULL),
(40, 6680, 2, NULL, NULL),
(21, 6765, 1, NULL, NULL),
(22, 6773, 1, NULL, NULL),
(33, 6857, 2, NULL, NULL),
(45, 6930, 1, NULL, NULL),
(26, 7315, 1, NULL, NULL),
(32, 7344, 2, NULL, NULL),
(27, 7535, 1, NULL, NULL),
(838, 9004, 1, NULL, NULL),
(866, 9029, 1, NULL, NULL),
(891, 9034, 1, NULL, NULL),
(978, 9218, 1, NULL, NULL),
(35, 9707, 1, NULL, NULL),
(38, 9747, 1, NULL, NULL),
(36, 11350, 2, NULL, NULL),
(16, 11543, 1, NULL, NULL),
(22, 11586, 1, NULL, NULL),
(17, 11878, 1, NULL, NULL),
(42, 11990, 1, NULL, NULL),
(42, 11997, 2, NULL, NULL),
(38, 12097, 1, NULL, NULL),
(619, 12900, 1, NULL, NULL),
(27, 13044, 1, NULL, NULL),
(44, 13516, 1, NULL, NULL),
(29, 13684, 1, NULL, NULL),
(30, 13698, 1, NULL, NULL),
(31, 13705, 1, NULL, NULL),
(32, 14189, 1, NULL, NULL),
(33, 14279, 2, NULL, NULL),
(35, 14395, 1, NULL, NULL),
(35, 14438, 1, NULL, NULL),
(38, 14741, 2, NULL, NULL),
(38, 14766, 1, NULL, NULL),
(38, 14779, 1, NULL, NULL),
(40, 15014, 1, NULL, NULL),
(40, 15052, 1, NULL, NULL),
(40, 15054, 2, NULL, NULL),
(41, 15144, 1, NULL, NULL),
(41, 15154, 1, NULL, NULL),
(45, 15541, 1, NULL, NULL),
(46, 15559, 1, NULL, NULL),
(46, 15566, 1, NULL, NULL),
(47, 15647, 1, NULL, NULL),
(47, 15718, 1, NULL, NULL),
(48, 15761, 1, NULL, NULL),
(48, 15822, 1, NULL, NULL),
(50, 15980, 1, NULL, NULL),
(51, 16107, 1, NULL, NULL),
(52, 16233, 1, NULL, NULL),
(52, 16234, 1, NULL, NULL),
(52, 16247, 1, NULL, NULL),
(53, 16302, 1, NULL, NULL),
(54, 16474, 1, NULL, NULL),
(96, 18553, 2, NULL, NULL),
(99, 18659, 1, NULL, NULL),
(100, 18682, 1, NULL, NULL),
(100, 18686, 2, NULL, NULL),
(101, 18707, 1, NULL, NULL),
(101, 18709, 1, NULL, NULL),
(104, 18756, 1, NULL, NULL),
(104, 18757, 1, NULL, NULL),
(114, 18812, 1, NULL, NULL),
(153, 19105, 1, NULL, NULL),
(155, 19142, 1, NULL, NULL),
(156, 19172, 1, NULL, NULL),
(159, 19208, 1, NULL, NULL),
(252, 19409, 1, NULL, NULL),
(258, 19419, 1, NULL, NULL),
(285, 19438, 1, NULL, NULL),
(337, 19460, 1, NULL, NULL),
(346, 19482, 1, NULL, NULL),
(474, 20344, 1, NULL, NULL),
(482, 20431, 1, NULL, NULL),
(483, 20438, 1, NULL, NULL),
(514, 20469, 1, NULL, NULL),
(524, 20520, 1, NULL, NULL),
(569, 20749, 1, NULL, NULL),
(570, 20764, 2, NULL, NULL),
(571, 20769, 1, NULL, NULL),
(573, 20796, 1, NULL, NULL),
(573, 20817, 1, NULL, NULL),
(574, 20839, 1, NULL, NULL),
(575, 20840, 1, NULL, NULL),
(575, 20848, 1, NULL, NULL),
(575, 20850, 2, NULL, NULL),
(576, 20863, 1, NULL, NULL),
(576, 20864, 1, NULL, NULL),
(577, 20867, 1, NULL, NULL),
(577, 20873, 1, NULL, NULL),
(577, 20875, 1, NULL, NULL),
(578, 20877, 1, NULL, NULL),
(578, 20879, 1, NULL, NULL),
(578, 20881, 1, NULL, NULL),
(580, 20892, 1, NULL, NULL),
(581, 20897, 1, NULL, NULL),
(621, 20989, 1, NULL, NULL),
(622, 20994, 1, NULL, NULL),
(622, 21000, 2, NULL, NULL),
(629, 21054, 1, NULL, NULL),
(632, 21071, 1, NULL, NULL),
(675, 21297, 1, NULL, NULL),
(676, 21313, 1, NULL, NULL),
(681, 21341, 1, NULL, NULL),
(681, 21343, 1, NULL, NULL),
(714, 21525, 1, NULL, NULL),
(715, 21548, 1, NULL, NULL),
(716, 21573, 1, NULL, NULL),
(720, 21681, 1, NULL, NULL),
(721, 21709, 1, NULL, NULL),
(722, 21737, 1, NULL, NULL),
(722, 21740, 1, NULL, NULL),
(722, 21741, 1, NULL, NULL),
(722, 21770, 1, NULL, NULL),
(722, 21771, 1, NULL, NULL),
(722, 21772, 1, NULL, NULL),
(723, 21775, 1, NULL, NULL),
(723, 21788, 1, NULL, NULL),
(723, 21789, 1, NULL, NULL),
(723, 21792, 1, NULL, NULL),
(723, 21793, 1, NULL, NULL),
(723, 21798, 1, NULL, NULL),
(724, 21804, 1, NULL, NULL),
(724, 21814, 1, NULL, NULL),
(725, 21831, 1, NULL, NULL),
(725, 21833, 1, NULL, NULL),
(725, 21835, 1, NULL, NULL),
(726, 21844, 1, NULL, NULL),
(727, 21868, 1, NULL, NULL),
(728, 21870, 1, NULL, NULL),
(728, 21871, 1, NULL, NULL),
(729, 21874, 1, NULL, NULL),
(730, 21876, 1, NULL, NULL),
(733, 21887, 1, NULL, NULL),
(733, 21888, 1, NULL, NULL),
(734, 21891, 1, NULL, NULL),
(783, 21989, 1, NULL, NULL),
(785, 22056, 1, NULL, NULL),
(787, 22080, 1, NULL, NULL),
(788, 22104, 1, NULL, NULL),
(788, 22106, 1, NULL, NULL),
(788, 22109, 1, NULL, NULL),
(788, 22115, 1, NULL, NULL),
(789, 22167, 1, NULL, NULL),
(789, 22168, 1, NULL, NULL),
(790, 22197, 1, NULL, NULL),
(799, 22235, 2, NULL, NULL),
(825, 22286, 1, NULL, NULL),
(825, 22290, 1, NULL, NULL),
(833, 22360, 1, NULL, NULL),
(836, 22387, 1, NULL, NULL),
(838, 22404, 1, NULL, NULL),
(840, 22408, 1, NULL, NULL),
(840, 22410, 1, NULL, NULL),
(865, 22465, 1, NULL, NULL),
(898, 22518, 1, NULL, NULL),
(901, 22534, 1, NULL, NULL),
(902, 22535, 1, NULL, NULL),
(907, 22546, 1, NULL, NULL),
(910, 22554, 1, NULL, NULL),
(912, 22556, 1, NULL, NULL),
(936, 22569, 1, NULL, NULL),
(944, 22613, 1, NULL, NULL),
(945, 22618, 1, NULL, NULL),
(945, 22625, 1, NULL, NULL),
(946, 22628, 1, NULL, NULL),
(946, 22629, 1, NULL, NULL),
(950, 22638, 1, NULL, NULL),
(951, 22640, 1, NULL, NULL),
(954, 22646, 1, NULL, NULL),
(956, 22649, 1, NULL, NULL),
(982, 22668, 1, NULL, NULL),
(982, 22669, 1, NULL, NULL),
(986, 22679, 1, NULL, NULL),
(1001, 22692, 1, NULL, NULL),
(1029, 22724, 1, NULL, NULL),
(1030, 22728, 1, NULL, NULL),
(1032, 22734, 1, NULL, NULL),
(1036, 22743, 1, NULL, NULL),
(1036, 22744, 1, NULL, NULL),
(1036, 22745, 1, NULL, NULL),
(1075, 22772, 1, NULL, NULL),
(1076, 22775, 1, NULL, NULL),
(1082, 22794, 1, NULL, NULL),
(1082, 22795, 1, NULL, NULL),
(1082, 22796, 1, NULL, NULL),
(1082, 22797, 1, NULL, NULL),
(1082, 22798, 1, NULL, NULL),
(1083, 22802, 1, NULL, NULL),
(1087, 22815, 1, NULL, NULL),
(1107, 22836, 1, NULL, NULL),
(1107, 22837, 1, NULL, NULL),
(1108, 22838, 1, NULL, NULL),
(1108, 22840, 1, NULL, NULL),
(1112, 22849, 1, NULL, NULL),
(1112, 22850, 1, NULL, NULL),
(1113, 22851, 1, NULL, NULL),
(1121, 22871, 1, NULL, NULL),
(1126, 22889, 1, NULL, NULL),
(1128, 22894, 1, NULL, NULL),
(1132, 22906, 1, NULL, NULL),
(1133, 22907, 1, NULL, NULL),
(1135, 22909, 1, NULL, NULL),
(1138, 22913, 1, NULL, NULL),
(1181, 23105, 1, NULL, NULL),
(1184, 23117, 1, NULL, NULL),
(1246, 23169, 1, NULL, NULL),
(1246, 23170, 1, NULL, NULL),
(1246, 23171, 1, NULL, NULL),
(1248, 23173, 1, NULL, NULL),
(1248, 23174, 1, NULL, NULL),
(1249, 23177, 1, NULL, NULL),
(1249, 23178, 1, NULL, NULL),
(1249, 23182, 1, NULL, NULL),
(1250, 23189, 1, NULL, NULL),
(1250, 23191, 1, NULL, NULL),
(1251, 23200, 1, NULL, NULL),
(1252, 23216, 1, NULL, NULL),
(1252, 23220, 1, NULL, NULL),
(1253, 23232, 1, NULL, NULL),
(1253, 23239, 1, NULL, NULL),
(1253, 23243, 1, NULL, NULL),
(1254, 23248, 1, NULL, NULL),
(1254, 23256, 1, NULL, NULL),
(1255, 23264, 1, NULL, NULL),
(1255, 23269, 1, NULL, NULL),
(1255, 23270, 1, NULL, NULL),
(1255, 23274, 1, NULL, NULL),
(1255, 23275, 1, NULL, NULL),
(1256, 23282, 1, NULL, NULL),
(1256, 23287, 1, NULL, NULL),
(1256, 23290, 1, NULL, NULL),
(1257, 23299, 1, NULL, NULL),
(1257, 23303, 1, NULL, NULL),
(1258, 23310, 1, NULL, NULL),
(1259, 23325, 1, NULL, NULL),
(1262, 23338, 1, NULL, NULL),
(1313, 23411, 1, NULL, NULL),
(1322, 23438, 1, NULL, NULL),
(1323, 23442, 1, NULL, NULL),
(1324, 23448, 1, NULL, NULL),
(1326, 23460, 1, NULL, NULL),
(1328, 23466, 1, NULL, NULL),
(162, 26153, 1, NULL, NULL),
(1250, 26260, 1, NULL, NULL),
(1251, 26261, 1, NULL, NULL),
(1114, 26287, 1, NULL, NULL),
(1251, 26326, 2, NULL, NULL),
(1258, 26330, 1, NULL, NULL),
(1032, 26938, 1, NULL, NULL),
(797, 27005, 1, NULL, NULL),
(1001, 27066, 1, NULL, NULL),
(843, 27266, 1, NULL, NULL),
(1256, 27315, 1, NULL, NULL),
(2968, 28525, 1, NULL, NULL),
(797, 28554, 1, NULL, NULL),
(869, 28565, 1, NULL, NULL),
(1256, 28566, 1, NULL, NULL),
(913, 33120, 1, NULL, NULL),
(901, 33135, 1, NULL, NULL),
(1080, 33148, 1, NULL, NULL),
(1036, 33151, 1, NULL, NULL),
(585, 35428, 1, NULL, NULL),
(1138, 35449, 1, NULL, NULL),
(1114, 36689, 1, NULL, NULL),
(4974, 36800, 1, NULL, NULL),
(585, 36830, 1, NULL, NULL),
(910, 37108, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pis_debarmentinfo`
--
ALTER TABLE `pis_debarmentinfo`
  ADD PRIMARY KEY (`OfficerID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
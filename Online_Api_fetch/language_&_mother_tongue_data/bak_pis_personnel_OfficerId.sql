-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2020 at 08:46 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: android_application_database_internship
--

-- --------------------------------------------------------

--
-- Table structure for table bak_pis_personnel
--

CREATE TABLE bak_pis_personnel (
  id int(11) NOT NULL,
  Batch tinyint(10) NOT NULL,
  OfficerId int(11) NOT NULL,
  EmployeeCode varchar(255) NOT NULL,
  Service tinyint(10) NOT NULL,
  Title tinyint(10) NOT NULL,
  FirstName varchar(255) NOT NULL,
  MiddleName varchar(255) NOT NULL,
  SurName varchar(255) NOT NULL,
  Age int(11) NOT NULL,
  Domicile tinyint(10) NOT NULL,
  Cadre tinyint(10) NOT NULL,
  Gender tinyint(20) NOT NULL,
  Category tinyint(20) NOT NULL,
  Languages_Known tinyint(10) NOT NULL,
  Mother_Tongue_Languages tinyint(10) NOT NULL,
  ServingStatus tinyint(16) NOT NULL,
  PhysicalHandicapStatus tinyint(10) NOT NULL,
  Aadhar_Number varchar(255) NOT NULL,
  Date_Birth date NOT NULL,
  Date_Joining date NOT NULL,
  created_on datetime NOT NULL,
  created_by varchar(255) NOT NULL,
  Recruitment_Mode int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table bak_pis_personnel
--

INSERT INTO bak_pis_personnel (OfficerId) VALUES
(195623),
(205982),
(65),
(158),
(162),
(64),
(66),
(67),
(68),
(69),
(70),
(71),
(72),
(73),
(74),
(75),
(168),
(247),
(256),
(259),
(304),
(318),
(2379),
(2422),
(2539),
(2541),
(2605),
(2616),
(2941),
(2944),
(2956),
(3053),
(3141),
(3404),
(3463),
(3465),
(3496),
(4563),
(4678),
(4707),
(4716),
(4987),
(2279),
(5011),
(5220),
(5234),
(5282),
(5293),
(5320),
(5343),
(5379),
(5391),
(5395),
(5404),
(5407),
(409),
(2401),
(4578),
(4669),
(4712),
(4908),
(4932),
(5010),
(5413),
(5512),
(6335),
(6356),
(6358),
(6444),
(6594),
(6596),
(6601),
(6722),
(6737),
(6758),
(6760),
(6762),
(6763),
(6766),
(6770),
(6854),
(6865),
(6962),
(6964),
(6989),
(7061),
(7088),
(7136),
(7256),
(7271),
(7288),
(7343),
(7445),
(7449),
(7541),
(7546),
(9514),
(9520),
(9523),
(9529),
(9538),
(9542),
(9641),
(9645),
(10007),
(10022),
(10034),
(10066),
(10080),
(10088),
(10103),
(10121),
(10125),
(10909),
(10958),
(11157),
(11163),
(11284),
(11350),
(11524),
(11539),
(11564),
(11576),
(11702),
(11923),
(11978),
(13000),
(13296),
(13316),
(13327),
(13329),
(13337),
(13338),
(13353),
(13355);

--
-- Indexes for dumped tables
--

--
-- Indexes for table bak_pis_personnel
--
ALTER TABLE bak_pis_personnel
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT for dumped tables
(238),
--

--
-- AUTO_INCREMENT for table bak_pis_personnel
--
ALTER TABLE bak_pis_personnel
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;






SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  2422;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  2539;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  2541;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  2605;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  2616;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  2941;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  2944;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  2956;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  3053;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  3141;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  3404;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  3463;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  3465;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  3496;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  4563;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  4678;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  4707;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  4716;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  4987;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  2279;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  5011;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  5220;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  5234;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  5282;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  5293;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  5320;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  5343;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  5379;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  5391;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  5395;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  5404;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  5407;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  2401;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  4578;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  4669;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  4712;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  4908;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  4932;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  5010;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  5413;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  5512;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  6335;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  6356;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  6358;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  6444;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  6594;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  6596;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  6601;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  6722;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  6737;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  6758;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  6760;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  6762;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  6763;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  6766;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  6770;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  6854;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  6865;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  6962;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  6964;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  6989;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  7061;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  7088;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  7136;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  7256;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  7271;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  7288;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  7343;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  7445;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  7449;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  7541;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  7546;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  9514;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  9520;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  9523;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  9529;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  9538;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  9542;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  9641;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  9645;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  10007;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  10022;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  10034;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  10066;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  10080;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  10088;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  10103;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  10121;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  10125;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  10909;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  10958;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  11157;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  11163;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  11284;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  11524;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  11539;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  11564;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  11576;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  11702;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  11923;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  11978;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  13000;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  13296;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  13316;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  13327;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  13329;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  13337;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  13338;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  13353;
SELECT TypeOfDebarment FROM bak_pis_debarmentinfo WHERE OfficerId =  13355;







INSERT INTO bak_pis_debarmentinfo(OfficerID,TypeOfDebarment) VALUES (2422,0),
(2539,0),
(2541,0),
(2605,0),
(2616,0),
(2941,0),
(2944,0),
(2956,0),
(3053,0),
(3141,0),
(3404,0),
(3463,0),
(3465,0),
(3496,0),
(4563,0),
(4678,0),
(4707,0),
(4716,0),
(4987,0),
(2279,0),
(5011,0),
(5220,0),
(5234,0),
(5282,0),
(5293,0),
(5320,0),
(5343,0),
(5379,0),
(5391,0),
(5395,0),
(5404,0),
(5407,0),
(2401,0),
(4578,0),
(4669,0),
(4712,0),
(4908,0),
(4932,0),
(5010,0),
(5413,0),
(5512,0),
(6335,0),
(6356,0),
(6358,0),
(6444,0),
(6594,0),
(6596,0),
(6601,0),
(6722,0),
(6737,0),
(6758,0),
(6760,0),
(6762,0),
(6763,0),
(6766,0),
(6770,0),
(6854,0),
(6865,0),
(6962,0),
(6964,0),
(6989,0),
(7061,0),
(7088,0),
(7136,0),
(7256,0),
(7271,0),
(7288,0),
(7343,0),
(7445,0),
(7449,0),
(7541,0),
(7546,0),
(9514,0),
(9520,0),
(9523,0),
(9529,0),
(9538,0),
(9542,0),
(9641,0),
(9645,0),
(10007,0),
(10022,0),
(10034,0),
(10066,0),
(10080,0),
(10088,0),
(10103,0),
(10121,0),
(10125,0),
(10909,0),
(10958,0),
(11157,0),
(11163,0),
(11284,0),
(11524,0),
(11539,0),
(11564,0),
(11576,0),
(11702,0),
(11923,0),
(11978,0),
(13355,0),
(13000,0),
(13296,0),
(13316,0),
(13327,0),
(13329,0),
(13337,0),
(13338,0),
(13353,0);




INSERT INTO bak_pis_contactinfo(OfficerID) VALUES (247),
(256),
(259),
(304),
(318),
(2379),
(2422),
(2539),
(2541),
(2605),
(2616),
(2941),
(2944),
(2956),
(3053),
(3141),
(3404),
(3463),
(3465),
(3496),
(4563),
(4678),
(4707),
(4716),
(4987),
(2279),
(5011),
(5220),
(5234),
(5282),
(5293),
(5320),
(5343),
(5379),
(5391),
(5395),
(5404),
(5407),
(409),
(2401),
(4578),
(4669),
(4712),
(4908),
(4932),
(5010),
(5413),
(5512),
(6335),
(6356),
(6358),
(6444),
(6594),
(6596),
(6601),
(6722),
(6737),
(6758),
(6760),
(6762),
(6763),
(6766),
(6770),
(6854),
(6865),
(6962),
(6964),
(6989),
(7061),
(7088),
(7136),
(7256),
(7271),
(7288),
(7343),
(7445),
(7449),
(7541),
(7546),
(9514),
(9520),
(9523),
(9529),
(9538),
(9542),
(9641),
(9645),
(10007),
(10022),
(10034),
(10066),
(10080),
(10088),
(10103),
(10121),
(10125),
(10909),
(10958),
(11157),
(11163),
(11284),
(11350),
(11524),
(11539),
(11564),
(11576),
(11702),
(11923),
(11978),
(13000),
(13296),
(13316),
(13327),
(13329),
(13337),
(13338),
(13353),
(13355); 









INSERT INTO bak_pis_familyinfo(OfficerID) VALUES (247),
(256),
(259),
(304),
(318),
(2379),
(2422),
(2539),
(2541),
(2605),
(2616),
(2941),
(2944),
(2956),
(3053),
(3141),
(3404),
(3463),
(3465),
(3496),
(4563),
(4678),
(4707),
(4716),
(4987),
(2279),
(5011),
(5220),
(5234),
(5282),
(5293),
(5320),
(5343),
(5379),
(5391),
(5395),
(5404),
(5407),
(409),
(2401),
(4578),
(4669),
(4712),
(4908),
(4932),
(5010),
(5413),
(5512),
(6335),
(6356),
(6358),
(6444),
(6594),
(6596),
(6601),
(6722),
(6737),
(6758),
(6760),
(6762),
(6763),
(6766),
(6770),
(6854),
(6865),
(6962),
(6964),
(6989),
(7061),
(7088),
(7136),
(7256),
(7271),
(7288),
(7343),
(7445),
(7449),
(7541),
(7546),
(9514),
(9520),
(9523),
(9529),
(9538),
(9542),
(9641),
(9645),
(10007),
(10022),
(10034),
(10066),
(10080),
(10088),
(10103),
(10121),
(10125),
(10909),
(10958),
(11157),
(11163),
(11284),
(11350),
(11524),
(11539),
(11564),
(11576),
(11702),
(11923),
(11978),
(13000),
(13296),
(13316),
(13327),
(13329),
(13337),
(13338),
(13353),
(13355);


SELECT * FROM bak_pis_debarmentinfo;
SELECT * FROM bak_pis_contactinfo;


touch officerMiscellaneousdetailsfetch_db_config.php    officerMiscellaneousdetailsfetch_display_all_Miscellaneous_details.php  officerMiscellaneousdetailsfetch_db_function.php
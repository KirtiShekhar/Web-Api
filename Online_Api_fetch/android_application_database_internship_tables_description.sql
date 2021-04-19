CREATE DATABASE IF NOT EXISTS `android_application_database_internship` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `android_application_database_internship`;

-- --------------------------------------------------------

--
-- Table structure for table `bak_pis_awardsandpublications`
--

CREATE TABLE `bak_pis_awardsandpublications` (
  `RowId` int(11) NOT NULL,
  `BatchID` int(11) NOT NULL,
  `OfficerID` int(11) NOT NULL,
  `TypeAP` tinyint(4) DEFAULT NULL,
  `PublicationType` tinyint(4) DEFAULT NULL,
  `AP_Nature` tinyint(4) DEFAULT NULL,
  `AP_Subject` char(5) DEFAULT NULL,
  `AP_Title` varchar(4000) DEFAULT NULL,
  `AP_Name` varchar(4000) DEFAULT NULL,
  `AP_Level` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bak_pis_batchinfo`
--

CREATE TABLE `bak_pis_batchinfo` (
  `BatchID` int(11) NOT NULL,
  `YrBatch` smallint(6) NOT NULL,
  `YrExam` smallint(6) DEFAULT NULL,
  `ServiceCode` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bak_pis_central_deputation_info`
--

CREATE TABLE `bak_pis_central_deputation_info` (
  `Id` int(11) NOT NULL,
  `OfficerID` int(11) NOT NULL,
  `TenureType` tinyint(4) DEFAULT NULL,
  `TenureBeginsOn` datetime DEFAULT NULL,
  `TenureEndsOn` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bak_pis_contactinfo`
--

CREATE TABLE `bak_pis_contactinfo` (
  `OfficerID` int(11) NOT NULL,
  `PermanentAddress1` varchar(255) DEFAULT NULL,
  `PermanentAddress2` varchar(255) DEFAULT NULL,
  `PermanentAddress3` varchar(255) DEFAULT NULL,
  `PermanentCity` int(11) DEFAULT NULL,
  `PermanentState` tinyint(10) DEFAULT NULL,
  `PermanentPinCOde` varchar(255) DEFAULT NULL,
  `PresentAddress1` varchar(200) DEFAULT NULL,
  `PresentAddress2` varchar(200) DEFAULT NULL,
  `PresentAddress3` varchar(200) DEFAULT NULL,
  `PresentCity` int(11) DEFAULT NULL,
  `PresentState` tinyint(10) DEFAULT NULL,
  `PresentPinCode` int(11) DEFAULT NULL,
  `MobileNum` bigint(20) DEFAULT NULL,
  `EmailAddress` varchar(50) DEFAULT NULL,
  `AlternateEmailAddress` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bak_pis_debarmentinfo`
--

CREATE TABLE `bak_pis_debarmentinfo` (
  `Id` int(11) NOT NULL,
  `OfficerID` int(11) NOT NULL,
  `TypeOfDebarment` tinyint(4) NOT NULL,
  `DebarmentBeginsOn` datetime NOT NULL,
  `DebarmentEndsOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bak_pis_familyinfo`
--

CREATE TABLE `bak_pis_familyinfo` (
  `OfficerID` int(11) NOT NULL,
  `FatherName` varchar(50) DEFAULT NULL,
  `FatherNationality` tinyint(4) DEFAULT NULL,
  `FatherOccupation` tinyint(4) DEFAULT NULL,
  `MotherName` varchar(50) DEFAULT NULL,
  `MotherNationality` tinyint(4) DEFAULT NULL,
  `MotherOccupation` tinyint(4) DEFAULT NULL,
  `BloodGroup` tinyint(4) DEFAULT NULL,
  `BirthState` tinyint(10) DEFAULT NULL,
  `BirthPlace` varchar(255) DEFAULT NULL,
  `Nationality` tinyint(4) DEFAULT NULL,
  `Religion` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bak_pis_fieldofexperience`
--

CREATE TABLE `bak_pis_fieldofexperience` (
  `id` int(11) NOT NULL,
  `OfficerId` int(11) NOT NULL,
  `FieldExperience` tinyint(10) NOT NULL,
  `FieldMajor` char(2) NOT NULL,
  `FieldMinor` char(3) NOT NULL,
  `CreatedBy` varchar(255) NOT NULL,
  `CreatedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bak_pis_languageinfo`
--

CREATE TABLE `bak_pis_languageinfo` (
  `OfficerID` int(11) NOT NULL,
  `MotherTongue` tinyint(4) DEFAULT NULL,
  `Language` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bak_pis_personnel`
--

CREATE TABLE `bak_pis_personnel` (
  `id` int(11) NOT NULL,
  `Batch` tinyint(10) NOT NULL,
  `OfficerId` int(11) NOT NULL,
  `EmployeeCode` varchar(255) NOT NULL,
  `Service` tinyint(10) NOT NULL,
  `Title` tinyint(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Domicile` tinyint(10) NOT NULL,
  `Cadre` tinyint(10) NOT NULL,
  `Gender` tinyint(4) NOT NULL,
  `Category` tinyint(4) NOT NULL,
  `ServingStatus` tinyint(16) NOT NULL,
  `PhysicalHandicapStatus` tinyint(10) NOT NULL,
  `Aadhar_Number` varchar(255) NOT NULL,
  `Date_Birth` datetime NOT NULL,
  `Date_Joining` datetime NOT NULL,
  `Dt_LastWorked` datetime NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `Recruitment_Mode` int(11) NOT NULL,
  `MotherTongue` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bak_pis_posting`
--

CREATE TABLE `bak_pis_posting` (
  `id` int(11) NOT NULL,
  `BatchId` int(11) NOT NULL,
  `OfficerId` int(11) NOT NULL,
  `PostedAt` tinyint(10) NOT NULL,
  `Postingtype` tinyint(10) NOT NULL,
  `PostingLevel` tinyint(10) NOT NULL,
  `DesignationCode` int(11) NOT NULL,
  `MinisteryCode` int(11) NOT NULL,
  `DepartmentCode` int(11) NOT NULL,
  `OfficerCode` int(11) NOT NULL,
  `LocationCode` int(11) NOT NULL,
  `ICDCOde` tinyint(10) NOT NULL,
  `FieldMajor` char(2) NOT NULL,
  `FieldMinor` char(3) NOT NULL,
  `DateFrom` datetime NOT NULL,
  `DateTo` datetime NOT NULL,
  `ChargeNature` tinyint(10) NOT NULL,
  `PostingOrderNo` varchar(255) DEFAULT NULL,
  `PostingOrderdate` datetime DEFAULT NULL,
  `Remarks` varchar(500) NOT NULL,
  `CreatedBy` varchar(255) NOT NULL,
  `CreatedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bak_pis_qualification`
--

CREATE TABLE `bak_pis_qualification` (
  `id` int(11) NOT NULL,
  `BatchId` int(11) NOT NULL,
  `OfficerId` int(11) NOT NULL,
  `Degree` smallint(6) NOT NULL,
  `passingYear` smallint(6) NOT NULL,
  `DivisionCode` tinyint(4) NOT NULL,
  `CGPA` decimal(4,2) NOT NULL,
  `Percentage` decimal(4,2) NOT NULL,
  `Subject1` smallint(6) NOT NULL,
  `Subject2` smallint(6) NOT NULL,
  `Subject3` smallint(6) NOT NULL,
  `Institution` smallint(6) NOT NULL,
  `University` smallint(6) NOT NULL,
  `CreatedBy` varchar(255) NOT NULL,
  `CreatedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bak_pis_training`
--

CREATE TABLE `bak_pis_training` (
  `RowId` int(11) NOT NULL,
  `BatchID` int(11) NOT NULL,
  `OfficerID` int(11) NOT NULL,
  `TrgName` smallint(6) DEFAULT NULL,
  `TrgSubject` char(5) DEFAULT NULL,
  `TrgType` tinyint(4) DEFAULT NULL,
  `TrgInstitute` smallint(6) DEFAULT NULL,
  `TrgCountry` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bak_pis_awardsandpublications`
--
ALTER TABLE `bak_pis_awardsandpublications`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `bak_pis_central_deputation_info`
--
ALTER TABLE `bak_pis_central_deputation_info`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `personal_central_deputation_tenure_fk` (`TenureType`);

--
-- Indexes for table `bak_pis_contactinfo`
--
ALTER TABLE `bak_pis_contactinfo`
  ADD PRIMARY KEY (`OfficerID`);

--
-- Indexes for table `bak_pis_debarmentinfo`
--
ALTER TABLE `bak_pis_debarmentinfo`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `personal_debarment_debarmenttype_fk` (`TypeOfDebarment`);

--
-- Indexes for table `bak_pis_familyinfo`
--
ALTER TABLE `bak_pis_familyinfo`
  ADD PRIMARY KEY (`OfficerID`);

--
-- Indexes for table `bak_pis_fieldofexperience`
--
ALTER TABLE `bak_pis_fieldofexperience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bak_pis_personnel`
--
ALTER TABLE `bak_pis_personnel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personal_batch_fk` (`Batch`),
  ADD KEY `personal_gender_fk` (`Gender`),
  ADD KEY `personal_service_fk` (`Service`),
  ADD KEY `personal_servingstatus_fk` (`ServingStatus`),
  ADD KEY `personal_physicalhandicapstatus_fk` (`PhysicalHandicapStatus`),
  ADD KEY `personal_recruitmenttypes_fk` (`Recruitment_Mode`);

--
-- Indexes for table `bak_pis_posting`
--
ALTER TABLE `bak_pis_posting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personal_posting_designation_fk` (`DesignationCode`),
  ADD KEY `personal_posting_department_fk` (`DepartmentCode`),
  ADD KEY `personal_posting_ministry_fk` (`MinisteryCode`),
  ADD KEY `personal_posting_office_fk` (`OfficerCode`),
  ADD KEY `personal_posting_locations_fk` (`LocationCode`),
  ADD KEY `personal_posting_postingtype_fk` (`Postingtype`);

--
-- Indexes for table `bak_pis_qualification`
--
ALTER TABLE `bak_pis_qualification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personal_qualification_degree_fk` (`Degree`),
  ADD KEY `personal_qualification_division_fk` (`DivisionCode`),
  ADD KEY `personal_qualification_institution_fk` (`Institution`),
  ADD KEY `personal_qualification_university_fk` (`University`),
  ADD KEY `personal_qualification_qualificationsubject1_fk` (`Subject1`);

--
-- Indexes for table `bak_pis_training`
--
ALTER TABLE `bak_pis_training`
  ADD PRIMARY KEY (`RowId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bak_pis_awardsandpublications`
--
ALTER TABLE `bak_pis_awardsandpublications`
  MODIFY `RowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1803;
--
-- AUTO_INCREMENT for table `bak_pis_central_deputation_info`
--
ALTER TABLE `bak_pis_central_deputation_info`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8010;
--
-- AUTO_INCREMENT for table `bak_pis_debarmentinfo`
--
ALTER TABLE `bak_pis_debarmentinfo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3642;
--
-- AUTO_INCREMENT for table `bak_pis_fieldofexperience`
--
ALTER TABLE `bak_pis_fieldofexperience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3378;
--
-- AUTO_INCREMENT for table `bak_pis_personnel`
--
ALTER TABLE `bak_pis_personnel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3401;
--
-- AUTO_INCREMENT for table `bak_pis_posting`
--
ALTER TABLE `bak_pis_posting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3792;
--
-- AUTO_INCREMENT for table `bak_pis_qualification`
--
ALTER TABLE `bak_pis_qualification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23984;
--
-- AUTO_INCREMENT for table `bak_pis_training`
--
ALTER TABLE `bak_pis_training`
  MODIFY `RowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38144;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bak_pis_central_deputation_info`
--
ALTER TABLE `bak_pis_central_deputation_info`
  ADD CONSTRAINT `personal_central_deputation_tenure_fk` FOREIGN KEY (`TenureType`) REFERENCES `jse_cf_tenure_type` (`tenure_type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bak_pis_debarmentinfo`
--
ALTER TABLE `bak_pis_debarmentinfo`
  ADD CONSTRAINT `personal_debarment_debarmenttype_fk` FOREIGN KEY (`TypeOfDebarment`) REFERENCES `jse_cf_debartment_type` (`debartment_type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bak_pis_personnel`
--
ALTER TABLE `bak_pis_personnel`
  ADD CONSTRAINT `personal_batch_fk` FOREIGN KEY (`Batch`) REFERENCES `jse_cf_batch` (`batch_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `personal_gender_fk` FOREIGN KEY (`Gender`) REFERENCES `jse_cf_gender` (`Gender_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `personal_physicalhandicapstatus_fk` FOREIGN KEY (`PhysicalHandicapStatus`) REFERENCES `jse_cf_handicapstatus` (`HandicapCode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `personal_recruitmenttypes_fk` FOREIGN KEY (`Recruitment_Mode`) REFERENCES `jse_cf_source_of_recruitment` (`recruitment_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `personal_service_fk` FOREIGN KEY (`Service`) REFERENCES `jse_cf_service` (`Service_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `personal_servingstatus_fk` FOREIGN KEY (`ServingStatus`) REFERENCES `jse_cf_servingstatus` (`SSCode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bak_pis_posting`
--
ALTER TABLE `bak_pis_posting`
  ADD CONSTRAINT `personal_posting_department_fk` FOREIGN KEY (`DepartmentCode`) REFERENCES `jse_cf_department` (`MinDeptCode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `personal_posting_designation_fk` FOREIGN KEY (`DesignationCode`) REFERENCES `jse_cf_designation` (`DesignationCode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `personal_posting_locations_fk` FOREIGN KEY (`LocationCode`) REFERENCES `jse_cf_locations` (`MinDeptCode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `personal_posting_ministry_fk` FOREIGN KEY (`MinisteryCode`) REFERENCES `jse_cf_ministry` (`MinDeptCode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `personal_posting_office_fk` FOREIGN KEY (`OfficerCode`) REFERENCES `jse_cf_office` (`MinDeptCode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `personal_posting_postingtype_fk` FOREIGN KEY (`Postingtype`) REFERENCES `jse_cf_postingtype` (`PostingTypeCode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bak_pis_qualification`
--
ALTER TABLE `bak_pis_qualification`
  ADD CONSTRAINT `personal_qualification_degree_fk` FOREIGN KEY (`Degree`) REFERENCES `jse_cf_degree` (`DegreeCode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `personal_qualification_division_fk` FOREIGN KEY (`DivisionCode`) REFERENCES `jse_cf_division` (`DivisionCode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `personal_qualification_institution_fk` FOREIGN KEY (`Institution`) REFERENCES `jse_cf_institution` (`InstitutionCode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `personal_qualification_qualificationsubject1_fk` FOREIGN KEY (`Subject1`) REFERENCES `jse_cf_qualificationsubjects` (`SubjectCode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `personal_qualification_university_fk` FOREIGN KEY (`University`) REFERENCES `jse_cf_university` (`UniversityCode`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

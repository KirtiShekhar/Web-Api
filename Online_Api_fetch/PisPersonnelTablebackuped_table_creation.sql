CREATE TABLE bak_pis_familyinfo 
(
  BatchID int(11) NOT NULL,
  OfficerID int(11) NOT NULL,
  FatherName varchar(50) DEFAULT NULL,
  MotherName varchar(50) DEFAULT NULL,
  BloodGroup tinyint(4) DEFAULT NULL,
  BirthPlace varchar(30) DEFAULT NULL,
  PRIMARY KEY (OfficerID)
);

CREATE TABLE bak_pis_contactinfo (
  BatchID int(11) NOT NULL,
  OfficerID int(11) NOT NULL,
  PresentAddress1 varchar(200) DEFAULT NULL,
  PresentAddress2 varchar(200) DEFAULT NULL,
  PresentAddress3 varchar(200) DEFAULT NULL,
  PresentPinCode int(11) DEFAULT NULL,
  MobileNum bigint(20) DEFAULT NULL,
  EmailAddress varchar(50) DEFAULT NULL,
  AlternateEmailAddress varchar(50) DEFAULT NULL,
  PRIMARY KEY (OfficerID);
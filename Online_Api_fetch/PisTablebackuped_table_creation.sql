CREATE TABLE bak_pis_qualification 
(
	id int not null primary key auto_increment,
	BatchId int not null,
	OfficerId int not null,
	Degree smallint not null,
	passingYear smallint not null,
	DivisionCode tinyint not null,
	CGPA decimal(4,2) not null,
	Percentage decimal(4,2) not null,
	Subject1 smallint not null, 
	Subject2 smallint not null, 
	Subject3 smallint not null, 
	Institution smallint not null, 
	University smallint not null,
	CreatedBy varchar(255) not null,
	CreatedOn datetime not null 
);

CREATE TABLE bak_pis_posting
(
	id int not null primary key auto_increment,
	BatchId int not null,
	OfficerId int not null,
	Postingtype tinyint(10) not null,
	PostingLevel tinyint(10) not null,
	DesignationCode int not null,
	MinisteryCode int not null,
	DepartmentCode int not null,
	OfficerCode int not null,
	LocationCode int not null,
	ICDCOde tinyint(10) not null,
	FieldMajor char(2) not null,
	FieldMinor char(2) not null,
	DateFrom  date not null,
	DateTo date not null,
	ChargeNature tinyint(10) not null,
	Remarks varchar(500) not null,
	CreatedBy varchar(255) not null,
	CreatedOn datetime not null 
);

CREATE TABLE bak_pis_fieldOfExperience
(
	id int not null primary key auto_increment,
	OfficerId int not null,
	FieldExperience tinyint(10) not null,
	FieldMajor char(2) not null,
	CreatedBy varchar(255) not null,
	CreatedOn datetime not null 
);

CREATE TABLE bak_pis_personnel
(
id int(11) PRIMARY KEY NOT NULL, auto_increment, 
 Batch tinyint(10)   NOT NULL,                    
 OfficerId tinyint(10)   NOT NULL,                    
 EmployeeCode varchar(255)  NOT NULL,
 Service tinyint(10)   NOT NULL,                    
 Title tinyint(10)   NOT NULL,                    
 FirstName varchar(255)  NOT NULL,
 MiddleName varchar(255)  NOT NULL,
 SurName varchar(255)  NOT NULL,
 Domicile tinyint(10)   NOT NULL,                    
 Cadre tinyint(10)   NOT NULL,                    
 Gender tinyint(20)   NOT NULL,                    
 Category tinyint(20)   NOT NULL,                    
 Languages_Known tinyint(10)   NOT NULL,                    
 Mother_Tongue_Languages tinyint(10)   NOT NULL,                    
 ServingStatus tinyint(16)   NOT NULL,                    
 PhysicalHandicapStatus tinyint(10)   NOT NULL,                    
 Aadhar_Number varchar(255)  NOT NULL,
 Date_Birth date NOT NULL,
 Date_Joining date NOT NULL,
 created_on datetime NOT NULL,
 created_by  varchar(255) NOT NULL
 );
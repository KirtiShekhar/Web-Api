USE android_application_database_internship;

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



Create Table DeptDescription
(
	MinDeptCode int not null primary key auto_increment,
	MinDeptDesc varchar(150)
);


INSERT INTO DeptDescription(MinDeptDesc) VALUES((SELECT DISTINCT minDeptDesc from jse_cf_department));


CREATE TABLE bak_pis_fieldOfExperience
(
	id int not null primary key auto_increment,
	OfficerId int not null,
	FieldExperience tinyint(10) not null,
	FieldMajor char(2) not null,
	CreatedBy varchar(255) not null,
	CreatedOn datetime not null 
);
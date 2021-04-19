USE android_application_database_internship;

CREATE TABLE pis_training
(
	id int not null primary key auto_increment,
	BatchId int not null,
	OfficerId int not null,
	TrgName smallint not null,
	TrgSubject char(2) not null,
	TrgType tinyint(10) not null,
	TrgInstitute smallint not null,
	TrgCountry tinyint(10) not null,
	DateFrom  date not null,
	DateTo date not null,
	Remarks varchar(500) not null,
	CreatedBy varchar(255) not null,
	CreatedOn datetime not null 
);
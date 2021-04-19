USE android_application_database_internship;

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
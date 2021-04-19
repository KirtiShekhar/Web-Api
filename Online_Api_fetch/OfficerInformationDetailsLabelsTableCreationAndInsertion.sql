CREATE TABLE OfficerInformationDetailsLabels
(
	DetailsId not null primary key auto_increment,
	DetailsLabelText varchar(255) not null
);

INSERT INTO OfficerInformationDetailsLabels(DetailsLabelText) VALUES
("Complete BioData"),
("Educational Qualification"),
("Details of Central Deputation"),
("Experience Details"),
("Mid Career Training Details"),
("In Service Training Details"),
("Domestic Training Details"),
("Awards And Publications Details");
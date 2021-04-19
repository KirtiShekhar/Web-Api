N.A.
Centre_(Captive Post)
Centre
Centre(Foreign_Posting)
Centre(Foreign_Training)
Centre(PSU)
Centre(Study_Leave)
Cadre(Non-AIS)
Centre(Domestic_Training)
Centre(Non-Central_Staffing_Scheme)
Centre(Deputation_under_Rule_6(2)(ii)
Cadre(AIS)
Cadre(Foreign_Posting)
Cadre(Foreign_Training)
Cadre(PSU)
Cadre_(Study_Leave)
Cadre(Ex-Cadre)
Cadre(Inter-Cadre_Deputation)
End_Tenure_Leave
Centre(Ex-Cadre)
Cadre_(Deputation_under_Rule_6(2)(ii)
Cadre(Domestic_Trainings)
Probationer
Cadre(Extension_of_inter_cadre_deputation)
Cadre(Short_Term_Consultancy_Assignment)
End_Tenure_Leave
Probationer

USE android_application_database_internship;

DROP TABLE IF EXISTS user_Profile_infoformation;

CREATE TABLE user_Profile_infoformation ( ProfileId INT(50) NOT NULL AUTO_INCREMENT , UserUsername VARCHAR(255) NOT NULL , UserFullname VARCHAR(255) NOT NULL , UserEmailAddress VARCHAR(255) NOT NULL , UserContactNumber VARCHAR(255) NOT NULL , UserCountry VARCHAR(255) NOT NULL , UserState VARCHAR(255) NOT NULL , UserCity VARCHAR(255) NOT NULL , UserProfilePhoto BLOB NOT NULL , PRIMARY KEY (UserId));

DROP TABLE IF EXISTS user_registration_info;

CREATE TABLE user_registration_info (
 user_id int(15) NOT NULL AUTO_INCREMENT,
 userUserName varchar(255) NOT NULL,
 user_contact_number varchar(255) NOT NULL,
 user_emailaddress varchar(255) NOT NULL,
 user_password varchar(255) NOT NULL,
 PRIMARY KEY (user_id));
<?php

"SELECT bak_pis_personnel.id AS SNO,batch_year,bak_pis_personnel.OfficerId AS OFFICER_ID,bak_pis_personnel.EmployeeCode AS EMPLOYEE_CODE,ServiceName,jse_cf_title.TitleDesc AS TITLE,bak_pis_personnel.FirstName AS FIRST_NAME,bak_pis_personnel.MiddleName AS MIDDLE_NAME,bak_pis_personnel.SurName AS SURNAME,jse_cf_domicilestate.StateName AS DOMICILE_STATE,CadreStateName, Gender_name, CategoryDesc, Languages_names, mother_tongue_languages_name, SSDesc,jse_cf_handicapstatus.HandicapStatus AS PHYSICAL_HANDICAP_STATUS,bak_pis_personnel.Aadhar_Number AS AADHAR_NUMBER,bak_pis_personnel.Date_Birth AS DATE_OF_BIRTH,bak_pis_personnel.Date_Joining AS DATE_OF_JOINING,bak_pis_personnel.created_on AS CREATED_ON,bak_pis_personnel.created_by AS CREATED_BY FROM bak_pis_personnel
LEFT OUTER JOIN jse_cf_batch ON jse_cf_batch.batch_id = bak_pis_personnel.Batch
LEFT OUTER JOIN jse_cf_service ON jse_cf_service.Service_Id = bak_pis_personnel.Service
LEFT OUTER JOIN jse_cf_title ON jse_cf_title.TitleCode = bak_pis_personnel.Title
LEFT OUTER JOIN jse_cf_domicilestate ON jse_cf_domicilestate.StateID = bak_pis_personnel.Domicile
LEFT OUTER JOIN jse_cf_cadrestate ON jse_cf_cadrestate.CadreStateId = bak_pis_personnel.Cadre
LEFT OUTER JOIN jse_cf_gender ON jse_cf_gender.Gender_Id = bak_pis_personnel.Gender
LEFT OUTER JOIN jse_cf_category ON jse_cf_category.CategoryCode = bak_pis_personnel.Category
LEFT OUTER JOIN jse_cf_languages ON jse_cf_languages.Languages_Id = bak_pis_personnel.Languages_Known
LEFT OUTER JOIN jse_cf_mother_tongue ON jse_cf_mother_tongue.id = bak_pis_personnel.Mother_Tongue_Languages
LEFT OUTER JOIN jse_cf_servingstatus ON jse_cf_servingstatus.SSCode = bak_pis_personnel.ServingStatus
LEFT OUTER JOIN jse_cf_handicapstatus ON jse_cf_handicapstatus.HandicapCode = bak_pis_personnel.PhysicalHandicapStatus 
UNION ALL
SELECT bak_pis_qualification.id AS SNO,bak_pis_qualification.OfficerId AS OFFICERId , jse_cf_degree.DegreeDesc AS DEGREE, jse_cf_division.DivisionDesc AS DIVISION, jse_cf_qualificationsubjects.SubjectDesc AS SUBJECT1, jse_cf_qualificationsubjects2.SubjectDesc AS SUBJECT2, jse_cf_qualificationsubjects3.SubjectDesc AS SUBJEC3,jse_cf_institution.InstitutionDesc AS INSTITUTION , jse_cf_university.UniversityDesc AS UNIVERSITY ,bak_pis_qualification.passingYear AS PASSINGYEAR , bak_pis_qualification.CGPA AS CGPA , bak_pis_qualification.Percentage AS PERCENTAGE , bak_pis_qualification.CreatedBy AS CREATEDBY , bak_pis_qualification.CreatedOn AS CREATEDON FROM bak_pis_qualification
LEFT OUTER JOIN jse_cf_degree ON jse_cf_degree.DegreeCode = bak_pis_qualification.Degree
LEFT OUTER JOIN jse_cf_division ON jse_cf_division.DivisionCode = bak_pis_qualification.DivisionCode
LEFT OUTER JOIN jse_cf_qualificationsubjects ON jse_cf_qualificationsubjects.SubjectCode = bak_pis_qualification.Subject1
LEFT OUTER JOIN jse_cf_qualificationsubjects2 ON jse_cf_qualificationsubjects2.SubjectCode = bak_pis_qualification.Subject2
LEFT OUTER JOIN jse_cf_qualificationsubjects3 ON jse_cf_qualificationsubjects3.SubjectCode = bak_pis_qualification.Subject3
LEFT OUTER JOIN jse_cf_institution ON jse_cf_institution.InstitutionCode = bak_pis_qualification.Institution
LEFT OUTER JOIN jse_cf_university ON jse_cf_university.UniversityCode = bak_pis_qualification.University
WHERE OFFICERId = OFFICER_ID"

"SELECT bak_pis_personnel.id AS SNO,batch_year,bak_pis_personnel.OfficerId AS OFFICER_ID,bak_pis_personnel.EmployeeCode AS EMPLOYEE_CODE,ServiceName,jse_cf_title.TitleDesc AS TITLE,bak_pis_personnel.FirstName AS FIRST_NAME,bak_pis_personnel.MiddleName AS MIDDLE_NAME,bak_pis_personnel.SurName AS SURNAME,jse_cf_domicilestate.StateName AS DOMICILE_STATE,CadreStateName, Gender_name, CategoryDesc, Languages_names, mother_tongue_languages_name, SSDesc,jse_cf_handicapstatus.HandicapStatus AS PHYSICAL_HANDICAP_STATUS,bak_pis_personnel.Aadhar_Number AS AADHAR_NUMBER,bak_pis_personnel.Date_Birth AS DATE_OF_BIRTH,bak_pis_personnel.Date_Joining AS DATE_OF_JOINING,bak_pis_personnel.created_on AS CREATED_ON,bak_pis_personnel.created_by AS CREATED_BY,bak_pis_qualification.id AS SNO,bak_pis_qualification.OfficerId AS OFFICERId , jse_cf_degree.DegreeDesc AS DEGREE, jse_cf_division.DivisionDesc AS DIVISION, jse_cf_qualificationsubjects.SubjectDesc AS SUBJECT1, jse_cf_qualificationsubjects2.SubjectDesc AS SUBJECT2, jse_cf_qualificationsubjects3.SubjectDesc AS SUBJEC3,jse_cf_institution.InstitutionDesc AS INSTITUTION , jse_cf_university.UniversityDesc AS UNIVERSITY ,bak_pis_qualification.passingYear AS PASSINGYEAR , bak_pis_qualification.CGPA AS CGPA , bak_pis_qualification.Percentage AS PERCENTAGE , bak_pis_qualification.CreatedBy AS CREATEDBY , bak_pis_qualification.CreatedOn AS CREATEDON  FROM bak_pis_personnel
LEFT OUTER JOIN jse_cf_batch ON jse_cf_batch.batch_id = bak_pis_personnel.Batch
LEFT OUTER JOIN jse_cf_service ON jse_cf_service.Service_Id = bak_pis_personnel.Service
LEFT OUTER JOIN jse_cf_title ON jse_cf_title.TitleCode = bak_pis_personnel.Title
LEFT OUTER JOIN jse_cf_domicilestate ON jse_cf_domicilestate.StateID = bak_pis_personnel.Domicile
LEFT OUTER JOIN jse_cf_cadrestate ON jse_cf_cadrestate.CadreStateId = bak_pis_personnel.Cadre
LEFT OUTER JOIN jse_cf_gender ON jse_cf_gender.Gender_Id = bak_pis_personnel.Gender
LEFT OUTER JOIN jse_cf_category ON jse_cf_category.CategoryCode = bak_pis_personnel.Category
LEFT OUTER JOIN jse_cf_languages ON jse_cf_languages.Languages_Id = bak_pis_personnel.Languages_Known
LEFT OUTER JOIN jse_cf_mother_tongue ON jse_cf_mother_tongue.id = bak_pis_personnel.Mother_Tongue_Languages
LEFT OUTER JOIN jse_cf_servingstatus ON jse_cf_servingstatus.SSCode = bak_pis_personnel.ServingStatus
LEFT OUTER JOIN jse_cf_handicapstatus ON jse_cf_handicapstatus.HandicapCode = bak_pis_personnel.PhysicalHandicapStatus 
LEFT OUTER JOIN jse_cf_degree ON jse_cf_degree.DegreeCode = bak_pis_qualification.Degree
LEFT OUTER JOIN jse_cf_division ON jse_cf_division.DivisionCode = bak_pis_qualification.DivisionCode
LEFT OUTER JOIN jse_cf_qualificationsubjects ON jse_cf_qualificationsubjects.SubjectCode = bak_pis_qualification.Subject1
LEFT OUTER JOIN jse_cf_qualificationsubjects2 ON jse_cf_qualificationsubjects2.SubjectCode = bak_pis_qualification.Subject2
LEFT OUTER JOIN jse_cf_qualificationsubjects3 ON jse_cf_qualificationsubjects3.SubjectCode = bak_pis_qualification.Subject3
LEFT OUTER JOIN jse_cf_institution ON jse_cf_institution.InstitutionCode = bak_pis_qualification.Institution
LEFT OUTER JOIN jse_cf_university ON jse_cf_university.UniversityCode = bak_pis_qualification.University
WHERE OFFICERId = OFFICER_ID"







"SELECT bak_pis_personnel.id AS SNO,batch_year,bak_pis_personnel.OfficerId,bak_pis_personnel.EmployeeCode AS EMPLOYEE_CODE,ServiceName,jse_cf_title.TitleDesc AS TITLE,bak_pis_personnel.FirstName AS FIRST_NAME,bak_pis_personnel.MiddleName AS MIDDLE_NAME,bak_pis_personnel.SurName AS SURNAME,jse_cf_domicilestate.StateName AS DOMICILE_STATE,CadreStateName, Gender_name, CategoryDesc, Languages_names, mother_tongue_languages_name, SSDesc,jse_cf_handicapstatus.HandicapStatus AS PHYSICAL_HANDICAP_STATUS,bak_pis_personnel.Aadhar_Number AS AADHAR_NUMBER,bak_pis_personnel.Date_Birth AS DATE_OF_BIRTH,bak_pis_personnel.Date_Joining AS DATE_OF_JOINING,bak_pis_personnel.created_on AS CREATED_ON,bak_pis_personnel.created_by AS CREATED_BY,bak_pis_qualification.id AS SNO,bak_pis_qualification.OfficerId, jse_cf_degree.DegreeDesc AS DEGREE, jse_cf_division.DivisionDesc AS DIVISION, jse_cf_qualificationsubjects.SubjectDesc AS SUBJECT1, jse_cf_qualificationsubjects2.SubjectDesc AS SUBJECT2, jse_cf_qualificationsubjects3.SubjectDesc AS SUBJEC3,jse_cf_institution.InstitutionDesc AS INSTITUTION , jse_cf_university.UniversityDesc AS UNIVERSITY ,bak_pis_qualification.passingYear AS PASSINGYEAR , bak_pis_qualification.CGPA AS CGPA , bak_pis_qualification.Percentage AS PERCENTAGE , bak_pis_qualification.CreatedBy AS CREATEDBY , bak_pis_qualification.CreatedOn AS CREATEDON  FROM bak_pis_personnel
LEFT OUTER JOIN jse_cf_batch ON jse_cf_batch.batch_id = bak_pis_personnel.Batch
LEFT OUTER JOIN jse_cf_service ON jse_cf_service.Service_Id = bak_pis_personnel.Service
LEFT OUTER JOIN jse_cf_title ON jse_cf_title.TitleCode = bak_pis_personnel.Title
LEFT OUTER JOIN jse_cf_domicilestate ON jse_cf_domicilestate.StateID = bak_pis_personnel.Domicile
LEFT OUTER JOIN jse_cf_cadrestate ON jse_cf_cadrestate.CadreStateId = bak_pis_personnel.Cadre
LEFT OUTER JOIN jse_cf_gender ON jse_cf_gender.Gender_Id = bak_pis_personnel.Gender
LEFT OUTER JOIN jse_cf_category ON jse_cf_category.CategoryCode = bak_pis_personnel.Category
LEFT OUTER JOIN jse_cf_languages ON jse_cf_languages.Languages_Id = bak_pis_personnel.Languages_Known
LEFT OUTER JOIN jse_cf_mother_tongue ON jse_cf_mother_tongue.id = bak_pis_personnel.Mother_Tongue_Languages
LEFT OUTER JOIN jse_cf_servingstatus ON jse_cf_servingstatus.SSCode = bak_pis_personnel.ServingStatus
LEFT OUTER JOIN jse_cf_handicapstatus ON jse_cf_handicapstatus.HandicapCode = bak_pis_personnel.PhysicalHandicapStatus, bak_pis_qualification
LEFT OUTER JOIN jse_cf_degree ON jse_cf_degree.DegreeCode = bak_pis_qualification.Degree
LEFT OUTER JOIN jse_cf_division ON jse_cf_division.DivisionCode = bak_pis_qualification.DivisionCode
LEFT OUTER JOIN jse_cf_qualificationsubjects ON jse_cf_qualificationsubjects.SubjectCode = bak_pis_qualification.Subject1
LEFT OUTER JOIN jse_cf_qualificationsubjects2 ON jse_cf_qualificationsubjects2.SubjectCode = bak_pis_qualification.Subject2
LEFT OUTER JOIN jse_cf_qualificationsubjects3 ON jse_cf_qualificationsubjects3.SubjectCode = bak_pis_qualification.Subject3
LEFT OUTER JOIN jse_cf_institution ON jse_cf_institution.InstitutionCode = bak_pis_qualification.Institution
LEFT OUTER JOIN jse_cf_university ON jse_cf_university.UniversityCode = bak_pis_qualification.University
WHERE 1 = 1 AND Gender_name = 'Female'AND bak_pis_personnel.OfficerId = bak_pis_qualification.OfficerId"




"SELECT bak_pis_personnel.id AS SNO,batch_year,bak_pis_personnel.OfficerId,bak_pis_personnel.EmployeeCode AS EMPLOYEE_CODE,ServiceName,jse_cf_title.TitleDesc AS TITLE,bak_pis_personnel.FirstName AS FIRST_NAME,bak_pis_personnel.MiddleName AS MIDDLE_NAME,bak_pis_personnel.SurName AS SURNAME,jse_cf_domicilestate.StateName AS DOMICILE_STATE,CadreStateName, Gender_name, CategoryDesc, Languages_names, mother_tongue_languages_name, SSDesc,jse_cf_handicapstatus.HandicapStatus AS PHYSICAL_HANDICAP_STATUS,bak_pis_personnel.Aadhar_Number AS AADHAR_NUMBER,bak_pis_personnel.Date_Birth AS DATE_OF_BIRTH,bak_pis_personnel.Date_Joining AS DATE_OF_JOINING,bak_pis_personnel.created_on AS CREATED_ON,bak_pis_personnel.created_by AS CREATED_BY,bak_pis_qualification.id AS SNO,bak_pis_qualification.OfficerId, jse_cf_degree.DegreeDesc AS DEGREE, jse_cf_division.DivisionDesc AS DIVISION, jse_cf_qualificationsubjects.SubjectDesc AS SUBJECT1, jse_cf_qualificationsubjects2.SubjectDesc AS SUBJECT2, jse_cf_qualificationsubjects3.SubjectDesc AS SUBJEC3,jse_cf_institution.InstitutionDesc AS INSTITUTION , jse_cf_university.UniversityDesc AS UNIVERSITY ,bak_pis_qualification.passingYear AS PASSINGYEAR , bak_pis_qualification.CGPA AS CGPA , bak_pis_qualification.Percentage AS PERCENTAGE , bak_pis_qualification.CreatedBy AS CREATEDBY , bak_pis_qualification.CreatedOn AS CREATEDON  FROM bak_pis_personnel
LEFT OUTER JOIN jse_cf_batch ON jse_cf_batch.batch_id = bak_pis_personnel.Batch
LEFT OUTER JOIN jse_cf_service ON jse_cf_service.Service_Id = bak_pis_personnel.Service
LEFT OUTER JOIN jse_cf_title ON jse_cf_title.TitleCode = bak_pis_personnel.Title
LEFT OUTER JOIN jse_cf_domicilestate ON jse_cf_domicilestate.StateID = bak_pis_personnel.Domicile
LEFT OUTER JOIN jse_cf_cadrestate ON jse_cf_cadrestate.CadreStateId = bak_pis_personnel.Cadre
LEFT OUTER JOIN jse_cf_gender ON jse_cf_gender.Gender_Id = bak_pis_personnel.Gender
LEFT OUTER JOIN jse_cf_category ON jse_cf_category.CategoryCode = bak_pis_personnel.Category
LEFT OUTER JOIN jse_cf_languages ON jse_cf_languages.Languages_Id = bak_pis_personnel.Languages_Known
LEFT OUTER JOIN jse_cf_mother_tongue ON jse_cf_mother_tongue.id = bak_pis_personnel.Mother_Tongue_Languages
LEFT OUTER JOIN jse_cf_servingstatus ON jse_cf_servingstatus.SSCode = bak_pis_personnel.ServingStatus
LEFT OUTER JOIN jse_cf_handicapstatus ON jse_cf_handicapstatus.HandicapCode = bak_pis_personnel.PhysicalHandicapStatus, bak_pis_qualification
LEFT OUTER JOIN jse_cf_degree ON jse_cf_degree.DegreeCode = bak_pis_qualification.Degree
LEFT OUTER JOIN jse_cf_division ON jse_cf_division.DivisionCode = bak_pis_qualification.DivisionCode
LEFT OUTER JOIN jse_cf_qualificationsubjects ON jse_cf_qualificationsubjects.SubjectCode = bak_pis_qualification.Subject1
LEFT OUTER JOIN jse_cf_qualificationsubjects2 ON jse_cf_qualificationsubjects2.SubjectCode = bak_pis_qualification.Subject2
LEFT OUTER JOIN jse_cf_qualificationsubjects3 ON jse_cf_qualificationsubjects3.SubjectCode = bak_pis_qualification.Subject3
LEFT OUTER JOIN jse_cf_institution ON jse_cf_institution.InstitutionCode = bak_pis_qualification.Institution
LEFT OUTER JOIN jse_cf_university ON jse_cf_university.UniversityCode = bak_pis_qualification.University
WHERE 1=1 AND bak_pis_personnel.OfficerId = bak_pis_qualification.OfficerId"


"SELECT bak_pis_personnel.id AS SNO,batch_year,bak_pis_personnel.OfficerId,bak_pis_personnel.EmployeeCode AS EMPLOYEE_CODE,ServiceName,jse_cf_title.TitleDesc AS TITLE,bak_pis_personnel.FirstName AS FIRST_NAME,bak_pis_personnel.MiddleName AS MIDDLE_NAME,bak_pis_personnel.SurName AS SURNAME,jse_cf_domicilestate.StateName AS DOMICILE_STATE,CadreStateName, Gender_name, CategoryDesc, Languages_names, mother_tongue_languages_name, SSDesc,jse_cf_handicapstatus.HandicapStatus AS PHYSICAL_HANDICAP_STATUS,bak_pis_personnel.Aadhar_Number AS AADHAR_NUMBER,bak_pis_personnel.Date_Birth AS DATE_OF_BIRTH,bak_pis_personnel.Date_Joining AS DATE_OF_JOINING,bak_pis_personnel.created_on AS CREATED_ON,bak_pis_personnel.created_by AS CREATED_BY,bak_pis_qualification.id AS SNO,bak_pis_qualification.OfficerId, jse_cf_degree.DegreeDesc AS DEGREE, jse_cf_division.DivisionDesc AS DIVISION, jse_cf_qualificationsubjects.SubjectDesc AS SUBJECT1, jse_cf_qualificationsubjects2.SubjectDesc AS SUBJECT2, jse_cf_qualificationsubjects3.SubjectDesc AS SUBJEC3,jse_cf_institution.InstitutionDesc AS INSTITUTION , jse_cf_university.UniversityDesc AS UNIVERSITY ,bak_pis_qualification.passingYear AS PASSINGYEAR , bak_pis_qualification.CGPA AS CGPA , bak_pis_qualification.Percentage AS PERCENTAGE , bak_pis_qualification.CreatedBy AS CREATEDBY , bak_pis_qualification.CreatedOn AS CREATEDON  FROM bak_pis_personnel
LEFT OUTER JOIN jse_cf_batch ON jse_cf_batch.batch_id = bak_pis_personnel.Batch
LEFT OUTER JOIN jse_cf_service ON jse_cf_service.Service_Id = bak_pis_personnel.Service
LEFT OUTER JOIN jse_cf_title ON jse_cf_title.TitleCode = bak_pis_personnel.Title
LEFT OUTER JOIN jse_cf_domicilestate ON jse_cf_domicilestate.StateID = bak_pis_personnel.Domicile
LEFT OUTER JOIN jse_cf_cadrestate ON jse_cf_cadrestate.CadreStateId = bak_pis_personnel.Cadre
LEFT OUTER JOIN jse_cf_gender ON jse_cf_gender.Gender_Id = bak_pis_personnel.Gender
LEFT OUTER JOIN jse_cf_category ON jse_cf_category.CategoryCode = bak_pis_personnel.Category
LEFT OUTER JOIN jse_cf_languages ON jse_cf_languages.Languages_Id = bak_pis_personnel.Languages_Known
LEFT OUTER JOIN jse_cf_mother_tongue ON jse_cf_mother_tongue.id = bak_pis_personnel.Mother_Tongue_Languages
LEFT OUTER JOIN jse_cf_servingstatus ON jse_cf_servingstatus.SSCode = bak_pis_personnel.ServingStatus
LEFT OUTER JOIN jse_cf_handicapstatus ON jse_cf_handicapstatus.HandicapCode = bak_pis_personnel.PhysicalHandicapStatus, bak_pis_qualification
LEFT OUTER JOIN jse_cf_degree ON jse_cf_degree.DegreeCode = bak_pis_qualification.Degree
LEFT OUTER JOIN jse_cf_division ON jse_cf_division.DivisionCode = bak_pis_qualification.DivisionCode
LEFT OUTER JOIN jse_cf_qualificationsubjects ON jse_cf_qualificationsubjects.SubjectCode = bak_pis_qualification.Subject1
LEFT OUTER JOIN jse_cf_qualificationsubjects2 ON jse_cf_qualificationsubjects2.SubjectCode = bak_pis_qualification.Subject2
LEFT OUTER JOIN jse_cf_qualificationsubjects3 ON jse_cf_qualificationsubjects3.SubjectCode = bak_pis_qualification.Subject3
LEFT OUTER JOIN jse_cf_institution ON jse_cf_institution.InstitutionCode = bak_pis_qualification.Institution
LEFT OUTER JOIN jse_cf_university ON jse_cf_university.UniversityCode = bak_pis_qualification.University
WHERE 1 = 1 AND Gender_name = 'Female' AND InstitutionDesc = 'AIIMS' AND bak_pis_personnel.OfficerId = bak_pis_qualification.OfficerId"

?>


SNO
batch_year
OfficerId
EMPLOYEE_CODE
ServiceName
TITLE
FIRST_NAME
MIDDLE_NAME
SURNAME
DOMICILE_STATE
CadreStateName
Gender_name
CategoryDesc
Languages_names
mother_tongue_languages_name
SSDesc
PHYSICAL_HANDICAP_STATUS
AADHAR_NUMBER
DATE_OF_BIRTH
DATE_OF_JOINING
CREATED_ON
CREATED_BY
SNO
OfficerId
DEGREE
DIVISION
SUBJECT1
SUBJECT2
SUBJEC3
INSTITUTION
UNIVERSITY
PASSINGYEAR
CGPA
PERCENTAGE
CREATEDBY
CREATEDON
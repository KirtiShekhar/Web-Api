-- for male officers --

SELECT bak_pis_personnel.id AS SNO,batch_year,bak_pis_personnel.OfficerId,bak_pis_personnel.EmployeeCode AS EMPLOYEE_CODE,Service_Code,jse_cf_title.TitleDesc AS TITLE,bak_pis_personnel.FirstName AS FIRST_NAME,bak_pis_personnel.MiddleName AS MIDDLE_NAME,bak_pis_personnel.SurName AS SURNAME,jse_cf_domicilestate.StateName AS DOMICILE_STATE,CadreStateCode, Gender_name, CategoryDesc, SSDesc,HandicapStatus,recruitment_types,bak_pis_personnel.Aadhar_Number AS AADHAR_NUMBER,bak_pis_personnel.Date_Birth AS DATE_OF_BIRTH,bak_pis_personnel.Date_Joining AS DATE_OF_JOINING,bak_pis_personnel.created_on AS CREATED_ON,bak_pis_personnel.created_by AS CREATED_BY, Languages_names, mother_tongue_languages_name,jse_cf_degree.DegreeDesc AS DEGREE, jse_cf_division.DivisionDesc AS DIVISION, jse_cf_qualificationsubjects.SubjectDesc AS SUBJECT1, jse_cf_qualificationsubjects2.SubjectDesc2 AS SUBJECT2, jse_cf_qualificationsubjects3.SubjectDesc3 AS SUBJEC3,jse_cf_institution.InstitutionDesc AS INSTITUTION , jse_cf_university.UniversityDesc AS UNIVERSITY ,bak_pis_qualification.passingYear AS PASSINGYEAR , bak_pis_qualification.CGPA AS CGPA , bak_pis_qualification.Percentage AS PERCENTAGE , jse_cf_postingat.PostingAtType AS PostingLocation_Centre_Cadre , jse_cf_postingtype.PostingTypeDesc AS PostingType , jse_cf_posting_levels.Level_type AS PostingLevel, jse_cf_designation.DesignationDesc AS Designation , jse_cf_department.DepartmentDescription AS Department ,jse_cf_ministry.MinistryDescription AS Ministry,jse_cf_office.OfficeDescription AS Office,jse_cf_locations.LocationDescription AS Location, bak_pis_posting.Remarks , MajorExperienceDescription , MinorExperienceDescription , tenure_type_types , debartment_type_value FROM bak_pis_personnel 
LEFT OUTER JOIN jse_cf_batch ON jse_cf_batch.batch_id = bak_pis_personnel.Batch 
LEFT OUTER JOIN jse_cf_service ON jse_cf_service.Service_Id = bak_pis_personnel.Service 
LEFT OUTER JOIN jse_cf_title ON jse_cf_title.TitleCode = bak_pis_personnel.Title 
LEFT OUTER JOIN jse_cf_domicilestate ON jse_cf_domicilestate.StateID = bak_pis_personnel.Domicile 
LEFT OUTER JOIN jse_cf_cadrestate ON jse_cf_cadrestate.CadreStateId = bak_pis_personnel.Cadre 
LEFT OUTER JOIN jse_cf_gender ON jse_cf_gender.Gender_Id = bak_pis_personnel.Gender 
LEFT OUTER JOIN jse_cf_category ON jse_cf_category.CategoryCode = bak_pis_personnel.Category 
LEFT OUTER JOIN jse_cf_servingstatus ON jse_cf_servingstatus.SSCode = bak_pis_personnel.ServingStatus 
LEFT OUTER JOIN jse_cf_handicapstatus ON jse_cf_handicapstatus.HandicapCode = bak_pis_personnel.PhysicalHandicapStatus 
LEFT OUTER JOIN jse_cf_source_of_recruitment ON jse_cf_source_of_recruitment.recruitment_id = bak_pis_personnel.Recruitment_Mode,bak_pis_languageinfo 
LEFT OUTER JOIN jse_cf_languages ON jse_cf_languages.Languages_Id = bak_pis_languageinfo.Language 
LEFT OUTER JOIN jse_cf_mother_tongue ON jse_cf_mother_tongue.mother_tongue_id = bak_pis_languageinfo.MotherTongue,bak_pis_qualification 
LEFT OUTER JOIN jse_cf_degree ON jse_cf_degree.DegreeCode = bak_pis_qualification.Degree 
LEFT OUTER JOIN jse_cf_division ON jse_cf_division.DivisionCode = bak_pis_qualification.DivisionCode 
LEFT OUTER JOIN jse_cf_qualificationsubjects ON jse_cf_qualificationsubjects.SubjectCode = bak_pis_qualification.Subject1 
LEFT OUTER JOIN jse_cf_qualificationsubjects2 ON jse_cf_qualificationsubjects2.SubjectCode = bak_pis_qualification.Subject2 
LEFT OUTER JOIN jse_cf_qualificationsubjects3 ON jse_cf_qualificationsubjects3.SubjectCode = bak_pis_qualification.Subject3 
LEFT OUTER JOIN jse_cf_institution ON jse_cf_institution.InstitutionCode = bak_pis_qualification.Institution 
LEFT OUTER JOIN jse_cf_university ON jse_cf_university.UniversityCode = bak_pis_qualification.University,bak_pis_posting 
LEFT OUTER JOIN jse_cf_postingat ON jse_cf_postingat.PostingAtId = bak_pis_posting.PostedAt 
LEFT OUTER JOIN jse_cf_postingtype ON jse_cf_postingtype.PostingTypeCode = bak_pis_posting.Postingtype 
LEFT OUTER JOIN jse_cf_posting_levels ON jse_cf_posting_levels.levels_id = bak_pis_posting.PostingLevel 
LEFT OUTER JOIN jse_cf_designation ON jse_cf_designation.DesignationCode = bak_pis_posting.DesignationCode 
LEFT OUTER JOIN jse_cf_department ON jse_cf_department.MinDeptCode = bak_pis_posting.DepartmentCode 
LEFT OUTER JOIN jse_cf_ministry ON jse_cf_ministry.MinDeptCode = bak_pis_posting.MinisteryCode 
LEFT OUTER JOIN jse_cf_office ON jse_cf_office.MinDeptCode = bak_pis_posting.OfficerCode 
LEFT OUTER JOIN jse_cf_locations ON jse_cf_locations.MinDeptCode = bak_pis_posting.LocationCode 
LEFT OUTER JOIN jse_cf_fieldexperience_major ON jse_cf_fieldexperience_major.MajorCode = bak_pis_posting.FieldMajor 
LEFT OUTER JOIN jse_cf_fieldexperience_minor ON jse_cf_fieldexperience_minor.MajorCode = bak_pis_posting.FieldMajor,bak_pis_central_deputation_info 
LEFT OUTER JOIN jse_cf_tenure_type ON jse_cf_tenure_type.tenure_type_id = bak_pis_central_deputation_info.TenureType,bak_pis_debarmentinfo 
LEFT OUTER JOIN jse_cf_debartment_type ON jse_cf_debartment_type.debartment_type_id = bak_pis_debarmentinfo.TypeOfDebarment WHERE 1 = 1 AND bak_pis_personnel.OfficerId = bak_pis_qualification.OfficerId AND bak_pis_personnel.OfficerId = bak_pis_posting.OfficerId AND bak_pis_personnel.OfficerId = bak_pis_central_deputation_info.OfficerID AND bak_pis_personnel.OfficerId = bak_pis_debarmentinfo.OfficerID AND bak_pis_personnel.OfficerId = bak_pis_languageinfo.OfficerID AND Gender_name = 'Male' GROUP BY bak_pis_personnel.OfficerId ASC ORDER BY FirstName ASC


-- for female officers --

SELECT bak_pis_personnel.id AS SNO,batch_year,bak_pis_personnel.OfficerId,bak_pis_personnel.EmployeeCode AS EMPLOYEE_CODE,Service_Code,jse_cf_title.TitleDesc AS TITLE,bak_pis_personnel.FirstName AS FIRST_NAME,bak_pis_personnel.MiddleName AS MIDDLE_NAME,bak_pis_personnel.SurName AS SURNAME,jse_cf_domicilestate.StateName AS DOMICILE_STATE,CadreStateCode, Gender_name, CategoryDesc, SSDesc,HandicapStatus,recruitment_types,bak_pis_personnel.Aadhar_Number AS AADHAR_NUMBER,bak_pis_personnel.Date_Birth AS DATE_OF_BIRTH,bak_pis_personnel.Date_Joining AS DATE_OF_JOINING,bak_pis_personnel.created_on AS CREATED_ON,bak_pis_personnel.created_by AS CREATED_BY, Languages_names, mother_tongue_languages_name,jse_cf_degree.DegreeDesc AS DEGREE, jse_cf_division.DivisionDesc AS DIVISION, jse_cf_qualificationsubjects.SubjectDesc AS SUBJECT1, jse_cf_qualificationsubjects2.SubjectDesc2 AS SUBJECT2, jse_cf_qualificationsubjects3.SubjectDesc3 AS SUBJEC3,jse_cf_institution.InstitutionDesc AS INSTITUTION , jse_cf_university.UniversityDesc AS UNIVERSITY ,bak_pis_qualification.passingYear AS PASSINGYEAR , bak_pis_qualification.CGPA AS CGPA , bak_pis_qualification.Percentage AS PERCENTAGE , jse_cf_postingat.PostingAtType AS PostingLocation_Centre_Cadre , jse_cf_postingtype.PostingTypeDesc AS PostingType , jse_cf_posting_levels.Level_type AS PostingLevel, jse_cf_designation.DesignationDesc AS Designation , jse_cf_department.DepartmentDescription AS Department ,jse_cf_ministry.MinistryDescription AS Ministry,jse_cf_office.OfficeDescription AS Office,jse_cf_locations.LocationDescription AS Location, bak_pis_posting.Remarks , MajorExperienceDescription , MinorExperienceDescription , tenure_type_types , debartment_type_value FROM bak_pis_personnel 
LEFT OUTER JOIN jse_cf_batch ON jse_cf_batch.batch_id = bak_pis_personnel.Batch 
LEFT OUTER JOIN jse_cf_service ON jse_cf_service.Service_Id = bak_pis_personnel.Service 
LEFT OUTER JOIN jse_cf_title ON jse_cf_title.TitleCode = bak_pis_personnel.Title 
LEFT OUTER JOIN jse_cf_domicilestate ON jse_cf_domicilestate.StateID = bak_pis_personnel.Domicile 
LEFT OUTER JOIN jse_cf_cadrestate ON jse_cf_cadrestate.CadreStateId = bak_pis_personnel.Cadre 
LEFT OUTER JOIN jse_cf_gender ON jse_cf_gender.Gender_Id = bak_pis_personnel.Gender 
LEFT OUTER JOIN jse_cf_category ON jse_cf_category.CategoryCode = bak_pis_personnel.Category 
LEFT OUTER JOIN jse_cf_servingstatus ON jse_cf_servingstatus.SSCode = bak_pis_personnel.ServingStatus 
LEFT OUTER JOIN jse_cf_handicapstatus ON jse_cf_handicapstatus.HandicapCode = bak_pis_personnel.PhysicalHandicapStatus 
LEFT OUTER JOIN jse_cf_source_of_recruitment ON jse_cf_source_of_recruitment.recruitment_id = bak_pis_personnel.Recruitment_Mode,bak_pis_languageinfo 
LEFT OUTER JOIN jse_cf_languages ON jse_cf_languages.Languages_Id = bak_pis_languageinfo.Language 
LEFT OUTER JOIN jse_cf_mother_tongue ON jse_cf_mother_tongue.mother_tongue_id = bak_pis_languageinfo.MotherTongue,bak_pis_qualification 
LEFT OUTER JOIN jse_cf_degree ON jse_cf_degree.DegreeCode = bak_pis_qualification.Degree 
LEFT OUTER JOIN jse_cf_division ON jse_cf_division.DivisionCode = bak_pis_qualification.DivisionCode 
LEFT OUTER JOIN jse_cf_qualificationsubjects ON jse_cf_qualificationsubjects.SubjectCode = bak_pis_qualification.Subject1 
LEFT OUTER JOIN jse_cf_qualificationsubjects2 ON jse_cf_qualificationsubjects2.SubjectCode = bak_pis_qualification.Subject2 
LEFT OUTER JOIN jse_cf_qualificationsubjects3 ON jse_cf_qualificationsubjects3.SubjectCode = bak_pis_qualification.Subject3 
LEFT OUTER JOIN jse_cf_institution ON jse_cf_institution.InstitutionCode = bak_pis_qualification.Institution 
LEFT OUTER JOIN jse_cf_university ON jse_cf_university.UniversityCode = bak_pis_qualification.University,bak_pis_posting 
LEFT OUTER JOIN jse_cf_postingat ON jse_cf_postingat.PostingAtId = bak_pis_posting.PostedAt 
LEFT OUTER JOIN jse_cf_postingtype ON jse_cf_postingtype.PostingTypeCode = bak_pis_posting.Postingtype 
LEFT OUTER JOIN jse_cf_posting_levels ON jse_cf_posting_levels.levels_id = bak_pis_posting.PostingLevel 
LEFT OUTER JOIN jse_cf_designation ON jse_cf_designation.DesignationCode = bak_pis_posting.DesignationCode 
LEFT OUTER JOIN jse_cf_department ON jse_cf_department.MinDeptCode = bak_pis_posting.DepartmentCode 
LEFT OUTER JOIN jse_cf_ministry ON jse_cf_ministry.MinDeptCode = bak_pis_posting.MinisteryCode 
LEFT OUTER JOIN jse_cf_office ON jse_cf_office.MinDeptCode = bak_pis_posting.OfficerCode 
LEFT OUTER JOIN jse_cf_locations ON jse_cf_locations.MinDeptCode = bak_pis_posting.LocationCode 
LEFT OUTER JOIN jse_cf_fieldexperience_major ON jse_cf_fieldexperience_major.MajorCode = bak_pis_posting.FieldMajor 
LEFT OUTER JOIN jse_cf_fieldexperience_minor ON jse_cf_fieldexperience_minor.MajorCode = bak_pis_posting.FieldMajor,bak_pis_central_deputation_info 
LEFT OUTER JOIN jse_cf_tenure_type ON jse_cf_tenure_type.tenure_type_id = bak_pis_central_deputation_info.TenureType,bak_pis_debarmentinfo 
LEFT OUTER JOIN jse_cf_debartment_type ON jse_cf_debartment_type.debartment_type_id = bak_pis_debarmentinfo.TypeOfDebarment WHERE 1 = 1 AND bak_pis_personnel.OfficerId = bak_pis_qualification.OfficerId AND bak_pis_personnel.OfficerId = bak_pis_posting.OfficerId AND bak_pis_personnel.OfficerId = bak_pis_central_deputation_info.OfficerID AND bak_pis_personnel.OfficerId = bak_pis_debarmentinfo.OfficerID AND bak_pis_personnel.OfficerId = bak_pis_languageinfo.OfficerID AND Gender_name = 'Female' GROUP BY bak_pis_personnel.OfficerId ASC ORDER BY FirstName ASC
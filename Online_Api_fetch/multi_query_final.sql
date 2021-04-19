SELECT id,batch_year,bak_pis_personnel.OfficerId,Service_Code,TitleDesc,FirstName,MiddleName,SurName,StateName,CadreStateName,Gender_name,CategoryDesc,SSDesc,HandicapStatus,recruitment_types,Languages_names, mother_tongue_languages_name 
FROM bak_pis_personnel
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
LEFT OUTER JOIN jse_cf_mother_tongue ON jse_cf_mother_tongue.mother_tongue_id = bak_pis_languageinfo.MotherTongue WHERE 1=1 AND bak_pis_personnel.OfficerId = bak_pis_languageinfo.OfficerID AND FirstName = 'Ravi' GROUP BY bak_pis_personnel.OfficerId ASC ORDER BY FirstName ASC;

touch officerawardsandpublicationdetailsfetch_display_all_awards_publication_details.php officertrainingdetailsfetch_display_all_training_details.php



SELECT bak_pis_personnel.OfficerId,bak_pis_personnel.FirstName AS FIRST_NAME,bak_pis_personnel.MiddleName AS MIDDLE_NAME,bak_pis_personnel.SurName AS SURNAME, Gender_name,Gender
FROM bak_pis_personnel 
LEFT OUTER JOIN jse_cf_gender ON jse_cf_gender.Gender_Id = bak_pis_personnel.Gender
WHERE 1 = 1 AND Gender_name = 'Male' GROUP BY bak_pis_personnel.OfficerId ASC ORDER BY FirstName ASC;

SELECT bak_pis_personnel.OfficerId,bak_pis_personnel.FirstName AS FIRST_NAME,bak_pis_personnel.MiddleName AS MIDDLE_NAME,bak_pis_personnel.SurName AS SURNAME, Gender_name,Gender
FROM bak_pis_personnel 
LEFT OUTER JOIN jse_cf_gender ON jse_cf_gender.Gender_Id = bak_pis_personnel.Gender
WHERE 1 = 1 AND Gender_name = 'Female' GROUP BY bak_pis_personnel.OfficerId ASC ORDER BY FirstName ASC;


?DepartmentDescription=N.A.&MinistryDescription=N.A.&OfficeDescription=N.A.
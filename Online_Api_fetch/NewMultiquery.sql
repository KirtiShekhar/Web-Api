SELECT bak_pis_personnel.id,batch_year,bak_pis_personnel.OfficerId,Service_Code	,TitleDesc,Name,
CASE WHEN StateName IS NOT NULL AND StateName <> '' THEN StateName ELSE 'N.A.' END AS StateName,
CASE WHEN CadreStateName IS NOT NULL AND CadreStateName <> '' THEN CadreStateName ELSE 'N.A.' END AS CadreStateName,
CASE WHEN Gender_name IS NOT NULL AND Gender_name <> '' THEN Gender_name ELSE 'N.A.' END AS Gender_name,
CASE WHEN CategoryDesc IS NOT NULL AND CategoryDesc <> '' THEN CategoryDesc ELSE 'N.A.' END AS CategoryDesc,
CASE WHEN SSDesc IS NOT NULL AND SSDesc <> '' THEN SSDesc ELSE 'N.A.' END AS SSDesc,
CASE WHEN HandicapStatus IS NOT NULL AND HandicapStatus <> '' THEN HandicapStatus ELSE 'N.A.' END AS HandicapStatus,
CASE WHEN recruitment_types IS NOT NULL AND recruitment_types <> '' THEN recruitment_types ELSE 'N.A.' END AS recruitment_types,
CASE WHEN mother_tongue_languages_name IS NOT NULL AND mother_tongue_languages_name <> '' THEN mother_tongue_languages_name ELSE 'N.A.' END AS mother_tongue_languages_name ,
CASE WHEN Languages_names IS NOT NULL AND Languages_names <> '' THEN Languages_names ELSE 'N.A.' END AS Languages_names,
CASE WHEN debartment_type_value IS NOT NULL AND debartment_type_value <> '' THEN debartment_type_value ELSE 'N.A.' END AS debartment_type_value,
CASE WHEN CONVERT(DebarmentBeginsOn,DATETIME) IS NOT NULL AND CONVERT(DebarmentBeginsOn,DATETIME) <> '0000-00-00 00:00:00' THEN CONVERT(DebarmentBeginsOn,DATETIME) ELSE 'N.A.' END AS DebarmentBeginsOn,
CASE WHEN CONVERT(DebarmentEndsOn,DATETIME) IS NOT NULL AND CONVERT(DebarmentEndsOn,DATETIME) <> '0000-00-00 00:00:00' THEN CONVERT(DebarmentEndsOn,DATETIME) ELSE 'N.A.' END AS DebarmentEndsOn,
CASE WHEN jse_cf_degree.DegreeFullDesc IS NOT NULL THEN DegreeFullDesc ELSE 'N.A.' END AS DegreeFullDesc,
CASE WHEN jse_cf_division.DivisionDesc IS NOT NULL THEN DivisionDesc ELSE 'N.A.' END AS DivisionDesc,
CASE WHEN jse_cf_institution.InstitutionDesc IS NOT NULL AND jse_cf_institution.InstitutionDesc <> '' THEN InstitutionDesc ELSE 'N.A.' END AS InstitutionDesc,
CASE WHEN jse_cf_qualificationsubjects.SubjectDesc IS NOT NULL AND jse_cf_qualificationsubjects.SubjectDesc <> '' THEN SubjectDesc ELSE 'N.A.' END AS SubjectDesc,
CASE WHEN jse_cf_qualificationsubjects2.SubjectDesc2 IS NOT NULL AND jse_cf_qualificationsubjects2.SubjectDesc2 <> '' THEN SubjectDesc2 ELSE 'N.A.' END AS SubjectDesc2,
CASE WHEN jse_cf_qualificationsubjects3.SubjectDesc3 IS NOT NULL AND jse_cf_qualificationsubjects3.SubjectDesc3 <> '' THEN SubjectDesc3 ELSE 'N.A.' END AS SubjectDesc3,
CASE WHEN jse_cf_university.UniversityDesc IS NOT NULL AND jse_cf_university.UniversityDesc <> '' THEN UniversityDesc ELSE 'N.A.' END AS UniversityDesc,
CASE WHEN bak_pis_qualification.passingYear IS NOT NULL AND bak_pis_qualification.passingYear <> 0 THEN passingYear ELSE 'N.A.' END AS passingYear,
CASE WHEN CGPA IS NOT NULL AND CGPA <> 0.00 THEN CGPA ELSE 'N.A.' END AS CGPA,
CASE WHEN Percentage IS NOT NULL AND Percentage <> 0.00 THEN Percentage ELSE 'N.A.' END AS Percentage,
CASE WHEN jse_cf_postingat.PostingAtType IS NOT NULL AND jse_cf_postingat.PostingAtType <> '' THEN jse_cf_postingat.PostingAtType ELSE 'N.A.' END AS PostingLocation_Centre_Cadre,
CASE WHEN jse_cf_postingtype.PostingTypeDesc IS NOT NULL AND jse_cf_postingtype.PostingTypeDesc <> '' THEN jse_cf_postingtype.PostingTypeDesc ELSE 'N.A.' END AS PostingTypeDesc,
CASE WHEN Level_type IS NOT NULL AND Level_type <> '' THEN Level_type ELSE 'N.A.' END AS PostingLevel,
CASE WHEN DesignationDesc IS NOT NULL AND DesignationDesc <> '' THEN DesignationDesc ELSE 'N.A.' END AS DesignationDesc,
CASE WHEN DepartmentDescription IS NOT NULL AND DepartmentDescription <> '' THEN DepartmentDescription ELSE 'N.A.' END AS DepartmentDescription,
CASE WHEN MinistryDescription IS NOT NULL AND MinistryDescription <> '' THEN MinistryDescription ELSE 'N.A.' END AS MinistryDescription,
CASE WHEN OfficeDescription IS NOT NULL AND OfficeDescription <> '' THEN OfficeDescription ELSE 'N.A.' END AS OfficeDescription,
CASE WHEN LocationDescription IS NOT NULL AND LocationDescription <> '' THEN LocationDescription ELSE 'N.A.' END AS LocationDescription,
CASE WHEN Experience_Level_type IS NOT NULL AND Experience_Level_type <> '' THEN Experience_Level_type ELSE 'N.A.' END AS Experience_Level_type,
CASE WHEN MajorExperienceDescription IS NOT NULL AND MajorExperienceDescription <> '' THEN MajorExperienceDescription ELSE 'N.A.' END AS MajorExperienceDescription,
CASE WHEN MinorExperienceDescription IS NOT NULL AND MinorExperienceDescription <> '' THEN MinorExperienceDescription ELSE 'N.A.' END AS MinorExperienceDescription,
CASE WHEN bak_pis_posting.Remarks IS NOT NULL AND bak_pis_posting.Remarks <> '' THEN Remarks ELSE 'N.A.' END AS Remarks,
CASE WHEN ChargeNatureName IS NOT NULL AND ChargeNatureName <> '' THEN ChargeNatureName ELSE 'N.A.' END AS ChargeNatureName,
CASE WHEN CONVERT(DateFrom,DATETIME) IS NOT NULL AND CONVERT(DateFrom,DATETIME) <> '0000-00-00 00:00:00' THEN CONVERT(DateFrom,DATETIME) ELSE 'N.A.' END AS PostingDateFrom,
CASE WHEN CONVERT(DateTo,DATETIME) IS NOT NULL AND CONVERT(DateTo,DATETIME) <> '0000-00-00 00:00:00' THEN CONVERT(DateTo,DATETIME) ELSE 'N.A.' END AS PostingDateTo
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
LEFT OUTER JOIN jse_cf_source_of_recruitment ON jse_cf_source_of_recruitment.recruitment_id = bak_pis_personnel.Recruitment_Mode
LEFT OUTER JOIN jse_cf_mother_tongue ON jse_cf_mother_tongue.mother_tongue_id = bak_pis_personnel.MotherTongue
LEFT OUTER JOIN bak_pis_languageinfo ON bak_pis_languageinfo.OfficerID = bak_pis_personnel.OfficerId
LEFT OUTER JOIN jse_cf_languages ON jse_cf_languages.Languages_Id = bak_pis_languageinfo.Language
LEFT OUTER JOIN bak_pis_debarmentinfo ON bak_pis_debarmentinfo.OfficerID = bak_pis_personnel.OfficerId
LEFT OUTER JOIN jse_cf_debartment_type ON jse_cf_debartment_type.debartment_type_id = bak_pis_debarmentinfo.TypeOfDebarment
LEFT OUTER JOIN bak_pis_qualification ON bak_pis_qualification.OfficerId = bak_pis_personnel.OfficerId
LEFT OUTER JOIN jse_cf_degree ON jse_cf_degree.DegreeCode = bak_pis_qualification.Degree 
LEFT OUTER JOIN jse_cf_division ON jse_cf_division.DivisionCode = bak_pis_qualification.DivisionCode
LEFT OUTER JOIN jse_cf_institution  ON jse_cf_institution.InstitutionCode = bak_pis_qualification.Institution
LEFT OUTER JOIN jse_cf_qualificationsubjects  ON jse_cf_qualificationsubjects.SubjectCode = bak_pis_qualification.Subject1
LEFT OUTER JOIN jse_cf_qualificationsubjects2 ON jse_cf_qualificationsubjects2.SubjectCode = bak_pis_qualification.Subject2
LEFT OUTER JOIN jse_cf_qualificationsubjects3  ON jse_cf_qualificationsubjects3.SubjectCode = bak_pis_qualification.Subject3
LEFT OUTER JOIN jse_cf_university ON jse_cf_university.UniversityCode = bak_pis_qualification.University
LEFT OUTER JOIN bak_pis_posting ON bak_pis_posting.OfficerId = bak_pis_personnel.OfficerId
LEFT OUTER JOIN jse_cf_postingat ON jse_cf_postingat.PostingAtId = bak_pis_posting.PostedAt
LEFT OUTER JOIN jse_cf_postingtype ON jse_cf_postingtype.PostingTypeCode = bak_pis_posting.Postingtype
LEFT OUTER JOIN jse_cf_posting_levels ON jse_cf_posting_levels.levels_id = bak_pis_posting.PostingLevel
LEFT OUTER JOIN jse_cf_designation ON jse_cf_designation.DesignationCode = bak_pis_posting.DesignationCode 
LEFT OUTER JOIN jse_cf_department ON jse_cf_department.MinDeptCode = bak_pis_posting.DepartmentCode
LEFT OUTER JOIN jse_cf_ministry ON jse_cf_ministry.MinDeptCode = bak_pis_posting.MinisteryCode
LEFT OUTER JOIN jse_cf_office ON jse_cf_office.MinDeptCode = bak_pis_posting.OfficerCode
LEFT OUTER JOIN jse_cf_locations ON jse_cf_locations.MinDeptCode = bak_pis_posting.LocationCode
LEFT OUTER JOIN jse_cf_experience_levels ON jse_cf_experience_levels.Experience_Levels_id = bak_pis_posting.PostingLevel
LEFT OUTER JOIN jse_cf_fieldexperience_major ON jse_cf_fieldexperience_major.MajorCode = bak_pis_posting.FieldMajor
LEFT OUTER JOIN jse_cf_fieldexperience_minor ON jse_cf_fieldexperience_minor.MinorCode = bak_pis_posting.FieldMinor
LEFT OUTER JOIN jse_cf_chargenature ON jse_cf_chargenature.ChargeID = bak_pis_posting.ChargeNature
WHERE 1=1 AND Name = 'Indu Bhusha'  GROUP BY bak_pis_personnel.OfficerId ASC ORDER BY Name ASC;
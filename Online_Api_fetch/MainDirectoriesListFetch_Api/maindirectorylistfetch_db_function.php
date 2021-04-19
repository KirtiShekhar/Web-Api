<?php

/* service to query and fetch the data */

include('maindirectorylistfetch_db_config.php');

function maindirectorylistfetch_display_full_list()
{
	global $maindirectorieslist_connection;

	$directorylistsql = '';

	$directorylistsql = "SELECT directories_officers_personnel.id,batch_year,directories_officers_personnel.OfficerId,Service_Code,CONCAT(TitleDesc,' ',FirstName,' ',SurName) AS NAME,StateName,CadreStateName,Gender_name,CategoryDesc,SSDesc,HandicapStatus,recruitment_types,Languages_names, mother_tongue_languages_name,tenure_type_types,TenureBeginsOn,TenureEndsOn, jse_cf_degree.DegreeFullDesc,jse_cf_division.DivisionDesc,jse_cf_institution.InstitutionDesc,jse_cf_qualificationsubjects.SubjectDesc,jse_cf_university.UniversityDesc , jse_cf_postingat.PostingAtType,jse_cf_postingtype.PostingTypeDesc, jse_cf_posting_levels.Level_type , jse_cf_designation.DesignationDesc,jse_cf_department.DepartmentDescription,jse_cf_ministry.MinistryDescription,jse_cf_office.OfficeDescription,jse_cf_locations.LocationDescription,directories_officers_posting.DateFrom,directories_officers_posting.DateTo,jse_cf_chargenature.ChargeNatureName,jse_cf_fieldexperience_major.MajorExperienceDescription,jse_cf_fieldexperience_minor.MinorExperienceDescription
FROM directories_officers_personnel
LEFT OUTER JOIN directories_officers_languageinfo ON directories_officers_languageinfo.OfficerID = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_central_deputation_info ON directories_officers_central_deputation_info.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_qualification ON directories_officers_qualification.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_posting ON directories_officers_posting.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN jse_cf_batch ON jse_cf_batch.batch_id = directories_officers_personnel.Batch
LEFT OUTER JOIN jse_cf_service ON jse_cf_service.Service_Id = directories_officers_personnel.Service
LEFT OUTER JOIN jse_cf_title ON jse_cf_title.TitleCode = directories_officers_personnel.Title
LEFT OUTER JOIN jse_cf_domicilestate ON jse_cf_domicilestate.StateID = directories_officers_personnel.Domicile
LEFT OUTER JOIN jse_cf_cadrestate ON jse_cf_cadrestate.CadreStateId = directories_officers_personnel.Cadre
LEFT OUTER JOIN jse_cf_gender ON jse_cf_gender.Gender_Id = directories_officers_personnel.Gender
LEFT OUTER JOIN jse_cf_category ON jse_cf_category.CategoryCode = directories_officers_personnel.Category
LEFT OUTER JOIN jse_cf_servingstatus ON jse_cf_servingstatus.SSCode = directories_officers_personnel.ServingStatus
LEFT OUTER JOIN jse_cf_handicapstatus ON jse_cf_handicapstatus.HandicapCode = directories_officers_personnel.PhysicalHandicapStatus
LEFT OUTER JOIN jse_cf_source_of_recruitment ON jse_cf_source_of_recruitment.recruitment_id = directories_officers_personnel.Recruitment_Mode
LEFT OUTER JOIN jse_cf_languages ON jse_cf_languages.Languages_Id = directories_officers_languageinfo.Language
LEFT OUTER JOIN jse_cf_mother_tongue ON jse_cf_mother_tongue.mother_tongue_id = directories_officers_languageinfo.MotherTongue
LEFT OUTER JOIN jse_cf_tenure_type ON jse_cf_tenure_type.tenure_type_id = directories_officers_central_deputation_info.TenureType
LEFT OUTER JOIN jse_cf_degree ON jse_cf_degree.DegreeCode = directories_officers_qualification.Degree 
LEFT OUTER JOIN jse_cf_division ON jse_cf_division.DivisionCode = directories_officers_qualification.DivisionCode
LEFT OUTER JOIN jse_cf_institution  ON jse_cf_institution.InstitutionCode = directories_officers_qualification.Institution
LEFT OUTER JOIN jse_cf_qualificationsubjects  ON jse_cf_qualificationsubjects.SubjectCode = directories_officers_qualification.Subject1
LEFT OUTER JOIN jse_cf_university ON jse_cf_university.UniversityCode = directories_officers_qualification.University
LEFT OUTER JOIN jse_cf_postingat ON jse_cf_postingat.PostingAtId = directories_officers_posting.PostedAt
LEFT OUTER JOIN jse_cf_postingtype ON jse_cf_postingtype.PostingTypeCode = directories_officers_posting.Postingtype
LEFT OUTER JOIN jse_cf_posting_levels ON jse_cf_posting_levels.levels_id = directories_officers_posting.PostingLevel
LEFT OUTER JOIN jse_cf_designation ON jse_cf_designation.DesignationCode = directories_officers_posting.DesignationCode 
LEFT OUTER JOIN jse_cf_department ON jse_cf_department.MinDeptCode = directories_officers_posting.DepartmentCode
LEFT OUTER JOIN jse_cf_ministry ON jse_cf_ministry.MinDeptCode = directories_officers_posting.MinisteryCode
LEFT OUTER JOIN jse_cf_office ON jse_cf_office.MinDeptCode = directories_officers_posting.OfficerCode
LEFT OUTER JOIN jse_cf_locations ON jse_cf_locations.MinDeptCode = directories_officers_posting.LocationCode
LEFT OUTER JOIN jse_cf_fieldexperience_major ON jse_cf_fieldexperience_major.MajorCode = directories_officers_posting.FieldMajor
LEFT OUTER JOIN jse_cf_fieldexperience_minor ON jse_cf_fieldexperience_minor.MinorCode = directories_officers_posting.FieldMinor
LEFT OUTER JOIN jse_cf_chargenature ON jse_cf_chargenature.ChargeID = directories_officers_posting.ChargeNature 
WHERE 1=1  GROUP BY directories_officers_personnel.OfficerId ASC ORDER BY directories_officers_personnel.id ASC";

$maindirectorylistresult = mysqli_query($maindirectorieslist_connection,$directorylistsql) or die("error".mysqli_error($maindirectorieslist_connection));
return $maindirectorylistresult;
}

function maindirectorylistfetch_display_AdditionalSecretary_list()
{
	global $maindirectorieslist_connection;

	$directoryAdditionalSecretarylistsql = '';

	$directoryAdditionalSecretarylistsql = "SELECT directories_officers_personnel.id,batch_year,directories_officers_personnel.OfficerId,Service_Code,CONCAT(TitleDesc,' ',FirstName,' ',SurName) AS NAME,StateName,CadreStateName,Gender_name,CategoryDesc,SSDesc,HandicapStatus,recruitment_types,Languages_names, mother_tongue_languages_name,tenure_type_types,TenureBeginsOn,TenureEndsOn, jse_cf_degree.DegreeFullDesc,jse_cf_division.DivisionDesc,jse_cf_institution.InstitutionDesc,jse_cf_qualificationsubjects.SubjectDesc,jse_cf_university.UniversityDesc , jse_cf_postingat.PostingAtType,jse_cf_postingtype.PostingTypeDesc, jse_cf_posting_levels.Level_type , jse_cf_designation.DesignationDesc,jse_cf_department.DepartmentDescription,jse_cf_ministry.MinistryDescription,jse_cf_office.OfficeDescription,jse_cf_locations.LocationDescription,directories_officers_posting.DateFrom,directories_officers_posting.DateTo,jse_cf_chargenature.ChargeNatureName,jse_cf_fieldexperience_major.MajorExperienceDescription,jse_cf_fieldexperience_minor.MinorExperienceDescription
FROM directories_officers_personnel
LEFT OUTER JOIN directories_officers_languageinfo ON directories_officers_languageinfo.OfficerID = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_central_deputation_info ON directories_officers_central_deputation_info.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_qualification ON directories_officers_qualification.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_posting ON directories_officers_posting.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN jse_cf_batch ON jse_cf_batch.batch_id = directories_officers_personnel.Batch
LEFT OUTER JOIN jse_cf_service ON jse_cf_service.Service_Id = directories_officers_personnel.Service
LEFT OUTER JOIN jse_cf_title ON jse_cf_title.TitleCode = directories_officers_personnel.Title
LEFT OUTER JOIN jse_cf_domicilestate ON jse_cf_domicilestate.StateID = directories_officers_personnel.Domicile
LEFT OUTER JOIN jse_cf_cadrestate ON jse_cf_cadrestate.CadreStateId = directories_officers_personnel.Cadre
LEFT OUTER JOIN jse_cf_gender ON jse_cf_gender.Gender_Id = directories_officers_personnel.Gender
LEFT OUTER JOIN jse_cf_category ON jse_cf_category.CategoryCode = directories_officers_personnel.Category
LEFT OUTER JOIN jse_cf_servingstatus ON jse_cf_servingstatus.SSCode = directories_officers_personnel.ServingStatus
LEFT OUTER JOIN jse_cf_handicapstatus ON jse_cf_handicapstatus.HandicapCode = directories_officers_personnel.PhysicalHandicapStatus
LEFT OUTER JOIN jse_cf_source_of_recruitment ON jse_cf_source_of_recruitment.recruitment_id = directories_officers_personnel.Recruitment_Mode
LEFT OUTER JOIN jse_cf_languages ON jse_cf_languages.Languages_Id = directories_officers_languageinfo.Language
LEFT OUTER JOIN jse_cf_mother_tongue ON jse_cf_mother_tongue.mother_tongue_id = directories_officers_languageinfo.MotherTongue
LEFT OUTER JOIN jse_cf_tenure_type ON jse_cf_tenure_type.tenure_type_id = directories_officers_central_deputation_info.TenureType
LEFT OUTER JOIN jse_cf_degree ON jse_cf_degree.DegreeCode = directories_officers_qualification.Degree 
LEFT OUTER JOIN jse_cf_division ON jse_cf_division.DivisionCode = directories_officers_qualification.DivisionCode
LEFT OUTER JOIN jse_cf_institution  ON jse_cf_institution.InstitutionCode = directories_officers_qualification.Institution
LEFT OUTER JOIN jse_cf_qualificationsubjects  ON jse_cf_qualificationsubjects.SubjectCode = directories_officers_qualification.Subject1
LEFT OUTER JOIN jse_cf_university ON jse_cf_university.UniversityCode = directories_officers_qualification.University
LEFT OUTER JOIN jse_cf_postingat ON jse_cf_postingat.PostingAtId = directories_officers_posting.PostedAt
LEFT OUTER JOIN jse_cf_postingtype ON jse_cf_postingtype.PostingTypeCode = directories_officers_posting.Postingtype
LEFT OUTER JOIN jse_cf_posting_levels ON jse_cf_posting_levels.levels_id = directories_officers_posting.PostingLevel
LEFT OUTER JOIN jse_cf_designation ON jse_cf_designation.DesignationCode = directories_officers_posting.DesignationCode 
LEFT OUTER JOIN jse_cf_department ON jse_cf_department.MinDeptCode = directories_officers_posting.DepartmentCode
LEFT OUTER JOIN jse_cf_ministry ON jse_cf_ministry.MinDeptCode = directories_officers_posting.MinisteryCode
LEFT OUTER JOIN jse_cf_office ON jse_cf_office.MinDeptCode = directories_officers_posting.OfficerCode
LEFT OUTER JOIN jse_cf_locations ON jse_cf_locations.MinDeptCode = directories_officers_posting.LocationCode
LEFT OUTER JOIN jse_cf_fieldexperience_major ON jse_cf_fieldexperience_major.MajorCode = directories_officers_posting.FieldMajor
LEFT OUTER JOIN jse_cf_fieldexperience_minor ON jse_cf_fieldexperience_minor.MinorCode = directories_officers_posting.FieldMinor
LEFT OUTER JOIN jse_cf_chargenature ON jse_cf_chargenature.ChargeID = directories_officers_posting.ChargeNature 
WHERE 1=1 AND Level_type = 'Additional Secretary' GROUP BY directories_officers_personnel.OfficerId ASC ORDER BY directories_officers_personnel.id ASC";

$maindirectoryAdditionalSecretarylistresult = mysqli_query($maindirectorieslist_connection,$directoryAdditionalSecretarylistsql) or die("error".mysqli_error($maindirectorieslist_connection));
return $maindirectoryAdditionalSecretarylistresult;
}

function maindirectorylistfetch_display_AdditionalSecretaryEquivalent_list()
{
	global $maindirectorieslist_connection;

	$directoryAdditionalSecretaryEquivalentlistsql = '';

	$directoryAdditionalSecretaryEquivalentlistsql = "SELECT directories_officers_personnel.id,batch_year,directories_officers_personnel.OfficerId,Service_Code,CONCAT(TitleDesc,' ',FirstName,' ',SurName) AS NAME,StateName,CadreStateName,Gender_name,CategoryDesc,SSDesc,HandicapStatus,recruitment_types,Languages_names, mother_tongue_languages_name,tenure_type_types,TenureBeginsOn,TenureEndsOn, jse_cf_degree.DegreeFullDesc,jse_cf_division.DivisionDesc,jse_cf_institution.InstitutionDesc,jse_cf_qualificationsubjects.SubjectDesc,jse_cf_university.UniversityDesc , jse_cf_postingat.PostingAtType,jse_cf_postingtype.PostingTypeDesc, jse_cf_posting_levels.Level_type , jse_cf_designation.DesignationDesc,jse_cf_department.DepartmentDescription,jse_cf_ministry.MinistryDescription,jse_cf_office.OfficeDescription,jse_cf_locations.LocationDescription,directories_officers_posting.DateFrom,directories_officers_posting.DateTo,jse_cf_chargenature.ChargeNatureName,jse_cf_fieldexperience_major.MajorExperienceDescription,jse_cf_fieldexperience_minor.MinorExperienceDescription
FROM directories_officers_personnel
LEFT OUTER JOIN directories_officers_languageinfo ON directories_officers_languageinfo.OfficerID = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_central_deputation_info ON directories_officers_central_deputation_info.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_qualification ON directories_officers_qualification.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_posting ON directories_officers_posting.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN jse_cf_batch ON jse_cf_batch.batch_id = directories_officers_personnel.Batch
LEFT OUTER JOIN jse_cf_service ON jse_cf_service.Service_Id = directories_officers_personnel.Service
LEFT OUTER JOIN jse_cf_title ON jse_cf_title.TitleCode = directories_officers_personnel.Title
LEFT OUTER JOIN jse_cf_domicilestate ON jse_cf_domicilestate.StateID = directories_officers_personnel.Domicile
LEFT OUTER JOIN jse_cf_cadrestate ON jse_cf_cadrestate.CadreStateId = directories_officers_personnel.Cadre
LEFT OUTER JOIN jse_cf_gender ON jse_cf_gender.Gender_Id = directories_officers_personnel.Gender
LEFT OUTER JOIN jse_cf_category ON jse_cf_category.CategoryCode = directories_officers_personnel.Category
LEFT OUTER JOIN jse_cf_servingstatus ON jse_cf_servingstatus.SSCode = directories_officers_personnel.ServingStatus
LEFT OUTER JOIN jse_cf_handicapstatus ON jse_cf_handicapstatus.HandicapCode = directories_officers_personnel.PhysicalHandicapStatus
LEFT OUTER JOIN jse_cf_source_of_recruitment ON jse_cf_source_of_recruitment.recruitment_id = directories_officers_personnel.Recruitment_Mode
LEFT OUTER JOIN jse_cf_languages ON jse_cf_languages.Languages_Id = directories_officers_languageinfo.Language
LEFT OUTER JOIN jse_cf_mother_tongue ON jse_cf_mother_tongue.mother_tongue_id = directories_officers_languageinfo.MotherTongue
LEFT OUTER JOIN jse_cf_tenure_type ON jse_cf_tenure_type.tenure_type_id = directories_officers_central_deputation_info.TenureType
LEFT OUTER JOIN jse_cf_degree ON jse_cf_degree.DegreeCode = directories_officers_qualification.Degree 
LEFT OUTER JOIN jse_cf_division ON jse_cf_division.DivisionCode = directories_officers_qualification.DivisionCode
LEFT OUTER JOIN jse_cf_institution  ON jse_cf_institution.InstitutionCode = directories_officers_qualification.Institution
LEFT OUTER JOIN jse_cf_qualificationsubjects  ON jse_cf_qualificationsubjects.SubjectCode = directories_officers_qualification.Subject1
LEFT OUTER JOIN jse_cf_university ON jse_cf_university.UniversityCode = directories_officers_qualification.University
LEFT OUTER JOIN jse_cf_postingat ON jse_cf_postingat.PostingAtId = directories_officers_posting.PostedAt
LEFT OUTER JOIN jse_cf_postingtype ON jse_cf_postingtype.PostingTypeCode = directories_officers_posting.Postingtype
LEFT OUTER JOIN jse_cf_posting_levels ON jse_cf_posting_levels.levels_id = directories_officers_posting.PostingLevel
LEFT OUTER JOIN jse_cf_designation ON jse_cf_designation.DesignationCode = directories_officers_posting.DesignationCode 
LEFT OUTER JOIN jse_cf_department ON jse_cf_department.MinDeptCode = directories_officers_posting.DepartmentCode
LEFT OUTER JOIN jse_cf_ministry ON jse_cf_ministry.MinDeptCode = directories_officers_posting.MinisteryCode
LEFT OUTER JOIN jse_cf_office ON jse_cf_office.MinDeptCode = directories_officers_posting.OfficerCode
LEFT OUTER JOIN jse_cf_locations ON jse_cf_locations.MinDeptCode = directories_officers_posting.LocationCode
LEFT OUTER JOIN jse_cf_fieldexperience_major ON jse_cf_fieldexperience_major.MajorCode = directories_officers_posting.FieldMajor
LEFT OUTER JOIN jse_cf_fieldexperience_minor ON jse_cf_fieldexperience_minor.MinorCode = directories_officers_posting.FieldMinor
LEFT OUTER JOIN jse_cf_chargenature ON jse_cf_chargenature.ChargeID = directories_officers_posting.ChargeNature 
WHERE 1=1 AND Level_type = 'Additional Secretary Equivalent' GROUP BY directories_officers_personnel.OfficerId ASC ORDER BY directories_officers_personnel.id ASC";

$maindirectoryAdditionalSecretaryEquivalentlistresult = mysqli_query($maindirectorieslist_connection,$directoryAdditionalSecretaryEquivalentlistsql) or die("error".mysqli_error($maindirectorieslist_connection));
return $maindirectoryAdditionalSecretaryEquivalentlistresult;
}

function maindirectorylistfetch_display_DeputySecretary_list()
{
	global $maindirectorieslist_connection;

	$directoryDeputySecretarylistsql = '';

	$directoryDeputySecretarylistsql = "SELECT directories_officers_personnel.id,batch_year,directories_officers_personnel.OfficerId,Service_Code,CONCAT(TitleDesc,' ',FirstName,' ',SurName) AS NAME,StateName,CadreStateName,Gender_name,CategoryDesc,SSDesc,HandicapStatus,recruitment_types,Languages_names, mother_tongue_languages_name,tenure_type_types,TenureBeginsOn,TenureEndsOn, jse_cf_degree.DegreeFullDesc,jse_cf_division.DivisionDesc,jse_cf_institution.InstitutionDesc,jse_cf_qualificationsubjects.SubjectDesc,jse_cf_university.UniversityDesc , jse_cf_postingat.PostingAtType,jse_cf_postingtype.PostingTypeDesc, jse_cf_posting_levels.Level_type , jse_cf_designation.DesignationDesc,jse_cf_department.DepartmentDescription,jse_cf_ministry.MinistryDescription,jse_cf_office.OfficeDescription,jse_cf_locations.LocationDescription,directories_officers_posting.DateFrom,directories_officers_posting.DateTo,jse_cf_chargenature.ChargeNatureName,jse_cf_fieldexperience_major.MajorExperienceDescription,jse_cf_fieldexperience_minor.MinorExperienceDescription
FROM directories_officers_personnel
LEFT OUTER JOIN directories_officers_languageinfo ON directories_officers_languageinfo.OfficerID = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_central_deputation_info ON directories_officers_central_deputation_info.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_qualification ON directories_officers_qualification.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_posting ON directories_officers_posting.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN jse_cf_batch ON jse_cf_batch.batch_id = directories_officers_personnel.Batch
LEFT OUTER JOIN jse_cf_service ON jse_cf_service.Service_Id = directories_officers_personnel.Service
LEFT OUTER JOIN jse_cf_title ON jse_cf_title.TitleCode = directories_officers_personnel.Title
LEFT OUTER JOIN jse_cf_domicilestate ON jse_cf_domicilestate.StateID = directories_officers_personnel.Domicile
LEFT OUTER JOIN jse_cf_cadrestate ON jse_cf_cadrestate.CadreStateId = directories_officers_personnel.Cadre
LEFT OUTER JOIN jse_cf_gender ON jse_cf_gender.Gender_Id = directories_officers_personnel.Gender
LEFT OUTER JOIN jse_cf_category ON jse_cf_category.CategoryCode = directories_officers_personnel.Category
LEFT OUTER JOIN jse_cf_servingstatus ON jse_cf_servingstatus.SSCode = directories_officers_personnel.ServingStatus
LEFT OUTER JOIN jse_cf_handicapstatus ON jse_cf_handicapstatus.HandicapCode = directories_officers_personnel.PhysicalHandicapStatus
LEFT OUTER JOIN jse_cf_source_of_recruitment ON jse_cf_source_of_recruitment.recruitment_id = directories_officers_personnel.Recruitment_Mode
LEFT OUTER JOIN jse_cf_languages ON jse_cf_languages.Languages_Id = directories_officers_languageinfo.Language
LEFT OUTER JOIN jse_cf_mother_tongue ON jse_cf_mother_tongue.mother_tongue_id = directories_officers_languageinfo.MotherTongue
LEFT OUTER JOIN jse_cf_tenure_type ON jse_cf_tenure_type.tenure_type_id = directories_officers_central_deputation_info.TenureType
LEFT OUTER JOIN jse_cf_degree ON jse_cf_degree.DegreeCode = directories_officers_qualification.Degree 
LEFT OUTER JOIN jse_cf_division ON jse_cf_division.DivisionCode = directories_officers_qualification.DivisionCode
LEFT OUTER JOIN jse_cf_institution  ON jse_cf_institution.InstitutionCode = directories_officers_qualification.Institution
LEFT OUTER JOIN jse_cf_qualificationsubjects  ON jse_cf_qualificationsubjects.SubjectCode = directories_officers_qualification.Subject1
LEFT OUTER JOIN jse_cf_university ON jse_cf_university.UniversityCode = directories_officers_qualification.University
LEFT OUTER JOIN jse_cf_postingat ON jse_cf_postingat.PostingAtId = directories_officers_posting.PostedAt
LEFT OUTER JOIN jse_cf_postingtype ON jse_cf_postingtype.PostingTypeCode = directories_officers_posting.Postingtype
LEFT OUTER JOIN jse_cf_posting_levels ON jse_cf_posting_levels.levels_id = directories_officers_posting.PostingLevel
LEFT OUTER JOIN jse_cf_designation ON jse_cf_designation.DesignationCode = directories_officers_posting.DesignationCode 
LEFT OUTER JOIN jse_cf_department ON jse_cf_department.MinDeptCode = directories_officers_posting.DepartmentCode
LEFT OUTER JOIN jse_cf_ministry ON jse_cf_ministry.MinDeptCode = directories_officers_posting.MinisteryCode
LEFT OUTER JOIN jse_cf_office ON jse_cf_office.MinDeptCode = directories_officers_posting.OfficerCode
LEFT OUTER JOIN jse_cf_locations ON jse_cf_locations.MinDeptCode = directories_officers_posting.LocationCode
LEFT OUTER JOIN jse_cf_fieldexperience_major ON jse_cf_fieldexperience_major.MajorCode = directories_officers_posting.FieldMajor
LEFT OUTER JOIN jse_cf_fieldexperience_minor ON jse_cf_fieldexperience_minor.MinorCode = directories_officers_posting.FieldMinor
LEFT OUTER JOIN jse_cf_chargenature ON jse_cf_chargenature.ChargeID = directories_officers_posting.ChargeNature 
WHERE 1=1 AND Level_type = 'Deputy Secretary' GROUP BY directories_officers_personnel.OfficerId ASC ORDER BY directories_officers_personnel.id ASC";

$maindirectoryDeputySecretarylistresult = mysqli_query($maindirectorieslist_connection,$directoryDeputySecretarylistsql) or die("error".mysqli_error($maindirectorieslist_connection));
return $maindirectoryDeputySecretarylistresult;
}

function maindirectorylistfetch_display_DeputySecretaryEquivalent_list()
{
	global $maindirectorieslist_connection;

	$directoryDeputySecretaryEquivalentlistsql = '';

	$directoryDeputySecretaryEquivalentlistsql = "SELECT directories_officers_personnel.id,batch_year,directories_officers_personnel.OfficerId,Service_Code,CONCAT(TitleDesc,' ',FirstName,' ',SurName) AS NAME,StateName,CadreStateName,Gender_name,CategoryDesc,SSDesc,HandicapStatus,recruitment_types,Languages_names, mother_tongue_languages_name,tenure_type_types,TenureBeginsOn,TenureEndsOn, jse_cf_degree.DegreeFullDesc,jse_cf_division.DivisionDesc,jse_cf_institution.InstitutionDesc,jse_cf_qualificationsubjects.SubjectDesc,jse_cf_university.UniversityDesc , jse_cf_postingat.PostingAtType,jse_cf_postingtype.PostingTypeDesc, jse_cf_posting_levels.Level_type , jse_cf_designation.DesignationDesc,jse_cf_department.DepartmentDescription,jse_cf_ministry.MinistryDescription,jse_cf_office.OfficeDescription,jse_cf_locations.LocationDescription,directories_officers_posting.DateFrom,directories_officers_posting.DateTo,jse_cf_chargenature.ChargeNatureName,jse_cf_fieldexperience_major.MajorExperienceDescription,jse_cf_fieldexperience_minor.MinorExperienceDescription
FROM directories_officers_personnel
LEFT OUTER JOIN directories_officers_languageinfo ON directories_officers_languageinfo.OfficerID = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_central_deputation_info ON directories_officers_central_deputation_info.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_qualification ON directories_officers_qualification.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_posting ON directories_officers_posting.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN jse_cf_batch ON jse_cf_batch.batch_id = directories_officers_personnel.Batch
LEFT OUTER JOIN jse_cf_service ON jse_cf_service.Service_Id = directories_officers_personnel.Service
LEFT OUTER JOIN jse_cf_title ON jse_cf_title.TitleCode = directories_officers_personnel.Title
LEFT OUTER JOIN jse_cf_domicilestate ON jse_cf_domicilestate.StateID = directories_officers_personnel.Domicile
LEFT OUTER JOIN jse_cf_cadrestate ON jse_cf_cadrestate.CadreStateId = directories_officers_personnel.Cadre
LEFT OUTER JOIN jse_cf_gender ON jse_cf_gender.Gender_Id = directories_officers_personnel.Gender
LEFT OUTER JOIN jse_cf_category ON jse_cf_category.CategoryCode = directories_officers_personnel.Category
LEFT OUTER JOIN jse_cf_servingstatus ON jse_cf_servingstatus.SSCode = directories_officers_personnel.ServingStatus
LEFT OUTER JOIN jse_cf_handicapstatus ON jse_cf_handicapstatus.HandicapCode = directories_officers_personnel.PhysicalHandicapStatus
LEFT OUTER JOIN jse_cf_source_of_recruitment ON jse_cf_source_of_recruitment.recruitment_id = directories_officers_personnel.Recruitment_Mode
LEFT OUTER JOIN jse_cf_languages ON jse_cf_languages.Languages_Id = directories_officers_languageinfo.Language
LEFT OUTER JOIN jse_cf_mother_tongue ON jse_cf_mother_tongue.mother_tongue_id = directories_officers_languageinfo.MotherTongue
LEFT OUTER JOIN jse_cf_tenure_type ON jse_cf_tenure_type.tenure_type_id = directories_officers_central_deputation_info.TenureType
LEFT OUTER JOIN jse_cf_degree ON jse_cf_degree.DegreeCode = directories_officers_qualification.Degree 
LEFT OUTER JOIN jse_cf_division ON jse_cf_division.DivisionCode = directories_officers_qualification.DivisionCode
LEFT OUTER JOIN jse_cf_institution  ON jse_cf_institution.InstitutionCode = directories_officers_qualification.Institution
LEFT OUTER JOIN jse_cf_qualificationsubjects  ON jse_cf_qualificationsubjects.SubjectCode = directories_officers_qualification.Subject1
LEFT OUTER JOIN jse_cf_university ON jse_cf_university.UniversityCode = directories_officers_qualification.University
LEFT OUTER JOIN jse_cf_postingat ON jse_cf_postingat.PostingAtId = directories_officers_posting.PostedAt
LEFT OUTER JOIN jse_cf_postingtype ON jse_cf_postingtype.PostingTypeCode = directories_officers_posting.Postingtype
LEFT OUTER JOIN jse_cf_posting_levels ON jse_cf_posting_levels.levels_id = directories_officers_posting.PostingLevel
LEFT OUTER JOIN jse_cf_designation ON jse_cf_designation.DesignationCode = directories_officers_posting.DesignationCode 
LEFT OUTER JOIN jse_cf_department ON jse_cf_department.MinDeptCode = directories_officers_posting.DepartmentCode
LEFT OUTER JOIN jse_cf_ministry ON jse_cf_ministry.MinDeptCode = directories_officers_posting.MinisteryCode
LEFT OUTER JOIN jse_cf_office ON jse_cf_office.MinDeptCode = directories_officers_posting.OfficerCode
LEFT OUTER JOIN jse_cf_locations ON jse_cf_locations.MinDeptCode = directories_officers_posting.LocationCode
LEFT OUTER JOIN jse_cf_fieldexperience_major ON jse_cf_fieldexperience_major.MajorCode = directories_officers_posting.FieldMajor
LEFT OUTER JOIN jse_cf_fieldexperience_minor ON jse_cf_fieldexperience_minor.MinorCode = directories_officers_posting.FieldMinor
LEFT OUTER JOIN jse_cf_chargenature ON jse_cf_chargenature.ChargeID = directories_officers_posting.ChargeNature 
WHERE 1=1 AND Level_type = 'Deputy Secretary Equivalent' GROUP BY directories_officers_personnel.OfficerId ASC ORDER BY directories_officers_personnel.id ASC";

$maindirectoryDeputySecretaryEquivalentlistresult = mysqli_query($maindirectorieslist_connection,$directoryDeputySecretaryEquivalentlistsql) or die("error".mysqli_error($maindirectorieslist_connection));
return $maindirectoryDeputySecretaryEquivalentlistresult;
}

function maindirectorylistfetch_display_Director_list()
{
	global $maindirectorieslist_connection;

	$directoryDirectorlistsql = '';

	$directoryDirectorlistsql = "SELECT directories_officers_personnel.id,batch_year,directories_officers_personnel.OfficerId,Service_Code,CONCAT(TitleDesc,' ',FirstName,' ',SurName) AS NAME,StateName,CadreStateName,Gender_name,CategoryDesc,SSDesc,HandicapStatus,recruitment_types,Languages_names, mother_tongue_languages_name,tenure_type_types,TenureBeginsOn,TenureEndsOn, jse_cf_degree.DegreeFullDesc,jse_cf_division.DivisionDesc,jse_cf_institution.InstitutionDesc,jse_cf_qualificationsubjects.SubjectDesc,jse_cf_university.UniversityDesc , jse_cf_postingat.PostingAtType,jse_cf_postingtype.PostingTypeDesc, jse_cf_posting_levels.Level_type , jse_cf_designation.DesignationDesc,jse_cf_department.DepartmentDescription,jse_cf_ministry.MinistryDescription,jse_cf_office.OfficeDescription,jse_cf_locations.LocationDescription,directories_officers_posting.DateFrom,directories_officers_posting.DateTo,jse_cf_chargenature.ChargeNatureName,jse_cf_fieldexperience_major.MajorExperienceDescription,jse_cf_fieldexperience_minor.MinorExperienceDescription
FROM directories_officers_personnel
LEFT OUTER JOIN directories_officers_languageinfo ON directories_officers_languageinfo.OfficerID = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_central_deputation_info ON directories_officers_central_deputation_info.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_qualification ON directories_officers_qualification.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_posting ON directories_officers_posting.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN jse_cf_batch ON jse_cf_batch.batch_id = directories_officers_personnel.Batch
LEFT OUTER JOIN jse_cf_service ON jse_cf_service.Service_Id = directories_officers_personnel.Service
LEFT OUTER JOIN jse_cf_title ON jse_cf_title.TitleCode = directories_officers_personnel.Title
LEFT OUTER JOIN jse_cf_domicilestate ON jse_cf_domicilestate.StateID = directories_officers_personnel.Domicile
LEFT OUTER JOIN jse_cf_cadrestate ON jse_cf_cadrestate.CadreStateId = directories_officers_personnel.Cadre
LEFT OUTER JOIN jse_cf_gender ON jse_cf_gender.Gender_Id = directories_officers_personnel.Gender
LEFT OUTER JOIN jse_cf_category ON jse_cf_category.CategoryCode = directories_officers_personnel.Category
LEFT OUTER JOIN jse_cf_servingstatus ON jse_cf_servingstatus.SSCode = directories_officers_personnel.ServingStatus
LEFT OUTER JOIN jse_cf_handicapstatus ON jse_cf_handicapstatus.HandicapCode = directories_officers_personnel.PhysicalHandicapStatus
LEFT OUTER JOIN jse_cf_source_of_recruitment ON jse_cf_source_of_recruitment.recruitment_id = directories_officers_personnel.Recruitment_Mode
LEFT OUTER JOIN jse_cf_languages ON jse_cf_languages.Languages_Id = directories_officers_languageinfo.Language
LEFT OUTER JOIN jse_cf_mother_tongue ON jse_cf_mother_tongue.mother_tongue_id = directories_officers_languageinfo.MotherTongue
LEFT OUTER JOIN jse_cf_tenure_type ON jse_cf_tenure_type.tenure_type_id = directories_officers_central_deputation_info.TenureType
LEFT OUTER JOIN jse_cf_degree ON jse_cf_degree.DegreeCode = directories_officers_qualification.Degree 
LEFT OUTER JOIN jse_cf_division ON jse_cf_division.DivisionCode = directories_officers_qualification.DivisionCode
LEFT OUTER JOIN jse_cf_institution  ON jse_cf_institution.InstitutionCode = directories_officers_qualification.Institution
LEFT OUTER JOIN jse_cf_qualificationsubjects  ON jse_cf_qualificationsubjects.SubjectCode = directories_officers_qualification.Subject1
LEFT OUTER JOIN jse_cf_university ON jse_cf_university.UniversityCode = directories_officers_qualification.University
LEFT OUTER JOIN jse_cf_postingat ON jse_cf_postingat.PostingAtId = directories_officers_posting.PostedAt
LEFT OUTER JOIN jse_cf_postingtype ON jse_cf_postingtype.PostingTypeCode = directories_officers_posting.Postingtype
LEFT OUTER JOIN jse_cf_posting_levels ON jse_cf_posting_levels.levels_id = directories_officers_posting.PostingLevel
LEFT OUTER JOIN jse_cf_designation ON jse_cf_designation.DesignationCode = directories_officers_posting.DesignationCode 
LEFT OUTER JOIN jse_cf_department ON jse_cf_department.MinDeptCode = directories_officers_posting.DepartmentCode
LEFT OUTER JOIN jse_cf_ministry ON jse_cf_ministry.MinDeptCode = directories_officers_posting.MinisteryCode
LEFT OUTER JOIN jse_cf_office ON jse_cf_office.MinDeptCode = directories_officers_posting.OfficerCode
LEFT OUTER JOIN jse_cf_locations ON jse_cf_locations.MinDeptCode = directories_officers_posting.LocationCode
LEFT OUTER JOIN jse_cf_fieldexperience_major ON jse_cf_fieldexperience_major.MajorCode = directories_officers_posting.FieldMajor
LEFT OUTER JOIN jse_cf_fieldexperience_minor ON jse_cf_fieldexperience_minor.MinorCode = directories_officers_posting.FieldMinor
LEFT OUTER JOIN jse_cf_chargenature ON jse_cf_chargenature.ChargeID = directories_officers_posting.ChargeNature 
WHERE 1=1 AND Level_type = 'Director' GROUP BY directories_officers_personnel.OfficerId ASC ORDER BY directories_officers_personnel.id ASC";

$maindirectoryDirectorlistresult = mysqli_query($maindirectorieslist_connection,$directoryDirectorlistsql) or die("error".mysqli_error($maindirectorieslist_connection));
return $maindirectoryDirectorlistresult;
}

function maindirectorylistfetch_display_DirectorEquivalent_list()
{
	global $maindirectorieslist_connection;

	$directoryDirectorEquivalentlistsql = '';

	$directoryDirectorEquivalentlistsql = "SELECT directories_officers_personnel.id,batch_year,directories_officers_personnel.OfficerId,Service_Code,CONCAT(TitleDesc,' ',FirstName,' ',SurName) AS NAME,StateName,CadreStateName,Gender_name,CategoryDesc,SSDesc,HandicapStatus,recruitment_types,Languages_names, mother_tongue_languages_name,tenure_type_types,TenureBeginsOn,TenureEndsOn, jse_cf_degree.DegreeFullDesc,jse_cf_division.DivisionDesc,jse_cf_institution.InstitutionDesc,jse_cf_qualificationsubjects.SubjectDesc,jse_cf_university.UniversityDesc , jse_cf_postingat.PostingAtType,jse_cf_postingtype.PostingTypeDesc, jse_cf_posting_levels.Level_type , jse_cf_designation.DesignationDesc,jse_cf_department.DepartmentDescription,jse_cf_ministry.MinistryDescription,jse_cf_office.OfficeDescription,jse_cf_locations.LocationDescription,directories_officers_posting.DateFrom,directories_officers_posting.DateTo,jse_cf_chargenature.ChargeNatureName,jse_cf_fieldexperience_major.MajorExperienceDescription,jse_cf_fieldexperience_minor.MinorExperienceDescription
FROM directories_officers_personnel
LEFT OUTER JOIN directories_officers_languageinfo ON directories_officers_languageinfo.OfficerID = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_central_deputation_info ON directories_officers_central_deputation_info.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_qualification ON directories_officers_qualification.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_posting ON directories_officers_posting.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN jse_cf_batch ON jse_cf_batch.batch_id = directories_officers_personnel.Batch
LEFT OUTER JOIN jse_cf_service ON jse_cf_service.Service_Id = directories_officers_personnel.Service
LEFT OUTER JOIN jse_cf_title ON jse_cf_title.TitleCode = directories_officers_personnel.Title
LEFT OUTER JOIN jse_cf_domicilestate ON jse_cf_domicilestate.StateID = directories_officers_personnel.Domicile
LEFT OUTER JOIN jse_cf_cadrestate ON jse_cf_cadrestate.CadreStateId = directories_officers_personnel.Cadre
LEFT OUTER JOIN jse_cf_gender ON jse_cf_gender.Gender_Id = directories_officers_personnel.Gender
LEFT OUTER JOIN jse_cf_category ON jse_cf_category.CategoryCode = directories_officers_personnel.Category
LEFT OUTER JOIN jse_cf_servingstatus ON jse_cf_servingstatus.SSCode = directories_officers_personnel.ServingStatus
LEFT OUTER JOIN jse_cf_handicapstatus ON jse_cf_handicapstatus.HandicapCode = directories_officers_personnel.PhysicalHandicapStatus
LEFT OUTER JOIN jse_cf_source_of_recruitment ON jse_cf_source_of_recruitment.recruitment_id = directories_officers_personnel.Recruitment_Mode
LEFT OUTER JOIN jse_cf_languages ON jse_cf_languages.Languages_Id = directories_officers_languageinfo.Language
LEFT OUTER JOIN jse_cf_mother_tongue ON jse_cf_mother_tongue.mother_tongue_id = directories_officers_languageinfo.MotherTongue
LEFT OUTER JOIN jse_cf_tenure_type ON jse_cf_tenure_type.tenure_type_id = directories_officers_central_deputation_info.TenureType
LEFT OUTER JOIN jse_cf_degree ON jse_cf_degree.DegreeCode = directories_officers_qualification.Degree 
LEFT OUTER JOIN jse_cf_division ON jse_cf_division.DivisionCode = directories_officers_qualification.DivisionCode
LEFT OUTER JOIN jse_cf_institution  ON jse_cf_institution.InstitutionCode = directories_officers_qualification.Institution
LEFT OUTER JOIN jse_cf_qualificationsubjects  ON jse_cf_qualificationsubjects.SubjectCode = directories_officers_qualification.Subject1
LEFT OUTER JOIN jse_cf_university ON jse_cf_university.UniversityCode = directories_officers_qualification.University
LEFT OUTER JOIN jse_cf_postingat ON jse_cf_postingat.PostingAtId = directories_officers_posting.PostedAt
LEFT OUTER JOIN jse_cf_postingtype ON jse_cf_postingtype.PostingTypeCode = directories_officers_posting.Postingtype
LEFT OUTER JOIN jse_cf_posting_levels ON jse_cf_posting_levels.levels_id = directories_officers_posting.PostingLevel
LEFT OUTER JOIN jse_cf_designation ON jse_cf_designation.DesignationCode = directories_officers_posting.DesignationCode 
LEFT OUTER JOIN jse_cf_department ON jse_cf_department.MinDeptCode = directories_officers_posting.DepartmentCode
LEFT OUTER JOIN jse_cf_ministry ON jse_cf_ministry.MinDeptCode = directories_officers_posting.MinisteryCode
LEFT OUTER JOIN jse_cf_office ON jse_cf_office.MinDeptCode = directories_officers_posting.OfficerCode
LEFT OUTER JOIN jse_cf_locations ON jse_cf_locations.MinDeptCode = directories_officers_posting.LocationCode
LEFT OUTER JOIN jse_cf_fieldexperience_major ON jse_cf_fieldexperience_major.MajorCode = directories_officers_posting.FieldMajor
LEFT OUTER JOIN jse_cf_fieldexperience_minor ON jse_cf_fieldexperience_minor.MinorCode = directories_officers_posting.FieldMinor
LEFT OUTER JOIN jse_cf_chargenature ON jse_cf_chargenature.ChargeID = directories_officers_posting.ChargeNature 
WHERE 1=1 AND Level_type = 'Director Equivalent' GROUP BY directories_officers_personnel.OfficerId ASC ORDER BY directories_officers_personnel.id ASC";

$maindirectoryDirectorEquivalentlistresult = mysqli_query($maindirectorieslist_connection,$directoryDirectorEquivalentlistsql) or die("error".mysqli_error($maindirectorieslist_connection));
return $maindirectoryDirectorEquivalentlistresult;
}

function maindirectorylistfetch_display_JointSecretary_list()
{
	global $maindirectorieslist_connection;

	$directoryJointSecretarylistsql = '';

	$directoryJointSecretarylistsql = "SELECT directories_officers_personnel.id,batch_year,directories_officers_personnel.OfficerId,Service_Code,CONCAT(TitleDesc,' ',FirstName,' ',SurName) AS NAME,StateName,CadreStateName,Gender_name,CategoryDesc,SSDesc,HandicapStatus,recruitment_types,Languages_names, mother_tongue_languages_name,tenure_type_types,TenureBeginsOn,TenureEndsOn, jse_cf_degree.DegreeFullDesc,jse_cf_division.DivisionDesc,jse_cf_institution.InstitutionDesc,jse_cf_qualificationsubjects.SubjectDesc,jse_cf_university.UniversityDesc , jse_cf_postingat.PostingAtType,jse_cf_postingtype.PostingTypeDesc, jse_cf_posting_levels.Level_type , jse_cf_designation.DesignationDesc,jse_cf_department.DepartmentDescription,jse_cf_ministry.MinistryDescription,jse_cf_office.OfficeDescription,jse_cf_locations.LocationDescription,directories_officers_posting.DateFrom,directories_officers_posting.DateTo,jse_cf_chargenature.ChargeNatureName,jse_cf_fieldexperience_major.MajorExperienceDescription,jse_cf_fieldexperience_minor.MinorExperienceDescription
FROM directories_officers_personnel
LEFT OUTER JOIN directories_officers_languageinfo ON directories_officers_languageinfo.OfficerID = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_central_deputation_info ON directories_officers_central_deputation_info.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_qualification ON directories_officers_qualification.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_posting ON directories_officers_posting.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN jse_cf_batch ON jse_cf_batch.batch_id = directories_officers_personnel.Batch
LEFT OUTER JOIN jse_cf_service ON jse_cf_service.Service_Id = directories_officers_personnel.Service
LEFT OUTER JOIN jse_cf_title ON jse_cf_title.TitleCode = directories_officers_personnel.Title
LEFT OUTER JOIN jse_cf_domicilestate ON jse_cf_domicilestate.StateID = directories_officers_personnel.Domicile
LEFT OUTER JOIN jse_cf_cadrestate ON jse_cf_cadrestate.CadreStateId = directories_officers_personnel.Cadre
LEFT OUTER JOIN jse_cf_gender ON jse_cf_gender.Gender_Id = directories_officers_personnel.Gender
LEFT OUTER JOIN jse_cf_category ON jse_cf_category.CategoryCode = directories_officers_personnel.Category
LEFT OUTER JOIN jse_cf_servingstatus ON jse_cf_servingstatus.SSCode = directories_officers_personnel.ServingStatus
LEFT OUTER JOIN jse_cf_handicapstatus ON jse_cf_handicapstatus.HandicapCode = directories_officers_personnel.PhysicalHandicapStatus
LEFT OUTER JOIN jse_cf_source_of_recruitment ON jse_cf_source_of_recruitment.recruitment_id = directories_officers_personnel.Recruitment_Mode
LEFT OUTER JOIN jse_cf_languages ON jse_cf_languages.Languages_Id = directories_officers_languageinfo.Language
LEFT OUTER JOIN jse_cf_mother_tongue ON jse_cf_mother_tongue.mother_tongue_id = directories_officers_languageinfo.MotherTongue
LEFT OUTER JOIN jse_cf_tenure_type ON jse_cf_tenure_type.tenure_type_id = directories_officers_central_deputation_info.TenureType
LEFT OUTER JOIN jse_cf_degree ON jse_cf_degree.DegreeCode = directories_officers_qualification.Degree 
LEFT OUTER JOIN jse_cf_division ON jse_cf_division.DivisionCode = directories_officers_qualification.DivisionCode
LEFT OUTER JOIN jse_cf_institution  ON jse_cf_institution.InstitutionCode = directories_officers_qualification.Institution
LEFT OUTER JOIN jse_cf_qualificationsubjects  ON jse_cf_qualificationsubjects.SubjectCode = directories_officers_qualification.Subject1
LEFT OUTER JOIN jse_cf_university ON jse_cf_university.UniversityCode = directories_officers_qualification.University
LEFT OUTER JOIN jse_cf_postingat ON jse_cf_postingat.PostingAtId = directories_officers_posting.PostedAt
LEFT OUTER JOIN jse_cf_postingtype ON jse_cf_postingtype.PostingTypeCode = directories_officers_posting.Postingtype
LEFT OUTER JOIN jse_cf_posting_levels ON jse_cf_posting_levels.levels_id = directories_officers_posting.PostingLevel
LEFT OUTER JOIN jse_cf_designation ON jse_cf_designation.DesignationCode = directories_officers_posting.DesignationCode 
LEFT OUTER JOIN jse_cf_department ON jse_cf_department.MinDeptCode = directories_officers_posting.DepartmentCode
LEFT OUTER JOIN jse_cf_ministry ON jse_cf_ministry.MinDeptCode = directories_officers_posting.MinisteryCode
LEFT OUTER JOIN jse_cf_office ON jse_cf_office.MinDeptCode = directories_officers_posting.OfficerCode
LEFT OUTER JOIN jse_cf_locations ON jse_cf_locations.MinDeptCode = directories_officers_posting.LocationCode
LEFT OUTER JOIN jse_cf_fieldexperience_major ON jse_cf_fieldexperience_major.MajorCode = directories_officers_posting.FieldMajor
LEFT OUTER JOIN jse_cf_fieldexperience_minor ON jse_cf_fieldexperience_minor.MinorCode = directories_officers_posting.FieldMinor
LEFT OUTER JOIN jse_cf_chargenature ON jse_cf_chargenature.ChargeID = directories_officers_posting.ChargeNature 
WHERE 1=1 AND Level_type = 'Joint Secretary' GROUP BY directories_officers_personnel.OfficerId ASC ORDER BY directories_officers_personnel.id ASC";

$maindirectoryJointSecretarylistresult = mysqli_query($maindirectorieslist_connection,$directoryJointSecretarylistsql) or die("error".mysqli_error($maindirectorieslist_connection));
return $maindirectoryJointSecretarylistresult;
}

function maindirectorylistfetch_display_JointSecretaryEquivalent_list()
{
	global $maindirectorieslist_connection;

	$directoryJointSecretaryEquivalentlistsql = '';

	$directoryJointSecretaryEquivalentlistsql = "SELECT directories_officers_personnel.id,batch_year,directories_officers_personnel.OfficerId,Service_Code,CONCAT(TitleDesc,' ',FirstName,' ',SurName) AS NAME,StateName,CadreStateName,Gender_name,CategoryDesc,SSDesc,HandicapStatus,recruitment_types,Languages_names, mother_tongue_languages_name,tenure_type_types,TenureBeginsOn,TenureEndsOn, jse_cf_degree.DegreeFullDesc,jse_cf_division.DivisionDesc,jse_cf_institution.InstitutionDesc,jse_cf_qualificationsubjects.SubjectDesc,jse_cf_university.UniversityDesc , jse_cf_postingat.PostingAtType,jse_cf_postingtype.PostingTypeDesc, jse_cf_posting_levels.Level_type , jse_cf_designation.DesignationDesc,jse_cf_department.DepartmentDescription,jse_cf_ministry.MinistryDescription,jse_cf_office.OfficeDescription,jse_cf_locations.LocationDescription,directories_officers_posting.DateFrom,directories_officers_posting.DateTo,jse_cf_chargenature.ChargeNatureName,jse_cf_fieldexperience_major.MajorExperienceDescription,jse_cf_fieldexperience_minor.MinorExperienceDescription
FROM directories_officers_personnel
LEFT OUTER JOIN directories_officers_languageinfo ON directories_officers_languageinfo.OfficerID = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_central_deputation_info ON directories_officers_central_deputation_info.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_qualification ON directories_officers_qualification.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_posting ON directories_officers_posting.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN jse_cf_batch ON jse_cf_batch.batch_id = directories_officers_personnel.Batch
LEFT OUTER JOIN jse_cf_service ON jse_cf_service.Service_Id = directories_officers_personnel.Service
LEFT OUTER JOIN jse_cf_title ON jse_cf_title.TitleCode = directories_officers_personnel.Title
LEFT OUTER JOIN jse_cf_domicilestate ON jse_cf_domicilestate.StateID = directories_officers_personnel.Domicile
LEFT OUTER JOIN jse_cf_cadrestate ON jse_cf_cadrestate.CadreStateId = directories_officers_personnel.Cadre
LEFT OUTER JOIN jse_cf_gender ON jse_cf_gender.Gender_Id = directories_officers_personnel.Gender
LEFT OUTER JOIN jse_cf_category ON jse_cf_category.CategoryCode = directories_officers_personnel.Category
LEFT OUTER JOIN jse_cf_servingstatus ON jse_cf_servingstatus.SSCode = directories_officers_personnel.ServingStatus
LEFT OUTER JOIN jse_cf_handicapstatus ON jse_cf_handicapstatus.HandicapCode = directories_officers_personnel.PhysicalHandicapStatus
LEFT OUTER JOIN jse_cf_source_of_recruitment ON jse_cf_source_of_recruitment.recruitment_id = directories_officers_personnel.Recruitment_Mode
LEFT OUTER JOIN jse_cf_languages ON jse_cf_languages.Languages_Id = directories_officers_languageinfo.Language
LEFT OUTER JOIN jse_cf_mother_tongue ON jse_cf_mother_tongue.mother_tongue_id = directories_officers_languageinfo.MotherTongue
LEFT OUTER JOIN jse_cf_tenure_type ON jse_cf_tenure_type.tenure_type_id = directories_officers_central_deputation_info.TenureType
LEFT OUTER JOIN jse_cf_degree ON jse_cf_degree.DegreeCode = directories_officers_qualification.Degree 
LEFT OUTER JOIN jse_cf_division ON jse_cf_division.DivisionCode = directories_officers_qualification.DivisionCode
LEFT OUTER JOIN jse_cf_institution  ON jse_cf_institution.InstitutionCode = directories_officers_qualification.Institution
LEFT OUTER JOIN jse_cf_qualificationsubjects  ON jse_cf_qualificationsubjects.SubjectCode = directories_officers_qualification.Subject1
LEFT OUTER JOIN jse_cf_university ON jse_cf_university.UniversityCode = directories_officers_qualification.University
LEFT OUTER JOIN jse_cf_postingat ON jse_cf_postingat.PostingAtId = directories_officers_posting.PostedAt
LEFT OUTER JOIN jse_cf_postingtype ON jse_cf_postingtype.PostingTypeCode = directories_officers_posting.Postingtype
LEFT OUTER JOIN jse_cf_posting_levels ON jse_cf_posting_levels.levels_id = directories_officers_posting.PostingLevel
LEFT OUTER JOIN jse_cf_designation ON jse_cf_designation.DesignationCode = directories_officers_posting.DesignationCode 
LEFT OUTER JOIN jse_cf_department ON jse_cf_department.MinDeptCode = directories_officers_posting.DepartmentCode
LEFT OUTER JOIN jse_cf_ministry ON jse_cf_ministry.MinDeptCode = directories_officers_posting.MinisteryCode
LEFT OUTER JOIN jse_cf_office ON jse_cf_office.MinDeptCode = directories_officers_posting.OfficerCode
LEFT OUTER JOIN jse_cf_locations ON jse_cf_locations.MinDeptCode = directories_officers_posting.LocationCode
LEFT OUTER JOIN jse_cf_fieldexperience_major ON jse_cf_fieldexperience_major.MajorCode = directories_officers_posting.FieldMajor
LEFT OUTER JOIN jse_cf_fieldexperience_minor ON jse_cf_fieldexperience_minor.MinorCode = directories_officers_posting.FieldMinor
LEFT OUTER JOIN jse_cf_chargenature ON jse_cf_chargenature.ChargeID = directories_officers_posting.ChargeNature 
WHERE 1=1 AND Level_type = 'Joint Secretary Equivalent' GROUP BY directories_officers_personnel.OfficerId ASC ORDER BY directories_officers_personnel.id ASC";

$maindirectoryJointSecretaryEquivalentlistresult = mysqli_query($maindirectorieslist_connection,$directoryJointSecretaryEquivalentlistsql) or die("error".mysqli_error($maindirectorieslist_connection));
return $maindirectoryJointSecretaryEquivalentlistresult;
}

function maindirectorylistfetch_display_Secretary_list()
{
	global $maindirectorieslist_connection;

	$directorySecretarylistsql = '';

	$directorySecretarylistsql = "SELECT directories_officers_personnel.id,batch_year,directories_officers_personnel.OfficerId,Service_Code,CONCAT(TitleDesc,' ',FirstName,' ',SurName) AS NAME,StateName,CadreStateName,Gender_name,CategoryDesc,SSDesc,HandicapStatus,recruitment_types,Languages_names, mother_tongue_languages_name,tenure_type_types,TenureBeginsOn,TenureEndsOn, jse_cf_degree.DegreeFullDesc,jse_cf_division.DivisionDesc,jse_cf_institution.InstitutionDesc,jse_cf_qualificationsubjects.SubjectDesc,jse_cf_university.UniversityDesc , jse_cf_postingat.PostingAtType,jse_cf_postingtype.PostingTypeDesc, jse_cf_posting_levels.Level_type , jse_cf_designation.DesignationDesc,jse_cf_department.DepartmentDescription,jse_cf_ministry.MinistryDescription,jse_cf_office.OfficeDescription,jse_cf_locations.LocationDescription,directories_officers_posting.DateFrom,directories_officers_posting.DateTo,jse_cf_chargenature.ChargeNatureName,jse_cf_fieldexperience_major.MajorExperienceDescription,jse_cf_fieldexperience_minor.MinorExperienceDescription
FROM directories_officers_personnel
LEFT OUTER JOIN directories_officers_languageinfo ON directories_officers_languageinfo.OfficerID = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_central_deputation_info ON directories_officers_central_deputation_info.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_qualification ON directories_officers_qualification.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_posting ON directories_officers_posting.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN jse_cf_batch ON jse_cf_batch.batch_id = directories_officers_personnel.Batch
LEFT OUTER JOIN jse_cf_service ON jse_cf_service.Service_Id = directories_officers_personnel.Service
LEFT OUTER JOIN jse_cf_title ON jse_cf_title.TitleCode = directories_officers_personnel.Title
LEFT OUTER JOIN jse_cf_domicilestate ON jse_cf_domicilestate.StateID = directories_officers_personnel.Domicile
LEFT OUTER JOIN jse_cf_cadrestate ON jse_cf_cadrestate.CadreStateId = directories_officers_personnel.Cadre
LEFT OUTER JOIN jse_cf_gender ON jse_cf_gender.Gender_Id = directories_officers_personnel.Gender
LEFT OUTER JOIN jse_cf_category ON jse_cf_category.CategoryCode = directories_officers_personnel.Category
LEFT OUTER JOIN jse_cf_servingstatus ON jse_cf_servingstatus.SSCode = directories_officers_personnel.ServingStatus
LEFT OUTER JOIN jse_cf_handicapstatus ON jse_cf_handicapstatus.HandicapCode = directories_officers_personnel.PhysicalHandicapStatus
LEFT OUTER JOIN jse_cf_source_of_recruitment ON jse_cf_source_of_recruitment.recruitment_id = directories_officers_personnel.Recruitment_Mode
LEFT OUTER JOIN jse_cf_languages ON jse_cf_languages.Languages_Id = directories_officers_languageinfo.Language
LEFT OUTER JOIN jse_cf_mother_tongue ON jse_cf_mother_tongue.mother_tongue_id = directories_officers_languageinfo.MotherTongue
LEFT OUTER JOIN jse_cf_tenure_type ON jse_cf_tenure_type.tenure_type_id = directories_officers_central_deputation_info.TenureType
LEFT OUTER JOIN jse_cf_degree ON jse_cf_degree.DegreeCode = directories_officers_qualification.Degree 
LEFT OUTER JOIN jse_cf_division ON jse_cf_division.DivisionCode = directories_officers_qualification.DivisionCode
LEFT OUTER JOIN jse_cf_institution  ON jse_cf_institution.InstitutionCode = directories_officers_qualification.Institution
LEFT OUTER JOIN jse_cf_qualificationsubjects  ON jse_cf_qualificationsubjects.SubjectCode = directories_officers_qualification.Subject1
LEFT OUTER JOIN jse_cf_university ON jse_cf_university.UniversityCode = directories_officers_qualification.University
LEFT OUTER JOIN jse_cf_postingat ON jse_cf_postingat.PostingAtId = directories_officers_posting.PostedAt
LEFT OUTER JOIN jse_cf_postingtype ON jse_cf_postingtype.PostingTypeCode = directories_officers_posting.Postingtype
LEFT OUTER JOIN jse_cf_posting_levels ON jse_cf_posting_levels.levels_id = directories_officers_posting.PostingLevel
LEFT OUTER JOIN jse_cf_designation ON jse_cf_designation.DesignationCode = directories_officers_posting.DesignationCode 
LEFT OUTER JOIN jse_cf_department ON jse_cf_department.MinDeptCode = directories_officers_posting.DepartmentCode
LEFT OUTER JOIN jse_cf_ministry ON jse_cf_ministry.MinDeptCode = directories_officers_posting.MinisteryCode
LEFT OUTER JOIN jse_cf_office ON jse_cf_office.MinDeptCode = directories_officers_posting.OfficerCode
LEFT OUTER JOIN jse_cf_locations ON jse_cf_locations.MinDeptCode = directories_officers_posting.LocationCode
LEFT OUTER JOIN jse_cf_fieldexperience_major ON jse_cf_fieldexperience_major.MajorCode = directories_officers_posting.FieldMajor
LEFT OUTER JOIN jse_cf_fieldexperience_minor ON jse_cf_fieldexperience_minor.MinorCode = directories_officers_posting.FieldMinor
LEFT OUTER JOIN jse_cf_chargenature ON jse_cf_chargenature.ChargeID = directories_officers_posting.ChargeNature 
WHERE 1=1 AND Level_type = 'Secretary' GROUP BY directories_officers_personnel.OfficerId ASC ORDER BY directories_officers_personnel.id ASC";

$maindirectorySecretarylistresult = mysqli_query($maindirectorieslist_connection,$directorySecretarylistsql) or die("error".mysqli_error($maindirectorieslist_connection));
return $maindirectorySecretarylistresult;
}

function maindirectorylistfetch_display_SecretaryEquivalent_list()
{
	global $maindirectorieslist_connection;

	$directorySecretaryEquivalentlistsql = '';

	$directorySecretaryEquivalentlistsql = "SELECT directories_officers_personnel.id,batch_year,directories_officers_personnel.OfficerId,Service_Code,CONCAT(TitleDesc,' ',FirstName,' ',SurName) AS NAME,StateName,CadreStateName,Gender_name,CategoryDesc,SSDesc,HandicapStatus,recruitment_types,Languages_names, mother_tongue_languages_name,tenure_type_types,TenureBeginsOn,TenureEndsOn, jse_cf_degree.DegreeFullDesc,jse_cf_division.DivisionDesc,jse_cf_institution.InstitutionDesc,jse_cf_qualificationsubjects.SubjectDesc,jse_cf_university.UniversityDesc , jse_cf_postingat.PostingAtType,jse_cf_postingtype.PostingTypeDesc, jse_cf_posting_levels.Level_type , jse_cf_designation.DesignationDesc,jse_cf_department.DepartmentDescription,jse_cf_ministry.MinistryDescription,jse_cf_office.OfficeDescription,jse_cf_locations.LocationDescription,directories_officers_posting.DateFrom,directories_officers_posting.DateTo,jse_cf_chargenature.ChargeNatureName,jse_cf_fieldexperience_major.MajorExperienceDescription,jse_cf_fieldexperience_minor.MinorExperienceDescription
FROM directories_officers_personnel
LEFT OUTER JOIN directories_officers_languageinfo ON directories_officers_languageinfo.OfficerID = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_central_deputation_info ON directories_officers_central_deputation_info.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_qualification ON directories_officers_qualification.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_posting ON directories_officers_posting.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN jse_cf_batch ON jse_cf_batch.batch_id = directories_officers_personnel.Batch
LEFT OUTER JOIN jse_cf_service ON jse_cf_service.Service_Id = directories_officers_personnel.Service
LEFT OUTER JOIN jse_cf_title ON jse_cf_title.TitleCode = directories_officers_personnel.Title
LEFT OUTER JOIN jse_cf_domicilestate ON jse_cf_domicilestate.StateID = directories_officers_personnel.Domicile
LEFT OUTER JOIN jse_cf_cadrestate ON jse_cf_cadrestate.CadreStateId = directories_officers_personnel.Cadre
LEFT OUTER JOIN jse_cf_gender ON jse_cf_gender.Gender_Id = directories_officers_personnel.Gender
LEFT OUTER JOIN jse_cf_category ON jse_cf_category.CategoryCode = directories_officers_personnel.Category
LEFT OUTER JOIN jse_cf_servingstatus ON jse_cf_servingstatus.SSCode = directories_officers_personnel.ServingStatus
LEFT OUTER JOIN jse_cf_handicapstatus ON jse_cf_handicapstatus.HandicapCode = directories_officers_personnel.PhysicalHandicapStatus
LEFT OUTER JOIN jse_cf_source_of_recruitment ON jse_cf_source_of_recruitment.recruitment_id = directories_officers_personnel.Recruitment_Mode
LEFT OUTER JOIN jse_cf_languages ON jse_cf_languages.Languages_Id = directories_officers_languageinfo.Language
LEFT OUTER JOIN jse_cf_mother_tongue ON jse_cf_mother_tongue.mother_tongue_id = directories_officers_languageinfo.MotherTongue
LEFT OUTER JOIN jse_cf_tenure_type ON jse_cf_tenure_type.tenure_type_id = directories_officers_central_deputation_info.TenureType
LEFT OUTER JOIN jse_cf_degree ON jse_cf_degree.DegreeCode = directories_officers_qualification.Degree 
LEFT OUTER JOIN jse_cf_division ON jse_cf_division.DivisionCode = directories_officers_qualification.DivisionCode
LEFT OUTER JOIN jse_cf_institution  ON jse_cf_institution.InstitutionCode = directories_officers_qualification.Institution
LEFT OUTER JOIN jse_cf_qualificationsubjects  ON jse_cf_qualificationsubjects.SubjectCode = directories_officers_qualification.Subject1
LEFT OUTER JOIN jse_cf_university ON jse_cf_university.UniversityCode = directories_officers_qualification.University
LEFT OUTER JOIN jse_cf_postingat ON jse_cf_postingat.PostingAtId = directories_officers_posting.PostedAt
LEFT OUTER JOIN jse_cf_postingtype ON jse_cf_postingtype.PostingTypeCode = directories_officers_posting.Postingtype
LEFT OUTER JOIN jse_cf_posting_levels ON jse_cf_posting_levels.levels_id = directories_officers_posting.PostingLevel
LEFT OUTER JOIN jse_cf_designation ON jse_cf_designation.DesignationCode = directories_officers_posting.DesignationCode 
LEFT OUTER JOIN jse_cf_department ON jse_cf_department.MinDeptCode = directories_officers_posting.DepartmentCode
LEFT OUTER JOIN jse_cf_ministry ON jse_cf_ministry.MinDeptCode = directories_officers_posting.MinisteryCode
LEFT OUTER JOIN jse_cf_office ON jse_cf_office.MinDeptCode = directories_officers_posting.OfficerCode
LEFT OUTER JOIN jse_cf_locations ON jse_cf_locations.MinDeptCode = directories_officers_posting.LocationCode
LEFT OUTER JOIN jse_cf_fieldexperience_major ON jse_cf_fieldexperience_major.MajorCode = directories_officers_posting.FieldMajor
LEFT OUTER JOIN jse_cf_fieldexperience_minor ON jse_cf_fieldexperience_minor.MinorCode = directories_officers_posting.FieldMinor
LEFT OUTER JOIN jse_cf_chargenature ON jse_cf_chargenature.ChargeID = directories_officers_posting.ChargeNature 
WHERE 1=1 AND Level_type = 'Secretary Equivalent' GROUP BY directories_officers_personnel.OfficerId ASC ORDER BY directories_officers_personnel.id ASC";

$maindirectorySecretaryEquivalentlistresult = mysqli_query($maindirectorieslist_connection,$directorySecretaryEquivalentlistsql) or die("error".mysqli_error($maindirectorieslist_connection));
return $maindirectorySecretaryEquivalentlistresult;
}

function maindirectorylistfetch_display_UnderSecretary_list()
{
	global $maindirectorieslist_connection;

	$directoryUnderSecretarylistsql = '';

	$directoryUnderSecretarylistsql = "SELECT directories_officers_personnel.id,batch_year,directories_officers_personnel.OfficerId,Service_Code,CONCAT(TitleDesc,' ',FirstName,' ',SurName) AS NAME,StateName,CadreStateName,Gender_name,CategoryDesc,SSDesc,HandicapStatus,recruitment_types,Languages_names, mother_tongue_languages_name,tenure_type_types,TenureBeginsOn,TenureEndsOn, jse_cf_degree.DegreeFullDesc,jse_cf_division.DivisionDesc,jse_cf_institution.InstitutionDesc,jse_cf_qualificationsubjects.SubjectDesc,jse_cf_university.UniversityDesc , jse_cf_postingat.PostingAtType,jse_cf_postingtype.PostingTypeDesc, jse_cf_posting_levels.Level_type , jse_cf_designation.DesignationDesc,jse_cf_department.DepartmentDescription,jse_cf_ministry.MinistryDescription,jse_cf_office.OfficeDescription,jse_cf_locations.LocationDescription,directories_officers_posting.DateFrom,directories_officers_posting.DateTo,jse_cf_chargenature.ChargeNatureName,jse_cf_fieldexperience_major.MajorExperienceDescription,jse_cf_fieldexperience_minor.MinorExperienceDescription
FROM directories_officers_personnel
LEFT OUTER JOIN directories_officers_languageinfo ON directories_officers_languageinfo.OfficerID = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_central_deputation_info ON directories_officers_central_deputation_info.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_qualification ON directories_officers_qualification.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_posting ON directories_officers_posting.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN jse_cf_batch ON jse_cf_batch.batch_id = directories_officers_personnel.Batch
LEFT OUTER JOIN jse_cf_service ON jse_cf_service.Service_Id = directories_officers_personnel.Service
LEFT OUTER JOIN jse_cf_title ON jse_cf_title.TitleCode = directories_officers_personnel.Title
LEFT OUTER JOIN jse_cf_domicilestate ON jse_cf_domicilestate.StateID = directories_officers_personnel.Domicile
LEFT OUTER JOIN jse_cf_cadrestate ON jse_cf_cadrestate.CadreStateId = directories_officers_personnel.Cadre
LEFT OUTER JOIN jse_cf_gender ON jse_cf_gender.Gender_Id = directories_officers_personnel.Gender
LEFT OUTER JOIN jse_cf_category ON jse_cf_category.CategoryCode = directories_officers_personnel.Category
LEFT OUTER JOIN jse_cf_servingstatus ON jse_cf_servingstatus.SSCode = directories_officers_personnel.ServingStatus
LEFT OUTER JOIN jse_cf_handicapstatus ON jse_cf_handicapstatus.HandicapCode = directories_officers_personnel.PhysicalHandicapStatus
LEFT OUTER JOIN jse_cf_source_of_recruitment ON jse_cf_source_of_recruitment.recruitment_id = directories_officers_personnel.Recruitment_Mode
LEFT OUTER JOIN jse_cf_languages ON jse_cf_languages.Languages_Id = directories_officers_languageinfo.Language
LEFT OUTER JOIN jse_cf_mother_tongue ON jse_cf_mother_tongue.mother_tongue_id = directories_officers_languageinfo.MotherTongue
LEFT OUTER JOIN jse_cf_tenure_type ON jse_cf_tenure_type.tenure_type_id = directories_officers_central_deputation_info.TenureType
LEFT OUTER JOIN jse_cf_degree ON jse_cf_degree.DegreeCode = directories_officers_qualification.Degree 
LEFT OUTER JOIN jse_cf_division ON jse_cf_division.DivisionCode = directories_officers_qualification.DivisionCode
LEFT OUTER JOIN jse_cf_institution  ON jse_cf_institution.InstitutionCode = directories_officers_qualification.Institution
LEFT OUTER JOIN jse_cf_qualificationsubjects  ON jse_cf_qualificationsubjects.SubjectCode = directories_officers_qualification.Subject1
LEFT OUTER JOIN jse_cf_university ON jse_cf_university.UniversityCode = directories_officers_qualification.University
LEFT OUTER JOIN jse_cf_postingat ON jse_cf_postingat.PostingAtId = directories_officers_posting.PostedAt
LEFT OUTER JOIN jse_cf_postingtype ON jse_cf_postingtype.PostingTypeCode = directories_officers_posting.Postingtype
LEFT OUTER JOIN jse_cf_posting_levels ON jse_cf_posting_levels.levels_id = directories_officers_posting.PostingLevel
LEFT OUTER JOIN jse_cf_designation ON jse_cf_designation.DesignationCode = directories_officers_posting.DesignationCode 
LEFT OUTER JOIN jse_cf_department ON jse_cf_department.MinDeptCode = directories_officers_posting.DepartmentCode
LEFT OUTER JOIN jse_cf_ministry ON jse_cf_ministry.MinDeptCode = directories_officers_posting.MinisteryCode
LEFT OUTER JOIN jse_cf_office ON jse_cf_office.MinDeptCode = directories_officers_posting.OfficerCode
LEFT OUTER JOIN jse_cf_locations ON jse_cf_locations.MinDeptCode = directories_officers_posting.LocationCode
LEFT OUTER JOIN jse_cf_fieldexperience_major ON jse_cf_fieldexperience_major.MajorCode = directories_officers_posting.FieldMajor
LEFT OUTER JOIN jse_cf_fieldexperience_minor ON jse_cf_fieldexperience_minor.MinorCode = directories_officers_posting.FieldMinor
LEFT OUTER JOIN jse_cf_chargenature ON jse_cf_chargenature.ChargeID = directories_officers_posting.ChargeNature 
WHERE 1=1 AND Level_type = 'Under Secretary' GROUP BY directories_officers_personnel.OfficerId ASC ORDER BY directories_officers_personnel.id ASC";

$maindirectoryUnderSecretarylistresult = mysqli_query($maindirectorieslist_connection,$directoryUnderSecretarylistsql) or die("error".mysqli_error($maindirectorieslist_connection));
return $maindirectoryUnderSecretarylistresult;
}

function maindirectorylistfetch_display_UnderSecretaryEquivalent_list()
{
	global $maindirectorieslist_connection;

	$directoryUnderSecretaryEquivalentlistsql = '';

	$directoryUnderSecretaryEquivalentlistsql = "SELECT directories_officers_personnel.id,batch_year,directories_officers_personnel.OfficerId,Service_Code,CONCAT(TitleDesc,' ',FirstName,' ',SurName) AS NAME,StateName,CadreStateName,Gender_name,CategoryDesc,SSDesc,HandicapStatus,recruitment_types,Languages_names, mother_tongue_languages_name,tenure_type_types,TenureBeginsOn,TenureEndsOn, jse_cf_degree.DegreeFullDesc,jse_cf_division.DivisionDesc,jse_cf_institution.InstitutionDesc,jse_cf_qualificationsubjects.SubjectDesc,jse_cf_university.UniversityDesc , jse_cf_postingat.PostingAtType,jse_cf_postingtype.PostingTypeDesc, jse_cf_posting_levels.Level_type , jse_cf_designation.DesignationDesc,jse_cf_department.DepartmentDescription,jse_cf_ministry.MinistryDescription,jse_cf_office.OfficeDescription,jse_cf_locations.LocationDescription,directories_officers_posting.DateFrom,directories_officers_posting.DateTo,jse_cf_chargenature.ChargeNatureName,jse_cf_fieldexperience_major.MajorExperienceDescription,jse_cf_fieldexperience_minor.MinorExperienceDescription
FROM directories_officers_personnel
LEFT OUTER JOIN directories_officers_languageinfo ON directories_officers_languageinfo.OfficerID = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_central_deputation_info ON directories_officers_central_deputation_info.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_qualification ON directories_officers_qualification.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN directories_officers_posting ON directories_officers_posting.OfficerId = directories_officers_personnel.OfficerId
LEFT OUTER JOIN jse_cf_batch ON jse_cf_batch.batch_id = directories_officers_personnel.Batch
LEFT OUTER JOIN jse_cf_service ON jse_cf_service.Service_Id = directories_officers_personnel.Service
LEFT OUTER JOIN jse_cf_title ON jse_cf_title.TitleCode = directories_officers_personnel.Title
LEFT OUTER JOIN jse_cf_domicilestate ON jse_cf_domicilestate.StateID = directories_officers_personnel.Domicile
LEFT OUTER JOIN jse_cf_cadrestate ON jse_cf_cadrestate.CadreStateId = directories_officers_personnel.Cadre
LEFT OUTER JOIN jse_cf_gender ON jse_cf_gender.Gender_Id = directories_officers_personnel.Gender
LEFT OUTER JOIN jse_cf_category ON jse_cf_category.CategoryCode = directories_officers_personnel.Category
LEFT OUTER JOIN jse_cf_servingstatus ON jse_cf_servingstatus.SSCode = directories_officers_personnel.ServingStatus
LEFT OUTER JOIN jse_cf_handicapstatus ON jse_cf_handicapstatus.HandicapCode = directories_officers_personnel.PhysicalHandicapStatus
LEFT OUTER JOIN jse_cf_source_of_recruitment ON jse_cf_source_of_recruitment.recruitment_id = directories_officers_personnel.Recruitment_Mode
LEFT OUTER JOIN jse_cf_languages ON jse_cf_languages.Languages_Id = directories_officers_languageinfo.Language
LEFT OUTER JOIN jse_cf_mother_tongue ON jse_cf_mother_tongue.mother_tongue_id = directories_officers_languageinfo.MotherTongue
LEFT OUTER JOIN jse_cf_tenure_type ON jse_cf_tenure_type.tenure_type_id = directories_officers_central_deputation_info.TenureType
LEFT OUTER JOIN jse_cf_degree ON jse_cf_degree.DegreeCode = directories_officers_qualification.Degree 
LEFT OUTER JOIN jse_cf_division ON jse_cf_division.DivisionCode = directories_officers_qualification.DivisionCode
LEFT OUTER JOIN jse_cf_institution  ON jse_cf_institution.InstitutionCode = directories_officers_qualification.Institution
LEFT OUTER JOIN jse_cf_qualificationsubjects  ON jse_cf_qualificationsubjects.SubjectCode = directories_officers_qualification.Subject1
LEFT OUTER JOIN jse_cf_university ON jse_cf_university.UniversityCode = directories_officers_qualification.University
LEFT OUTER JOIN jse_cf_postingat ON jse_cf_postingat.PostingAtId = directories_officers_posting.PostedAt
LEFT OUTER JOIN jse_cf_postingtype ON jse_cf_postingtype.PostingTypeCode = directories_officers_posting.Postingtype
LEFT OUTER JOIN jse_cf_posting_levels ON jse_cf_posting_levels.levels_id = directories_officers_posting.PostingLevel
LEFT OUTER JOIN jse_cf_designation ON jse_cf_designation.DesignationCode = directories_officers_posting.DesignationCode 
LEFT OUTER JOIN jse_cf_department ON jse_cf_department.MinDeptCode = directories_officers_posting.DepartmentCode
LEFT OUTER JOIN jse_cf_ministry ON jse_cf_ministry.MinDeptCode = directories_officers_posting.MinisteryCode
LEFT OUTER JOIN jse_cf_office ON jse_cf_office.MinDeptCode = directories_officers_posting.OfficerCode
LEFT OUTER JOIN jse_cf_locations ON jse_cf_locations.MinDeptCode = directories_officers_posting.LocationCode
LEFT OUTER JOIN jse_cf_fieldexperience_major ON jse_cf_fieldexperience_major.MajorCode = directories_officers_posting.FieldMajor
LEFT OUTER JOIN jse_cf_fieldexperience_minor ON jse_cf_fieldexperience_minor.MinorCode = directories_officers_posting.FieldMinor
LEFT OUTER JOIN jse_cf_chargenature ON jse_cf_chargenature.ChargeID = directories_officers_posting.ChargeNature 
WHERE 1=1 AND Level_type = 'Under Secretary Equivalent' GROUP BY directories_officers_personnel.OfficerId ASC ORDER BY directories_officers_personnel.id ASC";

$maindirectoryUnderSecretaryEquivalentlistresult = mysqli_query($maindirectorieslist_connection,$directoryUnderSecretaryEquivalentlistsql) or die("error".mysqli_error($maindirectorieslist_connection));
return $maindirectoryUnderSecretaryEquivalentlistresult;
}

?>
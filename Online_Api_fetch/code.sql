SELECT bak_pis_personnel_withoutphoto.OfficerID , bak_pis_batchinfo.YrBatch , jse_cf_title.TitleDesc,bak_pis_personnel_withoutphoto.First_Name,
jse_cf_cadrestate.CadreStateCode,jse_cf_gender.Gender_name,jse_cf_category.CategoryDesc,jse_cf_servingstatus.SSDesc,jse_cf_handicapstatus.HandicapStatus,bak_pis_personnel_withoutphoto.Dt_Birth,bak_pis_personnel_withoutphoto.Dt_Joined,
bak_pis_personnel_withoutphoto.AadhaarNum,bak_pis_personnel_withoutphoto.CreatedOn,
bak_pis_qualification.PassingYear,bak_pis_qualification.CGPA,bak_pis_qualification.Percentage,jse_cf_degree.DegreeDesc,jse_cf_division.DivisionDesc,jse_cf_institution.InstitutionDesc,jse_cf_university.UniversityDesc,jse_cf_qualificationsubjects.SubjectDesc,
jse_cf_qualificationsubjects2.SubjectDesc2,jse_cf_qualificationsubjects3.SubjectDesc3,jse_cf_postingtype.PostingTypeDesc,jse_cf_department.MinDeptDesc,jse_cf_designation.DesignationDesc 
FROM bak_pis_personnel_withoutphoto
LEFT OUTER JOIN bak_pis_batchinfo ON bak_pis_batchinfo.BatchID = bak_pis_personnel_withoutphoto.BatchID
LEFT OUTER JOIN jse_cf_title ON jse_cf_title.TitleCode = bak_pis_personnel_withoutphoto.Title
LEFT OUTER JOIN jse_cf_cadrestate ON jse_cf_cadrestate.CadreStateId = bak_pis_personnel_withoutphoto.CadreCode
LEFT OUTER JOIN jse_cf_gender ON jse_cf_gender.Gender_Id = bak_pis_personnel_withoutphoto.Gender
LEFT OUTER JOIN jse_cf_category ON jse_cf_category.CategoryDesc = bak_pis_personnel_withoutphoto.Category
LEFT OUTER JOIN jse_cf_servingstatus ON jse_cf_servingstatus.SSCode = bak_pis_personnel_withoutphoto.ServingStatus
LEFT OUTER JOIN jse_cf_handicapstatus ON jse_cf_handicapstatus.HandicapCode = bak_pis_personnel_withoutphoto.PhysicalHandicap,bak_pis_qualification
LEFT OUTER JOIN jse_cf_degree ON jse_cf_degree.DegreeCode = bak_pis_qualification.Degree
LEFT OUTER JOIN jse_cf_division ON jse_cf_division.DivisionCode = bak_pis_qualification.DivisionCode
LEFT OUTER JOIN jse_cf_institution ON jse_cf_institution.InstitutionCode = bak_pis_qualification.Institution 
LEFT OUTER JOIN jse_cf_university ON jse_cf_university.UniversityDesc = bak_pis_qualification.University
LEFT OUTER JOIN jse_cf_qualificationsubjects ON jse_cf_qualificationsubjects.SubjectCode = bak_pis_qualification.Subject1
LEFT OUTER JOIN jse_cf_qualificationsubjects2 ON jse_cf_qualificationsubjects2.SubjectCode = bak_pis_qualification.Subject2
LEFT OUTER JOIN jse_cf_qualificationsubjects3 ON jse_cf_qualificationsubjects3.SubjectCode = bak_pis_qualification.Subject3,bak_pis_posting
LEFT OUTER JOIN jse_cf_postingtype ON jse_cf_postingtype.PostingTypeCode = bak_pis_posting.PostingType
LEFT OUTER JOIN jse_cf_department ON jse_cf_department.MinDeptCode = bak_pis_posting.DepartmentCode 
LEFT OUTER JOIN jse_cf_designation ON jse_cf_designation.DesignationCode = bak_pis_posting.DesignationCode
WHERE 1=1 AND bak_pis_personnel_withoutphoto.OfficerID = bak_pis_qualification.OfficerID AND bak_pis_personnel_withoutphoto.OfficerID = bak_pis_posting.OfficerID LIMIT 2000;



SELECT bak_pis_personnel_withoutphoto.OfficerID , YrBatch ,TitleDesc,bak_pis_personnel_withoutphoto.First_Name,bak_pis_personnel_withoutphoto.Middle_Name,bak_pis_personnel_withoutphoto.SurName
FROM bak_pis_personnel_withoutphoto
LEFT OUTER JOIN bak_pis_batchinfo ON bak_pis_batchinfo.BatchID = bak_pis_personnel_withoutphoto.BatchID 
LEFT OUTER JOIN jse_cf_title ON jse_cf_title.TitleCode = bak_pis_personnel_withoutphoto.Title

BatchID,OfficerID,EmployeeCode,Title,First_Name,Middle_Name,SurName,HFirst_Name,HMiddle_Name,HSurName,CadreCode,StateCode,DomicileCode,Gender,Category,Dt_Birth,Dt_Joined,RecruitMode,ServingStatus,PhysicalHandicap,MotherTongue,AadhaarNum,Dt_LastWorked,IPR_ID,jseID,easyOfficerID,CivilListId,IPAddress,ModifiedOn,ModifiedBy,CreatedOn,CreatedBy
SELECT bak_pis_personnel.OfficerId,jse_cf_batch.batch_year,bak_pis_personnel.EmployeeCode,CONCAT(jse_cf_title.TitleDesc,' ',bak_pis_personnel.FirstName,' ',bak_pis_personnel.MiddleName,' ',bak_pis_personnel.SurName) AS Name,bak_pis_personnel.Aadhar_Number,bak_pis_personnel.Date_Birth,bak_pis_personnel.Date_Joining,bak_pis_personnel.Dt_LastWorked,bak_pis_familyinfo.FatherName,N1.NationalityName AS FathersNationality,O1.OccupationName AS FathersOccupation,bak_pis_familyinfo.MotherName,N2.NationalityName AS MothersNationality,O2.OccupationName AS MothersOccupation,jse_cf_blood_group.BloodGroupValue,C1.StateCadreName AS BirthState,bak_pis_familyinfo.BirthPlace,
N3.NationalityName AS Nationality,jse_cf_religion.ReligionName,bak_pis_contactinfo.PermanentAddress1,bak_pis_contactinfo.PermanentAddress2,bak_pis_contactinfo.PermanentAddress3,L1.LocationDescription AS PermanentCity,C2.StateCadreName AS PermanentState,bak_pis_contactinfo.PermanentPinCOde,bak_pis_contactinfo.PresentAddress1,bak_pis_contactinfo.PresentAddress2,bak_pis_contactinfo.PresentAddress3,L2.LocationDescription AS PresentCity,C3.StateCadreName AS PresentState,bak_pis_contactinfo.PresentPinCode,bak_pis_contactinfo.MobileNum,bak_pis_contactinfo.EmailAddress,bak_pis_contactinfo.AlternateEmailAddress FROM bak_pis_personnel 
    LEFT OUTER JOIN jse_cf_batch ON jse_cf_batch.batch_id = bak_pis_personnel.Batch,bak_pis_familyinfo
    LEFT OUTER JOIN jse_cf_title ON jse_cf_title.TitleCode = bak_pis_personnel.Title
    LEFT OUTER JOIN jse_cf_nationality N1 ON N1.NationalityId = bak_pis_familyinfo.FatherNationality
    LEFT OUTER JOIN jse_cf_occupation O1 ON O1.OccupationId = bak_pis_familyinfo.FatherOccupation
    LEFT OUTER JOIN jse_cf_nationality N2 ON N2.NationalityId = bak_pis_familyinfo.MotherNationality
    LEFT OUTER JOIN jse_cf_occupation O2 ON O2.OccupationId = bak_pis_familyinfo.MotherOccupation
    LEFT OUTER JOIN jse_cf_cadre C1 ON C1.StateCadreCode = bak_pis_familyinfo.BirthState
    LEFT OUTER JOIN jse_cf_blood_group ON jse_cf_blood_group.Blood_GroupId = bak_pis_familyinfo.BloodGroup
    LEFT OUTER JOIN jse_cf_nationality N3 ON N3.NationalityId = bak_pis_familyinfo.Nationality
    LEFT OUTER JOIN jse_cf_religion ON jse_cf_religion.ReligionId = bak_pis_familyinfo.Religion,bak_pis_contactinfo
    LEFT OUTER JOIN jse_cf_locations L1 ON L1.MinDeptCode = bak_pis_contactinfo.PermanentCity
    LEFT OUTER JOIN jse_cf_cadre C2 ON C2.StateCadreCode = bak_pis_contactinfo.PermanentState
    LEFT OUTER JOIN jse_cf_locations L2 ON L2.MinDeptCode = bak_pis_contactinfo.PresentCity
    LEFT OUTER JOIN jse_cf_cadre C3 ON C3.StateCadreCode = bak_pis_contactinfo.PresentState WHERE 1=1
    AND bak_pis_personnel.OfficerId =  bak_pis_familyinfo.OfficerID AND  bak_pis_personnel.OfficerId = bak_pis_contactinfo.OfficerID
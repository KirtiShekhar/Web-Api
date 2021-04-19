


<?php

/* database service script to fetch all result from database table */

include('maindirectorylistfetch_db_function.php');

$maindirectorylistresponse = array();
$maindirectorylistresult = maindirectorylistfetch_display_full_list();

while($maindirectorylistrows = mysqli_fetch_array($maindirectorylistresult))
{
	array_push($maindirectorylistresponse, array(
		'id' => $maindirectorylistrows['id'],
'batch_year' => $maindirectorylistrows['batch_year'],
'OfficerId' => $maindirectorylistrows['OfficerId'],
'Service_Code' => $maindirectorylistrows['Service_Code'],
'NAME' => $maindirectorylistrows['NAME'],  
'StateName' => $maindirectorylistrows['StateName'],       
'CadreStateName' => $maindirectorylistrows['CadreStateName'],
'Gender_name' => $maindirectorylistrows['Gender_name'],
'CategoryDesc' => $maindirectorylistrows['CategoryDesc'],
'SSDesc' => $maindirectorylistrows['SSDesc'],              
'HandicapStatus' => $maindirectorylistrows['HandicapStatus'],
'recruitment_types' => $maindirectorylistrows['recruitment_types'],                     
'Languages_names' => $maindirectorylistrows['Languages_names'],
'mother_tongue_languages_name' => $maindirectorylistrows['mother_tongue_languages_name'],
'tenure_type_types' => $maindirectorylistrows['tenure_type_types'],
'TenureBeginsOn' => $maindirectorylistrows['TenureBeginsOn'],     
'TenureEndsOn' => $maindirectorylistrows['TenureEndsOn'],       
'DegreeFullDesc' => $maindirectorylistrows['DegreeFullDesc'],         
'DivisionDesc' => $maindirectorylistrows['DivisionDesc'],          
'InstitutionDesc' => $maindirectorylistrows['InstitutionDesc'],                                   
'SubjectDesc' => $maindirectorylistrows['SubjectDesc'],    
'UniversityDesc' => $maindirectorylistrows['UniversityDesc'],               
'PostingAtType' => $maindirectorylistrows['PostingAtType'],
'PostingTypeDesc' => $maindirectorylistrows['PostingTypeDesc'],
'Level_type' => $maindirectorylistrows['Level_type'],                     
'DesignationDesc' => $maindirectorylistrows['DesignationDesc'],             
'DepartmentDescription' => $maindirectorylistrows['DepartmentDescription'],
'MinistryDescription' => $maindirectorylistrows['MinistryDescription'],      
'OfficeDescription' => $maindirectorylistrows['OfficeDescription'],                           
'LocationDescription' => $maindirectorylistrows['LocationDescription'],
'DateFrom' => $maindirectorylistrows['DateFrom'],           
'DateTo' => $maindirectorylistrows['DateTo'],             
'ChargeNatureName' => $maindirectorylistrows['ChargeNatureName'],
'MajorExperienceDescription' => $maindirectorylistrows['MajorExperienceDescription'],
'MinorExperienceDescription'=> $maindirectorylistrows['MinorExperienceDescription']));
}
print(json_encode($maindirectorylistresponse,JSON_PRETTY_PRINT));

if($maindirectorieslist_connection == true)
{
	mysqli_close($maindirectorieslist_connection);
}

?>
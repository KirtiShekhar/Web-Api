<?php

/* database service script to fetch all result from database tables */

include('all_complex_db_function.php');

$AllComplexData_Response = array();
$AllComplexData_Result = all_complex_fetch_complex_data_json();

while($AllComplexData_Rows = mysqli_fetch_assoc($AllComplexData_Result))
{
	array_push($AllComplexData_Response, array(
		'SNO' => $AllComplexData_Rows['SNO'],
 'batch_year' => $AllComplexData_Rows['batch_year'],
 'OfficerId' => $AllComplexData_Rows['OfficerId'],
 'EMPLOYEE_CODE' => $AllComplexData_Rows['EMPLOYEE_CODE'],
 'Service_Code' => $AllComplexData_Rows['Service_Code'],
 'NAME' => $AllComplexData_Rows['NAME'],
 'DOMICILE_STATE' => $AllComplexData_Rows['DOMICILE_STATE'],
 'CadreStateCode' => $AllComplexData_Rows['CadreStateCode'], 
 'Gender_name' => $AllComplexData_Rows['Gender_name'], 
 'CategoryDesc' => $AllComplexData_Rows['CategoryDesc'], 
 'SSDesc' => $AllComplexData_Rows['SSDesc'],
 'HandicapStatus' => $AllComplexData_Rows['HandicapStatus'],
 'recruitment_types' => $AllComplexData_Rows['recruitment_types'],
 'AADHAR_NUMBER' => $AllComplexData_Rows['AADHAR_NUMBER'],
 'DATE_OF_BIRTH' => $AllComplexData_Rows['DATE_OF_BIRTH'],
 'DATE_OF_JOINING' => $AllComplexData_Rows['DATE_OF_JOINING'],
 'CREATED_ON' => $AllComplexData_Rows['CREATED_ON'],
 'CREATED_BY' => $AllComplexData_Rows['CREATED_BY'], 
 'Languages_names' => $AllComplexData_Rows['Languages_names'], 
 'mother_tongue_languages_name' => $AllComplexData_Rows['mother_tongue_languages_name'],
 'DEGREE' => $AllComplexData_Rows['DEGREE'], 
 'DIVISION' => $AllComplexData_Rows['DIVISION'], 
 'SUBJECT1' => $AllComplexData_Rows['SUBJECT1'], 
 'SUBJECT2' => $AllComplexData_Rows['SUBJECT2'], 
 'SUBJEC3' => $AllComplexData_Rows['SUBJEC3'],
 'INSTITUTION' => $AllComplexData_Rows['INSTITUTION'] , 
 'UNIVERSITY' => $AllComplexData_Rows['UNIVERSITY'] ,
 'PASSINGYEAR' => $AllComplexData_Rows['PASSINGYEAR'] , 
 'CGPA' => $AllComplexData_Rows['CGPA'] , 
 'PERCENTAGE' => $AllComplexData_Rows['PERCENTAGE'] , 
 'PostingLocation_Centre_Cadre' => $AllComplexData_Rows['PostingLocation_Centre_Cadre'] , 
 'PostingType' => $AllComplexData_Rows['PostingType'] , 
 'PostingLevel' => $AllComplexData_Rows['PostingLevel'], 
 'Designation' => $AllComplexData_Rows['Designation'] , 
 'Department' => $AllComplexData_Rows['Department'] ,
 'Ministry' => $AllComplexData_Rows['Ministry'],
 'Office' => $AllComplexData_Rows['Office'],
 'Location' => $AllComplexData_Rows['Location'], 
 'Remarks' => $AllComplexData_Rows['Remarks'] , 
 'MajorExperienceDescription' => $AllComplexData_Rows['MajorExperienceDescription'] ,  
 'MinorExperienceDescription' => $AllComplexData_Rows['MinorExperienceDescription']  , 
 'tenure_type_types' => $AllComplexData_Rows['tenure_type_types'] , 
 'debartment_type_value' => $AllComplexData_Rows['debartment_type_value']));
}
print(json_encode($AllComplexData_Response,JSON_PRETTY_PRINT));

if($AllComplexData_connection == true)
{
	mysqli_close($AllComplexData_connection);
}

?>




 
<?php

/* database service script to fetch all result from database table */

include('officerinstitutionsfetch_db_function.php');

$officerinstitutionresponse = array();
$officerinstitutionresult = officerinstitutionsfetch_display_all_institution_names();

while($officerinstitutionsrows = mysqli_fetch_array($officerinstitutionresult))
{
	$OfficerQualificationInstitution = array();
	$OfficerQualificationInstitution["InstitutionDesc"] = $officerinstitutionsrows["InstitutionDesc"];
	array_push($officerinstitutionresponse, $OfficerQualificationInstitution);
}
print(json_encode(array("status" => "true" , "message" => "Successfully displayed the Qualification Institution Names!" ,  "QualificationInstitution" => $officerinstitutionresponse),JSON_PRETTY_PRINT));

if($officerinstitution_connection == true)
{
	mysqli_close($officerinstitution_connection);
}

?>
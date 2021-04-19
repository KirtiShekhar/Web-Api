<?php

/* database service to fetch all result from database tables */

include('officerdesignationfetch_db_function.php');

$officerdesignationresponse = array();
$officerdesignationresult = officerdesignationfetch_display_all_designation_names();

while ($officerdesignationrows = mysqli_fetch_array($officerdesignationresult)) 
{
	$OfficerDesignationNames = array();
	$OfficerDesignationNames['DesignationDesc'] = $officerdesignationrows['DesignationDesc'];
	array_push($officerdesignationresponse, $OfficerDesignationNames);
}
print(json_encode(array("status" => "true" , "message" => "Successfully displayed the Designation Names!" , "DesignationTypesNames" => $officerdesignationresponse),JSON_PRETTY_PRINT));

if($officerdesignation_connection == true)
{
	mysqli_close($officerdesignation_connection);
}

?>
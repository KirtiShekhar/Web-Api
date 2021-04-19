<?php

/* database service script to fetch all result from database table */

include('OfficerDetailsMoreFieldsFetch_db_function.php');

$categorytypesresponse = array();
$officerdetailsnationalityresult = officerdetailsnationalityfetch_display_all_nationality_types();

while($categorytypesrows = mysqli_fetch_array($officerdetailsnationalityresult))
{
	$NationalityTypesValues = array();
	$NationalityTypesValues['nationalityname'] = $categorytypesrows['nationalityname'];
	array_push($categorytypesresponse, $NationalityTypesValues);
}
print(json_encode(array("status" => "true" , "message" => "Successfully displayed the Nationality Types!" , "NationalityTypes" => $categorytypesresponse),JSON_PRETTY_PRINT));
	
if($officerdetailsmorefields_connection == true)
{
	mysqli_close($officerdetailsmorefields_connection);
}

?>
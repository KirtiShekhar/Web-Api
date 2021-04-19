<?php

/* database service script to fetch all result from database table */

include('OfficerDetailsMoreFieldsFetch_db_function.php');

$categorytypesresponse = array();
$officerdetailsoccupationresult = officerdetailsoccupationfetch_display_all_occupation_names();

while($categorytypesrows = mysqli_fetch_array($officerdetailsoccupationresult))
{
	$OccupationValues = array();
	$OccupationValues['occupationname'] = $categorytypesrows['occupationname'];
	array_push($categorytypesresponse, $OccupationValues);
}
print(json_encode(array("status" => "true" , "message" => "Successfully displayed the Occupation Values!" , "OccupationValues" => $categorytypesresponse),JSON_PRETTY_PRINT));
	
if($officerdetailsmorefields_connection == true)
{
	mysqli_close($officerdetailsmorefields_connection);
}

?>
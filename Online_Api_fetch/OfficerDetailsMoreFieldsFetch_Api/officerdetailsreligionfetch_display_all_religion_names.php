<?php

/* database service script to fetch all result from database table */

include('OfficerDetailsMoreFieldsFetch_db_function.php');

$categorytypesresponse = array();
$officerdetailsreligionresult = officerdetailsreligionfetch_display_all_religion_names();

while($categorytypesrows = mysqli_fetch_array($officerdetailsreligionresult))
{
	$AllReligionNames = array();
	$AllReligionNames['religionname'] = $categorytypesrows['religionname'];
	array_push($categorytypesresponse, $AllReligionNames);
}
print(json_encode(array("status" => "true" , "message" => "Successfully displayed All Religion Names!" , "ReligionNames" => $categorytypesresponse),JSON_PRETTY_PRINT));
	
if($officerdetailsmorefields_connection == true)
{
	mysqli_close($officerdetailsmorefields_connection);
}

?>
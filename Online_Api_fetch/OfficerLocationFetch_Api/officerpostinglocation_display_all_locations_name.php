<?php

/* database service script to fetch all result from database table */

include('officerpostinglocationfetch_db_function.php');

$postingministryresponse = array();
$postinglocationresult = officerpostinglocation_display_all_locations_name();

while($postingministryrows = mysqli_fetch_array($postinglocationresult))
{
	$OfficerMinistryNames = array();
	$OfficerMinistryNames['LocationDescription'] = $postingministryrows['LocationDescription'];
	array_push($postingministryresponse, $OfficerMinistryNames);
}
print(json_encode(array("status" => "true" , "message" => "Successfully displayed the Ministry Names!" , "LocationsDescriptionNames" => $postingministryresponse),JSON_PRETTY_PRINT));
	
if($officerpostinglocation_connection == true)
{
	mysqli_close($officerpostinglocation_connection);
}

?>
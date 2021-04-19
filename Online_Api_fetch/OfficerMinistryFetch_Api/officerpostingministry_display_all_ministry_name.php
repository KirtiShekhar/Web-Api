<?php

/* database service script to fetch all result from database table */

include('officerpostingministryfetch_db_function.php');

$postingministryresponse = array();
$postingministryresult = officerpostingministry_display_all_ministry_name();

while($postingministryrows = mysqli_fetch_array($postingministryresult))
{
	$OfficerMinistryNames = array();
	$OfficerMinistryNames['MinistryDescription'] = $postingministryrows['MinistryDescription'];
	array_push($postingministryresponse, $OfficerMinistryNames);
}
print(json_encode(array("status" => "true" , "message" => "Successfully displayed the Ministry Names!" , "MinistryDescriptionNames" => $postingministryresponse),JSON_PRETTY_PRINT));
	
if($officerpostingministry_connection == true)
{
	mysqli_close($officerpostingministry_connection);
}

?>
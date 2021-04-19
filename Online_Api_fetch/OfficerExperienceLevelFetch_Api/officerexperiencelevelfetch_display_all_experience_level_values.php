<?php

/* database service script to fetch all result from database table */

include('officerexperiencelevelfetch_db_function.php');

$officerexperiencelevelresponse = array();
$officerexperiencelevelresult = officerexperiencelevelfetch_display_all_experience_level();

while($officerexperiencelevelrows = mysqli_fetch_array($officerexperiencelevelresult))
{
	$OfficerExperienceLevels = array();
	$OfficerExperienceLevels['Experience_Level_type'] = $officerexperiencelevelrows['Experience_Level_type'];
	array_push($officerexperiencelevelresponse, $OfficerExperienceLevels);
}
print(json_encode(array("status" => "true" , "message" => "Successfully displayed the Experience Level Options!" , "ExperienceLevel" => $officerexperiencelevelresponse),JSON_PRETTY_PRINT));
	
if($officerexperiencelevel_connection == true)
{
	mysqli_close($officerexperiencelevel_connection);
}

?>
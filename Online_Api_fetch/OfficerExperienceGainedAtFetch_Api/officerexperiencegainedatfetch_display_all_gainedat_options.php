<?php

/* database service script to fetch all result from database table */

include('officerexperiencegainedatfetch_db_function.php');

$officerexperiencegainedatresponse = array();
$officerexperiencegainedatresult = officerexperiencegainedatfetch_display_all_gainedat_options();

while($officerexperiencegainedatrows = mysqli_fetch_array($officerexperiencegainedatresult))
{
	$OfficerExperienceGainedAt = array();
	$OfficerExperienceGainedAt['ExperienceGainedOption'] = $officerexperiencegainedatrows['ExperienceGainedOption'];
	array_push($officerexperiencegainedatresponse, $OfficerExperienceGainedAt);
}
print(json_encode(array("status" => "true" , "message" => "Successfully displayed the Experience Gained At Options!" , "ExperienceGainedAt" => $officerexperiencegainedatresponse),JSON_PRETTY_PRINT));
	
if($officerexperiencegainedat_connection == true)
{
	mysqli_close($officerexperiencegainedat_connection);
}

?>
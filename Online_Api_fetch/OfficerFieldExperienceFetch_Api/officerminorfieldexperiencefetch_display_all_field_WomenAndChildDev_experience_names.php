<?php

/* database service script to fetch all result from database table */

include('officerminorfieldexperiencefetch_db_function.php');

$officerfieldexperienceresponse = array();
$officerminorfieldexperienceWomanChildDevelopmentresult = officerminorfieldexperiencefetch_display_all_field_WomenAndChildDev_experience_names();

while ($officerfieldexperiencerows = mysqli_fetch_array($officerminorfieldexperienceWomanChildDevelopmentresult)) 
{
	$OfficerFieldExperienceType = array();
	$OfficerFieldExperienceType['WomenAndChildDevExperience'] = $officerfieldexperiencerows['WomenAndChildDevExperience'];
	array_push($officerfieldexperienceresponse, $OfficerFieldExperienceType);
}
print(json_encode(array("status" => "true" , "message" => "Successfully displayed the Major Field Experience Type Names!" , "MinorWomenAndChildDevelopmentFieldExperience" => $officerfieldexperienceresponse),JSON_PRETTY_PRINT));

if($officerfieldexperience_connection == true)
{
	mysqli_close($officerfieldexperience_connection);
}

?>
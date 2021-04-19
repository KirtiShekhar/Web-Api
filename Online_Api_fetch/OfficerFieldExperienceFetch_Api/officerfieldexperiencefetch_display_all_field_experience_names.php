<?php

/* database service script to fetch all result from database table */

include('officerfieldexperiencefetch_db_function.php');

$officerfieldexperienceresponse = array();
$officerfieldexperienceresult = officerfieldexperiencefetch_display_all_field_experience_names();

while ($officerfieldexperiencerows = mysqli_fetch_array($officerfieldexperienceresult)) 
{
	$OfficerFieldExperienceType = array();
	$OfficerFieldExperienceType['FieldExperience'] = $officerfieldexperiencerows['FieldExperience'];
	array_push($officerfieldexperienceresponse, $OfficerFieldExperienceType);
}
print(json_encode(array("status" => "true" , "message" => "Successfully displayed the Field Experience Type Names!" , "FieldExperience" => $officerfieldexperienceresponse),JSON_PRETTY_PRINT));

if($officerfieldexperience_connection == true)
{
	mysqli_close($officerfieldexperience_connection);
}

?>
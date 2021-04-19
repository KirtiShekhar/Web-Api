<?php

/* database service script to fetch all result from database table */

include('officerminorfieldexperiencefetch_db_function.php');

$officerfieldexperienceresponse = array();
$officerminorfieldexperienceNAresult = officerminorfieldexperiencefetch_display_all_field_NA_experience_names();

while ($officerfieldexperiencerows = mysqli_fetch_array($officerminorfieldexperienceNAresult)) 
{
	$OfficerFieldExperienceType = array();
	$OfficerFieldExperienceType['NAExperience'] = $officerfieldexperiencerows['NAExperience'];
	array_push($officerfieldexperienceresponse, $OfficerFieldExperienceType);
}
print(json_encode(array("status" => "true" , "message" => "Successfully displayed the Major Field Experience Type Names!" , "MinorNAFieldExperience" => $officerfieldexperienceresponse),JSON_PRETTY_PRINT));

if($officerfieldexperience_connection == true)
{
	mysqli_close($officerfieldexperience_connection);
}

?>
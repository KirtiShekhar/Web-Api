<?php

/* database service script to fetch all result from database table */

include('officerfieldexperiencefetch_db_function.php');

$officermajorfieldexperienceresponse = array();
$officermajorfieldexperienceresult = officermajorfieldexperiencefetch_display_all_field_major_experience_names();

while ($officerfieldexperiencerows = mysqli_fetch_array($officermajorfieldexperienceresult)) 
{
	$OfficerMajorFieldExperienceType = array();
	$OfficerMajorFieldExperienceType['MajorExperienceDescription'] = $officerfieldexperiencerows['MajorExperienceDescription'];
	array_push($officermajorfieldexperienceresponse, $OfficerMajorFieldExperienceType);
}
print(json_encode(array("status" => "true" , "message" => "Successfully displayed the Major Field Experience Type Names!" , "MajorFieldExperience" => $officermajorfieldexperienceresponse),JSON_PRETTY_PRINT));

if($officerfieldexperience_connection == true)
{
	mysqli_close($officerfieldexperience_connection);
}

?>
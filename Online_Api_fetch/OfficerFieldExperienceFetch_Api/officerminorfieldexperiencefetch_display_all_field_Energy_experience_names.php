<?php

/* database service script to fetch all result from database table */

include('officerminorfieldexperiencefetch_db_function.php');

$officerfieldexperienceresponse = array();
$officerminorfieldexperienceEnergyresult = officerminorfieldexperiencefetch_display_all_field_Energy_experience_names();

while ($officerfieldexperiencerows = mysqli_fetch_array($officerminorfieldexperienceEnergyresult)) 
{
	$OfficerFieldExperienceType = array();
	$OfficerFieldExperienceType['EnergyExperience'] = $officerfieldexperiencerows['EnergyExperience'];
	array_push($officerfieldexperienceresponse, $OfficerFieldExperienceType);
}
print(json_encode(array("status" => "true" , "message" => "Successfully displayed the Major Field Experience Type Names!" , "MinorEnergyFieldExperience" => $officerfieldexperienceresponse),JSON_PRETTY_PRINT));

if($officerfieldexperience_connection == true)
{
	mysqli_close($officerfieldexperience_connection);
}

?>
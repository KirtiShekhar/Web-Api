<?php

/* database service script to fetch all result from database table */

include('officerminorfieldexperiencefetch_db_function.php');

$officerfieldexperienceresponse = array();
$officerminorfieldexperiencenotavailableresult = officerminorfieldexperiencefetch_display_all_field_NotAvailable_experience_names();

while ($officerfieldexperiencerows = mysqli_fetch_array($officerminorfieldexperiencenotavailableresult)) 
{
	$OfficerFieldExperienceType = array();
	$OfficerFieldExperienceType['NotAvailableExperience'] = $officerfieldexperiencerows['NotAvailableExperience'];
	array_push($officerfieldexperienceresponse, $OfficerFieldExperienceType);
}
print(json_encode(array("status" => "true" , "message" => "Successfully displayed the Major Field Experience Type Names!" , "MinorNotAvailableFieldExperience" => $officerfieldexperienceresponse),JSON_PRETTY_PRINT));

if($officerfieldexperience_connection == true)
{
	mysqli_close($officerfieldexperience_connection);
}

?>
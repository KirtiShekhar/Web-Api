<?php

/* database service script to fetch all result from database tables */

include('officerageconditionoptionsfetch_db_function.php');

$officerageconditionsResponse = array();
$officerageconditionsresult = officerageconditionsfetch_display_all_age_conditions();

while($officerageconditionsRows = mysqli_fetch_assoc($officerageconditionsresult))
{
	$AgeConditionValues = array();
	$AgeConditionValues['condition_description'] = $officerageconditionsRows['condition_description'];
	array_push($officerageconditionsResponse, $AgeConditionValues);
}
print(json_encode(array("status" => "true","message" => "Successfully displayed the age conditions options","OfficerAgeConditionOptions" => $officerageconditionsResponse),JSON_PRETTY_PRINT));

if($officerageconditions_connection == true)
{
	mysqli_close($officerageconditions_connection);
}

?>
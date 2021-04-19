<?php

/* database service script to fetch all result from database table */

include('officerdomicilestatefetch_db_function.php');

$officerdomicilestateresponse = array();
$officerdomicilestateresult = officerdomicilestatefetch_display_all_domicile_states();

while($officerdomicilestaterow = mysqli_fetch_array($officerdomicilestateresult))
{
	$OfficerDomicileStates = array();
	$OfficerDomicileStates["StateName"] = $officerdomicilestaterow["StateName"];
	array_push($officerdomicilestateresponse, $OfficerDomicileStates);
}
print(json_encode(array("status" => "true" , "message" => "Successfully displayed the Domicile States Names!" ,  "DomicileStates" => $officerdomicilestateresponse),JSON_PRETTY_PRINT));

if($officerdomicilestate_connection == true)
{
	mysqli_close($officerdomicilestate_connection);
}
?>
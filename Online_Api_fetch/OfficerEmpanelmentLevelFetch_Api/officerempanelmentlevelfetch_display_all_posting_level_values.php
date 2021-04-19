<?php

/* database service script to fetch all result from database table */

include('officerempanelmentlevelfetch_db_function.php');

$empanelmentlevelresponse = array();
$empanelmentlevelresult = officerempanelmentlevelfetch_display_all_empanelment_levels();

while($empanelmentlevelrows = mysqli_fetch_array($empanelmentlevelresult))
{
	$OfficerEmpanelmentLevels = array();
	$OfficerEmpanelmentLevels['Level_type'] = $empanelmentlevelrows['Level_type'];
	array_push($empanelmentlevelresponse, $OfficerEmpanelmentLevels);
}
print(json_encode(array("status" => "true" , "message" => "Successfully displayed the Empanelment Level Options!" , "EmpanelmentLevel" => $empanelmentlevelresponse),JSON_PRETTY_PRINT));
	
if($officerempanelmentlevel_connection == true)
{
	mysqli_close($officerempanelmentlevel_connection);
}

?>
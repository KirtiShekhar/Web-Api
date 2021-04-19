<?php

/* database service script to fetch all result from database table */

include('officerempanelmentstatusfetch_db_function.php');

$officerempanelmentstatusresponse = array();
$officerempanelmentstatusresult = officerempanelmentstatusfetch_display_all_empanelment_status();

while($officerempanelmentstatusrows = mysqli_fetch_array($officerempanelmentstatusresult))
{
	$OfficerEmpanelmentStatus = array();
	$OfficerEmpanelmentStatus['enpanelment_status_value'] = $officerempanelmentstatusrows['enpanelment_status_value'];
	array_push($officerempanelmentstatusresponse, $OfficerEmpanelmentStatus);
}
print(json_encode(array("status" => "true" , "message" => "Successfully displayed the Empanelment Status Options!" , "EmpanelmentStatus" => $officerempanelmentstatusresponse),JSON_PRETTY_PRINT));
	
if($officerempanelmentstatus_connection == true)
{
	mysqli_close($officerempanelmentstatus_connection);
}

?>



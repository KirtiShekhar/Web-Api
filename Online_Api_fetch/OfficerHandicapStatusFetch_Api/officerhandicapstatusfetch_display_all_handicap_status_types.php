<?php

/* database service script to fetch all result from database table */

include('officerhandicapstatusfetch_db_function.php');

$handicapstatustypesresponse = array();
$handicapstatustypesresult = officerhandicapstatusfetch_display_all_handicap_status_types();

while($handicapstatustypesrows = mysqli_fetch_array($handicapstatustypesresult))
{
	$OfficerHandicapStatus['HandicapStatus'] = $handicapstatustypesrows['HandicapStatus'];
	array_push($handicapstatustypesresponse, $OfficerHandicapStatus);
}
print(json_encode(array("status" => "true" , "message" => "Successfully displayed the Handicap Statuses!" ,  "HandicapStatus" => $handicapstatustypesresponse),JSON_PRETTY_PRINT));

if($officerhandicapstatus_connection == true)
{
	mysqli_close($officerhandicapstatus_connection);
}

?>
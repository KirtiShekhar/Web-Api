<?php

/* database service script to fetch all result from database table */

include('officeridentitynumberfetch_db_function.php');

$identitynumberresponse = array();
$identitynumberresult = officeridentitynumberfetch_display_all_identity_numbers();

while($identitynumberrow = mysqli_fetch_array($identitynumberresult))
{
	$identitynumberresponse[] = ["OfficerUniqueId" => $identitynumberrow["OfficerUniqueId"]];
}
echo json_encode($identitynumberresponse);

if($officeridentitynumber_connection == true)
{
	mysqli_close($officeridentitynumber_connection);
}
?>
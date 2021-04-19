<?php

/* service to query and fetch the data */

include('officeridentitynumberfetch_db_config.php');

function officeridentitynumberfetch_display_all_identity_numbers()
{
	global $officeridentitynumber_connection;

	$identitynumberresult = mysqli_query($officeridentitynumber_connection,"SELECT OfficerUniqueId FROM jse_cf_officerid") or die("error".mysqli_error($officeridentitynumber_connection));

	return $identitynumberresult;
}

?>
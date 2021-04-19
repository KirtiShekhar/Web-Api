<?php

/* service to query and fetch the data */

include('officerhandicapstatusfetch_db_config.php');

function officerhandicapstatusfetch_display_all_handicap_status_types()
{
	global $officerhandicapstatus_connection;

	$handicapstatustypesresult = mysqli_query($officerhandicapstatus_connection,"SELECT HandicapStatus FROM jse_cf_handicapstatus") or die('error'.mysqli_error($officerhandicapstatus_connection));

	return $handicapstatustypesresult;
}

?>
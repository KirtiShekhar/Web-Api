<?php

/* service to query and fetch the data */

include('officerdomicilestatefetch_db_config.php');

function officerdomicilestatefetch_display_all_domicile_states()
{
	global $officerdomicilestate_connection;

	$officerdomicilestateresult = mysqli_query($officerdomicilestate_connection,"SELECT StateName FROM jse_cf_domicilestate") or die("error".mysqli_error($officerdomicilestate_connection));

	return $officerdomicilestateresult;
}

?>
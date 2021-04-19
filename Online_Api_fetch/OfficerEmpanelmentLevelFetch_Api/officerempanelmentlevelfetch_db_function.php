<?php

/* service to query and fetch the data */

include('officerempanelmentlevelfetch_db_config.php');

function officerempanelmentlevelfetch_display_all_empanelment_levels()
{
	global $officerempanelmentlevel_connection;

	$empanelmentlevelresult = mysqli_query($officerempanelmentlevel_connection,"SELECT Level_type FROM jse_cf_empanelment_levels") or die(mysqli_error($officerempanelmentlevel_connection));

	return $empanelmentlevelresult;
}

?>
<?php

/* service to query and fetch the data */

include('officerempanelmentstatusfetch_db_config.php');

function officerempanelmentstatusfetch_display_all_empanelment_status()
{
	global $officerempanelmentstatus_connection;

	$officerempanelmentstatusresult = mysqli_query($officerempanelmentstatus_connection,"SELECT enpanelment_status_value FROM jse_cf_empanelment_status") or die(mysqli_error($officerempanelmentstatus_connection));

	return $officerempanelmentstatusresult;
}

?>
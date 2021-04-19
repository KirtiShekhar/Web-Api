<?php

/* service to query and fetch the data */

include('officerpostinglocationfetch_db_config.php');

function officerpostinglocation_display_all_locations_name()
{
	global $officerpostinglocation_connection;

	$postinglocationresult = mysqli_query($officerpostinglocation_connection,"SELECT LocationDescription FROM jse_cf_locations WHERE TypeOfCode IN ('P','PD') ORDER BY MinDeptCode ASC") or die(mysqli_error($officerpostinglocation_connection));

	return $postinglocationresult;
}

?>
<?php

/* service to query and fetch the data */

include('officerpostingministryfetch_db_config.php');

function officerpostingministry_display_all_ministry_name()
{
	global $officerpostingministry_connection;

	$postingministryresult = mysqli_query($officerpostingministry_connection,"SELECT MinistryDescription FROM jse_cf_ministry WHERE TypeOfCode='M' ORDER BY MinDeptCode ASC") or die(mysqli_error($officerpostingministry_connection));

	return $postingministryresult;
}

?>
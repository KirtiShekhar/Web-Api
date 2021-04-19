<?php

/* service to query and fetch the data */

include('officerdivisionfetch_db_config.php');

function officerdivisionfetch_display_all_division_types()
{
	global $officerdivision_connection;

	$officerdivisionresult = mysqli_query($officerdivision_connection,"SELECT DivisionDesc from jse_cf_division") or die("error".mysqli_error($officerdivision_connection));

	return $officerdivisionresult;
}

?>
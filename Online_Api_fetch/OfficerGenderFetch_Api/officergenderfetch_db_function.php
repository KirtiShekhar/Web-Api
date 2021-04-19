<?php

/* service to query and fetch the data */

include('officergenderfetch_db_config.php');

function officergenderfetch_display_all_gender_names()
{
	global $officergender_connection;

	$officergenderresult = mysqli_query($officergender_connection,"SELECT * FROM jse_cf_gender") or die("error".mysqli_error($officergender_connection));

	return $officergenderresult;
}

?>
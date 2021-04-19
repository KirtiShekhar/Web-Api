<?php

/* service to query and fetch the data */

include('officerlanguagesfetch_db_config.php');

function officerlanguagesfetch_display_all_languages_knowns()
{
	global $officerlanguages_connection;

	$officerlanguagesresult = mysqli_query($officerlanguages_connection,"SELECT Languages_names FROM jse_cf_languages") or die("fetch_error".mysqli_error($officerlanguages_connection));

	return $officerlanguagesresult;
}

?>
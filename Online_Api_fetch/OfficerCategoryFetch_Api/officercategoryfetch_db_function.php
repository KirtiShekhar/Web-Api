<?php

/* service to query and fetch the data */

include('officercategoryfetch_db_config.php');

function officercategoryfetch_display_all_category_types()
{
	global $officercategory_connection;

	$categorytypesresult = mysqli_query($officercategory_connection,"SELECT CategoryDesc FROM jse_cf_category") or die(mysqli_error($officercategory_connection));

	return $categorytypesresult;
}

?>
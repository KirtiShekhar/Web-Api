<?php

/* service to query and fetch the data */

include('officerdebartmenttypefetch_db_config.php');

function officerdepartmenttypefetch_display_all_departments_typescode()
{
	global $officerpostingdepartmenttype_connection;

	$postingdepartmenttyperesult = mysqli_query($officerpostingdepartmenttype_connection,"SELECT debartment_type_value FROM jse_cf_debartment_type") or die(mysqli_error($officerpostingdepartmenttype_connection));

	return $postingdepartmenttyperesult;
}

?>
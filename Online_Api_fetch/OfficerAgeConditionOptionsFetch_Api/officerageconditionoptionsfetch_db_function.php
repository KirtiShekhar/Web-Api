<?php

/* service to query and fetch the data */

include('officerageconditionoptionsfetch_db_config.php');

function officerageconditionsfetch_display_all_age_conditions()
{
	global $officerageconditions_connection;

	$officerageconditionsresult = mysqli_query($officerageconditions_connection,"SELECT condition_description FROM age_condition_options") or die("error".mysqli_error($officerageconditions_connection));

	return $officerageconditionsresult;
}

?>
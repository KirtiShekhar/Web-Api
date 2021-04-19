<?php

/* service to query and fetch the data */

include('officerpostingdepartmentfetch_db_config.php');

function officercategoryfetch_display_all_category_types()
{
	global $officerpostingdepartment_connection;

	$postingdepartmentresult = mysqli_query($officerpostingdepartment_connection,"SELECT DepartmentDescription FROM jse_cf_department WHERE TypeOfCode='D' ORDER BY MinDeptCode ASC") or die(mysqli_error($officerpostingdepartment_connection));

	return $postingdepartmentresult;
}

?>
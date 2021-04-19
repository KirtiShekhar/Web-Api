<?php

/* service to query and fetch the data */

include('officerdesignationfetch_db_config.php');

function officerdesignationfetch_display_all_designation_names()
{
	global $officerdesignation_connection;

	$officerdesignationresult = mysqli_query($officerdesignation_connection,"SELECT DesignationDesc from JSE_CF_Designation") or die('error'.mysqli_error($officerdesignation_connection));

	return $officerdesignationresult;
}

?>
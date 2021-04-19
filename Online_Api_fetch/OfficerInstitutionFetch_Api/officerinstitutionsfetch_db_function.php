<?php

/* service to query and fetch the data */

include('officerinstitutionsfetch_db_config.php');

function officerinstitutionsfetch_display_all_institution_names()
{
	global $officerinstitution_connection;

	$officerinstitutionresult = mysqli_query($officerinstitution_connection,"SELECT InstitutionDesc from jse_cf_institution") or die("error".mysqli_error($officerinstitution_connection));

	return $officerinstitutionresult;
}

?>
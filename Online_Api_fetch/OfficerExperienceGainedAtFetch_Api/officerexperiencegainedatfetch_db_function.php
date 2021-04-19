<?php

/* service to query and fetch the data */

include('officerexperiencegainedatfetch_db_config.php');

function officerexperiencegainedatfetch_display_all_gainedat_options()
{
	global $officerexperiencegainedat_connection;

	$officerexperiencegainedatresult = mysqli_query($officerexperiencegainedat_connection,"SELECT ExperienceGainedOption FROM experiencegainedatoption") or die(mysqli_error($officerexperiencegainedat_connection));

	return $officerexperiencegainedatresult;
}

?>
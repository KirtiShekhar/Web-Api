<?php

/* service to query and fetch the data */

include('officerexperiencelevelfetch_db_config.php');

function officerexperiencelevelfetch_display_all_experience_level()
{
	global $officerexperiencelevel_connection;

	$officerexperiencelevelresult = mysqli_query($officerexperiencelevel_connection,"SELECT Experience_Level_type FROM jse_cf_experience_levels") or die(mysqli_error($officerexperiencelevel_connection));

	return $officerexperiencelevelresult;
}

?>
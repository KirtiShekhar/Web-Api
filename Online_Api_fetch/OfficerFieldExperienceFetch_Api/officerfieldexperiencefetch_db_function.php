<?php

/* service to query and fetch the data */

include('officerfieldexperiencefetch_db_config.php');

function officerfieldexperiencefetch_display_all_field_experience_names()
{
	global $officerfieldexperience_connection;

	$officerfieldexperienceresult = mysqli_query($officerfieldexperience_connection,"SELECT MajorExperienceDescription FROM jse_cf_fieldexperience_major") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officerfieldexperienceresult;
}

function officermajorfieldexperiencefetch_display_all_field_major_experience_names()
{
	global $officerfieldexperience_connection;

	$officermajorfieldexperienceresult = mysqli_query($officerfieldexperience_connection,
		"SELECT MajorExperienceDescription FROM jse_cf_fieldexperience_major GROUP BY MajorCode ASC ORDER BY MajorExperienceDescription ASC") or die('error'.mysqli_error($officerfieldexperience_connection));

	return $officermajorfieldexperienceresult;
}
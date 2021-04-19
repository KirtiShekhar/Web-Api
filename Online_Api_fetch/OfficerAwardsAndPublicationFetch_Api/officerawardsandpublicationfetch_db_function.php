<?php

/* service to query and fetch the data */

include('officerawardsandpublicationfetch_db_config.php');

function officerawardsandpublicationfetch_display_awards_and_publications_types()
{
	global $officerawardsandpublication_connection;

	$awardsandpublicationstypesresult = mysqli_query($officerawardsandpublication_connection,"SELECT AP_TypeDesc FROM jse_cf_ap_type") or die('error'.mysqli_error($officerawardsandpublication_connection));

	return $awardsandpublicationstypesresult;
}

function officerawardsandpublicationfetch_display_awards_and_publications_levels()
{
	global $officerawardsandpublication_connection;

	$awardsandpublicationsLevelsresult = mysqli_query($officerawardsandpublication_connection,"SELECT AP_LevelDesc FROM jse_cf_ap_Level") or die('error'.mysqli_error($officerawardsandpublication_connection));

	return $awardsandpublicationsLevelsresult;
}
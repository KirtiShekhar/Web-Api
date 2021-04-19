<?php

/* service to query and fetch the data */

include('OfficerDetailsMoreFieldsFetch_db_config.php');

function officerdetailsnationalityfetch_display_all_nationality_types()
{
	global $officerdetailsmorefields_connection;

	$officerdetailsnationalityresult = mysqli_query($officerdetailsmorefields_connection,"SELECT nationalityname FROM jse_cf_nationality") or die("error".mysqli_error($officerdetailsmorefields_connection));

	return $officerdetailsnationalityresult;
}

function officerdetailsbloodgroupfetch_display_all_bloodgroups_values()
{
	global $officerdetailsmorefields_connection;

	$officerdetailsbloodgroupresult = mysqli_query($officerdetailsmorefields_connection,"SELECT bloodgroupvalue FROM jse_cf_blood_group") or die("error".mysqli_error($officerdetailsmorefields_connection));

	return $officerdetailsbloodgroupresult;
}

function officerdetailsoccupationfetch_display_all_occupation_names()
{
	global $officerdetailsmorefields_connection;

	$officerdetailsoccupationresult = mysqli_query($officerdetailsmorefields_connection,"SELECT occupationname FROM jse_cf_occupation") or die("error".mysqli_error($officerdetailsmorefields_connection));

	return $officerdetailsoccupationresult;
}

function officerdetailsreligionfetch_display_all_religion_names()
{
	global $officerdetailsmorefields_connection;

	$officerdetailsreligionresult = mysqli_query($officerdetailsmorefields_connection,"SELECT religionname FROM jse_cf_religion") or die("error".mysqli_error($officerdetailsmorefields_connection));

	return $officerdetailsreligionresult;
}

?>
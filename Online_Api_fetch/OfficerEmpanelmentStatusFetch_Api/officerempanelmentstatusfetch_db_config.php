<?php

/* database configuration file */

define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_DATABASE","android_application_database_internship");

$officerempanelmentstatus_connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

if($officerempanelmentstatus_connection == false)
{
	echo "no database connection".mysqli_connect_user($officerempanelmentstatus_connection);
}

?>
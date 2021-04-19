<?php

/* database connection file */

define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_DATABASE","android_application_database_internship");

$officerlanguages_connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

if($officerlanguages_connection == false)
{
	echo "no database coonection".mysqli_connect_error($officerlanguages_connection);
}

?>
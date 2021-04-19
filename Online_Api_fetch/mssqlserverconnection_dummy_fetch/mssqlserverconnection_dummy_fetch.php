<?php

/* Sql Server database configuration file */

$serverName = "LAPTOP-AEJBI47Q\\sqlexpress"; //serverName\instanceName
$connectionInformation = array("Database" => "Supremo_Internship_Application" , "UID"=>"kirti_shekhar", "PWD"=>"" );
$mssqlserverconnection = sqlsrv_connect($serverName, $connectionInformation);

if($mssqlserverconnection)
{
	echo "Connection with Sql Server is succesfully established" . "<br/>" . "<br/>";
}
else
{
	print("Connection with Sql Server could not be established") . "<br/>" . "<br/>";
	die(print_r(sqlsrv_errors(),true));
}

?>
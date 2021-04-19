<?php
$myServer = "LAPTOP-AEJBI47Q\KIRTI_SHEKHAR";

//connection to the database
$connection = array("Database"=>"Supremo_Internship_Application","UID"=>"","PWD"=>"");
$phpsqlconnection = sqlsrv_connect($myServer,$connection);
if($phpsqlconnection)
{
	print('connection successfull');
}
else
{
	print('connection with mssql is not eastablished');
	die(print_r(sqlsrv_errors(),true));
}

/*
//select a database to work with
$selected = mssql_select_db($myDB, $dbhandle)
  or die("Couldn't open database $myDB");

//declare the SQL statement that will query the database
$query = "SELECT Gender_name ";
$query .= "FROM jse_cf_gender ";

//execute the SQL query and return records
$result = mssql_query($query);

$numRows = mssql_num_rows($result);
echo "<h1>" . $numRows . " Row" . ($numRows == 1 ? "" : "s") . " Returned </h1>";

//display the results
while($row = mssql_fetch_array($result))
{
  echo "<li>" . $row["Gender_name"]. "</li>";
}
//close the connection
mssql_close($dbhandle);
*/
?>
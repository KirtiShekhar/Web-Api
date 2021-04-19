<?php

/* service to query and fetch the data from pis_personnel table */

include('Admin_User_Country_States_City_db_config.php');

function AdminUserInfoDisplayAllCountries()
{
	$AdminUserCountrySql = '';
	global $Admin_User_Country_States_City_db_connection;

$AdminUserCountrySql = "SELECT DISTINCT country FROM admin_user_resident_basic_info ORDER BY country ASC";

$AdminUserCountryStatesCityResult = mysqli_query($Admin_User_Country_States_City_db_connection,$AdminUserCountrySql) or die("error in fetching all details".mysqli_error($Admin_User_Country_States_City_db_connection));
return $AdminUserCountryStatesCityResult;
}

function AdminUserInfoDisplayAllStatesBasedOnCountries()
{
	$AdminUserStatesSql = '';
	global $Admin_User_Country_States_City_db_connection;

$AdminUserStatesSql.= "SELECT DISTINCT capital AS States FROM admin_user_resident_basic_info WHERE 1 = 1 ";

if(isset($_GET['country']))
{

	$AdminUserCountry = $_GET['country'];
	$AdminUserStatesSql.= " AND country = '".$AdminUserCountry."'";
}
$AdminUserStatesSql.= " ORDER BY capital ASC";
$AdminUserCountryStatesCityResult = mysqli_query($Admin_User_Country_States_City_db_connection,$AdminUserStatesSql) or die("error in fetching all details".mysqli_error($Admin_User_Country_States_City_db_connection));
return $AdminUserCountryStatesCityResult;
}

?>
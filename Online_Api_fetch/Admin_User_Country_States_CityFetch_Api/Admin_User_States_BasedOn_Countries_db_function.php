<?php

/* service to query and fetch the data from pis_personnel table */

include('Admin_User_Country_States_City_db_config.php');

function AdminUserInfoDisplayAllStatesBasedOnCountriesAfghanistan()
{
	global $Admin_User_Country_States_City_db_connection;

$AdminUserStatesSql= "SELECT DISTINCT capital AS AfghanistanStates FROM admin_user_resident_basic_info WHERE 1 = 1 AND country = 'Afghanistan' ORDER BY capital ASC";

$AdminUserCountryStatesCityResult = mysqli_query($Admin_User_Country_States_City_db_connection,$AdminUserStatesSql) or die("error in fetching all details".mysqli_error($Admin_User_Country_States_City_db_connection));
return $AdminUserCountryStatesCityResult;
}

function AdminUserInfoDisplayAllStatesBasedOnCountriesIndia()
{
	global $Admin_User_Country_States_City_db_connection;

$AdminUserStatesSql= "SELECT DISTINCT capital AS IndiaStates FROM admin_user_resident_basic_info WHERE 1 = 1 AND country = 'India' ORDER BY capital ASC";

$AdminUserCountryStatesCityResult = mysqli_query($Admin_User_Country_States_City_db_connection,$AdminUserStatesSql) or die("error in fetching all details".mysqli_error($Admin_User_Country_States_City_db_connection));
return $AdminUserCountryStatesCityResult;
}

function AdminUserInfoDisplayAllStatesBasedOnCountriesAustralia()
{
	global $Admin_User_Country_States_City_db_connection;

$AdminUserStatesSql= "SELECT DISTINCT capital AS AustraliaStates FROM admin_user_resident_basic_info WHERE 1 = 1 AND country = 'Australia' ORDER BY capital ASC";

$AdminUserCountryStatesCityResult = mysqli_query($Admin_User_Country_States_City_db_connection,$AdminUserStatesSql) or die("error in fetching all details".mysqli_error($Admin_User_Country_States_City_db_connection));
return $AdminUserCountryStatesCityResult;
}

function AdminUserInfoDisplayAllStatesBasedOnCountriesGermany()
{
	global $Admin_User_Country_States_City_db_connection;

$AdminUserStatesSql= "SELECT DISTINCT capital AS GermanyStates FROM admin_user_resident_basic_info WHERE 1 = 1 AND country = 'Germany' ORDER BY capital ASC";

$AdminUserCountryStatesCityResult = mysqli_query($Admin_User_Country_States_City_db_connection,$AdminUserStatesSql) or die("error in fetching all details".mysqli_error($Admin_User_Country_States_City_db_connection));
return $AdminUserCountryStatesCityResult;
}

function AdminUserInfoDisplayAllStatesBasedOnCountriesFrance()
{
	global $Admin_User_Country_States_City_db_connection;

$AdminUserStatesSql= "SELECT DISTINCT capital AS FranceStates FROM admin_user_resident_basic_info WHERE 1 = 1 AND country = 'France' ORDER BY capital ASC";

$AdminUserCountryStatesCityResult = mysqli_query($Admin_User_Country_States_City_db_connection,$AdminUserStatesSql) or die("error in fetching all details".mysqli_error($Admin_User_Country_States_City_db_connection));
return $AdminUserCountryStatesCityResult;
}

function AdminUserInfoDisplayAllStatesBasedOnCountriesJapan()
{
	global $Admin_User_Country_States_City_db_connection;

$AdminUserStatesSql= "SELECT DISTINCT capital AS JapanStates FROM admin_user_resident_basic_info WHERE 1 = 1 AND country = 'Japan' ORDER BY capital ASC";

$AdminUserCountryStatesCityResult = mysqli_query($Admin_User_Country_States_City_db_connection,$AdminUserStatesSql) or die("error in fetching all details".mysqli_error($Admin_User_Country_States_City_db_connection));
return $AdminUserCountryStatesCityResult;
}

function AdminUserInfoDisplayAllStatesBasedOnCountriesUnitedStates()
{
	global $Admin_User_Country_States_City_db_connection;

$AdminUserStatesSql= "SELECT DISTINCT capital AS UnitedStatesStates FROM admin_user_resident_basic_info WHERE 1 = 1 AND country = 'United States' ORDER BY capital ASC";

$AdminUserCountryStatesCityResult = mysqli_query($Admin_User_Country_States_City_db_connection,$AdminUserStatesSql) or die("error in fetching all details".mysqli_error($Admin_User_Country_States_City_db_connection));
return $AdminUserCountryStatesCityResult;
}

function AdminUserInfoDisplayAllStatesBasedOnCountriesArgentina()
{
	global $Admin_User_Country_States_City_db_connection;

$AdminUserStatesSql= "SELECT DISTINCT capital AS ArgentinaStates FROM admin_user_resident_basic_info WHERE 1 = 1 AND country = 'Argentina' ORDER BY capital ASC";

$AdminUserCountryStatesCityResult = mysqli_query($Admin_User_Country_States_City_db_connection,$AdminUserStatesSql) or die("error in fetching all details".mysqli_error($Admin_User_Country_States_City_db_connection));
return $AdminUserCountryStatesCityResult;
}

function AdminUserInfoDisplayAllStatesBasedOnCountriesBrazil()
{
	global $Admin_User_Country_States_City_db_connection;

$AdminUserStatesSql= "SELECT DISTINCT capital AS BrazilStates FROM admin_user_resident_basic_info WHERE 1 = 1 AND country = 'Brazil' ORDER BY capital ASC";

$AdminUserCountryStatesCityResult = mysqli_query($Admin_User_Country_States_City_db_connection,$AdminUserStatesSql) or die("error in fetching all details".mysqli_error($Admin_User_Country_States_City_db_connection));
return $AdminUserCountryStatesCityResult;
}

function AdminUserInfoDisplayAllStatesBasedOnCountriesSpain()
{
	global $Admin_User_Country_States_City_db_connection;

$AdminUserStatesSql= "SELECT DISTINCT capital AS SpainStates FROM admin_user_resident_basic_info WHERE 1 = 1 AND country = 'Spain' ORDER BY capital ASC";

$AdminUserCountryStatesCityResult = mysqli_query($Admin_User_Country_States_City_db_connection,$AdminUserStatesSql) or die("error in fetching all details".mysqli_error($Admin_User_Country_States_City_db_connection));
return $AdminUserCountryStatesCityResult;
}

?>
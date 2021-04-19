<?php

/* database service script to fetch all result from database table */

include('Admin_User_Country_States_City_db_function.php');

$AdminUserCountryStatesCityresponse = array();
$AdminUserCountryStatesCityResult = AdminUserInfoDisplayAllStatesBasedOnCountries();

while($AdminUserCountryStatesCityrow = mysqli_fetch_array($AdminUserCountryStatesCityResult))
{
	$AdminUserStatesList = array();
	$AdminUserStatesList['States'] = $AdminUserCountryStatesCityrow["States"];
	array_push($AdminUserCountryStatesCityresponse, $AdminUserStatesList);
}
print(json_encode(array( "status" => "true","message" => "Successfully displayed the States Names!", "AdminUserStates" => $AdminUserCountryStatesCityresponse),JSON_PRETTY_PRINT));

if($Admin_User_Country_States_City_db_connection == true)
{
	mysqli_close($Admin_User_Country_States_City_db_connection);
}
?>
<?php

/* database service script to fetch all result from database table */

include('Admin_User_States_BasedOn_Countries_db_function.php');

$AdminUserCountryStatesCityresponse = array();
$AdminUserCountryStatesCityResult = AdminUserInfoDisplayAllStatesBasedOnCountriesFrance();

while($AdminUserCountryStatesCityrow = mysqli_fetch_array($AdminUserCountryStatesCityResult))
{
	$AdminUserStatesList = array();
	$AdminUserStatesList['FranceStates'] = $AdminUserCountryStatesCityrow["FranceStates"];
	array_push($AdminUserCountryStatesCityresponse, $AdminUserStatesList);
}
print(json_encode(array( "status" => "true","message" => "Successfully displayed the States Names!", "AdminUserStates" => $AdminUserCountryStatesCityresponse),JSON_PRETTY_PRINT));

if($Admin_User_Country_States_City_db_connection == true)
{
	mysqli_close($Admin_User_Country_States_City_db_connection);
}
?>
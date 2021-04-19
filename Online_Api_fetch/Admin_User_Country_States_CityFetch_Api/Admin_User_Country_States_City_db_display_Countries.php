<?php

/* database service script to fetch all result from database table */

include('Admin_User_Country_States_City_db_function.php');

$AdminUserCountryStatesCityresponse = array();
$AdminUserCountryStatesCityResult = AdminUserInfoDisplayAllCountries();

while($AdminUserCountryStatesCityrow = mysqli_fetch_array($AdminUserCountryStatesCityResult))
{
	$AdminUserCountryList = array();
	$AdminUserCountryList['country'] = $AdminUserCountryStatesCityrow["country"];
	array_push($AdminUserCountryStatesCityresponse, $AdminUserCountryList);
}
print(json_encode(array( "status" => "true","message" => "Successfully displayed the Country Names!", "AdminUserCountry" => $AdminUserCountryStatesCityresponse),JSON_PRETTY_PRINT));

if($Admin_User_Country_States_City_db_connection == true)
{
	mysqli_close($Admin_User_Country_States_City_db_connection);
}
?>
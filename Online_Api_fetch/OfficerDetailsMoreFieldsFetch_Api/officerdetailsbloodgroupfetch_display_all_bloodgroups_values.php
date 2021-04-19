<?php

/* database service script to fetch all result from database table */

include('OfficerDetailsMoreFieldsFetch_db_function.php');

$categorytypesresponse = array();
$officerdetailsbloodgroupresult = officerdetailsbloodgroupfetch_display_all_bloodgroups_values();

while($categorytypesrows = mysqli_fetch_array($officerdetailsbloodgroupresult))
{
	$BloodGroupsTypesValues = array();
	$BloodGroupsTypesValues['bloodgroupvalue'] = $categorytypesrows['bloodgroupvalue'];
	array_push($categorytypesresponse, $BloodGroupsTypesValues);
}
print(json_encode(array("status" => "true" , "message" => "Successfully displayed the All Blood Groups!" , "BloodGroups" => $categorytypesresponse),JSON_PRETTY_PRINT));
	
if($officerdetailsmorefields_connection == true)
{
	mysqli_close($officerdetailsmorefields_connection);
}

?>
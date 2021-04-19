<?php

/* database service script to fetch all result from database table */

include('officerpostingdepartmentfetch_db_function.php');

$postingdepartmentresponse = array();
$postingdepartmentresult = officercategoryfetch_display_all_category_types();

while($postingdepartmentrows = mysqli_fetch_array($postingdepartmentresult))
{
	$OfficerDepartmentNames = array();
	$OfficerDepartmentNames['DepartmentDescription'] = $postingdepartmentrows['DepartmentDescription'];
	array_push($postingdepartmentresponse, $OfficerDepartmentNames);
}
print(json_encode(array("status" => "true" , "message" => "Successfully displayed the Department Names!" , "DepartmentDescriptionNames" => $postingdepartmentresponse),JSON_PRETTY_PRINT));
	
if($officerpostingdepartment_connection == true)
{
	mysqli_close($officerpostingdepartment_connection);
}

?>
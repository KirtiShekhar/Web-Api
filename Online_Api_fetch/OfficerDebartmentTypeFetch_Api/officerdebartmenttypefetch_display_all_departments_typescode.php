<?php

/* database service script to fetch all result from database table */

include('officerdebartmenttypefetch_db_function.php');

$postingdepartmenttyperesponse = array();
$postingdepartmenttyperesult = officerdepartmenttypefetch_display_all_departments_typescode();

while($postingdepartmenttyperows = mysqli_fetch_array($postingdepartmenttyperesult))
{
	$OfficerDepartmentTypeCode = array();
	$OfficerDepartmentTypeCode['debartment_type_value'] = $postingdepartmenttyperows['debartment_type_value'];
	array_push($postingdepartmenttyperesponse, $OfficerDepartmentTypeCode);
}
print(json_encode(array("status" => "true" , "message" => "Successfully displayed the Debartment Type Type Code!" , "Debartment Type" => $postingdepartmenttyperesponse),JSON_PRETTY_PRINT));
	
if($officerpostingdepartmenttype_connection == true)
{
	mysqli_close($officerpostingdepartmenttype_connection);
}

?>
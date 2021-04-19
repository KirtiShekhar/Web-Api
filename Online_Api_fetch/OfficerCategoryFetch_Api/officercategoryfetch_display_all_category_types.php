<?php

/* database service script to fetch all result from database table */

include('officercategoryfetch_db_function.php');

$categorytypesresponse = array();
$categorytypesresult = officercategoryfetch_display_all_category_types();

while($categorytypesrows = mysqli_fetch_array($categorytypesresult))
{
	$CategoryTypesValues = array();
	$CategoryTypesValues['CategoryDesc'] = $categorytypesrows['CategoryDesc'];
	array_push($categorytypesresponse, $CategoryTypesValues);
}
print(json_encode(array("status" => "true" , "message" => "Successfully displayed the category types!" , "Category" => $categorytypesresponse),JSON_PRETTY_PRINT));
	
if($officercategory_connection == true)
{
	mysqli_close($officercategory_connection);
}

?>
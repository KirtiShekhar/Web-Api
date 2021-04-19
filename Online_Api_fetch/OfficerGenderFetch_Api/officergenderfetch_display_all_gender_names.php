<?php

/* database service script to fetch all result from database table */

include('officergenderfetch_db_function.php');

$officergenderresponse = array();
$officergenderresult = officergenderfetch_display_all_gender_names();

while($officergenderrows = mysqli_fetch_array($officergenderresult))
{
	$GenderTypes = array();
	$GenderTypes['Gender_name'] = $officergenderrows['Gender_name'];
	array_push($officergenderresponse, $GenderTypes);
}
print(json_encode(array("status" => "true" , "message" => "Successfully displayed the Gender Types!" ,  "Gender" => $officergenderresponse),JSON_PRETTY_PRINT));

if($officergender_connection == true)
{
	mysqli_close($officergender_connection);
}

?>
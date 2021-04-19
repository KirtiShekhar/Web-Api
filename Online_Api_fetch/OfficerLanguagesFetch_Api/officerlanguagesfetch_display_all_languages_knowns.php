<?php

/* database service script to fetch all result from database table */

include('officerlanguagesfetch_db_function.php');

$officerlanguagesresponse = array();
$officerlanguagesresult = officerlanguagesfetch_display_all_languages_knowns();

while($officerlanguagesrows = mysqli_fetch_array($officerlanguagesresult))
{
	$LanguagesKnown = array();
	$LanguagesKnown['Languages_names'] = $officerlanguagesrows['Languages_names'];
	array_push($officerlanguagesresponse, $LanguagesKnown);
}
print(json_encode(array("status" => "true" , "message" => "Successfully displayed the Languages Names!" , "Languages" => $officerlanguagesresponse),JSON_PRETTY_PRINT));

if($officerlanguages_connection == true)
{
	mysqli_close($officerlanguages_connection);
}

?>
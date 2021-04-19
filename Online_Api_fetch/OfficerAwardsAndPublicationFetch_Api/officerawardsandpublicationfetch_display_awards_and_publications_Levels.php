<?php

/* database service script to fetch all result from database tables */

include('officerawardsandpublicationfetch_db_function.php');

$awardsandpublicationsLevelsresponse = array();
$awardsandpublicationsLevelsresult = officerawardsandpublicationfetch_display_awards_and_publications_levels();

while($awardsandpublicationsLevelsrows = mysqli_fetch_array($awardsandpublicationsLevelsresult))
{
	$AwardsandPublicationsLevels = array();
	$AwardsandPublicationsLevels['AP_LevelDesc'] = $awardsandpublicationsLevelsrows['AP_LevelDesc'];
	array_push($awardsandpublicationsLevelsresponse, $AwardsandPublicationsLevels);
}

print(json_encode(array("status" => "true" , "message" => "Successfully displayed the Awarads And Publication Levels!" , "Awards_Publications_Levels" => $awardsandpublicationsLevelsresponse),JSON_PRETTY_PRINT));

if($officerawardsandpublication_connection == true)
{
	mysqli_close($officerawardsandpublication_connection);
}

?>
<?php

/* database service script to fetch all result from database tables */

include('officerawardsandpublicationfetch_db_function.php');

$awardsandpublicationstypesresponse = array();
$awardsandpublicationstypesresult = officerawardsandpublicationfetch_display_awards_and_publications_types();

while($awardsandpublicationstypesrows = mysqli_fetch_array($awardsandpublicationstypesresult))
{
	$AwardsandPublicationsTypes = array();
	$AwardsandPublicationsTypes['AP_TypeDesc'] = $awardsandpublicationstypesrows['AP_TypeDesc'];
	array_push($awardsandpublicationstypesresponse, $AwardsandPublicationsTypes);
}

print(json_encode(array("status" => "true" , "message" => "Successfully displayed the Awarads And Publication Types!" , "Awards_Publications_Types" => $awardsandpublicationstypesresponse),JSON_PRETTY_PRINT));

if($officerawardsandpublication_connection == true)
{
	mysqli_close($officerawardsandpublication_connection);
}

?>
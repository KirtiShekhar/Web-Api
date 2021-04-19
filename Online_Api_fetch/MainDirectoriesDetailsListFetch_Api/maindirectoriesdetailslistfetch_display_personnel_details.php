<?php

/* database service script to fetch all result from database table */

include('maindirectoriesdetailslistfetch_db_function.php');

$maindirectorypersonneldetailslistresponse = array();
$maindirectorypersonneldetailslistresult = maindirectoriesdetailslistfetch_display_personnel_details();

while($maindirectorypersonneldetailslistrows = mysqli_fetch_array($maindirectorypersonneldetailslistresult))
{
	array_push($maindirectorypersonneldetailslistresponse, array(
		'id' => $maindirectorypersonneldetailslistrows['id'],
		'batch_year' => $maindirectorypersonneldetailslistrows['batch_year'],
		'OfficerId' => $maindirectorypersonneldetailslistrows['OfficerId'],
		'Service_Code' => $maindirectorypersonneldetailslistrows['Service_Code'],
		'TitleDesc' => $maindirectorypersonneldetailslistrows['TitleDesc'],
		'FirstName' => $maindirectorypersonneldetailslistrows['FirstName'],
		'SurName' => $maindirectorypersonneldetailslistrows['SurName'],
		'StateName' => $maindirectorypersonneldetailslistrows['StateName'],
		'CadreStateName' => $maindirectorypersonneldetailslistrows['CadreStateName'],
		'Gender_name' => $maindirectorypersonneldetailslistrows['Gender_name'],
		'CategoryDesc' => $maindirectorypersonneldetailslistrows['CategoryDesc'],
		'SSDesc' => $maindirectorypersonneldetailslistrows['SSDesc'],
		'HandicapStatus' => $maindirectorypersonneldetailslistrows['HandicapStatus'],
		'recruitment_types' => $maindirectorypersonneldetailslistrows['recruitment_types'],
		'Languages_names' => $maindirectorypersonneldetailslistrows['Languages_names'],
		'mother_tongue_languages_name' => $maindirectorypersonneldetailslistrows['mother_tongue_languages_name']));
}
print(json_encode($maindirectorypersonneldetailslistresponse,JSON_PRETTY_PRINT));

if($maindirectoriesdetailslist_connection == true)
{
	mysqli_close($maindirectoriesdetailslist_connection);
}

?>
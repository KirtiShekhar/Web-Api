<?php

/* database service script to fetch all result from database table */

include('maindirectoriesdetailslistfetch_db_function.php');

$maindirectorycentraldeputationdetailslistresponse = array();
$maindirectorycentraldeputationdetailslistresult = maindirectoriesdetailslistfetch_display_centraldeputation_details();

while($maindirectorycentraldeputationdetailslistrows = mysqli_fetch_array($maindirectorycentraldeputationdetailslistresult))
{
	array_push($maindirectorycentraldeputationdetailslistresponse, array(
		'OfficerId' => $maindirectorycentraldeputationdetailslistrows['OfficerId'],
'batch_year' => $maindirectorycentraldeputationdetailslistrows['batch_year'],
'TitleDesc' => $maindirectorycentraldeputationdetailslistrows['TitleDesc'],
'FirstName' => $maindirectorycentraldeputationdetailslistrows['FirstName'],
'SurName' => $maindirectorycentraldeputationdetailslistrows['SurName'],
'tenure_type_types' => $maindirectorycentraldeputationdetailslistrows['tenure_type_types'],
'TenureBeginsOn' => $maindirectorycentraldeputationdetailslistrows['TenureBeginsOn'],
'TenureEndsOn' => $maindirectorycentraldeputationdetailslistrows['TenureEndsOn']));
}
print(json_encode($maindirectorycentraldeputationdetailslistresponse,JSON_PRETTY_PRINT));

if($maindirectoriesdetailslist_connection == true)
{
	mysqli_close($maindirectoriesdetailslist_connection);
}

?>
<?php

/* database service script to fetch all result from database table */

include('maindirectoriesdetailslistfetch_db_function.php');

$maindirectoryqualificationdetailslistresponse = array();
$maindirectoryqualificationdetailslistresult = maindirectoriesdetailslistfetch_display_qualification_details();

while($maindirectoryqualificationdetailslistrows = mysqli_fetch_array($maindirectoryqualificationdetailslistresult))
{
	array_push($maindirectoryqualificationdetailslistresponse, array(
		'OfficerId' => $maindirectoryqualificationdetailslistrows['OfficerId'],
        'batch_year' => $maindirectoryqualificationdetailslistrows['batch_year'],
        'TitleDesc' => $maindirectoryqualificationdetailslistrows['TitleDesc'],
        'FirstName' => $maindirectoryqualificationdetailslistrows['FirstName'],
        'SurName' => $maindirectoryqualificationdetailslistrows['SurName'],
        'DegreeFullDesc' => $maindirectoryqualificationdetailslistrows['DegreeFullDesc'],
        'DivisionDesc' => $maindirectoryqualificationdetailslistrows['DivisionDesc'],
        'InstitutionDesc' => $maindirectoryqualificationdetailslistrows['InstitutionDesc'],
        'SubjectDesc' => $maindirectoryqualificationdetailslistrows['SubjectDesc'],
        'UniversityDesc' =>  $maindirectoryqualificationdetailslistrows['UniversityDesc']));
}
print(json_encode($maindirectoryqualificationdetailslistresponse,JSON_PRETTY_PRINT));

if($maindirectoriesdetailslist_connection == true)
{
	mysqli_close($maindirectoriesdetailslist_connection);
}

?>

 












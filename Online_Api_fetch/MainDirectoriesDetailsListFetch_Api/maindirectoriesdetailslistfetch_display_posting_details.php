<?php

/* database service script to fetch all result from database table */

include('maindirectoriesdetailslistfetch_db_function.php');

$maindirectorypostingdetailslistresponse = array();
$maindirectorypostingdetailslistresult = maindirectoriesdetailslistfetch_display_posting_details();

while($maindirectorypostingdetailslistrows = mysqli_fetch_array($maindirectorypostingdetailslistresult))
{
	array_push($maindirectorypostingdetailslistresponse, array(
		'OfficerId' => $maindirectorypostingdetailslistrows['OfficerId'],
        'batch_year' => $maindirectorypostingdetailslistrows['batch_year'],
        'TitleDesc' => $maindirectorypostingdetailslistrows['TitleDesc'],
        'FirstName' => $maindirectorypostingdetailslistrows['FirstName'],
        'SurName' => $maindirectorypostingdetailslistrows['SurName'],
        'PostingAtType' => $maindirectorypostingdetailslistrows['PostingAtType'],
        'PostingTypeDesc' => $maindirectorypostingdetailslistrows['PostingTypeDesc'],
        'Level_type' => $maindirectorypostingdetailslistrows['Level_type'],
        'DesignationDesc' => $maindirectorypostingdetailslistrows['DesignationDesc'],              
        'DepartmentDescription' => $maindirectorypostingdetailslistrows['DepartmentDescription'], 
        'MinistryDescription'  => $maindirectorypostingdetailslistrows['MinistryDescription'],      
        'OfficeDescription' => $maindirectorypostingdetailslistrows['OfficeDescription'],                            
        'LocationDescription' => $maindirectorypostingdetailslistrows['LocationDescription'], 
        'DateFrom' => $maindirectorypostingdetailslistrows['DateFrom'],            
        'DateTo' => $maindirectorypostingdetailslistrows['DateTo'],              
        'ChargeNatureName' => $maindirectorypostingdetailslistrows['ChargeNatureName'], 
        'MajorExperienceDescription' => $maindirectorypostingdetailslistrows['MajorExperienceDescription'], 
        'MinorExperienceDescription' => $maindirectorypostingdetailslistrows['MinorExperienceDescription']));
}
print(json_encode($maindirectorypostingdetailslistresponse,JSON_PRETTY_PRINT));

if($maindirectoriesdetailslist_connection == true)
{
	mysqli_close($maindirectoriesdetailslist_connection);
}

?>
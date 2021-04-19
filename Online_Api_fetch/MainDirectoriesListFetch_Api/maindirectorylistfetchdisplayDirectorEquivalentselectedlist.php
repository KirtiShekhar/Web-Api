<?php

/* database service script to fetch all result from database table */

include('maindirectorylistfetch_db_function.php');

$maindirectorylistresponse = array();
$maindirectoryDirectorEquivalentlistresult = maindirectorylistfetch_display_DirectorEquivalent_list();

while($maindirectorylistrows = mysqli_fetch_array($maindirectoryDirectorEquivalentlistresult))
{
	array_push($maindirectorylistresponse, array(
'batch_year' => $maindirectorylistrows['batch_year'],
'Service_Code' => $maindirectorylistrows['Service_Code'],
'NAME' => $maindirectorylistrows['NAME'],  
'StateName' => $maindirectorylistrows['StateName'],       
'CadreStateName' => $maindirectorylistrows['CadreStateName'],
'Level_type' => $maindirectorylistrows['Level_type']));
}
print(json_encode($maindirectorylistresponse,JSON_PRETTY_PRINT));

if($maindirectorieslist_connection == true)
{
	mysqli_close($maindirectorieslist_connection);
}

?>
<?php

/* database service script to fetch all result from database table */

include('maindirectoryheaderlistfetch_db_function.php');

$maindirectoryheaderlistresponse = array();
$maindirectoryheaderlistresult = maindirectoryheaderlistfetch_display_all_directory_headerlist();

while($maindirectoryheaderlistrows = mysqli_fetch_array($maindirectoryheaderlistresult))
{
	array_push($maindirectoryheaderlistresponse, array(
		'Level_type' => $maindirectoryheaderlistrows['Level_type']));
}
print(json_encode($maindirectoryheaderlistresponse,JSON_PRETTY_PRINT));

if($maindirectoryheaderlist_connection == true)
{
	mysqli_close($maindirectoryheaderlist_connection);
}

?>
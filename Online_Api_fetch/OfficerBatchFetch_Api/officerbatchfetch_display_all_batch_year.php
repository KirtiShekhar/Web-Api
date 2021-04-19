<?php

/* database service script to fetch all result from database table */

include('officerbatchfetch_db_function.php');

$batchresponse = array();
$batchyearresult = officerbatchfetch_display_all_batch_year();

while($batchyearresultrow = mysqli_fetch_array($batchyearresult))
{
	$batchYear_Values = array();
	$batchYear_Values['batch_year'] = $batchyearresultrow["batch_year"];
	array_push($batchresponse, $batchYear_Values);
}
print(json_encode(array( "status" => "true","message" => "Successfully displayed the Batch Year Values!", "Batch_Year" => $batchresponse),JSON_PRETTY_PRINT));

if($officerbatch_connection == true)
{
	mysqli_close($officerbatch_connection);
}
?>
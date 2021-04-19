<?php

/* database service script to fetch all result from database table */

include('officercadrestatefetch_db_function.php');

$officercadrestateresponse = array();
$officercadrestateresult = officercadrestatefetch_display_all_cadres_states();

while($officercadrestaterow = mysqli_fetch_array($officercadrestateresult))
{
	$Cadre_States_Names = array();
	$Cadre_States_Names["StateCadreName"] = $cadresdifferentstatesrow["StateCadreName"];
	array_push($cadredifferentstatesresponse, $Cadre_States_Names);
}
print(json_encode(array("status" => "true","message" => "Successfully displayed the Cadre States Names!", "CadreStatesNames" => $cadredifferentstatesresponse),JSON_PRETTY_PRINT));

if($officercadre_connection == true)
{
	mysqli_close($officercadre_connection);
}
?>
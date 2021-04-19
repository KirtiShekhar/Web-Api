<?php

/* database service script to fetch all result from database table */

include('officercadrefetch_db_function.php');

$cadredifferentstatesresponse = array();
$cadredifferentstatesresult = officercadrefetch_display_all_cadres_different_states();

while($cadresdifferentstatesrow = mysqli_fetch_array($cadredifferentstatesresult))
{
	$Cadre_States_Names = array();
	$Cadre_States_Names["StateCadreName"] = $cadresdifferentstatesrow["StateCadreName"];
	array_push($cadredifferentstatesresponse, $Cadre_States_Names);
}
print(json_encode(array("status" => "true","message" => "Successfully displayed the Cadre States Names!", "CadreStates" => $cadredifferentstatesresponse),JSON_PRETTY_PRINT));

if($officercadre_connection == true)
{
	mysqli_close($officercadre_connection);
}

?>
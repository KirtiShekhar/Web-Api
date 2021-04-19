<?php

/* database service script to fetch all result from database table */

include('officerdivisionfetch_db_function.php');

$officerdivisionresponse = array();
$officerdivisionresult = officerdivisionfetch_display_all_division_types();

while($officerdivisionrows = mysqli_fetch_array($officerdivisionresult))
{
	$OfficerQualificationDivision = array();
	$OfficerQualificationDivision["DivisionDesc"] = $officerdivisionrows["DivisionDesc"];
	array_push($officerdivisionresponse, $OfficerQualificationDivision);

}
print(json_encode(array("status" => "true" , "message" => "Successfully displayed the Qualification Division Names!" ,  "QualificationDivision" => $officerdivisionresponse),JSON_PRETTY_PRINT));

if($officerdivision_connection == true)
{
	mysqli_close($officerdivision_connection);
}

?>
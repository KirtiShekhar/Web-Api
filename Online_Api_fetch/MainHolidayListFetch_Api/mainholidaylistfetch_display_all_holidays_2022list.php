<?php

/* database service script to fetch all result from database table */

include('mainholidaylistfetch_db_function.php');

$mainholidaylistresponse = array();
$mainholidaylist2022result = mainholidaylistfetch_display_all_holidays_2022list();

while($mainholidaylistrows = mysqli_fetch_array($mainholidaylist2022result))
{
	array_push($mainholidaylistresponse, array(
		'HolidayEvent' => $mainholidaylistrows['HolidayEvent'],
		'Date' => $mainholidaylistrows['Date'],
		'Day' => $mainholidaylistrows['Day'],
		'Month' => $mainholidaylistrows['Month'],
		'Year' => $mainholidaylistrows['Year'],
		'Type' => $mainholidaylistrows['Type'],
	));
}
print(json_encode($mainholidaylistresponse,JSON_PRETTY_PRINT));

if($mainholidaylist_connection == true)
{
	mysqli_close($mainholidaylist_connection);
}

?>
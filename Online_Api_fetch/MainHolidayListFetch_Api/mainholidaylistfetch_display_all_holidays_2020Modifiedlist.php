<?php

/* database service script to fetch all result from database table */

include('mainholidaylistfetch_db_function.php');

$mainholidaylistresponse = array();
$mainholidaylist2020ModifiedHolidayresult = mainholidaylistfetch_display_all_holidays_2020Modifiedlist();

while($mainholidaylistrows = mysqli_fetch_array($mainholidaylist2020ModifiedHolidayresult))
{
	array_push($mainholidaylistresponse, array(
		'FullDate' => $mainholidaylistrows['FullDate'],
		'AllHolidaydayList2020' => $mainholidaylistrows['AllHolidaydayList2020']
	));
}
print(json_encode($mainholidaylistresponse,JSON_PRETTY_PRINT));

if($mainholidaylist_connection == true)
{
	mysqli_close($mainholidaylist_connection);
}

?>
<?php

/* service to query and fetch the data */

include('mainholidaylistfetch_db_config.php');

function mainholidaylistfetch_display_all_holidays_2020list()
{
	global $mainholidaylist_connection;

	$mainholidaylist2020result = mysqli_query($mainholidaylist_connection,"SELECT HolidayEvent,DATE_FORMAT(Date, '%d/%m/%Y') AS Date,Day,Month,Year,Type FROM holidaydaylist WHERE Year = 2020") or die("error".mysqli_error($mainholidaylist_connection));

	return $mainholidaylist2020result;
}

function mainholidaylistfetch_display_all_holidays_2020Modifiedlist()
{
	global $mainholidaylist_connection;

	$mainholidaylist2020ModifiedHolidayresult = mysqli_query($mainholidaylist_connection,"SELECT DATE_FORMAT(Date, '%e %M %Y %W') AS FullDate,CONCAT(Comment,' ',HolidayEvent,' is on ',DATE_FORMAT(Date, '%d %M %Y'),' ',Day) AS AllHolidaydayList2020 FROM holidaydaylist WHERE 1=1 AND Year = '2020' ORDER BY holidaydaylist.Date ASC") or die("error".mysqli_error($mainholidaylist_connection));

	return $mainholidaylist2020ModifiedHolidayresult;
}

function mainholidaylistfetch_display_all_holidays_2021list()
{
	global $mainholidaylist_connection;

	$mainholidaylist2021result = mysqli_query($mainholidaylist_connection,"SELECT HolidayEvent,DATE_FORMAT(Date, '%d/%m/%Y') AS Date,Day,Month,Year,Type FROM holidaydaylist WHERE Year = 2021") or die("error".mysqli_error($mainholidaylist_connection));

	return $mainholidaylist2021result;
}

function mainholidaylistfetch_display_all_holidays_2021Modifiedlist()
{
	global $mainholidaylist_connection;

	$mainholidaylist2021ModifiedHolidayresult = mysqli_query($mainholidaylist_connection,"SELECT DATE_FORMAT(Date, '%e %M %Y %W') AS FullDate,CONCAT(Comment,' ',HolidayEvent,' is on ',DATE_FORMAT(Date, '%d %M %Y'),' ',Day) AS AllHolidaydayList2021 FROM holidaydaylist WHERE 1=1 AND Year = '2021' ORDER BY holidaydaylist.Date ASC") or die("error".mysqli_error($mainholidaylist_connection));

	return $mainholidaylist2021ModifiedHolidayresult;
}

function mainholidaylistfetch_display_all_holidays_2022list()
{
	global $mainholidaylist_connection;

	$mainholidaylist2022result = mysqli_query($mainholidaylist_connection,"SELECT HolidayEvent,DATE_FORMAT(Date, '%d/%m/%Y') AS Date,Day,Month,Year,Type FROM holidaydaylist WHERE Year = 2022") or die("error".mysqli_error($mainholidaylist_connection));

	return $mainholidaylist2022result;
}

function mainholidaylistfetch_display_all_holidays_2022Modifiedlist()
{
	global $mainholidaylist_connection;

	$mainholidaylist2022ModifiedHolidayresult = mysqli_query($mainholidaylist_connection,"SELECT DATE_FORMAT(Date, '%e %M %Y %W') AS FullDate,CONCAT(Comment,' ',HolidayEvent,' is on ',DATE_FORMAT(Date, '%d %M %Y'),' ',Day) AS AllHolidaydayList2022 FROM holidaydaylist WHERE 1=1 AND Year = '2022' ORDER BY holidaydaylist.Date ASC") or die("error".mysqli_error($mainholidaylist_connection));

	return $mainholidaylist2022ModifiedHolidayresult;
}
?>
<?php

/* service to query and fetch the data */

include('officercadrestatefetch_db_config.php ');

function officercadrestatefetch_display_all_cadres_states()
{
	global $officercadrestate_connection;

	$officercadrestateresult = mysqli_query($officercadrestate_connection,"SELECT CadreStateName FROM jse_cf_cadrestate") or die("error".mysqli_error($officercadrestate_connection));

	return $officercadrestateresult;
}

?>
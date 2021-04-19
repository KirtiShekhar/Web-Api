<?php

/* service to query and fetch the data */

include('officercadrefetch_db_config.php');

function officercadrefetch_display_all_cadres_different_states()
{
	global $officercadre_connection;

	$cadredifferentstatesresult = mysqli_query($officercadre_connection,"Select StateCadreName from jse_cf_cadre") or die(mysqli_error($officercadre_connection));

	return $cadredifferentstatesresult;
}

?>
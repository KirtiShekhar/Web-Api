<?php

/* service to query and fetch the data */

include('officerbatchfetch_db_config.php');

function officerbatchfetch_display_all_batch_year()
{
	global $officerbatch_connection;

	$batchyearresult = mysqli_query($officerbatch_connection,"Select batch_year from jse_cf_batch") or die(mysqli_error($officerbatch_connection));

	return $batchyearresult;
}

?>
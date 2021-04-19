<?php

/* service to query and fetch the data */

include('maindirectoryheaderlistfetch_db_config.php');

function maindirectoryheaderlistfetch_display_all_directory_headerlist()
{
	global $maindirectoryheaderlist_connection;

	$maindirectoryheaderlistresult = mysqli_query($maindirectoryheaderlist_connection,"SELECT Level_type FROM directories_officers_posting 
		LEFT OUTER JOIN jse_cf_posting_levels ON jse_cf_posting_levels.levels_id =  directories_officers_posting.PostingLevel 
		ORDER BY Level_type ASC") or die("error".mysqli_error($maindirectoryheaderlist_connection));

	return $maindirectoryheaderlistresult;
}

?>
<?php
	require('../../lib_files/private.inc.php');
	require('../../lib_files/settings.inc.php');
	require('settings/addlisting_editlisting_settings.inc.php');

	$mysql_id = $_REQUEST['id'];
	
	$pg_id 	  = $_REQUEST['pgid'];
	
	$qdel = "delete from $system_listing_table where id='$mysql_id'";
	mysql_query($qdel) or die(mysql_error());
	
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php?id=$pg_id\">";
?>
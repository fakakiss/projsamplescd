<?php
	require('../../lib_files/private.inc.php');
	require('../../lib_files/settings.inc.php');
	require('settings/main_settings.inc.php');

	$mysql_id = $_REQUEST['img_id'];
	
	$pg_id 	  = $_REQUEST['pg_id'];
	
	$qdel = "delete from images where name='$mysql_id'";
	
	mysql_query($qdel) or die(mysql_error());
	
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=listingdetails.php?id=$pg_id\">";
?>
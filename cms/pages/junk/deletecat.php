<?php
	require('../../lib_files/private.inc.php');
	require('../../lib_files/settings.inc.php');
	require('settings/main_settings.inc.php');

	$mysql_id 	= $_REQUEST['id'];
	
	$qdel 		= "delete from $cat_table where id='$mysql_id'";
	mysql_query($qdel) or die(mysql_error());
	
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
?>
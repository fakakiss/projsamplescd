<?php
	require('../../lib_files/private.inc.php');
	require('../../lib_files/settings.inc.php');
	require('settings.inc.php');

	$mysql_id = $_REQUEST['id'];
	
	$qdel = "delete from feedback_form where id='$mysql_id'";
	mysqli_query($conn,$qdel) or die(mysql_error($conn));
	
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
?>
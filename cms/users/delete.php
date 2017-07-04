<?php
	require('../../lib_files/private.inc.php');
	require('../../lib_files/settings.inc.php');
	$mysql_id = $_REQUEST['id'];
	
	$qdel = "delete from users where username='$mysql_id'";
	mysqli_query($conn,$qdel) or die(mysqli_error());
	
	echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=index.php\">";
?>


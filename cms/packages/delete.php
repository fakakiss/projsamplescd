<?php

	require('../../lib_files/private.inc.php');
	require('../../lib_files/settings.inc.php');
	require('settings.inc.php');
	
	$err_msg="";
	$mysql_id = $HTTP_GET_VARS['id'];
	$q = "select name from images where name='$mysql_id'";
	$rst = mysql_query($q) or die(mysql_error());
	$row = mysql_fetch_array($rst);
	$delfile = $row[0];
	
	$quse = "select id from pages where(img='$delfile' || img1='$delfile' || img2='$delfile' || img3='$delfile' || img4='$delfile')";
	$rstuse = mysql_query($quse) or die(mysql_error());
	
	
	if(mysql_num_rows($rstuse) > 0  )
	{
		$err_msg = "The image is being used in a <strong><u>module</u></strong> and cannot be deleted.<br>";
		$err_msg = $err_msg . "You will be redirected in 5 seconds. Please stand by.";
		
		echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"5;URL=index.php\">";
	}
	else
	{
		
		
		if(file_exists("../../uploads/images/$delfile"))
		{
			
			unlink("../../uploads/images/$delfile");
		}
		
		$qdel = "delete from images where name='$mysql_id'";
		mysql_query($qdel) or die(mysql_error());
	
		echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=index.php\">";
	}
?>

<html>
<head>
<title></title>
<link href="../css/style.css" rel="stylesheet" type="text/css">
</head>

<body>

<?php if(!empty($err_msg)){?>
<p align="center" class="error"><?php echo "$err_msg"; ?></p>
<?php }?>
	

</body>
</html>
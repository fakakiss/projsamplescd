<?php

	require('../../lib_files/private.inc.php');
	require('../../lib_files/settings.inc.php');
	require('settings.inc.php');
	
	$s=$_REQUEST['s'];
	
	if(!isset($s)){$s=0;}
	
	$err_msg="";
	$mysql_id = $_REQUEST['id'];
	
	$q       = "select name from images where name='$mysql_id'";
	$rst     = mysqli_query($conn,$q) or die(mysqli_error($conn));
	$row     = mysqli_fetch_array($rst);
	$delfile = $row[0];
	
	$quse1 	 = "select id from pages where(illus1='$delfile'|| illus2='$delfile'|| illus3='$delfile'|| illus4='$delfile'|| illus5='$delfile'|| add1='$delfile' || add2='$delfile' || add3='$delfile' || add4='$delfile' || add5='$delfile' || caption_img='$delfile' || img='$delfile' || img1='$delfile' || img2='$delfile' || img3='$delfile' || img4='$delfile' || img5='$delfile')";
	$rstuse1 = mysqli_query($conn,$quse1) or die(mysqli_error($conn));
	
	$quse2   = "select id from pagelistings where(illus1='$delfile'|| illus2='$delfile'|| illus3='$delfile'|| illus4='$delfile'|| illus5='$delfile'|| add1='$delfile' || add2='$delfile' || add3='$delfile' || add4='$delfile' || add5='$delfile' || caption_img='$delfile' || img='$delfile' || img1='$delfile' || img2='$delfile' || img3='$delfile' || img4='$delfile' || img5='$delfile')";
	$rstuse2 = mysqli_query($conn,$quse2) or die(mysqli_error($conn));
	
	$quse3   = "select id from pagecategories where(illus1='$delfile'|| illus2='$delfile'|| illus3='$delfile'|| illus4='$delfile'|| illus5='$delfile'|| add1='$delfile' || add2='$delfile' || add3='$delfile' || add4='$delfile' || add5='$delfile' || caption_img='$delfile' || img='$delfile' || img1='$delfile' || img2='$delfile' || img3='$delfile' || img4='$delfile' || img5='$delfile')";
	$rstuse3 = mysqli_query($conn,$quse3) or die(mysqli_error($conn));
	
	$quse4   = "select * from users where(picture='$delfile')";
	$rstuse4 = mysqli_query($conn,$quse4) or die(mysqli_error($conn));
	
	$quse5   = "select * from images where (name='$delfile') and (catid > 0)";
	$rstuse5 = mysqli_query($conn,$quse5) or die(mysqli_error($conn));
	
	if( (mysqli_num_rows($rstuse1)>0) || (mysqli_num_rows($rstuse2)>0) || (mysqli_num_rows($rstuse3)>0) || (mysqli_num_rows($rstuse4)>0) )
		{
			$err_msg = "The image is being used in a <strong><u>System Module</u></strong> and cannot be deleted.<br>";
			$err_msg = $err_msg . "You will be redirected in 5 seconds. Please stand by.";	
			echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"5;URL=index.php\">";
		}
	else
		{		
			if(file_exists("../../uploads/images/$delfile")){unlink("../../uploads/images/$delfile");}		
			$qdel = "delete from images where name='$mysql_id'";
			mysqli_query($conn,$qdel) or die(mysqli_error($conn));
			if($s>0){$ff="?s=$s";}
			echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=index.php$ff\">";  
		}
?>

<html>
<head>
<title>Deleting System Image.</title>
<link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?php if(!empty($err_msg)){?><p align="center" class="error"><?php echo "$err_msg"; ?></p><?php }?>
</body>
</html>
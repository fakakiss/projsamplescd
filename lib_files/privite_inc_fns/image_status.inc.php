<?php	
	$delfile =(stripslashes($row['name']));
	
	$quse1 	 = "select id from pages where(illus1='$delfile'|| illus2='$delfile'|| illus3='$delfile'|| illus4='$delfile'|| illus5='$delfile'|| add1='$delfile' || add2='$delfile' || add3='$delfile' || add4='$delfile' || add5='$delfile' || caption_img='$delfile' || img='$delfile' || img1='$delfile' || img2='$delfile' || img3='$delfile' || img4='$delfile' || img5='$delfile')";
	$rstuse1 = mysqli_query($conn,$quse1) or die(mysqli_error($conn));
	
	$quse2   = "select id from pagelistings where(illus1='$delfile'|| illus2='$delfile'|| illus3='$delfile'|| illus4='$delfile'|| illus5='$delfile'|| add1='$delfile' || add2='$delfile' || add3='$delfile' || add4='$delfile' || add5='$delfile' || caption_img='$delfile' || img='$delfile' || img1='$delfile' || img2='$delfile' || img3='$delfile' || img4='$delfile' || img5='$delfile')";
	$rstuse2 = mysqli_query($conn,$quse2) or die(mysqli_error($conn));
	
	$quse3   = "select id from pagecategories where(illus1='$delfile'|| illus2='$delfile'|| illus3='$delfile'|| illus4='$delfile'|| illus5='$delfile'|| add1='$delfile' || add2='$delfile' || add3='$delfile' || add4='$delfile' || add5='$delfile' || caption_img='$delfile' || img='$delfile' || img1='$delfile' || img2='$delfile' || img3='$delfile' || img4='$delfile' || img5='$delfile')";
	$rstuse3 = mysqli_query($conn,$quse3) or die(mysqli_error($conn));
	
	$quse4   = "select * from users where (picture='$delfile')";
	$rstuse4 = mysqli_query($conn,$quse4) or die(mysqli_error($conn));
	
	$quse5   = "select * from images where (name='$delfile') and (catid > 0)";
	$rstuse5 = mysqli_query($conn,$quse5) or die(mysqli_error());
?>			

	<?php if( (mysqli_num_rows($rstuse1)>0) || (mysqli_num_rows($rstuse2)>0) || (mysqli_num_rows($rstuse3)>0) || (mysqli_num_rows($rstuse4)>0) || (mysqli_num_rows($rstuse5)>0) ){?>		
		<span>Online</span>
	<?php }else{?>
		<a href="delete.php?id=<?php echo $row[0]?><?php if($s>0){echo "&&s=$s";}?>">Delete</a>
	<?php }?>

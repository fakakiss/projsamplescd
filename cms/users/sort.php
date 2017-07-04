<?php
	
	require('../../lib_files/private.inc.php');
	require('../../lib_files/settings.inc.php');
	require('settings.inc.php');
	
	if ($_sess_username=='admin')
	   {
	    $q = "select * from users order by username";
	    $rst = mysql_query($q) or die(mysql_error());
	   }
	else
	   {
	    $q = "select * from errors where name='cass'";
	    $rst = mysql_query($q) or die(mysql_error());
		}  
?>




<!DOCTYPE html PUBLIC "-//W3C//Dtd html 4.0 transitional//EN">
<html>

<link href="../css/style.css" rel="stylesheet" type="text/css">
<head><title><?php echo $clientname;?> - Home</title>
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<META content="MShtml 6.00.2600.0" name=GENERATOR>
</head>



<body>


<?php cmshead($privite_site_width,$privite_nav_width,$_sess_username,$_user_rights)?>  
		  
		  <div style="padding:10px"> 
		  
		  <?php top_module($manager,$add,$view,$viewcat,$addcat,$_sess_username,$_user_rights);?>
		  
		    <div  style="padding-top:10px">
			
			
    <table  border="0"   class="cms_text"> 
  <?php if(mysql_num_rows($rst) > 0){while($row = mysql_fetch_array($rst)){?>
  <tr> 
    <td>
      
	  
	  <table border="0" cellspacing="0" cellpadding="0" class="cms_text">
  <tr>
    <td valign="top">
	
	<table border="0" cellspacing="0" cellpadding="0" class="cms_text">
  <tr>
    <td width="100px">Username :</td>
    <td width="100px"><strong><?php echo $row['username']?></strong></td>
  </tr>
  <tr>
    <td>First Name :</td>
    <td><strong><?php echo $row['firstname']?></strong></td>
  </tr>
  <tr>
    <td>Last Name : </td>
    <td><strong><?php echo $row['lastname']?></strong></td>
  </tr>
  <?php if(!empty($row['othernames'])){ ?>
  <tr>
    <td>Other Names :</td>
    <td><strong><?php echo $row['othernames']?></strong></td>
  </tr>
  <?php }?>
</table>

	  
	  <div class="readmore_bottoms" style="padding-bottom:10px"> 
	 
	<a href="edit.php?id=<?php echo $row[1]?>">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	<?php  
	if($row[1] =='admin'){echo "<strong>Not Deletable</strong>";}
	else   echo "<a href=\"delete.php?id=$row[1]\">Delete</a> ";
	?>
	
    </div>
	
	</td>
	
	<td valign="top">
	
	<table border="0" cellspacing="0" cellpadding="0" class="cms_text">
  <tr>
    <td colspan="2">Previlages</td>
  </tr>
  <tr>
    <td width="50px">Add</td>
    <td width="50px"><?php if (($row['addpriv']) == 1) {echo "Yes";} else {echo "No";} ?></td>
  </tr>
  <tr>
    <td>Show</td>
    <td><?php if (($row['showpriv']) == 1) {echo "Yes";} else {echo "No";} ?></td>
  </tr>
  <tr>
    <td>Edit</td>
    <td><?php if (($row['editpriv']) == 1) {echo "Yes";} else {echo "No";} ?></td>
  </tr>
  <tr>
    <td>Delete</td>
    <td><?php if (($row['deletepriv']) ==1) {echo "Yes";} else {echo "No";} ?></td>
  </tr>
</table>

	
	
	
	
	
	
	
	</td>
	
	
	<?php if(!empty($row['picture'])){ ?>
    <td valign="top">
	  <?php
 if (!$max_width)
    $max_width  = 100;
 if (!$max_height)
    $max_height =  100;
	
 $the_real_image = "../../uploads/images/".$row['picture'];
 $size   = GetImageSize($the_real_image);
 $width  = $size[0];
 $height = $size[1];

 $x_ratio = $max_width / $width;
 $y_ratio = $max_height / $height;

 if (($width  <= $max_width) && ($height <= $max_height)) {
    $tn_width  = $width;
    $tn_height = $height;
    }
 else if (($x_ratio * $height) < ($max_height)) {
    $tn_height = ceil($x_ratio * $height);
    $tn_width  = $max_width;
    }
 else {
    $tn_width  = ceil($y_ratio * $width);
    $tn_height = $max_height; 
	
 $src = ImageCreateFromJpeg($the_real_image);
 $dst = ImageCreatetruecolor($tn_width,$tn_height);
 ImageCopyResized($dst,$src,0,0,0,0,$tn_width,$tn_height,$width,$height); 
 Imagedestroy($scr);
 imagejpeg($scr,"../../uploads/images/$thumb_name");
 ImageDestroy($dst);
	
    }
	?>	
 <img src="../../uploads/images/<?php echo $row['picture']?>" width="<?php echo "$tn_width";?>" height="<?php echo "$tn_height";?>" class="cms_image_border">
	</td>
	<?php }?>
	
	
	
  </tr>
</table>

	
      
	  
	  
    </td>
  </tr>
  <?php }}else{?>
  <tr> 
    <td class="error">You don't have aurthorization for this section of the system.</td>
  </tr>
  <?php }?>
</table>
                              </div>
							   </div>
							  
							  
							  
							              
<?php cmsfooter()?>



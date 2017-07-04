<?php
        require('../../lib_files/private.inc.php');
	    require('../../lib_files/settings.inc.php');
	    require('settings.inc.php');
		
        $mysql_id  	= $_REQUEST['id'];
		
        $q 			= "select * from images where name='$mysql_id'";
        $rst 		= mysql_query($q) or die(mysql_error());
        $row 		= mysql_fetch_array($rst) or die(mysql_error());
		
        if(isset($_REQUEST["send"])&&(($_REQUEST["send"])=='OK'))
	   		{
				include('../../lib_files/privite_inc_fns/no_reg_globe_images.inc.php'); 
				$q_update = "update images set caption='$caption',description='$description',updated=NOW() where name='$mysql_id'";
				mysql_query($q_update) or die(mysql_error());		
				echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=index.php\">";
			} 
?>		
		

<!DOCTYPE html PUBLIC "-//W3C//Dtd html 4.0 transitional//EN">
<html>
<link href="../css/style.css" rel="stylesheet" type="text/css">
<head><title><?php echo $clientname;?> | Images | Edit Image</title></head>
<body>
<?php cmshead($privite_site_width,$privite_nav_width,$_sess_username,$_user_rights)?>
	<div style="padding:10px">
		<?php top_module($manager,$add,$view,$viewcat,$addcat,$_sess_username,$_user_rights);?>
			<div>
				<form action="<?php echo $PHP_SELF . "?id=" . $mysql_id?>" method="post">
					<table border="0" cellpadding="" cellspacing=""  class="cms_text" >
						<tr>
							<td valign="top"><?php echo "$cap2";?></td>
							<td valign="top"><input name="caption" type="text" size="40"  value="<?php echo stripslashes($row['caption'])?>" class="form"></td>
						</tr>
						<tr>
							<td valign="top"><?php echo "$cap3";?></td>
							<td  valign="top"><textarea cols="50" rows="6" name="description" class="form"><?php echo stripslashes($row['description'])?></textarea></td>
						</tr>
						<tr>
							<td></td>
							<td valign="top"><input type="submit" value="<?php echo "$update_bottom ";?>" class="form"><input type="hidden" value="OK" name="send"></td>
						</tr>
					</table>
				</form>
				<div>
 					<?php
 						if (!$max_width)$max_width   	= 450;   
 						if (!$max_height)$max_height 	=  400;
 						$the_real_image 				= "../../uploads/images/".$row['name'];
 						$size   						= GetImageSize($the_real_image);
 						$width  						= $size[0];
 						$height 						= $size[1];
 						$x_ratio 						= $max_width / $width;
 						$y_ratio 						= $max_height / $height;
 						if (($width  <= $max_width) && ($height <= $max_height)) {$tn_width  = $width;$tn_height = $height;} 
 						else if (($x_ratio * $height) < ($max_height)) {$tn_height = ceil($x_ratio * $height);$tn_width  = $max_width;}
 						else {$tn_width  = ceil($y_ratio * $width);$tn_height = $max_height;}  
					?>
					<div class="cms_text" style="padding-bottom:10px">
						<table   class="cms_text">
					        <tr><td>Name:</td><td><?php echo stripslashes($row['name'])?></td></tr>					     
							<?php if(!empty($row['size'])){?><tr><td>Size & Type:</td><td><?php echo $row['size']?> - <?php echo $row['type']?></td></tr><?php }?>	                    	
							<tr><td valign="top">Dimensions:</td><td>Height:<?php echo $width?> Pixels &nbsp;&nbsp;&nbsp;&nbsp; Width:<?php echo $height?> Pixels</td></tr>
							<?php if(!empty($row['caption'])){?><tr><td>Caption:</td><td><?php echo ucfirst($row['caption'])?></td></tr><?php }?> 
		                   	<?php if(!empty($row['description'])) { ?><tr><td>Description:</td><td><?php echo ucfirst($row['description'])?></td></tr><?php }?>  
					  </table>
					</div>
					<img src="../../uploads/images/<?php echo $row['name']?>" width="<?php echo "$tn_width";?>" height="<?php echo "$tn_height";?>"  class="cms_image_border">
				</div>
			</div>
		</div>
		</td>
	</tr>
</table>
  
<?php cmsfooter()?>


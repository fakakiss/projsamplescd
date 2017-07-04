<?php
	require('../../lib_files/private.inc.php');
	require('../../lib_files/settings.inc.php');
	require('settings.inc.php');
		
    $mysql_id  = $HTTP_GET_VARS['id'];
		
    $q = "select * from video where name='$mysql_id'";
    $rst = mysql_query($q) or die(mysql_error());
    $row = mysql_fetch_array($rst) or die(mysql_error());
		
    if( isset($_REQUEST["send"] ) && ( ($_REQUEST["send"]) =='OK') )
	   {
	   
	        include('../../lib_files/privite_inc_fns/no_reg_globe_video.inc.php');
			
			$q_update = "update video set caption='$caption',description='$description',updated=NOW() where name='$mysql_id'";
			mysql_query($q_update) or die(mysql_error());		
			echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=index.php\">";
		} 
?>		
		

<!DOCTYPE html PUBLIC "-//W3C//Dtd html 4.0 transitional//EN">
<html>
<link href="../css/style.css" rel="stylesheet" type="text/css">
<head><title><?php echo $clientname;?> | Videos | Edit Video Information.</title></head>
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
							<td  valign="top"><textarea cols="50" rows="6" name="description"  class="form"><?php echo stripslashes($row['description'])?></textarea></td>
						</tr>
						<tr>
							<td></td>
							<td valign="top" ><input type="submit" value="<?php echo "$update_bottom ";?>"  class="form"><input type="hidden" value="OK" name="send"></td>
						</tr>
					</table>
				</form>

				<div>
 
					<div class="cms_text" style="padding-bottom:10px ">
						<?php if(($row['type'])=="audio/mpeg") { ?><img src="../cms_images/mp3.gif" class="cms_image_border"><?php }?> 	  												
		  				<?php if(($row['type'])=="audio/wav") { ?><img src="../cms_images/wav.gif" class="cms_image_border"><?php }?> 		  														  													  
		  				<?php if(($row['type'])=="audio/x-ms-wma") { ?><img src="../cms_images/wma.jpg" class="cms_image_border"><?php }?>
		  												
						<table class="cms_text">					
					        <tr><td>Name:</td><td><?php echo stripslashes($row['name'])?></td></tr> 					               					        												
							<?php if(!empty($row['size'])) { ?> <tr><td> Size & Type: </td><td><?php echo $row['size']?> - <?php echo $row['type']?></td></tr><?php } ?> 		                   
							<?php if(!empty($row['caption'])) { ?><tr><td>Caption:</td><td><?php echo ucfirst($row['caption'])?></td></tr> <?php } ?>  		                  
							<?php if(!empty($row['description'])) { ?><tr><td>Description:</td><td><?php echo ucfirst($row['description'])?></td></tr><?php } ?>		                                    			  
					  	</table>
					</div>					
				</div>

<?php cmsfooter()?>


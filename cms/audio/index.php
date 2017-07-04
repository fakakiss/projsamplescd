<?php
	require('../../lib_files/private.inc.php');
	require('../../lib_files/settings.inc.php');
	require('settings.inc.php');
	
	
	$play      = $HTTP_GET_VARS['showplayer'];
	$soundname = $HTTP_GET_VARS['sn'];
	
    $q = "select * from audio order by name asc";
    $rst = mysqli_query($conn,$q) or die(mysqli_error($conn));
	
	if($play==1) 
	{ 
	$q1 = "select * from audio where name='$soundname'";
    $rst1 = mysqli_query($conn,$q1) or die(mysqli_error($conn));
	$row1 = mysqli_fetch_array($rst1) or die(mysqli_error($conn));
	}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//Dtd html 4.0 transitional//EN">
<html>
<link href="../css/style.css" rel="stylesheet" type="text/css">
<head>
<title><?php echo $clientname;?> | <?php echo $manager;?> | Listing</title>
</head>
<body>

	<?php cmshead($privite_site_width,$privite_nav_width,$_sess_username,$_user_rights)?>
	 
		<div style="padding:10px">
		  
			<?php top_module($manager,$add,$view,$viewcat,$addcat,$_sess_username,$_user_rights);?>
					  	 
				<div  style="padding-top:10px;">
							
					
					<?php if($play==1) { ?>
					<div  style="padding-bottom:10px;" align="center">
					<embed autostart="false"  height="45px" width="200px"  src="../../uploads/sound/<?php echo stripslashes($row1['name'])?>"></embed>
			        </div>
					<?php }?>
					
					
					<table  border="0"  cellpadding="0" cellspacing="0" class="cms_text" >
						
                		<?php if(mysqli_num_rows($rst) > 0){while($row = mysqli_fetch_array($rst)){?>
						   
						   	<?php if(!empty($row['name']) && file_exists("../../uploads/sound/".$row['name'])){ ?>		
						  
                             	<tr> 
                               		<td valign="top"> 
			 
			  				   			<table border="0" cellspacing="0" cellpadding="0"   class="cms_text">
                  							<tr>
          										<td width=60px valign="top" height="110px">
		  
		                                         	<?php if(($row['type'])=="audio/mpeg") { ?> 
		  												<a href="../../uploads/sound/<?php echo stripslashes($row['name'])?>"><img src="../cms_images/mp3.gif" class="cms_image_border"></a>
		  											<?php }?>
		  
		  											<?php if(($row['type'])=="audio/wav") { ?> 
		  												<a href="../../uploads/sound/<?php echo stripslashes($row['name'])?>"><img src="../cms_images/wav.gif" class="cms_image_border"></a>
		  											<?php }?>
		  
		  											<?php if(($row['type'])=="audio/x-ms-wma") { ?> 
		  												<a href="../../uploads/sound/<?php echo stripslashes($row['name'])?>"><img src="../cms_images/wma.jpg" class="cms_image_border"></a>
		  											<?php }?>
		  
		    									</td> 
		  	  
                   								<td valign="top"> 				
					
													<table   class="cms_text">
					
					        							<tr><td>Name:</td><td><a href="index.php?showplayer=1&&sn=<?php echo $row[0]?>"><?php echo stripslashes($row['name'])?></a></td></tr> 
														<?php if(!empty($row['size'])) { ?><tr><td>Size & Type: </td> <td><?php echo $row['size']?> - <?php echo $row['type']?></td></tr><?php } ?>
														<?php if(!empty($row['caption'])) { ?> <tr><td>Caption:</td><td><?php echo ucfirst($row['caption'])?></td></tr><?php } ?>       						
		                   								<?php if(!empty($row['description'])) { ?><tr><td>Description:</td><td><?php echo ucfirst($row['description'])?></td> </tr><?php } ?>
		                                    			   
			               								<tr>
						   									<td>
                              									<div class="readmore_bottoms" style="padding-top:5px; padding-bottom:20px">
							   										<a href="edit.php?id=<?php echo $row[0]?>">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							   										<a href="delete.php?id=<?php echo $row[0]?>">Delete</a>
                              									</div>
                              								</td>
							  							</tr>
					  								</table>
					  					  						 
                    							</td>
                   							</tr>
                						</table>
								
									</td>
            					</tr>
							<?php }?>
			
            			<?php }}else{?><tr><td  class="error">No Audio Files Uploaded.</td></tr><?php }?>
            
          			</table>
				</div>					
			</div>  
<?php cmsfooter()?>


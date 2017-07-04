<?php
	require('../../lib_files/private.inc.php');
	require('../../lib_files/settings.inc.php');
	require('settings.inc.php');
	
    $q = "select * from packages order by name asc";
    $rst = mysqli_query($conn,$q) or die(mysqli_error($conn));
?>

<!DOCTYPE html PUBLIC "-//W3C//Dtd html 4.0 transitional//EN">
<html>
<link href="../css/style.css" rel="stylesheet" type="text/css">
<head><title><?php echo $clientname;?> | <?php echo $manager;?> | Listing</title></head>
<body>

<?php cmshead($privite_site_width,$privite_nav_width,$_sess_username,$_user_rights)?>

	<div style="padding:10px">
		  
		 <?php top_module($manager,$add,$view,$viewcat,$addcat,$_sess_username,$_user_rights);?>
					  
		 	<div style="padding-top:10px; ">
				<table  border="0"  cellpadding="0" cellspacing="0" class="cms_text" >
						
                          <?php if(mysqli_num_rows($rst) > 0){while($row = mysqli_fetch_array($rst)){?>
						  
						  
						   <?php if(!empty($row['name']) && file_exists("../../uploads/images/".$row['name'])){ ?>		
						  
                             <tr> 
                               <td valign="top"> 
			  
			  
			 
			  <table border="0" cellspacing="0" cellpadding="0"   class="cms_text">
                  <tr>
				
		
				 
          <td width=160px valign="top" height="110px">
		  <?php
 if (!$max_width)$max_width  = 150;
 if (!$max_height)$max_height =  100;
   
 $the_real_image = "../../uploads/images/".$row['name'];
 $size   = GetImageSize($the_real_image);
 $width  = $size[0];
 $height = $size[1];

 $x_ratio = $max_width / $width;
 $y_ratio = $max_height / $height;

 if     (($width  <= $max_width) && ($height <= $max_height))  {$tn_width  = $width;$tn_height = $height; }
 elseif (($x_ratio * $height) < ($max_height))                 {$tn_height = ceil($x_ratio * $height); $tn_width  = $max_width;}
 else                                                          {$tn_width  = ceil($y_ratio * $width); $tn_height = $max_height;}
   
	?>
	
	 <img src="../../uploads/images/<?php echo $row['name']?>" width="<?php echo "$tn_width";?>" height="<?php echo "$tn_height";?>"  class="cms_image_border">
		  </td> 
		  
		  
		  
                    <td   valign="top" > 
					
					
					<table   class="cms_text">
					
					        <tr>
					        <td>Name:</td>        
					        <td><?php echo stripslashes($row['name'])?></td>
                            </tr>
													
							<?php if(!empty($row['size'])) { ?>
		                    <tr>
							<td> Size & Type: </td>
		                    <td><?php echo $row['size']?> - <?php echo $row['type']?>
							
							
							
							</td>
							</tr>
                            <?php } ?>  
							
							
		                    <tr>
							   <td valign="top">Dimensions:</td>
		                       <td>Height:<?php echo $width?> Pixels &nbsp;&nbsp;&nbsp;&nbsp; Width:<?php echo $height?> Pixels</td>
							</tr>
                            
                  
                  				
							<?php if(!empty($row['caption'])) { ?> <tr><td>Caption:</td><td><?php echo ucfirst($row['caption'])?></td></tr><?php } ?>    
		                   
                                         
                           
                            
                 
         						
		                   <?php if(!empty($row['description'])) { ?><tr><td>Description:</td><td><?php echo ucfirst($row['description'])?></td> </tr><?php } ?>
		                   
						   
						   
                          
                           
                  
                  			   
			               <tr>
						   <td>
                              <div class="readmore_bottoms" style="padding-top:5px; padding-bottom:20px">
							   <a href="edit.php?id=<?php echo $row[0]?>">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							   <a href="delete.php?id=<?php echo $row[0]?>">Delete</a>
                              </div>
                              </td></tr>
					  </table>
					  
					  
					  
					  
					  
					  
						 
                    </td>
                   </tr>
                </table>
				
				
				</td>
            </tr>
			<?php }?>
			
            <?php }}else{?><tr><td class="error">No Packages.</td></tr><?php }?>
            
            
	

          </table>
						</div>
						
						</div>
		  
		            </td>
  </tr></table>
  
<?php cmsfooter()?>


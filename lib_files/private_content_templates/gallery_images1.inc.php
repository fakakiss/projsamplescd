<?php
		
	$s=$_REQUEST['s'];
	
	if(!isset($s)){$s=0;}
	
	$glry_id=$_REQUEST['id'];
	
	$max_images =15;
	
    $q 			= "select * from images where catid ='$glry_id' order by updated desc limit $s , $max_images";
    $rst 		= mysql_query($q) or die(mysql_error());
	
	$qCount     = "select count(catid) as countedrows from images where catid ='$glry_id'";
	$rstCount   = mysql_query($qCount) or die(mysql_error());
	$rowCount   = mysql_fetch_array($rstCount);
	$Count      = $rowCount['countedrows'];
?>



<div style="padding:10px">
		  
			
				<table border="0" cellspacing="0" cellpadding="0" width="500" align="center">
					<tr>
						<td width="250" align="left" valign="top" class="bodylink">
							<?php if($s>0){$p=$s-$max_images;?>	
								<span class="bottoms_body1"><a href="<?php echo $PHP_SELF?>?s=<?php echo $p?>&&id=<?php echo $mysql_id?>">Previous</a></span>
							<?php }?>
						</td>				
						<td width="250" align="right" valign="top" class="bodylink" >
							<?php if($Count>($s+$max_images)){$n=$s+$max_images;?>
								<span class="bottoms_body1"><a href="<?php echo $PHP_SELF?>?s=<?php echo $n?>&&id=<?php echo $mysql_id?>">Next</a></span>
							<?php }?>
						</td>
					</tr>
				</table>
				<br>
				<table  border="0"  cellpadding="0" cellspacing="0" class="cms_text" >
                	<?php if(mysql_num_rows($rst)>0){while($row = mysql_fetch_array($rst)){?>
						  <?php if(!empty($row['name']) ){?>
                          		<tr> 
                               		<td valign="top"> 
			  							<table border="0" cellspacing="0" cellpadding="0"   class="cms_text">
                  							<tr>
          										<td width=160 valign="top" height="110">
                                                
                                                
		  				                 <?php if( !empty($row['name']) && !( file_exists("../../uploads/images/".$row['name'])) ){?>
                                         	<img src="../cms_images/image_error.jpg" class="cms_image_border">                                        
            							<?php }else if( !empty($row['name']) && ( file_exists("../../uploads/images/".$row['name'])) ){?> 
                                        		<?php
 														if (!$max_width)$max_width    = 200;  
 														if (!$max_height)$max_height  = 200;
    
 														$the_real_image = "../../uploads/images/".$row['name'];
 														$size   = GetImageSize($the_real_image);
 														$width  = $size[0];
 														$height = $size[1];

 														$x_ratio = $max_width / $width;
 														$y_ratio = $max_height / $height;

 														if (($width  <= $max_width) && ($height <= $max_height)) { $tn_width  = $width;$tn_height = $height;}
 														else if (($x_ratio * $height) < ($max_height)) {$tn_height = ceil($x_ratio * $height);$tn_width  = $max_width; }
 														else {$tn_width  = ceil($y_ratio * $width);$tn_height = $max_height;} 
													?>
                                                                                           
	 										<div style="padding-bottom:15px">
                                            	<img src="../../uploads/images/<?php echo $row['name']?>" width="<?php echo "$tn_width";?>" height="<?php echo "$tn_height";?>" class="cms_image_border">
                                             </div>
                                        <?php }?>
                                                    
                                                    
		  										</td> 
                    							<td valign="top" > 				
													<table   class="cms_text">
					          							<tr><td>Name:</td><td><?php echo stripslashes($row['name'])?></td></tr>							
		                      							<?php if(!empty($row['size'])){?><tr><td>Size & Type:</td><td><?php echo $row['size']?> - <?php echo $row['type']?></td></tr><?php }?>  
							  							<tr><td valign="top">Dimensions:</td><td>Height:<?php echo $width?> Pixels &nbsp;&nbsp;&nbsp;&nbsp; Width:<?php echo $height?> Pixels</td></tr>				
		                      							<?php if(!empty($row['caption'])){?><tr><td>Caption:</td> <td><?php echo ucfirst($row['caption'])?></td></tr><?php }?>                             
						      							<?php if(!empty($row['description'])){?><tr><td>Description:</td><td><?php echo ucfirst($row['description'])?></td></tr><?php }?>
			               								<tr>
															<td>
                              									<div class="readmore_bottoms" style="padding-top:5px; padding-bottom:20px">
							   										<a href="edit.php?id=<?php echo $row[0]?>">Edit Image Caption</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;																																		
							   										<a href="del_glry_img.php?img_id=<?php echo $row[0]?>&&pg_id=<?php echo $mysql_id?><?php if($s>0){echo "&&s=$s";}?>">Delete</a>
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
            				<?php }}else{?><tr><td  class="error">No Images</td></tr><?php }?>
        				</table>
					
		
					<table border="0" cellspacing="0" cellpadding="0" width="500" align="center">
						<tr>
							<td width="250" align="left" valign="top" class="bodylink" >
								<?php if($s>0){$p=$s-$max_images;?>	
									<span class="bottoms_body1"><a href="<?php echo $PHP_SELF?>?s=<?php echo $p?>">Previous</a></span>
								<?php }?>
							</td>				
							<td width="250" align="right" valign="top" class="bodylink" >
								<?php if($Count>($s+$max_images)){$n=$s+$max_images;?>
									<span class="bottoms_body1"><a href="<?php echo $PHP_SELF?>?s=<?php echo $n?>">Next</a></span>
								<?php }?>
							</td>
						</tr>
					</table>
					
	</div>
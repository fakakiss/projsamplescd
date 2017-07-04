<div style="padding-left:3px;padding-right:2px" class="bodytxt">
	<?php
		$q_publications       = "select id,caption,img,pos,intro,DATE_FORMAT(date,'%M %d, %Y'),doc from pagelistings where showitem='1' and category='$pagecatcode' order by date desc limit 0,20";
	    $rst_publications     = mysql_query($q_publications) or die(mysql_error());
	?>									
				<?php if(mysql_num_rows($rst_publications) > 0){while($row_publications = mysql_fetch_array($rst_publications)){?>
					<div class="verdanablack11">				  					  			    	
						<?php if(!empty($row_publications['doc'])){?><a href="uploads/docs/<?php echo  $row_publications['doc']?>" target="_blank"><strong><?php $row_publications['caption']?></strong></a><?php }?>
						<?php if(!empty($row_publications[5])){?><br> <span class="date"><?php echo  $row_publications[5]?></span><?php }?>					                  	                  			  
						<?php if(!($row_publications['intro'])==""){?>
							<div style="padding-bottom:3px">					
                				<?php if(!empty($row_publications['img'])){?>
                        			<table align="<?php echo $row_publications['pos']?>">
                            			<tr> 
                                			<td>
												<div style="padding-<?php $reg=$row_publications['pos'];if ($reg=="left") {echo "right";} ?>:10px" align="<?php $row_publications['pos']?>">
													<?php
 														if     (!$max_width_publications) $max_width_publications   = 100;
 														if     (!$max_height_publications)$max_height_publications  = 100;
 														$the_real_image_publications                   = "uploads/images/".$row_publications['img'];
 														$size_publications                             = GetImageSize($the_real_image_publications);
 														$width_publications                            = $size_publications[0];
 														$height_publications                           = $size_publications[1];
 														$x_ratio_publications                          = $max_width_publications / $width_publications;
 														$y_ratio_publications                          = $max_height_publications / $height_publications;
														if      (($width_publications  <= $max_width_publications) && ($height_publications <= $max_height_publications)) {$tn_width_publications= $width_publications;$tn_height_publications=$height_publications;}  
 														else if (($x_ratio_publications * $height_publications) < ($max_height_publications))  {$tn_height_publications = ceil($x_ratio_publications * $height_publications); $tn_width_publications  = $max_width_publications;}  
 														else                                            {$tn_width_publications  = ceil($y_ratio_publications * $width_publications); $tn_height_publications = $max_height_publications;} 
													?>
													<a href="<?php $row_publications['doc']?>">                                                     																										
														<img src="uploads/images/<?php $row_publications['img']?>" width="<?php echo "$tn_width_publications";?>" height="<?php echo "$tn_height_publications";?>" class="site_image_border">
												    </a>
												</div>
											</td>
                                   		</tr>
             							<?php if(!empty($row_publications['capt'])){?>
											<tr>
												<td align="center" valign="top"  width="<?php echo "$tn_width_publications";?>">
													<div style="font-size:7px" align="center"><?php echo  $row_publications['capt']?></div>
												</td>
											</tr>
										<?php }?>                                                
                                 	</table>
                             	<?php }?>
                            	<?php $text=$row_publications['intro']; echo substr($text,0,300); ?>
								<br>							
								<a href="uploads/docs/<?php echo $row_publications['doc']?>" target="_blank" class="bb">Click Here to Download</a><br><br>                                        
                       		</div>						
						<?php }?>
					</div>
				<?php }}else{?><div></div><?php }?> 
			</div>
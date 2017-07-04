		<div style="padding-left:0px;padding-right:0px">
				<?php
					$q_events       = "select id,caption,img,pos,intro,DATE_FORMAT(date,'%M %d, %Y') from pagelistings where showitem='1' and category='12' order by date desc limit 0,20";
	                $rst_events     = mysql_query($q_events) or die(mysql_error());
				?>									
				<?php if(mysql_num_rows($rst_events) > 0){while($row_events = mysql_fetch_array($rst_events)){?>
					<div class="verdanablack11" >
					<br><br>
					<div style="padding-left:8px; padding-bottom:5px" class="t01">				  					  			    	
						<?php if(!empty($row_events['caption'])){?><a  class="verdanablack11" href="<?php echo FPNAMEXXNEWS;?>?did=<?php echo $row_events[0]?>&&page_ren=<?php echo $pagecatcode?><?php if($log==md5(YES)){echo "&&xl1=$log";}?>"><strong><?php echo $row_events['caption']?></strong></a><?php }?>
						<?php if(!empty($row_events[5])){?><span class="date"><?php echo $row_events[5]?></span><?php }?>
						</div>					                  	                  			  
						<?php if(!($row_events['intro'])==""){?>
							<div style="padding-bottom:3px">					
                				<?php if(!empty($row_events['img'])){?>
                        			<table align="<?php echo $row_events['pos']?>">
                            			<tr> 
                                			<td>
												<div style="padding-<?php $reg=$row_events['pos'];if ($reg=="left") {echo "right";} ?>:10px" align="<?php echo $row_events['pos']?>">
													<?php
 														if     (!$max_width_events) $max_width_events   = 100;
 														if     (!$max_height_events)$max_height_events  = 100;
 														$the_real_image_events                   = "uploads/images/".$row_events['img'];
 														$size_events                             = GetImageSize($the_real_image_events);
 														$width_events                            = $size_events[0];
 														$height_events                           = $size_events[1];
 														$x_ratio_events                          = $max_width_events / $width_events;
 														$y_ratio_events                          = $max_height_events / $height_events;
														if      (($width_events  <= $max_width_events) && ($height_events <= $max_height_events)) {$tn_width_events= $width_events;$tn_height_events=$height_events;}  
 														else if (($x_ratio_events * $height_events) < ($max_height_events))  {$tn_height_events = ceil($x_ratio_events * $height_events); $tn_width_events  = $max_width_events;}  
 														else                                            {$tn_width_events  = ceil($y_ratio_events * $width_events); $tn_height_events = $max_height_events;} 
													?>
													<a href="<?php echo FPNAMEXXNEWS;?>?did=<?php echo $row_events[0]?>&&page_ren=<?php echo $pagecatcode?>">                                                     																										
														<img src="uploads/images/<?php echo $row_events['img']?>" width="<?php echo "$tn_width_events";?>" height="<?php echo "$tn_height_events";?>" class="site_image_border">
												    </a>
												</div>
											</td>
                                   		</tr>
             							<?php if(!empty($row_events['capt'])){?>
											<tr>
												<td align="center" valign="top"  width="<?php echo "$tn_width_events";?>">
													<div style="font-size:7px" align="center"><?php echo $row_events['capt']?></div>
												</td>
											</tr>
										<?php }?>                                                
                                 	</table>
                             	<?php }?>
								<div style="padding-left:10px">
                            	<div class="t01" style="color:#000000; font-weight:normal">&nbsp;&nbsp;<?php $text=$row_events['intro']; echo substr($text,0,400); ?></div>							
								
								</div><br>
								                                        
                       		</div>						
						<?php }?>
					</div>
				<?php }}else{?><div></div><?php }?> 
			</div>
			
			
			
			
			
												
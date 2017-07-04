		<div style="padding-left:0px;padding-right:0px">
				<?php
					$q_news       = "select id,caption,img,pos,intro,DATE_FORMAT(date,'%M %d, %Y') from pagelistings where showitem='1' and category='15' order by date desc limit 0,20";
	                $rst_news     = mysql_query($q_news) or die(mysql_error());
				?>									
				<?php if(mysql_num_rows($rst_news) > 0){while($row_news = mysql_fetch_array($rst_news)){?>
					<div>
					
					<div style="padding-left:20px; padding-bottom:5px" class="t01">				  					  			    	
						<?php if(!empty($row_news['caption'])){?><a href="<?php echo FPNAMEXXNEWS;?>?did=<?php echo $row_news[0]?>&&page_ren=<?php echo $pagecatcode?><?php if($log==md5(YES)){echo "&&xl1=$log";}?>"><strong><?php echo $row_news['caption']?></strong></a><?php }?>
						<?php if(!empty($row_news[5])){?><div style="color:#000000; font-weight:bold; font-size:9px; padding-top:5px"><?php echo $row_news[5]?></div><?php }?>
						</div>					                  	                  			  
						<?php if(!($row_news['intro'])==""){?>
							<div style="padding-bottom:3px">					
                				<?php if(!empty($row_news['img'])){?>
                        			<table align="<?php echo $row_news['pos']?>">
                            			<tr> 
                                			<td>
												<div style="padding-<?php $reg=$row_news['pos'];if ($reg=="left") {echo "right";} ?>:10px" align="<?php echo $row_news['pos']?>">
													<?php
 														if     (!$max_width_news) $max_width_news   = 100;
 														if     (!$max_height_news)$max_height_news  = 100;
 														$the_real_image_news                   = "uploads/images/".$row_news['img'];
 														$size_news                             = GetImageSize($the_real_image_news);
 														$width_news                            = $size_news[0];
 														$height_news                           = $size_news[1];
 														$x_ratio_news                          = $max_width_news / $width_news;
 														$y_ratio_news                          = $max_height_news / $height_news;
														if      (($width_news  <= $max_width_news) && ($height_news <= $max_height_news)) {$tn_width_news= $width_news;$tn_height_news=$height_news;}  
 														else if (($x_ratio_news * $height_news) < ($max_height_news))  {$tn_height_news = ceil($x_ratio_news * $height_news); $tn_width_news  = $max_width_news;}  
 														else                                            {$tn_width_news  = ceil($y_ratio_news * $width_news); $tn_height_news = $max_height_news;} 
													?>
													<a href="<?php echo FPNAMEXXNEWS;?>?did=<?php echo $row_news[0]?>&&page_ren=<?php echo $pagecatcode?>">                                                     																										
														<img src="uploads/images/<?php echo $row_news['img']?>" width="<?php echo "$tn_width_news";?>" height="<?php echo "$tn_height_news";?>" class="site_image_border">
												    </a>
												</div>
											</td>
                                   		</tr>
             							<?php if(!empty($row_news['capt'])){?>
											<tr>
												<td align="center" valign="top"  width="<?php echo "$tn_width_news";?>">
													<div style="font-size:7px" align="center"><?php echo $row_news['capt']?></div>
												</td>
											</tr>
										<?php }?>                                                
                                 	</table>
                             	<?php }?>
								<div style="padding-left:20px">
                            	<div class="t01" style="color:#000000; font-weight:normal"><?php $text=$row_news['intro']; echo substr($text,0,400); ?></div>							
								<div class="right"><a href="<?php echo FPNAMEXXNEWS;?>?did=<?php echo $row_news[0]?>&&page_ren=<?php echo $pagecatcode?><?php if($log==md5(YES)){echo "&&xl1=$log";}?>"><b>Read more</b></a></div>
								</div><br>
								                                        
                       		</div>						
						<?php }?>
					</div>
				<?php }}else{?><div></div><?php }?> 
			</div>
			
			
			
			
			
												
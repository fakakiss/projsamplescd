<div>
	<?php
		$q_news       = "select id,caption,img,pos,intro,DATE_FORMAT(date,'%M %d, %Y') from pagelistings where showitem='1' and category='15' order by date desc limit 0,3";
	    $rst_news     = mysql_query($q_news) or die(mysql_error());
	?>	    								
	<?php if(mysql_num_rows($rst_news) > 0){while($row_news = mysql_fetch_array($rst_news)){?>
    
		<div style="text-decoration:none">			  					  			    	
			<?php if(!empty($row_news['caption'])){?>
                <a style="text-decoration: none" href="<?php echo FPNAMEXXNEWS;?>?did=<?php echo $row_news[0]?>&&page_ren=<?php echo $pagecatcode?><?php if($log==md5(YES)){echo "&&xl1=$log";}?>">
                    <div class="right"><b><?php echo $row_news['caption']?></b> - <?php if(!empty($row_news[5])){?><?php echo $row_news[5]?><?php }?></div>
                </a>
			<?php }?>				
		</div>					                  	                  			  
				<?php if(!($row_news['intro'])==""){?>
					<div style="padding-bottom:3px; padding-left:0px">					
                		<?php if(!empty($row_news['img'])){?>
                        	<table align="<?php echo $row_news['pos']?>">
                            	<tr> 
                                	<td>
										<div style="padding-<?php $reg=$row_news['pos'];if ($reg=="left") {echo "right";} ?>:2px" align="<?php echo $row_news['pos']?>">
													<?php
 														if     (!$max_width_news) $max_width_news   = 70;
 														if     (!$max_height_news)$max_height_news  = 70;
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
													<img src="uploads/images/<?php echo $row_news['img']?>" hspace="10px" width="<?php echo "$tn_width_news";?>" height="<?php echo "$tn_height_news";?>"  border="0">
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
								<p class="right"><img src="images/e_punct_b.gif" width="5" height="5" alt="" border="0" align="absmiddle">&nbsp;&nbsp;
									<?php $text=$row_news['intro']; echo substr($text,0,130); ?>
                                </p>
                                
								<p class="right"><a href="<?php echo FPNAMEXXNEWS;?>?did=<?php echo $row_news[0]?>&&page_ren=<?php echo $pagecatcode?><?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Read more</a></p>         
                       		</div>
                            					
						<?php }?>
					</div>
          
	<?php }}else{?><div></div><?php }?>   
</div>
											
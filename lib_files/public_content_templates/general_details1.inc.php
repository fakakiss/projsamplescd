<?php 
    $mysql_id 				  = $_REQUEST['did'];
	$q_page_details           = "select * from pagelistings where showitem='1' and id='$mysql_id'";
    $rst_page_details         = mysql_query($q_page_details) or die(mysql_error());
	if(mysql_num_rows($rst_page_details)>0){$row_page_details = mysql_fetch_array($rst_page_details) or die(mysql_error());}

	$intro=trim($row_page_details['intro']);
	$text1=trim($row_page_details['text1']);
	$text2=trim($row_page_details['text2']);
	$text3=trim($row_page_details['text3']);
	$text4=trim($row_page_details['text4']);
	$text5=trim($row_page_details['text5']);
?>

<table width="0" border="0" cellspacing="0" cellpadding="0" class="bodytxt">
	<tr>
		<td valign="top">
			<?php if(!empty($row_page_details['caption'])){?>
				<div id="pageheader">
                	<h2>
						<?php echo $row_page_details['caption']?>
                    </h2>
                </div>
			<?php }?>
														
            <?php if(!empty($row_page_details['illus2'])){?>								
                <table border=0 cellPadding=0 cellSpacing=0>                             
                    <tr>
						<td>						
							<?php
 								if (!$max_width_illus2) $max_width_illus2  	= 470; 
 								if (!$max_height_illus2)$max_height_illus2 	= 360;    
 								$the_real_image_illus2 						= "uploads/images/".$row_page_details['illus2'];
 								$size_illus2           						= GetImageSize($the_real_image_illus2);
 								$width_illus2          						= $size_illus2[0];
 								$height_illus2         						= $size_illus2[1];
 								$x_ratio_illus2        						= $max_width_illus2 / $width_illus2;
 								$y_ratio_illus2        						= $max_height_illus2 / $height_illus2;
                        		if (($width_illus2  <= $max_width_illus2) && ($height_illus2 <= $max_height_illus2)) 	{ $tn_width_illus2  = $width_illus2; $tn_height_illus2 = $height_illus2; }  
                        		else if (($x_ratio_illus2 * $height_illus2) < ($max_height_illus2)) 					{$tn_height_illus2 = ceil($x_ratio_illus2 * $height_illus2);$tn_width_illus1  = $max_width_illus2;} 
                        		else 																					{$tn_width_illus2  = ceil($y_ratio_illus2 * $width_illus2);$tn_height_illus2= $max_height_illus2; }  
                    		?>	                    
							<div style="padding-bottom:10px "><img src="uploads/images/<?php echo $row_page_details['illus2']?>" width="<?php echo "$tn_width_illus2";?>" height="<?php echo "$tn_height_illus2";?>" class="site_image_border"></div>
						</td>
					</tr>  
               	</table>
          	<?php }?>                                                               	                                                                                  
                                                                                                                                                                                                                   	 
			<?php if(!empty($row_page_details['intro_head'])){?><p><?php echo $row_page_details['intro_head']?></p><?php }?>				
			<?php if(!($intro=="")){?>
				<div style="padding-bottom:10px">					
                	<?php if(!empty($row_page_details['img'])){?>
                        <table align="<?php echo $row_page_details['pos']?>">
                            <tr> 
                                <td>
									<div style="padding-<?php $reg=$row_page_details['pos'];if ($reg=="left") {echo "right";} ?>:10px" align="<?php echo $row_page_details['pos']?>">
										<?php
 											if     (!$max_width) $max_width   = 150;
 											if     (!$max_height)$max_height  = 150;
 											$the_real_image                   = "uploads/images/".$row_page_details['img'];
 											$size                             = GetImageSize($the_real_image);
 											$width                            = $size[0];
 											$height                           = $size[1];
 											$x_ratio                          = $max_width / $width;
 											$y_ratio                          = $max_height / $height;
										    if      (($width  <= $max_width) && ($height <= $max_height)) {$tn_width= $width;$tn_height=$height;}  
 											elseif (($x_ratio * $height) < ($max_height))                 {$tn_height = ceil($x_ratio * $height); $tn_width  = $max_width;}  
 											else                                                          {$tn_width  = ceil($y_ratio * $width); $tn_height = $max_height;} 
										?>                                                     																										
										<img src="uploads/images/<?php echo $row_page_details['img']?>" width="<?php echo "$tn_width";?>" height="<?php echo "$tn_height";?>" class="site_image_border">
									</div>
								</td>
                           	</tr>
                            <?php if(!empty($row_page_details['capt'])){?><tr><td align="center" valign="top"  width="<?php echo "$tn_width";?>"><div style="font-size:9px" align="center"><?php echo $row_page_details['capt']?></div></td></tr><?php }?>                                                
                        </table>
                   	<?php }?>
                <p><?php echo $row_page_details['intro']?></p>                                            
          	</div>						
		<?php }?>
        
		<?php if(!empty($row_page_details['head1'])){?><div style="padding-bottom:10px;font-weight:bold"><?php echo $row_page_details['head1']?></div><?php }?>
		<?php if(!($text1=="")){?>
			<div style="padding-bottom:10px"> 											
        		<?php if(!empty($row_page_details['img1'])){?>			
                	<table align="<?php echo $row_page_details['pos1']?>">
                    	<tr> 
                        	<td>
								<div style="padding-<?php $reg=$row_page_details['pos1'];if ($reg=="left"){echo "right";}?>:10px" align="<?php echo $row_page_details['pos1']?>">                                            	
									<?php
 										if     (!$max_width1) $max_width1  = 150;
 										if     (!$max_height1)$max_height1 = 150;
 										$the_real_image1                   = "uploads/images/".$row_page_details['img1'];
						 				$size1                             = GetImageSize($the_real_image1);
 										$width1                           = $size1[0];
 										$height1                           = $size1[1];
 										$x_ratio1                         = $max_width1 / $width1;
 										$y_ratio1                         = $max_height1 / $height1;
 										if      (($width1  <= $max_width1) && ($height1 <= $max_height1)) {$tn_width1= $width1;$tn_height1=$heigh1t;}  
 										else if (($x_ratio1 * $height1) < ($max_height1))                 {$tn_height1 = ceil($x_ratio1 * $height1); $tn_width1  = $max_width1;}  
 										else                                                              {$tn_width1  = ceil($y_ratio1 * $width1); $tn_height1 = $max_height1;} 
									?>												
									<img src="uploads/images/<?php echo $row_page_details['img1']?>" width="<?php echo "$tn_width1";?>" height="<?php echo "$tn_height1";?>" class="site_image_border">
								</div>
							</td>
                        </tr>
                        <?php if(!empty($row_page_details['capt1'])){?><tr><td align="center" valign="top" width="<?php echo "$tn_width1";?>"><div style="font-size:9px" align="center"><?php echo $row_page_details['capt1']?></div></td></tr><?php }?>                                                                                                                           
                    </table>
               	<?php }?>											
      			<?php echo $row_page_details['text1']?>
			</div>
		<?php }?>							  
									
		<?php if(!empty($row_page_details['head2'])){?><div style="padding-bottom:10px;font-weight:bold"><?php echo $row_page_details['head2']?></div><?php } ?>								  
		<?php if(!($text2=="")){?>
			<div style="padding-bottom:10px">		                                                                         
        		<?php if(!empty($row_page_details['img2'])){?>
        			<table align="<?php echo $row_page_details['pos2']?>">
        				<tr>
                    		<td> 
								<div style="padding-<?php $reg=$row_page_details['pos2'];if ($reg=="left") {echo "right";}?>:10px" align="<?php echo $row_page_details['pos2']?>"> 
									<?php
 										if     (!$max_width2) $max_width2   = 150;
 										if     (!$max_height2)$max_height2  = 150;
 										$the_real_image2                    = "uploads/images/".$row_page_details['img2'];
 										$size2                              = GetImageSize($the_real_image2);
 										$width2                             = $size2[0];
 										$height2                            = $size2[1];
 										$x_ratio2                           = $max_width2 / $width2;
 										$y_ratio2                           = $max_height2 / $height2;
 										if      (($width2<= $max_width2) && ($height2 <= $max_height2))   {$tn_width2  = $width2;  $tn_height2 = $height2;}  
 										elseif (($x_ratio2 * $height2) < ($max_height2))                  {$tn_height2 = ceil($x_ratio2 * $height2); $tn_width2  = $max_width2;}  
 										else                                                              {$tn_width2  = ceil($y_ratio2 * $width2); $tn_height2 = $max_height2;} 
									?>
									<img src="uploads/images/<?php echo $row_page_details['img2']?>" width="<?php echo "$tn_width2";?>" height="<?php echo "$tn_height2";?>"  class="site_image_border"> 
                                </div>
							</td>
                        </tr>                       
                        <?php if(!empty($row_page_details['capt2'])){?><tr><td align="center" valign="top" width="<?php echo "$tn_width2";?>"><div style="font-size:9px" align="center"><?php echo $row_page_details['capt2']?></div></td></tr><?php }?>                                                                                                                                                                                                  
                    </table>
                <?php }?>
                <?php echo $row_page_details['text2']?>
            </div>
		<?php }?>  
								
		<?php if(!empty($row_page_details['head3'])){?><div style="padding-bottom:10px;font-weight:bold"><?php echo $row_page_details['head3']?></div><?php }?>								  																	  
		<?php if(!($text3=="")){?>										  		
        	<div style="padding-bottom:10px"> 
             	<?php if(!empty($row_page_details['img3'])){?>											
                	<table align="<?php echo $row_page_details['pos3']?>">
                    	<tr>
                        	<td>
								<div style="padding-<?php $reg=$row_page_details['pos3'];if($reg=="left"){echo "right";}?>:10px" align="<?php echo $row_page_details['pos3']?>">
									<?php
 										if     (!$max_width3) $max_width3   = 150;
 										if     (!$max_height3)$max_height3  = 150;
 										$the_real_image3                    = "uploads/images/".$row_page_details['img3'];
 										$size3                              = GetImageSize($the_real_image3);
 										$width3                             = $size3[0];
 										$height3                            = $size3[1];
 										$x_ratio3                           = $max_width3 / $width3;
 										$y_ratio3                           = $max_height3 / $height3;
 										if      (($width3  <= $max_width3) && ($height3 <= $max_height3)) {$tn_width3  = $width3;                    $tn_height3 = $height3;}  
 										else if (($x_ratio3 * $height3) < ($max_height3))                 {$tn_height3 = ceil($x_ratio3 * $height3); $tn_width3  = $max_width3;}  
 										else                                                              {$tn_width3  = ceil($y_ratio3 * $width3);  $tn_height3 = $max_height3;} 
									?>
                           			<img src="uploads/images/<?php echo $row_page_details['img3']?>" width="<?php echo "$tn_width3";?>" height="<?php echo "$tn_height3";?>"  class="site_image_border"> 
                                </div>
							</td>
                        </tr> 
                        <?php if(!empty($row_page_details['capt3'])){?><tr><td align="center" valign="top" width="<?php echo "$tn_width3";?>"><div style="font-size:9px" align="center"><?php echo $row_page_details['capt3']?></div></td></tr><?php }?>
                    </table>
                <?php }?>
                <?php echo $row_page_details['text3']?>
            </div>
		<?php }?> 
										  
		<?php if(!empty($row_page_details['head4'])){?><div style="padding-bottom:10px;font-weight:bold"><?php echo $row_page_details['head4']?></div><?php }?>								  
		<?php if(!($text4=="")){?>
			<div style="padding-bottom:10px"> 					  
				<?php if(!empty($row_page_details['img4'])){?>
					<table align="<?php echo $row_page_details['pos4']?>">
						<tr> 
                        	<td>
								<div style="padding-<?php $reg=$row_page_details['pos4'];if ($reg=="left"){echo "right";}?>:10px" align="<?php echo $row_page_details['pos4']?>">											  
									<?php
 										if     (!$max_width4) $max_width4  = 150;
 										if     (!$max_height4)$max_height4 = 150;
 										$the_real_image4                   = "uploads/images/".$row_page_details['img4'];
 										$size4                             = GetImageSize($the_real_image4);
 										$width4                            = $size4[0];
 										$height4                           = $size4[1];
 										$x_ratio4                          = $max_width4 / $width4;
 										$y_ratio4                          = $max_height4 / $height4;
 										if      (($width4  <= $max_width4) && ($height4 <= $max_height4)) 	{$tn_width4= $width4;$tn_height4=$height4;}  
 										elseif (($x_ratio4 * $height4) < ($max_height4))                 	{$tn_height4 = ceil($x_ratio4 * $height4); $tn_width4  = $max_width4;}  
 										else                                                              	{$tn_width4  = ceil($y_ratio4 * $width4); $tn_height4 = $max_height4;} 
									?>
    								<img src="uploads/images/<?php echo $row_page_details['img4']?>" width="<?php echo "$tn_width4";?>" height="<?php echo "$tn_height4";?>" align="right"  class="site_image_border"> 
                            	</div>
							</td>
                         </tr>                                              
                         <?php if(!empty($row_page_details['capt4'])){?><tr><td align="center" valign="top" width="<?php echo "$tn_width4";?>"><div style="font-size:9px" align="center"><?php echo $row_page_details['capt4']?></div></td></tr><?php }?>                                                 
                 	</table>
                	<?php }?>
            		<?php echo $row_page_details['text4']?>
          		</div>										  
			<?php }?> 
										
	        <?php if(!empty($row_page_details['head5'])){?><div style="padding-bottom:10px;font-weight:bold"><?php echo $row_page_details['head5']?></div><?php }?>									    
			<?php if(!($text5=="")){?>  	                                                                                                                                                                   
				<div style="padding-bottom:10px"> 
					<?php if(!empty($row_page_details['img5'])){?>		
						<table align="<?php echo $row_page_details['pos5']?>">
							<tr> 
                				<td>
									<div style="padding-<?php $reg=$row_page_details['pos5'];if($reg=="left"){echo "right";}?>:10px" align="<?php echo $row_page_details['pos5']?>">   
										<?php
 											if     (!$max_width5) $max_width5  = 150;
 											if     (!$max_height5)$max_height5 = 150;
 											$the_real_image5                   = "uploads/images/".$row_page_details['img5'];
 											$size5                             = GetImageSize($the_real_image5);
 											$width5                            = $size5[0];
 											$height5                           = $size5[1];
 											$x_ratio5                          = $max_width5 / $width5;
 											$y_ratio5                          = $max_height5 / $height5;
 											if      (($width5  <= $max_width5) && ($height5 <= $max_height5)) {$tn_width5= $width5;$tn_height5=$height5;}  
 											else if (($x_ratio5 * $height5) < ($max_height5))                 {$tn_height5 = ceil($x_ratio5 * $height5); $tn_width5  = $max_width5;}  
 											else                                                              {$tn_width5  = ceil($y_ratio5 * $width5); $tn_height5 = $max_height5;} 
										?>
                                        <img src="uploads/images/<?php echo $row_page_details['img5']?>" width="<?php echo "$tn_width5";?>" height="<?php echo "$tn_height5";?>" align="right" class="site_image_border"> 
									</div>
		    					</td>
                            </tr>                                
                        	<?php if(!empty($row_page_details['capt5'])){?><tr><td align="center" valign="top" width="<?php echo "$tn_width5";?>"><div style="font-size:9px" align="center"><?php echo $row_page_details['capt5']?></div></td></tr><?php }?>                                            
                    	</table>
                	<?php }?>
                	<?php echo $row_page_details['text5']?>
          		</div>										  
			<?php }?>  										  
		</td>
	</tr>
</table>
		

		


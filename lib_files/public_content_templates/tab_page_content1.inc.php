<?php 
	$intro= stripslashes (trim($row_content['intro']));
	$text1= stripslashes (trim($row_content['text1']));
	$text2= stripslashes (trim($row_content['text2']));
	$text3= stripslashes (trim($row_content['text3']));
	$text4= stripslashes (trim($row_content['text4']));
	$text5= stripslashes (trim($row_content['text5']));
?>


		                                                              
<?php if(!empty($row_content['caption']) && empty($row_content['caption_img'])){?>
	<div style="font-size:17px; font-weight:bold">
		<?php echo $row_content['captionx']?>
	</div>		
<?php }?>

<?php if(!empty($row_content['caption_img'])){?>
	<div style="padding-bottom:5px" align="center">
		<?php
			if(!$max_width) $max_width_caption_img   = 400;
			if(!$max_height)$max_height_caption_img  = 40;
			$the_real_image_caption_img              = "uploads/images/".$row_content['caption_img'];
			$size_caption_img                        = GetImageSize($the_real_image_caption_img);
			$width_caption_img                       = $size_caption_img[0];
			$height_caption_img                      = $size_caption_img[1];
			$x_ratio_caption_img                     = $max_width_caption_img / $width_caption_img;
			$y_ratio_caption_img                     = $max_height_caption_img / $height_caption_img;
			if      (($width_caption_img  <= $max_width_caption_img) && ($height_caption_img <= $max_height_caption_img)) {$tn_width_caption_img= $width_caption_img;$tn_height_caption_img=$height_caption_img;}  
			else if (($x_ratio_caption_img * $height_caption_img) < ($max_height_caption_img))                            {$tn_height_caption_img = ceil($x_ratio_caption_img * $height_caption_img); $tn_width_caption_img  = $max_width_caption_img;}  
			else                                                                                                          {$tn_width_caption_img  = ceil($y_ratio_caption_img * $width_caption_img); $tn_height_caption_img = $max_height_caption_img;} 
		?>                                 																										
		<img src="uploads/images/<?php echo $row_content['caption_img']?>" width="<?php echo "$tn_width_caption_img";?>" height="<?php echo "$tn_height_caption_img";?>"  alt="<?php echo $row_content['caption']?>">
	</div>									
<?php }?>
	                                                                                  
<?php if(empty($row_content['caption1'])) {?><div><?php echo $row_content['caption1']?></div> <?php } ?>										
<?php if(!empty($row_content['caption2'])) {?><div><?php echo $row_content['caption2']?></div> <?php } ?>        
<?php if(!empty($row_content['caption3'])) {?><div><?php echo $row_content['caption3']?></div> <?php } ?>               
<?php if(!empty($row_content['caption4'])) {?><div><?php echo $row_content['caption4']?></div> <?php } ?>										
<?php if(!empty($row_content['caption5'])) {?><div><?php echo $row_content['caption5']?></div> <?php } ?>											
<?php if(!empty($row_content['caption6'])) {?><div><?php echo $row_content['caption6']?></div> <?php } ?>										
<?php if(!empty($row_content['caption7'])) {?><div><?php echo $row_content['caption7']?></div> <?php } ?>										
<?php if(!empty($row_content['caption8'])) {?><div><?php echo $row_content['caption8']?></div> <?php } ?>										
<?php if(!empty($row_content['caption9'])) {?><div><?php echo $row_content['caption9']?></div> <?php } ?>										
<?php if(!empty($row_content['caption10'])){?><div><?php echo $row_content['caption10']?></div><?php } ?>
                                                                                                                                                                                                               				    	 
		    <?php if(empty($row_content['intro_head'])){?><div style="padding-bottom:10px;font-weight:bold"><?php echo $row_content['intro_head']?></div><?php }?>
					
			<?php if(!($intro=="")){?>
				<div >
                	<?php if(!empty($row_content['img'])){?>
                    	<table align="<?php echo $row_content['pos']?>">
                        	<tr> 
                            	<td>
									<div style="padding-<?php $reg=$row_content['pos'];if ($reg=="left") {echo "right";} ?>:10px" align="<?php echo $row_content['pos']?>">
										<?php
 											if     (!$max_width) $max_width   = 300;
 											if     (!$max_height)$max_height  = 300;
 											$the_real_image                   = "uploads/images/".$row_content['img'];
 											$size                             = GetImageSize($the_real_image);
 											$width                            = $size[0];
 											$height                           = $size[1];
 											$x_ratio                          = $max_width / $width;
 											$y_ratio                          = $max_height / $height;
										    if      (($width  <= $max_width) && ($height <= $max_height)) {$tn_width= $width;$tn_height=$height;}  
 											else if (($x_ratio * $height) < ($max_height))                {$tn_height = ceil($x_ratio * $height); $tn_width  = $max_width;}  
 											else                                                          {$tn_width  = ceil($y_ratio * $width); $tn_height = $max_height;} 
										?>                                                     																										
										<img src="uploads/images/<?php echo $row_content['img']?>" width="<?php echo "$tn_width";?>" height="<?php echo "$tn_height";?>" class="site_image_border">
									</div>
								</td>
                           	</tr>
                            <?php if(!empty($row_content['capt'])){?><tr><td align="center" valign="top"  width="<?php echo "$tn_width";?>"><div style="font-size:9px" align="center"><?php echo $row_content['capt']?></div></td></tr><?php }?> 
                     	</table>
                 	<?php }?>
                                    
              	</div>
			<?php }?>
						
			
            				<?php if($pagecatcode=="34x"){?>	
                	<div align="center" style="padding-bottom:20px">	                       
                	<a href="fakacolin_main_tpl1.php?page_ren=44<?php if($log==md5(YES)){echo "&&xl1=$log";}?>" class=a>Custom Web Design and Application Development</a>
<br><br>
					<a href="fakacolin_main_tpl1.php?page_ren=49<?php if($log==md5(YES)){echo "&&xl1=$log";}?>" class=a>Mobile Application Development</a>
<br><br>

					<a href="fakacolin_main_tpl1.php?page_ren=40<?php if($log==md5(YES)){echo "&&xl1=$log";}?>" class=a>E-Marketing</a>
<br><br>
					<a href="fakacolin_main_tpl1.php?page_ren=37<?php if($log==md5(YES)){echo "&&xl1=$log";}?>" class=a>Agile Project Management</a>
<br><br>
					<a href="fakacolin_main_tpl1.php?page_ren=46<?php if($log==md5(YES)){echo "&&xl1=$log";}?>" class=a>Information Technology Training</a>
<br><br>
					<a href="fakacolin_main_tpl1.php?page_ren=43<?php if($log==md5(YES)){echo "&&xl1=$log";}?>" class=a>Game Development</a>
                    </div>	               
                <?php }?>			
						
				
                
  
  
  
  
  
                
                
  			<!-- Text One-->              							
			<?php if(!($text1=="")) { ?>
            
				<div style="padding-bottom:10px; padding-top:10px; font-family:Verdana; font-size:10px">
                 
                	<?php if(!empty($row_content['head1'])) { ?><div style="padding-bottom:10px; font-size:12px"><strong><?php echo $row_content['head1']?></strong></div><?php } ?>
                                                                                                       
                    	<?php if(!empty($row_content['img1'])&& file_exists("uploads/images/".$row_content['img1'])){?>
                        	<table align="<?php echo $row_content['pos1']?>">
                            	<tr> 
                                	<td>
										<div style="padding-<?php $reg=$row_content['pos1'];if ($reg=="left") {echo "right";} ?>:10px" align="<?php echo $row_content['pos1']?>">                                            	
											<?php
 												if     (!$max_width1) $max_width1  = 220;
 												if     (!$max_height1)$max_height1 = 300;
 												$the_real_image1                   = "uploads/images/".$row_content['img1'];
 												$size1                             = GetImageSize($the_real_image1);
 												$width1                            = $size1[0];
 												$height1                           = $size1[1];
 												$x_ratio1                          = $max_width1 / $width1;
 												$y_ratio1                          = $max_height1 / $height1;
 												if      (($width1  <= $max_width1) && ($height1 <= $max_height1)) {$tn_width1= $width1;$tn_height1=$height1;}  
 												else if (($x_ratio1 * $height1) < ($max_height1))                 {$tn_height1 = ceil($x_ratio1 * $height1); $tn_width1  = $max_width1;}  
 												else                                                              {$tn_width1  = ceil($y_ratio1 * $width1); $tn_height1 = $max_height1;} 
											?>												
											<img src="uploads/images/<?php echo $row_content['img1']?>" width="<?php echo "$tn_width1";?>" height="<?php echo "$tn_height1";?>" class="site_image_border">
										</div>
									</td>
                              	</tr>
                                <?php if(!empty($row_content['capt1'])){?><tr><td align="center" valign="top" width="<?php echo "$tn_width1";?>"><div style="font-size:9px" align="center"><?php echo $row_content['capt1']?></div></td></tr><?php }?>                                                                                                                           
                           	</table>
                     	<?php }?>
                        											
      					<?php echo $text1?>
                        
					</div>						
				<?php }?>	
                						  
										
 
                        				
								  
				<?php if(!($text2=="")){?>
					<div style="padding-bottom:10px"> 		  
        				<?php if(!empty($row_content['head2'])){?><div style="padding-bottom:10px; font-size:12px"><b><?php echo $row_content['head2']?></b></div><?php } ?>
                                                                                   
        				<?php if(!empty($row_content['img2'])&& file_exists("uploads/images/".$row_content['img2']) ){?>
        					<table align="<?php echo $row_content['pos2']?>">
        						<tr>
                                	<td> 
										<div style="padding-<?php $reg=$row_content['pos2'];if ($reg=="left") {echo "right";} ?>:10px" align="<?php echo $row_content['pos2']?>"> 
											<?php
 												if     (!$max_width2) $max_width2   = 220;
 												if     (!$max_height2)$max_height2  = 300;
 												$the_real_image2                    = "uploads/images/".$row_content['img2'];
 												$size2                              = GetImageSize($the_real_image2);
 												$width2                             = $size2[0];
 												$height2                            = $size2[1];
 												$x_ratio2                           = $max_width2 / $width2;
 												$y_ratio2                           = $max_height2 / $height2;
 												if      (($width2<= $max_width2) && ($height2 <= $max_height2))   {$tn_width2  = $width2;  $tn_height2 = $height2;}  
 												else if (($x_ratio2 * $height2) < ($max_height2))                 {$tn_height2 = ceil($x_ratio2 * $height2); $tn_width2  = $max_width2;}  
 												else                                                              {$tn_width2  = ceil($y_ratio2 * $width2); $tn_height2 = $max_height2;} 
											?>													
										    <img src="uploads/images/<?php echo $row_content['img2']?>" width="<?php echo "$tn_width2";?>" height="<?php echo "$tn_height2";?>"  class="site_image_border"> 
                                        </div>
									</td>
                             	</tr>                           		
                            	<?php if(!empty($row_content['capt2'])){?><tr><td align="center" valign="top" width="<?php echo "$tn_width2";?>"><div style="font-size:9px" align="center"><?php echo $row_content['capt2']?></div></td></tr> 
                            <?php }?>                                                                                                                                                                                                                                                   
                      	</table>
                	<?php }?>
            		<?php echo $text2?>
            	</div>
			<?php }?>  
										  
										  
										  
			<?php if(!($text3=="")){?>
				<div style="padding-bottom:10px"> 
                	<?php if(!empty($row_content['head3'])){?><div style="padding-bottom:10px; font-size:12px"><strong><?php echo $row_content['head3']?></strong></div><?php }?>                    	                      
                    <?php if(!empty($row_content['img3']) && file_exists("uploads/images/".$row_content['img3'])) {?>
                        <table align="<?php echo $row_content['pos3']?>">
                            <tr>
                            	<td>
									<div style="padding-<?php $reg=$row_content['pos3'];if ($reg=="left") {echo "right";} ?>:10px" align="<?php echo $row_content['pos3']?>">
										<?php
 											if     (!$max_width3) $max_width3   = 200;
 											if     (!$max_height3)$max_height3  = 300;
 											$the_real_image3                    = "uploads/images/".$row_content['img3'];
 											$size3                              = GetImageSize($the_real_image3);
 											$width3                             = $size3[0];
 											$height3                            = $size3[1];
 											$x_ratio3                           = $max_width3 / $width3;
 											$y_ratio3                           = $max_height3 / $height3;
 											if      (($width3  <= $max_width3) && ($height3 <= $max_height3)) {$tn_width3  = $width3;                    $tn_height3 = $height3;}  
 											else if (($x_ratio3 * $height3) < ($max_height3))                 {$tn_height3 = ceil($x_ratio3 * $height3); $tn_width3  = $max_width3;}  
 											else                                                              {$tn_width3  = ceil($y_ratio3 * $width3);  $tn_height3 = $max_height3;} 
										?>
                                        <img src="uploads/images/<?php echo $row_content['img3']?>" width="<?php echo "$tn_width3";?>" height="<?php echo "$tn_height3";?>"  class="site_image_border"> 
                                   	</div>
								</td>
                            </tr>                                                                                   
                            <?php if(!empty($row_content['capt3'])){?><tr><td align="center" valign="top" width="<?php echo "$tn_width3";?>"><div style="font-size:9px" align="center"><?php echo $row_content['capt3']?></div></td></tr><?php }?>         
                       	</table>
                   	<?php }?>
					<?php echo $text3?>
            	</div>
			<?php }?> 
										  
										
										
										  
			<?php if(!($text4=="")) { ?>	
				<div style="padding-bottom:10px"> 				  
					<?php if(!empty($row_content['head4'])){?><div style="padding-bottom:10px; font-size:12px"><strong><?php echo $row_content['head4']?></strong></div><?php } ?>                                                                                                                                                                        
					<?php if(!empty($row_content['img4']) && file_exists("uploads/images/".$row_content['img4'])){?>
						<table align="<?php echo $row_content['pos4']?>">
							<tr> 
                            	<td>
									<div style="padding-<?php $reg=$row_content['pos4'];if ($reg=="left") {echo "right";} ?>:10px" align="<?php echo $row_content['pos4']?>">
										<?php
 											if     (!$max_width4) $max_width4  = 200;
 											if     (!$max_height4)$max_height4 = 300;
 											$the_real_image4                   = "uploads/images/".$row_content['img4'];
 											$size4                             = GetImageSize($the_real_image4);
 											$width4                            = $size4[0];
 											$height4                           = $size4[1];
 											$x_ratio4                          = $max_width4 / $width4;
 											$y_ratio4                          = $max_height4 / $height4;
 											if      (($width4  <= $max_width4) && ($height4 <= $max_height4)) {$tn_width4= $width4;$tn_height4=$height4;}  
 											else if (($x_ratio4 * $height4) < ($max_height4))                 {$tn_height4 = ceil($x_ratio4 * $height4); $tn_width4  = $max_width4;}  
 											else                                                              {$tn_width4  = ceil($y_ratio4 * $width4); $tn_height4 = $max_height4;} 
										?>											   
                                    	<img src="uploads/images/<?php echo $row_content['img4']?>" width="<?php echo "$tn_width4";?>" height="<?php echo "$tn_height4";?>"  align="right"  class="site_image_border"> 
                                     </div>
								</td>
                         	</tr>                    		
                            <?php if(!empty($row_content['capt4'])){?><tr><td align="center" valign="top" width="<?php echo "$tn_width4";?>"><div style="font-size:9px" align="center"><?php echo $row_content['capt4']?></div></td></tr><?php }?> 
                      	</table>
                  	<?php }?>
              		<?php echo $text4?>
           		</div>										  
	     	<?php }?> 
										  


										  
			<?php if(!($text5=="")){ ?>
				<div style="padding-bottom:10px">   
					<?php if(!empty($row_content['head5'])){?><div style="padding-bottom:10px; font-size:12px"><strong><?php echo $row_content['head5']?></strong></div><?php }?>                                                                                                                                                                        
						<?php if(!empty($row_content['img5']) && file_exists("uploads/images/".$row_content['img1'])){?>
							<table align="<?php echo $row_content['pos5']?>">
								<tr> 
                                	<td>
										<div style="padding-<?php $reg=$row_content['pos5'];if ($reg=="left") {echo "right";} ?>:10px" align="<?php echo $row_content['pos5']?>"> 
											<?php
 												if     (!$max_width5) $max_width5  = 200;
 												if     (!$max_height5)$max_height5 = 300;
 												$the_real_image5                   = "uploads/images/".$row_content['img5'];
 												$size5                             = GetImageSize($the_real_image5);
 												$width5                            = $size5[0];
 												$height5                           = $size5[1];
 												$x_ratio5                          = $max_width5 / $width5;
 												$y_ratio5                          = $max_height5 / $height5;
 												if      (($width5  <= $max_width5) && ($height5 <= $max_height5)) {$tn_width5= $width5;$tn_height5=$height5;}  
 												else if (($x_ratio5 * $height5) < ($max_height5))                 {$tn_height5 = ceil($x_ratio5 * $height5); $tn_width5  = $max_width5;}  
 												else                                                              {$tn_width5  = ceil($y_ratio5 * $width5); $tn_height5 = $max_height5;} 
											?>												  
                                           	<img src="uploads/images/<?php echo $row_content['img5']?>" width="<?php echo "$tn_width5"?>" height="<?php echo "$tn_height5" ?>"  align="right"  class="site_image_border"> 
                                     	</div>
									</td>
                            	</tr>                      		
                    		    <?php if(!empty($row_content['capt5'])){?><tr><td align="center" valign="top" width="<?php echo "$tn_width5";?>"><div style="font-size:9px" align="center"><?php echo $row_content['capt5']?></div></td></tr>
						   	<?php }?>                                                        
                		</table>
                    <?php }?>
               		<?php echo $text5?>
             	</div>										  
			<?php }?>
            
            
		
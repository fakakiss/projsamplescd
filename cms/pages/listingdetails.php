<?php
    require('../../lib_files/private.inc.php');
	require('../../lib_files/settings.inc.php');
	require('settings/main_settings.inc.php');
	require('settings/addlisting_editlisting_settings.inc.php');
	
    $mysql_id = $_REQUEST['id'];
	$q = "select * from $system_listing_table where id='$mysql_id'";
	$rst = mysql_query($q) or die(mysql_error());
	if(mysql_num_rows($rst) > 0)
	{$row = mysql_fetch_array($rst) or die(mysql_error());}
?>




<!DOCTYPE html PUBLIC "-//W3C//Dtd html 4.0 transitional//EN">
<html>
<link href="../css/style.css" rel="stylesheet" type="text/css">
<head><title><?php echo $clientname;?> | <?php echo $manager;?> | <?php echo $row['caption']?></title></head>
<body>

<?php cmshead($privite_site_width,$privite_nav_width,$_sess_username,$_user_rights)?>

	  
<div style="padding:10px"> 
		  
	<?php top_module($manager,$add,$view,$viewcat,$addcat,$_sess_username,$_user_rights);?>
		  						      
	
			
			
				<div class="cms_text">
				 
                	<div style="padding-bottom:10px">
					    						
						<table width="0" border="0" cellspacing="0" cellpadding="0">
  							<tr>
        						<td>
		    						<?php if(!empty($row['illus1'])){?>
										<div style="padding-left:0px;padding-right:0px;padding-bottom:5px; padding-top:10px">
											
											
											<?php if(!empty($row['illus1'])){ ?>
 					<?php
 						if (!$max_width_illus1) $max_width_illus1  = 300; 
 						if (!$max_height_illus1)$max_height_illus1 = 60;
    
 						$the_real_image_illus1 = "../../uploads/images/".$row['illus1'];
 						$size_illus1           = GetImageSize($the_real_image_illus1);
 						$width_illus1          = $size_illus1[0];
 						$height_illus1         = $size_illus1[1];

 						$x_ratio_illus1        = $max_width_illus1 / $width_illus1;
 						$y_ratio_illus1        = $max_height_illus1 / $height_illus1;

                        if (($width_illus1  <= $max_width_illus1) && ($height_illus1 <= $max_height_illus1)) { $tn_width_illus1  = $width_illus1; $tn_height_illus1 = $height_illus1; }  
                        else if (($x_ratio_illus1 * $height_illus1) < ($max_height_illus1)) {$tn_height_illus1 = ceil($x_ratio_illus1 * $height_illus1);$tn_width_illus1  = $max_width_illus1;} 
                        else {$tn_width_illus1  = ceil($y_ratio_illus1 * $width_illus1);$tn_height_illus1 = $max_height_illus1; }  
                    ?>	
                    <img src="../../uploads/images/<?php echo $row['illus1']?>" width="<?php echo "$tn_width_illus1";?>" height="<?php echo "$tn_height_illus1";?>" class="cms_image_border" > 
				<?php }?>
				
											
											
										</div>
									<?php } ?>
									
									<?php if(!empty($row['illus2'])){?>
										<div style="padding-left:0px;padding-right:0px;padding-bottom:5px">
											<?php if(!empty($row['illus2'])){ ?>
 					<?php
 						if (!$max_width_illus2) $max_width_illus2  = 300; 
 						if (!$max_height_illus2)$max_height_illus2 = 60;
    
 						$the_real_image_illus2 = "../../uploads/images/".$row['illus2'];
 						$size_illus2   = GetImageSize($the_real_image_illus2);
 						$width_illus2  = $size_illus2[0];
 						$height_illus2 = $size_illus2[1];

 						$x_ratio_illus2 = $max_width_illus2 / $width_illus2;
 						$y_ratio_illus2 = $max_height_illus2 / $height_illus2;

 						if (($width_illus2  <= $max_width_illus2) && ($height_illus2 <= $max_height_illus2)) { $tn_width_illus2  = $width_illus2; $tn_height_illus2 = $height_illus2; }  
 						else if (($x_ratio_illus2 * $height_illus2) < ($max_height_illus2)) {$tn_height_illus2 = ceil($x_ratio_illus2 * $height_illus2);$tn_width_illus2  = $max_width_illus2;} 
 						else {$tn_width_illus2  = ceil($y_ratio_illus2 * $width_illus2);$tn_height_illus2 = $max_height_illus2; }  
					?>	
					<img src="../../uploads/images/<?php echo $row['illus2']?>" width="<?php echo "$tn_width_illus2";?>" height="<?php echo "$tn_height_illus2";?>" class="cms_image_border"> 
				<?php }?>
										</div>
									<?php } ?>
										
									<?php if(!empty($row['illus3'])){?>
										<div style="padding-left:0px;padding-right:0px;padding-bottom:5px">
											<?php if(!empty($row['illus3'])){ ?>
 					<?php
 						if (!$max_width_illus3) $max_width_illus3  = 300; 
 						if (!$max_height_illus3)$max_height_illus3 = 60;
    
 						$the_real_image_illus3 = "../../uploads/images/".$row['illus3'];
 						$size_illus3   = GetImageSize($the_real_image_illus3);
 						$width_illus3  = $size_illus3[0];
 						$height_illus3 = $size_illus3[1];

 						$x_ratio_illus3 = $max_width_illus3 / $width_illus3;
 						$y_ratio_illus3 = $max_height_illus3 / $height_illus3;

 						if (($width_illus3  <= $max_width_illus3) && ($height_illus3 <= $max_height_illus3)) { $tn_width_illus3  = $width_illus3; $tn_height_illus3 = $height_illus3; }  
 						else if (($x_ratio_illus3 * $height_illus3) < ($max_height_illus3)) {$tn_height_illus3 = ceil($x_ratio_illus3 * $height_illus3);$tn_width_illus3  = $max_width_illus3;} 
 						else {$tn_width_illus3  = ceil($y_ratio_illus3 * $width_illus3);$tn_height_illus3 = $max_height_illus3; }  
					?>	
					<img src="../../uploads/images/<?php echo $row['illus3']?>" width="<?php echo "$tn_width_illus3";?>" height="<?php echo "$tn_height_illus3";?>" class="cms_image_border"> 
				<?php }?>
										</div>
									<?php } ?>
									
									<?php if(!empty($row['illus4'])){?>
										<div style="padding-left:0px;padding-right:0px;padding-bottom:5px">
											<?php if(!empty($row['illus4'])){ ?>
		   		<?php
 					if (!$max_width_illus4) $max_width_illus4  = 300; 
 					if (!$max_height_illus4)$max_height_illus4 = 60;
    
 					$the_real_image_illus4 = "../../uploads/images/".$row['illus4'];
 					$size_illus4   = GetImageSize($the_real_image_illus4);
 					$width_illus4  = $size_illus4[0];
 					$height_illus4 = $size_illus4[1];

 					$x_ratio_illus4 = $max_width_illus4 / $width_illus4;
 					$y_ratio_illus4 = $max_height_illus4 / $height_illus4;

 					if (($width_illus4  <= $max_width_illus4) && ($height_illus4 <= $max_height_illus4)) { $tn_width_illus4  = $width_illus4; $tn_height_illus4 = $height_illus4; }  
 					else if (($x_ratio_illus4 * $height_illus4) < ($max_height_illus4)) {$tn_height_illus4 = ceil($x_ratio_illus4 * $height_illus4);$tn_width_illus4  = $max_width_illus4;} 
 					else {$tn_width_illus4  = ceil($y_ratio_illus4 * $width_illus4);$tn_height_illus4 = $max_height_illus4; }  
				?>	
		<img src="../../uploads/images/<?php echo $row['illus4']?>" width="<?php echo "$tn_width_illus4";?>" height="<?php echo "$tn_height_illus4";?>" class="cms_image_border"> 
		<?php }?>
										</div>
									<?php } ?>
									
									<?php if(!empty($row['illus5'])){?>
										<div style="padding-left:0px;padding-right:0px;padding-bottom:5px">
											<?php if(!empty($row['illus5'])){ ?>
	<?php
 		if (!$max_width_illus5) $max_width_illus5  = 300; 
 		if (!$max_height_illus5)$max_height_illus5 = 60;
    
 		$the_real_image_illus5 = "../../uploads/images/".$row['illus5'];
 		$size_illus5   = GetImageSize($the_real_image_illus5);
 		$width_illus5  = $size_illus5[0];
 		$height_illus5 = $size_illus5[1];

 		$x_ratio_illus5 = $max_width_illus5 / $width_illus5;
 		$y_ratio_illus5 = $max_height_illus5 / $height_illus5;

 		if (($width_illus5  <= $max_width_illus5) && ($height_illus5 <= $max_height_illus5)) { $tn_width_illus5  = $width_illus5; $tn_height_illus5 = $height_illus5; }  
 		else if (($x_ratio_illus5 * $height_illus5) < ($max_height_illus5)) {$tn_height_illus5 = ceil($x_ratio_illus5 * $height_illus5);$tn_width_illus5  = $max_width_illus5;} 
 		else {$tn_width_illus5  = ceil($y_ratio_illus5 * $width_illus5);$tn_height_illus5 = $max_height_illus5; }  
	?>	
	<img src="../../uploads/images/<?php echo $row['illus5']?>" width="<?php echo "$tn_width_illus5";?>" height="<?php echo "$tn_height_illus5";?>" class="cms_image_border">
<?php }?>
										</div>
									<?php } ?>
								</td>
							   
            					<td>         
		    					
								</td>
							</tr>
						</table>
				  </div>		
						
						
						<table width="0" border="0" cellspacing="0" cellpadding="0" class="cms_text" >
 							 <tr>
    							<td valign="top">
								
						<?php if(!empty($row['date'])){?><div class="cms_date"><?php echo $row['date']?></div><?php } ?>                                                                  
                    	<?php if(!empty($row['caption'])){?><div class="cms_head"> <?php echo $row['caption']?></div><?php } ?>                                                                                    
						<?php if(!empty($row['caption_img'])){?>
                        	<div>
                            	<img src="../../uploads/images/<?php echo $row['caption_img']?>"  class="cms_image_border">
                             </div>
						<?php } ?>                                          									  
                    	<?php if(!empty($row['caption1'])){?><div><?php echo $row['caption1']?></div><?php } ?>										  
						<?php if(!empty($row['caption2'])){?><div><?php echo $row['caption2']?></div><?php } ?>                                                                                   
                    	<?php if(!empty($row['caption3'])){?><div><?php echo $row['caption3']?></div><?php } ?>                                                                                  
                    	<?php if(!empty($row['caption4'])){?><div><?php echo $row['caption4']?></div><?php } ?>										  
						<?php if(!empty($row['caption5'])){?><div><?php echo $row['caption5']?></div><?php } ?>										  										  
						<?php if(!empty($row['caption6'])){?><div><?php echo $row['caption6']?></div><?php } ?>										  
						<?php if(!empty($row['caption7'])){?><div><?php echo $row['caption7']?></div><?php } ?>										  
						<?php if(!empty($row['caption8'])){?><div><?php echo $row['caption8']?></div><?php } ?>										  
						<?php if(!empty($row['caption9'])){?><div><?php echo $row['caption9']?></div><?php } ?>										  
						<?php if(!empty($row['caption10'])){?><div><?php echo $row['caption10']?></div><?php } ?>
                                                                                                                                                                                                             
                    	<div class="readmore_bottoms" style="padding-top:5px"><a href="editlisting.php?id=<?php echo $row[0]?>">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="deletelisting.php?id=<?php echo $row[0]?>">Delete</a></div> 
                                                                                      
            
																																								
                    <div> 
					
						<?php if(!empty($row['intro_head'])) { ?><div style="padding-bottom:10px;font-weight:bold"><?php echo $row['intro_head']?></div><?php } ?>
					
                    	<div style="padding-bottom:10px"> 
                        	<?php if(!empty($row['img'])){?>
                            	<table align="<?php echo $row['pos']?>">
                                	<tr> 
                                    	<td>
											<div style="padding-<?php $reg=$row['pos'];if ($reg=="left") {echo "right";} ?>:10px" align="<?php echo $row['pos']?>">
												<?php
 													if     (!$max_width) $max_width   = 150;
 													if     (!$max_height)$max_height  = 150;
 													$the_real_image                   = "../../uploads/images/".$row['img'];
 													$size                             = GetImageSize($the_real_image);
 													$width                            = $size[0];
 													$height                           = $size[1];
 													$x_ratio                          = $max_width / $width;
 													$y_ratio                          = $max_height / $height;
										    		if      (($width  <= $max_width) && ($height <= $max_height)) {$tn_width= $width;$tn_height=$height;}  
 													else if (($x_ratio * $height) < ($max_height))                {$tn_height = ceil($x_ratio * $height); $tn_width  = $max_width;}  
 													else                                                          {$tn_width  = ceil($y_ratio * $width); $tn_height = $max_height;} 
												?> 
                                                    																										
												<img src="../../uploads/images/<?php echo $row['img']?>" width="<?php echo "$tn_width";?>" height="<?php echo "$tn_height";?>" class="cms_image_border">
											 </div>
										</td>
                                   	</tr>
                              		<?php if(!empty($row['capt'])){?><tr><td align="center" valign="top"><div style="font-size:9px" align="center"><?php echo $row['capt']?></div></td></tr><?php }?> 
                                               
                                    </table>
                             <?php }?>
                             <strong><?php echo $row['intro']?></strong>
                                            
                       	</div>
											
											
                        <?php if(!empty($row['head1'])) { ?><div style="padding-bottom:10px;font-weight:bold"><?php echo $row['head1']?></div><?php } ?>
                                                                                   
                         <div style="padding-bottom:10px"> 
                         	<?php if(!empty($row['img1'])){?>
                            	<table align="<?php echo $row['pos1']?>">
                                	<tr> 
                                    	<td>
<div style="padding-<?php $reg=$row['pos1'];if ($reg=="left") {echo "right";} ?>:10px" align="<?php echo $row['pos1']?>"> 
                                            	
<?php
 if     (!$max_width1) $max_width1  = 150;
 if     (!$max_height1)$max_height1 = 150;
 $the_real_image1                   = "../../uploads/images/".$row['img1'];
 $size1                             = GetImageSize($the_real_image1);
 $width1                           = $size1[0];
 $height1                           = $size1[1];
 $x_ratio1                         = $max_width1 / $width1;
 $y_ratio1                         = $max_height1 / $height1;
 if      (($width1  <= $max_width1) && ($height1 <= $max_height1)) {$tn_width1= $width1;$tn_height1=$heigh1t;}  
 else if (($x_ratio1 * $height1) < ($max_height1))                 {$tn_height1 = ceil($x_ratio1 * $height1); $tn_width1  = $max_width1;}  
 else                                                              {$tn_width1  = ceil($y_ratio1 * $width1); $tn_height1 = $max_height1;} 
?>
												
												<img src="../../uploads/images/<?php echo $row['img1']?>" width="<?php echo "$tn_width1";?>" height="<?php echo "$tn_height1";?>" class="cms_image_border">
											</div>
									    </td>
                                    </tr>
                                    <?php if(!empty($row['capt1'])){?><tr><td align="center" valign="top"><div style="font-size:9px" align="center"><?php echo $row['capt1']?></div></td></tr><?php }?>                                                                                                                           
                                   </table>
                              <?php }?>
											
      <?php echo $row['text1']?>
</div>
										  
										  
										  
        <?php if(!empty($row['head2'])){?><div style="padding-bottom:10px;font-weight:bold"><?php echo $row['head2']?></div><?php } ?>
                                                                                   
        <div style="padding-bottom:10px"> 
        <?php if(!empty($row['img2'])){?>
        <table align="<?php echo $row['pos2']?>">
        <tr>
                                                <td> 
												  <div style="padding-<?php $reg=$row['pos2'];if ($reg=="left") {echo "right";} ?>:10px" align="<?php echo $row['pos2']?>"> 
                                                    
													
													<?php
 if     (!$max_width2) $max_width2   = 150;
 if     (!$max_height2)$max_height2  = 150;
 $the_real_image2                    = "../../uploads/images/".$row['img2'];
 $size2                              = GetImageSize($the_real_image2);
 $width2                             = $size2[0];
 $height2                            = $size2[1];
 $x_ratio2                           = $max_width2 / $width2;
 $y_ratio2                           = $max_height2 / $height2;
 if      (($width2<= $max_width2) && ($height2 <= $max_height2))   {$tn_width2  = $width2;  $tn_height2 = $height2;}  
 else if (($x_ratio2 * $height2) < ($max_height2))                 {$tn_height2 = ceil($x_ratio2 * $height2); $tn_width2  = $max_width2;}  
 else                                                              {$tn_width2  = ceil($y_ratio2 * $width2); $tn_height2 = $max_height2;} 
?>
													
													<img src="../../uploads/images/<?php echo $row['img2']?>" width="<?php echo "$tn_width2";?>" height="<?php echo "$tn_height2";?>"  class="cms_image_border"> 
                                                  </div></td>
                                              </tr>
                                              <?php if(!empty($row['capt2'])){?>
                                              <tr><td align="center" valign="top"><div style="font-size:9px" align="center"><?php echo $row['capt2']?></div></td></tr> 
                                              <?php }?>  
                                                                                                                                                                                                                                                 
                                            </table>
                                            <?php }?>
                                            <?php echo $row['text2']?>
                                          </div>
										  
										  
										  
										  
										  
										  
                                          <?php if(!empty($row['head3'])) { ?>
                                          <div style="padding-bottom:10px;font-weight:bold">
                                            <?php echo $row['head3']?>
                                          </div>
                                          <?php } ?>
                                          <div style="padding-bottom:10px"> 
                                            <?php if(!empty($row['img3'])){?>
                                            <table align="<?php echo $row['pos3']?>">
                                              <tr>
                                                <td> <div style="padding-<?php $reg=$row['pos3'];if ($reg=="left") {echo "right";} ?>:10px" align="<?php echo $row['pos3']?>">
												
												
												<?php
 if     (!$max_width3) $max_width3   = 150;
 if     (!$max_height3)$max_height3  = 150;
 $the_real_image3                    = "../../uploads/images/".$row['img3'];
 $size3                              = GetImageSize($the_real_image3);
 $width3                             = $size3[0];
 $height3                            = $size3[1];
 $x_ratio3                           = $max_width3 / $width3;
 $y_ratio3                           = $max_height3 / $height3;
 if      (($width3  <= $max_width3) && ($height3 <= $max_height3)) {$tn_width3  = $width3;                    $tn_height3 = $height3;}  
 else if (($x_ratio3 * $height3) < ($max_height3))                 {$tn_height3 = ceil($x_ratio3 * $height3); $tn_width3  = $max_width3;}  
 else                                                              {$tn_width3  = ceil($y_ratio3 * $width3);  $tn_height3 = $max_height3;} 
?>

												 
                                                    <img src="../../uploads/images/<?php echo $row['img3']?>" width="<?php echo "$tn_width3";?>" height="<?php echo "$tn_height3";?>"  class="cms_image_border"> 
                                                  </div></td>
                                              </tr>
                                              <?php if(!empty($row['capt3'])){?>
                                              <tr> 
                                                <td align="center" valign="top"> 
                                                  <div style="font-size:9px" align="center">
                                                    <?php echo $row['capt3']?>
                                                  </div></td>
                                              </tr>
                                              <?php }?>
                                            </table>
                                            <?php }?>
                                            <?php echo $row['text3']?>
                                          </div>
										  
										  
										  
										  
<?php if(!empty($row['head4'])){?><div style="padding-bottom:10px;font-weight:bold"><?php echo $row['head4']?></div><?php } ?>
                                                                                                                                                                         
<div style="padding-bottom:10px"> 
<?php if(!empty($row['img4'])){?>
<table align="<?php echo $row['pos4']?>">
<tr> 
                                                <td>
												  <div style="padding-<?php $reg=$row['pos4'];if ($reg=="left") {echo "right";} ?>:10px" align="<?php echo $row['pos4']?>">
												  
												  
												  <?php
 if     (!$max_width4) $max_width4  = 150;
 if     (!$max_height4)$max_height4 = 150;
 $the_real_image4                   = "../../uploads/images/".$row['img4'];
 $size4                             = GetImageSize($the_real_image4);
 $width4                            = $size4[0];
 $height4                           = $size4[1];
 $x_ratio4                          = $max_width4 / $width4;
 $y_ratio4                          = $max_height4 / $height4;
 if      (($width4  <= $max_width4) && ($height4 <= $max_height4)) {$tn_width4= $width4;$tn_height4=$height4;}  
 else if (($x_ratio4 * $height4) < ($max_height4))                 {$tn_height4 = ceil($x_ratio4 * $height4); $tn_width4  = $max_width4;}  
 else                                                              {$tn_width4  = ceil($y_ratio4 * $width4); $tn_height4 = $max_height4;} 
?>

												   
                                                    <img src="../../uploads/images/<?php echo $row['img4']?>" width="<?php echo "$tn_width4";?>" height="<?php echo "$tn_height4";?>"  align="right"  class="cms_image_border"> 
                                                  </div>
												  </td>
                                              </tr>
                                              <?php if(!empty($row['capt4'])){?>
                                              <tr><td align="center" valign="top"><div style="font-size:9px" align="center"><?php echo $row['capt4']?></div></td></tr>
											  <?php }?> 
                                                                                             
                                            </table>
                                            <?php }?>
                                            <?php echo $row['text4']?>
                                          </div>
										  
										  
										  
<?php if(!empty($row['head5'])){?><div style="padding-bottom:10px;font-weight:bold"><?php echo $row['head5']?></div><?php } ?>
                                                                                                                                                                         
<div style="padding-bottom:10px"> 
<?php if(!empty($row['img5'])){?>
<table align="<?php echo $row['pos5']?>">
<tr> 
                                                <td>
												  <div style="padding-<?php $reg=$row['pos5'];if ($reg=="left") {echo "right";} ?>:10px" align="<?php echo $row['pos5']?>"> 
												  
												  
												  <?php
 if     (!$max_width5) $max_width5  = 150;
 if     (!$max_height5)$max_height5 = 150;
 $the_real_image5                   = "../../uploads/images/".$row['img5'];
 $size5                             = GetImageSize($the_real_image5);
 $width5                            = $size5[0];
 $height5                           = $size5[1];
 $x_ratio5                          = $max_width5 / $width5;
 $y_ratio5                          = $max_height5 / $height5;
 if      (($width5  <= $max_width5) && ($height5 <= $max_height5)) {$tn_width5= $width5;$tn_height5=$height5;}  
 else if (($x_ratio5 * $height5) < ($max_height5))                 {$tn_height5 = ceil($x_ratio5 * $height5); $tn_width5  = $max_width5;}  
 else                                                              {$tn_width5  = ceil($y_ratio5 * $width5); $tn_height5 = $max_height5;} 
?>
												  
                                                    <img src="../../uploads/images/<?php echo $row['img5']?>" width="<?php echo "$tn_width5";?>" height="<?php echo "$tn_height5";?>"  align="right"  class="cms_image_border"> 
                                                  </div>
												  </td>
                                              </tr>
                                              <?php if(!empty($row['capt5'])){?>
                                              <tr><td align="center" valign="top"><div style="font-size:9px" align="center"><?php echo $row['capt5']?></div></td></tr>
											  <?php }?> 
                                                                                             
                                            </table>
                                            <?php }?>
                                            <?php echo $row['text5']?>
                                          </div>
										  										  
										  
										  
										  
								
								</td>
								
								
    							<td valign="top">
								
								    
									<div style="padding:5px">
									<?php if(!empty($row['add1'])){ ?>
	<?php
 		if (!$max_width_add1) $max_width_add1  = 150; 
 		if (!$max_height_add1)$max_height_add1 = 200;
    
 		$the_real_image_add1 = "../../uploads/images/".$row['add1'];
 		$size_add1   = GetImageSize($the_real_image_add1);
 		$width_add1  = $size_add1[0];
 		$height_add1 = $size_add1[1];

 		$x_ratio_add1 = $max_width_add1 / $width_add1;
 		$y_ratio_add1 = $max_height_add1 / $height_add1;

 		if (($width_add1  <= $max_width_add1) && ($height_add1 <= $max_height_add1)) { $tn_width_add1  = $width_add1; $tn_height_add1 = $height_add1; }  
 		else if (($x_ratio_add1 * $height_add1) < ($max_height_add1)) {$tn_height_add1 = ceil($x_ratio_add1 * $height_add1);$tn_width_add1  = $max_width_add1;} 
 		else {$tn_width_add1  = ceil($y_ratio_add1 * $width_add1);$tn_height_add1 = $max_height_add1; }  
	?>	
	<img src="../../uploads/images/<?php echo $row['add1']?>" width="<?php echo "$tn_width_add1";?>" height="<?php echo "$tn_height_add1";?>" class="cms_image_border"> 
<?php }?>
									</div>
									
									
									
									<div style="padding:5px">
									<?php if(!empty($row['add2'])){ ?>
	<?php
 		if (!$max_width_add2) $max_width_add2  = 150; 
 		if (!$max_height_add2)$max_height_add2 = 200;
    
 		$the_real_image_add2 = "../../uploads/images/".$row['add2'];
 		$size_add2   = GetImageSize($the_real_image_add2);
 		$width_add2  = $size_add2[0];
 		$height_add2 = $size_add2[1];

 		$x_ratio_add2 = $max_width_add2 / $width_add2;
 		$y_ratio_add2 = $max_height_add2 / $height_add2;

 		if (($width_add2  <= $max_width_add2) && ($height_add2 <= $max_height_add2)) { $tn_width_add2  = $width_add2; $tn_height_add2 = $height_add2; }  
 		else if (($x_ratio_add2 * $height_add2) < ($max_height_add2)) {$tn_height_add2 = ceil($x_ratio_add2 * $height_add2);$tn_width_add2  = $max_width_add2;} 
 		else {$tn_width_add2  = ceil($y_ratio_add2 * $width_add2);$tn_height_add2 = $max_height_add2; }  
	?>	
	<img src="../../uploads/images/<?php echo $row['add2']?>" width="<?php echo "$tn_width_add2";?>" height="<?php echo "$tn_height_add2";?>" class="cms_image_border">
<?php }?>
									</div>
									
									
									
									<div style="padding:5px">
									<?php if(!empty($row['add3'])){ ?>
	<?php
 		if (!$max_width_add3) $max_width_add3  = 150; 
 		if (!$max_height_add3)$max_height_add3 = 200;
    
 		$the_real_image_add3 = "../../uploads/images/".$row['add3'];
 		$size_add3   = GetImageSize($the_real_image_add3);
 		$width_add3  = $size_add3[0];
 		$height_add3 = $size_add3[1];

 		$x_ratio_add3 = $max_width_add3 / $width_add3;
 		$y_ratio_add3 = $max_height_add3 / $height_add3;

 		if (($width_add3  <= $max_width_add3) && ($height_add3 <= $max_height_add3)) { $tn_width_add3  = $width_add3; $tn_height_add3 = $height_add3; }  
 		else if (($x_ratio_add3 * $height_add3) < ($max_height_add3)) {$tn_height_add3 = ceil($x_ratio_add3 * $height_add3);$tn_width_add3  = $max_width_add3;} 
 		else {$tn_width_add3  = ceil($y_ratio_add3 * $width_add3);$tn_height_add3 = $max_height_add3; }  
	?>	
	<img src="../../uploads/images/<?php echo $row['add3']?>" width="<?php echo "$tn_width_add3";?>" height="<?php echo "$tn_height_add3";?>" class="cms_image_border"> 
<?php }?>
									</div>
									
									
									<?php if(!empty($row['add4'])){?>
									<div style="padding:5px">
									 
		   <?php if(!empty($row['add4'])){ ?>
	<?php
 		if (!$max_width_add4) $max_width_add4  = 150; 
 		if (!$max_height_add4)$max_height_add4 = 200;
    
 		$the_real_image_add4 = "../../uploads/images/".$row['add4'];
 		$size_add4   = GetImageSize($the_real_image_add4);
 		$width_add4  = $size_add4[0];
 		$height_add4 = $size_add4[1];

 		$x_ratio_add4 = $max_width_add4 / $width_add4;
 		$y_ratio_add4 = $max_height_add4 / $height_add4;

 		if (($width_add4  <= $max_width_add4) && ($height_add4 <= $max_height_add4)) { $tn_width_add4  = $width_add4; $tn_height_add4 = $height_add4; }  
 		else if (($x_ratio_add4 * $height_add4) < ($max_height_add4)) {$tn_height_add4 = ceil($x_ratio_add4 * $height_add4);$tn_width_add4  = $max_width_add4;} 
 		else {$tn_width_add4  = ceil($y_ratio_add4 * $width_add4);$tn_height_add4 = $max_height_add4; }  
	?>	
	<img src="../../uploads/images/<?php echo $row['add4']?>" width="<?php echo "$tn_width_add4";?>" height="<?php echo "$tn_height_add4";?>" class="cms_image_border"> 
<?php }?>
		   
									</div>
									<?php }?>
									
									
									<div style="padding:5px">
									<?php if(!empty($row['add5'])){ ?>
	<?php
 		if (!$max_width_add5) $max_width_add5  = 150; 
 		if (!$max_height_add5)$max_height_add5 = 200;
    
 		$the_real_image_add5 = "../../uploads/images/".$row['add5'];
 		$size_add5   = GetImageSize($the_real_image_add5);
 		$width_add5  = $size_add5[0];
 		$height_add5 = $size_add5[1];

 		$x_ratio_add5 = $max_width_add5 / $width_add5;
 		$y_ratio_add5 = $max_height_add5 / $height_add5;

 		if (($width_add5  <= $max_width_add5) && ($height_add5 <= $max_height_add5)) { $tn_width_add5  = $width_add5; $tn_height_add5 = $height_add5; }  
 		else if (($x_ratio_add5 * $height_add5) < ($max_height_add5)) {$tn_height_add5 = ceil($x_ratio_add5 * $height_add5);$tn_width_add5  = $max_width_add5;} 
 		else {$tn_width_add5  = ceil($y_ratio_add5 * $width_add5);$tn_height_add5 = $max_height_add5; }  
	?>	
	<img src="../../uploads/images/<?php echo $row['add5']?>" width="<?php echo "$tn_width_add5";?>" height="<?php echo "$tn_height_add5";?>" class="cms_image_border"> 
<?php }?>
									</div>
									
								
								
								</td>
  							</tr>
							</table>

															 
                    	
										  
										  
                                          <span class="readmore_bottoms">
										  <a href="editlisting.php?id=<?php echo $row[0]?>">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                          <a href="deletelisting.php?id=<?php echo $row[0]?>">Delete</a> 
                                          </span><br><br>
                                          
                                          
                                          
                                          
                                          <?php include('../../lib_files/private_content_templates/gallery_images1.inc.php')?>
                                          
                                          
                                          <span class="readmore_bottoms"><a href="javascript:history.back(-1)"><< back</a></span> 
                                        
										
										
					</div>  
				</td>
			</tr>
		</table> 
																
	</div>
		  		     		
<?php cmsfooter()?>


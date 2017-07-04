<?php 
	$intro= stripslashes (trim($row_main_page['intro']));
	$text1= stripslashes (trim($row_main_page['text1']));
	$text2= stripslashes (trim($row_main_page['text2']));
	$text3= stripslashes (trim($row_main_page['text3']));
	$text4= stripslashes (trim($row_main_page['text4']));
	$text5= stripslashes (trim($row_main_page['text5']));
?>
                                                                                 
<?php if(!empty($row_main_page['caption1x'])) {?><div><?php echo $row_main_page['caption1']?></div> <?php } ?>										
<?php if(!empty($row_main_page['caption2x'])) {?><div><?php echo $row_main_page['caption2']?></div> <?php } ?>        
<?php if(!empty($row_main_page['caption3x'])) {?><div><?php echo $row_main_page['caption3']?></div> <?php } ?>               
<?php if(!empty($row_main_page['caption4x'])) {?><div><?php echo $row_main_page['caption4']?></div> <?php } ?>										
<?php if(!empty($row_main_page['caption5x'])) {?><div><?php echo $row_main_page['caption5']?></div> <?php } ?>											
<?php if(!empty($row_main_page['caption6x'])) {?><div><?php echo $row_main_page['caption6']?></div> <?php } ?>										
<?php if(!empty($row_main_page['caption7x'])) {?><div><?php echo $row_main_page['caption7']?></div> <?php } ?>										
<?php if(!empty($row_main_page['caption8x'])) {?><div><?php echo $row_main_page['caption8']?></div> <?php } ?>										
<?php if(!empty($row_main_page['caption9x'])) {?><div><?php echo $row_main_page['caption9']?></div> <?php } ?>										
<?php if(!empty($row_main_page['caption10x'])){?><div><?php echo $row_main_page['caption10']?></div><?php } ?>
                                                                                                                                                                                                               				    	 
<?php if(empty($row_main_page['intro_headx'])){?>
	<div style="padding-bottom:10px;font-weight:bold"><?php echo $row_main_page['intro_head']?></div>
<?php }?>
					
			<?php if(!($introx=="")){?>
				<div >
                	<?php if(!empty($row_main_page['img'])){?>
                    	<table align="<?php echo $row_main_page['pos']?>">
                        	<tr> 
                            	<td>
									<div style="padding-<?php $reg=$row_main_page['pos'];if ($reg=="left") {echo "right";} ?>:10px" align="<?php echo $row_main_page['pos']?>">
										<?php
 											if     (!$max_width) $max_width   = 300;
 											if     (!$max_height)$max_height  = 300;
 											$the_real_image                   = "uploads/images/".$row_main_page['img'];
 											$size                             = GetImageSize($the_real_image);
 											$width                            = $size[0];
 											$height                           = $size[1];
 											$x_ratio                          = $max_width / $width;
 											$y_ratio                          = $max_height / $height;
										    if      (($width  <= $max_width) && ($height <= $max_height)) {$tn_width= $width;$tn_height=$height;}  
 											else if (($x_ratio * $height) < ($max_height))                {$tn_height = ceil($x_ratio * $height); $tn_width  = $max_width;}  
 											else                                                          {$tn_width  = ceil($y_ratio * $width); $tn_height = $max_height;} 
										?>                                                     																										
										<img src="uploads/images/<?php echo $row_main_page['img']?>" width="<?php echo "$tn_width";?>" height="<?php echo "$tn_height";?>" class="site_image_border">
									</div>
								</td>
                           	</tr>
                            <?php if(!empty($row_main_page['capt'])){?><tr><td align="center" valign="top"  width="<?php echo "$tn_width";?>"><div style="font-size:9px" align="center"><?php echo $row_main_page['capt']?></div></td></tr><?php }?> 
                     	</table>
                 	<?php }?>
                                    
              	</div>
			<?php }?>
						








<div id="main-wrapper">

	<div id="main" class="clearfix with-navigation">
    
		<div id="content" class="row " role="main">
        
        	<div class="pageWidth">
    
				<div class="column col77-7 primary">
		
					
                    
            		<nav class="breadcrumb" role="navigation">    
                    	<h2>
							<?php if(!empty($row_main_page['caption'])){?>        
                                <?php echo $row_main_page['caption']?>        
                            <?php }?>
                        </h2>
                    </nav> 
                    
                    <ul>
                    	<li>
                        	<a href="index.php?lpage_ren=<?php echo $row_main_page[0]?>" title="<?php echo $row_main_page['caption']?>"><?php echo $row_main_page['caption']?></a> &raquo; 
                        </li>
                   	</ul>     
                    
                    
                    
					<?php if(!empty($row_main_page['caption_img'])){?>
                        <div style="padding-bottom:5px" align="center">
                            <?php
                                if(!$max_width) $max_width_caption_img   = 718;
                                if(!$max_height)$max_height_caption_img  = 500;
                                $the_real_image_caption_img              = "uploads/images/".$row_main_page['caption_img'];
                                $size_caption_img                        = GetImageSize($the_real_image_caption_img);
                                $width_caption_img                       = $size_caption_img[0];
                                $height_caption_img                      = $size_caption_img[1];
                                $x_ratio_caption_img                     = $max_width_caption_img / $width_caption_img;
                                $y_ratio_caption_img                     = $max_height_caption_img / $height_caption_img;
                                if      (($width_caption_img  <= $max_width_caption_img) && ($height_caption_img <= $max_height_caption_img)) {$tn_width_caption_img= $width_caption_img;$tn_height_caption_img=$height_caption_img;}  
                                else if (($x_ratio_caption_img * $height_caption_img) < ($max_height_caption_img))                            {$tn_height_caption_img = ceil($x_ratio_caption_img * $height_caption_img); $tn_width_caption_img  = $max_width_caption_img;}  
                                else                                                                                                          {$tn_width_caption_img  = ceil($y_ratio_caption_img * $width_caption_img); $tn_height_caption_img = $max_height_caption_img;} 
                            ?>                                 																										
                            <img src="uploads/images/<?php echo $row_main_page['caption_img']?>" width="<?php echo "$tn_width_caption_img";?>" height="<?php echo "$tn_height_caption_img";?>"  alt="<?php echo $row_main_page['caption']?>">
                        </div>									
                    <?php }?>

					<div class="row" id="contentArea">
                    
						<div class="column" id="contentColumn">
                        
							<div  about="/health" typeof="sioc:Item foaf:Document" class="ds-1col node node-content-brand view-mode-full clearfix">

  								<div class="field field-name-body field-type-text-with-summary field-label-hidden">
                            
                            		<div class="field-items">
  
  										<div class="field-item even" property="content:encoded">
                                        
  											<hr class="thickHR firstHR" />

												<?php if(!empty($row_main_page['head1'])) { ?>
                                                    <h2><?php echo $row_main_page['head1']?></h2>
                                                <?php } ?>
                                                        
                                                <!-- Text One-->              							
                                                <?php if(!($text1=="")) { ?>                                                                               
                                                	<?php if(!empty($row_main_page['img1'])&& file_exists("uploads/images/".$row_main_page['img1'])){?>
                                                               
                                                                <?php
                                                                                    if     (!$max_width1) $max_width1  = 680;
                                                                                    if     (!$max_height1)$max_height1 = 500;
                                                                                    $the_real_image1                   = "uploads/images/".$row_main_page['img1'];
                                                                                    $size1                             = GetImageSize($the_real_image1);
                                                                                    $width1                            = $size1[0];
                                                                                    $height1                           = $size1[1];
                                                                                    $x_ratio1                          = $max_width1 / $width1;
                                                                                    $y_ratio1                          = $max_height1 / $height1;
                                                                                    if      (($width1  <= $max_width1) && ($height1 <= $max_height1)) {$tn_width1= $width1;$tn_height1=$height1;}  
                                                                                    else if (($x_ratio1 * $height1) < ($max_height1))                 {$tn_height1 = ceil($x_ratio1 * $height1); $tn_width1  = $max_width1;}  
                                                                                    else                                                              {$tn_width1  = ceil($y_ratio1 * $width1); $tn_height1 = $max_height1;} 
                                                               ?>	
                                                                
                                                                <table align="center" width="<?php echo "$tn_width1";?>" height="<?php echo "$tn_height1";?>">
                                                                    <tr> 
                                                                        <td>

                                                                            <div style="padding-<?php $reg=$row_main_page['pos1'];if ($reg=="left") {echo "right";} ?>:10px"  align="center">                                            	
                                                                                											
                                                                            	<img src="uploads/images/<?php echo $row_main_page['img1']?>" width="<?php echo "$tn_width1";?>" height="<?php echo "$tn_height1";?>" class="site_image_border">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <?php if(!empty($row_main_page['capt1'])){?>
                                                                    	<tr>
                                                                        	<td align="center" valign="top" width="<?php echo "$tn_width1";?>">
                                                                            <div style="font-size:9px" align="center">
																				<?php echo $row_main_page['capt1']?>
                                                                            </div>
                                                                            </td>
                                                                    	</tr>
																	<?php }?>                                                                                                                           
                                                                </table>
                                                            <?php }?>
                                                                                                        
                                                            <p><?php echo $text1?></p>
                                                            
                                                            
                                                            
                                                        						
                                                    <?php }?>	
                                                                						  
										
 
                        				
								  
				
                
					
                     		  
        				<?php if(!empty($row_main_page['head2'])) { ?>
                            <h2><?php echo $row_main_page['head2']?></h2>
                        <?php } ?>
                         
                         
                        <?php if(!($text2=="")){?> 
                                                                                 
        				<?php if(!empty($row_main_page['img2'])&& file_exists("uploads/images/".$row_main_page['img2']) ){?>
                        
        					<table align="<?php echo $row_main_page['pos2']?>">
        						<tr>
                                	<td> 
										<div style="padding-<?php $reg=$row_main_page['pos2'];if ($reg=="left") {echo "right";} ?>:10px" align="<?php echo $row_main_page['pos2']?>"> 
											<?php
 												if     (!$max_width2) $max_width2   = 220;
 												if     (!$max_height2)$max_height2  = 300;
 												$the_real_image2                    = "uploads/images/".$row_main_page['img2'];
 												$size2                              = GetImageSize($the_real_image2);
 												$width2                             = $size2[0];
 												$height2                            = $size2[1];
 												$x_ratio2                           = $max_width2 / $width2;
 												$y_ratio2                           = $max_height2 / $height2;
 												if      (($width2<= $max_width2) && ($height2 <= $max_height2))   {$tn_width2  = $width2;  $tn_height2 = $height2;}  
 												else if (($x_ratio2 * $height2) < ($max_height2))                 {$tn_height2 = ceil($x_ratio2 * $height2); $tn_width2  = $max_width2;}  
 												else                                                              {$tn_width2  = ceil($y_ratio2 * $width2); $tn_height2 = $max_height2;} 
											?>													
										    <img src="uploads/images/<?php echo $row_main_page['img2']?>" width="<?php echo "$tn_width2";?>" height="<?php echo "$tn_height2";?>"  class="site_image_border"> 
                                        </div>
									</td>
                             	</tr>                           		
                            	<?php if(!empty($row_main_page['capt2'])){?><tr><td align="center" valign="top" width="<?php echo "$tn_width2";?>"><div style="font-size:9px" align="center"><?php echo $row_main_page['capt2']?></div></td></tr> 
                            <?php }?>                                                                                                                                                                                                                                                   
                      	</table>
                        
                	<?php }?>
                    
            		<?php echo $text2?>
            	
			<?php }?>  
										  
										  
										  
			<?php if(!($text3=="")){?>
				<div style="padding-bottom:10px"> 
                	<?php if(!empty($row_main_page['head3'])){?><div style="padding-bottom:10px; font-size:12px"><strong><?php echo $row_main_page['head3']?></strong></div><?php }?> 
                                       	                      
                    <?php if(!empty($row_main_page['img3']) && file_exists("uploads/images/".$row_main_page['img3'])) {?>
                        <table align="<?php echo $row_main_page['pos3']?>">
                            <tr>
                            	<td>
									<div style="padding-<?php $reg=$row_main_page['pos3'];if ($reg=="left") {echo "right";} ?>:10px" align="<?php echo $row_main_page['pos3']?>">
										<?php
 											if     (!$max_width3) $max_width3   = 200;
 											if     (!$max_height3)$max_height3  = 300;
 											$the_real_image3                    = "uploads/images/".$row_main_page['img3'];
 											$size3                              = GetImageSize($the_real_image3);
 											$width3                             = $size3[0];
 											$height3                            = $size3[1];
 											$x_ratio3                           = $max_width3 / $width3;
 											$y_ratio3                           = $max_height3 / $height3;
 											if      (($width3  <= $max_width3) && ($height3 <= $max_height3)) {$tn_width3  = $width3;                    $tn_height3 = $height3;}  
 											else if (($x_ratio3 * $height3) < ($max_height3))                 {$tn_height3 = ceil($x_ratio3 * $height3); $tn_width3  = $max_width3;}  
 											else                                                              {$tn_width3  = ceil($y_ratio3 * $width3);  $tn_height3 = $max_height3;} 
										?>
                                        <img src="uploads/images/<?php echo $row_main_page['img3']?>" width="<?php echo "$tn_width3";?>" height="<?php echo "$tn_height3";?>"  class="site_image_border"> 
                                   	</div>
								</td>
                            </tr>                                                                                   
                            <?php if(!empty($row_main_page['capt3'])){?><tr><td align="center" valign="top" width="<?php echo "$tn_width3";?>"><div style="font-size:9px" align="center"><?php echo $row_main_page['capt3']?></div></td></tr><?php }?>         
                       	</table>
                   	<?php }?>
					<?php echo $text3?>
            	</div>
			<?php }?> 
										  
										
										
										  
			<?php if(!($text4=="")) { ?>	
				<div style="padding-bottom:10px"> 				  
					<?php if(!empty($row_main_page['head4'])){?><div style="padding-bottom:10px; font-size:12px"><strong><?php echo $row_main_page['head4']?></strong></div><?php } ?>                                                                                                                                                                        
					<?php if(!empty($row_main_page['img4']) && file_exists("uploads/images/".$row_main_page['img4'])){?>
						<table align="<?php echo $row_main_page['pos4']?>">
							<tr> 
                            	<td>
									<div style="padding-<?php $reg=$row_main_page['pos4'];if ($reg=="left") {echo "right";} ?>:10px" align="<?php echo $row_main_page['pos4']?>">
										<?php
 											if     (!$max_width4) $max_width4  = 200;
 											if     (!$max_height4)$max_height4 = 300;
 											$the_real_image4                   = "uploads/images/".$row_main_page['img4'];
 											$size4                             = GetImageSize($the_real_image4);
 											$width4                            = $size4[0];
 											$height4                           = $size4[1];
 											$x_ratio4                          = $max_width4 / $width4;
 											$y_ratio4                          = $max_height4 / $height4;
 											if      (($width4  <= $max_width4) && ($height4 <= $max_height4)) {$tn_width4= $width4;$tn_height4=$height4;}  
 											else if (($x_ratio4 * $height4) < ($max_height4))                 {$tn_height4 = ceil($x_ratio4 * $height4); $tn_width4  = $max_width4;}  
 											else                                                              {$tn_width4  = ceil($y_ratio4 * $width4); $tn_height4 = $max_height4;} 
										?>											   
                                    	<img src="uploads/images/<?php echo $row_main_page['img4']?>" width="<?php echo "$tn_width4";?>" height="<?php echo "$tn_height4";?>"  align="right"  class="site_image_border"> 
                                     </div>
								</td>
                         	</tr>                    		
                            <?php if(!empty($row_main_page['capt4'])){?><tr><td align="center" valign="top" width="<?php echo "$tn_width4";?>"><div style="font-size:9px" align="center"><?php echo $row_main_page['capt4']?></div></td></tr><?php }?> 
                      	</table>
                  	<?php }?>
              		<?php echo $text4?>
           		</div>										  
	     	<?php }?> 
										  


										  
			<?php if(($text5=="")){ ?>
				<div style="padding-bottom:10px">   
					<?php if(!empty($row_main_page['head5'])){?><div style="padding-bottom:10px; font-size:12px"><strong><?php echo $row_main_page['head5']?></strong></div><?php }?>                                                                                                                                                                        
						<?php if(!empty($row_main_page['img5']) && file_exists("uploads/images/".$row_main_page['img5'])){?>
							<table align="<?php echo $row_main_page['pos5']?>">
								<tr> 
                                	<td>
										<div style="padding-<?php $reg=$row_main_page['pos5'];if ($reg=="left") {echo "right";} ?>:10px" align="<?php echo $row_main_page['pos5']?>"> 
											<?php
 												if     (!$max_width5) $max_width5  = 200;
 												if     (!$max_height5)$max_height5 = 300;
 												$the_real_image5                   = "uploads/images/".$row_main_page['img5'];
 												$size5                             = GetImageSize($the_real_image5);
 												$width5                            = $size5[0];
 												$height5                           = $size5[1];
 												$x_ratio5                          = $max_width5 / $width5;
 												$y_ratio5                          = $max_height5 / $height5;
 												if      (($width5  <= $max_width5) && ($height5 <= $max_height5)) {$tn_width5= $width5;$tn_height5=$height5;}  
 												else if (($x_ratio5 * $height5) < ($max_height5))                 {$tn_height5 = ceil($x_ratio5 * $height5); $tn_width5  = $max_width5;}  
 												else                                                              {$tn_width5  = ceil($y_ratio5 * $width5); $tn_height5 = $max_height5;} 
											?>												  
                                           	<img src="uploads/images/<?php echo $row_main_page['img5']?>" width="<?php echo "$tn_width5"?>" height="<?php echo "$tn_height5" ?>"  align="right"  class="site_image_border"> 
                                     	</div>
									</td>
                            	</tr>                      		
                    		    <?php if(!empty($row_main_page['capt5'])){?><tr><td align="center" valign="top" width="<?php echo "$tn_width5";?>"><div style="font-size:9px" align="center"><?php echo $row_main_page['capt5']?></div></td></tr>
						   	<?php }?>                                                        
                		</table>
                    <?php }?>
               		<?php echo $text5?>
             	</div>										  
			<?php }?>


<div class="clear"></div>
<hr class="thickHR" />



	<h2><?php echo $row_main_page['caption5']?>&nbsp;</h2>

	<ul class="results blogList">
		<?php mainpage_sub_pages($pagecatcode)?>
	</ul>
	<hr class="thickHR" />

</div></div></div></div>

		
				
								</div>
     
	   	
			</div>
		
		
			<div class="row">
		<div class="region region-content-bottom">    <div id="block-cck-blocks-field-content-bottom" class="block block-cck-blocks first last odd">

        <div class="field field-name-field-content-bottom field-type-text-long field-label-hidden"><div class="field-items"><div class="field-item even"><div class="row">
<div class="column">
<div class="colPad">
</div>
</div>




















</div></div></div></div></div>
</div><!-- /.region -->		</div>
		
			<div class="row" id="shareBottom">
			<div class="shareRow">
			<div class="column col57 primaryShare">
          		<div class="pagination clearfix">
				<p><strong>Share this</strong></p>
            	<ul class="inlineLinks">
								<li class="tw"><a href="http://twitter.com/share" class="twitter-share-button" data-url="" data-counturl="" data-text="" data-count="none" data-via="">Tweet</a></li>
				<li class="fb"><div class="fb-like" data-href="" data-send="false" data-layout="button_count" data-show-faces="false" data-action="recommend" data-ref="" data-width="130"></div></li>
                </ul>
				</div>
			</div>
				<div class="column col43 secondaryShare">
				<ul class="inlineLinks">
				<li><a href="javascript:window.print();"><img class="icon" src="images/iconPrin.png">Print</a></li>
                <li><a href=""><img class="icon" src="images/iconSend.png"> Email to friend</a></li>
              	</ul>
				</div>
            </div>
		</div>
		
		
	</div>
	
	        
            
            
            <?php include('incs/aside_nav.php')?>
            
            
            <!-- /.sidebars -->    	
    		</div>
    	</div><!-- /#content -->
	


   		<!-- /#navigation -->
	
	<!--	<div class="row flyout">
			</div>
	-->

		<div class="row flyout"></div>

	</div>
    
</div>
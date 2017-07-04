<?php 
	$intro= stripslashes (trim($row_main_page['intro']));
	$text1= stripslashes (trim($row_main_page['text1']));
	$text2= stripslashes (trim($row_main_page['text2']));
	$text3= stripslashes (trim($row_main_page['text3']));
	$text4= stripslashes (trim($row_main_page['text4']));
	$text5= stripslashes (trim($row_main_page['text5']));
?>
                                                                                 
<?php if(!empty($row_main_page['caption1x'])) {?>
	<div>
		<?php echo $row_main_page['caption1']?>
	</div> 
<?php } ?>	
									
<?php if(!empty($row_main_page['caption2x'])) {?>
	<div>
		<?php echo $row_main_page['caption2']?>
	</div>
<?php } ?>
        
<?php if(!empty($row_main_page['caption3x'])) {?>
	<div>
		<?php echo $row_main_page['caption3']?>
    </div>
<?php } ?> 

              
<?php if(!empty($row_main_page['caption4x'])) {?><div><?php echo $row_main_page['caption4']?></div> <?php } ?>										
<?php if(!empty($row_main_page['caption5x'])) {?><div><?php echo $row_main_page['caption5']?></div> <?php } ?>											
<?php if(!empty($row_main_page['caption6x'])) {?><div><?php echo $row_main_page['caption6']?></div> <?php } ?>										
<?php if(!empty($row_main_page['caption7x'])) {?><div><?php echo $row_main_page['caption7']?></div> <?php } ?>										
<?php if(!empty($row_main_page['caption8x'])) {?><div><?php echo $row_main_page['caption8']?></div> <?php } ?>										
<?php if(!empty($row_main_page['caption9x'])) {?><div><?php echo $row_main_page['caption9']?></div> <?php } ?>										
<?php if(!empty($row_main_page['caption10x'])){?><div><?php echo $row_main_page['caption10']?></div><?php } ?>
                                                                                                                                                                                                               				    	 
<?php if(empty($row_main_page['intro_headx'])){?>
	<div style="padding-bottom:10px;font-weight:bold">
		<?php echo $row_main_page['intro_head']?>
	</div>
<?php }?>
		
<?php if(!($introx=="")){?>
	<div>
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
				<?php if(!empty($row_main_page['capt'])){?>
                	<tr>
                		<td align="center" valign="top"  width="<?php echo "$tn_width";?>">
                    		<div style="font-size:9px" align="center"><?php echo $row_main_page['capt']?></div>
                    	</td>
                   	</tr>
				<?php }?> 
			</table>
		<?php }?>						
	</div>
<?php }?>
						








<div id="main-wrapper">

	<div id="main" class="clearfix with-navigation">
    
		<div id="content" class="row " role="main">
        
        	
            
            <?php 
				$no_show = array(52,42,36,78,86,87,80,88,89,77,101);
				if(  !(in_array($pagecatcode,$no_show))  ){
				//if( ($pagecatcode!=77) ){
			?>  

				<div class="pageWidth" >
    
					<div class="column col77-7 primary">

			<?php }else { ?> 
            
            
            
            	<div class="pageWidthx" >
    
					<div class="column col77-7x primary">
                
              <?php } ?> 
              
		
					<?php if( ($pagecatcode!=36) && ($pagecatcode!=53) && ($pagecatcode!=101)){ ?>
                    
                    
                        <nav class="breadcrumb" role="navigation">    
                            <h2>
                                <?php if(!empty($row_main_page['caption'])){?>        
                                    <?php echo $row_main_page['caption']?>        
                                <?php }?>
                            </h2>
                        </nav> 
                    
                        <ul>
                            <li>
                                <a href="index.php?page_ren=<?php echo $row_main_page[0]?>" title="<?php echo $row_main_page['caption']?>">
                                    <?php echo $row_main_page['caption']?>
                                </a> &raquo; 
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
                    
             	<?php }?>	       
                    

					<div class="row" id="contentArea">
                    
						<div class="column" id="contentColumn">
                        
							<div  about="/health" typeof="sioc:Item foaf:Document" class="ds-1col node node-content-brand view-mode-full clearfix">

  								<div class="field field-name-body field-type-text-with-summary field-label-hidden">
                            
                            		<div class="field-items">
  
  										<div class="field-item even" property="content:encoded">
                                        
                                        
                                        
                                        <?php if( ($pagecatcode!=36) && ($pagecatcode!=53) && ($pagecatcode!=101)){ ?>
                                        
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
										  


										  
			<?php if(!($text5=="")){ ?>
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
            
      <?php }?>      
            
            
            
            <?php if(($pagecatcode==36)){ ?>
            
            
            
            	<?php if( ($pagecatcode==36) && (!$_SESSION["sess_id1"])&& (!$user_profile['id'])  ){ ?>
                
                	<div align="center">	
                        <a href="<?php echo $facebook->getLoginUrl(array('scope'=>'email,publish_stream,user_birthday'));?>">
                            <img src="images/fbreg.png" width="200" height="200" alt="Register With Facebook" />
                        </a>
                    </div>
				<?php }?> 
            
            
            	<?php 
				
					 if($fbuser)
					 	{
            				include('incs/register_f.php');
        				}
					else
						{
         					include('incs/register_e.php');
        				}
				
				?>
                
			<?php }?>
            
            
            
            
             <?php if($pagecatcode==101) { ?>
             
             
              <?php if($project_type<10) { ?>
              
              	 <?php if( ($pagecatcode==101) && (!$_SESSION["sess_id1"])&& (!$user_profile['id'])  ){ ?>
                	<div align="center">
                    	<a href="<?php echo $facebook->getLoginUrl(array('scope'=>'email,user_birthday'));?>">
                    		<img src="images/fbreg.png" width="200" height="200" alt="Register With Facebook" />
                        </a>
                     </div>   
				 <?php }?> 
                 
               <?php }?>  
             
             <?php
             
             	if($fbuser)
					 	{
	
            				include('incs/register_f_quick.php');

        				}
					else
						{
         					 include('incs/register_e_quick.php');
        				}
             
            	?>
                
			<?php }?>
            
            
             <?php if(($pagecatcode==58)){ ?>
            	<?php //include('incs/register_f.php')?>
			<?php }?>
            
            <?php if(($pagecatcode==52)){ ?>
            	<?php include('incs/login.php')?>
			<?php }?>
            
            <?php if(($pagecatcode==54)){ ?>
            	<?php include('incs/pwd.php')?>
			<?php }?>
            
             <?php if($pagecatcode==53)  {?>   
  				<?php include('incs/learning_center.php')?>   
			<?php }?>
            
            
             <?php if($pagecatcode==70)  {?>   
  				<?php include('incs/update_pro.php')?>   
			<?php }?>
            
             <?php if($pagecatcode==42)  {?>   
  				<?php include('incs/enquiry_form.inc.php')?>   
			<?php }?>
            
            
            
            <?php
			
			
			
				//Student Logs step 1
				$s1_log_id 			= trim($_REQUEST["s1_log_id"]);
				//$tid				= trim($_REQUEST["s1_log_id"]);
				
				if( isset($_REQUEST["send"] ) && ( ($_REQUEST["send"]) =='OK') && ($pagecatcode==78) && ($s1_log_id>0) )
					{						
						$text15_logs 	= trim($_REQUEST["text15_logs"]);
						$tid			= $_SESSION["sess_id1"];
						
						if (!empty($text15_logs))
							{
								$q_logs = "insert into students_logs values(NULL,'$text15_logs ',now(),'1','$slsid','$tid','$s1_log_id')";
								mysqli_query($conn,$q_logs) or die(mysqli_error($conn));
							}												
					}
					
					
			
			
				//Student Registation Payments step 1
				$s1pay_id 			= trim($_REQUEST["s1pay_id"]);
				
				if( isset($_REQUEST["send"] ) && ( ($_REQUEST["send"]) =='OK') && ($pagecatcode==78) && ($s1pay_id>0) )
					{
						$comms_on_payment 	= trim($_REQUEST["comms_on_payment"]);
						$amount_paid		= trim($_REQUEST["amount_paid"]);
						$dollarvalue		= trim($_REQUEST["dollaramount"]);	
				
						$q_payment = "insert into student_payments values(NULL,'$s3pay_id','$amount_paid','$dollarvalue','$comms_on_payment','$mode','$type','$branch','$batch','$by',now(),now())";
						mysqli_query($conn,$q_payment) or die(mysqli_error($conn));
					}
					
					
				
					
				//Student Registation Payments Step 2a
				$s2apay_id 			= trim($_REQUEST["s2apay_id"]);								
				if( isset($_REQUEST["send"] ) && ( ($_REQUEST["send"]) =='OK') && ($pagecatcode==86) && ($s2apay_id>0) )
					{
						$comms_on_payment 	= trim($_REQUEST["comms_on_payment"]);
						$amount_paid		= trim($_REQUEST["amount_paid"]);
						$dollarvalue		= trim($_REQUEST["dollaramount"]);	
				
						$q_payment = "insert into student_payments values(NULL,'$s3pay_id','$amount_paid','$dollarvalue','$comms_on_payment','$mode','$type','$branch','$batch','$by',now(),now())";
						mysqli_query($conn,$q_payment) or die(mysqli_error($conn));
					}
			

				
				//Student Registation Payments Step 2b
				$s2bpay_id 			= trim($_REQUEST["s2bpay_id"]);				
				if( isset($_REQUEST["send"] ) && ( ($_REQUEST["send"]) =='OK') && ($pagecatcode==87) && ($s2bpay_id>0) )
					{
						$comms_on_payment 	= trim($_REQUEST["comms_on_payment"]);
						$amount_paid		= trim($_REQUEST["amount_paid"]);
						$dollarvalue		= trim($_REQUEST["dollaramount"]);	
						
						$q_payment = "insert into student_payments values(NULL,'$s3pay_id','$amount_paid','$dollarvalue','$comms_on_payment','$mode','$type','$branch','$batch','$by',now(),now())";
						mysqli_query($conn,$q_payment) or die(mysqli_error($conn));
						
					}
					
					
				//Student Registation Payments - Step 3
				$s3pay_id 			= trim($_REQUEST["s3pay_id"]);					
				if( isset($_REQUEST["send"] ) && ( ($_REQUEST["send"]) =='OK') && ($pagecatcode==80) && ($s3pay_id>0) )
					{
						$comms_on_payment 	= trim($_REQUEST["comms_on_payment"]);
						$amount_paid		= trim($_REQUEST["amount_paid"]);
						$dollarvalue		= trim($_REQUEST["dollaramount"]);
						
						$q_payment = "insert into student_payments values(NULL,'$s3pay_id','$amount_paid','$dollarvalue','$comms_on_payment','$mode','$type','$branch','$batch','$by',now(),now())";
						mysqli_query($conn,$q_payment) or die(mysqli_error($conn));
					}
					
					
					
					
				//Student Registation Payments - Step 4
				$s4pay_id 			= trim($_REQUEST["s4pay_id"]);
				
				if( isset($_REQUEST["send"] ) && ( ($_REQUEST["send"]) =='OK') && ($pagecatcode==88) && ($s4pay_id>0) )
					{
						$comms_on_payment 	= trim($_REQUEST["comms_on_payment"]);
						$amount_paid		= trim($_REQUEST["amount_paid"]);
						$dollarvalue		= trim($_REQUEST["dollaramount"]);
							
						$q_payment = "insert into student_payments values(NULL,'$s3pay_id','$amount_paid','$dollarvalue','$comms_on_payment','$mode','$type','$branch','$batch','$by',now(),now())";
						mysqli_query($conn,$q_payment) or die(mysqli_error($conn));
					}
					
					
				//Student Registation Payments -  Step 5
				$s5pay_id 			= trim($_REQUEST["s5pay_id"]);
					
				if( isset($_REQUEST["send"] ) && ( ($_REQUEST["send"]) =='OK') && ($pagecatcode==89) && ($s5pay_id>0) )
					{
						$comms_on_payment 	= trim($_REQUEST["comms_on_payment"]);
						$amount_paid		= trim($_REQUEST["amount_paid"]);
						$dollarvalue		= trim($_REQUEST["dollaramount"]);
						
						$q_payment = "insert into student_payments values(NULL,'$s5pay_id','$amount_paid','$dollarvalue','$comms_on_payment','$mode','$type','$branch','$batch','$by',now(),now())";
						mysqli_query($conn,$q_payment) or die(mysqli_error($conn));
					}	
					
					
					
					
					

				//update text15 with interview questions
				$text15_answer 	= trim($_REQUEST["text15_answer"]);
				$s2ansuid 		= trim($_REQUEST["s2ansuid"]);
				if( isset($_REQUEST["send"] ) && ( ($_REQUEST["send"]) =='OK') && ($pagecatcode==86) && ($s2ansuid>0) )
					{
						$q_update = "update feedback_form set s2=1,text15='$text15_answer',updated=now()";												
						$q_update = $q_update . "where id=".$s2ansuid;
												
						mysqli_query($conn,$q_update) or die(mysqli_error($conn));
					}
					
				
				
				//insert call logs	
				$text15_log 	= trim($_REQUEST["text15_log"]);
				$s2loguid 		= trim($_REQUEST["s2loguid"]);
				if( isset($_REQUEST["send"] ) && ( ($_REQUEST["send"]) =='OK') && ($pagecatcode==86) && ($s2loguid>0) )
					{
						$q_logs = "insert into  memberlogs set id=$s2loguid,title1='call',updated=now()";												
						$q_logs = $q_logs . "where id=".$s2loguid;
												
						mysqli_query($conn,$q_logs) or die(mysqli_error($conn));
					}		
			
			
			
			
			
            
           		$del_id = trim($_REQUEST["del_id"]);
				if( isset($_REQUEST["send"] ) && ( ($_REQUEST["send"]) =='OK') && ($pagecatcode==78) &&($del_id>0))
					{						
						$q_update = "update feedback_form set validpass=0,updated=now() WHERE id =$del_id";						
						mysqli_query($conn,$q_update) or die(mysqli_error($conn));
					}
					
				$del_id = trim($_REQUEST["del_id"]);	
				if( isset($_REQUEST["send"] ) && ( ($_REQUEST["send"]) =='OK') && ($pagecatcode==87) &&($del_id>0) )
					{
																		
						$q_update = "update feedback_form set validpass=0,updated=now() WHERE id =$del_id";						
						mysqli_query($conn,$q_update) or die(mysqli_error($conn));
					}
					
				$del_id = trim($_REQUEST["del_id"]);	
				if( isset($_REQUEST["send"] ) && ( ($_REQUEST["send"]) =='OK') && ($pagecatcode==86) &&($del_id>0) )
					{
																		
						$q_update = "update feedback_form set validpass=0,updated=now() WHERE id =$del_id";						
						mysqli_query($conn,$q_update) or die(mysqli_error($conn));
					}	
					
					
				$s1_id 	= trim($_REQUEST["s1_id"]);	
				if( isset($_REQUEST["send"] ) && ( ($_REQUEST["send"]) =='OK') && ($pagecatcode==78) && ($s1_id>0) )
						{
							$q_update = "update feedback_form set s2=1,updated=now() WHERE id =$s1_id";							
							mysqli_query($conn,$q_update) or die(mysqli_error($conn));
						}
						
						
					
					$s3_id 	= trim($_REQUEST["s3_id"]);
					if( isset($_REQUEST["send"] ) && ( ($_REQUEST["send"]) =='OK') && ($pagecatcode==80) && ($s3_id>0) )
						{
							
							//$del_id = trim($_REQUEST["del_id"]);
							
							
							
							$q_update = "update feedback_form set s3=1,updated=now() WHERE id =$s3_id";
							
							//if ($_SESSION["sess_id1"]) 
								//{$q_update = $q_update . "where id=".$_SESSION["sess_id1"];}
							//elseif ($user_profile['id']>1) 
								//{$q_update = $q_update . "where fbid=".$fbid;}
							
							mysqli_query($conn,$q_update) or die(mysqli_error($conn));
						}
					
					$s4_id_bk 	= trim($_REQUEST["s4_id_bk"]);
					if( isset($_REQUEST["send"] ) && ( ($_REQUEST["send"]) =='OK') && ($pagecatcode==88) && ($s4_id_bk>0) )
						{
							
							//$del_id = trim($_REQUEST["del_id"]);
							
							
							
							$q_update = "update feedback_form set s4=0,updated=now() WHERE id =$s4_id_bk";
							
							//if ($_SESSION["sess_id1"]) 
								//{$q_update = $q_update . "where id=".$_SESSION["sess_id1"];}
							//elseif ($user_profile['id']>1) 
								//{$q_update = $q_update . "where fbid=".$fbid;}
							
							mysqli_query($conn,$q_update) or die(mysqli_error($conn));
						}
						
						
					$s4_id_fwd 	= trim($_REQUEST["s4_id_fwd"]);	
					if( isset($_REQUEST["send"] ) && ( ($_REQUEST["send"]) =='OK') && ($pagecatcode==89) && ($s4_id_fwd>0) )
						{
							
							//$del_id = trim($_REQUEST["del_id"]);
							
							
							
							$q_update = "update feedback_form set s5=1,updated=now() WHERE id =$s4_id_fwd";
							
							//if ($_SESSION["sess_id1"]) 
								//{$q_update = $q_update . "where id=".$_SESSION["sess_id1"];}
							//elseif ($user_profile['id']>1) 
								//{$q_update = $q_update . "where fbid=".$fbid;}
							
							mysqli_query($conn,$q_update) or die(mysqli_error($conn));
						}
						
						
						
						
					//Paid At Least 1 Month	
					$s4_id	= trim($_REQUEST["s4_id"]);	
					if( isset($_REQUEST["send"] ) && ( ($_REQUEST["send"]) =='OK') && ($pagecatcode==88) && ($s4_id>0) )
						{
							$q_update = "update feedback_form set s4=1,updated=now() WHERE id =$s4_id";							
							mysqli_query($conn,$q_update) or die(mysqli_error($conn));
							
						}
						
						
						
						
						
						
						
						
					//back to s2b	
					$s2b_id 	= trim($_REQUEST["s2b_id"]);
					if( isset($_REQUEST["send"] ) && ( ($_REQUEST["send"]) =='OK') && ($pagecatcode==80) && ($s2b_id>0) )
						{																					
							$q_update 	= "update feedback_form set s3=0,updated=now() WHERE id =$s2b_id";
							mysqli_query($conn,$q_update) or die(mysqli_error($conn));
						}
						
					
					
					
            ?>
            
            
            
            
            
            
            <?php 
			
				//if ($location_v =="") {$location_v ="Ghana";}
				//elseif($location_v =="all")  {$location_v ="";}
				
				 
			
			?>
            
            


			<!-- Step 1 - Registered Students - Not Contacted -->
			<?php if($pagecatcode==78)  {?> 
                 
                <?php 
				
				
					$location_v  =  trim($_REQUEST["loca"]);
					$screen 	 =	trim($_REQUEST["screen"]);
					$showall 	 =	trim($_REQUEST["showall"]);
					
					
					if 		($location_v =="") 			{$location_v ="";}
					elseif	($location_v =="All")  		{$location_v ="";}
				
				?>  
                <a href="index.php?page_ren=77" <?php if($pagecatcode==77){echo " style=\"font-weight:bold\"";}?> >All</a> |     
            	<a href="index.php?page_ren=78" <?php if($pagecatcode==78){echo " style=\"font-weight:bold\"";}?> >Step 1</a> | 
               	<a href="index.php?page_ren=86" <?php if($pagecatcode==86){echo " style=\"font-weight:bold\"";}?> >Step 2a</a> | 
                <a href="index.php?page_ren=87" <?php if($pagecatcode==87){echo " style=\"font-weight:bold\"";}?> >Step 2b</a> | 
                <a href="index.php?page_ren=80" <?php if($pagecatcode==80){echo " style=\"font-weight:bold\"";}?> >Step 3</a> | 
                <a href="index.php?page_ren=88" <?php if($pagecatcode==88){echo " style=\"font-weight:bold\"";}?> >Step 4</a> | 
                <a href="index.php?page_ren=89" <?php if($pagecatcode==89){echo " style=\"font-weight:bold\"";}?> >Step 5</a> 
               
                <br><br> 
            	            
            	<a href="index.php?page_ren=78&loca=All"  <?php if($location_v==""){echo " style=\"font-weight:bold\"";}?>>All</a> |
            	<a href="index.php?page_ren=78&loca=Ghana" <?php if($location_v=="Ghana"){echo " style=\"font-weight:bold\"";}?>>Ghana</a> | 
               	<a href="index.php?page_ren=78&loca=SA" <?php if($location_v=="SA"){echo " style=\"font-weight:bold\"";}?>>South Africa</a> | 
                <a href="index.php?page_ren=78&loca=Nigeria" <?php if($location_v=="Nigeria"){echo " style=\"font-weight:bold\"";}?>>Nigeria</a> | 
                <a href="index.php?page_ren=78&loca=Liberia" <?php if($location_v=="Liberia"){echo " style=\"font-weight:bold\"";}?>>Liberia</a>  | 
                <a href="index.php?page_ren=78&loca=Cote" <?php if($location_v=="Cote"){echo " style=\"font-weight:bold\"";}?>>Ivory Coast</a> |
                <a href="index.php?page_ren=78&loca=Other" <?php if($location_v=="Other"){echo " style=\"font-weight:bold\"";}?>>Other</a>
                               
                <br><br> 
                
                
                 
                
                <?php 
				
					$location_v  =  trim($_REQUEST["loca"]);
					$yes_show = array("Ghana","Accra","Kumasi","Tamale","Ho","Sunyani","Koforidua","Tema","Takoradi","Capecoast");
					if(in_array($location_v,$yes_show)  ){
					//if( ($pagecatcode!=77) ){
				?> 
                
                
                	 <?php 
				
				
						
						$screen 	 =	trim($_REQUEST["screen"]);
						$showall 	 =	trim($_REQUEST["showall"]);
					
					
						//if 		($regn_v =="") 			{$regn_v ="All";}
						//elseif	($regn_v =="All")  		{$regn_v ="All";}
				
					?> 
                
                    <!--<a href="index.php?page_ren=78&loca=Ghana&regn=All"  <?php if($regn_v=="All"){echo " style=\"font-weight:bold\"";}?>>All</a> | -->
                    
                    <a href="index.php?page_ren=78&loca=Accra" <?php if($location_v=="Accra"){echo " style=\"font-weight:bold\"";}?>>Accra</a> | 
                    <a href="index.php?page_ren=78&loca=Kumasi" <?php if($location_v=="Kumasi"){echo " style=\"font-weight:bold\"";}?>>Kumasi</a> |
                    <a href="index.php?page_ren=78&loca=Tamale" <?php if($location_v=="Tamale"){echo " style=\"font-weight:bold\"";}?>>Tamale</a> |
                    <a href="index.php?page_ren=78&loca=Ho" <?php if($location_v=="Ho"){echo " style=\"font-weight:bold\"";}?>>Ho</a>  |
                    <a href="index.php?page_ren=78&loca=Sunyani" <?php if($location_v=="Sunyani"){echo " style=\"font-weight:bold\"";}?>>Sunyani</a>  |
                    <a href="index.php?page_ren=78&loca=Koforidua" <?php if($location_v=="Koforidua"){echo " style=\"font-weight:bold\"";}?>>Koforidua</a>  |
                    <a href="index.php?page_ren=78&loca=Tema" <?php if($location_v=="Tema"){echo " style=\"font-weight:bold\"";}?>>Tema</a>  |
                       
                    <a href="index.php?page_ren=78&loca=Takoradi" <?php if($location_v=="Takoradi"){echo " style=\"font-weight:bold\"";}?>>Takoradi</a>  |
                       
                    <a href="index.php?page_ren=78&loca=Capecoast" <?php if($location_v=="CapeCoast"){echo " style=\"font-weight:bold\"";}?>>Cape Coast</a> 
                    <!--|<a href="index.php?page_ren=78&loca=Ghana&regn=Other" <?php if($regn_v=="Other"){echo " style=\"font-weight:bold\"";}?>>Other</a> -->
                               
                <br><br>
                
                <?php }?>
                 
                				
            	<?php 				
									
					register_members(1,$location_v,$fbid,$screen,$showall,$conn,78);					
				?>              
			<?php }?>
            
                 
                 
                 
                       
			<!-- Step 2a - 1st Emailed Registered Students -->
			<?php if($pagecatcode==86)  {?>
            
             	<?php 
				
					$location_v  =	trim($_REQUEST["loca"]);
					$screen 	 =	trim($_REQUEST["screen"]);
				
					if 		($location_v =="") 			{$location_v ="";}
					elseif	($location_v =="All")  		{$location_v ="";}
				
				?>  
            
            	<a href="index.php?page_ren=77" <?php if($pagecatcode==77){echo " style=\"font-weight:bold\"";}?>>All</a> | 
            	<a href="index.php?page_ren=78" <?php if($pagecatcode==78){echo " style=\"font-weight:bold\"";}?>>Step 1</a> | 
               	<a href="index.php?page_ren=86" <?php if($pagecatcode==86){echo " style=\"font-weight:bold\"";}?>>Step 2a</a> | 
                <a href="index.php?page_ren=87" <?php if($pagecatcode==87){echo " style=\"font-weight:bold\"";}?>>Step 2b</a> | 
                <a href="index.php?page_ren=80" <?php if($pagecatcode==80){echo " style=\"font-weight:bold\"";}?>>Step 3</a> | 
                <a href="index.php?page_ren=88" <?php if($pagecatcode==88){echo " style=\"font-weight:bold\"";}?>>Step 4</a> | 
                <a href="index.php?page_ren=89" <?php if($pagecatcode==89){echo " style=\"font-weight:bold\"";}?>>Step 5</a> 
               
                <br><br> 
            
            
            	<a href="index.php?page_ren=86&loca=All"  <?php if($location_v==""){echo " style=\"font-weight:bold\"";}?>>All</a> |             
             	<a href="index.php?page_ren=86&loca=Ghana"  <?php if($location_v=="Ghana"){echo " style=\"font-weight:bold\"";}?>>Ghana</a> | 
               	<a href="index.php?page_ren=86&loca=SA"  <?php if($location_v=="SA"){echo " style=\"font-weight:bold\"";}?>>South Africa</a> | 
                <a href="index.php?page_ren=86&loca=Nigeria"  <?php if($location_v=="Nigeria"){echo " style=\"font-weight:bold\"";}?>>Nigeria</a> | 
                <a href="index.php?page_ren=86&loca=Liberia"  <?php if($location_v=="Liberia"){echo " style=\"font-weight:bold\"";}?>>Liberia</a>  | 
                <a href="index.php?page_ren=86&loca=Cote"  <?php if($location_v=="Cote"){echo " style=\"font-weight:bold\"";}?>>Ivory Coast</a> |
                <a href="index.php?page_ren=86&loca=Other"  <?php if($location_v=="Other"){echo " style=\"font-weight:bold\"";}?>>Other</a>
                <br><br>    				
            	<?php 				
					  
					stage2_register_members(1,$location_v,$fbid,$screen,$conn);				
				?>                
			<?php }?>






			<!-- Step 2b Scholarship Offered Registered Students -->
			<?php if($pagecatcode==87)  {?>
            
            	<?php $location_v  =trim($_REQUEST["loca"]);
				
				
				if 		($location_v =="") 		{$location_v ="";}
				elseif	($location_v =="All")  	{$location_v ="";}
				
				
				?> 
                <a href="index.php?page_ren=77" <?php if($pagecatcode==77){echo " style=\"font-weight:bold\"";}?> >All</a> | 
            	<a href="index.php?page_ren=78" <?php if($pagecatcode==78){echo " style=\"font-weight:bold\"";}?>>Step 1</a> | 
               	<a href="index.php?page_ren=86" <?php if($pagecatcode==86){echo " style=\"font-weight:bold\"";}?>>Step 2a</a> | 
                <a href="index.php?page_ren=87" <?php if($pagecatcode==87){echo " style=\"font-weight:bold\"";}?>>Step 2b</a> | 
                <a href="index.php?page_ren=80" <?php if($pagecatcode==80){echo " style=\"font-weight:bold\"";}?>>Step 3</a> | 
                <a href="index.php?page_ren=88" <?php if($pagecatcode==88){echo " style=\"font-weight:bold\"";}?>>Step 4</a> | 
                <a href="index.php?page_ren=89" <?php if($pagecatcode==89){echo " style=\"font-weight:bold\"";}?>>Step 5</a> 
               
                <br><br> 
            
            	<a href="index.php?page_ren=87&loca=All" <?php if($location_v==""){echo " style=\"font-weight:bold\"";}?>>All</a> |              
             	<a href="index.php?page_ren=87&loca=Ghana" <?php if($location_v=="Ghana"){echo " style=\"font-weight:bold\"";}?>>Ghana</a> | 
               	<a href="index.php?page_ren=87&loca=SA" <?php if($location_v=="SA"){echo " style=\"font-weight:bold\"";}?>>South Africa</a> | 
                <a href="index.php?page_ren=87&loca=Nigeria" <?php if($location_v=="Nigeria"){echo " style=\"font-weight:bold\"";}?>>Nigeria</a> | 
                <a href="index.php?page_ren=87&loca=Liberia" <?php if($location_v=="Liberia"){echo " style=\"font-weight:bold\"";}?>>Liberia</a>  | 
                <a href="index.php?page_ren=87&loca=Cote" <?php if($location_v=="Cote"){echo " style=\"font-weight:bold\"";}?>>Ivory Coast</a> |
                <a href="index.php?page_ren=87&loca=Other" <?php if($location_v=="Other"){echo " style=\"font-weight:bold\"";}?>>Other</a>
                <br><br>    				
            	<?php 				
					//$location_v  =trim($_REQUEST["loca"]);  
					offered_register_members(1,$location_v,$fbid,$conn);				
				?>                
			<?php }?>





			<!-- Step 3 Paid Registration/Enrollment Fee -->
            <?php if($pagecatcode==80)  {?>
            
            	<?php $location_v  =trim($_REQUEST["loca"]);
				
				
					if 		($location_v =="") 		{$location_v ="";}
					elseif	($location_v =="All")  	{$location_v ="";}
				
				
				?> 
            	<a href="index.php?page_ren=77" <?php if($pagecatcode==77){echo " style=\"font-weight:bold\"";}?> >All</a> | 
            	<a href="index.php?page_ren=78" <?php if($pagecatcode==78){echo " style=\"font-weight:bold\"";}?>>Step 1</a> | 
               	<a href="index.php?page_ren=86" <?php if($pagecatcode==86){echo " style=\"font-weight:bold\"";}?>>Step 2a</a> | 
                <a href="index.php?page_ren=87" <?php if($pagecatcode==87){echo " style=\"font-weight:bold\"";}?>>Step 2b</a> | 
                <a href="index.php?page_ren=80" <?php if($pagecatcode==80){echo " style=\"font-weight:bold\"";}?>>Step 3</a> | 
                <a href="index.php?page_ren=88" <?php if($pagecatcode==88){echo " style=\"font-weight:bold\"";}?>>Step 4</a> | 
                <a href="index.php?page_ren=89" <?php if($pagecatcode==89){echo " style=\"font-weight:bold\"";}?>>Step 5</a> 
               
                <br><br> 
            
            	<a href="index.php?page_ren=80&loca=All" <?php if($location_v==""){echo " style=\"font-weight:bold\"";}?>>All</a> |                         
            	<a href="index.php?page_ren=80&loca=Ghana" <?php if($location_v=="Ghana"){echo " style=\"font-weight:bold\"";}?>>Ghana</a> | 
               	<a href="index.php?page_ren=80&loca=SA" <?php if($location_v=="SA"){echo " style=\"font-weight:bold\"";}?>>South Africa</a> | 
                <a href="index.php?page_ren=80&loca=Nigeria" <?php if($location_v=="Nigeria"){echo " style=\"font-weight:bold\"";}?>>Nigeria</a> | 
                <a href="index.php?page_ren=80&loca=Liberia" <?php if($location_v=="Liberia"){echo " style=\"font-weight:bold\"";}?>>Liberia</a>  | 
                <a href="index.php?page_ren=80&loca=Cote" <?php if($location_v=="Cote"){echo " style=\"font-weight:bold\"";}?>>Ivory Coast</a> |
                <a href="index.php?page_ren=80&loca=Other" <?php if($location_v=="Other"){echo " style=\"font-weight:bold\"";}?>>Other</a>
                <br><br>    				
            	<?php 				
					//$location_v  =trim($_REQUEST["loca"]);  
					paid_regen_register_members(1,$location_v,$fbid,$conn);				
				?>                
			<?php }?>
            
            
            
            
            
            <!-- Step 4 - Paid at Least 1 month Installment -->
            <?php if($pagecatcode==88)  {?>
            
            	<?php 
				
					$location_v  =trim($_REQUEST["loca"]);
				
					if 		($location_v =="") 		{$location_v ="";}
					elseif	($location_v =="All")  	{$location_v ="";}
				
				
				
				
				?> 
            	<a href="index.php?page_ren=77" <?php if($pagecatcode==77){echo " style=\"font-weight:bold\"";}?> >All</a> | 
            	<a href="index.php?page_ren=78" <?php if($pagecatcode==78){echo " style=\"font-weight:bold\"";}?>>Step 1</a> | 
               	<a href="index.php?page_ren=86" <?php if($pagecatcode==86){echo " style=\"font-weight:bold\"";}?>>Step 2a</a> | 
                <a href="index.php?page_ren=87" <?php if($pagecatcode==87){echo " style=\"font-weight:bold\"";}?>>Step 2b</a> | 
                <a href="index.php?page_ren=80" <?php if($pagecatcode==80){echo " style=\"font-weight:bold\"";}?>>Step 3</a> | 
                <a href="index.php?page_ren=88" <?php if($pagecatcode==88){echo " style=\"font-weight:bold\"";}?>>Step 4</a> | 
                <a href="index.php?page_ren=89" <?php if($pagecatcode==89){echo " style=\"font-weight:bold\"";}?>>Step 5</a> 
               
                <br><br> 
            
            	<a href="index.php?page_ren=88&loca=All" <?php if($location_v==""){echo " style=\"font-weight:bold\"";}?>>All</a> |                         
            	<a href="index.php?page_ren=88&loca=Ghana" <?php if($location_v=="Ghana"){echo " style=\"font-weight:bold\"";}?>>Ghana</a> | 
               	<a href="index.php?page_ren=88&loca=SA" <?php if($location_v=="SA"){echo " style=\"font-weight:bold\"";}?>>South Africa</a> | 
                <a href="index.php?page_ren=88&loca=Nigeria" <?php if($location_v=="Nigeria"){echo " style=\"font-weight:bold\"";}?>>Nigeria</a> | 
                <a href="index.php?page_ren=88&loca=Liberia" <?php if($location_v=="Liberia"){echo " style=\"font-weight:bold\"";}?>>Liberia</a>  | 
                <a href="index.php?page_ren=88&loca=Cote" <?php if($location_v=="Cote"){echo " style=\"font-weight:bold\"";}?>>Ivory Coast</a> |
                <a href="index.php?page_ren=88&loca=Other" <?php if($location_v=="Other"){echo " style=\"font-weight:bold\"";}?>>Other</a>
                <br><br>    				
            	<?php 				
					//$location_v  =trim($_REQUEST["loca"]);  
					paid_aleast_1intalmt_members(1,$location_v,$fbid,$conn);				
				?>                
			<?php }?>
            
            
            
            
            <!-- Step 5 Show up for Class on oppening Day -->
            <?php if($pagecatcode==89)  {?>
            
            	<?php 
				
					$location_v  =trim($_REQUEST["loca"]);
				
					if 		($location_v =="") 		{$location_v ="";}
					elseif	($location_v =="All")  	{$location_v ="";}
				
				
				?> 
            	<a href="index.php?page_ren=77" <?php if($pagecatcode==77){echo " style=\"font-weight:bold\"";}?> >All</a> | 
            	<a href="index.php?page_ren=78" <?php if($pagecatcode==78){echo " style=\"font-weight:bold\"";}?>>Step 1</a> | 
               	<a href="index.php?page_ren=86" <?php if($pagecatcode==86){echo " style=\"font-weight:bold\"";}?>>Step 2a</a> | 
                <a href="index.php?page_ren=87" <?php if($pagecatcode==87){echo " style=\"font-weight:bold\"";}?>>Step 2b</a> | 
                <a href="index.php?page_ren=80" <?php if($pagecatcode==80){echo " style=\"font-weight:bold\"";}?>>Step 3</a> | 
                <a href="index.php?page_ren=88" <?php if($pagecatcode==88){echo " style=\"font-weight:bold\"";}?>>Step 4</a> | 
                <a href="index.php?page_ren=89" <?php if($pagecatcode==89){echo " style=\"font-weight:bold\"";}?>>Step 5</a> 
               
                <br><br> 
            
            	<a href="index.php?page_ren=89&loca=All" <?php if($location_v==""){echo " style=\"font-weight:bold\"";}?>>All</a> |                         
            	<a href="index.php?page_ren=89&loca=Ghana" <?php if($location_v=="Ghana"){echo " style=\"font-weight:bold\"";}?>>Ghana</a> | 
               	<a href="index.php?page_ren=89&loca=SA" <?php if($location_v=="SA"){echo " style=\"font-weight:bold\"";}?>>South Africa</a> | 
                <a href="index.php?page_ren=89&loca=Nigeria" <?php if($location_v=="Nigeria"){echo " style=\"font-weight:bold\"";}?>>Nigeria</a> | 
                <a href="index.php?page_ren=89&loca=Liberia" <?php if($location_v=="Liberia"){echo " style=\"font-weight:bold\"";}?>>Liberia</a>  | 
                <a href="index.php?page_ren=89&loca=Cote" <?php if($location_v=="Cote"){echo " style=\"font-weight:bold\"";}?>>Ivory Coast</a> |
                <a href="index.php?page_ren=89&loca=Other" <?php if($location_v=="Other"){echo " style=\"font-weight:bold\"";}?>>Other</a>
                
                <br><br>
                    				
            	<?php 				
					//$location_v  =trim($_REQUEST["loca"]);  
					showed_up_register_members(1,$location_v,$fbid, $conn);				
				?>                
			<?php }?>
            
            
            
            
            
            
            
            
            
            
                              
            <!-- All Registrations-->
            <?php if($pagecatcode==77)  {?> 
            
            	<?php 
				
					$location_v  =trim($_REQUEST["loca"]);
					
					if 		($location_v =="") 		{$location_v ="";}
					elseif	($location_v =="All")  	{$location_v ="";}
					
				?>
                
                <a href="index.php?page_ren=77&ccat=All" <?php if($type_v==""){echo " style=\"font-weight:bold\"";}?>>All</a> |        
            	<a href="index.php?page_ren=77&ccat=DPL" <?php if($type_v=="DPL"){echo " style=\"font-weight:bold\"";}?>>Project 2000</a> |
                <a href="index.php?page_ren=77&ccat=TOT" <?php if($type_v=="CAD"){echo " style=\"font-weight:bold\"";}?>>AutoCad</a> | 
               	<a href="index.php?page_ren=77&ccat=TOT" <?php if($type_v=="TOT"){echo " style=\"font-weight:bold\"";}?>>TOT</a> |
                <a href="index.php?page_ren=77&ccat=K4C" <?php if($type_v=="K4C"){echo " style=\"font-weight:bold\"";}?>>Kids4Coding</a> |
                <a href="index.php?page_ren=77&ccat=TOT" <?php if($type_v=="TSL"){echo " style=\"font-weight:bold\"";}?>>Telesales</a> |
                <a href="index.php?page_ren=77&ccate=RSC" <?php if($type_v=="RSC"){echo " style=\"font-weight:bold\"";}?>>Resource</a> |
                <a href="index.php?page_ren=77&ccat=WUC" <?php if($type_v=="WUC"){echo " style=\"font-weight:bold\"";}?>>WebKings College</a> |
                <a href="index.php?page_ren=77&ccat=SPS" <?php if($type_v=="SPS"){echo " style=\"font-weight:bold\"";}?>>Sponsors</a> |
                <a href="index.php?page_ren=77&ccat=PTS" <?php if($type_v=="PTS"){echo " style=\"font-weight:bold\"";}?>>Partners</a>
                <br><br> 
                
               
                  
                <a href="index.php?page_ren=77&loca=All" <?php if($location_v==""){echo " style=\"font-weight:bold\"";}?>>All</a> |        
            	<a href="index.php?page_ren=77&loca=Ghana" <?php if($location_v=="Ghana"){echo " style=\"font-weight:bold\"";}?>>Ghana</a> | 
               	<a href="index.php?page_ren=77&loca=SA" <?php if($location_v=="SA"){echo " style=\"font-weight:bold\"";}?>>South Africa</a> | 
                <a href="index.php?page_ren=77&loca=Nigeria" <?php if($location_v=="Nigeria"){echo " style=\"font-weight:bold\"";}?>>Nigeria</a> | 
                <a href="index.php?page_ren=77&loca=Liberia" <?php if($location_v=="Liberia"){echo " style=\"font-weight:bold\"";}?>>Liberia</a>  | 
                <a href="index.php?page_ren=77&loca=Sl" <?php if($location_v=="Liberia"){echo " style=\"font-weight:bold\"";}?>>Sierra Leone</a>  | 
                <a href="index.php?page_ren=77&loca=Cote" <?php if($location_v=="Cote"){echo " style=\"font-weight:bold\"";}?>>Ivory Coast</a> |
                <a href="index.php?page_ren=77&loca=Other" <?php if($location_v=="Other"){echo " style=\"font-weight:bold\"";}?>>Other</a>
                <br><br> 
                
                
                
                <a href="index.php?page_ren=77&ccat=All" <?php if($location_v==""){echo " style=\"font-weight:bold\"";}?>>All</a> |        
            	<a href="index.php?page_ren=77&ccat=inclass" <?php if($location_v=="inclass"){echo " style=\"font-weight:bold\"";}?>>In Class</a> | 
               	<a href="index.php?page_ren=77&ccat=online" <?php if($location_v=="online"){echo " style=\"font-weight:bold\"";}?>>Online</a> |
                <a href="index.php?page_ren=77&ccat=hybride" <?php if($location_v=="hybride"){echo " style=\"font-weight:bold\"";}?>>Hybride</a> |
                <a href="index.php?page_ren=77&ccat=remote" <?php if($location_v=="remote"){echo " style=\"font-weight:bold\"";}?>>Remote [Live Video]</a> |
                <a href="index.php?page_ren=77&ccat=oneonone" <?php if($location_v=="oneonone"){echo " style=\"font-weight:bold\"";}?>>One On One [Home]</a>
                
                
                <br><br>
                
                
                <?php $location_v  =trim($_REQUEST["loca"]);?> 
                
                
            	<a href="index.php?page_ren=77" <?php if($cstep==""){echo " style=\"font-weight:bold\"";}?>>All</a> | 
            	<a href="index.php?page_ren=77" <?php if($cstep==1){echo " style=\"font-weight:bold\"";}?>>Step 1</a> | 
               	<a href="index.php?page_ren=77" <?php if($cstep=="2a"){echo " style=\"font-weight:bold\"";}?>>Step 2a</a> | 
                <a href="index.php?page_ren=77" <?php if($cstep=="2b"){echo " style=\"font-weight:bold\"";}?>>Step 2b</a> | 
                <a href="index.php?page_ren=77" <?php if($cstep==3){echo " style=\"font-weight:bold\"";}?>>Step 3</a> | 
                <a href="index.php?page_ren=77" <?php if($cstep==4){echo " style=\"font-weight:bold\"";}?>>Step 4</a> | 
                <a href="index.php?page_ren=77" <?php if($cstep==5){echo " style=\"font-weight:bold\"";}?>>Step 5</a> 
               
                <br><br> 
                
                
                <a href="index.php?page_ren=77&loca=All" <?php if($location_v==""){echo " style=\"font-weight:bold\"";}?>>All</a> |        
            	<a href="index.php?page_ren=77&ccat=Ghana" <?php if($location_v=="Ghana"){echo " style=\"font-weight:bold\"";}?>>Activated</a> | 
               	<a href="index.php?page_ren=77&ccat=SA" <?php if($location_v=="SA"){echo " style=\"font-weight:bold\"";}?>>Yet To Activate</a> |
                <a href="index.php?page_ren=77&ccat=SA" <?php if($location_v=="SA"){echo " style=\"font-weight:bold\"";}?>>Deleted</a>
                <br><br> 
                
                				
            	<?php 				
					//$location_v  =trim($_REQUEST["loca"]);
					all_register_members($location_v,$fbid,$conn)				
				?>               
			<?php }?>
            
            
            
            
            
                  
                        <!-- Trainer of Trainer Students -->
                        <?php if($pagecatcode==79)  {?>  
                        
                            <?php 
							
								$location_v  =trim($_REQUEST["loca"]);
								
								if 		($location_v =="") 			{$location_v ="";}
								elseif	($location_v =="All")  		{$location_v ="";}

							
							?>                 
                            
                            <a href="index.php?page_ren=79" <?php if($location_v==""){echo " style=\"font-weight:bold\"";}?>>All</a> |
                            <a href="index.php?page_ren=79&loca=Ghana" <?php if($location_v=="Ghana"){echo " style=\"font-weight:bold\"";}?>>Ghana</a> | 
                            <a href="index.php?page_ren=79&loca=SA" <?php if($location_v=="SA"){echo " style=\"font-weight:bold\"";}?>>South Africa</a> | 
                            <a href="index.php?page_ren=79&loca=Nigeria" <?php if($location_v=="Nigeria"){echo " style=\"font-weight:bold\"";}?>>Nigeria</a> | 
                            <a href="index.php?page_ren=79&loca=Liberia" <?php if($location_v=="Liberia"){echo " style=\"font-weight:bold\"";}?>>Liberia</a>  | 
                            <a href="index.php?page_ren=79&loca=Cote" <?php if($location_v=="Cote"){echo " style=\"font-weight:bold\"";}?>>Ivory Coast</a> |
                            <a href="index.php?page_ren=79&loca=Other" <?php if($location_v=="Other"){echo " style=\"font-weight:bold\"";}?>>Other</a>
                            <br><br> 			
                            <?php 				
                                //$location_v  =trim($_REQUEST["loca"]);  				
                                register_members(2,$location_v,$fbid,$screen,$showall,$conn,79);				
                            ?>              
                        <?php }?>
                        
                        
                        
                        
            
                        
                        <!-- Resource/Volunteers -->
                        <?php if($pagecatcode==75)  {?> 
                        
                            <?php 
							
								$location_v  =trim($_REQUEST["loca"]);
								if 		($location_v =="") 			{$location_v ="";}
								elseif	($location_v =="All")  		{$location_v ="";}
								
							?> 
                                        
                            <a href="index.php?page_ren=75&loca=All" <?php if($location_v==""){echo " style=\"font-weight:bold\"";}?>>All</a> | 
                            <a href="index.php?page_ren=75&loca=Ghana" <?php if($location_v=="Ghana"){echo " style=\"font-weight:bold\"";}?>>Ghana</a> | 
                            <a href="index.php?page_ren=75&loca=SA" <?php if($location_v=="SA"){echo " style=\"font-weight:bold\"";}?>>South Africa</a> | 
                            <a href="index.php?page_ren=75&loca=Nigeria" <?php if($location_v=="Nigeria"){echo " style=\"font-weight:bold\"";}?>>Nigeria</a> | 
                            <a href="index.php?page_ren=75&loca=Liberia" <?php if($location_v=="Liberia"){echo " style=\"font-weight:bold\"";}?>>Liberia</a>  | 
                            <a href="index.php?page_ren=75&loca=Cote" <?php if($location_v=="Cote"){echo " style=\"font-weight:bold\"";}?>>Ivory Coast</a> |
                            <a href="index.php?page_ren=75&loca=Other" <?php if($location_v=="Other"){echo " style=\"font-weight:bold\"";}?>>Other</a>
                            <br><br> 
                                            
                            <?php 				
                                //$location_v  =trim($_REQUEST["loca"]);    				
                                register_members(4,$location_v,$fbid,$screen,$showall,$conn,75);				 
                             ?>                
                        <?php }?>
            
            
            
            
            
                        <!-- Kids4Coding -->
                        <?php if($pagecatcode==83)  {?> 
                        
                            <?php $location_v  =trim($_REQUEST["loca"]);?> 
                                        
                            <a href="index.php?page_ren=83&loca=All" <?php if($location_v==""){echo " style=\"font-weight:bold\"";}?>>All</a> | 
                            <a href="index.php?page_ren=83&loca=Ghana" <?php if($location_v=="Ghana"){echo " style=\"font-weight:bold\"";}?>>Ghana</a> | 
                            <a href="index.php?page_ren=83&loca=SA" <?php if($location_v=="SA"){echo " style=\"font-weight:bold\"";}?>>South Africa</a> | 
                            <a href="index.php?page_ren=83&loca=Nigeria" <?php if($location_v=="Nigeria"){echo " style=\"font-weight:bold\"";}?>>Nigeria</a> | 
                            <a href="index.php?page_ren=83&loca=Liberia" <?php if($location_v=="Liberia"){echo " style=\"font-weight:bold\"";}?>>Liberia</a>  | 
                            <a href="index.php?page_ren=83&loca=Cote" <?php if($location_v=="Cote"){echo " style=\"font-weight:bold\"";}?>>Ivory Coast</a> |
                            <a href="index.php?page_ren=83&loca=Other" <?php if($location_v=="Other"){echo " style=\"font-weight:bold\"";}?>>Other</a>
                            <br><br> 
                                            
                            <?php 				
                                //$location_v  =trim($_REQUEST["loca"]);    				
                                register_members(3,$location_v,$fbid,$screen,$showall,$conn,75);				 
                             ?>                
                        <?php }?>
            
            
            
            
            
    					<?php 
							$no_show = array(52,42,36,78,86,87,80,88,89,77,101,70,83,75,79,53);
							if(  !(in_array($pagecatcode,$no_show))  ){
							//if( ($pagecatcode!=77) ){
						?>

                        	<div class="clear"></div>
                            
                        	<hr class="thickHR" />
                        
                        
                            <h2><?php echo $row_main_page['caption5']?>&nbsp;</h2>
                        
                            <ul class="results blogList">
                                <?php mainpage_sub_pages($pagecatcode,$conn)?>
                            </ul>
                             
                            <hr class="thickHR" />
                        <?php }?>   
    

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		
	
    
 
<?php 
	$no_show = array(52,42,36,78,86,87,80,88,89,77,101,70,83,75,79,53);
	if(  !(in_array($pagecatcode,$no_show))  ){
	//if( ($pagecatcode!=77) ){
?>  
  	
		<div style="padding-left:10px; padding-bottom:10px" class="fb-like" data-href="https://www.facebook.com/webkingsafrica" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
<?php }?> 


<!--<br><br>
        
<div class="row">

	<div class="region region-content-bottom"> 
      
        <div id="block-cck-blocks-field-content-bottom" class="block block-cck-blocks first last odd">

        	<div class="field field-name-field-content-bottom field-type-text-long field-label-hidden">
            <div class="field-items">
            <div class="field-item even">
            <div class="row">
			<div class="column">
            
			<div class="colPad">
            
            
            
            					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	</div>
</div> -->







<?php 
	$no_show = array(52,42,36,78,86,87,80,88,89,77,101,70,83,75,79,53);
	if(  !(in_array($pagecatcode,$no_show))  ){
	//if( ($pagecatcode!=77) ){
?>

	
		<?php if((!$_SESSION["sess_id1"]) || (!$user_profile['id']) ){?>

            <div class="column col57">
            
                <div class="colPad">
                
                    <div class="box">
                    
                        <h3 class="underlineTitle">Recent Blog Posts: Innovation</h3>
                        <div>
                            
                            <div class="view view-blog-posts-updated view-id-blog_posts_updated view-display-id-block_4 view-dom-id-4a02b15b1eee72726bd28cedbdd2e135">
            
                                <div class="view-content">
                                
                                    <div class="">
                                    
                                        <ul class="newsList">
                  
                                            <?php bloglists(11,$conn); ?>
              
                                        </ul>
                                        
                                    </div>
                                        
                                </div>
            
                            </div>
                            
                        </div>
                        
                        <p><a href="index.php?page_ren=49">See all blog posts </a> &raquo; </p>
                        
                    </div>
                    
                </div>
                
            </div>
    
    <?php }?>
    
<?php }?>




<!--  Ad BOxx
<div class="column col43">
<div class="colPad">
<div id="convio_signup_body" class="block block-convio-signup">
<h2 class="title">How you can make a difference</h2>
<div class="content">
<p>Sign up for our news and urgent action alerts to help us fight threats to human health.</p>
<p><div id="" class="convioSignup">
	<form action="" method="post" id="convio-signup-email-block-form--2" accept-charset="UTF-8"><fieldset><dl class="pair3070" id="edit-email--2-wrapper">
 <input type="text" id="edit-email--2" name="email" value="Your email" size="20" maxlength="128" class="textField" />
</dl>
<input type="hidden" name="path" value="/health" />
<input type="submit" id="edit-submit--2" name="op" value="Sign up" class="form-submit" /><input type="hidden" name="nid" value="253" />
<input type="hidden" name="form_build_id" value="form-Y8mSKDgHoNksnqnEm8RZsO3KVaAREc_WmOGzfrZCKMg" />
<input type="hidden" name="form_id" value="convio_signup_email_block_form" />
<input type="hidden" name="addl_info" value="contentBottom-signupBox"></fieldset></form></div></p>
<p>(See our <a href="">privacy policy</a>.)</p>
</div>
</div>
</div>
</div>

 /.block -->





	
					<?php 
						$no_show = array(52,36,42,78,86,87,80,88,89,77,101,70,83,75,79,53);
						if(  !(in_array($pagecatcode,$no_show))  ){
					
						//if( ($pagecatcode!=36) ){ 
					?>
					
		
                    <div class="row" id="shareBottom">
                               
                        <div class="shareRow">
                                
                            <div class="column col57 primaryShare">
                                
                                <div class="pagination clearfix">
                                    
                                    <p><strong>Share this</strong></p>
                                    
                                    <ul class="inlineLinks">
                                        <li class="tw">
                                            <a href="http://twitter.com/share" class="twitter-share-button" data-url="" data-counturl="" data-text="" data-count="none" data-via="">Tweet</a>
                                        </li>
                                        <li class="fb">
                                            <div class="fb-like" data-href="" data-send="false" data-layout="button_count" data-show-faces="false" data-action="recommend" data-ref="" data-width="130"></div>
                                        </li>
                                    </ul>
                                    
                                </div>
                                    
                            </div>
                                
                            <div class="column col43 secondaryShare">
                                <ul class="inlineLinks">
                                    <li><a href="javascript:window.print();"><img class="icon" src="images/iconPrin.png">Print</a></li>
                                    <li><a href="index.php?page_ren=84"><img class="icon" src="images/iconSend.png"> Email to friend</a></li>
                                </ul>
                            </div>
                                    
                            </div>
                                       
                        </div>
                                    
                    </div>
    
 
                        <?php include('incs/aside_nav.php')?>
                                               
                    <?php }?>
            		<!-- /.sidebars -->    	
    				</div>
                
    			</div><!-- /#content -->
	

   			<!-- /#navigation -->
	
			<!-- <div class="row flyout"></div>

		<div class="row flyout"></div> -->

	</div>
  
</div>
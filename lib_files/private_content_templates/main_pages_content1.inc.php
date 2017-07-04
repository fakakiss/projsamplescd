<?php if(!empty($row['caption'])){?>
    <div class="cms_head">
        <?php echo $row['caption']?>
        <div class="readmore_bottoms">
            <a href="add.php?id=<?php echo $row[0]?>">Add Sub Page</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="addlisting.php?id=<?php echo $row[0]?>">Add Page Listing</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <a href="editcat.php?id=<?php echo $row[0]?>">Edit Main Page</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            
            
            <?php if(($row['showitem'])==0){?><a href="deletecat.php?id=<?php echo $row[0]?>">Delete</a><?php }?>
        </div>	
    </div>
<?php }?>
                                                                                    
<?php if(!empty($row['caption_img'])&& file_exists("../../uploads/images/".$row['caption_img'])){?>
	<?php
                if     (!$max_width1i) $max_width1i  	= 150;
                if     (!$max_height1i)$max_height1i 	= 150;
                $the_real_image1i                   	= "../../uploads/images/".$row['caption_img'];
                $size1i                             	= GetImageSize($the_real_image1i);
                $width1i                           		= $size1i[0];
                $height1i                           	= $size1i[1];
                $x_ratio1i                         		= $max_width1i / $width1i;
                $y_ratio1i                         		= $max_height1i / $height1i;
                if      (($width1i  <= $max_width1i) && ($height1i <= $max_height1i)) 	{$tn_width1i= $width1i;$tn_height1i=$height1i;}  
                elseif (($x_ratio1i * $height1i) < ($max_height1i))                  	{$tn_height1i = ceil($x_ratio1i * $height1i); $tn_width1i  = $max_width1i;}  
                else                                                              		{$tn_width1i  = ceil($y_ratio1i * $width1i); $tn_height1i = $max_height1i;} 
    ?>

	<div><img src="../../uploads/images/<?php echo $row['caption_img']?>" width="<?php echo "$tn_width1i";?>" height="<?php echo "$tn_height1i";?>" class="cms_image_border"></div>
<?php }?> 
     
	
	
	
	
	
	
	
	
<div><?php echo $row['caption1']?></div>
     


                                         									  


<?php if(!empty($row['intro_head'])){?><div style="padding-bottom:10px;font-weight:bold"><?php echo $row['intro_head']?></div><?php }?>
<div style="padding-bottom:10px">

 
<?php if( (!empty($row['img']) && file_exists("../../uploads/images/".$row['img'])) ){?>
	<table align="<?php echo $row['pos']?>">
		<tr> 
			<td>
				<div style="padding-<?php $reg=$row['pos'];if ($reg=="left"){echo "right";}?>:10px" align="<?php echo $row['pos']?>">
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
						elseif  (($x_ratio * $height) < ($max_height))                {$tn_height = ceil($x_ratio * $height); $tn_width  = $max_width;}  
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
																			
<?php if(!empty($row['head1'])){?><div style="padding-bottom:10px;font-weight:bold"><?php echo $row['head1']?></div><?php }?>                                                                                   
<div style="padding-bottom:10px"> 
<?php if(!empty($row['img1']) && file_exists("../../uploads/images/".$row['img'])) {?>
	<table align="<?php echo $row['pos1']?>">
		<tr> 
			<td>
				<div style="padding-<?php $reg=$row['pos1'];if ($reg=="left") {echo "right";} ?>:10px" align="<?php echo $row['pos1']?>">                                            	
					<?php
						if     (!$max_width1) $max_width1  	= 150;
						if     (!$max_height1)$max_height1 	= 150;
						$the_real_image1                   	= "../../uploads/images/".$row['img1'];
						$size1                             	= GetImageSize($the_real_image1);
						$width1                           	= $size1[0];
						$height1                           	= $size1[1];
						$x_ratio1                         	= $max_width1 / $width1;
						$y_ratio1                         	= $max_height1 / $height1;
						if      (($width1  <= $max_width1) && ($height1 <= $max_height1)) {$tn_width1= $width1;$tn_height1=$heigh1t;}  
						elseif (($x_ratio1 * $height1) < ($max_height1))                  {$tn_height1 = ceil($x_ratio1 * $height1); $tn_width1  = $max_width1;}  
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

<?php if(!empty($row['head2'])){?><div style="padding-bottom:10px;font-weight:bold"><?php echo $row['head2']?></div><?php }?>                                                                                   
<div style="padding-bottom:10px"> 
	<?php if(!empty($row['img2']) && file_exists("../../uploads/images/".$row['img2'])) {?>
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
							if      (($width2<= $max_width2) && ($height2 <= $max_height2)) {$tn_width2  = $width2;  $tn_height2 = $height2;}  
							elseif (($x_ratio2 * $height2) < ($max_height2))                {$tn_height2 = ceil($x_ratio2 * $height2); $tn_width2  = $max_width2;}  
							else           													{$tn_width2  = ceil($y_ratio2 * $width2); $tn_height2 = $max_height2;} 
						?>													
						<img src="../../uploads/images/<?php echo $row['img2']?>" width="<?php echo "$tn_width2";?>" height="<?php echo "$tn_height2";?>"  class="cms_image_border"> 
					</div>
				  </td>
				</tr>                                              	
				<?php if(!empty($row['capt2'])){?><tr><td align="center" valign="top"><div style="font-size:9px" align="center"><?php echo $row['capt2']?></div></td></tr><?php }?>                                              	                                                                                                                                                                                                                                                  
			</table>
		 <?php }?>
		 <?php echo $row['text2']?>
	</div>

	<?php if(!empty($row['head3'])){?><div style="padding-bottom:10px;font-weight:bold"><?php echo $row['head3']?></div><?php }?>                     
	<div style="padding-bottom:10px"> 
		<?php if(!empty($row['img3']) && file_exists("../../uploads/images/".$row['img3'])){?>
			<table align="<?php echo $row['pos3']?>">
				<tr>
					<td>
						<div style="padding-<?php $reg=$row['pos3'];if ($reg=="left") {echo "right";} ?>:10px" align="<?php echo $row['pos3']?>">
							<?php
								if     (!$max_width3) $max_width3   = 150;
								if     (!$max_height3)$max_height3  = 150;
								$the_real_image3                    = "../../uploads/images/".$row['img3'];
								$size3                              = GetImageSize($the_real_image3);
								$width3                             = $size3[0];
								$height3                            = $size3[1];
								$x_ratio3                           = $max_width3 / $width3;
								$y_ratio3                           = $max_height3 / $height3;
								if      (($width3  <= $max_width3) && ($height3 <= $max_height3)) 	{$tn_width3  = $width3;                    $tn_height3 = $height3;}  
								elseif (($x_ratio3 * $height3) < ($max_height3))                 	{$tn_height3 = ceil($x_ratio3 * $height3); $tn_width3  = $max_width3;}  
								else                                                              	{$tn_width3  = ceil($y_ratio3 * $width3);  $tn_height3 = $max_height3;} 
							?>
							<img src="../../uploads/images/<?php echo $row['img3']?>" width="<?php echo "$tn_width3";?>" height="<?php echo "$tn_height3";?>"  class="cms_image_border"> 
						</div>
					</td>
				</tr>
				<?php if(!empty($row['capt3'])){?><tr><td align="center" valign="top"><div style="font-size:9px" align="center"><?php echo $row['capt3']?></div></td></tr><?php }?>
			</table>
			<?php }?>
			<?php echo $row['text3']?>
		  </div>

		  <?php if(!empty($row['head4'])){?><div style="padding-bottom:10px;font-weight:bold"><?php echo $row['head4']?></div><?php }?>                                                                                                                                                                         
			<div style="padding-bottom:10px"> 
				<?php if(!empty($row['img4']) && file_exists("../../uploads/images/".$row['img4'])){?>
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
						<?php if(!empty($row['capt4'])){?><tr><td align="center" valign="top"><div style="font-size:9px" align="center"><?php echo $row['capt4']?></div></td></tr><?php }?>                                                
					</table>
				<?php }?>
				<?php echo $row['text4']?>
			</div>
		  
<?php if(!empty($row['head5'])){?><div style="padding-bottom:10px;font-weight:bold"><?php echo $row['head5']?></div><?php }?>                                                                                                                                                              
<?php if(!empty($row['text5'])){?>
    <div style="padding-bottom:10px"> 
    <?php if(!empty($row['img5']) && file_exists("../../uploads/images/".$row['img5'])){?>
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
            <?php if(!empty($row['capt5'])){?><tr><td align="center" valign="top"><div style="font-size:9px" align="center"><?php echo $row['capt5']?></div></td></tr><?php }?>                                   
        </table>
        <?php }?> 
    	<?php echo $row['text5']?>
	</div>
<?php }?>
												
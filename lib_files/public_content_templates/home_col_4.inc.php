<?php if(!($row_main_page['text4']=="")){?>

    <div class="rowleft">
    
    	<a href="<?php echo $row_main_page['img4link']?>" style="padding:0">
        	                        
            <?php if(!empty($row_main_page['img4'])&& file_exists("uploads/images/".$row_main_page['img4'])){?>
                <table align="<?php echo $row_main_page['pos4']?>" style="padding:0; margin:0">
                    <tr> 
                        <td style="padding:0; margin:0">
                            <div style="padding-<?php $reg=$row_main_page['pos4'];if ($reg=="left") {echo "right";} ?>:0px" align="<?php echo $row_main_page['pos4']?>">                                            	
                                <?php
                                    if     (!$max_width4) $max_width4  = 150;
                                    if     (!$max_height4)$max_height4 = 150;
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
                                    <img src="uploads/images/<?php echo $row_main_page['img4']?>" width="<?php echo "$tn_width4";?>" height="80" class="rowpic">
                                </div>
                            </td>
                        </tr>
                        <?php if(!empty($row_main_page['capt4'])){?>
                            <tr>
                                <td style="padding:0" align="center" valign="top" width="<?php echo "$tn_width4";?>"><div style="font-size:9px" align="center"><?php echo $row_main_page['capt4']?></div></td>
                            </tr>
                        <?php }?>                                                            
                    </table>
                <?php }?>											
            
        </a>
        
        
        
        
        
     
        <?php if(!empty($row_main_page['head4'])){?>
        	<h2 style="margin-left: 0;">
            	<a href="<?php echo $row_main_page['img4link']?>">
					<?php echo $row_main_page['head4']?>
                </a>
            </h2>
		<?php } ?> 
        
        <p>                                                                                          
			<div><?php echo stripslashes ($row_main_page['text4']) ?></div>
        </p>
            
        <p class="readmorelink">
        	<a href="<?php echo $row_main_page['img4link']?>"><img src="images/readmore_bu_v2.gif" alt="read more link" /></a>
        </p>
            
        </div>
        						
<?php }?>	
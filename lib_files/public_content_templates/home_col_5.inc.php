<?php if(!($row_main_page['text5']=="")){?>

    <div class="rowright">
    
    	<a href="<?php echo $row_main_page['img5link']?>" style="padding:0">
        	                        
            <?php if(!empty($row_main_page['img5'])&& file_exists("uploads/images/".$row_main_page['img5'])){?>
                <table align="<?php echo $row_main_page['pos5']?>" style="padding:0; margin:0">
                    <tr> 
                        <td style="padding:0; margin:0">
                            <div style="padding-<?php $reg=$row_main_page['pos5'];if ($reg=="left") {echo "right";} ?>:0px" align="<?php echo $row_main_page['pos5']?>">                                            	
                                <?php
                                    if     (!$max_width5) $max_width5  = 150;
                                    if     (!$max_height5)$max_height5 = 150;
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
                                    <img src="uploads/images/<?php echo $row_main_page['img5']?>" width="<?php echo "$tn_width5";?>" height="80" class="rowpic">
                                </div>
                            </td>
                        </tr>
                        <?php if(!empty($row_main_page['capt5'])){?>
                            <tr>
                                <td style="padding:0" align="center" valign="top" width="<?php echo "$tn_width5";?>"><div style="font-size:9px" align="center"><?php echo $row_main_page['capt5']?></div></td>
                            </tr>
                        <?php }?>                                                            
                    </table>
                <?php }?>											
            
        </a>
        
        
        
        
        
     
        <?php if(!empty($row_main_page['head5'])){?>
        	<h2 style="margin-left: 0;">
            	<a href="<?php echo $row_main_page['img5link']?>">
					<?php echo $row_main_page['head5']?>
                </a>
            </h2>
		<?php } ?> 
        
        <p>                                                                                          
			<div style="padding-left:18px"><?php echo stripslashes ($row_main_page['text5']) ?></div>
        </p>
            
        <p class="readmorelink">
        	<a href="<?php echo $row_main_page['img5link']?>"><img src="images/readmore_bu_v2.gif" alt="read more link" /></a>
        </p>
            
        </div>
        						
<?php }?>	
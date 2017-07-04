<?php if(!($row_main_page['text3']=="")){?>

    <div class="rowright">
    
    	<a href="<?php echo $row_main_page['img3link']?>" style="padding:0">
        	                        
            <?php if(!empty($row_main_page['img3'])&& file_exists("uploads/images/".$row_main_page['img3'])){?>
                <table align="<?php echo $row_main_page['pos3']?>" style="padding:0; margin:0">
                    <tr> 
                        <td style="padding:0px">
                            <div style="padding-<?php $reg=$row_main_page['pos3'];if ($reg=="left") {echo "right";} ?>:0px" align="<?php echo $row_main_page['pos3']?>">                                            	
                                <?php
                                    if     (!$max_width3) $max_width3  = 150;
                                    if     (!$max_height3)$max_height3 = 150;
                                    $the_real_image3                   = "uploads/images/".$row_main_page['img3'];
                                    $size3                             = GetImageSize($the_real_image3);
                                    $width3                            = $size3[0];
                                    $height3                           = $size3[1];
                                    $x_ratio3                          = $max_width3 / $width3;
                                    $y_ratio3                          = $max_height3 / $height3;
                                    if      (($width3  <= $max_width3) && ($height3 <= $max_height3)) {$tn_width3= $width3;$tn_height3=$height3;}  
                                    else if (($x_ratio3 * $height3) < ($max_height3))                 {$tn_height3 = ceil($x_ratio3 * $height3); $tn_width3  = $max_width3;}  
                                    else                                                              {$tn_width3  = ceil($y_ratio3 * $width3); $tn_height3 = $max_height3;} 
                                    ?>												
                                    <img src="uploads/images/<?php echo $row_main_page['img3']?>" width="<?php echo "$tn_width3";?>" height="80" class="rowpic" vspace="0">
                                </div>
                            </td>
                        </tr>
                        <?php if(!empty($row_main_page['capt3'])){?>
                            <tr>
                                <td style="padding:0" align="center" valign="top" width="<?php echo "$tn_width3";?>"><div style="font-size:9px" align="center"><?php echo $row_main_page['capt3']?></div></td>
                            </tr>
                        <?php }?>                                                            
                    </table>
                <?php }?>											
            
        </a>
        
        
        
        
        
     
        <?php if(!empty($row_main_page['head3'])){?>
        	<h2 style="margin-left: 0;">
            	<a href="<?php echo $row_main_page['img3link']?>">
					<?php echo $row_main_page['head3']?>
                </a>
            </h2>
		<?php } ?> 
        
                                                                                                  
			<div style="padding-left:18px"><?php echo stripslashes ($row_main_page['text3']) ?></div>
        
            
        <p class="readmorelink">
        	<a href="<?php echo $row_main_page['img3link']?>"><img src="images/readmore_bu_v2.gif" alt="read more link" /></a>
        </p>
            
        </div>
        						
<?php }?>	
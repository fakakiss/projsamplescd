<?php if(!($row_main_page['text2']=="")){?>

    <div class="rowleft">
    
    	<a href="<?php echo $row_main_page['img2link']?>" >
        	                        
            <?php if(!empty($row_main_page['img2'])&& file_exists("uploads/images/".$row_main_page['img2'])){?>
            
                <table align="<?php echo $row_main_page['pos2']?>" style="padding:0; margin:0" cellpadding="0" cellspacing="0" >
                    <tr> 
                        <td >
                                                                      	
                                <?php
                                    if     (!$max_width2) $max_width2  = 150;
                                    if     (!$max_height2)$max_height2 = 150;
                                    $the_real_image2                   = "uploads/images/".$row_main_page['img2'];
                                    $size2                             = GetImageSize($the_real_image2);
                                    $width2                            = $size2[0];
                                    $height2                           = $size2[1];
                                    $x_ratio2                          = $max_width2 / $width2;
                                    $y_ratio2                          = $max_height2 / $height2;
                                    if      (($width2  <= $max_width2) && ($height2 <= $max_height2)) {$tn_width2= $width2;$tn_height2=$height2;}  
                                    else if (($x_ratio2 * $height2) < ($max_height2))                 {$tn_height2 = ceil($x_ratio2 * $height2); $tn_width2  = $max_width2;}  
                                    else                                                              {$tn_width2  = ceil($y_ratio2 * $width2); $tn_height2 = $max_height2;} 
                                    ?>												
                                    <img src="uploads/images/<?php echo $row_main_page['img2']?>" width="<?php echo "$tn_width2";?>" height="80" class="rowpic" >
                                
                            </td>
                        </tr>
                        <?php if(!empty($row_main_page['capt2'])){?>
                            <tr>
                                <td style="padding:0; margin:0" align="center" valign="top" width="<?php echo "$tn_width2";?>">
                                	<div style="font-size:9px" align="center"><?php echo $row_main_page['capt2']?></div>
                                </td>
                            </tr>
                        <?php }?>                                                            
                    </table>
                <?php }?>											
            
        </a>

        <?php if(!empty($row_main_page['head2'])){?>
        	<h2>
            	<a href="<?php echo $row_main_page['img2link']?>">
					<?php echo $row_main_page['head2']?>
                </a>
            </h2>
		<?php } ?> 
        
        <p>                                                                                          
			<div><?php echo stripslashes ($row_main_page['text2'])?></div>
        </p>
            
        <p class="readmorelink">
        	<a href="<?php echo $row_main_page['img2link']?>"><img src="images/readmore_bu_v2.gif" alt="read more link" /></a>
        </p>
            
	</div>
        						
<?php }?>	
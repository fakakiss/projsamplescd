<?php 
	$q_features   = "select * from pagelistings where showitem='1' and category='7' order by date desc limit 0,1";
	$rst_features = mysql_query($q_features) or die(mysql_error());
?>
<table border="0" cellspacing="0" cellpadding="0" width="90%" align="center">
	<?php if(mysql_num_rows($rst_features) > 0){while($row_features = mysql_fetch_array($rst_features)){?>
    	<tr>
        	<td valign="top">            
				
                												
            	<?php if ((!empty($row_features['illus1'])) && file_exists("uploads/images/".$row_features['illus1'])){?>							
                	<table border=0 cellPadding=0 cellSpacing=0>                             
                    	<tr>
							<td>						
								<?php
 									if (!$max_width_illus1) $max_width_illus1  = 330; 
 									if (!$max_height_illus1)$max_height_illus1 = 200;    
 									$the_real_image_illus1 = "uploads/images/".$row_features['illus1'];
 									$size_illus1           = GetImageSize($the_real_image_illus1);
 									$width_illus1          = $size_illus1[0];
 									$height_illus1         = $size_illus1[1];
 									$x_ratio_illus1        = $max_width_illus1 / $width_illus1;
 									$y_ratio_illus1        = $max_height_illus1 / $height_illus1;
                        			if (($width_illus1  <= $max_width_illus1) && ($height_illus1 <= $max_height_illus1)) { $tn_width_illus1  = $width_illus1; $tn_height_illus1 = $height_illus1; }  
                        			elseif (($x_ratio_illus1 * $height_illus1) < ($max_height_illus1)) {$tn_height_illus1 = ceil($x_ratio_illus1 * $height_illus1);$tn_width_illus1  = $max_width_illus1;} 
                        			else {$tn_width_illus1  = ceil($y_ratio_illus1 * $width_illus1);$tn_height_illus1 = $max_height_illus1; }  
                    			?>	                   
								<a href="<?php echo FPNAMEXXNEWS;?>?did=<?php echo $row_features[0];?>&&page_ren=<?php echo $pagecatcode?>"><img src="uploads/images/<?php echo $row_features['illus1']?>" width="<?php echo "$tn_width_illus1";?>" height="<?php echo "$tn_height_illus1";?>"  border="0"></a> 
							</td>
						</tr>  
                    </table>
                 <?php }?>
							
				<?php if(!empty($row_features['caption'])){?>
                    <p class="right"><b><?php echo $row_features['caption']?></b></p>
                <?php }?>
                           					
         		<p><?php $text=$row_features['intro']; echo substr($text, 0 , 300 ); ?>...</p>
        		<p class="right"><a href="<?php echo FPNAMEXXNEWS;?>?did=<?php echo $row_features[0];?>&&page_ren=<?php echo $pagecatcode?>">Read more</a></p>
			</td>
		</tr>
	<?php }}else{?> <tr><td></td></tr><?php }?>                                                           
</table>
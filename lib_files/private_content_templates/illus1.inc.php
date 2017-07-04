<div>
	<?php if(!empty($row['illus1'])){?>
        <div style="padding-left:0px;padding-right:0px;padding-bottom:5px; padding-top:10px">
            <?php if(!empty($row['illus1'])){?>
                <?php
                    if (!$max_width_illus1) $max_width_illus1  	= 300; 
                    if (!$max_height_illus1)$max_height_illus1 	= 60;   
                    $the_real_image_illus1 						= "../../uploads/images/".$row['illus1'];
                    $size_illus1           						= GetImageSize($the_real_image_illus1);
                    $width_illus1          						= $size_illus1[0];
                    $height_illus1         						= $size_illus1[1];
                    $x_ratio_illus1        						= $max_width_illus1 / $width_illus1;
                    $y_ratio_illus1        						= $max_height_illus1 / $height_illus1;
                    if (($width_illus1  <= $max_width_illus1) && ($height_illus1 <= $max_height_illus1)) { $tn_width_illus1  = $width_illus1; $tn_height_illus1 = $height_illus1; }  
                    else if (($x_ratio_illus1 * $height_illus1) < ($max_height_illus1)) {$tn_height_illus1 = ceil($x_ratio_illus1 * $height_illus1);$tn_width_illus1  = $max_width_illus1;} 
                    else {$tn_width_illus1  = ceil($y_ratio_illus1 * $width_illus1);$tn_height_illus1 = $max_height_illus1; }  
                ?>	
                <img src="../../uploads/images/<?php echo $row['illus1']?>" width="<?php echo "$tn_width_illus1";?>" height="<?php echo "$tn_height_illus1";?>" class="cms_image_border" > 
            <?php }?>
        </div>
    <?php }?>
        
    <?php if(!empty($row['illus2'])){?>
        <div style="padding-left:0px;padding-right:0px;padding-bottom:5px">
            <?php if(!empty($row['illus2'])){ ?>
                <?php
                    if (!$max_width_illus2) $max_width_illus2  	= 300; 
                    if (!$max_height_illus2)$max_height_illus2 	= 60;
                    $the_real_image_illus2 						= "../../uploads/images/".$row['illus2'];
                    $size_illus2   								= GetImageSize($the_real_image_illus2);
                    $width_illus2  								= $size_illus2[0];
                    $height_illus2 								= $size_illus2[1];
                    $x_ratio_illus2 							= $max_width_illus2 / $width_illus2;
                    $y_ratio_illus2 							= $max_height_illus2 / $height_illus2;
                    if (($width_illus2  <= $max_width_illus2) && ($height_illus2 <= $max_height_illus2)) { $tn_width_illus2  = $width_illus2; $tn_height_illus2 = $height_illus2; }  
                    elseif (($x_ratio_illus2 * $height_illus2) < ($max_height_illus2)) {$tn_height_illus2 = ceil($x_ratio_illus2 * $height_illus2);$tn_width_illus2  = $max_width_illus2;} 
                    else {$tn_width_illus2  = ceil($y_ratio_illus2 * $width_illus2);$tn_height_illus2 = $max_height_illus2; }  
                ?>	
                <img src="../../uploads/images/<?php echo $row['illus2']?>" width="<?php echo "$tn_width_illus2";?>" height="<?php echo "$tn_height_illus2";?>" class="cms_image_border"> 
            <?php }?>
        </div>
    <?php } ?>
            
    <?php if(!empty($row['illus3'])){?>
        <div style="padding-left:0px;padding-right:0px;padding-bottom:5px">
            <?php if(!empty($row['illus3'])){?>
                <?php
                    if (!$max_width_illus3) $max_width_illus3  	= 300; 
                    if (!$max_height_illus3)$max_height_illus3 	= 60;   
                    $the_real_image_illus3 						= "../../uploads/images/".$row['illus3'];
                    $size_illus3   								= GetImageSize($the_real_image_illus3);
                    $width_illus3  								= $size_illus3[0];
                    $height_illus3 								= $size_illus3[1];
                    $x_ratio_illus3 							= $max_width_illus3 / $width_illus3;
                    $y_ratio_illus3 							= $max_height_illus3 / $height_illus3;
                    if (($width_illus3  <= $max_width_illus3) && ($height_illus3 <= $max_height_illus3)) { $tn_width_illus3  = $width_illus3; $tn_height_illus3 = $height_illus3; }  
                    elseif (($x_ratio_illus3 * $height_illus3) < ($max_height_illus3)) {$tn_height_illus3 = ceil($x_ratio_illus3 * $height_illus3);$tn_width_illus3  = $max_width_illus3;} 
                    else {$tn_width_illus3  = ceil($y_ratio_illus3 * $width_illus3);$tn_height_illus3 = $max_height_illus3; }  
                ?>	
                <img src="../../uploads/images/<?php echo $row['illus3']?>" width="<?php echo "$tn_width_illus3";?>" height="<?php echo "$tn_height_illus3";?>" class="cms_image_border"> 
            <?php }?>
        </div>
    <?php }?>
        
    <?php if(!empty($row['illus4'])){?>
        <div style="padding-left:0px;padding-right:0px;padding-bottom:5px">
            <?php if(!empty($row['illus4'])){ ?>
                <?php
                    if (!$max_width_illus4) $max_width_illus4  	= 300; 
                    if (!$max_height_illus4)$max_height_illus4 	= 60;   
                    $the_real_image_illus4 						= "../../uploads/images/".$row['illus4'];
                    $size_illus4   								= GetImageSize($the_real_image_illus4);
                    $width_illus4  								= $size_illus4[0];
                    $height_illus4 								= $size_illus4[1];
                    $x_ratio_illus4 							= $max_width_illus4 / $width_illus4;
                    $y_ratio_illus4 							= $max_height_illus4 / $height_illus4;
                    if (($width_illus4  <= $max_width_illus4) && ($height_illus4 <= $max_height_illus4)) 	{$tn_width_illus4  = $width_illus4; $tn_height_illus4 = $height_illus4; }  
                    elseif (($x_ratio_illus4 * $height_illus4) < ($max_height_illus4)) 						{$tn_height_illus4 = ceil($x_ratio_illus4 * $height_illus4);$tn_width_illus4  = $max_width_illus4;} 
                    else 																					{$tn_width_illus4  = ceil($y_ratio_illus4 * $width_illus4);$tn_height_illus4 = $max_height_illus4; }  
                ?>	
                <img src="../../uploads/images/<?php echo $row['illus4']?>" width="<?php echo "$tn_width_illus4";?>" height="<?php echo "$tn_height_illus4";?>" class="cms_image_border"> 
            <?php }?>
        </div>
    <?php }?>
        
    <?php if(!empty($row['illus5'])){?>
        <div style="padding-left:0px;padding-right:0px;padding-bottom:5px">
            <?php if(!empty($row['illus5'])){ ?>
                <?php
                    if (!$max_width_illus5) $max_width_illus5  	= 300; 
                    if (!$max_height_illus5)$max_height_illus5 	= 60;   
                    $the_real_image_illus5 						= "../../uploads/images/".$row['illus5'];
                    $size_illus5   								= GetImageSize($the_real_image_illus5);
                    $width_illus5  								= $size_illus5[0];
                    $height_illus5 								= $size_illus5[1];
                    $x_ratio_illus5 							= $max_width_illus5 / $width_illus5;
                    $y_ratio_illus5 							= $max_height_illus5 / $height_illus5;
                    if (($width_illus5  <= $max_width_illus5) && ($height_illus5 <= $max_height_illus5)) 	{$tn_width_illus5  = $width_illus5; $tn_height_illus5 = $height_illus5; }  
                    elseif (($x_ratio_illus5 * $height_illus5) < ($max_height_illus5)) 						{$tn_height_illus5 = ceil($x_ratio_illus5 * $height_illus5);$tn_width_illus5  = $max_width_illus5;} 
                    else 																					{$tn_width_illus5  = ceil($y_ratio_illus5 * $width_illus5);$tn_height_illus5 = $max_height_illus5; }  
                ?>	
                <img src="../../uploads/images/<?php echo $row['illus5']?>" width="<?php echo "$tn_width_illus5";?>" height="<?php echo "$tn_height_illus5";?>" class="cms_image_border">
            <?php }?>
        </div>
    <?php }?>
</div>
<?php if( !empty($row['add1']) && !empty($row['add2']) &&  !empty($row['add3']) &&  !empty($row['add4']) &&  !empty($row['add5']) ){ ?>
	<br><br>
	<div style="padding:5px">Ad Images</div>
<?php }?>


<div style="padding:5px">
    <?php if(!empty($row['add1'])  & file_exists("../../uploads/images/".$row['add1']) ){ ?>
        <?php
            if (!$max_width_add1) $max_width_add1  	= 150; 
            if (!$max_height_add1)$max_height_add1 	= 200;    
            $the_real_image_add1 					= "../../uploads/images/".$row['add1'];
            $size_add1   							= GetImageSize($the_real_image_add1);
            $width_add1  							= $size_add1[0];
            $height_add1 							= $size_add1[1];
            $x_ratio_add1 							= $max_width_add1 / $width_add1;
            $y_ratio_add1 							= $max_height_add1 / $height_add1;
            if (($width_add1  <= $max_width_add1) && ($height_add1 <= $max_height_add1)) { $tn_width_add1  = $width_add1; $tn_height_add1 = $height_add1; }  
            elseif (($x_ratio_add1 * $height_add1) < ($max_height_add1)) {$tn_height_add1 = ceil($x_ratio_add1 * $height_add1);$tn_width_add1  = $max_width_add1;} 
            else {$tn_width_add1  = ceil($y_ratio_add1 * $width_add1);$tn_height_add1 = $max_height_add1; }  
        ?>	
        <img src="../../uploads/images/<?php echo $row['add1']?>" width="<?php echo "$tn_width_add1";?>" height="<?php echo "$tn_height_add1";?>" class="cms_image_border"> 
    <?php }?>
</div>



<div style="padding:5px">
    <?php if(!empty($row['add2'])  & file_exists("../../uploads/images/".$row['add2']) ){ ?>
        <?php
            if (!$max_width_add2) $max_width_add2  	= 150; 
            if (!$max_height_add2)$max_height_add2 	= 200;    
            $the_real_image_add2 					= "../../uploads/images/".$row['add2'];
            $size_add2   							= GetImageSize($the_real_image_add2);
            $width_add2  							= $size_add2[0];

            $height_add2 							= $size_add2[1];
            $x_ratio_add2 							= $max_width_add2 / $width_add2;
            $y_ratio_add2 							= $max_height_add2 / $height_add2;
            if (($width_add2  <= $max_width_add2) && ($height_add2 <= $max_height_add2)) { $tn_width_add2  = $width_add2; $tn_height_add2 = $height_add2; }  
            elseif (($x_ratio_add2 * $height_add2) < ($max_height_add2)) {$tn_height_add2 = ceil($x_ratio_add2 * $height_add2);$tn_width_add2  = $max_width_add2;} 
            else {$tn_width_add2  = ceil($y_ratio_add2 * $width_add2);$tn_height_add2 = $max_height_add2; }  
        ?>	
        <img src="../../uploads/images/<?php echo $row['add2']?>" width="<?php echo "$tn_width_add2";?>" height="<?php echo "$tn_height_add2";?>" class="cms_image_border">
    <?php }?>
</div>




    <?php if(!empty($row['add3']) & file_exists("../../uploads/images/".$row['add3']) ){ ?>
    <div style="padding:5px">
        <?php
            if (!$max_width_add3) $max_width_add3  	= 150; 
            if (!$max_height_add3)$max_height_add3 	= 200;   
            $the_real_image_add3 					= "../../uploads/images/".$row['add3'];
            $size_add3   							= GetImageSize($the_real_image_add3);
            $width_add3  							= $size_add3[0];

            $height_add3 							= $size_add3[1];
            $x_ratio_add3 							= $max_width_add3 / $width_add3;
            $y_ratio_add3 							= $max_height_add3 / $height_add3;
            if (($width_add3  <= $max_width_add3) && ($height_add3 <= $max_height_add3)) { $tn_width_add3  = $width_add3; $tn_height_add3 = $height_add3; }  
            else if (($x_ratio_add3 * $height_add3) < ($max_height_add3)) {$tn_height_add3 = ceil($x_ratio_add3 * $height_add3);$tn_width_add3  = $max_width_add3;} 
            else {$tn_width_add3  = ceil($y_ratio_add3 * $width_add3);$tn_height_add3 = $max_height_add3; }  
        ?>	
        <img src="../../uploads/images/<?php echo $row['add3']?>" width="<?php echo "$tn_width_add3";?>" height="<?php echo "$tn_height_add3";?>" class="cms_image_border"> 
        </div>
    <?php }?>




<?php if(!empty($row['add4']) & file_exists("../../uploads/images/".$row['add4']) ){?>
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
                elseif (($x_ratio_add4 * $height_add4) < ($max_height_add4)) {$tn_height_add4 = ceil($x_ratio_add4 * $height_add4);$tn_width_add4  = $max_width_add4;} 
                else {$tn_width_add4  = ceil($y_ratio_add4 * $width_add4);$tn_height_add4 = $max_height_add4; }  
            ?>	
            <img src="../../uploads/images/<?php echo $row['add4']?>" width="<?php echo "$tn_width_add4";?>" height="<?php echo "$tn_height_add4";?>" class="cms_image_border"> 
        <?php }?>		   
    </div>
<?php }?>




<?php if(!empty($row['add5']) & file_exists("../../uploads/images/".$row['add5']) ){ ?>
    <div style="padding:5px">
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
    </div>
<?php }?>
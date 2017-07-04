<?php 
	$intro= stripslashes (trim($row_main_page['intro']));
	$text1= stripslashes (trim($row_main_page['text1']));
	$text2= stripslashes (trim($row_main_page['text2']));
	$text3= stripslashes (trim($row_main_page['text3']));
	$text4= stripslashes (trim($row_main_page['text4']));
	$text5= stripslashes (trim($row_main_page['text5']));
?>

<section id="main">

    <div class="intro_wrap">
        <div class="center">
          	<h2 class="page_title"><?php echo $row_main_page['caption']?></h2>
        </div>
    </div>
    <!-- end .intro_wrap-->
  
  <div class="center">
  
  
  		<div class="breadcrumbs">
          <ul>
            <li><a href="index.php">Home</a> /</li>
            <li class="current_page"><?php echo $row_main_page['caption']?></li>
          </ul>
    	</div>
        <!-- end .breadcrumbs-->
        
        
        
    
        
        
    <section id="content" class="float_left">
    
    
    	<?php if($pagecatcode==63&$detailid==0){?>
            <div style="padding-top:0px">
                <?php include('incs/enquiry_form.inc.php')?>
            </div>
    	<?php }?>
        
        
        
        <!-- Text One-->              							
		<?php if(!($text1=="")) { ?>
        	<h3><?php echo $row_main_page['head1']?></h3>
            <p>
                <?php if(!empty($row_main_page['img1'])&& file_exists("uploads/images/".$row_main_page['img1'])){?>
                                                                    
                    <?php
                        if     (!$max_width1) $max_width1  = 350;
                        if     (!$max_height1)$max_height1 = 350;
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
                    <img src="uploads/images/<?php echo $row_main_page['img1']?>" width="<?php echo "$tn_width1";?>" height="<?php echo "$tn_height1";?>" class="left">
                                            
                <?php }?>	
                <?php echo $text1?>
            </p>
        <?php }?>
        
        
        <!-- Text Two-->
      	<?php if(!($text2=="")) { ?>
            <h3><?php echo $row_main_page['head2']?></h3>
            <p>
            
            	<?php if(!empty($row_main_page['img2'])&& file_exists("uploads/images/".$row_main_page['img2']) ){?>
        			
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
                    <img src="uploads/images/<?php echo $row_main_page['img2']?>" width="<?php echo "$tn_width2";?>" height="<?php echo "$tn_height2";?>"  class="right"> 
                                       
                        
                	<?php }?>
                
                <?php echo $text2?>
            </p>
        <?php }?>
        
        
        <?php if($pagecatcode==72&$detailid==0){?>
            <div style="padding-top:0px">
                <?php include('incs/register1.php')?>
            </div>
    	<?php }?>
        
        
        
    </section>
    <!-- end #content-->
    
    
    
    
    
  
       
       <?php
	   $number_of_subs = number_mspages($pagecatcode);
	   //echo $number_of_subs;
	    if ($number_of_subs > -1 )
		{?>
    
    <section id="sidebar" class="float_right">
      <div class="widgetwrap">
        <h5><?php echo $row_main_page['head5']?></h5>
        <p><?php echo $text5?></p>
      </div>
      <!-- end .widgetwrap-->
      
      
      
       
      
       
      <div class="widgetwrap">
      
   
      
        <h5>Related Pages/Links</h5>
        <ul class="menu">
        
          <li><a href="index.php">Home</a></li>
          <li><a href="index1.php?page_ren=0075">Events</a></li>
          <li><a href="index1.php?page_ren=0059">Services</a></li>
          <li><a href="index1.php?page_ren=0068">About Us</a></li>
          <li><a href="index1.php?spage_ren=0018">Trails</a></li>
          <li><a href="index1.php?page_ren=0062">Socca News</a></li>
          <li><a href="index1.php?page_ren=0063">Contact Us</a></li>
          
          
        </ul>
      </div>
      <!-- end .widgetwrap--> 
      
      
      <?php if ($pagecatcode != 69 ){?>
		
      <div class="widgetwrap ads">
        <h5>Features Socca Players</h5>
        <ul>
         <li><a href="index1.php?spage_ren=0020"><img src="images/rep1.png" alt="" /></a></li>
         <li class="last"><a href="index1.php?spage_ren=0013"><img src="images/rep2.png" alt="" /></a></li>
         <li><a href="index1.php?spage_ren=0019"><img src="images/rep3.png" alt="" /></a></li>
         <li class="last"><a href="index1.php?page_ren=0072"><img src="images/rep4.png" alt="" /></a></li>
        </ul>
      </div>
      
      
      
      <!-- end .widgetwrap-->
      <div class="widgetwrap recent_tweet">
      <h5>Recent Tweet</h5>
      <ul id="twitter_update_list" class="tweet">
              <li>&nbsp;</li>
            </ul>
            <p><a href="#" class="button">Follow on Twitter</a></p>
      
       </div>
      <!-- end .widgetwrap-->
      <?php }?>
      
      
    </section>
    <!-- end #sidebar--> 
     <?php }?>
    
    
    
    
  </div>
  <!-- end .center-->
  
  <?php include('incs/pre_footer.php')?> 
  <!--end .sub_content --> 
  
</section>
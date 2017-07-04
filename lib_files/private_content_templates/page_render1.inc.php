<div class="cms_text">
				 
    <div style="padding-bottom:10px">
    					    						
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="cms_text">
            <tr>
                <td>
                    <div><?php include('../../lib_files/private_content_templates/main_pages_content1.inc.php')?></div> 
                    
                    
                    
                    
            
                        <div style="padding-left:30px">
                            <table  border="0"  class="cms_text">                                 
								<?php  
                                        $q_pages = "select * from $system_table where category='$mysql_id' order by updated desc";
                                        $rst_pages = mysql_query($q_pages) or die(mysql_error());
                                        if(mysql_num_rows($rst_pages) > 0){while($row_pages = mysql_fetch_array($rst_pages))
                                {?>

                      			<tr> 
                        			<td valign="top">
                           				<table width="0" border="0" cellspacing="0" cellpadding="0">
                             				<tr>
                             
                               					<td  valign="top" width="300px">
                               
                               <div class="cms_text" style="font-size:12px;font-weight:bold;padding-bottom:5px"> 
                                   <a href="details.php?id=<?php echo $row_pages[0]?>">
                                        <?php echo $row_pages['img5link']?>&nbsp;
                                   </a>   
                                   
                                      <!--                                          
                                   <span class="cms_date">(<?php echo $row_pages['date']?>)</span> 
                                   
                                    --> 
                               </div>
                          
                            
                               
                               </td>
                               
                               <td valign="top" align="right">
                              
                               
                                 <div class="readmore_bottoms" style="padding-bottom:0px;padding-top:0px"> 
                                 <?php if (($row_pages['showitem'])==1) {echo "<span class=on>On</span>";} else {echo "<span class=off>Off</span>";}?>&nbsp;
                                 
                                  <a href="edit.php?id=<?php echo $row_pages[0]?>">Edit</a>&nbsp;
                                  <a href="delete.php?id=<?php echo $row_pages[0]?>&pgid=<?php echo $mysql_id;?>">Delete</a> 
                               </div></td>
                             </tr>
                             <tr><td colspan="2">  <div class="cms_text"><?php $text=$row_pages['intro']; echo substr($text, 0 , 150 ); ?></div> </td></tr>
                           </table>

                         
                          
                            
                         
                          
                        </td>
                      </tr>
                      
                      <?php }}else {?><tr><td  class="cms_text">No Item.</td></tr><?php }?> 

                  
                    </table>
                             
                             </div>
                             
                             
                             
                             
                             
                             
                             
                             
                             
                             
                             <div style="padding-left:60px">
                             
                             
                             
                             
                             <table  border="0"  class="cms_text" >
                     
    <?php  $q_listing = "select * from $system_listing_table where category='$mysql_id' order by updated desc";
        $rst_listing = mysql_query($q_listing) or die(mysql_error());
    if(mysql_num_rows($rst_listing) > 0){while($row_listing = mysql_fetch_array($rst_listing)){?>

                      <tr> 
                        <td valign="top">
                        
                        
                           <table width="0" border="0" cellspacing="0" cellpadding="0">
                             <tr>
                             
                               <td width="248" valign="top">
                               
                               <div class="cms_text" style="font-size:12px;font-weight:bold;padding-bottom:5px"> 
                               <a href="listingdetails.php?id=<?php echo $row_listing[0]?>"><?php echo $row_listing['caption']?></a>
                               &nbsp;<span class="cms_date">(<?php echo $row_listing['date']?>)</span>  
                               </div>
                          
                            
                               
                               </td>
                               
                               <td valign="top" align="right">
                              
                               
                                 <div class="readmore_bottoms" style="padding-bottom:0px;padding-top:0px"> 
                                 <?php if (($row_listing['showitem'])==1) {echo "<span class=on>On</span>";} else {echo "<span class=off>Off</span>";}?>&nbsp;
                                  
                                  <a href="editlisting.php?id=<?php echo $row_listing[0]?>">Edit</a>&nbsp;
                                  
                                  
                                  <?php if($row_listing['showitem'] == 0){?>
                                  	<a href="deletelisting.php?id=<?php echo $row_listing[0]?>">Delete</a>&nbsp;
                                  <?php }?>
                                  
                                   					
                                  <a href="javascript:NewWindow('addlistinggallaryimage.php?id=<?php echo $row_listing[0]?>','','700','700','center','front')">Add Gallary Images</a>&nbsp;
                                  <a href="javascript:NewWindow('addlistinggallaryvideo.php?id=<?php echo $row_listing[0]?>','','700','700','center','front')">Add Gallary Videos</a>&nbsp;
                                  <a href="javascript:NewWindow('addlistinggallaryaudio.php?id=<?php echo $row_listing[0]?>','','700','700','center','front')">Add Gallary Audios</a>&nbsp;
                               </div></td>
                             </tr>
                             <tr><td colspan="2"><div class="cms_text"><?php $text=$row_listing['intro']; echo substr($text, 0 , 500 );?></div> </td></tr>
                           </table>

                         
                          
                            
                         
                          
                        </td>
                      </tr>
                      
                      <?php }}else {?><tr><td  class="cms_text">No Item.</td></tr><?php }?> 

                  
                    </table>
                             
                             </div>
                             
                                    
                                    
                                    
                                    
                                </td>

                                <td valign="top">
                                    <div style="padding:5px">
                                        <?php if(!empty($row['add1'])){ ?>
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
                                        <?php if(!empty($row['add2'])){ ?>
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
                        
                                    <div style="padding:5px">
                                        <?php if(!empty($row['add3'])){ ?>
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
                                        <?php }?>
                                    </div>

                                    <?php if(!empty($row['add4'])){?>
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
                        
                                    <?php if(!empty($row['add5'])){ ?>
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
                                </td>
                            </tr>
                        </table>
        </div>  
																		
</div>
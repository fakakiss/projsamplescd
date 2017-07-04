<!-- Page Listings -->    

<div style="padding-left:60px; padding-bottom:0px;" >

	<div style="background-color:#C8C8C8">

        <!--<div style="color:#060"><strong><?php echo $listing_column_caption_on;?></strong></div> -->
    
        <table  border="0"  class="cms_text" >
    
            <?php  
                $thespecific_sub=$row_pages[0];
                $q_listing = "select * from $system_listing_table where category='$mysql_id' and subcategory='$thespecific_sub' and showitem=1 order by lp asc";
                $rst_listing = mysqli_query($conn,$q_listing) or die(mysqli_error($conn));
                if(mysqli_num_rows($rst_listing) > 0){while($row_listing = mysqli_fetch_array($rst_listing))
            {?>
    
            <tr> 
                <td valign="top">
    
    
                    <table width="700px" border="0" cellspacing="0" cellpadding="0" class="cms_text">
                        <tr>
         
                            <td width="400px" valign="top">
                            
                                <div class="cms_text" style="font-size:9px;padding-bottom:5px"> 
                                
                                    <a href="editlisting.php?mpid=<?php echo $row_listing['category']?>&spid=<?php echo $row_listing['subcategory']?>&lpid=<?php echo $row_listing[0]?>" style="color:#060">Edit</a>&nbsp;
                                    
                                    <?php echo $row_listing['lp']?>&nbsp;
                                
                                    <a href="listingdetails.php?id=<?php echo $row_listing[0]?>" style="color:#060">
                                        <?php echo $row_listing['caption']?>
                                    </a>
                                    <span style="font-family:Verdana, Geneva, sans-serif; font-size:9px; padding:3px">
										<?php echo $row_listing['id']?>
                                    </span>
                                 
                                </div>
                                
                            </td>
           
                            <td valign="top" align="right">
          
           
                                <div class="readmore_bottoms" style="padding-bottom:0px;padding-top:0px">

                                    <a href="javascript:NewWindow('addlistinggallaryimage.php?spid=<?php echo $row_pages['id']?>&lpid=<?php echo $row_listing[0]?>','','1200','600','center','front')">Ad Imgs/prdts</a>&nbsp;
                                    <a href="javascript:NewWindow('addlistinggallaryvideo.php?lpid=<?php echo $row_listing[0]?>','','700','700','center','front')" style="color:#060">Ad Vids</a>&nbsp;
                                    <a href="javascript:NewWindow('addlistinggallaryaudio.php?lpid=<?php echo $row_listing[0]?>','','700','700','center','front')" style="color:#060">Ad Auds</a>&nbsp;
                                    
                                    <?php if($row_listing['showitem'] == 0){?>
                                        <a href="delete.php?mpid=<?php echo $mysql_id;?>&spid=<?php echo $row_pages[0];?>&lpid=<?php echo $row_listing[0]?>">
                                        	Delete
                                        </a>
                                    <?php }?>
                                  
                                </div>
           
                            </td>
                        </tr>
                    
                    
                    
                    </table>
    
    
                </td>
            </tr>
    
            <?php }}else {?><!--<tr><td  class="cms_text">No Listings.</td></tr> --><?php }?> 
    
    
        </table>
        
        </div>
     
</div>





<!-- Page Listings [Offline] -->    

<div style="padding-left:60px; padding-bottom:0px">

	<div style="background-color:#C8C8C8">

	<!--<div style="color:#F00"><strong><?php echo $listing_column_caption_off;?></strong></div> -->

        <table border="0" class="cms_text" >
    
            <?php 
                $q_listing_off = "select * from $system_listing_table where category='$mysql_id' and subcategory='$thespecific_sub' and showitem=0 order by lp asc";
                $rst_listing_off = mysqli_query($conn,$q_listing_off) or die(mysqli_error($conn));
                if(mysqli_num_rows($rst_listing_off) > 0){while($row_listing_off = mysqli_fetch_array($rst_listing_off))
            {?>
    
            <tr> 
                <td valign="top">
    
    
                    <table width="700px" border="0" cellspacing="0" cellpadding="0" class="cms_text">
                        <tr>
         
                            <td width="400px" valign="top">
           
                                <div class="cms_text" style="font-size:9px;padding-bottom:5px">
                                
                                    
                                
                                    <a href="editlisting.php?mpid=<?php echo $row_listing_off['category']?>&spid=<?php echo $row_listing_off['subcategory']?>&lpid=<?php echo $row_listing_off[0]?>" style="color:#F00">Edit</a>&nbsp;
                                    
                                    <?php echo $row_listing_off['lp']?>&nbsp;
                                     
                                    <a href="listingdetails.php?lpid=<?php echo $row_listing_off[0]?>" style="color:#F00">
                                        <?php echo $row_listing_off['caption']?>
                                    </a>
                                    <span style="font-family:Verdana, Geneva, sans-serif; font-size:9px; padding:3px">
										<?php echo $row_listing_off['id']?>
                                    </span>
                                    <!--
                                        <span class="cms_date">(<?php echo $row_listing['date']?>)</span> 
                                     -->  
                                </div>
                                
                            </td>
           
                            <td valign="top" align="right">
          
           
                                <div class="readmore_bottoms" style="padding-bottom:0px;padding-top:0px">
                                 
                                    <?php // if (($row_listing_off['showitem'])==1) {echo "<span class=on>On</span>";} else {echo "<span class=off>Off</span>";}?>&nbsp;
                                    <a href="javascript:NewWindow('addlistinggallaryimage.php?lpid=<?php echo $row_listing_off[0]?>','','700','700','center','front')">Ad Imgs</a>&nbsp;
                                    <a href="javascript:NewWindow('addlistinggallaryvideo.php?lpid=<?php echo $row_listing_off[0]?>','','700','700','center','front')">Ad Vids</a>&nbsp;
                                    <a href="javascript:NewWindow('addlistinggallaryaudio.php?lpid=<?php echo $row_listing_off[0]?>','','700','700','center','front')">Ad Auds</a>&nbsp;
                                    
                                    <?php if($row_listing_off['showitem'] == 0){?>
                                        <a href="delete.php?mpid=<?php echo $mysql_id;?>&spid=<?php echo $row_pages[0];?>&lpid=<?php echo $row_listing_off[0]?>">Delete</a>&nbsp;
                                    <?php }?>
                                  
                                </div>
           
                            </td>
                        </tr>
                    
                        
                    
                    </table>
    
    
                </td>
            </tr>
    
            <?php }}else {?><!--<tr><td  class="cms_text">No Listings [Offline].</td></tr> --><?php }?> 
    
    
        </table>
    
    </div>
     
</div>
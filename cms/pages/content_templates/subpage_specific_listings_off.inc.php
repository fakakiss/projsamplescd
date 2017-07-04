<!-- Page Listings -->    

<div style="padding-left:60px; padding-bottom:0px;" >

	<div style="background-color:#C8C8C8">

        <!--<div style="color:#060"><strong><?php echo $listing_column_caption_on;?></strong></div> -->
    
        <table  border="0"  class="cms_text" >
    
            <?php  
                $thespecific_sub_offx=$row_pages_off[0];
                $q_listing_offx = "select * from $system_listing_table where category='$mysql_id' and subcategory='$thespecific_sub_offx' and showitem=1 order by lp asc";
                $rst_listing_offx = mysqli_query($conn,$q_listing_offx) or die(mysqli_error($conn));
                if(mysqli_num_rows($rst_listing_offx) > 0){while($row_listing_offx = mysqli_fetch_array($rst_listing_offx))
            {?>
    
            <tr> 
                <td valign="top">
    
    
                    <table width="700px" border="0" cellspacing="0" cellpadding="0" class="cms_text">
                        <tr>
         
                            <td width="500px" valign="top">
                            
                                <div class="cms_text" style="font-size:9px;padding-bottom:5px"> 
                                
                                    <a href="editlisting.php?mpid=<?php echo $row_listing_offx['category']?>&spid=<?php echo $row_listing_offx['subcategory']?>&lpid=<?php echo $row_listing_offx[0]?>" style="color:#060">Edit</a>&nbsp;
                                    
                                    <?php echo $row_listing_offx['lp']?>&nbsp;
                                
                                    <a href="listingdetails.php?id=<?php echo $row_listing_offx[0]?>" style="color:#060">
                                        <?php echo $row_listing_offx['caption']?>
                                    </a>&nbsp;
                                 
                                </div>
                                
                            </td>
           
                            <td valign="top" align="left">
          
           
                                <div class="readmore_bottoms" style="padding-bottom:0px;padding-top:0px">
          
                                    <a href="javascript:NewWindow('addlistinggallaryimage.php?lpid=<?php echo $row_listing_offx[0]?>','','700','700','center','front')" style="color:#060">Add Imgs</a>&nbsp;
                                    <a href="javascript:NewWindow('addlistinggallaryvideo.php?lpid=<?php echo $row_listing_offx[0]?>','','700','700','center','front')" style="color:#060">Add Vids</a>&nbsp;
                                    <a href="javascript:NewWindow('addlistinggallaryaudio.php?lpid=<?php echo $row_listing_offx[0]?>','','700','700','center','front')" style="color:#060">Add Auds</a>&nbsp;
                                    
                                    <?php if($row_listing_offx['showitem'] == 0){?>
                                         <a href="delete.php?mpid=<?php echo $mysql_id;?>&spid=<?php echo $row_pages[0];?>&lpid=<?php echo $row_listing_offx[0]?>">Delete</a>&nbsp;
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
                $q_listing_offx2 = "select * from $system_listing_table where category='$mysql_id' and subcategory='$thespecific_sub_offx' and showitem=0 order by lp asc";
                $rst_listing_offx2 = mysqli_query($conn,$q_listing_offx2) or die(mysqli_error($conn));
                if(mysqli_num_rows($rst_listing_offx2) > 0){while($row_listing_offx2 = mysqli_fetch_array($rst_listing_offx2))
            {?>
    
            <tr> 
                <td valign="top">
    
    
                    <table width="700px" border="0" cellspacing="0" cellpadding="0" class="cms_text">
                        <tr>
         
                            <td width="500px" valign="top">
           
                                <div class="cms_text" style="font-size:9px;padding-bottom:5px">

                                    <a href="editlisting.php?mpid=<?php echo $row_listing_offx2['category']?>&spid=<?php echo $row_listing_offx2['subcategory']?>&lpid=<?php echo $row_listing_offx2[0]?>" style="color:#F00">Edit</a>&nbsp;
                                    
                                    <?php echo $row_listing_offx2['lp']?>&nbsp;
                                     
                                    <a href="listingdetails.php?lpid=<?php echo $row_listing_offx2[0]?>" style="color:#F00">
                                        <?php echo $row_listing_offx2['caption']?>
                                    </a>&nbsp;
                                   
                                </div>
                                
                            </td>
           
                            <td valign="top" align="left">
          
           
                                <div class="readmore_bottoms" style="padding-bottom:0px;padding-top:0px">
                                 
                                    <?php // if (($row_listing_off['showitem'])==1) {echo "<span class=on>On</span>";} else {echo "<span class=off>Off</span>";}?>&nbsp;
                                    <a href="javascript:NewWindow('addlistinggallaryimage.php?id=<?php echo $row_listing_offx2[0]?>','','700','700','center','front')">Ad Imgs</a>&nbsp;
                                    <a href="javascript:NewWindow('addlistinggallaryvideo.php?id=<?php echo $row_listing_offx2[0]?>','','700','700','center','front')">Ad Vids</a>&nbsp;
                                    <a href="javascript:NewWindow('addlistinggallaryaudio.php?id=<?php echo $row_listing_offx2[0]?>','','700','700','center','front')">Ad Auds</a>&nbsp;
                                    
                                    <?php if($row_listing_off['showitem'] == 0){?>
                                        <a href="delete.php?mpid=<?php echo $mysql_id;?>&spid=<?php echo $row_pages_off[0];?>&lpid=<?php echo $row_listing_offx2[0]?>">Del</a>&nbsp;
                                    <?php }?>
                                  
                                </div>
           
                            </td>
                        </tr>
                    
                        
                    
                    </table>
    
    
                </td>
            </tr>
    
            <?php }}else {?><?php }?> 
    
    
        </table>
    
    </div>
     
</div>
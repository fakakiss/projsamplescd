<!-- Page Listings -->    

<div style="padding-left:60px; padding-bottom:20px">

	<div style="color:#060"><strong><?php echo $listing_column_caption_on;?></strong></div>

    <table  border="0"  class="cms_text" >

        <?php  
            $q_listing = "select * from $system_listing_table where category='$mysql_id' and subcategory=0 and showitem=1 order by updated desc";
            $rst_listing = mysqli_query($conn,$q_listing) or die(mysql_error());
            if(mysqli_num_rows($rst_listing) > 0){while($row_listing = mysqli_fetch_array($rst_listing))
        {?>

        <tr> 
            <td valign="top">


                <table width="600px" border="0" cellspacing="0" cellpadding="0" class="cms_text">
                    <tr>
     
                        <td width="200px" valign="top">
                        

                            <div class="cms_text" style="font-size:9px;padding-bottom:5px"> 
                            
                        		<a href="editlisting.php?mpid=<?php echo $row_listing['category']?>&spid=<?php echo $row_listing['subcategory']?>&lpid=<?php echo $row_listing[0]?>" style="color:#060">Edit</a>&nbsp;
                                
                                <?php echo $row_listing['lp']?>&nbsp;
                            
                                <a href="listingdetails.php?id=<?php echo $row_listing[0]?>" style="color:#060">
                                    <?php echo $row_listing['caption']?>
                                </a>&nbsp;
                                
                            </div>
                            
                        </td>
       
                        <td valign="top" align="left">
      
       
                            <div class="readmore_bottoms" style="padding-bottom:0px;padding-top:0px">

                                <a href="javascript:NewWindow('addlistinggallaryimage.php?spid=<?php echo $row_pages['id']?>&lpid=<?php echo $row_listing[0]?>','','700','1200','center','front')">Add Imgs</a>&nbsp;
                                <a href="javascript:NewWindow('addlistinggallaryvideo.php?lpid=<?php echo $row_listing[0]?>','','700','1200','center','front')">Add Vids</a>&nbsp;
                                <a href="javascript:NewWindow('addlistinggallaryaudio.php?lpid=<?php echo $row_listing[0]?>','','700','1200','center','front')">Add Auds</a>&nbsp;

                            </div>
       
                        </td>
                    </tr>
                
                    
                
                </table>


            </td>
        </tr>

        <?php }}else {?><tr><td  class="cms_text">No Listings.</td></tr><?php }?> 

    </table>
     
</div>





<!-- Page Listings [Offline] -->    

<div style="padding-left:60px; padding-bottom:40px">

	<div style="color:#F00"><strong><?php echo $listing_column_caption_off;?></strong></div>

    <table border="0" class="cms_text" >

        <?php  
            $q_listing_off = "select * from $system_listing_table where category='$mysql_id' and subcategory=0 and showitem=0 order by updated desc";
            $rst_listing_off = mysqli_query($conn,$q_listing_off) or die(mysqli_error());
            if(mysqli_num_rows($rst_listing_off) > 0){while($row_listing_off = mysqli_fetch_array($rst_listing_off))
        {?>

        <tr> 
            <td valign="top">


                <table width="600px" border="0" cellspacing="0" cellpadding="0" class="cms_text">
                    <tr>
     
                        <td width="200px" valign="top">
       
                            <div class="cms_text" style="font-size:9px;padding-bottom:5px">
                            
                            	
                            
                            	<a href="editlisting.php?mpid=<?php echo $row_listing_off['category']?>&spid=<?php echo $row_listing_off['subcategory']?>&lpid=<?php echo $row_listing_off[0]?>" style="color:#F00">Edit</a>&nbsp;
                                
                                <?php echo $row_listing_off['lp']?>&nbsp;
                                 
                                <a href="listingdetails.php?lpid=<?php echo $row_listing_off[0]?>" style="color:#F00">
                                    <?php echo $row_listing_off['caption']?>
                                </a>&nbsp;
                               
                            </div>
                            
                        </td>
       
                        <td valign="top" align="left">
      
       
                            <div class="readmore_bottoms" style="padding-bottom:0px;padding-top:0px">

                                <a href="javascript:NewWindow('addlistinggallaryimage.php?id=<?php echo $row_listing_off[0]?>','','700','700','center','front')">Add Imgs</a>&nbsp;
                                <a href="javascript:NewWindow('addlistinggallaryvideo.php?id=<?php echo $row_listing_off[0]?>','','700','700','center','front')">Add Vids</a>&nbsp;
                                <a href="javascript:NewWindow('addlistinggallaryaudio.php?id=<?php echo $row_listing_off[0]?>','','700','700','center','front')">Add Auds</a>&nbsp;
                                
                                <?php if($row_listing_off['showitem'] == 0){?>
                                    <a href="delete.php?mpid=<?php echo $mysql_id;?>&spid=u&lpid=<?php echo $row_listing_off[0]?>">Delete</a>&nbsp;
                                <?php }?>
                              
                            </div>
       
                        </td>
                    </tr>

                </table>


            </td>
        </tr>

        <?php }}else {?><tr><td  class="cms_text">No Listings [Offline].</td></tr><?php }?> 


    </table>
     
</div>
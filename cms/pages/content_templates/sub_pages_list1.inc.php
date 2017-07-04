<!--Sub Pages Live --> 
<div style="padding-left:30px; padding-bottom:20px;">

	<div style="background-color:#E0E0E0">

		<div style="color:#060"><strong><?php echo $sub_page_column_caption_on; ?></strong></div>

        <table  border="0"  class="cms_text">
                                     
            <?php  
                    $q_pages = "select * from $system_table where category='$mysql_id' and showitem=1 order by lp asc";
                    $rst_pages = mysqli_query($conn,$q_pages) or die(mysql_error());
                    if(mysqli_num_rows($rst_pages) > 0){while($row_pages = mysqli_fetch_array($rst_pages))
            {?>
    
                <tr> 
                    <td valign="top">
                
                
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
     
                                <td  valign="top" width="700px">
    
                                    <div class="cms_text" style="font-size:12px;font-weight:normal;padding-bottom:5px">
                                    
                                    	<span style="font-family:Verdana, Geneva, sans-serif; font-size:9px; padding:3px">
                                
                                            <a href="edit.php?mpid=<?php echo $mysql_id;?>&spid=<?php echo $row_pages[0];?>" style="color:#060">
                                                Edit
                                            </a>
                                        	&nbsp;  
                                        	<a href="addlisting.php?mpid=<?php echo $mysql_id?>&spid=<?php echo $row_pages[0];?>" style="color:#060">
                                            	Ad PL
                                            </a>&nbsp;
                                        </span>
                                        
                                        <?php if(($row_pages['showitem'])==0){?>
                                            <a href="delete.php?spid=<?php echo $row_pages[0]?>">Delete</a>
                                        <?php }?> 
      
                                                                                      
                                        <?php echo $row_pages['lp']?>&nbsp;
                                    
                                        <a href="details.php?mpid=<?php echo $mysql_id;?>&spid=<?php echo $row_pages[0]?>" style="color:#060">
                                            <?php echo $row_pages['caption']?>&nbsp;
                                        </a>  
                                        <span style="font-family:Verdana, Geneva, sans-serif; font-size:9px; padding:3px">
											<?php echo $row_pages['id']?>
                                        </span> 
       
                                        
                                    </div>
                                    
                                    <?php include('content_templates/subpage_specific_listings.inc.php')?>
                                
                                </td>
                                
       
                                <td valign="top" align="left">
                                 
                                    
                                
                                </td>
                                
                            </tr>
     
                           
     
                        </table>
    
                    </td>
                </tr>
    
                <?php }}else {?>
                    <tr><td  class="cms_text">No Sub Item.</td></tr>
                <?php }?> 
    
            </table>
        
	</div>
    
</div>





<!--Sub Pages [Offline] --> 
<div style="padding-left:30px; padding-bottom:20px">

	<div style="background-color:#E0E0E0">

        <div style="color:#F00"><strong><?php echo $sub_page_column_caption_off; ?></strong></div>
    
        <table  border="0"  class="cms_text">
                                     
            <?php  
                    $q_pages_off = "select * from $system_table where category='$mysql_id' and showitem=0 order by lp asc";
                    $rst_pages_off = mysqli_query($conn,$q_pages_off) or die(mysqli_error());
                    if(mysqli_num_rows($rst_pages_off) > 0){while($row_pages_off = mysqli_fetch_array($rst_pages_off))
            {?>
    
                <tr> 
                    <td valign="top">
                    
                    
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
         
                                <td  valign="top" width="700px">
       
                                    <div class="cms_text" style="font-size:12px;font-weight:normal;padding-bottom:5px">
                                    
                                    	<span style="font-family:Verdana, Geneva, sans-serif; font-size:9px; padding:3px">
                                    
                                            <a href="edit.php?mpid=<?php echo $mysql_id;?>&spid=<?php echo $row_pages_off[0];?>" style="color:#F00">
                                                Edit
                                            </a>
                                            &nbsp;
                                            
             
                                            <a href="addlisting.php?mpid=<?php echo $mysql_id;?>&spid=<?php echo $row_pages_off[0];?>" style="color:#F00">Add PL</a>&nbsp;
                                                
                                            <?php if(($row_pages_off['showitem'])==0){?>
                                                <a href="delete.php?mpid=<?php echo $mysql_id;?>&spid=<?php echo $row_pages_off[0]?>" style="color:#F00">Delete</a>
                                            <?php }?> 
          
                               			</span>
                                     
                                        <?php echo $row_pages_off['lp']?>&nbsp;
                                        
                                        <a href="details.php?mpid=<?php echo $mysql_id;?>&spid=<?php echo $row_pages_off[0];?>" style="color:#F00">
                                            <?php echo $row_pages_off['caption']?>&nbsp;
                                        </a>   
           								<span style="font-family:Verdana, Geneva, sans-serif; font-size:9px; padding:3px">
											<?php echo $row_pages_off['id']?>
                                        </span>
                                      
                                    </div>
                                    
                                    <?php include('content_templates/subpage_specific_listings_off.inc.php')?>
                                    
                                </td>
                                    
           
                               
                                    
                            </tr>
         
                          
         
                        </table>
    
                    </td>
                    
                </tr>
    
            <?php }}else {?>
                <tr><td  class="cms_text">No Sub Item[Off].</td></tr>
            <?php }?> 
    
        </table>
	</div>
</div>
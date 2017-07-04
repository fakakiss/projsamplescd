<div style="padding-left:10px;padding-bottom:20px">

	<?php if(!($gen_count == 0)){?>
    
        <div class="cms_text" style="font-size:14px;font-weight:bold;padding-bottom:5px">Uncategorized Sub Pages</div>
                                                                
        <div style="padding-bottom:20px;padding-left:30px">
            
        	<table  border="0" class="cms_text">
                                                 
             	<?php if(mysql_num_rows($rst1) > 0){while($row1 = mysql_fetch_array($rst1)){?>					
                                                
                        <tr> 
                            <td valign="top">
                                                                
                                <table  border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td valign="top">
                                            <div class="cms_text" style="font-size:14px;font-weight:bold;padding-bottom:5px"> 
                                                <?php echo $row1['caption']?>&nbsp; 
                                            </div>
                                        </td>
                                                                       
                                        <td  align="right" valign="top">
                                            <div class="readmore_bottoms" style="padding-bottom:0px;padding-top:0px"> 
                                              
                                                        
                                                <a href="edit.php?mpid=<?php echo $mysql_id?>&spid=<?php echo $row1[0]?>">Edit</a>&nbsp;
                                                <a href="delete.php?mpid=u&spid=<?php echo $row1[0]?>">Delete</a>                                              
                                             </div>
                                        </td>
                                     </tr>
                                    
                                </table>
                                
                            </td>
                        </tr>
                                                              
                <?php }}else {?><tr><td  class="cms_text">No Sub Item.</td></tr><?php }?>
                 
            </table>										
        </div>
        
    <?php }?> 
                
                  
                
    <?php if(!($gen_count_list == 0)){?>
                        
        <div class="cms_text" style="font-size:14px;font-weight:bold;padding-bottom:5px">Uncategorized Page Listings</div>
                                
        <div style="padding-bottom:20px;padding-left:60px">
        
            <table  border="0" class="cms_text">
                                                 
                <?php if(mysql_num_rows($rst1_list) > 0){while($row1_list = mysql_fetch_array($rst1_list)){?>
                                        
                    <tr> 
                        <td valign="top">
                        
                                        
                            <table  border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td  valign="top">
                                        
                                           <div class="cms_text" style="font-size:14px;font-weight:bold;padding-bottom:5px"> 
                                           		<?php echo $row1_list['caption']?>&nbsp;
                                           
                                           
                                           </div>
                                               
                                     </td>
                                               
                                    <td valign="top" align="right">
                                         
                                        <div class="readmore_bottoms" style="padding-bottom:0px;padding-top:0px">
                                         
                                                
                                             <a href="editlisting.php?mpid=0&spid=0&lpid=<?php echo $row1_list[0]?>">Edit</a>&nbsp;
                                             <a href="delete.php?mpid=u&spid=u&lpid=<?php echo $row1_list[0]?>">Delete</a>
                                              
                                        </div>
                                    </td>
                                </tr>
                                
                            </table>
                                                                                                                                                      
                        </td>
                    </tr>
                                      
                <?php }}else {?><tr><td  class="cms_text">No listing Item.</td></tr><?php }?>
                 
            </table>
                                                    
        </div>
        
    <?php }?> 	

</div>			
			
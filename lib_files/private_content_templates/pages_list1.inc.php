<div style=" padding-left:10px; padding-top:10px">
	
	<?php if(!($gen_count_main_on == 0)){?>
             					
		<div class="cms_text" style="font-size:14px;font-weight:bold;padding-bottom:5px">Reps <span class=on>(Active)</span></div>						
			<div style="padding-bottom:20px;padding-left:0px">
                    
				<table border="0" class="cms_text">
                                                         
	            	<?php if(mysql_num_rows($rst_main_on) > 0){while($row_main_on = mysql_fetch_array($rst_main_on)){?>					
  						<tr> 
                    		<td valign="top">
                                    									
								<table  border="0" cellspacing="0" cellpadding="0">
									<tr>
                                		<td valign="top" width="120px">
		   			  						<div class="cms_text" style="font-size:10px;font-weight:bold; padding-bottom:0px"> 
                                           		<a href="index.php?id=<?php echo $row_main_on[0]?>"><?php echo $row_main_on['caption']?></a>
                                           	</div>
								     	</td>										   
				 			    		<td width="100" align="right" valign="top">
											<div class="readmore_bottoms" style="padding-bottom:0px;padding-top:0px"> 
											 	<?php if (($row_main_on['showitem'])==1){echo "<span style=color:green>On</span>";} else {echo "<span class=off>Off</span>";}?>&nbsp;<a href="editcat.php?id=<?php echo $row_main_on[0]?>">Edit</a>                                             </div>
								    	</td>
									</tr>									
                            	</table>
				    		</td>
               			 </tr>							  
                		<?php }}else {?><tr><td></td></tr><?php }?> 
            		</table>										
				<?php }?> 
			</div>
	
	
			<div style="padding-top:10px">
				<?php if(!($gen_count_main_off == 0)){?> 					
					<div class="cms_text" style="font-size:14px;font-weight:bold;padding-bottom:5px">Reps <span class=off>(Inactive)</span></div>						
						<div style="padding-bottom:20px;padding-left:0px">
							<table  border="0" class="cms_text">                                 
	            				<?php if(mysql_num_rows($rst_main_off) > 0){while($row_main_off = mysql_fetch_array($rst_main_off)){?>					
                					<tr> 
                    					<td  valign="top">									
											<table  border="0" cellspacing="0" cellpadding="0">
       				  					  <tr>
                                					<td valign="top" >
				   			  					  <div class="cms_text" style="font-size:10px;font-weight:bold;padding-bottom:5px"> 
                                           					<a href="index.php?id=<?php echo $row_main_off[0]?>"><?php echo $row_main_off['caption']?></a>
                                           				</div>
								     				</td>										   
		    					  <td width="120px" align="right" valign="top">
			  <div class="readmore_bottoms" style="padding-bottom:0px;padding-top:0px"> 
											 				<?php if (($row_main_off['showitem'])==1){echo "<span class=on>On</span>";} else {echo "<span class=off>Off</span>";}?>&nbsp;
                                             					<a href="editcat.php?id=<?php echo $row_main_off[0]?>">Edit</a>&nbsp;			<a href="deletecat.php?id=<?php echo $row_main_off[0]?>">Delete</a>                                                
                       			    </div>
								    				</td>
									  		  </tr>									
                            				</table>			    			  </td>
               			  				</tr>							  
                						<?php }}else {?><tr><td height="2"></td>
                						</tr><?php }?> 
            						</table>										
								</div>
							<?php }?>

							<?php if(!($gen_count == 0)){?> 					
								<div class="cms_text" style="font-size:14px;font-weight:bold;padding-bottom:5px">General or Uncategorized Content</div>							
                                <div style="padding-bottom:20px;padding-left:30px">
                                    <table  border="0" class="cms_text">                                 
                                        <?php if(mysql_num_rows($rst1) > 0){while($row1 = mysql_fetch_array($rst1)){?>					
                                            <tr> 
                                                <td valign="top">
                                                            
                                              <table  border="0" cellspacing="0" cellpadding="0">
                                                        <tr>
                                                            <td  valign="top">
                                                     <div class="cms_text" style="font-size:14px;font-weight:bold;padding-bottom:5px"> 
                                                                   <?php echo $row1['caption']?>&nbsp;<span class="cms_date">(<?php echo $row1['date']?>)</span>  
                                                                   </div>
                                                             </td>
                                                                   
                                                 <td  align="right" valign="top">
<div class="readmore_bottoms" style="padding-bottom:0px;padding-top:0px"> 
                                                                     <?php if (($row1['showitem'])==1){echo "<span class=on>On</span>";} else {echo "<span class=off>Off</span>";}?>&nbsp;
                                                                     <a href="edit.php?id=<?php echo $row1[0]?>">Edit</a>&nbsp;<a href="delete.php?id=<?php echo $row1[0]?>">Delete</a>                                              
                                                                     </div>
                                                                </td>
                                                </tr>
                                                            <tr><td colspan="2">  <div class="cms_text"><? $text=$row1['intro']; echo substr($text, 0 , 150 ); ?></div> </td></tr>
                                                        </table>
                                                                                                                                                                          
                                                    </td>
                                      </tr>
                                                          
                                            <?php }}else {?><tr><td  class="cms_text">No Item.</td></tr><?php }?> 
                                        </table>										
                                    </div>
                                 <?php }?> 
			
			
			
			
		<?php if(!($gen_count_list == 0)){?> 					
		<div class="cms_text" style="font-size:14px;font-weight:bold;padding-bottom:5px">Unasigned Page Listings</div>
							
		<div style="padding-bottom:20px;padding-left:60px">
			<table  border="0" class="cms_text">                                 
	            <?php if(mysql_num_rows($rst1_list) > 0){while($row1_list = mysql_fetch_array($rst1_list)){?>					
                	<tr> 
                    	<td valign="top">
									
							<table width="0" border="0" cellspacing="0" cellpadding="0">
                            	<tr>
                                	<td valign="top">
										   <div class="cms_text" style="font-size:14px;font-weight:bold;padding-bottom:5px"> 
                                           <?php echo $row1_list['caption']?>&nbsp;<span class="cms_date">(<?php echo $row1_list['date']?>)</span>  
                                           </div>
								     </td>
										   
									 <td valign="top" align="right">
										     <div class="readmore_bottoms" style="padding-bottom:0px;padding-top:0px"> 
											 <?php if (($row1_list['showitem'])==1){echo "<span class=on>On</span>";} else {echo "<span class=off>Off</span>";}?>&nbsp;
                                             <a href="editlisting.php?id=<?php echo $row1_list[0]?>">Edit</a>&nbsp;<a href="deletelisting.php?id=<?php echo $row1_list[0]?>">Delete</a>                                              
                                             </div>
								    	</td>
									</tr>
									<tr><td colspan="2">  <div class="cms_text"><?php $text=$row1_list['intro']; echo substr($text, 0 , 150 ); ?></div> </td></tr>
                            	</table>
                                                                                                              									  
					    	</td>
                    	</tr>
								  
                	<?php }}else {?><tr><td  class="cms_text">No Item.</td></tr><?php }?> 
            	</table>										
			</div>
		<?php }?> 				
								
	</div>	
    
    
    		
</div>
<div style=" padding-left:10px; padding-top:10px">

	<!--Main Pages [Live] -->
	
	<?php if(!($gen_count_main_on == 0)){?>
					
		<div class="cms_text" style="font-size:14px;font-weight:bold;padding-bottom:5px; color:#060">
        	<?php echo $on_title;?> 
            <span class=on><?php echo $active;?></span>
        </div>
        						
		<div style="padding-bottom:20px;padding-left:0px">
                    
			<table border="0" class="cms_text">
                                                         
	        	<?php if(mysqli_num_rows($rst_main_on) > 0){while($row_main_on = mysqli_fetch_array($rst_main_on)){?>	
                				
  						<tr> 
                    		<td valign="top">
									
								<table  border="0" cellspacing="0" cellpadding="0">
									<tr>

                                    	<td width="20px"  valign="top">
                                        
											<div class="readmore_bottoms" style="padding-bottom:0px;padding-top:0px; padding-right:5px" >
												<!--
													<?php 
														if (($row_main_on['showitem'])==1){echo "<span style=color:green>On</span>";} 
														else {echo "<span class=off>Off</span>";}
													?> 
                                                -->
												<a href="editcat.php?mpid=<?php echo $row_main_on[0]?>" style="color:#060">Edit</a>
                 							</div>
                                            
								    	</td>
                                        
                                        
                                        <td>
                                        	<div style="font-family:Verdana, Geneva, sans-serif; font-size:9px; padding:3px">
												<?php echo $row_main_on['lp']?>
                                        	</div>
                                        </td>
                                        
                                		<td  width="200px" valign="top">
		   			  						<div class="cms_text" style="font-size:13px;font-weight:normal; padding-bottom:0px"> 
                                           		<a href="index.php?mpid=<?php echo $row_main_on[0]?>" style="color:#060">
													<?php echo $row_main_on['caption']?>
                                                </a>
                                                <span style="font-family:Verdana, Geneva, sans-serif; font-size:9px; padding:3px">
												<?php echo $row_main_on['id']?>
                                        		</span>
                                           	</div>
								     	</td>										   
				 			    		
									</tr>									
                            	</table>
                                
                                
				    		</td>
               			 </tr>							  
                	<?php }}else {?><tr><td></td></tr><?php }?> 
            	</table>
                
		</div>
                										
	<?php }?> 
		
	

    
    	<!--Main Pages [Offline] -->
		<div style="padding-top:10px">
            
		<?php if(!($gen_count_main_off == 0)){?> 
                					
			<div class="cms_text" style="font-size:14px;font-weight:bold;padding-bottom:5px; color:#F00">
                    
				<?php echo $off_title;?> 
                <span class=off> <?php echo $inactive;?></span>
                    
            </div>
                    						
			<div style="padding-bottom:20px;padding-left:0px">
                    
                <table  border="0" class="cms_text">
                                                 
                    <?php if(mysqli_num_rows($rst_main_off) > 0){while($row_main_off = mysqli_fetch_array($rst_main_off)){?>
                                        
                        <tr> 
                            <td  valign="top">
                                                                
                                <table  border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                   
                                        <td width="30px"  valign="top">
                                        
                                            <div class="readmore_bottoms" style="padding-bottom:0px;padding-top:0px">
      
                                                <!--
                                                    <?php 
                                                        if (($row_main_off['showitem'])==1){echo "<span class=on>On</span>";} 
                                                        else {echo "<span class=off>Off</span>";}
                                                    ?>&nbsp;
                                                 --> 
                                                <a href="editcat.php?mpid=<?php echo $row_main_off[0]?>">Edit</a>  			                                         
                                            </div>
                                            
                                        </td>
    
                                        <td width="30px"  valign="top">
			  								<div class="readmore_bottoms" style="padding-bottom:0px;padding-top:0px">                 
                                            	<a href="delete.php?mpid=<?php echo $row_main_off[0]?>">Delete</a>
                       			    		</div>
								    	</td>
                                                    
                                                    
                                        <td>
                                        	<div style="font-family:Verdana, Geneva, sans-serif; font-size:10px; padding:3px">
												<?php echo $row_main_off['lp']?>
                                        	</div>
                                        </td>
                                                    
                                        <td valign="top" >
                                        
				   			  				<div class="cms_text" style="font-size:13px;font-weight:normal;padding-left:5px"> 
                                           		<a href="index.php?mpid=<?php echo $row_main_off[0]?>" style="color:#F00">
													<?php echo $row_main_off['caption']?>
                                                </a>
                                                <span style="font-family:Verdana, Geneva, sans-serif; font-size:9px; padding:3px">
												<?php echo $row_main_off['id']?>
                                        		</span>
                                           	</div>
                                            
								     	</td>
                                                    
                                                    
									</tr>									
                            	</table>
                                
                                			    			  
                           	</td>
               			</tr>							  
                	<?php }}else {?>
                    	<tr><td height="2"></td></tr>				
					<?php }?> 
            	</table>										
			</div>
		<?php }?>
						
	</div>	
    
    
    		
</div>
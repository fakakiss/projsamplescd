<?php top_module($manager,$add,$view,$viewcat,$addcat,$_user_rights,$_sess_username);?>
					 
	<?php if(empty($err_msg)){?><div class="note" style="padding-top:5px;padding-bottom:5px;">NB. All Fields in bold font are required.</div><?php }?>
					  
	<?php if(!empty($err_msg)){print "<div class=error >"; echo $err_header . $err_msg . $err_footer . "<br>"; print "</div>";}?>

<form enctype="multipart/form-data" action="<?php echo $PHP_SELF."?mpid=".$mpid;?>" method="post">

	<table  border="0" cellspacing="0" cellpadding="0">
  		<tr>
    		<td valign="top" bgcolor="#00FF00">
            
            <div style="padding:10px">
					  
	

	

		<?php if($group1==1){?>
			<div style="padding-bottom:5px">
				<table border="0" cellspacing="0" cellpadding="0" class="cms_text">
		
		    		<tr><td width="125px"></td><td></td></tr>
		
					<?php if($show_itemdatedate==1){?><tr><td width="125px" <?php if($bold_itemdatedate==1){?>class="bold"<?php }?> ><?php echo "$itemdate";?></td><td><input type="text" name="date" value="<?php echo date('Y-m-d H:i:s')?>" maxlength="<?php echo "$maxlength_itemdate";?>" size="<?php echo "$size_itemdate";?>" class="form"><span class="error"><?php echo "$date_help";?></span></td></tr><?php }?>     
	
					<?php if($show_lan==1){?>
						<tr><td <?php if($bold_lan==1){?>class="bold"<?php }?>><?php echo "$lan";?></td> 							                                                
        					<td>											  
								<select name="language"  class="form" style="width:<?php echo "$lan_width";?>">
            						<option value="0">English
                						<?php
                    						$rstlan=mysql_query($qlan) or die(mysql_error());
											while($rowlan=mysql_fetch_array($rstlan))                                                                
	                    						{
													if($language==$rowlan[0]){echo "<option value=\"$rowlan[0]\" selected>$rowlan[caption]";}
													else					 {echo "<option value=\"$rowlan[0]\"         >$rowlan[caption]";}
												}                                                                       		                                                                     	                                                                    	                                                                        	                                                                                                                                                                                                                                                      
                    					?>
            	 				</select><span class="error"><?php echo "$lan_help";?></span>
							</td>                                          
     					</tr>
	 				<?php }?>
			
				</table>
			</div> 
		<?php }?>

		

	





		<?php if($group3==1){?>
			<div style="padding-bottom:5px">	                       
				<table border="0" cellspacing="0" cellpadding="0" class="cms_text">
				
      				<tr><td width="125px"></td><td></td></tr>
                    
                    <?php if($show_imagelink_caption5==1){?>
								                                                       
                   <?php }?>
                    
						 												
	  				<?php if($show_cap==1){?>
                    	<tr>
                        	<td <?php if($bold_cap==1){?>class="bold"<?php }?> ><?php echo "$cap";?></td>
                        	<td><input name="caption" type="text"  value="<?php echo stripslashes($caption)?>" maxlength="<?php echo "$maxlength_cap";?>" size="<?php echo "$size_cap";?>" class="form"><input type="hidden" value="OK" name="send"><input name="submit" type="submit" value="<?php echo "$submit_bottom_go";?>"><span class="error"><?php echo "$caption_help";?></span></td>
                        </tr>
					<?php }?>
	  				
					<?php if($show_cap_img==1){?><tr><td <?php if($bold_cap_img==1){?>class="bold"<?php }?> ><?php echo "$cap_img_name";?></td><td><input name="userfile_cap_img" type="file" size="<?php echo "$capimage_size";?>" class="form"><span class="error"><?php echo "$cap_img_help";?></span></td></tr><?php }?>																	
	  				
					<?php if($show_opt_show==1){?><tr><td <?php if($bold_opt_show==1){?>class="bold"<?php }?> ><?php echo "$opt_show";?></td><td><input name="showitem" type="checkbox" value="1" <?php if($showitem==1){echo "checked";}?> ><span class="error"><?php echo "$opt_show_help";?></span></td></tr><?php }?>						                                                 
	  				
					<?php if($show_cat==1){?>
						<tr><td <?php if($bold_cat==1){?>class="bold"<?php }?>><?php echo "$cat";?></td> 							                                              
          					<td>
		  						<?php 
									$q_pagedtls       	= "select * from pagecategories where id='$category'";
    								$rst_pagedtls     	= mysql_query($q_pagedtls) or die(mysql_error());
									if(mysql_num_rows($rst_pagedtls)>0){$row_pagedtls = mysql_fetch_array($rst_pagedtls) or die(mysql_error());} 	
									$pagename			=$row_pagesdtls['caption'];				
									echo $mpid." ";
									echo $pagename;
								?><span class="error"><?php echo "$cat_help";?></span>	 
		   					</td>                                          
      					</tr>
					<?php }?>
												
	  				<?php if($show_list_position==1){?>
                    	<tr>
                        	<td <?php if($bold_list_position==1){?>class="bold"<?php }?> ><?php echo "$list_position";?></td>
                            <td><input name="lp" type="text"  value="<?php echo stripslashes($lp)?>" maxlength="<?php echo "$maxlength_list_position";?>" size="<?php echo "$size_list_position";?>" class="form"><span class="error"><?php echo "$list_position_help";?></span></td>
                        </tr>
					<?php }?>											  											                                                 		
				
				</table>
			</div>			
		<?php }?> 






		




		<?php if($group5==1){?>
			<div style="padding-bottom:5px">
				<table border="0" cellspacing="0" cellpadding="0" class="cms_text">
      				
					<tr><td width="125px"></td><td></td></tr>
	  				
					<?php if($show_cap1 ==1){?> <tr><td <?php if($bold_cap1 ==1){?>class="bold"<?php }?> ><?php echo "$cap1"; ?></td><td><input name="caption1"  type="text" value="<?php echo stripslashes($caption1)?>"  maxlength="<?php echo "$maxlength_cap1";?>"  size="<?php echo "$size_cap1";?>"  class="form"><span class="error"><?php echo "$caption1_help"; ?></span></td></tr><?php }?>					                                                                     
      				
					<?php if($show_cap2 ==1){?> <tr><td <?php if($bold_cap2 ==1){?>class="bold"<?php }?> ><?php echo "$cap2"; ?></td><td><input name="caption2"  type="text" value="<?php echo stripslashes($caption2)?>"  maxlength="<?php echo "$maxlength_cap2";?>"  size="<?php echo "$size_cap2";?>"  class="form"><span class="error"><?php echo "$caption2_help"; ?></span></td></tr><?php }?>							
      				
					<?php if($show_cap3 ==1){?> <tr><td <?php if($bold_cap3 ==1){?>class="bold"<?php }?> ><?php echo "$cap3"; ?></td><td><input name="caption3"  type="text" value="<?php echo stripslashes($caption3)?>"  maxlength="<?php echo "$maxlength_cap3";?>"  size="<?php echo "$size_cap3";?>"  class="form"><span class="error"><?php echo "$caption3_help"; ?></span></td></tr><?php }?>															
      				
					<?php if($show_cap4 ==1){?> <tr><td <?php if($bold_cap4 ==1){?>class="bold"<?php }?> ><?php echo "$cap4"; ?></td><td><input name="caption4"  type="text" value="<?php echo stripslashes($caption4)?>"  maxlength="<?php echo "$maxlength_cap4";?>"  size="<?php echo "$size_cap4";?>"  class="form"><span class="error"><?php echo "$caption4_help"; ?></span></td></tr><?php }?>								  						
	  				
					<?php if($show_cap5 ==1){?> <tr><td <?php if($bold_cap5 ==1){?>class="bold"<?php }?> ><?php echo "$cap5"; ?></td><td><input name="caption5"  type="text" value="<?php echo stripslashes($caption5)?>"  maxlength="<?php echo "$maxlength_cap5";?>"  size="<?php echo "$size_cap5";?>"  class="form"><span class="error"><?php echo "$caption5_help"; ?></span></td></tr><?php }?>                                          	
	  				
					<?php if($show_cap6 ==1){?> <tr><td <?php if($bold_cap6 ==1){?>class="bold"<?php }?> ><?php echo "$cap6"; ?></td><td><input name="caption6"  type="text" value="<?php echo stripslashes($caption6)?>"  maxlength="<?php echo "$maxlength_cap6";?>"  size="<?php echo "$size_cap6";?>"  class="form"><span class="error"><?php echo "$caption6_help"; ?></span></td></tr><?php }?>
	  				
					<?php if($show_cap7 ==1){?> <tr><td <?php if($bold_cap7 ==1){?>class="bold"<?php }?> ><?php echo "$cap7"; ?></td><td><input name="caption7"  type="text" value="<?php echo stripslashes($caption7)?>"  maxlength="<?php echo "$maxlength_cap7";?>"  size="<?php echo "$size_cap7";?>"  class="form"><span class="error"><?php echo "$caption7_help"; ?></span></td></tr><?php }?>				  							
	  				
					<?php if($show_cap8 ==1){?> <tr><td <?php if($bold_cap8 ==1){?>class="bold"<?php }?> ><?php echo "$cap8"; ?></td><td><input name="caption8"  type="text" value="<?php echo stripslashes($caption8)?>"  maxlength="<?php echo "$maxlength_cap8";?>"  size="<?php echo "$size_cap8";?>"  class="form"><span class="error"><?php echo "$caption8_help"; ?></span></td></tr><?php }?>
	  				
					<?php if($show_cap9 ==1){?> <tr><td <?php if($bold_cap9 ==1){?>class="bold"<?php }?> ><?php echo "$cap9"; ?></td><td><input name="caption9"  type="text" value="<?php echo stripslashes($caption9)?>"  maxlength="<?php echo "$maxlength_cap9";?>"  size="<?php echo "$size_cap9";?>"  class="form"><span class="error"><?php echo "$caption9_help"; ?></span></td></tr><?php }?>
	  				
					<?php if($show_cap10==1){?> <tr><td <?php if($bold_cap10==1){?>class="bold"<?php }?> ><?php echo "$cap10";?></td><td><input name="caption10" type="text" value="<?php echo stripslashes($caption10)?>" maxlength="<?php echo "$maxlength_cap10";?>" size="<?php echo "$size_cap10";?>" class="form"><span class="error"><?php echo "$caption10_help";?></span></td></tr><?php }?>					
				
				</table>	
			</div>
		<?php }?> 






		 




		





		<?php if($paragraph1_group==1){?>                                                       											                                                                                                                                                                   													                                                                                                                                 												                                                                                                             															                                                      																								  
			<div style="padding-bottom:5px">
				<table border="0" cellspacing="0" cellpadding="0" class="cms_text">
				    
					<?php if($show_header1==1){?>
						<tr><td colspan="3" valign="top" <?php if($bold_header1==1){?>class="bold"<?php }?> ><?php echo "$header1";?> <span class="error"><?php echo "$header1_help";?></span></td></tr>	
    					<tr><td colspan="3" valign="top"><input name="head1" type="text"  value="<?php echo stripslashes($head1)?>" size="<?php echo "$size_header_caption1";?>" maxlength="<?php echo "$maxlength_header_caption1";?>" class="form"></td></tr>
    				<?php }?>
					
					<?php if($show_paragraph1==1){?>
						<tr><td colspan="3" valign="top" <?php if($bold_paragraph1==1){?>class="bold"<?php }?> ><?php echo "$paragraph1";?> <span class="error"><?php echo "$paragraph1_help";?></span></td></tr>	
    					<tr><td valign="top"><textarea cols="<?php echo "$paragraph1_cols";?>" rows="<?php echo "$paragraph1_rows";?>" name="text1"  class="form"><?php echo stripslashes($text1); ?></textarea></td>
				    <?php }?>
					 		
						<td valign="top">
						
						    <?php if($paragraph1_group_sub==1){?>
							<div style="padding-left:5px; padding-right:5px">  
            					<table cellspacing="0" cellpadding="0" class="cms_text">
									
									<?php if($show_choose_image1==1){?>
                    					<tr><td <?php if($bold_choose_image1==1){?>class="bold"<?php }?> ><?php echo "$choose_image1";?><span class="error"><?php echo "$choose_image1_help";?></span></td></tr>                                                                                                                 
                    					<tr><td colspan="2"><input name="userfile1" type="file" size="<?php echo "$userfile_size";?>" class="form"></td></tr>
									<?php }?>
									
									<?php if($show_image_position1==1){?>                                     
										<tr><td <?php if($bold_choose_image1==1){?>class="bold"<?php }?> ><?php echo "$image_position1";?><span class="error"><?php echo "$image_position1_help";?></span></td></tr>  
									    <tr><td colspan="2"><select name="pos1" size="1" class="form"><option value="left" selected>Left</option><option value="right">Right</option></select></td></tr>
                    				<?php }?>					
														              												                                                                                                                                                                                                                                                                            									
									<?php if($show_image_caption1==1){?>                                         
                    					<tr><td <?php if($bold_image_caption1==1){?>class="bold"<?php }?> ><?php echo "$image_caption1";?><span class="error"><?php echo "$image_caption1_help";?></span></td></tr>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
			        					<tr><td colspan="2"><input name="capt1" type="text"  value="<?php echo stripslashes($capt1)?>" maxlength="<?php echo "$maxlength_image_caption1";?>" size="<?php echo "$size_image_caption1";?>"  class="form"></td></tr>													                                     
                                    <?php }?>
									
				                    <?php if($show_imagelink_caption1==1){?>
										<tr><td <?php if($bold_imagelink_caption1==1){?>class="bold"<?php }?> ><?php echo "$imagelink_caption1";?> <span class="error"><?php echo "$imagelink_caption1_help";?></span></td></tr>
				    					<tr><td><input name="imagelink1" type="text" value="<?php echo stripslashes($imagelink1)?>" size="<?php echo "$size_imagelink_caption1";?>" maxlength="<?php echo "$maxlength_imagelink_caption1";?>" class="form"></td></tr> 						                                                       
                    				<?php }?>
				 
				 				</table>
             				</div>
							<?php }?>
																												
	    				</td>
						<td valign="top"><input type="hidden" value="OK" name="send"><input name="submit" type="submit" value="<?php echo "$submit_bottom_go";?>"></td>
					</tr>
				</table>
			</div>
		<?php }?> 




		<?php if($paragraph2_group==1){?>			
			<div style="padding-bottom:5px">
				<table border="0" cellspacing="0" cellpadding="0" class="cms_text">
				
					<?php if($show_header2==1){?>
						<tr><td colspan="3" valign="top" <?php if($bold_header2==1){?>class="bold"<?php }?> ><?php echo "$header2";?> <span class="error"><?php echo "$header2_help";?></span></td></tr>	
    					<tr><td colspan="3" valign="top"><input name="head2" type="text" value="<?php echo stripslashes($head2)?>" size="<?php echo "$size_header_caption2";?>" maxlength="<?php echo "$maxlength_header_caption2";?>" class="form"></td></tr>
    				<?php }?>
					
					<?php if($show_paragraph2==1){?>
						<tr><td colspan="3" valign="top" <?php if($bold_paragraph2==1){?>class="bold"<?php }?> ><?php echo "$paragraph2";?> <span class="error"><?php echo "$paragraph2_help";?></span></td></tr>	
    					<tr><td valign="top"><textarea cols="<?php echo "$paragraph2_cols";?>" rows="<?php echo "$paragraph2_rows";?>" name="text2" class="form"><?php echo stripslashes($text2)?></textarea></td>
					<?php }?>
						
						<td valign="top">
						    <?php if($paragraph2_group_sub==1){?>
								<div style="padding-left:5px; padding-right:5px"> 
        							<table cellspacing="0" cellpadding="0" class="cms_text">
								
				                    	<?php if($show_choose_image2==1){?>
                							<tr><td <?php if($bold_choose_image2==1){?>class="bold"<?php }?> ><?php echo "$choose_image2";?> <span class="error"><?php echo "$choose_image2_help";?></span></td></tr>                                                                                                            
                							<tr><td colspan="2"><input name="userfile2" type="file" size="<?php echo "$userfile_size";?>" class="form"></td></tr>                                    
                						<?php }?>
									 
										<?php if($show_image_position2==1){?>                                               
                							<tr><td <?php if($bold_image_position2==1){?>class="bold"<?php }?> ><?php echo "$image_position2";?> <span class="error"><?php echo "$image_position2_help";?></span></td></tr>                                                                                                              
                							<tr><td colspan="2"><select name="pos2" size="1" class="form"><option value="left">Left</option><option value="right" selected>Right</option></select></td></tr>                                                                                                                                                                      
                						<?php }?>
									
										<?php if($show_image_caption2==1){?>                                     
                							<tr><td <?php if($bold_image_caption2==1){?>class="bold"<?php }?> ><?php echo "$image_caption2";?> <span class="error"><?php echo "$image_caption2_help";?></span></td></tr>                                                                                                
                							<tr><td colspan="2"><input name="capt2" type="text"  value="<?php echo stripslashes($capt2)?>" maxlength="<?php echo "$maxlength_image_caption2";?>" size="<?php echo "$size_image_caption1";?>" class="form"></td></tr>                                     
                                    	<?php }?> 
			 
			   							<?php if($show_imagelink_caption2==1){?>
											<tr><td <?php if($bold_imagelink_caption2==1){?>class="bold"<?php }?> ><?php echo "$imagelink_caption2";?> <span class="error"><?php echo "$imagelink_caption2_help";?></span></td></tr>
				    						<tr><td><input name="imagelink2" type="text" value="<?php echo stripslashes($imagelink2)?>" size="<?php echo "$size_imagelink_caption2";?>" maxlength="<?php echo "$maxlength_imagelink_caption2";?>" class="form"></td></tr> 						                                                       
                    					<?php }?>
			 
			 						</table>
         						</div>
							<?php }?>									
						</td>
						<td valign="top"><input type="hidden" value="OK" name="send"><input name="submit" type="submit" value="<?php echo "$submit_bottom_go";?>"></td>
  					</tr>
				</table>
			</div>	
		<?php }?> 





		<?php if($paragraph3_group==1){?>
			<div  style="padding-bottom:5px">
				<table border="0" cellspacing="0" cellpadding="0" class="cms_text">
					
					<?php if($show_header3==1){?>
						<tr><td colspan="3" valign="top"><?php echo "$header3";?> <span class="error"><?php echo "$header3_help";?></span></td></tr>
                    	<tr><td colspan="3" valign="top"><input name="head3" type="text" value="<?php echo stripslashes($head3)?>" size="<?php echo "$size_header_caption3";?>" maxlength="<?php echo "$maxlength_header_caption3";?>" class="form"></td></tr>
                    <?php }?>
					
					<?php if($show_paragraph3==1){?>
						<tr><td colspan="3" valign="top"><?php echo "$paragraph3";?> <span class="error"><?php echo "$paragraph3_help";?></span></td></tr>
  						<tr><td valign="top"><textarea name="text3" cols="<?php echo "$paragraph3_cols";?>" rows="<?php echo "$paragraph3_rows";?>"  class="form"><?php echo stripslashes($text3)?></textarea></td>
	                <?php }?>
						<td valign="top">
	                        
							<?php if($paragraph3_group_sub==1){?>
								<div style="padding-left:5px; padding-right:5px">
							  
                            		<table cellspacing="0" cellpadding="0" class="cms_text">
								
										<?php if($show_choose_image3==1){?>					  
                                			<tr><td><?php echo "$choose_image3";?> <span class="error"><?php echo "$choose_image3_help";?></span></td></tr>                                                                                                                  
                                			<tr><td colspan="2"><input name="userfile3" type="file" size="<?php echo "$userfile_size";?>" class="form"></td></tr>
                                		<?php }?>
								
										<?php if($show_image_position3==1){?>                                                                              
                                			<tr><td><?php echo "$image_position3";?> <span class="error"><?php echo "$image_position3_help";?></span></td></tr>                                                                                                                
                                			<tr><td colspan="2"><select name="pos3" size="1"  class="form"><option value="left" selected>Left</option><option value="right" >Right</option></select></td></tr> 
                                		<?php }?>
								
										<?php if($show_image_caption3==1){?>                                                                                                                                                                                                                                                                                                                                  
                                			<tr><td><?php echo "$image_caption3";?> <span class="error"><?php echo "$image_caption3_help";?></span></td></tr>                                                                                                                                                                            
                                			<tr><td colspan="2"><input name="capt3" type="text"  value="<?php echo stripslashes($capt3)?>" maxlength="<?php echo "$maxlength_image_caption3";?>" size="<?php echo "$size_image_caption3";?>" class="form"></td></tr>
                                		<?php }?>
								                                                                              													  
										<?php if($show_imagelink_caption3==1){?>
						        			<tr><td><?php echo "$imagelink_caption3";?> <span class="error"><?php echo "$imagelink_caption3_help";?></span></td></tr>
				    	        			<tr><td><input name="imagelink3" type="text" value="<?php echo stripslashes($imagelink3)?>" size="<?php echo "$size_imagelink_caption3";?>" maxlength="<?php echo "$maxlength_imagelink_caption3";?>" class="form"></td></tr> 						                                                       
                                		<?php }?>
													  													  																									  
				       				</table>
								
                      			</div>
							<?php }?>
																									
						</td>
	
						<td valign="top"><input type="hidden" value="OK" name="send"><input name="submit" type="submit" value="<?php echo "$submit_bottom_go";?>"></td>

					</tr>
   
				</table>
			</div>	
		<?php }?>





		<?php if($paragraph4_group==1){?>
			<div  style="padding-bottom:5px">	
				<table border="0" cellspacing="0" cellpadding="0" class="cms_text">
                    
					<?php if($show_header4==1){?>
  						<tr><td colspan="3" valign="top" <?php if($bold_header4==1){?>class="bold"<?php }?> ><?php echo "$header4";?> <span class="error"><?php echo "$header4_help";?></span></td></tr>  
  						<tr><td colspan="3" valign="top"><input name="head4" type="text" value="<?php echo stripslashes($head4)?>" size="<?php echo "$size_header_caption4";?>" maxlength="<?php echo "$maxlength_header_caption4";?>"  class="form"></td></tr>
                    <?php }?>
					
					<?php if($show_paragraph4==1){?>
  						<tr><td colspan="3" valign="top" <?php if($bold_paragraph4==1){?>class="bold"<?php }?> ><?php echo "$paragraph4";?> <span class="error"><?php echo "$paragraph4_help";?></span></td></tr>  
  						<tr><td valign="top"><textarea name="text4" cols="<?php echo "$paragraph4_cols";?>" rows="<?php echo "$paragraph4_rows";?>"   class="form"><?php echo stripslashes($text4)?></textarea></td>
	                <?php }?>
					 
  						<td valign="top">	                        
							<?php if($paragraph4_group_sub==1){?>
								<div style="padding-left:5px; padding-right:5px"> 
          							<table cellspacing="0" cellpadding="0" class="cms_text">
				                    
										<?php if($show_paragraph4==1){?>
               								<tr><td <?php if($bold_choose_image4==1){?>class="bold"<?php }?> ><?php echo "$choose_image4";?> <span class="error"><?php echo "$choose_image4_help";?></span></td></tr>
              								<tr><td colspan="2"><input name="userfile4" type="file" size="<?php echo "$userfile_size";?>"  class="form"></td></tr>
                                    	<?php }?>
									 
										<?php if($show_image_position4==1){?>                    
               								<tr><td <?php if($bold_image_position4==1){?>class="bold"<?php }?> ><?php echo "$image_position4";?> <span class="error"><?php echo "$image_position4_help";?></span></td></tr>                                                                                                                 
              								<tr><td colspan="2"><select name="pos4" size="1"  class="form"><option value="left" >Left</option><option value="right" selected>Right</option></select></td></tr>
                                    	<?php }?>
									 
										<?php if($show_image_caption4==1){?>                                                                                                                                            
              								<tr><td <?php if($bold_image_caption4==1){?>class="bold"<?php }?> ><?php echo "$image_caption4";?> <span class="error"><?php echo "$image_caption4_help";?></span></td></tr>                                                                                                                                                                   
              								<tr><td colspan="2"><input name="capt4" type="text"  value="<?php echo stripslashes($capt4)?>" size="<?php echo "$size_image_caption4";?>" maxlength="<?php echo "$maxlength_image_caption4";?>" class="form"></td></tr>
                                    	<?php }?>                   
                                                      
			        					<?php if($show_imagelink_caption4==1){?>
											<tr><td <?php if($bold_imagelink_caption4==1){?>class="bold"<?php }?> ><?php echo "$imagelink_caption4";?> <span class="error"><?php echo "$imagelink_caption4_help";?></span></td></tr>
				    						<tr><td><input name="imagelink4" type="text" value="<?php echo stripslashes($imagelink4)?>" size="<?php echo "$size_imagelink_caption4";?>" maxlength="<?php echo "$maxlength_imagelink_caption4";?>" class="form"></td></tr> 						                                                       
                    					<?php }?>													  													  													  
					            	</table>
                      			</div>
					  		<?php }?>												
						</td>
						<td valign="top"><input type="hidden" value="OK" name="send"><input name="submit" type="submit" value="<?php echo "$submit_bottom_go";?>"></td>
  					</tr> 
				</table>	
			</div>
		<?php }?>




		<?php if($paragraph5_group==1){?>	
			<div  style="padding-bottom:5px">
				<table border="0" cellspacing="0" cellpadding="0" class="cms_text">
					<?php if($show_header5==1){?>
						<tr><td colspan="3" valign="top" <?php if($bold_header5==1){?>class="bold"<?php }?> ><?php echo "$header5";?> <span class="error"><?php echo "$header5_help";?></span></td></tr>	 
						<tr><td colspan="3" valign="top"><input name="head5" type="text"  value="<?php echo stripslashes($head5)?>" size="<?php echo "$size_header_caption5";?>" maxlength="<?php echo "$maxlength_header_caption5";?>" class="form"></td></tr>
    				<?php }?>
					<?php if($show_paragraph5==1){?>
						<tr><td colspan="3" valign="top" <?php if($bold_paragraph5==1){?>class="bold"<?php }?> ><?php echo "$paragraph5";?> <span class="error"><?php echo "$paragraph5_help";?></span></td></tr> 
    					<tr><td valign="top"><textarea name="text5" cols="<?php echo "$paragraph5_cols";?>" rows="<?php echo "$paragraph5_rows";?>" class="form"><?php echo stripslashes($text5)?></textarea></td>	
	            	<?php }?>			 
						<td valign="top">		    
							<?php if($paragraph5_group_sub==1){?>
	    						<div style="padding-left:5px; padding-right:5px"> 
                  					<table cellspacing="0" cellpadding="0" class="cms_text">												  					   
										<?php if($show_choose_image5==1){?>
											<tr><td <?php if($bold_choose_image5==1){?>class="bold"<?php }?> ><?php echo "$choose_image5";?> <span class="error"><?php echo "$choose_image5_help";?></span></td></tr>                                                                                                                                                                           
                        					<tr><td><input name="userfile5" type="file" size="<?php echo "$userfile_size";?>" class="form"></td></tr> 
						            	<?php }?>									
										<?php if($show_image_position5==1){?>
											<tr><td <?php if($bold_image_position5==1){?>class="bold"<?php }?>><?php echo "$image_position5";?> <span class="error"><?php echo "$image_position5_help";?></td></tr>                                                                                                                                                                                                                                                                                 
											<tr><td><select name="pos5" size="1"  class="form"><option value="left" selected>Left</option><option value="right" >Right</option></select></td></tr>                                                                                                                                                                                                                                                                                                                       
                                    	<?php }?>
                                        								
										<?php if($show_image_caption5==1){?>
											<tr><td <?php if($bold_image_caption5==1){?>class="bold"<?php }?> ><?php echo "$image_caption5";?> <span class="error"><?php echo "$image_caption5_help";?></span></td></tr>
											<tr><td><input name="capt5" type="text"  value="<?php echo stripslashes($capt5)?>" size="<?php echo "$size_image_caption5";?>" maxlength="<?php echo "$maxlength_image_caption5";?>" class="form"></td></tr> 
  
  <tr><td>
  <?php echo "$imagelink_caption5";?>
  </td></tr>                                          
                                            
<tr><td>                                            
<input name="img5link" type="text"  value="<?php echo stripslashes($img5link)?>" size="<?php echo "$size_imagelink_caption5";?>" maxlength="<?php echo "$maxlength_imagelink_caption5";?>" class="form"></td></tr>                                            
                                                                              		<?php }?>
                                        
                                        
										
                                        
                                        
				  					</table>
             					</div>			 
			 				<?php }?>																										
						</td>	
						<td valign="top"><input type="hidden" value="OK" name="send"><input name="submit" type="submit" value="<?php echo "$submit_bottom_go";?>"></td>												  
  					</tr> 
				</table>
			</div>	
		<?php }?>



		<div>		
			<table border="0" cellspacing="0" cellpadding="0"  class="cms_text">
				<tr><td valign="top"><input type="hidden" value="OK" name="send"><input name="submit" type="submit" value="<?php echo "$submit_bottom";?>"></td></tr>  
			</table>
		</div>                                                   
				                                               	  
				
</div>
            
            </td>
    		<td valign="top"  bgcolor="#99FF00">
            
            
            	<?php if($group2==1){?>
			<div style="padding-bottom:5px">
				<table border="0" cellspacing="0" cellpadding="0" class="cms_text">
		
     				<tr><td width="125px"></td><td></td></tr>
                    
                    <tr>
                    	<td colspan="2">
                        	
                            <?php if($intro_group==1){?>
			<div style="padding-bottom:5px">
				<table border="0" cellspacing="0" cellpadding="0" class="cms_text">
	
					<?php if($show_intro_header==1){?>
						<tr><td colspan="3" valign="top" <?php if($bold_intro_header==1){?>class="bold"<?php }?> ><?php echo "$intro_header";?> <span class="error"><?php echo "$intro_header_help";?></span></td></tr>
						<tr><td colspan="3" valign="top"><input name="intro_head" type="text"  value="<?php echo stripslashes($intro_head)?>" size="<?php echo "$size_header_intro_head";?>" maxlength="<?php echo "$maxlength_header_intro_head";?>" class="form"></td></tr>	
    				<?php }?>
	
					<?php if($show_introduction==1){?>
						<tr><td colspan="3" valign="top" <?php if($bold_introduction==1){?>class="bold"<?php }?> ><?php echo "$introduction";?> <span class="error"><?php echo "$introduction_help";?></span></td></tr>
						<tr><td valign="top"><textarea cols="<?php echo "$introduction_cols";?>" rows="<?php echo "$introduction_rows";?>" name="intro"  class="form"><?php echo stripslashes($intro)?></textarea></td>
					<?php }?>
		
							<td valign="top">
			
								<?php if($intro_group_sub==1){?>								  
									<div style="padding-left:5px; padding-right:5px"> 
										<table cellspacing="0" cellpadding="0" class="cms_text">
																					  
                							<?php if($show_choose_image==1){?>
												<tr><td <?php if($bold_choose_image==1){?>class="bold"<?php }?> ><?php echo "$choose_image";?> <span class="error"><?php echo "$choose_image_help";?></span></td></tr>												  
                								<tr><td><input type="hidden" name="MAX_FILE_SIZE" value="100000"><input name="userfile" type="file" size="<?php echo "$userfile_size";?>"  class="form"></td></tr>                	                                        
											<?php }?>
					
											<?php if($show_image_position==1){?>
												<tr><td <?php if($bold_image_position==1){?>class="bold"<?php }?> ><?php echo "$image_position";?> <span class="error"><?php echo "$image_position_help";?></span></td></tr> 
												<tr><td><select name="pos" size="1" class="form"><option value="left">Left</option><option value="right" selected>Right</option></select></td></tr>                                                                               														                                                                                                                                                                
											<?php }?>
					
											<?php if($show_image_caption==1){?>
												<tr><td <?php if($bold_image_caption==1){?>class="bold"<?php }?> ><?php echo "$image_caption";?> <span class="error"><?php echo "$image_caption_help";?></span></td></tr>                                                                                                                                                                       													                                                        <tr> 
                								<tr><td colspan="2"><input name="capt" type="text" value="<?php echo stripslashes($capt)?>" maxlength="<?php echo "$maxlength_image_caption";?>" size="<?php echo "$size_image_caption";?>" class="form"></td></tr>
            	    						<?php }?>
					
											<?php if($show_imagelink_caption==1){?>
												<tr><td <?php if($bold_imagelink_caption==1){?>class="bold"<?php }?> ><?php echo "$imagelink_caption";?> <span class="error"><?php echo "$imagelink_caption_help";?></span></td></tr>
				    							<tr><td><input name="imagelink" type="text" value="<?php echo stripslashes($imagelink)?>" size="<?php echo "$size_imagelink_caption";?>" maxlength="<?php echo "$maxlength_imagelink_caption";?>" class="form"></td></tr> 						                                                       
                    						<?php }?>
					
										</table>                                                                                        
       	    						</div>
								<?php }?>
																		
       						</td>
       						<td valign="top"></td>
						</tr> 
					</table>                                                             
				</div>                                                            
		<?php }?> 
                            
                            
                        </td>
                    </tr>
				 	                    
	 				<?php if($show_illus1==1){?><tr><td <?php if($bold_illus1==1){?>class="bold"<?php }?> ><?php echo "$illus1_name";?></td><td><input name="userfile_illus1" type="file" size="<?php echo "$illus_size";?>" class="form"><span class="error"><?php echo "$illus1_help";?></span></td></tr><?php }?>
					<?php if($show_illus2==1){?><tr><td <?php if($bold_illus2==1){?>class="bold"<?php }?> ><?php echo "$illus2_name";?></td><td><input name="userfile_illus2" type="file" size="<?php echo "$illus_size";?>" class="form"><span class="error"><?php echo "$illus2_help";?></span></td></tr><?php }?>	 		
					<?php if($show_illus3==1){?><tr><td <?php if($bold_illus3==1){?>class="bold"<?php }?> ><?php echo "$illus3_name";?></td><td><input name="userfile_illus3" type="file" size="<?php echo "$illus_size";?>" class="form"><span class="error"><?php echo "$illus3_help";?></span></td></tr><?php }?>	 		
					<?php if($show_illus4==1){?><tr><td <?php if($bold_illus4==1){?>class="bold"<?php }?> ><?php echo "$illus4_name";?></td><td><input name="userfile_illus4" type="file" size="<?php echo "$illus_size";?>" class="form"><span class="error"><?php echo "$illus4_help";?></span></td></tr><?php }?>			
					<?php if($show_illus5==1){?><tr><td <?php if($bold_illus5==1){?>class="bold"<?php }?> ><?php echo "$illus5_name";?></td><td><input name="userfile_illus5" type="file" size="<?php echo "$illus_size";?>" class="form"><span class="error"><?php echo "$illus5_help";?></span></td></tr><?php }?> 
			
				</table>
			</div>	
		<?php }?>  
        
        <?php if($group4==1){?>
			<div style="padding-bottom:5px">				
				<table border="0" cellspacing="0" cellpadding="0" class="cms_text">

      				<tr><td width="125px"></td><td></td></tr>
									
	  				<?php if($show_add1==1){?><tr><td <?php if($bold_add1==1){?>class="bold"<?php }?> ><?php echo "$add1_name";?></td><td><input name="userfile_add1" type="file" size="<?php echo "$add_size";?>" class="form"><span class="error"><?php echo "$add1_help";?></span></td></tr><?php }?>  
	  				<?php if($show_addlink1==1){?><tr><td <?php if($bold_addlink1==1){?>class="bold"<?php }?> ><?php echo "$addlink1_name"; ?></td><td><input name="addlink1"  type="text" value="<?php echo stripslashes($addlink1)?>" maxlength="<?php echo "$maxlength_addlink1";?>" size="<?php echo "$size_addlink1";?>" class="form"><span class="error"><?php echo "$addlink1_help"; ?></span></td></tr><?php }?> 					                                                                     
     
	  				<?php if($show_add2==1){?><tr><td <?php if($bold_add2==1){?>class="bold"<?php }?> ><?php echo "$add2_name";?></td><td><input name="userfile_add2" type="file" size="<?php echo "$add_size";?>" class="form"><span class="error"><?php echo "$add2_help";?></span></td></tr><?php }?>  
	  				<?php if($show_addlink2==1){?><tr><td <?php if($bold_addlink2==1){?>class="bold"<?php }?> ><?php echo "$addlink2_name"; ?></td><td><input name="addlink2"  type="text" value="<?php echo stripslashes($addlink2)?>" maxlength="<?php echo "$maxlength_addlink2";?>" size="<?php echo "$size_addlink2";?>" class="form"><span class="error"><?php echo "$addlink2_help"; ?></span></td></tr><?php }?> 					                                                                     
     
	  				<?php if($show_add3==1){?><tr><td <?php if($bold_add3==1){?>class="bold"<?php }?> ><?php echo "$add3_name";?></td><td><input name="userfile_add3" type="file" size="<?php echo "$add_size";?>" class="form"><span class="error"><?php echo "$add3_help";?></span></td></tr><?php }?>  
	  				<?php if($show_addlink3==1){?><tr><td <?php if($bold_addlink3==1){?>class="bold"<?php }?> ><?php echo "$addlink3_name"; ?></td><td><input name="addlink3"  type="text" value="<?php echo stripslashes($addlink3)?>" maxlength="<?php echo "$maxlength_addlink3";?>" size="<?php echo "$size_addlink3";?>" class="form"><span class="error"><?php echo "$addlink3_help"; ?></span></td></tr><?php }?> 					                                                                     
     
	  				<?php if($show_add4==1){?><tr><td <?php if($bold_add4==1){?>class="bold"<?php }?> ><?php echo "$add4_name";?></td><td><input name="userfile_add4" type="file" size="<?php echo "$add_size";?>" class="form"><span class="error"><?php echo "$add4_help";?></span></td></tr><?php }?>  
	  				<?php if($show_addlink4==1){?><tr><td <?php if($bold_addlink4==1){?>class="bold"<?php }?> ><?php echo "$addlink4_name"; ?></td><td><input name="addlink4"  type="text" value="<?php echo stripslashes($addlink4)?>" maxlength="<?php echo "$maxlength_addlink4";?>" size="<?php echo "$size_addlink4";?>" class="form"><span class="error"><?php echo "$addlink4_help"; ?></span></td></tr><?php }?> 					                                                                     
     
	  				<?php if($show_add5==1){?><tr><td <?php if($bold_add5==1){?>class="bold"<?php }?> ><?php echo "$add5_name";?></td><td><input name="userfile_add5" type="file" size="<?php echo "$add_size";?>" class="form"><span class="error"><?php echo "$add5_help";?></span></td></tr><?php }?>  
      				<?php if($show_addlink5==1){?><tr><td <?php if($bold_addlink5==1){?>class="bold"<?php }?> ><?php echo "$addlink5_name"; ?></td><td><input name="addlink5"  type="text" value="<?php echo stripslashes($addlink5)?>" maxlength="<?php echo "$maxlength_addlink5";?>" size="<?php echo "$size_addlink5";?>" class="form"><span class="error"><?php echo "$addlink5_help"; ?></span></td></tr><?php }?> 					                                                                         
				
				</table>	
			</div>
		<?php }?> 




<?php if($group6==1){?>
			<div style="padding-bottom:5px">
				<table border="0" cellspacing="0" cellpadding="0" class="cms_text">
      				
					<tr><td width="125px"></td><td></td></tr> 
	  				
					<?php if($show_doc ==1){?><tr><td <?php if($bold_doc==1){?>class="bold"<?php }?> ><?php echo "$doc_name";?></td><td><input name="userfile_doc" type="file" size="<?php echo "$doc_size ";?>" class="form"><span class="error"><?php echo "$doc_help";?></span></td></tr><?php }?> 						
	  				
					<?php if($show_aud ==1){?><tr><td <?php if($bold_aud==1){?>class="bold"<?php }?> ><?php echo "$aud_name";?></td><td><input name="userfile_aud" type="file" size="<?php echo "$aud_size ";?>" class="form"><span class="error"><?php echo "$aud_help";?></span></td></tr><?php }?> 			
	  				
					<?php if($show_vid ==1){?><tr><td <?php if($bold_vid==1){?>class="bold"<?php }?> ><?php echo "$vid_name";?></td><td><input name="userfile_vid" type="file" size="<?php echo "$vid_size ";?>" class="form"><span class="error"><?php echo "$vid_help";?></span></td></tr><?php }?> 	
	  				
					<?php if($show_zip ==1){?><tr><td <?php if($bold_zip==1){?>class="bold"<?php }?> ><?php echo "$zip_name";?></td><td><input name="userfile_zip" type="file" size="<?php echo "$zip_size ";?>" class="form"><span class="error"><?php echo "$zip_help";?></span></td></tr><?php }?> 																																																	
				
				</table>
			</div>
		<?php }?>
            
            </td>
  		</tr>
	</table>
</form>




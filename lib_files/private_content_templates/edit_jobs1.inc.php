<div style="padding-left:10px; padding-top:10px">	
	
	<?php top_module($manager,$add,$view,$viewcat,$addcat,$_sess_username,$_user_rights);?>
					  
	<?php if(!empty($err_msg)){?><div class="error"><?php echo $err_msg?></div><?php }?> 
					
	<?php if(empty($err_msg)){?><div style="padding-bottom:10px;padding-top:0px; color:#FF0000" class="cms_text">NB. All Fields in bold font are required.</div><?php }?>
									
	<form enctype="multipart/form-data" action="<?php echo $the_page."?id=".$mysql_id?>" method="post">


<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" bgcolor="#00FF00">
    
    	<div style="padding:10px"> 
		  

									
									
		<?php if($group1==1){?>
			<div style="padding-bottom:5px">							
				<table border="0" cellspacing="0" cellpadding="0" class="cms_text">
				
                    <?php if($show_itemdatedate==1){?>                         
						<tr> 
            				<td valign="top" width="125px" <?php if($bold_itemdatedate==1){?>class="bold"<?php }?>><?php echo "$itemdate";?></td>
            				<td valign="top"><input type="text" name="date" value="<?php echo stripslashes($row['date'])?>" maxlength="<?php echo "$maxlength_itemdate";?>" size="<?php echo "$size_itemdate";?>" class="form"></td>
							<td><div class="error"><?php echo "$date_help";?></div></td>			            
      					</tr>
					<?php }?>
					
					 	
					<?php if($show_lan==1){?>				  
						<tr> 							
        					<td <?php if($bold_lan==1){?>class="bold"<?php }?>><?php echo "$lan";?></td>
            				<td>
								<select name="language" class="form" style="width:<?php echo "$lan_width";?>">
									<option value="0">English                                                              
										<?php
											$rstlan        = mysql_query($qlan) or die(mysql_error());
											while($rowlan  = mysql_fetch_array($rstlan))
							     				{
	                             					if($row['language']==$rowlan[0]){echo "<option value=\"$rowlan[0]\" selected>$rowlan[caption]";}
	                        						else                            {echo "<option value=\"$rowlan[0]\">$rowlan[caption]";}	
                                 				}
                       					?>
           					  	</select>
		   					</td>
           					<td><div class="error"><?php echo "$lan_help";?></div></td>                                                  
        				</tr>	
					<?php }?>
					
				</table>
			</div> 
		<?php }?>
		
		
		
	
 
	
	
	
	
												
												
		<?php if($group3==1){?>
			<div style="padding-bottom:5px">												
				<table border="0" cellspacing="0" cellpadding="0" class="cms_text">
				
				<tr><td width="125px"></td><td></td><td></td></tr>
		
					<?php if($show_cap==1){?>
                    	<tr> 
                        	<td valign="top" <?php if($bold_cap==1){?>class="bold"<?php }?>><?php echo "$cap";?></td>                           
							<td valign="top"><input name="caption" type="text"  value="<?php echo stripslashes($row['caption'])?>" maxlength="<?php echo "$maxlength_cap";?>" size="<?php echo "$size_cap";?>" class="form"></td>  
							<td valign="top"><div class="error"><?php echo "$caption_help";?></div></td>												                     
                        </tr>
					<?php }?>
												
												
												
												
								<?php if($show_cap_img==1){?>				
		<tr>
		   <td <?php if($bold_cap_img==1){?>class="bold"<?php }?>><?php echo "$cap_img_name";?></td>
		   <td>
		   <div><a href="edit.php?sel_cap_img=0&&id=<?php echo $row[0]?>">New</a> | <a href="edit.php?sel_cap_img=1&&id=<?php echo $row[0]?>">Select</a></div>
		   <?php if($show_cap_img_select==0){?><input name="userfile_cap_img" type="file" size="<?php echo "$capimage_size";?>" class="form"><?php }?>
		   <?php if($show_cap_img_select==1){?>
									<select name="userfile_cap_img" onChange="MM_jumpMenu('parent',this,0)" class="form" style="width:<?php echo "$lan_width";?>">
      									<option value="">No Object...
      										<?php
												$rstimg   = mysql_query($qimg) or die(mysql_error());
												while($rowimg = mysql_fetch_array($rstimg))
													{
														if($row['caption_img']==$rowimg[0]){echo "<option value=\"$rowimg[0]\" select>$rowimg[1] -- $rowimg[0]";}
														else                               {echo "<option value=\"edit.php?id=$row[0]&&cap_imgupdate=$rowimg[0]\">$rowimg[1] -- $rowimg[0]";}
													}
											?>
        							</select>
								<?php }?>
		   
		   
		   </td>
		   <td>  
		   <?php if(!empty($row['caption_img'])){ ?>
	<?php
 		if (!$max_width_caption_img ) $max_width_caption_img   = 100; 
 		if (!$max_height_caption_img )$max_height_caption_img  =  40;
    
 		$the_real_image_caption_img  = "../../uploads/images/".$row['caption_img'];
 		$size_caption_img    = GetImageSize($the_real_image_caption_img );
 		$width_caption_img   = $size_caption_img [0];
 		$height_caption_img  = $size_caption_img [1];

 		$x_ratio_caption_img  = $max_width_caption_img  / $width_caption_img ;
 		$y_ratio_caption_img  = $max_height_caption_img  / $height_caption_img ;

 		if (($width_caption_img   <= $max_width_caption_img ) && ($height_caption_img  <= $max_height_caption_img )) { $tn_width_caption_img   = $width_caption_img ; $tn_height_caption_img  = $height_caption_img ; }  
 		else if (($x_ratio_caption_img  * $height_caption_img ) < ($max_height_caption_img )) {$tn_height_caption_img  = ceil($x_ratio_caption_img  * $height_caption_img );$tn_width_caption_img   = $max_width_caption_img ;} 
 		else {$tn_width_caption_img   = ceil($y_ratio_caption_img  * $width_caption_img );$tn_height_caption_img  = $max_height_caption_img ; }  
	?>	
	<img src="../../uploads/images/<?php echo $row['caption_img']?>" width="<?php echo "$tn_width_caption_img";?>" height="<?php echo "$tn_height_caption_img";?>" class="cms_image_border"> <a href="<?php echo $the_page;?>?id=<?php echo $row[0]?>&&del=caption_img "><img src="../cms_images/del.jpg" border="0"></a>
<?php }?>
		   <span class="error"><?php echo "$cap_img_help";?></span></td>
	  </tr>
	  
	  <?php }?>
												
	<?php if($show_opt_show==1){?>
		<tr> 
        	<td valign="top" <?php if($bold_opt_show==1){?>class="bold"<?php }?>><?php echo "$opt_show";?></td>
            <td valign="top">
            	
                
                
                <input type="radio" name="showitem" value="0" class="form" <?php if(($row['showitem'])==0){echo "checked";}?> onClick="Disab(this.value)">Pending
                             &nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="showitem" value="1" class="form" <?php if(($row['showitem'])==1){echo "checked";}?> onClick="Disab(this.value)">Completed 
                             &nbsp;&nbsp;&nbsp;&nbsp;
                                
                <input type="radio" name="showitem" value="2" class="form" <?php if(($row['showitem'])==2){echo "checked";}?> onClick="Disab(this.value)">Completed & Collected 
                             &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="showitem" value="3" class="form" <?php if(($row['showitem'])==3){echo "checked";}?> onClick="Disab(this.value)">Cancelled/Refunded 
                             &nbsp;&nbsp;&nbsp;&nbsp;

                
                
                
                
            </td>												 
		    <td><span class="error"><?php echo "$opt_show_help";?></span></td>
        </tr>
	<?php }?>
												
	<?php if($show_cat==1){?>
		<tr> 
        	<td valign="top" <?php if($bold_cat==1){?>class="bold"<?php }?>><?php echo "$cat";?></td>
            <td valign="top">
												  
												  
												  <select name="category" class="form" style="width:<?php echo "$cat_width";?> ">
                                                              <option value="0">Genaral
                                                              <?php
$rstcat = mysql_query($qcat) or die(mysql_error());
while($rowcat = mysql_fetch_array($rstcat))
{
	if($row['category']==$rowcat[0])
	{
		echo "<OPTION VALUE=\"$rowcat[0]\" SELECTED>$rowcat[caption]";
	}
	else
	{
		echo "<OPTION VALUE=\"$rowcat[0]\">$rowcat[caption]";
	}
}
?>
              </select>
		  </td><td><span class="error"><?php echo "$cat_help";?></span></td>
                                                  
                                                 
                  </tr>
												 <?php }?>
												 
												 <?php if($show_list_position==1){?>
												
												<tr> 
                                                  <td valign="top" <?php if($bold_list_position==1){?>class="bold"<?php }?> ><?php echo "$list_position";?></td>
                                                  <td valign="top">
												  <input name="lp" type="text"  value="<?php echo stripslashes($row['lp'])?>" maxlength="<?php echo "$maxlength_list_position";?>" size="<?php echo "$size_list_position";?>" class="form">
												  </td><td><div class="error"><?php echo "$list_position_help";?></div></td>
												  
                                                  
                                                </tr>
												 <?php }?>
												
			</table>
			
			
			</div>			
		<?php }?> 									
												
												
						
						
						
			
		
		
		
	<?php if($group5==1){?>
			<div style="padding-bottom:5px">					
<table border="0" cellspacing="0" cellpadding="0" class="cms_text">	

<tr><td width="125px"></td><td></td><td></td></tr>			

<?php if($show_cap1 ==1){?>									
	<tr> 
    	<td valign="top" <?php if($bold_cap1 ==1){?>class="bold"<?php }?>><?php echo "$cap1";?></td>                                                 
		<td valign="top"><input name="caption1" type="text"  value="<?php echo stripslashes($row['caption1'])?>" maxlength="<?php echo "$maxlength_cap1";?>" size="<?php echo "$size_cap1";?>" class="form"></td>								  
		<td><div class="error"><?php echo "$caption1_help";?></div></td>                                            
    </tr>
<?php }?> 	
												
<?php if($show_cap2 ==1){?>												
    <tr> 
    	<td valign="top" <?php if($bold_cap2 ==1){?>class="bold"<?php }?>><?php echo "$cap2";?></td>        											 												  
		<td valign="top"><input name="caption2" type="text"  value="<?php echo stripslashes($row['caption2'])?>" maxlength="<?php echo "$maxlength_cap2";?>" size="<?php echo "$size_cap2";?>" class="form"></td>
		<td><div class="error"><?php echo "$caption2_help";?></div></td>																											                                             
    </tr>
<?php }?> 								
								
<?php if($show_cap3 ==1){?>																							
    <tr> 
    	<td valign="top" <?php if($bold_cap3 ==1){?>class="bold"<?php }?>><?php echo "$cap3";?></td>                                                                                                
		<td valign="top"><input name="caption3" type="text"  value="<?php echo stripslashes($row['caption3'])?>" maxlength="<?php echo "$maxlength_cap3";?>" size="<?php echo "$size_cap3";?>" class="form"></td>			  
	    <td><div class="error"><?php echo "$caption3_help";?></div></td>										                                              
    </tr>
<?php }?> 


<?php if($show_cap4 ==1){?>																							
    <tr> 
    	<td valign="top" <?php if($bold_cap4 ==1){?>class="bold"<?php }?>><?php echo "$cap4";?></td>                                                
		<td valign="top"><input name="caption4" type="text"  value="<?php echo stripslashes($row['caption4'])?>" maxlength="<?php echo "$maxlength_cap4";?>" size="<?php echo "$size_cap4";?>" class="form"></td>			  
		<td><div class="error"><?php echo "$caption4_help";?></div></td>										                                               
    </tr>
<?php }?> 				
					
					
<?php if($show_cap5 ==1){?>												
	<tr> 
    	<td valign="top" <?php if($bold_cap5 ==1){?>class="bold"<?php }?>><?php echo "$cap5";?></td>                                         
		<td valign="top"><input name="caption5" type="text"  value="<?php echo stripslashes($row['caption5'])?>" maxlength="<?php echo "$maxlength_cap5";?>" size="<?php echo "$size_cap5";?>" class="form"></td>											  
		<td><div class="error"><?php echo "$caption5_help";?></div></td>												                                                 
    </tr>
<?php }?> 					
					
<?php if($show_cap6 ==1){?>												
	<tr> 
    	<td valign="top" <?php if($bold_cap6 ==1){?>class="bold"<?php }?>><?php echo "$cap6";?></td>
    	<td valign="top"><input name="caption6" type="text"  value="<?php echo stripslashes($row['caption6'])?>" maxlength="<?php echo "$maxlength_cap6";?>" size="<?php echo "$size_cap6";?>" class="form"></td>											 
		<td><div class="error"><?php echo "$caption6_help";?></div></td>									                                                   
    </tr>
<?php }?> 								
								
<?php if($show_cap7 ==1){?>												
	<tr> 
    	<td valign="top" <?php if($bold_cap7 ==1){?>class="bold"<?php }?>><?php echo "$cap7";?></td>
    	<td valign="top"><input name="caption7" type="text"  value="<?php echo stripslashes($row['caption7'])?>" maxlength="<?php echo "$maxlength_cap7";?>" size="<?php echo "$size_cap7";?>" class="form"></td>									  
		<td><div class="error"><?php echo "$caption7_help";?></div></td>										                                                  
    </tr>
<?php }?> 											
											
											
<?php if($show_cap8 ==1){?>												
	<tr> 
    	<td valign="top" <?php if($bold_cap8 ==1){?>class="bold"<?php }?>><?php echo "$cap8";?></td>                                             
		<td valign="top"><input name="caption8" type="text"  value="<?php echo stripslashes($row['caption8'])?>" maxlength="<?php echo "$maxlength_cap8";?>" size="<?php echo "$size_cap8";?>" class="form"></td>				 
		<td><div class="error"><?php echo "$caption8_help";?></div></td>											                                                 
    </tr>
<?php }?> 						
						
<?php if($show_cap9 ==1){?>												
	<tr> 
    	<td valign="top" <?php if($bold_cap9 ==1){?>class="bold"<?php }?>><?php echo "$cap9";?></td>
        <td valign="top"><input name="caption9" type="text"  value="<?php echo stripslashes($row['caption9'])?>" maxlength="<?php echo "$maxlength_cap9";?>" size="<?php echo "$size_cap9";?>" class="form"></td>
		<td><div class="error"><?php echo "$caption9_help";?></div></td>
	</tr>								  
<?php }?> 


<?php if($show_cap10 ==1){?>                                                                                            										
	<tr> 
    	<td valign="top" <?php if($bold_cap10 ==1){?>class="bold"<?php }?>><?php echo "$cap10";?></td>
    	<td valign="top"><input name="caption10" type="text"  value="<?php echo stripslashes($row['caption10'])?>" maxlength="<?php echo "$maxlength_cap10";?>" size="<?php echo "$size_cap10";?>" class="form"></td>
		<td><div class="error"><?php echo "$caption10_help";?></div></td>
	</tr>
<?php }?> 	
				
	
</table>				  
</div>
		<?php }?>                                                   
                                               
												
					






        <?php if($intro_group==1){?>
			<div style="padding-bottom:5px">

		<table border="0" cellspacing="0" cellpadding="0" class="cms_text">
		
			<tr><td colspan="3" valign="top" <?php if($bold_intro_header==1){?>class="bold"<?php }?> ><?php echo "$intro_header";?> <span class="error"><?php echo "$intro_header_help";?></span></td></tr>					
  			<tr><td colspan="3">
            
            <select name="intro_head"  class="form" >
       							<option value="">Select Tech
               						<?php
                   						$rst_tech=mysql_query($q_tech) or die(mysql_error());
		   								while($row_tech=mysql_fetch_array($rst_tech))                                             
	           								{
	           									if($row['intro_head']== $row_tech['username']){echo "<option value=\"$row_tech[username]\" selected>$row_tech[username]";}
		   										else {echo "<option value=\"$row_tech[username]\"         >$row_tech[username]";}
											} 
               						?>
						  </select>
            
            
          </td></tr>
  			<tr><td colspan="3"><?php echo "$introduction";?></td></tr>
  			<tr>  
				<td valign="top"><textarea  name="intro" class="form" cols="<?php echo "$introduction_cols";?>" rows="<?php echo "$introduction_rows";?>"><?php echo stripslashes($row['intro'])?></textarea></td>
    			<td valign="top">
                <?php if($intro_group_sub==1){?>	
					<div style="padding-left:5px; padding-right:5px"> 
                    	<table cellspacing="0" cellpadding="0" class="cms_text">
							<tr> 
                    			<td width="100">
														  
									<?php if(!empty($row['img'])){ ?>
 										<?php
 											if (!$max_width) $max_width  = 100; 
 											if (!$max_height)$max_height =  100;
    
 											$the_real_image = "../../uploads/images/".$row['img'];
											$size   = GetImageSize($the_real_image);
 											$width  = $size[0];
 											$height = $size[1];

 											$x_ratio = $max_width / $width;
 											$y_ratio = $max_height / $height;

 											if (($width  <= $max_width) && ($height <= $max_height)) { $tn_width  = $width; $tn_height = $height; }  
 											elseif (($x_ratio * $height) < ($max_height)) {$tn_height = ceil($x_ratio * $height);$tn_width  = $max_width;} 
 											else {$tn_width  = ceil($y_ratio * $width);$tn_height = $max_height; }  
										?>	
										<img src="../../uploads/images/<?php echo $row['img']?>" width="<?php echo "$tn_width";?>" height="<?php echo "$tn_height";?>" class="cms_image_border"> <a href="<?php echo $the_page;?>?id=<?php echo $row[0]?>&&del=img"><img src="../cms_images/del.jpg" border="0"></a>
	
									<?php }?>
														  													  
								</td>
                          </tr>
                              <tr><td width="100"><?php echo "$choose_image";?></td></tr>
                                                          
                              <tr> 
                                                          <td colspan="2">
														  <input type="hidden" name="MAX_FILE_SIZE" value="1000000000">
						                                 <input name="userfile" type="file" size="<?php echo "$userfile_size";?>"  class="form"></td>
                          </tr>
                                                        <tr> 
                                                          <td><div style="padding-bottom:5px"></div></td>
                                                        </tr>
                                                        <tr><td><?php echo "$image_position";?></td></tr> 
                                                          
                                                        
                                                        <tr> 
                                                          <td colspan="2"><select name="pos" size="1" class="form">
                                                              <?php
					$pos="left";
					if ($row['pos']==$pos){echo "<option value=\"left\" selected>Left</option><option value=\"right\" >Right</option>";}
					
					
					else {echo "<option value=\"left\">Left</option><option value=\"right\"  selected>Right</option>"; }
					
					?>
                                                            </select></td>
                                                        </tr>
                                                        <tr> 
                                                          <td><div style="padding-bottom:5px"></div></td>
                                                        </tr>
                                                        <tr> 
                                                          <td><?php echo "$image_caption";?> 
                                                          </td>
                                                        </tr>
                                                        <tr> 
                                                          <td colspan="2"><input name="capt" type="text"  value="<?php echo stripslashes($row['capt'])?>" maxlength="<?php echo "$maxlength_image_caption";?>" size="<?php echo "$size_image_caption";?>"  class="form"></td>
                                                        </tr>
														<tr><td <?php if($bold_imagelink_caption==1){?>class="bold"<?php }?> ><?php echo "$imagelink_caption";?> <span class="error"><?php echo "$imagelink_caption_help";?></span></td></tr>
				    							
														 <tr><td colspan="2"><input name="imglink" type="text" value="<?php echo stripslashes($row['imglink'])?>" size="<?php echo "$size_imagelink_caption";?>" maxlength="<?php echo "$maxlength_imagelink_caption";?>" class="form"></td></tr>
	
														
                      </table>
          </div>
          		<?php }?> 
	</td>
    <td valign="top"></td>
  </tr>
</table>

</div>                                                            
		<?php }?> 










<div  style="padding-bottom:10 "></div>



<table border="0" cellspacing="0" cellpadding="0" class="cms_text">

  <tr><td colspan="3"><?php echo "$header1";?></td></tr>
  <tr><td colspan="3"><input name="head1" type="text"  value="<?php echo stripslashes($row['head1'])?>" size="<?php echo "$size_header_caption1";?>" maxlength="<?php echo "$maxlength_header_caption1";?>" class="form"></td></tr>
	
  
  
  <tr><td colspan="3"><?php echo "$paragraph1";?></td></tr>
    
  
  
  
  <tr>
    <td valign="top">
	<textarea  name="text1" class="form" cols="<?php echo "$paragraph1_cols";?>" rows="<?php echo "$paragraph1_rows";?>"><?php echo stripslashes($row['text1'])?>
                  </textarea>
	    </td>
    <td valign="top">
	
	<div style="padding-left:5px; padding-right:5px"> 
                                                      <table cellspacing="0" cellpadding="0" class="cms_text">
													  
													  <tr> 
                                                          <td width="100">
														  
														      <?php if(!empty($row['img1'])){ ?>
   
	  <?php
 if (!$max_width)
    $max_width  = 100;
 if (!$max_height)
    $max_height =  100;
	
 $the_real_image = "../../uploads/images/".$row['img1'];
 $size   = GetImageSize($the_real_image);
 $width  = $size[0];
 $height = $size[1];

 $x_ratio = $max_width / $width;
 $y_ratio = $max_height / $height;

 if (($width  <= $max_width) && ($height <= $max_height)) {
    $tn_width  = $width;
    $tn_height = $height;
    }
 else if (($x_ratio * $height) < ($max_height)) {
    $tn_height = ceil($x_ratio * $height);
    $tn_width  = $max_width;
    }
 else {
    $tn_width  = ceil($y_ratio * $width);
    $tn_height = $max_height;  
    }
	?>	
 <img src="../../uploads/images/<?php echo $row['img1']?>" width="<?php echo "$tn_width";?>" height="<?php echo "$tn_height";?>" class="cms_image_border"> <a href="<?php echo $the_page;?>?id=<?php echo $row[0]?>&&del=img1"><img src="../cms_images/del.jpg" border="0"></a>
	
	<?php }?>
														  
														  
														  </td>
                                                        </tr>
													  
                                                        <tr> 
                                                          <td width="100"><?php echo "$choose_image1";?></td>
                                                        </tr>
                                                        <tr> 
                                                          <td colspan="2"> <input name="userfile1" type="file" size="<?php echo "$userfile_size";?>"  class="form"></td>
                                                        </tr>
                                                        <tr> 
                                                          <td><div style="padding-bottom:5px"></div></td>
                                                        </tr>
                                                        <tr> 
                                                          <td><?php echo "$image_position1";?></td>
                                                        </tr>
                                                        <tr> 
                                                          <td colspan="2"><select name="pos1" size="1" class="form">
                                                              <?php
					$pos="left";
					if ($row['pos1']==$pos){
					echo "<option value=\"left\" selected>Left</option>
					<option value=\"right\" >Right</option>";}
					else {echo "<option value=\"left\">Left</option>
					<option value=\"right\"  selected>Right</option>"; }
					?>
                                                            </select></td>
                                                        </tr>
                                                        <tr> 
                                                          <td><div style="padding-bottom:5px"></div></td>
                                                        </tr>
                                                        <tr> 
                                                          <td><?php echo "$image_caption1";?> </td>
                                                        </tr>
                                                        <tr> 
                                                          <td colspan="2"><input name="capt1" type="text"  value="<?php echo stripslashes($row['capt1'])?>" maxlength="<?php echo "$maxlength_image_caption1";?>" size="<?php echo "$size_image_caption1";?>" class="form"></td>
                                                        </tr>
														
														<tr><td <?php if($bold_imagelink_caption==1){?>class="bold"<?php }?> ><?php echo "$imagelink_caption";?> <span class="error"><?php echo "$imagelink_caption_help";?></span></td></tr>
				    							
														 <tr><td colspan="2"><input name="img1link" type="text"  value="<?php echo stripslashes($row['img1link'])?>" size="<?php echo "$size_imagelink_caption";?>" maxlength="<?php echo "$maxlength_imagelink_caption";?>" class="form"></td></tr>
	
														
														
                                                      </table>
          </div>
	
	</td>
	
	
    <td valign="top"></td>
  </tr>
  
</table>






<div  style="padding-bottom:10 "></div>



<table border="0" cellspacing="0" cellpadding="0" class="cms_text">
  <tr>
     <td colspan="3"><?php echo "$header2";?></td>
    
  </tr>
  <tr>
     <td colspan="3"><input name="head2" type="text" value="<?php echo stripslashes($row['head2'])?>" size="<?php echo "$size_header_caption2";?>" maxlength="<?php echo "$maxlength_header_caption2";?>" class="form"></td>
    
  </tr>
  <tr>
    <td colspan="3"><?php echo "$paragraph2";?></td>
   
  </tr>
  <tr>
    <td valign="top">
	<textarea cols="<?php echo "$paragraph2_cols";?>" rows="<?php echo "$paragraph2_rows";?>" name="text2" class="form"><?php echo stripslashes($row['text2'])?>
                  </textarea></td>
    <td valign="top"><div style="padding-left:5px; padding-right:5px"> 
                                                      <table cellspacing="0" cellpadding="0" class="cms_text">
													  
													  <tr> 
                                                          <td width="100">
														  
														      <?php if(!empty($row['img2'])&& file_exists("../../uploads/images/".$row['img2']) ){ ?>
   
	  <?php
 if (!$max_width)
    $max_width  = 100;
 if (!$max_height)
    $max_height =  100;
	
 $the_real_image = "../../uploads/images/".$row['img2'];
 $size   = GetImageSize($the_real_image);
 $width  = $size[0];
 $height = $size[1];

 $x_ratio = $max_width / $width;
 $y_ratio = $max_height / $height;

 if (($width  <= $max_width) && ($height <= $max_height)) {
    $tn_width  = $width;
    $tn_height = $height;
    }
 else if (($x_ratio * $height) < ($max_height)) {
    $tn_height = ceil($x_ratio * $height);
    $tn_width  = $max_width;
    }
 else {
    $tn_width  = ceil($y_ratio * $width);
    $tn_height = $max_height;  
    }
	?>	
 <img src="../../uploads/images/<?php echo $row['img2']?>" width="<?php echo "$tn_width";?>" height="<?php echo "$tn_height";?>" class="cms_image_border"> <a href="<?php echo $the_page;?>?id=<?php echo $row[0]?>&&del=img2"><img src="../cms_images/del.jpg" border="0"></a>
	
	<?php } else echo "<img src=../cms_images/image_error.jpg>"; ?>
														  
														  
														  </td>
                                                        </tr>
													  
                                                        <tr> 
                                                          <td><?php echo "$choose_image2";?></td>
                                                        </tr>
                                                        <tr> 
                                                          <td colspan="2" valign="top">
														   <input name="userfile2" type="file" size="<?php echo "$userfile_size";?>"  class="form"></td>
                                                        </tr>
                                                        <tr> 
                                                          <td><div style="padding-bottom:5px"></div></td>
                                                        </tr>
                                                        <tr> 
                                                          <td><?php echo "$image_position2";?></td>
                                                        </tr>
                                                        <tr> 
                                                          <td colspan="2"><select name="pos2" size="1" class="form">
                                                              <?php
					$pos="left";
					if ($row[pos2]==$pos){
					echo "<option value=\"left\" selected>Left</option>
					<option value=\"right\" >Right</option>";}
					else {echo "<option value=\"left\">Left</option>
					<option value=\"right\"  selected>Right</option>"; }
					?>
                                                            </select></td>
                                                        </tr>
                                                        <tr> 
                                                          <td><div style="padding-bottom:5px"></div></td>
                                                        </tr>
                                                        <tr> 
                                                          <td><?php echo "$image_caption2";?> </td>
                                                        </tr>
                                                        <tr> 
                                                          <td colspan="2"><input name="capt2" type="text"  value="<?php echo stripslashes($row['capt2'])?>" maxlength="<?php echo "$maxlength_image_caption2";?>" size="<?php echo "$size_image_caption2";?>" class="form"></td>
                                                        </tr>
														
														<tr><td <?php if($bold_imagelink_caption2==1){?>class="bold"<?php }?> ><?php echo "$imagelink_caption2";?> <span class="error"><?php echo "$imagelink_caption_help2";?></span></td></tr>
				    							
														<tr><td><input name="img2link" type="text" value="<?php echo stripslashes($row['img2link'])?>" size="<?php echo "$size_imagelink_caption2";?>" maxlength="<?php echo "$maxlength_imagelink_caption2";?>" class="form"></td></tr>
	
														
                                                      </table>
              </div></td>
    <td valign="top"></td>
  </tr>
</table>







<div  style="padding-bottom:10 "></div>


<table border="0" cellspacing="0" cellpadding="0" class="cms_text">
  <tr>
    <td colspan="3"><?php echo "$header3";?></td>
    
  </tr>
  <tr>
    <td colspan="3">
	<input name="head3" type="text"  value="<?php echo stripslashes($row['head3'])?>" size="<?php echo "$size_header_caption3";?>" maxlength="<?php echo "$maxlength_header_caption3";?>" class="form">
	</td>
  </tr>
  <tr>
    <td colspan="3"><?php echo "paragraph3";?></td>
  </tr>
  <tr>
    <td valign="top">
	
	<textarea cols="<?php echo "$paragraph3_cols";?>" rows="<?php echo "$paragraph3_rows";?>" name="text3" class="form"><?php echo stripslashes($row['text3'])?>
                  </textarea>
	
	</td>
    <td valign="top">
	
	<div style="padding-left:5px; padding-right:5"> 
                                                      <table cellspacing="0" cellpadding="0" class="cms_text">
													  
													  <tr> 
                                                          <td width="100">
														  
														      <?php if(!empty($row['img3'])){ ?>
   
	  <?php
 if (!$max_width)
    $max_width  = 100;
 if (!$max_height)
    $max_height =  100;
	
 $the_real_image = "../../uploads/images/".$row['img3'];
 $size   = GetImageSize($the_real_image);
 $width  = $size[0];
 $height = $size[1];

 $x_ratio = $max_width / $width;
 $y_ratio = $max_height / $height;

 if (($width  <= $max_width) && ($height <= $max_height)) {
    $tn_width  = $width;
    $tn_height = $height;
    }
 else if (($x_ratio * $height) < ($max_height)) {
    $tn_height = ceil($x_ratio * $height);
    $tn_width  = $max_width;
    }
 else {
    $tn_width  = ceil($y_ratio * $width);
    $tn_height = $max_height;  
    }
	?>	
 <img src="../../uploads/images/<?php echo $row['img3']?>" width="<?php echo "$tn_width";?>" height="<?php echo "$tn_height";?>" class="cms_image_border"> <a href="<?php echo $the_page;?>?id=<?php echo $row[0]?>&&del=img3"><img src="../cms_images/del.jpg" border="0"></a>
	
	<?php }?>
														  
														  
														  </td>
                                                        </tr>
													  
                                                        <tr> 
                                                          <td><?php echo "$choose_image1";?></td>
                                                        </tr>
                                                        <tr> 
                                                          <td colspan="2"> <input name="userfile3" type="file" size="<?php echo "$userfile_size";?>"  class="form"></td>
                                                        </tr>
                                                        <tr> 
                                                          <td><div style="padding-bottom:5px"></div></td>
                                                        </tr>
                                                        <tr> 
                                                          <td><?php echo "$image_position3";?></td>
                                                        </tr>
                                                        <tr> 
                                                          <td colspan="2"><select name="pos3" size="1" class="form">
                                                              <?php
					$pos="left";
					if ($row['pos3']==$pos){
					echo "<option value=\"left\" selected>Left</option>
					<option value=\"right\" >Right</option>";}
					else {echo "<option value=\"left\">Left</option>
					<option value=\"right\"  selected>Right</option>"; }
					?>
                                                            </select></td>
                                                        </tr>
                                                        <tr> 
                                                          <td><div style="padding-bottom:5px"></div></td>
                                                        </tr>
                                                        <tr> 
                                                          <td><?php echo "$image_caption3";?> </td>
                                                        </tr>
                                                        <tr> 
                                                          <td colspan="2"><input name="capt3" type="text"  value="<?php echo stripslashes($row['capt3'])?>" maxlength="<?php echo "$maxlength_image_caption3";?>" size="<?php echo "$size_image_caption3";?>" class="form"></td>
                                                        </tr>
														
														<tr><td <?php if($bold_imagelink_caption3==1){?>class="bold"<?php }?> ><?php echo "$imagelink_caption3";?> <span class="error"><?php echo "$imagelink_caption_help2";?></span></td></tr>
				    							
														<tr><td><input name="img3link" type="text" value="<?php echo stripslashes($row['img3link'])?>" size="<?php echo "$size_imagelink_caption3";?>" maxlength="<?php echo "$maxlength_imagelink_caption3";?>" class="form"></td></tr>
	
														
                                                      </table>
          </div>
	
	</td>
    <td valign="top">&nbsp;</td>
  </tr>
</table>





<div  style="padding-bottom:10 "></div>
									
			
	<table border="0" cellspacing="0" cellpadding="0" class="cms_text">
  <tr>
    <td colspan="3"><?php echo "header4";?></td>
    </tr>
  <tr>
    <td colspan="3"><input name="head4" type="text"  value="<?php echo stripslashes($row['head4'])?>" size="<?php echo "$size_header_caption4";?>" maxlength="<?php echo "$maxlength_header_caption4";?>" class="form"></td>
    </tr>
  <tr>
    <td colspan="3"><?php echo "paragraph4";?></td>
    </tr>
  <tr>
    <td valign="top"><textarea cols="<?php echo "$paragraph4_cols";?>" rows="<?php echo "$paragraph4_rows";?>" name="text4" class="form"><?php echo stripslashes($row['text4'])?>
                  </textarea></td>
    <td valign="top">
	
	<div style="padding-left:5px; padding-right:5"> 
                                                      <table cellspacing="0" cellpadding="0" class="cms_text">
													  
													  <tr> 
                                                          <td width="100">
														  
														      <?php if(!empty($row['img4'])){ ?>
   
	  <?php
 if (!$max_width)
    $max_width  = 100;
 if (!$max_height)
    $max_height =  100;
	
 $the_real_image = "../../uploads/images/".$row['img4'];
 $size   = GetImageSize($the_real_image);
 $width  = $size[0];
 $height = $size[1];

 $x_ratio = $max_width / $width;
 $y_ratio = $max_height / $height;

 if (($width  <= $max_width) && ($height <= $max_height)) {
    $tn_width  = $width;
    $tn_height = $height;
    }
 else if (($x_ratio * $height) < ($max_height)) {
    $tn_height = ceil($x_ratio * $height);
    $tn_width  = $max_width;
    }
 else {
    $tn_width  = ceil($y_ratio * $width);
    $tn_height = $max_height;  
    }
	?>	
 <img src="../../uploads/images/<?php echo $row['img4']?>" width="<?php echo "$tn_width";?>" height="<?php echo "$tn_height";?>" class="cms_image_border"> <a href="<?php echo $the_page;?>?id=<?php echo $row[0]?>&&del=img4"><img src="../cms_images/del.jpg" border="0"></a>
	
	<?php }?>
														  
														  
														  </td>
                                                        </tr>
													  
                                                        <tr> 
                                                          <td><?php echo "$choose_image4";?></td>
                                                        </tr>
                                                        <tr> 
                                                          <td colspan="2"> <input name="userfile4" type="file" size="<?php echo "$userfile_size";?>"  class="form"></td>
                                                        </tr>
                                                        <tr> 
                                                          <td><div style="padding-bottom:5px"></div></td>
                                                        </tr>
                                                        <tr> 
                                                          <td><?php echo "$image_position4";?></td>
                                                        </tr>
                                                        <tr> 
                                                          <td colspan="2"><select name="pos4" size="1" class="form">
                                                              <?php
					$pos="left";
					if ($row['pos4']==$pos){
					echo "<option value=\"left\" selected>Left</option>
					<option value=\"right\" >Right</option>";}
					else {echo "<option value=\"left\">Left</option>
					<option value=\"right\"  selected>Right</option>"; }
					?>
                                                            </select></td>
                                                        </tr>
                                                        <tr> 
                                                          <td><div style="padding-bottom:5px"></div></td>
                                                        </tr>
                                                        <tr> 
                                                          <td><?php echo "$image_caption4";?></td>
                                                        </tr>
                                                        <tr> 
                                                          <td colspan="2">
														  <input name="capt4" type="text"  value="<?php echo stripslashes($row['capt4'])?>" maxlength="<?php echo "$maxlength_image_caption4";?>" size="<?php echo "$size_image_caption4";?>" class="form">
														  </td>
                                                        </tr>
														
														
														
														<tr><td <?php if($bold_imagelink_caption4==1){?>class="bold"<?php }?> ><?php echo "$imagelink_caption4";?> <span class="error"><?php echo "$imagelink_caption_help4";?></span></td></tr>
				    							
														<tr><td><input name="img4link" type="text" value="<?php echo stripslashes($row['img4link'])?>" size="<?php echo "$size_imagelink_caption4";?>" maxlength="<?php echo "$maxlength_imagelink_caption4";?>" class="form"></td></tr>
	
														
														
														
														
                                                      </table>
          </div>
	
	</td>
    <td valign="top"></td>
	
  </tr>
</table>




<div  style="padding-bottom:10 "></div>

<table border="0" cellspacing="0" cellpadding="0" class="cms_text">
  <tr>
    <td colspan="3"><?php echo "header5";?></td>
    </tr>
  <tr>
    <td colspan="3"><input name="head5" type="text"  value="<?php echo stripslashes($row['head5'])?>" size="<?php echo "$size_header_caption5";?>" maxlength="<?php echo "$maxlength_header_caption5";?>" class="form"></td>
    </tr>
  <tr>
    <td colspan="3"><?php echo "paragraph5";?></td>
    </tr>
  <tr>
    <td valign="top"><textarea cols="<?php echo "$paragraph5_cols";?>" rows="<?php echo "$paragraph5_rows";?>" name="text5" class="form"><?php echo stripslashes($row['text5'])?>
                  </textarea></td>
    <td valign="top">
	
	<div style="padding-left:5px; padding-right:5px"> 
                                                      <table cellspacing="0" cellpadding="0" class="cms_text">
													  
													  <tr> 
                                                          <td width="100">
														  
														      <?php if(!empty($row['img5'])){ ?>
   
	  <?php
 if (!$max_width)
    $max_width  = 100;
 if (!$max_height)
    $max_height =  100;
	
 $the_real_image = "../../uploads/images/".$row['img5'];
 $size   = GetImageSize($the_real_image);
 $width  = $size[0];
 $height = $size[1];

 $x_ratio = $max_width / $width;
 $y_ratio = $max_height / $height;

 if (($width  <= $max_width) && ($height <= $max_height)) {
    $tn_width  = $width;
    $tn_height = $height;
    }
 else if (($x_ratio * $height) < ($max_height)) {
    $tn_height = ceil($x_ratio * $height);
    $tn_width  = $max_width;
    }
 else {
    $tn_width  = ceil($y_ratio * $width);
    $tn_height = $max_height;  
    }
	?>	
 <img src="../../uploads/images/<?php echo $row['img5']?>" width="<?php echo "$tn_width";?>" height="<?php echo "$tn_height";?>" class="cms_image_border"> <a href="<?php echo $the_page;?>?id=<?php echo $row[0]?>&&del=img5"><img src="../cms_images/del.jpg" border="0"></a>
	
	<?php }?>
														  
														  
														  </td>
                                                        </tr>
													  
                                                        <tr> 
                                                          <td><?php echo "$choose_image5";?></td>
                                                        </tr>
                                                        <tr> 
                                                          <td colspan="2"> <input name="userfile5" type="file" size="<?php echo "$userfile_size";?>"  class="form"></td>
                                                        </tr>
                                                        <tr> 
                                                          <td><div style="padding-bottom:5px"></div></td>
                                                        </tr>
                                                        <tr> 
                                                          <td><?php echo "$image_position5";?></td>
                                                        </tr>
                                                        <tr> 
                                                          <td colspan="2">
														  <select name="pos5" size="1" class="form">
                                                              <?php
					$pos="left";
					if ($row['pos5']==$pos){echo "<option value=\"left\" selected>Left</option><option value=\"right\" >Right</option>";}
					else                   {echo "<option value=\"left\">Left</option><option value=\"right\"  selected>Right</option>";}
					
					?>
                                                            </select>
														  </td>
                                                        </tr>
                                                        <tr> 
                                                          <td><div style="padding-bottom:5px"></div></td>
                                                        </tr>
                                                        <tr> 
                                                          <td><?php echo "$image_caption5";?></td>
                                                        </tr>
                                                        <tr> 
                                                          <td colspan="2">
														  <input name="capt5" type="text"  value="<?php echo stripslashes($row['capt5'])?>" maxlength="<?php echo "$maxlength_image_caption5";?>" size="<?php echo "$size_image_caption5";?>" class="form">
														  </td>
                                                        </tr>
														
														
														<tr><td <?php if($bold_imagelink_caption5==1){?>class="bold"<?php }?> ><?php echo "$imagelink_caption5";?> <span class="error"><?php echo "$imagelink_caption_help5";?></span></td></tr>
				    							
														<tr><td><input name="img5link" type="text" value="<?php echo stripslashes($row['img5link'])?>" size="<?php echo "$size_imagelink_caption5";?>" maxlength="<?php echo "$maxlength_imagelink_caption5";?>" class="form"></td></tr>
	
														
														
														
                                                      </table>
          </div>
	
	</td>
    <td valign="top"></td>
	
  </tr>
</table>
								
									
									
									
									
                                        <table border="0" cellspacing="0" cellpadding="0"  class="cms_text">
                                                
                                                <tr> 
                                                  <td  valign="top"> 
												  <div  style="padding-top:10px"> 
                                                      <input type="submit" value="<?php echo "$update_bottom ";?>" >
                                                      <input type="hidden" value="OK" name="send">
                                                  </div></td>
                                                </tr>
                                                
                                  </table>

         </div>
    
    </td>
    <td valign="top" bgcolor="#99FF00">
    		<?php if($group2==1){?>
			<div style="padding-bottom:5px">
				<table border="0" cellspacing="0" cellpadding="0" class="cms_text">  			  					
					<tr><td width="125px"></td><td></td><td></td></tr>
					<?php if($show_illus1==1){?>		
	    				<tr>
							<td <?php if($bold_illus1==1){?>class="bold"<?php }?>><?php echo "$illus1_name";?></td>
		    				<td>
								<div><a href="edit.php?sel_illus1=0&&id=<?php echo $row[0]?>">New</a> | <a href="edit.php?sel_illus1=1&&id=<?php echo $row[0]?>">Select</a></div>
								<?php if($show_illus1_select==0){?><input name="userfile_illus1" type="file" size="<?php echo "$illus_size";?>" class="form"><?php }?>
								<?php if($show_illus1_select==1){?>
									<select name="image_name_illus1" onChange="MM_jumpMenu('parent',this,0)" class="form" style="width:<?php echo "$lan_width";?>">
      									<option value="">No Object...
      										<?php
												$rstimg   = mysql_query($qimg) or die(mysql_error());
												while($rowimg = mysql_fetch_array($rstimg))
													{
														if($row['illus1']==$rowimg[0]){echo "<OPTION VALUE=\"$rowimg[0]\" selected>$rowimg[1] -- $rowimg[0]";}
														else                          {echo "<OPTION VALUE=\"edit.php?id=$row[0]&&illus1update=$rowimg[0]\">$rowimg[1] -- $rowimg[0]";}
													}
											?>
        							</select>
								<?php }?>					
							</td>
		    				<td>      
            					<?php if(!empty($row['illus1'])){ ?>
 									<?php
 										if (!$max_width_illus1) $max_width_illus1  = 100; 
 										if (!$max_height_illus1)$max_height_illus1 =  40;    
 										$the_real_image_illus1 = "../../uploads/images/".$row['illus1'];
 										$size_illus1           = GetImageSize($the_real_image_illus1);
 										$width_illus1          = $size_illus1[0];
 										$height_illus1         = $size_illus1[1];
 										$x_ratio_illus1        = $max_width_illus1 / $width_illus1;
 										$y_ratio_illus1        = $max_height_illus1 / $height_illus1;
                        				if (($width_illus1  <= $max_width_illus1) && ($height_illus1 <= $max_height_illus1)) { $tn_width_illus1  = $width_illus1; $tn_height_illus1 = $height_illus1; }  
                        				else if (($x_ratio_illus1 * $height_illus1) < ($max_height_illus1)) {$tn_height_illus1 = ceil($x_ratio_illus1 * $height_illus1);$tn_width_illus1  = $max_width_illus1;} 
                        				else {$tn_width_illus1  = ceil($y_ratio_illus1 * $width_illus1);$tn_height_illus1 = $max_height_illus1; }  
                    				?>	
                    				<img src="../../uploads/images/<?php echo $row['illus1']?>" width="<?php echo "$tn_width_illus1";?>" height="<?php echo "$tn_height_illus1";?>" class="cms_image_border" > <a href="edit.php?id=<?php echo $row[0]?>&&del=illus1"><img src="../cms_images/del.jpg" border="0"></a>	
								<?php }?>
								<span class="error"><?php echo "$illus1_help";?></span>
		  					</td>
	  					</tr>  
					<?php }?>
	  
	  
	  
	                <?php if($show_illus2==1){?>
	  					<tr>
		   					<td valign="middle" <?php if($bold_illus2==1){?>class="bold"<?php }?>><?php echo "$illus2_name";?></td>
		   					<td>
								<div><a href="edit.php?sel_illus2=0&&id=<?php echo $row[0]?>">New</a> | <a href="edit.php?sel_illus2=1&&id=<?php echo $row[0]?>">Select</a></div>
								<?php if($show_illus2_select==0){?><input name="userfile_illus2" type="file" size="<?php echo "$illus_size";?>" class="form"><?php }?>						
								<?php if($show_illus2_select==1){?>
									<select name="image_name_illus2" onChange="MM_jumpMenu('parent',this,0)" class="form" style="width:<?php echo "$lan_width";?>">
      									<option value="">No Object...
      										<?php								    
												$rstimg   = mysql_query($qimg) or die(mysql_error());
												while($rowimg = mysql_fetch_array($rstimg))
													{
														if($row['illus2']==$rowimg[0]){echo "<OPTION VALUE=\"$rowimg[0]\" SELECTED>$rowimg[1] -- $rowimg[0]";}
														else                          {echo "<OPTION VALUE=\"edit.php?id=$row[0]&&illus2update=$rowimg[0]\">         $rowimg[1] -- $rowimg[0]";}
													}
											?>
        							</select>
								<?php }?>
							</td>
		   					<td>		   
           						<?php if(!empty($row['illus2'])){ ?>
 									<?php
 										if (!$max_width_illus2) $max_width_illus2  = 100; 
 										if (!$max_height_illus2)$max_height_illus2 =  40;
    
 										$the_real_image_illus2 = "../../uploads/images/".$row['illus2'];
 										$size_illus2   = GetImageSize($the_real_image_illus2);
 										$width_illus2  = $size_illus2[0];
 										$height_illus2 = $size_illus2[1];

 										$x_ratio_illus2 = $max_width_illus2 / $width_illus2;
 										$y_ratio_illus2 = $max_height_illus2 / $height_illus2;

 										if (($width_illus2  <= $max_width_illus2) && ($height_illus2 <= $max_height_illus2)) { $tn_width_illus2  = $width_illus2; $tn_height_illus2 = $height_illus2; }  
 										elseif (($x_ratio_illus2 * $height_illus2) < ($max_height_illus2)) {$tn_height_illus2 = ceil($x_ratio_illus2 * $height_illus2);$tn_width_illus2  = $max_width_illus2;} 
 										else {$tn_width_illus2  = ceil($y_ratio_illus2 * $width_illus2);$tn_height_illus2 = $max_height_illus2; }  
									?>	
									<img src="../../uploads/images/<?php echo $row['illus2']?>" width="<?php echo "$tn_width_illus2";?>" height="<?php echo "$tn_height_illus2";?>" class="cms_image_border"> <a href="edit.php?id=<?php echo $row[0]?>&&del=illus2"><img src="../cms_images/del.jpg" border="0"></a>
								<?php }?>
		   						<span class="error"><?php echo "$illus2_help";?></span>
		   					</td>
	  					</tr> 
					<?php }?> 
	  
	  
	               	<?php if($show_illus3==1){?> 
	  					<tr>
		   					<td <?php if($bold_illus3==1){?>class="bold"<?php }?>><?php echo "$illus3_name";?></td>
		   					<td>
								<div><a href="edit.php?sel_illus3=0&&id=<?php echo $row[0]?>">New</a> | <a href="edit.php?sel_illus3=1&&id=<?php echo $row[0]?>">Select</a></div>
								<?php if($show_illus3_select==0){?><input name="userfile_illus3" type="file" size="<?php echo "$illus_size";?>" class="form"><?php }?>
								<?php if($show_illus3_select==1){?>
									<select name="image_name_illus3" onChange="MM_jumpMenu('parent',this,0)" class="form" style="width:<?php echo "$lan_width";?>">
      									<option value="">No Object...
      										<?php								    
												$rstimg   = mysql_query($qimg) or die(mysql_error());
												while($rowimg = mysql_fetch_array($rstimg))
													{
														if($row['illus3']==$rowimg[0]){echo "<OPTION VALUE=\"$rowimg[0]\" SELECTED>$rowimg[1] -- $rowimg[0]";}
														else                          {echo "<OPTION VALUE=\"edit.php?id=$row[0]&&illus3update=$rowimg[0]\">         $rowimg[1] -- $rowimg[0]";}
													}
											?>
        								</select>
								<?php }?>
							</td>
		   					<td>
		   						<?php if(!empty($row['illus3'])){ ?>
 									<?php
 										if (!$max_width_illus3) $max_width_illus3  = 100; 
 										if (!$max_height_illus3)$max_height_illus3 =  40;
    
 										$the_real_image_illus3 = "../../uploads/images/".$row['illus3'];
 										$size_illus3   = GetImageSize($the_real_image_illus3);
 										$width_illus3  = $size_illus3[0];
 										$height_illus3 = $size_illus3[1];

 										$x_ratio_illus3 = $max_width_illus3 / $width_illus3;
 										$y_ratio_illus3 = $max_height_illus3 / $height_illus3;

 										if (($width_illus3  <= $max_width_illus3) && ($height_illus3 <= $max_height_illus3)) { $tn_width_illus3  = $width_illus3; $tn_height_illus3 = $height_illus3; }  
 										else if (($x_ratio_illus3 * $height_illus3) < ($max_height_illus3)) {$tn_height_illus3 = ceil($x_ratio_illus3 * $height_illus3);$tn_width_illus3  = $max_width_illus3;} 
 										else {$tn_width_illus3  = ceil($y_ratio_illus3 * $width_illus3);$tn_height_illus3 = $max_height_illus3; }  
									?>	
									<img src="../../uploads/images/<?php echo $row['illus3']?>" width="<?php echo "$tn_width_illus3";?>" height="<?php echo "$tn_height_illus3";?>" class="cms_image_border"> <a href="edit.php?id=<?php echo $row[0]?>&&del=illus3"><img src="../cms_images/del.jpg" border="0"></a>
								<?php }?>
		   
		   						<span class="error"><?php echo "$illus3_help";?></span>
		   					</td>
	  					</tr> 
					<?php }?> 
	  
	  
	  
	                <?php if($show_illus4==1){?>
	  					<tr>
		   					<td <?php if($bold_illus4==1){?>class="bold"<?php }?>><?php echo "$illus4_name";?></td>
		   					<td>
								<div><a href="edit.php?sel_illus4=0&&id=<?php echo $row[0]?>">New</a> | <a href="edit.php?sel_illus4=1&&id=<?php echo $row[0]?>">Select</a></div>
								<?php if($show_illus4_select==0){?><input name="userfile_illus4" type="file" size="<?php echo "$illus_size";?>" class="form"><?php }?>
								<?php if($show_illus4_select==1){?>
									<select name="image_name_illus4" onChange="MM_jumpMenu('parent',this,0)" class="form" style="width:<?php echo "$lan_width";?>">
      									<option value="">No Object...
      										<?php
												$rstimg   = mysql_query($qimg) or die(mysql_error());
												while($rowimg = mysql_fetch_array($rstimg))
													{
														if($row['illus4']==$rowimg[0]){echo "<OPTION VALUE=\"$rowimg[0]\" SELECTED>$rowimg[1] -- $rowimg[0]";}
														else                          {echo "<OPTION VALUE=\"edit.php?id=$row[0]&&illus4update=$rowimg[0]\">         $rowimg[1] -- $rowimg[0]";}
													}
											?>
        							</select>
								<?php }?>
							</td>
		   					<td>   
		   						<?php if(!empty($row['illus4'])){ ?>
		   							<?php
 										if (!$max_width_illus4) $max_width_illus4  = 100; 
 										if (!$max_height_illus4)$max_height_illus4 =  40;
    
 										$the_real_image_illus4 = "../../uploads/images/".$row['illus4'];
 										$size_illus4   = GetImageSize($the_real_image_illus4);
 										$width_illus4  = $size_illus4[0];
 										$height_illus4 = $size_illus4[1];

 										$x_ratio_illus4 = $max_width_illus4 / $width_illus4;
 										$y_ratio_illus4 = $max_height_illus4 / $height_illus4;

 										if (($width_illus4  <= $max_width_illus4) && ($height_illus4 <= $max_height_illus4)) { $tn_width_illus4  = $width_illus4; $tn_height_illus4 = $height_illus4; }  
 										elseif (($x_ratio_illus4 * $height_illus4) < ($max_height_illus4)) {$tn_height_illus4 = ceil($x_ratio_illus4 * $height_illus4);$tn_width_illus4  = $max_width_illus4;} 
 										else {$tn_width_illus4  = ceil($y_ratio_illus4 * $width_illus4);$tn_height_illus4 = $max_height_illus4; }  
									?>	
									<img src="../../uploads/images/<?php echo $row['illus4']?>" width="<?php echo "$tn_width_illus4";?>" height="<?php echo "$tn_height_illus4";?>" class="cms_image_border"> <a href="edit.php?id=<?php echo $row[0]?>&&del=illus4"><img src="../cms_images/del.jpg" border="0"></a>
								<?php }?>		   
								<span class="error"><?php echo "$illus4_help";?></span>
		   					</td>
	  					</tr> 
					<?php }?> 
	  
	  
	            	<?php if($show_illus5==1){?>  
	  					<tr>
		   					<td <?php if($bold_illus5==1){?>class="bold"<?php }?>><?php echo "$illus5_name";?></td>
		   					<td>
								<div><a href="edit.php?sel_illus5=0&&id=<?php echo $row[0]?>">New</a> | <a href="edit.php?sel_illus5=1&&id=<?php echo $row[0]?>">Select</a></div>
								<?php if($show_illus5_select==0){?><input name="userfile_illus5" type="file" size="<?php echo "$illus_size";?>" class="form"><?php }?>						
								<?php if($show_illus5_select==1){?>
									<select name="image_name_illus5" onChange="MM_jumpMenu('parent',this,0)" class="form" style="width:<?php echo "$lan_width";?>">
      									<option value="">No Object...
      										<?php
												$rstimg   = mysql_query($qimg) or die(mysql_error());
												while($rowimg = mysql_fetch_array($rstimg))
													{
														if($row['illus5']==$rowimg[0]){echo "<OPTION VALUE=\"$rowimg[0]\" SELECTED>$rowimg[1] -- $rowimg[0]";}
														else                          {echo "<OPTION VALUE=\"edit.php?id=$row[0]&&illus5update=$rowimg[0]\">         $rowimg[1] -- $rowimg[0]";}
													}
											?>
        							</select>
								<?php }?>
						
						
						
						
						
						
				  </td>
		   			<td>
		   				<?php if(!empty($row['illus5'])){ ?>
		   				<?php
 		   					if (!$max_width_illus5) $max_width_illus5  = 100; 
 		   					if (!$max_height_illus5)$max_height_illus5 =  40;
    
 							$the_real_image_illus5 = "../../uploads/images/".$row['illus5'];
 							$size_illus5   = GetImageSize($the_real_image_illus5);
 							$width_illus5  = $size_illus5[0];
 							$height_illus5 = $size_illus5[1];

 							$x_ratio_illus5 = $max_width_illus5 / $width_illus5;
 							$y_ratio_illus5 = $max_height_illus5 / $height_illus5;

 							if     (($width_illus5  <= $max_width_illus5) && ($height_illus5 <= $max_height_illus5)) {$tn_width_illus5  = $width_illus5; $tn_height_illus5 = $height_illus5; }  
 							elseif (($x_ratio_illus5 * $height_illus5) < ($max_height_illus5))                       {$tn_height_illus5 = ceil($x_ratio_illus5 * $height_illus5);$tn_width_illus5  = $max_width_illus5;} 
 							else                                                                                     {$tn_width_illus5  = ceil($y_ratio_illus5 * $width_illus5);$tn_height_illus5 = $max_height_illus5; }  
						?>	
						<img src="../../uploads/images/<?php echo $row['illus5']?>" width="<?php echo "$tn_width_illus5";?>" height="<?php echo "$tn_height_illus5";?>" class="cms_image_border"> <a href="edit.php?id=<?php echo $row[0]?>&&del=illus5"><img src="../cms_images/del.jpg" border="0"></a>
						<?php }?>
		   				<span class="error"><?php echo "$illus5_help";?></span>
		   			</td>
	  			</tr> 
		<?php }?>
	  
			</table>
	
		</div>	
	<?php }?>
    
    
    
    
    
    						
						<?php if($group4==1){?>
			<div style="padding-bottom:5px">									
<table border="0" cellspacing="0" cellpadding="0" class="cms_text">
												<tr><td width="125px"></td><td></td><td></td></tr>
												
		<?php if($show_add1==1){?>
		<tr>
		   <td <?php if($bold_add1==1){?>class="bold"<?php }?>><?php echo "$add1_name";?></td>
		   <td>
		
		   
		   <div><a href="edit.php?sel_add1=0&&id=<?php echo $row[0]?>">New</a> | <a href="edit.php?sel_add1=1&&id=<?php echo $row[0]?>">Select</a></div>
						
						
						<?php if($show_add1_select==0){?><input name="userfile_add1" type="file" size="<?php echo "$add_size";?>" class="form"><?php }?>
						
						<?php if($show_add1_select==1){?>
						<select name="image_name_add1" onChange="MM_jumpMenu('parent',this,0)" class="form" style="width:<?php echo "$lan_width";?>">
      						<option value="">No Object...
      							<?php
								    
									$rstimg   = mysql_query($qimg) or die(mysql_error());
									while($rowimg = mysql_fetch_array($rstimg))
										{
											if($row['add1']==$rowimg[0]){echo "<OPTION VALUE=\"$rowimg[0]\" SELECTED>$rowimg[1] -- $rowimg[0]";}
											else                          {echo "<OPTION VALUE=\"edit.php?id=$row[0]&&add1update=$rowimg[0]\">         $rowimg[1] -- $rowimg[0]";}
										}
								?>
        				</select>
						<?php }?>
						
		   
		   
		   
		   </td>
		   <td>
		   
		   <?php if(!empty($row['add1'])){ ?>
	<?php
 		if (!$max_width_add1) $max_width_add1  = 100; 
 		if (!$max_height_add1)$max_height_add1 =  40;
    
 		$the_real_image_add1 = "../../uploads/images/".$row['add1'];
 		$size_add1   = GetImageSize($the_real_image_add1);
 		$width_add1  = $size_add1[0];
 		$height_add1 = $size_add1[1];

 		$x_ratio_add1 = $max_width_add1 / $width_add1;
 		$y_ratio_add1 = $max_height_add1 / $height_add1;

 		if (($width_add1  <= $max_width_add1) && ($height_add1 <= $max_height_add1)) { $tn_width_add1  = $width_add1; $tn_height_add1 = $height_add1; }  
 		else if (($x_ratio_add1 * $height_add1) < ($max_height_add1)) {$tn_height_add1 = ceil($x_ratio_add1 * $height_add1);$tn_width_add1  = $max_width_add1;} 
 		else {$tn_width_add1  = ceil($y_ratio_add1 * $width_add1);$tn_height_add1 = $max_height_add1; }  
	?>	
	<img src="../../uploads/images/<?php echo $row['add1']?>" width="<?php echo "$tn_width_add1";?>" height="<?php echo "$tn_height_add1";?>" class="cms_image_border"> <a href="edit.php?id=<?php echo $row[0]?>&&del=add1"><img src="../cms_images/del.jpg" border="0"></a>
<?php }?>
		   
		   <?php echo "$add1_help";?>
		   </td>
	  </tr> 
	  <?php }?>
	  
	  
	  <?php if($show_addlink1==1){?>
	  <tr> 
    	<td valign="top" <?php if($bold_addlink1==1){?>class="bold"<?php }?>><?php echo "$addlink1_name";?></td>                                                 
		<td valign="top"><input name="addlink1" type="text"  value="<?php echo stripslashes($row['addlink1'])?>" maxlength="<?php echo "$maxlength_addlink1";?>" size="<?php echo "$size_addlink1";?>" class="form"></td>								  
		<td><div class="error"><?php echo "$addlink1_help";?></div></td>                                            
    </tr>
	<?php }?>
	  
	  
	  <?php if($show_add2==1){?>
	  <tr>
		   <td <?php if($bold_add2==1){?>class="bold"<?php }?>><?php echo "$add2_name";?></td>
		   <td>
		
		   
		   <div><a href="edit.php?sel_add2=0&&id=<?php echo $row[0]?>">New</a> | <a href="edit.php?sel_add2=1&&id=<?php echo $row[0]?>">Select</a></div>
						
						
						<?php if($show_add2_select==0){?><input name="userfile_add2" type="file" size="<?php echo "$add_size";?>" class="form"><?php }?>
						
						<?php if($show_add2_select==1){?>
						<select name="image_name_add2" onChange="MM_jumpMenu('parent',this,0)" class="form" style="width:<?php echo "$lan_width";?>">
      						<option value="">No Object...
      							<?php
								    
									$rstimg   = mysql_query($qimg) or die(mysql_error());
									while($rowimg = mysql_fetch_array($rstimg))
										{
											if($row['add2']==$rowimg[0]){echo "<OPTION VALUE=\"$rowimg[0]\" SELECTED>$rowimg[1] -- $rowimg[0]";}
											else                          {echo "<OPTION VALUE=\"edit.php?id=$row[0]&&add2update=$rowimg[0]\">         $rowimg[1] -- $rowimg[0]";}
										}
								?>
        				</select>
						<?php }?>
						
		   
		   
		   
		   </td>
		   <td>
		   
		   <?php if(!empty($row['add2'])){ ?>
	<?php
 		if (!$max_width_add2) $max_width_add2  = 100; 
 		if (!$max_height_add2)$max_height_add2 =  40;
    
 		$the_real_image_add2 = "../../uploads/images/".$row['add2'];
 		$size_add2   = GetImageSize($the_real_image_add2);
 		$width_add2  = $size_add2[0];
 		$height_add2 = $size_add2[1];

 		$x_ratio_add2 = $max_width_add2 / $width_add2;
 		$y_ratio_add2 = $max_height_add2 / $height_add2;

 		if (($width_add2  <= $max_width_add2) && ($height_add2 <= $max_height_add2)) { $tn_width_add2  = $width_add2; $tn_height_add2 = $height_add2; }  
 		else if (($x_ratio_add2 * $height_add2) < ($max_height_add2)) {$tn_height_add2 = ceil($x_ratio_add2 * $height_add2);$tn_width_add2  = $max_width_add2;} 
 		else {$tn_width_add2  = ceil($y_ratio_add2 * $width_add2);$tn_height_add2 = $max_height_add2; }  
	?>	
	<img src="../../uploads/images/<?php echo $row['add2']?>" width="<?php echo "$tn_width_add2";?>" height="<?php echo "$tn_height_add2";?>" class="cms_image_border"> <a href="edit.php?id=<?php echo $row[0]?>&&del=add2"><img src="../cms_images/del.jpg" border="0"></a>
<?php }?>
		   
		   <?php echo "$add2_help";?>
		   </td>
	  </tr> 
	  <?php }?>
	  
	  
	  
	  <?php if($show_addlink2==1){?>
	  <tr> 
    	<td valign="top" <?php if($bold_addlink2==1){?>class="bold"<?php }?>><?php echo "$addlink2_name";?></td>                                                 
		<td valign="top"><input name="addlink2" type="text"  value="<?php echo stripslashes($row['addlink2'])?>" maxlength="<?php echo "$maxlength_addlink2";?>" size="<?php echo "$size_addlink2";?>" class="form"></td>								  
		<td><div class="error"><?php echo "$addlink2_help";?></div></td>                                            
    </tr>
	<?php }?>
	  
	  
	  <?php if($show_add3==1){?>
	  <tr>
		   <td <?php if($bold_add3==1){?>class="bold"<?php }?>><?php echo "$add3_name";?></td>
		   <td>
		
		   
		   <div><a href="edit.php?sel_add3=0&&id=<?php echo $row[0]?>">New</a> | <a href="edit.php?sel_add3=1&&id=<?php echo $row[0]?>">Select</a></div>
						
						
						<?php if($show_add3_select==0){?><input name="userfile_add3" type="file" size="<?php echo "$add_size";?>" class="form"><?php }?>
						
						<?php if($show_add3_select==1){?>
						<select name="image_name_add3" onChange="MM_jumpMenu('parent',this,0)" class="form" style="width:<?php echo "$lan_width";?>">
      						<option value="">No Object...
      							<?php
								    
									$rstimg   = mysql_query($qimg) or die(mysql_error());
									while($rowimg = mysql_fetch_array($rstimg))
										{
											if($row['add3']==$rowimg[0]){echo "<OPTION VALUE=\"$rowimg[0]\" SELECTED>$rowimg[1] -- $rowimg[0]";}
											else                          {echo "<OPTION VALUE=\"edit.php?id=$row[0]&&add3update=$rowimg[0]\">         $rowimg[1] -- $rowimg[0]";}
										}
								?>
        				</select>
						<?php }?>
						
		   
		   
		   
		   </td>
		   <td>
		   
		   <?php if(!empty($row['add3'])){ ?>
	<?php
 		if (!$max_width_add3) $max_width_add3  = 100; 
 		if (!$max_height_add3)$max_height_add3 =  40;
    
 		$the_real_image_add3 = "../../uploads/images/".$row['add3'];
 		$size_add3   = GetImageSize($the_real_image_add3);
 		$width_add3  = $size_add3[0];
 		$height_add3 = $size_add3[1];

 		$x_ratio_add3 = $max_width_add3 / $width_add3;
 		$y_ratio_add3 = $max_height_add3 / $height_add3;

 		if (($width_add3  <= $max_width_add3) && ($height_add3 <= $max_height_add3)) { $tn_width_add3  = $width_add3; $tn_height_add3 = $height_add3; }  
 		else if (($x_ratio_add3 * $height_add3) < ($max_height_add3)) {$tn_height_add3 = ceil($x_ratio_add3 * $height_add3);$tn_width_add3  = $max_width_add3;} 
 		else {$tn_width_add3  = ceil($y_ratio_add3 * $width_add3);$tn_height_add3 = $max_height_add3; }  
	?>	
	<img src="../../uploads/images/<?php echo $row['add3']?>" width="<?php echo "$tn_width_add3";?>" height="<?php echo "$tn_height_add3";?>" class="cms_image_border"> <a href="edit.php?id=<?php echo $row[0]?>&&del=add3"><img src="../cms_images/del.jpg" border="0"></a>
<?php }?>
		   
		   <?php echo "$add3_help";?>
		   </td>
	  </tr> 
	  <?php }?>
	  
	  
	  
	  <?php if($show_addlink3==1){?>
	  <tr> 
    	<td valign="top" <?php if($bold_addlink3==1){?>class="bold"<?php }?>><?php echo "$addlink3_name";?></td>                                                 
		<td valign="top"><input name="addlink3" type="text"  value="<?php echo stripslashes($row['addlink3'])?>" maxlength="<?php echo "$maxlength_addlink3";?>" size="<?php echo "$size_addlink3";?>" class="form"></td>								  
		<td><div class="error"><?php echo "$addlink3_help";?></div></td>                                            
    </tr>
	<?php }?>
	  
	  <?php if($show_add4==1){?>
	  <tr>
		   <td <?php if($bold_add4==1){?>class="bold"<?php }?>><?php echo "$add4_name";?></td>
		   <td>
		
		   
		   <div><a href="edit.php?sel_add4=0&&id=<?php echo $row[0]?>">New</a> | <a href="edit.php?sel_add4=1&&id=<?php echo $row[0]?>">Select</a></div>
						
						
						<?php if($show_add4_select==0){?><input name="userfile_add4" type="file" size="<?php echo "$add_size";?>" class="form"><?php }?>
						
						<?php if($show_add4_select==1){?>
						<select name="image_name_add4" onChange="MM_jumpMenu('parent',this,0)" class="form" style="width:<?php echo "$lan_width";?>">
      						<option value="">No Object...
      							<?php
								    
									$rstimg   = mysql_query($qimg) or die(mysql_error());
									while($rowimg = mysql_fetch_array($rstimg))
										{
											if($row['add4']==$rowimg[0]){echo "<OPTION VALUE=\"$rowimg[0]\" SELECTED>$rowimg[1] -- $rowimg[0]";}
											else                          {echo "<OPTION VALUE=\"edit.php?id=$row[0]&&add4update=$rowimg[0]\">         $rowimg[1] -- $rowimg[0]";}
										}
								?>
        				</select>
						<?php }?>
						
		   
		   
		   
		   </td>
		   <td>
		   
		   <?php if(!empty($row['add4'])){ ?>
	<?php
 		if (!$max_width_add4) $max_width_add4  = 100; 
 		if (!$max_height_add4)$max_height_add4 =  40;
    
 		$the_real_image_add4 = "../../uploads/images/".$row['add4'];
 		$size_add4   = GetImageSize($the_real_image_add4);
 		$width_add4  = $size_add4[0];
 		$height_add4 = $size_add4[1];

 		$x_ratio_add4 = $max_width_add4 / $width_add4;
 		$y_ratio_add4 = $max_height_add4 / $height_add4;

 		if (($width_add4  <= $max_width_add4) && ($height_add4 <= $max_height_add4)) { $tn_width_add4  = $width_add4; $tn_height_add4 = $height_add4; }  
 		else if (($x_ratio_add4 * $height_add4) < ($max_height_add4)) {$tn_height_add4 = ceil($x_ratio_add4 * $height_add4);$tn_width_add4  = $max_width_add4;} 
 		else {$tn_width_add4  = ceil($y_ratio_add4 * $width_add4);$tn_height_add4 = $max_height_add4; }  
	?>	
	<img src="../../uploads/images/<?php echo $row['add4']?>" width="<?php echo "$tn_width_add4";?>" height="<?php echo "$tn_height_add4";?>" class="cms_image_border"> <a href="edit.php?id=<?php echo $row[0]?>&&del=add4"><img src="../cms_images/del.jpg" border="0"></a>
<?php }?>
		   
		   <?php echo "$add4_help";?>
		   </td>
	  </tr> 
	  <?php }?>
	  
	  <?php if($show_addlink4==1){?>
	  <tr> 
    	<td valign="top" <?php if($bold_addlink4==1){?>class="bold"<?php }?>><?php echo "$addlink4_name";?></td>                                                 
		<td valign="top"><input name="addlink4" type="text"  value="<?php echo stripslashes($row['addlink4'])?>" maxlength="<?php echo "$maxlength_addlink4";?>" size="<?php echo "$size_addlink4";?>" class="form"></td>								  
		<td><div class="error"><?php echo "$addlink4_help";?></div></td>                                            
    </tr>
	<?php }?>
	  
	  
	  <?php if($show_add5==1){?>
	  <tr>
		   <td <?php if($bold_add5==1){?>class="bold"<?php }?>><?php echo "$add5_name";?></td>
		   <td>
		
		   
		   <div><a href="edit.php?sel_add5=0&&id=<?php echo $row[0]?>">New</a> | <a href="edit.php?sel_add5=1&&id=<?php echo $row[0]?>">Select</a></div>
						
						
						<?php if($show_add5_select==0){?><input name="userfile_add5" type="file" size="<?php echo "$add_size";?>" class="form"><?php }?>
						
						<?php if($show_add5_select==1){?>
						<select name="image_name_add5" onChange="MM_jumpMenu('parent',this,0)" class="form" style="width:<?php echo "$lan_width";?>">
      						<option value="">No Object...
      							<?php
								    
									$rstimg   = mysql_query($qimg) or die(mysql_error());
									while($rowimg = mysql_fetch_array($rstimg))
										{
											if($row['add5']==$rowimg[0]){echo "<OPTION VALUE=\"$rowimg[0]\" SELECTED>$rowimg[1] -- $rowimg[0]";}
											else                          {echo "<OPTION VALUE=\"edit.php?id=$row[0]&&add5update=$rowimg[0]\">         $rowimg[1] -- $rowimg[0]";}
										}
								?>
        				</select>
						<?php }?>
						
		   
		   
		   
		   </td>
		   <td>
		   
		   <?php if(!empty($row['add5'])){ ?>
	<?php
 		if (!$max_width_add5) $max_width_add5  = 100; 
 		if (!$max_height_add5)$max_height_add5 =  40;
    
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
	<img src="../../uploads/images/<?php echo $row['add5']?>" width="<?php echo "$tn_width_add5";?>" height="<?php echo "$tn_height_add5";?>" class="cms_image_border"> <a href="edit.php?id=<?php echo $row[0]?>&&del=add5"><img src="../cms_images/del.jpg" border="0"></a>
<?php }?>
		   
		   <?php echo "$add5_help";?>
		   
		   </td>
	  </tr> 
	  
	  <?php }?>
	  
	  
	  <?php if($show_addlink5==1){?>
	  <tr> 
    	<td valign="top" <?php if($bold_addlink5==1){?>class="bold"<?php }?>><?php echo "$addlink5_name";?></td>                                                 
		<td valign="top"><input name="addlink5" type="text"  value="<?php echo stripslashes($row['addlink5'])?>" maxlength="<?php echo "$maxlength_addlink5";?>" size="<?php echo "$size_addlink5";?>" class="form"></td>								  
		<td><div class="error"><?php echo "$addlink5_help";?></div></td>                                            
    </tr>
	<?php }?>
</table>						
			</div>
		<?php }?> 
    
    
    

<?php if($group6==1){?>
			<div style="padding-bottom:5px">
					
	<table border="0" cellspacing="0" cellpadding="0" class="cms_text">	
		<tr><td width="125px"></td><td></td><td></td></tr>		
		
		<?php if($show_doc ==1){?>																
		<tr>
			<td <?php if($bold_doc==1){?>class="bold"<?php }?>><?php echo "$doc_name";?></td>
		<td><input name="userfile_doc" type="file" size="<?php echo "$doc_size ";?>" class="form"></td>
		
		<td>
		<?php if(!empty($row['doc'])){?><a href="../../uploads/docs/<?php echo stripslashes($row['doc'])?>" target="_blank"><?php echo stripslashes($row['doc'])?></a><?php }?>
		
		
		</td>
		<td><div class="error"><?php echo "$doc_help";?></div></td>
	</tr> 
	<?php }?>
					
					
	<?php if($show_aud ==1){?>						
	<tr>
		<td <?php if($bold_aud==1){?>class="bold"<?php }?>><?php echo "$aud_name";?></td>
		<td>
			<input name="userfile_aud" type="file" size="<?php echo "$aud_size";?>" class="form">
			
			
		   
				
			
		
		
		</td>
		<td><?php if(!empty($row['audio'])){?><embed autostart="false"  height="45px" width="200px"  src="../../uploads/sound/<?php echo stripslashes($row['audio'])?>"></embed><?php }?></td>
		<td><div class="error"><?php echo "$aud_help";?></div></td>
	</tr> 
				<?php }?>
				
				
	<?php if($show_vid ==1){?>			 
	<tr>
		<td <?php if($bold_vid==1){?>class="bold"<?php }?>><?php echo "$vid_name";?></td>
		<td><input name="userfile_vid" type="file" size="<?php echo "$vid_size ";?>" class="form"></td>
		<td><?php if(!empty($row['video'])){?><embed autostart="false"  height="200px" width="200px"  src="../../uploads/video/<?php echo stripslashes($row['video'])?>"></embed><?php }?></td>
		<td><div class="error"><?php echo "$vid_help";?></div></td>
	</tr>
	<?php }?>
	
	<?php if($show_zip ==1){?> 	
	<tr>
		<td <?php if($bold_zip==1){?>class="bold"<?php }?>><?php echo "$zip_name";?></td>
		<td><input name="userfile_zip" type="file" size="<?php echo "$zip_size ";?>" class="form"></td>
		<td></td>
		<td><div class="error"><?php echo "$zip_help";?></div></td>
	</tr> 
	<?php }?>
																							                                            
</table>
</div>
		<?php }?> 
    
    </td>
  </tr>
</table>
  </form>
</div>





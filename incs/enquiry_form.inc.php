<?php
	$log           			=trim($_REQUEST['xl1']);
	$thanks        			=trim($_REQUEST['action']);
	
	
	$name      				=trim($_REQUEST["name"]);
	$tel  					=trim($_REQUEST["tel"]);
	$fax  					=trim($_REQUEST["fax"]);
	$cell  					=trim($_REQUEST["cell"]);
	$email         			=trim($_REQUEST["email"]);
	$company         		=trim($_REQUEST["company"]);
	
	$training  				=trim($_REQUEST["training"]);
	$seminar  				=trim($_REQUEST["seminar"]);
	$information  			=trim($_REQUEST["information"]);
	
	$web  					=trim($_REQUEST["web"]);
	$game  					=trim($_REQUEST["game"]);
	$graphics  				=trim($_REQUEST["graphics"]);
	$film  					=trim($_REQUEST["film"]);
	
	
	$by_telephone  			=trim($_REQUEST["by_telephone"]);
	$by_email  				=trim($_REQUEST["by_email"]);
	
	$text          			=trim($_REQUEST["text"]);
	
	
	  
	if(isset($_REQUEST["send"])&&(($_REQUEST["send"])=='OK'))	
	{ 
        if($log==md5(YES))              {$firstname=$row_reg['name'];  $email=$row_reg['email'];}
		
    	
		
		if(!is_filled($name))       {$err_msg 	.= "<div class=\"error\">Please Fill in Your Name</div>";$red2="red";}
		else                            {$name 	 = ucwords($name);}
		
		if(!is_filled($email))          {$err_msg 	.= "<div class=\"error\">The Email Field is Empty</div>";$red3="red";}
		elseif(!is_valid_email($email)) {$err_msg 	.= "<div class=\"error\">The Email Address you entered is Invalid.</div>";$red3="red";}
		else                            {$email 	 = strtolower(trim($email));}
		if(!is_filled($text))           {$err_msg 	.= "<div class=\"error\">You Seem to have forgoten your question or comment.</div>";$red4="red";}
		else 							{$text 		 = trim($text);}
		if ($err_msg=="") 
	    								{
											$subject = "$subject11";
											
											$to_send ="
											
											
											
											Message From: $name\n
											OFFICE TEL: $tel\n
											FAX: $fax\n
											CELL PHONE: $cell\n
											COMPANY NAME: $company\n
											EMAIL: $email\n\n
											
											QUOTE: $quote\n
											CALLBACK: $call_back\n
											INFORMATION: $information\n\n
											
											Web: $web\n
											Game: $game\n
											Graphics: $graphics\n
											Film: $film\n\n
											
											
											BY TEL: $by_telephone\n
											BY EMAIL: $by_email\n
											
											COMMENTS: $text
											
											";
											
	 										//mail("info@dreamsocca.com","$subject","$to_send","From: No_Reply@dreamsocca.com\r\nReply-to:$email");
											
											//mail("reg@ifsfinancegroup.com","$subject","$to_send","From: No_Reply@ifsfinancegroup.com\r\nReply-to:$email");
											
											//mail("regp@mtn.blackberry.com","$subject","$to_send","From: No_Reply@ifsfinancegroup.com\r\nReply-to:$email");
											
											//mail("sherina@ifsfinancegroup.com","$subject","$to_send","From: No_Reply@ifsfinancegroup.com\r\nReply-to:$email");
											
	        								mail("webkingstechnologies@gmail.com","$subject","$to_send","From: No_Reply@webkings.co.za\r\nReply-to:$email");
											
											//mail("fred@ifsfinancegroup.com","$subject","$to_send","From: No_Reply@ifsfinancegroup.com\r\nReply-to:$email");
											
	 										//$qinsert = "insert into feedback_form values(NULL,'$subject','$name','$tel','$email','$text','$fax','$cell','$company','$four','$five','$six','$seven','$eight','$nine','$ten','$eleven','$twelve','$thirteen','$fourteen','$fifteen',now())";
											
	 										//$rstinsert = mysql_query($qinsert) or die(mysql_error());
											
											echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=index.php?page_ren=42&&action=thanks\">";		
										}
	}
?>

<?php if(!($thanks=="thanks")){?>
 																			
 
	
 
 
 		<?php if(!empty($err_msg)){?>
        	
            <div style="font-family:Verdana, Geneva, sans-serif; font-weight:normal; font-size:10px; color:#F00">
				<?php echo $err_header . $err_msg . $err_footer ; ?>
            </div>
            
		<?php }?>
    
    
    
    	<form action="<?php if($log==md5(YES)){echo $PHP_SELF."?xl1=$log";}else{echo $PHP_SELF."?page_ren=42";}?>" method="post">
        
        	<table>
            	<tr>
                	<td valign="top">
							
                            
                       
                            						
                        <table cellpadding="0" cellspacing="0"  class="bodytxt"> 
                            <?php if(!($log==md5(YES))){?>                                       
                        										 
                                <tr> 
                                    <td valign=top class="text"><span style="color:<?php echo $red2?>">Name:*</span></td> 
                                    <td valign=top><input name="name" type="text" value="<?php echo stripslashes($name)?>" style="width:165;height:21"></td>
                                </tr>
                                
                                <tr> 
                                    <td valign=top class="text">Cell 1:</td> 
                                    <td valign=top><input name="fax" type="text" value="<?php echo stripslashes($fax)?>" style="width:165;height:21"></td>
                                </tr> 	
                                
                                <tr> 
                                    <td valign=top class="text">Cell 2:</td> 
                                    <td valign=top><input name="cell" type="text" value="<?php echo stripslashes($cell)?>" style="width:165;height:21"></td>
                                </tr> 	
                                
                               										 
                                <tr> 
                                    <td valign=top class="text"><span style="color:<?php echo $red3?>">Email:*</span></td> 
                                    <td valign=top><input name="email" type="text" value="<?php echo stripslashes($email)?>" style="width:165;height:21"></td> 
                                </tr> 										
                                
                            <?php }?>
                            
                            
                             <tr> 
                                    <td valign=top class="text"><span style="color:<?php echo $red10?>">Company/School Name:</span></td> 
                                    <td valign=top><input name="company" type="text" value="<?php echo stripslashes($company)?>" style="width:165;height:21"></td>
                                </tr>
                                
                                <tr> 
                                    <td valign=top class="text">Tel:</td> 
                                    <td valign=top><input name="tel" type="text" value="<?php echo stripslashes($tel)?>" style="width:165;height:21"></td>
                                </tr> 
                                                               
                            <tr> 
                                <td valign=top class="text" colspan="2">
                                
                                
                                Comments<br><br>
                 <textarea name="text" rows="10" cols="35"><?php echo stripslashes($text)?></textarea>
                 <br><br>
                 <input name="send" type="submit" value="Send">&nbsp;&nbsp;  
                                    <input name="rq_reset" type="reset" value="Reset">  
                                    <input type="hidden" value="OK" name="send">       
                                </td> 
                            </tr>                                        
                            <tr>
                                <td></td> 
                                <td valign=top>							
                                                     
                                </td> 
                            </tr>									 
                    </table> 

        		</td>
  
                 <td valign="top">
                 
                 	<table  border="0">
                    

                      <tr>
                        <td colspan="3" valign="top">

                        <fieldset>
<legend>How may we assist?</legend>

<table border="0">
                        <tr>
                        <td>Web Dev Training
                        	<input type="checkbox" id="training" name="training"  value="Yes"  tabindex="6"/>
                        </td>
                        <td>Seminar &amp; Workshop
                        	<input type="checkbox" id="seminar" name="seminar"  value="Yes"  tabindex="7"/>
                        </td>
                        <td>Information 
                        	<input type="checkbox" id="information" name="information"  value="Yes"  tabindex="8"/>
                        </td>
                      </tr>
                      </table>


                        <table border="0">
                        
                          <tr>
                                <td><label for="pabx"><strong>Web &amp; Content Development</strong></label></td>
                                <td><input type="checkbox" id="checkpabx" name="web"  value="Yes"  /></td>
                               
                            </tr>
                            <tr>
                                <td><strong>Game Programing</strong></td>
                                <td><input type="checkbox" id="game" name="game"  value="Yes"  tabindex="6"/></td>
                                
                            </tr>
                            
                            <tr>
                             	<td><label for="copiers"><strong>Graphics &amp; 3D Animation</strong></label></td>
                                <td><input type="checkbox" id="graphics" name="graphics"  value="Yes"  /></td>                            		
                             </tr>
                          
                             <tr>
                                <td><label for="access"><strong>Film, Music &amp; Acting</strong></label></td>
                                <td><input type="checkbox" id="film" name="film"  value="Yes"  /></td>
                                
                             </tr>

                        </table>

</fieldset>




<fieldset id="reference">
		<legend>Preferred Communication?</legend>
			

	
	
			
					<label for="pabx">Telephone</label>
                    <input type="checkbox" id="checkpreferedtel" name="by_telephone"  value="Yes"  /> &nbsp;&nbsp;&nbsp;
                    
					<label for="security">Email</label>
                    <input type="checkbox" id="checkpreferredemail" name="by_email"  value="Yes"  tabindex="7" /><br />
					
					
	</fieldset>
                        </td>
                        
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                    </table>

                 
                 
                 
                 
                 </td>
                 
                 
                 
                 
                 
                 
        	</tr>
        </table>
        
        
        
        									  
	</form>                                         	
<?php }?>
								  	
	<?php if ($thanks=="thanks"){?>
		<div class="bodytxt">
			Thank you for the Contacting Us.<br>
			We Will get back to you ASAP.
		</div>
	<?php }?>							  							  

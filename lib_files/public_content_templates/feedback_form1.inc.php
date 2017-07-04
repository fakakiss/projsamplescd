<?php
	$log           			=trim($_REQUEST['xl1']);
	$thanks        			=trim($_REQUEST['action']);
	
	$firstname     			=trim($_REQUEST["firstname"]);  
	$lastname      			=trim($_REQUEST["lastname"]);
	$tel  					=trim($_REQUEST["tel"]);
	$fax  					=trim($_REQUEST["fax"]);
	$cell  					=trim($_REQUEST["cell"]);
	$province  				=trim($_REQUEST["province"]);
	$email         			=trim($_REQUEST["email"]);
	
	$quote  				=trim($_REQUEST["quote"]);
	$call_back  			=trim($_REQUEST["call_back"]);
	$information  			=trim($_REQUEST["information"]);
	
	$cctv  					=trim($_REQUEST["cctv"]);
	$pabx  					=trim($_REQUEST["pabx"]);
	$access_control 		=trim($_REQUEST["access_control"]);
	$copiers  				=trim($_REQUEST["copiers"]);
	$routers  				=trim($_REQUEST["routers"]);
	$training  				=trim($_REQUEST["training"]);
	$neotel  				=trim($_REQUEST["neotel"]);
	$security_assistance  	=trim($_REQUEST["security_assistance"]);
	$general_query  		=trim($_REQUEST["general_query"]);
	
	$telephone  			=trim($_REQUEST["telephone"]);
	$electronic_mail  		=trim($_REQUEST["electronic_mail"]);
	
	$text          			=trim($_REQUEST["text"]);
	
	
	  
	if(isset($_REQUEST["send"])&&(($_REQUEST["send"])=='OK'))	
	{ 
        if($log==md5(YES))              {$firstname=$row_reg['firstname']; $lastname=$row_reg['lastname']; $email=$row_reg['email'];}
		
    	if(!is_filled($firstname))      {$err_msg 	.= "<li class=\"error\">Your firstname is required.</li>";$red1="red";}
		else                            {$firstname  = ucwords($firstname);}
		
		if(!is_filled($lastname))       {$err_msg 	.= "<li class=\"error\">Your lastname is required.</li>";$red2="red";}
		else                            {$lastname 	 = ucwords($lastname);}
		
		if(!is_filled($email))          {$err_msg 	.= "<li class=\"error\">The Email Field is Empty</li>";$red3="red";}
		elseif(!is_valid_email($email)) {$err_msg 	.= "<li class=\"error\">The Email Address you entered is Invalid.</li>";$red3="red";}
		else                            {$email 	 = strtolower(trim($email));}
		if(!is_filled($text))           {$err_msg 	.= "<li class=\"error\">You Seem to have forgoten your question or comment.</li>";$red4="red";}
		else 							{$text 		 = trim($text);}
		if ($err_msg=="") 
	    								{
											$subject = "$subject11";$to_send ="Message From : $firstname\n\n$lastname\n\n$company\n\n$email\n\n$text";
											
	 										mail("info@samsungnac.co.za","$subject","$to_send","From: No_Reply@samsungnac.co.za\r\nReply-to:$email");
											
	        								mail("fakakiss@gmail.com","$subject","$to_send","From: No_Reply@samsungnac.co.za\r\nReply-to:$email");
											
	 										$qinsert = "insert into feedback_form values(NULL,'$subject','$firstname','$lastname','$email','$text','$one','$two','$three','$four','$five','$six','$seven','$eight','$nine','$ten','$eleven','$twelve','$thirteen','$fourteen','$fifteen',now())";
											
	 										$rstinsert = mysql_query($qinsert) or die(mysql_error());
											
											echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=index.php?page_ren=36&&action=thanks\">";		
										}
	}
?>

<?php if(!($thanks=="thanks")){?>
 																			
 
		<?php if(!empty($err_msg)){print "<div style=color:#FF0000;font-family:Verdana;font-size:10px>";echo $err_header . $err_msg . $err_footer ;print "</div>";}?>
 
 
 		<?php if(!empty($err_msg)){?>
        	
            <div>
				<?php echo $err_header . $err_msg . $err_footer ; ?>
            </div>
            
		<?php }?>
    
    
    
    	<form action="<?php if($log==md5(YES)){echo $PHP_SELF."?xl1=$log";}else{echo $PHP_SELF."?page_ren=36";}?>" method="post">
        
        	<table>
            	<tr>
                	<td valign="top">
							
                            
                        Personal Information<br><br>
                            						
                        <table cellpadding="0" cellspacing="0"  class="bodytxt"> 
                            <?php if(!($log==md5(YES))){?>                                       
                                <tr> 
                                    <td valign=top class="text"><span style="color:<?php echo $red1?>">First Name:*</span></td> 
                                    <td valign=top><input name="firstname" type="text" value="<?php echo stripslashes($firstname)?>" style="width:165;height:21"></td>
                                </tr>										 
                                <tr> 
                                    <td valign=top class="text"><span style="color:<?php echo $red2?>">Last Name:*</span></td> 
                                    <td valign=top><input name="lastname" type="text" value="<?php echo stripslashes($lastname)?>" style="width:165;height:21"></td>
                                </tr>
                                <tr> 
                                    <td valign=top class="text">Tel:</td> 
                                    <td valign=top><input name="tel" type="text" value="<?php echo stripslashes($tel)?>" style="width:165;height:21"></td>
                                </tr> 
                                <tr> 
                                    <td valign=top class="text">Fax:</td> 
                                    <td valign=top><input name="tel" type="text" value="<?php echo stripslashes($fax)?>" style="width:165;height:21"></td>
                                </tr> 	
                                
                                <tr> 
                                    <td valign=top class="text">Cell:</td> 
                                    <td valign=top><input name="tel" type="text" value="<?php echo stripslashes($cell)?>" style="width:165;height:21"></td>
                                </tr> 	
                                
                                <tr> 
                                    <td valign=top class="text">Region/Provice:</td> 
                                    <td valign=top><input name="tel" type="text" value="<?php echo stripslashes($tel)?>" style="width:165;height:21"></td>
                                </tr> 											 
                                <tr> 
                                    <td valign=top class="text"><span style="color:<?php echo $red3?>">Email:*</span></td> 
                                    <td valign=top><input name="email" type="text" value="<?php echo stripslashes($email)?>" style="width:165;height:21"></td> 
                                </tr> 										
                                
                            <?php }?>
                            
                            
                             <tr> 
                                    <td valign=top class="text"><span style="color:<?php echo $red2?>">Company Name:*</span></td> 
                                    <td valign=top><input name="company" type="text" value="<?php echo stripslashes($company)?>" style="width:165;height:21"></td>
                                </tr>
                                                               
                            <tr> 
                                <td valign=top class="text"><span style="color:<?php echo $red4?>"></span></td> 
                                <td valign=top></td> 
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
                        <td colspan="3">Products</td>
                        
                      </tr>
                     
                      <tr>
                        <td colspan="3">
                        
                        
                        
                        
                        
                        <fieldset>
<legend>How may we assist?</legend>

<table border="0">
                        <tr>
                        <td>Quote
                        	<input type="checkbox" id="quote" name="quote"  value="Yes"  tabindex="6"/>
                        </td>
                        <td>Call Back 
                        	<input type="checkbox" id="call_back" name="call_back"  value="Yes"  tabindex="7"/>
                        </td>
                        <td>Information 
                        	<input type="checkbox" id="information" name="information"  value="Yes"  tabindex="8"/>
                        </td>
                      </tr>
                      </table>

                     
                    <label for="cctv">CCTV</label> <input type="checkbox" id="checkcctv" name="checkbranding"  value="Yes"  tabindex="6"/><br />
					<label for="pabx">PABX</label><input type="checkbox" id="checkpabx" name="checkpabx"  value="Yes"  /><br />
					<label for="access">ACCESS CONTROL</label><input type="checkbox" id="checkquery" name="check printed"  value="Yes"  /><br />
                    <label for="copiers">COPIERS</label><input type="checkbox" id="checkcopiers" name="check copiers"  value="Yes"  /><br />                  <label for="query">ROUTERS</label><input type="checkbox" id="checkrouters" name="check routers"  value="Yes"  /><br />
                    
                
                    <label for="training">Training</label><input type="checkbox" id="checktraining" name="check training"  value="Yes"  /><br />
                    <label for="neotel">NEOTEL</label><input type="checkbox" id="checkneotel" name="check neotel"  value="Yes"  /><br />
                    <label for="security">Security Assistance</label><input type="checkbox" id="check security" name="checksecurity"  value="Yes"  tabindex="7" /><br />
					<label for="query">General Query</label><input type="checkbox" id="check general" name="check general"  value="Yes"  /><br />
					


</fieldset>

<fieldset id="reference">
		<legend>Preferred Communication?</legend>
			

	
	
			
					<label for="pabx">Telephone</label><input type="checkbox" id="checkpreferedtel" name="check telephone"  value="Yes"  /><br />
					<label for="security">Email</label><input type="checkbox" id="checkpreferredemail" name="check email"  value="Yes"  tabindex="7" /><br />
					
					
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
                 
                 
                 
                 <td valign="top">
                 
                 Comments<br><br>
                 <textarea name="text" rows="10" cols="18"><?php echo stripslashes($text)?></textarea>
                 <br><br>
                 <input name="send" type="submit" value="Send">&nbsp;&nbsp;  
                                    <input name="rq_reset" type="reset" value="Reset">  
                                    <input type="hidden" value="OK" name="send">       
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

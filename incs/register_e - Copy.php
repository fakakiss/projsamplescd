<?php if(!$_SESSION["sess_id1"]){?>

	<?php if(!($postSuccess==1) && ($played_promo!=1)){?>

		<div class="about-welcome-inner">
        
   			<!--<h1>Register for Web & Content Development Training and Industry Placement.</h1>
    		<p>
        		Complete the form below to Register & apply for your Webkings Training Scholarship. 
                <br> 
                Stand a chance to WIN!!! an amazing trip to Spain, Germany or the USA for Campus Party 2014 in December.
    		</p> 
            
            ol style="list-style: normal;color:#8D8C8C;">
                <li>1. Entrants must be over 21 years of age.</li>
                <li>2. The winner must partake of the prize between the 19th  May 2013 and 29th of May 2013. Therefore entrants must be available to travel during these dates.</li>
                <li>3. The Winner and their partner must have a passport valid for up to 6 months after the 29th of May 2013.</li>
            </ol-->
    
			<form class="form-horizontal" enctype="multipart/form-data" action="index.php?page_ren=36" method="post">

        		<table cellSpacing=0 cellPadding=5 border=0 class="bodytxt" width="700px">
        
        			<tr class="bdtxt">
                    
                    	<td colspan="2" align=right class=bodycopy>
                    
                    		<div align="left">
                    
                    			<div style="padding-bottom:2px" align="center">
                    		
                            		<strong>Register!!! (Fields with an asterisk <span class=formtxt>*</SPAN> are required)</strong>
                            
                        		</div>
	      
								 <?php if(!empty($err_msg))
                                    {
                                        print "<div align=center >";
                                        echo $err_header . $err_msg . $err_footer;
                                        print "</div>";
                                     }
                                 ?>
 
	  	                	</div>
                        
                        </TD>
              		</TR>
                    
                  	<TR>
                    	<TD colspan="2" align=right class=bodycopy>
                            <div align="center">
                                <span class="formtxt">
                                    <strong>
                                        <?php echo $ss1;?>
                                    </strong>
                                </span>
                            </div>
                    </TD>
                  </TR>

                    </table>


           
                
                
                <dl class="pair3070" id="edit-firstname-wrapper">
                    <dt>
                        <label for="edit-firstname"> 
                        <span class="formtxt">*</span><span style="color:<?php echo $red_firstname?>">First name:</span> 
                        </label>
                    </dt>
        
                    <dd> 
                        <input type="text" id="edit-firstname" name="firstname" value="<?php echo stripslashes($firstname)?>" size="60" maxlength="60" class="textField" />
                    </dd>
				</dl>


        
                  
                  
              <dl class="pair3070" id="edit-lastname-wrapper">
	<dt>
 		<label for="edit-lastname"><span class="formtxt">*</span><span style="color:<?php echo $red_surname?>">Last Name:</span> </label>
	</dt>
	<dd> 
		<input type="text" id="edit-lastname" name="surname" value="<?php echo stripslashes($surname)?>" size="60" maxlength="60" class="textField" />
	</dd>
</dl>    
				  
				  
                  


                  

                          







				<dl class="pair3070" id="edit-firstname-wrapper">
                    <dt>
                        <label for="edit-firstname"> 
                       <span class="formtxt">*</span><span style="color:<?php echo $red_cell?>">Contact No.:</span>
                        </label>
                    </dt>
        
                    <dd> 
                        <input type="text" id="edit-firstname" name="cell" value="<?php echo stripslashes($cell)?>" size="60" maxlength="60" class="textField" />
                    </dd>
				</dl>






            



           
                  
                  
				  <input type="hidden" name="validage" value="?">



            <div class="control-group" style="padding-bottom:5px">
            
            	 <div class="controls">
                <label class="control-label">
                                        	<span class="formtxt">*</span>
                                            <span   style="color:<?php echo $red_gender?>; padding-right:150px"><strong>Gender:</strong></span>
                                        </label>
               
                    <label class="radio inline">
                                        	<input  type="radio" name="gender" value=1 class="form" <?php if($gender==1){echo "checked";}?>   />Male
                    </label>
                    <label class="radio inline">
                                            <input  type="radio" name="gender" value=2 class="form" <?php if($gender==2){echo "checked";}?>  />Female
												</label>

                                    </div>
                </div>


               
               
               
               
               
               
               
               
               
               <dl class="pair3070" id="edit-firstname-wrapper">
                    <dt>
                        <label for="edit-firstname"> 
                        <span class="formtxt">*</span><span style="color:<?php echo $red_dob?>">Date of Birth:</span> 
                        </label>
                    </dt>
        
                    <dd> 
                        <input placeholder="YYYY-MM-DD" type="text" id="edit-firstname" name="dob" value="<?php echo stripslashes($dob)?>" size="60" maxlength="60" class="textField" /><span class="help-inline">(YYYY-MM-DD) eg. (1980-02-02) </span>
                    </dd>
				</dl>
               
               
               
               <div class="control-group" style="padding-bottom:5px">
             <div class="controls">
                    <label class="control-label">
							<span style="color:<?php echo $red_photo?>; padding-right:70px"><strong>Your Picture (<em>Optional</em>)</strong> :</span>
							
					</label>
                   
                    	<input type="hidden" name="MAX_FILE_SIZE" value="1000000">
                    	<input name="userfile" type="file" size="25">                                          
                    </div>
                    
                    
                </div>
               
               



   




<dl class="pair3070" id="edit-state-wrapper">

    <dt>
        <label for="edit-state">
            <span class="formtxt">*</span><span style="color:<?php echo $red_store?>">Location (City or Township):</span>
        </label>
    </dt>


    <dd>
    
    	<select name="location" id="edit-state" class="form-select">
			            						<option value="">Select Location 
                									<?php
                    									$rstlocation=mysql_query($qlocations) or die(mysql_error());
															while($rowlocation=mysql_fetch_array($rstlocation))                                                                
	                    									{
																if($location==$rowlocation['caption']){echo "<option value=\"$rowlocation[caption]\" selected>$rowlocation[caption]";}
																else{echo "<option value=\"$rowlocation[caption]\" >$rowlocation[caption]";}
															} 
                			    					?>
            	 							</select> 
    
    </dd>
    
</dl>
                





            
            
            
         
            
            

                      <!--<div class="control-group">
                      <div class="controls">
                          <label class="control-label"><span class="formtxt">*</span><span style="color:<?php echo $red_email?>">Email:</span></label>
                          
                    	<input type="text" class="contact-input"  name="email" value="<?php echo stripslashes($email)?>">
				  
				   </div>
                   
                  </div> -->
                  
                  
                  
                  <dl class="pair3070" id="edit-email-wrapper">
 					<dt>
                    	<label for="edit-email">                        
                        	<span class="formtxt">*</span><span style="color:<?php echo $red_email?>">Email:</span>
                        </label>
					</dt>
					<dd> 
                    	<input type="text" id="edit-email" name="email" value="<?php echo stripslashes($email)?>" size="20" maxlength="128" class="textField required error" />
					

					</dd>
                 </dl>
                  

             
             
              <div style="padding-bottom:6px">
              
                <label for="edit-zip"> 
                    <span class="formtxt">*</span>
                    <span style="color:<?php echo $red_pass?>; padding-right:82px"><strong>Choose a Password:</strong></span> 
                </label>
            
                <input class="pass"  id="edit-zip" type=password maxLength=16 name="pass1" />

            </div>
            
          
            
            <div style="padding-bottom:6px">
                        <label for="edit-zip"> 
                        <span class="formtxt">*</span>
                    	<span style="color:<?php echo $red_pass?> ; padding-right:90px"><strong>Confirm Password:</strong></span>
                        </label>
                    
                        <input id="edit-zip"  type=password maxLength=16 name="pass2" />
                        
                  </div>
                 
                 
                 
               
               
               
               
               
                 
                    
                 
                 
                 
                 <div class="control-group" style="padding-bottom:5px">
            	<div class="controls">
                <label class="control-label">*<span style="color:<?php echo $red_validpass?>"><strong>Are you Passionate about Internet Technologies and Want to be a part of our WEB Projects?</strong>:</span></label>

                
                        <label class="radio inline">
                            <input type="radio" name="validpass" value="yes" class="form" <?php if($validpass=="yes"){echo "checked";}?>>  Yes
                        </label>
                    <label class="radio inline">
                         <input type="radio" name="validpass" value="no"  class="form" <?php if($validpass=="no")  {echo "checked";}?>> No
                    </label>
                                                </span>           

                    </div>

                  </div>
                 
                 
                 
                 
                 
                 
                 
                 
                 <div style="padding-bottom:5px">
                  
                  
               
                <strong style="color: #F00"> I am Registering for the "100 Semi-Sponsored Students" project (12 months HTML5/CSS3 Web Training & Placement).</strong> 
                 
                 <input style="border-style:solid; border-color:#e1226d; border-width:1px;" type="radio" id="checkquery" name="ppl" <?php if($ppl==1){echo "checked";}?>  value=1 /><?php echo $err_msga;?>
                                       
                   
                
                
                     </div>
                     
                     
                     
                   
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 <div style="padding-bottom:5px">
                  
                  
               
                <strong style="color: #090">I have CODING experience: Registering for the "TRAINER of TRAINER" project (4 months Intensive Web Dev Training).</strong> 
                 
                 <input style="border-style:solid; border-color:#e1226d; border-width:1px;" type="radio" id="checkquery" name="ppl" <?php if($ppl==2){echo "checked";}?>  value=2 /><?php echo $err_msga;?>
                                       
                   
                
                
                     </div>
                     
                     
                     
                 
                     
                     
                 <div style="padding-bottom:5px">
                  
                  
               
                	<strong style="color: #FC0"> I am a Web Dev/Content/Film Professional: I want to Volunteer time for Training at a Center or as Resource Person.</strong> 
                 
                 <input style="border-style:solid; border-color:#e1226d; border-width:1px;" type="radio" id="checkquery" name="ppl" <?php if($ppl==4){echo "checked";}?>  value=4 /><?php echo $err_msga;?>
                                       
                   
                
                
                     </div>
                 
                 
                 
                 
                 
                 
                 
                     <div style="padding-bottom:5px">
                  
                  
               
                <strong style="color: #F69"> I am under 16: I am  Registering for the "KIDS 4 CODING" Project.</strong> 
                 
                 <input style="border-style:solid; border-color:#e1226d; border-width:1px;" type="radio" id="checkquery" name="ppl" <?php if($ppl==3){echo "checked";}?>  value=3 /><?php echo $err_msga;?>
                                       
                   
                
                
                     </div>
                 
                 
                 
                 
                  
                  <div style="padding-bottom:5px">
                  
                  
               
                <strong> I would like to receive Webkings's weekly newsletter for all the latest events, courses, products &amp; competitions.</strong> 
                 
                 <input style="border-style:solid; border-color:#e1226d; border-width:1px;" type="checkbox" id="checkquery" name="acceptedn" <?php if($acceptedn==1){echo "checked";}?>  value=1 /><?php echo $err_msga;?>
                                       
                   
                
                
                     </div>
                     
                     
                     <div style="padding-bottom:5px">

                    
                          <label class="pair3070" id="edit-email-wrapper">
                            <span class="formtxt">*</span>
                                <span style="color:<?php echo $red_acceptedt?>">
                        <strong>I have read and understand the <a  target="new" class="ajax" href="index.php?page_ren=76">Terms &amp; Conditions</a>.</strong>
                    </span> </label>

                
                <span style="padding-left:0px">
<input style="border-style:solid; border-color:#e1226d; border-width:1px;" type="checkbox" id="checkquery" name="acceptedt" <?php if($acceptedt==1){echo "checked";}?>  value=1 /><?php echo $err_msga;?></span>
                         
                     

				 </div>
                 
                 
                 
        <div class="form-actions" align="right">
        
            <input type="submit" id="edit-submit" name="op" value="Register" class="form-submit" />
            <input type="hidden" value="OK" name="send">
            <!--<button type="submit" class="btn btn-facebook">Apply for Your Training Grant</button> -->
    
        </div>

	</form>
  
<?php }?>
  
  
    <script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
    <script type="text/javascript">
        $(".ajax").colorbox({width: 600,height: 800});
    </script>

	</div>
	<?php  }?>
	
    

<?php if($postSuccess==1){?>
		<?php 
		//require_once 'swift/lib/swift_required.php';

/**
 * @param $toEmail
 * @param $toName
 * @param $fromEmail
 * @param $fromName
 * @return int
 */
function send_invite($toEmail,$toName,$fromEmail,$fromName)
{

    // Create the Transport
    $transport = Swift_SmtpTransport::newInstance('mail.webkings.co.za', 25)
        ->setUsername('invite@webkings.co.za')
        ->setPassword('0lujc1na@');

    //create the message
    $message = Swift_Message::newInstance();
    //create the mailer
    $mailer = Swift_Mailer::newInstance($transport);

    $subject 	= "WIN A Web Development Training Scholarships!";

    // get the body
    $body = get_body($toName,$message,$subject,$fromName);

    //text body
    $textBody ="Hi {$toName}
Welcome to the Webkings Web Development/New Media Training & Placement Project!

You have completed the frist Step to Earning a 10 month Training grant!
You can earn more entries by completing the Stages below. 

$1,000.00 scholarships and Grants !!!

Opportunities to Attend the Coolest Events 

Click here for Step 2 http://www.webkings.co.za -> Request for your graning interview and set Date!
Click here for Step 3 http://www.webkings.co.za -> Pay your Registration Fee
Click here for Step 4 http://www.webkings.co.za -> Pay your first installment choose a start date.

 ";

    // set FROM: details
    $message->setFrom(array($fromEmail => "WebKings Web Development Training & Placement Project" ));
    // set Sender
    $message->setSender('info@webkings.co.za');

    // set subject
    $message->setSubject($subject);

    // Set the To addresses with an associative array
    $message->setTo(array( $toEmail => $toName ) );

    // set the html body
    $message->setBody($body, "text/html");

    // add plain text body for email clients that dont support html
    $message->addPart($textBody, 'text/plain');


    $result = $mailer->send($message);
	return $result;
}

/**
 * @return string
 */
function get_body($name,$mail,$subject,$fromName)
{
    ob_start();

    include "swift/mail/welcome.php";
    $body = ob_get_contents();
    ob_end_clean();
    return $body;
}
//send_invite($email,$firstname,"info@webkings.co.za","WebKings Training Project");
		?>
	<?php include('incs/thanks.php')?>
<?php }?>





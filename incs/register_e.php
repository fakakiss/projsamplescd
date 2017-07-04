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
    
			<form class="form-horizontal" enctype="multipart/form-data" action="index.php?page_ren=36?ps=1" method="post">

        		<table cellSpacing=0 cellPadding=5 border=0 class="bodytxt" width="700px">
        
        			<tr class="bdtxt">
                    
                    	<td colspan="2" align=right class=bodycopy>
                    
                    		<div align="left">
                    
                    			<div style="padding-bottom:2px" align="center">
                    		
                            		<strong><em>OR</em> Register Now !!! Students - TOT - Resource - Volunteers (Fields with an asterisk <span class=formtxt>*</SPAN> are required)</strong>
                            
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


           
                
                
                
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
    		
    	<span class="formtxt">*</span>
        <strong>
        <span style="color:<?php echo $red_firstname?>">First name:</span></strong>
        <span style="color:<?php echo $red_firstname?>"></span>
    
    </td>
    <td>
    
    	<input type="text"  name="firstname" value="<?php echo stripslashes($firstname)?>" size="60" maxlength="60" class="textField" />
    
    </td>
  </tr>
  
  
  <tr>
    <td>
    
    	<span class="formtxt">*</span>
    	<strong>
        <span style="color:<?php echo $red_surname?>">Last Name:</span>
        </strong>
        <span style="color:<?php echo $red_surname?>"></span>
    
    </td>
    <td>
    
    	<input type="text"  name="surname" value="<?php echo stripslashes($surname)?>" size="60" maxlength="60" class="textField" />
        
    </td>
  </tr>
  
  
  
  <tr>
    <td>
    
    	<span class="formtxt">*</span>
        <span style="color:<?php echo $red_cell?>"><strong>Contact No.</strong>:</span>
    
    </td>
    <td>
    
    	<input type="text" id="edit-firstname" name="cell" value="<?php echo stripslashes($cell)?>" size="60" maxlength="60" class="textField" />
    
    </td>
  </tr>
  
  <tr>
    <td><span   style="color:<?php echo $red_gender?>; padding-right:150px">
        <strong>Gender:</strong>
        </span>
    
    </td>
    <td>
    
    
    	<input  type="radio" name="gender" value=1 class="form" <?php if($gender==1){echo "checked";}?>   />Male
                    
                  
        <input  type="radio" name="gender" value=2 class="form" <?php if($gender==2){echo "checked";}?>  />Female
												
    
    </td>
  </tr>
  
  
  <tr>
    <td>
    
    	<span class="formtxt"></span>
        <span style="color:<?php echo $red_dob?>"><strong>Date of Birth(<em>Optional</em>):</strong></span> 
    
    </td>
    <td>
    
    	<input placeholder="YYYY-MM-DD" type="text" id="edit-firstname" name="dob" value="<?php echo stripslashes($dob)?>" size="60" maxlength="60" class="textField" />
        <span class="help-inline">eg. (1980-02-02) </span>
    
    </td>
  </tr>
  
  
  <tr>
    <td>
    	
        
		<span style="color:<?php echo $red_photo?>; padding-right:70px">
        <strong>Your Picture (<em>Optional</em>)</strong> :
        </span>
							
					
    
    
    </td>
    <td>
             
        <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
        <input name="userfile" type="file" size="25">
    
    </td>
  </tr>
  
  <tr>
    <td>
    <span class="formtxt">*</span> 
    <span style="color:<?php echo $red_store?>">
    <strong>Location (City or Township)</strong>:
    </span>
    </td>
    
    
    <td>
    	<select name="location" id="edit-state" class="form-select">
            <option value="">Select Location 
                <?php
                    $rstlocation=mysqli_query($conn,$qlocations) or die(mysqli_error($conn));
                        while($rowlocation=mysqli_fetch_array($rstlocation))                                                                
                        {
                            if($location==$rowlocation['caption']){echo "<option value=\"$rowlocation[caption]\" selected>$rowlocation[caption]";}
                            else{echo "<option value=\"$rowlocation[caption]\" >$rowlocation[caption]";}
                        } 
                ?>
		</select> 
    </td>
  </tr>
  
  <tr>
    <td>
    	<span class="formtxt">*</span> <span style="color:<?php echo $red_email?>"><strong>Email:</strong></span>
        </td>
    <td>
    	<input type="text" id="edit-email" name="email" value="<?php echo stripslashes($email)?>" size="20" maxlength="128" class="textField required error" />
    </td>
  </tr>
  
  
  
  <tr>
    <td>
    
   
                    <span class="formtxt">*</span>
                    <span style="color:<?php echo $red_pass?>; padding-right:82px"><strong>Choose a Password:</strong></span> 
             

    
    </td>
    <td><input class="pass"  id="edit-zip" type=password maxLength=16 name="pass1" /></td>
  </tr>
  
  
  
 <!-- <tr>
    <td>
    
    
                        <span class="formtxt">*</span>
                    	<span style="color:<?php echo $red_pass?> ; padding-right:90px"><strong>Confirm Password:</strong></span>
                       
                    
                        
                 
    
    </td>
    <td><input id="edit-zip"  type=password maxLength=16 name="pass2" /></td>
  </tr> -->
  
  </table>
  
  
  
  
  <table cellSpacing=0 cellPadding=5 border=0 class="bodytxt" width="700px">
  
  <tr>
    <td colspan="2">
    
    <!--<label class="control-label">* <span style="color:<?php echo $red_validpass ?>"><strong>Are you Passionate about Internet Technologies and Want to be a part of our WEB Projects?</strong>:</span></label> -->
    
    <label class="control-label">* <span style="color:<?php echo $red_ppl ?>"><strong><em>Please Select the Section you are interested in.</em></strong>:</span></label>

                
                      <!--  <label class="radio inline">
                        
                            <input type="radio" name="validpass" value="yes" class="form" <?php if($validpass=="yes"){echo "checked";}?>>  Yes
                        </label>
                    <label class="radio inline">
                         <input type="radio" name="validpass" value="no"  class="form" <?php if($validpass=="no")  {echo "checked";}?>> No
                    </label> -->
    
    </td>
    
    
    
  </tr>
  <tr>
    <td width="650px">
    	<span style="color:<?php echo $red_ppl ?> ">
    		<strong style="color: #F00">I am Registering for the "100 Semi-Sponsored" Students (12 months HTML5/CSS3 Web Training & Placement).</strong>
        </span>    	 
        
        </td><td>
        
        <input style="border-style:solid; border-color:#e1226d; border-width:1px;" type="radio" id="checkquery" checked="checked" name="ppl" <?php if($ppl==1){echo "checked";}?>  value=1 /><?php echo $err_msga;?>
    
    </td>
  </tr>
  
  
  
  
  
  <tr>
    <td>
    	<span style="color:<?php echo $red_ppl ?> ">
    	<strong style="color: #03F">I Can't Attend at a Center?: I want to take the 1 year Semi-Sponsored Training & Placement Course Online.</strong> 
         </span>         
           
         </td><td>  
                 <input style="border-style:solid; border-color:#e1226d; border-width:1px;" type="radio" id="checkquery" name="ppl" <?php if($ppl==5){echo "checked";}?>  value=5 /><?php echo $err_msga;?>
    
    </td>
    
  </tr>
  
  
  
  <tr>
    <td>
    <span style="color:<?php echo $red_ppl ?> ">
    <strong style="color: #090">  I have DEV experience: Registering for the "TRAINER of TRAINER" project (5 months Intensive Web Dev Training).</strong> 
    </span> 
              </td><td>   
                 <input style="border-style:solid; border-color:#e1226d; border-width:1px;" type="radio" id="checkquery" name="ppl" <?php if($ppl==2){echo "checked";}?>  value=2 /><?php echo $err_msga;?>
    
    </td>
  </tr>
  
  
   <tr>
    <td >
    <span style="color:<?php echo $red_ppl ?> ">
    <strong style="color: #900"> I Can't Attend at a Center?: I want to take the "TRAINER of TRAINER"  Web Dev Training Course Online (5 Months).</strong> 
    </span> 
               
               </td><td>
                 
                 <input style="border-style:solid; border-color:#e1226d; border-width:1px;" type="radio" id="checkquery" name="ppl" <?php if($ppl==6){echo "checked";}?>  value=6 /><?php echo $err_msga;?>
    
    </td>
  </tr>
  
  
 
  
  
  
  <tr>
    <td>
    <span style="color:<?php echo $red_ppl ?> ">
     <strong style="color: #F69">  I am or My Child/Student Under 16: I am  Registering (My School) for the "KIDS 4 CODING" Project.</strong> 
         </span>         
                 </td><td>
                 
                 <input style="border-style:solid; border-color:#e1226d; border-width:1px;" type="radio" id="checkquery" name="ppl" <?php if($ppl==3){echo "checked";}?>  value=3 /><?php echo $err_msga;?>
    
    </td>
   
  </tr>
  
  
  
   <tr>
    <td>
    <span style="color:<?php echo $red_ppl ?> ">
    	<strong style="color: #FC0"> I am a Web Dev/Content/Film Professional: I want to Volunteer time to Train at a Center or as a Resource Person.</strong> 
           </span>       
                 </td><td>
                 
                 <input style="border-style:solid; border-color:#e1226d; border-width:1px;" type="radio" id="checkquery" name="ppl" <?php if($ppl==4){echo "checked";}?>  value=4 /><?php echo $err_msga;?>
    
    </td>
    
  </tr>
  
  
  
  
  <tr>
    <td >
    	
        <strong> <em> I would like to receive SMS's, newsletters & Calls on all the latest Events, Courses, Products &amp; Competitions.</em></strong> 
                
                </td><td>
                 
                 <input style="border-style:solid; border-color:#e1226d; border-width:1px;" type="checkbox" checked="checked" id="checkquery" name="acceptedn" <?php if($acceptedn==1){echo "checked";}?>  value=1 /><?php echo $err_msga;?>
        
    </td>
  </tr>
  
  
  
  <tr>
    <td >
    	
        
        
					<span class="formtxt">*</span>
                  	<span style="color:<?php echo $red_acceptedt?>">
                    
                    	<strong><em>I have read and understand the <a  target="new" class="ajax" href="index.php?page_ren=76">Terms &amp; Conditions</a>.</em></strong>
                    </span>
                    
                    </td><td>

                
                <span style="padding-left:0px">
				<input style="border-style:solid; border-color:#e1226d; border-width:1px;" type="checkbox" checked="checked" id="checkquery" name="acceptedt" <?php if($acceptedt==1){echo "checked";}?>  value=1 /><?php echo $err_msga;?>
				</span>
        
    </td>
  </tr>
  
  
  <tr>
    <td colspan="2">
    	
        
        <div class="form-actions" align="right">
        
            <input type="submit" id="edit-submit" name="op" value="Register" class="form-submit" />
            <input type="hidden" value="OK" name="send">
            <!--<button type="submit" class="btn btn-facebook">Apply for Your Training Grant</button> -->
    
        </div>
        
        
    </td>
  </tr>
</table>

                 
                 
                 
        

				</form>
  
			
  
  
		<script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
        <script type="text/javascript">
            $(".ajax").colorbox({width: 600,height: 800});
        </script>

	</div>
    
    <?php }?>
    
<?php  }?>
	
    

<?php if($postSuccess==1){?>

	<?php 
       
		
		//require_once 'PHPMailer-master/PHPMailerAutoload.php';
		
		
		$subject_w 		="WebKings Training & Placement - Acknowledgement of Registration & Application for Scholarship Grant.";
		
		$textBody_w 	="Hi {$name}
				
				Welcome to the Webkings Web & Mobile Development/New Media & Film Training & Placement Project!
				
				Thank you applying for the 1 year Semi-Sponsored Training and Placement Project in Web & Mobile Development.
				
				You have almost successfully completed Step 1 of wining the scholarship and other benefits that come with it.
				
				Please Click on the Link Below to Activate your Account and Confirm you Email Address.
								
				The Next Step is to take a simple interview with one of our scholarship consultants or via email by answering the questions below to the best of your knowledge, after proceed to pay your confirmation of Enrollment and Registration Fee if selected as part of the 100.
				We will call you within 5 days of you receiving this email.
				
				Attached is a letter acknowledging that we have received your registration and Training grant application, Please Download and read carefully through it.
				
				You have completed the 1st Step to Earning a 10 month Training Scholarship grant!
				Win a Laptop, Phablet , Tablet or Smart Phone in at our Lunch in {$location}
				You can earn more entries by completing the Stages below. 
				
				$1,000.00 Scholarships and Grants !!!
				
				Opportunities to Attend the Coolest Events 
				
 				If below 21 years of we advise you seek help from parents or guardians as they have to commit to helping you meet your part the monthly training payments if you are offered the Scholarship Grant.
				
				Webkings E-Interview Questions.
				
				1.	Please tell us more about yourself and why you want to learn to make Cool websites and Apps.
				
				2.	Do you know anything about Web/mobile Development and creating online content?
				
				3.	Do you love smart, phones tablets, computer games and want to learn to write Apps and content?
				
				4.	Are you interested to learn graphic design, 3D animation, music production, acting or Film Production? Tell us what you love to learn?
				
				5.	Are you interested in Travelling for youth conferences and exchanged programs in Ghana, South Africa, Europe and the Americas?
				
				6.	Provide us with you Contact numbers & Emails, also that a Parent or Guardian who will support you on this journey of learning.
				
				Click here for Step 2 http://www.webkings.co.za -> Answer Your Grant Interview Questions! - 5 Entries
				Click here for Step 3 http://www.webkings.co.za -> Pay your Registration Fee - 10 Entries
				Click here for Step 4 http://www.webkings.co.za -> Pay your at least first installment and choose a start date. - 10 Entries
				
				The WebKings Scholarship Board.
				
				Good Luck!
				
				Webkingstechnologies@gmail.com or learn@webkings.co
				
				www.webkings.co.za
				
				GH Tel: 00233 23 666 5486 or 00233 249 39 47 20
				
				 ";
				 
				 
				 
				//$email = new PHPMailer();
				//$email->From      = 'learn@webkings.co';
				//$email->FromName  = 'Webkings African Youth Scholarship Fund';
				//$email->Subject   = 'WebKings Training & Placement - Acknowledgement of Registration & Application for Scholarship Grant.';
				//$email->Body      = $textBody_w;
				//$email->AddAddress( $email );
				
				//$file_to_attach = '../uploads/pdfs';
				
				//$email->AddAttachment( $file_to_attach , '1b-Acknowlegement_of_Registration_and_Grant_Application-Ghana-SA.pdf' );
				
				//return $email->Send();
				
				
				
				
				 
				 		
				//mail("$email","$subject_w","$textBody_w","From: learn@webkings.co\r\nReply-to:learn@webkings.co");
				
				
				
				// Send Email to Webkings of student details
				mail("webkingstechnologies@gmail.com","Webkings Student Application","$to_send","From: $email\r\nReply-to:$email");
		
		
		

		 require_once 'swift/lib/swift_required.php';
    
        /**
         * @param $toEmail
         * @param $toName
         * @param $fromEmail
         * @param $fromName
         * @return int
         */
		 $fromEmail = "learn@webkings.co";
		 $fromName  = "Webkings Training & Placement Project";
         
    	function send_invite($email,$name,$fromEmail,$fromName)
			{
			
				// Create the Transport
				$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465,'sslv3')
					->setUsername('learn@webkings.co')
					->setPassword('#@!webKINGS9546');
			
				//create the message
				$message = Swift_Message::newInstance();
				//create the mailer
				$mailer = Swift_Mailer::newInstance($transport);
			
				$subject 	= "WebKings 1 Year Semi Sponsored Web Development Training & Placement Scholarships!";
			
				// get the body
				$body = get_body($name,$message,$subject,$fromName);
			
				//text body
				$textBody ="Hi {$toName}
				
				Welcome to the Webkings Web Development/New Media Training & Placement Project!
				
				You have completed the frist Step to Earning a 10 month Training Scholarship grant!
				You can earn more entries by completing the Stages below. 
				
				$1,000.00 scholarships and Grants !!!
				
				Opportunities to Attend the Coolest Events 
				
				Click here for Step 2 http://www.webkings.co.za -> Answer Your Grant Interview Questions! - 5 Entries
				Click here for Step 3 http://www.webkings.co.za -> Pay your Registration Fee - 10 Entries
				Click here for Step 4 http://www.webkings.co.za -> Pay your first installment choose a start date. - 10 Entries
				
				 ";
			
				// set FROM: details
				$message->setFrom(array($fromEmail => "WebKings Web & Mobile Development Training & Placement Project" ));
				// set Sender
				$message->setSender('learn@webkings.co');
			
				// set subject
				$message->setSubject($subject);
			
				// Set the To addresses with an associative array
				$message->setTo(array( $email => $name ) );
			
				// set the html body
				$message->setBody($body, "text/html");
			
				// add plain text body for email clients that dont support html
				$message->addPart($textBody, 'text/plain');
				
				//$message->attach(Swift_Attachment::fromPath('../uploads/pdfs/1b-Acknowlegement_of_Registration_and_Grant_Application-Ghana-SA.pdf'));
			
			
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
			
			send_invite($email,$name,"webkingstechnologies@gmail.com","WebKings Training & Placement Project");
        ?>
        
	<?php include('incs/thanks.php')?>
    
<?php }?>





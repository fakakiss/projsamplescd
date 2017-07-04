<?php if(!$_SESSION["sess_id1"]){?>

	<?php if(!($postSuccess==1) && ($played_promo!=1)){?>

		<div class="about-welcome-inner">
    
			<form class="form-horizontal" enctype="multipart/form-data" action="index.php?page_ren=101<?php if($project_type==10) {echo "&type=10";} ?>" method="post">

        		<table cellSpacing=0 cellPadding=5 border=0 class="bodytxt" width="700px">        
        			<tr class="bdtxt">                    
                    	<td colspan="2" align=right class=bodycopy>                  
                    		<div align="left">                    
                    			<div style="padding-bottom:2px" align="center">                    		
                            		<strong>
                                    	OR Register Now !!! Via Email : SIMPLE and FAST>>>
                                        (Fields with an asterisk <span class=formtxt>*</SPAN> are required)                                        
                                    </strong>                           
                        		</div>
	      
								 <?php 								 
								 	if(!empty($err_msg))
										{
											print "<div align=center >";
												echo $err_header . $err_msg . $err_footer;
											print "</div>";
										 }
                                 ?> 
	  	                	</div> 
                            
                            
                            
                             <?php

                            	if($project_type==10) //type 10 --->>> Applying for Shared Office
										{
											print "<div align=center >";
												echo "Apply for Shared Working Space @ WebKings Oasis Centre<br><br>
												
												<strong>Registration Fee: 35 GHS</strong><br><br>
												
												Monthly Fee: 99 GHS Per Person/Per Month - [200GHS for 3 Month Upfront Payment]<br><br>
												Groups of 2: 155 GHS Per Month<br><br>
												
												Groups of 3: 200 GHS Per Month<br><br>
			
												Pay By MTN Money Number: 0249 39 47 20<br><br>
			
												Or At the Office @ Mataheko Club Conner Near Armah Memorial Health Care Clinic, on the Russia Dansoman Road, Right Before Flamingo.<br><br>
			
												There is Space for Only 20 People/Groups with 15 Left
												
												
												";
											print "</div>";
											//echo  "<br>$project_type";
										 }
							 ?>			 
                            
                                                   
                        </td>
              		</tr>
				</table>


				<table width="100%" border="0" cellspacing="0" cellpadding="0">
                
  					<tr>
    					<td>    		
    						<span class="formtxt">*</span><strong><span style="color:<?php echo $red_name?>"> Name:</span></strong>
        					<span style="color:<?php echo $red_name?>"></span>    
    					</td>
    					<td>   
    						<input type="text"  name="name" value="<?php echo stripslashes($name)?>" size="60" maxlength="60" class="textField" />
    					</td>
  					</tr>
  
					<tr>
                        <td>                        
                            <span class="formtxt">*</span>
                            <span style="color:<?php echo $red_cell?>"><strong>Contact No.</strong>:</span>                        
                        </td>
                        <td>                      
                            <input type="text" id="edit-firstname" name="cell" value="<?php echo stripslashes($cell)?>" size="60" maxlength="60" class="textField" />  
                            
                           <!--   <link rel="stylesheet" href="cellp/build/css/intlTelInput.css">
                          <link rel="stylesheet" href="cellp/build/css/demo.css"> 
                         
                            <input name="cell" value="<?php echo stripslashes($cell)?>" id="mobile-number" type="tel" placeholder="">-->
                         
                        
                            <!-- Load jQuery from CDN so can run demo immediately 
                            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                            <script src="cellp/build/js/intlTelInput.js"></script>
                            <script>
                              $("#mobile-number").intlTelInput();
                            </script>-->
                                                 
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
                            <span style="color:<?php echo $red_pass?>; padding-right:82px"><strong>Password:</strong></span> 
    					</td>
    					<td><input class="pass"  id="edit-zip" type=password maxLength=16 name="pass1" /></td>
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
                                <option   value="Accra [Ghana]">Accra [Ghana]
                                    <?php
                                        $rstlocation=mysqli_query($conn,$qlocations) or die(mysqli_error($conn));
										while($rowlocation=mysqli_fetch_array($rstlocation))
											{
												if($location==$rowlocation['caption'])
													{echo "<option value=\"$rowlocation[caption]\" selected>$rowlocation[caption]";}
												else
													{echo "<option value=\"$rowlocation[caption]\" >$rowlocation[caption]";}
											} 
                                    ?>
            	 			</select> 
    					</td>
  					</tr>
                    
				</table>

				<table cellSpacing=0 cellPadding=5 border=0 class="bodytxt" width="700px">
  					<tr>
    					<td >
    	
        					<strong> 
                            	<em>
                                	I would like to receive SMS's, Newsletters & Calls on all the latest Events, Courses, Products &amp; Competitions.
                                </em>
                            </strong> 
                
                </td>
                <td>
                 
                 <input style="border-style:solid; border-color:#e1226d; border-width:1px;" type="checkbox" id="checkquery" checked="checked" name="acceptedn" <?php if($acceptedn==1){echo "checked";}?>  value=1 /><?php echo $err_msga;?>
        
    			</td>
  			</tr>
  
  
  
  			<tr>
    			<td>
					<span class="formtxt">*</span>
                  	<span style="color:<?php echo $red_acceptedt?>">
                    
                    	<strong><em>I have read and understand the <a  target="new" class="ajax" href="index.php?page_ren=76">Terms &amp; Conditions</a>.</em></strong>
                    </span>                   
                </td>
                <td>                
                	<span style="padding-left:0px">
						<input style="border-style:solid; border-color:#e1226d; border-width:1px;" type="checkbox" id="checkquery" checked="checked" name="acceptedt" <?php if($acceptedt==1){echo "checked";}?>  value=1 /><?php echo $err_msga;?>
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
       
	   
	   if(!isset($project_type))
		{
	   
		
		//require_once 'PHPMailer-master/PHPMailerAutoload.php';
		
		
		$subject_w 		="WebKings Training & Placement - Acknowledgement of Registration & Application for Scholarship Grant.";
		
		$textBody_w 	="Hi {$name}
				
				Welcome to the Webkings Web & Mobile Development/New Media & Film Training & Placement Project!
				
				Thank you for applying for the 1 year Semi-Sponsored Training and Placement Project in Web & Mobile Development or our 6 Month TOT Project.
				
				You have almost successfully completed Step 1 of obtaining the scholarship and other benefits that come with it.
				
				Please Click on the Link Below to Activate your Account and Confirm your Email Address.
				
				http://www.webkings.co.za/index.php?cnfrm=1&studentid={id}
								
				The Next Step is to take a simple interview with one of our scholarship consultants or via email by answering the questions below to the best of your knowledge, after proceed to pay your confirmation of Enrollment and Registration Fee if selected as part of the 100.
				We will call you within 5 days of you receiving this email.
				
				Attached is a letter acknowledging that we have received your registration and Training grant application, Please Download and read carefully through it.
				
				You have completed the 1st Step to Earning a 10 month Training Scholarship grant!
				
				Win a Laptop, Phablet , Tablet or Smart Phone at our Lunch.
				You can earn more entries by completing the Stages below. 
				
				$1,000.00 Scholarships and Grants !!!
				
				Opportunities to Attend the Coolest Events 
				
 				If below 21 years of we advise you seek help from parents or guardians as they have to commit to helping you meet your part the monthly training payments if you are offered the Scholarship Grant.
				
				Webkings E-Interview Questions.
				
				1.	Please tell us more about yourself and why you want to learn to make Cool websites and Apps.
				
				2.	Do you know anything about Web/mobile Development and creating online content?
				
				3.	Do you love smart, phones tablets, computer games and want to learn to write Apps and content?
				
				4.	Are you interested in learning graphic design, 3D animation, music production, acting or Film Production? Tell us what you love to learn?
				
				5.	Are you interested in Travelling for youth conferences and exchanged programs in Ghana, South Africa, Europe and the Americas?
				
				6.	Provide us with you Contact numbers & Emails, also that a Parent or Guardian who will support you on this journey of learning.
				
				Click here for Step 2 http://www.webkings.co.za -> Answer Your Grant Interview Questions! - 5 Entries
				Click here for Step 3 http://www.webkings.co.za -> Pay your Registration Fee - 10 Entries
				Click here for Step 4 http://www.webkings.co.za -> Pay at least first 3 months installment and choose a Start Date. - 10 Entries
				
				The WebKings Scholarship Board.
				
				Good Luck!
				
				learn@webkings.co
				
				www.webkings.co.za
				
				GH Tel: +233 23 666 5486 or 00233 +249 39 47 20
				
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
				mail("learn@webkings.co","Webkings Student Application","$student_info","From: $email\r\nReply-to:$email");
		
		
		

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
					->setUsername('learn@webkin.gs')
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
			
			send_invite($email,$name,"learn@webkings.co","WebKings Training & Placement Project");
			
		}
			
			
        ?>
        
	<?php 
	
	 if(!isset($project_type))
		{
			include('incs/thanks.php');
		}
		
	if(isset($project_type))
		{
			//include('incs/thanks.php');
			echo "
			
			Thanks for Your Registration to be part of the Webkings Shared Working Space. 
			We will Call you to Help you through the Process.<br>
			<br>
			Registration Fee: 35 GHS<br>
			Monthly Fee: 99 GHS Per Person/Per Month - [200GHS for 3 Month Upfront Payment]<br><br>
			Groups of 3: 200 GHS Per Month<br><br>
			
			Pay By MTN Money Number: 0249 39 47 20<br><br>
			
			Or At the Office @ Mataheko Club Conner Near Armah Memorial Health Care Clinic, on the Russia Dansoman Road, Right Before Flamingo.<br><br>
			
			There is Space for Only 20 People/Groups with 15 Left
			
			";
		}	
		
	
	?>
    
<?php }?>





<?php 
		//require		('../lib_files/account_lib_files/sessions_members.inc.php');
		//require     ('../lib_files/user_details.php');
		//require     ('../lib_files/settings.inc.php');
		//require     ('../lib_files/public_inc_fns/public_output_fns.php');
		//require		('../lib_files/validate_fns.php');
?>

<?php //include('../lib_files/public_inc_fns/head_code1.inc.php')?>

<?php

	$log           	=trim($_REQUEST['xl1']);
	
	$eml1  			=trim($_REQUEST["eml1"]);
	$eml2  			=trim($_REQUEST["eml2"]);
	$eml3  			=trim($_REQUEST["eml3"]);
	
	
	$nam1  			=trim($_REQUEST["nam1"]);
	$nam2  			=trim($_REQUEST["nam2"]);
	$nam3  			=trim($_REQUEST["nam3"]);
	
    $acceptedt  		=trim($_REQUEST["acceptedt"]);
	
    $err_msg = "";
    $err_header = "<p class=\"error\">";
    $err_header .= "<strong>Please take note of the following:</strong><ul class=\"error\">";
    $err_footer = "</ul></p>";
  
  	if(isset($_REQUEST["send"])&&(($_REQUEST["send"])=='OK'))	
	
		{
		if(!is_filled($nam1) || !is_filled($nam2) || !is_filled($nam3)) {
			$err_msg 	.= "<div class=\"error\">Please enter 3 friend's names & valid email addresses to continue</span>";$red_nam1="red";$red_eml1="red";$red_nam2="red";$red_eml2="red";$red_nam3="red";$red_eml3="red";
		
		} elseif($eml1 == $eml2 || $eml1 == $eml3 || $eml2==$eml3) {
			$err_msg 	.= "<div class=\"error\">Please enter three unique email addresses</span>";$red_nam1="red";$red_eml1="red";$red_nam2="red";$red_eml2="red";$red_nam3="red";$red_eml3="red";
		
		} else {
		$rexSafety = "/[\^<,\"@\/\{\}\(\)\*\$%\?=>:\|;#]+/i";

			if(!is_filled($nam1))       		{$err_msg 	.= "<div class=\"error\">Name Required</span>";$red_nam1="red";}
			else                    		{$nam1 	 = ucwords($nam1);}	

			 if (preg_match($rexSafety, $nam1)) {$err_msg 	.= "<div class=\"error\">Please provide a valid name</span>";$red_nam1="red";}
			 
            if(!is_filled($eml1))          	{$err_msg 	.= "<div class=\"error\">Email Field is Empty</span>";$red_eml1="red";}
			elseif(!is_valid_email($eml1)) 	{$err_msg 	.= "<div class=\"error\">Email Address Invalid.</span>";$red_eml1="red";}
			elseif(eml_has_played($eml1)==1)	{$err_msg .= "<li class=\"error\">The email you selected is already part of our system. Please Choose another one.</li>";$red_eml1="#ff0000";}
			else                            {$eml1 	 = strtolower(trim($eml1));}
			
			
			
			
			if(!is_filled($nam2))       	{$err_msg 	.= "<div class=\"error\">Name Required</span>";$red_nam2="red";}
			else                    		{$nam2 	 = ucwords($nam2);}
			if (preg_match($rexSafety, $nam2)) {$err_msg 	.= "<div class=\"error\">Please provide a valid name</span>";$red_nam2="red";}
			
			if(!is_filled($eml2))          	{$err_msg 	.= "<div class=\"error\">Email Field is Empty</span>";$red_eml2="red";}
			elseif(!is_valid_email($eml2)) 	{$err_msg 	.= "<div class=\"error\">Email Address Invalid.</span>";$red_eml2="red";}
			elseif(eml_has_played($eml2)==1)	{$err_msg .= "<li class=\"error\">The email you selected is already part of our system. Please Choose another one.</li>";$red_eml2="#ff0000";}
			else                            {$eml2 	 = strtolower(trim($eml2));}
			
			
			if(!is_filled($nam3))       	{$err_msg 	.= "<div class=\"error\">Name Required</span>";$red_nam3="red";}
			else                    		{$nam3 	 = ucwords($nam3);}
			if (preg_match($rexSafety, $nam3)) {$err_msg 	.= "<div class=\"error\">Please provide a valid name</span>";$red_nam3="red";}
			
			if(!is_filled($eml3))          	{$err_msg 	.= "<div class=\"error\">Email Field is Empty</span>";$red_eml3="red";}
			elseif(!is_valid_email($eml3)) 	{$err_msg 	.= "<div class=\"error\">Email Address Invalid.</span>";$red_eml3="red";}
			elseif(eml_has_played($eml3)==1){$err_msg .= "<li class=\"error\">The email you selected is already part of our system. Please Choose another one.</li>";$red_eml3="#ff0000";}
			else                            {$eml3 	 = strtolower(trim($eml3));}
		}
			
			if($acceptedt != 1)       		{$err_msg 	.= "<div class=\"error\">You must accept the Terms and Conditions</span>";$red_acceptedt="red";}
				
			
			
			
			

			//if ($err_msg=="") {include('incs/register_img_upload1.inc.php');}
			
			
				
					
		if ($err_msg=="")
	
			{
				//Generate a RANDOM MD5 Hash for a password
				//$random_password=md5(uniqid(rand()));
				
				//Take the first 8 digits and use them as the password we intend to email the user
				//$emailpassword=substr($random_password, 0, 8);
				
				//Encrypt $emailpassword in MD5 format for the database
				//$newpassword = md5($emailpassword);
				
					// Make a safe query
				//$query = sprintf("UPDATE `feedback_form1` SET `password` = '$newpassword ' 
									  //WHERE `email` = '$email'",
				//mysql_real_escape_string($newpassword));				
				//mysql_query($query)or die('Could not update members: ' . mysql_error());
				
//Email out the infromation

$just_id 	=$row_membername['id'];

$from_email	=$row_membername['email'];
$subject 	= $row_membername['firstname']." ".$row_membername['surname']." invites you to enter the DionWired Blue Carpet Competition"; 

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'From: '.$row_membername["firstname"].' '.$row_membername["surname"].' <'.$from_email.'>' . "\r\n";





$message1 	= "
<a href='http://www.bluecarpet.co.za/index.php?tk=$just_id' border='0'><img src='http://www.bluecarpet.co.za/images/Mailer-image.jpg'></a>
"; 

$message2 	= "
<a href='http://www.bluecarpet.co.za/index.php?tk=$just_id' border='0'><img src='http://www.bluecarpet.co.za/images/Mailer-image.jpg'></a>
"; 

$message3 	= "
<a href='http://www.bluecarpet.co.za/index.php?tk=$just_id' border='0'><img src='http://www.bluecarpet.co.za/images/Mailer-image.jpg'></a>
"; 

if ($week3==0) 
				{
				
					/*//if(!mail($email, $subject, $message,  "FROM: $site_name <$site_email>"))
						//{ die ("Sending Email Failed, Please Contact Site Admin! ($site_email)"); }
							
					if(!mail($eml1, $subject, $message1, $headers))
						{ die ("Sending Email Failed, Please Contact Site Admin! ($site_email)"); }
					else{ $msg_sent = "<div class=\"error\">Email 1 Sent!.</span>";}
					
					if(!mail($eml2, $subject, $message2, $headers))
						{ die ("Sending Email Failed, Please Contact Site Admin! ($site_email)"); }
					else{ $msg_sent = "<div class=\"error\">Email 2 Sent!.</span>";}
					
					if(!mail($eml3, $subject, $message3, $headers))
						{ die ("Sending Email Failed, Please Contact Site Admin! ($site_email)"); }
					else{ $msg_sent = "<div class=\"error\">Email 3 Sent!.</span>";}*/
							
require_once 'incs/swift/lib/swift_required.php';

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
    $transport = Swift_SmtpTransport::newInstance('mail.bluecarpet.co.za', 25)
        ->setUsername('invite@bluecarpet.co.za')
        ->setPassword('0lujc1na@');

    //create the message
    $message = Swift_Message::newInstance();
    //create the mailer
    $mailer = Swift_Mailer::newInstance($transport);

    $subject 	= "WIN A Trip To Monaco with DionWired!";

    // get the body
    $body = get_body($toName,$message,$subject,$fromName);

    //text body
    $textBody ="Hi {$toName}
Travel like a star to fabulous Monaco where you and a partner could be rubbing shoulders with the rich and famous.

Prize includes a Mediterranean cruise on the world's largest sailing ship, return business class flights, transfers, R50 000 spending money, and VIP access to a hospitality terrace to experience the Monaco Grand Prix.
Enter now: https://www.bluecarpet.co.za/
 ";

    // set FROM: details
    $message->setFrom(array($fromEmail => "DionWired Blue Carpet" ));
    // set Sender
    $message->setSender('info@bluecarpet.co.za');

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

    include "incs/swift/mail/content.php";
    $body = ob_get_contents();
    ob_end_clean();
    return $body;
}

send_invite($eml1,$nam1,$row_membername["email"],$row_membername["firstname"]);
send_invite($eml2,$nam2,$row_membername["email"],$row_membername["firstname"]);
send_invite($eml3,$nam3,$row_membername["email"],$row_membername["firstname"]);

			

			
			
			
			
			
			
			
			
			
			
			
			
			
					$msg_sent = "<div class=\"error\">Your Friends Have been invited.</span>";
			
			
			
			
			
			$w3					=$just_id;
				
			$qupdate 			= "update feedback_form1 set w3='$w3' where id='$just_id' ";
			$rstupdate 			= mysql_query($qupdate) or die(mysql_error());
			
			
			
			
			

			$i=1;
			while($i<=5)
				{
					$qinsert_entry 		= "insert into entries values('$just_id',now())";
					$rstinsert_entry 	= mysql_query($qinsert_entry) or die(mysql_error());
					$i++;
				}	
			
		}
			
			//$query 		= "SELECT * FROM feedback_form1 WHERE id = '$just_id';";
			//$result  	= $db->query($query);
			//$user 		= mysql_fetch_array($result);
			
			
			
			if(!$fbuser)
					{
						$the_user=$_SESSION["sess_id1"];
						$query = "SELECT * FROM feedback_form1 WHERE id = '$the_user';";		
					} 
		
				else 
					{
						$the_user=$user_profile['id'];
						$query = "SELECT * FROM feedback_form1 WHERE fbid = '$the_user';";
					}
				$result  = $db->query($query);
				$user = mysql_fetch_array($result);
			
			
			
				//$hash =  mysql_real_escape_string($email);
						
						
							
						//$email	=$user['email'];
						$hash 	= mysql_real_escape_string($user['w3']);
						//$dob	=$user['dob'];
	
						//list($dob_y,$dob_m, $dob_d) = explode("-", $dob);

						//if ($user['sex']==1){$the_gender="Male";} else {$the_gender="Female";}
				
						$file_name = 'images/userfiles/'.trim($hash).'.png';

						$base_img = imagecreatefrompng( "assets/KeyCard.png" );
					
						if(!isset($base_img))
							{
								header('Content-Type: image/png');
								/* Create a blank image */
								$im  = imagecreatetruecolor(150, 30);
								$bgc = imagecolorallocate($im, 255, 255, 255);
								$tc  = imagecolorallocate($im, 0, 0, 0);
							
								imagefilledrectangle($im, 0, 0, 150, 30, $bgc);
							
								/* Output an error message */
								imagestring($im, 10, 5, 5, 'Error loading', $tc);
							
								imagepng($im);
								exit();
							}
				else
					{
						$user_details = array
							(
					
								'firstname'=>array('text'=>$user['firstname'], 'x'=>233,'y'=>240),
								'lastname'=> array('text'=>$user['surname'], 'x'=>380,'y'=>240),
								//'sex'=> array('text'=>$the_gender, 'x'=>303,'y'=>390),
								'w3'=> array('text'=>$user['w3'], 'x'=>200,'y'=>264),
								//'dob_m'=> array('text'=>$dob_m, 'x'=>375,'y'=>350),
								//'dob_y'=> array('text'=>$dob_y, 'x'=>445,'y'=>350),
								//'pp_n'=> array('text'=>$user['id'], 'x'=>580,'y'=>160),
								//'exp_d'=> array('text'=>'20', 'x'=>303,'y'=>430),
								//'exp_m'=> array('text'=>'03', 'x'=>375,'y'=>430),
								//'exp_y'=> array('text'=>'2012', 'x'=>445,'y'=>430),
								//'nearest_store' =>array('text'=>$user['store'], 'x'=>580,'y'=>350),
						
								//'picture' =>  array('text'=>'$photo', 'x'=>165,'y'=>77),
							);
				
						imageAlphaBlending($base_img, true);
						imageSaveAlpha($base_img, true);
					
						$font = 'assets/eurostib.ttf';
						$color = imagecolorallocate($base_img, 0, 0, 0);
					
						//insert text
						foreach($user_details as $k=>$v)
							{
								$size = ($k=='pp_n') ? 15:20;
								imagettftext ( $base_img , $size , 0 , $v['x'] , $v['y'] , $color , $font , $v['text'] );
						
							}
							

							//if(!empty($user['bdnpass'])&& file_exists("uploads/images/".$user['bdnpass']) )
                            //{
                              //  list($width, $height) = getimagesize("uploads/images/".$user['bdnpass']);
                                   // $src = imagecreatefrompng('uploads/images/'.$user['bdnpass']);
                            //}else{
                                //list($width, $height) = getimagesize('assets/blank.png');
                                   // $src = imagecreatefrompng('assets/blank.png');
                           // }
							
							 $src = imagecreatefrompng('assets/blank.png');
					// Copy
					
						$tn_width1= 0;
						$tn_height1=0;
						imagecopy($base_img, $src, 77, 165, 0, 0, $tn_width1, $tn_height1);

					}

					//header('Content-Type: image/png');
					
					//imagepng($base_img);
					imagepng($base_img,$file_name);
					
					imagedestroy($base_img);
					
					$bdnpass=mysql_real_escape_string(trim($w3));	
					
					
						
					//$query_u 		= "UPDATE feedback_form1 SET passport='$vvv' WHERE id=$just_id";	
					//$rstinsert_u 	= mysql_query($query_u) or die(mysql_error());	
					
					
					
					//$w3					=1;
					
					//$qupdate 			= "update feedback_form1 set w3='$w3' where id='$just_id' ";
					//$rstupdate 			= mysql_query($qupdate) or die(mysql_error());

					//$i=1;
					//while($i<=15)
						//{
							//$qinsert_entry 		= "insert into entries values('$just_id',now())";
							//$rstinsert_entry 	= mysql_query($qinsert_entry) or die(mysql_error());
							//$i++;
						//}	
						
					//$postSuccess	= 1;	
						
						//echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=http://localhost/20_south_africa/tnma_FK/bluecarpet/app1.0/index.php?page_ren=e&&action=thanks"."\">";	
			
			
			
			
			
			
			
			
			
			
			//$sent_off=1;	

			
				
			$sent_off	= 1;	
			  
			  
 
		}
		
	
				
				
				
			
			

						
		 		
		}
?>





<div class="about-welcome-inner">

    <?php

	
	if(!$fbuser)
					{
						$qfbidpreznt 	= "select * from feedback_form1 where id={$_SESSION["sess_id1"]};";		
					} 
		
				else 
					{
						$qfbidpreznt 	= "select * from feedback_form1 where fbid=$fbid";
					}


    //$qfbidpreznt 	= "select * from feedback_form1 where id={$_SESSION["sess_id1"]};";
    $rstfbidpreznt  = mysql_query($qfbidpreznt) or die(mysql_error());
	
    if(mysql_num_rows($rstfbidpreznt)>0)
    {
        $rowfbidpreznt=mysql_fetch_array($rstfbidpreznt) or die(mysql_error());
        $played_promo= $rowfbidpreznt['w3'];
    }

    if ( (!($postSuccess==1)) && ($played_promo>=1)  && ( !($sent_off==1)) )


    { ?>

        <div style="font-family:'Arial Black', Gadget, sans-serif">

            <div class="alert alert-error">
                You have already completed this stage.
            </div>
            <?php

            $the_user=$row_membername['id'];
			
            $query = "SELECT * from feedback_form1 where id=$the_user;";
            $result  = $db->query($query);
            $user = mysql_fetch_array($result);

            ?>

            <?php if(!empty($user['w3'])){?>
                <div style="padding-left:0px">
                    <img width="550" src="images/userfiles/<?php echo $user['w3']?>.png">
                </div>
            <?php }?>
			<?php include('incs/s3_cpad_m.php')?>

        </div>
        <?php }?>
</div>





<?php if(!($sent_off==1) && !($played_promo>=1)){?>


	<div class="">
    <h3>Stage 3: Share with friends! </h3>
    <!--<p style="margin-bottom: 15px;"> </p>
    ol style="list-style: normal;color:#8D8C8C;">
        <li>1. Entrants must be over 21 years of age.</li>
        <li>2. The winner must partake of the prize between the 19th  May 2013 and 29th of May 2013. Therefore entrants must be available to travel during these dates.</li>
        <li>3. The Winner and their partner must have a passport valid for up to 6 months after the 29th of May 2013.</li>
    </ol-->
    
    
  
    <div>
    
		<form class="form-horizontal" enctype="multipart/form-data" action="index_m.php?page_ren=s3" method="post">

        	<table cellSpacing="0" cellPadding="0" border="0" style="border:0px;background:none;">

				<tr class="bdtxt">
                    <td colspan="2" align=right class=bodycopy>
                    
                    <div >
                    	<!--<div style="padding-bottom:2px" align="center">

                    		<span>
                            	<strong>(Fields with an asterisk <span class=formtxt>*</SPAN> are required)</strong>
                            </span>
                        </div>-->


	      
	      	 <?php if(!empty($err_msg))
			    {
                	print "<div align=center >";
                	echo $err_header . $err_msg . $err_footer . "<br>";
                	print "</div>";
                 }
             ?>
 
	  	                </div></TD>
              </TR>

             </table>

            <div style="margin-top:15px;" class="alert alert-info">Share with only 3 friends via email and get 5 more entries into the draw!</div>
					
					<table cellSpacing="0" cellPadding="0" border="0" style="border:0px;background:none;">
						<tr>
							<td style="background:none;"><span class="formtxt">*</span><span style="color:<?php echo $red_nam1?>"> Friend's name</span>
                        <input style="width:100%;border-radius:9px;" type="text" name="nam1" value="<?php echo stripslashes($nam1)?>"></td>
						</tr>
						<tr>
							<td style="background:none;"><span class="formtxt">*</span><span style="color:<?php echo $red_eml1?>"> Valid email address</span>
                        <input style="width:100%;border-radius:9px;" type="text" class="contact-input" name="eml1" value="<?php echo stripslashes($eml1)?>">
							</td>
						</tr>
						<tr><td style="background:none;margin:0px;padding:0px;"><hr style="width:90%"></td></tr>
						<tr>
							<td style="background:none;"><span class="formtxt">*</span><span style="color:<?php echo $red_nam2?>"> Friend's name</span>
                        <input style="width:100%;border-radius:9px;" type="text" name="nam2" value="<?php echo stripslashes($nam2)?>"></td>
						</tr>
						<tr>
							<td style="background:none;"><span class="formtxt">*</span><span style="color:<?php echo $red_eml2?>"> Valid email address</span>
                        <input style="width:100%;border-radius:9px;" type="text" class="contact-input" name="eml2" value="<?php echo stripslashes($eml2)?>">
							</td>
						</tr>
						<tr><td style="background:none;margin:0px;padding:0px;"><hr style="width:90%"></td></tr>
						<tr>
							<td style="background:none;"><span class="formtxt">*</span><span style="color:<?php echo $red_nam3?>"> Friend's name</span>
                        <input style="width:100%;border-radius:9px;" type="text" name="nam3" value="<?php echo stripslashes($nam3)?>"></td>
						</tr>
						<tr>							
							<td style="background:none;"><span class="formtxt">*</span><span style="color:<?php echo $red_eml3?>"> Valid email address</span>
                        <input style="width:100%;border-radius:9px;" type="text" class="contact-input" name="eml3" value="<?php echo stripslashes($eml3)?>">
							</td>
						</tr>
						<tr><td style="background:none;margin:0px;padding:0px;"><hr style="width:90%"></td></tr>
						<tr>
							<td style="background:none;">
							<label class="checkbox">
					<span class="formtxt"><input style="float:none;border-style:solid; border-color:#e1226d; border-width:1px;margin-right:4px;margin-bottom:4px;" type="checkbox" id="checkquery" name="acceptedt" <?php if($acceptedt==1){echo "checked";}?>  value=1 /><?php echo $err_msga;?>* </span><span style="color:<?php echo $red_acceptedt?>">I have read and understand the <a href="incs/terms_m.php">Terms &amp; Conditions</a> and <a href="incs/privacy_m.php">Privacy Policy</a>.</span>
				</label>
							</td>
						</tr>
					<tr>
						<td style="background:none;">
							<input class="ajax" type="hidden" value="OK" name="send">
							<button style="float:right;margin-right:34px;" type="submit" class="btn btn-facebook ">Get Your Blue Carpet Cruise Keycard</button>
						</td>
					</tr>
				</table>

  			</form>
  
  		</div>

	</div>
<?php  }?>
	
    
<?php if($sent_off==1){?>
    <?php include('incs/s3_cpad_m.php')?> 
	<?php include('incs/thanks_3_m.php')?>
<?php }?>
<?php


$site_name ="Webkings Training & Placement Project";

$site_email="info@webkings.co.za";


if(isset($_REQUEST["send"])&&(($_REQUEST["send"])=='OK')) {
	
	
	if(get_magic_quotes_gpc()) 	{$email = htmlspecialchars(stripslashes($_REQUEST['email']));}
	else 						{$email = htmlspecialchars($_REQUEST['email']);}
		
	
	//Make sure it's a valid email address, last thing we want is some sort of exploit!
	if(!is_filled($email))         	{$err_msg 	.= "<div class=\"error\">Email Field is Empty</span>";$red_email="red";}
	if(!is_valid_email($email)) 	{$err_msg 	.= "<div class=\"error\">Email Address Invalid.</span>";$red_email="red";}
	
	
	
    // Lets see if the email exists
    $sql = "SELECT COUNT(*) FROM feedback_form WHERE email = '$email'";
    $result = mysql_query($sql)or die('Could not find member: ' . mysql_error());
    if (!mysql_result($result,0,0)>0) {
        $err_msg 	.= "<div class=\"error\">Email Not Found</span>";$red_email="red";
    }




	if ($err_msg==""){
		//Generate a RANDOM MD5 Hash for a password
		$random_password=md5(uniqid(rand()));
		
		//Take the first 8 digits and use them as the password we intend to email the user
		$emailpassword=substr($random_password, 0, 8);
		
		//Encrypt $emailpassword in MD5 format for the database
		$newpassword = md5($emailpassword);
		
			// Make a safe query
		$query = sprintf("UPDATE `feedback_form` SET `password` = '$newpassword ' 
							  WHERE `email` = '$email'",
					mysql_real_escape_string($newpassword));
						
					mysql_query($query)or die('Could not update members: ' . mysql_error());

//Email out the infromation
$subject = "Your New Password"; 
$message = "Your new password is as follows:
---------------------------- 
Password: $emailpassword
---------------------------- 
Please make note this information has been encrypted into our database 

This email was automatically generated."; 
                       
          if(!mail($email, $subject, $message,  "FROM: $site_name <$site_email>"))
		  	{ die ("Sending Email Failed, Please Contact Site Admin! ($site_email)"); }
		  else{ $msg_sent = "<div class=\"error\">New Password Sent!.</span>";$sent_off=1;}
		   
			}
		
	}

?>


	<?php if(!($sent_off==1) ){?>
	<form name="forgotpasswordform" action="index.php?page_ren=54" method="post">
        <table border="0" cellspacing="0" cellpadding="3"  align="center">
            <tr >
                        <td colspan="2" >
                            <div style="padding-bottom:2px; padding-bottom:10px" align="center">
    
                                <span>
                                    <strong>Please enter the email you signed up with</strong>
                                </span>
                            </div>
    
    
              
                 <?php if(!empty($err_msg))
                    {
                        print "<div align=center >";
                        echo $err_header . $err_msg . $err_footer . "<br>";
                        print "</div>";
                     }
                 ?>
     
                            
                            </TD>
                  </TR>
                  
                  
          <tr>
            <td>Email Address:</td>
            <td><input name="email" type="text" value="<?php echo stripslashes($email)?>" id="email" /></td>
          </tr>
          <tr>
            <td colspan="2" class="footer" align="center">
                 <input type="hidden" value="OK" name="send">
                 <button type="submit" class="btn btn-facebook">Request New Password</button>
            </td>
          </tr>
 
        </table>
	</form>
    <?php }?>
    
    <?php if($sent_off==1){?>
    	<div align="center">
			We have sent a new password to the email address provided. 
            Click on the login button below or go back to 
            <a href="index.php?page_ren=52">Email Login Page</a> 
            <br><br>
        	<a class="btn btn-yellow" href="index.php?page_ren=52"><strong>Email User Login</strong></a>
        </div>
	<?php }?>
<?php


	$log           			=trim($_REQUEST['xl1']);

	$firstname  			=trim($_REQUEST["firstname"]);
	$surname  				=trim($_REQUEST["surname"]);

	$photo  				=trim($_REQUEST["userfile"]);

	$email         			=trim($_REQUEST["email"]);
	$cell  					=trim($_REQUEST["cell"]);



	$validpass  			=trim($_REQUEST["validpass"]);
	$validage  				=trim($_REQUEST["validage"]);


	$store  				=trim($_REQUEST["store"]);

	$acceptedn  			=trim($_REQUEST["acceptedn"]);
	$acceptedt  			=trim($_REQUEST["acceptedt"]);

	$dob					=trim($_REQUEST["dob"]);
	$gender					=trim($_REQUEST["gender"]);

	$atype					="mobile";

	$pass1      			=trim($_REQUEST["pass1"]);
	$pass2     				=trim($_REQUEST["pass2"]);

	$qstore 				="select * from stores order by name";
	
	
	
	

    $err_msg = "";
    $err_header = "<p class=\"error\">";
    $err_header .= "<strong>Please take note of the following:</strong><ul class=\"error\">";
    $err_footer = "</ul></p>";

  	if(isset($_REQUEST["send"])&&(($_REQUEST["send"])=='OK'))

      {



          if(!is_filled($firstname))       	{$err_msg 	.= "<div class=\"error\">First Name Required</span>";$red_firstname="red";}
          else                            	{$name 	 = ucwords($name);}


          if(!is_filled($surname))       		{$err_msg 	.= "<div class=\"error\">Surname Required</span>";$red_surname="red";}
          else                            	{$surname 	 = ucwords($surname);}

          if(!is_filled($email))          	{$err_msg 	.= "<div class=\"error\">Email Field is Empty</span>";$red_email="red";}
          elseif(!is_valid_email($email)) 	{$err_msg 	.= "<div class=\"error\">Email Address Invalid.</span>";$red_email="red";}
          else                            	{$email 	 = strtolower(trim($email));}

          $qimg_mbrs   = "select email from feedback_form1 where email='$email'";
          $rstuse_mbrs = mysql_query($qimg_mbrs) or die(mysql_error());

          if(mysql_num_rows($rstuse_mbrs) > 0){$err_msg .= "<li class=\"error\">The email you selected is already part of our system. Please Choose another one.</li>";$red_email="#ff0000";}
          else{$email=trim($email);}



          if(!is_filled($cell))           	{$err_msg 	.= "<div class=\"error\">Please Enter Your Cell Number.</span>";$red_cell="red";}
          elseif(!is_numeric($cell))			{$err_msg  .= '<div class=\"error\">Contact Number can only contain numbers.</span>';$red_cell="red";}
          elseif(strlen($cell) > 10 || strlen($cell) < 10)
          {$err_msg  .= '<div class=\"error\">Contact Number should be 10 numeric characters long.</span>';$red_cell="red";}
          else 								{$cell 		 = trim($cell);}




          if(!is_filled($validpass))  {$err_msg 	.= "<div class=\"error\">Do you have a valid passport? </div>";$red_validpass="red";}

          if(!is_filled($validage))   {$err_msg 	.= "<div class=\"error\">Are you over 21 years of age?</div>";$red_validpass="red";}


          if(!is_filled($gender))     {$err_msg 	.= "<div class=\"error\">Your Gender Required</span>";$red_gender="red";}
          else                        {$gender 	 = ucwords($gender);}


          //$ss1 = checkdate($month,$day,$year);



//$date_format = 'Y-m-d';
//$input = '2009-03-03';

//$input = trim($dob);
//$time = strtotime($dob);

//$is_valid = date($date_format, $time) == $dob;

//print "Valid? ".($is_valid ? 'yes' : 'no');

          function checkDateTime($data)
          {
              if (date('Y-m-d H:i:s', strtotime($data)) == $data) {$ss1="true";} else { $ss1="false";}
          }



          //$ss2=checkDateTime($dob);



          if(!is_filled($dob) ) 		{ $err_msg .= "<li class=\"error\">The Birthday  Field are Empty</li>";$red_dob="red"; }
          //elseif(!($ss2=="true")) 	{$err_msg .= "<li class=\"error\">Your Date of Birth is not a valid one.</li>";}
          else 						{$dob = strtolower(trim($dob));}




          if (!is_filled($store)) 	{$err_msg 	.= "<div class=\"error\">Please Select Closest DionWired Store</span>";$red_store="red";}
          else                        {$store 	 = ucwords($store);}

          if(!is_filled($acceptedt))  {$err_msg 	.= "<div class=\"error\">Please Accept the Terms & Conditions.</div>";$red_acceptedt="red";}

          if(!is_filled($pass1) || !is_filled($pass2)) {$err_msg .= "<li class=\"error\">Please choose and comfirm a password</li>"; $red_pass="#ff0000";}
          elseif($pass1!=$pass2) 						 {$err_msg .= "<li class=\"error\">Your passwords do not match</li>"; $red_pass ="#ff0000";}
          else {$password = trim($pass1);}

          if ($err_msg=="") {include('incs/register_img_upload1.inc.php');}


          if ($err_msg=="")
          {
              $w1					=1;
              $qinsert 			= "insert into feedback_form1 values(NULL,'$fbid','$store','$firstname','$surname','$image_name','$email','$cell','$passport','$validpass','$validage','$w1','0','0','0','$bdnpass',md5('$pass1'),'0','$acceptedn','$acceptedt','$dob','$gender','$atype',now())";
              $rstinsert 			= mysql_query($qinsert) or die(mysql_error());



              $just_id 			= mysql_insert_id();

              $qinsert_entry 		= "insert into entries values('$just_id',now())";
              $rstinsert_entry 	= mysql_query($qinsert_entry) or die(mysql_error());






              $hash =  mysql_real_escape_string($email);

              $query = "SELECT * FROM feedback_form1 WHERE id = '$just_id';";

              $result  = $db->query($query);
              $user = mysql_fetch_array($result);

              $email	=$user['email'];
              $hash 	= md5(mysql_real_escape_string($email));
              $dob	=$user['dob'];


              //list($dob_y, $dob_m, $dob_d) = split('[/.-]', $dob);

              //$data = "04/30/1973";

              list($dob_y,$dob_m, $dob_d) = explode("-", $dob);

              //echo $month; // foo
              //echo $day; // *
              //echo $year;


              if ($user['sex']==1){$the_gender="Male";} else {$the_gender="Female";}

              $file_name = 'images/userfiles/'.trim($hash).'.png';
              if(file_exists($file_name))
              {
                  //header('Content-Type: image/png');
                  include $file_name;
                  exit();
              }
              $base_img = imagecreatefrompng( "assets/PP-New.png" );

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

                      'firstname'=>array('text'=>$user['firstname'], 'x'=>303,'y'=>265),
                      'lastname'=> array('text'=>$user['surname'], 'x'=>303,'y'=>225),
                      'sex'=> array('text'=>$the_gender, 'x'=>303,'y'=>390),
                      'dob_d'=> array('text'=>$dob_d, 'x'=>303,'y'=>350),
                      'dob_m'=> array('text'=>$dob_m, 'x'=>375,'y'=>350),
                      'dob_y'=> array('text'=>$dob_y, 'x'=>445,'y'=>350),
                      'pp_n'=> array('text'=>$user['id'], 'x'=>580,'y'=>160),

                      'exp_d'=> array('text'=>'20', 'x'=>303,'y'=>430),
                      'exp_m'=> array('text'=>'03', 'x'=>375,'y'=>430),
                      'exp_y'=> array('text'=>'2012', 'x'=>445,'y'=>430),
                      'nearest_store' =>array('text'=>$user['store'], 'x'=>580,'y'=>350),

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




                  // File and new size
                  //$filename = "uploads/images/".$user['photo'];
                  //$percent = 0.5;

                  // Content type
                  //header('Content-Type: image/png');

                  // Get new sizes
                  //list($width, $height) = getimagesize($filename);
                  //$newwidth = $width * $percent;
                  //$newheight = $height * $percent;

                  //if     (!$max_width1) $max_width1  = 200;
                  //if     (!$max_height1)$max_height1 = 213;
                  //$the_real_image1                   = "uploads/images/".$user['photo'];
                  //$size1                             = getimagesize($the_real_image1);
                  //$width1                            = $size1[0];
                  //$height1                           = $size1[1];
                  //$x_ratio1                          = $max_width1 / $width1;
                  //$y_ratio1                          = $max_height1 / $height1;
                  //if      (($width1  <= $max_width1) && ($height1 <= $max_height1)) {$tn_width1= $width1;$tn_height1=$height1;}
                  //else if (($x_ratio1 * $height1) < ($max_height1)) {$tn_height1 = ceil($x_ratio1 * $height1); $tn_width1  = $max_width1;}
                  //else    {$tn_width1  = ceil($y_ratio1 * $width1); $tn_height1 = $max_height1;}

                  // Load
                  //$thumb = imagecreatetruecolor($tn_width1, $tn_height1);
                  //$source = imagecreatefromjpeg($the_real_image1);

                  // Resize
                  //imagecopyresized($thumb, $source, 0, 0, 0, 0, $tn_width1, $tn_height1, $width, $height);

                  // Output
                  //imagejpeg($thumb);





                  if(!empty($user['photo'])&& file_exists("uploads/images/".$user['photo']) )
                  {
                      list($width, $height) = getimagesize("uploads/images/".$user['photo']);
                      $src = imagecreatefrompng('uploads/images/'.$user['photo']);
                  }else{
                      list($width, $height) = getimagesize('assets/Profile-Pic.png');
                      $src = imagecreatefrompng('assets/Profile-Pic.png');
                  }
                  // Copy

                  $tn_width1= $width;
                  $tn_height1=$height;
                  imagecopy($base_img, $src, 77, 165, 0, 0, $tn_width1, $tn_height1);

              }

              //header('Content-Type: image/png');

              //imagepng($base_img);
              imagepng($base_img,$file_name);

              imagedestroy($base_img);

              //$vvv=mysql_real_escape_string(trim($email)).'.png';
              $vvv = trim($hash).'.png';

              $query_u 		= "UPDATE feedback_form1 SET passport='$vvv' WHERE id=$just_id";
              $rstinsert_u 	= mysql_query($query_u) or die(mysql_error());

              $postSuccess	= 1;



              //echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=http://localhost/20_south_africa/tnma_FK/bluecarpet/app1.0/index.php?page_ren=e&&action=thanks"."\">";

          }
      }
?>




<div class="about-welcome-inner">

    <?php


    if($_SESSION["sess_id1"])
    {
        $qfbidpreznt 	= "select * from feedback_form1 where id={$_SESSION["sess_id1"]};";
        $rstfbidpreznt  = mysql_query($qfbidpreznt) or die(mysql_error());
        if(mysql_num_rows($rstfbidpreznt)>0)
        {
            $rowfbidpreznt=mysql_fetch_array($rstfbidpreznt) or die(mysql_error());
            $played_promo=$rowfbidpreznt['w1'];
        }

        if ( (!($postSuccess==1)) && ($played_promo==1) )


        { ?>

            <div style="font-family:'Arial Black', Gadget, sans-serif">

                <div class="error message">
                    You have already completed this stage.
                </div>
                <?php

                $the_user=$row_membername['id'];

                $query = "SELECT * from feedback_form1 where id={$_SESSION["sess_id1"]};";
                $result  = $db->query($query);
                $user = mysql_fetch_array($result);

                $passport	=$user['passport'];
                ?>

                <?php if(!empty($user['passport'])){?>
                <div style="padding-left:0px">
                    <img width="550" src="images/userfiles/<?php echo $user['passport']?>">
                </div>

                <?php }?>


            </div>
            <?php } }?>
</div>


<?php if(!($postSuccess==1) && ($played_promo!=1)){?>

<div>
<form enctype="multipart/form-data" action="index_m.php?page_ren=m" method="post">
    <table cellSpacing=0 cellPadding=5 border=0 class="bodytxt" width="700px">
    <tr class="bdtxt">
        <td colspan="2" align=right class=bodycopy>
            <div align="left">
            <div style="padding-bottom:2px;color: #333333;" align="left">
                <strong>Use the form below to get your Blue Carpet Passport and stand a chance to win a trip to go watch the Grand Prix in Monaco.<br></strong>
                                <span>
                 <ol style="list-style: normal;">
                     <li> Entrants must be over 21 years of age.</li>
                     <li> The winner must partake of the prize between the 19th  May 2013 and 29th of May 2013. Therefore entrants must be available to travel during these dates.</li>
                     <li> The Winner and their partner must have a passport valid for up to 6 months after the 29th of May 2013.</li>
                 </ol>
                                    <strong>(Fields with an asterisk <span class=formtxt>*</SPAN> are required)</strong>
                                </span>
            </div>




            <?php if(!empty($err_msg))
        {
            print "<div align=center >";
            echo $err_header . $err_msg . $err_footer . "<br>";
            print "</div>";
        }
            ?>
                    </div>
        </td>
    </tr>

       </table>


<div style="background: #ececec;color:#333;">
<div class="one whole padded">
        <span class="formtxt">*</span><span style="color:<?php echo $red_firstname?>">First name:</span>

        <INPUT class="contact-input" name="firstname" value="<?php echo stripslashes($firstname)?>">
</div>


<div class="one whole padded">
<span class="formtxt">*</span><span style="color:<?php echo $red_surname?>">Surname:</span>

        <INPUT class="contact-input"  name="surname" value="<?php echo stripslashes($surname)?>">
    </div>





<div class="one whole padded">
<span class="formtxt">*</span><span style="color:<?php echo $red_email?>">Email:</span>
   
        <input type="email" class="contact-input"  name="email" value="<?php echo stripslashes($email)?>">
</div>


    <div class="one whole padded">
<span class="formtxt">*</span><span style="color:<?php echo $red_cell?>">Contact No.:</span>
    
        <input type="tel" class="contact-input"  maxLength=50 name="cell" value="<?php echo stripslashes($cell)?>">
        </div>


    <div class="one whole padded">
<span class="formtxt">*</span><span style="color:<?php echo $red_validpass?>">Do you have a valid passport?:</span>
        <ul class="radio-list">
        <li>

                                                    <input type="radio" name="validpass" value="yes" class="form" <?php if($validpass=="yes"){echo "checked";}?>>
                                                  <label class="inline">Yes</label>
        </li>
            <li>
                                                    <input type="radio" name="validpass" value="no"  class="form" <?php if($validpass=="no")  {echo "checked";}?>>
                                                    <label class="inline">No</label>
                                                  <?php //echo $err_msg_validpass;?>

            </li>
            </ul>
</div>


    <!--div class="one whole padded">


        <span class="formtxt">*</span><span style="color:<?php echo $red_validpass?>">Are you over 21 years of age?:</span>

        <ul class="radio-list">
            <li>
                 <input type="radio" name="validage" value="yes" class="form" <?php if($validage=="yes"){echo "checked";}?> >
                <label class="inline">Yes</label>
                </li>
            <li>
				  
													<input type="radio" name="validage" value="no" class="form" <?php if($validage=="no"){echo "checked";}?>  >
                <label class="inline">No</label>
             </li>
            </ul>

  </div-->
<input type="hidden" name="validage" value="?">


    <div class="one whole padded">
        <span class="formtxt">*</span><span style="color:<?php echo $red_gender?>">Gender:</span>

        <ul class="radio-list">
            <li>
                <input  type="radio" name="gender" value=1 class="form" <?php if($gender==1){echo "checked";}?>   />
                <label class="inline">Male</label>

        </li>
            <li>
        <input  type="radio" name="gender" value=2 class="form" <?php if($gender==2){echo "checked";}?>  />
                <label class="inline">Female</label>
            </li>
            </ul>

        <?php //echo $err_msgax;?>

</div>

    <div class="one whole padded">
        <span class="formtxt">*</span><span style="color:<?php echo $red_dob?>">Date of Birth:</span>
    

        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
        <link rel="stylesheet" href="/resources/demos/style.css" />
        <script>
           // $(function() {$("#datepicker").datepicker({dateFormat: 'yy-mm-dd'});});
        </script>
        <input name="dob" type="tel" class="contact-input" id="datepicker" value="<?php echo stripslashes($dob)?>" /> (YYYY-MM-DD) eg. (1980-02-02)

        </div>


    <div class="one whole padded">

        <span class="formtxt">*</span><span style="color:<?php echo $red_store?>">Closest DionWired Store:</span>


        <select name="store">
            <option value="">Closest DionWired Store
                <?php
                $rststore=mysql_query($qstore) or die(mysql_error());
                while($rowstore=mysql_fetch_array($rststore))
                {
                    if($store==$rowstore[0]){echo "<option value=\"$rowstore[name]\" selected>$rowstore[name]";}
                    else{echo "<option value=\"$rowstore[name]\" >$rowstore[name]";}
                }
                ?>
        </select>
    </div>



    <div class="one whole padded">
        <div style="padding-left:30px">
            <span style="color:<?php echo $red_photo?>">Your Picture (Optional) :</span><br>

        </div>

        <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
        <input name="userfile" type="file" size="25">
                                  </div>






<div align="center"><span class=formtxt><strong>Your Login Information</strong></span></div>



    <div class="one whole padded">
        <span class="formtxt">*</span>
        <span style="color:<?php echo $red_pass?>">Choose a Password:</span>

        <INPUT class="contact-input" type=password maxLength=16 name="pass1">
                                  </div>


    <div class="one whole padded">
        <span class="formtxt">*</span>
        <span style="color:<?php echo $red_pass?>">Confirm Password:</span>

        <INPUT class="contact-input" type=password maxLength=16 name="pass2">
                                  </div>





    <div class="one whole padded">
    <label><strong>  I would like to receive Webkings's weekly newsletter for all the latest events, courses, products &amp; competitions.</strong> </label>
                    <span style="padding-left:10px">
                                        	<input style="border-style:solid; border-color:#e1226d; border-width:1px;" type="checkbox" id="checkquery" name="acceptedn" <?php if($acceptedn==1){echo "checked";}?>  value=1 /><?php echo $err_msga;?>
                                        </span>
    </div>

    <div class="one whole padded">
        <span class="formtxt">*</span>
                    <span style="color:<?php echo $red_acceptedt?>">
                        I have read and understand the <a href="incs/terms_m.php">Terms &amp; Conditions</a> and <a href="incs/privacy_m.php">Privacy Policy</a>.
                    </span>

                <span style="padding-left:0px">
<input style="border-style:solid; border-color:#e1226d; border-width:1px;" type="checkbox" id="checkquery" name="acceptedt" <?php if($acceptedt==1){echo "checked";}?>  value=1 /><?php echo $err_msga;?></span>

        </div>
    
        <button class="block" type="submit">Register For Training</button>
        <input type="hidden" value="OK" name="send">
    <br />
          <div style="clear: both;"></div>
     </div>
</form>
</div>


<?php  }?>


<?php if($postSuccess==1){?>
		<?php 
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
Welcome to the DionWired Blue Carpet Competition!

You now have one entry into the draw! You can earn more entries by completing the Stages below. Hurry, the competition closes on 31 March 2013!!
Click here for Stage 2 https://www.bluecarpet.co.za -> Shop with us and earn 15 more entries!
Click here for Stage 3 https://www.bluecarpet.co.za -> Earn 10 more entries by inviting your friends via Email
Click here for Stage 4 https://www.bluecarpet.co.za -> Earn 5 more entries by inviting your friends via SMS

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

    include "incs/swift/mail/welcome.php";
    $body = ob_get_contents();
    ob_end_clean();
    return $body;
}
send_invite($email,$firstname,"info@bluecarpet.co.za","DionWired Blue Carpet");
		?>
	<?php include('incs/mobile/thanks_m.php')?>
<?php }?>
<?php


  
	if(isset($_REQUEST["sendp1"])&&(($_REQUEST["sendp1"])=='OK') && ($pagecatcode==36))
	
		{
			
			if(!$fbuser)
				{
					$the_user=$_SESSION["sess_id1"];
					$query = "SELECT * FROM feedback_form WHERE id = '$the_user';";		
				} 
	
			else 
				{
					$the_user=$user_profile['id'];
					$query = "SELECT * FROM feedback_form WHERE fbid = '$the_user';";
				}
			
			
			//$log           	=trim($_REQUEST['xl1']);
	
			$cell1  		=$_REQUEST["cell1"];
			$cell2  		=$_REQUEST["cell2"];
			$cell3  		=$_REQUEST["cell3"];
			$cell4  		=$_REQUEST["cell4"];
			$cell5  		=$_REQUEST["cell5"];
			
			//$origcell1 = str_replace(" ","",$_REQUEST['cell1']);
			//$origcell2 = str_replace(" ","",$_REQUEST['cell2']);
			//$origcell3 = str_replace(" ","",$_REQUEST['cell3']);
			//$origcell4 = str_replace(" ","",$_REQUEST['cell4']);
			//$origcell5 = str_replace(" ","",$_REQUEST['cell5']);
			/*	$nam1  			=trim($_REQUEST["nam1"]);
			$nam2  			=trim($_REQUEST["nam2"]);
			$nam3  			=trim($_REQUEST["nam3"]);
			$nam4  			=trim($_REQUEST["nam4"]);
			$nam5  			=trim($_REQUEST["nam5"]);
			*/
			
			$acceptedt  	=trim($_REQUEST["acceptedt"]);
		
			$err_msg 		= "";
			$err_header 	= "<p class=\"error\">";
			$err_header 	.= "<strong>Please take note of the following:</strong><ul class=\"error\">";
			$err_footer	 	= "</ul></p>";
			
			
			
			
			
			$rexSafety = "/[\^<,\"@\/\{\}\(\)\*\$%\?=>:\|;#!1-9]+/i";
					
			if($acceptedt != 1)       		{$err_msg 	.= "<div class=\"error\">You must accept the Terms and Conditions</span>";$red_acceptedt="red";}
				
			if(is_filled($cell1) && is_filled($cell2) && is_filled($cell3) && is_filled($cell4) && is_filled($cell5)) {
				if ($cell1 != $cell2 && $cell1 != $cell3 && $cell1 != $cell4 && $cell1 != $cell5 && $cell2 != $cell3 && $cell2 != $cell4 && $cell2 != $cell5 &&	$cell3 != $cell4 && $cell3 != $cell5 &&	$cell4 != $cell5) {$err_msg 	.= "";}
				else {$err_msg 	.= "<div class=\"error\">Please enter 5 unique cellphone numbers</span>";}
			} else {
				if(!is_filled($cell1))       		{$err_msg 	.= "<div class=\"error\">Cell number required in the correct format</span>";$red_cell1="red";}
				elseif(!is_numeric($cell1))			{$err_msg 	.= "<div class=\"error\">Please enter a valid cell number in the correct format </span>";$red_cell1="red";}
				//elseif (strlen(str_replace(" ","",$cell1)) <> "11") {$err_msg 	.= "<div class=\"error\">Please enter a valid cell number in the correct format </span>";$red_cell1="red";}
				
				if(!is_filled($cell2))       		{$err_msg 	.= "<div class=\"error\">Cell number required in the correct format </span>";$red_cell2="red";}
				elseif(!is_numeric($cell2))			{$err_msg 	.= "<div class=\"error\">Please enter a valid cell number in the correct format </span>";$red_cell2="red";}
				//elseif (strlen(str_replace(" ","",$cell2)) <> "11") {$err_msg 	.= "<div class=\"error\">Please enter a valid cell number in the correct format </span>";$red_cell2="red";}
				
				if(!is_filled($cell3))       		{$err_msg 	.= "<div class=\"error\">Cell number required in the correct format </span>";$red_cell3="red";}
				elseif(!is_numeric($cell3))			{$err_msg 	.= "<div class=\"error\">Please enter a valid cell number in the correct format </span>";$red_cell3="red";}
				//elseif (strlen(str_replace(" ","",$cell3)) <> "11") {$err_msg 	.= "<div class=\"error\">Please enter a valid cell number in the correct format</span>";$red_cell3="red";}
				
				if(!is_filled($cell4))       		{$err_msg 	.= "<div class=\"error\">Cell number required in the correct format</span>";$red_cell4="red";}
				elseif(!is_numeric($cell4))			{$err_msg 	.= "<div class=\"error\">Please enter a valid cell number in the correct format</span>";$red_cell4="red";}
				//elseif (strlen(str_replace(" ","",$cell4)) <> "11") {$err_msg 	.= "<div class=\"error\">Please enter a valid cell number in the correct format</span>";$red_cell4="red";}
				
				if(!is_filled($cell5))       		{$err_msg 	.= "<div class=\"error\">Cell number required in the correct format</span>";$red_cell5="red";}
				elseif(!is_numeric($cell5))			{$err_msg 	.= "<div class=\"error\">Please enter a valid cell number in the correct format </span>";$red_cell5="red";}
				//elseif (strlen($cell5) <> "11") 	{$err_msg 	.= "<div class=\"error\">Please enter a valid cell number in the correct format</span>";$red_cell5="red";}
			}
			
				
				//check if cell's are already in the system
			$just_id 	=$row_membername['id'];
			$from_name	=$row_membername['firstname'] ." ". $row_membername['surname'];
			$p1			=ltrim($just_id."4",'0');
						
			
			$cell1query  = mysql_query("SELECT * FROM promo1sms WHERE sms_no = '$cell1'") or die(mysql_error());
			if(mysql_num_rows($cell1query)>0) {$err_msg 	.= "<div class=\"error\">This number ".$_REQUEST["cell1"]." has already been invited to the competition</span>";$red_cell1="red";}

			$cell1query  = mysql_query("SELECT * FROM feedback_form WHERE cell = '$origcell1'") or die(mysql_error());
			if(mysql_num_rows($cell1query)>0) {$err_msg 	.= "<div class=\"error\">This number ".$_REQUEST["cell1"]." has already registered for the competition</span>";$red_cell1="red";}

			$cell2query  = mysql_query("SELECT * FROM promo1sms WHERE sms_no = '$cell2'") or die(mysql_error());
			if(mysql_num_rows($cell2query)>0) {$err_msg 	.= "<div class=\"error\">This number ".$_REQUEST["cell2"]." has already been invited to the competition</span>";$red_cell2="red";}

			$cell2query  = mysql_query("SELECT * FROM feedback_form WHERE cell = '$origcell2'") or die(mysql_error());
			if(mysql_num_rows($cell2query)>0) {$err_msg 	.= "<div class=\"error\">This number ".$_REQUEST["cell2"]." has already registered for the competition</span>";$red_cell2="red";}
			
			$cell3query  = mysql_query("SELECT * FROM promo1sms WHERE sms_no = '$cell3'") or die(mysql_error());
			if(mysql_num_rows($cell3query)>0) {$err_msg 	.= "<div class=\"error\">This number ".$_REQUEST["cell3"]." has already been invited to the competition</span>";$red_cell3="red";}

			$cell3query  = mysql_query("SELECT * FROM feedback_form WHERE cell = '$origcell3'") or die(mysql_error());
			if(mysql_num_rows($cell3query)>0) {$err_msg 	.= "<div class=\"error\">This number ".$_REQUEST["cell3"]." has already registered for the competition</span>";$red_cell3="red";}
			
			$cell4query  = mysql_query("SELECT * FROM promo1sms WHERE sms_no = '$cell4'") or die(mysql_error());
			if(mysql_num_rows($cell4query)>0) {$err_msg 	.= "<div class=\"error\">This number ".$_REQUEST["cell4"]." has already been invited to the competition</span>";$red_cell4="red";}

			$cell4query  = mysql_query("SELECT * FROM feedback_form WHERE cell = '$origcell4'") or die(mysql_error());
			if(mysql_num_rows($cell4query)>0) {$err_msg 	.= "<div class=\"error\">This number ".$_REQUEST["cell4"]." has already registered for the competition</span>";$red_cell4="red";}
			
			$cell5query  = mysql_query("SELECT * FROM promo1sms WHERE sms_no = '$cell5'") or die(mysql_error());
			if(mysql_num_rows($cell5query)>0) {$err_msg 	.= "<div class=\"error\">This number ".$_REQUEST["cell5"]." has already been invited to the competition</span>";$red_cell5="red";}

			$cell5query  = mysql_query("SELECT * FROM feedback_form WHERE cell = '$origcell5'") or die(mysql_error());
			if(mysql_num_rows($cell5query)>0) {$err_msg 	.= "<div class=\"error\">This number ".$_REQUEST["cell5"]." has already registered for the competition</span>";$red_cell5="red";}
			
			if ($err_msg=="")
	
				{
					//$qupdate 			= "update feedback_form set p1='$p1' where id='$just_id' ";
					//$rstupdate 			= mysql_query($qupdate) or die(mysql_error());


					$automessage = $row_membername["firstname"].' invites you to Apply for the WebKings Training & Job Placement Semi-Scholarship http://www.webkings.co.za/index.php?page_ren=101, Win a Laptop, Tablet or Phone @ the Launch of WebKings in your City. www.facebook.com/webkingsafrica';	

		
				$xml_data = '<?xml version="1.0" encoding="utf-8" ?>
				<Send username="TNMA" password="louis-marc">
				<Messages>
				<Message to="'.$cell1.'" text="'.$automessage.'"/>
				<Message to="'.$cell2.'" text="'.$automessage.'"/>
				<Message to="'.$cell3.'" text="'.$automessage.'"/>
				<Message to="'.$cell4.'" text="'.$automessage.'"/>
				<Message to="'.$cell5.'" text="'.$automessage.'"/>
				
				</Messages>
				</Send>';

				$URL = "https://api.blazon.co/messages/sms";
				$ch = curl_init($URL);
				//curl_setopt($ch, CURLOPT_MUTE, 1);
				curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
				curl_setopt($ch, CURLOPT_POSTFIELDS, "$xml_data");
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				$output = curl_exec($ch);
				curl_close($ch);


				
				$message1 	= "";

				
				$msg_sent = "<div class=\"error\">Your friends Have been invited.</span>";
			
				$i=1;
				while($i<=5)
					{
						$qinsert_entry 		= "insert into entries values('$just_id',now())";
						$rstinsert_entry 	= mysql_query($qinsert_entry) or die(mysql_error());
						$i++;
					}	


				$stage4smsentry 		= "insert into promo1sms (user_id,sms_no,date_added) values('$just_id','$cell1',now())";
				$stage4insert_entry 	= mysql_query($stage4smsentry) or die(mysql_error());
				$stage4smsentry 		= "insert into promo1sms (user_id,sms_no,date_added) values('$just_id','$cell2',now())";
				$stage4insert_entry 	= mysql_query($stage4smsentry) or die(mysql_error());
				$stage4smsentry 		= "insert into promo1sms (user_id,sms_no,date_added) values('$just_id','$cell3',now())";
				$stage4insert_entry 	= mysql_query($stage4smsentry) or die(mysql_error());
				$stage4smsentry 		= "insert into promo1sms (user_id,sms_no,date_added) values('$just_id','$cell4',now())";
				$stage4insert_entry 	= mysql_query($stage4smsentry) or die(mysql_error());
				$stage4smsentry 		= "insert into promo1sms (user_id,sms_no,date_added) values('$just_id','$cell5',now())";
				$stage4insert_entry 	= mysql_query($stage4smsentry) or die(mysql_error());

































					



























			
		
				$result  = $db->query($query);
				$user = mysql_fetch_array($result);
						
				//$hash =  mysql_real_escape_string($email);
						
						//$email	=$user['email'];
						$hash 	= mysql_real_escape_string($user['p1']);
						//$dob	=$user['dob'];
	
						//list($dob_y,$dob_m, $dob_d) = explode("-", $dob);

						//if ($user['sex']==1){$the_gender="Male";} else {$the_gender="Female";}
				
						$file_name = 'images/userfiles/'.trim($hash).'.png';

						$base_img = imagecreatefrompng( "assets/gp-ticket.png" );
					
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
					
								'firstname'=>array('text'=>$user['firstname'], 'x'=>116,'y'=>463),
								'lastname'=> array('text'=>$user['surname'], 'x'=>142,'y'=>524),
								//'sex'=> array('text'=>$the_gender, 'x'=>303,'y'=>390),
								'p1'=> array('text'=>$p1, 'x'=>160,'y'=>582),
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
					
					$bdnpass=mysql_real_escape_string(trim($w4));	
					
							
				
				$sent_off	= 1;	
			  
			  
 
			}
				
		 		
		}
?>





<div class="about-welcome-inner">


    <?php

	
	if(!$fbuser)
					{
						$qfbidpreznt 	= "select * from feedback_form where id={$_SESSION["sess_id1"]};";		
					} 
		
				else 
					{
						$qfbidpreznt 	= "select * from feedback_form where fbid=$fbid";
					}

    $rstfbidpreznt  = mysqli_query($conn,$qfbidpreznt) or die(mysqli_error());
	
    if(mysqli_num_rows($rstfbidpreznt)>0)
    {
        $rowfbidpreznt=mysqli_fetch_array($rstfbidpreznt) or die(mysqli_error());
        $played_promo= $rowfbidpreznt['p1'];
    }

    if ( (!($postSuccess==1)) && ($played_promo>=1)  && ( !($sent_off==1)) )


    { ?>

        <div style="font-family:'Arial Black', Gadget, sans-serif">

            <div class="alert alert-error">
                You have already completed Competition.
            </div>
            <?php

            $the_user=$row_membername['id'];

            $query = "SELECT * from feedback_form where id=$the_user";
            $result  = $db->query($query);
            $user = mysql_fetch_array($result);

            ?>

            <?php if(!empty($user['p1'])){?>
                <div style="padding-left:0px" align="center">
                    <img width="350" src="images/userfiles/<?php echo $user['p1']?>.png">
                </div>
            <?php }?>
        </div>
        <?php }?>
</div>





<?php if(!($sent_off==1) && ($played_promo<1)){?>


	<div class="">
    <h1>Promo 1: Share with friends via SMS! - 5 Draw Entries</h1>
    <!--<p style="margin-bottom: 15px;"> </p>
    ol style="list-style: normal;color:#8D8C8C;">
        <li>1. Entrants must be over 21 years of age.</li>
        <li>2. The winner must partake of the prize between the 19th  May 2013 and 29th of May 2013. Therefore entrants must be available to travel during these dates.</li>
        <li>3. The Winner and their partner must have a passport valid for up to 6 months after the 29th of May 2013.</li>
    </ol-->
    
    
  
    <div>
    
		<form class="form-horizontal" enctype="multipart/form-data" action="index.php?page_ren=0053" method="post">

        	<table cellSpacing=0 cellPadding=0 border=0 >
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
                  <TR>
                    <TD colspan="2" align=right class=bodycopy>
                    <div align="center">
                        <span class="formtxt">
                            <strong>
                            	<?php echo $ss1;?>
                            </strong>
                        </span>
                    </div></TD>
                  </TR>

          </table>

            <div align="center" style="margin-top:15px;" class="alert alert-info">Share with only 5 friends via SMS and get 5 more entries into the webkings draw!</div>
            
          
            
        
                   
                    
                   
                    <div class="controls" style="margin-left:170px;font:12px/18px Arial,Helvetica,sans-serif;font-weight:bold;margin-bottom:10px;">
						<!--<span class="formtxt">*</span><span style="color:<?php echo $red_nam1?>"> Friend's name</span>
                        <input type="text" class="contact-input" name="nam1" value="<?php echo stripslashes($nam1)?>">
                        &nbsp;&nbsp;-->
                        <span class="formtxt">*</span><span style="color:<?php echo $red_cell1?>"> Friend's Number</span>
						<!--input type="text" style="width:20px;" value="27" readonly="on" name="27"-->
                        <input type="text" class="contact-input" id="cell1" name="cell1" value="<?php echo stripslashes($cell1)?>">
                    </div>
                    
                    
                    <div class="controls" style="margin-left:170px;font:12px/18px Arial,Helvetica,sans-serif;font-weight:bold;margin-bottom:10px;">
						<!--<span class="formtxt">*</span><span style="color:<?php echo $red_nam2?>"> Friend's name</span>
                        <input type="text" class="contact-input" name="nam2" value="<?php echo stripslashes($nam2)?>">
                        &nbsp;&nbsp;-->
                        <span class="formtxt">*</span><span style="color:<?php echo $red_cell2?>"> Friend's Number</span>
                        <!--input type="text" style="width:20px;" value="27" readonly="on" name="27"-->
						<input type="text" class="contact-input" id="cell2" name="cell2" value="<?php echo stripslashes($cell2)?>">
                    </div>
                    
                    
                    <div class="controls" style="margin-left:170px;font:12px/18px Arial,Helvetica,sans-serif;font-weight:bold;margin-bottom:10px;">
						<!--<span class="formtxt">*</span><span style="color:<?php echo $red_nam3?>"> Friend's name</span>
                        <input type="text" class="contact-input" name="nam3" value="<?php echo stripslashes($nam3)?>">
                        &nbsp;&nbsp;-->
                        <span class="formtxt">*</span><span style="color:<?php echo $red_cell3?>"> Friend's Number</span>
                        <!--input type="text" style="width:20px;" value="27" readonly="on" name="27"-->

						<input type="text" class="contact-input" id="cell3" name="cell3" value="<?php echo stripslashes($cell3)?>">
                    </div>
                    
                    
                    <div class="controls" style="margin-left:170px;font:12px/18px Arial,Helvetica,sans-serif;font-weight:bold;margin-bottom:10px;">
						<!--<span class="formtxt">*</span><span style="color:<?php echo $red_nam4?>"> Friend's name</span>
                        <input type="text" class="contact-input" name="nam4" value="<?php echo stripslashes($nam4)?>">
                        &nbsp;&nbsp;-->
                        <span class="formtxt">*</span><span style="color:<?php echo $red_cell4?>"> Friend's Number</span>
                        <!--input type="text" style="width:20px;" value="27" readonly="on" name="27"-->
						<input type="text" class="contact-input" id="cell4" name="cell4" value="<?php echo stripslashes($cell4)?>">
                    </div>
                    
                    
                    <div class="controls" style="margin-left:170px;font:12px/18px Arial,Helvetica,sans-serif;font-weight:bold;margin-bottom:10px;">
						<!--<span class="formtxt">*</span><span style="color:<?php echo $red_nam5?>"> Friend's name</span>
                        <input type="text" class="contact-input" name="nam5" value="<?php echo stripslashes($nam5)?>">
                        &nbsp;&nbsp;-->
                        <span class="formtxt">*</span><span style="color:<?php echo $red_cell5?>"> Friend's Number</span>
                        <!--input type="text" style="width:20px;" value="27" readonly="on" name="27"-->
						<input type="text" class="contact-input" id="cell5" name="cell5" value="<?php echo stripslashes($cell5)?>">
                    </div>
 
                <div class="control-group"></div>

            <div class="about-welcome-inner" align="center" style="margin-left:-34px;">
                <label class="checkbox">
					<span class="formtxt"><input style="float:none;border-style:solid; border-color:#e1226d; border-width:1px;margin-right:10px;margin-bottom:4px;" type="checkbox" id="checkquery" name="acceptedt" <?php if($acceptedt==1){echo "checked";}?>  value=1 /><?php echo $err_msga;?>* </span><span style="color:<?php echo $red_acceptedt?>">I have read and understand the <a class="ajax" href="index.php?page_ren=00555" target="new">Terms &amp; Conditions</a> and <a class="ajax" href="index.php?page_ren=00555" target="new">Privacy Policy</a>.</span>
				</label>
            </div>

                <div class="form-actions" style="margin-top:40px;border-radius:10px;">
                    <input class="ajax" type="hidden" value="OK" name="sendp1">
                    <button style="float:right;margin-right:34px;" type="submit" class="btn btn-facebook ">Get 5 Webkings Launch Draw Entries</button>
                </div>

	  </form>
  
	  </div>
	  <script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
      <script type="text/javascript">
            $(".ajax").colorbox({width: 600,height: 800});
        </script>

	</div>
<?php  }?>
	
    
<?php if($sent_off==1){?>
	<?php //include('incs/thanks_sms.php')?>
    <?php //include('incs/s3_cpad.php')?>
<?php }?>
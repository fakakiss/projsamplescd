<?php

	$log           		=trim($_REQUEST['xl1']);
	$thanks        		=trim($_REQUEST['action']);
	$caption1_mbrs     	=trim($_REQUEST["firstname"]);  
	$caption2_mbrs      =trim($_REQUEST["lastname"]);
	$caption3_mbrs   	=trim($_REQUEST["companyname"]);
	$caption4_mbrs		=trim($_REQUEST["tel"]);
	$caption5_mbrs		=trim($_REQUEST["add1"]);
	$caption6_mbrs		=trim($_REQUEST["add2"]);
	$caption7_mbrs  	=trim($_REQUEST["region"]);
	$caption8_mbrs      =trim($_REQUEST["email"]);
	$caption9_mbrs      =trim($_REQUEST["pass1"]);
	$caption9a_mbrs     =trim($_REQUEST["pass2"]);	
	$caption10_mbrs     =trim($_REQUEST["sendme"]);
	

    $err_msg = "";
    $err_header = "<p class=\"error\">";
    $err_header .= "Please take note of the following:<ul class=\"error\">";
    $err_footer = "</ul></p>";
  
  	if(isset($_REQUEST["send"])&&(($_REQUEST["send"])=='OK'))
     	{
			
	  		if(!is_filled($caption1_mbrs)) {$err_msg .= "<li class=\"error\">Your firstname is required.</li>"; $red1 ="#ff0000";}
	  		else {$caption1_mbrs = ucwords($caption1_mbrs);}
	
	  		if(!is_filled($caption2_mbrs)) {$err_msg .= "<li class=\"error\">Your lastname is required.</li>"; $red2 ="#ff0000"; }
	  		else {$caption2_mbrs = ucwords($caption2_mbrs);} 
	
	  		if(!is_filled($caption8_mbrs)) {$err_msg .= "<li class=\"error\">The Email Field is Empty</li>"; $red3 ="#ff0000"; }
			elseif(!is_valid_email($caption8_mbrs)) {$err_msg .= "<li class=\"error\">The email address you entered is invalid.</li>"; $red3 ="#ff0000";}
			else {$caption8 = strtolower(trim($caption8_mbrs));}
		   
	 		if(!is_filled($caption9_mbrs) || !is_filled($caption9a_mbrs)) {$err_msg .= "<li class=\"error\">Please choose and comfirm a password</li>"; $red4 ="#ff0000";}
	  		elseif($caption9_mbrs!=$caption9a_mbrs) {$err_msg .= "<li class=\"error\">Your passwords do not match</li>"; $red4 ="#ff0000";}
	  		else {$caption9 = trim($caption9a);}   
	  	 
       		$qimg_mbrs   = "select caption8 from students where caption8='$caption8_mbrs'";
	   		$rstuse_mbrs = mysql_query($qimg_mbrs) or die(mysql_error());
			
	   		if(mysql_num_rows($rstuse_mbrs) > 0){$err_msg .= "<li class=\"error\">The email you selected is already part of our system. Please Choose another one.</li>";$red3="#ff0000";}
			else{$caption8_mbrs=trim($caption8_mbrs);}
			
			
			 include('register_img_upload1.inc.php');
			
			
			if (!($err_msg=="")){echo "<div></div>";}
			else{
					$search = "$caption1"; 
					$valll 	= substr($search,0,1);
					if (eregi('[a-zA-Z]',$valll) ){$val=(strtoupper($valll));}else {$val=0;} 
					 
					//$qins = "insert into register values(null,'$firstname','$lastname','$companyname','$tel','$address1','$address2','$region','$email',md5('$pass1'),'$val',now())";
					
					$image_name_cap_img==$image_name;
					
					$qins    = "insert into students values(null,'$date','$val','$showitem','$language','$image_name_illus1','$image_name_illus2','$image_name_illus3','$image_name_illus4','$image_name_illus5','$image_name_add1','$image_name_add2','$image_name_add3','$image_name_add4','$image_name_add5','$addlink1','$addlink2','$addlink3','$addlink4','$addlink5','$image_name_doc','$image_name_aud','$image_name_vid','$image_name_zid','$caption','$image_name_cap_img','$caption1_mbrs','$caption2_mbrs','$caption3_mbrs','$caption4_mbrs','$caption5_mbrs','$caption6_mbrs','$caption7_mbrs','$caption8_mbrs',md5('$caption9_mbrs'),'$caption10_mbrs','$lp_mbrs','$intro_head_mbrs','$intro_mbrs','$image_name','$imglink','$pos','$capt','$head1','$text1','$image_name1','$img1link','$pos1','$capt1','$head2','$text2','$image_name2','$img2link','$pos2','$capt2','$head3','$text3','$image_name3','$img3link','$pos3','$capt3','$head4','$text4','$image_name4','$img4link','$pos4','$capt4','$head5','$text5','$image_name5','$img5link','$pos5','$capt5','$_sess_username',now(),now())"; 
					
					mysql_query($qins) or die(mysql_error());
		
					$done==1;
					$qins_nl = "insert into emails values(null,'$val','$firstname','$lastname','$email','$sendme',now())"; 
					mysql_query($qins_nl) or die(mysql_error());
					
					
		
					$subject = 	"Student Registration | Training Programs.";
					$to_send =	"
									First Name:         $firstname\n
									Last Name:          $lastname\n
									Email:              $email\n
								";	
								$summitted==1;	
	
	    //mail  ("frederick.akrofi@fakacolin.com","$subject","$to_send","From: No_Reply@axsysplot.com\r\nReply-to:$email");
		//mail  ("chales.wood@axsysplot.com","$subject","$to_send","From: No_Reply@axsysplot.com\r\nReply-to:$email");
		echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=index.php?page_ren=25\">";
	}
}
?>

<?php if(!($summitted==1)){?>
 
	<div align="center">
		<form enctype="multipart/form-data" action="<?php echo $PHP_SELF."?page_ren=22";?>" method="post">
    		<table cellSpacing=0 cellPadding=5 border=0 class="bodytxt" width="330px">
        		<tr class="bdtxt">
                    <td colspan="2" align=right class=bodycopy><div align="left">
                    <div style="padding-bottom:20px">
						Please fiil the form below to Create your New Account....<br>
                    	<span class="error">(Fields with an asterisk <span class=formtxt>*</SPAN> are required)</span>
                        </div>
                        
                        
      
	      
	      	 <?php if(!empty($err_msg))
			    {
                print "<div align=center >";
                echo $err_header . $err_msg . $err_footer . "<br>";
                print "</div>";
                 }
             ?>
 
	  	                </div></TD>
              </TR>
                  <TR class="bdtxt">
                    <TD colspan="2" align=right class=bodycopy><div align="left"><span class="formtxt"><strong>Account Information</strong></span></div></TD>
                  </TR>
                  <TR class="bdtxt">
                    <TD width="167" align=right class=bodycopy><span class="formtxt">*</span><span style="color:<?php echo $red1?>">First name:</span></TD>
                    <TD width="265" class=bodycopy>
					<INPUT class=formtxt style="WIDTH: 170px" maxLength=50 name="firstname" value="<?php echo stripslashes($caption1_mbrs)?>">                        </TD>
                  </TR>
                  <TR class="bdtxt">
                    <TD class=bodycopy align=right><span class="formtxt">*</span><span style="color:<?php echo $red2?>">Last name:</span></TD>
                    <TD class=bodycopy><INPUT class=formtxt id=txtLastName style="WIDTH: 170px" maxLength=50 name="lastname" value="<?php echo stripslashes($caption2_mbrs)?>">                                          </TD>
                  </TR>
				  
				  <TR class="bdtxt">
                    
                    <TD class=bodycopy colspan="2">
						<div style="padding-left:30px">
							<span style="color:<?php echo $red?>">Your Picture (Optional) :</span><br>
							<input type="hidden" name="MAX_FILE_SIZE" value="1000000"><input name="userfile" type="file" size="25">
						</div>
					</TD>
                  </TR>
				  
                  <TR class="bdtxt">
                    <TD class=bodycopy align=right><span style="color:<?php echo $red?>">Choose Event :</span></TD>
                    <TD class=bodycopy><INPUT class=formtxt id=txtLastName style="WIDTH: 170px" maxLength=50 name="companyname" value="<?php echo stripslashes($caption3_mbrs)?>">                                          </TD>
                  </TR>
                  <TR class="bdtxt">
                    <TD class=bodycopy align=right>Tel:</TD>
                    <TD class=bodycopy>
					<INPUT class=formtxt id=txtAddr1 style="WIDTH: 170px" maxLength=50 name="tel" value="<?php echo stripslashes($caption4_mbrs)?>">                                        </TD>
                  </TR>
				  
				  <TR class="bdtxt">
                    <TD class=bodycopy align=right><span style="color:<?php echo $red?>">Address Line 1:</span></TD>
                    <TD class=bodycopy><INPUT class=formtxt id=txtLastName style="WIDTH: 170px" maxLength=50 name="add1" value="<?php echo stripslashes($caption5_mbrs)?>"></TD>
                  </TR>
				  <TR class="bdtxt">
                    <TD class=bodycopy align=right><span style="color:<?php echo $red?>">Address Line 2:</span></TD>
                    <TD class=bodycopy><INPUT class=formtxt id=txtLastName style="WIDTH: 170px" maxLength=50 name="add2" value="<?php echo stripslashes($caption6_mbrs)?>"></TD>
                  </TR>
				   <TR class="bdtxt">
                    <TD class=bodycopy align=right><span style="color:<?php echo $red?>">Region:</span></TD>
                    <TD class=bodycopy><INPUT class=formtxt id=txtLastName style="WIDTH: 170px" maxLength=50 name="region" value="<?php echo stripslashes($caption7_mbrs)?>"></TD>
                  </TR>
                
                  <TR class="bdtxt">
                    <TD colspan="2" align=right class=bodycopy><div align="left"><span class=formtxt><strong>Your Login Information</strong></span></div></TD>
                  </TR>
                  <TR class="bdtxt">
                    <TD class=bodycopy align=right><SUP></SUP><span class="formtxt">*</span><span style="color:<?php echo $red3?>">Enter Email  :</span></TD>
                    <TD class=bodycopy><input class=formtxt id=txtUserID 
                  style="WIDTH: 170px" maxlength=40 name="email" value="<?php echo stripslashes($caption8_mbrs)?>">                    
				  
				   &nbsp; <SPAN >Eg. jroberts@gmail.com </SPAN></TD>
                  </TR>
                  <TR class="bdtxt">
                    <TD class=bodycopy align=right><span class="formtxt">*</span><span style="color:<?php echo $red4?>">Choose a  password:</span></TD>
                    <TD class=bodycopy><INPUT class=formtxt id=txtPass  style="WIDTH: 170px" type=password maxLength=16 name="pass1">                                       </TD>
                  </TR>
                  <TR class="bdtxt">
                    <TD class=bodycopy align=right><span class="formtxt">*</span><span style="color:<?php echo $red4?>">Confirm password:</span></TD>
                    <TD class=bodycopy><INPUT class=formtxt id=txtPassVerify  style="WIDTH: 170px" type=password maxLength=16 name="pass2">                                          </TD>
                  </TR>
				  <TR>
                    <TD class=bodycopy align=middle colSpan=2><input name="sendme" type="checkbox" value="1" <?php if($sendme==1){echo "checked";}?>>
                      <strong>Online Newsletters</strong></TD>			
              </TR>
                  <TR>
                    <TD class=bodycopy align=middle colSpan=2>
					<INPUT class=formtxt  type=submit value="Create your account >>" >
					<input type="hidden" value="OK" name="send">
					</TD>
                  </TR>
              
          </TABLE>
  </form>
</div>
	<?php  }?>
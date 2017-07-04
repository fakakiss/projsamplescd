<?php

	//ini_set("display_errors", 0);

	//include("incs/mobile-detect/Mobile_Detect.php");
	
	//$detect = new Mobile_Detect();

	//if ( $detect->isMobile() && !$detect->isTablet() )
		//{
			//header('Location: http://www.webkings.co.za/index_m.php');
			//exit();
		//}

	

	// if app is inside facebook
	
	

//include('lib_files/public_inc_fns/itop_code1.inc.php');
 //if($pagecatcode=="l" && isset($_SESSION["sess_id1"])) {
    //header("Location:./index.php");
    //exit();
 //}
 
 

 //include('lib_files/public_inc_fns/head_code1.inc.php')



		//$today  =date('Ymd');
		
		//$s2_date="20130228";
		//$s3_date="20130305";
		//$s4_date="20130313";

	//switch ($pagecatcode)
		//{
		
			//case 58:
				//$home_p ="active";
				//break;
		
			//case "p":
				//$p_p = "active";
				//break;
				
		
			//case "refuel":
			//case "stage":
				//$refuel_p = "active";
				//break;
			//case "tc":
				//$tc_p = "active";
				//break;
		
		//}


	
			
			
  
  	if(isset($_REQUEST["sendfb"])&&(($_REQUEST["sendfb"])=='OK'))	
	
			{ 	

			$cell  					=trim($_REQUEST["cell"]);	

			$validpass  			=trim($_REQUEST["validpass"]);
			
			$validage  				=trim($_REQUEST["validage"]);
			
			$location  				=trim($_REQUEST["location"]);
			
			$acceptedn  			=trim($_REQUEST["acceptedn"]);
			
			$acceptedt  			=trim($_REQUEST["acceptedt"]);
			
			$dob					=trim($_REQUEST["dob"]);

			$ppl					=trim($_REQUEST["ppl"]);

			$email  				=trim($_REQUEST["email"]);
		
			$atype					="facebook";
			
				//$pass1      			=trim($_REQUEST["pass1"]);
				//$pass2     			=trim($_REQUEST["pass2"]);
			
				//$qlocations 			="select * from branches order by id";	
		
			$err_msgf 				= "";
			$err_header 			= "<p class=\"error\">";
			$err_header 		   .= "<strong>Please take note of the following:</strong><ul class=\"error\">";
			$err_footer 			= "</ul></p>";
			
			
			
				if(!is_filled($firstname))       	{$err_msgf 	.= "<div class=\"error\">First Name Required</span>";$red_firstname="red";}
				else                            	{$name 	 = ucwords($name);}
						
				if(!is_filled($surname))       		{$err_msgf 	.= "<div class=\"error\">Surname Required</span>";$red_surname="red";}
				else                            	{$surname 	 = ucwords($surname);}
		
				if(!is_filled($email))          	{$err_msgf 	.= "<div class=\"error\">Email Field is Empty</span>";$red_email="red";}
				elseif(!is_valid_email($email)) 	{$err_msgf 	.= "<div class=\"error\">Email Address Invalid.</span>";$red_email="red";}
				else                            	{$email 	 = strtolower(trim($email));}
				
				$qimg_mbrs   = "select email from feedback_form where email='$email'";
	   			$rstuse_mbrs = mysqli_query($conn,$qimg_mbrs) or die(mysql_error($conn));
			
	   			if(mysqli_num_rows($rstuse_mbrs) > 0){$err_msgf .= "<li class=\"error\">The email you selected is already part of our system. Please Choose another one.</li>";$red_email="#ff0000";}
				else{$email=trim($email);}
						
				if(!is_filled($cell))           	{$err_msgf 	.= "<div class=\"error\">Please Enter Your Cell Number.</span>";$red_cell="red";}
				elseif(!is_numeric($cell))			{$err_msgf  .= '<div class=\"error\">Contact Number can only contain numbers.</span>';$red_cell="red";}								
				//elseif(strlen($cell) > 10 || strlen($cell) < 10){$err_msgf  .= '<div class=\"error\">Contact Number should be 10 numeric characters long.</span>';$red_cell="red";}
				else 								{$cell 		 = trim($cell);}
				
				//if(!is_filled($validpass))  {$err_msgf 	.= "<div class=\"error\">Are you Passionate about Internet Technologies and Want to be a part of our WEB Projects? </div>";$red_validpass="red";}
				
				
				//if (!is_filled($location)) 	{$err_msgf 	.= "<div class=\"error\">Please Select Location or  Closest Location to you.</span>";$red_store="red";}   									
                //else                        {$location 	 = ucwords($location);}
				
				
				if(!is_filled($ppl))   {$err_msgf 	.= "<div class=\"error\">Please Choose What your are Registering for.</div>";$red_ppl="red";}

				//if(!is_filled($validpass))  {$err_msg 	.= "<div class=\"error\">Do you have a valid passport? </div>";$red_validpass="red";}
				
				//if(!is_filled($validage))   {$err_msg 	.= "<div class=\"error\">Are you over 21 years of age?</div>";$red_validpass="red";}	
				
				
				if(!is_filled($gender))     {$err_msgf 	.= "<div class=\"error\">Your Gender Required</span>";$red_gender="red";}
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


	  
	   			//if(!is_filled($dob) ) 		{ $err_msgf .= "<li class=\"error\">The Birthday  Field are Empty</li>";$red_dob="red"; }
				//elseif(!($ss2=="true")) 	{$err_msg .= "<li class=\"error\">Your Date of Birth is not a valid one.</li>";}
				//else 						{$dob = strtolower(trim($dob));}
				
				
					
				
				if (!is_filled($location)) 	{$err_msgf 	.= "<div class=\"error\">Please Select Location or  Closest Location to you.</span>";$red_store="red";}   									
                else                        {$location 	 = ucwords($location);}

				if(!is_filled($acceptedt))  {$err_msgf 	.= "<div class=\"error\">Please Accept the Terms & Conditions.</div>";$red_acceptedt="red";}
		   
	 			 

				if ($err_msgf=="") {include('incs/register_img_upload1.inc.php');}
	
						
		 		if ($err_msgf=="")
					{	
						$s1					=$ppl;
						
						$qinsert 			= "insert into feedback_form values(NULL,'$fbid','$location','$firstname','$surname','$image_name','$email','$cell','$passport','$validpass','$dob','$s1','0','0','0','0',md5('$pass1'),'0','$acceptedn','$acceptedt','$dob','$gender','$atype',now())";
						
						$rstinsert 			= mysqli_query($conn,$qinsert) or die(mysqli_error($conn));
						
						
	
						$just_id 			= mysqli_insert_id($conn);
						
						$qinsert_entry 		= "insert into entries values('$just_id',now())";
						$rstinsert_entry 	= mysqli_query($conn,$qinsert_entry) or die(mysqli_error($conn));
						
						$hash =  mysqli_real_escape_string($conn,$email);

						$query = "SELECT * FROM feedback_form WHERE id = '$just_id';";
	
						$result  = mysqli_query($conn,$query) or die(mysqli_error($conn));
						$user = mysqli_fetch_array($result);
							
						$email	=$user['email'];
						$hash 	= md5(mysqli_real_escape_string($conn,$email));
						$dob	=$user['dob'];
						
				
				//list($dob_y, $dob_m, $dob_d) = split('[/.-]', $dob);
								
				//$data = "04/30/1973";
				
				list($dob_y,$dob_m, $dob_d) = explode("-", $dob);
				
				//echo $month; // foo
				//echo $day; // *
				//echo $year;
				
				
				if ($user['sex']==1){$the_gender="Male";} else {$the_gender="Female";}
				
			    $file_name = 'images/userfiles/'.trim($hash).'.png';

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
						$user_details1 = array
							(
					
								'firstname'=>array('text'=>$user['firstname'], 'x'=>303,'y'=>265),
								'lastname'=> array('text'=>$user['surname'], 'x'=>303,'y'=>225),
								'sex'=> array('text'=>$the_gender, 'x'=>303,'y'=>390),
								'dob_d'=> array('text'=>$dob_d, 'x'=>303,'y'=>350),
								'dob_m'=> array('text'=>$dob_m, 'x'=>375,'y'=>350),
								'dob_y'=> array('text'=>$dob_y, 'x'=>445,'y'=>350),
								'pp_n'=> array('text'=>$user['id'], 'x'=>580,'y'=>160),
						
								'exp_d'=> array('text'=>'30', 'x'=>303,'y'=>430),
								'exp_m'=> array('text'=>'11', 'x'=>375,'y'=>430),
								'exp_y'=> array('text'=>'2019', 'x'=>445,'y'=>430),
								'nearest_store' =>array('text'=>$user['location'], 'x'=>580,'y'=>350),
						
								//'picture' =>  array('text'=>'$photo', 'x'=>165,'y'=>77),
							);
				
						imageAlphaBlending($base_img, true);
						imageSaveAlpha($base_img, true);
					
						$font = 'assets/eurostib.ttf';
						$color = imagecolorallocate($base_img, 0, 0, 0);
					
						//insert text
						foreach($user_details1 as $k=>$v)
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
							//imagejpeg($thumb);s

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
					
					//$vvv=mysql_real_escape_string(trim($hash)).'.png';
                    $vvv = trim($hash).'.png';
						
					$query_u 		= "UPDATE feedback_form SET passport='$vvv' WHERE id=$just_id";	
					$rstinsert_u 	= mysqli_query($conn,$query_u) or die(mysqli_error($conn));	
						
					$postSuccess	= 1;	
						
						
						
						//echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=http://localhost/20_south_africa/tnma_FK/bluecarpet/app1.0/index.php?page_ren=e&&action=thanks"."\">";		
		
					}
}
?>


	<div class="about-welcome-inner">

		<?php 



	
			
	//error_reporting(0);
	
	//$fan = "no";
	//if($data['page']['liked'] == 1){$fan = "yes";}else {$fan = "no";}




		
			$qfbidpreznt 	= "select fbid from feedback_form where fbid='$fbid' and fbid !='' ";
			$rstfbidpreznt  = mysqli_query($conn,$qfbidpreznt) or die(mysqli_error($conn));
			if(mysqli_num_rows($rstfbidpreznt)>0)
				{
					$rowfbidpreznt=mysqli_fetch_array($rstfbidpreznt) or die(mysqli_error($conn));
					$played_promo=1;
				}
			
			if ( (!($postSuccess==1)) && ($played_promo==1) )
		
		
		{ ?>
        
   			<div style="font-family:'Arial Black', Gadget, sans-serif">

                   <div class="alert alert-error">

                       You have already completed this Step 1.
                   </div>
                <?php 
	
					$the_user=$row_membername['id'];
	
					$query = "SELECT * from feedback_form where fbid='$fbid'";
					$result  = mysqli_query($conn,$query) or die(mysqli_error($conn));
					$user = mysqli_fetch_array($result);
	
					$passport	=$user['passport'];
	            ?>
    
                <?php if(!empty($user['passport'])){?>
                    <div style="padding-left:0px">
                        <img width="550" src="images/userfiles/<?php echo $user['passport']?>">
                    </div>
                <?php }?>

                
        	</div> 
        <?php }?>
    </div>



<?php if (  (!($played_promo==1) )  ) {?>

	<div id="user-info"></div>
 
		<div class="about-welcome-inner">
    
    		<h1>Get your WebKings Member Passport </h1>
        
            <p>
                Complete the form below to get your WebKings Member Passport and stand a chance to win a Scholarship Grant for 1 year or 6 months of Web/Mobile Development Training and Placement also amazing trips for to South Africa,France,Spain,USA,Canada for Student/Technology Conferences with spending $1000 in spending money.
            </p>
        
            <!--ol style="list-style: normal;color:#8D8C8C;">
                <li>1. Entrants must be over 21 years of age.</li>
                <li>2. The winner must partake of the prize between the 19th  May 2013 and 29th of May 2013. Therefore entrants must be available to travel during these dates.</li>
                <li>3. The Winner and their partner must have a passport valid for up to 6 months after the 29th of May 2013.</li>
            </ol-->
    
			<form class="form-horizontal" enctype="multipart/form-data" action="index.php?page_ren=36" method="post">
        
        
    			<table cellSpacing=0 cellPadding=5 border=0 class="bodytxt" width="700px">
            
              		<?php if ($fan=="no")  {?>
              
                        <tr>
                            <td colspan="2">  
                                <div style="text-align:center; margin-left:auto; margin-right:auto;">
                                 
                                    <div class="fb-like" onClick="FB.Event.subscribe('edge.create', function(response) {window.location.reload();} );" data-href="https://www.facebook.com/webkingsafrica" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false">
                                    </div>                                    
    
                                </div>
                            </td>
                        </tr>
                        
            		<?php }?>
            
        		<tr class="bdtxt">
                
                    <td colspan="2" align=right class=bodycopy>
                    
                    	<div >
                    
                    		<div style="padding-bottom:2px" align="center">
                    		
                            		<strong>Register Now !!! Students - TOT - Resource - Volunteers (Fields with an asterisk <span class=formtxt>*</SPAN> are required)</strong>
                            
                        	</div>
                        
                        
      
	      
	      	 <?php if(!empty($err_msgf))
			    {
                	print "<div align=center >";
                	echo $err_header . $err_msgf . $err_footer . "<br>";
                	print "</div>";
                 }
             ?>
 
	  	     <?php // echo $err_msgf; ?>           
             
             </div>
             
             </TD>

              </TR>
                  <TR>
                    <TD colspan="2" align=right class=bodycopy>
                    <div align="center">
                        <span class="formtxt">
                            <strong>
                            	<br><?php echo $ss1;?>
                            </strong>
                        </span>
                    </div></TD>
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
        <span style="color:<?php echo $red_surname?>">Surname:</span>
        </strong>
        <span style="color:<?php echo $red_surname?>"></span>
    
    </td>
    <td>
    
    	<input type="text"  name="surname" value="<?php echo stripslashes($surname)?>" size="60" maxlength="60" class="textField" />
        
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
  
  
  
  
    
  
  
  
 
  
  <tr>
    <td>
    
    	<span class="formtxt"></span>
        <span   style="color:<?php echo $red_gender?>; padding-right:150px">
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
    
    	<span class="formtxt">*</span>
        <span style="color:<?php echo $red_cell?>"><strong>Contact No.</strong>:</span>
    
    </td>
    <td>
    
    	<input type="text" id="edit-firstname" name="cell" value="<?php echo stripslashes($cell)?>" size="60" maxlength="60" class="textField" />
    
    </td>
  </tr>
  
  
  
  <tr>
    <td>
    
    	<span class="formtxt"></span>
        <span style="color:<?php echo $red_dob?>"><strong>Date of Birth:</strong></span> 
    
    </td>
    <td>
    
    	<input placeholder="YYYY-MM-DD" type="text" id="edit-firstname" name="dob" value="<?php echo $dob ? stripslashes($dob) : $bday;?>" size="60" maxlength="60" class="textField" />
        <span class="help-inline">(YYYY-MM-DD) eg. (1980-02-02) </span>
    
    </td>
  </tr>
  
  
  
<!--   <tr>
    <td>
    	
        
		<span style="color:<?php echo $red_photo?>; padding-right:70px">
        <strong>Your Picture (<em>Optional</em>)</strong> :
        </span>
							
					
    
    
    </td>
    <td>
             
        <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
        <input name="userfile" type="file" size="25">
    
    </td>
  </tr> -->
  
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
  
  
  
  
</table>


                
                  <!--<TR class="bdtxt">
                    <TD colspan="2" align=right class=bodycopy><div align="center"><span class=formtxt><strong>Your Login Information</strong></span></div></TD>
                  </TR>
                  
                  <TR class="bdtxt">
                    <TD class=bodycopy align=right>
                    	<span class="formtxt">*</span>
                    	<span style="color:<?php echo $red_pass?>">Choose a Password:</span></TD>
                    <TD class=bodycopy>
                    	<INPUT class="contact-input" type=password maxLength=16 name="pass1">            
                    </TD>
                  </TR>
                  <TR class="bdtxt">
                    <TD class=bodycopy align=right>
                    	<span class="formtxt">*</span>
                    	<span style="color:<?php echo $red_pass?>">Confirm Password:</span>
                    </TD>
                    <TD class=bodycopy>
                    	<INPUT class="contact-input" type=password maxLength=16 name="pass2">                                          
                    </TD>
                  </TR> -->




<!--	<div class="controls">
    
        <label class="control-label">
            * <span style="color:<?php echo $red_validpass?>"><strong>Are you Passionate about Internet Technologies and Want to be a part of our WEB Projects?</strong>:</span>
        </label>                
        <label class="radio inline">
            <input type="radio" name="validpass" value="yes" class="form" <?php if($validpass=="yes"){echo "checked";}?>>  Yes
        </label>
        <label class="radio inline">
             <input type="radio" name="validpass" value="no"  class="form" <?php if($validpass=="no")  {echo "checked";}?>> No
        </label>
    
    </div> -->
  
	<div class="controls">
    
    	<strong style="color: #F00">* I am Registering for the "100 Semi-Sponsored" Students (12 months HTML5/CSS3 Web Training & Placement).</strong> 
        
        
        <input style="border-style:solid; border-color:#e1226d; border-width:1px;" type="radio" id="checkquery" checked="checked" name="ppl" <?php if($ppl==1){echo "checked";}?>  value=1 /><?php echo $err_msga;?>
    
   </div>
  
   <div class="controls">
    
    <strong style="color: #090"> * I have DEV experience: Registering for the "TRAINER of TRAINER" project (5 months Intensive Web Dev Training).</strong> 
                 
                 <input style="border-style:solid; border-color:#e1226d; border-width:1px;" type="radio" id="checkquery" name="ppl" <?php if($ppl==2){echo "checked";}?>  value=2 /><?php echo $err_msga;?>
    
</div>
  
  
   <div class="controls">
    
    	<strong style="color: #FC0"> * I am a Web Dev/Content/Film Professional: I want to Volunteer time for Training at a Center or as Resource Person.</strong> 
                 
                 <input style="border-style:solid; border-color:#e1226d; border-width:1px;" type="radio" id="checkquery" name="ppl" <?php if($ppl==4){echo "checked";}?>  value=4 /><?php echo $err_msga;?>
    
  </div>
  
  
  <div class="controls">
    
     <strong style="color: #F69"> * I am or My Child/Student Under 16: I am  Registering (My School) for the "KIDS 4 CODING" Project.</strong> 
                 
                 <input style="border-style:solid; border-color:#e1226d; border-width:1px;" type="radio" id="checkquery" name="ppl" <?php if($ppl==3){echo "checked";}?>  value=3 /><?php echo $err_msga;?>
    
 </div>
  
  
 
 
 <div class="controls">
    	
        <strong>  I would like to receive Webkings's weekly newsletter for all the latest events, courses, products &amp; competitions.</strong> 
                 
                 <input style="border-style:solid; border-color:#e1226d; border-width:1px;" type="checkbox" id="checkquery" checked="checked" name="acceptedn" <?php if($acceptedn==1){echo "checked";}?>  value=1 /><?php echo $err_msga;?>
        
   </div>





            


            <div class="controls">
                <label class="checkbox">
                    <span class="formtxt">*</span>
                    	<span style="color:<?php echo $red_acceptedt?>">
                        	I have read and understand the <a class="ajax" href="incs/terms.php">Terms &amp; Conditions</a>.
                    	</span>


                <span style="padding-left:0px">
<input style="border-style:solid; border-color:#e1226d; border-width:1px;" type="checkbox" id="checkquery" checked="checked" name="acceptedt" <?php if($acceptedt==1){echo "checked";}?>  value=1 /><?php echo $err_msga;?></span>
                </label>
            </div>



           <div class="form-actions" align="right">
                <input type="hidden" value="OK" name="sendfb">
                <input  type="hidden" id='fan' name='fan' value="<?php echo stripslashes($fan)?>" />
                <input type="hidden" id="fbid"  name="fbid" value="<?php echo stripslashes($fbid) ?>">
                

            
            
            
            
            
            
            
        
            <input type="submit" id="edit-submit" name="op" value="Register" class="form-submit" />
            <input type="hidden" value="OK" name="sendfb">
            <!--<button type="submit" class="btn btn-facebook">Apply for Your Training Grant</button> -->
    
        </div>
              

  </form>

    <script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
    <script type="text/javascript">
        $(".ajax").colorbox({width: 600,height: 800});
    </script>
</div>


		<script>
            function loginUser() {FB.login(function(response) {}, {scope:'email,user_likes,publish_actions'});}    
        </script>
        <style>
            body.connected #login { display: none; }
            body.connected #logout { display: block; }
            body.not_connected #login { display: block; }
            body.not_connected #logout { display: none; }
        </style>	
        <!--<div id="user-info"></div> -->
        <script>
            function updateUserInfo(response) 
                {
                    FB.api('/me', function(response) 
                        {
                            //document.getElementById('user-info').innerHTML 	= '<img src="http://graph.facebook.com/' + response.id + '/picture">' + response.name;
                            document.getElementById('firstname').value 		= response.first_name;
                            document.getElementById('surname').value 		= response.last_name;
                            document.getElementById('email').value 			= response.email;
                            document.getElementById('fbid').value 			= response.id;
                            document.getElementById('profileimage').value = 'https://graph.facebook.com/' + response.id + '/picture';
                        });		  
                    FB.api('/me/likes/228774063868216', {limit: 1}, function(r) 
                        { 
                            if (r.data.length == 1) {var output='yes';document.getElementById('fan').value = output;}	
                            else 					{var output='no';document.getElementById('fan').value = output;}
                        });
                }
        </script>
        <script>
            function checkfanstatus() 
                {
                    FB.api('/me/likes/228774063868216', {limit: 1}, function(r) 
                        { 
                            if (r.data.length == 1) {var output='yes';document.getElementById('fan').value = output;}	
                            else 					{var output='no';document.getElementById('fan').value = output;}
                        });
                }	
                setInterval( "checkfanstatus()", 5000 );
                window.onload = checkfanstatus;
        </script>



	<?php  }?>
	
    
    
    
<?php if($postSuccess==1){?>

	<?php 
		
		require_once 'swift/lib/swift_required.php';

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
					->setUsername('learn@webkings.co.za')
					->setPassword('0lujc1na@');
			
				//create the message
				$message = Swift_Message::newInstance();
				//create the mailer
				$mailer = Swift_Mailer::newInstance($transport);
			
				$subject 	= "WebKings Training & Placement Scholarships!";
			
				// get the body
				$body = get_body($toName,$message,$subject,$fromName);
			
				//text body
				$textBody ="Dear {$toName}
				Welcome to the WebKings Training & Placement Project!
				
				You have completed step 1 of winning the WebKings Scholarship!!! 
				Please Take a Minute to activate you Email via the following link. 
				Then proceed to Complete the Next 4 steps in the process.
				
				Step 2 Answer Interview Questions
				Step 3 Pay your Registration Fee to Confirm Your Place
				Step 4 Pay 1 - 6 months of monthly installment  
				Step 5 Orientation and Start of Class 
			
			 ";
			
				// set FROM: details
				$message->setFrom(array($fromEmail => "WebKings Training & Placement Project" ));
				// set Sender
				$message->setSender('learn@webkings.co.za');
			
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
			
		//send_invite($email,$firstname,"learn@webkings.co.za","WebKings Training & Placement Project");
	?>
		
	<?php include('incs/thanks.php')?>
    
	<?php
    
        $img = "images/userfiles/".$user['passport'].".png";
    
        $facebook->api('/me/feed', 'POST', array(
        'link' => 'http://apps.facebook.com/webkings_sch',
        'message' => 'I Just Applied for the WebKings Scholarship',
        'picture' => $img,
        'description'=>"130 Students Each Will Selected from around South Africa & Ghana  for a 1 year Training and Placement Project in Web/mobile/content Development.
        
        ",
        'caption'=>'Apply Now! WebKings 130 Scholarships',
    
        'name'=>'WebKings 130 Scholarships'));
    
    ?>


<?php }?>
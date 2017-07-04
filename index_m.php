<?php error_reporting (E_ALL ^ E_NOTICE);?>
<?php include('lib_files/public_inc_fns/itop_code1.inc.php')?>
<?php include('lib_files/public_inc_fns/head_code1.inc.php')?>










	<?php
	
	
		$qlocations 				="select * from branches order by id";
	
		if(isset($_REQUEST["send"])&&(($_REQUEST["send"])=='OK') && ($pagecatcode==36))	
	
			{ 
	
			$log           			=trim($_REQUEST['xl1']);
			
			$postSuccess			=trim($_REQUEST['ps']);
			
			$firstname  			=trim($_REQUEST["firstname"]);
			$surname  				=trim($_REQUEST["surname"]);
			
			$photo  				=trim($_REQUEST["userfile"]);
			
			$email         			=trim($_REQUEST["email"]);
			$cell  					=trim($_REQUEST["cell"]);	
										
		
			
			$validpass  			=trim($_REQUEST["validpass"]);
			$validage  				=trim($_REQUEST["validage"]);
			
		
			$location  				=trim($_REQUEST["location"]);
			
			$acceptedn  			=trim($_REQUEST["acceptedn"]);
			$acceptedt  			=trim($_REQUEST["acceptedt"]);
			
			$dob					=trim($_REQUEST["dob"]);
			$gender					=trim($_REQUEST["gender"]);
			$ppl					=trim($_REQUEST["ppl"]);
			
			$atype					="mobile";
			
			$pass1      			=trim($_REQUEST["pass1"]);
			$pass2     				=trim($_REQUEST["pass2"]);
			
			
		
			$err_msg 		= "";
			$err_header 	= "<p class=\"error\">";
			$err_header 	.= "<strong>Please take note of the following:</strong><ul class=\"error\">";
			$err_footer 	= "</ul></p>";
	

				
				if(!is_filled($firstname))       	{$err_msg 	.= "<div class=\"error\">First Name Required</span>";$red_firstname="red";}
				else                            	{$name 	 = ucwords($name);}
		
				
				if(!is_filled($surname))       		{$err_msg 	.= "<div class=\"error\">Surname Required</span>";$red_surname="red";}
				else                            	{$surname 	 = ucwords($surname);}
		
				if(!is_filled($email))          	{$err_msg 	.= "<div class=\"error\">Email Field is Empty</span>";$red_email="red";}
				elseif(!is_valid_email($email)) 	{$err_msg 	.= "<div class=\"error\">Email Address Invalid.</span>";$red_email="red";}
				else                            	{$email 	 = strtolower(trim($email));}
				
				$qimg_mbrs   = "select email from feedback_form where email='$email'";
	   			$rstuse_mbrs = mysql_query($qimg_mbrs) or die(mysql_error());
			
	   			if(mysql_num_rows($rstuse_mbrs) > 0){$err_msg .= "<li class=\"error\">The email you selected is already part of our system. Please Choose another one.</li>";$red_email="#ff0000";}
				else{$email=trim($email);}
			
			
				
				if(!is_filled($cell))           	{$err_msg 	.= "<div class=\"error\">Please Enter Your Cell Number.</span>";$red_cell="red";}
				elseif(!is_numeric($cell))			{$err_msg  .= '<div class=\"error\">Contact Number can only contain numbers.</span>';$red_cell="red";}								
				//elseif(strlen($cell) > 10 || strlen($cell) < 10)
													//{$err_msg  .= '<div class=\"error\">Contact Number should be 10 numeric characters long.</span>';$red_cell="red";}
				else 								{$cell 		 = trim($cell);}
				
				
				
				
				if(!is_filled($validpass))  {$err_msg 	.= "<div class=\"error\">Are you Pationate about Internet Technologies and Want to learn Web Development? </div>";$red_validpass="red";}
				
					
				
				
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
				
				
					
				
				if (!is_filled($location)) 	{$err_msg 	.= "<div class=\"error\">Please Select Location or  Closest Location to you.</span>";$red_store="red";}   									
                else                        {$store 	 = ucwords($store);}
				
				
				if(!is_filled($ppl))   {$err_msg 	.= "<div class=\"error\">Please Choose What your are Registering for.</div>";$red_ppl="red";}

				if(!is_filled($acceptedt))  {$err_msg 	.= "<div class=\"error\">Please Accept the Terms & Conditions.</div>";$red_acceptedt="red";}
		   
	 			if(!is_filled($pass1) || !is_filled($pass2)) {$err_msg .= "<li class=\"error\">Please choose and comfirm a password</li>"; $red_pass="#ff0000";}
	  			elseif($pass1!=$pass2) 						 {$err_msg .= "<li class=\"error\">Your passwords do not match</li>"; $red_pass ="#ff0000";}
	  			else {$password = trim($pass1);} 

				if ($err_msg=="") {include('incs/register_img_upload1.inc.php');}
	
						
		 		if ($err_msg=="")
					{	
						$s1					=$ppl;
						$qinsert 			= "insert into feedback_form values(NULL,'$fbid','$location','$firstname','$surname','$image_name','$email','$cell','$passport','$validpass','$dob','$s1','0','0','0','0',md5('$pass1'),'0','$acceptedn','$acceptedt','$dob','$gender','$atype',now())";
						$rstinsert 			= mysql_query($qinsert) or die(mysql_error());
						
						
	
						$just_id 			= mysql_insert_id();
						
						//$qinsert_entry 		= "insert into points values('$just_id',now())";
						//$rstinsert_entry 	= mysql_query($qinsert_entry) or die(mysql_error());
						
						
						
						
						
						
						$hash =  mysql_real_escape_string($email);

						$query = "SELECT * FROM feedback_form WHERE id = '$just_id';";
	
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
						
								'exp_d'=> array('text'=>'30', 'x'=>303,'y'=>430),
								'exp_m'=> array('text'=>'11', 'x'=>375,'y'=>430),
								'exp_y'=> array('text'=>'2019', 'x'=>445,'y'=>430),
								'location' =>array('text'=>$user['location'], 'x'=>580,'y'=>350),
						
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
					$query_u 		= "UPDATE feedback_form SET passport='$vvv' WHERE id=$just_id";	
					$rstinsert_u 	= mysql_query($query_u) or die(mysql_error());	
						
					$postSuccess	= 1;
					
					session_start();

					$_conn = mysql_connect($mysql_serv, $mysql_user, $mysql_pass) or die(mysql_error());
					mysql_select_db($mysql_db) or die(mysql_error());
					$_q = "select * from users where username='$email' and password= md5('$pass1')";
					$_rst = mysql_query($_q) or die(mysql_error());
					if(mysql_num_rows($_rst) == 1)
					{
						$_rowUser = mysql_fetch_array($_rst) or die(mysql_error());
						
						
						$_SESSION["sess_username"] = $_rowUser['username'];
						$_SESSION["sess_usertype"] = $_rowUser['mainpriv'];
						$_SESSION["sess_add"]      = $_rowUser['addpriv'];
						$_SESSION["sess_delete"]   = $_rowUser['deletepriv'];
						$_SESSION["sess_show"]     = $_rowUser['showpriv'];
						$_SESSION["sess_edit"]     = $_rowUser['editpriv'];
						
						
						//session_register('sess_username','sess_usertype','sess_add','sess_delete','sess_show','sess_edit');
						
						//header("Location: index.php?page_ren=36&s=1");
																
					}
						
						
						
						
						//echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=http://localhost/_organizational_FK/live_FK/webkings.co.za/app1.0/index.php?page_ren=77&&action=thanks"."\">";		
		
					}
}
	?>









<?php

	if ($postSuccess==1)
		{
			session_start();
 
	//include("lib_files/user_details.php");
		
	$_send    = md5("OK");
	$email	  = 	$_REQUEST['email'];
	$password = 	$_REQUEST['pass1'];
	//$ismobile =     $_REQUEST['is_mobile'];
	
	if(!isset($_send) || $_send!=md5("OK"))
	{
		header("Location:../../index.php?page_ren=l");
		echo $_send ."<br>" . md5("OK");
		echo $_send;
	}
	else if(isset($_send) && $_send==md5("OK"))
	{
		$_conn = mysql_connect($mysql_serv, $mysql_user, $mysql_pass) or die(mysql_error());
		mysql_select_db($mysql_db) or die(mysql_error());
		$_q = "select * from feedback_form where email='$email' and password= md5('$password')";
		$_rst = mysql_query($_q) or die(mysql_error());
		if(mysql_num_rows($_rst) == 1)
		{
			$_rowUser = mysql_fetch_array($_rst) or die(mysql_error());	
			
			$log 						= md5("YES");
				
			$_SESSION["sess_id1"]  		= $_rowUser['id'];
			$_SESSION["sess_name1"] 	= $_rowUser['firstname'] ." ". $_rowUser['surname'];
			$_SESSION["sess_email1"]   	= $_rowUser['email'];
			
			
			$is_stage1				= $_rowUser['s1'];
            $is_stage2				= $_rowUser['s2'];
            $is_stage3				= $_rowUser['s3'];
            $is_stage4				= $_rowUser['s4'];
            $is_stage5				= $_rowUser['s5'];
			
			
			//if ($is_Admin==1) {header("Location:../../index.php?page_ren=58&xl1=".md5("YES"));}
            //elseif($ismobile) { header("Location:".$the_url); }
            //else{
              //  header("Location:".$the_url);
              //  exit();
            //}
			//else {header("Location:../../index.php?page_ren=w1&view=1&xl1=".md5("YES"));}
		}
		else
		{

            if($ismobile){
                //$_SESSION['err_msg_log'] = "Incorrect Username or Password.";
                //header("Location:".$the_url);
                //exit();
            }else{
                //session_destroy();
			    //header("Location:../../index.php?page_ren=l&l=".md5("NO"));
            }
		}
	}
	
	
}
?>
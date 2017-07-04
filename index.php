<?php //error_reporting (E_ALL ^ E_NOTICE);?>
<?php 

	error_reporting (E_ALL);
	ini_set('display_errors', 1);

?>
<?php include('lib_files/public_inc_fns/itop_code1.inc.php')?>
<?php include('lib_files/public_inc_fns/head_code1.inc.php')?>

<?php

	require 'src/facebook.php';
	
	if(isset($_REQUEST["signed_request"]))
	
		{
   			$signed_request 				= $_REQUEST["signed_request"];
    		list($encoded_sig, $payload) 	= explode('.', $signed_request, 2);
    		$data = json_decode(base64_decode(strtr($payload, '-_', '+/')), true);

    		//$auth_url = $facebook->getLoginUrl(array('scope'=>'email,publish_stream,user_birthday'));

    		$app_id 						= "1406336512978895";
    		$canvas_page 					= "http://apps.facebook.com/webkings_sch";
    		$auth_url 						= "https://www.facebook.com/dialog/oauth?client_id=". $app_id . "&redirect_uri=" . urlencode($canvas_page)."&scope=email,user_birthday";

			if (empty($data["user_id"]))
				{
					echo("<script> top.location.href='" . $auth_url . "'</script>");
					exit();
				}

			$facebook = new Facebook(array(
				'appId'  	=> '1406336512978895',
				'secret' 	=> 'ff1e9f003525fbf3c2567e995ffc7eff',
				'cookie'	=> true,
				'token' 	=>$data['oauth_token']
			));

		}
	else
		{
			$facebook = new Facebook(array(
				'appId'  	=> '1406336512978895',
				'secret' 	=> 'ff1e9f003525fbf3c2567e995ffc7eff',
				'cookie'	=> true,			
			));
		}
	// See if there is a user from a cookie
		$fbuser = $facebook->getUser();

	if ($fbuser) 
	
		{
			try {
				// Proceed knowing you have a logged in user who's authenticated.
				$user_profile = $facebook->api('/me');
				$signed_request = $facebook->getSignedRequest();
				$_SESSION["sess_id_fb"] = $user_profile['id'];
				
				$fbId					= $user_profile['id'];
				
				//$_SESSION["sess_id1"] = $fbuser;
				
				//user profile pic
				
				$url = 'http://graph.facebook.com/'.$fbId.'/picture?type=normal';
				
				copy("https://graph.facebook.com/".$fbId."/picture?width=9999&height=9999", "avatar/".$fbId.".jpg");
				
			} catch (FacebookApiException $e) {
				error_log($e);
				$fbuser = null;
		}
	}

	
	
	if ($fbuser && !$user_data) 
		{
			$logoutUrl = $facebook->getLogoutUrl();
		} 
	elseif(!$fbuser)
		{
			$loginUrl = $facebook->getLoginUrl(array('scope'=>'email,user_birthday'));
		}
	
	
	
	
		$genders = array('male'=>1,'female'=>2);

	if($user_profile['birthday'])
	
		{
			$bday = explode("/",$user_profile['birthday']);
			$bday = $bday[2]."-".$bday[0]."-".$bday[1];
		}
	else
	
		{
			$bday = "";
		}
			
		$log           			=trim($_REQUEST['xl1']);
			
		$fan					=trim($_REQUEST["fan"]);
		
		$fbid					=trim($_REQUEST["fbid"]) ? trim($_REQUEST["fbid"]) : $user_profile['id'];
		
		$firstname  			=$_REQUEST['firstname'] ? trim($_REQUEST["firstname"]): $user_profile['first_name'];
		
		$surname  				=$_REQUEST['surname'] ? trim($_REQUEST["surname"]): $user_profile['last_name'];
		
		$photo  				=trim($_REQUEST["userfile"]);
		
		$email         			=trim($_REQUEST["email"]) ? trim($_REQUEST["email"])  :$user_profile['email'];
		
		$gender					=trim($_REQUEST["gender"]) ? trim($_REQUEST["gender"]) : $genders[$user_profile['gender']] ;	
	
	
	
	
	 if($user_profile['id']>1)
	 
	 	{

			$fbid=$user_profile['id'];
			
            $q_membername       = 	"select * from feedback_form where fbid ='$fbid'";
        
            $rst_membername     = 	mysqli_query($conn,$q_membername) or die(mysqli_error($conn));
            
            if(mysqli_num_rows($rst_membername)>0){$row_membername = mysqli_fetch_array($rst_membername) or die(mysqli_error());}
			
			$member_id			=	$row_membername['id']; 	
                                
            $member_name		=	$row_membername['firstname']." ".$row_membername['surname'];
            $member_email		=	$row_membername['email'];
			
			$step1				=	$row_membername['s1'];
			$step2				=	$row_membername['s2'];
			$step3				=	$row_membername['s3'];
			$step4				=	$row_membername['s4'];	
			$step5				=	$row_membername['s5'];
			
            //$memberorganization	=$row_membername['caption10'];
            //$membercode   		=$row_membername[0];

            if(!$row_membername['firstname'])
				{
                	$member_name = $user_profile['first_name']." ".$user_profile['last_name'];
            	}

		}
	
	
	
	
	
	
	
		//Quick Registraion Form - Email
		
		
		$qlocations 					="select * from branches order by id";
		
		if(isset($_REQUEST["send"])&&(($_REQUEST["send"])=='OK') && ($pagecatcode==101))	
	
			{ 
	
				$log           			=trim($_REQUEST['xl1']);
				
				$postSuccess			=trim($_REQUEST['ps']);
				
				$name					=trim($_REQUEST["name"]);
		
				//$full='John Doe Jr.';
				
				$full1					=explode(' ', $name);
				$firstname				=$full1[0];
				$surname				=ltrim($name, $firstname.' ');
				
				//echo "$first + $rest";
				
				//$firstname  			=trim($_REQUEST["firstname"]);
				//$surname  			=trim($_REQUEST["surname"]);
				
				//$photo  				=trim($_REQUEST["userfile"]);
				
				$email         			=trim($_REQUEST["email"]);
				$cell  					=trim($_REQUEST["cell"]);	
											
			
				
				$validpass  			=1;
				$validage  				=trim($_REQUEST["validage"]);
				
			
				$location  				=trim($_REQUEST["location"]);
				
				$acceptedn  			=trim($_REQUEST["acceptedn"]);
				$acceptedt  			=trim($_REQUEST["acceptedt"]);
				
				$dob					=trim($_REQUEST["dob"]);
				$gender				=trim($_REQUEST["gender"]);
				
				$ppl					=trim($_REQUEST["ppl"]);
				
				$atype					="Qweb";
				
				$pass1      			=trim($_REQUEST["pass1"]);
				//$pass2     			=trim($_REQUEST["pass2"]);
				
				$activation 			= md5(uniqid(rand(), true));
			
			
		
				$err_msg 		= "";
				$err_header 	= "<p class=\"error\">";
				$err_header 	.= "<strong>Please take note of the following:</strong><ul class=\"error\">";
				$err_footer 	= "</ul></p>";
	

				if(!is_filled($name))       	{$err_msg 	.= "<div class=\"error\">Name Required</span>";$red_name="red";}
				else                            {$name 	 = ucwords($name);}
		
				
				
				//if(!is_filled($firstname))       	{$err_msg 	.= "<div class=\"error\">First Name Required</span>";$red_firstname="red";}
				//else                            	{$name 	 = ucwords($name);}
		
				
				//if(!is_filled($surname))       		{$err_msg 	.= "<div class=\"error\">Surname Required</span>";$red_surname="red";}
				//else                            	{$surname 	 = ucwords($surname);}
		
				if(!is_filled($email))          	{$err_msg 	.= "<div class=\"error\">Email Field is Empty</span>";$red_email="red";}
				elseif(!is_valid_email($email)) 	{$err_msg 	.= "<div class=\"error\">Email Address Invalid.</span>";$red_email="red";}
				else                            	{$email 	 = strtolower(trim($email));}
				
				$qimg_mbrs   = "select email from feedback_form where email='$email'";
	   			$rstuse_mbrs = mysqli_query($conn,$qimg_mbrs) or die(mysqli_error());
			
	   			if(mysqli_num_rows($rstuse_mbrs) > 0){$err_msg .= "<li class=\"error\">The email you selected is already part of our system. Please Choose another one.</li>";$red_email="#ff0000";}
				else{$email=trim($email);}
			
			
				
				if(!is_filled($cell))           	{$err_msg 	.= "<div class=\"error\">Please Enter Your Cell Number.</span>";$red_cell="red";}
				elseif(!is_numeric($cell))			{$err_msg  .= '<div class=\"error\">Contact Number can only contain numbers.</span>';$red_cell="red";}								
				//elseif(strlen($cell) > 10 || strlen($cell) < 10)
													//{$err_msg  .= '<div class=\"error\">Contact Number should be 10 numeric characters long.</span>';$red_cell="red";}
				else 								{$cell 		 = trim($cell);}
				
				
				
				
			

				function checkDateTime($data) 
					{
						if (date('Y-m-d H:i:s', strtotime($data)) == $data) {$ss1="true";} else { $ss1="false";}
					}   
    
       
    
				//$ss2=checkDateTime($dob);


	  
	   			//if(!is_filled($dob) ) 		{ $err_msg .= "<li class=\"error\">The Birthday  Field are Empty</li>";$red_dob="red"; }
				//elseif(!($ss2=="true")) 	{$err_msg .= "<li class=\"error\">Your Date of Birth is not a valid one.</li>";}
				//else 						{$dob = strtolower(trim($dob));}
				
				
					
				
				if (!is_filled($location)) 	{$err_msg 	.= "<div class=\"error\">Please Select Location or  Closest Location to you.</span>";$red_store="red";}   									
                else                        {$location 	 = ucwords($location);}
				
				
				//if(!is_filled($ppl))   	{$err_msg 	.= "<div class=\"error\">Please Choose What your are Registering for.</div>";$red_ppl="red";}

				if(!is_filled($acceptedt))  {$err_msg 	.= "<div class=\"error\">Please Accept the Terms & Conditions.</div>";$red_acceptedt="red";}
		   
	 			if(!is_filled($pass1))   	{$err_msg .= "<li class=\"error\">Please choose a password</li>"; $red_pass="#ff0000";}
	  			//elseif($pass1!=$pass2) 	{$err_msg .= "<li class=\"error\">Your passwords do not match</li>"; $red_pass ="#ff0000";}
	  			else {$pass1 = trim($pass1);} 

				//if ($err_msg=="") 		{include('incs/register_img_upload1.inc.php');}
	
						
		 		if ($err_msg=="")
					{	
					
						$s1					= 1;
						
						if($project_type==10) 
							{
								$ptype=" -->SWS ";  //Shared Working Space
								$firstname = $firstname.$ptype;
								
							}
						
						//$postSuccess		= 1;
						
						$qinsert 			= "insert into feedback_form values(NULL,'$fbid','$location','$firstname','$surname','$image_name','$email','$cell','$passport','$validpass','$dob','$s1','0','0','0','0',md5('$pass1'),'0','$acceptedn','$acceptedt','0','$gender','$atype',now())";
						
						$rstinsert 			= mysqli_query($conn,$qinsert) or die(mysqli_error());
						
						
	
						$just_id 			= mysqli_insert_id($conn);
						
						$qinsert_entry 		= "insert into entries values('$just_id',now())";
						$rstinsert_entry 	= mysqli_query($conn,$qinsert_entry) or die(mysqli_error());

						$hash =  mysqli_real_escape_string($conn,$email);

						$query 	= "SELECT * FROM feedback_form WHERE id = '$just_id'";
						$result = mysqli_query($conn,$query) or die(mysqli_error());
	
						//$result  = $db->query($query);
						
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
				
				
				if ($user['sex']==1){$the_gender="Male";} else if($user['sex']==2) {$the_gender="Female";} else {$the_gender="Person";}
				
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
					$rstinsert_u 	= mysqli_query($conn,$query_u) or die(mysqli_error());	
						
					$postSuccess	= 1;
					
					
					
					session_start();

					$_conn = mysqli_connect($mysql_serv, $mysql_user, $mysql_pass) or die(mysqli_error());
					mysqli_select_db($_conn,$mysql_db) or die(mysqli_error($_conn));
					$_q = "select * from users where username='$email' and password= md5('$pass1')";
					$_rst = mysqli_query($_conn,$_q) or die(mysqli_error($_conn));
					if(mysqli_num_rows($_rst) == 1)
						{
							$_rowUser = mysqli_fetch_array($_rst) or die(mysqli_error($_conn));
							
							
							$_SESSION["sess_username"] = $_rowUser['username'];
							$_SESSION["sess_usertype"] = $_rowUser['mainpriv'];
							$_SESSION["sess_add"]      = $_rowUser['addpriv'];
							$_SESSION["sess_delete"]   = $_rowUser['deletepriv'];
							$_SESSION["sess_show"]     = $_rowUser['showpriv'];
							$_SESSION["sess_edit"]     = $_rowUser['editpriv'];
							
							
							//session_register('sess_username','sess_usertype','sess_add','sess_delete','sess_show','sess_edit');
							
							//header("Location: index.php?page_ren=53&s=1");
																	
						}
					
					
					
				}

			}
		
		
		
		
		
		
		
		
		
		//Main Registration Form
	
		if(isset($_REQUEST["send"])&&(($_REQUEST["send"])=='OK') && ($pagecatcode==36))	
	
			{ 
	
				$log           			=trim($_REQUEST['xl1']);
				
				$postSuccess			=trim($_REQUEST['ps']);
				
				$firstname  			=trim($_REQUEST["firstname"]);
				$surname  				=trim($_REQUEST["surname"]);
				
				$photo  				=trim($_REQUEST["userfile"]);
				
				$email         			=trim($_REQUEST["email"]);
				$cell  					=trim($_REQUEST["cell"]);	
											
			
				
				$validpass  			=1;   // showing not deleted
				$validage  				=trim($_REQUEST["validage"]);
				
			
				$location  				=trim($_REQUEST["location"]);
				
				$acceptedn  			=trim($_REQUEST["acceptedn"]);
				$acceptedt  			=trim($_REQUEST["acceptedt"]);
				
				$dob					=trim($_REQUEST["dob"]);
				$gender					=trim($_REQUEST["gender"]);
				$ppl					=trim($_REQUEST["ppl"]);
				
				$atype					="web";
				
				$pass1      			=trim($_REQUEST["pass1"]);
				//$pass2     				=trim($_REQUEST["pass2"]);
			
			
		
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
	   			$rstuse_mbrs = mysqli_query($conn,$qimg_mbrs) or die(mysqli_error($conn));
			
	   			if(mysqli_num_rows($rstuse_mbrs) > 0){$err_msg .= "<li class=\"error\">The email you selected is already part of our system. Please Choose another one.</li>";$red_email="#ff0000";}
				else{$email=trim($email);}
			
			
				
				if(!is_filled($cell))           	{$err_msg 	.= "<div class=\"error\">Please Enter Your Cell Number.</span>";$red_cell="red";}
				elseif(!is_numeric($cell))			{$err_msg  .= '<div class=\"error\">Contact Number can only contain numbers.</span>';$red_cell="red";}								
				//elseif(strlen($cell) > 10 || strlen($cell) < 10)
				//{$err_msg  .= '<div class=\"error\">Contact Number should be 10 numeric characters long.</span>';$red_cell="red";}
				else 								{$cell 		 = trim($cell);}
				
				
				
				
				//if(!is_filled($validpass))  {$err_msg 	.= "<div class=\"error\">Are you Pationate about Internet Technologies and Want to learn Web Development? </div>";$red_validpass="red";}
				
					
				
				
				//if(!is_filled($gender))     {$err_msg 	.= "<div class=\"error\">Your Gender Required</span>";$red_gender="red";}
				//else                        {$gender 	 = ucwords($gender);}
				
				
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


	  
	   			//if(!is_filled($dob) ) 		{ $err_msg .= "<li class=\"error\">The Birthday  Field are Empty</li>";$red_dob="red"; }
				//elseif(!($ss2=="true")) 	{$err_msg .= "<li class=\"error\">Your Date of Birth is not a valid one.</li>";}
				//else 						{$dob = strtolower(trim($dob));}
				
				
					
				
				if (!is_filled($location)) 	{$err_msg 	.= "<div class=\"error\">Please Select Location or  Closest Location to you.</span>";$red_store="red";}   									
                else                        {$location 	 = ucwords($location);}
				
				
				if(!is_filled($ppl))   		{$err_msg 	.= "<div class=\"error\">Please Choose What your are Registering for.</div>";$red_ppl="red";}

				if(!is_filled($acceptedt))  {$err_msg 	.= "<div class=\"error\">Please Accept the Terms & Conditions.</div>";$red_acceptedt="red";}
		   
	 			if(!is_filled($pass1)) 		{$err_msg .= "<li class=\"error\">Please choose a password</li>"; $red_pass="#ff0000";}
	  			//elseif($pass1!=$pass2) {$err_msg .= "<li class=\"error\">Your passwords do not match</li>"; $red_pass ="#ff0000";}
	  			else {$pass1 = trim($pass1);} 

				if ($err_msg=="") 			{include('incs/register_img_upload1.inc.php');}
	
						
		 		if ($err_msg=="")
					{	
						$s1					=$ppl;
						
						$qinsert 			= "insert into feedback_form values(NULL,'$fbid','$location','$firstname','$surname','$image_name','$email','$cell','$passport','$validpass','$dob','$s1','0','0','0','0',md5('$pass1'),'0','$acceptedn','$acceptedt','0','$gender','$atype',now())";
						
						$rstinsert 			= mysqli_query($conn,$qinsert) or die(mysql_error($conn));
						
						
	
						$just_id 			= mysqli_insert_id();
						
						$qinsert_entry 		= "insert into entries values('$just_id',now())";
						$rstinsert_entry 	= mysqli_query($conn,$qinsert_entry) or die(mysqli_error());

						$hash =  mysqli_real_escape_string($email);

						$query = "SELECT * FROM feedback_form WHERE id = '$just_id';";
	
						$result  = $db->query($query);
						$user = mysqli_fetch_array($result);
							
						$email	=$user['email'];
						$hash 	= md5(mysqli_real_escape_string($email));
						$dob	=$user['dob'];
						
				
				//list($dob_y, $dob_m, $dob_d) = split('[/.-]', $dob);
								
				//$data = "04/30/1973";
				
				list($dob_y,$dob_m, $dob_d) = explode("-", $dob);
				
				//echo $month; // foo
				//echo $day; // *
				//echo $year;
				
				
				if ($user['sex']==1){$the_gender="Male";} else if($user['sex']==2) {$the_gender="Female";} else {$the_gender="Person";}
				
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
					
					if(!isset($project_type))
						{
					
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
						
						
				}		
						
						//echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=http://localhost/_organizational_FK/live_FK/webkings.co.za/app1.0/index.php?page_ren=77&&action=thanks"."\">";		
		
		}
	}
?>









<?php

	if ( ($postSuccess==1) & ($project_type<10) )
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
		$_conn = mysqli_connect($mysql_serv, $mysql_user, $mysql_pass) or die(mysqli_error());
		mysqli_select_db($_conn,$mysql_db) or die(mysql_error());
		$_q = "select * from feedback_form where email='$email' and password= md5('$password')";
		$_rst = mysqli_query($_conn,$_q) or die(mysqli_error());
		if(mysqli_num_rows($_rst) == 1)
		{
			$_rowUser = mysqli_fetch_array($_rst) or die(mysqli_error());	
			
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






 
	<body class="columnsHome front not-logged-in node-type-page one-sidebar sidebar-second">
    
    
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=559183087477227";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>











<!-- Facebook Popup Widget START --><!-- Brought to you by www.MorganAndMen.com - www.TheBlogWidgets.com -->
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js' type='text/javascript'></script>
<style>
#fanback {
display:none;
background:rgba(0,0,0,0.8);
width:100%;
height:100%;
position:fixed;
top:0;
left:0;
z-index:99999;
}
#fan-exit {
width:100%;
height:100%;
}
#MorganAndMen {
background:white;
width:420px;
height:270px;
position:absolute;
top:58%;
left:63%;
margin:-220px 0 0 -375px;
-webkit-box-shadow: inset 0 0 50px 0 #939393;
-moz-box-shadow: inset 0 0 50px 0 #939393;
box-shadow: inset 0 0 50px 0 #939393;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
margin: -220px 0 0 -375px;
}
#TheBlogWidgets {
float:right;
cursor:pointer;
background:url(http://3.bp.blogspot.com/-NRmqfyLwBHY/T4nwHOrPSzI/AAAAAAAAAdQ/8b9O7O1q3c8/s1600/TheBlogWidgets.png) repeat;
height:15px;
padding:20px;
position:relative;
padding-right:40px;
margin-top:-20px;
margin-right:-22px;
}
.remove-borda {
height:1px;
width:366px;
margin:0 auto;
background:#F3F3F3;
margin-top:16px;
position:relative;
margin-left:20px;
}
#linkit,#linkit a.visited,#linkit a,#linkit a:hover {
color:#80808B;
font-size:10px;
margin: 0 auto 5px auto;
float:center;
}
</style>


<script type='text/javascript'>
//<![CDATA[
jQuery.cookie = function (key, value, options) {

// key and at least value given, set cookie...
if (arguments.length > 1 && String(value) !== "[object Object]") {
options = jQuery.extend({}, options);

if (value === null || value === undefined) {
options.expires = -1;
}

if (typeof options.expires === 'number') {
var days = options.expires, t = options.expires = new Date();
t.setDate(t.getDate() + days);
}

value = String(value);

return (document.cookie = [
encodeURIComponent(key), '=',
options.raw ? value : encodeURIComponent(value),
options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
options.path ? '; path=' + options.path : '',
options.domain ? '; domain=' + options.domain : '',
options.secure ? '; secure' : ''
].join(''));
}

// key and possibly options given, get cookie...
options = value || {};
var result, decode = options.raw ? function (s) { return s; } : decodeURIComponent;
return (result = new RegExp('(?:^|; )' + encodeURIComponent(key) + '=([^;]*)').exec(document.cookie)) ? decode(result[1]) : null;
};
//]]>
</script>
<script type='text/javascript'>
jQuery(document).ready(function($){
if($.cookie('popup_user_login') != 'yes'){
$('#fanback').delay(2000).fadeIn('medium');
$('#TheBlogWidgets, #fan-exit').click(function(){
$('#fanback').stop().fadeOut('medium');
});
}
$.cookie('popup_user_login', 'yes', { path: '/', expires: 7 });
});
</script>

<div id='fanback'>
<div id='fan-exit'>
</div>
<div id='MorganAndMen'>
<div id='TheBlogWidgets'>
</div>
<div class='remove-borda'>
</div>
<iframe allowtransparency='true' frameborder='0' scrolling='no' src='//www.facebook.com/plugins/likebox.php?

href=https://facebook.com/webkingsafrica&width=402&height=255&colorscheme=light&show_faces=true&show_border=false&stream=false&header=false'

style='border: none; overflow: hidden; margin-top: -19px; width: 402px; height: 230px;'></iframe><center>
<!--<span id="linkit">Powered by <a href="http://morganandmen.com">Morgan&Men SEO Consulting</a> - <a href="http://www.theblogwidgets.com">Widget</a></span> --></center>
</div>
</div>
<!-- Facebook Popup Widget END. Brought to you by www.MorganAndMen.com - www.TheBlogWidgets.com -->









<!--Floating Facebook Widget by www.TheBlogWidgets.com START-->
<script type="text/javascript"> /*<![CDATA[*/ jQuery(document).ready(function() {jQuery(".theblogwidgets").hover(function() {jQuery(this).stop().animate({right: "0"}, "medium");}, function() {jQuery(this).stop().animate({right: "-250"}, "medium");}, 500);}); /*]]>*/ </script> <style type="text/css"> .theblogwidgets{background: url("http://3.bp.blogspot.com/-TaZRLv66f8g/UoMnTyTbF6I/AAAAAAAAAGY/U4qcf-SP6d0/TheBlogWidgets_facebook_widget.png") no-repeat scroll left center transparent !important; float: right;height: 270px;padding: 0 5px 0 46px;width: 245px;z-index:  99999;position:fixed;right:-250px;top:20%;} .theblogwidgets div{ padding: 0; margin-right:-8px; border:4px solid  #3b5998; background:#fafafa;} .theblogwidgets span{bottom: 4px;font: 8px "lucida grande",tahoma,verdana,arial,sans-serif;position: absolute;right: 6px;text-align: right;z-index: 99999;} .theblogwidgets span a{color: gray;text-decoration:none;} .theblogwidgets span a:hover{text-decoration:underline;} } </style><!--Brought to you by www.TheBlogWidgets.com--><div class="theblogwidgets" style="">
<!--Brought to you by http://www.theblogwidgets.com/2013/11/floating-facebook-like-box-widget-for.html--><div>
<!-- http://www.theblogwidgets.com/2013/11/floating-facebook-like-box-widget-for.html--> <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Ffacebook.com%2Fwebkingsafrica&width=245&colorscheme=light&show_faces=true&border_color=white&connections=9&stream=false&header=false&height=270" scrolling="no" frameborder="0" scrolling="no" style="border: white; overflow: hidden; height: 270px; width: 245px;background:#fafafa;color:000;"><!--Brought to you by www.TheBlogWidgets.com--></iframe><!--Brought to you by www.TheBlogWidgets.com--><span><!--Brought to you by www.TheBlogWidgets.com--><center>
<!--<a style="color:#a8a8a8;font-size:8px;" href="http://morganandmen.com">Morgan&Men SEO</a> - <a style="color:#a8a8a8;font-size:8px;" href="http://www.theblogwidgets.com/2013/11/floating-facebook-like-box-widget-for.html">Widget</a> --></center>
</span></div>
</div>
<!--Floating Facebook Widget by www.TheBlogWidgets.com END-->








 
		<div id="skip-link"><a href="">Jump to Navigation</a></div>
  
  			<div id="page-wrapper">
        
        		<div id="page">

    				<div class="row" id="header">
                    
                    	<div class="pageWidth section clearfix">

                          <a href="http://www.webkings.co.za" title="Webkings Training & Placement" rel="home" class="logo">Webkings Learning Foundation</a>
                          <img class="print" src="images/edf_logo.gif" alt="Webkings Training & Placement">
      	  
	  						<div class="inlineLinks">
      
                                <a  target="new" href="http://twitter.com/webkingsafrica"><img class="icon" src="images/iconTwit.gif" alt="Twitter"></a> 
                                <a target="new" href="https://facebook.com/webkingsafrica"><img class="icon" src="images/iconFace.gif" alt="Facebook"></a>
        
        					</div>
                            
             				<div id="secondaryLinks">
                            
                            	<div class="section">

                                    <ul id="secondary-menu" class="links clearfix">
                                    
                                    	<?php if ( (!$_SESSION["sess_id1"]) && ($user_profile['id'])<1  ){?>
                                        
                                        	<li class="menu-1100 first">
                                            
                                                <a href="index.php?page_ren=101" title="">Quick Sign Up</a>
                                                
                                            </li>
                                        
                                        
                                            <li class="menu-1100 first">
                                            
                                                <a href="index.php?page_ren=52" title="">Login</a>
                                                
                                            </li>
                                            
                                            
                                            <li class="menu-1100 first">
                                                                                     		 
            									or <a href="<?php echo $facebook->getLoginUrl(array('scope'=>'email,user_birthday'));?>" class="btn btn-facebook">Login with Facebook</a>
                                                
            								 </li>
                                            
                                        <?php }?>
                                        
                                        
                                        <?php if ( (!$_SESSION["sess_id1"])  &&  ($user_profile['id']>1)  ){?>
                                        
                                            <li class="menu-1100 first">
                                                <a href="index.php?page_ren=70<?php if($log==md5(YES)){echo "&&xl1=$log";}?>" title="">
                                                	Logged In As: <?php echo $member_name?>
                                                    
                                                    <img src="//graph.facebook.com/<?php echo $fbId; ?>/picture">
                                                    
                                                </a>
                                            </li>
                                            
                                        <?php }?>
                                        
                                        
                                        
                                        <?php if( ($_SESSION["sess_id1"])){?>
                                            <li class="menu-1100 first">
                                                <a href="index.php?page_ren=70<?php if($log==md5(YES)){echo "&&xl1=$log";}?>" title="">
                                                	Logged In As: <?php echo $_SESSION["sess_name1"];?> <?php echo $member_name?>
                                                </a>
                                            </li>
                                        <?php }?>
                                                                       
                                        <li class="menu-1100 first"><a href="index.php?page_ren=43<?php if($log==md5(YES)){echo "&&xl1=$log";}?>" title="">Jobs</a></li>
                                        <li class="menu-11513"><a href="index.php?page_ren=44<?php if($log==md5(YES)){echo "&&xl1=$log";}?>" title="">Offices</a></li>
                                        <li class="menu-11514"><a href="index.php?page_ren=42<?php if($log==md5(YES)){echo "&&xl1=$log";}?>" title="">Contact us</a></li>
                                        <li class="menu-1103 last"><a href="index.php?page_ren=46<?php if($log==md5(YES)){echo "&&xl1=$log";}?>" title="">For the media</a></li>
                                        <?php if($_SESSION["sess_id1"]){?>
                                        	<li class="menu-1103 last"><a href="lib_files/account_lib_files/logout.php" title="">Sign Out</a></li>
                                        <?php }?>
                                        
                                        
                                        <?php if($user_profile['id']>1){?>                                        
                                            
                                            <?php
 												$thisserver = "http://".$_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI']);
 												$fblogouturl = $thisserver."/lib_files/account_lib_files/fb_logout.php";
								 			?>
                                            
                                            <a href="<?php echo $facebook->getLogOutUrl(array('next'=>$fblogouturl));?>" class="btn btn-facebook">
                                                Logout <?php //echo ($member_name) ? "(".$member_name.")":"";?>
                                            </a>
                                            
                                        <?php }?>
                                        
                                        
                                    </ul>
       

      							</div>
                           	</div> 
    
              <div id="search-box">
                  <form action="" accept-charset="UTF-8" method="post" id="search-theme-form">
                    <fieldset>
                        <div id="search" class="container-inline box boxWhite35">
                            <label for="search_theme_form">Search this site:</label>
                            <input type="text" name="search_theme_form" id="edit-search-theme-form-l" size="25" value title="Enter the terms you wish to search for." class="textField">
                            <input type="submit" name="op" value="Search" class="button buttonBlue">
                            <input type="hidden" name="form_id" id="edit-search-theme-form" value="search_theme_form">
                            <input type="hidden" name="form_token" id="a-unique-id" value="4f408004804de3eee0edf901835145bd">
                        </div>
                    
                    </fieldset>
                </form>
			</div>
      
      
    	</div>
        
    </div> 
    <!-- /.section, /#header -->


	<div class="row" id="nav">
    
    	<div class="pageWidth">
        
        	<?php //if( (!$_SESSION["sess_id1"]) && ($user_profile['id'])<1 ){?>
                       
		  		<!--<a href="index.php?page_ren=36<?php if($log==md5(YES)){echo "&&xl1=$log";}?>" class="button right">Register For Training</a> -->
            <?php //}?>
            
            <?php if ( ($_SESSION["sess_id1"]) || ( ($user_profile['id'])>1 &&  $step1>0) ){?>
            	<a href="index.php?page_ren=0053<?php if($log==md5(YES)){echo "&&xl1=$log";}?>" class="button right">Online Learning</a>
            <?php } else {?>            
            	<a href="index.php?page_ren=36<?php if($log==md5(YES)){echo "&&xl1=$log";}?>" class="button right">Register For Training</a>
            <?php }?>
            
            
          	<ul id="main-menu" class="links clearfix">
            
                <li class="menu-1093 active-trail first active"><a href="index.php?page_ren=33" title="" class="active">Home</a></li>
                
                <li class="menu-2203"><a href="index.php?page_ren=47<?php if($log==md5(YES)){echo "&&xl1=$log";}?>" title="Web Training">Web Training</a></li>
                
                <li class="menu-2204"><a href="index.php?page_ren=34<?php if($log==md5(YES)){echo "&&xl1=$log";}?>" title="Training Partnerships">Training Partnerships</a></li>
                
                <li class="menu-11705"><a href="index.php?page_ren=35<?php if($log==md5(YES)){echo "&&xl1=$log";}?>" title="Web Development Services">Web Dev Services</a></li>
                
                <li class="menu-12633"><a href="index.php?page_ren=37<?php if($log==md5(YES)){echo "&&xl1=$log";}?>" title="Events">Events</a></li>
                
                <li class="menu-2209"><a href="index.php?page_ren=38<?php if($log==md5(YES)){echo "&&xl1=$log";}?>" title="About us">About us</a></li>
                <li class="menu-1099 last"><a href="index.php?page_ren=40<?php if($log==md5(YES)){echo "&&xl1=$log";}?>" title="Cool Stuff">Cool Stuff</a></li>
            
			</ul>
          
        </div>
        
	</div> 
    <!-- /.section, /#nav -->
      
	<div class="row flyout">
		<div class="region region-flyout">
    		<div id="block-block-4" class="block block-block region-odd odd region-count-1 count-3">
  
  				<div class="content">
                
    				<div id="flyout1" class="pageWidth">
                    
						<div class="column col80">
							<h4 class="underlineTitle">Our Web Design/Development Training focus areas</h4>
                            <div class="column col25">
                                <a href="index.php?spage_ren=4<?php if($log==md5(YES)){echo "&&xl1=$log";}?>" class="blockLink">
                                    <div>
                                        <img src="images/html5css3.jpg" alt="Practical HTML5 & CSS3 Training">
                                            <span class="title">Practical HTML5 & CSS3 Training &raquo;</span>
                                   </div>
                                </a>
                                <ul>
                                    <li><a href="index.php?spage_ren=4<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">WWW Background & History</a></li>
                                    <li><a href="index.php?spage_ren=4<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Interface Development with HTML</a></li>
                                    <li><a href="index.php?spage_ren=4<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Soft Intro to CSS</a></li>
                                </ul>
                            </div>
                            
							<div class="column col25">
      							<a href="index.php?spage_ren=5" class="blockLink">
									<div><img src="images/php.jpg" alt="Practical OOP PHP 5"><span class="title">Practical OOP PHP 5 &raquo;</span></div>
								</a>
                                <ul>
                                    <li><a href="index.php?spage_ren=5">Inroduction to PHP</a></li>
                                    <li><a href="index.php?spage_ren=5">Coding Dynamic Websites with PHP</a></li>
                                    <li><a href="index.php?spage_ren=5">PHP Frameworks</a></li>
                                </ul>
							</div>
                            
							<div class="column col25">
      							<a href="index.php?spage_ren=6" class="blockLink">
									<div><img src="images/ps.jpg" alt="Practical Photoshop CS6"><span class="title">Practical Photoshop CS6 &raquo;</span></div>
								</a>
                                <ul>
                                	<li><a href="index.php?spage_ren=6">Introduction to Web Graphics</a></li>
                                	<li><a href="index.php?spage_ren=6">Graphic Design Tools</a></li>
                                	<li><a href="index.php?spage_ren=6">Photoshop CS6</a></li>
                                </ul>
							</div>
                            
							<div class="column col25">
                                <a href="index.php?spage_ren=7" class="blockLink">
                                    <div><img src="images/sql.jpg" alt="Health"><span class="title">Practical MYSQL/MSSQL/ORACLE &raquo;</span></div>
                                </a>
                                <ul>
                                <li><a href="index.php?spage_ren=7">Introduction to RDBMS's</a></li>
                                <li><a href="index.php?spage_ren=7">MYSQL/PHPMYADMIN</a></li>
                                </ul>
							</div>
					</div>


					<div class="column col20">
						<div class="box">
							<h4 class="underlineTitle">Where we work</h4>
                            <ul>
                            	<li><a href="index.php?spage_ren=40" title="Alexandra"><strong>Alexandra</strong></a></li>
                            	<li><a href="index.php?spage_ren=41"><strong>Centurion</strong></a></li>
                                <li><a href="index.php?spage_ren=42">Soweto</a></li>
                                <li><a href="index.php?spage_ren=43">Johanesberg</a></li>
                                <li><a href="index.php?spage_ren=44" title="">Pretoria</a></li>
                                <li><a href="index.php?spage_ren=45" title="">Capetown</a></li>
								<li><a href="index.php?spage_ren=46">Mpumalanga</a></li>
								<li><a href="index.php?spage_ren=47">Polokwane</a></li>
                                <li><a href="index.php?spage_ren=76">Tembisa</a></li>
                                <li><a href="index.php?spage_ren=77">Sushanguve</a></li>
							</ul>
                            
                            <ul>
								<li><a href="index.php?spage_ren=70"><strong>Accra</strong></a></li>
								<li><a href="index.php?spage_ren=71"><strong>Kumasi</strong></a></li>
                                <li><a href="index.php?spage_ren=72">Sunyani</a></li>
                                <li><a href="index.php?spage_ren=73">Tamale</a></li>
                                <li><a href="index.php?spage_ren=74">Tema</a></li>
                                <li><a href="index.php?spage_ren=75">Cape Coast</a></li>
							</ul>
						</div>
					</div>
				</div>



				<div id="flyout2" class="pageWidth">
                
					<div class="column col20">                   
						<div class="box">                        
							<h4 class="underlineTitle">We're different</h4>
							<p>We are passionate advocates for skills Development <em>through</em> Advanced Practical Technical Training in Web & Internet Technologies.</p>
						</div>
					</div>
                    
					<div class="column col60">
                    
						<div class="innerCol col25">
                        	<a href="index.php?spage_ren=12" class="blockLink">
								<div><img src="images/iburst.jpg" alt="iburst" width="144" height="108"></div>
								<span class="hyphenate"><em>IBusrt SA</em>1 Year Web Design/Development Training for 100 Carefully selected Students</span>
                            </a>
						</div>
                        
						<div class="innerCol col25">
                        	<a href="index.php?spage_ren=13" class="blockLink">
								<div><img src="images/funda.jpg" alt="funda" width="144" height="108"></div>
								<span class="hyphenate"><em>Funda Center SA</em>1 Year Web Design/Development Training for 100 Lovers of Computing.</span>
                            </a>
                         </div>
                         
						<div class="innerCol col25">
							<a href="index.php?spage_ren=14" class="blockLink">
								<div><img src="images/po.jpg" alt="Partnerships" width="144" height="108"></div>
								<span class="hyphenate"><em>PoloKwane</em>Talks are on going for roll out.</span>
                            </a>
                        </div>
                                
						<div class="innerCol col25">
                        	<a href="index.php?spage_ren=53" class="blockLink">
								<div><img src="images/mp.jpg" alt="" width="144" height="108"></div>
								<span class="hyphenate"><em>Mpumalanga</em>Talks are on going for roll out.</span>
                            </a>
                        </div>
                        
					</div>
        
        
					<div class="column col20">
						<h4 class="underlineTitle">Certification/International Partners</h4>
						<p><a href="index.php?page_ren=63">We partner with leading organization & companies</a> to produce World Class Web Development Professionals.</p>
						<p>Click <a href="index.php?page_ren=63">Here</a> for a listing our government,local & International partners.</p>
					</div>
				</div>



				<div id="flyout3" class="pageWidth">
                
					<div class="column">
						<h4 class="underlineTitle">Our Web Development Services</h4>
					</div>
					<div class="column col20">
                    	<a href="index.php?spage_ren=25" class="blockLink">
							<div>
                            	<img src="images/wd.jpg" alt="">
                                <span class="title">Web Application Development</span>
                            </div>
						</a>
					</div>
                    
					<div class="column col20">
                    	<a href="index.php?spage_ren=27" class="blockLink">
							<div><img src="images/md.jpg" alt=""><span class="title">Mobile Application Development</span></div>
						</a>
                    </div>

					<div class="column col20">
                    	<a href="index.php?spage_ren=26" class="blockLink">
							<div>
                            	<img src="images/ec.jpg" alt="Pioneering partnership">
                                <span class="title">Ecommerce Web Apps Development</span>
                            </div>
						</a>
                    </div>

					<div class="column col20">
                    	<a href="index.php?spage_ren=28" class="blockLink">
							<div>
                            	<img src="images/dh.jpg" alt="Protecting wildlife">
                                <span class="title">Domain Registration/Hosting Services</span>
                           	</div>
						</a>
                   	</div>

					<div class="column col20">
                    	<a href="index.php?spage_ren=29" class="blockLink">
							<div><img src="images/sm.jpg" alt="Saving energy"><span class="title">Social Intergration Apps Development</span></div>
						</a>
                    </div>

				</div>



				<div id="flyout4" class="pageWidth">
                
					<div class="column col50">
                    
						<div class="column"><h4 class="underlineTitle">Events</h4></div>

                        <div class="views-row views-row-1 views-row-odd views-row-first views-row-last">
                        
                            <div class="column col50">
                                <a href="index.php?spage_ren=15" class="blockLink">
                                    <span class="hyphenate">
                                        <em>Seminar - Potential for Web Development in Job Creation</em><p class="date">November 09, 2013</p>
                                        <span>Key Note Speaker - Frederick Akrofi</span>
                                    </span>
                                </a>
                            </div>
                                
 					</div>
  

    				<div class="column col50">
                    
                        <div class>
                        
                            <ul class="newsList">
                            
                                <li class="views-row views-row-1 views-row-odd views-row-first">
                                  
                                    <span class="views-field-title-1">
                                        <span class="field-content"><h4><a href="index.php?spage_ren=58">Get Coding: Introducing the Africacodeproject.org</a></h4></span>
                                    </span>
      
                                    <span class="views-field-timestamp">
                                        <span class="field-content"><p class="credit"><span class="date">November 25, 2013</span></p></span>
                                    </span>
                                    
                                </li>
                                
                                <li class="views-row views-row-2 views-row-even views-row-last">  
                                
                                    <span class="views-field-title-1">
                                        <span class="field-content"><h4><a href="index.php?spage_ren=59">Career Creation through Web Development</a></h4></span>
                                    </span>
      
                                    <span class="views-field-timestamp">
                                        <span class="field-content"><p class="credit"><span class="date">October 15, 2013</span></p></span>
                                    </span>
                                    
                                </li>
                                
                            </ul>
                            
                        </div>  
    
                        <p><strong><a href="index.php?page_ren=51">View News Archive</a></strong></p>
  					</div>
  
				</div>

				<div class="column col25">
					<div class="box">
						<h4 class="underlineTitle">Connect with us</h4>
						<p><strong>Stay informed</strong></p>
						<ul class="spacedList">
							<li><a href="index.php?page_ren=81">Get news updates and action alerts by email</a></li>
						</ul>
						<hr>
						<p><strong>Join our online community</strong></p>
						<ul class="spacedList">
							<li><a  target="new" href="https://www.facebook.com/webkingsafrica">Facebook</a></li>
							<li><a  target="new" href="http://www.twitter.com/webkingsafrica">Twitter</a></li>
						</ul>
					</div>
				</div>
                
				<div class="column col25">
                
					<h4 class="underlineTitle"><a href="index.php?page_ren=55">Ways to Support Us</a></h4>
                    <ul class="spacedList">
                    	<li><a href="index.php?spage_ren=67">Indegogo Campaigns</a></li>
                        <li><a href="index.php?spage_ren=62">One-time Donation</a></li>
                        <li><a href="index.php?spage_ren=63">Monthly Donation</a></li>
                        <li><a href="index.php?page_ren=71">Become a Training Volunteer</a></li>
                        <li><a href="index.php?page_ren=71">Become a Resource Person</a></li>
                        <li><a href="index.php?spage_ren=65">Expose us to Angels and VC's</a></li>
                        <li><a href="index.php?spage_ren=69">Sponsor a Student</a></li>
                        <li><a href="index.php?spage_ren=66">Contribute a Tech Article</a></li>
                    </ul>
                    <p><strong><a href="index.php?spage_ren=68">Contribute Equipment</a></strong></p>
                    
				</div>
			</div>



			<div id="flyout5" class="pageWidth">
            	
			<div class="column col50">
                <div class="box video">
                	
                    	<iframe width="100%" height="260" src="//www.youtube.com/embed/ypNurAGVn6c" frameborder="0" allowfullscreen></iframe>
                    
                </div>
            </div>
            
			<div class="column col25">
				<h4 class="underlineTitle">In this section:</h4>
                <ul class="spacedList">
                    <li><a href="index.php?spage_ren=48">Our people</a></li>
                    
                    <li><a href="index.php?spage_ren=49">Mission and Vision</a></li>
                    
                    <li><a href="index.php?spage_ren=50">Values</a></li>
                    
                    <li><a href="index.php?spage_ren=51">Social Impact</a></li>
                    
                    <li><a href="index.php?spage_ren=52">Sustainability</a></li>
                    
                    <li><a href="index.php?page_ren=44">Our offices</a></li>
                    
                    <li><a href="index.php?page_ren=43">Jobs</a></li>
                    
                    <li><a href="index.php?page_ren=42">Contact Us</a></li>
                </ul>
			</div>
            
            
<div class="column col25">
    <div class="box">
        <h4 class="underlineTitle">Expert staff</h4>
        <div class="cite"> <img src="images/fred.jpg" alt="Frederick Akrofi"> <a href="index.php?lpage_ren=17">Frederick Akrofi, CEO</a> <span>System Analyst/Training Instructor</span> </div>
        <div class="cite"> <img src="images/joe.jpg" alt="Mlindi J. Kgamedi"> <a href="index.php?lpage_ren=19">Mlindi J. Kgamedi</a> <span>Chief Project Cordinator</span> </div>
        <div class="cite"> <img src="images/nii.jpg" alt="Oko Collison"> <a href="index.php?lpage_ren=18">Oko Collison, </a> <span>Bachelor Computer Science/Training Instructor</span> </div>
        <p><a href="index.php?spage_ren=48"><strong>Find more expert staff&raquo;</strong></a></p>
    </div>
</div>
</div>
<div id="flyout6" class="pageWidth">
<div class="column col25">
<div class="box">
<h4 class="underlineTitle">About WebKings</h4>
<p>Stories, Ideas and Creative learning strategies from our staff of expert web developers, scientists, IT Industry Volunteers and Passionate Educators.</p>
</div>
</div>
<div class="column col50">
<div class="column">
<h4 class="underlineTitle">Latest Posts</h4>
</div>
<!--start blog views-->
<div class="column col50">
<div class="colPad">
<div class="view view-blog-posts-updated view-id-blog_posts_updated view-display-id-block_7 view-dom-id-3 view-blog-posts-updated view-id-blog_posts_updated view-display-id-block_7 view-dom-id-3">
  
  
  
  
      <div class="view-content">
      
        <div class="views-row views-row-1 views-row-odd views-row-first views-row-last">
      
  			<div class="views-field-field-teaser-value">
            
            	<div class="field-content">
                	<a href="index.php?lpage_ren=20" class="blockLink">
						<span class="hyphenate"><em>Our approach to Education &ndash; Practical, fun and Real World Senarios?</em></span>
						<span class="date">Published July 31, 2013</span>
						<br>
						<span class="hyphenate">We're partnering state owned organizations in south africa to provide training and placement for wed development and related services.</span>
					</a>
				</div>
                
  			</div>
            
  		</div>
        
    </div>
  
  
  
  
  
  
</div> <!-- /.view -->

</div>
</div>
<div class="column col50">
<div class="colPad">
<div class="view view-blog-posts-updated view-id-blog_posts_updated view-display-id-block_6 view-dom-id-4 view-blog-posts-updated view-id-blog_posts_updated view-display-id-block_6 view-dom-id-4">
  
  
  
  
      <div class="view-content">
      <div class>
    <ul class="newsList">
          <li class="views-row views-row-1 views-row-odd views-row-first">  
  <div class="views-field-title">
                <span class="field-content"><a href="index.php?lpage_ren=21"><b>Trial, error and ingenuity: Finding Talents in the Different areas of the Internet Industry. </b></a></span>
  </div>
  
  <div class="views-field-created">
                <span class="field-content"><span class="date">July 30, 2013</span></span>
  </div>
</li>
          <li class="views-row views-row-2 views-row-even views-row-last">  
  <div class="views-field-title">
                <span class="field-content"><a href="index.php?lpage_ren=22"><b>Challenging the youth to develop their potential to the fullest using technology</b></a></span>
  </div>
  
  <div class="views-field-created">
                <span class="field-content"><span class="date">July 26, 2013</span></span>
  </div>
</li>
      </ul>
</div>
    </div>
  
  
  
  
  
  
			</div> <!-- /.view -->

		</div>
	</div>
<!--end blog views-->
</div>


                    <div class="column col25">
                        <h4 class="underlineTitle">Article Categories</h4>
                        <ul class="spacedList">
                            <li><a href="index.php?spage_ren=54">Featured Students</a></li>
                            <li><a href="index.php?spage_ren=55">Digital Arts</a></li>
                            <li><a href="index.php?spage_ren=56">Solar Technology</a></li>
                            <li><a href="index.php?spage_ren=57">Music, Film & Art</a></li>
                            <li><a href="index.php?spage_ren=57">Tech Education in Afria</a></li>
                        </ul>
                    </div>
				</div>  
			</div>

  		</div> <!-- /.block -->
	</div> <!-- /.region -->
</div>



    
	<?php if($pagecatcode==33)  {?>   
  		<?php include('incs/home.php')?>   
	<?php }?>
    
    
     <?php if((!empty($pagecatcode)) && ($subpagecode == 0) && ($detailid==0) && (!($pagecatcode==33)) ){?>
        <div align="justify" style=" padding-left:10px;padding-right:10px">
            <?php include('incs/pgcontent.php')?>
        </div>    
    <?php }?> 
    
    
     <?php if( (!empty($subpagecode)) && (empty($pagecatcode))   ){?>
        <div align="justify" style=" padding-left:10px;padding-right:10px">
            <?php include('incs/spgcontent.php')?>
        </div>    
    <?php }?>  
    
    
    <?php if(  (!empty($listingpagecode)) && (empty($subpagecode)) && (empty($pagecatcode))   ){?>
        <div align="justify" style=" padding-left:10px;padding-right:10px">
            <?php include('incs/lpgcontent.php')?>
        </div>    
    <?php }?>  
    
    
   
    
    
    
   
    
    
    
<!-- /#main, /#main-wrapper -->
<div class="row" id="appendix">
	<div class="pageWidth">
		<div class="region region-appendix">
    		<div id="block-block-15" class="block block-block region-odd even region-count-1 count-8">
  
  				<div class="content">
                
    				<div id="footerLinks">
                    
						<div class="inlineLinks">
                        
							<a href="http://twitter.com/webkingsafrica"><img src="images/iconTwit.gif" alt="Twitter" class="icon"></a> 
							<a href="http://facebook.com/webkingsafrica"><img src="images/iconFace.gif" alt="Facebook" class="icon"></a> 
							<a href="http://plus.google.com/webkingsafrica" rel="publisher"><img src="images/gplus-14.gif" alt="GooglePlus" class="icon"></a>
                         </div>
                         
						<div class="section">
							<ul id="footer-menu" class="links clearfix">
								<li class="first"><a href="index.php?page_ren=38">About</a></li>
								<li><a href="index.php?page_ren=84">How you can help</a></li>
								<li><a href="index.php?page_ren=49">Blog</a></li>
								<li><a href="index.php?page_ren=43">Jobs</a></li>
								<li><a href="index.php?page_ren=51">News</a></li>
								<li><a href="index.php?page_ren=56">Documents &amp; Publications</a></li>
								<li class="last"><a href="index.php?page_ren=42">Contact</a></li>
							</ul>
						</div>
                        
					</div>
                      
				</div>

  			</div> <!-- /.block -->
		</div> <!-- /.region -->
	  </div>
</div> <!--  /#appendix -->
    
          
          
<div class="row" id="footer">

	<div class="region region-footer">
    
    	<div id="block-block-1" class="block block-block region-odd odd region-count-1 count-9">
  
  			<div class="content">
    			<div class="pageWidth">
					<div class="column col75">
      					<a href="index.php?spage_ren=12" class="footLogo">WebKings</a>
						<p>Sandton, Gauteng, SA <br> General Information 00233 23 666 54 86 or 0027 71 881 8123 <a href="index.php?page_ren=42">email us</a></p>
						<p><a href="index.php?page_ren=46">Media</a> | <a href="index.php?page_ren=76">Terms & Conditions</a> | <a href="index.php?page_ren=38">About Us</a> | <a href="index.php?page_ren=59">Privacy Policy/Statement</a></p>
						<p><a href="index.php?page_ren=60">Copyright &copy; 2014</a> WebKings Technologies. All Rights Reserved.</p>
				</div>
				<div class="column col25">
					<a href="index.php?page_ren=57"><img src="images/wlf.jpg" alt="Real Progress Foundation" title="" width="210" height="58"></a>      	
				</div>
			</div>  
		</div>

  		</div> <!-- /.block -->
  
		</div> <!-- /.region -->

      </div> <!--  /#footer -->
    
  </div>
  
</div> <!-- /#page, /#page-wrapper -->


<script type="text/javascript">
<!--//--><![CDATA[//><!--
var _gaq = _gaq || [];_gaq.push(["_setAccount", "UA-2998195-1"]);var pluginUrl =
 '//www.google-analytics.com/plugins/ga/inpage_linkid.js';
_gaq.push(['_require', 'inpage_linkid', pluginUrl]);
_gaq.push(['_setDomainName', 'webkings.org']);
_gaq.push(['_addIgnoredRef', 'webkings.org']);
function trackTwitter() {
	try {
		if (twttr && twttr.events && twttr.events.bind) {
			twttr.events.bind('tweet', function(event) {
				if (event) {
					var targetUrl;
					if (event.target && event.target.nodeName == 'IFRAME') {
						targetUrl = extractParamFromUri(event.target.src, 'url');
	    			}
					_gaq.push(['_trackSocial', 'twitter', 'tweet', targetUrl]);
					_gaq.push(['_trackEvent', 'Twitter', 'tweet' , targetUrl, 0, true]);
  				}
			});
		}
	}
	catch(e) {
	}
}
function extractParamFromUri(uri, paramName) {
  if (!uri) {
    return;
  }
  var uri = uri.split('#')[0];  // Remove anchor.
  var parts = uri.split('?');  // Check for query params.
  if (parts.length == 1) {
    return;
  }
  var query = decodeURI(parts[1]);

  // Find url param.
  paramName += '=';
  var params = query.split('&');
  for (var i = 0, param; param = params[i]; ++i) {
    if (param.indexOf(paramName) === 0) {
      return unescape(param.split('=')[1]);
    }
  }
}
trackTwitter();_gaq.push(["_trackPageview"]);if (window.zeroResults === undefined) { } else if(zeroResults) { _gaq.push(['_trackEvent', 'Search', 'ZeroResults', zeroResults]); }
$jq(function() {
	//track viewport dimensions
	var viewportWidth=$jq(window).width();
	_gaq.push(['_trackEvent', 'Viewport Dimensions', 'Viewport Dimensions Initial', viewportWidth+'x'+$jq(window).height(), viewportWidth, true]);
	 
	//track viewport dimensions being changed by resize (throttled)
	var gaResizeCompleteHl;
	$jq(window).resize(function(){
		clearTimeout(gaResizeCompleteHl);
		gaResizeCompleteHl = setTimeout(function(){
			var viewportWidth=$jq(window).width();
			_gaq.push(['_trackEvent', 'Viewport Dimensions', 'Viewport Dimensions Resized', viewportWidth+'x'+$jq(window).height(), viewportWidth, true]);
			}, 500);
		});
});(function() {var ga = document.createElement("script");ga.type = "text/javascript";ga.async = true;ga.src = ("https:" == document.location.protocol ? "https://ssl" : "http://www") + ".google-analytics.com/ga.js";var s = document.getElementsByTagName("script")[0];s.parentNode.insertBefore(ga, s);})();
//--><!]]>
</script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery.extend(Drupal.settings, {"CToolsAJAX":{"scripts":{"\/misc\/jquery.js?B":true,"\/misc\/drupal.js?B":true,"\/sites\/all\/modules\/contrib\/google_analytics\/googleanalytics.js?B":true,"\/sites\/all\/modules\/contrib\/views\/js\/base.js?B":true,"\/sites\/all\/modules\/contrib\/views\/js\/dependent.js?B":true,"\/sites\/all\/modules\/contrib\/mollom\/mollom.js?B":true,"\/misc\/textarea.js?B":true},"css":{"\/modules\/aggregator\/aggregator.css?B":true,"\/modules\/node\/node.css?B":true,"\/modules\/system\/defaults.css?B":true,"\/modules\/system\/system.css?B":true,"\/modules\/user\/user.css?B":true,"\/sites\/all\/modules\/contrib\/cck\/theme\/content-module.css?B":true,"\/sites\/default\/files\/css_injector_17.css?B":true,"\/sites\/default\/files\/css_injector_18.css?B":true,"\/sites\/default\/files\/css_injector_22.css?B":true,"\/sites\/default\/files\/css_injector_24.css?B":true,"\/sites\/default\/files\/css_injector_27.css?B":true,"\/sites\/default\/files\/css_injector_28.css?B":true,"\/sites\/default\/files\/css_injector_33.css?B":true,"\/sites\/default\/files\/css_injector_34.css?B":true,"\/sites\/default\/files\/css_injector_38.css?B":true,"\/sites\/default\/files\/css_injector_45.css?B":true,"\/sites\/default\/files\/css_injector_57.css?B":true,"\/sites\/default\/files\/css_injector_65.css?B":true,"\/sites\/default\/files\/css_injector_67.css?B":true,"\/sites\/default\/files\/css_injector_69.css?B":true,"\/sites\/default\/files\/css_injector_81.css?B":true,"\/sites\/default\/files\/css_injector_85.css?B":true,"\/sites\/default\/files\/css_injector_87.css?B":true,"\/sites\/default\/files\/css_injector_88.css?B":true,"\/sites\/default\/files\/css_injector_90.css?B":true,"\/sites\/default\/files\/css_injector_92.css?B":true,"\/sites\/default\/files\/css_injector_94.css?B":true,"\/sites\/default\/files\/css_injector_95.css?B":true,"\/sites\/default\/files\/css_injector_96.css?B":true,"\/sites\/default\/files\/css_injector_97.css?B":true,"\/sites\/default\/files\/css_injector_100.css?B":true,"\/sites\/default\/files\/css_injector_105.css?B":true,"\/sites\/default\/files\/css_injector_109.css?B":true,"\/sites\/default\/files\/css_injector_112.css?B":true,"\/sites\/default\/files\/css_injector_113.css?B":true,"\/sites\/all\/modules\/contrib\/ctools\/css\/ctools.css?B":true,"\/sites\/all\/modules\/contrib\/date\/date.css?B":true,"\/sites\/all\/modules\/contrib\/date\/date_popup\/themes\/datepicker.css?B":true,"\/sites\/all\/modules\/contrib\/date\/date_popup\/themes\/jquery.timeentry.css?B":true,"\/sites\/all\/modules\/contrib\/filefield\/filefield.css?B":true,"\/sites\/all\/modules\/contrib\/mollom\/mollom.css?B":true,"\/sites\/all\/modules\/contrib\/switchtheme\/switchtheme.css?B":true,"\/sites\/all\/modules\/contrib\/cck\/modules\/fieldgroup\/fieldgroup.css?B":true,"\/sites\/all\/modules\/contrib\/views\/css\/views.css?B":true,"\/sites\/all\/modules\/contrib\/taxonomy_super_select\/taxonomy_super_select.css?B":true,"\/sites\/all\/themes\/edf\/css\/block-editing.css?B":true,"\/sites\/all\/themes\/edf\/css\/basic.css?B":true,"\/sites\/all\/themes\/edf\/css\/print.css?B":true}}});
//--><!]]>
</script>
  <div class="region region-page-closure">
    <div id="block-block-95" class="block block-block region-odd even region-count-1 count-10">
  
  <div class="content">
    <script language="JavaScript" type="text/javascript">
if (typeof ord=='undefined') {ord=Math.random()*10000000000000000;}
document.write('<script language="JavaScript" src="' + ord + '?" type="text/javascript"><\/script>');
</script><noscript><a href="https://" target="_blank"><img src="" width="1" height="1" border="0" alt></a></noscript>  </div>

  </div> <!-- /.block -->
  <div id="block-block-106" class="block block-block region-even odd region-count-2 count-11">
  
  <div class="content">
    <script type="text/javascript">
    $jq(document).ready(function(){
        var waitForIt = window.setInterval(function() {
            if (typeof FB !== 'undefined') {
                FB.getLoginStatus(function(response) { if (typeof response.status !== 'undefined') handleFBGetLoginResponse(response.status); });
                window.clearInterval(waitForIt);
            }
        }, 100);

        function handleFBGetLoginResponse(status) {
            var state = 'Unknown state';
            if (status == 'connected') state = 'Logged in and authorized';
            else if (status == 'not_authorized') state = 'Logged in';
            else if (status == 'unknown') state = 'Logged out';
            if (readCookie('FBLoginStatus')) {
                if (readCookie('FBLoginStatus') != status) {
                    _gaq.push(['_trackEvent', 'Social network login status', 'Facebook', state + ' in the middle of session', 0, true]);
                    createCookie('FBLoginStatus',status,0);
                }
            }
            else {
                _gaq.push(['_trackEvent', 'Social network login status', 'Facebook', state + ' at start of session', 0, true]);
                createCookie('FBLoginStatus',status,0);
            }
        }
    });

    function createCookie(name,value,days) { if (days) { var date = new Date(); date.setTime(date.getTime()+(days*24*60*60*1000)); var expires = "; expires="+date.toGMTString(); } else var expires = ""; document.cookie = name+"="+value+expires+"; path=/;domain=edf.org"; } function readCookie(name) { var nameEQ = name + "="; var ca = document.cookie.split(';'); for(var i=0;i < ca.length;i++) { var c = ca[i]; while (c.charAt(0)==' ') c = c.substring(1,c.length); if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length); } return null; } function eraseCookie(name) { createCookie(name,"",-1); }
</script>  


		</div>

  	</div> <!-- /.block -->
    
</div> <!-- /.region -->







	</body>
</html>



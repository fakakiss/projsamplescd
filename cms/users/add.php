<?php
    require('../../lib_files/private.inc.php');
	require('../../lib_files/settings.inc.php');
	require('settings.inc.php');
	
	$qut = "select id,caption from usertype";
	$qb  = "select id,caption from branches";
	
    if(isset($_REQUEST["send"])&&(($_REQUEST["send"]) =='OK'))
       {   
	   		require('settings.inc.php');
			include('../../lib_files/privite_inc_fns/no_reg_globe_users.inc.php');
			
	      
	 		if(!is_filled($username))                           {$err_msg .= "<li class=\"error\">You must select a username.</li>";}
	 		elseif(strlen($username)<4 || strlen($username)>30) {$err_msg .= "<li class=\"error\">The Username must be between 6 and 30 characters !!!</li>";$red14="#990000";  $red13="#990000"; }
     		else                                                {$username=trim($username);}
	 	 		
	 		$q_dup = "select username from users where username='$username'";
	 		$rst_dup = mysqli_query($conn,$q_dup) or die(mysqli_error($conn));
	 		if(mysqli_num_rows($rst_dup) > 0){$err_msg = "<li class=\"error\">This user has already been choosen.</li>";}
		
	 		if(!is_filled($pass1) || !is_filled($pass2))        {$err_msg .= "<li class=\"error\">Please choose and comfirm a password.</li>"; }
	 		elseif($pass1!=$pass2)                              {$err_msg .= "<li class=\"error\">Your passwords do not match</li>"; }
	 		elseif(strlen($pass1)<6 || strlen($pass2)<6)        {$err_msg .= "<li class=\"error\">Your password must be made of 6 or more characters for security sake !!!</li>";$red14="#990000";  $red13="#990000"; }
	 		else                                                {$pass1 = trim($pass1);}  
			 	  	 
	 		if(!is_filled($firstname))                          {$err_msg .= "<li class=\"error\">Your firstname is required.</li>"; }
	 		else                                                {$firstname = ucwords($firstname);}	
			
	 		if(!is_filled($lastname))                           {$err_msg .= "<li class=\"error\">Your lastname is required.</li>"; }
	 		else                                                {$lastname = ucwords($lastname);}
			
			if(!is_filled($mainpriv))                           {$err_msg .= "<li class=\"error\">Please Select User Type.</li>"; }
	 		else                                                {$mainpriv = trim($mainpriv);}
			
	 		if(!is_filled($email)) 								{$err_msg .= "<li class=\"error\">The Email Field is Empty.</li>"; }
	 		elseif(!is_valid_email($email))  					{$err_msg .= "<li class=\"error\">The email address you entered is invalid.</li>";}
	 		else 												{$email = strtolower(trim($email));}
	
	
			if(empty($_FILES['userfile']['name'])){$image_name ="none";}
      		else                  
	  			{                    						
	  				$uploadpath = "../../uploads/images/"; 
      				$source     = $_FILES['userfile']['tmp_name']; 
      				$dest       = ''; 

      				if ( ($source != 'none') && ($source != '' ))
	      				{ 
           					$imagesize = getimagesize($source); 
		   					$imagename = substr($_FILES['userfile']['name'], 0 , -4 );

        					switch ($imagesize[2]) 
								{ 

            						case 0: echo '<br> Image is unknown <br>';  break;                               
            						case 1: echo '<br> Image is a GIF <br>'; $image_name = uniqid($imagename).'.gif';$dest = $uploadpath.$image_name;break;             
            						case 2: echo '<br> Image is a JPG <br>'; $image_name = uniqid($imagename).'.jpg';$dest = $uploadpath.$image_name;break;             
            						case 3: echo '<br> Image is a PNG <br>'; $image_name = uniqid($imagename).'.png';$dest = $uploadpath.$image_name; break; 
        						} 

        					if ($dest != '')
	                       		{ 
                          			if (move_uploaded_file( $source,$dest )) 
						       			{ 
                                			echo 'File successfully stored.<br>'; 
											$cid     = 0;
											$search  = "$image_name"; 
		                        			$val     = strtoupper(substr($search,0,1));
											//if (eregi('[a-zA-Z]',$val) ){$sort=(strtoupper($val));} else  {$sort=0;}  
                                			//$query   = "insert into images values ('','','','$cid','','','','$_sess_username',now())";
                                			//mysqli_query($conn,$query) or die(mysqli_error($conn));							
							   			} 
	                     			else {echo 'File could not be stored.<br>';}
                               					   
			                  	}
								  
        					} 
							else {echo 'File not supplied, or file too big.<br>'; $image_name ="none";} 

							
	 		}
			
	    	if ($err_msg== "")					
				{		
					$search = "$username"; 
					$valll = substr($search, 0 , 1 );
					//if (eregi('[a-zA-Z]',$valll) ){$val=(strtoupper($valll));}else{$val=0;}  										  			  
					$q_ins = "insert into users values('','$username',md5('$pass1'),'$mainpriv','$addpriv','$editpriv','$deletepriv','$showpriv','$firstname', '$lastname','$branch','$email','$image_name','$comment',now(),now())";
					mysqli_query($conn,$q_ins) or die(mysqli_error($conn));
					echo "<meta HTTP-EQUIV=\"Refresh\" content=\"0;URL=index.php\">";
				}
		}

?>




	<html>
		<link href="../css/style.css" rel="stylesheet" type="text/css">
		<head><title><?php echo $clientname;?> | Add System Users</title></head>
		<body onLoad="document.forms[0].elements[0].focus()">
		<?php cmshead($privite_site_width,$privite_nav_width,$_sess_username,$_user_rights)?>
 
		<div style="padding:10px">
		  
			<?php top_module($manager,$add,$view,$viewcat,$addcat,$_sess_username,$_user_rights);?>
					  
			<?php if(!empty($err_msg)){print "<div class=error >"; echo $err_header . $err_msg . $err_footer . "<br>"; print "</div>";}?>
					
        	<div class="note" style="padding-top:10px ">NB. All Fields in bold font are required.</div>
       
			<form enctype="multipart/form-data" action="add.php" method="post">
				<table border="0" cellpadding="0" cellspacing="0"  class="cms_text">
					<tr>
						<td valign="top" ><strong>Username:</strong></td>
						<td valign="top"><input type="text" name="username" size="30" value="<?php echo stripslashes($username)?>" class="form"></td>
					</tr>
					<tr>
						<td valign="top"><strong>Password:</strong></td>
						<td valign="top"><input type="password" name="pass1" size="30" class="form"></td>
					</tr>
					<tr>
						<td  valign="top"><strong>Confirm password:</strong></td>
						<td valign="top"><input type="password" name="pass2" size="30"  class="form"></td>
					</tr>
					<tr>
						<td  valign="top"><strong>User Type:</strong></td>
				  		<td valign="top">                    
                    		<select name="mainpriv"  class="form" >
       							<option value="">Select User Type
               						<?php
                   						$rstut=mysqli_query($conn,$qut) or die(mysqli_error());
		   								while($rowut=mysqli_fetch_array($rstut))                                             
	           								{
	           									if($mainpriv==$rowut[0]){echo "<option value=\"$rowut[0]\" selected>$rowut[caption]";}
		   										else {echo "<option value=\"$rowut[0]\"         >$rowut[caption]";}
											} 
               						?>
							</select>
                  		</td>
					</tr>
					<tr>
						<td  valign="top">User Previlages:</td>
						<td valign="top">
							<table border="0" cellspacing="0" cellpadding="0" class="cms_text">
  								<tr>
    								<td width="50px">Add</td>
    								<td><input name="addpriv" type="checkbox" value="1" <?php if($addpriv==1){echo "checked";}?>></td>
  								</tr>
  								<tr>
    								<td>Edit</td>
    								<td><input name="editpriv" type="checkbox" value="1" <?php if($editpriv==1){echo "checked";}?>></td>
  								</tr>
  								<tr>
    								<td>Delete</td>
    								<td><input name="deletepriv" type="checkbox" value="1" <?php if($deletepriv==1){echo "checked";}?>></td>
  								</tr>
  								<tr>
    								<td>Show</td>
    								<td><input name="showpriv" type="checkbox" value="1" <?php if($showpriv==1){echo "checked";}?>></td>
  								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td><strong>Firstname</strong>:</td>
						<td valign="top"><input type="text" name="firstname" size="30" value="<?php echo stripslashes($firstname)?>" class="form"></td>
					</tr>
					<tr>
						<td><strong>Lastname:</strong></td>
						<td valign="top"><input type="text" name="lastname" size="30" value="<?php echo stripslashes($lastname)?>" class="form"></td>
					</tr>
					<tr>
						<td><strong>Branch:</strong></td>
				  		<td valign="top">
                        	<select name="branch"  class="form" >
       							<option value="">Select User Branch
               						<?php
                   						$rstb=mysqli_query($conn,$qb) or die(mysqli_error($conn));
		   								while($rowb=mysqli_fetch_array($rstb))                                             
	           								{
	           									if($branch==$rowb[0]){echo "<option value=\"$rowb[0]\" selected>$rowb[caption]";}
		   										else {echo "<option value=\"$rowb[0]\"         >$rowb[caption]";}
											} 
               						?>
							</select>
                  		</td>
					</tr>
					<tr>
						<td><strong>E-mail</strong>:</td>
						<td valign="top"><input type="text" name="email" size="30" value="<?php echo stripslashes($email)?>" class="form"></td>
					</tr>
					<tr>
						<td>User Picture:</td>
						<td valign="top"><input type="hidden" name="MAX_FILE_SIZE" value="1000000"><input name="userfile" type="file" size="30"  class="form"></td>				 
					</tr>
					<tr>
						<td colspan="2" valign="top" >
							<table border="0" cellspacing="0" cellpadding="0" class="cms_text">
  								<tr><td><div style="padding-top:10px">Comment:</div></td></tr>   							 
    							<tr><td><textarea name="comment" cols="60" rows="5" class="form"><?php echo stripslashes($comment)?></textarea></td></tr>  
							</table> 
  						</td>
					</tr>
					<tr><td colspan="2"><div style="padding-top:10px"><input type="submit" value="Create user" class="butt"><input type="hidden" value="OK" name="send"></div></td></tr>
			</table>

		</form>

	</div>
		  
	<?php cmsfooter()?> 





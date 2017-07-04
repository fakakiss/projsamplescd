<?php
	require('../../lib_files/private.inc.php');
	require('../../lib_files/settings.inc.php');
	require('settings.inc.php');
	
	
		
	$err_msg     = "";
	$err_header  = "<p class=\"error\">";
    $err_header .= "Please take note of the following:<ul class=\"error\">";
    $err_footer  = "</ul>";
	
	$mysql_id = $_REQUEST['id'];
	$q        = "select * from users where username='$mysql_id'";
	$rst      = mysql_query($q) or die(mysql_error());
	if(mysql_num_rows($rst) > 0) {$row = mysql_fetch_array($rst) or die(mysql_error());}
	
	$qut = "select id,caption from usertype";
	$qb  = "select id,caption from branches";
	
		
	if( isset($_REQUEST["send"] ) && ( ($_REQUEST["send"]) =='OK') )
		{
	     include('../../lib_files/privite_inc_fns/no_reg_globe_users.inc.php');
		 if     ($changepass == 1)  
		 { 
		 if(!is_filled($pass1) || !is_filled($pass2))   { $err_msg .= "<li class=\"error\">Please choose and comfirm a new password.</li>"; }
	     elseif ($pass1!=$pass2)                        { $err_msg .= "<li class=\"error\">Your passwords do not match</li>"; }
	     elseif (strlen($pass1)<6 || strlen($pass2)<6)  {$err_msg .= "<li class=\"error\">Your password must be made of 6 or more characters for security reasons !!!</li>";$red14="#990000";  $red13="#990000"; }
	     elseif ($pass1==$row['username'])              { $err_msg .= "<li class=\"error\">Your password and username should  not match for security reasons !!!</li>"; }
         else                                           {$pass1 = trim($pass1);}  
		 } 
	  	 
		if(!is_filled($mainpriv))                           {$err_msg .= "<li class=\"error\">Please Select User Type.</li>"; }
	 	else                                                {$mainpriv = trim($mainpriv);}
	
	    if(!is_filled($firstname))  { $err_msg .= "<li class=\"error\">Your firstname is required.</li>"; }
	    else                        {$firstname = ucwords($firstname);}
	
	    if(!is_filled($lastname))   { $err_msg .= "<li class=\"error\">Your lastname is required.</li>"; }
	    else                        {$lastname = ucwords($lastname);}
	
	
	   if(!is_filled($email))           { $err_msg .= "<li class=\"error\">The Email Field is Empty.</li>"; }
	   elseif(!is_valid_email($email))  {  $err_msg .= "<li class=\"error\">The email address you entered is invalid.</li>";}
	   else                             {$email = strtolower(trim($email));}
	   
	   
	   
	  if(empty($_FILES['userfile']['name'])){$image_name = $row['picture'];}
      else                  
	    { 	                     						
	        $uploadpath = "../../uploads/images/"; 
            $source     = $_REQUEST['userfile']['tmp_name']; 
            $dest       = ''; 

            if (($source !='none') && ($source != '' ))
	           { 
                 $imagesize = getimagesize($source); 
		         $imagename = substr($userfile_name, 0 , -4 );

                 switch ( $imagesize[2] ) 
		                { 
                        case 0:echo '<br> Image is unknown <br>'; break; 									                
                        case 1:echo '<br> Image is a GIF <br>';$image_name = uniqid($imagename._).'.gif';$dest= $uploadpath.$image_name;break;  			                        				                                                 					            
                        case 2:echo '<br> Image is a JPG <br>';$image_name = uniqid($imagename._).'.jpg';$dest= $uploadpath.$image_name;break;               
                        case 3:echo '<br> Image is a PNG <br>';$image_name = uniqid($imagename._).'.png';$dest=$uploadpath.$image_name;break;   			                        
						} 

                    if ($dest !='')
	                   { 
                          if (move_uploaded_file( $source,$dest )) 
						       { 
                                echo 'File successfully stored.<br>'; 
								$cid     = 0;
								$search  = "$image_name"; 
		                        $val     = strtoupper(substr($search,0,1));
								if (eregi('[a-zA-Z]',$val) ){$sort=(strtoupper($val));} else  {$sort=0;}  
                                $query   = "insert into images values ('$image_name','$userfile_size','$userfile_type','$cid','$caption','$description','$sort','$_sess_username',now())";
                                mysql_query($query) or die(mysql_error());							
							   } 
	                      else { echo 'File could not be stored.<br>';  }
                               					   
			             }  
              } 
	 else { echo 'File not supplied, or file too big.<br>'; $image_name ="none.jpg"; } 

							
	 }
	   

		
		if (!($err_msg =="")) {echo "<div></div>";}
	       else  {
	                if ($row['username']=="admin")  {$addpriv=1;$editpriv=1;$deletepriv=1;$showpriv=1;} 
			        if($changepass==1) 
			           {
				        $q_update = "update users set password= md5('$pass1'),picture='$image_name',";
				        $q_update = $q_update . "firstname='$firstname', lastname='$lastname',branch='$branch', comment='$comment',mainpriv=$mainpriv,addpriv='$addpriv',editpriv='$editpriv',deletepriv='$deletepriv',showpriv='$showpriv',updated=now()";
				        $q_update = $q_update . "where username='$mysql_id'";
			           }
			        else if($changepass==0) 
			           {
				       $q_update = "update users set firstname='$firstname',picture='$image_name',";
				       $q_update = $q_update . "lastname='$lastname',branch='$branch',email='$email', comment='$comment',mainpriv=$mainpriv,addpriv='$addpriv',editpriv='$editpriv',deletepriv='$deletepriv',showpriv='$showpriv', updated=now() where username='$mysql_id'";
			           }
			mysql_query($q_update) or die(mysql_error());
			echo "<meta http-equiv=\"refresh\" content=\"0;url=index.php\">";
			
		   }
	}
?>



<?php if(!( isset($_REQUEST["send"] ) && ( ($_REQUEST["send"]) =='OK') )){?>

<html>

<link href="../css/style.css" rel="stylesheet" type="text/css">

<SCRIPT LANGUAGE="JavaScript">

function validate_pass1(val) 
 {
   frm=document.forms[0]
   if(val=="0") {alert('correct')}
   if(val=="pass2") {alert('correct')}
 }

function Disab(val) 
  {
   frm=document.forms[0]
   if(val=="1") {frm.pass1.disabled=false; frm.pass2.disabled=false;}
   if(val=="0") {frm.pass1.disabled=true;  frm.pass2.disabled=true;}
  }
</SCRIPT>
<head><title><?php echo $clientname;?> - Edit User Profile</title></head>



<body>


<?php cmshead($privite_site_width,$privite_nav_width,$_sess_username,$_user_rights)?>

		  
		  <div style="padding:10px"> 
		  
		   <?php top_module($manager,$add,$view,$viewcat,$addcat,$_sess_username,$_user_rights);?>
		   
		   <?php if(!empty($err_msg)){print "<div  class=error >"; echo $err_header . $err_msg . $err_footer ; print "</div>";}?>
		   
                              
           <div class="note" style="padding-top:10px">NB. All Fields in bold font are required.</div>      


<form enctype="multipart/form-data" action="<?php echo $PHP_SELF."?id=".$mysql_id?>" method="post">

<table border="0" cellspacing="0" cellpadding="0" class="cms_text">
  <tr>
    <td>

		<table border="0" cellpadding="0" cellspacing="0"  class="cms_text">
			<tr>
			  <td width="106" class="subtitle"><strong>Username:</strong></td>

<td width="268"><input type="text" name="username" size="30" value="<?php echo stripslashes($row['username'])?>" class="form"  disabled></td>
</tr>
<tr>
<td class="subtitle"><strong>Change password?</strong></td>

<td>
<input type="radio" name="changepass" value="1" class="form" <?php if($changepass==1){echo "checked";}?> onClick="Disab(this.value)">Yes
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="changepass" value="0" class="form" <?php if($changepass==0){echo "checked";}?>  onClick="Disab(this.value)">No</td>
</tr>
<tr>
<td class="subtitle"><strong>Password:</strong></td>

<td><input type="password" name="pass1" size="30" class="form" onClick="validate_pass1(this.value)"></td>
</tr>
<tr>
<td class="subtitle"><strong>Confirm password:</strong></td>

<td><input type="password" name="pass2" size="30"  class="form" onClick="validate_pass2(this.value)"></td>
</tr>

<tr>
					<td  valign="top"><strong>User Type:</strong></td>
					<td valign="top">                    
                    	<select name="mainpriv"  class="form" >
   						  <option value="">Select User Type
               					<?php
                   					$rstut=mysql_query($qut) or die(mysql_error());
		   							while($rowut=mysql_fetch_array($rstut))                                             
	           							{
	           								if($rowut[0]==$row['mainpriv']){echo "<option value=\"$rowut[0]\" selected>$rowut[caption]";}
		   									else                    {echo "<option value=\"$rowut[0]\"         >$rowut[caption]";}
										} 
               					?>
						</select>
                    </td>
			</tr>
<tr>
<td valign="top" class="subtitle">User Previlages:</td>

<td>



<table border="0" cellspacing="0" cellpadding="0" class="cms_text">
  <tr>
    <td>Add</td>
    <td><input name="addpriv" type="checkbox" value="1" <?php if (($row['addpriv'])==1) {echo "checked";} ?>  <?php if (($row['username'])=='admin'){echo "disabled";} ?> <?php if($addpriv==1){echo "checked";}?> > </td>
  </tr>
  <tr>
    <td>Edit</td>
    <td><input name="editpriv" type="checkbox" value="1" <?php if (($row['editpriv'])==1) {echo "checked";} ?> <?php if (($row['username'])=='admin'){echo "disabled";} ?> <?php if($editpriv==1){echo "checked";}?>></td>
  </tr>
  <tr>
    <td>Delete</td>
    <td><input name="deletepriv" type="checkbox" value="1" <?php if (($row['deletepriv'])==1) {echo "checked";} ?> <?php if (($row['username'])=='admin'){echo "disabled";} ?> <?php if($deletepriv==1){echo "checked";}?> ></td>
  </tr>
  <tr>
    <td>Show</td>
    <td><input name="showpriv" type="checkbox" value="1" <?php if (($row['showpriv'])==1) {echo "checked";} ?> <?php if (($row['username'])=='admin'){echo "disabled";} ?> <?php if($showpriv==1){echo "checked";}?> ></td>
  </tr>
</table>



</td>
</tr>
<tr>
<td class="subtitle"><strong>Firstname:</strong></td>

<td><input type="text" name="firstname" size="30" value="<?php echo stripslashes($row['firstname'])?>" class="form"></td>
</tr>
<tr>
<td class="subtitle"><strong>Lastname:</strong></td>

<td><input type="text" name="lastname" size="30" value="<?php echo stripslashes($row['lastname'])?>" class="form"></td>
</tr>

<tr>
<td class="subtitle"><strong>Branch:</strong></td>

<td>
<select name="branch" class="form" >
       						<option value="">Select User Branch
               					<?php
                   					$rstb=mysql_query($qb) or die(mysql_error());
		   							while($rowb=mysql_fetch_array($rstb))                                             
	           							{
	           								if($rowb[0]==$row['branch']){echo "<option value=\"$rowb[0]\" selected>$rowb[caption]";}
		   									else                    {echo "<option value=\"$rowb[0]\"         >$rowb[caption]";}
										} 
               					?>
				</select>

</td>
</tr>

<tr>
<td class="subtitle"><strong>E-mail:</strong></td>

<td><input type="text" name="email" size="30" value="<?php echo stripslashes($row['email'])?>" class="form"></td>
</tr>

<tr>
<td >User Picture:</td>

<td valign="top">
<input type="hidden" name="MAX_FILE_SIZE" value="1000000">
<input name="userfile" type="file" size="30"  class="form">
</td>
</tr>

<tr>
<td colspan="2" valign="top" >


<table border="0" cellspacing="0" cellpadding="0" class="cms_text">
  <tr>
    <td><div style="padding-top:10px">Comment:</div></td>
  </tr>
  <tr>
    <td><textarea name="comment" cols="60" rows="5" class="form"><?php echo stripslashes($row['comment'])?></textarea></td>
  </tr>
</table>


  </td>
</tr>
<tr>
<td colspan="2">
<div style="padding-top:10px ">
<input type="submit" value="Update user" class="butt">  <input type="hidden" value="OK" name="send">
</div>
</td>
</tr>
</table>




	</td>
	
	
    <?php if(!empty($row['picture']) && file_exists("../../uploads/images/".$row['picture'])){ ?>
    <td valign="top">
	  <?php
 if (!$max_width)
    $max_width  = 100;
 if (!$max_height)
    $max_height =  100;
	
 $the_real_image = "../../uploads/images/".$row['picture'];
 $size   = GetImageSize($the_real_image);
 $width  = $size[0];
 $height = $size[1];

 $x_ratio = $max_width / $width;
 $y_ratio = $max_height / $height;

 if (($width  <= $max_width) && ($height <= $max_height)) {
    $tn_width  = $width;
    $tn_height = $height;
    }
 else if (($x_ratio * $height) < ($max_height)) {
    $tn_height = ceil($x_ratio * $height);
    $tn_width  = $max_width;
    }
 else {
    $tn_width  = ceil($y_ratio * $width);
    $tn_height = $max_height;  
    }
	?>	
 <img src="../../uploads/images/<?php echo $row['picture']?>" width="<?php echo "$tn_width";?>" height="<?php echo "$tn_height";?>" class="cms_image_border">
	</td>
	<?php }?>
  </tr>
</table>


</form>



</div>
		          
</td></tr></table>
  
<?php cmsfooter()?>

<?php }?>
  


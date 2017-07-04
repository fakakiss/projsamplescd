<?php
    require('../../lib_files/private.inc.php');
	require('../../lib_files/settings.inc.php');
	
    $err_msg  = "";
	$mysql_id = $_REQUEST['id'];

	if($_REQUEST["submit"])
		{
			include('../../lib_files/privite_inc_fns/no_reg_globe_audio.inc.php');			
      		if(empty($_FILES['userfile_aud']['name'])){if($mysql_id >0){$aud_name_aud=$row['audio'];}else{$aud_name_aud="";}}
      		else                  
	  			{                    						
	           		$uploadpath_aud 	= "../../uploads/sound/"; 
               		$source_aud     	= $_FILES['userfile_aud']['tmp_name']; 
               		$dest_aud       	= ''; 	  
 			   		$audname		   	= $_FILES['userfile_aud']['name'];
 			   		$audsize		   	= $_FILES['userfile_aud']['size'];
 			   		$audtype 	   		= $_FILES['userfile_aud']['type'];
               		if (($source_aud !='none')&&($source_aud !=''))
	                 { 				                        
		               $audfirstname  	= substr($audname, 0 , -4 );
					   $lenght        	= strlen($audname);
					   $nu 		      	= $lenght - 4;
					   $ext           	= substr($audname, $nu, 4 );
                       switch($ext) 
		                   { 
                           		case ".mp3":$aud_name_aud = uniqid($audfirstname._).'.mp3';$dest_aud=$uploadpath_aud.$aud_name_aud;break;   
                           		case ".wav":$aud_name_aud = uniqid($audfirstname._).'.wav';$dest_aud=$uploadpath_aud.$aud_name_aud;break;  
                           		case ".wma":$aud_name_aud = uniqid($audfirstname._).'.wma';$dest_aud=$uploadpath_aud.$aud_name_aud;break; 
						   		case ".ppt":$aud_name_aud = uniqid($audfirstname._).'.ppt';$dest_aud=$uploadpath_aud.$aud_name_aud;break; 
						   		case ".rtf":$aud_name_aud = uniqid($audfirstname._).'.rtf';$dest_aud=$uploadpath_aud.$aud_name_aud;break;
						   		default: $err_msg .="Unsupported Document Type: $audtype";   
                           } 
                       if($dest_aud != '')
	                      { 
                            if(move_uploaded_file($source_aud,$dest_aud)) 
						       { 
                                $upload_report .= "<li class=\"report\">$aud_name_aud was successfully uploaded.</li>";
								$cid_aud     	= $mysql_id;
								$search_aud  	= "$aud_name_aud"; 
		                        $val_aud     	= strtoupper(substr($search_aud,0,1));
								if(eregi('[a-zA-Z]',$val_aud)){$sort_doc=(strtoupper($val_aud));}else{$sort_aud=0;}  
                                $query_aud   = "insert into audio values ('$aud_name_aud','$audsize','$audtype','$cid_aud','$caption','$description','$sort_doc','$_sess_username',now())";
                                mysql_query($query_aud) or die(mysql_error());
								$done	="$aud_name_aud Uploaded Successfully.";															
							   } 
	                        else{$err_msg .= "<li class=\"error\">File Could Not be Uploaded, Please Try Again.</li>";}                              					   
			              }  
                    } 
	           else {$err_msg .= "<li class=\"error\">File Invalid or Too Big.</li>";$aud_name_aud=""; } 				
			}
		}
?>


<html>
	<link href="../css/style.css" rel="stylesheet" type="text/css">
	<head><title>Add Listing Audio</title></head>
	<body>
		<table align="center" width="500px">
			<tr>
				<td>
         			<div style="padding:10px">
					<div style="padding-top:20px" class="cms_text"><strong>Required fields are in bold text.</strong></div>			
        			<div class="error" style="padding-top:20px"><?php echo $err_msg?></div>												  
             			<form enctype="multipart/form-data" action="<?php echo $PHP_SELF ?>" method="post">   
			 				<table bgcolor="#FFFFFF">		 
                      			<tr>
					      			<td><strong>Select Audio File</strong></td>                      
						   			<td><input type="hidden" name="MAX_FILE_SIZE" value="1000000"><input name="userfile_aud" type="file" size="40"  class="form"></td>						   						  
	                  			</tr>                     					 
					 			<tr>
                         			<td><strong>Caption</strong></td>
                         			<td><input name="caption" type="text" size="40" class="form"></td>
					 			</tr>
                    			<tr>
					     			<td valign="top"><strong>Description</strong></td>
                         			<td valign="top"><textarea name="description" cols="50" rows="5" class="form"></textarea></td>                  			
								</tr>				  
				  				<tr>
									<td></td>
                       				<td><input type="submit" name="submit" value="Upload Audio" class="form"></td>
                  				</tr>
           					</table>
							<?php echo $done?>
           				</form>					
         			</div>
				</td>
			</tr>
        </table>
	</body>						      
</html>


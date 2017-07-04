<?php
    require('../../lib_files/private.inc.php');
	require('../../lib_files/settings.inc.php');
	require('settings.inc.php');
	
    $err_msg = "";

	if ($_REQUEST["submit"])
		{
		    include('../../lib_files/privite_inc_fns/no_reg_globe_video.inc.php');
      		if(empty($_FILES["userfile_vid"]['name'])){$err_msg = "All fields in bold are required fields";}
	  
      		else                 
	  			{				
	           		$uploadpath_vid = "../../uploads/video/"; 
               		$source_vid     = $_FILES['userfile_vid']['tmp_name']; 
               		$dest_vid       = ''; 	  
 			   		$vidname		= $_FILES['userfile_vid']['name'];
 			   		$vidsize	    = $_FILES['userfile_vid']['size'];
 			   		$vidtype 	    = $_FILES['userfile_vid']['type'];

               if (($source_vid !='none')&&($source_vid !=''))
	                 { 				 
                       
		               $vidfirstname  = substr($vidname, 0 , -4 );
					   $lenght        = strlen($vidname);
					   $nu 		      = $lenght - 4;
					   $ext           = substr($vidname, $nu, 4 );


                       switch($ext) 
		                   { 
                           case ".wmv":$vid_name_vid = uniqid($vidfirstname._).'.wmv';$dest_vid=$uploadpath_vid.$vid_name_vid;break;   
                           case ".mpg":$vid_name_vid = uniqid($vidfirstname._).'.mpg';$dest_vid=$uploadpath_vid.$vid_name_vid;break;  
                           case "mpeg":$vid_name_vid = uniqid($vidfirstname._).'.mpeg';$dest_vid=$uploadpath_vid.$vid_name_vid;break; 
						   case ".avi":$vid_name_vid = uniqid($vidfirstname._).'.avi';$dest_vid=$uploadpath_vid.$vid_name_vid;break;
						   default: $err_msg .="<li class=\"error\">Unsupported Video Type: $vidtype</li>";   
                           } 

                       if($dest_vid != '')
	                      { 
                            if(move_uploaded_file($source_vid,$dest_vid)) 
						       { 
                                $upload_report .= "<li class=\"report\">$vid_name_vid was successfully uploaded.</li>";
								$cid_vid     = 0;
								$search_vid  = "$vid_name_doc"; 
		                        $val_vid     = strtoupper(substr($search_vid,0,1));
								if(eregi('[a-zA-Z]',$val_doc)){$sort_vid=(strtoupper($val_vid));}else{$sort_vid=0;}  
                                $query_doc   = "insert into video values ('$vid_name_vid','$vidsize','$vidtype','$cid_doc','$caption','$description','$sort_vid','$_sess_username',now())";
                                mysql_query($query_doc) or die(mysql_error());		
								 echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=index.php\">";					
							   } 
	                        else{$err_msg .= "<li class=\"error\">File Could Not be Uploaded, Please Try Again or contact Support</li>";}                              					   
			              }  
                    } 
	           else {$err_msg .= "<li class=\"error\">File Invalid or Too Big.</li>";$vid_name_vid =""; } 				
						
        	}
		}
?>


<html>

<link href="../css/style.css" rel="stylesheet" type="text/css">

<head><title><?php echo $clientname;?> | Add Video</title></head>

<body>

<?php cmshead($privite_site_width,$privite_nav_width,$_sess_username,$_user_rights)?>

	<div style="padding:10px">				
		<?php top_module($manager,$add,$view,$viewcat,$addcat,$_sess_username,$_user_rights);?>
					  
			<div style="padding-top:10px" class="cms_text"><strong>Required fields are in bold text.</strong></div>			
        	<div class="error" style="padding-top:10px"><?php echo $err_msg?></div>
												  
            	<form enctype="multipart/form-data" action="<?php echo $PHP_SELF ?>" method="post">   
			 		<table class="cms_text">			 
                      <tr>
					      <td><strong><?php echo "$cap1";?></strong></td>						                                  					        
	                      <td>
						   		<input type="hidden" name="MAX_FILE_SIZE" value="100000000">
						   		<input name="userfile_vid" type="file" size="40"  class="form">
						  </td>
	                  </tr>                     					 
					 <tr>
                         <td><?php echo "$cap2";?></td>
                         <td><input name="caption" type="text" size="40" class="form"></td>
					 </tr>
                    <tr>
					     <td valign="top"><?php echo "$cap3";?></td>
                         <td valign="top"><textarea name="description" cols="50" rows="5" class="form"></textarea></td>
                  	</tr>				  
				  	<tr>
				  		<td></td>
                       	<td><input type="submit" name="submit" value="<?php echo "$submit_bottom";?>" class="form"></td>
                  	</tr>
           		</table>
           </form>					
       </div>						     
<?php cmsfooter()?>


<?php
    require('../../lib_files/private.inc.php');
	require('../../lib_files/settings.inc.php');
	require('settings.inc.php');
	
    $err_msg = "";

if (isset($submit))
{
      if(empty($userfile)){$err_msg .= "<li class=\"error\">You Must Specify a Document to Upload.</li>";}
	  
      else                 
	  {				
	           $uploadpath_doc = "../../uploads/docs/"; 
               $source_doc     = $HTTP_POST_FILES['userfile']['tmp_name']; 
               $dest_doc       = ''; 	  
 			   $docname		   = $HTTP_POST_FILES['userfile']['name'];
 			   $docsize		   = $HTTP_POST_FILES['userfile']['size'];
 			   $doctype 	   = $HTTP_POST_FILES['userfile']['type'];

               if (($source_doc !='none')&&($source_doc !=''))
	                 { 				 
                       
		               $docfirstname  = substr($docname, 0 , -4 );
					   $lenght        = strlen($docname);
					   $nu 		      = $lenght - 4;
					   $ext           = substr($docname, $nu, 4 );


                       switch($ext) 
		                   { 
                           case ".txt":$doc_name_doc = uniqid($docfirstname._).'.txt';$dest_doc=$uploadpath_doc.$doc_name_doc;break;   
                           case ".doc":$doc_name_doc = uniqid($docfirstname._).'.doc';$dest_doc=$uploadpath_doc.$doc_name_doc;break;  
                           case ".pdf":$doc_name_doc = uniqid($docfirstname._).'.pdf';$dest_doc=$uploadpath_doc.$doc_name_doc;break; 
						   case ".ppt":$doc_name_doc = uniqid($docfirstname._).'.ppt';$dest_doc=$uploadpath_doc.$doc_name_doc;break; 
						   case ".rtf":$doc_name_doc = uniqid($docfirstname._).'.rtf';$dest_doc=$uploadpath_doc.$doc_name_doc;break;
						   default: $err_msg .= "<li class=\"error\">Unsupported Document Type: $doctype.</li>";  
                           } 
						   
                      if($dest != '')
	                               { 
                                    if(move_uploaded_file($source_doc,$dest_doc)) 
			                                  {
			                                   $cid     = 0;
			                                   $search  = "$docname"; 
		                                       $val     = strtoupper(substr($search,0,1));
			                                   if (eregi('[a-zA-Z]',$val) ){$sort=(strtoupper($val));} else  {$sort=0;}  
                                               $query   = "insert into docs values ('$doc_name_doc','$docsize','$doctype','$cid','$caption','$description','$sort','$_sess_username',now())";
                                               mysql_query($query) or die(mysql_error());
                                               echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=index.php\">";
			                                  } 
						  
	                               else     {$err_msg .= "<li class=\"error\">File Upload Error. Try Again. <br>Email: me@fakacolin.com if persistent.</li>";}  
                                  }  
                    } 
	            else {$err_msg .= "<li class=\"error\">Unexpected Error, Please Try Again. <br>Email: me@fakacolin.com if persistent.</li>";} 						
        }
}
?>


<html>

<link href="../css/style.css" rel="stylesheet" type="text/css">

<head><title><?php echo $clientname;?> | Add System Image</title></head>

<body>

<?php cmshead($privite_site_width,$privite_nav_width,$_sess_username,$_user_rights)?>

		  
		  
         <div style="padding:10px">
			
		<?php top_module($manager,$add,$view,$viewcat,$addcat,$_sess_username,$_user_rights);?>
					  
		<div  class="cms_text"><strong>Required fields are in bold text.</strong></div>			
        <div class="error" style="padding-top:10"><?php if(!empty($err_msg)){print "<div  class=error >";echo $err_header . $err_msg . $err_footer . "<br>";print "</div>";}?>
</div>
												  
             <form enctype="multipart/form-data" action="<?php echo $PHP_SELF ?>" method="post">   
			 <table class="cms_text">
			 
                      <tr>
					      <td><strong><?php echo "$cap1";?></strong></td>
					       
                           
					      	   
	                      <td>
						   <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
						   <input name="userfile" type="file" size="40"  class="form">
						  </td>
	                  </tr>
                     
					 
					 <tr>
                         <td><?php echo "$cap2";?></td>
                         <td><input name="caption" type="text" size="40" class="form"></td>
					 </tr>

                    <tr>
					     <td valign="top"><?php echo "$cap3";?></td>
                         <td valign="top"><textarea name="description" cols="50" rows="5" class="form"></textarea>
                  </td></tr>
				  
				  <tr><td></td>
                       <td><input type="submit" name="submit" value="<?php echo "$submit_bottom";?>" class="form"></td>
                  </tr>

           </table>
           </form>
					
         </div>
						
						
      
<?php cmsfooter()?>


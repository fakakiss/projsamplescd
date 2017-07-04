<?php
    require('../../lib_files/private.inc.php');
	require('../../lib_files/settings.inc.php');
	require('settings.inc.php');
	
    $err_msg = "";

if (isset($submit))
{
      if(empty($userfile)){$err_msg = "All fields in bold are required fields";}
	  
      else                 
	  {				
	         $uploadpath = "../../uploads/images/"; 
             $source     = $_REQUEST['userfile']['tmp_name']; 
             $dest       = ''; 

             if(($source != 'none')&&($source != '' ))
			      {
				      $imagesize = getimagesize($source); 
				      $imagename = substr($userfile_name, 0 , -4 );
	  
                      switch($imagesize[2]) 
	                      { 
                            case 0: break;
                            case 1:$image_name = uniqid($imagename._).'.gif';$dest=$uploadpath.$image_name;break;           
                            case 2:$image_name = uniqid($imagename._).'.jpg';$dest=$uploadpath.$image_name;break;              
                            case 3:$image_name = uniqid($imagename._).'.png';$dest=$uploadpath.$image_name;break;    
                          } 

                      if($dest != '')
	                               { 
                                    if(move_uploaded_file($source,$dest)) 
			                                  {
			                                   $cid     = 0;
			                                   $search  = "$image_name"; 
		                                       $val     = strtoupper(substr($search,0,1));
			                                   if (eregi('[a-zA-Z]',$val) ){$sort=(strtoupper($val));} else  {$sort=0;}  
                                               $query   = "insert into images values ('$image_name','$userfile_size','$userfile_type','$cid','$caption','$description','$sort','$_sess_username',now())";
                                               mysql_query($query) or die(mysql_error());
                                               echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=added.php\">";
			                                  } 
						  
	                               else{echo 'File could not be stored.<BR>';}  
                                  }  
                    } 
	            else {echo 'File not supplied, or file too big.<BR>';} 						
        }
}
?>


<html>

<link href="../css/style.css" rel="stylesheet" type="text/css">

<head><title><?php echo $clientname;?> | Add System Audio</title></head>

<body>




		  
		  
         <div style="padding:10px">
			
		<?php top_module($manager,$add,$view,$viewcat,$addcat,$_sess_username,$_user_rights);?>
					  
		<div style="padding-top:20" class="cms_text"><strong>Required fields are in bold text.</strong></div>			
        <div class="error" style="padding-top:20"><?php echo $err_msg?></div>
												  
             <form enctype="multipart/form-data" action="<?php echo $PHP_SELF ?>" method="post">   
			 <table class="cms_text">
			 
                      <tr>
					      <td>
					       
                           <strong><?php echo "$cap1";?></strong>
					      </td>	   
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


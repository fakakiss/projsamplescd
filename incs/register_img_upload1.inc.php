<?php

include 'lib_files/thumbs/sfThumbnail.class.php';
include 'lib_files/thumbs/sfGDAdapter.class.php';

			if(empty($_FILES['userfile']['name'])){$image_name ="none.jpg";}
      		else                  
	  			{                    						
	  				$uploadpath = "uploads/images/"; 
      				$source     = $_FILES['userfile']['tmp_name']; 
      				$dest       = ''; 

      				if ( ($source != 'none') && ($source != '' ))
	      				{ 
           					$imagesize = getimagesize($source); 
		   					$imagename = substr($_FILES['userfile']['name'], 0 , -4 );

        					switch ($imagesize[2]) 
								{ 

            						case 0: echo '<br> Image is unknown <br>';  break;
            						case 1:  $image_name = uniqid($imagename._).'.gif';$dest = $uploadpath.$image_name;break;
            						case 2:  $image_name = uniqid($imagename._).'.jpg';$dest = $uploadpath.$image_name;break;
            						case 3:  $image_name = uniqid($imagename._).'.png';$dest = $uploadpath.$image_name; break;
        						} 

        					if ($dest != '')
	                       		{ 
                          			if (move_uploaded_file( $source,$dest )) 
						       			{
                                            $thumb = new sfThumbnail();
                                               $thumbnail = new sfThumbnail(200, 213);
                                               $thumbnail->loadFile($dest);
                                               $image_name = uniqid($imagename._).".png";
											   $thumbnail->save($uploadpath.$image_name, 'image/png');

                                              

                                			//echo 'File successfully stored.<br>';
											$cid     = 9;
											$search  = "$image_name"; 
		                        			$val     = strtoupper(substr($search,0,1));
											//if (eregi('[a-zA-Z]',$val) ){$sort=(strtoupper($val));} else  {$sort=0;}  
                                			$query   = "insert into images values ('$image_name','$userfile_size','$userfile_type','$cid','$caption','$description','$sort','$_sess_username',now())";
                                			mysql_query($query) or die(mysql_error());							
							   			} 
	                     			else {echo 'File could not be stored.<br>';}
                               					   
			                  	}
								  
        					} 
							else {echo 'File not supplied, or file too big.<br>'; $image_name ="none";} 
						}
?>
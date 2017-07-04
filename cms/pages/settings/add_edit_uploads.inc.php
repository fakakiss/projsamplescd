<?php



	if(empty($_FILES['userfile_cap_img']['name'])){if($mpid > 0){$image_name_cap_img=$row['caption_img'];}else{$image_name_cap_img="";}}
		else                  
	  		{                    						
	           $uploadpath_cap_img = "../../uploads/images/"; 
               $source_cap_img     = $_FILES['userfile_cap_img']['tmp_name']; 
               $dest_cap_img       = ''; 

               if (($source_cap_img !='none')&&($source_cap_img != '' ))
	                 { 				 
                       $imagesize_cap_img = getimagesize($source_cap_img); 
		               $imagename_cap_img = substr($_FILES['userfile_cap_img']['name'], 0 , -4 );

                       switch( $imagesize_cap_img[2] ) 
		                   { 
                           case 0: break;
						    
                           case 1:$image_name_cap_img = uniqid($imagename_cap_img._).'.gif';$dest_cap_img=$uploadpath_cap_img.$image_name_cap_img;break;   
                           case 2:$image_name_cap_img = uniqid($imagename_cap_img._).'.jpg';$dest_cap_img=$uploadpath_cap_img.$image_name_cap_img;break;  
                           case 3:$image_name_cap_img = uniqid($imagename_cap_img._).'.png';$dest_cap_img=$uploadpath_cap_img.$image_name_cap_img;break;    
                           } 

                       if($dest_cap_img != '')
	                      { 
                            if(move_uploaded_file($source_cap_img,$dest_cap_img)) 
						       { 
                                $upload_report .= "<li class=\"report\">$image_name_cap_img was successfully uploaded.</li>";
								$cid_cap_img     = 0;
								//$search_cap_img  = "$image_name_cap_img"; 
		                        //$val_cap_img     = strtoupper(substr($search_cap_img,0,1));
								//if(eregi('[a-zA-Z]',$val_cap_img)){$sort_cap_img=(strtoupper($val_cap_img));}else{$sort_cap_img=0;}  
                                $query_cap_img   = "insert into images values ('$image_name_cap_img','$userfile_cap_img_size','$userfile_cap_img_type','$cid_cap_img','$caption','$description','$sort_cap_img','$_sess_username',now())";
                                mysql_query($query_cap_img) or die(mysql_error());							
							   } 
	                        else{$err_msg .= "<li class=\"error\">File Could Not be Uploaded for some reason.</li>";}                              					   
			              }  
                    } 
	           else {$err_msg .= "<li class=\"error\">File Invalid or Too Big.</li>";$image_name_cap_img =""; } 				
        }













	if(empty($_FILES['userfile_illus1']['name']))
		{
			if($mpid>0)	{$image_name_illus1=$row['illus1'];}
			else			{$image_name_illus1="";}		
		}
	else                  
		{                    						
	    	$uploadpath_illus1        = "../../uploads/images/"; 
            $source_illus1            = $_FILES['userfile_illus1']['tmp_name']; 
            $dest_illus1              = ''; 
			
            if (($source_illus1      !='none')&&($source_illus1 !=''))
	        	{ 				 
                	$imagesize_illus1 = getimagesize($source_illus1); 
		            $imagename_illus1 = substr($_FILES['userfile_illus1']['name'],0,-4 );
                    switch($imagesize_illus1[2] ) 
		            	{ 
                        	case 0:$err_msg .= "<li class=\"error\">Illustration 1 - Not a Valid File.</li>";break; 
                        	case 1:$image_name_illus1 = uniqid($imagename_illus1._).'.gif';$dest_illus1=$uploadpath_illus1.$image_name_illus1;break;   
                       		case 2:$image_name_illus1 = uniqid($imagename_illus1._).'.jpg';$dest_illus1=$uploadpath_illus1.$image_name_illus1;break;  
                            case 3:$image_name_illus1 = uniqid($imagename_illus1._).'.png';$dest_illus1=$uploadpath_illus1.$image_name_illus1;break;    
                        } 
                     if($dest_illus1 !='')
	                 	{ 
                        	if(move_uploaded_file($source_illus1,$dest_illus1)) 
						    	{ 
									$cid_illus1     = 0;
									//$search_illus1  = "$image_name_illus1"; 
		                        	//$val_illus1     = strtoupper(substr($search_illus1,0,1));
									//if(eregi('[a-zA-Z]',$val_illus1)){$sort_illus1=(strtoupper($val_illus1));}else{$sort_illus1=0;}  
                                	$query_illus1   = "insert into images values ('$image_name_illus1','$userfile_illus1_size','$userfile_illus1_type','$cid_illus1','$caption','$description','$sort_illus1','$_sess_username',now())";
                                	mysql_query($query_illus1) or die(mysql_error());							
						 		} 
	                        	else{$err_msg .="<li class=\"error\">File Could Not be Uploaded for some reason.</li>";}                              					   
						}  
				} 
			else {$err_msg .= "<li class=\"error\">File Invalid or Too Big.</li>";$image_name_illus1="";} 				
		}





		if(empty($_FILES['userfile_illus2']['name']))
			{	if($mpid>0){$image_name_illus2=$row['illus2'];}
				else			{$image_name_illus2="";}
			}
      	else                  
	  		{                    						
	           $uploadpath_illus2      = "../../uploads/images/"; 
               $source_illus2          = $_FILES['userfile_illus2']['tmp_name']; 
               $dest_illus2            = ''; 
			   
               if(($source_illus2     !='none')&&($source_illus2 !=''))
			      { 				 
                     $imagesize_illus2 =getimagesize($source_illus2); 
		         	$imagename_illus2  = substr($_FILES['userfile_illus2']['name'],0,-4 );

                       switch( $imagesize_illus2[2] ) 
		                   { 
                           		case 0:$err_msg .= "<li class=\"error\">Illustration 2 - Not a Valid File.</li>";break; 
                           		case 1:$image_name_illus2 = uniqid($imagename_illus2._).'.gif';$dest_illus2=$uploadpath_illus2.$image_name_illus2;break;   
                           		case 2:$image_name_illus2 = uniqid($imagename_illus2._).'.jpg';$dest_illus2=$uploadpath_illus2.$image_name_illus2;break;  
                           		case 3:$image_name_illus2 = uniqid($imagename_illus2._).'.png';$dest_illus2=$uploadpath_illus2.$image_name_illus2;break;    
                           } 
                       if($dest_illus2 != '')
	                      { 
                            if(move_uploaded_file($source_illus2,$dest_illus2)) 
						       { 
									$cid_illus2     = 0;
									//$search_illus2  = "$image_name_illus2"; 
		                        	//$val_illus2     = strtoupper(substr($search_illus2,0,1));
									//if(eregi('[a-zA-Z]',$val_illus2)){$sort_illus2=(strtoupper($val_illus2));}else{$sort_illus2=0;}  
                                	$query_illus2   = "insert into images values ('$image_name_illus2','$userfile_illus2_size','$userfile_illus2_type','$cid_illus2','$caption','$description','$sort_illus2','$_sess_username',now())";
                                	mysql_query($query_illus2) or die(mysql_error());							
							   } 
	                        else{$err_msg .= "<li class=\"error\">File Could Not be Uploaded for some reason.</li>";}                              					   
			              }  
                    } 
	           else {$err_msg .= "<li class=\"error\">File Invalid or Too Big.</li>";$image_name_illus2 =""; } 				
		}
		
		
		
		
		
		if(empty($_FILES['userfile_illus3']['name'])){if($mpid>0){$image_name_illus3=$row['illus3'];}else{$image_name_illus3="";}}
      	else                  
	  		{                    						
	           $uploadpath_illus3        = "../../uploads/images/"; 
               $source_illus3            = $_FILES['userfile_illus3']['tmp_name']; 
               $dest_illus3              = ''; 
               if (($source_illus3      !='none')&&($source_illus3 != ''))
	                 { 				 
                       $imagesize_illus3 = getimagesize($source_illus3); 
		               $imagename_illus3 = substr($_FILES['userfile_illus3']['name'],0,-4);
                       switch($imagesize_illus3[2]) 
		                   	{ 
                           		case 0:$err_msg .= "<li class=\"error\">Illustration 3 - Not a Valid File.</li>";break;
                           		case 1:$image_name_illus3 = uniqid($imagename_illus3._).'.gif';$dest_illus3=$uploadpath_illus3.$image_name_illus3;break;   
                           		case 2:$image_name_illus3 = uniqid($imagename_illus3._).'.jpg';$dest_illus3=$uploadpath_illus3.$image_name_illus3;break;  
                           		case 3:$image_name_illus3 = uniqid($imagename_illus3._).'.png';$dest_illus3=$uploadpath_illus3.$image_name_illus3;break;    
                           	} 
                       		if($dest_illus3 != '')
	                      		{ 
                            		if(move_uploaded_file($source_illus3,$dest_illus3)) 
						       			{ 
											$cid_illus3     = 0;
											//$search_illus3  = "$image_name_illus3"; 
		                        			//$val_illus3     = strtoupper(substr($search_illus3,0,1));
											//if(eregi('[a-zA-Z]',$val_illus3)){$sort_illus3=(strtoupper($val_illus3));}else{$sort_illus3=0;}  
                                			$query_illus3   = "insert into images values ('$image_name_illus3','$userfile_illus3_size','$userfile_illus3_type','$cid_illus3','$caption','$description','$sort_illus3','$_sess_username',now())";
                                			mysql_query($query_illus3) or die(mysql_error());							
							   			} 
	                        		else{$err_msg .= "<li class=\"error\">File Could Not be Uploaded for some reason.</li>";}                              					   
			              		}  
                    		} 
	           		else {$err_msg .= "<li class=\"error\">File Invalid or Too Big.</li>";$image_name_illus3="";} 				
			}
	



			if(empty($_FILES['userfile_illus4']['name'])){if($mpid > 0){$image_name_illus4=$row['illus4'];}else{$image_name_illus4="";}}
      		else                  
	  		{                    						
	           $uploadpath_illus4 = "../../uploads/images/"; 
               $source_illus4     = $_FILES['userfile_illus4']['tmp_name']; 
               $dest_illus4       = ''; 

               if (($source_illus4 !='none')&&($source_illus4 != '' ))
	                 { 				 
                       $imagesize_illus4 = getimagesize($source_illus4); 
		               $imagename_illus4 = substr($_FILES['userfile_illus4']['name'], 0 , -4 );

                       switch( $imagesize_illus4[2] ) 
		                   { 
                           case 0: break; 
                           case 1:$image_name_illus4 = uniqid($imagename_illus4._).'.gif';$dest_illus4=$uploadpath_illus4.$image_name_illus4;break;   
                           case 2:$image_name_illus4 = uniqid($imagename_illus4._).'.jpg';$dest_illus4=$uploadpath_illus4.$image_name_illus4;break;  
                           case 3:$image_name_illus4 = uniqid($imagename_illus4._).'.png';$dest_illus4=$uploadpath_illus4.$image_name_illus4;break;    
                           } 

                       if($dest_illus4 != '')
	                      { 
                            if(move_uploaded_file($source_illus4,$dest_illus4)) 
						       { 
                                $upload_report .= "<li class=\"report\">$image_name_illus4 was successfully uploaded.</li>";
								$cid_illus4     = 0;
								//$search_illus4  = "$image_name_illus4"; 
		                        //$val_illus4     = strtoupper(substr($search_illus4,0,1));
								//if(eregi('[a-zA-Z]',$val_illus4)){$sort_illus4=(strtoupper($val_illus4));}else{$sort_illus4=0;}  
                                $query_illus4   = "insert into images values ('$image_name_illus4','$userfile_illus4_size','$userfile_illus4_type','$cid_illus4','$caption','$description','$sort_illus4','$_sess_username',now())";
                                mysql_query($query_illus4) or die(mysql_error());							
							   } 
	                        else{$err_msg .= "<li class=\"error\">File Could Not be Uploaded for some reason.</li>";}                              					   
			              }  
                    } 
	           else {$err_msg .= "<li class=\"error\">File Invalid or Too Big.</li>";$image_name_illus4 =""; } 				
		}
	







if(empty($_FILES['userfile_illus5']['name'])){if($mpid > 0){$image_name_illus5=$row['illus5'];}else{$image_name_illus5="";}}

      else                  
	  {                    						
	           $uploadpath_illus5 = "../../uploads/images/"; 
               $source_illus5     = $_FILES['userfile_illus5']['tmp_name']; 
               $dest_illus5       = ''; 

               if (($source_illus5 !='none')&&($source_illus5 != '' ))
	                 { 				 
                       $imagesize_illus5 = getimagesize($source_illus5); 
		               $imagename_illus5 = substr($_FILES['userfile_illus5']['name'], 0 , -4 );

                       switch( $imagesize_illus5[2] ) 
		                   { 
                           case 0: break; 
                           case 1:$image_name_illus5 = uniqid($imagename_illus5._).'.gif';$dest_illus5=$uploadpath_illus5.$image_name_illus5;break;   
                           case 2:$image_name_illus5 = uniqid($imagename_illus5._).'.jpg';$dest_illus5=$uploadpath_illus5.$image_name_illus5;break;  
                           case 3:$image_name_illus5 = uniqid($imagename_illus5._).'.png';$dest_illus5=$uploadpath_illus5.$image_name_illus5;break;    
                           } 

                       if($dest_illus5 != '')
	                      { 
                            if(move_uploaded_file($source_illus5,$dest_illus5)) 
						       { 
                                $upload_report .= "<li class=\"report\">$image_name_illus5 was successfully uploaded.</li>";
								$cid_illus5     = 0;
								//$search_illus5  = "$image_name_illus5"; 
		                        //$val_illus5     = strtoupper(substr($search_illus5,0,1));
								//if(eregi('[a-zA-Z]',$val_illus5)){$sort_illus5=(strtoupper($val_illus5));}else{$sort_illus5=0;}  
                                $query_illus5   = "insert into images values ('$image_name_illus5','$userfile_illus5_size','$userfile_illus5_type','$cid_illus5','$caption','$description','$sort_illus5','$_sess_username',now())";
                                mysql_query($query_illus5) or die(mysql_error());							
							   } 
	                        else{$err_msg .= "<li class=\"error\">File Could Not be Uploaded for some reason.</li>";}                              					   
			              }  
                    } 
	           else {$err_msg .= "<li class=\"error\">File Invalid or Too Big.</li>";$image_name_illus5 =""; } 				
}
	








	


if(empty($_FILES['userfile_add1']['name'])){if($mpid > 0){$image_name_add1=$row['add1'];}else{$image_name_add1="";}}
      else                  
	  {                    						
	           $uploadpath_add1 = "../../uploads/images/"; 
               $source_add1     = $_FILES['userfile_add1']['tmp_name']; 
               $dest_add1       = ''; 

               if (($source_add1 !='none')&&($source_add1 != '' ))
	                 { 				 
                       $imagesize_add1 = getimagesize($source_add1); 
		               $imagename_add1 = substr($_FILES['userfile_add1']['name'], 0 , -4 );

                       switch( $imagesize_add1[2] ) 
		                   { 
                           case 0: break; 
                           case 1:$image_name_add1 = uniqid($imagename_add1._).'.gif';$dest_add1=$uploadpath_add1.$image_name_add1;break;   
                           case 2:$image_name_add1 = uniqid($imagename_add1._).'.jpg';$dest_add1=$uploadpath_add1.$image_name_add1;break;  
                           case 3:$image_name_add1 = uniqid($imagename_add1._).'.png';$dest_add1=$uploadpath_add1.$image_name_add1;break;    
                           } 

                       if($dest_add1 != '')
	                      { 
                            if(move_uploaded_file($source_add1,$dest_add1)) 
						       { 
                                $upload_report .= "<li class=\"report\">$image_name_add1 was successfully uploaded.</li>";
								$cid_add1     = 0;
								//$search_add1  = "$image_name_add1"; 
		                        //$val_add1     = strtoupper(substr($search_add1,0,1));
								//if(eregi('[a-zA-Z]',$val_add1)){$sort_add1=(strtoupper($val_add1));}else{$sort_add1=0;}  
                                $query_add1   = "insert into images values ('$image_name_add1','$userfile_add1_size','$userfile_add1_type','$cid_add1','$caption','$description','$sort_add1','$_sess_username',now())";
                                mysql_query($query_add1) or die(mysql_error());							
							   } 
	                        else{$err_msg .= "<li class=\"error\">File Could Not be Uploaded for some reason.</li>";}                              					   
			              }  
                    } 
	           else {$err_msg .= "<li class=\"error\">File Invalid or Too Big.</li>";$image_name_add1 =""; } 				
}
	
	



if(empty($_FILES['userfile_add2']['name'])){if($mpid > 0){$image_name_add2=$row['add2'];}else{$image_name_add2="";}}
      else                  
	  {                    						
	           $uploadpath_add2 = "../../uploads/images/"; 
               $source_add2     = $_FILES['userfile_add2']['tmp_name']; 
               $dest_add2       = ''; 

               if (($source_add2 !='none')&&($source_add2 != '' ))
	                 { 				 
                       $imagesize_add2 = getimagesize($source_add2); 
		               $imagename_add2 = substr($_FILES['userfile_add2']['name'], 0 , -4 );

                       switch( $imagesize_add2[2] ) 
		                   { 
                           case 0: break; 
                           case 1:$image_name_add2 = uniqid($imagename_add2._).'.gif';$dest_add2=$uploadpath_add2.$image_name_add2;break;   
                           case 2:$image_name_add2 = uniqid($imagename_add2._).'.jpg';$dest_add2=$uploadpath_add2.$image_name_add2;break;  
                           case 3:$image_name_add2 = uniqid($imagename_add2._).'.png';$dest_add2=$uploadpath_add2.$image_name_add2;break;    
                           } 

                       if($dest_add2 != '')
	                      { 
                            if(move_uploaded_file($source_add2,$dest_add2)) 
						       { 
                                $upload_report .= "<li class=\"report\">$image_name_add2 was successfully uploaded.</li>";
								$cid_add2     = 0;
								//$search_add2  = "$image_name_add2"; 
		                        //$val_add2     = strtoupper(substr($search_add2,0,1));
								//if(eregi('[a-zA-Z]',$val_add2)){$sort_add2=(strtoupper($val_add2));}else{$sort_add2=0;}  
                                $query_add2   = "insert into images values ('$image_name_add2','$userfile_add2_size','$userfile_add2_type','$cid_add2','$caption','$description','$sort_add2','$_sess_username',now())";
                                mysql_query($query_add2) or die(mysql_error());							
							   } 
	                        else{$err_msg .= "<li class=\"error\">File Could Not be Uploaded for some reason.</li>";}                              					   
			              }  
                    } 
	           else {$err_msg .= "<li class=\"error\">File Invalid or Too Big.</li>";$image_name_add2 =""; } 				
}
	
	
	


if(empty($_FILES['userfile_add3']['name'])){if($mpid > 0){$image_name_add3=$row['add3'];}else{$image_name_add3="";}}
      else                  
	  {                    						
	           $uploadpath_add3 = "../../uploads/images/"; 
               $source_add3     = $_FILES['userfile_add3']['tmp_name']; 
               $dest_add3       = ''; 

               if (($source_add3 !='none')&&($source_add3 != '' ))
	                 { 				 
                       $imagesize_add3 = getimagesize($source_add3); 
		               $imagename_add3 = substr($_FILES['userfile_add3']['name'], 0 , -4 );

                       switch( $imagesize_add3[2] ) 
		                   { 
                           case 0: break; 
                           case 1:$image_name_add3 = uniqid($imagename_add3._).'.gif';$dest_add3=$uploadpath_add3.$image_name_add3;break;   
                           case 2:$image_name_add3 = uniqid($imagename_add3._).'.jpg';$dest_add3=$uploadpath_add3.$image_name_add3;break;  
                           case 3:$image_name_add3 = uniqid($imagename_add3._).'.png';$dest_add3=$uploadpath_add3.$image_name_add3;break;    
                           } 

                       if($dest_add3 != '')
	                      { 
                            if(move_uploaded_file($source_add3,$dest_add3)) 
						       { 
                                $upload_report .= "<li class=\"report\">$image_name_add3 was successfully uploaded.</li>";
								$cid_add3     = 0;
								//$search_add3  = "$image_name_add3"; 
		                        //$val_add3     = strtoupper(substr($search_add3,0,1));
								//if(eregi('[a-zA-Z]',$val_add3)){$sort_add3=(strtoupper($val_add3));}else{$sort_add3=0;}  
                                $query_add3   = "insert into images values ('$image_name_add3','$userfile_add3_size','$userfile_add3_type','$cid_add3','$caption','$description','$sort_add3','$_sess_username',now())";
                                mysql_query($query_add3) or die(mysql_error());							
							   } 
	                        else{$err_msg .= "<li class=\"error\">File Could Not be Uploaded for some reason.</li>";}                              					   
			              }  
                    } 
	           else {$err_msg .= "<li class=\"error\">File Invalid or Too Big.</li>";$image_name_add3 =""; } 				
}
	



if(empty($_FILES['userfile_add4']['name'])){if($mpid > 0){$image_name_add4=$row['add4'];}else{$image_name_add4="";}}
      else                  
	  {                    						
	           $uploadpath_add4 = "../../uploads/images/"; 
               $source_add4     = $_FILES['userfile_add4']['tmp_name']; 
               $dest_add4       = ''; 

               if (($source_add4 !='none')&&($source_add4 != '' ))
	                 { 				 
                       $imagesize_add4 = getimagesize($source_add4); 
		               $imagename_add4 = substr($_FILES['userfile_add4']['name'], 0 , -4 );

                       switch( $imagesize_add4[2] ) 
		                   { 
                           case 0: break; 
                           case 1:$image_name_add4 = uniqid($imagename_add4._).'.gif';$dest_add4=$uploadpath_add4.$image_name_add4;break;   
                           case 2:$image_name_add4 = uniqid($imagename_add4._).'.jpg';$dest_add4=$uploadpath_add4.$image_name_add4;break;  
                           case 3:$image_name_add4 = uniqid($imagename_add4._).'.png';$dest_add4=$uploadpath_add4.$image_name_add4;break;    
                           } 

                       if($dest_add4 != '')
	                      { 
                            if(move_uploaded_file($source_add4,$dest_add4)) 
						       { 
                                $upload_report .= "<li class=\"report\">$image_name_add4 was successfully uploaded.</li>";
								$cid_add4     = 0;
								//$search_add4  = "$image_name_add4"; 
		                        //$val_add4     = strtoupper(substr($search_add4,0,1));
								//if(eregi('[a-zA-Z]',$val_add4)){$sort_add4=(strtoupper($val_add4));}else{$sort_add4=0;}  
                                $query_add4   = "insert into images values ('$image_name_add4','$userfile_add4_size','$userfile_add4_type','$cid_add4','$caption','$description','$sort_add4','$_sess_username',now())";
                                mysql_query($query_add4) or die(mysql_error());							
							   } 
	                        else{$err_msg .= "<li class=\"error\">File Could Not be Uploaded for some reason.</li>";}                              					   
			              }  
                    } 
	           else {$err_msg .= "<li class=\"error\">File Invalid or Too Big.</li>";$image_name_add4 =""; } 				
}
	


if(empty($_FILES['userfile_add5']['name'])){if($mpid > 0){$image_name_add5=$row['add5'];}else{$image_name_add5="";}}
      else                  
	  {                    						
	           $uploadpath_add5 = "../../uploads/images/"; 
               $source_add5     = $_FILES['userfile_add5']['tmp_name']; 
               $dest_add5       = ''; 

               if (($source_add5 !='none')&&($source_add5 != '' ))
	                 { 				 
                       $imagesize_add5 = getimagesize($source_add5); 
		               $imagename_add5 = substr($_FILES['userfile_add5']['name'], 0 , -4 );

                       switch( $imagesize_add5[2] ) 
		                   { 
                           case 0: break; 
                           case 1:$image_name_add5 = uniqid($imagename_add5._).'.gif';$dest_add5=$uploadpath_add5.$image_name_add5;break;   
                           case 2:$image_name_add5 = uniqid($imagename_add5._).'.jpg';$dest_add5=$uploadpath_add5.$image_name_add5;break;  
                           case 3:$image_name_add5 = uniqid($imagename_add5._).'.png';$dest_add5=$uploadpath_add5.$image_name_add5;break;    
                           } 

                       if($dest_add5 != '')
	                      { 
                            if(move_uploaded_file($source_add5,$dest_add5)) 
						       { 
                                $upload_report .= "<li class=\"report\">$image_name_add5 was successfully uploaded.</li>";
								$cid_add5     = 0;
								//$search_add5  = "$image_name_add5"; 
		                        //$val_add5     = strtoupper(substr($search_add5,0,1));
								//if(eregi('[a-zA-Z]',$val_add5)){$sort_add5=(strtoupper($val_add5));}else{$sort_add5=0;}  
                                $query_add5   = "insert into images values ('$image_name_add5','$userfile_add5_size','$userfile_add5_type','$cid_add5','$caption','$description','$sort_add5','$_sess_username',now())";
                                mysql_query($query_add5) or die(mysql_error());							
							   } 
	                        else{$err_msg .= "<li class=\"error\">File Could Not be Uploaded for some reason.</li>";}                              					   
			              }  
                    } 
	           else {$err_msg .= "<li class=\"error\">File Invalid or Too Big.</li>";$image_name_add5 =""; } 				
}
	
	
	
	
	
	
	
	
	
	
	


if(empty($_FILES['userfile_doc']['name'])){if($mpid > 0){$doc_name_doc=$row['doc'];}else {$doc_name_doc ="";}}
      else                  
	  {                    						
	           $uploadpath_doc = "../../uploads/docs/"; 
               $source_doc     = $_FILES['userfile_doc']['tmp_name']; 
               $dest_doc       = ''; 	  
 			   $docname		   = $_FILES['userfile_doc']['name'];
 			   $docsize		   = $_FILES['userfile_doc']['size'];
 			   $doctype 	   = $_FILES['userfile_doc']['type'];

               if (($source_doc !='none')&&($source_doc !=''))
	                 { 				 
                       
		               $docfirstname  = substr($docname, 0 , -4 );
					   $lenght        = strlen($docname);
					   $nu 		      =  $lenght - 4;
					   $ext           = substr($docname, $nu, 4 );


                       switch($ext) 
		                   { 
                           case ".txt":$doc_name_doc = uniqid($docfirstname._).'.txt';$dest_doc=$uploadpath_doc.$doc_name_doc;break;   
                           case ".doc":$doc_name_doc = uniqid($docfirstname._).'.doc';$dest_doc=$uploadpath_doc.$doc_name_doc;break;  
                           case ".pdf":$doc_name_doc = uniqid($docfirstname._).'.pdf';$dest_doc=$uploadpath_doc.$doc_name_doc;break; 
						   case ".ppt":$doc_name_doc = uniqid($docfirstname._).'.ppt';$dest_doc=$uploadpath_doc.$doc_name_doc;break; 
						   case ".rtf":$doc_name_doc = uniqid($docfirstname._).'.rtf';$dest_doc=$uploadpath_doc.$doc_name_doc;break;
						   default: $err_msg .="<li class=\"error\">Unsupported Document Type: $doctype</li>";   
                           } 

                       if($dest_doc != '')
	                      { 
                            if(move_uploaded_file($source_doc,$dest_doc)) 
						       { 
                                $upload_report .= "<li class=\"report\">$doc_name_doc was successfully uploaded.</li>";
								$cid_doc     = 0;
								//$search_doc  = "$doc_name_doc"; 
		                        //$val_doc     = strtoupper(substr($search_doc,0,1));
								//if(eregi('[a-zA-Z]',$val_doc)){$sort_doc=(strtoupper($val_doc));}else{$sort_doc=0;}  
                                $query_doc   = "insert into docs values ('$doc_name_doc','$docsize','$doctype','$cid_doc','$caption','$description','$sort_doc','$_sess_username',now())";
                                mysql_query($query_doc) or die(mysql_error());							
							   } 
	                        else{$err_msg .= "<li class=\"error\">File Could Not be Uploaded, Please Try again.</li>";}                              					   
			              }  
                    } 
	           else {$err_msg .= "<li class=\"error\">File Invalid or Too Big.</li>";$doc_name_doc ="";} 				
}
		













if(empty($_FILES['userfile_aud']['name'])){if($mpid>0){$aud_name_aud=$row['audio'];}else{$aud_name_aud ="";}}
      else                  
	  	{                    						
	           $uploadpath_aud = "../../uploads/sound/"; 
               $source_aud     = $_FILES['userfile_aud']['tmp_name']; 
               $dest_aud       = ''; 	  
 			   $audname		   = $_FILES['userfile_aud']['name'];
 			   $audsize		   = $_FILES['userfile_aud']['size'];
 			   $audtype 	   = $_FILES['userfile_aud']['type'];
               if (($source_aud !='none')&&($source_aud !=''))
	                 { 				                        
		               $audfirstname  = substr($audname, 0 , -4 );
					   $lenght        = strlen($audname);
					   $nu 		      = $lenght - 4;
					   $ext           = substr($audname, $nu, 4 );
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
								$cid_aud     = 0;
								//$search_aud  = "$aud_name_aud"; 
		                        //$val_aud     = strtoupper(substr($search_aud,0,1));
								//if(eregi('[a-zA-Z]',$val_aud)){$sort_doc=(strtoupper($val_aud));}else{$sort_aud=0;}  
                                $query_doc   = "insert into audio values ('$aud_name_aud','$audsize','$audtype','$cid_aud','$caption','$description','$sort_doc','$_sess_username',now())";
                                mysql_query($query_doc) or die(mysql_error());															
							   } 
	                        else{$err_msg .= "<li class=\"error\">File Could Not be Uploaded, Please Try Again.</li>";}                              					   
			              }  
                    } 
	           else {$err_msg .= "<li class=\"error\">File Invalid or Too Big.</li>";$aud_name_aud=""; } 				
}
		



if(empty($_FILES['userfile_vid']['name'])){if($mpid > 0){$vid_name_vid=$row['video'];}else {$vid_name_vid ="";}}
      else                  
	  {                    						
	           $uploadpath_vid = "../../uploads/video/"; 
               $source_vid     = $_FILES['userfile_vid']['tmp_name']; 
               $dest_vid       = ''; 	  
 			   $vidname		   = $_FILES['userfile_vid']['name'];
 			   $vidsize		   = $_FILES['userfile_vid']['size'];
 			   $vidtype 	   = $_FILES['userfile_vid']['type'];

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
						   case ".asf":$vid_name_vid = uniqid($vidfirstname._).'.asf';$dest_vid=$uploadpath_vid.$vid_name_vid;break;
						   case ".mp4":$vid_name_vid = uniqid($vidfirstname._).'.mp4';$dest_vid=$uploadpath_vid.$vid_name_vid;break;
						   case ".3gp":$vid_name_vid = uniqid($vidfirstname._).'.3gp';$dest_vid=$uploadpath_vid.$vid_name_vid;break;
						   case ".flv":$vid_name_vid = uniqid($vidfirstname._).'.flv';$dest_vid=$uploadpath_vid.$vid_name_vid;break;
						   default: $err_msg .="<li class=\"error\">Unsupported Video Type: $vidtype</li>";   
                           } 

                       if($dest_vid != '')
	                      { 
                            if(move_uploaded_file($source_vid,$dest_vid)) 
						       { 
                                $upload_report .= "<li class=\"report\">$vid_name_vid was successfully uploaded.</li>";
								$cid_vid     = 0;
								//$search_vid  = "$vid_name_doc"; 
		                        //$val_vid     = strtoupper(substr($search_vid,0,1));
								//if(eregi('[a-zA-Z]',$val_doc)){$sort_vid=(strtoupper($val_vid));}else{$sort_vid=0;}  
                                $query_doc   = "insert into video values ('$vid_name_vid','$vidsize','$vidtype','$cid_doc','$caption','$description','$sort_vid','$_sess_username',now())";
                                mysql_query($query_doc) or die(mysql_error());							
							   } 
	                        else{$err_msg .= "<li class=\"error\">File Could Not be Uploaded, Please Try Again or contact Support</li>";}                              					   
			              }  
                    } 
	           else {$err_msg .= "<li class=\"error\">File Invalid or Too Big.</li>";$vid_name_vid =""; } 				
}
		

	
	
	
	
	
	
	
if(empty($_FILES['userfile_zip']['name'])){if($mpid > 0){$zip_name_zip=$row['zip'];}else {$zip_name_zip="";}}	
      else                  
	  {                    						
	           $uploadpath_zip = "../../uploads/packages/"; 
               $source_zip     = $_FILES['userfile_zip']['tmp_name']; 
               $dest_zip       = ''; 

               if (($source_zip !='none')&&($source_zip != '' ))
	                 { 				 
                       $imagesize_zip = getimagesize($source_zip); 
		               $imagename_zip = substr($userfile_zip_name, 0 , -4 );

                       switch( $imagesize_zip[2] ) 
		                   { 
                           case 0: break; 
                           case 1:$image_name_zip = uniqid($imagename_zip._).'.rar';$dest_zip=$uploadpath_zip.$image_name_zip;break;   
                           case 2:$image_name_zip = uniqid($imagename_zip._).'.zip';$dest_zip=$uploadpath_zip.$image_name_zip;break;  
                           case 3:$image_name_zip = uniqid($imagename_zip._).'.exe';$dest_zip=$uploadpath_zip.$image_name_zip;break;    
                           } 

                       if($dest_zip != '')
	                      { 
                            if(move_uploaded_file($source_zip,$dest_zip)) 
						       { 
                                $upload_report .= "<li class=\"report\">$image_name_zip was successfully uploaded.</li>";
								$cid_zip     = 0;
								//$search_zip  = "$image_name_zip"; 
		                        //$val_zip     = strtoupper(substr($search_zip,0,1));
								//if(eregi('[a-zA-Z]',$val_zip)){$sort_zip=(strtoupper($val_zip));}else{$sort_zip=0;}  
                                $query_zip   = "insert into images values ('$image_name_zip','$userfile_zip_size','$userfile_zip_type','$cid_zip','$caption','$description','$sort_zip','$_sess_username',now())";
                                mysql_query($query_zip) or die(mysql_error());							
							   } 
	                        else{$err_msg .= "<li class=\"error\">File Could Not be Uploaded for some reason.</li>";}                              					   
			              }  
                    } 
	           else {$err_msg .= "<li class=\"error\">File Invalid or Too Big.</li>";$image_name_zip =""; } 				
}
		
	
	
	
	
	
	
	
	
	
	
if(empty($_FILES['userfile']['name'])){if($mpid > 0){$image_name=$row['img'];}else {$image_name="";}}
      else                  
	  {                    						
	           $uploadpath = "../../uploads/images/"; 
               $source     = $_FILES['userfile']['tmp_name']; 
               $dest       = ''; 

               if(($source != 'none')&&($source != '' ))
	                 { 
                       $imagesize = getimagesize($source); 
		               $imagename = substr($userfile_name, 0 , -4 );

                       switch($imagesize[2] ) 
		                     { 
                               case 0: break; 
                               case 1:$image_name = uniqid($imagename._).'.gif';$dest=$uploadpath.$image_name;break;   
                               case 2:$image_name = uniqid($imagename._).'.jpg';$dest=$uploadpath.$image_name;break;  
                               case 3:$image_name = uniqid($imagename._).'.png';$dest=$uploadpath.$image_name;break;    
                             } 

                        if($dest != '')
	                         { 
                               if(move_uploaded_file( $source,$dest )) 
						        { 
                                 $upload_report.= "<li class=\"good\">You must select a username.</li>";
								 $cid     = 0;
								 //$search  = "$image_name"; 
		                         //$val     = strtoupper(substr($search,0,1));
								 //if (eregi('[a-zA-Z]',$val) ){$sort=(strtoupper($val));} else  {$sort=0;}  
                                 $query   = "insert into images values ('$image_name','$userfile_size','$userfile_type','$cid','$caption','$description','$sort','$_sess_username',now())";
                                 mysql_query($query) or die(mysql_error());							
							    } 
	                      else { echo 'File could not be stored.<br>';  }
                               					   
			          }  
                } 
	else { echo 'File not supplied, or file too big.<br>'; $image_name ="none"; } 				
}
	   
	   
	   
	  
if(empty($_FILES['userfile1']['name'])){if($mpid > 0){$image_name1=$row['img1'];}else{$image_name1="";}}	   
      else                  
	  {                    						
	           $uploadpath1 = "../../uploads/images/"; 
               $source1     = $_FILES['userfile1']['tmp_name']; 
               $dest1       = ''; 

               if (($source1 != 'none') && ($source1 != '' ))
	                 { 
                       $imagesize1 = getimagesize($source1); 
		               $imagename1 = substr($userfile1_name, 0 , -4 );

               switch( $imagesize1[2] ) 
		             { 
                      case 0: break; 
                      case 1:$image_name1 = uniqid($imagename1._).'.gif';$dest1=$uploadpath1.$image_name1;break;   
                      case 2:$image_name1 = uniqid($imagename1._).'.jpg';$dest1=$uploadpath1.$image_name1;break;  
                      case 3:$image_name1 = uniqid($imagename1._).'.png';$dest1=$uploadpath1.$image_name1;break;    
                     } 

               if ($dest1 != '')
	                 { 
                          if (move_uploaded_file( $source1,$dest1)) 
						       { 
                                echo 'File successfully stored.<br>'; 
								$cid1     = 0;
								//$search1  = "$image_name1"; 
		                        //$val1     = strtoupper(substr($search1,0,1));
								//if (eregi('[a-zA-Z]',$val1) ){$sort=(strtoupper($val1));} else  {$sort1=0;}  
                                $query1   = "insert into images values ('$image_name1','$userfile1_size','$userfile1_type','$cid1','$caption','$description','$sort1','$_sess_username',now())";
                                mysql_query($query1) or die(mysql_error());							
							   } 
	                      else { echo 'File could not be stored.<br>';  }
                               					   
			          }  
                } 
	else { echo 'File not supplied, or file too big.<br>'; $image_name1 =""; } 				
}
	   
	   
	   
	   
	   
	   
if(empty($_FILES['userfile2']['name'])){if($mpid > 0){$image_name2=$row['img2'];}else {$image_name2="";}}
      else                  
	  {                    						
	           $uploadpath2 = "../../uploads/images/"; 
               $source2     = $_FILES['userfile2']['tmp_name']; 
               $dest2       = ''; 

               if (($source2 != 'none') && ($source2 != '' ))
	                 { 
                       $imagesize2 = getimagesize($source2); 
		               $imagename2 = substr($userfile2_name, 0 , -4 );

               switch( $imagesize2[2] ) 
		             { 
                      case 0: break; 
                      case 1:$image_name2 = uniqid($imagename2._).'.gif';$dest2=$uploadpath2.$image_name2;break;   
                      case 2:$image_name2 = uniqid($imagename2._).'.jpg';$dest2=$uploadpath2.$image_name2;break;  
                      case 3:$image_name2 = uniqid($imagename2._).'.png';$dest2=$uploadpath2.$image_name2;break;    
                     } 

               if ($dest2 != '')
	                 { 
                          if (move_uploaded_file( $source2,$dest2)) 
						       { 
                                echo 'File successfully stored.<br>'; 
								$cid2     = 0;
								//$search2  = "$image_name2"; 
		                        //$val2     = strtoupper(substr($search2,0,1));
								//if (eregi('[a-zA-Z]',$val2) ){$sort=(strtoupper($val2));} else  {$sort2=0;}  
                                $query2   = "insert into images values ('$image_name2','$userfile2_size','$userfile2_type','$cid2','$caption','$description','$sort2','$_sess_username',now())";
                                mysql_query($query2) or die(mysql_error());							
							   } 
	                      else { echo 'File could not be stored.<br>';  }
                               					   
			          }  
                } 
	else { echo 'File not supplied, or file too big.<br>'; $image_name2 =""; } 				
	 }
	   
	   
	   
	   
	   
if(empty($_FILES['userfile3']['name'])){if($mpid > 0){$image_name3=$row['img3'];}else {$image_name3="";}}
      else                  
	  {                    						
	           $uploadpath3 = "../../uploads/images/"; 
               $source3     = $_FILES['userfile3']['tmp_name']; 
               $dest3       = ''; 

               if (($source3 != 'none') && ($source3 != '' ))
	                 { 
                       $imagesize3 = getimagesize($source3); 
		               $imagename3 = substr($userfile3_name, 0 , -4 );

               switch( $imagesize3[2] ) 
		             { 
                      case 0: break; 
                      case 1:$image_name3 = uniqid($imagename3._).'.gif';$dest3=$uploadpath3.$image_name3;break;   
                      case 2:$image_name3 = uniqid($imagename3._).'.jpg';$dest3=$uploadpath3.$image_name3;break;  
                      case 3:$image_name3 = uniqid($imagename3._).'.png';$dest3=$uploadpath3.$image_name3;break;    
                     } 

               if ($dest3 != '')
	                 { 
                          if (move_uploaded_file( $source3,$dest3)) 
						       { 
                                echo 'File successfully stored.<br>'; 
								$cid3     = 0;
								//$search3  = "$image_name3"; 
		                        //$val3     = strtoupper(substr($search3,0,1));
								//if (eregi('[a-zA-Z]',$val3) ){$sort=(strtoupper($val3));} else  {$sort3=0;}  
                                $query3   = "insert into images values ('$image_name3','$userfile3_size','$userfile3_type','$cid3','$caption','$description','$sort3','$_sess_username',now())";
                                mysql_query($query3) or die(mysql_error());							
							   } 
	                      else { echo 'File could not be stored.<br>';  }
                               					   
			          }  
                } 
	else { echo 'File not supplied, or file too big.<br>'; $image_name3 =""; } 				
	 }
	   
	   
	   
	   
	   
	   
if(empty($_FILES['userfile4']['name'])){if($mpid > 0){$image_name4=$row['img4'];}else {$image_name4="";}}	   
      else                  
	  {                    						
	           $uploadpath4 = "../../uploads/images/"; 
               $source4     = $_FILES['userfile4']['tmp_name']; 
               $dest4       = ''; 

               if (($source4 != 'none') && ($source4 != '' ))
	                 { 
                       $imagesize4 = getimagesize($source4); 
		               $imagename4 = substr($userfile4_name, 0 , -4 );

               switch( $imagesize4[2] ) 
		             { 
                      case 0: break; 
                      case 1:$image_name4 = uniqid($imagename4._).'.gif';$dest4=$uploadpath4.$image_name4;break;   
                      case 2:$image_name4 = uniqid($imagename4._).'.jpg';$dest4=$uploadpath4.$image_name4;break;  
                      case 3:$image_name4 = uniqid($imagename4._).'.png';$dest4=$uploadpath4.$image_name4;break;    
                     } 

               if ($dest4 != '')
	                 { 
                          if (move_uploaded_file( $source4,$dest4)) 
						       { 
                                echo 'File successfully stored.<br>'; 
								$cid4     = 0;
								//$search4  = "$image_name4"; 
		                        //$val4     = strtoupper(substr($search4,0,1));
								//if (eregi('[a-zA-Z]',$val4) ){$sort=(strtoupper($val4));} else  {$sort4=0;}  
                                $query4   = "insert into images values ('$image_name4','$userfile4_size','$userfile4_type','$cid4','$caption','$description','$sort4','$_sess_username',now())";
                                mysql_query($query4) or die(mysql_error());							
							   } 
	                      else { echo 'File could not be stored.<br>';  }
                               					   
			          }  
                } 
	else { echo 'File not supplied, or file too big.<br>'; $image_name4 =""; } 				
	 }
	 
	 
	 
	 
	 
	 
if(empty($_FILES['userfile5']['name'])){if($mpid > 0){$image_name5=$row['img5'];}else {$image_name5="";}}
      else                  
	  {                    						
	           $uploadpath5 = "../../uploads/images/"; 
               $source5     = $_FILES['userfile5']['tmp_name']; 
               $dest5       = ''; 

               if (($source5 != 'none') && ($source5 != '' ))
	                 { 				 
                       $imagesize5 = getimagesize($source5); 
		               $imagename5 = substr($userfile5_name, 0 , -4 );

                       switch( $imagesize5[2] ) 
		                   { 
                           case 0: break; 
                           case 1:$image_name5 = uniqid($imagename5._).'.gif';$dest5=$uploadpath5.$image_name5;break;   
                           case 2:$image_name5 = uniqid($imagename5._).'.jpg';$dest5=$uploadpath5.$image_name5;break;  
                           case 3:$image_name5 = uniqid($imagename5._).'.png';$dest5=$uploadpath5.$image_name5;break;    
                           } 

                       if ($dest5 != '')
	                      { 
                            if (move_uploaded_file($source5,$dest5)) 
						       { 
                                echo 'File successfully stored.<br>'; 
								$cid5     = 0;
								//$search5  = "$image_name5"; 
		                        //$val5     = strtoupper(substr($search5,0,1));
								//if (eregi('[a-zA-Z]',$val5) ){$sort5=(strtoupper($val5));} else  {$sort5=0;}  
                                $query5   = "insert into images values ('$image_name5','$userfile5_size','$userfile5_type','$cid5','$caption','$description','$sort5','$_sess_username',now())";
                                mysql_query($query5) or die(mysql_error());							
							   } 
	                        else { echo 'File could not be stored.<br>';  }                              					   
			              }  
                    } 
	           else { echo 'File not supplied, or file too big.<br>'; $image_name5 =""; } 				
}	     
?>   
	   
	   
	   
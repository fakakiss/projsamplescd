<?php
    require('../../lib_files/private.inc.php');
	require('../../lib_files/settings.inc.php');
	
	require('settings/main_settings.inc.php');
	require('settings/addlisting_editlisting_settings.inc.php');
	
    $err_msg  	= "";
	$scatid 	= $_REQUEST['spid'];
	$lid 		= $_REQUEST['lpid'];
	
	$q 			= "select * from $system_listing_table where id='$lid'";
	$rst 		= mysqli_query($conn,$q) or die(mysqli_error($conn));
	if(mysqli_num_rows($rst)>0){$row = mysqli_fetch_array($rst) or die(mysqli_error($conn));}

	if ($_REQUEST["submit"])
		{
		
		    //$scatid 	= $_REQUEST['spid'];
			//$lid 		= $_REQUEST['lpid'];
			
			include('../../lib_files/privite_inc_fns/no_reg_globe_images.inc.php');  					
					
      		if(empty($_FILES["userfile_1xxx"]['name'])){$err_msg .= "<li class=\"error\">Image 1 - Empty.</li>";}
      		else                 
	  			{				
	         		$uploadpath_1xxx  ="../../uploads/images/"; 
             		$source_1xxx      =$_FILES['userfile_1xxx']['tmp_name']; 
             		$dest_1xxx        =''; 
             		if(($source_1xxx !='none')&&($source_1xxx !=''))
			      		{
				      		$imagesize_1xxx = getimagesize($source_1xxx); 
				      		$imagename_1xxx = substr(($_FILES['userfile_1xxx']['name']),0,-4 );  
                      		switch($imagesize_1xxx[2]) 
	                      		{ 
                            		case 0:$err_msg .= "<li class=\"error\">Illustration 1 - Not a Valid File.</li>";break;
                            		case 1:$image_name_1xxx = uniqid($imagename_1xxx._).'.gif';$dest_1xxx=$uploadpath_1xxx.$image_name_1xxx;break;
                            		case 2:$image_name_1xxx = uniqid($imagename_1xxx._).'.jpg';$dest_1xxx=$uploadpath_1xxx.$image_name_1xxx;break;
                            		case 3:$image_name_1xxx = uniqid($imagename_1xxx._).'.png';$dest_1xxx=$uploadpath_1xxx.$image_name_1xxx;break;  
									case 4:$image_name_1xxx = uniqid($imagename_1xxx._).'.bmp';$dest_1xxx=$uploadpath_1xxx.$image_name_1xxx;break;  
                          		} 
                      		if($dest_1xxx != '')
	                            { 
                                   if(move_uploaded_file($source_1xxx,$dest_1xxx)) 
			                           {
			                             // $cid_1xxx      = 0;
			                              //$search_1xxx   = "$image_name_1xxx"; 
		                                  //$val_1xxx      = strtoupper(substr($search_1xxx,0,1));
			                              //if (eregi('[a-zA-Z]',$val_1xxx)){$sort_1xxx=(strtoupper($val_1xxx));}else{$sort_1xxx=0;}
										    
                                          $query_1xxx   = "insert into images values(NULL,'$image_name_1xxx','$flwupic_1xxx','$zoompic_1xxx','$feature','1','$scatid','$lid','$caption_1xxx','$price_1xxx','$slogan_1xxx','$description_1xxx','$recommened_1xxx','$slidpic_1xxx','$pic1_1xxx','$pic2_1xxx','$pic3_1xxx','$pic4_1xxx','$pic5_1xxx','0','0','0','$_sess_username',now());";										  
                                          mysql_query($query_1xxx) or die(mysql_error());
										  
                                          $done_1xxx	="$image_name_1xxx Uploaded Successfully.";
			                            } 						  
	                               else{$err_msg .= "<li class=\"error\">Image 1 - could not be stored.<br>.</li>";}  
                                  }  
                    } 
	            else {$err_msg .= "<li class=\"error\">Image 1 - Too Big.</li>";} 						
        	}
			
			
			
			
			if(empty($_FILES["userfile_2xxx"]['name'])){$err_msg .= "<li class=\"error\">Image 2 - Empty</li>";}
      		else                 
	  			{				
	         		$uploadpath_2xxx  ="../../uploads/images/"; 
             		$source_2xxx      =$_FILES['userfile_2xxx']['tmp_name']; 
             		$dest_2xxx        =''; 
             		if(($source_2xxx !='none')&&($source_2xxx !=''))
			      		{
				      		$imagesize_2xxx = getimagesize($source_2xxx); 
				      		$imagename_2xxx = substr(($_FILES['userfile_2xxx']['name']),0,-4 );  
                      		switch($imagesize_2xxx[2]) 
	                      		{ 
                            		case 0:$err_msg .= "<li class=\"error\">Not a Valid File.</li>";break;
                            		case 1:$image_name_2xxx = uniqid($imagename_2xxx._).'.gif';$dest_2xxx=$uploadpath_2xxx.$image_name_2xxx;break;           
                            		case 2:$image_name_2xxx = uniqid($imagename_2xxx._).'.jpg';$dest_2xxx=$uploadpath_2xxx.$image_name_2xxx;break;              
                            		case 3:$image_name_2xxx = uniqid($imagename_2xxx._).'.png';$dest_2xxx=$uploadpath_2xxx.$image_name_2xxx;break;  
									case 4:$image_name_2xxx = uniqid($imagename_2xxx._).'.bmp';$dest_2xxx=$uploadpath_2xxx.$image_name_2xxx;break;  
                          		} 
                      		if($dest_2xxx != '')
	                            { 
                                   if(move_uploaded_file($source_2xxx,$dest_2xxx)) 
			                           {
			                              //$cid_2xxx      = 0;
			                              //$search_2xxx   = "$image_name_2xxx"; 
		                                  //$val_2xxx      = strtoupper(substr($search_2xxx,0,1));
			                              //if (eregi('[a-zA-Z]',$val_2xxx)){$sort_2xxx=(strtoupper($val_2xxx));}else{$sort_2xxx=0;}  
                                          $query_2xxx   = "insert into images values(null,'$image_name_2xxx','$flwupic','$zoompic_1xxx','$feature','1','$scatid','$lid','$caption_2xxx','$price_2xxx','$slogan','$description_2xxx','$sort','$slidpic','$pic1','$pic2','$pic3','$pic4','$pic5','$sale','$new','$active','$_sess_username',now())";
                                          mysql_query($query_2xxx) or die(mysql_error());
                                          $done_2xxx	="$image_name_2xxx Uploaded Successfully.";
			                            } 						  
	                               else{$err_msg .= "<li class=\"error\">could not be stored.<br>.</li>";}  
                                  }  
                    } 
	            else {$err_msg .= "<li class=\"error\">Too Big.</li>";} 						
        	}
			
			
		    if(empty($_FILES["userfile_3xxx"]['name'])){$err_msg .= "<li class=\"error\">Image 3 - Empty.</li>";}
      		else                 
	  			{				
	         		$uploadpath_3xxx  ="../../uploads/images/"; 
             		$source_3xxx      =$_FILES['userfile_3xxx']['tmp_name']; 
             		$dest_3xxx        =''; 
             		if(($source_3xxx !='none')&&($source_3xxx !=''))
			      		{
				      		$imagesize_3xxx = getimagesize($source_3xxx); 
				      		$imagename_3xxx = substr(($_FILES['userfile_3xxx']['name']),0,-4 );  
                      		switch($imagesize_3xxx[2]) 
	                      		{ 
                            		case 0:$err_msg .= "<li class=\"error\">Not a Valid File.</li>";break;
                            		case 1:$image_name_3xxx = uniqid($imagename_3xxx._).'.gif';$dest_3xxx=$uploadpath_3xxx.$image_name_3xxx;break;           
                            		case 2:$image_name_3xxx = uniqid($imagename_3xxx._).'.jpg';$dest_3xxx=$uploadpath_3xxx.$image_name_3xxx;break;              
                            		case 3:$image_name_3xxx = uniqid($imagename_3xxx._).'.png';$dest_3xxx=$uploadpath_3xxx.$image_name_3xxx;break;  
									case 4:$image_name_3xxx = uniqid($imagename_3xxx._).'.bmp';$dest_3xxx=$uploadpath_3xxx.$image_name_3xxx;break;  
                          		} 
                      		if($dest_3xxx != '')
	                            { 
                                   if(move_uploaded_file($source_3xxx,$dest_3xxx)) 
			                           {
			                              //$cid_3xxx      = 0;
			                              //$search_3xxx   = "$image_name_3xxx"; 
		                                  //$val_3xxx      = strtoupper(substr($search_3xxx,0,1));
			                              //if (eregi('[a-zA-Z]',$val_3xxx)){$sort_3xxx=(strtoupper($val_3xxx));}else{$sort_3xxx=0;}  
                                          $query_3xxx   = "insert into images values(null,'$image_name_3xxx','$flwupic','$zoompic_1xxx','$feature','1','$scatid','$lid','$caption_3xxx','$price_3xxx','$slogan','$description_3xxx','$sort','$slidpic','$pic1','$pic2','$pic3','$pic4','$pic5','$sale','$new','$active','$_sess_username',now())";
                                          mysql_query($query_3xxx) or die(mysql_error());
                                          $done_3xxx	="$image_name_3xxx Uploaded Successfully.";
			                            } 						  
	                               else{$err_msg .= "<li class=\"error\">could not be stored.<br>.</li>";}  
                                  }  
                    } 
	            else {$err_msg .= "<li class=\"error\">Too Big.</li>";} 						
        	}
			
			
			if(empty($_FILES["userfile_4xxx"]['name'])){$err_msg .= "<li class=\"error\">Image 4 - Empty.</li>";}
      		else                 
	  			{				
	         		$uploadpath_4xxx  ="../../uploads/images/"; 
             		$source_4xxx      =$_FILES['userfile_4xxx']['tmp_name']; 
             		$dest_4xxx        =''; 
             		if(($source_4xxx !='none')&&($source_4xxx !=''))
			      		{
				      		$imagesize_4xxx = getimagesize($source_4xxx); 
				      		$imagename_4xxx = substr(($_FILES['userfile_4xxx']['name']),0,-4 );  
                      		switch($imagesize_4xxx[2]) 
	                      		{ 
                            		case 0:$err_msg .= "<li class=\"error\">Not a Valid File.</li>";break;
                            		case 1:$image_name_4xxx = uniqid($imagename_4xxx._).'.gif';$dest_4xxx=$uploadpath_4xxx.$image_name_4xxx;break;           
                            		case 2:$image_name_4xxx = uniqid($imagename_4xxx._).'.jpg';$dest_4xxx=$uploadpath_4xxx.$image_name_4xxx;break;              
                            		case 3:$image_name_4xxx = uniqid($imagename_4xxx._).'.png';$dest_4xxx=$uploadpath_4xxx.$image_name_4xxx;break;  
									case 4:$image_name_4xxx = uniqid($imagename_4xxx._).'.bmp';$dest_4xxx=$uploadpath_4xxx.$image_name_4xxx;break;  
                          		} 
                      		if($dest_4xxx != '')
	                            { 
                                   if(move_uploaded_file($source_4xxx,$dest_4xxx)) 
			                           {
			                              //$cid_4xxx      = 0;
			                              //$search_4xxx   = "$image_name_4xxx"; 
		                                  //$val_4xxx      = strtoupper(substr($search_4xxx,0,1));
			                              //if (eregi('[a-zA-Z]',$val_4xxx)){$sort_4xxx=(strtoupper($val_4xxx));}else{$sort_4xxx=0;}  
                                          $query_4xxx   = "insert into images values(null,'$image_name_4xxx','$flwupic','$zoompic_1xxx','$feature','1','$scatid','$lid','$caption_4xxx','$price_4xxx','$slogan','$description_4xxx','$sort','$slidpic','$pic1','$pic2','$pic3','$pic4','$pic5','$sale','$new','$active','$_sess_username',now())";
                                          mysql_query($query_4xxx) or die(mysql_error());
                                          $done_4xxx	="$image_name_4xxx Uploaded Successfully.";
			                            } 						  
	                               else{$err_msg .= "<li class=\"error\">could not be stored.<br>.</li>";}  
                                  }  
                    } 
	            else {$err_msg .= "<li class=\"error\">Too Big.</li>";} 						
        	}
			
			
		if(empty($_FILES["userfile_5xxx"]['name'])){$err_msg .= "<li class=\"error\">Image 5 - Empty.</li>";}
      		else                 
	  			{				
	         		$uploadpath_5xxx  ="../../uploads/images/"; 
             		$source_5xxx      =$_FILES['userfile_5xxx']['tmp_name']; 
             		$dest_5xxx        =''; 
             		if(($source_5xxx !='none')&&($source_5xxx !=''))
			      		{
				      		$imagesize_5xxx = getimagesize($source_5xxx); 
				      		$imagename_5xxx = substr(($_FILES['userfile_5xxx']['name']),0,-4 );  
                      		switch($imagesize_5xxx[2]) 
	                      		{ 
                            		case 0:$err_msg .= "<li class=\"error\">Not a Valid File.</li>";break;
                            		case 1:$image_name_5xxx = uniqid($imagename_5xxx._).'.gif';$dest_5xxx=$uploadpath_5xxx.$image_name_5xxx;break;           
                            		case 2:$image_name_5xxx = uniqid($imagename_5xxx._).'.jpg';$dest_5xxx=$uploadpath_5xxx.$image_name_5xxx;break;              
                            		case 3:$image_name_5xxx = uniqid($imagename_5xxx._).'.png';$dest_5xxx=$uploadpath_5xxx.$image_name_5xxx;break;  
									case 4:$image_name_5xxx = uniqid($imagename_5xxx._).'.bmp';$dest_5xxx=$uploadpath_5xxx.$image_name_5xxx;break;  
                          		} 
                      		if($dest_5xxx != '')
	                            { 
                                   if(move_uploaded_file($source_5xxx,$dest_5xxx)) 
			                           {
			                              //$cid_5xxx      = 0;
			                              //$search_5xxx   = "$image_name_5xxx"; 
		                                  //$val_5xxx      = strtoupper(substr($search_5xxx,0,1));
			                              //if (eregi('[a-zA-Z]',$val_5xxx)){$sort_5xxx=(strtoupper($val_5xxx));}else{$sort_5xxx=0;}  
                                          $query_5xxx   = "insert into images values(null,'$image_name_5xxx','$flwupic','$zoompic_1xxx','$feature','1','$scatid','$lid','$caption_5xxx','$price_5xxx','$slogan','$description_5xxx','$sort','$slidpic','$pic1','$pic2','$pic3','$pic4','$pic5','$sale','$new','$active','$_sess_username',now())";
                                          mysql_query($query_5xxx) or die(mysql_error());
                                          $done_5xxx	="$image_name_5xxx Uploaded Successfully.";
			                            } 						  
	                               else{$err_msg .= "<li class=\"error\">could not be stored.<br>.</li>";}  
                                  }  
                    } 
	            else {$err_msg .= "<li class=\"error\">Too Big.</li>";} 						
        	}
			
			
			
			      		if(empty($_FILES["userfile_6xxx"]['name'])){$err_msg .= "<li class=\"error\">Image 6 - Empty.</li>";}
      		else                 
	  			{				
	         		$uploadpath_6xxx  ="../../uploads/images/"; 
             		$source_6xxx      =$_FILES['userfile_6xxx']['tmp_name']; 
             		$dest_6xxx        =''; 
             		if(($source_6xxx !='none')&&($source_6xxx !=''))
			      		{
				      		$imagesize_6xxx = getimagesize($source_6xxx); 
				      		$imagename_6xxx = substr(($_FILES['userfile_6xxx']['name']),0,-4 );  
                      		switch($imagesize_6xxx[2]) 
	                      		{ 
                            		case 0:$err_msg .= "<li class=\"error\">Not a Valid File.</li>";break;
                            		case 1:$image_name_6xxx = uniqid($imagename_6xxx._).'.gif';$dest_6xxx=$uploadpath_6xxx.$image_name_6xxx;break;           
                            		case 2:$image_name_6xxx = uniqid($imagename_6xxx._).'.jpg';$dest_6xxx=$uploadpath_6xxx.$image_name_6xxx;break;              
                            		case 3:$image_name_6xxx = uniqid($imagename_6xxx._).'.png';$dest_6xxx=$uploadpath_6xxx.$image_name_6xxx;break;  
									case 4:$image_name_6xxx = uniqid($imagename_6xxx._).'.bmp';$dest_6xxx=$uploadpath_6xxx.$image_name_6xxx;break;  
                          		} 
                      		if($dest_6xxx != '')
	                            { 
                                   if(move_uploaded_file($source_6xxx,$dest_6xxx)) 
			                           {
			                              //$cid_6xxx      = 0;
			                              //$search_6xxx   = "$image_name_6xxx"; 
		                                  //$val_6xxx      = strtoupper(substr($search_6xxx,0,1));
			                              //if (eregi('[a-zA-Z]',$val_6xxx)){$sort_6xxx=(strtoupper($val_6xxx));}else{$sort_6xxx=0;}  
                                          $query_6xxx   = "insert into images values(null,'$image_name_6xxx','$flwupic','$zoompic_1xxx','$feature','1','$scatid','$lid','$caption_6xxx','$price_6xxx','$slogan','$description_6xxx','$sort','$slidpic','$pic1','$pic2','$pic3','$pic4','$pic5','$sale','$new','$active','$_sess_username',now())";
                                          mysql_query($query_6xxx) or die(mysql_error());
                                          $done_6xxx	="$image_name_6xxx Uploaded Successfully.";
			                            } 						  
	                               else{$err_msg .= "<li class=\"error\">could not be stored.<br>.</li>";}  
                                  }  
                    } 
	            else {$err_msg .= "<li class=\"error\">Too Big.</li>";} 						
        	}
			
			
			      		if(empty($_FILES["userfile_7xxx"]['name'])){$err_msg .= "<li class=\"error\">Image 7 - Empty.</li>";}
      		else                 
	  			{				
	         		$uploadpath_7xxx  ="../../uploads/images/"; 
             		$source_7xxx      =$_FILES['userfile_7xxx']['tmp_name']; 
             		$dest_7xxx        =''; 
             		if(($source_7xxx !='none')&&($source_7xxx !=''))
			      		{
				      		$imagesize_7xxx = getimagesize($source_7xxx); 
				      		$imagename_7xxx = substr(($_FILES['userfile_7xxx']['name']),0,-4 );  
                      		switch($imagesize_7xxx[2]) 
	                      		{ 
                            		case 0:$err_msg .= "<li class=\"error\">Not a Valid File.</li>";break;
                            		case 1:$image_name_7xxx = uniqid($imagename_7xxx._).'.gif';$dest_7xxx=$uploadpath_7xxx.$image_name_7xxx;break;           
                            		case 2:$image_name_7xxx = uniqid($imagename_7xxx._).'.jpg';$dest_7xxx=$uploadpath_7xxx.$image_name_7xxx;break;              
                            		case 3:$image_name_7xxx = uniqid($imagename_7xxx._).'.png';$dest_7xxx=$uploadpath_7xxx.$image_name_7xxx;break;  
									case 4:$image_name_7xxx = uniqid($imagename_7xxx._).'.bmp';$dest_7xxx=$uploadpath_7xxx.$image_name_7xxx;break;  
                          		} 
                      		if($dest_7xxx != '')
	                            { 
                                   if(move_uploaded_file($source_7xxx,$dest_7xxx)) 
			                           {
			                              //$cid_7xxx      = 0;
			                              //$search_7xxx   = "$image_name_7xxx"; 
		                                  //$val_7xxx      = strtoupper(substr($search_7xxx,0,1));
			                              //if (eregi('[a-zA-Z]',$val_7xxx)){$sort_7xxx=(strtoupper($val_7xxx));}else{$sort_7xxx=0;}  
                                          $query_7xxx   = "insert into images values(null,'$image_name_7xxx','$flwupic','$zoompic_1xxx','$feature','1','$scatid','$lid','$caption_7xxx','$price_7xxx','$slogan','$description_7xxx','$sort','$slidpic','$pic1','$pic2','$pic3','$pic4','$pic5','$sale','$new','$active','$_sess_username',now())";
                                          mysql_query($query_7xxx) or die(mysql_error());
                                          $done_7xxx	="$image_name_7xxx Uploaded Successfully.";
			                            } 						  
	                               else{$err_msg .= "<li class=\"error\">could not be stored.<br>.</li>";}  
                                  }  
                    } 
	            else {$err_msg .= "<li class=\"error\">Too Big.</li>";} 						
        	}
			
			
			 		if(empty($_FILES["userfile_8xxx"]['name'])){$err_msg .= "<li class=\"error\">Image 8 - Empty.</li>";}
      		else                 
	  			{				
	         		$uploadpath_8xxx  ="../../uploads/images/"; 
             		$source_8xxx      =$_FILES['userfile_8xxx']['tmp_name']; 
             		$dest_8xxx        =''; 
             		if(($source_8xxx !='none')&&($source_8xxx !=''))
			      		{
				      		$imagesize_8xxx = getimagesize($source_8xxx); 
				      		$imagename_8xxx = substr(($_FILES['userfile_8xxx']['name']),0,-4 );  
                      		switch($imagesize_8xxx[2]) 
	                      		{ 
                            		case 0:$err_msg .= "<li class=\"error\">Not a Valid File.</li>";break;
                            		case 1:$image_name_8xxx = uniqid($imagename_8xxx._).'.gif';$dest_8xxx=$uploadpath_8xxx.$image_name_8xxx;break;           
                            		case 2:$image_name_8xxx = uniqid($imagename_8xxx._).'.jpg';$dest_8xxx=$uploadpath_8xxx.$image_name_8xxx;break;              
                            		case 3:$image_name_8xxx = uniqid($imagename_8xxx._).'.png';$dest_8xxx=$uploadpath_8xxx.$image_name_8xxx;break;  
									case 4:$image_name_8xxx = uniqid($imagename_8xxx._).'.bmp';$dest_8xxx=$uploadpath_8xxx.$image_name_8xxx;break;  
                          		} 
                      		if($dest_8xxx != '')
	                            { 
                                   if(move_uploaded_file($source_8xxx,$dest_8xxx)) 
			                           {
			                              //$cid_8xxx      = 0;
			                              //$search_8xxx   = "$image_name_8xxx"; 
		                                  //$val_8xxx      = strtoupper(substr($search_8xxx,0,1));
			                              //if (eregi('[a-zA-Z]',$val_8xxx)){$sort_8xxx=(strtoupper($val_8xxx));}else{$sort_8xxx=0;}  
                                          $query_8xxx   = "insert into images values(null,'$image_name_8xxx','$flwupic','$zoompic_1xxx','$feature','$showitem','$scatid','$lid','$caption_8xxx','$price_8xxx','$slogan','$description_8xxx','$sort','$slidpic','$pic1','$pic2','$pic3','$pic4','$pic5','$sale','$new','$active','$_sess_username',now())";
                                          mysql_query($query_8xxx) or die(mysql_error());
                                          $done_8xxx	="$image_name_8xxx Uploaded Successfully.";
			                            } 						  
	                               else{$err_msg .= "<li class=\"error\">could not be stored.<br>.</li>";}  
                                  }  
                    } 
	            else {$err_msg .= "<li class=\"error\">Too Big.</li>";} 						
        	}
			
			
			if(empty($_FILES["userfile_9xxx"]['name'])){$err_msg .= "<li class=\"error\">Image 9 - Empty.</li>";}
      		else                 
	  			{				
	         		$uploadpath_9xxx  ="../../uploads/images/"; 
             		$source_9xxx      =$_FILES['userfile_9xxx']['tmp_name']; 
             		$dest_9xxx        =''; 
             		if(($source_9xxx !='none')&&($source_9xxx !=''))
			      		{
				      		$imagesize_9xxx = getimagesize($source_9xxx); 
				      		$imagename_9xxx = substr(($_FILES['userfile_9xxx']['name']),0,-4 );  
                      		switch($imagesize_9xxx[2]) 
	                      		{ 
                            		case 0:$err_msg .= "<li class=\"error\">Not a Valid File.</li>";break;
                            		case 1:$image_name_9xxx = uniqid($imagename_9xxx._).'.gif';$dest_9xxx=$uploadpath_9xxx.$image_name_9xxx;break;           
                            		case 2:$image_name_9xxx = uniqid($imagename_9xxx._).'.jpg';$dest_9xxx=$uploadpath_9xxx.$image_name_9xxx;break;              
                            		case 3:$image_name_9xxx = uniqid($imagename_9xxx._).'.png';$dest_9xxx=$uploadpath_9xxx.$image_name_9xxx;break;  
									case 4:$image_name_9xxx = uniqid($imagename_9xxx._).'.bmp';$dest_9xxx=$uploadpath_9xxx.$image_name_9xxx;break;  
                          		} 
                      		if($dest_9xxx != '')
	                            { 
                                   if(move_uploaded_file($source_9xxx,$dest_9xxx)) 
			                           {
			                              //$cid_9xxx      = 0;
			                              //$search_9xxx   = "$image_name_9xxx"; 
		                                  //$val_9xxx      = strtoupper(substr($search_9xxx,0,1));
			                              //if (eregi('[a-zA-Z]',$val_9xxx)){$sort_9xxx=(strtoupper($val_9xxx));}else{$sort_9xxx=0;}  
                                          $query_9xxx   = "insert into images values(null,'$image_name_9xxx','$flwupic','$zoompic_9xxx','$feature','1','$scatid','$lid','$caption_9xxx','$price_9xxx','$slogan','$description_9xxx','$sort','$slidpic','$pic1','$pic2','$pic3','$pic4','$pic5','$sale','$new','$active','$_sess_username',now())";
                                          mysql_query($query_9xxx) or die(mysql_error());
                                          $done_9xxx	="$image_name_9xxx Uploaded Successfully.";
			                            } 						  
	                               else{$err_msg .= "<li class=\"error\">could not be stored.<br>.</li>";}  
                                  }  
                    } 
	            else {$err_msg .= "<li class=\"error\">Too Big.</li>";} 						
        	}
			
			
			    		if(empty($_FILES["userfile_10xxx"]['name'])){$err_msg .= "<li class=\"error\">Image 10 - Empty.</li>";}
      		else                 
	  			{				
	         		$uploadpath_10xxx  ="../../uploads/images/"; 
             		$source_10xxx      =$_FILES['userfile_10xxx']['tmp_name']; 
             		$dest_10xxx        =''; 
             		if(($source_10xxx !='none')&&($source_10xxx !=''))
			      		{
				      		$imagesize_10xxx = getimagesize($source_10xxx); 
				      		$imagename_10xxx = substr(($_FILES['userfile_10xxx']['name']),0,-4 );  
                      		switch($imagesize_10xxx[2]) 
	                      		{ 
                            		case 0:$err_msg .= "<li class=\"error\">Not a Valid File.</li>";break;
                            		case 1:$image_name_10xxx = uniqid($imagename_10xxx._).'.gif';$dest_10xxx=$uploadpath_10xxx.$image_name_10xxx;break;           
                            		case 2:$image_name_10xxx = uniqid($imagename_10xxx._).'.jpg';$dest_10xxx=$uploadpath_10xxx.$image_name_10xxx;break;              
                            		case 3:$image_name_10xxx = uniqid($imagename_10xxx._).'.png';$dest_10xxx=$uploadpath_10xxx.$image_name_10xxx;break;  
									case 4:$image_name_10xxx = uniqid($imagename_10xxx._).'.bmp';$dest_10xxx=$uploadpath_10xxx.$image_name_10xxx;break;  
                          		} 
                      		if($dest_10xxx != '')
	                            { 
                                   if(move_uploaded_file($source_10xxx,$dest_10xxx)) 
			                           {
			                              //$cid_10xxx      = 0;
			                              //$search_10xxx   = "$image_name_10xxx"; 
		                                  //$val_10xxx      = strtoupper(substr($search_10xxx,0,1));
			                              //if (eregi('[a-zA-Z]',$val_10xxx)){$sort_10xxx=(strtoupper($val_10xxx));}else{$sort_10xxx=0;}  
                                          $query_10xxx   = "insert into images values(null,'$image_name_10xxx','$flwupic','$zoompic_1xxx','$feature','1','$scatid','$lid','$caption_10xxx','$price_10xxx','$slogan','$description_10xxx','$sort','$slidpic','$pic1','$pic2','$pic3','$pic4','$pic5','$sale','$new','$active','$_sess_username',now())";
                                          mysql_query($query_10xxx) or die(mysql_error());
                                          $done_10xxx	="$image_name_10xxx Uploaded Successfully.";
			                            } 						  
	                               else{$err_msg .= "<li class=\"error\">could not be stored.<br>.</li>";}  
                                  }  
                    } 
	            else {$err_msg .= "<li class=\"error\">Too Big.</li>";} 						
        	}
			
			
			      		if(empty($_FILES["userfile_11xxx"]['name'])){$err_msg .= "<li class=\"error\">Image 11 - Empty.</li>";}
      		else                 
	  			{				
	         		$uploadpath_11xxx  ="../../uploads/images/"; 
             		$source_11xxx      =$_FILES['userfile_11xxx']['tmp_name']; 
             		$dest_11xxx        =''; 
             		if(($source_11xxx !='none')&&($source_11xxx !=''))
			      		{
				      		$imagesize_11xxx = getimagesize($source_11xxx); 
				      		$imagename_11xxx = substr(($_FILES['userfile_11xxx']['name']),0,-4 );  
                      		switch($imagesize_11xxx[2]) 
	                      		{ 
                            		case 0:$err_msg .= "<li class=\"error\">Not a Valid File.</li>";break;
                            		case 1:$image_name_11xxx = uniqid($imagename_11xxx._).'.gif';$dest_11xxx=$uploadpath_11xxx.$image_name_11xxx;break;           
                            		case 2:$image_name_11xxx = uniqid($imagename_11xxx._).'.jpg';$dest_11xxx=$uploadpath_11xxx.$image_name_11xxx;break;              
                            		case 3:$image_name_11xxx = uniqid($imagename_11xxx._).'.png';$dest_11xxx=$uploadpath_11xxx.$image_name_11xxx;break;  
									case 4:$image_name_11xxx = uniqid($imagename_11xxx._).'.bmp';$dest_11xxx=$uploadpath_11xxx.$image_name_11xxx;break;  
                          		} 
                      		if($dest_11xxx != '')
	                            { 
                                   if(move_uploaded_file($source_11xxx,$dest_11xxx)) 
			                           {
			                              //$cid_11xxx      = 0;
			                              //$search_11xxx   = "$image_name_11xxx"; 
		                                  //$val_11xxx      = strtoupper(substr($search_11xxx,0,1));
			                              //if (eregi('[a-zA-Z]',$val_11xxx)){$sort_11xxx=(strtoupper($val_11xxx));}else{$sort_11xxx=0;}  
                                          $query_11xxx   = "insert into images values(null,'$image_name_11xxx','$flwupic','$zoompic_11xxx','$feature','1','$scatid','$lid','$caption_11xxx','$price_11xxx','$slogan','$description_11xxx','$sort','$slidpic','$pic1','$pic2','$pic3','$pic4','$pic5','$sale','$new','$active','$_sess_username',now())";
                                          mysql_query($query_11xxx) or die(mysql_error());
                                          $done_11xxx	="$image_name_11xxx Uploaded Successfully.";
			                            } 						  
	                               else{$err_msg .= "<li class=\"error\">could not be stored.<br>.</li>";}  
                                  }  
                    } 
	            else {$err_msg .= "<li class=\"error\">Too Big.</li>";} 						
        	}
			
			      		if(empty($_FILES["userfile_12xxx"]['name'])){$err_msg .= "<li class=\"error\">Image 12 - Empty.</li>";}
      		else                 
	  			{				
	         		$uploadpath_12xxx  ="../../uploads/images/"; 
             		$source_12xxx      =$_FILES['userfile_12xxx']['tmp_name']; 
             		$dest_12xxx        =''; 
             		if(($source_12xxx !='none')&&($source_12xxx !=''))
			      		{
				      		$imagesize_12xxx = getimagesize($source_12xxx); 
				      		$imagename_12xxx = substr(($_FILES['userfile_12xxx']['name']),0,-4 );  
                      		switch($imagesize_12xxx[2]) 
	                      		{ 
                            		case 0:$err_msg .= "<li class=\"error\">Not a Valid File.</li>";break;
                            		case 1:$image_name_12xxx = uniqid($imagename_12xxx._).'.gif';$dest_12xxx=$uploadpath_12xxx.$image_name_12xxx;break;           
                            		case 2:$image_name_12xxx = uniqid($imagename_12xxx._).'.jpg';$dest_12xxx=$uploadpath_12xxx.$image_name_12xxx;break;              
                            		case 3:$image_name_12xxx = uniqid($imagename_12xxx._).'.png';$dest_12xxx=$uploadpath_12xxx.$image_name_12xxx;break;  
									case 4:$image_name_12xxx = uniqid($imagename_12xxx._).'.bmp';$dest_12xxx=$uploadpath_12xxx.$image_name_12xxx;break;  
                          		} 
                      		if($dest_12xxx != '')
	                            { 
                                   if(move_uploaded_file($source_12xxx,$dest_12xxx)) 
			                           {
			                              //$cid_12xxx      = 0;
			                              //$search_12xxx   = "$image_name_12xxx"; 
		                                  //$val_12xxx      = strtoupper(substr($search_12xxx,0,1));
			                              //if (eregi('[a-zA-Z]',$val_12xxx)){$sort_12xxx=(strtoupper($val_12xxx));}else{$sort_12xxx=0;}  
                                          $query_12xxx   = "insert into images values(null,'$image_name_12xxx','$flwupic','$zoompic_12xxx','$feature','1','$scatid','$lid','$caption_12xxx','$price_12xxx','$slogan','$description_12xxx','$sort','$slidpic','$pic1','$pic2','$pic3','$pic4','$pic5','$sale','$new','$active','$_sess_username',now())";
                                          mysql_query($query_12xxx) or die(mysql_error());
                                          $done_12xxx	="$image_name_12xxx Uploaded Successfully.";
			                            } 						  
	                               else{$err_msg .= "<li class=\"error\">could not be stored.<br>.</li>";}  
                                  }  
                    } 
	            else {$err_msg .= "<li class=\"error\">Too Big.</li>";} 						
        	}
			
			
			if(empty($_FILES["userfile_13xxx"]['name'])){$err_msg .= "<li class=\"error\">Image 13 - Empty.</li>";}
      		else                 
	  			{				
	         		$uploadpath_13xxx  ="../../uploads/images/"; 
             		$source_13xxx      =$_FILES['userfile_13xxx']['tmp_name']; 
             		$dest_13xxx        =''; 
             		if(($source_13xxx !='none')&&($source_13xxx !=''))
			      		{
				      		$imagesize_13xxx = getimagesize($source_13xxx); 
				      		$imagename_13xxx = substr(($_FILES['userfile_13xxx']['name']),0,-4 );  
                      		switch($imagesize_13xxx[2]) 
	                      		{ 
                            		case 0:$err_msg .= "<li class=\"error\">Not a Valid File.</li>";break;
                            		case 1:$image_name_13xxx = uniqid($imagename_13xxx._).'.gif';$dest_13xxx=$uploadpath_13xxx.$image_name_13xxx;break;           
                            		case 2:$image_name_13xxx = uniqid($imagename_13xxx._).'.jpg';$dest_13xxx=$uploadpath_13xxx.$image_name_13xxx;break;              
                            		case 3:$image_name_13xxx = uniqid($imagename_13xxx._).'.png';$dest_13xxx=$uploadpath_13xxx.$image_name_13xxx;break;  
									case 4:$image_name_13xxx = uniqid($imagename_13xxx._).'.bmp';$dest_13xxx=$uploadpath_13xxx.$image_name_13xxx;break;  
                          		} 
                      		if($dest_13xxx != '')
	                            { 
                                   if(move_uploaded_file($source_13xxx,$dest_13xxx)) 
			                           {
										   
			                              //$cid_13xxx      = 0;
			                              //$search_13xxx   = "$image_name_13xxx"; 
		                                  //$val_13xxx      = strtoupper(substr($search_13xxx,0,1));
										  
			                              //if (eregi('[a-zA-Z]',$val_13xxx)){$sort_13xxx=(strtoupper($val_13xxx));}else{$sort_13xxx=0;}  
                                          $query_13xxx   = "insert into images values(null,'$image_name_13xxx','$flwupic','$zoompic_13xxx','$feature','1','$scatid','$lid','$caption_13xxx','$price_13xxx','$slogan','$description_13xxx','$sort','$slidpic','$pic1','$pic2','$pic3','$pic4','$pic5','$sale','$new','$active','$_sess_username',now())";
                                          mysql_query($query_13xxx) or die(mysql_error());
                                          $done_13xxx	="$image_name_13xxx Uploaded Successfully.";
			                            } 						  
	                               else{$err_msg .= "<li class=\"error\">could not be stored.<br>.</li>";}  
                                  }  
                    } 
	            else {$err_msg .= "<li class=\"error\">Too Big.</li>";} 						
        	}
			
			
					if(empty($_FILES["userfile_14xxx"]['name'])){$err_msg .= "<li class=\"error\">Image 14 - Empty.</li>";}
      		else                 
	  			{				
	         		$uploadpath_14xxx  ="../../uploads/images/"; 
             		$source_14xxx      =$_FILES['userfile_14xxx']['tmp_name']; 
             		$dest_14xxx        =''; 
             		if(($source_14xxx !='none')&&($source_14xxx !=''))
			      		{
				      		$imagesize_14xxx = getimagesize($source_14xxx); 
				      		$imagename_14xxx = substr(($_FILES['userfile_14xxx']['name']),0,-4 );  
                      		switch($imagesize_14xxx[2]) 
	                      		{ 
                            		case 0:$err_msg .= "<li class=\"error\">Not a Valid File.</li>";break;
                            		case 1:$image_name_14xxx = uniqid($imagename_14xxx._).'.gif';$dest_14xxx=$uploadpath_14xxx.$image_name_14xxx;break;           
                            		case 2:$image_name_14xxx = uniqid($imagename_14xxx._).'.jpg';$dest_14xxx=$uploadpath_14xxx.$image_name_14xxx;break;              
                            		case 3:$image_name_14xxx = uniqid($imagename_14xxx._).'.png';$dest_14xxx=$uploadpath_14xxx.$image_name_14xxx;break;  
									case 4:$image_name_14xxx = uniqid($imagename_14xxx._).'.bmp';$dest_14xxx=$uploadpath_14xxx.$image_name_14xxx;break;  
                          		} 
                      		if($dest_14xxx != '')
	                            { 
                                   if(move_uploaded_file($source_14xxx,$dest_14xxx)) 
			                           {
										   
			                              //$cid_14xxx      = 0;
			                              //$search_14xxx   = "$image_name_14xxx"; 
		                                  //$val_14xxx      = strtoupper(substr($search_14xxx,0,1));
										  
			                              //if (eregi('[a-zA-Z]',$val_14xxx)){$sort_14xxx=(strtoupper($val_14xxx));}else{$sort_14xxx=0;}  
                                          $query_14xxx   = "insert into images values(null,'$image_name_14xxx','$flwupic','$zoompic_14xxx','$feature','1',,'$scatid','$lid','$caption_14xxx','$price_14xxx','$slogan','$description_14xxx','$sort','$slidpic','$pic1','$pic2','$pic3','$pic4','$pic5','$sale','$new','$active','$_sess_username',now())";
                                          mysql_query($query_14xxx) or die(mysql_error());
                                          $done_14xxx	="$image_name_14xxx Uploaded Successfully.";
			                            } 						  
	                               else{$err_msg .= "<li class=\"error\">could not be stored.<br>.</li>";}  
                                  }  
                    } 
	            else {$err_msg .= "<li class=\"error\">Too Big.</li>";} 						
        	}
			
			
			if(empty($_FILES["userfile_15xxx"]['name'])){$err_msg .= "<li class=\"error\">Image 15 - Empty.</li>";}
      		else                 
	  			{				
	         		$uploadpath_15xxx  ="../../uploads/images/"; 
             		$source_15xxx      =$_FILES['userfile_15xxx']['tmp_name']; 
             		$dest_15xxx        =''; 
             		if(($source_15xxx !='none')&&($source_15xxx !=''))
			      		{
				      		$imagesize_15xxx = getimagesize($source_15xxx); 
				      		$imagename_15xxx = substr(($_FILES['userfile_15xxx']['name']),0,-4 );  
                      		switch($imagesize_15xxx[2]) 
	                      		{ 
                            		case 0:$err_msg .= "<li class=\"error\">Not a Valid File.</li>";break;
                            		case 1:$image_name_15xxx = uniqid($imagename_15xxx._).'.gif';$dest_15xxx=$uploadpath_15xxx.$image_name_15xxx;break;           
                            		case 2:$image_name_15xxx = uniqid($imagename_15xxx._).'.jpg';$dest_15xxx=$uploadpath_15xxx.$image_name_15xxx;break;              
                            		case 3:$image_name_15xxx = uniqid($imagename_15xxx._).'.png';$dest_15xxx=$uploadpath_15xxx.$image_name_15xxx;break;  
									case 4:$image_name_15xxx = uniqid($imagename_15xxx._).'.bmp';$dest_15xxx=$uploadpath_15xxx.$image_name_15xxx;break;  
                          		} 
                      		if($dest_15xxx != '')
	                            { 
                                   if(move_uploaded_file($source_15xxx,$dest_15xxx)) 
			                           {
										   
			                              //$cid_15xxx      = 0;
			                              //$search_15xxx   = "$image_name_15xxx"; 
		                                  //$val_15xxx      = strtoupper(substr($search_15xxx,0,1));
			                              //if (eregi('[a-zA-Z]',$val_15xxx)){$sort_15xxx=(strtoupper($val_15xxx));}else{$sort_15xxx=0;}
										    
                                          $query_15xxx   = "insert into images values(null,'$image_name_15xxx','$flwupic','$zoompic_15xxx','$feature','1',,'$scatid','$lid','$caption_15xxx','$price_15xxx','$slogan','$description_15xxx','$sort','$slidpic','$pic1','$pic2','$pic3','$pic4','$pic5','$sale','$new','$active','$_sess_username',now())";
                                          mysql_query($query_15xxx) or die(mysql_error());
                                          $done_15xxx	="$image_name_15xxx Uploaded Successfully.";
			                            } 						  
	                               else{$err_msg .= "<li class=\"error\">could not be stored.<br>.</li>";}  
                                  }  
                    } 
	            else {$err_msg .= "<li class=\"error\">Too Big.</li>";} 						
        	}			
			echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=addlistinggallaryimage.php?spid=$scatid&lpid=$lid\">";
		}
?>


<html>
	<link href="../css/style.css" rel="stylesheet" type="text/css">
	<head><title><?php echo $clientname;?> | Add Image Gallery</title></head>
	<body>
	
	<?php if(!empty($row['caption'])){?><div><?php echo $row['caption']?></div><?php }?>
	
		<table width="500px">
			<tr>
				<td>
         			<div>	
        			<div class="error" style="padding-top:0px"><?php echo $err_msg?></div>												  
             			<form enctype="multipart/form-data" action="<?php echo $PHP_SELF ?>?spid=<?php echo $scatid?>&lpid=<?php echo $lid?>" method="post">
							<table>
								<tr>
									<td><strong>Select Image</strong></td>
									<td><strong>Image Caption</strong></td>
                                    <td><strong>Price</strong></td>
									<td><strong>Description</strong></td>
								</tr>
								<tr>
									<td><input name="userfile_1xxx" 	  type="file" size="20" class="form"></td>
									<td><input name="caption_1xxx"     type="text" size="20" class="form"></td>
                                    <td><input name="price_1xxx"     type="text" size="10" class="form"></td>
									<td><textarea name="description_1xxx" cols="40" rows="1" class="form"></textarea></td>
									<td><?php echo $done_1xxx?></td>
								</tr>
								<tr>
									<td><input name="userfile_2xxx" 	  type="file" size="20" class="form"></td>
									<td><input name="caption_2xxx"     type="text" size="20" class="form"></td>
                                    <td><input name="price_2xxx"     type="text" size="10" class="form"></td>
									<td><textarea name="description_2xxx" cols="40" rows="1" class="form"></textarea></td>
									<td><?php echo $done_2xxx?></td>
								</tr>
								<tr>
									<td><input name="userfile_3xxx" 	  type="file" size="20" class="form"></td>
									<td><input name="caption_3xxx"     type="text" size="20" class="form"></td>
                                    <td><input name="price_3xxx"     type="text" size="10" class="form"></td>
									<td><textarea name="description_3xxx" cols="40" rows="1" class="form"></textarea></td>
									<td><?php echo $done_3xxx?></td>
								</tr>
								<tr>
									<td><input name="userfile_4xxx" 	  type="file" size="20" class="form"></td>
									<td><input name="caption_4xxx"     type="text" size="20" class="form"></td>
                                    <td><input name="price_4xxx"     type="text" size="10" class="form"></td>
									<td><textarea name="description_4xxx" cols="40" rows="1" class="form"></textarea></td>
									<td><?php echo $done_4xxx?></td>
								</tr>
								<tr>
									<td><input name="userfile_5xxx" 	  type="file" size="20" class="form"></td>
									<td><input name="caption_5xxx"     type="text" size="20" class="form"></td>
                                    <td><input name="price_5xxx"     type="text" size="10" class="form"></td>
									<td><textarea name="description_5xxx" cols="40" rows="1" class="form"></textarea></td>
									<td><?php echo $done_5xxx?></td>
								</tr>
								<tr>
									<td><input name="userfile_6xxx" 	  type="file" size="20" class="form"></td>
									<td><input name="caption_6xxx"     type="text" size="20" class="form"></td>
                                    <td><input name="price_6xxx"     type="text" size="10" class="form"></td>
									<td><textarea name="description_6xxx" cols="40" rows="1" class="form"></textarea></td>
									<td><?php echo $done_6xxx?></td>
								</tr>
								<tr>
									<td><input name="userfile_7xxx" 	  type="file" size="20" class="form"></td>
									<td><input name="caption_7xxx"     type="text" size="20" class="form"></td>
                                    <td><input name="price_7xxx"     type="text" size="10" class="form"></td>
									<td><textarea name="description_7xxx" cols="40" rows="1" class="form"></textarea></td>
									<td><?php echo $done_7xxx?></td>
								</tr>
								<tr>
									<td><input name="userfile_8xxx" 	  type="file" size="20" class="form"></td>
									<td><input name="caption_8xxx"     type="text" size="20" class="form"></td>
                                    <td><input name="price_8xxx"     type="text" size="10" class="form"></td>
									<td><textarea name="description_8xxx" cols="40" rows="1" class="form"></textarea></td>
									<td><?php echo $done_8xxx?></td>
								</tr>
								<tr>
									<td><input name="userfile_9xxx" 	  type="file" size="20" class="form"></td>
									<td><input name="caption_9xxx"     type="text" size="20" class="form"></td>
                                    <td><input name="price_9xxx"     type="text" size="10" class="form"></td>
									<td><textarea name="description_9xxx" cols="40" rows="1" class="form"></textarea></td>
									<td><?php echo $done_9xxx?></td>
								</tr>
								<tr>
									<td><input name="userfile_10xxx" 	  type="file" size="20" class="form"></td>
									<td><input name="caption_10xxx"     type="text" size="20" class="form"></td>
                                    <td><input name="price_10xxx"     type="text" size="10" class="form"></td>
									<td><textarea name="description_10xxx" cols="40" rows="1" class="form"></textarea></td>
									<td><?php echo $done_10xxx?></td>
								</tr>
								<tr>
									<td><input name="userfile_11xxx" 	  type="file" size="20" class="form"></td>
									<td><input name="caption_11xxx"     type="text" size="20" class="form"></td>
                                    <td><input name="price_11xxx"     type="text" size="10" class="form"></td>
									<td><textarea name="description_11xxx" cols="40" rows="1" class="form"></textarea></td>
									<td><?php echo $done_11xxx?></td>
								</tr>
								<tr>
									<td><input name="userfile_12xxx" 	  type="file" size="10" class="form"></td>
									<td><input name="caption_12xxx"     type="text" size="20" class="form"></td>
                                    <td><input name="price_12xxx"     type="text" size="10" class="form"></td>
									<td><textarea name="description_12xxx" cols="40" rows="1" class="form"></textarea></td>
									<td><?php echo $done_12xxx?></td>
								</tr>
								<tr>
									<td><input name="userfile_13xxx" 	  type="file" size="20" class="form"></td>
									<td><input name="caption_13xxx"     type="text" size="20" class="form"></td>
                                    <td><input name="price_13xxx"     type="text" size="10" class="form"></td>
									<td><textarea name="description_13xxx" cols="40" rows="1" class="form"></textarea></td>
									<td><?php echo $done_13xxx?></td>
								</tr>
								<tr>
									<td><input name="userfile_14xxx" 	  type="file" size="20" class="form"></td>
									<td><input name="caption_14xxx"     type="text" size="20" class="form"></td>
                                    <td><input name="price_14xxx"     type="text" size="10" class="form"></td>
									<td><textarea name="description_14xxx" cols="40" rows="1" class="form"></textarea></td>
									<td><?php echo $done_14xxx?></td>
								</tr>
								<tr>
									<td><input name="userfile_15xxx" 	    type="file" size="20" class="form"></td>
									<td><input    name="caption_15xxx"        type="text" size="20" class="form"></td>
                                    <td><input name="price_15xxx"     type="text" size="10" class="form"></td>
									<td><textarea name="description_15xxx" cols="40" rows="1" class="form"></textarea></td>
									<td><?php echo $done_15xxx?></td>
								</tr>								
							</table>
						   
			 				<table bgcolor="#ffffff">		 				  
				  				<tr>
									<td></td>
                       				<td><input type="submit" name="submit" value="Upload Image" class="form"></td>
                  				</tr>
           					</table>
							
           				</form>					
         			</div>
				</td>
			</tr>
        </table>
        
        
	</body>						      
</html>


<?php
    require('../../lib_files/private.inc.php');
	require('../../lib_files/settings.inc.php');
	require('settings/main_settings.inc.php');
	require('settings/addlisting_editlisting_settings.inc.php');
	
	$file_name_part="addlisting";
	$the_table     =$system_listing_table;
	
	$mpid			=$_REQUEST['mpid'];
	$spid			=$_REQUEST['spid'];
	
	$qimg = "select name,caption,description from images";
	$qdoc = "select name,caption,description from doc";
    $qaud = "select name,caption,description from audio";
    $qvid = "select name,caption,description from video";
    $qzip = "select name,caption,description from zip";
	$qlan = "select id,caption               from language";
	
    $qcat = "select id,caption               from $cat_table";
	$qsubcat = "select id,caption            from $system_table where category =$mpid ";
    
	
   	if(isset($_REQUEST["send"])&&(($_REQUEST["send"])=='OK'))
    	{  		
		    include('settings/no_reg_globe.inc.php'); 
			include('settings/add_edit_uploads.inc.php');
			
			
			$caption		=addslashes($caption);
					
					$category		=$mpid;
					$subcategory	=$spid;
					
					
					
					$intro_head	=addslashes($intro_head);
					$intro		=addslashes($intro);
					$intro_img	=addslashes($intro_img);
					$capt1		=addslashes($capt1);
					
					$head1	=addslashes($head1);
					$text1	=addslashes($text1);
					$img1	=addslashes($image_name1);
					$capt1	=addslashes($capt1);
					$img1link	=addslashes($img1link);
					
					$head2	=addslashes($head2);
					$text2	=addslashes($text2);
					$img2	=addslashes($image_name2);
					$capt2	=addslashes($capt2);
					$img2link	=addslashes($img2link);
					
					$head3	=addslashes($head3);
					$text3	=addslashes($text3);
					$img3	=addslashes($image_name3);
					$capt3	=addslashes($capt3);
					$img3link	=addslashes($img3link);
					
					$head4	=addslashes($head4);
					$text4	=addslashes($text4);
					$img4	=addslashes($image_name4);
					$capt4	=addslashes($capt4);
					$img4link	=addslashes($img4link);
					
					$head5	=addslashes($head5);
					$text5	=addslashes($text5);
					$img5	=addslashes($image_name5);
					$capt5	=addslashes($capt5);
					$img5link	=addslashes($img5link);
			
			
	        
			if(!is_filled($caption))
						{$err_msg .= "<li class=\"error\">Listing Title Required.</li>";}
			else		{$caption=trim($caption);}	
	 		
	  		if ($err_msg=="")
	   			{  			    
					//$value    = substr($caption,0,1);if(eregi('[a-zA-Z]',$value)){$sort=(strtoupper($value));}else{$sort=0;} 
					
					$category 		= $_REQUEST['mpid']; 
					
					$subcategory 	= $_REQUEST['spid']; 
					
					$qins     = "insert into $the_table values(null,'$date','$sort','$showitem','$language','$image_name_illus1','$image_name_illus2','$image_name_illus3','$image_name_illus4','$image_name_illus5','$image_name_add1','$image_name_add2','$image_name_add3','$image_name_add4','$image_name_add5','$addlink1','$addlink2','$addlink3','$addlink4','$addlink5','$doc_name_doc','$aud_name_aud','$vid_name_vid','$zid_name_zid','$caption','$image_name_cap_img','$category','$subcategory','$caption1','$caption2','$caption3','$caption4','$caption5','$caption6','$caption7','$caption8','$caption9','$caption10','$lp','$intro_head','$intro','$image_name','$imglink','$pos','$capt','$head1','$text1','$image_name1','$img1link','$pos1','$capt1','$head2','$text2','$image_name2','$img2link','$pos2','$capt2','$head3','$text3','$image_name3','$img3link','$pos3','$capt3','$head4','$text4','$image_name4','$img4link','$pos4','$capt4','$head5','$text5','$image_name5','$img5link','$pos5','$capt5','$_sess_username',now(),now())"; 
					mysql_query($qins) or die(mysql_error());
		
					$q        = "select * from $the_table order by id desc limit 0,1";
   	    			$rst      = mysql_query($q) or die(mysql_error());
					if(mysql_num_rows($rst) > 0){$row = mysql_fetch_array($rst) or die(mysql_error());}
		
					$last_record_id=$row['id'];
					
					$done_doing=1;
		
					echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=index.php?mpid=$mpid&spid=$spid\">";
	  		 	}
			}
?>

<!DOCTYPE html PUBLIC "-//W3C//Dtd html 4.0 transitional//EN">
<html>

<link href="../css/style.css" rel="stylesheet" type="text/css">
<script src="../../lib_files/js_fns/gen_fns.js" type=text/javascript></script>
<head>
	<title><?php echo $clientname;?> | <?php echo $manager;?> | Add Page Listing Content</title>
</head>
<body onLoad="document.forms[0].elements[0].focus()">
	<?php cmshead($privite_site_width,$privite_nav_width,$_sess_username,$_user_rights)?>
        <?php if ($done_doing!=1){?>
        	<div style=" padding:10px">
            	<?php include('content_templates/addlisting1.inc.php')?>
            </div>
        <?php }?>				  		   
    <?php cmsfooter()?>
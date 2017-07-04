<?php
    require('../../lib_files/private.inc.php');
	require('../../lib_files/settings.inc.php');
	require('settings/main_settings.inc.php');
	require('settings/addcat_editcat_settings.inc.php');
	
 
    $err_msg 	= "";
   	$qimg 		= "select name,caption,description from images";
	$qdoc 		= "select name,caption,description from doc";
    $qaud 		= "select name,caption,description from audio";
    $qvid 		= "select name,caption,description from video";
    $qzip 		= "select name,caption,description from zip";
    $qcat 		= "select id,caption               from $cat_table";
    $qlan 		= "select id,caption               from language";
	
    if( isset($_REQUEST["send"] ) && ( ($_REQUEST["send"]) =='OK') )
     {
	   if(empty($_REQUEST["caption"])){$err_msg = "Please fill in all required fields !!!";}
	   
	   else
	   {
	    	$search = trim($_REQUEST["caption"]);  
			$valll  = substr($search, 0 , 1 );
			
			//if (eregi('[a-zA-Z]',$valll))  {$sort=(strtoupper($valll));}       
	    	//else                           {$sort=0;} 
			
			include('settings/no_reg_globe.inc.php');
			
					$caption			=addslashes($caption);
					$caption_img		=addslashes($caption_img);
					$caption1			=addslashes($caption1);
					$caption2			=addslashes($caption2);
					$caption3			=addslashes($caption3);
					$caption4			=addslashes($caption4);
					$caption5			=addslashes($caption5);
					$caption6			=addslashes($caption6);
					$caption7			=addslashes($caption7);
					$caption8			=addslashes($caption8);
					$caption9			=addslashes($caption9);
					$caption10			=addslashes($caption10);
					
					$head1				=addslashes($head1);
					$text1				=addslashes($text1);
					$img1				=addslashes($image_name1);
					$capt1				=addslashes($capt1);
					$img1link			=addslashes($img1link);
					
					$head2				=addslashes($head2);
					$text2				=addslashes($text2);
					$img2				=addslashes($image_name2);
					$capt2				=addslashes($capt2);
					$img2link			=addslashes($img2link);
					
					$head3				=addslashes($head3);
					$text3				=addslashes($text3);
					$img3				=addslashes($image_name3);
					$capt3				=addslashes($capt3);
					$img3link			=addslashes($img3link);
					
					$head4				=addslashes($head4);
					$text4				=addslashes($text4);
					$img4				=addslashes($image_name4);
					$capt4				=addslashes($capt4);
					$img4link			=addslashes($img4link);
					
					$head5				=addslashes($head5);
					$text5				=addslashes($text5);
					$img5				=addslashes($image_name5);
					$capt5				=addslashes($capt5);
					$img5link			=addslashes($img5link);
					
					$illus1				=addslashes($image_name_illus1);
					$illus2				=addslashes($image_name_illus2);
					$illus3				=addslashes($image_name_illus3);
					$illus4				=addslashes($image_name_illus4);
					$illus5				=addslashes($image_name_illus5);
					
					$add1				=addslashes($image_name_add1);
					$add2				=addslashes($image_name_add2);
					$add3				=addslashes($image_name_add3);
					$add4				=addslashes($image_name_add4);
					$add5				=addslashes($image_name_add5);
		 
			$qins    = "insert into $cat_table values(null,'$date','$sort','$showitem','$language','$illus1','$illus2','$illus3','$illus4','$illus5','$add1','$add2','$add3','$add4','$add5','$addlink1','$addlink2','$addlink3','$addlink4','$addlink5','$image_name_doc','$image_name_aud','$image_name_vid','$image_name_zid','$caption','$image_name_cap_img','$caption1','$caption2','$caption3','$caption4','$caption5','$caption6','$caption7','$caption8','$caption9','$caption10','$lp','$intro_head','$intro','$image_name','$imglink','$pos','$capt','$head1','$text1','$image_name1','$img1link','$pos1','$capt1','$head2','$text2','$image_name2','$img2link','$pos2','$capt2','$head3','$text3','$image_name3','$img3link','$pos3','$capt3','$head4','$text4','$image_name4','$img4link','$pos4','$capt4','$head5','$text5','$image_name5','$img5link','$pos5','$capt5','$_sess_username',now(),now())"; 
			mysqli_query($conn,$qins) or die(mysqli_error($conn));
			
			$lastid = mysqli_insert_id($conn);
			
			$done_doing=1;
				
			echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=index.php?id=$lastid\">";
	    }
     }
?>



<?php if( !(isset($_REQUEST["send"]) && !($_REQUEST["send"]) =='OK') ){?>
    <!DOCTYPE html PUBLIC "-//W3C//Dtd html 4.0 transitional//EN">
    <html>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <head><title><?php echo $clientname;?> | Add</title></head>
    <body>
    <?php cmshead($privite_site_width,$privite_nav_width,$_sess_username,$_user_rights)?>
    	<div style="padding-left:10px; padding-top:10px">
        	<?php if ($done_doing!=1){?>
    			<?php include('content_templates/addcat1.inc.php')?>
            <?php }?>
        </div>
    <?php cmsfooter()?>
<?php }?>



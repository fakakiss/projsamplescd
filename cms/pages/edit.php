<?php
    require('../../lib_files/private.inc.php');
	require('../../lib_files/settings.inc.php');
	require('settings/main_settings.inc.php');
	require('settings/add_edit_settings.inc.php');
	
	$the_table=$system_table;
	
	$mysql_id		=$_REQUEST['spid'];
	
	$mpid 			= $_REQUEST['mpid'];
	
	if (!empty($mpid)){$category= $_REQUEST['mpid'];}
	
	$spid 			= $_REQUEST['spid'];
	
	$the_page   	= "edit.php";

   	include('settings/post_vars.inc.php');
	
   	$q        = "select * from $system_table where id='$spid'";
   	$rst      = mysql_query($q) or die(mysql_error());if(mysql_num_rows($rst)>0){$row=mysql_fetch_array($rst) or die(mysql_error());}
	
	$qimg     = "select name,caption,description from images";
	$qdoc     = "select name,caption,description from doc";
    $qaud     = "select name,caption,description from audio";
    $qvid     = "select name,caption,description from video";
    $qzip     = "select name,caption,description from zip";
    $qcat     = "select * from $cat_table order by lp asc";    
    $qlan     = "select * from language";
       
    if(isset($_REQUEST["send"])&&(($_REQUEST["send"])=='OK'))
   		{
			
	        include('settings/no_reg_globe.inc.php'); 
			
			if(!is_filled($caption)){$err_msg .= "<li class=\"error\">Sub Page Title Required.</li>";}else{$caption=trim($caption);}	
	 		
			include('settings/add_edit_uploads.inc.php');
			
			if($err_msg=="")
				{	      
					//$valll= substr($caption, 0 , 1 );
					//if(eregi('[a-zA-Z]',$valll)){$sort=(strtoupper($valll));}else{$sort=0;}
					
					$caption	=addslashes($caption);
					
					
					$caption1	=addslashes($caption1);
					$caption2	=addslashes($caption2);
					$caption3	=addslashes($caption3);
					$caption4	=addslashes($caption4);
					$caption5	=addslashes($caption5);
					$caption6	=addslashes($caption6);
					$caption7	=addslashes($caption7);
					$caption8	=addslashes($caption8);
					$caption9	=addslashes($caption9);
					$caption10	=addslashes($caption10);
					
					
					$head1	=addslashes($head1);
					$text1	=addslashes($text1);
					$img1	=addslashes($image_name1);
					$capt1	=addslashes($capt1);
					
					$head2	=addslashes($head2);
					$text2	=addslashes($text2);
					$img2	=addslashes($image_name2);
					$capt2	=addslashes($capt2);
					
					$head3	=addslashes($head3);
					$text3	=addslashes($text3);
					$img3	=addslashes($image_name3);
					$capt3	=addslashes($capt3);
					
					$head4	=addslashes($head4);
					$text4	=addslashes($text4);
					$img4	=addslashes($image_name4);
					$capt4	=addslashes($capt4);
					
					$head5	=addslashes($head5);
					$text5	=addslashes($text5);
					$img5	=addslashes($image_name5);
					$capt5	=addslashes($capt5);
					
					$img1link	=addslashes($img1link);
					$img2link	=addslashes($img2link);
					$img3link	=addslashes($img3link);
					$img4link	=addslashes($img4link);
					$img5link	=addslashes($img5link);
					
					
					$addlink1	=addslashes($addlink1);
					$addlink2	=addslashes($addlink2);
					$addlink3	=addslashes($addlink3);
					$addlink4	=addslashes($addlink4);
					$addlink5	=addslashes($addlink5);
					
					
					 
					$qins = "update $the_table SET date='$date',language='$language',sort='$sort',showitem='$showitem',caption='$caption',caption_img='$image_name_cap_img',category='$category',caption1='$caption1',caption2='$caption2',caption3='$caption3',caption4='$caption4',caption5='$caption5',caption6='$caption6',caption7='$caption7',caption8='$caption8',caption9='$caption9',caption10='$caption10',lp='$lp',intro='$intro',pos='$pos',pos1='$pos1',pos2='$pos2',pos3='$pos3',pos4='$pos4',img='$image_name',capt='$capt',";
					$qins = $qins . "illus1='$image_name_illus1',illus2='$image_name_illus2',illus3='$image_name_illus3',illus4='$image_name_illus4',illus5='$image_name_illus5', ";		
					$qins = $qins . "add1='$image_name_add1',add2='$image_name_add2',add3='$image_name_add3',add4='$image_name_add4',add5='$image_name_add5',";
					$qins = $qins . "addlink1='$addlink1',addlink2='$addlink2', addlink3='$addlink3',addlink4='$addlink4',addlink5='$addlink5',intro_head='$intro_head', "; 
					$qins = $qins . "imglink='$imagelink',img1link='$img1link',img2link='$img2link',img3link='$img3link',img4link='$img4link',img5link='$img5link',"; 
					$qins = $qins . "doc='$doc_name_doc',audio='$aud_name_doc',video='$vid_name_doc',zip='$zip_name_doc',"; 
					$qins = $qins . "head1='$head1', text1='$text1', img1='$image_name1', capt1='$capt1', "; 
					$qins = $qins . "head2='$head2', text2='$text2', img2='$image_name2', capt2='$capt2', ";
					$qins = $qins . "head3='$head3', text3='$text3', img3='$image_name3', capt3='$capt3', ";
					$qins = $qins . "head4='$head4', text4='$text4', img4='$image_name4', capt4='$capt4', ";
					$qins = $qins . "head5='$head5', text5='$text5', img5='$image_name5', capt5='$capt5', ";
					$qins = $qins . "updated=now() where id='$spid'";
					mysql_query($qins) or die(mysql_error());
					
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
        <title><?php echo $clientname;?> | <?php echo $manager;?> | Edit | <?php echo stripslashes($row['caption'])?></title>
    </head>
    
    <body>
    <?php cmshead($privite_site_width,$privite_nav_width,$_sess_username,$_user_rights)?>
    	<div style="padding-left:10px; padding-top:10px">
        
        	<?php if ($done_doing!=1){?>
    			<?php include('content_templates/edit1.inc.php')?>
             <?php }?>
        </div>	
    <?php cmsfooter();?>





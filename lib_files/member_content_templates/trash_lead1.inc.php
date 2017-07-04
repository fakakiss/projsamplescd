<?php
   
   	include('lib_files/member_content_templates/add_edit_settings.inc.php');
	
	$the_table		=	"reps";

   	include('lib_files/privite_inc_fns/post_vars.inc.php');
	include('lib_files/privite_inc_fns/no_reg_globe.inc.php'); 
	include('lib_files/privite_inc_fns/add_edit_lead_uploads.inc.php');
			
	$traher 		= 	$membercode; 

	$qins 			= "update $the_table SET pos5='0',updated=now() where id='$rid'";
	
	mysql_query($qins) or die(mysql_error());
	

	echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=index.php?spage_ren=$frm_pagecode&&xl1=7469a286259799e5b37e5db9296f00b3\">";
						
?>

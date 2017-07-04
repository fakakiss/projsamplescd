<?php
	session_start();
	
	$log 				= (isset($_REQUEST['xl1']) ? $_REQUEST['xl1'] : null);
	
	$pagecatcode		= (isset($_REQUEST["page_ren"]) ? $_REQUEST["page_ren"] : null);
	$subpagecode    	= (isset($_REQUEST["spage_ren"]) ? $_REQUEST["spage_ren"] : null);
	$listingpagecode	= (isset($_REQUEST["lpage_ren"]) ? $_REQUEST["lpage_ren"] : null);
	$slistingpagecode	= (isset($_REQUEST["slpage_ren"]) ? $_REQUEST["slpage_ren"] : null);
	
	if (isset($detailid)){$detailid       	= $_REQUEST["did"];}

	if (isset($frm_pagecode)){$frm_pagecode    	= $_REQUEST["frm_page"];}
	
	if (isset($err_log)){$err_log 			= $_REQUEST['l'];}
	
	if (isset($mpage_ren)){$mpage_ren   		= $_REQUEST["mpage_ren"];}
	if (isset($spage_ren)){$spage_ren   		= $_REQUEST["spage_ren"];}
	if (isset($lpage_ren)){$lpage_ren   		= $_REQUEST["lpage_ren"];}
	
	if (isset($copier)){$copier    		= $_REQUEST["copier"];}
	if (isset($pabx)){$pabx    			= $_REQUEST["pabx"];}
	
	if (isset($lid)){$lid 				= $_REQUEST["lid"];}
	
	if (isset($rid)){$rid 				= $_REQUEST["rid"];}
	
	if (isset($app_id)){$app_id 			= $_REQUEST["app_id"];}
	
	if (isset($att_id)){$att_id 			= $_REQUEST["att_id"];}
	
	if (isset($quo_id)){$quo_id 			= $_REQUEST["quo_id"];}
	
	if (isset($sig_id)){$sig_id 			= $_REQUEST["sig_id"];}
	
	if (isset($sal_id)){$sal_id 			= $_REQUEST["sal_id"];}
	
	if (isset($screen)){$screen 			= $_REQUEST["screen"];}
	if (isset($screen1)){$screen1 			= $_REQUEST["screen1"];}
	if (isset($screen2)){$screen2 			= $_REQUEST["screen2"];}
	if (isset($screen3)){$screen3 			= $_REQUEST["screen3"];}
	if (isset($screen4)){$screen4 			= $_REQUEST["screen4"];}
	if (isset($screen5)){$screen5 			= $_REQUEST["screen5"];}
	if (isset($screen6)){$screen6 			= $_REQUEST["screen6"];}
	if (isset($screen7)){$screen7 			= $_REQUEST["screen7"];}
	if (isset($screen8)){$screen8 			= $_REQUEST["screen8"];}
	if (isset($screen9)){$screen9 			= $_REQUEST["screen9"];}
	if (isset($screen10)){$screen10 		= $_REQUEST["screen10"];}
	
	
	
	if($log == md5("YES"))
		{
    		require		('lib_files/account_lib_files/sessions_members.inc.php');
			require     ('lib_files/user_details.php');
    		require     ('lib_files/settings.inc.php');
			require     ('lib_files/public_inc_fns/public_output_fns.php');
			require		('lib_files/validate_fns.php');
		}
	else 
		{
 			include     ('lib_files/user_details.php');
    		include     ('lib_files/settings.inc.php');
			include     ('lib_files/public_inc_fns/public_output_fns.php');
			include		('lib_files/validate_fns.php');
		}
	
	
	
	$err_msg_log 	= "";
		
	if($err_log == md5("NO")){$err_msg_log = "<span style=\"color:#ff0000\">Incorrect Login Info !</span>";}
	 
	

	
	if ( (empty($pagecatcode)) && (empty($subpagecode)) && (empty($listingpagecode))  ) {$pagecatcode=101;}
	
	if ( (!empty($pagecatcode)) && (empty($subpagecode)) && (empty($listingpagecode)) )
	
		{
			
			$q_main_page      	= "select * from pagecategories where showitem=1 and id='$pagecatcode' ";
			$rst_main_page     	= mysqli_query($conn,$q_main_page) or die(mysqli_error($conn));
			if(mysqli_num_rows($rst_main_page)>0){$row_main_page = mysqli_fetch_array($rst_main_page) or die(mysqli_error($conn));}
		}
	
	if ( (empty($pagecatcode)) && (!empty($subpagecode)) && (empty($listingpagecode))) 
	
		{
			$pagecatcode == $subpagecode;
	
			$q_main_page           = "select * from pages where showitem=1 and id='$subpagecode' order by updated desc limit 0,1";
			$rst_main_page         = mysqli_query($conn,$q_main_page) or die(mysqli_error($conn));
			if(mysqli_num_rows($rst_main_page)>0){$row_main_page = mysqli_fetch_array($rst_main_page) or die(mysqli_error($conn));}
		}
		
		
	if ( (empty($pagecatcode)) && (empty($subpagecode)) && (!empty($listingpagecode)) ) 
	
		{
			$pagecatcode == $listingpagecode;
	
			$q_main_page           = "select * from pagelistings where showitem=1 and id='$listingpagecode' order by updated desc limit 0,1";
			$rst_main_page         = mysqli_query($conn,$q_main_page) or die(mysqli_error($conn));
			if(mysqli_num_rows($rst_main_page)>0){$row_main_page = mysqli_fetch_array($rst_main_page) or die(mysqli_error($conn));}
		}
		
?>
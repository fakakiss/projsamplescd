<?php
	require('../../lib_files/private.inc.php');
	require('../../lib_files/settings.inc.php');
	require('settings/main_settings.inc.php');
	require('fns/module_fns.php');
	
	$mpid 			= $_REQUEST['mpid'];
	$msubpages		= number_mspages($system_table,$mpid);
	$mpagelistings	= number_mlpages($system_listing_table,$mpid);
		
	$spid			= $_REQUEST['spid'];
	$spagelistings	= number_slpages($system_listing_table,$spid);
	
	$lpid 	= $_REQUEST['lpid'];
	
	if ( !empty($mpid) & empty($spid) & empty ($lpid) & $msubpages < 1 & $mpagelistings < 1) 
		{
			$mysql_id 			= $mpid; 
			$the_right_table 	= $cat_table;	
			$mpid				= 58;	
		}
				
	if ( !empty($mpid) & !empty($spid) & empty ($lpid) & $spagelistings < 1 ) 
		{
			$mysql_id 			= $spid; 
			$the_right_table 	= $system_table;	
		}
		
		
		if ( !empty($mpid) & $spid='u' & empty ($lpid) & $spagelistings < 1 ) 
		{
			$mysql_id 			= $spid; 
			$the_right_table 	= $system_table;	
		}
		
		
		
				
	if ( !empty($mpid) & !empty($spid) & !empty ($lpid) )  
		{
			$mysql_id 			= $lpid; 
			$the_right_table 	= $system_listing_table;	
		}
		
	
	
	
	if ( !empty($mpid) & $spid=='u' & !empty ($lpid) )  
		{
			$mysql_id 			= $lpid; 
			$the_right_table 	= $system_listing_table;	
		}
		
		if ( $mpid=='u' & $spid=='u' & !empty ($lpid) )  
		{
			$mysql_id 			= $lpid; 
			$the_right_table 	= $system_listing_table;
			$mpid				= 58;	
		}	

	$qdel = "delete from $the_right_table where id='$mysql_id'";
	mysql_query($qdel) or die(mysql_error());
	
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php?mpid=$mpid\">";
?>
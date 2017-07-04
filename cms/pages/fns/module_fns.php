<?php
	function number_mspages($system_table,$mpid)
		{		
			$result_subpage = mysql_query("select id from $system_table where category='$mpid'");
			$msubpages		= mysql_num_rows($result_subpage);
			return $msubpages;
		}
		
		
		
	function number_mlpages($system_listing_table,$mpid)
		{			
			$result_subpage = mysql_query("select id from $system_listing_table where category='$mpid' ");
			$mpagelistings	= mysql_num_rows($result_subpage);
			return $mpagelistings;	
		}
	
	
	
	function number_slpages($system_listing_table,$spid)
		{		
			$result_subpage = mysql_query("select id from $system_listing_table where subcategory='$spid' ");
			$spagelistings	= mysql_num_rows($result_subpage);
			return $spagelistings;
		}
        
?>







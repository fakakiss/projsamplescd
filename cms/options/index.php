<?php
	require('../../lib_files/private.inc.php');
	require('../../lib_files/settings.inc.php');
	require('settings.inc.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//Dtd html 4.0 transitional//EN">
<html>
<link href="../css/style.css" rel="stylesheet" type="text/css">
<head><title><?php echo $clientname?> | Home</title></head>
<body>

<?php cmshead($privite_site_width,$privite_nav_width,$_sess_username,$_user_rights)?>	  
	<div style="padding:10px">		    
	   	<table cellSpacing=0 cellPadding=0 border=0 width="1025px">                    
        	<tr> 
         		<td class="cms_head">Options</td>
		 		<td align="right" class="logout"><?php logout()?></td>									
			</tr>                              
		</table>		    
	</div>	
<?php cmsfooter()?>
<?php 
//session_start();

	if( !isset($_SESSION['sess_id1']) && !isset($_SESSION['sess_name1']) && !isset($_SESSION['sess_email1']) )
	
			{header('Location:' . 'index.php');} 
	
	else 	{
		
				$_sess_id1 		= $_SESSION['sess_id1'];
				$_sess_name1 	= $_SESSION['sess_name1'];
				$_sess_email1 	= $_SESSION['sess_email1'];
	
				$_PHPSESSID1       	= session_id();
			
			}
?>
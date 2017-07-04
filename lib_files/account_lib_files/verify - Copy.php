<?php
	session_start();

	include("../user_details.php");
		
	$_send    = md5($_REQUEST['send']);
	$email	  = 	$_REQUEST['_user'];
	$password = 	$_REQUEST['_pass'];
	$the_url  =		$_REQUEST['page_url'];		
	
	if(!isset($_send) || $_send!=md5("OK"))
	{
		header("Location:../../index.php");
		echo $_send ."<br>" . md5("OK");
		echo $_send;
	}
	else if(isset($_send) && $_send==md5("OK"))
	{
		$_conn = mysql_connect($mysql_serv, $mysql_user, $mysql_pass) or die(mysql_error());
		mysql_select_db($mysql_db) or die(mysql_error());
		$_q = "select id,caption,caption1,caption3 from repcategories where caption1='$email' and caption3='$password'";
		$_rst = mysql_query($_q) or die(mysql_error());
		if(mysql_num_rows($_rst) == 1)
		{
			$_rowUser = mysql_fetch_array($_rst) or die(mysql_error());	
				
			$_SESSION["sess_id1"]  		= $_rowUser['id'];
			$_SESSION["sess_name1"] 	= $_rowUser['caption'];
			$_SESSION["sess_email1"]   	= $_rowUser['caption3'];
			
			
			$is_Telesales			= $_rowUser['addlink1'];
            $is_Sales				= $_rowUser['addlink2'];
            $is_Admin				= $_rowUser['addlink3'];
            $is_Tech				= $_rowUser['addlink4'];
            $is_Accounts			= $_rowUser['addlink5'];
			
			
			if ($is_Admin==1) {header("Location:../../index.php?spage_ren=58&xl1=".md5("YES"));}
			else {header("Location:../../index.php?page_ren=51&view=1&xl1=".md5("YES"));}
		}
		else
		{
			session_destroy();
			header("Location:../../index.php?spage_ren=14&l=".md5("NO"));
		}
	}
?>

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
		$_q = "select caption8,caption1,caption2 from members where caption8='$email' and caption9=md5('$password')";
		$_rst = mysql_query($_q) or die(mysql_error());
		if(mysql_num_rows($_rst) == 1)
		{
			$_rowUser = mysql_fetch_array($_rst) or die(mysql_error());	
				
			$_SESSION["sess_username1"]  = $_rowUser['caption8'];
			$_SESSION["sess_firstname1"] = $_rowUser['caption1'];
			$_SESSION["sess_lastname1"]   = $_rowUser['caption2'];
			
			
			header("Location:../../index.php?page_ren=26&&xl1=".md5("YES"));
		}
		else
		{
			session_destroy();
			header("Location:../../index.php?page_ren=24&&l=".md5("NO"));
		}
	}
?>

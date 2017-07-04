<?php
	session_start();

	include("../../lib_files/user_details.php");
		
	$_send    = md5($_REQUEST['send']);
	$username = 	$_REQUEST['_user'];
	$password = 	$_REQUEST['_pass'];
	
	if(!isset($_send) || $_send!=md5("OK"))
	{
		header("Location:../index.php");
		echo $_send ."<br>" . md5("OK");
		echo $_send;
	}
	else if(isset($_send) && $_send==md5("OK"))
	{
		$_conn = mysql_connect($mysql_serv, $mysql_user, $mysql_pass) or die(mysql_error());
		mysql_select_db($mysql_db) or die(mysql_error());
		$_q = "select * from users where username='$username' and password= md5('$password')";
		$_rst = mysql_query($_q) or die(mysql_error());
		if(mysql_num_rows($_rst) == 1)
		{
			$_rowUser = mysql_fetch_array($_rst) or die(mysql_error());
			
			
			$_SESSION["sess_username"] = $_rowUser['username'];
			$_SESSION["sess_usertype"] = $_rowUser['mainpriv'];
			$_SESSION["sess_add"]      = $_rowUser['addpriv'];
			$_SESSION["sess_delete"]   = $_rowUser['deletepriv'];
			$_SESSION["sess_show"]     = $_rowUser['showpriv'];
			$_SESSION["sess_edit"]     = $_rowUser['editpriv'];
			
			
			//session_register('sess_username','sess_usertype','sess_add','sess_delete','sess_show','sess_edit');
			
			header("Location: ../main/index.php");
		}
		else
		{
			session_unset();
			session_destroy();		
			header("Location: ../index.php?l=".md5("NO"));
		}
	}
?>

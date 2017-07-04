<?php
	session_start();
	
	if(!isset($_SESSION['sess_username']) && !isset($_SESSION['sess_usertype']) && !isset($_SESSION['sess_add']) && !isset($_SESSION['sess_delete']) && !isset($_SESSION['sess_show']) && !isset($_SESSION['sess_edit']))
	 {header('Location:' . '../index.php');}
	
	$_sess_username         = $_SESSION['sess_username'];
	$_sess_usertype         = $_SESSION['sess_usertype'];
	$_sess_addpriv          = $_SESSION['sess_add'];
	$_sess_editpriv         = $_SESSION['sess_edit'];
	$_sess_showpriv         = $_SESSION['sess_show'];
	$_sess_deletepriv       = $_SESSION['sess_delete'];
	
	$_PHPSESSID             = session_id();   
?>
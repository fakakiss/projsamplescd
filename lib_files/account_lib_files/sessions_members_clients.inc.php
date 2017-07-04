<?php
	session_start();
	if(!isset($_SESSION['sess_username1']) && !isset($_SESSION['sess_firstname1']) && !isset($_SESSION['sess_lastname1']))
		{header('Location:' . 'index.php');}
	$_sess_username1 	= $_SESSION['sess_username1'];
	$_sess_firstname1 	= $_SESSION['sess_firstname1'];
	$_sess_lastname1 	= $_SESSION['sess_lastname1'];
	$_PHPSESSID1       	= session_id();
?>
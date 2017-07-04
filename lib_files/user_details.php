<?php

	//include("db.class.php");
	
	
	//procedural style
	//$mysqli =  mysqli_connect('host','username','password','database_name');

	//object oriented style (recommended)
	//$mysqli = new mysqli('host','username','password','database_name');
	
	
	if (empty($_sess_username))	{$_sess_username     ="";}
	
	
	
	$mysql_user   = "root";
	$mysql_pass   = "";
	$mysql_serv   = "localhost";
	$mysql_db     = "wk30";
	
	$conn         = mysqli_connect($mysql_serv,$mysql_user,$mysql_pass,$mysql_db);
	
	
	
	$mysqli_conn = new mysqli($mysql_serv, $mysql_user, $mysql_pass,$mysql_db); //connect to MySql
	if ($mysqli_conn->connect_error) {//Output any connection error
    die('Error : ('. $mysqli_conn->connect_errno .') '. $mysqli_conn->connect_error);}
	
	if (mysqli_connect_error()) 
		{
			trigger_error('Database connection failed: '  . mysqli_connect_error(), E_USER_ERROR);
		// Call your logger here.    die('Could not connect to the database');
		}

	mysqli_select_db($conn,$mysql_db) or die(mysqli_error($conn));
					  
	//$db = new DB($mysql_db, $mysql_serv, $mysql_user, $mysql_pass);	
	
	
	
	//$conn = new mysqli($mysql_serv, $mysql_user, $mysql_pass,$mysql_db); //connect to MySql
	//if ($conn->connect_error) {//Output any connection error
    //die('Error : ('. $mysqli_conn->connect_errno .') '. $mysqli_conn->connect_error);}			  
					  
	
					  
					  
	$q_user_rights             	 	= "select * from users where username='$_sess_username'";
	$rst_user_rights           		= mysqli_query($conn,$q_user_rights) or die(mysqli_error($conn));
	
	if(mysqli_num_rows($rst_user_rights)>0){$row_user_rights = mysqli_fetch_array($rst_user_rights) or die(mysqli_error($conn));}
	
	if(empty($_user_rights)){$_user_rights     ="";}else {$_user_rights = $row_user_rights['mainpriv'];}
	
	
?>
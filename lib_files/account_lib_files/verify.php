<?php
	session_start();

	include("../user_details.php");
		
	$_send    = md5($_REQUEST['send']);
	$email	  = 	$_REQUEST['_user'];
	$password = 	$_REQUEST['_pass'];
	$the_url  =		$_REQUEST['page_url'];
    $ismobile =     $_REQUEST['is_mobile'];
	
	if(!isset($_send) || $_send!=md5("OK"))
	{
		header("Location:../../index.php?page_ren=l");
		echo $_send ."<br>" . md5("OK");
		echo $_send;
	}
	
	else if(isset($_send) && $_send==md5("OK"))
	{
		$_conn = mysql_connect($mysql_serv, $mysql_user, $mysql_pass) or die(mysql_error());
		mysql_select_db($mysql_db) or die(mysql_error());
		$_q = "select * from feedback_form where email='$email' and password= md5('$password')";
		$_rst = mysql_query($_q) or die(mysql_error());
		if(mysql_num_rows($_rst) == 1)
		{
			$_rowUser = mysql_fetch_array($_rst) or die(mysql_error());	
				
			$_SESSION["sess_id1"]  		= $_rowUser['id'];
			$_SESSION["sess_name1"] 	= $_rowUser['firstname'] ." ". $_rowUser['surname'];
			$_SESSION["sess_email1"]   	= $_rowUser['email'];
			
			
			$is_stage1				= $_rowUser['s1'];
            $is_stage2				= $_rowUser['s2'];
            $is_stage3				= $_rowUser['s3'];
            $is_stage4				= $_rowUser['s4'];
            $is_stage5				= $_rowUser['s5'];
			
			
			if ($is_Admin==1) {header("Location:../../index.php?page_ren=58&xl1=".md5("YES"));}
            elseif($ismobile) { 
				$the_url = "../../index_m.php";
				header("Location:".$the_url); }
            else{
				$the_url= "../../index.php?page_ren=53&xl1=".md5("YES");
                header("Location:".$the_url);
                exit();
            }
			//else {header("Location:../../index.php?page_ren=w1&view=1&xl1=".md5("YES"));}
		}
		else
		{
            if($ismobile){
                $_SESSION['err_msg_log'] = "Incorrect Username or Password";
				$the_url = "../../index_m.php";
                header("Location:".$the_url);
                exit();
            }else{
                session_destroy();
			    header("Location:../../index.php?page_ren=52&l=".md5("NO"));
            }
		}
	}
?>

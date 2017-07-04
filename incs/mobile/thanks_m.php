<?php
	session_start();


		
	$_send    = md5("OK");
	$email	  = 	$_REQUEST['email'];
	$password = 	$_REQUEST['pass1'];
	//$ismobile =     $_REQUEST['is_mobile'];
	
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
		$_q = "select * from feedback_form1 where email='$email' and password= md5('$password')";
		$_rst = mysql_query($_q) or die(mysql_error());
		if(mysql_num_rows($_rst) == 1)
		{
			$_rowUser = mysql_fetch_array($_rst) or die(mysql_error());	
				
			$_SESSION["sess_id1"]  		= $_rowUser['id'];
			$_SESSION["sess_name1"] 	= $_rowUser['caption'];
			$_SESSION["sess_email1"]   	= $_rowUser['caption3'];
			
			
			$is_week1				= $_rowUser['week1'];
            $is_week2				= $_rowUser['week2'];
            $is_week3				= $_rowUser['week3'];
            $is_week4				= $_rowUser['week4'];
            $is_week5				= $_rowUser['week5'];
			
			
			//if ($is_Admin==1) {header("Location:../../index.php?page_ren=58&xl1=".md5("YES"));}
            //elseif($ismobile) { header("Location:".$the_url); }
            //else{
              //  header("Location:".$the_url);
              //  exit();
            //}
			//else {header("Location:../../index.php?page_ren=w1&view=1&xl1=".md5("YES"));}
		}
		else
		{

            if($ismobile){
                //$_SESSION['err_msg_log'] = "Incorrect Username or Password.";
                //header("Location:".$the_url);
                //exit();
            }else{
                //session_destroy();
			    //header("Location:../../index.php?page_ren=l&l=".md5("NO"));
            }
		}
	}
?>


<h1>Congratulations</h1>


<?php
 
$the_user=$just_id;

$query = "SELECT * FROM feedback_form1 WHERE id = '$the_user';";
$result  = $db->query($query);
$user = mysql_fetch_array($result);

$passport	=$user['passport'];
?>


<!--Service List Part Start-->
<div class="service-list">



    <!--Service List Item Start-->
    <div class="service-list-design">

        <div class="service-list-design-inner">
            <div class="service-list-design-image"><img src="images/checked.png" width="43" height="42" alt="" /></div>
            <div class="service-list-design-text">Stage 1 complete</div>
            <p>
                Thank you for entering the DionWired Blue Carpet competition. You have received 1 entry into the final draw.<br /><br />
Please see all the <a href="index_m.php">Stages</a> that are currently open and increase your chance of winning.
            </p>
        </div>

        <?php if(!empty($user['passport'])){?>

        <img width="440" src="images/userfiles/<?php echo $user['passport']?>" />
        <?php } ?>
    </div>
    <!--Service List item End-->

    <a href="index_m.php" class="button block">Home</a>
<?php include('flow_m.php')?>		
</div>
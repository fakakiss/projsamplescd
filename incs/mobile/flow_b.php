<?php if($_SESSION["sess_id1"]){?>
<?php 
$q_membername = "select * from feedback_form1 where id ='{$_SESSION["sess_id1"]}'";
$rst_membername = mysql_query($q_membername) or die(mysql_error());
if(mysql_num_rows($rst_membername)>0){$row_membername = mysql_fetch_array($rst_membername) or die(mysql_error());}
//$member_name		=$row_membername['firstname']." ".$row_membername['surname'];
//$member_email		=$row_membername['email'];
$week1=$row_membername['w1'];
$week2=$row_membername['w2'];
$week3=$row_membername['w3'];
$week4=$row_membername['w4'];
?>
<?php }?>
<?php if($user_profile['id']>1){?>
<?php
$fbid=$user_profile['id'];
$q_membername= "select * from feedback_form1 where fbid ='$fbid'";
$rst_membername     = mysql_query($q_membername) or die(mysql_error());
if(mysql_num_rows($rst_membername)>0){$row_membername = mysql_fetch_array($rst_membername) or die(mysql_error());}
//$member_name		=$row_membername['firstname']." ".$row_membername['surname'];
//$member_email		=$row_membername['email'];
$week1=$row_membername['w1'];
$week2=$row_membername['w2'];
$week3=$row_membername['w3'];
$week4=$row_membername['w4'];
?><?php }?>
<?php if($_SESSION["sess_id1"] || $fbuser > 0) {?>
<?php if($week2=="0"){?>
<div style="width:440px;float:left;margin:10px;color:#FFFFFF;" align="center"><br><strong>Get your Boarding Pass and earn 15 more entries</strong><br /><br /><a style="border-radius: 3px 3px 3px 3px;
font-size: 12px;background-color: #5675B6;
background-image: linear-gradient(to bottom, #6C8CCF, #3B5998);
background-repeat: repeat-x;
border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.15) rgba(0, 0, 0, 0.45);
color: #FFFFFF;padding:10px;
text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.35);
font-weight: bold;" href="index_b.php?page_ren=s2"> Enter to get your Blue Carpet Boarding Pass</a></div>
<?php }?>
<?php if($week3=="0"){?>
<div style="width:440px;float:left;margin:10px;color:#FFFFFF;" align="center"><br><strong>Share with friends via email and Twitter and get up to 10 more entries</strong><br /><br /><a style="border-radius: 3px 3px 3px 3px;
font-size: 12px;background-color: #5675B6;
background-image: linear-gradient(to bottom, #6C8CCF, #3B5998);
background-repeat: repeat-x;
border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.15) rgba(0, 0, 0, 0.45);
color: #FFFFFF;padding:10px;
text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.35);
font-weight: bold;" href="index_b.php?page_ren=s3">Share with friends via Email</a></div>
<?php }?>
<?php if($week4=="0"){?>
<div style="width:440px;float:left;margin:10px;color:#FFFFFF;" align="center"><br><strong>Share with friends via sms and earn 5 more entries</strong><br /><br /><a style="border-radius: 3px 3px 3px 3px;
font-size: 12px;background-color: #5675B6;
background-image: linear-gradient(to bottom, #6C8CCF, #3B5998);
background-repeat: repeat-x;
border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.15) rgba(0, 0, 0, 0.45);
color: #FFFFFF;padding:10px;
text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.35);
font-weight: bold;" href="index_b.php?page_ren=s4">Share with friends via SMS</a></div>
<?php }?>
<?php } ?>
<?php if($_SESSION["sess_id1"]){?>
<?php 
$q_membername = "select * from feedback_form where id ='{$_SESSION["sess_id1"]}'";
$rst_membername = mysql_query($q_membername) or die(mysql_error());
if(mysql_num_rows($rst_membername)>0){$row_membername = mysql_fetch_array($rst_membername) or die(mysql_error());}
//$member_name		=$row_membername['firstname']." ".$row_membername['surname'];
//$member_email		=$row_membername['email'];
$stage1=$row_membername['s1'];
$stage2=$row_membername['s2'];
$stage3=$row_membername['s3'];
$stage4=$row_membername['s4'];
$stage5=$row_membername['s5'];
?>
<?php }?>
<?php if($user_profile['id']>1){?>
<?php
$fbid=$user_profile['id'];
$q_membername= "select * from feedback_form where fbid ='$fbid'";
$rst_membername     = mysql_query($q_membername) or die(mysql_error());
if(mysql_num_rows($rst_membername)>0){$row_membername = mysql_fetch_array($rst_membername) or die(mysql_error());}
//$member_name		=$row_membername['firstname']." ".$row_membername['surname'];
//$member_email		=$row_membername['email'];
$stage1=$row_membername['s1'];
$stage2=$row_membername['s2'];
$stage3=$row_membername['s3'];
$stage4=$row_membername['s4'];
$stage5=$row_membername['s5'];
?><?php }?>
<?php if($_SESSION["sess_id1"] || $fbuser > 0) {?>
<?php if($stage2=="0"){?>
<div style="width:100%;float:left;margin:10px;" align="center"><br><strong>Interview for placement in the Training Project</strong><br /><a class="btn btn-facebook" href="index.php?page_ren=stage&stage=stage_2">Click Here to Schdule you interview, by phone, email or in person.</a></div>
<?php }?>
<?php if($stage3=="0"){?>
<div style="width:100%;float:left;margin:10px;" align="center"><br><strong>Pay Registration Fee</strong><br /><a class="btn btn-facebook" href="index.php?page_ren=stage&stage=stage_3">Share with friends via Email</a></div>
<?php }?>
<?php if($stage4=="0"){?>
<div style="width:100%;float:left;margin:10px;" align="center"><br><strong>Confirm Start Date</strong><br /><a class="btn btn-facebook"  href="index.php?page_ren=stage&stage=stage_4">Share with friends via SMS</a></div>
<?php }?><?php } ?>

<?php
$updatejqcounter = '';
	if($_SESSION["sess_id1"]){
		$trimmedid = ltrim($_SESSION['sess_id1'], "0");
		$entriescount      = "select count(*) as count from entries where id ='".$trimmedid."'";
        
        $entrycount     = mysql_query($entriescount) or die(mysql_error());
		$entriescount = mysql_fetch_array($entrycount);
		$entrycountarray = str_split($entriescount['count']);
		foreach ($entrycountarray as $entrycount) {
			$updatejqcounter .= '<img src="images/flip/flip'.$entrycount.'.png">';
		}
	} else {
		$trimmedid = ltrim($user_profile['id'], "0");
		$entriescount = "select count(*) as count from entries where id in ('".$trimmedid."','".$row_membername['id']."')";
        $entrycount     = mysql_query($entriescount) or die(mysql_error());
		$entriescount = mysql_fetch_array($entrycount);
		$entrycountarray = str_split($entriescount['count']);
		foreach ($entrycountarray as $entrycount) {
			$updatejqcounter .= '<img src="images/flip/flip'.$entrycount.'.png">';
		}
	}
	echo '<!-- '.$updatejqcounter .'-->';
?>
		<script type="text/javascript">jQuery ('#entriescounter div').html('<br/><br/><?php echo $updatejqcounter; ?>');</script>
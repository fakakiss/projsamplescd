<?
  
   include('../lib_files/settings.inc.php');
   include('function_libs/sessions.inc.php');
   require_once("function_libs/functions.php");
   
   $mysql_id = $HTTP_GET_VARS['sess_username1'];
   $q = "select * from user where username='$sess_username1'";
   $rst = mysql_query($q) or die(mysql_error());
   
   if(mysql_num_rows($rst) > 0)
   {$row = mysql_fetch_array($rst) or die(mysql_error());}
	
   $err_msg = "";
    $err_header = "<p class=\"error\">";
    $err_header .= "Please take note of the following:<ul class=\"error\">";
    $err_footer = "</ul></p>";
	
	function is_filled($field_name) {
	if(empty($field_name)) { return false; }
	else { return true; }
}

if(isset($send) && ($send=='OK')) {
   
    if(!is_filled($firstname)) { $err_msg .= "<li class=\"error\">Your firstname is required.</li>"; }
	else {$firstname = ucwords($firstname);}
	
	 
	
	if(!is_filled($lastname)) { $err_msg .= "<li class=\"error\">Your lastname is required.</li>"; }
	else {$lastname = ucwords($lastname);}
	
	$ss1 = checkdate($month,$day,$year);
	  
	   if(!is_filled($day) || !is_filled($month) || !is_filled($year) ) { $err_msg .= "<li class=\"error\">The Birthday  Field is Empty</li>"; }
	elseif(!($ss1=="true"))  {
	 $err_msg .= "<li class=\"error\">Your date of birth is not a valid one.</li>";
	}else {$dob = strtolower(trim($dob));}
	
	
	if(!is_filled($email)) { $err_msg .= "<li class=\"error\">The Email Field is Empty</li>"; }
	elseif(!is_valid_email($email))  {
	 $err_msg .= "<li class=\"error\">The email address you entered is invalid.</li>";
	}else {$email = strtolower(trim($email));}

	
	$test1=is_filled($pass1);
	$test2=is_filled($pass2);
	
	if ( ($test1=="true") || ($test2=="true")) { 
	       if  ($pass1!=$pass2 ) { $err_msg .= "<li class=\"error\"> The passwords do not match</li>"; }
	         else { $pass1=trim($pass1); }
	$qins1 = "UPDATE user SET passwd=password('$pass1') WHERE username='$sess_username1'"; 
	mysql_query($qins1) or die(mysql_error());
	}

	
	if (!($err_msg == "")) {echo "<div></div>";}
	
	else {$qins = "UPDATE user SET firstname='$firstname',lastname='$lastname',affiliation='$affiliation',gender='$gender',day='$day',month='$month',year='$year',status='$status',address1='$address1',address2='$address2',country='$country',email='$email',updated=now() WHERE username='$sess_username1'";
		mysql_query($qins) or die(mysql_error());
		echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=myicgcmain.php\">";
		
		}
		
		
		   
		  
		
		
		
		
		
	
	
	
  }
?>









<HTML>
<HEAD>
<TITLE>My ICGC - My Profile</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<link href="../css/central-styles.css" rel="stylesheet" type="text/css">
<link href="../css/icgc-links.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
body {
	background-image: url(../images/icgc-main-bg.gif);
	background-color: #BBBA9B;
}
.style1 {font-size: 9}
.style2 {
	font-size: 9px;
	color: #FFFFCC;
}
.style6 {color: #FFFFFF}
-->
</style>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</HEAD>
<BODY LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>
<!-- ImageReady Slices (myicgcmainpage.psd) -->
<TABLE WIDTH=766 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR>
		<TD COLSPAN=4>
			<IMG SRC="../images/myicgcmainpage_01.gif" WIDTH=381 HEIGHT=9 ALT=""></TD>
		<TD COLSPAN=2 ROWSPAN=3>
			<IMG SRC="../images/myicgcmainpage_02.gif" WIDTH=379 HEIGHT=48 ALT=""></TD>
		<TD width="10">
			<IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=9 ALT=""></TD>
	</TR>
	<TR>
		<TD width="15" ROWSPAN=3>
			<IMG SRC="../images/myicgcmainpage_03.gif" WIDTH=15 HEIGHT=46 ALT=""></TD>
		<TD COLSPAN=3>			<table width="366" height="31" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td bgcolor="#003366"><div  class="bdtxt" style="font-weight:normal; color:#ffffff     ">You Are logged in as <strong><? echo $sess_username1?></strong></div></td>
          </tr>
        </table></TD>
		<TD>
			<IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=31 ALT=""></TD>
	</TR>
	<TR>
		<TD COLSPAN=3>
			<IMG SRC="../images/myicgcmainpage_05.gif" WIDTH=366 HEIGHT=8 ALT=""></TD>
		<TD>
			<IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=8 ALT=""></TD>
	</TR>
	<TR>
		<TD width="183" ROWSPAN=2 bgcolor="#BAB99B">
			<IMG SRC="../images/myicgcmainpage_06.gif" WIDTH=183 HEIGHT=64 ALT=""></TD>
		<TD COLSPAN=2 ROWSPAN=3>
			<IMG SRC="../images/myicgcmainpage_07.gif" WIDTH=183 HEIGHT=120 ALT=""></TD>
		<TD COLSPAN=2 ROWSPAN=3>
			<IMG SRC="../images/myicgcmainpage_08.gif" WIDTH=379 HEIGHT=120 ALT=""></TD>
		<TD>
			<IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=7 ALT=""></TD>
	</TR>
	<TR>
		<TD ROWSPAN=5 background="../images/myhome-bg.gif">&nbsp;			</TD>
		<TD>
			<IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=57 ALT=""></TD>
	</TR>
	<TR>
		<TD>			<table width="183" height="56" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td bgcolor="#BBBA9B">        <SCRIPT language=JavaScript>


var now = new Date();
var yr = now.getYear();
var mName = now.getMonth() + 1;
var dName = now.getDay() + 1;
var dayNr = ((now.getDate()<10) ? "0" : "")+ now.getDate();

if(dName==1) Day = "Sunday";
if(dName==2) Day = "Monday";
if(dName==3) Day = "Tuesday";
if(dName==4) Day = "Wednesday";
if(dName==5) Day = "Thursday";
if(dName==6) Day = "Friday";
if(dName==7) Day = "Saturday";

if(mName==1) Month="January";
if(mName==2) Month="February";
if(mName==3) Month="March";
if(mName==4) Month="April";
if(mName==5) Month="May";
if(mName==6) Month="June";
if(mName==7) Month="July";
if(mName==8) Month="August";
if(mName==9) Month="September";
if(mName==10) Month="October";
if(mName==11) Month="November";
if(mName==12) Month="December";

var browserName = navigator.appName;
browserVer = parseInt ( navigator.appVersion );

// String to display current date.
if ( browserName == "Netscape" && browserVer >= 4 ) 
  yr = yr + 1900;
var todaysDate =(" "
       + Day
       + ", "
       + Month
       + " "
       + dayNr
       + ", "
       + yr);
// Write date to page.
document.open();
document.write("<FONT SIZE=1 COLOR=#000000 FACE='Arial, Helvetica, sans-serif'><b>"+todaysDate+"</b></FONT>");
// Deactivate Cloaking -->
</SCRIPT>&nbsp;</td>
          </tr>
        </table></TD>
		<TD>
			<IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=56 ALT=""></TD>
	</TR>
	<TR>
	  <TD ROWSPAN=4 valign="top" bgcolor="#BBBA9B">			<? mainnav($sess_username);?></TD>
		<TD width="18">
			<IMG SRC="../images/myicgcmainpage_12.gif" WIDTH=18 HEIGHT=21 ALT=""></TD>
		<TD COLSPAN=2>
			<IMG SRC="../images/myicgcmainpage_13.gif" WIDTH=520 HEIGHT=21 ALT=""></TD>
		<TD width="24">
			<IMG SRC="../images/myicgcmainpage_14.gif" WIDTH=24 HEIGHT=21 ALT=""></TD>
		<TD>
			<IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=21 ALT=""></TD>
	</TR>
	<TR>
		<TD background="../images/myicgcmainpage_15.gif">&nbsp;			</TD>
		<TD COLSPAN=2>			<table width="520" height="200" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="25" bgcolor="#990000"><div align="center"><span class="headersWhite">Update Your Profile </span></div></td>
              </tr>
            </table>
              <table width="520" border="0" cellpadding="0" cellspacing="1" bgcolor="#990000">
                <tr>
                  <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="10">&nbsp;</td>
						
						
						<?php

if(!empty($err_msg))
{
 print "<div align=center >";
 echo $err_header . $err_msg . $err_footer . "<br>";
 print "</div>";
}
?>
						
						
						
						
                        <td><br>                         <form action="<?=$PHP_SELF?>" method="post"> <TABLE width="100%" border=0 cellPadding=5 cellSpacing=0>
                            <TBODY>
                              <TR class="bdtxt">
                                <TD colspan="2" align=right class=bodycopy><div align="left"></div></TD>
                              </TR>
                              <TR class="bdtxt">
                                <TD colspan="2" align=right class=bodycopy><div align="left"><span class="formtxt">Personal Information </span></div></TD>
                              </TR>
                              <TR class="bdtxt">
                                <TD class=bodycopy align=right><span class="formtxt">*</span>First name:</TD>
                                <TD class=bodycopy>
								<INPUT name="firstname" class=formtxt id=txtFirstName 
                  style="WIDTH: 170px" value="<?=stripslashes($row['firstname'])?>" maxLength=50>
                                </TD>
                              </TR>
                              <TR class="bdtxt">
                                <TD class=bodycopy align=right><span class="formtxt">*</span>Last name :</TD>
                                <TD class=bodycopy><INPUT name="lastname" class=formtxt id=txtLastName 
                  style="WIDTH: 170px" value="<?=stripslashes($row['lastname'])?>" maxLength=50>
                                </TD>
                              </TR>
                              <TR class="bdtxt">
                                <TD class=bodycopy align=right><span class="formtxt">*</span>ICGC Affiliation:</TD>
                                <TD class=bodycopy><select class=bdtxt id=ddlAffiliation 
                  style="WIDTH: 170px" name="affiliation">
                                  <option value="<?=stripslashes($row['affiliation'])?>"
                    selected>
                                  <?=stripslashes($row['affiliation'])?>
                                  </option>
                                  <option value="Regular Attendee">Regular Attendee</option>
                                  <option value="Member">Member</option>
                                  <option 
                    value="Non Member">Non Member</option>
                                </select></TD>
                              </TR>
                              <TR class="bdtxt">
                                <TD class=bodycopy align=right><span class="formtxt">*</span>Gender:</TD>
                                <TD class=bodycopy><SELECT class=bdtxt id=ddlGender 
                  style="WIDTH: 170px" name="gender">
                                    <OPTION value="<?=stripslashes($row['gender'])?>"
                    selected><?=stripslashes($row['gender'])?></OPTION>
                                    <OPTION value="Female" >Female</OPTION>
                                    <OPTION value="male"  >Male</OPTION>
                                  </SELECT>
                                </TD>
                              </TR>
                              <TR class="bdtxt">
                                <TD class=bodycopy align=right><span class="formtxt">*</span>Marital Status:</TD>
                                <TD class=bodycopy><SELECT class=bdtxt id=ddlMStatus 
                  style="WIDTH: 170px" name="status">
                                    <OPTION value="<?=stripslashes($row['status'])?>" 
                    selected><?=stripslashes($row['status'])?></OPTION>
                                    <OPTION value="Married">Married</OPTION>
                                    <OPTION value="Single">Single</OPTION>
                                  </SELECT>
                                </TD>
                              </TR>
                              <TR class="bdtxt">
                                <TD class=bodycopy align=right>Date of Birth:</TD>
                                <TD class=bodycopy>
								<INPUT name="day" class=formtxt id=txtAddr12 style="WIDTH: 30px" value="<?=stripslashes($row['day'])?>" maxLength=2>&nbsp; - 
								<INPUT name="month" class=formtxt id=txtAddr12 style="WIDTH: 30px" value="<?=stripslashes($row['month'])?>" maxLength=2>&nbsp; -
								<INPUT name="year" class=formtxt id=txtAddr12 style="WIDTH: 60px" value="<?=stripslashes($row['year'])?>" maxLength=4>
                  
                                &nbsp;(DD-MM-YYYY) eg. (02-02-1980) </TD>
                              </TR>
                              <TR class="bdtxt">
                                <TD class=bodycopy align=right>Address Line one</TD>
                                <TD class=bodycopy>
								
								<INPUT name="address1" class=formtxt id=txtPostal 
                  style="WIDTH: 170px" value="<?=stripslashes($row['address1'])?>" maxLength=15>
				  
				  
                                </TD>
								<TR class="bdtxt">
                                <TD class=bodycopy align=right>Address Line two</TD>
                                <TD class=bodycopy>
				  
				 <INPUT name="address2" class=formtxt id=txtPostal 
                  style="WIDTH: 170px" value="<?=stripslashes($row['address2'])?>" maxLength=15>
                                </TD>
                              </TR>
                              <TR class="bdtxt">
                                <TD class=bodycopy align=right>&nbsp;</TD>
                                <TD class=bodycopy>&nbsp;</TD>
                              </TR>
                              <TR class="bdtxt">
                                <TD class=bodycopy align=right>Country:</TD>
                                <TD class=bodycopy><INPUT name="country" class=formtxt id=txtPostal 
                  style="WIDTH: 170px" value="<?=stripslashes($row['country'])?>" maxLength=15>
                                </TD>
                              </TR>
                              <TR class="bdtxt">
                                <TD class=bodycopy align=right><span class="formtxt">*</span>E-mail address:</TD>
                                <TD class=bodycopy><INPUT name="email" class=formtxt id=txtEmail 
                  style="WIDTH: 170px" value="<?=stripslashes($row['email'])?>" maxLength=50>
                                </TD>
                              </TR>
                              <TR class="bdtxt">
                                <TD colspan="2" align=right class=bodycopy><div align="left"><SPAN class=formtxt>To change your password, enter it below otherwise leave blank  </SPAN></div></TD>
                              </TR>
							  
							  
							  
                              
                              <TR class="bdtxt">
                                <TD class=bodycopy align=right>Choose a new password:</TD>
                                <TD class=bodycopy><INPUT name="pass1" type=password class=formtxt id=txtPass 
                  style="WIDTH: 170px" value="" maxLength=15>
                                </TD>
                              </TR>
                              <TR class="bdtxt">
                                <TD class=bodycopy align=right>Confirm new password:</TD>
                                <TD class=bodycopy><INPUT 
                  name="pass2" type=password class=formtxt id=txtPassVerify 
                  style="WIDTH: 170px" value="" maxLength=15>
                                </TD>
                              </TR>
                              <TR>
                                <TD class=bodycopy align=middle colSpan=2><INPUT class=formtxt id=btnContinue type=submit value="Update &gt;&gt;" name=btnContinue> <input type="hidden" value="OK" name="send"></TD>
                              </TR>
                            </TBODY>
                          </TABLE>   
						  </form>                       <p class="bdtxt"><br>
                            <span class="bdtxt"><br>
                            <br>
                            </span></p>                        </td><td width="10">&nbsp;</td>
                      </tr>
                  </table></td>
                </tr>
              </table>
              <br>
              <ul><li><p><a href="#">To the top </a></p>
                </li>
            </ul></td>
          </tr>
        </table></TD>
		<TD background="../images/myicgcmainpage_17.gif">&nbsp;			</TD>
		<TD>
			<IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=200 ALT=""></TD>
	</TR>
	<TR>
		<TD ROWSPAN=2>
			<IMG SRC="../images/myicgcmainpage_18.gif" WIDTH=18 HEIGHT=16 ALT=""></TD>
		<TD COLSPAN=2 ROWSPAN=2>
			<IMG SRC="../images/myicgcmainpage_19.gif" WIDTH=520 HEIGHT=16 ALT=""></TD>
		<TD ROWSPAN=2>
			<IMG SRC="../images/myicgcmainpage_20.gif" WIDTH=24 HEIGHT=16 ALT=""></TD>
		<TD>
			<IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=14 ALT=""></TD>
	</TR>
	<TR>
		<TD>
			<IMG SRC="../images/myicgcmainpage_21.gif" WIDTH=15 HEIGHT=2 ALT=""></TD>
		<TD>
			<IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=2 ALT=""></TD>
	</TR>
	<TR>
		<TD COLSPAN=6>
			<IMG SRC="../images/myicgcmainpage_22.gif" WIDTH=760 HEIGHT=38 ALT=""></TD>
		<TD>
			<IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=38 ALT=""></TD>
	</TR>
	<TR>
		<TD>
			<IMG SRC="../images/spacer.gif" WIDTH=15 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="../images/spacer.gif" WIDTH=183 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="../images/spacer.gif" WIDTH=18 HEIGHT=1 ALT=""></TD>
		<TD width="165">
			<IMG SRC="../images/spacer.gif" WIDTH=165 HEIGHT=1 ALT=""></TD>
		<TD width="356">
			<IMG SRC="../images/spacer.gif" WIDTH=355 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="../images/spacer.gif" WIDTH=24 HEIGHT=1 ALT=""></TD>
		<TD></TD>
	</TR>
</TABLE>
<table width="763" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div align="center"><SPAN class=bdtxt>ICGC All rights reserved | Powered by <a href="http://www.interfacetechs.com" target="_blank"> Interface Technologies </a></SPAN><br>
            <br>
    </div></td>
  </tr>
</table>
<br>
<!-- End ImageReady Slices -->
</BODY>
</HTML>
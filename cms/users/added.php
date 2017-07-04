<?php
	
	require('../../lib_files/private.inc.php');
	require('../../lib_files/settings.inc.php');
	require('settings.inc.php');
	
	if ($_sess_username=='admin')
	   {
	    $q = "select * from users order by username";
	    $rst = mysql_query($q) or die(mysql_error());
	   }
	else
	  {
	   $q = "select * from errors where name='cass'";
	   $rst = mysql_query($q) or die(mysql_error());
      }  
?>




<!DOCTYPE html PUBLIC "-//W3C//Dtd html 4.0 transitional//EN">
<html>
<style type="text/css">
<!--

.style1 {color: #0B5594}
.style2 {color: #FFFFFF}
.style3 {font-size: 12px;line-height: normal;text-decoration: none;font-family: Tahoma, Arial, Verdana, sans-serif;font-weight: bold;}
-->	
</style>
<link href="../css/style.css" rel="stylesheet" type="text/css">
<head><title><?php echo $clientname;?> - Home</title>
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<META content="MShtml 6.00.2600.0" name=GENERATOR>
</head>



<body leftMargin=0 topMargin=0 marginwidth="0" marginheight="0">


<?phpcmshead()?>



<table cellSpacing=0 cellPadding=0 width="740" border=0 >
        <tr>
		
          <td valign=top width="164px"><br><?php cmsnav($_sess_username);?></td>
		  
          <td valign=top bgcolor="#FFFFFF">
		  
		  
		  
		  
		  
		  
		  <div style="padding:20 "> 
		  
		  <?php top_module($manager,$add,$view,$viewcat,$addcat,$_sess_username,$_user_rights);?>
		  
		    <div style="padding:20 "> 
                                <table  border="0"   class="cms_text">
  
  <?php
	if(mysql_num_rows($rst) > 0)
	{
		while($row = mysql_fetch_array($rst))
		{
?>
  <tr> 
    <td>
      User Name : <strong><?php echo $row['username']?></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      Full Name : <strong><?php echo $row['fullname']?></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	
      Access Privilage : <?php  if($row[1] == 0001)
	{
		echo "<strong>Administrator</strong>";
	}
	else 
	
		echo "<strong>User</strong>";
	?>
	  <div class="readmore_bottoms" style="padding-bottom:10px"> 
	 
	<a href="../users/edit.php?id=<?php echo $row[0]?>">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	<?php  if($row[0] =='admin')
	{
		echo "<strong>Not Deletable</strong>";
	}
	else 
	
		echo "<a href=\"delete.php?id=$row[0]\">Delete</a> ";
	?>
	
    </div>
	  
    </td>
  </tr>
  <?php
		}
	}
	else
	{
?>
  <tr> 
    <td align="center" class="sidebarFooter">THERE IS NO USER IN THE SYSTEM FOR 
      NOW</td>
  </tr>
  <?php
	}
?>
</table>
                              </div>
							   </div>
							  
							  
							  
							              </td>
  </tr></table>
<?php cmsfooter()?>


</body></html>

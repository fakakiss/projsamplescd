<?php
	require('../../lib_files/private.inc.php');
	require('../../lib_files/settings.inc.php');
	require('settings.inc.php');
	
	$search  = $_REQUEST["search"];
	
	$q = "select * from $system_table where caption  like '%$search%' order by date asc";
	$rst = mysql_query($q) or die(mysql_error());
?>




<!DOCTYPE html PUBLIC "-//W3C//Dtd html 4.0 transitional//EN">
<html>

<link href="../css/style.css" rel="stylesheet" type="text/css">
<head><title><?php echo $clientname;?> - Home</title>
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<META content="MShtml 6.00.2600.0" name=GENERATOR>
</head>

<body>

<?php cmshead($privite_site_width,$privite_nav_width,$_sess_username,$_user_rights)?>


		  
		  <div style="padding:10px"> 
		  
		  
		  <?php top_module($manager,$add,$view,$viewcat,$addcat,$_sess_username,$_user_rights);?>
		  
		  <div style="padding-top:10px"> 
		  
                                <table  border="0"    class="cms_text">
                                  <?php
	if(mysql_num_rows($rst) > 0)
	{
		while($row = mysql_fetch_array($rst))
		{
?>
                                  <tr> 
                                    <td valign="top" > <div class="cms_date">
                                        <?php echo $row['date']?>
                                      </div>
                                      <div style="font-size:14px;font-weight:bold;padding-bottom:5px">
                                        <?php echo $row['caption']?>
                                      </div>
                                      <div  class="cms_text">
                                        <?php $text=$row['intro']; echo substr($text, 0 , 300 ); ?>
                                      </div>
                                      <div class="readmore_bottoms" style="padding-bottom:10px;padding-top:5px"> 
                                        <a href="../news/details.php?id=<?php echo $row[0]?>">read 
                                        more</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                        <a href="../news/edit.php?id=<?php echo $row[0]?>">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                        <a href="../news/delete.php?id=<?php echo $row[0]?>">Delete</a> 
                                      </div></td>
                                  </tr>
                                  <?php
		}
	}
	else
	{
?>
                                  <tr> 
                                    <td >No Item.</td>
                                  </tr>
                                  <?php
	}
?>
                                </table>
								
								</div>
								
                              </div>
		  
		  
           
<?php cmsfooter()?>		


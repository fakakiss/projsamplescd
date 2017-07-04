<?php
	 require('../../lib_files/private.inc.php');
	 require('../../lib_files/settings.inc.php');
	 require('settings.inc.php');
  
	$q = "select * from $cat_table order by date asc";
	$rst = mysql_query($q) or die(mysql_error());
?>




<!DOCTYPE html PUBLIC "-//W3C//Dtd html 4.0 transitional//EN">
<html>

<link href="../css/style.css" rel="stylesheet" type="text/css">
<head><title><?php echo $clientname;?> | </title>
</head>



<body>


<?php cmshead($privite_site_width,$privite_nav_width,$_sess_username,$_user_rights)?>


		  
		  <div style="padding:10px "> 
		  
		    <?php top_module($manager,$add,$view,$viewcat,$addcat,$_sess_username,$_user_rights);?>
		  
		  
                                <table  border="0"   class="cms_text">
                                  <?php if(mysql_num_rows($rst) > 0){while($row = mysql_fetch_array($rst)){?>
                                  <tr> 
                                    <td valign="top" > <div class="cms_date"><?php echo $row['date']?></div> 
                                        
                                      
                                      <div class="cms_text" style="font-size:14px;font-weight:bold;padding-bottom:5px"> 
                                        <?php echo $row['caption']?>
										 <?php if (($row['showitem'])==1) {echo "On";} else {echo "Off";}?>
                                      </div>
                                      <div class="cms_text"> 
                                        <?php $text=$row['intro']; echo substr($text, 0 , 300 ); ?>
                                      </div>
                                      <div class="readmore_bottoms" style="padding-bottom:10px;padding-top:5px"> 
                                      
                                        <a href="editcat.php?id=<?php echo $row[0]?>">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                        <a href="deletecat.php?id=<?php echo $row[0]?>">Delete</a> 
                                      </div></td>
                                  </tr>
                                  <?php }
		
	}
	else
	{
?>
                                  <tr> 
                                    <td  class="cms_text">No Item.</td>
                                  </tr>
                                  <?php
	}
?>
                                </table>
                            </div>
		  
		  
          
		
		<?php cmsfooter()?>


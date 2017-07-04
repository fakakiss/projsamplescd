<?php
	require('../../lib_files/private.inc.php');
	require('../../lib_files/settings.inc.php');
	require('settings.inc.php');
	
	$q = "select * from images where name like '%$search%' order by name asc";
    $rst = mysql_query($q) or die(mysql_error());	
?>

<!DOCTYPE html PUBLIC "-//W3C//Dtd html 4.0 transitional//EN">
<html>
<link href="../css/style.css" rel="stylesheet" type="text/css">
<head><title><?php echo $clientname;?> | <?php echo $manager;?> | Search Results</title>
</head>



<body>


<?php cmshead($privite_site_width,$privite_nav_width,$_sess_username,$_user_rights)?>


<div style="padding:10px ">
		  
<?php top_module($manager,$add,$view,$viewcat,$addcat,$_sess_username,$_user_rights);?>
					  
					<table  border="0"  cellpadding="0" cellspacing="0"  >
<?php
if(mysql_num_rows($rst) > 0)
{while($row = mysql_fetch_array($rst)){?>
<tr> 
              <td width=550 > <table border="0" cellspacing="0" cellpadding="0"  >
                  <tr>
				  
          <td width=150 valign="top" height="130"><img src="../../uploads/images/<?php echo $row['name']?>" width="120" height="120" class="cms_image_border"></td> 
                    <td   width=400 valign="top" > 
					<table width="400" class="cms_event_text"><tr><td width="111">
					
                            <span class="cms_event_text">Image Name:</span></td><td width="269"><span class="cms_event_startdate"> 
                            <?php echo stripslashes($row['name'])?></span>
                            </td></tr>
							
							<?php if(!empty($row['caption'])) { ?>
		<tr><td>
                            <span class="cms_event_text">Image Caption: </span></td>
                <td> 
                  
                  <?php echo ucfirst($row['caption'])?>
                 
                </td>
              </tr>
			   <?php } ?>
							
							
							
							
		<?php if(!empty($row['img_descrip'])) { ?>
		<tr><td>
                            <span class="cms_event_text">Image Description: </span></td>
                <td> 
                  
                  <?php echo ucfirst($row['description'])?>
                 
                </td>
              </tr>
			   <?php } ?>
			  <tr><td></td><td>
                              <div class="readmore_bottoms" style="padding-top:5px">
							  <a href="../images/edit.php?id=<?php echo $row[0]?>">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							  <a href="../images/delete.php?id=<?php echo $row[0]?>">Delete</a>
							 
</div>
								</td></tr></table>
                      </td>
                   </tr>
                </table></td>
            </tr>
            <?php
		}
	}
	else
	{
?>
            <tr> <td align="center" class="">No Images </td>
              
                
                 
            </tr>
            <?php
	}
?>
          </table>
						
						
						</div>
		  
		  
		         
<?php cmsfooter()?>


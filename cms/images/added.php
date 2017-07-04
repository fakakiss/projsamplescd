<?php
    require('../../lib_files/private.inc.php');
	require('../../lib_files/settings.inc.php');
	require('settings.inc.php');
	
    $q   = "select * from images order by updated desc limit 0,1";
    $rst = mysql_query($q) or die(mysql_error());
?>

<!DOCTYPE html PUBLIC "-//W3C//Dtd html 4.0 transitional//EN">
<html>
<link href="../css/style.css" rel="stylesheet" type="text/css">
<head><title><?php echo $clientname;?> | Added Image</title>
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<META content="MShtml 6.00.2600.0" name=GENERATOR>
</head>

<body leftMargin=0 topMargin=0 marginwidth="0" marginheight="0">

<?php cmshead($privite_site_width,$privite_nav_width,$_sess_username,$_user_rights)?>


		  
		  <div style="padding:10px">
		  
		 <?php top_module($manager,$add,$view,$viewcat,$addcat,$_sess_username,$_user_rights);?>
					  
		  
		  <table border="0"  cellpadding="0" cellspacing="0"   class="cms_text">
		  
          <?php if(mysql_num_rows($rst) > 0){while($row = mysql_fetch_array($rst)){?>

         <tr> 
              <td > 
			  
			  <table border="0" cellspacing="0" cellpadding="0"  class="cms_text" >
			  
			  
			  
			  
			  
			  <tr><td>
			  
			  
			 <table  class="cms_text"><tr><td width="111">
					
                            <span class="">Image Name:</span></td><td width="269"><span class=""> 
                            <?php echo stripslashes($row['name'])?></span>
                            </td></tr>
							
							<?php if(!empty($row['caption'])) { ?>
		<tr><td>
                            <span class="">Image Caption: </span></td>
                <td> 
                  
                  <?php echo ucfirst($row['caption'])?>
                 
                </td>
              </tr>
			   <?php } ?>
							
							
							
							
		<?php if(!empty($row['img_descrip'])) { ?>
		<tr><td>
                            <span class="">Image Description: </span></td>
                <td> 
                  
                  <?php echo ucfirst($row['description'])?>
                 
                </td>
              </tr>
			   <?php } ?>
			  <tr><td></td><td>
                              <div class="readmore_bottoms" style="padding-top:5px">
							  <a href="edit.php?id=<?php echo $row[0]?>">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							  <a href="delete.php?id=<?php echo $row[0]?>">Delete</a>
							 
</div>
								</td></tr></table>
			  
			  
			  <td/></tr>
			  
			  
                  <tr>
				  
          <td width=150 valign="top" height="130">
		  
		  
		    <?php
 if (!$max_width)
    $max_width  = 350;
 if (!$max_height)
    $max_height =  300;
	
 $the_real_image = "../../uploads/images/".$row['name'];
 $size   = GetImageSize($the_real_image);
 $width  = $size[0];
 $height = $size[1];

 $x_ratio = $max_width / $width;
 $y_ratio = $max_height / $height;

 if (($width  <= $max_width) && ($height <= $max_height)) {
    $tn_width  = $width;
    $tn_height = $height;
    }
 else if (($x_ratio * $height) < ($max_height)) {
    $tn_height = ceil($x_ratio * $height);
    $tn_width  = $max_width;
    }
 else {
    $tn_width  = ceil($y_ratio * $width);
    $tn_height = $max_height;  
    }
	?>
	
	 <img src="../../uploads/images/<?php echo $row['name']?>" width="<?php echo "$tn_width";?>" height="<?php echo "$tn_height";?>"  class="cms_image_border">
		
		
		
		
		</td> 
                   
                   </tr>
                </table>
				
				</td>
            </tr>
            <?php
		}
	}
	else
	{
?>
            <tr> 
              <td align="center" >No Images 
                
                 </td>
            </tr>
            <?php
	}
?>
          </table>
		  
		  </div>
		  
		  </div>
		  
		
		  
		
  
  <?php cmsfooter()?>
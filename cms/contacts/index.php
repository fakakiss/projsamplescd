<?php
	require('../../lib_files/private.inc.php');
	require('../../lib_files/settings.inc.php');
	require('settings.inc.php');
	

	
		
	$q = "select * from feedback_form order by updated desc";
	$rst = mysqli_query($conn,$q) or die(mysqli_error());	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//Dtd html 4.0 transitional//EN">
<html>

<link href="../css/style.css" rel="stylesheet" type="text/css">

<head><title><?php echo $clientname;?> | Feedback Central | </title></head>


<body>

<?php cmshead($privite_site_width,$privite_nav_width,$_sess_username,$_user_rights)?>

<div style="padding:10px"> 
		  
	<?php top_module($manager,$add,$view,$viewcat,$addcat,$_sess_username,$_user_rights);?>

							<div style="padding-top:10 ">
							

                                <table  border="0"  class="cms_text" >
                                 
	            <?php if(mysqli_num_rows($rst) > 0){while($row = mysqli_fetch_array($rst)){?>
	
		
		

                                  <tr> 
                                    <td valign="top">
									
									
									   <table width="0" border="0" cellspacing="0" cellpadding="0">
                                         <tr>
										 
                                          
										   
                                           <td valign="top" >
										   
										 
											<table width="0" border="0" cellspacing="0" cellpadding="0" class="cms_text">
                                        		<tr>
                                        			<td width="150"><div class="cms_text" style="font-size:14px;font-weight:bold;padding-bottom:5px"><?php echo $row['firstname']?>  <?php echo $row['surname']?></div></td> 
                                                    
                                                    <td width="250"><?php echo $row['cell']?></td>									  							                                          	
                                        			<td width="250"><?php echo $row['email']?></td>
                                                    
                                                    <td width="250"><div><?php echo $row['updated']?></div></td>
													
                                        			                                        			
                                        			
													<td width="50"><div class="readmore_bottoms" style="padding-bottom:10px;padding-top:5px"><a href="delete.php?id=<?php echo $row[0]?>">Delete</a></div>  
                    </td> 
                                        		</tr>
                                        	</table>
											<div class="cms_text"><?php echo $row['text15']?></div>
											
										   </td>
										  
										   
										   
										   
										   
                                         </tr>
                                       </table>

									 
                                      
                                        
                                     
									  
									  </td>
                                  </tr>
								  
                                  <?php }}else {?>
		
                                  <tr> 
                                    <td  class="cms_text">No Item.</td>
                                  </tr>
								
                                  <?php }?>
								  
                                </table>
								
								
                            </div>
				
                    
						
						</div>
						
			
	                  
         </td></tr></table>
			  
</td></tr></table>
        
<?php cmsfooter();?>
   
</body>
</html>

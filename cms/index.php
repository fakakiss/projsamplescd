<?php
  
	require('../lib_files/settings.inc.php');
	require('../lib_files/cms_output_fns.php');
	$err =  $_REQUEST['l'];
	$err_msg = "";
	
	
	
	if    ($err == md5("NO"))
	      {$err_msg = "<span style=\"color:#FF0000\">Incorrect Login Information !</span>";}
    else  {$err_msg = "Welcome to your Content Management System.<br>Please Login.";}
	
	
	$today = date("Ymd"); 

	$xxxdate = "20201110";
	
?>


<html>

	<link href="css/style.css" rel="stylesheet" type="text/css">
	<head><title><?php echo $clientname;?> | Login</title></head>

	<body leftMargin=0px topMargin=0px marginwidth=0px marginheight=0px onLoad="document.forms[0].elements[0].focus()">

		<table width="<?php echo SITEWIDTH;?>"  border="0" cellspacing="0" cellpadding="0" bgcolor="#f3e32b">
  			<tr>
    			<td><div align="left" style="padding-left:10px"><a href="../" target="_blank"><img src="cms_images/client_logo.gif" border="0"></a></div></td> 
    			<td><div align="right" style="padding-right:10px"><a href="http://www.fakacolin.com" target="_blank"><img src="cms_images/fakacolin_logo.gif" border="0"></a></div></td>
  			</tr>
  			<tr><td height="1px" colspan="2" width="<?php echo SITEWIDTH;?>" bgcolor="#022992"></td></tr>
		</table>


		<table cellSpacing=0 cellPadding=0 width="<?php echo SITEWIDTH;?>" border=0  bgcolor="#f3e32b">        
        	<tr>
          		<td valign=top>		  
			  		<table  border="0" cellspacing="0" cellpadding="0">                   
                    	<tr>
					  		<td><div style="padding-top:20px; padding-left:20px; padding-right:20px; padding-bottom:20px"><img src="cms_images/logingin.jpg" width="160px" height="144px" border="1" style=" border-color:#022992"></div>
                            </td> 
                      		<td>
                            
                            <?php if (!($xxxdate <= $today)){?>
                             
                            					  
					  			<div class="body" style="padding-top:20px;"><strong><?php echo $err_msg?></strong></div>
                               
									<form action="verify/verify.php" method="post" name="login" id="login">
                                    	<table cellspacing=0 cellpadding=3 width="100%" border=0>
                                        	<tr><td colspan="2"></td></tr>
                                          	<tr>
                                            	<td width=90 class=style2 body><strong class="body">Username</strong></td>
                                            	<td class=itg-body><input name="_user" class="body" size=30 maxlength=60></td> 
                                          	</tr>
                                          	<tr>
                                            	<td width=90 class=style2 body><strong class="body">Password</strong></td>
                                            	<td class=itg-body><input name="_pass" type=password class="body" size=30></td>
                                          	</tr>
                                          	<tr>
                                            	<td class=itg-body></td>
                                            	<td class=itg-body><input type="submit" class="butt" value="Login"><input type="hidden" name="send" value="OK"></td>                                              
                                          	</tr>
                                        </table>
									  </form>
                                      
                                      
                                      
                                    <?php }   
									else
										{
											echo "<div class=deepred>SYSTEM COMPLETLY DISABLED!!!<br><br></div>";
								   			
										}?>
                                      	  
					   				</td>
                    			</tr>                
               				</table>
		  
		  				</td>
       				</tr>		
				</table>     
				  	    
		<?php cmsfooter()?>  
	</body>
</html>

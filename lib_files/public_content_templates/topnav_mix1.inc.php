<style type="text/css">
	.toplinks:link 		{font-family:Verdana; font-size:10px; font-weight:bold; text-decoration:none; color:#213480 }
	.toplinks:visited 	{font-family:Verdana; font-size:10px; font-weight:bold; text-decoration:none; color:#213480 }
	.toplinks:hover 	{font-family:Verdana; font-size:10px; font-weight:bold; text-decoration:underline; color:#213480 }
	.toplinks:active 	{font-family:Verdana; font-size:10px; font-weight:bold; text-decoration:none; color:#213480 }
	
	.bar				{font-family:Verdana; font-size:10px; font-weight:bold; text-decoration:none; color:#213480 }
</style>

<div class="bar" align="center">
    <a class="toplinks" href="index.php?page_ren=33<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Home</a> |
    <a class="toplinks" href="index.php?page_ren=47<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">About Us</a> |
    <a class="toplinks" href="index.php?page_ren=34<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Products</a> |
    <a class="toplinks" href="index.php?page_ren=35<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Services</a> |
	<a class="toplinks" href="index.php?page_ren=37<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Accolades</a> | 
    <a class="toplinks" href="catalog/"><span style="color:#F00">Online Shop !!!</span></a> |  
    <a class="toplinks" href="index.php?page_ren=40<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Contact Information</a> |    
    <a class="toplinks" href="index.php?page_ren=36<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Requests & Enquires</a> |   
    <a class="toplinks" href="index.php?page_ren=45<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Team Of Experts</a> |    
    <a class="toplinks" href="index.php?page_ren=46<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Employment</a> |    
    <a class="toplinks" href="index.php?page_ren=44<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">News & Press</a> |   
 	
    
    <?php if( !($log == md5("YES")) )  {?>
    	<a class="toplinks" href="index.php?spage_ren=14<?php if($log==md5(YES)){echo "&&xl1=$log";}?>" style="color:#F00">LOGIN</a>
    <?php }?>
    
     <?php if( $log == md5("YES") ){?>
     	<a class="toplinks" href="lib_files/account_lib_files/logout.php"><strong style="color:#FF0000">LOG OUT</strong></a>
    <?php }?>
</div>
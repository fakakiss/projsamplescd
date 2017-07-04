<div  style="padding-left:0px; padding-bottom:0px; padding-top:10px">

	<ul id="navmenu_v">
    
    	<li><a style="color:#00F">PRODUCT CATEGORIES</a></li>

		<?php 
                $q_nav = "select * from pages where showitem=1 and category=43 order by lp asc";
                $rst_nav = mysql_query($q_nav) or die(mysql_error());
                if(mysql_num_rows($rst_nav) > 0){while($row_nav = mysql_fetch_array($rst_nav))
        {?>

        	<li>
                <a 
                    href="index.php?spage_ren=<?php echo $row_nav[0]?><?php if($log==md5(YES)){echo "&&xl1=$log";}?>"
                    style="	font-family:Verdana;<?php if($subpagecode==$row_nav[0]){echo "font-weight:bold";}?>;
                            color:<?php if($subpagecode==$row_nav[0]){echo "#21317f";}?>;
                            font-size:<?php if($subpagecode==$row_nav[0]){echo "10px";}?>"
                >          
              
            		<?php echo $row_nav['img5link']?> 
             
            	</a>
        	</li>
    

     	<?php }}else {?>
                
     		<li><strong>No Links</strong></li>
                
     	<?php }?> 
     
     </ul>

</div>
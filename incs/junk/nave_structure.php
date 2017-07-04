<li>

    <a href="index1.php?page_ren=75">Products & Pricing</a>
    
        <ul>
        
        
            <li>
            
                <a href="index1.php?spage_ren=20">CCTV</a>
                
                    <ul>
                        <?php  
                            $q_pages_ltns = "select * from pagelistings where category=75 and subcategory=20 and showitem=1 order by lp asc";
                            $rst_pages_ltns = mysql_query($q_pages_ltns) or die(mysql_error());
                            if(mysql_num_rows($rst_pages_ltns) > 0){while($row_pages_ltns = mysql_fetch_array($rst_pages_ltns))
                        {?>
                            <li><a href="index3.php?lpage_ren=<?php echo $row_pages_ltns[0];?>"><?php echo $row_pages_ltns['caption']?></a></li>    
                        <?php }}else {?><?php }?> 
                    </ul>
                    
            </li>
            
           
        </ul>
    
</li>
<ul class="sf-menu">
        
        
        
        
        

            <li><a href="index.php">Home</a></li>

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
    
  
    
                    <li>
                        <a href="index1.php?spage_ren=13">PABX</a>
                        <ul>

                            <?php  
                                $q_pages_ltns = "select * from pagelistings where category=75 and subcategory=13 and showitem=1 order by lp asc";
                                $rst_pages_ltns = mysql_query($q_pages_ltns) or die(mysql_error());
                                if(mysql_num_rows($rst_pages_ltns) > 0){while($row_pages_ltns = mysql_fetch_array($rst_pages_ltns))
                            {?>
                                <li><a href="index.php?lpage_ren=<?php echo $row_pages_ltns[0];?>"><?php echo $row_pages_ltns['caption']?></a></li>    
                            <?php }}else {?><?php }?> 

                        </ul>
                    </li>
   
   
   
                    <li>
                        <a href="index1.php?spage_ren=19">Copiers</a>
                        <ul>
                            <?php
                                $mpid=75;
                                $spid=19;
                                
                                $result_listings = mysql_query("select id,caption from pagelistings where category='$mpid' and subcategory='$spid' and showitem=1 order by lp asc");
                                if (!$result_listings) 
                                    {
                                        echo 'Could not run query: ' . mysql_error();
                                        exit;
                                    }
                                if (mysql_num_rows($result_listings) > 0) 
                                    {
                                        while ($row_listings = mysql_fetch_assoc($result_listings)) 
                                        {
                                            echo "<li>";
                                            echo "<a href=\"index3.php?lpage_ren=$row_listings[0]\">";
                                                print_r($row_listings['caption']);
                                            echo "</a>";	
                                            echo "</li>";
                                        }
                                }
                            ?>
                        </ul>
                    </li>
                    <li><a href="index2.php?spage_ren=75">Access Control</a></li>
                    <li><a href="index2.php?spage_ren=75">IT</a></li>
                    <li><a href="index2.php?spage_ren=75">Telematics</a></li>
                    <li><a href="index2.php?spage_ren=75">Gateway</a></li>
                    <li><a href="index2.php?spage_ren=75">Voice & Data</a></li>
                </ul>
            </li>





            <li>
                <a href="index1.php?page_ren=59">Services</a>
                <ul>
                    <li><a href="index2.php">Networking</a></li>
                    
                    
                    <li>
                        <a href="index2.php?spage_ren=75">Web Development</a>
                        <ul>
                            
                            <?php  
                                $q_pages_ltns = "select * from pagelistings where category=59 and subcategory=25 and showitem=1 order by lp asc";
                                $rst_pages_ltns = mysql_query($q_pages_ltns) or die(mysql_error());
                                if(mysql_num_rows($rst_pages_ltns) > 0){while($row_pages_ltns = mysql_fetch_array($rst_pages_ltns))
                            {?>
                                <li><a href="index3.php?lpage_ren=<?php echo $row_pages_ltns[0];?>"><?php echo $row_pages_ltns['caption']?></a></li>    
                            <?php }}else {?><?php }?> 

                        </ul>
                    </li>
                    <li><a href="index2.php?spage_ren=75">Training</a></li>
                    <li><a href="index2.php?spage_ren=75">Social Responsibility</a></li>
                    <li><a href="index2.php?spage_ren=75">Technical Support</a>	
                    <li><a href="index2.php?spage_ren=75">IT Services</a></li>
                    <li><a href="index2.php?spage_ren=75">Neotel</a></li>
                    <li><a href="index2.php?spage_ren=75">Testimonials</a></li>
                    <!--<li><a href="index.php">404 Error Page</a></li> -->
                    
                    
                </ul>
            </li>


            <li>
                <a href="index1.php?page_ren=69">Accolades</a>
                <ul>
                
                
                     <?php  
                            $q_pages_subs = "select * from pages where category=69 and showitem=1 order by lp asc";
                            $rst_pages_subs = mysql_query($q_pages_subs) or die(mysql_error());
                            if(mysql_num_rows($rst_pages_subs) > 0){while($row_pages_subs = mysql_fetch_array($rst_pages_subs))
                     {?>
                            <li><a href="index1.php?spage_ren=<?php echo $row_pages_subs[0];?>"><?php echo $row_pages_subs['caption']?></a></li>    
                     <?php }}else {?><?php }?>
                    
                    
                </ul>
            </li>

            <li>
                <a href="index1.php?page_ren=68">About Us</a>
                <ul>
                
                     <?php  
                            $q_pages_subs = "select * from pages where category=68 and showitem=1 order by lp asc";
                            $rst_pages_subs = mysql_query($q_pages_subs) or die(mysql_error());
                            if(mysql_num_rows($rst_pages_subs) > 0){while($row_pages_subs = mysql_fetch_array($rst_pages_subs))
                     {?>
                            <li><a href="index1.php?spage_ren=<?php echo $row_pages_subs[0];?>"><?php echo $row_pages_subs['caption']?></a></li>    
                     <?php }}else {?><?php }?>
                    
                    
                </ul>
            </li>
            


            <li>
                <a href="index1.php?page_ren=63">Contact Us</a>
                  <ul>
                
                     <?php  
                            $q_pages_subs = "select * from pages where category=63 and showitem=1 order by lp asc";
                            $rst_pages_subs = mysql_query($q_pages_subs) or die(mysql_error());
                            if(mysql_num_rows($rst_pages_subs) > 0){while($row_pages_subs = mysql_fetch_array($rst_pages_subs))
                     {?>
                            <li><a href="index1.php?spage_ren=<?php echo $row_pages_subs[0];?>"><?php echo $row_pages_subs['caption']?></a></li>    
                     <?php }}else {?><?php }?>
                    
                    
                </ul>
            
            </li>
            

            <li class="search_icon"> 
                <a href="#">Search</a>
                <div>
                    <form action="#" method="get">
                      <input type="text" name="s" id="s" value="Search..." onBlur="if (this.value == ''){this.value = 'Search...'; }" onFocus="if (this.value == 'Search...') {this.value = '';}" />
                    </form>
                </div>
            </li>
            
        </ul>
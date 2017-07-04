<?php  
	$q_pages_ltns = "select * from pagelistings where category='$cat' and subcategory='$subcat' and showitem=1 order by lp asc";
	$rst_pages_ltns = mysql_query($q_pages_ltns) or die(mysql_error());
	if(mysql_num_rows($rst_pages_ltns) > 0){while($row_pages_ltns = mysql_fetch_array($rst_pages_ltns))
{?>
    <li><a href="index.php?lpage_ren=<?php echo $row_pages_ltns[0];?>"><?php echo $row_pages_ltns['caption']?></a></li>    
<?php }}else {?><?php }?> 

<br><br>

<?php

    function get_page_listings($page_id,$subpageid)
        {  
			
			$q_pages_ltns = "select * from pagelistings where category='$cat' and subcategory='$subcat' and showitem=1 order by lp asc";
			$rst_pages_ltns = mysql_query($q_pages_ltns) or die(mysql_error());
			if(mysql_num_rows($rst_pages_ltns) > 0){while($row_pages_ltns = mysql_fetch_array($rst_pages_ltns));}
			
            $pagelistingname=$row_pages_ltns['caption'];
			
			$the_l_link="<li><a href=\"index.php?lpage_ren=$row_pages_ltns[0]\">$pagelistingname</a></li>";
			
            return $the_l_link; 
        }
		
		
		get_page_listings($page_id,$subpageid);
		
		
		$render_pagelisting_links1 = get_page_listings(75,13);
                                                echo $render_pagelisting_links1;
?>






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
				echo "<a href=\"index.php?lpage_ren=$row_listings[0]\">";
					print_r($row_listings['caption']);
				echo "</a>";	
				echo "</li>";
			}
	}
?>


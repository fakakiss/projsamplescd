<div class="demo">
    <div id="tabs">

        <ul>
        
        	<?php 
                $q_nav = "select * from pages where showitem=1 and category=43 order by lp asc";
                $rst_nav = mysql_query($q_nav) or die(mysql_error());
                if(mysql_num_rows($rst_nav) > 0){while($row_nav = mysql_fetch_array($rst_nav))
        	{?>

            	<li><a href="#tabs-<?php echo $row_nav[0]?>"><?php echo $row_nav['img5link']?></a></li>
            
            <?php }}else {?>
                
     			<li><strong>No Links</strong></li>
                
     		<?php }?>
            

        </ul>
        
        
        <?php 
                $q_content = "select * from pages where showitem=1 and category=43 order by lp asc";
                $rst_content = mysql_query($q_content) or die(mysql_error());
                if(mysql_num_rows($rst_content) > 0){while($row_content = mysql_fetch_array($rst_content))
        {?>

            <div id="tabs-<?php echo $row_content[0]?>">       
                <?php include('lib_files/public_content_templates/tab_page_content1.inc.php')?>	    	
            </div>
        
        <?php }}else {?>               
     		<div><strong>No Content</strong></div>               
     	<?php }?>
        
        
        
        
  

	</div>
</div>
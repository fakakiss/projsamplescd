<div style=" padding-left:10px">
        
					<?php
            
                        $q_leads_details        = 	"select * from reps where id='$lid'";
                        $rst_leads_details     	= 	mysql_query($q_leads_details) or die(mysql_error());
                        if(mysql_num_rows($rst_leads_details)>0){$row_leads_details=mysql_fetch_array($rst_leads_details) or die(mysql_error());}
                
                    ?>
        

                    <div style="font-size:18px; font-weight:bold; color:#0C0 ;padding-bottom:10px; padding-top:10px">
                        
                        <?php echo $row_leads_details['img5link']?>
                    </div>
                    
                    
                    
                     
                    
                     <div style="font-size:12px; font-weight:bold; color: #000 ;padding-bottom:4px">
                        <span style="font-size:10px; color:#000; font-weight:normal">Date: </span>
                        <?php echo $row_leads_details['date']?>
                    </div> 
            
                     <div style="font-size:12px; font-weight:bold; color:#0C0 ;padding-bottom:4px">
                     
                        
                        <span style="font-size:10px; color:#000; font-weight:normal">Industry: </span>
                        
                        <?php
                        
                        $industry_id			=	$row_leads_details['language'];
            
                        $q_industry        		= 	"select * from language where id='$industry_id'";
                        $rst_industry     		= 	mysql_query($q_industry) or die(mysql_error());
                        if(mysql_num_rows($rst_industry)>0){$row_industry=mysql_fetch_array($rst_industry) or die(mysql_error());}
                
                    	?>
                        
                        <?php echo $row_industry['caption']?>
                        
                    </div> 
                    
                    <div style="font-size:12px; font-weight:bold; color:#0C0 ;padding-bottom:4px">
                        <span style="font-size:10px; color:#000; font-weight:normal">Province: </span>
                        
                        <?php
                        
                        $province_id			=	$row_leads_details['capt5'];
            
                        $q_province        		= 	"select * from sa_province where province_id='$province_id'";
                        $rst_province     		= 	mysql_query($q_province) or die(mysql_error());
                        if(mysql_num_rows($rst_province)>0){$row_province=mysql_fetch_array($rst_province) or die(mysql_error());}
						
						?>
                        
                         <?php echo $row_province['province']?>
                    </div>   
            
                    <div style="font-size:12px; font-weight:bold; color:#0C0 ;padding-bottom:4px">
                        <span style="font-size:10px; color:#000; font-weight:normal">Area: </span>
                        
                        
                        <?php 
						
							$area_id			= $row_leads_details['lp'];
				
							$q_area        		= 	"select * from sa_area where area_id='$area_id'";
							$rst_area     		= 	mysql_query($q_area) or die(mysql_error());
							if(mysql_num_rows($rst_area)>0){$row_area=mysql_fetch_array($rst_area) or die(mysql_error());}
							
							echo $row_area['area'];
						
						?>
                        
                    </div>  
                    
                     <div style="font-size:12px; font-weight:bold; color:#0C0 ;padding-bottom:4px">
                        <span style="font-size:10px; color:#000; font-weight:normal">Physical Address: </span>
                        <?php echo $row_leads_details['caption9']?>
                    </div> 
                    
                     <div style="font-size:12px; font-weight:bold; color:#0C0 ;padding-bottom:4px">
                        <span style="font-size:10px; color:#000; font-weight:normal">LandMark/s: </span> 
                        <?php echo $row_leads_details['caption8']?>
                    </div> 
                    
                     <div style="font-size:12px; font-weight:bold; color:#0C0 ;padding-bottom:4px">
                        <span style="font-size:10px; color:#000; font-weight:normal">Office Tel: </span>
                        <?php echo $row_leads_details['caption6']?>
                    </div> 
                    
                     <div style="font-size:12px; font-weight:bold; color:#0C0 ;padding-bottom:4px">
                        <span style="font-size:10px; color:#000; font-weight:normal">Fax Number: </span>
                        <?php echo $row_leads_details['caption7']?>
                    </div> 
                    
                     <div style="font-size:12px; font-weight:bold; color:#0C0 ;padding-bottom:4px">
                        <span style="font-size:10px; color:#000; font-weight:normal">Primary Contact Name: </span>
                        <?php echo $row_leads_details['caption']?>
                    </div> 
                    
                     <div style="font-size:12px; font-weight:bold; color:#0C0 ;padding-bottom:4px">
                        <span style="font-size:10px; color:#000; font-weight:normal">Primary Contact Title: </span>
                        <?php echo $row_leads_details['caption1']?>
                    </div> 
                    
                     <div style="font-size:12px; font-weight:bold; color:#0C0 ;padding-bottom:4px">
                        <span style="font-size:10px; color:#000; font-weight:normal">Primary Contact Position: </span>
                        <?php echo $row_leads_details['caption2']?>
                    </div> 
                    
                     <div style="font-size:12px; font-weight:bold; color:#0C0 ;padding-bottom:4px">
                        <span style="font-size:10px; color:#000; font-weight:normal">Primary Contact Cell: </span>
                        <?php echo $row_leads_details['caption3']?>
                    </div>
                    
                     <div style="font-size:12px; font-weight:bold; color:#0C0 ;padding-bottom:4px">
                        <span style="font-size:10px; color:#000; font-weight:normal">Primary Contact Email: </span>
                        <?php echo $row_leads_details['caption4']?>
                    </div>
                    
                    
                    <div style="font-size:12px; font-weight:bold; color:#0C0 ;padding-bottom:10px">
                        <span style="font-size:10px; color:#000; font-weight:normal">Products: </span>
                        <?php if ($row_leads_details['capt4']==1) 		{echo "CCTV"."&nbsp;&nbsp;";}?>
                        <?php if ($row_leads_details['caption5']==1) 	{echo "PABX"."&nbsp;&nbsp;";}?> 
                        <?php if ($row_leads_details['img3link']==1) 	{echo "COPIERS"."&nbsp;&nbsp;";}?>
                        <?php if ($row_leads_details['img4link']==1) 	{echo "IT"."&nbsp;&nbsp;";}?>
                    </div>
                    
                    
                    <div style="padding-bottom:10px">
                    	<?php include('lib_files/member_content_templates/logs/add_log1.inc.php')?>        
                    </div>
                    
                    <div style="padding-bottom:10px">
                    	<?php include('lib_files/member_content_templates/logs/my_logs.inc.php')?>        
                    </div>
                    

</div>
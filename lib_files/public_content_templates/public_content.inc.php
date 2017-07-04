<div style="padding-left:10px; padding-top:5px; padding-right:10px">

    
    
     <?php if($pagecatcode==333) {?>
     
     	<table width="980px" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td valign="top"><?php include('featured-content-slider/index.inc.php')?></td>
            <td valign="top">
           		<div align="justify" style=" padding-left:10px;padding-right:10px; padding-top:15px">
            		<?php include('lib_files/public_content_templates/page_content1.inc.php')?>
        		</div>    
            </td>
          </tr>
          <tr>
          	<td colspan="2" ><?php //include('yola.inc.php')?></td>
          </tr>
        </table>


     <?php }?>
     
     
     <!-- Internal General Links -->
    <?php if ( ($log == md5("YES"))  ) {?>
        
              	<div align="center" >
            
            <a href="index.php?page_ren=51&&xl1=7469a286259799e5b37e5db9296f00b3">General</a>
            
            
                
                    <?php 
						$q_nav = "select * from pages where showitem=1 and category=51 order by lp asc";
						$rst_nav = mysql_query($q_nav) or die(mysql_error());
						if(mysql_num_rows($rst_nav) > 0){while($row_nav = mysql_fetch_array($rst_nav))
        			{?>
                       
                           | <a href="index.php?spage_ren=<?php echo $row_nav[0]?><?php if($log==md5(YES)){echo "&&xl1=$log";}?>"><?php echo $row_nav['img5link']?></a>                             
                        
					<?php }}else {?>                            
                        <div><strong>No Links</strong></div>      
                    <?php }?> 
                    
              
            
            </div>
        
    <?php }?>
     
     
    
    <!-- Main Page Content -->
    <?php if((!empty($pagecatcode)) && ($subpagecode == 0) && ($detailid==0) && (!($pagecatcode==33)) ){?>
        <div align="justify" style=" padding-left:10px;padding-right:10px">
            <?php include('lib_files/public_content_templates/page_content1.inc.php')?>
        </div>    
    <?php }?>
    
    <!-- Login Welcome Page -->
    <?php if ( ($log == md5("YES")) &&  ($pagecatcode==51 ) && ($detailid==0)  ) {?>
        <?php if ( ($log == md5("YES")) && ($is_Telesales=="1") && !($is_Admin=="1")  ) {?>
            <a href="index.php?spage_ren=24<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">	   	
                <img src="images/add_lead.gif" border="0"  />
            </a>
        <?php }?>
    <?php }?>
    
    
    
                                    <!--Site Pages Content -->
    
    <?php if( (!empty($subpagecode)) && (empty($pagecatcode))   ){?>
        <div align="justify" style=" padding-left:10px;padding-right:10px">
            <?php include('lib_files/public_content_templates/page_content1.inc.php')?>
        </div>    
    <?php }?>
    
    <?php if($pagecatcode==33){?>
        <!-- 
            <img src="images/logos.jpg" border="0" usemap="#Map" />  
         -->
    <?php }?>
    
    <?php if(!empty($detailid)){?> 
        <?php include('lib_files/public_content_templates/general_details1.inc.php')?> 
    <?php }?>
                            
    <?php if($pagecatcode==35&&$detailid==0){?>
        <?php include('lib_files/public_content_templates/news1.inc.php')?>
    <?php }?>
    
    <?php if($pagecatcode==36&&$detailid==0){?>
        <div style="padding-top:0px">
            <?php include('lib_files/public_content_templates/enquiry_form.inc.php')?>
        </div>
    <?php }?>
    
    <?php if($pagecatcode==39&&$detailid==0){?>
        <div style="padding-top:0px">
            <?php include('lib_files/public_content_templates/feedback_form1.inc.php')?>
        </div>
    <?php }?>
    
    
    <?php if($subpagecode==14&&$detailid==0){?>
        <div style="padding-top:0px">
            <?php include('lib_files/public_content_templates/login.inc.php')?>
        </div>
    <?php }?>
    
    
    
    <?php if($subpagecode==18&&$detailid==0){?>
        <div style="padding-top:0px">
            <?php include('lib_files/public_content_templates/employee_assessment.inc.php')?>
        </div>
    <?php }?>
    
    
    <!-- NAC Main Products -->
    
    <?php include('lib_files/public_content_templates/nac_main_products.inc.php')?>

    <?php if($pagecatcode==34&&$detailid==0){?>
        <div style="padding-top:0px">
            <?php include('lib_files/public_content_templates/products.inc.php')?>
        </div>
    <?php }?> 
    
    <?php if($pagecatcode==35&&$detailid==0){?>
        <div style="padding-top:0px">
            <?php include('lib_files/public_content_templates/services.inc.php')?>
        </div>
    <?php }?>


</div>  

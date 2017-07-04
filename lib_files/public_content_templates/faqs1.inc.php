<?php 
    $q_page_faqs           = "select * from pagelistings where showitem='1' and category='$pagecatcode' order by updated desc limit 0,20";
    $rst_page_faqs         = mysql_query($q_page_faqs) or die(mysql_error());
?>
<?php if(mysql_num_rows($rst_page_faqs)>0){while($row_page_faqs = mysql_fetch_array($rst_page_faqs)){?>
	                       				  		  
		<table border="0" cellspacing="0" cellpadding="0"  width="350" >
        	<tr>				 
                <td valign="top" >
					<div style="padding-top:0px"> 				
						<table class="bodytxt">					          													                      						            		
							<?php if(!empty($row_page_faqs['caption'])){?><tr><td class="clips">Question: <strong style="color:#00b7ff"><?php echo ucfirst($row_page_faqs['caption'])?></strong></td></tr><?php }?>																
							<?php if(!empty($row_page_faqs['intro_head'])){?><tr><td class="clipsintrohead">Answer: <?php echo $row_page_faqs['intro_head']?></td></tr><?php }?>                             
							<?php if(!empty($row_page_faqs['intro'])){?><tr><td class="clipsintrotxt"><?php echo $row_page_faqs['intro']?></td></tr><?php }?>
						</table>
					</div>						 
                 </td>
               </tr>
          </table>
		  <br>				
<?php }}else{?><?php }?>
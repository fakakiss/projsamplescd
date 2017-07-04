<?php 
    $q_page_team           = "select * from pagelistings where showitem='1' and category='27' order by lp asc limit 0,20";
    $rst_page_team         = mysql_query($q_page_team) or die(mysql_error());
?>
<?php if(mysql_num_rows($rst_page_team)>0){while($row_page_team = mysql_fetch_array($rst_page_team)){?>
	<?php $intro=trim($row_page_team['intro']);?>
	<?php if(!empty($row_page_team['caption_img']) && file_exists("uploads/images/".$row_page_team['caption_img'])){?>                         				  		  
		<table border="0" cellspacing="0" cellpadding="0" class="bodytxt">
        	<tr>				 
          		<td width=200 valign="top" height="200px">
		  			<?php
 						if (!$max_width_team)$max_width_team  = 300;  
 						if (!$max_height_team)$max_height_team =  200;    
 						$the_real_image_team = "uploads/images/".$row_page_team['caption_img'];
 						$size_team   = GetImageSize($the_real_image_team);
 						$width_team  = $size_team[0];
 						$height_team = $size_team[1];
 						$x_ratio_team = $max_width_team / $width_team;
 						$y_ratio_team = $max_height_team / $height_team;
 						if (($width_team  <= $max_width_team) && ($height_team <= $max_height_team)) { $tn_width_team  = $width_team;$tn_height_team = $height_team;}
 						else if (($x_ratio_team * $height_team) < ($max_height_team)) {$tn_height_team = ceil($x_ratio_team * $height_team);$tn_width_team  = $max_width_team; }
 						else {$tn_width_team  = ceil($y_ratio_team * $width_team);$tn_height_team = $max_height_team;} 
					?>
	 					<img src="uploads/images/<?php echo $row_page_team['caption_img']?>" width="<?php echo "$tn_width_team";?>" height="<?php echo "$tn_height_team";?>" class="site_image_border"><br>
		  		  <?php echo $row_page_team['caption1']?>
				</td> 
                <td valign="top" >
					<div style="padding-top:0px"> 				
						<table>					          													                      						            		
							<?php if(!empty($row_page_team['caption'])){?><tr><td class="clips"><a href="goodies_main_tpl1.php?did=<?php echo $row_page_team[0]?>&&page_ren=<?php echo $pagecatcode?>"><?php echo ucfirst($row_page_team['caption'])?></a></td></tr><?php }?>																
							<?php if(!empty($row_page_team['intro_head'])){?><tr><td class="clipsintrohead"><?php echo $row_page_team['intro_head']?></td></tr><?php }?>                             
							<?php if(!empty($row_page_team['intro'])){?><tr><td class="clipsintrotxt"><?php echo $row_page_team['intro']?></td></tr><?php }?>
							
						</table>
					</div>						 
                 </td>
               </tr>
          </table>
		  <br>				
	<?php }?>	
<?php }}else{?><?php }?>
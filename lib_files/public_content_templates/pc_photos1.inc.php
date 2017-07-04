<?php 
    $q_page_photos           = "select * from pagelistings where showitem='1' and category='$pagecatcode' order by updated desc limit 0,25";
    $rst_page_photos         = mysql_query($q_page_photos) or die(mysql_error());
?>

		<script language=javascript type=text/javascript>
			<!--
			var win=null;
			function NewWindow(mypage,myname,w,h,pos,infocus){
			if(pos=="random"){myleft=(screen.width)?Math.floor(Math.random()*(screen.width-w)):100;mytop=(screen.height)?Math.floor(Math.random()*((screen.height-h)-75)):100;}
			if(pos=="center"){myleft=(screen.width)?(screen.width-w)/2:100;mytop=(screen.height)?(screen.height-h)/2:100;}
			else if((pos!='center' && pos!="random") || pos==null){myleft=0;mytop=20}
			settings="width=" + w + ",height=" + h + ",top=" + mytop + ",left=" + myleft + ",scrollbars=no,location=no,directories=no,status=no,menubar=no,toolbar=no,resizable=no";win=window.open(mypage,myname,settings);
			win.focus();}
			//-->
		</script>
		
<?php if(mysql_num_rows($rst_page_photos)>0){while($row_page_photos = mysql_fetch_array($rst_page_photos)){?>
	<?php $intro=trim($row_page_photos['intro']);?>
	<?php if(!empty($row_page_photos['caption_img']) && file_exists("uploads/images/".$row_page_photos['caption_img'])){?>                         				  		  
		<table border="0" cellspacing="0" cellpadding="0"  width="420" >
        	<tr>				 
          		<td width=200px valign="top" height="140px">
		  			<?php
 						if (!$max_width_team)$max_width_team  = 300;  
 						if (!$max_height_team)$max_height_team =  200;    
 						$the_real_image_team = "uploads/images/".$row_page_photos['caption_img'];
 						$size_team   = GetImageSize($the_real_image_team);
 						$width_team  = $size_team[0];
 						$height_team = $size_team[1];
 						$x_ratio_team = $max_width_team / $width_team;
 						$y_ratio_team = $max_height_team / $height_team;
 						if (($width_team  <= $max_width_team) && ($height_team <= $max_height_team)) { $tn_width_team  = $width_team;$tn_height_team = $height_team;}
 						else if (($x_ratio_team * $height_team) < ($max_height_team)) {$tn_height_team = ceil($x_ratio_team * $height_team);$tn_width_team  = $max_width_team; }
 						else {$tn_width_team  = ceil($y_ratio_team * $width_team);$tn_height_team = $max_height_team;} 
					?>
                    
                    <?php if(!empty($row_page_photos['caption'])){?><a href="javascript:NewWindow('photogallary.php?id=<?php echo $row_page_photos[0]?>','','700','700','center','front')" class="bb"><b><?php echo ucfirst($row_page_photos['caption'])?></b></a><?php }?>
                    
	                <a href="javascript:NewWindow('photogallary.php?id=<?php echo $row_page_photos[0]?>','','700','700','center','front')"> 
	 					<img src="uploads/images/<?php echo $row_page_photos['caption_img']?>" width="<?php echo "$tn_width_team";?>" height="<?php echo "$tn_height_team";?>" class="site_image_border">
		  		    </a>
				</td> 
                <td valign="top" >
					<div style="padding-top:0px"> 				
						<table>					          													                      						            		
																							
							<?php if(!empty($row_page_photos['intro_head'])){?><tr><td class="clipsintrohead" valign="top"><?php echo $row_page_photos['intro_head']?></td></tr><?php }?>                             
							<?php if(!empty($row_page_photos['intro'])){?><tr><td class="clipsintrotxt" valign="top"><?php echo $row_page_photos['intro']?></td></tr><?php }?>
						</table>
					</div>						 
                 </td>
               </tr>
          </table>
		  <br>				
	<?php }?>	
<?php }}else{?><?php }?>
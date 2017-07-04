<?php function cmshead($privite_site_width,$privite_nav_width,$_sess_username,$_user_rights,$bgcolor="#f3e32b") {?>

	<table width="<?php echo SITEWIDTH;?>" border="0" cellspacing="0" cellpadding="0">
  		<tr>
    		<td bgcolor="<?php echo "$bgcolor" ?>">
            	<div align="left" style="padding-left:10px">
                	<img src="../cms_images/client_logo.gif">
                </div>
            </td>
			<td bgcolor="<?php echo "$bgcolor" ?>">
            	<div align="right" style="padding-right:10px">
            		<a href="http://www.fakacolin.com" target="_blank">
                    	<img src="../cms_images/fakacolin_logo.gif" border="0">
                    </a>
            	</div>
               </td>
  		</tr>
  		<tr bgcolor="#0000FF"><td height="1" colspan="2"></td></tr>
	</table>

	<table cellSpacing=0 cellPadding=0 width="<?php echo $privite_site_width;?>" border=0>
		<tr>
        
			<td valign=top width="<?php echo $privite_nav_width;?>" bgcolor="#f3e32b">
            	
				<?php 
					$_sess_usertype       =  0;
					$_user_rights         =  1;
					cmsnav($_sess_username,$_sess_usertype,$_user_rights);
				?>
            </td>
            		
			<td valign=top bgcolor="#ffffff">
		
				<table cellSpacing=0 cellPadding=0  border=0>
                
					<tr>
						<td valign=top bgcolor="#ffffff">

<?php }?>





<?php function cmsfooter() {?>

						</td>
					</tr>
				</table>
	
			</td>
		</tr>
	</table>

	<table cellSpacing=0 cellPadding=0 width="<?php echo SITEWIDTH;?>" border=0 class="cms_text">
		<tr bgcolor="#022992"><td height="1px"></td></tr>
		<tr bgcolor="#f3e32b"><td height="20px"><div align="right" style="padding-right:10px" class="created"><a href="http://www.fakacolin.com" target="_blank">Created by Fakacolin Web Ltd.</a></div></td></tr>
		<tr bgcolor="#022992"><td height="1px"></td></tr>
	</table>
       
</body></html>
<?php }?>









			
<?php function  navseed($cmslink,$url,$linkname) {?>
				
   	<tr>
       	<td width="140" height="10" class="sidelynx">
       		<a href="<?php echo "$cmslink";?><?php echo "$url";?>">
       			<div style="padding-left:10; padding-right:0; padding-bottom:3">
					<?php echo "$linkname";?>
            	</div>
            </a>
	   	</td>
	</tr>
    
<?php }?>
	 
	
	 
     
     
     
     
     
     
     
<?php function  divider($color,$groupname) {?>	
			
	<tr>
       <td width="140px" height="5"  bgcolor="<?php echo "$color";?>">
         <div style="padding-left:5; padding-right:0; padding-bottom:3; color:#FFFFFF; font-weight:bold; font-size:10px" ><?php echo "$groupname";?></div>
		   </td>
	 </tr>				  
	 
<?php }?>








<?php function  users($cmslink){?>		
	<tr>
        <td width="140px" height="10" class="sidelynx">
        	<a href="<?php echo "$cmslink";?>users/index.php"><div style="padding-left:10; padding-right:0; font-weight:normal">Users Module</div></a>
	   </td>
	 </tr>	
<?php }?>
	
    
    
    
	
<?php function  cmsnav($_sess_username,$_sess_usertype,$_user_rights){?>	

	<table width="125px" border="0" cellspacing="0" cellpadding="0" class="cms_text" bgcolor="#f3e32b">


        <!-- User Login Detials -->
        <tr>
            <td>
                <div style="padding-left:10px; padding-right:10px; padding-bottom:10px;">
                    Logged in as 
                    <strong>
                        <?php echo stripslashes($_sess_username)?><?php echo stripslashes($_user_rights)?>
                    </strong>
                </div>
            </td>
        </tr>
    
	
    
        <!-- General Links/home and users -->
        <tr>
            <td bgcolor="#022992">
                <div style="padding-left:5px; padding-right:0; padding-bottom:3px; color:#FFFFFF; font-weight:bold; font-size:10px">
                    General Links
                </div>
            </td>
        </tr>	
        <tr>
            <td class="sidelynx">
                <a href="<?php echo CMSLINK;?>main/index.php">
                    <div style="padding-left:10px; padding-right:0; padding-bottom:3px">Home</div>
                </a>
            </td>
       </tr>
   
   
   
	<?php if ($_user_rights == 1){?> 
    
     
   		<!-- System Users -->
        <tr>
            <td  class="sidelynx">
                <a href="<?php echo CMSLINK;?>users/index.php">
                    <div style="padding-left:10px; padding-right:0; padding-bottom:3px">
                    	System Users
                    </div>
                </a>
             </td>
        </tr>
    
    	
	
    
       	
		
   
 
 
 


    <!-- Sales 
    
    <tr><td bgcolor="#022992"><div style="padding-left:5px; padding-right:0; padding-bottom:3px; color:#FFFFFF; font-weight:bold; font-size:10px" >Employee Central</div></td></tr>
	<tr><td class="sidelynx"><a href="<?php echo CMSLINK;?>sales/index.php"><div style="padding-left:10px; padding-right:0; padding-bottom:3px">Employee Modules</div></a></td></tr>
    -->
    
    
    <!-- 
    
        <tr><td bgcolor="#022992"><div style="padding-left:5px; padding-right:0; padding-bottom:3px; color:#FFFFFF; font-weight:bold; font-size:10px" >Tele Sales Central</div></td></tr>
	<tr><td class="sidelynx"><a href="<?php echo CMSLINK;?>sales/index.php"><div style="padding-left:10px; padding-right:0; padding-bottom:3px">Tele Sales Modules</div></a></td></tr>
    
    
    -->



    	<?php if ($_user_rights == 1 or $_user_rights == 5 or $_user_rights == 6){?>
    
    
        <tr>
            <td bgcolor="#022992">
                <div style="padding-left:5px; padding-right:0; padding-bottom:3px; color:#FFFFFF; font-weight:bold; font-size:10px">
                    Leads/Feedback Centre
                </div>
             </td>
        </tr>
        <tr>
            <td class="sidelynx">
                <a href="<?php echo CMSLINK;?>contacts/index.php">
                    <div style="padding-left:10px; padding-right:0; padding-bottom:3px">
                        Leads/Feedback
                    </div>
                </a>
            </td>
        </tr>
            
    <?php }?>








 
     <!-- Pages --> 
	<tr><td bgcolor="#022992"><div style="padding-left:5px; padding-right:0; padding-bottom:3px; color:#FFFFFF; font-weight:bold; font-size:10px" >Site Pages Central</div></td></tr>
	<tr><td class="sidelynx"><a href="<?php echo CMSLINK;?>pages/index.php"><div style="padding-left:10px; padding-right:0; padding-bottom:3px">Page Modules</div></a></td></tr>
    
    
    
        

    

    
    
    <!-- Products 
    <tr><td bgcolor="#022992"><div style="padding-left:5px; padding-right:0; padding-bottom:3px; color:#FFFFFF; font-weight:bold; font-size:10px" >Products Central</div></td></tr>
	<tr><td class="sidelynx"><a href="<?php echo CMSLINK;?>products/index.php"><div style="padding-left:10px; padding-right:0; padding-bottom:3px">Products Modules</div></a></td></tr>
    --> 
    
    
    <!-- Services 
    
    <tr><td bgcolor="#022992"><div style="padding-left:5px; padding-right:0; padding-bottom:3px; color:#FFFFFF; font-weight:bold; font-size:10px" >Services Central</div></td></tr>
	<tr><td class="sidelynx"><a href="<?php echo CMSLINK;?>services/index.php"><div style="padding-left:10px; padding-right:0; padding-bottom:3px">Services Modules</div></a></td></tr>
    
--> 
    
    
    <!-- Web Develompment 
    
    <tr><td bgcolor="#022992"><div style="padding-left:5px; padding-right:0; padding-bottom:3px; color:#FFFFFF; font-weight:bold; font-size:10px" >IT/Web Develompment Central</div></td></tr>
	<tr><td class="sidelynx"><a href="<?php echo CMSLINK;?>web/index.php"><div style="padding-left:10px; padding-right:0; padding-bottom:3px">Client Modules</div></a></td></tr>
    -->
    
    

    
    
    
    <tr>
        	<td bgcolor="#022992">
        		<div style="padding-left:5px; padding-right:0; padding-bottom:3px; color:#FFFFFF; font-weight:bold; font-size:10px">
                	Uploads Center
                </div>
            </td>
        </tr>
                
		<tr>
        	<td class="sidelynx">
            	<a href="<?php echo CMSLINK;?>images/index.php">
                	<div style="padding-left:10px; padding-right:0; padding-bottom:3px">Images Modules</div>
                </a>
            </td>
        </tr>
                	
		<tr>
        	<td class="sidelynx">
            	<a href="<?php echo CMSLINK;?>docs/index.php">
                	<div style="padding-left:10px; padding-right:0; padding-bottom:3px">
                    	Documents Modules
                    </div>
                </a>
            </td>
        </tr>
        	
		<tr><td class="sidelynx"> <a href="<?php echo CMSLINK;?>audio/index.php"><div style="padding-left:10px; padding-right:0; padding-bottom:3px">Audio Modules</div></a></td></tr>	
        
		<tr><td class="sidelynx"> <a href="<?php echo CMSLINK;?>video/index.php"><div style="padding-left:10px; padding-right:0; padding-bottom:3px">Video Modules</div></a></td></tr>	
        
		<tr><td class="sidelynx"> <a href="<?php echo CMSLINK;?>packages/index.php"><div style="padding-left:10px; padding-right:0; padding-bottom:3px">Packages Modules</div></a></td></tr>	
        
		<tr><td class="sidelynx"> <a href="<?php echo CMSLINK;?>flash/index.php"><div style="padding-left:10px; padding-right:0; padding-bottom:3px">Flash Modules</div></a></td></tr>
        
        
                <!-- Options -->
    	<tr>
        	<td bgcolor="#022992">
            	<div style="padding-left:5px; padding-right:0; padding-bottom:3px; color:#FFFFFF; font-weight:bold; font-size:10px">
                	System Options
                </div>
            </td>
        </tr>
    
    	<tr>
        	<td  class="sidelynx">
            	<a href="<?php echo CMSLINK;?>options/index.php">
            		<div style="padding-left:10px; padding-right:0; padding-bottom:3px">
                    	Options
                    </div>
               	</a>
            </td>
        </tr>	
    
    
    




<?php }?>






	
	
	   
</table>

<?php }?>	

<?php function  searchnav(){?>
 	<div align="center"  class="sidelynx">						 
		<a href="index.php?obj=A">A</a>&nbsp;
      	<a href="index.php?obj=B">B</a>&nbsp;
      	<a href="index.php?obj=C">C</a>&nbsp;
      	<a href="index.php?obj=D">D</a>&nbsp;
      	<a href="index.php?obj=E">E</a>&nbsp;
      	<a href="index.php?obj=F">F</a>&nbsp;
      	<a href="index.php?obj=G">G</a>&nbsp;
      	<a href="index.php?obj=H">H</a>&nbsp;
      	<a href="index.php?obj=I">I</a>&nbsp;
      	<a href="index.php?obj=J">J</a>&nbsp;
      	<a href="index.php?obj=K">K</a>&nbsp;
      	<a href="index.php?obj=L">L</a>&nbsp;
      	<a href="index.php?obj=M">M</a>&nbsp;
      	<a href="index.php?obj=N">N</a>&nbsp;
      	<a href="index.php?obj=O">O</a>&nbsp;
      	<a href="index.php?obj=P">P</a>&nbsp;
      	<a href="index.php?obj=Q">Q</a>&nbsp;
      	<a href="index.php?obj=R">R</a>&nbsp; 
      	<a href="index.php?obj=S">S</a>&nbsp;
      	<a href="index.php?obj=T">T</a>&nbsp;
      	<a href="index.php?obj=U">U</a>&nbsp; 
      	<a href="index.php?obj=V">V</a>&nbsp;
      	<a href="index.php?obj=W">W</a>&nbsp;
      	<a href="index.php?obj=X">X</a>&nbsp;
      	<a href="index.php?obj=Y">Y</a>&nbsp;
      	<a href="index.php?obj=Z">Z</a>&nbsp;
      	<a href="index.php?obj=0">#</a>&nbsp;
	</div>
<?php }?>	
						  
<?php function  search(){?>				  
	<div align="right">
		<form action="search.php" method="post">
        	<input name="search" class="form"  type="text"  style="width:100px">                        
            <input name=submit2 type=image style="MARGIN-BOTTOM: 7px; VERTICAL-ALIGN: bottom" value=Search src="../cms_images/search.gif" width="58px" height="11px">
        </form>
	</div>				  
<?php }?>
					  
					  
<?php function  logout(){?> 
    <span class="sidelynx"><a href="../logout/logout.php">LOGOUT</a></span>
<?php }?>
  
<?php function  options($add,$view,$viewcat,$addcat,$_sess_username,$_user_rights){?> 
    <span   class="sidelynx"> 
        <a href="index.php"><?php echo "$view";?></a>&nbsp;&nbsp;&nbsp;
        
		<?php if ($_user_rights == 0){?>
        	<a href="addcat.php" ><?php echo "$addcat";?></a>&nbsp;&nbsp;&nbsp;       
        	<a href="add.php"><?php echo "$add";?></a>&nbsp;&nbsp;&nbsp;
        	<a href="addlisting.php" ><?php echo "$viewcat";?></a>&nbsp;&nbsp;&nbsp;
        <?php }?>
        
    </span>                
<?php }?>
									   									      
<?php function  top_module($manager,$add,$view,$viewcat,$addcat,$_sess_username,$_user_rights){?>				
	<table cellSpacing=0 cellPadding=0  border=0 width="100%">
       	<tr>
           	<td class="cms_head" valign="top" align="left"><?php echo "$manager";?></td>
           	<td class="logout" valign="top" align="right"><?php logout()?></td>
       	</tr>  
       	<tr>
          	<td valign="top"><?php options($add,$view,$viewcat,$addcat,$_sess_username,$_user_rights)?></td>
          	<td valign="top"><?php search()?></td>
       	</tr>
       	<tr><td colspan="2" bgcolor="#DBDBDB"><?php searchnav()?></td></tr>						
    </table>					  
<?php }?>
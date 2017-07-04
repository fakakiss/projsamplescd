<?php

	$text15_ans = addslashes(trim($_REQUEST["text15_ans"]));

	if( isset($_REQUEST["send"] ) && ( ($_REQUEST["send"]) =='OK') && ($pagecatcode==53) )
		{
			
			if ($_SESSION["sess_id1"]) 
				{
 					$q_update ="update feedback_form set s2=1,text15='$text15_ans',updated=now() where id=".$_SESSION["sess_id1"];
				}
			
			else if ($user_profile['id']>1) 
			
				{
					$q_update ="update feedback_form set s2=1,text15='$text15_ans',updated=now() where fbid=".$fbid;
				}
			
			mysqli_query($conn,$q_update) or die(mysqli_error());
		}

?>

<div class="about-welcome-inner">

    <?php


    if(isset($_SESSION["sess_id1"]) || ($user_profile['id']>1) )
		{
			if ($_SESSION["sess_id1"]) 	{$qfbidpreznt 	= "select * from feedback_form where id=".$_SESSION["sess_id1"];}
				
			else 						{$qfbidpreznt 	= "select * from feedback_form where fbid=".$user_profile['id'];}
				
			
			
			$rstfbidpreznt  = mysqli_query($conn,$qfbidpreznt) or die(mysqli_error($conn));
			
			if(mysqli_num_rows($rstfbidpreznt)>0)
			{
				$rowfbidpreznt=mysqli_fetch_array($rstfbidpreznt) or die(mysqli_error());
				
				$played_promo=$rowfbidpreznt['s1'];
			}
		}

    if  (isset($_SESSION["sess_id1"]) || ($user_profile['id']>1) ){ ?>

        <div style="font-family:'Arial Black', Gadget, sans-serif">

            
            <?php
			
				$the_user=$row_membername['id'];
				
				if ($_SESSION["sess_id1"]) 
					{$query 		= "SELECT * from feedback_form where id={$_SESSION["sess_id1"]};"; }				
				elseif ($user_profile['id']>1) 
					{$query 		= "SELECT * from feedback_form where fbid={$fbid};"; }
				
				
				$result  	= mysqli_query($conn,$query);
				
				if(mysqli_num_rows($result)>0)
					{
						$user 		= mysqli_fetch_array($result);
					}
				$passport	=$user['passport'];
				
            ?>
            
            
            
            <?php 
							
				$memtype=$rowfbidpreznt['s1'];
				
				$activated=$rowfbidpreznt['activated'];
				
				$step2=$rowfbidpreznt['s2'];
				$step3=$rowfbidpreznt['s3'];
				$step4=$rowfbidpreznt['s4'];
				$step5=$rowfbidpreznt['s5'];
								
				$text_len=strlen($rowfbidpreznt['text15']);
				
				//echo $_SESSION["sess_id1"];
		
			?>
            
            <!--For partners and Sponsors -->
            <?php if($_SESSION["sess_id1"]=='0688'){?>               
                <div style="padding-left:0px">
                    
                    <a href="http://webkin.gs/index.php?page_ren=87&loca=Ghana" style="font-family:Verdana, Geneva, sans-serif; font-size:12px"><strong>Students @ Stage 2B of Our Selection Process: Ghana</strong></a><br><br>
                    
                    <a href="http://webkin.gs/index.php?page_ren=86&loca=Ghana" style="font-family:Verdana, Geneva, sans-serif; font-size:12px"><strong>Short Listed Student Ghana: Stage 2A of Our Selection Process</strong></a><br><br>
                                     
                </div>
            <?php }?>
            
            
            	<table width="100%" border="0" cellspacing="0" cellpadding="0">
            		<tr>
                		<td width="80px">
                        	Step 1
                        
							<?php if(($memtype==1)&&($activated!=0)){?>
                                <img src="images/correct_yellow.jpg" width="50" height="41" />
                            <?php }else if (($memtype==1)&& ($activated==1)) {?>
                                <img src="images/correct_green.jpg" width="50" height="41" />
                            <?php }?>
                     	</td>
						<td>
                        
                        	<strong>Registration/Account Activation.</strong>
                            
                        	<br><br>
                            
                        	<?php if(($memtype==1)&&($activated!=0)){?>
                                Please Activate Your Email >> Click Here to Resend Activation Link
                            <?php }else if (($memtype==1)&& ($activated==1)) {?>
                                Your Account is Activated. Step 1 Complete!
                            <?php }?>
                            
                           
                        
                        	
							 
                            <?php if(!empty($user['passport']) && file_exists("images/userfiles/".$user['passport'])){?>             
                                <div style="padding-left:0px">
                                    <img width="300" src="images/userfiles/<?php echo $user['passport']?>">
                                </div>
                            <?php } else if(!empty($user['photo']) && file_exists("uploads/images/".$user['photo'])){?>
                            	<div style="padding-left:0px">
                                
                                
                            	 	Please Re-Generate Your ID >> Click Here to Re-Generate ID
                                 
                                 	<br><br>
                                    <img width="300" src="images/userfiles/<?php echo $user['photo']?>">
                                    
                                </div>                            
                            <?php } else {?>
                            	<br><br>
                            	 Please Re-Generate Your ID >> Click Here to Re-Generate ID
                            <?php }?>
                            
                            <br><br>
                            
                            <?php if (($_SESSION["sess_id1"]==1) || ($user_profile['id']==1) ){?>   
                                <div>
                                    <strong>
                                        SMS 10 Friends for 10 Entries in the WebKings Launch Draw!!!<br><br>
                                        WIN a New Laptops, Tablets and Andriod Phones The Draw.<br><br>
                                        Also Earn Commision of Any Friend the Becomes a Confirmed Student.<br><br>
                                    </strong>
                                    
                                    <?php include('incs/sms_pals.php')?>
                                </div>
                        	<?php }?>
                        
                        </td>
                       
                      </tr>
                      </table>
            
             
            
            <?php if(($memtype==1) || ($step1==1) ){?> 
            
            
            	
                
                  	<?php if ($text_len<10){?>
                        
                   		<?php echo trim($row_main_page['text1']) ?>
                        
                    <?php }?>
                
                	<table width="100%" border="0" cellspacing="0" cellpadding="0">
                      
                      <tr>
                        <td>
                        
                        	Step 2
                            <?php  if (($step2==1) && ($text_len >10) ) { ?>
                        		<img src="images/correct_green.jpg" width="50" height="41" />
                        	<?php }?>
                            
                        </td>
                        <td>
                        
                        
                        
                        
                        <?php if ($text_len<10){?>
                        
                        	<strong>Please Answer All Interview Questions Here.</strong><br> <br>
                        
                        <?php } else {?>
  
							 <strong>Your Answers To E-Interview Questions</strong><br> <br>	

						<?php } ?> 
                        
                        <div  style="padding-left:10px">
                        
                        	<?php if ($text_len<10){?>
                        
                                <form enctype="multipart/form-data" action="<?php echo $PHP_SELF."?page_ren=53";?>" method="post">
                                
                                    <textarea name="text15_ans" rows="15" cols="70"><?php echo stripslashes($rowfbidpreznt['text15'])?></textarea>
                                    <br><br>
                                    <input type="submit" value="Submit Answers" name="send">&nbsp;&nbsp;  
                                    
                                    <input type="hidden" value="OK" name="send">
                                     
                                </form>
                                                        
                            <?php } else {?>
  
								<?php echo $rowfbidpreznt['text15']; ?>

							<?php } ?>  
                                       
                        </div>
                        
                        
                        </td>
                        
                      </tr>
                      <tr>
                        <td>
                        Step 3
                        
                        <?php  if ($step3==1) { ?>
                        		<img src="images/correct_green.jpg" width="50" height="41" />
                        	<?php }?>
                        
                        </td>
                        <td>
                        	<strong>Scholarship Acceptance & Payment of Registration/Enrollment Fees.</strong>
                            <br><br>
                            
                            <?php 
							
								$the_country=$rowfbidpreznt['location'];
								
								if (strpos($the_country, 'Ghana') !== false)
									{
										echo ' <strong>Registration Fee [Ghana] : GHS 115.00 - Pay By </strong>
											 
											<strong>MTN Mobile Money : 0249 39 47 20</strong>  <br><br>
											 
											or <em><strong>At the office in Cash: Mataheko Club Conner Near Flamingo on the Rusia Dansoman Road</strong></em>. <br><br>
											or <strong>115.00 GHS</strong> or <strong> $30.00</strong> at any Stanbic Bank Branch to following Account Details:<br><br>
											
											<table><tr><td>Bank Name:</td><td> <strong>Stanbic Bank Ghana Limited</strong></td></tr>
											<tr><td>Account Name:</td><td> <strong>WebKings</strong></td></tr>
											<tr><td>Branch:</td><td> <strong>Accra Main</strong></td></tr>
											<tr><td>Account Number (GHS):</td><td>    <strong>9040002460356</strong></td></tr>
											<tr><td>Account Number (USD):</td><td>    <strong>9040002460364</strong></td></tr>
											<tr><td>Reference:</td><td><strong> WebKings - (Student Name - Student Number)</strong></td></tr></table>';
									}
									
									
								if (strpos($the_country, 'Nigeria') !== false)
									{
										echo 'Registration Fee [Nigeria]: 9,500.00 NGN.00 by MTN Mobile Money [0249 39 47 20] /Cash or $50.00<br> 
												<strong>
													Via Stanbic Bank Ghana Limited<br>
													Account Details<br>
													Bank Name: Ecobank Ghana Limited<br>
													Branch: OSU, Oxford Street<br>
													Account Name: FakaColin Web Limited<br>
													Account Number:    0202014403944001<br>
													Reference: WebKings - (Student Name-Student Number)
												</strong>';
									}
									
									
								if (strpos($the_country, 'SA') !== false)
									{
										echo 'Registration Fee [South Africa]: Zar 650.00 by  Bank Deposit 
										
											FNB<br>
											Account Details<br><br>
											Bank Name: 	        FNB	<br>
											Account Name:       WebKings Technologies <br>
											Account Branch:     Lakeside Mall<br>
											Account Number: 	62431188160<br><br>      

											
											Reference: WebKings - (Student Name-Student Number)';
									}		
							?>
                            
                            
                        </td>
                        
                      </tr>
                      <tr>
                        <td>
                        
                        	Step 4
                            
                            <?php  if ($step4==1) { ?>
                        		<img src="images/correct_green.jpg" width="50" height="41" />
                        	<?php }?>
                            
                          </td>
                        <td>
                        
                        	1-6 Months Installment Payment.<br>
                            <strong>[3 Months Deposit Recommended]</strong><br>
                            [<em>Worst Case Senario At Least 1 month installment before start of Class</em>]<br>
                        
                        </td>
                        
                      </tr>
                      <tr>
                        <td>
                        
                        Step 5
                        
                        <?php  if ($step5==1) { ?>
                        		<img src="images/correct_green.jpg" width="50" height="41" />
                        	<?php }?>
                        
                        </td>
                        <td>Orientation & Start of Class.</td>
                       
                      </tr>
                      
                      
                       <?php }?>
                      
                      
                   </table>
                

        </div>
        
        
        <?php }?>
</div>

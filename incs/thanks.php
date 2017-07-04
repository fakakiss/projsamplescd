<?php
	session_start();
 
	//include("lib_files/user_details.php");
		
	$_send    = md5("OK");
	$email	  = 	$_REQUEST['email'];
	$password = 	$_REQUEST['pass1'];
	//$ismobile =     $_REQUEST['is_mobile'];
	
	if(!isset($_send) || $_send!=md5("OK"))
	{
		header("Location:../../index.php?page_ren=l");
		echo $_send ."<br>" . md5("OK");
		echo $_send;
	}
	else if(isset($_send) && $_send==md5("OK"))
	{
		$_conn = mysqli_connect($mysql_serv, $mysql_user, $mysql_pass) or die(mysql_error());
		mysqli_select_db($_conn,$mysql_db) or die(mysql_error($_conn));
		$_q = "select * from feedback_form where email='$email' and password= md5('$password')";
		$_rst = mysqli_query($_conn,$_q) or die(mysqli_error($_conn));
		if(mysqli_num_rows($_rst) == 1)
		{
			$_rowUser = mysqli_fetch_array($_rst) or die(mysqli_error($_conn));	
			
			$log 						= md5("YES");
				
			$_SESSION["sess_id1"]  		= $_rowUser['id'];
			$_SESSION["sess_name1"] 	= $_rowUser['firstname'] ." ". $_rowUser['surname'];
			$_SESSION["sess_email1"]   	= $_rowUser['email'];
			
			
			$is_step1				= $_rowUser['s1'];
            $is_step2				= $_rowUser['s2'];
            $is_step3				= $_rowUser['s3'];
            $is_step4				= $_rowUser['s4'];
            $is_step5				= $_rowUser['s5'];
			
			
			//if ($is_Admin==1) {header("Location:../../index.php?page_ren=58&xl1=".md5("YES"));}
            //elseif($ismobile) { header("Location:".$the_url); }
            //else{
              //  header("Location:".$the_url);
              //  exit();
            //}
			//else {header("Location:../../index.php?page_ren=w1&view=1&xl1=".md5("YES"));}
		}
		else
		{

            if($ismobile){
                //$_SESSION['err_msg_log'] = "Incorrect Username or Password.";
                //header("Location:".$the_url);
                //exit();
            }else{
                //session_destroy();
			    //header("Location:../../index.php?page_ren=l&l=".md5("NO"));
            }
		}
	}
?>



<div class="about-welcome-inner">
	<!--Service List Part Start-->
	<div class="service-list">

        <!--Service List Item Start-->
        <div class="service-list-design">
    
            <div class="service-list-design-inner">
                <div class="service-list-design-image"><img src="images/corret_yellow.jpg" width="50" height="41" /></div>
                <div class="service-list-design-text"><strong>Step 1 Complete</strong><br /><br /></div>
                <p>
                    Thank you for Registering. The Future is HERE and it is WEB!!! HTML5/CSS3. 
                    <br /><br />
                    
                    
                     <?php if(($is_step1==1)&&($activated==0)){?>
                     
                     		You have Successfully Applied for the Project 100 Semi-Sponsored Scholarship HTML5/CSS3 Web Dev Training Project<br><br>
                     		Your Journey to a career in the Vast internet Industry Starts HERE.
                        	<!--<img src="images/corret_green.jpg" width="50" height="41" /> --><br><br>
                            Below is your Membership Card.<br><br>
                            
                            
                            
                            
                            
                            
                          			
                            
                                                       
                            
                            
					<?php }else if (($is_step1==2)&& ($activated==0)) {?>
                        
                        	You have Successfully Applied for the Trainer of Trainer Semi-Sponsored Scholarship Project in HTML5/CSS3 Web Dev Training Project for 30 Selected Students in your Area.                         
                        	<!--<img src="images/corret_green.jpg" width="50" height="41" />--><br><br> 
                            Below is your Membership Card.<br><br>
                                                        
                           <strong> Click Here to take the Next STEP >>></strong>
                            
                    <?php }else if (($is_step1==3)&& ($activated==0)) {?>
                        
                        	You have Successfully Applied on behalf of your ward/School for the Kids 4 Coding Project.                            
                        	<!--<img src="images/corret_green.jpg" width="50" height="41" /> --><br><br>
                            Below is your Membership Card.<br><br>                            
                            Click Here to take the Next STEP >>>
                            
                            
                    <?php }else if (($is_step1==4)&& ($activated==0)) {?>
                        
                        	You have Successfully Registered to become a Resource Person or Volunteer for the Webkings HTML5/CSS3 Web Dev Training Project.                           
                        	<!--<img src="images/corret_green.jpg" width="50" height="41" /> --><br><br>                            
                            Below is your Membership Card.<br><br>
                            
                            <a href="index.php?page_ren=0053" style="color:#F00; font-weight:bold">                           
                            	Click Here to take the Next STEP >>>
                            </a>
                            
                    <?php }?>
                    
                    
                </p>
                
                <?php 
				
					
					//echo $row_membername['id']."<br><br>";
					//echo $fbuser."<br><br>";
					
				?>
                
            </div>
    
            <?php 
				if (empty($user_profile['id']))
					{
						$the_user=$just_id;	
						$query = "SELECT * FROM feedback_form WHERE id = '$the_user';";		
					} 		
				else 
					{
						$the_user=$fbuser;
						$query = "SELECT * FROM feedback_form WHERE fbid = '$the_user';";
					}
				$result  = mysqli_query($conn,$query);
				$user = mysqli_fetch_array($result);
									
				//$passport	=$user['passport'];
	           
            	if(!empty($user['passport']))            
            {?>
                <div style="padding-left:0px">
                    <img width="500" src="images/userfiles/<?php echo $user['passport']?>">
                </div>
                
                
                
                
                
                
                
                
                
                
                 <?php 
				 
				 
				 
				 $text15_ans = trim($_REQUEST["text15_ans"]);

				if( isset($_REQUEST["send"] ) && ( ($_REQUEST["send"]) =='OK') && ($pagecatcode==100) )
					{
						
						
						$q_update = "update feedback_form set s2=1,text15='$text15_ans',updated=now()";
						
						if ($_SESSION["sess_id1"]) 
							{$q_update = $q_update . "where id=".$_SESSION["sess_id1"];}
						elseif ($user_profile['id']>1) 
							{$q_update = $q_update . "where fbid=".$fbid;}
						
						mysql_query($q_update) or die(mysql_error());
					}
				 
				 
							
					$memtype=$rowfbidpreznt['s1'];
					
					$activated=$rowfbidpreznt['validpass'];
					
					$step2=$rowfbidpreznt['s2'];
					$step3=$rowfbidpreznt['s3'];
					$step4=$rowfbidpreznt['s4'];
					$step5=$rowfbidpreznt['s5'];
									
					$text_len=strlen($rowfbidpreznt['text15']);
					
					//echo $_SESSION["sess_id1"];
		
				?>
                
                
                
                
                <?php if ($text_len<10){?>
                        
                        	<strong><em>Please Answer All Interview Questions Here.</em></strong><br> <br>
                            
                            
                            
                            
                            <strong>
                                1.	Please tell us more about yourself, Career dreams, Vision for your future. Also why you want to learn to make Cool websites and Apps.<br> <br>
                                2.	Do you know anything about Web/mobile Development and creating online content? Please Elaborate.<br> <br>
                                3.	Do you love smartphones tablets, computer games and want to learn to write Apps and create web content?<br> <br>
                                4.	Are you interested in learning mastering digital skills in Graphic Design, 3D animation, 3D printing, Music Production, Acting/Film Film Production? Tell us what you love to learn?<br> <br>
                                5.	Are you interested in Travelling for youth conferences and exchanged programs in Ghana, South Africa, Europe and the Americas?<br> <br>
                                6.	Provide us with you Contact numbers & Emails, also that a Parent or Guardian who will support you on this journey of learning, if Applicable.<br> <br>
                            </strong>

                            
                            
                            
                        
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
                
                
                
                 <div style="padding-left:0px; padding-top:10px">
                    <a href="index.php?page_ren=0053"><img width="400" src="images/next_step.jpg"></a>
                </div>
                
            <?php }?>
    
        </div>
        <!--Service List item End-->
	</div>
<?php //include('incs/flow.php')?>	
</div>
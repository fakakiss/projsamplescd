<?php
	$log           		=trim($_REQUEST['xl1']);
	
	$order_no  			=trim($_REQUEST["order_no"]);
	$order_no = 		stripslashes(str_replace("/","",$order_no));
    $err_msg = "";
    $err_header = "<p class=\"error\">";
    $err_header .= "<strong>Please take note of the following:</strong><ul class=\"error\">";
    $err_footer = "</ul></p>";
  
  	if(isset($_REQUEST["send"])&&(($_REQUEST["send"])=='OK'))	
	
		{ 		

			if(!is_filled($order_no))       	{$err_msg 	.= "<div class=\"error\"> Please Till Slip No. or an Online Order no.</span>";$red_order_no="red";}
			else                            	{$order_no 	 = ucwords($order_no);}
		
				
				//if ($err_msg=="") {include('incs/register_img_upload1.inc.php');}
	
						
		 		if ($err_msg=="")
					{	
						//$hash =  mysql_real_escape_string($email);
						
						$just_id 			= $row_membername['id'];

						$query = "SELECT * FROM feedback_form1 WHERE id = '$just_id';";
						$result  = $db->query($query);
						$user = mysql_fetch_array($result);
							
						//$email	=$user['email'];
						$hash 	= mysql_real_escape_string($order_no);
						//$dob	=$user['dob'];
	
						//list($dob_y,$dob_m, $dob_d) = explode("-", $dob);

						//if ($user['sex']==1){$the_gender="Male";} else {$the_gender="Female";}
				
						$file_name = 'images/userfiles/'.trim($hash).'.png';

						$base_img = imagecreatefrompng( "assets/BoardingPass.png" );
					
				if(!isset($base_img))
					{
						header('Content-Type: image/png');
						/* Create a blank image */
						$im  = imagecreatetruecolor(150, 30);
						$bgc = imagecolorallocate($im, 255, 255, 255);
						$tc  = imagecolorallocate($im, 0, 0, 0);
					
						imagefilledrectangle($im, 0, 0, 150, 30, $bgc);
					
						/* Output an error message */
						imagestring($im, 10, 5, 5, 'Error loading', $tc);
					
						imagepng($im);
						exit();
					}
				else
					{
						$user_details = array
							(
					
								'firstname'=>array('text'=>$user['firstname'], 'x'=>63,'y'=>220),
								'lastname'=> array('text'=>$user['surname'], 'x'=>220,'y'=>220),
								//'sex'=> array('text'=>$the_gender, 'x'=>303,'y'=>390),
								'order_no'=> array('text'=>$order_no, 'x'=>63,'y'=>282),
								//'dob_m'=> array('text'=>$dob_m, 'x'=>375,'y'=>350),
								//'dob_y'=> array('text'=>$dob_y, 'x'=>445,'y'=>350),
								//'pp_n'=> array('text'=>$user['id'], 'x'=>580,'y'=>160),
						
								'exp_d'=> array('text'=>'20', 'x'=>303,'y'=>430),
								'exp_m'=> array('text'=>'03', 'x'=>375,'y'=>430),
								'exp_y'=> array('text'=>'2012', 'x'=>445,'y'=>430),
								//'nearest_store' =>array('text'=>$user['store'], 'x'=>580,'y'=>350),
						
								//'picture' =>  array('text'=>'$photo', 'x'=>165,'y'=>77),
							);
				
						imageAlphaBlending($base_img, true);
						imageSaveAlpha($base_img, true);
					
						$font = 'assets/eurostib.ttf';
						$color = imagecolorallocate($base_img, 0, 0, 0);
					
						//insert text
						foreach($user_details as $k=>$v)
							{
								$size = ($k=='pp_n') ? 15:20;
								imagettftext ( $base_img , $size , 0 , $v['x'] , $v['y'] , $color , $font , $v['text'] );
						
							}
							

							//if(!empty($user['bdnpass'])&& file_exists("uploads/images/".$user['bdnpass']) )
                            //{
                              //  list($width, $height) = getimagesize("uploads/images/".$user['bdnpass']);
                                   // $src = imagecreatefrompng('uploads/images/'.$user['bdnpass']);
                            //}else{
                                //list($width, $height) = getimagesize('assets/blank.png');
                                   // $src = imagecreatefrompng('assets/blank.png');
                           // }
							
							 $src = imagecreatefrompng('assets/blank.png');
					// Copy
					
						$tn_width1= 0;
						$tn_height1=0;
						imagecopy($base_img, $src, 77, 165, 0, 0, $tn_width1, $tn_height1);

					}

					//header('Content-Type: image/png');
					
					//imagepng($base_img);
					imagepng($base_img,$file_name);
					
					imagedestroy($base_img);
					
					$bdnpass=mysql_real_escape_string(trim($order_no));	
						
					//$query_u 		= "UPDATE feedback_form1 SET passport='$vvv' WHERE id=$just_id";	
					//$rstinsert_u 	= mysql_query($query_u) or die(mysql_error());	
					
					
					
					$w2					=1;
					
					$qupdate 			= "update feedback_form1 set w2='$w2',bdnpass='$bdnpass' where id='$just_id' ";
					$rstupdate 			= mysql_query($qupdate) or die(mysql_error());

					$i=1;
					while($i<=15)
						{
							$qinsert_entry 		= "insert into entries values('$just_id',now())";
							$rstinsert_entry 	= mysql_query($qinsert_entry) or die(mysql_error());
							$i++;
						}	
						
					$postSuccess	= 1;	
						
						//echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=http://localhost/20_south_africa/tnma_FK/bluecarpet/app1.0/index.php?page_ren=e&&action=thanks"."\">";		
		
				}
		}
?>



<div class="about-welcome-inner">

    <?php



    $qfbidpreznt 	= "select * from feedback_form1 where id={$_SESSION["sess_id1"]};";
    $rstfbidpreznt  = mysql_query($qfbidpreznt) or die(mysql_error());
    if(mysql_num_rows($rstfbidpreznt)>0)
    {
        $rowfbidpreznt=mysql_fetch_array($rstfbidpreznt) or die(mysql_error());
        $played_promo= $rowfbidpreznt['w2'];
    }

    if ( (!($postSuccess==1)) && ($played_promo==1) )


    { ?>

        <div style="font-family:'Arial Black', Gadget, sans-serif">

            <div class="error message">

                You have already completed this stage.
            </div>
            <?php

            $the_user=$row_membername['id'];

            $query = "SELECT * from feedback_form1 where id={$_SESSION["sess_id1"]};";
            $result  = $db->query($query);
            $user = mysql_fetch_array($result);

            $passport	= $user['bdnpass'];
            ?>

            <?php if(!empty($user['bdnpass'])){?>
            <div style="padding-left:0px">
                <img width="550" src="images/userfiles/<?php echo $user['bdnpass']?>.png">
            </div>
            <a href="index_m.php" class="button block">Home</a>
            <?php }?>


        </div>
        <?php }?>
</div>


<?php if(!($postSuccess==1) && $played_promo!=1){?>


	<div class="about-welcome-inner">
        <h1>Get your Blue Carpet Boarding Pass </h1>
        <p style="margin-bottom: 15px;">
            STAGE 2: Shop with us and earn 15 more entries!
            <br />
            Purchase anything from DionWired, in store or online during the Blue Carpet Promotion until 31 March 2013, and get more entries!
        </p>
    
    
    
    <div align="center">
    
		<form class="form-horizontal" enctype="multipart/form-data" action="index_m.php?page_ren=s2" method="post">

        	<table cellSpacing=0 cellPadding=5 border=0 class="bodytxt" width="700px">
        		<tr class="bdtxt">
                    <td colspan="2" align=right class=bodycopy>
                    
                    <div align="left">
                    	<div style="padding-bottom:2px" align="center">

                    		<span>
                            	<strong>(Fields with an asterisk <span class=formtxt>*</SPAN> are required)</strong>
                            </span>
                        </div>


	      
	      	 <?php if(!empty($err_msg))
			    {
                	print "<div align=center >";
                	echo $err_header . $err_msg . $err_footer . "<br>";
                	print "</div>";
                 }
             ?>
 
	  	                </div></TD>
              </TR>
                  <TR>
                    <TD colspan="2" align=right class=bodycopy>
                    <div align="center">
                        <span class="formtxt">
                            <strong>
                            	<?php echo $ss1;?>
                            </strong>
                        </span>
                    </div></TD>
                  </TR>

             </table>

            <div style="margin-top:15px;" class="callout">Please retain your till slip, this proof of purchase will be required should your name be drawn.</div>
                <div class="control-group">
                

                    <label class="control-label">
                        <span class="formtxt">*</span><span style="color:<?php echo $red_order_no?>">Till Slip No. or an Online Order no.:</span>
                    </label>
                    <div class="controls">
						<input type="text" class="contact-input" name="order_no" value="<?php echo stripslashes($order_no)?>">No Slashes ("/") Please
                    </div>
                    <div><img src="images/till.jpg" width="300"  />
                    Please retain your till slip, this proof of purchase will be required should your name be drawn.
                    </div>
                    
                </div>

	
            

                <div class="form-actions">
                    <input type="hidden" value="OK" name="send">
                    <button type="submit" class="btn btn-facebook">Get Blue Carpet Boarding Pass</button>
    
                </div>

  			</form>
  
  		</div>
		<script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
        <script type="text/javascript">
            $(".ajax").colorbox({width: 600,height: 800});
        </script>

	</div>
<?php  }?>
	
    
<?php if($postSuccess==1){?>
	<?php include('incs/thanks_2_m.php')?>


<?php }?>
<div class="about-welcome-inner">

    <!--<div class="alert alert-error">
        <strong>Whoa Cowboy!</strong><br/>
        This part of the competition only starts on 7 March 2013.
    </div> -->
    
    
    <?php if(!$_SESSION["sess_id1"] && !$fbuser ){?>
    	<?php include('incs/login.php')?>
    <?php }?>


    <?php if($_SESSION["sess_id1"] || $fbuser > 0) :?>
    
    	<?php if(!$week1==1){?>
    		<div class="alert alert-error">
                <strong>You need to get your passport first</strong> <br />
                <a  class="btn btn-facebook" href="index.php?page_ren=stage&stage=stage_1"> Enter to get your Blue Carpet Passport</a>
            </div>
    	<?php }?>
                
        <?php if($week1==1){?>
            <?php //include('incs/s3_cpad.php')?>

            
            <?php include('incs/register_e_s3.php')?>
        <?php }?>
        
    <?php endif;?>

</div>
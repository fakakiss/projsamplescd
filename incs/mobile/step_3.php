 <div style="background-color: #efefef;padding: 5px;">
            <?php if(!$_SESSION["sess_id1"]){?>
            <p class="error message">You must be logged in.</p>
            <?php include('incs/login_m.php')?>
            <?php }?>



            <?php if($_SESSION["sess_id1"]) :?>
            <div align="left" style="color:#333333;">
                <?php include('incs/mobile/register_e_s3_m.php');?>
            </div>
            <?php endif;?>

     </div>

<?php
 
	$no_show = array(52,42,78,86,87,80,88,89,77,101);
	if(  !(in_array($pagecatcode,$no_show))   ){
		
	//if( $pagecatcode!=77  ){	
?>


    <aside class="region region-sidebar-first column sidebar sidebars col22-2">
      
        <div class="">
            <div class="section">
                <div id="block-menu-block-1" class="block block-menu-block first odd" role="navigation">
                    <div class="menu-block-wrapper menu-block-1 menu-name-main-menu parent-mlid-0 menu-level-2">                
                        <ul class="subNav">
                            <li class="menu__item is-active is-active-trail is-expanded active-trail menu-mlid-13565 currentSection current">
                                <a href="index.php?page_ren=62<?php if($log==md5(YES)){echo "&&xl1=$log";}?>" class="active">Learn & Master</a>
                                <ul class="sub-menu">
                                    <li class="menu__item is-collapsed first menu-mlid-13854 hasKids closed"><a href="index.php?spage_ren=19<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">HTML5/CSS3</a></li>
                                    <li class="menu__item is-collapsed menu-mlid-13859 hasKids closed"><a href="index.php?spage_ren=20<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">PHP 5</a></li>
                                    <li class="menu__item is-collapsed menu-mlid-13866 hasKids closed"><a href="index.php?spage_ren=21<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Game Programing</a></li>
                                    <li class="menu__item is-collapsed menu-mlid-13918 hasKids closed"><a href="index.php?spage_ren=22<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Web Content Management</a></li>
                                    <li class="menu__item is-leaf last leaf menu-mlid-13872"><a href="index.php?spage_ren=23<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Web Apps Dev</a></li>
                                </ul>
                            </li>
                            <li class="menu__item is-collapsed first menu-mlid-13562 closed"><a href="index.php?page_ren=68<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Job Placement</a></li>
                            <li class="menu__item is-collapsed first menu-mlid-13562 closed"><a href="index.php?page_ren=67<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Open Source Hardware</a></li>
                            
                            <?php if( ($_SESSION["sess_id1"]) || ( ($user_profile['id'])>1 &&  $step1>0) ){?>
                                <li class="menu__item is-collapsed menu-mlid-13563 closed"><a href="index.php?page_ren=66<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Solar Panel Fabrication Training</a></li>
                                <li class="menu__item is-collapsed menu-mlid-13564 closed"><a href="index.php?page_ren=65<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Office Automation Tech</a></li>                        
                                <li class="menu__item is-collapsed menu-mlid-13566 closed"><a href="index.php?page_ren=64<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Donors</a></li>
                                <li class="menu__item is-collapsed last menu-mlid-13567 closed"><a href="index.php?page_ren=63<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">Partners</a></li>
                            <?php }?>
                            
                        </ul>
                     </div>
                </div>
                <!-- /.block -->
                
                
                
            <?php if(!$_SESSION["sess_id1"]){?>
                
                <div id="block-block-65" class="block block-block last even">
    
                    <div class="block-convio-signup">
                    
                        <h2 class="title">Join Us Now!</h2>
                        
                        <!--<div class="content">
                        
                            <p>Get updates and action alerts on our Projects & Initiatives.</p>
                            
                            <div id="" class="convioSignup">
                            
                                <form action="" method="post" id="convio-signup-email-block-form" accept-charset="UTF-8">
                                    <fieldset>
                                        <dl class="pair3070" id="edit-email-wrapper">
                                            <input type="text" id="edit-email" name="email" value="Your email" size="20" maxlength="128" class="textField" />
                                        </dl>
                                        <input type="hidden" name="path" value="/health" />
                                        <input type="submit" id="edit-submit" name="op" value="Sign up" class="form-submit" /><input type="hidden" name="nid" value="253" />
                                        <input type="hidden" name="form_build_id" value="form-79_T6-m7OY637Eap5xmHHH9SWUqM3wuZzd6s5emRp2c" />
                                        <input type="hidden" name="form_id" value="convio_signup_email_block_form" />
                                        <input type="hidden" name="addl_info" value="leftSidebar-signupBox">
                                    </fieldset>
                                </form>
    
                            </div>
    
                            <p class="smallText">Read our <a href="index.php?page_ren=43<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">privacy policy</a>.</p>
    
                        </div> -->
                        
                        
                        
                        
                        <div class="content">
                        
                            <br>                    
                            <p><strong><em><a href="index.php?spage_ren=39" target="_self">Seminar & WorkShop -[Ghana]</a></em></strong></p>
                            <br>
                            <p><strong><em><a href="index.php?spage_ren=15" target="_self">Seminar & WorkShop -[SA]</a></em></strong></p>
                            
                            <div id="" class="convioSignup">
                            
                                
    
                            </div>
    
                            <!--<p class="smallText">Read our <a href="index.php?page_ren=43<?php if($log==md5(YES)){echo "&&xl1=$log";}?>">privacy policy</a>.</p> -->
    
                        </div>
                        
                        
                        
                        
                        
                    </div>
                </div><!-- /.block -->
                
            <?php }?>
                
                
                
                
            </div>
        </div><!-- /.region -->
        
    </aside>

<?php }?>
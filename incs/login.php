<?php if ( (!$_SESSION["sess_id1"]) || (!$fbid)  ){?>
							

    <div class="signin">
        <div class="signin-content">
            <div class="well well-nice">
    
                <form name="login_form" action="lib_files/account_lib_files/verify.php" method="post" class="form-tied margin-00">
                    <fieldset>
    
                        <h4>Please enter your email address and password then click on Login</h4>
                       <!-- <a href="index.php?page_ren=f" class="btn btn-facebook btn-block btn-large" type="submit"><i class="fontello-icon-facebook-rect-2"></i>Login or Join With facebook</a>
                        No facebook account?
                        <a href="index.php?page_ren=e" class="btn btn-red btn-block btn-large" type="submit">Register With Email</a> -->
                        <ul>
                            <li>

                                
                                <div align="center" class="bodytxt"  style="padding-top:10px; padding-bottom:10px">
                                    <strong><?php echo $err_msg_log;?></strong>
                                </div>
                                
                                E: <input type="text" placeholder="email" name="_user" class="input-block-level" id="idLogin">
                            </li>
                            <li>
                                P: <input type="password" placeholder="password" name="_pass" class="input-block-level" id="idPassword">
                                <input type="hidden" name="page_url" value="<?php echo $from_url;?>">
                                <input type="hidden" name="send" value="OK"></td>
                            </li>
                        </ul>
                        <button class="btn btn-yellow btn-block btn-large" type="submit">Login</button>
                         <hr />
                         
                         
                       
                        <a href="index.php?page_ren=36" class="btn btn-envato btn-block btn-large" type="submit">
                        	Register for Training
                        </a>
                        <hr class="margin-xm">
                        <a class="btn btn-red btn-block btn-large" href="index.php?page_ren=54">Forgot Password?</a>
    
    
    
                    </fieldset>
                </form>
    
    
    
            </div>
        </div>
    </div>


<?php }?>
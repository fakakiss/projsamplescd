<?php if(!($log == md5("YES"))){?>
							
	<div style="margin-left:10px; padding-top:20px;padding-bottom:0px">
        <p style="font-size: 12px;" align="center"><b>Client Login</b></p>
            <form action="lib_files/account_lib_files/verify_clients.php" method="post" style="margin:0px">
                <table border="0" cellspacing="0" cellpadding="0" class="bot" style="margin:0px">
                    <tr>
                        <td valign="middle"><div align="right"><b style="margin:0px">Email:</b></div></td>													
                        <td valign="top">&nbsp;<input type="Text" name="_user" size="23" maxlength=60></td>
                    </tr>
                    <tr>
                        <td valign="middle"><b style="margin:0px">Password:</b></td>
                        <td valign="top">&nbsp;<input type="password" name="_pass" size="23">
                        <input type="Image" src="images/b_go.gif"  alt="" border="0" hspace="10" align="absbottom">
                        <input type="hidden" name="page_url" value="<?php echo $from_url;?>">
                        <input type="hidden" name="send" value="OK"></td>
                    </tr>
                    <tr><td colspan="2"><span class="bot" style="margin-left:20px;margin-bottom:0px;"><a href="index.php?page_ren=27"><img src="images/e_punct_b.gif" width="5" height="5" alt="" border="0" align="absmiddle">&nbsp;&nbsp;<b style="color:#FF0000">Request For Repair!!!</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?page_ren=23"><img src="images/e_punct_b.gif" width="5" height="5" alt="" border="0" align="absmiddle">&nbsp;&nbsp;<b>Lost Password</b></a></span></td></tr>
                </table>										
            </form>
        </div>
	<div align="center" class="bodytxt" style="padding-top:10px; padding-bottom:20px"><strong><?php echo $err_msg_log;?></strong></div>									
<?php }?>

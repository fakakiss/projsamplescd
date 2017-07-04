<?php
include 'images.php';
include 'header.php';


?>

    <!-- Start of first content -->
    <table width="620" align="center" cellpadding="0" cellspacing="0" style="border-collapse:collapse; text-align:left; font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:12px; line-height:15pt; color:#ffffff; margin:0 auto;">
        <tr>
            <td bgcolor="#0652a7" height="5" style="font-size:2px; line-height:0px;" valign="top">
                <table width="620" cellpadding="0" cellspacing="0" style="border-collapse:collapse; border-spacing: 0; margin:0; padding:0;">
                    <tr>
                        <td valign="top" height="5" width="5" style="font-size:2px; line-height:0px;">
                            <img alt="" height="5" src="<?php echo $images['tl_dark']; ?>" width="5" align="right" vspace="0" hspace="0" border="0" style="display:block;" /></td>
                        <td valign="top" height="5" width="600" style="font-size:2px; line-height:0px;">
                            &nbsp;</td>
                        <td valign="top" height="5" width="5" style="font-size:2px; line-height:0px;">
                            <img alt="" height="5" src="<?php echo $images['tr_dark']; ?>" width="5" align="right" vspace="0" hspace="0" border="0" style="display:block;" /></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td bgcolor="#0652a7" style="color:#ffffff; padding:10px 20px 15px 20px; line-height:100%; font-size:17px; font-weight:lighter;" valign="top">
                <?php echo $subject; ?>
            </td>
        </tr>
        <tr>
            <td bgcolor="#053975" height="5" style="font-size:2px; line-height:0px;" valign="top">
                &nbsp;</td>
        </tr>
        <tr>
            <td width="620" bgcolor="#FFFFFF" style="color:#444444; padding:15px 20px 15px 20px; line-height:15pt;background-color:#FFFFFF;" valign="top">
                <!-- email content starts -->
                <p>Hi <?php echo $name;?> <br />
				<br />
                    Your friend <?php echo $fromName; ?> thought you would like this.<br />
					<br/>

                    Travel like a star to fabulous Monaco where you and a partner could be rubbing shoulders with the rich and famous.

                </p>
                <p>
                    Prize includes a <strong>Mediterranean cruise</strong> on the world's largest sailing ship, return business class
                    flights, transfers, <strong>R50 000 spending money</strong>, and VIP access to a hospitality terrace to experience the
                    Monaco Grand Prix.
                </p>
                <p>
					<a target="_blank" href="https://www.bluecarpet.co.za/" title="Enter Now"><img alt="Enter Now" src="<?php echo $images['enternow_small'];?>" border="0" /></a>
                </p>
            <!-- email content ends -->

            </td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" height="5" style="font-size:2px; line-height:0px;" valign="top">
                <table width="620" cellpadding="0" cellspacing="0" style="border-collapse:collapse; border-spacing: 0; margin:0; padding:0;">
                    <tr>
                        <td valign="top" height="5" width="5" style="font-size:2px; line-height:0px;">
                            <img alt="" height="5" src="<?php echo $images['bl_curve']; ?>" width="5" align="right" vspace="0" hspace="0" border="0" style="display:block;" /></td>
                        <td valign="top" height="5" width="600" style="font-size:2px; line-height:0px;">
                            &nbsp;</td>
                        <td valign="top" height="5" width="5" style="font-size:2px; line-height:0px;">
                            <img alt="" height="5" src="<?php echo $images['br_curve']; ?>" width="5" align="right" vspace="0" hspace="0" border="0" style="display:block;" /></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td height="20" style="line-height:0px;">
                <img alt="" height="20" src="<?php echo $images['spacer']; ?>" width="20" border="0" vspace="0" style="display:block;" /></td>
        </tr>
    </table>
    <!-- End of first content -->

<?php
include 'footer.php';
?>
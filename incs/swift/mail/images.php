<?php
$path =  'assets/mail/';
$images = array(

    'logo' => $mail->embed( Swift_Image::fromPath( $path.'logo-bc.png') ),
    'logo_b' => $mail->embed( Swift_Image::fromPath( $path.'logo.png') ),
    'tl_dark' => $mail->embed( Swift_Image::fromPath( $path.'topLeft_DarkCurve.gif') ),
    'tr_dark' => $mail->embed( Swift_Image::fromPath( $path.'topRight_DarkCurve.gif') ),
    'bl_dark' => $mail->embed( Swift_Image::fromPath( $path.'bottomLeft_DarkCurve.gif') ),
    'br_dark' => $mail->embed( Swift_Image::fromPath( $path.'bottomRight_DarkCurve.gif') ),

    'bl_curve' => $mail->embed( Swift_Image::fromPath( $path.'bottomLeft_Curve.gif') ),
    'br_curve' => $mail->embed( Swift_Image::fromPath( $path.'bottomRight_Curve.gif') ),

    'spacer' => $mail->embed( Swift_Image::fromPath( $path.'spacer.gif') ),

    'home_ico' => $mail->embed( Swift_Image::fromPath( $path.'homeIcon.png') ),

    'facebook_ico' => $mail->embed( Swift_Image::fromPath( $path.'facebook.gif') ),
    'twitter_ico' => $mail->embed( Swift_Image::fromPath( $path.'twitter.gif') ),
	'enternow_small' => $mail->embed( Swift_Image::fromPath( $path.'enternow_small.jpg') )
);


?>

<?php if($postSuccess==1){?>

		<?php 
		require_once 'swift/lib/swift_required.php';

/**
 * @param $toEmail
 * @param $toName
 * @param $fromEmail
 * @param $fromName
 * @return int
 */
function send_invite($toEmail,$toName,$fromEmail,$fromName)
{

    // Create the Transport
    $transport = Swift_SmtpTransport::newInstance('mail.webkings.co.za', 25)
        ->setUsername('invite@webkings.co.za')
        ->setPassword('0lujc1na@');

    //create the message
    $message = Swift_Message::newInstance();
    //create the mailer
    $mailer = Swift_Mailer::newInstance($transport);

    $subject 	= "Register for A Scholarship & Trip To S";

    // get the body
    $body = get_body($toName,$message,$subject,$fromName);

    //text body
    $textBody ="Hi {$toName}
Welcome to the WebKings Training & Placement Project!

You have taken the first Step to becoming part of the internet work force! This Round of Addmissions Last till March 12th subject to Available spaces!!
Click here for Step 2 https://www.webkings.co.za -> We will call you for an interview!
Click here for Step 3 https://www.webkings.co.za -> If Confirmend and Scholarship awared pay your registration Fee
Click here for Step 4 https://www.webkings.co.za -> Start Course on 12th March 

 ";

    // set FROM: details
    $message->setFrom(array($fromEmail => "WebKings Training & Placement" ));
    // set Sender
    $message->setSender('info@webkings.co.za');

    // set subject
    $message->setSubject($subject);

    // Set the To addresses with an associative array
    $message->setTo(array( $toEmail => $toName ) );

    // set the html body
    $message->setBody($body, "text/html");

    // add plain text body for email clients that dont support html
    $message->addPart($textBody, 'text/plain');


    $result = $mailer->send($message);
	return $result;
}

/**
 * @return string
 */
function get_body($name,$mail,$subject,$fromName)
{
    ob_start();

    include "swift/mail/welcome.php";
    $body = ob_get_contents();
    ob_end_clean();
    return $body;
}
//send_invite($email,$firstname,"info@webkings.co.za","WebKings Training & Placement");
		?>
		<?php include('incs/thanks.php')?>
	<?php }?>
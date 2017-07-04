<?php
session_start();

set_include_path(__DIR__.'/incs/'.get_include_path());

require "Zend/Oauth/Consumer.php";




$config = array(

    'siteUrl' => 'http://api.twitter.com/oauth',
    'consumerKey' => 'TDb6gsrOXs1WCOAm9KeVg',
    'consumerSecret' => '7UZAEAf6kDysWuBowQanCh540YynaTTfcG7Xqr92xrE'
);

$consumer = new Zend_Oauth_Consumer($config);

if (!empty($_GET) && isset($_SESSION['TWITTER_REQUEST_TOKEN']))
{
    $token = $consumer->getAccessToken($_GET, unserialize($_SESSION['TWITTER_REQUEST_TOKEN']));

    // Now that we have an Access Token, we can discard the Request Token
    //$_SESSION['TWITTER_REQUEST_TOKEN'] = null;
    $_SESSION['TWITTER_ACCESS_TOKEN'] = serialize($token);

	header('Location: incs/register_t_s3.php');
	exit();
} else {
    
    // Mistaken request? Some malfeasant trying something?
    exit('Invalid callback request. Oops. Sorry.');
    $_SESSION['TWITTER_REQUEST_TOKEN'] = null;
}

// save token to file
//file_put_contents(‘token.txt’, serialize($token));


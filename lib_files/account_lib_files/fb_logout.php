<?php 

	require '../../src/facebook.php';
	$facebook = new Facebook(array(
    'appId'  => '1406336512978895',
    'secret' => 'ff1e9f003525fbf3c2567e995ffc7eff',
    'cookie' => true,
	   ));

	   //ovewrites the cookie
	   $facebook->destroySession();

	   //redirects to index
   header('Location:http://www.webkings.co.za/');
   
?>
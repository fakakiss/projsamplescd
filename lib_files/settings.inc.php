<?php error_reporting (E_ALL ^ E_NOTICE);?>
<?php
    $clientname           =  "WEBKINGS CMS 3.0";
    //$err_msg              =  "";
	$err_msgf             =  "";
    //$upload_path          =  "uploads/";
    //$max_size             =  204800;
	//$privite_site_width   =  "100%";
	//$privite_nav_width    =  "125px";
	
	//$err_header           =  "<p class=\"error\">";
    //$err_header          .=  "<strong>Please take note of the following</strong>:<ul class=\"error\">";
    //$err_footer           =  "</ul>";
	
	
	
	
	
	$err_msg              =  "";
    $upload_path          =  "uploads/";
    $max_size             =  204800;
	$privite_site_width   =  "100%";
	$privite_nav_width    =  "125px";
	
	$err_log			  =  "";	
	
	$viewcat			  =  "";
	$addcat				  =  "";
	
	$err_header           =  "<p class=\"error\">";
    $err_header          .=  "<strong>Please take note of the following</strong>:<ul class=\"error\">";
    $err_footer           =  "</ul>";
	
	// cart config
	$currency			= 'GH¢ '; //currency symbol
	$shipping_cost		= 5.50; //shipping cost
	$taxes				= array( //List your Taxes percent here.
							'VAT:' => 0, //17.5
							'Service Tax:' => 0,
							'Other:' => 0
							);
	
	
	
	
	
	
	
	define ('FPNAMEXXNEWS','index1.php');
	define ('FPNAMEXX','index1.php?page_ren=');
	define ('SNAMEXX','webkings.co.za');
	define ('SCOPYXX','Copyright (c) 2016 webkings.co.za');
	define ('SITEWIDTH','100%');
	define ('ONLINE','0');
	
	if 	(ONLINE==1)	
			{
				define ('SITEURL','http://www.webkings.co.za/');
				define ('CMSLINK','http://www.webkings.co.za/cms/');
			}
	else
			{
				define ('SITEURL','http://localhost/10-organizational/webkings.co.za/app3.0/');
				define ('CMSLINK','http://localhost/10-organizational/webkings.co.za/app3.0/cms/');
			}	
		
?>
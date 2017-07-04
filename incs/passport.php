<?php

$result = null;

//include_once './lib_files/user_details.php';

if( isset( $_GET['show'] ) )
	{
		$hash =  mysql_real_escape_string($_GET['show']);
	
		$query = "SELECT * FROM feedback_form WHERE MD5(email) = '{$hash}';";
	
		$result  = $db->query($query);
		$user = mysql_fetch_array($result);
	}


if( isset( $user['id'] ) )
	{
	
		$file_name = 'images/userfiles/'.trim($hash).'.png';
		if(file_exists($file_name))
		{
		   header('Content-Type: image/png');
		   include $file_name;
		   exit();
	
	
		}
	
		$base_img = imagecreatefrompng( "assets/PP-New.png" );
	}


if(!isset($base_img))
	{
		header('Content-Type: image/png');
		/* Create a blank image */
		$im  = imagecreatetruecolor(150, 30);
		$bgc = imagecolorallocate($im, 255, 255, 255);
		$tc  = imagecolorallocate($im, 0, 0, 0);
	
		imagefilledrectangle($im, 0, 0, 150, 30, $bgc);
	
		/* Output an error message */
		imagestring($im, 10, 5, 5, 'Error loading', $tc);
	
		imagepng($im);
		exit();
	}
else
	{


		$user_details = array
			(
	
				'firstname'=>array('text'=>$user['firstname'], 'x'=>303,'y'=>265),
				'lastname'=> array('text'=>$user['surname'], 'x'=>303,'y'=>225),
				'sex'=> array('text'=>'Male', 'x'=>303,'y'=>390),
				'dob_d'=> array('text'=>'29', 'x'=>303,'y'=>350),
				'dob_m'=> array('text'=>'11', 'x'=>375,'y'=>350),
				'dob_y'=> array('text'=>'1982', 'x'=>445,'y'=>350),
				'pp_n'=> array('text'=>$user['id'], 'x'=>580,'y'=>160),
		
				'exp_d'=> array('text'=>'20', 'x'=>303,'y'=>430),
				'exp_m'=> array('text'=>'03', 'x'=>375,'y'=>430),
				'exp_y'=> array('text'=>'2013', 'x'=>445,'y'=>430),
				'nearest_store' =>array('text'=>$user['store'], 'x'=>580,'y'=>350),
		
				//'picture' =>  ''
			);

		imageAlphaBlending($base_img, true);
		imageSaveAlpha($base_img, true);
	
		$font = 'assets/eurostib.ttf';
		$color = imagecolorallocate($base_img, 0, 0, 0);
	
		//insert text
		foreach($user_details as $k=>$v)
			{
				$size = ($k=='pp_n') ? 15:20;
				imagettftext ( $base_img , $size , 0 , $v['x'] , $v['y'] , $color , $font , $v['text'] );
		
			}
	
	
			$src = imagecreatefrompng('assets/Profile-Pic.png');
	
	
	// Copy
		imagecopy($base_img, $src, 77, 165, 0, 0, 200, 213);



	}


	header('Content-Type: image/png');
	
	imagepng($base_img);
	imagepng($base_img,$file_name);
	
	imagedestroy($base_img);

?>
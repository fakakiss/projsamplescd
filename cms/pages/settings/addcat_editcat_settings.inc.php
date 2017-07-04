<?php
    require_once('../../lib_files/sessions.inc.php');
	
    
	
	

	$userfile_size                       = "30px";
	$illus_size                          = "37px";
	$add_size                            = "37px";
	$doc_size                            = "37px";
	$aud_size                            = "37px";
	$vid_size                            = "37px";
	$zip_size                            = "37px";
	$capimage_size                       = "37px";
	
	
	$group1                              ="1";
	
	$itemdate                            = "Date:"; 
	$maxlength_itemdate                  = "19";
	$size_itemdate                       = "19";
	$date_help                           = "";
	$show_itemdatedate                   = "1";
	$bold_itemdatedate                   = "0"; 
	
	$lan                                 = "Select Language:"; 
	$lan_width                           = "206";
	$lan_help                            = "";
	$show_lan                            = "0";
	$bold_lan                            = "0"; 
	
	
	
	$group2                              ="1";
	
	$illus1_name                         = "Illus 1:";
	$illus1_help                         = "";
	$show_illus1                         = "1";
	$bold_illus1                         = "0"; 
	
	$illus2_name                         = "Illus 2:";
	$illus2_help                         = "";
	$show_illus2                         = "1";
	$bold_illus2                         = "0"; 
	
	$illus3_name                         = "Illus 3:";
	$illus3_help                         = "";
	$show_illus3                         = "1";
	$bold_illus3                         = "0"; 
	
	$illus4_name                         = "Illus 4:";
	$illus4_help                         = "";
	$show_illus4                         = "1";
	$bold_illus4                         = "0"; 
	
	$illus5_name                         = "Illus 5:";
	$illus5_help                         = "";
	$show_illus5                         = "1";
	$bold_illus5                         = "0"; 
	



	
	$group3                              ="1";
	
	$cap                                 = "Page Title:";
	$maxlength_cap                       = "255"; 
	$size_cap                            = "60";
	$caption_help                        = "";
	$show_cap                            = "1";
	$bold_cap                            = "1"; 
	
	$cap_img_name                        = "Title Image:";
	$cap_img_help                        = "";
	$show_cap_img                        = "1";
	$bold_cap_img                        = "0"; 
	
	$opt_show                            = "Show to Public";
	$opt_show_help                       = "";
	$show_opt_show                       = "1";
	$bold_opt_show                       = "0";    
	
	$cat                                 = "Category:"; 
	$cat_width                           = "206";
	$cat_help                            = "";
	$show_cat                            = "0";
	$bold_cat                            = "0";
		
	$list_position                       = "List Position:"; 
	$maxlength_list_position             = "4";
	$size_list_position                  = "10";
	$list_position_help                  = "";
	$show_list_position                  = "1";
	$bold_list_position                  = "0";
	
	
	
	
	
	
	$group4                              ="1";
	
	$add1_name                           = "Add 1:";
	$add1_help                           = "";
	$show_add1                           = "1";
	$bold_add1                           = "0";
	 
	$addlink1_name                       = "Addlink 1:"; 
	$maxlength_addlink1                  = "255";
	$size_addlink1                       = "30";
	$addlink1_help                       = "";
	$show_addlink1                       = "1";
	$bold_addlink1                       = "0";
	
	
	$add2_name                           = "Add 2:";
	$add2_help                           = "";
	$show_add2                           = "1";
	$bold_add2                           = "0";
	
	$addlink2_name                       = "Addlink 2:"; 
	$maxlength_addlink2                  = "255";
	$size_addlink2                       = "30";
	$addlink2_help                       = "";
	$show_addlink2                       = "1";
	$bold_addlink2                       = "0"; 


	$add3_name                           = "Add 3:";
	$add3_help                           = "";
	$show_add3                           = "1";
	$bold_add3                           = "0";
	 
	$addlink3_name                       = "Addlink 3:"; 
	$maxlength_addlink3                  = "255";
	$size_addlink3                       = "30";
	$addlink3_help                       = "";
	$show_addlink3                       = "1";
	$bold_addlink3                       = "0";
	
	$add4_name                           = "Add 4:";
	$add4_help                           = "";
	$show_add4                           = "1";
	$bold_add4                           = "0"; 
	$addlink4_name                       = "Addlink 4:"; 
	
	$maxlength_addlink4                  = "255";
	$size_addlink4                       = "30";
	$addlink4_help                       = "";
	$show_addlink4                       = "1";
	$bold_addlink4                       = "0";
	
	$add5_name                           = "Add 5:";
	$add5_help                           = "";
	$show_add5                           = "1";
	$bold_add5                           = "0"; 
	$addlink5_name                       = "Addlink 5:"; 
	
	$maxlength_addlink5                  = "255";
	$size_addlink5                       = "30";
	$addlink5_help                       = "";
	$show_addlink5                       = "1";
	$bold_addlink5                       = "0";
	
	
	
	
	$group5                              ="1";
	
	$cap1                                = "Page Top Title:"; 
	$maxlength_cap1                      = "255";
	$size_cap1                           = "60";
	$caption1_help                       = "";
	$show_cap1                           = "1";
	$bold_cap1                           = "0";
	 
	$cap2                                = "Caption 2:";
	$maxlength_cap2                      = "255"; 
	$size_cap2                           = "30";
	$caption2_help                       = "";
	$show_cap2                           = "1";
	$bold_cap2                           = "0";
	
	$cap3                                = "Caption 3:";
	$maxlength_cap3                      = "255"; 
	$size_cap3                           = "30";
	$caption3_help                       = "";
	$show_cap3                           = "1";
	$bold_cap3                           = "0";
	
	$cap4                                = "Caption 4:";
	$maxlength_cap4                      = "255"; 
	$size_cap4                           = "30";
	$caption4_help                       = "";
	$show_cap4                           = "0";
	$bold_cap4                           = "0";
	
	$cap5                                = "Caption 5:";
	$maxlength_cap5                      = "255"; 
	$size_cap5                           = "30";
	$caption5_help                       = "";
	$show_cap5                           = "0";
	$bold_cap5                           = "0";
	
	$cap6                                = "Caption 6:";
	$maxlength_cap6                      = "255"; 
	$size_cap6                           = "30";
	$caption6_help                       = "";
	$show_cap6                           = "0";
	$bold_cap6                           = "0";
	
	$cap7                                = "Caption 7:";
	$maxlength_cap7                      = "255"; 
	$size_cap7                           = "30";
	$caption7_help                       = "Caption ";
	$show_cap7                           = "0";
	$bold_cap7                           = "0";
	
	$cap8                                = "Caption 8:";
	$maxlength_cap8                      = "255"; 
	$size_cap8                           = "30";
	$caption8_help                       = "";
	$show_cap8                           = "0";
	$bold_cap8                           = "0";
	
	$cap9                                = "Caption 9:";
	$maxlength_cap9                      = "255"; 
	$size_cap9                           = "30";
	$caption9_help                       = "";
	$show_cap9                           = "0";
	$bold_cap9                           = "0";
	
	$cap10                               = "Caption 10:";
	$maxlength_cap10                     = "255"; 
	$size_cap10                          = "30";
	$caption10_help                      = "";
	$show_cap10                          = "0";
	$bold_cap10                          = "0";
	
	


	
	$group6                              ="1";
	
	$doc_name                            = "Doc:";
	$doc_help                            = "";
	$show_doc                            = "1";
	$bold_doc                            = "0"; 
	
	$aud_name                            = "Aud:";
	$aud_help                            = "";
	$show_aud                            = "1";
	$bold_aud                            = "0"; 
	
	$vid_name                            = "Vid:";
	$vid_help                            = "";
	$show_vid                            = "1";
	$bold_vid                            = "0"; 
	
	$zip_name                            = "Zip:";
	$zip_help                            = "";
	$show_zip                            = "1";
	$bold_zip                            = "0"; 
	
	
	
	
	
	$intro_group                         ="1";
	$intro_group_sub                     ="0";
	
	$intro_header                        = "Description Data:";
	$intro_header_help                   = "";
	$maxlength_header_intro_head         = "500"; 
	$size_header_intro_head              = "52";
	$show_intro_header                   = "1";
	$bold_intro_header                   = "0"; 
		
	$introduction                        = "Meta Data:";
	$introduction_cols                   = "52"; 
	$introduction_rows                   = "60";
	$introduction_help                   = "";
	$show_introduction                   = "1";
	$bold_introduction                   = "0"; 
	
	$choose_image                        = "Choose image:";
	$choose_image_help                   = "";
	$choose_image_width                  = "150";
	$show_choose_image                   = "";
	$bold_choose_image                   = "0"; 
	
	$image_position                      = "Position:";
	$image_position_help                 = "";
	$show_image_position                 = "1";
	$bold_image_position                 = "0"; 
	
	$image_caption                       = "Image caption:";
	$image_caption_help                  = "";
	$maxlength_image_caption             = "255"; 
	$size_image_caption                  = "30";
	$show_image_caption                  = "1";
	$bold_image_caption                  = "0"; 
	
	$imagelink_caption                   = "Image Link:";
	$imagelink_caption_help              = "";
	$maxlength_imagelink_caption         = "255"; 
	$size_imagelink_caption              = "30";
	$show_imagelink_caption              = "1";
	$bold_imagelink_caption              = "0"; 
	
	
	
	
	
		$paragraph1_group                    = "1";
		$paragraph1_group_sub                = "1";
		
		$header1                             = "Header 1:";
		$header1_help                        = "";
		$maxlength_header_caption1           = "255"; 
		$size_header_caption1                = "40";
		$show_header1                        = "1";
		$bold_header1                        = "0"; 	
		
		$paragraph1                          = "Paragraph 1:";
		$paragraph1_help                     = "";
		$paragraph1_cols                     = "60"; 
		$paragraph1_rows                     = "30";
		$show_paragraph1                     = "1";
		$bold_paragraph1                     = "0"; 
		
		$choose_image1                       = "Choose Image 1:";
		$choose_image1_help                  = "";
		$choose_image1_width                 = "150";
		$show_choose_image1                  = "1";
		$bold_choose_image1                  = "0"; 
		
		$image_position1                     = "Position 1:";
		$image_position1_help                = "";
		$show_image_position1                = "1";
		$bold_image_position1                = "0"; 	
		
		$image_caption1                      = "Image Caption 1:";
		$image_caption1_help                 = "";
		$maxlength_image_caption1            = "255"; 
		$size_image_caption1                 = "30";
		$show_image_caption1                 = "1";
		$bold_image_caption1                 = "0"; 
		
		$imagelink_caption1                  = "Image Link 1:";
		$imagelink_caption1_help             = "";
		$maxlength_imagelink_caption1        = "255"; 
		$size_imagelink_caption1             = "30";
		$show_imagelink_caption1             = "1";
		$bold_imagelink_caption1             = "0"; 
		
	
	
	
	
			$paragraph2_group                    = "1";
			$paragraph2_group_sub                = "1";
			
			$header2                             = "Header 2:";
			$header2_help                        = "";
			$maxlength_header_caption2           = "255"; 
			$size_header_caption2                = "40";
			$show_header2                        = "1";
			$bold_header2                        = "0"; 
				
			$paragraph2                          = "Paragraph 2:";
			$paragraph2_help                     = "";
			$paragraph2_cols                     = "60"; 
			$paragraph2_rows                     = "30";
			$show_paragraph2                     = "1";
			$bold_paragraph2                     = "0"; 
			
			$choose_image2                       = "Choose Image 2:";
			$choose_image2_help                  = "";
			$choose_image2_width                 = "150";
			$show_choose_image2                  = "1";
			$bold_choose_image2                  = "0"; 
			
			$image_position2                     = "Position 2:";
			$image_position2_help                = "";
			$show_image_position2                = "1";
			$bold_image_position2                = "0"; 
			
			$image_caption2                      = "Image Caption 2:";
			$image_caption2_help                 = "";
			$maxlength_image_caption2            = "255"; 
			$size_image_caption2                 = "30";
			$show_image_caption2                 = "1";
			$bold_image_caption2                 = "0"; 
			
			$imagelink_caption2                  = "Image Link 2:";
			$imagelink_caption2_help             = "";
			$maxlength_imagelink_caption2        = "255"; 
			$size_imagelink_caption2             = "30";
			$show_imagelink_caption2             = "1";
			$bold_imagelink_caption2             = "0"; 
			
	
	
	
	
				$paragraph3_group                    = "1";
				$paragraph3_group_sub                = "1";
				
				$header3                             = "Header 3:";
				$header3_help                        = "";
				$maxlength_header_caption3           = "255"; 
				$size_header_caption3                = "40";
				$show_header3                        = "1";
				$bold_header3                        = "0"; 
					
				$paragraph3                          = "Paragraph 3:";
				$paragraph3_help                     = "";
				$paragraph3_cols                     = "60"; 
				$paragraph3_rows                     = "30";
				$show_paragraph3                     = "1";
				$bold_paragraph3                     = "0";
				
				$choose_image3                       = "Choose Image 3:";
				$choose_image3_help                  = "";
				$choose_image3_width                 = "150";
				$show_choose_image3                  = "1";
				$bold_choose_image3                  = "0";
				
				
				$image_position3                     = "Position 3:";
				$image_position3_help                = "";
				$show_image_position3                = "1";
				$bold_image_position3                = "0";
				
				$image_caption3                      = "Image Caption 3:";
				$image_caption3_help                 = "";
				$image_caption3_size                 = "Image Caption 3:";
				$maxlength_image_caption3            = "255"; 
				$size_image_caption3                 = "30";
				$show_image_caption3                 = "1";
				$bold_image_caption3                 = "0";
				
				
				$imagelink_caption3                  = "Image Link 3:";
				$imagelink_caption3_help             = "";
				$maxlength_imagelink_caption3        = "255"; 
				$size_imagelink_caption3             = "30";
				$show_imagelink_caption3             = "1";
				$bold_imagelink_caption3             = "0";
				
	
	
	
	
					$paragraph4_group                    = "1";
					$paragraph4_group_sub                = "1";
					
					$header4                             = "Header 4:";
					$header4_help                        = "";
					$maxlength_header_caption4           = "255"; 
					$size_header_caption4                = "40";
					$show_header4                        = "1";
					$bold_header4                        = "0"; 
						
					$paragraph4                          = "Paragraph 4:";
					$paragraph4_help                     = "";
					$paragraph4_cols                     = "60"; 
					$paragraph4_rows                     = "30";
					$show_paragraph4                     = "1";
					$bold_paragraph4                     = "0"; 
					
					$choose_image4                       = "Choose Image 4:";
					$choose_image4_help                  = "";
					$choose_image4_width                 = "150";
					$show_choose_image4                  = "1";
					$bold_choose_image4                  = "0"; 
					
					$image_position4                     = "Position 4:";
					$image_position4_help                = "";
					$show_image_position4                = "1";
					$bold_image_position4                = "0"; 
					
					$image_caption4                      = "Image Caption 4:";
					$image_caption4_help                 = "";
					$image_caption4_size                 = "Image Caption:";
					$maxlength_image_caption4            = "255"; 
					$size_image_caption4                 = "30";
					$show_image_caption4                 = "1";
					$bold_image_caption4                 = "0"; 
					
					$imagelink_caption4                  = "Image Link 4:";
					$imagelink_caption4_help             = "";
					$maxlength_imagelink_caption4        = "255"; 
					$size_imagelink_caption4             = "30";
					$show_imagelink_caption4             = "1";
					$bold_imagelink_caption4             = "0"; 
					
	
	
	
	
						$paragraph5_group                    = "1";
						$paragraph5_group_sub                = "1";
						
						$header5                             = "Header 5:";
						$header5_help                        = "";
						$maxlength_header_caption5           = "255"; 
						$size_header_caption5                = "40";
						$show_header5                        = "1";
						$bold_header5                        = "0"; 	
						
						$paragraph5                          = "Paragraph 5:";
						$paragraph5_help                     = "";
						$paragraph5_cols                     = "60"; 
						$paragraph5_rows                     = "30";
						$show_paragraph5                     = "1";
						$bold_paragraph5                     = "0"; 	
						
						
						$choose_image5                       = "Choose Image 5:";
						$choose_image5_help                  = "";
						$choose_image5_width                 = "150";
						$show_choose_image5                  = "1";
						$bold_choose_image5                  = "0"; 
						
						$image_position5                     = "Position 5:";
						$image_position5_help                = "";
						$show_image_position5                = "1";
						$bold_image_position5                = "0"; 
						
						$image_caption5                      = "Image Caption 5:";
						$image_caption5_help                 = "";
						$image_caption5_size                 = "30";
						$maxlength_image_caption5            = "255"; 
						$size_image_caption5                 = "30";
						$show_image_caption5                 = "1";
						$bold_image_caption5                 = "0"; 
						
						$imagelink_caption5                  = "Image Link 5:";
						$imagelink_caption5_help             = "";
						$maxlength_imagelink_caption5        = "60"; 
						$size_imagelink_caption5             = "30";
						$show_imagelink_caption5             = "1";
						$bold_imagelink_caption5             = "0"; 
						
		
	$submit_bottom_go                    = "Go"; 
	$submit_bottom                       = "Add Item";   
	$update_bottom                       = "Update Item"; 
			
?>
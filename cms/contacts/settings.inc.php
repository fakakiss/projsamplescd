<?php
    require_once('../../lib_files/sessions.inc.php');
	
    $manager                             = "Feedback Collection Module";
	
	$system_table                        = "";
	$cat_table                           = "";
		
    $add                                 = "";
    $view                                = "";
	
	$userfile_size                       = "30px";
	
	$itemdate                            = "Date:"; 
	$maxlength_itemdate                  = "19";
	$size_itemdate                       = "19";
	$date_help                           = "Date help";
	
	$lan                                 = "Select Language:"; 
	$lan_width                           = "206";
	$lan_help                            = "Lan help";
	
	$cap                                 = "<strong>Product Name:<strong>";
	$maxlength_cap                       = "255"; 
	$size_cap                            = "30";
	$caption_help                        = "Caption help";
	
	$opt_show                            ="Show to Public";
	$opt_show_help                       ="Show Help";   
	
	$cat                                 = "Category:"; 
	$cat_width                           = "206";
	$cat_help                            = "Cat help";
	
	$list_position                       = "List Position:"; 
	$maxlength_list_position             = "4";
	$size_list_position                  = "10";
	$list_position_help                  = "List position help";
	
	$cap1                                = "Home Page Position:"; 
	$maxlength_cap1                      = "255";
	$size_cap1                           = "30";
	$caption1_help                       = "Caption one help";
	 
	$cap2                                = "Product Home Attribute:";
	$maxlength_cap2                      = "255"; 
	$size_cap2                           = "30";
	$caption2_help                       = "Caption two help";
	
	$cap3                                = "Auction Item:";
	$maxlength_cap3                      = "255"; 
	$size_cap3                           = "30";
	$caption3_help                       = "Please Check if an Auction Item";
	
	$cap4                                = "Caption Four:";
	$maxlength_cap4                      = "255"; 
	$size_cap4                           = "30";
	$caption4_help                       = "Caption four help";
	
	$cap5                                = "Caption Five:";
	$maxlength_cap5                      = "255"; 
	$size_cap5                           = "30";
	$caption5_help                       = "Caption five help";
	
	$cap6                                = "Caption Six:";
	$maxlength_cap6                      = "255"; 
	$size_cap6                           = "30";
	$caption6_help                       = "Caption six help";
	
	$cap7                                = "Caption Seven:";
	$maxlength_cap7                      = "255"; 
	$size_cap7                           = "30";
	$caption7_help                       = "Caption seven help";
	
	$cap8                                = "Caption Eight:";
	$maxlength_cap8                      = "255"; 
	$size_cap8                           = "30";
	$caption8_help                       = "Caption eight help";
	
	$cap9                                = "Caption Nine:";
	$maxlength_cap9                      = "255"; 
	$size_cap9                           = "30";
	$caption9_help                       = "Caption nine help";
	
	$cap10                               = "Product Price(USD):";
	$maxlength_cap10                     = "255"; 
	$size_cap10                          = "30";
	$caption10_help                      = "caption ten help";
	
		
		
	$introduction                        = "<strong>Introductory Text:</strong>";
	$introduction_cols                   = "43"; 
	$introduction_rows                   = "8";
	$choose_image                        = "Choose image:";
	$choose_image_width                  = "150";
	$image_position                      = "Position:";
	$image_caption                       = "Image caption:";
	$maxlength_image_caption             = "255"; 
	$size_image_caption                  = "20";
	$go                                  = "Go";
	$introduction_help                   = "This is a test of the situation.";
	
		
	$header1                             = "Header One:";
	$maxlength_header_caption1           = "255"; 
	$size_header_caption1                = "40";	
	$paragraph1                          = "Paragraph one:";
	$paragraph1_cols                     = "43"; 
	$paragraph1_rows                     = "10";
	$choose_image1                       = "Choose Image:";
	$choose_image1_width                 = "150";
	$image_position1                     = "Position:";	
	$image_caption1                      = "Image caption:";
	$maxlength_image_caption1            = "255"; 
	$size_image_caption1                 = "20";
	$go                                  = "Go";
	$paragraph1_help                     = "This is a test of the situation.";
	
	
	$header2                             = "Header Two:";
	$maxlength_header_caption2           = "255"; 
	$size_header_caption2                = "40";	
	$paragraph2                          = "Paragraph Two:";
	$paragraph2_cols                     = "43"; 
	$paragraph2_rows                     = "10";
	$choose_image2                       = "Choose Image:";
	$choose_image2_width                 = "150";
	$image_position2                     = "Position:";
	$image_caption2                      = "Image caption:";
	$image_caption2_size                 = "Image caption:";
	$maxlength_image_caption2            = "255"; 
	$size_image_caption2                 = "20";
	$paragraph2_help                     = "This is a test of the situation.- pare2";
	
	
	
	$header3                             = "Header Three:";
	$maxlength_header_caption3           = "255"; 
	$size_header_caption3                = "40";	
	$paragraph3                          = "Paragraph Three:";
	$paragraph3_cols                     = "43"; 
	$paragraph3_rows                     = "10";
	$choose_image3                       = "Choose Image:";
	$choose_image3_width                 = "150";
	$image_position3                     = "Position:";
	$image_caption3                      = "Image caption:";
	$image_caption3_size                 = "Image caption:";
	$maxlength_image_caption3            = "255"; 
	$size_image_caption3                 = "20";
	$paragraph3_help                     = "www sdsedsdf dgdsgfdgf";
	
	
	
	
	$header4                             = "Header Four:";
	$maxlength_header_caption4           = "255"; 
	$size_header_caption4                = "40";	
	$paragraph4                          = "Paragraph Four:";
	$paragraph4_cols                     = "43"; 
	$paragraph4_rows                     = "10";
	$choose_image4                       = "Choose Image:";
	$choose_image4_width                 = "150";
	$image_position4                     = "Position:";
	$image_caption4                      = "Image caption:";
	$image_caption4_size                 = "Image caption:";
	$maxlength_image_caption4            = "255"; 
	$size_image_caption4                 = "20";
	$paragraph4_help                     = "ytyryte iuyityiu hgdhghdghg ";
		
		
		
	$submit_bottom_go                    = "Go"; 
	$submit_bottom                       = "Add Item";   
	$update_bottom                       = "Update Item"; 
	
	
	
	
	$cat_cap                             = "<strong>Category Name:</strong>";
	

	$catdate                             = "Creation Date:";
	$catname                             = "Category name:";
	$catintroduction                     = "Description:";
	$catsubmit_bottom                    = "";   
	$catupdate_bottom                    = "Update Category";
	$addcat                              = "";
    $viewcat                             = "";
	
	
?>
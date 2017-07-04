<?php 

	//$mpid                       = $_REQUEST['mpid'];	
	//$del_image                  = $_REQUEST['del'];
	
	$mpid						= (isset($_REQUEST["mpid"]) ? $_REQUEST["mpid"] : null);
	$del_image					= (isset($_REQUEST['del']) ? $_REQUEST['del'] : null);
	
	if($del_image=='caption_img')    {$qins1="update $the_table set caption_img='' where id='$the_page_id'";mysqli_query($conn,$qins1) or die(mysqli_error());}
	      
    if($del_image=='img' )             {$qins1="update $the_table set img ='' where id='$the_page_id'";mysqli_query($conn,$qins1) or die(mysqli_error());}
    if($del_image=='img1')             {$qins1="update $the_table set img1='' where id='$the_page_id'";mysqli_query($conn,$qins1) or die(mysqli_error());}
    if($del_image=='img2')             {$qins1="update $the_table set img2='' where id='$the_page_id'";mysqli_query($conn,$qins1) or die(mysqli_error());}
    if($del_image=='img3')             {$qins1="update $the_table set img3='' where id='$the_page_id'";mysqli_query($conn,$qins1) or die(mysqli_error());}
    if($del_image=='img4')             {$qins1="update $the_table set img4='' where id='$the_page_id'";mysqli_query($conn,$qins1) or die(mysqli_error());}
    if($del_image=='img5')             {$qins1="update $the_table set img5='' where id='$the_page_id'";mysqli_query($conn,$qins1) or die(mysqli_error());}
	
	if($del_image=='illus1')       	 {$qins1="update $the_table set illus1='' where id='$the_page_id'";mysqli_query($conn,$qins1) or die(mysqli_error());}
    if($del_image=='illus2')       	 {$qins1="update $the_table set illus2='' where id='$the_page_id'";mysqli_query($conn,$qins1) or die(mysqli_error());}
    if($del_image=='illus3')       	 {$qins1="update $the_table set illus3='' where id='$the_page_id'";mysqli_query($conn,$qins1) or die(mysqli_error());}
    if($del_image=='illus4')         {$qins1="update $the_table set illus4='' where id='$the_page_id'";mysqli_query($conn,$qins1) or die(mysqli_error());}
    if($del_image=='illus5')         {$qins1="update $the_table set illus5='' where id='$the_page_id'";mysqli_query($conn,$qins1) or die(mysqli_error());}
	
	
	if($del_image=='add1')            {$qins1="update $the_table set add1=''  where id='$the_page_id'";mysqli_query($conn,$qins1) or die(mysqli_error());}
    if($del_image=='add2')            {$qins1="update $the_table set add2=''  where id='$the_page_id'";mysqli_query($conn,$qins1) or die(mysqli_error());}
    if($del_image=='add3')            {$qins1="update $the_table set add3=''  where id='$the_page_id'";mysqli_query($conn,$qins1) or die(mysqli_error());}
    if($del_image=='add4')            {$qins1="update $the_table set add4=''  where id='$the_page_id'";mysqli_query($conn,$qins1) or die(mysqli_error());}
    if($del_image=='add5')            {$qins1="update $the_table set add5=''  where id='$the_page_id'";mysqli_query($conn,$qins1) or die(mysqli_error());}
	
	
	if($del_image=='doc')             {$qdoc="update $the_table set doc='' where id='$the_page_id'";mysqli_query($qdoc) or die(mysqli_error());}
    if($del_image=='aud')             {$qaud="update $the_table set audio='' where id='$the_page_id'";mysqli_query($qaud) or die(mysqli_error());}
    if($del_image=='vid')             {$qvid="update $the_table set video='' where id='$the_page_id'";mysqli_query($qvid) or die(mysqli_error());}
    if($del_image=='zip')             {$qzip="update $the_table set zip ='' where id='$the_page_id'";mysqli_query($qzip) or die(mysqli_error());}
	
	
	
	//$show_cap_img_select             = $_REQUEST['sel_cap_img'];	
	//$cap_img_selecter                = $_REQUEST['cap_imgupdate'];	
	
	
	$show_cap_img_select				= (isset($_REQUEST['sel_cap_img']) ? $_REQUEST['sel_cap_img'] : null);
	$cap_img_selecter					= (isset($_REQUEST['cap_imgupdate']) ? $_REQUEST['cap_imgupdate'] : null);
	
	
	if(!empty($cap_img_selecter))    {$qins1="update $the_table set caption_img ='$cap_img_selecter' where id='$the_page_id'";
	
	mysqli_query($conn,$qins1) or die(mysqli_error());}	
	

	//$show_illus1_select             = $_REQUEST['sel_illus1'];
	//$show_illus2_select             = $_REQUEST['sel_illus2'];
	//$show_illus3_select             = $_REQUEST['sel_illus3'];
	//$show_illus4_select             = $_REQUEST['sel_illus4'];
	//$show_illus5_select             = $_REQUEST['sel_illus5'];
	
	$show_illus1_select				= (isset($_REQUEST['sel_illus1']) ? $_REQUEST['sel_illus1'] : null);
	$show_illus2_select				= (isset($_REQUEST['sel_illus2']) ? $_REQUEST['sel_illus2'] : null);
	$show_illus3_select				= (isset($_REQUEST['sel_illus3']) ? $_REQUEST['sel_illus3'] : null);
	$show_illus4_select				= (isset($_REQUEST['sel_illus4']) ? $_REQUEST['sel_illus4'] : null);
	$show_illus5_select				= (isset($_REQUEST['sel_illus5']) ? $_REQUEST['sel_illus5'] : null);
	
	
		
	//$illus1_selecter                = $_REQUEST['illus1update'];
	//$illus2_selecter                = $_REQUEST['illus2update'];
	//$illus3_selecter                = $_REQUEST['illus3update'];
	//$illus4_selecter                = $_REQUEST['illus4update'];
	//$illus5_selecter                = $_REQUEST['illus5update'];
	
	$illus1_selecter				= (isset($_REQUEST['illus1update']) ? $_REQUEST['illus1update'] : null);
	$illus2_selecter				= (isset($_REQUEST['illus2update']) ? $_REQUEST['illus2update'] : null);
	$illus3_selecter				= (isset($_REQUEST['illus3update']) ? $_REQUEST['illus3update'] : null);
	$illus4_selecter				= (isset($_REQUEST['illus4update']) ? $_REQUEST['illus4update'] : null);
	$illus5_selecter				= (isset($_REQUEST['illus5update']) ? $_REQUEST['illus5update'] : null);
	
		
	
	if(!empty($illus1_selecter))     {$qins1="update $the_table set illus1='$illus1_selecter' where id='$the_page_id'";mysqli_query($qins_illus1) or die(mysqli_error());}
    if(!empty($illus2_selecter))     {$qins1="update $the_table set illus2 ='$illus2_selecter' where id='$the_page_id'";mysqli_query($conn,$qins1) or die(mysqli_error());}
    if(!empty($illus3_selecter))     {$qins1="update $the_table set illus3 ='$illus3_selecter' where id='$the_page_id'";mysqli_query($conn,$qins1) or die(mysqli_error());}
    if(!empty($illus4_selecter))     {$qins1="update $the_table set illus4 ='$illus4_selecter' where id='$the_page_id'";mysqli_query($conn,$qins1) or die(mysqli_error());}
    if(!empty($illus5_selecter))     {$qins1="update $the_table set illus5 ='$illus5_selecter' where id='$the_page_id'";mysqli_query($conn,$qins1) or die(mysqli_error());}   
	
	
	//$show_add1_select 	              = $_REQUEST['sel_add1'];
	//$show_add2_select                 = $_REQUEST['sel_add2'];
	//$show_add3_select                 = $_REQUEST['sel_add3'];
	//$show_add4_select                 = $_REQUEST['sel_add4'];
	//$show_add5_select                 = $_REQUEST['sel_add5'];
	
	$show_add1_select				= (isset($_REQUEST['sel_add1']) ? $_REQUEST['sel_add1'] : null);
	$show_add2_select				= (isset($_REQUEST['sel_add2']) ? $_REQUEST['sel_add2'] : null);
	$show_add3_select				= (isset($_REQUEST['sel_add3']) ? $_REQUEST['sel_add3'] : null);
	$show_add4_select				= (isset($_REQUEST['sel_add4']) ? $_REQUEST['sel_add4'] : null);
	$show_add5_select				= (isset($_REQUEST['sel_add5']) ? $_REQUEST['sel_add5'] : null);
	

	//$add1_selecter                    = $_REQUEST['add1update'];
	//$add2_selecter                    = $_REQUEST['add2update'];
	//$add3_selecter                    = $_REQUEST['add3update'];
	//$add4_selecter                    = $_REQUEST['add4update'];
	//$add5_selecter                    = $_REQUEST['add5update'];
	
	$add1_selecter				= (isset($_REQUEST['add1update']) ? $_REQUEST['add1update'] : null);
	$add2_selecter				= (isset($_REQUEST['add2update']) ? $_REQUEST['add2update'] : null);
	$add3_selecter				= (isset($_REQUEST['add3update']) ? $_REQUEST['add3update'] : null);
	$add4_selecter				= (isset($_REQUEST['add4update']) ? $_REQUEST['add4update'] : null);
	$add5_selecter				= (isset($_REQUEST['add5update']) ? $_REQUEST['add5update'] : null);
		
	
	if(!empty($add1_selecter))        {$qins1="update $the_table set add1 ='$add1_selecter' where id='$the_page_id'";mysqli_query($conn,$qins1) or die(mysqli_error());}
    if(!empty($add2_selecter))        {$qins1="update $the_table set add2 ='$add2_selecter' where id='$the_page_id'";mysqli_query($conn,$qins1) or die(mysqli_error());}
    if(!empty($add3_selecter))        {$qins1="update $the_table set add3 ='$add3_selecter' where id='$the_page_id'";mysqli_query($conn,$qins1) or die(mysqli_error());}
    if(!empty($add4_selecter))        {$qins1="update $the_table set add4 ='$add4_selecter' where id='$the_page_id'";mysqli_query($conn,$qins1) or die(mysqli_error());}
    if(!empty($add5_selecter))        {$qins1="update $the_table set add5 ='$add5_selecter' where id='$the_page_id'";mysqli_query($conn,$qins1) or die(mysqli_error());}
	
	

 
	//$show_doc_select                  = $_REQUEST['sel_doc'];
	//$show_aud_select                  = $_REQUEST['sel_aud'];
	//$show_vid_select                  = $_REQUEST['sel_vid'];
	//$show_zip_select                  = $_REQUEST['sel_zip'];
	//$doc_selecter 	                  = $_REQUEST['docupdate'];
	//$aud_selecter                     = $_REQUEST['audupdate'];
	//$vid_selecter                     = $_REQUEST['vidupdate'];
	//$zip_selecter                     = $_REQUEST['zipupdate'];
	
	
	$show_doc_select				= (isset($_REQUEST['sel_doc']) ? $_REQUEST['sel_doc'] : null);
	$show_aud_select				= (isset($_REQUEST['sel_aud']) ? $_REQUEST['sel_aud'] : null);
	$show_vid_select				= (isset($_REQUEST['sel_vid']) ? $_REQUEST['sel_vid'] : null);
	$show_zip_select				= (isset($_REQUEST['sel_zip']) ? $_REQUEST['sel_zip'] : null);
	$doc_selecter					= (isset($_REQUEST['docupdate']) ? $_REQUEST['docupdate'] : null);
	$aud_selecter					= (isset($_REQUEST['audupdate']) ? $_REQUEST['audupdate'] : null);
	$vid_selecter					= (isset($_REQUEST['vidupdate']) ? $_REQUEST['vidupdate'] : null);
	$zip_selecter					= (isset($_REQUEST['zipupdate']) ? $_REQUEST['zipupdate'] : null);
	
	
	
	
	
	
	
	
	
	if(!empty($doc_selecter))   	  {$qdoc="update $the_table set doc    ='$doc_selecter' where id='$the_page_id'";mysqli_query($qdoc) or die(mysqli_error());}
	if(!empty($aud_selecter))   	  {$qaud="update $the_table set audio  ='$aud_selecter' where id='$the_page_id'";mysqli_query($qaud) or die(mysqli_error());}
	if(!empty($vid_selecter))   	  {$qvid="update $the_table set video  ='$vid_selecter' where id='$the_page_id'";mysqli_query($qvid) or die(mysqli_error());}
	if(!empty($zip_selecter))   	  {$qzip="update $the_table set zip    ='$zip_selecter' where id='$the_page_id'";mysqli_query($qzip) or die(mysqli_error());}
			
    //$show_img_selecter                 = $_REQUEST['sel_img'];
	//$show_img1_selecter                = $_REQUEST['sel_img1'];
	//$show_img2_selecter                = $_REQUEST['sel_img2'];
	//$show_img3_selecter                = $_REQUEST['sel_img3'];
	//$show_img4_selecter                = $_REQUEST['sel_img4'];
	//$show_img5_selecter                = $_REQUEST['sel_img5'];
	
	$show_img_selecter					= (isset($_REQUEST['sel_img'])  ? $_REQUEST['sel_img']  : null);
	$show_img1_selecter					= (isset($_REQUEST['sel1_img']) ? $_REQUEST['sel1_img'] : null);
	$show_img2_selecter					= (isset($_REQUEST['sel2_img']) ? $_REQUEST['sel2_img'] : null);
	$show_img3_selecter					= (isset($_REQUEST['sel3_img']) ? $_REQUEST['sel3_img'] : null);
	$show_img4_selecter					= (isset($_REQUEST['sel4_img']) ? $_REQUEST['sel4_img'] : null);
	$show_img5_selecter					= (isset($_REQUEST['sel5_img']) ? $_REQUEST['sel5_img'] : null);
	
	
	 
	//$img_selecter                      = $_REQUEST['imgupdate'];
	//$img1_selecter                     = $_REQUEST['img1update'];
	//$img2_selecter                     = $_REQUEST['img2update'];
	//$img3_selecter                     = $_REQUEST['img3update'];
	//$img4_selecter                     = $_REQUEST['img4update'];
	//$img5_selecter                     = $_REQUEST['img5update'];
	
	
	$img_selecter					= (isset($_REQUEST['imgupdate'])  ? $_REQUEST['imgupdate']  : null);
	$img1_selecter					= (isset($_REQUEST['img1update']) ? $_REQUEST['img1update'] : null);
	$img2_selecter					= (isset($_REQUEST['img2update']) ? $_REQUEST['img2update'] : null);
	$img3_selecter					= (isset($_REQUEST['img3update']) ? $_REQUEST['img3update'] : null);
	$img4_selecter					= (isset($_REQUEST['img4update']) ? $_REQUEST['img4update'] : null);
	$img5_selecter					= (isset($_REQUEST['img5update']) ? $_REQUEST['img5update'] : null);
	
	
	
	
	
	if(!empty($img_selecter))          {$qins1="update $the_table set img  ='$img_selecter'  where id='$the_page_id'";
	mysqli_query($conn,$qins1) or die(mysqli_error());}
	if(!empty($img1_selecter))         {$qins1="update $the_table set img1 ='$img1_selecter' where id='$the_page_id'";
	mysqli_query($conn,$qins1) or die(mysqli_error());}
    if(!empty($img2_selecter))         {$qins1="update $the_table set img2 ='$img2_selecter' where id='$the_page_id'";
	mysqli_query($conn,$qins1) or die(mysqli_error());}
    if(!empty($img3_selecter))         {$qins1="update $the_table set img3 ='$img3_selecter' where id='$the_page_id'";
	mysqli_query($conn,$qins1) or die(mysqli_error());}
    if(!empty($img4_selecter))         {$qins1="update $the_table set img4 ='$img4_selecter' where id='$the_page_id'";
	mysqli_query($conn,$qins1) or die(mysqli_error());}
    if(!empty($img5_selecter))         {$qins1="update $the_table set img5 ='$img5_selecter' where id='$the_page_id'";
	mysqli_query($conn,$qins1) or die(mysqli_error());}  

?>
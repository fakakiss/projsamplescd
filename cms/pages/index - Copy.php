<?php
	require('../../lib_files/private.inc.php');
	require('../../lib_files/settings.inc.php');
	require('settings/main_settings.inc.php');
	require('fns/module_fns.php');
	
	
	
		
	$q_cat                	= "select * from $cat_table order by caption asc";
	$rst_cat              	= mysqli_query($conn,$q_cat) or die(mysqli_error());
	
	$q_main_on            	= "select * from $cat_table where showitem=1 order by lp asc";
	$rst_main_on          	= mysqli_query($conn,$q_main_on) or die(mysqli_error());
	$gen_count_main_on    	= mysqli_num_rows($rst_main_on);
	
	$q_main_off           	= "select * from $cat_table where showitem=0 order by caption asc";
	$rst_main_off         	= mysqli_query($conn,$q_main_off) or die(mysqli_error());
	$gen_count_main_off 	= mysqli_num_rows($rst_main_off );
	
	$q1             	 	= "select * from $system_table where category=0 order by updated desc ";
	$rst1            		= mysqli_query($conn,$q1) or die(mysqli_error());
	$gen_count       		= mysqli_num_rows($rst1);
	
	$q1_list         		= "select * from $system_listing_table where category=0 order by updated desc ";
	$rst1_list       		= mysqli_query($conn,$q1_list) or die(mysqli_error());
	$gen_count_list  		= mysqli_num_rows($rst1_list);
	
	
	$mysql_id 	= (isset($_REQUEST["mpid"]) ? $_REQUEST["mpid"] : null);
	
	$mpid		= (isset($_REQUEST["mpid"]) ? $_REQUEST["mpid"] : null);
	$spid		= (isset($_REQUEST["spid"]) ? $_REQUEST["spid"] : null);
	$lpid		= (isset($_REQUEST["lpid"]) ? $_REQUEST["lpid"] : null);
	
	
	
	$q_min 		  = "select id from $cat_table";
	$rst_min      = mysqli_query($conn,$q_min) or die(mysql_error());
	if(mysqli_num_rows($rst_min)>0)
		{	
			
			$row_min = mysqli_fetch_array($rst_min) or die(mysql_error());
			$lowest_cat_val   = min($row_min);
			$max_cat_val   = max($row_min);	
		}
	
	
	
	
	if (empty($mysql_id))	{$mysql_id=$lowest_cat_val;}
	if (empty($mpid))		{$mpid=$lowest_cat_val;}
	
	
	$q 		  = "select * from $cat_table where id='$mysql_id'";
	$rst      = mysqli_query($conn,$q) or die(mysqli_error());
	if(mysqli_num_rows($rst)>0){$row = mysqli_fetch_array($rst) or die(mysqli_error());}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//Dtd html 4.0 transitional//EN">
<html>

<link href="../css/style.css" rel="stylesheet" type="text/css">
		<script language=javascript type=text/javascript>
			<!--
			var win=null;
			function NewWindow(mypage,myname,w,h,pos,infocus){
			if(pos=="random"){myleft=(screen.width)?Math.floor(Math.random()*(screen.width-w)):100;mytop=(screen.height)?Math.floor(Math.random()*((screen.height-h)-75)):100;}
			if(pos=="center"){myleft=(screen.width)?(screen.width-w)/2:100;mytop=(screen.height)?(screen.height-h)/2:100;}
			else if((pos!='center' && pos!="random") || pos==null){myleft=0;mytop=20}
			settings="width=" + w + ",height=" + h + ",top=" + mytop + ",left=" + myleft + ",scrollbars=no,location=no,directories=no,status=no,menubar=no,toolbar=no,resizable=no";win=window.open(mypage,myname,settings);
			win.focus();}
			//-->
		</script>

<head><title><?php echo $clientname;?> | <?php echo $manager;?> | Main Page Listings</title></head>

<body>

	<?php cmshead($privite_site_width,$privite_nav_width,$_sess_username,$_user_rights)?>
        
		<div style=" padding-left:10px; padding-top:10px">    
			<?php top_module($manager,$add,$view,$viewcat,$addcat,$_sess_username,$_user_rights);?>
        </div>        
        
        
        <table cellpadding="0" cellspacing="0">       
        	<tr>
            	<td valign="top">
                	<div style="padding-left:10px; padding-top:10px;">
                    
                        <div style="background-color:#E0E0E0">
                            <?php include('content_templates/cat_pages_list1.inc.php')?>
                            <?php include('content_templates/uncategorized_subs_listings.inc.php')?> 
                        </div>
                        
                    </div>                  
                </td>
                
                
                <td valign="top" width="800px" >
                
                	<div style="padding-left:10px; padding-top:10px;">
                                   
                        <div style="background-color:#F0F0F0">
                            <?php include('content_templates/page_render1.inc.php')?>
                        </div>
                        
                    </div>
                                        
                </td>
                <td></td>                
            </tr>                
        </table>      
              
<?php cmsfooter();?>
   


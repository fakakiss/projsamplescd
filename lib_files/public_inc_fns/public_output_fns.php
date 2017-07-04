<?php

//membername by ID

function member_name($memberid)
	{
		$result_memname = mysql_query("select firstname from feedback where id='$memberid'");
		//$memname		= mysql_num_rows($result_memname);
		//return $memname;
	}





//Step 1
function register_members($s,$location_v,$fbid,$screen,$showall,$conn,$page)
	
	{
		
		if (($_SESSION["sess_id1"]) || ($fbid) )
		
				{
					if	($location_v =="All")  		{$location_v =""; $location="All";}
					
					$counter = mysqli_query($conn,"SELECT COUNT(*) AS id from feedback_form where validpass=1 and s1=$s and s2=0 and s3=0 and s4=0 and s5=0 and Length(text15)<10 and location LIKE '%$location_v%' order by id desc");
					$num = mysqli_fetch_array($counter);
					$count = $num["id"];
					
					//echo "<br><br>";
					
					//pagenator
					
					//$rst_reports 	= mysql_query($q_reports) or die(mysql_error());
                    //$num_reports 	= mysql_num_rows($rst_reports);
					 
					 
					$rows_per_page 	= 250;
					$pages 			= ceil($count / $rows_per_page);
					
					//mysql_free_result($rst_reports);
					

					if 		(!(isset($screen)))		{$screen = 1;}
		
					
					
					if 	($screen < 1) 			{$screen = 1; } 
					elseif 	($screen > $pages) 		{$screen = $pages; }
					
					
					$max 	= 'limit ' .($screen - 1) * $rows_per_page .',' .$rows_per_page;
					
					$start 	= ($screen - 1) * $rows_per_page;
					
					if 		($start == -50) 			{$start = 0; }

					if 		($showall==1) 		{$start  = 0; $rows_per_page =10000; }
					
					if	($location_v =="")  		{$location_v ="All"; }
					
					echo " <a href='{$_SERVER['PHP_SELF']}?page_ren=$page&loca=$location_v&showall=1'";
					if($showall==1){echo "style=font-weight:bold";}
					echo ">All</a>";
					
					if 	( !($showall==1) )
						{
		
					// let's create the dynamic links now
					if ($screen == 1) 
		
						{
				
						}
					else	
						{
				echo " <a href='{$_SERVER['PHP_SELF']}?page_ren=$page&loca=$location_v&screen=1&cl_cat=$client_category&&sort=$sorter&showall=0"."$link_part'> <<-First</a> ";
				echo " ";
				$previous = $screen-1;
				echo " <a href='{$_SERVER['PHP_SELF']}?page_ren=$page&loca=$location_v&screen=$previous&&cl_cat=$client_category&&sort=$sorter&showall=0"."$link_part'> <-Previous</a> ";
			}
			
		// page numbering links now
		for ($i = 1; $i < $pages + 1; $i++) 
			{
				$url = "index.php?page_ren=$page&loca=$location_v&screen=" . $i . "&&cl_cat=$client_category&&sort=$sorter&showall=0".$link_part;
				echo " | <a href=\"$url\">";
				
				if ($screen==$i) {echo '<span  style=font-weight:bold>';}

				echo $i;
				
				echo"</span> ";
				
				echo"</a> ";
			}
			
			echo " | ";
			
			
		if ($screen == $pages) 
			 {
			 } 
		else 
			 {
				 $next = $screen+1;
				 echo " <a href='{$_SERVER['PHP_SELF']}?page_ren=$page&loca=$location_v&screen=$next&showall=0&sort=$sorter"."$link_part'>Next -></a> ";
				 echo " ";
				 echo " <a href='{$_SERVER['PHP_SELF']}?page_ren=$page&loca=$location_v&screen=$pages&&cl_cat=$client_category&&sort=$sorter&showall=0"."$link_part'>Last ->></a> ";
			 }
			 
			 
					}
					 
				
				echo"<br><br>";
				
				echo("$count");
					
					echo " ";
					echo " --Max No. Records Per Page: $rows_per_page ";

					echo " ";
					
					if 	( !($showall==1) ){echo " --Page $screen of $pages-- ";}	
					
					
					
					
			echo "<div style=\"padding:10px\" align=\"center\">";
            
               echo "<form enctype=\"multipart/form-data\" action=\"index.php?page_ren=$page&&cl_cat=10\" method=\"post\">";
                            
            		echo "<input name=\"img5link\" type=\"text\"  value=\"\" size=\"50\" maxlength=\"300\" class=\"form\" id=\"inputString\" onkeyup=\"lookup(this.value);\" onblur=\"fill();\" >";
             
             		echo " <input type=\"hidden\" value=\"OK\" name=\"send\">";
             		echo " <input name=\"submit\" type=\"submit\" value=\"Search\">";
             
             	echo " </form>";
             	echo " <div class=\"suggestionsBox\" id=\"suggestions\" style=\"display: none; \" align=\"center\">";
					echo " <img src=\"images/upArrow.png\" style=\"position: relative; top: -12px; left: 30px;\" alt=\"upArrow\" />";
				echo " <div class=\"suggestionList\" id=\"autoSuggestionsList\" align=\"left\">";
					echo " &nbsp;";
				echo " </div>";
		echo " </div>";
					
					
					
					
					if	($location_v =="All")  		{$location_v =""; }
					$register_members_links_txt = mysqli_query($conn,"select * from feedback_form where validpass=1 and s1=$s and s2=0 and s3=0 and s4=0 and s5=0 and Length(text15)<10 and location LIKE '%$location_v%' order by id desc limit $start, $rows_per_page");
					
					
					//$counter = mysql_query("SELECT COUNT(*) AS id from feedback_form where validpass=1 and  s1=$s and s2=0 and location LIKE '%$location_v%' order by id desc");
					//$num = mysql_fetch_array($counter);
					//$count = $num["id"];
					//echo("$count");
					//echo "<br><br>";

					//$register_members_links = mysql_query("select * from feedback_form where validpass=1 and  s1=$s and s2=0 and location LIKE '%$location_v%' order by id desc limit 0, 3");
					
					//if (!$register_members_links)
					 
						//{
							//echo 'Could not run query: ' . mysql_error();
							//exit;
						//}
						
					//if (mysql_num_rows($register_members_links) > 0) 
					
						//{
							//while ($row_register_members = mysql_fetch_assoc($register_members_links)) 
								//{
															 
									//echo "<div align=\"left\">";  									       										
										
										//echo "<a href=\"index.php?page_ren=$row_register_members[id]\">";
										
											//echo "<img align=\"left\" src=\"images/userfiles/$row_register_members[passport]\" alt=\"$row_register_members[firstname]\" title=\"$row_register_members[firstname]\" width=\"230\"  />";
											
										//echo "</a>";											                                       
										  
									//echo "</div>";  
									
								//}
						//}
					
					
					
					//echo "<br><br>";
			
			
			
		
			if (!$register_members_links_txt){echo 'Could not run query: ' . mysqli_error();exit;}
		 
				
					
					
				
			
			if (mysqli_num_rows($register_members_links_txt) > 0) 
		
				{
					echo "<table>";  
				
						while ($row_register_members_txt = mysqli_fetch_assoc($register_members_links_txt)) 
							{

								echo "<tr>";
							
									echo "<td>";							
										echo "$row_register_members_txt[location]";
									
									
										//move student to next step
									
										if ( ($_SESSION["sess_id1"]==1) || ($fbid==10152378997926970) )
											{
												echo "<div class=\"form-actions\" align=\"left\">";
												
													echo "<form enctype=\"multipart/form-data\" action=\"index.php?page_ren=$page\" method=\"post\">";
													
														echo "<input type=\"submit\" value=\">\" name=\"send\" class=\"form-submit\">";
														echo "<input type=\"hidden\" value=\"OK\" name=\"send\">"; 
														echo "<input type=\"hidden\" value={$row_register_members_txt[id]} name=\"s1_id\">";
														
													echo "</form>";
													
												echo "</div>";
											}
									
									
									
											if ( ($_SESSION["sess_id1"]==1) || ($fbid==10152378997926970) )
												{
													
													 echo "<form enctype=\"multipart/form-data\" action=\"index.php?page_ren=$page\" method=\"post\">";
													 
														echo "<input type=\"submit\" value=\"D\" name=\"send\"  class=\"form-submit\">";
														echo "<input type=\"hidden\" value=\"OK\" name=\"send\">"; 
														echo "<input type=\"hidden\" value={$row_register_members_txt[id]} name=\"del_id\">";                                     
													echo "</form>";
			
												}
												
									echo "</td>";
									
									
															
									echo "<td>";
									
										echo "$row_register_members_txt[id]";								
										echo " ";
															
										echo "$row_register_members_txt[firstname]";								
										echo " ";						
										echo "$row_register_members_txt[surname]";
									
									
										if ( ($_SESSION["sess_id1"]==1) || ($fbid==10152378997926970) )
												{
											
													echo "<div class=\"form-actions\" align=\"left\">";
													
														echo "<form enctype=\"multipart/form-data\" action=\"index.php?page_ren=$page&loca=$location_v&screen=$screen\" method=\"post\">";
														
														
															echo "<textarea name=\"text15_logs\" rows=\"1\" cols=\"25\"></textarea>";
																
															//echo "";
																//echo "<br><br>";
								
															echo "<input type=\"submit\" id=\"edit-submit\" name=\"op\" value=\"Log Call/Comments\" class=\"form-submit\" />";
															echo "<input type=\"hidden\" value=\"OK\" name=\"send\">";
															echo "<input type=\"hidden\" value={$row_register_members_txt[id]} name=\"s1_log_id\">";
															
														echo "</form>";	
						
													echo "</div>";
											

													$student_id			=$row_register_members_txt['id'];
													$students_logs 		=mysqli_query($conn,"select tid,comments,date from students_logs where sid=$student_id order by date desc");
																										
													echo "<div>";
													
													
														if (!$students_logs)
	 
															{
																echo 'Could not run query: ' . mysqli_error();
																exit;
															}
			
			
														
															
														
														
															{
																while ($row_students_logs = mysqli_fetch_assoc($students_logs) )
																 
																	{
																		
																		
																		if (mysqli_num_rows($students_logs) > 0) 
														
																			$memberid		= $row_students_logs['tid'];
																			$result_memname = mysqli_query($conn,"select firstname from feedback_form where id='$memberid'");
																			if (mysqli_num_rows($result_memname) > 0)
																				{
																					$row_memname	= mysqli_fetch_assoc($result_memname);
																					$memname		= $row_memname['firstname'];
																				} else $memname		= "unNamed";
															
																		
																		
																		echo "<div style=\"font-family:Verdana; font-size:9px\" >";
																			echo $row_students_logs['date'];
																		echo "-->".$row_students_logs['comments'];	
																		echo "--> by:".$memname."</div>";	
																										
																		//echo "<br>";
																																				
																	}
																	
															}													
													
													echo "</div>";
											
												}
									
										echo "</td>";
																
										echo "<td>";
								
															
												echo "$row_register_members_txt[email]";

									//send user email and log it.
									if ( ($_SESSION["sess_id1"]==1) || ($fbid==10152378997926970) )
										{
											echo "<div class=\"form-actions\" align=\"left\">";
											
												echo "<form enctype=\"multipart/form-data\" action=\"index.php?page_ren=$page&actn=ena\" method=\"post\">";
													echo "<textarea name=\"text15_answer\" rows=\"1\" cols=\"15\">";
														
													echo "</textarea>";
														//echo "<br><br>";
													echo "<input type=\"submit\" value=\"Email\" name=\"send\" class=\"form-submit\">";
													echo "<input type=\"hidden\" value=\"OK\" name=\"send\">"; 
													echo "<input type=\"hidden\" value={$row_register_members_txt[id]} name=\"ena_id\">";
													
												echo "</form>";
												
											echo "</div>";
										}
									
									
									
																	
								echo "</td>";
								
								echo "<td>";
															
									echo "$row_register_members_txt[cell]";	
									
									
									if ( ($_SESSION["sess_id1"]==1) || ($fbid==10152378997926970) )
												{
											
											echo "<div class=\"form-actions\" align=\"left\">";
											
												echo "<form enctype=\"multipart/form-data\" action=\"index.php?page_ren=$page\" method=\"post\">";
												
												
													echo "<textarea name=\"text15_answer\" rows=\"1\" cols=\"15\">";
														
													echo "</textarea>";
														//echo "<br><br>";
						
													echo "<input type=\"submit\" id=\"edit-submit\" name=\"op\" value=\"SMS\" class=\"form-submit\" />";
													echo "<input type=\"hidden\" value=\"OK\" name=\"send\">";
													echo "<input type=\"hidden\" value={$row_register_members_txt[id]} name=\"s1_log_id\">";
													
												echo "</form>";	
				
											echo "</div>";
											
												}
									
									
									
									
																
								echo "</td>";
														
								
							echo "</tr>";											                                        
						
						}
										
					echo "</table>"; 
			}
		}		
	}












//Step 2a
function stage2_register_members($s,$location_v,$fbid,$screen,$conn)
	
		{
			
			
			if(($_SESSION["sess_id1"]) || ($fbid) )
		
				{
				
					
										
					
					
					
					$counter = mysqli_query($conn,"SELECT COUNT(*) AS id from feedback_form where validpass=1 and s1=$s and s2=1 and s3=0 and s4=0 and s5=0 and Length(text15)<10 and location LIKE '%$location_v%' order by id desc");
					$num = mysqli_fetch_array($counter);
					$count = $num["id"];
					
					//echo "<br><br>";
					
					
					
					//pagenator
					
					//$rst_reports 	= mysql_query($q_reports) or die(mysql_error());
                    //$num_reports 	= mysql_num_rows($rst_reports);
					 
					 
					$rows_per_page 	= 250;
					$pages 			= ceil($count / $rows_per_page);
					//mysql_free_result($rst_reports);
					
					
				
					
					

					if 		(!(isset($screen)))		{$screen = 1;}
		
					if 		($screen < 1) 			{$screen = 1; } 
					elseif 	($screen > $pages) 		{$screen = $pages; }
					
					
					$max 	= 'limit ' .($screen - 1) * $rows_per_page .',' .$rows_per_page;
					
					$start 	= ($screen - 1) * $rows_per_page;
					
					
					
					
	

		
		
		echo " <a href='{$_SERVER['PHP_SELF']}?page_ren=86&loca=All'>All</a>  ";
		
		// let's create the dynamic links now
		if ($screen == 1) 
		
			{
				
			}
		else	
			{
				echo " <a href='{$_SERVER['PHP_SELF']}?page_ren=86&loca=$location_v&screen=1&cl_cat=$client_category&&sort=$sorter&&cls_cat=$client_sub_category"."$link_part'> <<-First</a> ";
				echo " ";
				$previous = $screen-1;
				echo " <a href='{$_SERVER['PHP_SELF']}?page_ren=86&loca=$location_v&screen=$previous&&cl_cat=$client_category&&sort=$sorter&&cls_cat=$client_sub_category"."$link_part'> <-Previous</a> ";
			}
			
		// page numbering links now
		for ($i = 1; $i < $pages + 1; $i++) 
			{
				$url = "index.php?page_ren=86&loca=$location_v&screen=" . $i . "&&cl_cat=$client_category&&sort=$sorter&&cls_cat=$client_sub_category".$link_part;
				echo " | <a href=\"$url\">";
				
				if ($screen==$i) {echo '<span  style=font-weight:bold>';}

				echo $i;
				
				echo"</span> ";
				
				echo"</a> ";
			}
			
			echo " | ";
			
			
		if ($screen == $pages) 
			 {
			 } 
		else 
			 {
				 $next = $screen+1;
				 echo " <a href='{$_SERVER['PHP_SELF']}?page_ren=86&loca=$location_v&screen=$next&&cl_cat=$client_category&&sort=$sorter"."$link_part'>Next -></a> ";
				 echo " ";
				 echo " <a href='{$_SERVER['PHP_SELF']}?page_ren=86&loca=$location_v&screen=$pages&&cl_cat=$client_category&&sort=$sorter&&cls_cat=$client_sub_category"."$link_part'>Last ->></a> ";
			 }
					 
				
				echo"<br><br>";
				
				echo("$count");
					
					echo " ";
					echo " --Max No. Records Per Page: $rows_per_page ";

					echo " ";
					echo " --Page $screen of $pages-- ";	
					
					
					
			echo "<div style=\"padding:10px\" align=\"center\">";
            
               echo "<form enctype=\"multipart/form-data\" action=\"index.php?page_ren=86&&cl_cat=10\" method=\"post\">";
                            
            		echo "<input name=\"img5link\" type=\"text\"  value=\"\" size=\"50\" maxlength=\"300\" class=\"form\" id=\"inputString\" onkeyup=\"lookup(this.value);\" onblur=\"fill();\" >";
             
             		echo " <input type=\"hidden\" value=\"OK\" name=\"send\">";
             		echo " <input name=\"submit\" type=\"submit\" value=\"Search\">";
             
             	echo " </form>";
             	echo " <div class=\"suggestionsBox\" id=\"suggestions\" style=\"display: none; \" align=\"center\">";
					echo " <img src=\"images/upArrow.png\" style=\"position: relative; top: -12px; left: 30px;\" alt=\"upArrow\" />";
				echo " <div class=\"suggestionList\" id=\"autoSuggestionsList\" align=\"left\">";
					echo " &nbsp;";
				echo " </div>";
		echo " </div>";
					
					
					
					
					
					
			
			
			
			
			
					//$register_members_links = mysql_query("select * from feedback_form where validpass=1 and s1=$s and s2=1 and s3=0 and s4=0 and s5=0 and Length(text15)<10 and location LIKE '%$location_v%' order by id desc limit 0, 3");
				
					//if (!$register_members_links)
					 
						//{
							//echo 'Could not run query: ' . mysql_error();
							//exit;
						//}
					
					//if (mysql_num_rows($register_members_links) > 0) 
					
						//{
							//while ($row_register_members = mysql_fetch_assoc($register_members_links)) 
								///{
															 
									//echo "<div align=\"left\">";  									       										
										
										//echo "<a href=\"index.php?page_ren=$row_register_members[id]\">";
										
											//echo "<img align=\"left\" src=\"images/userfiles/$row_register_members[passport]\" alt=\"$row_register_members[firstname]\" title=\"$row_register_members[firstname]\" width=\"230\"  />";
											
										//echo "</a>";											                                       
										  
									//echo "</div>";  
									
								//}
						//}
			
			

				//echo "<br><br>";
				
				
					$register_members_links_txt = mysqli_query($conn,"select * from feedback_form where validpass=1 and s1=$s and s2=1 and s3=0 and s4=0 and s5=0 and Length(text15)<10 and location LIKE '%$location_v%' order by id desc limit $start, $rows_per_page");
					
		
			if (!$register_members_links_txt)
		 
				{
					echo 'Could not run query: ' . mysqli_error();
					exit;
				}
			
			if (mysqli_num_rows($register_members_links_txt) > 0) 
			
				{
					echo "<table>";  
					
						while ($row_register_members_txt = mysqli_fetch_assoc($register_members_links_txt)) 
							{
		
									echo "<tr>";
									
										echo "<td>";							
											echo "$row_register_members_txt[location]";
											
											if ( ($_SESSION["sess_id1"]==1) || ($fbid==10152378997926970) )
												{
													echo "<div class=\"form-actions\" align=\"left\">";
													
														echo "<form enctype=\"multipart/form-data\" action=\"index.php?page_ren=86&actn=ena\" method=\"post\">";
														
															echo "<input type=\"submit\" value=\"E\" name=\"send\">";
															echo "<input type=\"hidden\" value=\"OK\" name=\"send\">"; 
															echo "<input type=\"hidden\" value={$row_register_members_txt[id]} name=\"ena_id\">";
															
														echo "</form>";
														
													echo "</div>";
												}
											
											
										echo "</td>";
																
										echo "<td>";	
																
											echo "$row_register_members_txt[firstname]";								
											echo " ";		
											echo "$row_register_members_txt[surname]";
											
											
											
											
							if ( ($_SESSION["sess_id1"]==1) || ($fbid==10152378997926970) )
							
								{                        
								   echo "<form enctype=\"multipart/form-data\" action=\"index.php?page_ren=86\" method=\"post\">";
									
										echo "<textarea name=\"text15_log\" rows=\"1\" cols=\"20\">";										
										echo "</textarea>";
										//echo "<br><br>";										
										echo "<input type=\"submit\" value=\"Log Call\" name=\"send\">";  	
										echo "<input type=\"hidden\" value=\"OK\" name=\"send\">";
										echo "<input type=\"hidden\" value={$row_register_members_txt[id]} name=\"s2loguid\">";
										 
									echo "</form>";
                                                        
                          		} 
							else 
								{
								
								
								} 
  
								  
											
											
											
											
											
											
											
											
																			
										echo "</td>";
																
										echo "<td>";
																	
											echo "$row_register_members_txt[email]";
											
											if ($_SESSION["sess_id1"]==1)
							
												{                        
												   echo "<form enctype=\"multipart/form-data\" action=\"index.php?page_ren=86\" method=\"post\">";
													
														echo "<textarea name=\"text15_answer\" rows=\"1\" cols=\"20\">";
														
														echo "</textarea>";
														//echo "<br><br>";
														
														echo "<input type=\"submit\" value=\"Submit Answers\" name=\"send\">";  
														
														echo "<input type=\"hidden\" value=\"OK\" name=\"send\">";
														
														echo "<input type=\"hidden\" value={$row_register_members_txt[id]} name=\"s2ansuid\">";
														 
													echo "</form>";
																		
												} 
											else {} 
											
																			
										echo "</td>";
										
										echo "<td>";
																	
											echo "$row_register_members_txt[cell]";	
											
											if ( ($_SESSION["sess_id1"]==1) || ($fbid==10152378997926970) )
												{
													
													 echo "<form enctype=\"multipart/form-data\" action=\"index.php?page_ren=86\" method=\"post\">";
													 
														echo "<input type=\"submit\" value=\"D\" name=\"send\">";
														echo "<input type=\"hidden\" value=\"OK\" name=\"send\">"; 
														echo "<input type=\"hidden\" value={$row_register_members_txt[id]} name=\"del_id\">";                                     
													echo "</form>";
												}
											
																		
										echo "</td>";
																
										
									echo "</tr>";											                                        
								
							}
											
						echo "</table>"; 
					}
				}	
			
			
		
		}








//Step 2b
function offered_register_members($s,$location_v,$fbid,$conn)
	{
	
		if( ($_SESSION["sess_id1"]) || ($fbid) )

			{
	
				$register_members_links_txt = mysqli_query($conn,"select * from feedback_form where validpass=1 and s1=$s and s2=1 and s3 !=1 and s4=0 and s5=0 and Length(text15)>10  and location LIKE '%$location_v%' order by id desc limit 0, 1000");
		
		
				$counter = mysqli_query($conn,"SELECT COUNT(*) AS id from feedback_form where validpass=1 and s1=$s and s2=1 and s3 !=1 and s4=0 and s5=0 and Length(text15)>10  and location LIKE '%$location_v%' order by id desc");
				$num = mysqli_fetch_array($counter);
				$count = $num["id"];
				echo("$count");
				echo "<br><br>";
		
		
		
		
				if (!$register_members_links_txt)
		 
					{
						echo 'Could not run query: ' . mysqli_error();
						exit;
					}
			
				if (mysqli_num_rows($register_members_links_txt) > 0) 
		
					{
						echo "<table>";  
				
							while ($row_register_members_txt = mysqli_fetch_assoc($register_members_links_txt)) 
								{
	
									echo "<tr >";
									
										echo "<td>";							
											echo "$row_register_members_txt[location]";
											
											
											
											if ( ($_SESSION["sess_id1"]==1) || ($fbid==10152378997926970) )
												{
											
											echo "<div class=\"form-actions\" align=\"left\">";
											
												echo "<form enctype=\"multipart/form-data\" action=\"index.php?page_ren=80\" method=\"post\">";
												
												
													echo "<textarea name=\"text15_answer\" rows=\"1\" cols=\"15\">";
														
													echo "</textarea>";
														//echo "<br><br>";
						
													echo "<input type=\"submit\" id=\"edit-submit\" name=\"op\" value=\"P\" class=\"form-submit\" />";
													echo "<input type=\"hidden\" value=\"OK\" name=\"send\">";
													echo "<input type=\"hidden\" value={$row_register_members_txt[id]} name=\"s3_id\">";
													
												echo "</form>";	
				
											echo "</div>";
											
												}
											
											
											
											
											
											
										echo "</td>";
																
										echo "<td>";
											echo "SID:";
											echo "$row_register_members_txt[id]";
											echo "-";							
											echo "$row_register_members_txt[firstname]";								
											echo " ";						
											echo "$row_register_members_txt[surname]";
											
											
											if ( ($_SESSION["sess_id1"]==1) || ($fbid==10152378997926970) )
												{
											
													echo "<form enctype=\"multipart/form-data\" action=\"index.php?page_ren=86\" method=\"post\">";
											
														echo "<textarea name=\"text15_log\" rows=\"1\" cols=\"15\">";										
														echo "</textarea>";
														echo "<br>";										
														echo "<input type=\"submit\" value=\"Log Call\" name=\"send\">";  	
														echo "<input type=\"hidden\" value=\"OK\" name=\"send\">";
														echo "<input type=\"hidden\" value={$row_register_members_txt[id]} name=\"s2loguid\">";
												 
													echo "</form>";
											
												}
																			
										echo "</td>";
																
										echo "<td>";							
											echo "$row_register_members_txt[email]";
											
											
											
											if ( ($_SESSION["sess_id1"]==1) || ($fbid==10152378997926970) )
													{
														echo "<div class=\"form-actions\" align=\"left\">";
														
															echo "<form enctype=\"multipart/form-data\" action=\"index.php?page_ren=78&actn=ena\" method=\"post\">";
															
																echo "<input type=\"submit\" value=\"E\" name=\"send\">";
																echo "<input type=\"hidden\" value=\"OK\" name=\"send\">"; 
																echo "<input type=\"hidden\" value={$row_register_members_txt[id]} name=\"ena_id\">";
																
															echo "</form>";
															
														echo "</div>";
													}
											
											
											
																			
										echo "</td>";
										
										echo "<td>";							
											echo "$row_register_members_txt[cell]";
											
											
											
											if ( ($_SESSION["sess_id1"]==1) || ($fbid==10152378997926970) )
													{
														echo "<div class=\"form-actions\" align=\"left\">";
														
															echo "<form enctype=\"multipart/form-data\" action=\"index.php?page_ren=87\" method=\"post\">";
																echo "<input type=\"submit\" value=\"D\" name=\"send\">";
																echo "<input type=\"hidden\" value=\"OK\" name=\"send\">"; 
																echo "<input type=\"hidden\" value={$row_register_members_txt[id]} name=\"del_id\">";
															echo "</form>";
															
														echo "</div>";
													
													}
											
																			
										echo "</td>";
																
										
									echo "</tr>";	
							
							
							
									if ( ($_SESSION["sess_id1"]==1) || ($fbid==10152378997926970) )
								
										{											
											if ( !empty($row_register_members_txt['text15']) ) 
											
												{
													echo "<tr>";
													
														echo "<td  colspan=\"5\">";
														
															if(!empty($user['passport']) && file_exists("images/userfiles/".$user['passport']))
															
																{											
																	echo "<img align=\"left\" src=\"images/userfiles/$row_register_members_txt[photo]\" alt=\"$row_register_members_txt[firstname]\" title=\"$row_register_members_txt[firstname]\" width=\"200\"  />";													
																}
															
															echo "<em>";	
																				
																echo "$row_register_members_txt[text15]";
																
															echo "</em>";
						
															
														echo "</td>";
						
													echo "</tr>";
												}
										}
							
																                                        
							
							}
										
						echo "</table>"; 
			}	
	
	}	
			
			
			
						
			//$register_members_links = mysql_query("select * from feedback_form where s1=$s and s2=1 and s3 !=1 and  text15 != '0' order by id desc limit 0, 15");

			//if (!$register_members_links)
		 
				//{
					//echo 'Could not run query: ' . mysql_error();
					//exit;
				//}
			
			
			//if (mysql_num_rows($register_members_links) > 0) 
			
				//{
					//while ($row_register_members = mysql_fetch_assoc($register_members_links)) 
						//{
													 
							//echo "<div align=\"left\">";  									       										
								
								//echo "<a href=\"index.php?page_ren=$row_register_members[id]\">";
								
									//echo "<img align=\"left\" src=\"images/userfiles/$row_register_members[passport]\" alt=\"$row_register_members[firstname]\" title=\"$row_register_members[firstname]\" width=\"230\"  />";
									
								//echo "</a>";											                                       
								  
							//echo "</div>";  
							
						//}
				//}
	
	}







//Step 3
function paid_regen_register_members($s,$location_v,$fbid,$conn)
	{
		if(($_SESSION["sess_id1"]) || ($fbid) )
		
		{
		
			$register_members_links_txt = mysqli_query($conn,"select * from feedback_form where validpass=1 and s1=$s and s2=1 and s3=1 and s4 !=1 and location LIKE '%$location_v%' order by id desc limit 0, 150");
			
			
			
			$counter = mysqli_query($conn,"SELECT COUNT(*) AS id from feedback_form where validpass=1 and s1=$s and s2=1 and s3=1 and s4 !=1 and location LIKE '%$location_v%' order by id desc");
			$num = mysqli_fetch_array($counter);
			$count = $num["id"];
			echo("$count");
			echo "<br><br>";
			
			
		
		
		$register_members_links = mysqli_query($conn,"select * from feedback_form where validpass=1 and s1=$s and s2=1 and s3=1  and s4 !=1 and location LIKE '%$location_v%' order by id desc limit 0, 3");

		if (!$register_members_links)
	 
			{
				echo 'Could not run query: ' . mysqli_error();
				exit;
			}
			
			
		if (mysqli_num_rows($register_members_links) > 0) 
		
			{
				while ($row_register_members = mysqli_fetch_assoc($register_members_links))
				 
					{
												 
						//secho "<div align=\"left\">";  									       										
							
							//echo "<a href=\"index.php?page_ren=$row_register_members[id]\">";
							
								//echo "<img align=\"left\" src=\"images/userfiles/$row_register_members[passport]\" alt=\"$row_register_members[firstname]\" title=\"$row_register_members[firstname]\" width=\"230\"  />";
								
							//echo "</a>";											                                       
							  
						//echo "</div>";  
						
					}
					
			}
		
		
		
			//echo "<br><br>";
		
		
		
			if (!$register_members_links_txt)
		 
				{
					echo 'Could not run query: ' . mysqli_error();
					exit;
				}
			
			if (mysqli_num_rows($register_members_links_txt) > 0) 
			
				{
					echo "<table>";  
					
						while ($row_register_members_txt = mysqli_fetch_assoc($register_members_links_txt)) 
						
							{
		
								echo "<tr>";
								
									echo "<td>";
																
										echo "$row_register_members_txt[location]";
										
										
										
										
										if ( !$row_register_members_txt["s4"]==1 ){
										
										if ( ($_SESSION["sess_id1"]==1) || ($fbid==10152378997926970) )
											{											
												echo "<div class=\"form-actions\" align=\"left\">";
											
													echo "<form enctype=\"multipart/form-data\" action=\"index.php?page_ren=88\" method=\"post\">";
													
														echo "<input type=\"submit\" value=\">\" name=\"send\">";
														echo "<input type=\"hidden\" value=\"OK\" name=\"send\">"; 
														echo "<input type=\"hidden\" value={$row_register_members_txt[id]} name=\"s4_id\">";
														
													echo "</form>";
												
												echo "</div>";
											}
											}
										
										
										
										
										
										
										
										
										if ( !$row_register_members_txt["s4"]==1 )
											{											
										
										if ( ($_SESSION["sess_id1"]==1) || ($fbid==10152378997926970) )
											{											
												echo "<div class=\"form-actions\" align=\"left\">";
											
													echo "<form enctype=\"multipart/form-data\" action=\"index.php?page_ren=80\" method=\"post\">";
													
														echo "<input type=\"submit\" value=\"<\" name=\"send\">";
														echo "<input type=\"hidden\" value=\"OK\" name=\"send\">"; 
														echo "<input type=\"hidden\" value={$row_register_members_txt[id]} name=\"s2b_id\">";
														
													echo "</form>";
												
												echo "</div>";
											}
											
											}
											
											
											
											
											
											
											
											
											
											if ( !$row_register_members_txt["s4"]==1 )
											{	
										
									if ( ($_SESSION["sess_id1"]==1) || ($fbid==10152378997926970) )
										{	
									
										 	echo "<form enctype=\"multipart/form-data\" action=\"index.php?page_ren=80\" method=\"post\">";
									 
												echo "<input type=\"submit\" value=\"D\" name=\"send\">";
												echo "<input type=\"hidden\" value=\"OK\" name=\"send\">"; 
												echo "<input type=\"hidden\" value={$row_register_members_txt[id]} name=\"del_id\">";                                     
                                			echo "</form>";
										} }
											
											
											
											
											
										
									echo "</td>";
															
									echo "<td>";
									
									
										
									
										echo "SID:-$row_register_members_txt[id]";
										echo " ";						
										echo "$row_register_members_txt[firstname]";								
										echo " ";					
										echo "$row_register_members_txt[surname]";	
										echo "<br>";
										
										//echo "$row_register_members_txt[id]";
										//echo "-";
										
										
										if ( ($_SESSION["sess_id1"]==1) || ($fbid==10152378997926970) )
												{
											
													echo "<div class=\"form-actions\" align=\"left\">";
													
														echo "<form enctype=\"multipart/form-data\" action=\"index.php?page_ren=80\" method=\"post\">";
														
														
															echo "<textarea name=\"amount_paid\" rows=\"1\" cols=\"15\">";
																
															echo "</textarea>GH";
															
															echo "<br>";
															
															echo "<textarea name=\"dollaramount\" rows=\"1\" cols=\"15\">";
																
															echo "</textarea>\$";
															
															echo "<br>";
															
															echo "<textarea name=\"comms_on_payment\" rows=\"1\" cols=\"15\">";
																
															echo "</textarea>Comments";
																
								
															echo "<input type=\"submit\" id=\"edit-submit\" name=\"op\" value=\"P\" class=\"form-submit\" />";
															echo "<input type=\"hidden\" value=\"OK\" name=\"send\">";
															echo "<input type=\"hidden\" value={$row_register_members_txt[id]} name=\"s3pay_id\">";
															
														echo "</form>";	
						
													echo "</div>";
													
													$student_id			=$row_register_members_txt['id'];
													$student_payments 	=mysqli_query($conn,"select amount,comments,dollarvalue from student_payments where sid=$student_id order by date desc");
													
													
													echo "<div>";
													
													
														if (!$student_payments)
	 
															{
																echo 'Could not run query: ' . mysqli_error();
																exit;
															}
			
			
														if (mysqli_num_rows($student_payments) > 0) 
														
															{
																while ($row_student_payments = mysqli_fetch_assoc($student_payments) )
																 
																	{

																		echo $row_student_payments['amount']." -> ".$row_student_payments['dollarvalue']." - ".$row_student_payments['comments'];
																		echo "<br>";
																		//echo "<br>";
																		//echo "111";
																		
																	}
																	
															}													
													
													echo "</div>";
													
											
												}					
									echo "</td>";
															
									echo "<td>";							
										echo "$row_register_members_txt[email]";
										
										
										
										if ( ($_SESSION["sess_id1"]==1) || ($fbid==10152378997926970) )
												{
													echo "<div class=\"form-actions\" align=\"left\">";
													
														echo "<form enctype=\"multipart/form-data\" action=\"index.php?page_ren=78&actn=ena\" method=\"post\">";
														
															echo "<input type=\"submit\" value=\"E\" name=\"send\">";
															echo "<input type=\"hidden\" value=\"OK\" name=\"send\">"; 
															echo "<input type=\"hidden\" value={$row_register_members_txt[id]} name=\"ena_id\">";
															
														echo "</form>";
														
													echo "</div>";
												}
										
										
										
										
										
																		
									echo "</td>";
									
									echo "<td>";							
										echo "$row_register_members_txt[cell]";	
										
										
										
																
									echo "</td>";
															
									
								echo "</tr>";
								
								
								
								if ( ($_SESSION["sess_id1"]==1) || ($fbid==10152378997926970) )
								
										{											
											if ( !empty($row_register_members_txt['text15']) ) 
											
												{
													echo "<tr>";
													
														echo "<td  colspan=\"5\">";
														
															if(!empty($user['passport']) && file_exists("images/userfiles/".$user['passport']))
															
																{											
																	echo "<img align=\"left\" src=\"images/userfiles/$row_register_members_txt[photo]\" alt=\"$row_register_members_txt[firstname]\" title=\"$row_register_members_txt[firstname]\" width=\"200\"  />";													
																}
															
															echo "<em>";	
																				
																echo "$row_register_members_txt[text15]";
																
															echo "</em>";
						
															
														echo "</td>";
						
													echo "</tr>";
												}
										}
								
								
																			                                        
								
							}
											
						echo "</table>"; 
				}				
		}	

	}










		
		
		
		
		
		
//Step 4		
function paid_aleast_1intalmt_members($s,$location_v,$fbid,$conn)
	{
		if( ($_SESSION["sess_id1"]) || ($fbid) )
		
			{
			
			
			
				$register_members_links = mysqli_query($conn,"select * from feedback_form where validpass=1 and s1=$s and s2=1 and s3=1 and s4=1 and s5 !=1  and location LIKE '%$location_v%' order by id desc limit 0, 3");
			
			
				$counter = mysqli_query($conn,"SELECT COUNT(*) AS id from feedback_form where validpass=1 and s1=$s and s2=1 and s3=1 and s4=1  and s5 !=1 and location LIKE '%$location_v%' order by id desc");
				$num = mysqli_fetch_array($counter);
				$count = $num["id"];
				echo("$count");
				echo "<br><br>";
			

				if (!$register_members_links)
			 
					{
						echo 'Could not run query: ' . mysqli_error();
						exit;
					}
			
			
				if (mysqli_num_rows($register_members_links) > 0) 
		
					{
						while ($row_register_members = mysqli_fetch_assoc($register_members_links))
				 
							{
												 
								//echo "<div align=\"left\">";  									       										
							
								//echo "<a href=\"index.php?page_ren=$row_register_members[id]\">";
							
									//echo "<img align=\"left\" src=\"images/userfiles/$row_register_members[passport]\" alt=\"$row_register_members[firstname]\" title=\"$row_register_members[firstname]\" width=\"230\"  />";
								
								//echo "</a>";											                                       
							  
								//echo "</div>";  
						
							}
					
					}
			
			
					//echo "<br><br>";
			
			
			
		
			$register_members_links_txt = mysqli_query($conn,"select * from feedback_form where validpass=1 and s1=$s and s2=1 and s3=1 and s4=1 and s5 !=1 and location LIKE '%$location_v%' order by id desc limit 0, 150");
			
			
			
			
			
			
		
			if (!$register_members_links_txt)
		 
				{
					echo 'Could not run query: ' . mysqli_error();
					exit;
				}
			
			if (mysqli_num_rows($register_members_links_txt) > 0) 
			
				{
					echo "<table>";  
					
						while ($row_register_members_txt = mysqli_fetch_assoc($register_members_links_txt)) 
						
							{
		
								echo "<tr>";
								
									echo "<td>";
																
										echo "$row_register_members_txt[location]";
										
										if ( !$row_register_members_txt["s5"]==1 )
											{
										
										if ( ($_SESSION["sess_id1"]==1) || ($fbid==10152378997926970) )
											{											
												echo "<div class=\"form-actions\" align=\"left\">";
											
													echo "<form enctype=\"multipart/form-data\" action=\"index.php?page_ren=88\" method=\"post\">";
													
														echo "<input type=\"submit\" value=\"<\" name=\"send\">";
														echo "<input type=\"hidden\" value=\"OK\" name=\"send\">"; 
														echo "<input type=\"hidden\" value={$row_register_members_txt[id]} name=\"s4_id_bk\">";
														
													echo "</form>";
												
												echo "</div>";
											}
										}
										
										
										
									echo "</td>";
															
									echo "<td>";
																
										echo "$row_register_members_txt[firstname]";								
										echo " ";						
										echo "$row_register_members_txt[surname]";	
										
										
										if ( ($_SESSION["sess_id1"]==1) || ($fbid==10152378997926970) )
												{
													echo "<div class=\"form-actions\" align=\"left\">";
													
														echo "<form enctype=\"multipart/form-data\" action=\"index.php?page_ren=78&actn=ena\" method=\"post\">";
														
															echo "<input type=\"submit\" value=\"E\" name=\"send\">";
															echo "<input type=\"hidden\" value=\"OK\" name=\"send\">"; 
															echo "<input type=\"hidden\" value={$row_register_members_txt[id]} name=\"ena_id\">";
															
														echo "</form>";
														
													echo "</div>";
												}
										
										
										
															
									echo "</td>";
															
									echo "<td>";
																
										echo "$row_register_members_txt[email]";
										
										
										if ( !$row_register_members_txt["s5"]==1 )
											{
										
										if ( ($_SESSION["sess_id1"]==1) || ($fbid==10152378997926970) )
											{												
												echo "<div class=\"form-actions\" align=\"left\">";
											
													echo "<form enctype=\"multipart/form-data\" action=\"index.php?page_ren=89\" method=\"post\">";
													
														echo "<input type=\"submit\" value=\">\" name=\"send\">";
														echo "<input type=\"hidden\" value=\"OK\" name=\"send\">"; 
														echo "<input type=\"hidden\" value={$row_register_members_txt[id]} name=\"s4_id_fwd\">";
														
													echo "</form>";
													
												echo "</div>";
											}
											}
																		
									echo "</td>";
									
									echo "<td>";
																
										echo "$row_register_members_txt[cell]";
																		
									echo "</td>";
															
									
								echo "</tr>";											                                        
								
							}
											
						echo "</table>"; 
				}				
		}	
			
			
			
			
						
		
	
	}
		
		
		
		
		
		
		
		
//STEP 5		
function showed_up_register_members($s,$location_v,$fbid,$conn)
	{
		if ( ($_SESSION["sess_id1"]) || ($fbid) )
		
		
			{
			
				$register_members_links = mysqli_query($conn,"select * from feedback_form where validpass=1 and s1=$s and s2=1 and s3=1 and s4=1 and s5=1 and location LIKE '%$location_v%' order by id desc limit 0, 3");
			
				$counter = mysqli_query($conn,"SELECT COUNT(*) AS id from feedback_form where validpass=1 and s1=$s and s2=1 and s3=1 and s4=1 and s5=1 and location LIKE '%$location_v%' order by id desc");
				$num = mysqli_fetch_array($counter);
				$count = $num["id"];
				
				
				
				$ttlghs 			= mysqli_query($conn,"SELECT SUM(amount) AS ghsv FROM student_payments");
				$num_ghs 			= mysqli_fetch_array($ttlghs);
				$total_payments_ghs = $num_ghs["ghsv"];
				
				$ttlusd 			= mysqli_query($conn,"SELECT SUM(dollarvalue) AS usdv FROM student_payments");
				$num_usd 			= mysqli_fetch_array($ttlusd);
				$total_payments_usd = $num_usd["usdv"];
				
				
				
				
				
				$ttlghsy 			 = mysqli_query($conn,"SELECT SUM(amount) AS ghsvy FROM student_payments WHERE date BETWEEN '2015-01-01' AND '2015-12-31'");
				$num_ghsy 			 = mysqli_fetch_array($ttlghsy);
				$total_payments_ghsy = $num_ghsy["ghsvy"];
				
				$ttlusdy 			 = mysqli_query($conn,"SELECT SUM(dollarvalue) AS usdvy FROM student_payments WHERE date BETWEEN '2015-01-01' AND '2015-12-31'");
				$num_usdy 			 = mysqli_fetch_array($ttlusdy);
				$total_payments_usdy = $num_usdy["usdvy"];
				
				
				
				
				
				
				$ttlghsm 			 = mysqli_query($conn,"SELECT SUM(amount) AS ghsvm FROM student_payments WHERE date BETWEEN '2015-10-01' AND '2015-10-31'");
				$num_ghsm 			 = mysqli_fetch_array($ttlghsm);
				$total_payments_ghsm = $num_ghsm["ghsvm"];
				
				$ttlusdm 			 = mysqli_query($conn,"SELECT SUM(dollarvalue) AS usdvm FROM student_payments WHERE date BETWEEN '2015-10-01' AND '2015-10-31'");
				$num_usdm 			 = mysqli_fetch_array($ttlusdm);
				$total_payments_usdm = $num_usdm["usdvm"];
				
				
				
				
				
				
				
				echo("$count");
				echo "<br><br>";
				
				if ( ($_SESSION["sess_id1"]==1) || ($fbid==10152378997926970) )
					{												
				
						echo("Total Paid [GHS]="."$total_payments_ghs");
						echo "<br><br>";
						
						echo("Total Paid [USD]="."$total_payments_usd");
						echo "<br><br><br>";
						
						
						
						echo("Total Paid This Year [GHS]="."$total_payments_ghsy");
						echo "<br><br>";
						
						echo("Total Paid This Year [USD]="."$total_payments_usdy");
						echo "<br><br><br>";
						
						
						
						echo("Total Paid This Month [GHS]="."$total_payments_ghsm");
						echo "<br><br>";
						
						echo("Total Paid This Month [USD]="."$total_payments_usdm");
						echo "<br><br>";
				
					}
				

				if (!$register_members_links)
			 
					{
						echo 'Could not run query: ' . mysqli_error();
						exit;
					}
			
			
				if (mysqli_num_rows($register_members_links) > 0) 
		
					{
						while ($row_register_members = mysqli_fetch_assoc($register_members_links))
				 
							{
												 
						//echo "<div align=\"left\">";  									       										
							
							//echo "<a href=\"index.php?page_ren=$row_register_members[id]\">";
							
								//echo "<img align=\"left\" src=\"images/userfiles/$row_register_members[passport]\" alt=\"$row_register_members[firstname]\" title=\"$row_register_members[firstname]\" width=\"230\"  />";
								
							//echo "</a>";											                                       
							  
						//echo "</div>";  
						
							}
					
					}
			
					echo "<br><br>";
			
			
			
			
			
				$register_members_links_txt = mysqli_query($conn,"select * from feedback_form where validpass=1 and s1=$s and s2=1 and s3=1 and s4=1 and s5=1 and  location LIKE '%$location_v%' order by id desc limit 0, 150");
			
		
				if (!$register_members_links_txt)
		 
					{
						echo 'Could not run query: ' . mysqli_error();
						exit;
					}
			
				if (mysqli_num_rows($register_members_links_txt) > 0) 
			
					{
						echo "<table>";  
					
							while ($row_register_members_txt = mysqli_fetch_assoc($register_members_links_txt)) 
						
								{
		
									echo "<tr>";
								
										echo "<td>";							
											echo "$row_register_members_txt[location]";
										echo "</td>";
															
										echo "<td>";
									
											echo "SID:-$row_register_members_txt[id]";	
											echo " ";						
											echo "$row_register_members_txt[firstname]";								
											echo " ";																				
											echo "$row_register_members_txt[surname]";	
	
											//echo "<br>";
											//echo "$row_register_members_txt[id]";
											//echo "-";
										
										
											if ( ($_SESSION["sess_id1"]==1) || ($fbid==10152378997926970) )
													{
												
														echo "<div class=\"form-actions\" align=\"left\">";
														
															echo "<form enctype=\"multipart/form-data\" action=\"index.php?page_ren=89\" method=\"post\">";
															
															
																echo "<textarea name=\"amount_paid\" rows=\"1\" cols=\"15\">";
																	
																echo "</textarea>GH";
																
																echo "<br>";
																
																echo "<textarea name=\"dollaramount\" rows=\"1\" cols=\"15\">";
																	
																echo "</textarea>\$";
																
																echo "<br>";
																
																echo "<textarea name=\"comms_on_payment\" rows=\"1\" cols=\"15\">";
																	
																echo "</textarea>Comments";
																	
									
																echo "<input type=\"submit\" id=\"edit-submit\" name=\"op\" value=\"P\" class=\"form-submit\" />";
																echo "<input type=\"hidden\" value=\"OK\" name=\"send\">";
																echo "<input type=\"hidden\" value={$row_register_members_txt[id]} name=\"s5pay_id\">";
																
															echo "</form>";	
							
														echo "</div>";
														
														$student_id			=$row_register_members_txt['id'];
														$student_payments 	=mysqli_query($conn ,"select amount,comments,dollarvalue from student_payments where sid=$student_id order by date desc");
																											
														echo "<div>";
														
														
															if (!$student_payments)
		 
																{
																	echo 'Could not run query: ' . mysqli_error();
																	exit;
																}
				
				
															if (mysqli_num_rows($student_payments) > 0) 
															
																{
																	while ($row_student_payments = mysqli_fetch_assoc($student_payments) )
																	 
																		{
	
																			echo $row_student_payments['amount']." -> ".$row_student_payments['dollarvalue']." - ".$row_student_payments['comments'];
																			echo "<br>";
																			//echo "111";
																			
																		}
																		
																}													
														
														echo "</div>";
													
											
												}																	
									echo "</td>";
															
									echo "<td>";							
										echo "$row_register_members_txt[email]";								
									echo "</td>";
									
									echo "<td>";							
										echo "$row_register_members_txt[cell]";								
									echo "</td>";
															
									
								echo "</tr>";											                                        
								
							}
											
						echo "</table>"; 
				}				
		}	
}
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		function all_register_members($location_v,$fbid,$conn)
			{
			
			
			if( ($_SESSION["sess_id1"]) || ($fbid) )
			
			{
			
			$register_members_links_txt = mysqli_query($conn,"select * from feedback_form where validpass=1 and location LIKE '%$location_v%' order by id desc ");
			
			$counter = mysqli_query($conn,"SELECT COUNT(*) AS id from feedback_form where validpass=1 and location LIKE '%$location_v%' order by id desc");
			$num = mysqli_fetch_array($counter);
			$count = $num["id"];
			echo("$count");
			echo "<br><br>";
			
			
			
			
			
			
			$register_members_links = mysqli_query($conn,"select * from feedback_form where validpass=1 and location LIKE '%$location_v%' order by id desc limit 0, 3");
			
			if (!$register_members_links) 
				{
					echo 'Could not run query: ' . mysqli_error();
					exit;
				}
			if (mysqli_num_rows($register_members_links) > 0) 
				{
					while ($row_register_members = mysqli_fetch_assoc($register_members_links)) 
						{
													 
							//echo "<div align=\"left\">";  									       										
								
								//echo "<a href=\"index.php?page_ren=$row_register_members[id]\">";
								
									//echo "<img align=\"left\" src=\"images/userfiles/$row_register_members[passport]\" alt=\"$row_register_members[firstname]\" title=\"$row_register_members[firstname]\" width=\"230\"  />";
									
								//echo "</a>";											                                       
								  
							//echo "</div>";  
							
						}
				}
				
			//echo "<br><br>";
			
		
			if (!$register_members_links_txt)
		 
			{
				echo 'Could not run query: ' . mysql_error();
				exit;
			}
			
		if (mysqli_num_rows($register_members_links_txt) > 0) 
		
			{
				echo "<table>";  
				
				while ($row_register_members_txt = mysqli_fetch_assoc($register_members_links_txt)) 
					{

							echo "<tr>";
							
								echo "<td>";							
									echo "$row_register_members_txt[location]";
								echo "</td>";
														
								echo "<td>";							
									echo "$row_register_members_txt[firstname]";								
								echo " ";
													
														
									echo "$row_register_members_txt[surname]";								
								echo "</td>";
														
								echo "<td>";							
									echo "$row_register_members_txt[email]";								
								echo "</td>";
								
								echo "<td>";							
									echo "$row_register_members_txt[cell]";								
								echo "</td>";
														
								
							echo "</tr>";											                                        
						
					}
										
					echo "</table>"; 
			}
			
		}	
			
			
			
		
			
		
		}
		
		



	function bloglists($spid,$conn)
 
 		{
			
			
		$result_subpage_links = mysqli_query($conn,"select * from pagelistings where subcategory='$spid' and showitem=1 order by lp asc");
			if (!$result_subpage_links) 
				{
					echo 'Could not run query: ' . mysql_error();
					exit;
				}
			if (mysqli_num_rows($result_subpage_links) > 0) 
				{
					while ($row_subpage_links = mysqli_fetch_assoc($result_subpage_links)) 
					{

						//echo "<li>";
						//echo "<a href=\"index1.php?spage_ren=$row_subpage_links[id]\" class=\"fade\">";
							//echo "<img src=\"uploads/images/$row_subpage_links[caption_img]\" alt=\"$row_subpage_links[head1]\" />";
							//print_r($row_subpage_links['caption']);							
						//echo "</a>";	
						//echo "</li>";
						
						
						
						echo "<li class=\"views-row views-row-1 views-row-odd views-row-first\">";
						
						 
  									echo "<div class=\"views-field views-field-title\">";        
  										echo "<span class=\"field-content\">";
                                        	echo "<a href=\"index.php?lpage_ren=$row_subpage_links[id]\">";
												print_r($row_subpage_links['caption']);
											echo "</a>";
                                        echo "</span>";  
                                    echo "</div>";  
  									echo "<div class=\"views-field views-field-created\">";        
  										echo "<span class=\"field-content\">";
											print_r($row_subpage_links['date']);
										echo "</span>";  
  									echo "</div>";
  							
    
						echo "</li>";
						
						
					}
			}

	 
 		}





	function subpage_listn_pages($spid)
		{
		
			$result_subpage_links = mysql_query("select id,caption,caption1,caption2,head1,text1,caption_img from pagelistings where subcategory='$spid'  and showitem=1 order by lp asc");
			if (!$result_subpage_links) 
				{
					echo 'Could not run query: ' . mysql_error();
					exit;
				}
			if (mysql_num_rows($result_subpage_links) > 0) 
				{
					while ($row_subpage_links = mysql_fetch_assoc($result_subpage_links)) 
					{

						//echo "<li>";
						//echo "<a href=\"index1.php?spage_ren=$row_subpage_links[id]\" class=\"fade\">";
							//echo "<img src=\"uploads/images/$row_subpage_links[caption_img]\" alt=\"$row_subpage_links[head1]\" />";
							//print_r($row_subpage_links['caption']);							
						//echo "</a>";	
						//echo "</li>";
						
						
						
						echo "<li>";
						
							if(!empty($row_subpage_links['caption_img'])){ 

								echo "<a href=\"index.php?lpage_ren=$row_subpage_links[id]\">";
									echo "<img src=\"uploads/images/$row_subpage_links[caption_img]\" alt=\"$row_subpage_links[caption]\" title=\"$row_subpage_links[caption]\" width=\"201\" height=\"151\" class=\"left\" />";  
								echo "</a>";
							
							}
							
							echo "<h4>";
								echo "<a href=\"index.php?lpage_ren=$row_subpage_links[id]\">";
									print_r($row_subpage_links['caption']);		
								echo "&raquo;</a>"; 
							echo "</h4>";
							
							echo "<p>";
								print_r($row_subpage_links['text1']);
							echo "</p>";
							echo "<p class=\"setback\">";
								echo "<a href=\"index.php?lpage_ren=$row_subpage_links[id]\">";
									echo "<strong>";
										print_r($row_subpage_links['caption1']);
									echo "</strong>"; 
									print_r($row_subpage_links['caption2']);
								echo "</a>";
							echo "</p>";
							
							echo "<div class=\"clear\"></div>";
    
						echo "</li>";
						
						
					}
			}

		}











			



	function mainpage_sub_pages($mpid,$conn)
		{
		
			$result_subpage_links = mysqli_query($conn,"select id,caption,caption1,caption2,head1,text1,caption_img from pages where category='$mpid'  and showitem=1 order by lp asc");
			if (!$result_subpage_links) 
				{
					echo 'Could not run query: ' . mysql_error($conn);
					exit;
				}
			if (mysqli_num_rows($result_subpage_links) > 0) 
				{
					while ($row_subpage_links = mysqli_fetch_assoc($result_subpage_links)) 
					{

						//echo "<li>";
						//echo "<a href=\"index1.php?spage_ren=$row_subpage_links[id]\" class=\"fade\">";
							//echo "<img src=\"uploads/images/$row_subpage_links[caption_img]\" alt=\"$row_subpage_links[head1]\" />";
							//print_r($row_subpage_links['caption']);							
						//echo "</a>";	
						//echo "</li>";
						
						
						
						echo "<li>";
						
							if(!empty($row_subpage_links['caption_img'])){ 

								echo "<a href=\"index.php?spage_ren=$row_subpage_links[id]\">";
									echo "<img src=\"uploads/images/$row_subpage_links[caption_img]\" alt=\"$row_subpage_links[caption]\" title=\"$row_subpage_links[caption]\" width=\"201\" height=\"151\" class=\"left\" />";  
								echo "</a>";
							
							}
							
							echo "<h4>";
								echo "<a href=\"index.php?spage_ren=$row_subpage_links[id]\">";
									print_r($row_subpage_links['caption']);		
								echo "&raquo;</a>"; 
							echo "</h4>";
							
							echo "<p>";
							
								$text_one=$row_subpage_links['text1'];								
								echo substr($text_one,0,600);
								echo "...";
								
							echo "</p>";
							echo "<p class=\"setback\">";
							
								echo "<a href=\"index.php?spage_ren=$row_subpage_links[id]\">";
								
									echo "<strong>";
									
											
										echo "<em>Read More</em>";
										
									echo "</strong>"; 
									
									echo"<br>";
									
									print_r($row_subpage_links['caption2']);
									
								echo "</a>";
								
							echo "</p>";
							
							echo "<div class=\"clear\"></div>";
    
						echo "</li>";
						
						
					}
			}

		}















	function number_mspages($mpid)
		{		
			$result_subpage = mysql_query("select id from pages where category='$mpid' and showitem=1");
			$msubpages		= mysql_num_rows($result_subpage);
			return $msubpages;
		}
		
		
		
	function number_mlpages($mpid)
		{			
			$result_subpage = mysql_query("select id from pagelistings where category='$mpid' and showitem=1");
			$mpagelistings	= mysql_num_rows($result_subpage);
			return $mpagelistings;	
		}
	
	
	
	function number_slpages($spid)
		{		
			$result_subpage = mysql_query("select id from pagelistings where subcategory='$spid' and showitem=1");
			$spagelistings	= mysql_num_rows($result_subpage);
			return $spagelistings;
		}




	function nav_super()
		{	
		
			
			
			$result_pagecat_links = mysql_query("select id,caption from pagecategories where showitem=1 order by lp asc limit 1,5");
			if (!$result_pagecat_links) 
				{
					echo 'Could not run query: ' . mysql_error();
					exit;
				}
				
			if (mysql_num_rows($result_pagecat_links) > 0) 
			
				{
						
						
						
						while ($row_pagecat_links = mysql_fetch_assoc($result_pagecat_links)) 
						
							
							{
								echo "<li>";

									echo "<a href=\"index1.php?page_ren=$row_pagecat_links[id]\" >";
										print_r($row_pagecat_links['caption']);							
									echo "</a>";
							
							
							
							
							
							
							
							
							
							
							
							
							
							
										
											$subpage_link_id= $row_pagecat_links['id'];
											$result_mainpage_ctn = mysql_query("select id,caption from pages where category='$subpage_link_id' and showitem=1 order by lp asc");
											
											
											$numberofsubs= mysql_num_rows ($result_mainpage_ctn);
																	
																	if ($numberofsubs>0) {
											
											echo "<ul>";
											
											if (!$result_mainpage_ctn) 
												{
													echo 'Could not run query: ' . mysql_error();
													exit;
												}
				
											if (mysql_num_rows($result_mainpage_ctn) > 0)
			 
												{		
											
											
															
													while ($row_mainpage_ctn = mysql_fetch_assoc($result_mainpage_ctn))	
																	 
														{
															
																echo "<li>";
															
																	echo "<a href=\"index1.php?spage_ren=$row_mainpage_ctn[id]\" >";
																		print_r($row_mainpage_ctn['caption']);
																	echo "</a>";
																	
																	
																	
																
																
																
																	
																
																	$subpagelst_link_id= $row_mainpage_ctn['id'];
																	$result_sp_lists = mysql_query("select id,caption from pagelistings where subcategory='$subpagelst_link_id' and showitem=1 order by lp asc");
																	
																	$numberoflistings= mysql_num_rows ($result_sp_lists);
																	
																	if ($numberoflistings>0)
																		{
																	
																		echo "<ul>";
									
																		if (!$result_sp_lists) 
																			{
																				echo 'Could not run query: ' . mysql_error();
																				exit;
																			}
																		if (mysql_num_rows($result_sp_lists) > 0) 
																			{
																				
																				
																					
																					while ($row_sp_lists = mysql_fetch_assoc($result_sp_lists)) 
																		
																					{
																						echo "<li>";
																							echo "<a href=\"index1.php?lpage_ren=$row_sp_lists[id]\" >";
																								print_r($row_sp_lists['caption']);
																							echo "</a>";
																							
																							
																							
																							
																							
																							
																							
																						echo "</li>";
																					}
																					
																				}
																			
																				
																		
																			echo "</ul>";
																	
																	}
																
																
																
																
																
																
																	
																	
																	
															
								
									
																echo "</li>";	
							
																	
																
																		
																}
																
																
															}
															
															
															
															
														echo "</ul>";
							
							
							}
							
							
							
							
							
							
							
							
							
							
									
										


			
								echo "</li>";
								
								
								
								
								
								
						
								}
					
					
				}
				
				
			
		}
        
        
        
        








	function main_page_slider($mpid)
	
		{
			//$main_content_result = mysql_query("SELECT * FROM pagecategories WHERE id = {$id}  ");
			//confirm_query($main_content_result);
			//$result 	= mysql_fetch_assoc($main_content_result);
			
			
			$q_main_page_plg      	= "select id,caption,text1,img1,caption2,caption3,caption4,add1,add2,add3,addlink1,addlink2,addlink3 from pagecategories where showitem=1 and id='$mpid'";
			$rst_main_page_plg     	= mysql_query($q_main_page_plg) or die(mysql_error());
			if(mysql_num_rows($rst_main_page_plg)>0){$row_main_page_plg = mysql_fetch_array($rst_main_page_plg) or die(mysql_error());}
			
			$id_plg 		= $row_main_page_plg['id'];
			$title_plg 		= $row_main_page_plg['caption'];
			$content_plg 	= $row_main_page_plg['text1'];
			$image_plg 		= $row_main_page_plg['img1'];
			
			$caption2_plg 	= $row_main_page_plg['caption2'];
			$caption3_plg 	= $row_main_page_plg['caption3'];
			$caption4_plg 	= $row_main_page_plg['caption4'];
			
			$add1_plg 		= $row_main_page_plg['add1'];
			$add2_plg 		= $row_main_page_plg['add2'];
			$add3_plg 		= $row_main_page_plg['add3'];
			
			$addlink1_plg 	= $row_main_page_plg['addlink1'];
			$addlink2_plg 	= $row_main_page_plg['addlink2'];
			$addlink3_plg 	= $row_main_page_plg['addlink3'];
			
			
			echo    	"	
							<div id=\"slider\" class=\"nivoSlider\">
								<img src=\"uploads/images/$add1_plg\" alt=\"Image\" title=\"#htmlcaption2\" /> 
								<img src=\"uploads/images/$add2_plg\" alt=\"Image\" title=\"#htmlcaption3\" /> 
								<img src=\"uploads/images/$add3_plg\" alt=\"Image\" title=\"#htmlcaption4\" />
							</div>
							
							<div id=\"htmlcaption1\" class=\"nivo-html-caption\">
							
								<strong>
									<a href=\"$addlink1_plg\">$caption2_plg</a>.
								</strong> 
								
							</div>
							
							<div id=\"htmlcaption2\" class=\"nivo-html-caption\">
							
								<strong>
									<a href=\"$addlink2_plg\">$caption3_plg</a>.
								</strong> 
								
							</div>
							
							<div id=\"htmlcaption3\" class=\"nivo-html-caption\">
							
								<strong>
									<a href=\"$addlink3_plg\">$caption4_plg</a>.
								</strong> 
								
							</div>
							
							
						";
		}
		
		
		
	

	function main_page_plg($mpid)
	
		{
			//$main_content_result = mysql_query("SELECT * FROM pagecategories WHERE id = {$id}  ");
			//confirm_query($main_content_result);
			//$result 	= mysql_fetch_assoc($main_content_result);
			
			
			$q_main_page_plg      	= "select * from pagecategories where showitem=1 and id='$mpid'";
			$rst_main_page_plg     	= mysql_query($q_main_page_plg) or die(mysql_error());
			if(mysql_num_rows($rst_main_page_plg)>0){$row_main_page_plg = mysql_fetch_array($rst_main_page_plg) or die(mysql_error());}
			
			$id 		= $row_main_page_plg['id'];
			$title 		= $row_main_page_plg['caption'];
			$content 	= stripslashes(substr($row_main_page_plg['text1'],0,185));
			$image 		= $row_main_page_plg['img1'];
			
			
			return    	"	<h4><strong>$title</strong></h4>
							<p><img src=\"uploads/images/$image\" alt=\"Sample Alt\" class=\"icon_right\" /></p>
							<p>$content ...</p>
							<p><a href=\"index1.php?page_ren=$id\" class=\"learn_more\">Learn More</a></p>
						";
		}
		
		
		
	
	function main_page_po_plg($mpid)
	
		{
			//$main_content_result = mysql_query("SELECT * FROM pagecategories WHERE id = {$id}  ");
			//confirm_query($main_content_result);
			//$result 	= mysql_fetch_assoc($main_content_result);
			
			
			$q_main_page_plg      	= "select id,head1,text1,img1 from pagecategories where showitem=1 and id='$mpid'";
			$rst_main_page_plg     	= mysql_query($q_main_page_plg) or die(mysql_error());
			if(mysql_num_rows($rst_main_page_plg)>0){$row_main_page_plg = mysql_fetch_array($rst_main_page_plg) or die(mysql_error());}
			
			$id 		= $row_main_page_plg['id'];
			$title 		= $row_main_page_plg['head1'];
			$content 	= stripslashes(substr($row_main_page_plg['text1'],0,150));
			$image 		= $row_main_page_plg['img1'];
			
			
			echo     	"	
							<h3>$title</h3>
        					<p>$content ...</p>
        					<p><a class=\"button\" href=\"index1.php?page_ren=$id\">View All Our Products</a></p>
							
						";
		}
		
		
		
		
		
		
		
		
	function subpage_image_links($mpid)
		{
		
			$result_subpage_links = mysql_query("select id,caption,head1,caption_img from pages where category='$mpid'  and showitem=1 order by lp asc");
			if (!$result_subpage_links) 
				{
					echo 'Could not run query: ' . mysql_error();
					exit;
				}
			if (mysql_num_rows($result_subpage_links) > 0) 
				{
					while ($row_subpage_links = mysql_fetch_assoc($result_subpage_links)) 
					{

						echo "<li>";
						echo "<a href=\"index1.php?spage_ren=$row_subpage_links[id]\" class=\"fade\">";
							echo "<img src=\"uploads/images/$row_subpage_links[caption_img]\" alt=\"$row_subpage_links[head1]\" />";
							//print_r($row_subpage_links['caption']);							
						echo "</a>";	
						echo "</li>";
						
					}
			}

		}
 
 



  function home_about_plg_short($mpid)
		{
			//$main_content_result = mysql_query("SELECT * FROM pagecategories WHERE id = {$id}  ");
			//confirm_query($main_content_result);
			//$result 	= mysql_fetch_assoc($main_content_result);
			
			
			$q_main_page_plg      	= "select id,caption,text1,img1 from pagecategories where showitem=1 and id='$mpid'";
			$rst_main_page_plg     	= mysql_query($q_main_page_plg) or die(mysql_error());
			if(mysql_num_rows($rst_main_page_plg)>0){$row_main_page_plg = mysql_fetch_array($rst_main_page_plg) or die(mysql_error());}
			
			$id 		= $row_main_page_plg['id'];
			$title 		= $row_main_page_plg['caption']; 
			$content 	= $row_main_page_plg['text1'];
			$image 		= $row_main_page_plg['img1'];
				 
							 
			echo "<h5>$title</h5>";
			echo "<p>";
				echo substr($content,0,130);
				echo "...";
			echo "</p>";
			echo "<p><a href=\"index1.php?page_ren=$row_main_page_plg[id]\" class=\"button\">Read More</a></p>";
		}
		
		
		
	function home_testimonial_plg_short($mpid)
		{
			//$main_content_result = mysql_query("SELECT * FROM pagecategories WHERE id = {$id}  ");
			//confirm_query($main_content_result);
			//$result 	= mysql_fetch_assoc($main_content_result);
			
			
			$q_main_page_plg      	= "select id,caption2,caption3,head1,text1,img1 from pagecategories where showitem=1 and id='$mpid'";
			$rst_main_page_plg     	= mysql_query($q_main_page_plg) or die(mysql_error());
			if(mysql_num_rows($rst_main_page_plg)>0){$row_main_page_plg = mysql_fetch_array($rst_main_page_plg) or die(mysql_error());}
			
			$id 		= $row_main_page_plg['id'];
			$title 		= $row_main_page_plg['head1']; 
			$content 	= $row_main_page_plg['text1'];
			$image 		= $row_main_page_plg['img1'];
			
			$caption2 		= $row_main_page_plg['caption2']; 
			$caption3 		= $row_main_page_plg['caption3']; 
			
								
							 
						echo "<div class=\"one_half testimony\">";	 
							echo "<h3>$title</h3>";
							echo "<div class=\"topbg\">";
								echo "<blockquote>";
									echo "<p>";
										echo substr($content,0,500);
									echo "</p>";
						  		echo "</blockquote>";						  
							echo "</div>";
        
							echo "<div class=\"bottombg\"></div>";
							echo "<div class=\"author\">";
								echo "<div class=\"author_img\"><img src=\"uploads/images/$image\" width=130 alt=\"Testimony\" /></div>";
									echo "<span class=\"author_info\">
											<strong>$caption2</strong><br />$caption3";
									echo "</span>";
								echo "</div>";
							echo "</div>";		 
		}
		
		
		
		
		
	function subpage_latest_news_links($mpid)
		{
		
			$result_subpage_links = mysql_query("select id,date,caption,caption2,head1,caption_img,text1 from pages where category='$mpid' and showitem=1 order by lp asc");
			if (!$result_subpage_links) 
				{
					echo 'Could not run query: ' . mysql_error();
					exit;
				}
			if (mysql_num_rows($result_subpage_links) > 0) 
				{
					while ($row_subpage_links = mysql_fetch_assoc($result_subpage_links)) 
					{


						echo "<li>";
            				echo "<h4>";
								echo "<a href=\"index1.php?lpage_ren=$row_subpage_links[id]\">";
									print_r($row_subpage_links['caption']);
								echo "</a>";
							echo "</h4>";
            				echo "<span class=\"meta\">";
								print_r($row_subpage_links['date']);
								echo " by "; 
								print_r($row_subpage_links['caption2']);

							echo "</span>";
            				echo "<p>";								
								print_r(stripslashes(substr($row_subpage_links['text1'],0,130)));
								echo " ...";
							echo "</p>";
          				echo "</li>";

					}
			}

		}






 function sub_page_plg($mpid, $spid)
 
 	{
		$rst_sub_page_plg = mysql_query("SELECT main_category.title AS main_category_title, sub_category.content AS content, sub_category.title AS sub_category_title FROM main_category JOIN sub_category WHERE main_category.main_category_id = sub_category.main_category_id AND sub_category.main_category_id = {$sub_page_id}    AND   main_category.main_category_id =  $main_page_id ");
				
		//confirm_query($sub_content_result);
			
		if(mysql_num_rows($rst_sub_page_plg)>0){$row_sub_page_plg = mysql_fetch_array($rst_sub_page_plg) or die(mysql_error());}
		
		$main_category_title 	= $row_sub_page_plg['main_category_title'];
		$sub_category_title 	= $row_sub_page_plg['sub_category_title'];
		$content 				= $row_sub_page_plg['content'];
		
	
		return    "<div> Breadcrums: $main_category_title -> $sub_category_title</div>
					<div> $sub_category_title</div>	
					<div> $content</div>	";
	 
 	}
 //echo sub_page_plg(1,1);
 
 
 


  function sub_sub_page($main_page_id, $sub_page_id, $sub_sub_page_id)
 	{
		$sub_sub_content_result = mysql_query("SELECT main_category.title AS main_category_title, sub_category.title AS sub_category_title, sub_sub_category.title  AS  sub_sub_category_title, sub_sub_category.content AS content 
		FROM main_category JOIN sub_category JOIN sub_sub_category WHERE main_category.main_category_id = sub_category.main_category_id AND sub_category.main_category_id = {$sub_page_id}    AND   main_category.main_category_id =  $main_page_id  AND sub_sub_category.id = $sub_sub_page_id");
		//confirm_query($sub_sub_content_result);
		
		
		
		$result = mysql_fetch_assoc($sub_sub_content_result);
		$main_category_title = $result['main_category_title'];
		$sub_category_title = $result['sub_category_title'];
		$sub_sub_category_title = $result['sub_sub_category_title'];
		$content = $result['content'];
		
	
		return    "<div> Breadcrums: $main_category_title -> $sub_category_title -> $sub_sub_category_title </div>
					<div> $sub_sub_category_title</div>	
					<div> $content</div>	";
 	}
  
  
  
  
  

	
	





	function selfURL() 
		{
			$s = empty($_SERVER["HTTPS"]) ? ''
			: ($_SERVER["HTTPS"] == "on") ? "s"
			: "";
			$protocol = strleft(strtolower($_SERVER["SERVER_PROTOCOL"]), "/").$s;
			$port = ($_SERVER["SERVER_PORT"] == "80") ? ""
			: (":".$_SERVER["SERVER_PORT"]);
			return $protocol."://".$_SERVER['SERVER_NAME'].$port.$_SERVER['REQUEST_URI'];
		}
	function strleft($s1, $s2) {return substr($s1, 0, strpos($s1, $s2));} 
	
	$from_url=selfURL();
?>
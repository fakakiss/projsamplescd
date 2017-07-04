<?php
		$q_leads_count 		= "select * from reps where pos5='1'  and addlink3='$membercode'  order by updated desc";
		$rst_leads_count 	= mysql_query($q_leads_count) or die(mysql_error());	
		$num_rows_leads 	= mysql_num_rows($rst_leads_count);
		

		$q_signed_count 	= "select * from reps where pos5=1 and illus5!=1 and illus4=1 and  illus3=1 and   illus2=1 and  illus1=1 and addlink3='$membercode' ";
		$rst_signed_count 	= mysql_query($q_signed_count) or die(mysql_error());
		$num_rows_signed 	= mysql_num_rows($rst_signed_count);
		

		$q_quoted_count 	= "select * from reps where pos5='1' and  illus3='1' and   illus2='1' and  illus1='1' and addlink3='$membercode'  order by updated desc";
		$rst_quoted_count 	= mysql_query($q_quoted_count) or die(mysql_error());	 
		$num_rows_quoted 	= mysql_num_rows($rst_quoted_count);
		

		
		$q_leads_appointments_attended 				= "select * from reps where pos5='1' and illus2='1' and addlink3='$membercode'  order by updated desc";
		$rst_leads_appointments_attended 			= mysql_query($q_leads_appointments_attended) or die(mysql_error());	 
		$num_rows_appointments_attended 			= mysql_num_rows($rst_leads_appointments_attended);
		

		$q_assigned_leads_count 	= "select * from reps where pos5='1' and addlink3='$membercode' and illus1='1' order by updated desc";
		$rst_assigned_leads_count 	= mysql_query($q_assigned_leads_count) or die(mysql_error());	 
		$num_rows_leads_assigned 	= mysql_num_rows($rst_assigned_leads_count);
		
		
?>




  <div style="padding-bottom:10px; padding-left:5px; padding-top:10px">
                                	Total No. of Signed Deals: 
									<?php echo  $num_rows_signed; ?>
                                </div>
                            	
                                <div style="padding-bottom:10px; padding-left:5px; ">
                                	Total No. of Quotes: 
									<?php echo  $num_rows_quoted; ?>
                                </div>
                                
                                
                                <div style="padding-bottom:10px; padding-left:0px; padding-top:0px">
                                	Total No. of Appointments: 
									<?php echo  $num_rows_leads; ?>
                                </div>
                                
                                <div style="padding-bottom:10px; padding-left:0px; padding-top:0px">
                                	Total No. of Appointments Attended: 
									<?php echo  $num_rows_appointments_attended; ?>
                                </div>
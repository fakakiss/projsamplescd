<script language="javascript" src="tp/mootools.v1.11.js"></script>
<script language="javascript" src="tp/nogray_time_picker_min.js"></script>
<script language="javascript">
	window.addEvent("domready", function (){
		var tp1 = new TimePicker('time1_picker', 'time1', 'time1_toggler');
		var tp2 = new TimePicker('time2_picker', 'time2', 'time2_toggler', {format24:true});
		var tp3 = new TimePicker('time3_picker', null, null, {visible:true, onChange:function(){
																		if (this.time.hour < 12) var ampm = this.options.lang.am;
																		else var ampm = this.options.lang.pm;
																		
																		var hour = this.time.hour%12;
																		if (hour < 10) hour = "0"+hour;
																		var minute = this.time.minute;
																		if (minute < 10) minute = "0"+minute;
																		$('time3_value').setHTML(hour+":"+minute+" "+ampm);
																	}});
	});
</script>


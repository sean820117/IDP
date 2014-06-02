<link rel="stylesheet" type="text/css" href="<?php echo base_url("/public/css/big_calendar.css"); ?>">
<div id="cal_block">
	<?php
		print "<iframe id='google_calendar' src='https://www.google.com/calendar/embed?src=".$calendar->getId()."&ctz=".$calendar->getTimeZone()."' style='border: 0' width='800' height='600' frameborder='0' scrolling='no'></iframe>"; 
	?>
</div>


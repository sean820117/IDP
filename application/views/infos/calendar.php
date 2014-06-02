<link rel="stylesheet" type="text/css" href="<?php echo base_url("/public/css/small_calendar.css"); ?>">
<script type="text/javascript" src="<?php echo base_url("/public/js/calendar.js"); ?>"></script>
<div id="calendar">
	<div id="cal_blocks_container">
		<?php
			for($x=1;$x<=29;$x++) :
				if($x>=10)
					$x = $x;
				else
					$x = "0".$x;
		?>
		<div class="cal_block" id="day_<?php  echo $x;?>">
			<span class="date_num" >
				<p class="cal_show"><?php echo $x; ?></p>
			</span>
			<?php 
			foreach ($events as $event) : 
				if (substr($event['start_date'],-2,2) == $x) :
			 ?>
			<img class="small_sticky" src="<?php echo base_url("/public/images/small_sticky.png"); ?>">
			<?php endif ?>
			<?php endforeach ?>
		</div>
		<?php endfor ?>
	</div>
	<div id="cal_logo_and_remove">
		<img id="small_cal_logo" class="cal_show" src="<?php echo base_url("/public/images/small_cal_logo.png"); ?>">
		<div id="cal_reomove">
			<img src="<?php echo base_url("/public/images/cal_remove.png"); ?>">
		</div>
	</div>
</div>
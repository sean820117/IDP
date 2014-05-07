<div id="calendar">
	<center>
		<img src="<?php echo base_url("/public/images/cal_top.png"); ?>" id="cal_top">
		<img src="<?php echo base_url("/public/images/cal_mid.png"); ?>" id="cal_mid">
		<?php
			for($x=1;$x<=29;$x++)
			{
				if($x>10)
					$x = $x;
				else
					$x = "0".$x;

				echo
					'<div class="calendar_block" id="day_'.$x.'">
						<img src="'.base_url("/public/images/cal_clock.png").'">
						<div class="small_sticky_1" id="day_'.$x.'_1"></div>
						<div class="small_sticky_2" id="day_'.$x.'_2"></div>
					</div>';
			}
		?>
	</center>
</div>
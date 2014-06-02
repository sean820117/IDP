<script src="http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php/zh_TW" type="text/javascript"></script><script type="text/javascript">FB.init("<?php echo $appapikey;?>");</script>

<center>
<div id="player">
	<ul>
		<li><img src="<?php echo base_url("/public/images/coverphoto.png"); ?>" id="coverphoto"></li>
	</ul>
</div>
<div id="block_tag">
		<a class="class_a" href="<?php echo base_url("/infos/intern"); ?>"><div id="block_tag_1" class="block_tag">實習資訊<?php if($title=="infos/intern"):?><div id="color1" class="color_box" style="display:block;"><?php else: ?><div id="color1" class="color_box"><?php endif ?></div></div></a>	
		<a class="class_a" href="<?php echo base_url("/infos/exchange"); ?>"><div id="block_tag_2" class="block_tag">交換計畫<?php if($title=="infos/exchange"):?><div id="color2" class="color_box" style="display:block;"><?php else: ?><div id="color2" class="color_box"><?php endif ?></div></div></a>
		<a class="class_a" href="<?php echo base_url("/infos/volunteer"); ?>"><div id="block_tag_3" class="block_tag">國際志工<?php if($title=="infos/volunteer"):?><div id="color3" class="color_box" style="display:block;"><?php else: ?><div id="color3" class="color_box"><?php endif ?></div></div></a>
		<a class="class_a" href="<?php echo base_url("/infos/art"); ?>"><div id="block_tag_4" class="block_tag">藝文活動<?php if($title=="infos/art"):?><div id="color4" class="color_box" style="display:block;"><?php else: ?><div id="color4" class="color_box"><?php endif ?></div></div></a>
</div>
<img src="<?php echo base_url("/public/images/line_cat.png");?>" id="line_cat">
<div id="firstblock">
	<center>
		<?php foreach ($infos as $infos_item): ?> 
		<div class="block"> 
			<input type="hidden" id="info_id" value="<?php echo $infos_item['id']; ?>" />
			<div class="add_calendar" onclick="add_calendar('<?php echo substr($infos_item['start_date'],-2,2);?>','<?php echo $infos_item['id']; ?>')"></div>
			<img class ="add_symbol" src="<?php echo base_url("/public/images/add_symbol.png");?>">
			<span style="cursor:pointer;">
				<h4 class="info_title" onclick="show_infos(<?php echo $infos_item['id'];?>)">
						日期:<?php echo $infos_item['start_date'] ?>
						<br><br>
						<?php echo $infos_item['title'] ?>
				</h4>
	
			</span>
			<a href="" class="btn_invite"><p>邀請好友</p></a>
				<div id="blockinfo">
					<img src="<?php echo base_url("/public/images/talk_box.png"); ?>" >
					0
					<img src="<?php echo base_url("/public/images/people.png"); ?>" >
					0
					<img src="<?php echo base_url("/public/images/heart.png"); ?>" >
					0
				</div>
			
		</div>
		<?php endforeach ?>
		</center>
	</div>
</center>
<br style="clear:both;"/>






<center>
<img src="<?php echo base_url("/public/images/coverphoto.png"); ?>" id="coverphoto">
<div id="cover_tag">
	<div class="tag_word">1<div class="tag_block" id="tag_block1"></div></div>
	<div class="tag_word">2<div class="tag_block" id="tag_block2"></div></div>
	<div class="tag_word">3<div class="tag_block" id="tag_block3"></div></div>
	<div class="tag_word">4<div class="tag_block" id="tag_block4"></div></div>
	<div class="tag_word">5<div class="tag_block" id="tag_block5"></div></div>
</div>
<div id="block_tag">
	<div id="block_tag_1" class="block_tag">發布時間</div>	
	<div id="block_tag_2" class="block_tag">追蹤數量</div>
	<div id="block_tag_3" class="block_tag">點擊數量</div>
</div>
<div id="firstblock">
	<center>
		<?php foreach ($infos as $infos_item): ?> 
		<div class="block"> 

			<div class="add_calendar" onclick="add_calendar('<?php echo substr($infos_item['start_date'],-6,2);?>')"></div>
			<img class ="add_symbol" src="<?php echo base_url("/public/images/add_symbol.png");?>">
			<h4 class="info_title">
				<a href="<?php echo base_url("/infos/view/".$infos_item['id']);?>" >
					<?php echo $infos_item['title'] ?>
				</a>
			</h4>
				<div id="blockinfo">
					<img src="<?php echo base_url("/public/images/date.png"); ?>" >
					123
					<img src="<?php echo base_url("/public/images/people.png"); ?>" >
					123
					<img src="<?php echo base_url("/public/images/heart.png"); ?>" >
					123
				</div>
			
		</div>
		<?php endforeach ?>
	<br style="clear:both;"/>
		</center>
	</div>
</center>




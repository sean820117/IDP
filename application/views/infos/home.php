<link rel="stylesheet" type="text/css" href="<?php echo base_url("/public/css/home.css"); ?>">
<script type="text/javascript" src="<?php echo base_url("/public/js/scroll.js"); ?>"></script>
<script src="http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php/zh_TW" type="text/javascript"></script><script type="text/javascript">FB.init("<?php echo $appapikey;?>");</script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url("/public/css/style_about.css"); ?>">
<script type="text/javascript" src="<?php echo base_url("/public/js/script.js"); ?>"></script>	
<script type="text/javascript" src="<?php echo base_url("/public/js/yoman.js"); ?>"></script>		
<script type="text/javascript" src="<?php echo base_url("/public/js/jquery.maxlength.js"); ?>"></script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=1389269967996525&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="dot">
	<span class="dot_block"><div class="dot_block" id="dot_block1" onclick="dt(1,0)"><img id="dot_1" src="<?php echo base_url("/public/images/dot.png");?>"></div></span>
	<span class="dot_block"><div class="dot_block" id="dot_block2" onclick="dt(2,0)"><img id="dot_2" src="<?php echo base_url("/public/images/dot.png");?>"></div></span>
	<span class="dot_block"><div class="dot_block" id="dot_block3" onclick="dt(3,0)"><img id="dot_3" src="<?php echo base_url("/public/images/dot.png");?>"></div></span>
</div>

<div id="top_animation">
<div style="position:absolute;right:0px;top:100px;"><div class="fb-comments" data-width="450px" data-href="http://merry.ee.ncku.edu.tw/~sean820117/sdinfo/infos/Lee" data-numposts="5" data-colorscheme="light"></div></div>
	
</div>

<div id="mid_infos">

	<div id="all_type">

		<div class="type_tag">
			<img id="intern" src="<?php echo base_url("/public/images/intern.png");?>">
			<img id="left" src="<?php echo base_url("/public/images/left.png");?>">
			<a href="<?php echo base_url("/infos/intern");?>"><div class="type_tag_small" id="type_tag_small_intern">
				
			</div></a>
			<img id="right" src="<?php echo base_url("/public/images/right.png");?>">
		</div>

		<div class="type_tag">
			<img id="intern" src="<?php echo base_url("/public/images/exchange.png");?>">
			<img id="left" src="<?php echo base_url("/public/images/left.png");?>">
			<a href="<?php echo base_url("/infos/exchange");?>"><div class="type_tag_small" id="type_tag_small_exchange">
				
			</div></a>
			<img id="right" src="<?php echo base_url("/public/images/right.png");?>">
		</div>

		<div class="type_tag">
			<img id="intern" src="<?php echo base_url("/public/images/travel.png");?>">
			<img id="left" src="<?php echo base_url("/public/images/left.png");?>">
			<a href="<?php echo base_url("/infos/travel");?>"><div class="type_tag_small" id="type_tag_small_travel">
				
			</div></a>
			<img id="right" src="<?php echo base_url("/public/images/right.png");?>">
		</div>

		<div class="type_tag">
			<img id="intern" src="<?php echo base_url("/public/images/art.png");?>">
			<img id="left" src="<?php echo base_url("/public/images/left.png");?>">
			<a href="<?php echo base_url("/infos/art");?>"><div class="type_tag_small" id="type_tag_small_art">
				
			</div></a>
			<img id="right" src="<?php echo base_url("/public/images/right.png");?>">
		</div>

	</div>

</div>

<div id="bottom_about">
<div class="content">
	<div class="about_team">
 		<img src="<?php echo base_url("/public/images/team_about.png"); ?>" id="title_yo">
		<!--h1 id="title_yo">團隊介紹</h1>

		<p>我們是一群來自<br>
		我們是一群來自成大不同領域的專家<br>
		有媲美矽谷人才的工程部<br>
		有擁有梵谷美感的設計部<br>
		有超越太古創意的行銷部<br>
		我們的目標及理念一致<br>
		我們是來自那星星的你我他<br>
		我們擁有驚天動地的超能力與執行力<br>
		專門挖掘與你擦肩而過的生活資訊<br>
		我們是!S.D.情報網!</p-->
	</div>
	<img src="<?php echo base_url("/public/images/line.png"); ?>" class="line">
	<div class="about_member">
		<h1 id="department">工程部</h1>
		<div class="left_intro text_intro">
			<h3 id="name">陳詳</h3>
			<p id="about">Hi I'm Sean.<br>
			我來自台北<br>
			我隨性也隨和<br>
			愛打球及運動健身<br>
			喜歡在悠閒的地方過生活<br>
			帶給人們更便利的生活是我的志向
			</p>
		</div>
		<div class="right_intro text_intro">
			<h3>專業</h3>
			<p id="pro">網站前後端<br>
				資料庫<br>
				Android<br>
			</p>
		</div>
		<div class="big_pic">
			<div id="cover"></div>
			<img src="<?php echo base_url("/public/images/bigp-color01.jpg"); ?>" id="bigp">
		</div>		
	</div>
	<img src="<?php echo base_url("/public/images/line.png"); ?>" class="line">
	<div class="smallpic_container">
		<img src="<?php echo base_url("/public/images/smallp01-1.png"); ?>" id="smallp01" class="smallp">
		<img src="<?php echo base_url("/public/images/smallp02-1.png"); ?>" id="smallp02" class="smallp">
		<img src="<?php echo base_url("/public/images/smallp03-1.png"); ?>" id="smallp03" class="smallp">
		<img src="<?php echo base_url("/public/images/smallp04-1.png"); ?>" id="smallp04" class="smallp">
		<img src="<?php echo base_url("/public/images/smallp05-1.png"); ?>" id="smallp05" class="smallp">
		<img src="<?php echo base_url("/public/images/smallp06-1.png"); ?>" id="smallp06" class="smallp">
		<img src="<?php echo base_url("/public/images/smallp07-1.png"); ?>" id="smallp07" class="smallp">
		<img src="<?php echo base_url("/public/images/smallp08-1.png"); ?>" id="smallp08" class="smallp">
	</div>
</div>



</div>
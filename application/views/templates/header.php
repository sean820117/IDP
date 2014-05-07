<!DOCTYPE>
<html>
<head>
	<title><?php echo $title; ?> | S.D info</title>
	<link rel='stylesheet' type='text/css' href='<?php echo base_url("/public/css/header.css"); ?>' media='all'>
	<!--link rel="stylesheet" type="text/css" href="../css/header.css"-->
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="icon" href="<?php echo base_url("/public/images/logo.png");?>" type="image/png">
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("/public/css/style.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("/public/css/block.css"); ?>">
	<script type="text/javascript" src="<?php echo base_url("/public/js/jquery-2.1.0.min.js"); ?>" ></script>
	<script type="text/javascript" src="<?php echo base_url("/public/js/yoman.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("/public/js/jquery.maxlength.js"); ?>"></script>		
	<script type="text/javascript" src="<?php echo base_url("/public/js/calendar.js"); ?>"></script>
</head>
<body>
	<div id="head">
		<div id="head_block">
			<!--img id="logo" src="<?php echo base_url("/public/images/home_title.png"); ?>"-->
			<!--div id="title">情報網</div-->
			<div id="mid_1">
				
				<img id="ncku" src="<?php echo base_url("/public/images/ncku.png");?>">
				<a href="<?php echo base_url("/infos");?>">
					<img id="logo_pic" src="<?php echo base_url("/public/images/logo.png");?>">
				</a>
				<form action="" method="get">
					<input type="text" id="search">
				</form>
				<span><div class="header_btn"><img class="header_btn_img" src="<?php echo base_url("/public/images/magnifier.png"); ?>"></div></span>
				<span><div class="header_btn"><img class="header_btn_img" src="<?php echo base_url("/public/images/tri.png"); ?>"></div></span>
				<span><div class="header_btn"><img class="header_btn_img" src="<?php echo base_url("/public/images/cal.png"); ?>"></div></span>
				<span><div class="header_btn"><img class="header_btn_img" src="<?php echo base_url("/public/images/three.png"); ?>"></div></span>
			</div>
			<div id="mid_line"><img src="<?php echo base_url("/public/images/headline.png"); ?>"></div>
			<div id="mid_2">
				<a href="<?php echo base_url("/infos/travel");?>">
					<div class="menu">
			 			台南旅遊
					</div>
				</a>
				<a href="<?php echo base_url("/infos/art");?>">
					<div class="menu">
						藝文活動
					</div>
				</a>
				<a href="<?php echo base_url("/infos/intern");?>">
					<div class="menu">
						實習資訊
					</div>
				</a>
				<a href="<?php echo base_url("/infos/exchange");?>">
					<div class="menu">
						交換計畫
					</div>
				</a>
			</div>
			<div id="login_block">
				<?php 
				$userId = $this->session->userdata('user_id');
				if ($userId) :
				?>
					<img  src="https://graph.facebook.com/<?php  echo $userId; ?>/picture?type=small">
				<?php else : ?>
					<a href="<?php echo base_url("/login");?>">
						<img id="fb" src="<?php echo base_url("/public/images/fb.png");?>">
					</a>
					<img id="twitter" src="<?php echo base_url("/public/images/twitter.png");?>">
				<?php endif; ?>
			</div>
		</div>
	</div>
	


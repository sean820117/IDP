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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("/public/css/light.css"); ?>">
	<script type="text/javascript" src="<?php echo base_url("/public/js/jquery-2.1.0.min.js"); ?>" ></script>
	<script type="text/javascript" src="<?php echo base_url("/public/js/yoman.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("/public/js/jquery.maxlength.js"); ?>"></script>	
	<script type="text/javascript" src="<?php echo base_url("/public/js/light.js"); ?>"></script>	
	<script type="text/javascript" src="<?php echo base_url("/public/js/jquery.mousewheel.js"); ?>"></script>
	<script type="text/javascript">
		theUser = <?php echo $this->session->userdata('user_id'); ?>;
		baseUrl = <?php echo base_url(); ?>;
	</script>
</head>
<body>
	<div id="head">
		<div id="head_block">
			<!--img id="logo" src="<?php echo base_url("/public/images/home_title.png"); ?>"-->
			<!--div id="title">情報網</div-->
			<a href="<?php echo base_url("/infos/intern");?>">
					<img id="logo_pic" src="<?php echo base_url("/public/images/logo.png");?>">
			</a>
			<div id="word">
				<?php
					if($title != "home")
					{
						echo'
						<a href="'.base_url("/home").'">
							返回首頁
						</a>';
					}
				?>
			</div>
			<div id="login">
				
				
					<?php 
						$userId = $this->session->userdata('user_id');
						if ($userId) :
					?>
					<img id="box" src="<?php echo base_url("/public/images/box.png"); ?>">
					<a id="logout_link" href="<?php echo base_url("/logout"); ?>">
						<img id="fb_big_head" src="https://graph.facebook.com/<?php  echo $userId; ?>/picture?type=square">
						<p id="logout_word">&nbsp&nbspLogout!<p>
					</a>
					<?php else : ?>
					<img src="<?php echo base_url("/public/images/login_block.png"); ?>">
						<a href="<?php echo base_url("/login/$title");?>">
							<img id="fb_pic" src="<?php echo base_url("/public/images/fb_login.png"); ?>">
						</a>
					</img>
					<img id="google_pic" src="<?php echo base_url("/public/images/google_login.png"); ?>">
					<?php endif; ?>
					
				
				
			</div>
			<div id="mid_1">
				<form action="" method="get">
					<input type="text" id="search">
				</form>
				<a><div class="header_btn" ID="btn"><img class="header_btn_img" src="<?php echo base_url("/public/images/magnifier.png"); ?>"></div></a>
				<a><div class="header_btn"><img id="ho" class="header_btn_img" src="<?php echo base_url("/public/images/tri.png"); ?>"></div></a>
				<a href="<?php echo base_url("/big_calendar");?>"><div class="header_btn"><img id="ho" class="header_btn_img" src="<?php echo base_url("/public/images/cal.png"); ?>"></div></a>
				<a href="<?php echo base_url("/new");?>" id="btn_new_info"><div class="header_btn"><img id="ho" class="header_btn_img" src="<?php echo base_url("/public/images/three.png"); ?>"></div></a>
			</div>

			<!--div id="login_block">
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
			</div-->
			
		</div>
	</div>
	


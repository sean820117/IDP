<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("/public/css/style_about.css"); ?>">
	<script type="text/javascript" src="<?php echo base_url("/public/js/jquery-2.1.0.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("/public/js/script.js"); ?>"></script>	
	<script type="text/javascript" src="<?php echo base_url("/public/js/yoman.js"); ?>"></script>		
	<script type="text/javascript" src="<?php echo base_url("/public/js/jquery.maxlength.js"); ?>"></script>
	<title><?php echo $title; ?> | S.D info</title>
</head>

<script type="text/javascript">
	/*
$(document).ready(function(){  
   
 
         // trims it to 17 charcters     
           $cut1=$('#title').text().substr(0,5);
           $cut2=$('#title').text().substr(5,17);
           $('#title').text($('#title').text().substr(0,5));
           // 17 charcters + .......  
          $('#title').append('...');

    $('#title').hover(function(){
  		$('#title').text($cut2);

  },
  function(){
  		$('#title').text($cut1);
  		$('#title').append('...');
  }

  );



});  
*/
</script>

<body>
<div id="header">
	<img src="<?php echo base_url("/public/images/title.png"); ?>">
</div>



<div class="content">
	<div class="about_team">

		<h1 id="title">團隊介紹</h1>

		<p>我們是一群來自<br>
		我們是一群來自成大不同領域的專家<br>
		有媲美矽谷人才的工程部<br>
		有擁有梵谷美感的設計部<br>
		有超越太古創意的行銷部<br>
		我們的目標及理念一致<br>
		我們是來自那星星的你我他<br>
		我們擁有驚天動地的超能力與執行力<br>
		專門挖掘與你擦肩而過的生活資訊<br>
		我們是!S.D.情報網!</p>
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



</body>
</html>


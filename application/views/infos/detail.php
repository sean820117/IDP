<link rel="stylesheet" type="text/css" href="<?php echo base_url("/public/css/light.css"); ?>">
<script type="text/javascript" src="<?php echo base_url("/public/js/light.js"); ?>"></script>

<script src="http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php/zh_TW" type="text/javascript"></script><script type="text/javascript">FB.init("<?php echo $appapikey;?>");</script>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=1389269967996525&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="homu">
		<div id="overlay" onclick="overlay_close()" onkeydown="key_esc()">
		</div>
		<center>
				<div id="content_box">
					<div id="content_information">
						<div id="title_block">
							<div id="light_title">
							</div>
						</div>
						<div id="light_content">
						</div>
					</div>
					<div id="content_social">
						<div id="message">
							<div class="fb-comments" data-width="450px" data-href="http://merry.ee.ncku.edu.tw/~sean820117/sdinfo/infos" data-numposts="5" data-colorscheme="light"></div>
						</div>
					</div>
				</div>
		</center>
</div>

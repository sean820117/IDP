$(document).ready(function () {

	var position = $("#bigp").offset();
	var x = position.left;
	$("#cover").css("margin-left",x);

	var mouseX = 0;
	var relMouseX = 400;
	var xp = 400;

	$(".about_member").on('mouseleave',function(){
		clearInterval(loop1);
		picWidth=$("#bigp").width();
		 
		xp = 400;
		mouseX = 0;
		relMouseX = 400;
		if($("#name").text() == "鄭祖燁")
		{
			$("#cover").animate({"width": (picWidth/2+20)+"px","margin-left":x}, "slow");
		}
		else if($("#name").text() == "羅敏慈")
		{
			$("#cover").animate({"width": (picWidth/2+20)+"px","margin-left":x}, "slow");
		}
		else
		{
  			$("#cover").animate({"width": picWidth/2+"px","margin-left":x}, "slow");
		}
		$("#bigp").animate({"margin-left":0},"slow");
		$(".text_intro").animate({"opacity":1},"slow");
		
	});
	var sx,sy;
	frameRate =  30;
	timeInterval = Math.round( 1000 / frameRate );

	$(".about_member").mousemove(function (e) 
	{
		/*cursor position*/
		sx = e.pageX + document.documentElement.scrollTop;
		sy = e.pageY + document.documentElement.scrollLeft;
			
		// raw mouse position
		mouseX = e.pageX;

		// mouse position relative to face div
		relMouseX = mouseX - $("#bigp").offset().left;
	});
	$(".about_member").mouseenter(function(){
		loop1=setInterval(function (e) 
		{
			/*browser width*/
			var $framewidth = innerWidth;
			var $tmpWidth = $framewidth/2;
			picWidth=$("#bigp").width()/2;
			picTop=$("#bigp").position().top;
			picBottom=$("#bigp").height()+picTop;
			/*enabled cursor area*/
			xp += (relMouseX - xp) / 12;
				if(sx>($tmpWidth-9))
				{
					var tmp = $tmpWidth-9;
					var color_width = (picWidth) + (picWidth-xp)*0.4;
					$("#cover").css({width:color_width});
					$(".left_intro").css({opacity:1-(xp-picWidth)*2/picWidth});
					$(".right_intro").css({opacity:1-(picWidth-xp)*2/picWidth});
					$("#cover").css("margin-left",x-(xp-picWidth)/4);
					$("#bigp").css("margin-left",-(xp-picWidth)/2);

				}
				else if(sx<($tmpWidth-9))
				{
					var tmp = $tmpWidth-9;
					var color_width = (picWidth) - (xp-picWidth)*0.4;
					$("#cover").css({width:color_width});
					$(".right_intro").css({opacity:1-(picWidth-xp)*2/picWidth});
					$(".left_intro").css({opacity:1-(xp-picWidth)*2/picWidth});
					$("#cover").css("margin-left",x+(picWidth-xp)/4);
					$("#bigp").css("margin-left",(picWidth-xp)/2);
				}
		},timeInterval);
	});
	
	$( window ).resize(function() {
		position = $("#bigp").offset();
		x = position.left;
		picWidth=$("#bigp").width();
	  $("#cover").css("margin-left",x);
	});


});


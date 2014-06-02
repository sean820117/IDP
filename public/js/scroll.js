var count = 0;
var state;
function dt(click,scroll)
{
	if(count == 0 && scroll == 0)
	{
		count++;
		switch(click)
		{
			case 1:
				scroll_position = 0;
				state = 1;
				break;
			case 2:
				scroll_position = $("#top_animation").height();
				state = 2;
				break;
			case 3:
				scroll_position = $("#top_animation").height()*2;
				state = 3;
				break;
		}	
		$("body").animate({
			scrollTop:scroll_position
		},1000).promise().done(function(){
			count = 0;
		});
	}
}
 var count2 = 0;

$(document).ready(function(){
  	$("body").mousewheel(function(event, delta)
  	{
  		if(count2 == 0)
  		{
  			count2++;

	  		if(delta < 0 && $("body").scrollTop() < ($("#top_animation").height()*2))
	  		{
	  			$("body").animate({
				scrollTop: $("body").scrollTop()+$("#top_animation").height()
				},1000).promise().done(function(){
					count2 = 0;
				});
	  		}
	  		else if(delta > 0 && $("body").scrollTop() >= 0)
	  		{
	  			$("body").animate({
				scrollTop: $("body").scrollTop()-$("#top_animation").height()
				},1000).promise().done(function(){
					count2 = 0;
				});
	  		}
	  		else{
	  			count2 = 0;
	  		}
  		}
  	})

  	setInterval(function(){
  		var scroll_cur = $("body").scrollTop();

  		if(scroll_cur >= 0 && scroll_cur < $("#top_animation").height())
  		{
  			$("#dot_block1").addClass("current");
  			$("#dot_block2").removeClass("current");
  			$("#dot_block3").removeClass("current");
  		}
  		else if(scroll_cur >= $("#top_animation").height() && scroll_cur < ($("#top_animation").height()*2))
  		{
  			$("#dot_block1").removeClass("current");
  			$("#dot_block2").addClass("current");
  			$("#dot_block3").removeClass("current");
  		}
  		else if(scroll_cur >= ($("#top_animation").height()*2-100) && scroll_cur < ($("#top_animation").height()*3))
  		{
  			$("#dot_block1").removeClass("current");
  			$("#dot_block2").removeClass("current");
  			$("#dot_block3").addClass("current");
  		}


  	}, 100);



});
$(document).ready(function () {
	
	$(".cal_show").click(function(){
		if(!$(this).hasClass("close_calendar"))
		{
			$("#calendar").animate({right:'0px'});
		 	$(this).addClass("close_calendar");
		}
		else 
		{
			$("#calendar").animate({'right': 70-$("#calendar").width()});
		 	$(this).removeClass("close_calendar");
		}
	});	

	$(".add_calendar").hover(function() {
		$(this).next().animate({opacity:"0.5"},200);
	});

	$(".add_calendar").mouseleave(function() {
		$(this).next().animate({opacity:"1"},200);
	});
	setTimeout(function() {
	 		$("#calendar").animate({'right': 70-$("#calendar").width()});
	 	},200);
	

});
function add_calendar(date,info_id)
{
	 	$("#day_"+date).append("<img class='small_sticky' src='http://merry.ee.ncku.edu.tw/~sean820117/sdinfo/public/images/small_sticky.png'>");
	 	$(".cal_show").click();
	 	$("#cal_blocks_container").scrollTop(70*(parseInt(date)-4));
	 	$.ajax({
	 		url: 'http://merry.ee.ncku.edu.tw/~sean820117/sdinfo/calendars/set_event/'+info_id,
	 		type: 'GET',
	 		data: { userid : theUser},
	 	})
	 	.done(function() {
	 		console.log("success");
	 	})
	 	.fail(function() {
	 		console.log("error");
	 	})
	 	.always(function() {
	 		console.log("complete");
	 	});
	 	
	 	setTimeout(function() {
	 		$(".close_calendar").click();
	 	},2000);
}


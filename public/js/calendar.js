$(document).ready(function () {
	$("#cal_top").click(function(){
		if(!$(this).hasClass("close_calendar"))
		{
			$("#calendar").animate({bottom:"37px"});
			$("#cal_top").attr("src","http://merry.ee.ncku.edu.tw/~sean820117/sdinfo/public/images/cal_top_reverse.png");
		 	$(this).addClass("close_calendar");
		}
		else 
		{
			$("#calendar").animate({bottom:"-67px"});
			$("#cal_top").attr("src","http://merry.ee.ncku.edu.tw/~sean820117/sdinfo/public/images/cal_top.png");
		 	$(this).removeClass("close_calendar");
		}
	});	

	$(".add_calendar").hover(function() {
		$(this).next().animate({opacity:"0.5"},200);
	});

	$(".add_calendar").mouseleave(function() {
		$(this).next().animate({opacity:"1"},200);
	});


});
function add_calendar($date)
{
	 	$("#day_"+$date+"_1").append("<img src='http://merry.ee.ncku.edu.tw/~sean820117/sdinfo/public/images/small_sticky.png'>");
	 	$("#cal_top").click();
	 	setTimeout(function() {
	 		$(".close_calendar").click();
	 	},2000);
}


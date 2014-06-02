$(document).ready(function() {


});


function show_infos(id)
{
	//$(".fb-comments").attr("data-href","http://merry.ee.ncku.edu.tw/~sean820117/sdinfo/infos"+id);
	//$("#homu").fadeIn();
	/*
	$("body").append('\
		<div id="biggest_block">\
		<div id="overlay" onclick="overlay_close()" onkeydown="key_esc()">\
		</div>\
		<center>\
				<div id="content_box">\
					<div id="content_information">\
						<div id="title_block">\
							<div id="light_title">\
							</div>\
						</div>\
						<div id="light_content">\
						</div>\
					</div>\
					<div id="content_social">\
						<div id="message">\
							\
						</div>\
						<div id="leave_ms">\
							<input type="text" id="input_text" placeholder="Write a comment...">\
							\
						</div>\
					\
					</div>\
				</div>\
		</center>\
		<div>\
	');
	*/
	//viewportwidth = window.innerWidth;
    //viewportheight = window.innerHeight;
    //$("#overlay").css("min-height",500+100+20);
    //$("body").css("overflow","hidden");

	$.ajax({
		url:'http://merry.ee.ncku.edu.tw/~sean820117/sdinfo/index_get_data/'+id,
		type: "GET",
		dataType: "json",
		data:{eventID:id},
	})
	.done(function(msg) {  
		$(".fb-comments").attr("data-href","http://merry.ee.ncku.edu.tw/~sean820117/sdinfo/infos"+id); 
		$("#homu").fadeIn();
		$("#overlay").css("min-height",500+100+20);
    	$("body").css("overflow","hidden");
		$("#light_title").html(msg.title+"<br>日期:"+msg.start_date);
		$("#light_content").html(msg.content);
	 	console.log(msg);
	 	})
	 	.fail(function() {
	 		console.log("error");
	 	})
	 	.always(function() {
	 		console.log("complete");
	 	});
	/*
	$("#overlay,#content_box").css("opacity","0");
	$("#content_box").animate({
		opacity:"1"
	},500);
	$("#overlay").animate({
		opacity:"0.9"
	},500);
	*/
	$("#input_text").keydown(function(event){
		if(event.which == 13)
  		$("#message").append('5566');
	});
}

function overlay_close()
{
	$("#biggest_block,#homu").animate({
		opacity : "0"
	},500,function(){
		$("#biggest_block").css("display","none");
		$("#homu").css("display","none");
		$("body").css("overflow","auto");
		$("#biggest_block,#homu").css("opacity","1");
	});
}

function key_esc()
{

}


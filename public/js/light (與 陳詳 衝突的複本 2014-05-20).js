$(document).ready(function() {
	$("#overlay,#content_box").keydown(function(event) {
		if(event.which == 27)
		{
			overlay_close();
		}
	});
});

function show_infos(id)
{
	var hoho = '';
	$.ajax({
		url:'http://merry.ee.ncku.edu.tw/~sean820117/sdinfo/index_get_data/'+id,
		type:'POST',
		data:{eventID:id},
	})
	.done(function(msg) {
		    hoho = msg;
	 		console.log(msg);
	 	})
	 	.fail(function() {
	 		console.log("error");
	 	})
	 	.always(function() {
	 		console.log("complete");
	 	});
	 	

	 	

	$("body").append('\
		<div id="overlay" onclick="overlay_close()" onkeydown="key_esc()">\
		</div>\
		<center>\
				<div id="content_box">\
					<div id="content_information">\
					</div>\
					<div id="content_social">\
						<div id="message">'+hoho+'</div>\
						<div id="leave_ms">\
							<input type="text" id="input_text"  placeholder="Write a comment...">\
							\
						</div>\
					\
					</div>\
				</div>\
		</center>\
	');
	$("#overlay,#content_box").css("opacity","0");
	$("#content_box").animate({
		opacity:"1"
	},500);
	$("#overlay").animate({
		opacity:"0.9"
	},500);
}

function overlay_close()
{
	$("#overlay,#content_box").animate({
		opacity:"0"
	},500,function(){
		$("#overlay,#content_box").remove();
	});

}

function key_esc()
{

}
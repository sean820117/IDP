$(document).ready(function() {
	obj1 = new Object();
	info_id = '';
	$(".btn_invite").click(function(e) {
		e.preventDefault();
		info_id = $(this).parent().find('input[type=hidden]').val();
		$(".invite_block").fadeIn();
		$.ajax({
			url: 'http://merry.ee.ncku.edu.tw/~sean820117/sdinfo/userlist',
			type: 'GET',
			dataType: 'json',
		})
		.done(function(msg) {
			obj1 = msg;
			pClone = $(".invite_list p").first().clone().html('');
			imgClone = $(".invite_list p").first().find('img').clone();
			checkboxClone = $(".invite_list p").first().find('input').clone();
			$(".invite_list").text("");
			for( var i in msg ) {
				if (i > 0) {
					pClone = $(".invite_list p").first().clone().html('');
					imgClone = $(".invite_list p").first().find('img').clone();
					checkboxClone = $(".invite_list p").first().find('input').clone();
				};
				
				imgClone.attr('src', 'https://graph.facebook.com/'+msg[i].id+'/picture?type=square');
				checkboxClone.attr('id',msg[i].id);
				pClone.append(checkboxClone).append(imgClone).append(msg[i].name);
   	 			$(".invite_list").append(pClone);
			}
			console.log(msg);
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	});

	$("#send_invite").click(function(event) {
		event.preventDefault();
		$(".invite_list p").find('input:checked').each(function( index ) {
		  console.log($( this ).attr('id'));

		  $.ajax({
	 		url: 'http://merry.ee.ncku.edu.tw/~sean820117/sdinfo/calendars/set_event/'+info_id,
	 		type: 'GET',
	 		data: { userid : $( this ).attr('id')},
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
		});
		$("#biggest_block").hide();

	});

});
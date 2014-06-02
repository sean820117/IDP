$(document).ready(function () {
	$("select#categorymake").change(function (e) {
		parent = $(this).find('option:selected').val();

		$.ajax({
			url: baseUrl+'/'+parent,
			type: 'GET',
			dataType: 'json',
		})
		.done(function(msg) {
			for( var i in msg ) {
				op = document.createElement('option');
				op.val(msg[i].category_name);
				op.text(msg[i].chinese);
				op.appendTo($(this));
			}
			console.log("success");
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	});
});
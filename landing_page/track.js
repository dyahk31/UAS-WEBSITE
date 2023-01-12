$(function(){
	$('#form-tracking').submit(function(e){
		e.preventDefault();

		var data = $(this).serializeArray();

		$.post({
			url: 'tampilan tracking.php',
			data: data,
			success: function(value){
				$('#detail').html(value);
			}
		})

	})
})

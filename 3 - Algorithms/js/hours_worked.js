$(function() {
	
	$('#calculate_payment').click(function(e) {
		calculate();
	});
	
});

function calculate(){
	
	var hours = $('#hours').val();
	var rate = $('#rate').val();

	if(hours > 0 && rate >= 0){

		$('#error').hide();
		$('#result').show();
		
		$.ajax({
		 	type : "POST",
		 	url : "/algorithms_controller",
		 	async : false,
		 	data: { option:'hours_worked', hours: hours, rate:rate },
		 	success : function(data) {
		 		
		 		var result = jQuery.parseJSON(data);
		 		
		 		$('#result').html('Payment: '+result.payment);
		 	}
		});

	}else{

		$('#result').hide();
		$('#error').show();

	}

}
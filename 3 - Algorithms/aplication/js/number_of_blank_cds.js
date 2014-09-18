$(function() {
	
	$('#calculate_cds').click(function(e) {
		calculate();
	});
	
});

function calculate(){
	
	var gigabytes = $('#gigabytes').val();

	if(gigabytes > 0){

		$('#error').hide();
		$('#result').show();
		
		$.ajax({
		 	type : "POST",
		 	url : "/algorithms_controller",
		 	async : false,
		 	data: { option:'number_of_blank_cds', gigabytes: gigabytes },
		 	success : function(data) {
		 		
		 		var result = jQuery.parseJSON(data);
		 		
		 		$('#result').html('Number of blank CDs: '+result.cds);
		 	}
		});

	}else{

		$('#result').hide();
		$('#error').show();

	}

}
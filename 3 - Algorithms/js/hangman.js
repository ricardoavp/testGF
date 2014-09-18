$(function() {
	
	$('#view_animal_list').click(function(e) {
		$('#animal_list').show();
		$('#view_animal_list').hide();
	});
	
});

function press_the_letter(letter){

	var word = $('#word_hidden').val();
	var word_partial = $('#word_partial').val();
	var faults = $('#faults').val();
	
	$.ajax({
		 	type : "POST",
		 	url : "/algorithms_controller",
		 	async : false,
		 	data: { option:'hangman', word: word, faults:faults, letter:letter, word_partial:word_partial},
		 	success : function(data) {
		 		
		 		var result = jQuery.parseJSON(data);
		 		
		 		$('#word').html(result.word_partial);
		 		$('#word_partial').val(result.word_partial);
		 		
		 		$('#view_faults').html(result.faults);
		 		$('#faults').val(result.faults);

		 		if(result.faults >= 5){
		 			$('.btn-default').hide();
		 			$('#word').html($('#word_hidden').val());
		 			$('#word').addClass('red');
		 			$('#alert-loser').show();
		 		}else{
		 			if(result.won == 1){
						$('.btn-default').hide();
						$('#alert-won').show();
					}else{
						$('#alert-won').hide();
						$('.btn-default').show();
					}

					if(result.repeat_letter == 1){
						$('#alert-repeat').show();
					}else{
						$('#alert-repeat').hide();
					}
		 		}

		 		

		 	}
	});





/*

	if(hours > 0 && rate >= 0){

		$('#error').hide();
		$('#result').show();
		
		

	}else{

		$('#result').hide();
		$('#error').show();

	}*/

}
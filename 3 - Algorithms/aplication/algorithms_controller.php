<?php

include("algorithms_model.php");

$control = new algorithms();

if($_POST['option'] == "number_of_blank_cds"){

	$result = $control->calculate_number_of_blank_cds($_POST['gigabytes']);
	print_r(json_encode($result));

}elseif($_POST['option'] == 'hours_worked'){

	$result = $control->calculate_the_payment_of_an_employee($_POST['hours'],$_POST['rate']);
	print_r(json_encode($result));

}elseif($_POST['option'] == 'hangman'){

	$result = $control->play_hangman($_POST['word'],$_POST['faults'],$_POST['letter'],$_POST['word_partial']);
	print_r(json_encode($result));

}

?>
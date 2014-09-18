<?php

class algorithms
{


	public function calculate_number_of_blank_cds($gigabytes){
		
		$backup_megabytes = $gigabytes * 1024;
		$number_of_cds = $backup_megabytes / 700;

		return array('cds' => ceil($number_of_cds));
	}

	public function calculate_the_payment_of_an_employee($hours, $rate){

		setlocale(LC_MONETARY, 'en_US');

		$payment = 0;

		if($hours > 40){

			$working_hours = 40;
			$outside_work_hours = $hours - 40;

		}else{

			$working_hours = $hours;
			$outside_work_hours = 0;

		}

		$payment = ($working_hours * $rate) + ($outside_work_hours * ($rate * 1.5));

		return array('payment' => '$ '.number_format($payment,2,'.',','));

	}

	public function play_hangman($word, $faults, $letter, $word_partial){
		//echo $word.' + '.$faults.' + '.$letter.' + '.$word_partial;
		$result = array('word'=>'', 'faults' => 0, 'word_partial' => '', 'won' => 0, 'repeat_letter' => 0);

		$word_letters = str_split($word);
		$word_partial_letters = str_split($word_partial);

		if (strpos($word,$letter) !== false) {
		    foreach ($word_letters as $key => $value) {
				if($value == $letter){
					if($word_partial_letters[$key] == '-'){
						$word_partial_letters[$key] = $letter;
					}else{
						$result['repeat_letter'] = 1;
					}
					
				}

				$result['faults'] = $faults;
				$result['word_partial'] = implode('', $word_partial_letters);
				
				if($word == implode('', $word_partial_letters)){
					$result['won'] = 1;
				}else{
					$result['won'] = 0;
				}
			}
		}else{

			$result['faults'] = $faults + 1;
			$result['word_partial'] = $word_partial;
			$result['won'] = 0;
			$result['repeat_letter'] = 0;

		}

		return $result;
		

	}


}
?>
<?php
function squareOfSums($number) {
	$result = 1;
	$second_number = 2;

	for($i = 1; $i < $number; $i++){
		$result += $second_number;
		$second_number = 1 + $second_number;
	}
	return pow($result, 2);
}

function sumOfSquares($number) {
	$result = 1;
	$second_number = 2;

	for($i = 1; $i < $number; $i++){
		$result += pow($second_number, 2);
		$second_number = 1 + $second_number;
	}
	return $result;
}

function difference($number) {
	return squareOfSums($number) - sumOfSquares($number);
}
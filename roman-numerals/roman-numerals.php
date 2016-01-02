<?php //9:10
function toRoman($number) {
	$numerals = [
		1    => "I",
		5    => "V",
		10   => "X",
		50   => "L",
		100  => "C",
		500  => "D",
		1000 => "M",
	];

	$result = "";

	foreach ($numerals as $numeral => $roman_numeral) {
		if ($number % $numeral === 0 && $number >= $numeral) {
			$times = $number / $numeral;
			do {
				$result .= $numerals[$numeral];
				$times = $times - $numeral;
			} while ($times > 0);
		}
	}

	return $result;
}
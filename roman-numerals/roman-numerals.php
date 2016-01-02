<?php //9:10
function toRoman($number) {
	$numerals = [
		["value" => 1,    "roman_numeral" => "I"],
		["value" => 5,    "roman_numeral" => "V"],
		["value" => 10,   "roman_numeral" => "X"],
		["value" => 50,   "roman_numeral" => "L"],
		["value" => 100,  "roman_numeral" => "C"],
		["value" => 500,  "roman_numeral" => "D"],
		["value" => 1000, "roman_numeral" => "M"],
	];

	$result = "";

	foreach ($numerals as $key => $roman_numeral) {
		$current_roman_numeral_value = $numerals[$key]["value"];
		$next_roman_numeral_value = -1;
		if (isset($numerals[$key + 1]["value"])) {
			$next_roman_numeral_value = $numerals[$key + 1]["value"];
		}

		if ($number % $current_roman_numeral_value === 0 &&
			$number >= $current_roman_numeral_value) {

			if ($next_roman_numeral_value !== -1 &&
			$number != $next_roman_numeral_value - 1) {
				$times = $number / $current_roman_numeral_value;
				do {
					$result .= $roman_numeral["roman_numeral"];
					$times = $times - $current_roman_numeral_value;
				} while ($times > 0);
			}
			else {

			}
		}
	}

	return $result;
}
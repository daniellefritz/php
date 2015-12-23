<?php
function raindrops($num_of_raindrops) {
	$prime_factors = [
		'Pling' => 3,
		'Plang' => 5,
		'Plong' => 7,
	];

	$result = '';
	$is_divisible_by_prime = FALSE;

	foreach ($prime_factors as $key => $value) {
		if (($num_of_raindrops % $value) === 0) {
			$result .= $key;
			$is_divisible_by_prime = TRUE;
		}
	}

	return $is_divisible_by_prime ? $result : strval($num_of_raindrops);
}
?>
<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function distance($a, $b) {

	$calculatedDistance = 0;
	$stringA = str_split($a);
	$stringB = str_split($b);

	if (count($stringA) != count($stringB)) {
		throw new InvalidArgumentException('DNA strands must be of equal length.');
	}

	foreach ($stringA as $key => $value) {
		if (strcmp($value, $stringB[$key]) != 0) {
			$calculatedDistance++;
		}
	}

	return $calculatedDistance;
}

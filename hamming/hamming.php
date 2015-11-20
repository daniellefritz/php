<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
// I received feedback on this on the exercism site, use that feedback to update this
//

function distance($a, $b) {

    if (strlen($a) != strlen($b)) {
        throw new InvalidArgumentException('DNA strands must be of equal length.');
        return false;
    }

	$calculatedDistance = 0;

	$length = strlen($a);
	for ($i=0; $i<$length; $i++) {
	    if($a[$i] != $b[$i]){
	    	$calculatedDistance++;
	    }
	}

	return $calculatedDistance;
}

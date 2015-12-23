<?php
function toRna($dna_nucleotides){
	return strtr($dna_nucleotides, "GCTA", "CGAU");;
}
?>
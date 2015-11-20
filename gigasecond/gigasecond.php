<?php
function from(DateTime $date){
	$birthdayDate = $date->modify('+1000000000 second');

	return $birthdayDate;
}
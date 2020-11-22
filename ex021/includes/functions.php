<?php
/***********  Function List  ***********/

/**
 * Adds two numbers
 *
 * @param float   $a The starting number
 * @param float   $b The number to add
 * 
 * @return float   The total of the two parameters
 */ 

function add_two_nums ($a, $b) {
	//return the sum of the two numbers
	return $a + $b;
}

/**
 * Match String Lengths
 * Returns true if strings match in length
 *
 * @param string   $a Initial String
 * @param string   $b Comparison String
 * 
 * @return bool   True if strings match in length otherwise false
 */ 
 
 function match_str_len ($a, $b) {
 	// If the length of the strings are the same
 	if (strlen($a) == strlen($b)) {
 		// return true
 		return true;
 	} else {
 		// If not return false
 		return false;
 	}
 }

?>
<?php
/***********  Function List  ***********/
 
/**************************************************************************************
*                                    Exercise 022a                                    *
**************************************************************************************/

/**
 * Match String Lengths
 * Returns true if strings match in length
 *
 * @param string   $a Initial String
 * @param string   $b Comparison String
 * 
 * @return bool   true if strings match in length otherwise false
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
 
 
/**************************************************************************************
*                                    Exercise 022b                                    *
**************************************************************************************/
/* Notes: Write a function called "cube" to return the cube of a number. 
The cube of $x is
	$x * $x * $x
*/

/**
 * Cube a number
 *
 * @param float   $a The number to be cubed
 * 
 * @return float  The cube of the parameter
 */

// Write your code here

 
 
/**************************************************************************************
*                                    Exercise 022c                                    *
**************************************************************************************/
/* Notes: Write a function called "is_odd_len" to check if a string has an odd number
of characters. If the string passed does have an odd number of characters return true 
- if even return false.
*/

/**
 * Check a string length for odd number of characters
 *
 * @param string   $a The string to be checked
 * 
 * @return bool  True if odd number of characters, false if even
 */
 
// Write your code here


?>
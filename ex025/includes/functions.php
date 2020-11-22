<?php
/***********  Function List  ***********/

/**************************************************************************************
*                                    Exercise 025a                                    *
**************************************************************************************/
/* Notes: Write a function called "in_range" that checks if one number is within a 
given range of another number. To make this clearer look at the following examples...

Functional prototype
	in_range ($ordinal, $check, $range)
	
	Example 1
	in_range (10, 8, 30)
	
	Our starting point is 10
	Our range is 30%
	30% of 10 is 3
	So our range is from 7 (10-3) to 13 (10+3)
	Is 8 between 7 and 13?
	Yes - so we return true
	
	Example 2
	in_range (1000, 725, 25)
	
	Our starting point is 1000
	Our range is 25%
	25% of 1000 is 250
	So our range is from 750 (1000-250) to 1250 (1000+250)
	Is 725 between 750 and 1250
	No - so we return false


*/

/**
 * Checks if one number within a given % range of another
 *
 * @param float   $ordinal The starting point for the test
 * @param float   $check The number to check if in range
 * @param float   $range a percentage value for the range
 * 
 * @return bool  Returns true if in range and false if not
 */

// Write your code here


?>
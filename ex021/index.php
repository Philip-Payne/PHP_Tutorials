<?php
	include "includes/functions.php";
?>
<!doctype html>
<html lang="en">
<head>

	<title>Cloud Dev Exercise 021 - Using user defined functions</title>
	<meta charset="utf-8">

</head>
<body>

<h1>Using user defined functions</h1>


<!-- **********************************************************************************
*                                    Exercise 021a                                    *
*********************************************************************************** -->
<h2>021a Using a "User Defined Function"</h2>

<!--
Some user defined functions have been added to the file /ex021/includes/functions.php
Open this file in an editor and look at the contents.
NOTE: The function.php file has been included at the top of this page so that we can 
use the functions.

Bellow are some basic example of using the user defined functions in functions.php
-->

<?php
// adding two numbers
echo add_two_nums (4, 5);

// In an echo statement
$numa = 3.8;
$numb = 4.9;
echo "<p>The sum of $numa and $numb is " . add_two_nums($numa, $numb) . "</p>\n";

// In an if statement
if (add_two_nums($numa, $numb) > 6) {
	echo "<p>Wow, that's big.</p>\n";
} else {
	echo "<p>Gosh, that's tiny.</p>\n";
	}
?>


<!-- **********************************************************************************
*                                    Exercise 021b                                    *
*********************************************************************************** -->
<h2>021b User Defined Function in an 'if' statement</h2>

<?php
/* Use the add_two_nums function() (see functions.php) to add the length of your first
name to the length of your surname (HINT: Use strlen())
If the total length is less than or equal to 15 echo out
	"I have a short name"
If the total length is greater than 15 echo out
	"I have a long name"
*/

// Write your code here...

?>


<!-- **********************************************************************************
*                                    Exercise 021c                                    *
*********************************************************************************** -->
<h2>021c True or false</h2>

<?php
/* Use the match_str_len() function (see functions.php) to check if two strings 
have the same length. If the strings match in length echo out a statement to say
that they match, if they do not match in length echo out a different statement to say so.
*/

// Check to see if your first name and surname match in length e.g.
$firstname = "Fred";
$surname = "Smith";

// Write your code here...

?>


</body>
</html>
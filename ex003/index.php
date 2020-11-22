<!doctype html>
<html lang="en">
<head>

	<title>Cloud Dev Exercise 003 - Numeric Variables</title>
	<meta charset="utf-8">

</head>
<body>

<h1>Numeric Variables</h1>

<p>Files to edit /ex003/index.php</p>


<!-- **********************************************************************************
*                                    Exercise 003a                                    *
*********************************************************************************** -->
<h2>003a Adding numbers</h2>

<?php
/* Write a line of code to add together the three variables $a, $b and $c and
store the total in a variable called $result */

$a = 10;
$b = 17;
$c = 3;

// Write your code here...


echo "<p>The total of $a, $b and $c is $result</p>\n";
echo "<p>$a + $b + $c = $result</p>\n";
?>


<!-- **********************************************************************************
*                                    Exercise 003b                                    *
*********************************************************************************** -->
<h2>003b Area of a circle</h2>

<?php
/* Write a line of code to calculate the area of a circle
	The area is given by multiplying pi by the radius squared
 */

$pi = 3.141593;
$radius = 5;

// Write your code here...


echo "<p>The area of a circle with radius $radius is $area</p>\n";
?>


<!-- **********************************************************************************
*                                    Exercise 003c                                    *
*********************************************************************************** -->
<h2>003c Area of a triangle</h2>

<?php
/* Write a line of code to calculate the area of a triangle
	The area is given by half the base times the height
 */

$height = 5;
$base = 7;

// Write your code here...


echo "<p>The area of a triangle with base $base and height $height is $area</p>\n";

/* NOTE: We have used the variable $area again in this section - we have overwritten
the value calculated for the area of the circle with the value for the area of the 
triangle */
?>


<!-- **********************************************************************************
*                                    Exercise 003d                                    *
*********************************************************************************** -->
<h2>003d The Modulus Operator</h2>

<?php
/* The modulus operator (%) returns the remainder of a division. Write a line of code
to divide the numerator by the divisor and return the remainder.
 */

$numerator = 17;
$divisor = 10;

// Write your code here...


echo "<p>When $numerator is divided by $divisor the remainder is $remainder</p>\n";
?>


</body>
</html>
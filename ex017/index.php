<!doctype html>
<html lang="en">
<head>

	<title>Cloud Dev Exercise 017 - min & max functions</title>
	<meta charset="utf-8">

</head>
<body>

<h1>min() &amp; max() functions</h1>

<p>Files to edit /ex017/index.php</p>


<!-- **********************************************************************************
*                                    Exercise 017a                                    *
*********************************************************************************** -->
<h2>017a Basic min() &amp; max() functions</h2>

<?php
/* Below is an example of the basic usage of the min() and max() functions which return
the minimum and maximum values in an array respectively.
*/
// The array we will use
$age = array (17, 25, 19, 11, 25, 29, 10);

$minValue = min($age);
$maxValue = max($age);

echo "<p>The minimum value in the array is $minValue and the maximum value
		in the array is $maxValue</p>\n";
?>


<!-- **********************************************************************************
*                                    Exercise 017b                                    *
*********************************************************************************** -->
<h2>017b Going to the pub (again)</h2>

<?php
/* Write code to check if the minimum value in the array is equal to or above 18
Based on the result echo out either...
	"everyone can go to the pub"
or
	"Some people cannot go to the pub"
*/
// The array we will use
$age = array (17, 25, 19, 11, 25, 29, 10);

// Write your code here

?>


<!-- **********************************************************************************
*                                    Exercise 017c                                    *
*********************************************************************************** -->
<h2>017c min if max</h2>

<?php
/* Write code to echo out the minimum value in the age array only if the maximum value 
is less than 30
*/
// The array we will use
$age = array (17, 25, 19, 11, 25, 29, 10);

// Write your code here

?>


</body>
</html>
<?php
	include "includes/functions.php";
?>
<!doctype html>
<html lang="en">
<head>

	<title>Cloud Dev Exercise 022 - Writing user defined functions</title>
	<meta charset="utf-8">

</head>
<body>

<h1>Writing user defined functions</h1>

<p>Open this file in a browser but edit /ex022/includes/functions.php</p>


<!-- **********************************************************************************
*                                    Exercise 022a                                    *
*********************************************************************************** -->
<h2>022a Writing a "User Defined Function"</h2>

<!--
Do not edit this file - edit /ex022/includes/functions.php
-->

<?php
/* Open the file /ex022/includes/functions.php and look at the first function that has 
been written for you. Note how the function is commented. You MUST use tis style of
commenting for all your functions so that their function can be understood by any user.

In the following exercises you should write your own functions as indicated in 
/ex022/includes/functions.php. Some code is provided in this page to check your work.
*/
?>


<!-- **********************************************************************************
*                                    Exercise 022b                                    *
*********************************************************************************** -->
<h2>022b The cube() user defined function</h2>

<!--
Do not edit this file - edit /ex022/includes/functions.php
-->

<?php
$myNum = 9;
echo "<p>The cube of $myNum is " . cube($myNum) . ".</p>\n"; //729
$someNum = 3.14;
echo "<p>The cube of $someNum is " . cube($someNum) . ".</p>\n"; //30.959144

if (cube(2) != 8) {
	echo "<p>Something is wrong</p>\n";
} else {
	echo "<p>Your function is looking good!</p>\n";
}
?>


<!-- **********************************************************************************
*                                    Exercise 022c                                    *
*********************************************************************************** -->
<h2>022c The is_odd_len() user defined function</h2>

<!--
Do not edit this file - edit /ex022/includes/functions.php
-->

<?php
$firstname = "Fred";
$surname = "Smith";

if (is_odd_len($firstname)) {
	echo "<p>$firstname has an odd number of characters</p>\n";
} else {
	echo "<p>$firstname has an even number of characters</p>\n";
}

if (is_odd_len($surname)) {
	echo "<p>$surname has an odd number of characters</p>\n";
} else {
	echo "<p>$surname has an even number of characters</p>\n";
}
?>


</body>
</html>
<!doctype html>
<html lang="en">
<head>

	<title>Cloud Dev Exercise 010 - switch Statements</title>
	<meta charset="utf-8">

</head>
<body>

<h1>switch Statements</h1>

<p>Files to edit /ex010/index.php</p>


<!-- **********************************************************************************
*                                    Exercise 010a                                    *
*********************************************************************************** -->
<h2>010a Basic switch statement</h2>

<?php
/* Below is an example of a switch statement which performs different actions based
on the value assigned to the variable. Change the value of $testVar - what happens?
Set the value of $testVar to 1 and remove the first break statement - what happens?
*/

$testVar = 3;

switch ($testVar) {
	case 1:
		echo "<p>The number is one</p>\n";
		break;
	case 2:
		echo "<p>The number is two</p>\n";
		break;
	case 3:
		echo "<p>The number is three</p>\n";
		break;
	case 4:
		echo "<p>The number is four</p>\n";
		break;
	default:
		echo "<p>The number is less than one or greater than four</p>\n";
		break;
}
?>


<!-- **********************************************************************************
*                                    Exercise 010b                                    *
*********************************************************************************** -->
<h2>010b Days of the week</h2>

<?php
/* Write a switch statement to echo out a different message for each day of the week.
Note: When checking for a string you need to put the case value in quotes like this...
	case "Monday":
*/

$theDay = "Wednesday";

// Write your code here
?>


</body>
</html>
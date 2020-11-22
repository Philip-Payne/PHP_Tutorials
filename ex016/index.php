<!doctype html>
<html lang="en">
<head>

	<title>Cloud Dev Exercise 016 - in_array function</title>
	<meta charset="utf-8">

</head>
<body>

<h1>in_array() function</h1>

<p>Files to edit /ex016/index.php</p>


<!-- **********************************************************************************
*                                    Exercise 016a                                    *
*********************************************************************************** -->
<h2>016a in_array() function</h2>

<?php
/* Below is an example of the basic usage of the in_array() function. The function 
checks to see if the supplied value is in the supplied array.
*/
// The array we will use
$name = array ("Tom", "Richard", "Harry");

$firstCheck = "Harry";

// Check if "Harry" is in the array
if (in_array($firstCheck, $name)) {
	echo "<p>$firstCheck is in the array</p>\n";
} else {
	echo "<p>$firstCheck is <strong>not</strong> in the array</p>\n";
}

$secondCheck = "harry";

// Check if "harry" is in the array
if (in_array(secondCheck, $name)) {
	echo "<p>$secondCheck is in the array</p>\n";
} else {
	echo "<p>$secondCheck is <strong>not</strong> in the array</p>\n";
}

// Check the results in the browser - note the in_array() function is 
// case sensitive.
?>


<!-- **********************************************************************************
*                                    Exercise 016b                                    *
*********************************************************************************** -->
<h2>016b Is it the weekend?</h2>

<?php
/* Write code to decide if today is a week day or a weekend
Use the date() function to find the day of the week
Use an if - else statement to check if the day is in the weekDay array and 
echo an appropriate message.
*/
// The weekDay array
$weekDay = array ("Monday", "Tuesday", "Wednesday", "Thursday", "Friday");

// Write your code here

?>


</body>
</html>
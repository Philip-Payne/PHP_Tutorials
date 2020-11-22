<!doctype html>
<html lang="en">
<head>

	<title>Cloud Dev Exercise 002 - String Variables</title>
	<meta charset="utf-8">

</head>
<body>

<h1>String Variables</h1>

<p>Files to edit /ex002/index.php</p>

<!-- **********************************************************************************
*                                    Exercise 002a                                    *
*********************************************************************************** -->
<h2>002a Using string variables</h2>

<?php
/* Use an echo statement to echo out the text
	My name is Fred
using the variable $name instead of the literal value "Fred" */

$name = "Fred";

// Write your code here...

?>

<!-- **********************************************************************************
*                                    Exercise 002b                                    *
*********************************************************************************** -->
<h2>002b Concatenating Strings</h2>

<?php
/* Use the concatenation operator (.) to echo out
	<p>Tom, Jane and Mary went to the party.</p>
Use the variables rather than typing in the names directly.
Don't forget to add a new line character (\n) at the end of the paragraph
 */

$aName = "Tom";
$anotherName = "Jane";
$aThirdName = "Mary";

// Write your code here...

?>

<!-- **********************************************************************************
*                                    Exercise 002c                                    *
*********************************************************************************** -->
<h2>002c Concatenating Strings variables</h2>

<?php
/* You can combine two strings using the concatenation operator. Write code below 
to join the $beginning and $end variable into one variable called $result */

$beginning = "This is the start";
$end = "and this is the end";

// Write your code here...


echo "<p>$result</p>\n";
?>

<!-- **********************************************************************************
*                                    Exercise 002d                                    *
*********************************************************************************** -->
<h2>002d Using a string variable in a link</h2>

<?php
/* Use the variable to create a link in the following code. 
Don't forget to escape the quotes */

$linkURL = "http://www.bbc.co.uk";

// Uncomment the next line and add the variable in the appropriate place
//echo "<p>Here is a link to the <a href="">BBC</a>.</p>\n";
?>


</body>
</html>
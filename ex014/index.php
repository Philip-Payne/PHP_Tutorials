<!doctype html>
<html lang="en">
<head>

	<title>Cloud Dev Exercise 014 - str_replace - string replace</title>
	<meta charset="utf-8">

</head>
<body>

<h1>str_replace() function</h1>

<p>Files to edit /ex014/index.php</p>


<!-- **********************************************************************************
*                                    Exercise 014a                                    *
*********************************************************************************** -->
<h2>014a Basic str_replace() function</h2>

<?php
/* Below is an example of the str_replace() function. Remember that the general form
is str_replace ($search, $replace, $subject); but it might be easier to remember
str_replace ($needle, $replace, $haystack);
*/

$testString = "Some Text";
$remove = "e";				// We want to get rid of the letter e
$replaceWith = "apple";		// and replace it with apple

echo str_replace ($remove, $replaceWith, $testString);
// The result is "Somapple Tapplext" - it doesn't make any sense, it's just an example.
?>


<!-- **********************************************************************************
*                                    Exercise 014b                                    *
*********************************************************************************** -->
<h2>014b Removing spaces</h2>

<?php
/* We often want to remove the spaces from user input. You can remove all spaces using
the str_replace() function. To do this search for...
	" "
and replace it with...
	""
Write code to echo out the text without spaces
*/

$textWithSpaces = "Here is some text with spaces";

// Write your code here

?>


<!-- **********************************************************************************
*                                    Exercise 014c                                    *
*********************************************************************************** -->
<h2>014c Passing Filenames</h2>

<?php
/* File names on web sites should never contain spaces - we normally use underscores
instead of spaces. It can be useful to produce a list of file names in a human
readable format, where the underscores are replaced with spaces. Write some code to
replace the underscores with spaces in the elements of the following array. You will 
also need to remove the file extension which is ".jpg". You should echo out the result 
for each element.
Hint: Uses a foreach loop
NOTE: This is the last time we will give this hint - If you need to do something
with all the elements in an array you should know to use a foreach loop by now.
*/

$names[] = "This_is_a_filename.jpg";
$names[] = "This_is_another_filename.jpg";
$names[] = "This_is_yet_another_filename.jpg";

// Write your code here

?>


<!-- **********************************************************************************
*                                    Exercise 014d                                    *
*********************************************************************************** -->
<h2>014d Credit card numbers again</h2>

<?php
/* Similar to ex013c - here are some possible credit card numbers in an array. Test
each of the numbers to check that it is exactly 16 characters long once all the spaces 
have been removed. Echo out a message for each number to say if that number is valid
or not valid. 
*/

$ccnum[] = "1234 5678 9101 1121";
$ccnum[] = "5845 5456 454 454";
$ccnum[] = "9931 5422 5445 4642";
$ccnum[] = "4554 5354 6416";
$ccnum[] = "97431 423 6662 5545 4546 3545";
$ccnum[] = "456852 1593 5469 87";

// Write your code here

?>


</body>
</html>
<!doctype html>
<html lang="en">
<head>

	<title>Cloud Dev Exercise 015 - explode function</title>
	<meta charset="utf-8">

</head>
<body>

<h1>explode() function</h1>

<p>Files to edit /ex015/index.php</p>


<!-- **********************************************************************************
*                                    Exercise 015a                                    *
*********************************************************************************** -->
<h2>015a Basic explode() function</h2>

<?php
/* Below is an example of the basic usage of the explode() function. The function 
splits a string based on a delimiter and returns an array of the "exploded" string
*/
// This is the string we are going to split up
$testString = "Here is a test string";
// We split up (explode) the string at each space. $words is an array of the result
$words = explode (" ", $testString);
// Here we are using the var_dump() function as a quick way to see what is in
// the $words array.
var_dump($words);

// Just a line to split up the two examples
echo "<p>*******</p>\n";

// Let's split the original string up every time there is a letter e
$esplit = explode ("e", $testString);
// and use var_dump() again to check the result
var_dump($esplit);
?>


<!-- **********************************************************************************
*                                    Exercise 015b                                    *
*********************************************************************************** -->
<h2>015b String as a list</h2>

<?php
/* You are provided with a variable containing a string. Use the explode function 
to split up the string at every space and then echo the resulting array out as an
unordered list. The list should not contain any punctuation marks
*/

$foo = "To be, or not to be, that is the question.";

// Write your code here...

?>


<!-- **********************************************************************************
*                                    Exercise 015c                                    *
*********************************************************************************** -->
<h2>015c Human readable file names</h2>

<?php
/* You are provided with an array of file names. Each file name begins with a 
number followed by a dash (hyphen). Each file name ends with a file extension. Echo
out the array in an ordered list in human readable form, that is remove the leading
number and dash, the file extension and replace all underscores with spaces.
*/

$bar = array (	"03-A_picture_of_a_cat.jpg",
				"45-An_image_of_a_bridge.gif",
				"107-A_list_of_all_the_students.csv",
				"108-The_report_for_the_assignment.doc",
				"221-A_Picture_of_a_duck.jpeg"
			);

// Write your code here...

?>


<!-- **********************************************************************************
*                                    Exercise 015c                                    *
*********************************************************************************** -->
<h2>015c Check e-mail addresses again</h2>

<?php
/* Previously, we checked that an e-mail address is at least six characters long. Now
you can write code to check that the part of an email address before the @ symbol
is at least 1 character long and the part after the @  symbol is at least 5 characters
long. You are provided with an array of e-mail addresses. Write code to check each
email address as described above and echo out a message for each address stating if
the address is, or is not valid
*/

$eList = array	(	"fred@fred.com",
					"bob@bob.",
					"@bbc.co.uk",
					"bill@bill.co.uk"
				);
				
// Write your code here

?>

</body>
</html>